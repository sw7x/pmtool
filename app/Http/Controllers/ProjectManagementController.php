<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Domain\Services\ClientService;

class ProjectManagementController extends Controller
{

	public function __construct(){
      
    }


    
    public function deleteClientByid(ClientService $clientService, $clientid){
        // accessing client service class to delete client by client id
        $isClientDelete = $clientService->deleteClient($clientid);
        return $isClientcreate;

    }
    
    



}





// // app/controllers/HomeController.php<

// public function login()
// {
// 	// validate the info, create rules for the inputs
// 	$rules = array(
// 		// make sure the email is an actual email
// 	    'username'    => 'required|username', 
// 	    // password can only be alphanumeric and has to be greater than 3 characters
// 	    'password' => 'required|alphaNum|min:5' 
// 	);

// 	// run the validation rules on the inputs from the form
// 	$validator = Validator::make(Input::all(), $rules);

// 	// if the validator fails, redirect back to the form
// 	if ($validator->fails()) {
// 	    return Redirect::to('login')
// 	    // send back all errors to the login form
// 	    ->withErrors($validator) 
// 	    // send back the input (not the password) so that we can repopulate the form
// 	    ->withInput(Input::except('password')); 

// 	} else {

// 	    // create our user data for the authentication
// 	    $userdata = array(
// 	        'username'     => Input::get('username'),
// 	        'password'  => Input::get('password')
// 	    );

// 	    // attempt to do the login
// 	    if (Auth::attempt($userdata)) {

// 	        // validation successful!
// 	        return Redirect::to('Dashboard');

// 	    } else {        

// 	        // validation not successful, send back to form 
// 	        return Redirect::to('login');

// 	    }

// 	}
// }


// namespace App\Http\Controllers;
// use Illuminate\Http\Request;
// use App\Http\Requests;
// use App\Http\Controllers\Controller;

// class SessionController extends Controller {

// 	//accessing session data
//    	public function accessSessionData(Request $request){
      
//       	if($request->session()->has('user'))
//          	return $request->session()->get((array)$request);
//       	else
//          	return false;
//    }

//    //store session data
//    public function storeSessionData(Request $request){
      
//       	return $request->session()->put($request['username']);
      	
//    }

//    //delete session data
//    public function deleteSessionData(Request $request){
      
//       	$request->session()->forget('username');
      	
//    }

//    //keep the username in a session
//    public function createSession(){
// 	        $username = $_POST['username'];
// 	        $password = $_POST['password'];
// 	        $result = "";
// 	        if($username && $password){
// 	            $result = User::getUser($username, $password);
// 	            if($result){
// 	                Session::set('user',$result);
// 	                return response()->json([true, Session::get('user')]);//I get value expected, this is ok.
// 	            }
// 	        }
// 	        return response()->json([false, Session::get('user')]);     
// 	    }
//     }




// }


// //insert user data into database
// public function insertUser()
// {
//     $user = new User;

//     $user->username         = Input::get('username');
//     $user->email            = Input::get('email');
// 	$user->name             = Input::get('name');
// 	$user->age              = Input::get('age');
// 	$user->address          = Input::get('address');
// 	$user->salary           = Input::get('salary');
// 	$user->nic              = Input::get('nic');
// 	$user->epfNo            = Input::get('epfNo');
// 	$user->etfNo            = Input::get('etfNo');
// 	$user->status           = Input::get('status');
// 	$user->phone            = Input::get($phone);
// 	$user->eduQualification = Input::get($eduQualification);
// 	$user->email            = Input::get('email');
// 	$user->email            = Input::get('email');

// 	// hashing  passwords before insert
//     $user->password = Hash::make(Input::get('password'));
    
//     $isInsert = $user->save();
//     if($isInsert){
// 		return Redirect::back();
//     }else{
//     	return false;
//     }
    
//}

