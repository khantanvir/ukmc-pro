<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(){
        $data['page_title'] = 'Dashboard';
        $data['dashboard'] = true;
        return view('dashboard/index',$data);
    }
    public function user_list(){
        $data['page_title'] = 'User Management';
        $data['usermanagement'] = true;
        return view('users/list',$data);
    }
    public function login(){
        $data['page_title'] = 'User | Login';
        return view('authpanel/login',$data);
    }
    public function reset_password(){
        $data['page_title'] = 'User | Reset Password';
        return view('authpanel/reset_password',$data);
    }
}
