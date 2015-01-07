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

    Route::get('/', 'HomeController@index');
    Route::get('/gadget-swap',function(){
        return View::make('pages.index');
    });
    Route::get('/{anything}', function ($anything) {
        try {
            return View::make('pages.' . $anything);
        }catch (InvalidArgumentException $ex){
            App::abort(404);
        }
    });

