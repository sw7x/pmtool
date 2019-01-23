<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class PageController extends Controller
{
    public function invoice(){
        return view('invoice');    
    }
    
    public function profile(){
        return view('profile');    
    }
    
    public function login(){
       return view('login');
    }
    
    public function register(){
        return view('register');    
    }
    
    public function lockscreen(){
        return view('lockscreen');    
    }
    
    public function page404(){
        return view('404');    
    }
    
    public function page500(){
        return view('500');    
    }
    
    public function blank(){
        return view('blank');    
    }
    
    public function pace(){
        return view('pace');    
    }
    
    public function advanced(){
        return view('advanced');    
    }
    
    public function editors(){
        return view('editors');    
    }
    
    public function simple(){
        return view('simple');    
    }
    
    public function data(){
        return view('data');    
    }
    
    public function chartjs(){
        return view('chartjs');    
    }
    
    public function morris(){
        return view('morris');    
    }
    
    public function flot(){
        return view('flot');    
    }
    
    public function inline(){
        return view('inline');    
    }
    
    public function collapsedSidebar(){
        return view('collapsed-sidebar');    
    }
    
    public function uiGeneral(){
        return view('ui-general');    
    }
    
    public function formGeneral(){
        return view('form-general');    
    }
    
    public function icons(){
        return view('icons');    
    }
    
    public function buttons(){
        return view('buttons');    
    }
    
    public function sliders(){
        return view('sliders');    
    }
    
    public function timeline(){
        return view('timeline');    
    }
    
    public function modals(){
        return view('modals');    
    }
    public function index(){
        return view('index');    
    }
    

    public function topNav(){
        return view('top-nav');    
    }
    
    public function boxed(){
        return view('boxed');    
    }
    
    public function fixed(){
        return view('fixed');    
    }
    
    public function mailbox(){
        return view('mailbox');    
    }
    
    public function readMail(){
        return view('read-mail');    
    }
    
    public function widgets(){
        return view('widgets');    
    }
    public function calendar(){
        return view('calendar');    
    }

    public function starter(){
        return view('starter');
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
    public function educationQualification(){
        return view('education-qualification');
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
