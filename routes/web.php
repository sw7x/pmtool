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





use App\Project;


Route::get('/info', function() {

    return App\Project::all();

    $users = DB::table('project')->get();
    var_dump ($users);
    return $users;

//    try {
//        DB::connection()->getPdo();
//    } catch (\Exception $e) {
//        die("Could not connect to the database.  Please check your configuration. error:" . $e );
//    }


    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "pmtool";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }


    $sql = "SELECT * FROM project";
    $result = $conn->query($sql);


    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
            var_dump($row);
        }
    } else {
        echo "0 results";
    }



    $conn->close();
    //die();




    phpinfo();









});






Route::get('/', 'PageController@index');

Route::get('/invoice','PageController@invoice');
Route::get('/profile','PageController@profile');
Route::get('/login','PageController@login');
Route::get('/register','PageController@register');
Route::get('/lockscreen','PageController@lockscreen');
Route::get('/404','PageController@page404');
Route::get('/500','PageController@page500');
Route::get('/blank','PageController@blank');
Route::get('/pace','PageController@pace');
Route::get('/advanced','PageController@advanced');
Route::get('/editors','PageController@editors');
Route::get('/simple','PageController@simple');
Route::get('/data','PageController@data');
Route::get('/chartjs','PageController@chartjs');
Route::get('/morris','PageController@morris');
Route::get('/flot','PageController@flot');
Route::get('/inline','PageController@inline');
Route::get('/collapsed-sidebar','PageController@collapsedSidebar');
Route::get('/general','PageController@uiGeneral');
Route::get('/form-general','PageController@formGeneral');
Route::get('/icons','PageController@icons');
Route::get('/buttons','PageController@buttons');
Route::get('/sliders','PageController@sliders');
Route::get('/timeline','PageController@timeline');
Route::get('/modals','PageController@modals');
Route::get('/widgets','PageController@widgets');

Route::get('/top-nav','PageController@topNav');
Route::get('/boxed','PageController@boxed');
Route::get('/fixed','PageController@fixed');
Route::get('/collapsed-sidebar','PageController@collapsedSidebar');
Route::get('/mailbox','PageController@mailbox');
Route::get('/read-mail','PageController@readMail');
Route::get('/calendar','PageController@calendar');
Route::get('/starter','PageController@starter');
Route::get('/compose','PageController@compose');


/* client */
Route::get('/client','ClientController@client');
Route::post('/client/create','ClientController@createClient');



Route::get('/users','PageController@users');
Route::get('/designation-manage','PageController@designationManage');



Route::group(['prefix' => 'project','as' => 'project.'], function () {


    Route::get('session', ['as'=>'session','uses'=>'ProjectController@session']);




    Route::post('create', ['as'=>'create','uses'=>'ProjectController@create']);

    Route::get('create', ['as'=>'create','uses'=>'ProjectController@create']);
    Route::get('','ProjectController@index');





});


//Route::get('/project','ProjectController@index');
//Route::post('/project/create','ProjectController@create')->name('projectCreate');



Route::get('/project/thread','ProjectController@thread');


Route::get('/task/thread','TaskController@thread');

Route::get('/cost/calculate','CostController@calculate');
Route::get('/cost/employee','CostController@employeeCost');
Route::get('/timesheet','PageController@timesheet');
Route::get('/view-timesheet','PageController@viewTimesheet');

Route::get('/education-qualification','PageController@educationQualification');




Route::get('/designation-projectwise-timing','PageController@desigProjectwiseTiming');
Route::get('/developer-projectwise-timing','PageController@devProjectwiseTiming');






Route::get('/project/assign-employees','ProjectController@assignEmployees');



Route::get('/task/task-manage','TaskController@taskManage');
Route::get('/task/assign-employees','TaskController@assignEmployees');



Route::get('/leave','LeaveController@index');
Route::get('/leave/apply','LeaveController@apply'); 
Route::get('/leave/approve','LeaveController@approve');  
Route::get('/leave/view','LeaveController@view');   



