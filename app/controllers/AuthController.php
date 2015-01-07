<?php

class AuthController extends \BaseController {

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
