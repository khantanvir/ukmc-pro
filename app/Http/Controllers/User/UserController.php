<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Http\Requests\AdmissionManager\AdmissionManagerRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
Use Illuminate\Support\Facades\Redirect;
use App\Http\Requests\Login\LoginRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\URL;
use PharIo\Manifest\Url as ManifestUrl;
use App\Models\Setting\CompanySetting;
use App\Mail\forgotPasswordMail;
use App\Models\User;
use App\Traits\Service;
use App\Models\Campus\Campus;
use App\Models\Admission\AdmissionOfficer;
use Intervention\Image\Facades\Image;

class UserController extends Controller{
    use Service;
    //
    public function user_list(){
        $data['page_title'] = 'User Management';
        $data['usermanagement'] = true;
        return view('users/list',$data);
    }
    public function create_teacher(){
        $data['page_title'] = 'User | Create Teacher';
        $data['usermanagement'] = true;
        return view('users/create_teacher',$data);
    }
    public function create_admission_manager(){
        $data['page_title'] = 'User | Create Admission Manager';
        $data['usermanagement'] = true;
        $data['get_campuses'] = Campus::where('active',1)->get();
        $data['countries'] = Service::countries();
        return view('users/create_admiossion_manager',$data);
    }
    //create admission manager post data
    public function create_admission_manager_post_data(AdmissionManagerRequest $request){
        //first create user
        $first_name = "";
        $last_name = "";
        $user = new User();
        $user->name = $request->name;
        if($user->name){
            $array = explode(" ",$user->name);
            foreach($array as $key=>$row){
                if($key==0){
                    $first_name = $row;
                }
                if(!empty($row) && $key != 0){
                    $last_name .= $row.' ';
                }
            }
        }
        $user->first_name = $first_name;
        $user->last_name = $last_name;
        $user->role = 'adminManager';
        $user->email = $request->email;
        //photo upload
        $photo = $request->photo;
        if ($request->hasFile('photo')) {
            // if (File::exists(public_path('backend/images/company_logo/'.$company->company_logo))) {
            //     File::delete(public_path('backend/images/company_logo/'.$company->company_logo));
            // }
            $ext = $photo->getClientOriginalExtension();
            $filename = $photo->getClientOriginalName();
            $filename = Service::slug_create($filename).rand(1100, 99999).'.'.$ext;
            $image_resize = Image::make($photo->getRealPath());
            $image_resize->resize(200, 200);
            $upload_path = 'backend/images/users/admission_officer/';
            Service::createDirectory($upload_path);
            $image_resize->save(public_path('backend/images/users/admission_officer/'.$filename));
            $user->photo = 'backend/images/users/admission_officer/'.$filename;
        }
        $user->password = Hash::make($request->password);
        $user->save();
        //create admission officer now
        $officer = new AdmissionOfficer();
        $officer->campus_id = $request->campus_id;
        $officer->user_id = $user->id;
        $officer->officer_name = $request->officer_name;
        $officer->officer_phone = $request->officer_phone;
        $officer->officer_email = $request->officer_email;
        $officer->officer_alternative_contact = $request->officer_alternative_contact;
        $officer->officer_nid_or_passport = $request->officer_nid_or_passport;
        $officer->nationality = $request->nationality;
        $officer->country = $request->country;
        $officer->state = $request->state;
        $officer->city = $request->city;
        $officer->address = $request->address;
        $officer->save();
        Session::flash('success','Admission Officer Created Successfully');
        return redirect('user-list');

    }
}
