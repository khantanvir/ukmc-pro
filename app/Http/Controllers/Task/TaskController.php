<?php

namespace App\Http\Controllers\Task;

use App\Http\Controllers\Controller;
use App\Http\Requests\Task\TaskCreateRequest;
use App\Models\Task\Task;
use Illuminate\Http\Request;
use App\Traits\Service;
use App\Models\User;
use Illuminate\Support\Facades\Session;
Use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\File;

class TaskController extends Controller{
    use Service;

    public function create(){
        $data['page_title'] = 'Task | Create';
        $data['task'] = true;
        $data['task_add'] = true;
        $data['priorities'] = Service::priority();
        $data['users'] = User::where('role','!=','agent')->where('role','!=','admin')->where('active',1)->get();
        return view('task/create',$data);
    }
    public function store(TaskCreateRequest $request){
        $task = new Task();
        $task->assign_by = Auth::user()->id;
        $task->assign_to = $request->assign_to;
        $task->task_name = $request->task_name;
        $task->task_details = $request->task_details;
        $task->deadline = $request->deadline;
        
        $doc = $request->doc;
        if ($request->hasFile('doc')) {

            $ext = $doc->getClientOriginalExtension();
            $doc_file_name = $doc->getClientOriginalName();
            $doc_file_name = Service::slug_create($doc_file_name).rand(11, 999).'.'.$ext;
            $upload_path1 = 'backend/images/task/doc/';
            Service::createDirectory($upload_path1);
            $request->file('doc')->move(public_path('backend/images/task/doc/'), $doc_file_name);
            $task->doc = $upload_path1.$doc_file_name;
        }
        $task->save();
        
    }
    public function all(){
        $data['page_title'] = 'Task | All';
        $data['task'] = true;
        $data['task_all'] = true;
        return view('task/all',$data);
    }
    public function my_tasks(){
        $data['page_title'] = 'Task | My Task';
        $data['task'] = true;
        $data['task_my'] = true;
        return view('task/mytask',$data);
    }
}
