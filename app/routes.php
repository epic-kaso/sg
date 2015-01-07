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

    Route::get('/', ['as' => 'home','uses' => 'HomeController@index']);
    Route::get('/swap','GadgetSwapController@getClient');
    Route::controller('/enterprise','EnterprisePagesController');

    Route::get('/login',['uses' => 'AuthController@getLogin','as' => 'get-login']);
    Route::post('/login',['uses' => 'AuthController@postLogin','as' => 'post-login']);

    Route::get('/logout',['as' =>'logout',function(){
        Auth::logout();
        return Redirect::home();
    }]);
   Route::group(['before' => 'auth'],function(){
           Route::get('/devices',['as' => 'devices','uses' => 'GadgetSwapController@getIndex']);
           Route::post('/devices/add-maker','GadgetSwapController@postAddMake');
           Route::post('/devices/add-network','GadgetSwapController@postAddNetwork');
           Route::post('/devices/add-device','GadgetSwapController@postAddModel');
           Route::delete('/devices/delete-device/{id}','GadgetSwapController@deleteGadget');
   });

    Route::get('/{anything}', function ($anything) {
        try {
            return View::make('pages.' . $anything);
        }catch (InvalidArgumentException $ex){
            App::abort(404);
        }
    });

