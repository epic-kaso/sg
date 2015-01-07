<?php

class AuthController extends \BaseController {


    function __construct()
    {
        $this->beforeFilter('guest');
    }

    public function getLogin(){
        return View::make('auth.login');
    }

    public function postLogin(){
        if(Auth::attempt(Input::only(['email','password']),Input::get('remember_me',false))){
            return Redirect::intended(route('devices'));
        }
        return Redirect::back();
    }
}
