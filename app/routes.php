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

Route::post('login', function(){
 
	if (Auth::attempt( array('usuario' => Input::get('usuario'), 'password' => Input::get('password') ), true ))
	{
        return Redirect::to('personal');
    }
    else
    {
        return Redirect::to('/')->with('mensaje_login', 'Ingreso invalido');
    }
 
});

Route::get('/test', function()
{
    return View::make('personal');
});