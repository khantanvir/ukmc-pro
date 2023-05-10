<?php

namespace App\Http\Controllers\Campus;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CampusController extends Controller
{
    public function create(){
        $data['page_title'] = 'Campus / Create';
        $data['campus'] = true;
        $data['campus_add'] = true;
        return view('campus/create',$data);
    }
    public function all(){
        $data['page_title'] = 'Campus / List';
        $data['campus'] = true;
        $data['campus_all'] = true;
        return view('campus/all',$data);
    }
    public function archive(){
        $data['page_title'] = 'Archived / Campus';
        $data['campus'] = true;
        $data['campus_archive'] = true;
        return view('campus/archive',$data);
    }
}
