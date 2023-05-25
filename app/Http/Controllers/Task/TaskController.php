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
use App\Events\TaskEvent;
use App\Events\AddNewLead;

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
        $task->priority = $request->priority;
        $task->task_details = $request->task_details;
        //slug create
        $url_modify = Service::slug_create($request->task_name);
        $checkSlug = Task::where('slug', 'LIKE', '%' . $url_modify . '%')->count();
        if ($checkSlug > 0) {
            $new_number = $checkSlug + 1;
            $new_slug = $url_modify . '-' . $new_number;
            $task->slug = $new_slug;
        } else {
            $task->slug = $url_modify;
        }
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
        $url = 'admin-admin';
        $getAssignToUser = User::where('id',$task->assign_to)->first();
        //make instant messaging
        $message = 'New Task Create By '.Auth::user()->name.' For You';
        $url = url('task/details/'.$task->slug);
        event(new TaskEvent($getAssignToUser->id,$message,$url));

        Session::flash('success','Task Created Successfully!');
        return redirect('task-list');
        //make instant notification

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
