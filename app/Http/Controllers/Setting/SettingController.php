<?php

namespace App\Http\Controllers\Setting;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SettingController extends Controller
{
    public function company_settings(){
        $data['page_title'] = 'Company / Settings';
        $data['settings'] = true;
        $data['company_settings'] = true;
        return view('setting/company_setting',$data);
    }
    public function profile_settings(){
        $data['page_title'] = 'Profile / Settings';
        $data['settings'] = true;
        $data['profile_settings'] = true;
        return view('setting/profile_settings',$data);
    }
    
    public function edit_profile(){
        $data['page_title'] = 'Edit / Settings';
        $data['settings'] = true;
        $data['edit_profile'] = true;
        return view('setting/edit_profile',$data);
    }
}
