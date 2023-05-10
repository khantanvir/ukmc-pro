<?php

namespace App\Http\Controllers\Agent;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class AgentController extends Controller
{
    public function agents(){
        $data['page_title'] = 'Agents / List';
        $data['agent'] = true;
        Session::flash('warning','Agent List Show! Toast Test!');
        return view('agent/all',$data);
    }
}
