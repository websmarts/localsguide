<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
    {
        return View::make('mytest',array('name'=>'IanMac'));
        
});


Route::get('iuse', function()
{
    return View::make('iuse');
});

Route::get('/mytest','MytestController@mymethod');


Route::post('/ajax',array('before' => 'csrfx',function(){

    $data = Input::all();

    $data['call_status']="607";

    if(Request::ajax())
    {
        //return 'ajax';
        return Response::json($data);
    }
}));

Route::filter('csrfx', function()
    {
        
       
        $token = Request::ajax() ? Request::header('X-CSRF-Token') : Input::get('_token');
        if (Session::token() != $token) {
            
            
            throw new Illuminate\Session\TokenMismatchException;
        } 
          
});