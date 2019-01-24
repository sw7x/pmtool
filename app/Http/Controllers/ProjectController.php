<?php

namespace App\Http\Controllers;

use App\Project;
use Illuminate\Http\Request;

use App\Http\Requests;

use App\Domain\Services\ProjectCreator;
use Illuminate\Support\Facades\Validator;
use Auth;
use phpDocumentor\Reflection\DocBlock\Tags\Var_;
use Session;
use DB;

use Illuminate\Database\Eloquent\Model;


class ProjectController extends Controller
{


   /************************************************/
    private $projectCreator;

    public function __construct()
    {

       // $this->projectCreator = new ProjectCreator();
    }




    public function index(){
        return view('project');
    }
    public function index2(){
        return view('index2');
    }
    public function assignEmployees(){
        return view('project-assign');
    }

    public function thread(){
        return view('project-thread');
    }


    public function login(Request $request){

        $password = $request->input('password');
        $email    = $request->input('email');

        var_dump ($password);
        var_dump ($email);

        
        $checkLogin = DB::table('users')->where(['email'=>$email,'password'=>$password])->get();

        var_dump($checkLogin);

        if(count($checkLogin)  >0){
            dd ("Login SuccessFull<br/>");
        }else{
            dd ("Login Faield Wrong Data Passed");
        }




        //return view('project-thread');
    }

    public function session(Request $request){

        $session_id = Session::getId();
        //$session_id = session()->getId()

        var_dump ($session_id);
        var_dump (Session::token());
        var_dump (csrf_token());

        //var_dump ($request);

        //dd($request->session()->has('users'));
        Session::push('user', 'developers');
        Session::push('user', 'ssss');

        Session::put('key', 'value');


        var_dump ($request->all());


        $value = Session::get('key', 'default');
        var_dump($value);

        $value = session('key');
        var_dump($value);

        $value = Session::get('key', function() {
            return 'sdefault';
        });
        var_dump($value);


        $value = session('key');
        var_dump($value);


        $value = Session::pull('key', 'default');
        var_dump($value);

        $data = Session::all();
        var_dump($data);

        var_dump(Session::flash('status', 'Task was successful!'));


        Session::regenerate();
        $session_id = Session::getId();
        var_dump('session id after regenarete '.$session_id);



        $data = Session::all();
        var_dump($data);



    }



    public function create(Request $request){






        $users = DB::table('project')->get();
        //dd ($users);


        //$project = Project::all();
        //dd ($users);
        //var_dump ($project);

        $project = new Project();
        //dd($project->all());

        $project->ProjectId = 'proj4';
        $project->Name = 'rrrr';
        $project->Locality 	= true;
        $project->Deadline 	= date("Y-m-d H:i:s");
        $project->Budget 	= 100000.00;
        $project->Description 	= 'desc';
        $project->PmId 	= 1;
        $project->ClientId = 2;


        $project->save();





        $rules=['projName'=>'required|max:3'];
        $validator = Validator::make($request->all(), $rules);




        var_dump (Auth::check());

        if ($validator->fails()) {
            //return back()->withErrors($validator->errors())->withInput($request->all());
            //return response()->json( [ 'errors' => $validator->errors() ], 400 );
            //return response()->json ();

            $validator->errors()->add('projName', 'fsssss Unauthorised access');
            var_dump ($validator->errors()->first());
            //var_dump ($validator->errors()->input('projName'));
            var_dump ($validator->errors()->getMessages());
            var_dump ($validator->errors());



            var_dump ($validator->messages());
            var_dump ($validator->messages()->toJson());



            $failed = $validator->failed();
            var_dump ( $failed );


        }

       // dd ($validator);

//        $this->validate ($request,[
//        'projName'=>'required|max:3'
//        ]);


       // dd("ss");
        //var_dump (POST);
        //$request->projectNationality

        echo json_encode ($request->input('projectNationality'));
        //echo json_encode ($request->all());
        //die();
        //return view('project-thread');

        //$projectCreator = new ProjectCreator('proj1');

        //dd($projectCreator->display());


        //$input = request()->all();

        //dd($input);
        echo 'ddddddddd';
    }
}
