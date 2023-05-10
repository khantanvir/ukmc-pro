<?php

namespace App\Http\Controllers\Task;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function create(){
        $data['page_title'] = 'Task / Create';
        $data['task'] = true;
        $data['task_add'] = true;
        return view('task/create',$data);
    }
    public function all(){
        $data['page_title'] = 'Task / All';
        $data['task'] = true;
        $data['task_all'] = true;
        return view('task/all',$data);
    }
    public function my_tasks(){
        $data['page_title'] = 'Task / My Task';
        $data['task'] = true;
        $data['task_my'] = true;
        return view('task/mytask',$data);
    }
}
