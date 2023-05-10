<?php

namespace App\Http\Controllers\Course;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function create(){
        $data['page_title'] = 'Course / Create';
        $data['course'] = true;
        $data['course_add'] = true;
        return view('course/create',$data);
    }
    public function all(){
        $data['page_title'] = 'Course / List';
        $data['course'] = true;
        $data['course_all'] = true;
        return view('course/all',$data);
    }
    public function archive(){
        $data['page_title'] = 'Archived / Course';
        $data['course'] = true;
        $data['course_archive'] = true;
        return view('course/archive',$data);
    }
}
