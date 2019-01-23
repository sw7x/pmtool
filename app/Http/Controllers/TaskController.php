<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class TaskController extends Controller
{


   /************************************************/

//    public function index(){
//        return view('project');
//    }
//
//    public function assignEmployees(){
//        return view('assign-employees');
//    }

    public function thread(){
        return view('task-thread');
    }
    public function assignEmployees(){
        return view('task-assign');
    }
    public function taskManage(){
        return view('task-manage');
    }




}
