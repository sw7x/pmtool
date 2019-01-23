<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;



class HomeController extends Controller
{
    //
    public function index(){
        $users = DB::table('project')->get();
        dd ($users);

       return view('project');
    }
}
