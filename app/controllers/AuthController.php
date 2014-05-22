<?php

class AuthController extends BaseController {

    public function login()
    {
        extract(Input::only(array ('email', 'password', 'remember')));

        $credentials = ['email' => $email, 'password' => $password];
        if (Auth::attempt($credentials, $remember))
        {
            return Redirect::back();
        }

        return Redirect::back()->with('login_error', true);
    }

    public function logout()
    {
        Auth::logout();
        return Redirect::route('home');
    }

} 