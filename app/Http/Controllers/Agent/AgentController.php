<?php

namespace App\Http\Controllers\Agent;

use App\Http\Controllers\Controller;
use App\Http\Requests\Agent\AgentCreateRequest;
use App\Models\Agent\Company;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Traits\Service;

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
        $company->agreement_expire_date = $request->input('agreement_expire_date');
    }
}
