<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Traits\Service;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use App\Models\Notification\Notification;

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

    public function login(){
        $data['page_title'] = 'User | Login';
        return view('authpanel/login',$data);
    }
    //get notification
    public function get_notification_count(){
        $count = Notification::where('is_view',0)->where('user_id',Auth::user()->id)->count();
        $data['result'] = array(
            'key'=>200,
            'val'=>$count
        );
        return response()->json($data,200);
    }
    //get my notification
    public function get_my_notification(){
        $notify = Notification::where('user_id',Auth::user()->id)->orderBy('id','desc')->take(15)->get();
        $select = '';
        if($notify){
            foreach($notify as $key=>$row){
                if($row->is_view==0){
                    $select .= '<div class="tr-bg dropdown-item">';
                }else{
                    $select .= '<div class="dropdown-item">';
                }
                $select .= '<div class="media server-log">';
                    $select .= '<img src="'.asset($row->creator_image).'" class="img-fluid me-2" alt="avatar">';
                    $select .= '<div class="media-body">';
                        $select .= '<div class="data-info">';
                            $select .= '<h6 class="">'.$row->creator_name.'</h6>';
                            $select .= '<a href="'.url("task/details/".$row->slug).'"><p>'.$row->description.'</p></a>';
                            $select .= '<p class="">'.Service::timeLeft($row->create_date).'</p>';
                        $select .= '</div>';
                        $select .= '<div class="icon-status">';
                            $select .= '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>';
                        $select .= '</div>';
                    $select .= '</div>';
                $select .= '</div>';
            $select .= '</div>';
            }
            //update notification first
            $update = Notification::where('user_id',Auth::user()->id)->update(['is_view'=>1]);
            $data['result'] = array(
                'key'=>200,
                'val'=>$select
            );
            return response()->json($data,200);
        }
    }

}
