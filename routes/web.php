<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/w', function () {
    return view('welcome');
});
Route::get('/home', 'HomeController@index');
Route::get('/info', function() {  phpinfo();});


//admin lte pages todo -finally delete
Route::get('/advanced','PageController@advanced');
Route::get('/mailbox','PageController@mailbox');
Route::get('/read-mail','PageController@readMail');
Route::get('/calendar','PageController@calendar');
Route::get('/compose','PageController@compose');

Route::get('/profile','PageController@profile');






Route::get('/', ['as'=>'dashboard','uses'=>'PageController@index']);
Route::get('/404','PageController@page404');
Route::get('/login','PageController@login');


















/* client */
Route::get('/client','ClientController@client');
Route::post('/client/create','ClientController@createClient');


/* client */
Route::get('/users','PageController@users');
Route::get('/designation-manage','PageController@designationManage');


/* project */
Route::group(['prefix' => 'project','as' => 'project.'], function () {
   
    Route::post('login', ['as'=>'login','uses'=>'ProjectController@login']);
	Route::post('create', ['as'=>'create','uses'=>'ProjectController@create']);
	Route::get('create', ['as'=>'create','uses'=>'ProjectController@create']);
    Route::get('/', ['as'=>'list','uses'=>'ProjectController@index']);
    Route::get('enroll-employees','ProjectController@assignEmployees');

});




/* threads */
Route::get('/project/thread','ProjectController@thread');
Route::get('/task/thread','TaskController@thread');

/* cost management */
Route::get('/cost/calculate','CostController@calculate');

/* timesheet */
Route::get('/timesheet','PageController@timesheet');
Route::get('/view-timesheet','PageController@viewTimesheet');

/* reporting */
Route::get('/designation-projectwise-timing','PageController@desigProjectwiseTiming');
Route::get('/developer-projectwise-timing','PageController@devProjectwiseTiming');



/* task */
Route::get('/task/task-manage','TaskController@taskManage');
Route::get('/task/task-submit','TaskController@taskSubmit');
Route::get('/task/assign-developers','TaskController@assignEmployees');

