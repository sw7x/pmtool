<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Domain\Services\ClientService;


use App\Http\Requests\ClientFormRequest;






class ClientController extends Controller
{
    public function client(){
        return view('client');
    }
    
    public function createClient(ClientService $clientService,ClientFormRequest $request){
        // accessing client service class to create client
        //dd($_POST);

//        $this->validate ($request,[
//            'client-name'=>'required',
//        ]);

        //return redirect('client');

       // dd();

        //return redirect()->back();

        $isClientCreate = $clientService->createClient($request);
        dd($isClientCreate);


        //return $isClientcreate;
    }





}
