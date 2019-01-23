<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class LeaveController extends Controller
{


   /************************************************/

   public function index(){
       return view('leave');
   }

   public function apply(){
       return view('leave-apply');
   }

   public function approve(){
       return view('leave-approve');
   }

   public function view(){
       return view('leave-view');
   }

}
