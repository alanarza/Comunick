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

Route::resource('/', 'IndexController');

/*Route::post('login', function(){
 
	if (Auth::attempt( array('usuario' => Input::get('usuario'), 'password' => Input::get('password') ), true ))
	{
        return Redirect::to('personal');
    }
    else
    {
        return Redirect::to('/')->with('mensaje_login', 'Ingreso invalido');
    }
 
});*/

//grupo de rutas que aceptan peticiones post, protegemos de ataques csrf
Route::group(array('before' => 'csrf'), function()
{
 
    //http://localhost/crud_laravel/public/crud/show para crear post
    Route::post('login', 'IndexController@login');
});

Route::get('/test', function()
{
    return View::make('personal');
});