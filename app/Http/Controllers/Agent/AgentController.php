<?php

namespace App\Http\Controllers\Agent;

use App\Http\Controllers\Controller;
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
}
