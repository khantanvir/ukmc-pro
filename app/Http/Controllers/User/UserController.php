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
use App\Models\Teacher\Teacher;
use App\Http\Requests\Teacher\TeacherCreateRequest;

class UserController extends Controller{
    use Service;
    //
    public function user_list(){
        $data['page_title'] = 'User Management';
        $data['usermanagement'] = true;
        $getUserId = Session::get('saved_user_id');
        $data['return_user_id'] = $getUserId;
        $data['user_list_data'] = User::where('id','!=',Auth::user()->id)->where('role','!=','agent')->where('role','!=','subAgent')->orderBy('id','desc')->paginate(1);
        Session::forget('saved_user_id');
        Session::put('current_url',URL::full());
        return view('users/list',$data);
    }
    public function create_teacher(){
        $data['page_title'] = 'User | Create Teacher';
        $data['usermanagement'] = true;
        $data['get_campuses'] = Campus::where('active',1)->get();
        $data['countries'] = Service::countries();
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
        $user->phone = $request->officer_phone;
        $user->slug = Str::slug($request->name,'-');
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
        Session::put('saved_user_id',$user->id);
        Session::flash('success','Admission Officer Created Successfully');
        if(!empty(Session::get('current_url'))){
            return redirect(Session::get('current_url'));
        }else{
            return redirect('user-list');
        }

    }
    //create teacher
    public function create_teacher_post_data(TeacherCreateRequest $request){
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
        $user->role = 'teacher';
        $user->email = $request->email;
        $user->phone = $request->teacher_phone;
        $user->slug = Str::slug($request->name,'-');
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
            $upload_path = 'backend/images/users/teacher/';
            Service::createDirectory($upload_path);
            $image_resize->save(public_path('backend/images/users/teacher/'.$filename));
            $user->photo = 'backend/images/users/teacher/'.$filename;
        }
        $user->password = Hash::make($request->password);
        $user->save();
        //create admission officer now
        $teacher = new Teacher();
        $teacher->campus_id = $request->campus_id;
        $teacher->user_id = $user->id;
        $teacher->teacher_name = $request->teacher_name;
        $teacher->teacher_phone = $request->teacher_phone;
        $teacher->teacher_email = $request->teacher_email;
        $teacher->teacher_alternative_contact = $request->teacher_alternative_contact;
        $teacher->teacher_nid_or_passport = $request->teacher_nid_or_passport;
        $teacher->nationality = $request->nationality;
        $teacher->country = $request->country;
        $teacher->state = $request->state;
        $teacher->city = $request->city;
        $teacher->address = $request->address;
        $teacher->save();
        Session::put('saved_user_id',$user->id);
        Session::flash('success','Successfully Saved Teacher Information!');
        if(!empty(Session::get('current_url'))){
            return redirect(Session::get('current_url'));
        }else{
            return redirect('user-list');
        }
    }
    //user status change
    public function user_status_chnage(Request $request){
        $userData = User::where('id',$request->user_id)->first();
        if(!$userData){
            $data['result'] = array(
                'key'=>101,
                'val'=>'User Data Not Found! Server Error!'
            );
            return response()->json($data,200);
        }
        $msg = '';
        if($userData->active==1){
            $update = User::where('id',$userData->id)->update(['active'=>$request->active]);
            $msg = 'User Deactivated';
        }else{
            $update = User::where('id',$userData->id)->update(['active'=>$request->active]);
            $msg = 'User Activated';
        }
        $data['result'] = array(
            'key'=>200,
            'val'=>$msg
        );
        return response()->json($data,200);
    }
}
