<?php

namespace App\Http\Controllers\Agent;

use App\Http\Controllers\Controller;
use App\Http\Requests\Agent\AgentCreateRequest;
use App\Models\Agent\Company;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Traits\Service;
Use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Hash;

class AgentController extends Controller{
    use Service;

    public function agents(){
        $data['page_title'] = 'Agents | List';
        $data['agent'] = true;
        return view('agent/all',$data);
    }
    public function create_agent(){
        $data['page_title'] = 'Agents | Create Agent';
        $data['agent'] = true;
        $data['countries'] = Service::countries();
        return view('agent/create_agent',$data);
    }
    public function agent_details(){
        $data['page_title'] = 'Agents | Details';
        $data['agent'] = true;
        return view('agent/details',$data);
    }
    //create agent post
    public function create_agent_post_data(AgentCreateRequest $request){
        $company = new Company();
        $company->company_name = $request->input('company_name');
        $company->company_registration_number = $request->input('company_registration_number');
        $company->company_establish_date = $request->input('company_establish_date');
        //upload trade license doc here
        $company_doc = $request->company_trade_license;
        if ($request->hasFile('company_trade_license')) {

            $ext = $company_doc->getClientOriginalExtension();
            $doc_file_name = $company_doc->getClientOriginalName();
            $doc_file_name = Service::slug_create($doc_file_name).rand(11, 99).'.'.$ext;
            $upload_path1 = 'backend/images/company/company_trade_license/';
            Service::createDirectory($upload_path1);
            $request->file('company_trade_license')->move(public_path('backend/images/company/company_trade_license/'), $doc_file_name);
            $company->company_trade_license = $upload_path1.$doc_file_name;
        }

        $company->company_trade_license_number = $request->input('company_trade_license_number');
        $company->company_email = $request->input('company_email');
        $company->company_phone = $request->input('company_phone');
        $company->country = $request->input('country');
        $company->state = $request->input('state');
        $company->city = $request->input('city');
        $company->zip_code = $request->input('zip_code');
        $company->address = $request->input('address');
        $company->agreement_title = $request->input('agreement_title');
        //upload agreement doc here
        $agreement_doc_file = $request->agreement_doc_file;
        if ($request->hasFile('agreement_doc_file')) {

            $ext = $agreement_doc_file->getClientOriginalExtension();
            $doc_file_name = $agreement_doc_file->getClientOriginalName();
            $doc_file_name = Service::slug_create($doc_file_name).rand(11, 99).'.'.$ext;
            $upload_path1 = 'backend/images/company/agreement_doc_file/';
            Service::createDirectory($upload_path1);
            $request->file('agreement_doc_file')->move(public_path('backend/images/company/agreement_doc_file/'), $doc_file_name);
            $company->agreement_doc_file = $upload_path1.$doc_file_name;
        }
        $company->agreement_expire_date = $request->input('agreement_expire_date');
        $company->save();
        //create user now
        if($company->id){
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
            $user->role = 'agent';
            $user->email = $request->email;
            $user->phone = $request->agent_phone;
            //slug create
            $url_modify = Service::slug_create($request->name);
            $checkSlug = User::where('slug', 'LIKE', '%' . $url_modify . '%')->count();
            if ($checkSlug > 0) {
                $new_number = $checkSlug + 1;
                $new_slug = $url_modify . '-' . $new_number;
                $user->slug = $new_slug;
            } else {
                $user->slug = $url_modify;
            }
            $photo = $request->image;
            if ($request->hasFile('image')) {

                $ext = $photo->getClientOriginalExtension();
                $filename = $photo->getClientOriginalName();
                $filename = Service::slug_create($filename).rand(1100, 99999).'.'.$ext;
                $image_resize = Image::make($photo->getRealPath());
                $image_resize->resize(200, 200);
                $upload_path = 'backend/images/users/agent/';
                Service::createDirectory($upload_path);
                $image_resize->save(public_path('backend/images/users/agent/'.$filename));
                $user->photo = 'backend/images/users/agent/'.$filename;
            }
            $user->password = Hash::make($request->password);
            $user->company_id = $company->id;
            $user->is_admin = 1;
            $user->save();
            //create
        }
    }
}
