<?php

namespace App\Http\Controllers\Login;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
Use Illuminate\Support\Facades\Redirect;
use App\Http\Requests\Login\LoginRequest;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function user_login(LoginRequest $request){
        if($request->has('remember_me')){
            Session::put('user_email',$request->input('email'));
            Session::put('user_password',$request->input('password'));
            Session::put('rememberMe',$request->input('remember_me'));
        }else{
            Session::forget('user_email');
            Session::forget('user_password');
            Session::forget('rememberMe');
        }
        try{
            if (Auth::attempt(['email' => $request->input('email'), 'password' => $request->input('password')])){
                if(Auth::user()->active==1){
                    return redirect('/');
                }else{
                    Auth::logout();
                    Session::flash('warning', 'Opps! You don,t have any permission to login this system!');
                    return Redirect::back();
                }
            }
            else {
                Session::flash('error', 'Email and Password Not Matched!');
                return Redirect::back();
            }
        } catch(\Exception $e){
            Session::flash('error', 'Oh Someting went wrong in server! '.$e->getMessage());
            return Redirect::back();
        }
    }
    //signout
    public function sign_out(){
        Auth::logout();
        Session::flash('success', 'Logout Successfully!');
        return redirect('login');
    }
}
