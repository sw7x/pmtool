<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class PageController extends Controller
{

    
    public function profile(){
        return view('profile');    
    }
    
    public function login(){
       return view('login');
    }

    public function page404(){
        return view('404');    
    }

    public function advanced(){
        return view('advanced');    
    }

    public function index(){
        return view('index');    
    }

    public function mailbox(){
        return view('mailbox');    
    }
    
    public function readMail(){
        return view('read-mail');    
    }

    public function calendar(){
        return view('calendar');    
    }



   /************************************************/
    public function compose(){
        return view('compose');
    }

    public function users(){
        return view('users');
    }

    public function timesheet(){
        return view('timesheet');
    }

    public function viewTimesheet(){
        return view('view-timesheet');
    }

    public function desigProjectwiseTiming(){
        return view('desig-projectwise-timing');
    }

    public function devProjectwiseTiming(){
        return view('dev-projectwise-timing');
    }

    public function designationManage(){
        return view('designation-manage');
    }


}
