<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class CostController extends Controller
{


   /************************************************/

//    public function index(){
//        return view('project');
//    }
//
//    public function assignEmployees(){
//        return view('assign-employees');
//    }

    public function calculate(){
        return view('cost-calculate');
    }

    public function employeeCost(){
        return view('employee-cost');
    }
}
