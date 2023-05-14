<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Traits\Service;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;

class HomeController extends Controller{
    use Service;
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
        if(!Auth::check()){
            Session::flash('error','Login First! Then See Dashboard!');
            return redirect('login');
        }
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
    public function create_teacher(){
        $data['page_title'] = 'User | Create Teacher';
        $data['usermanagement'] = true;
        return view('users/create_teacher',$data);
    }
    public function create_admission_manager(){
        $data['page_title'] = 'User | Create Admission Manager';
        $data['usermanagement'] = true;
        return view('users/create_admiossion_manager',$data);
    }
}
