<?php

class HomeController extends BaseController {

    /*
    |--------------------------------------------------------------------------
    | Default Home Controller
    |--------------------------------------------------------------------------
    |
    | You may wish to use controllers instead of, or in addition to, Closure
    | based routes. That's great! Here is an example controller method to
    | get you started. To route to this controller, just add the route:
    |
    |   Route::get('/', 'HomeController@showLogin');
    |
    */

    public function showRegister()
    {
        return View::make('pages/register');
    }

    public function showLogin()
    {
        return View::make('pages/login');
    }

    public function doContact()
    {

    }

    public function doRegister()
    {

    }

    public function doLogin()
    {
        $rules = array(
            'login-username' => 'required',
            'login-password' => 'required|alphaNum|min:8'
        );

        $validator = Validator::make(Input::all(), $rules);

        $userLogin = array(
            'user_name' => Input::get('login-username'),
            'password'  => Input::get('login-password')
        );

        if ($validator->fails() OR ! Auth::attempt($userLogin)) {
            return Redirect::to('login')
                ->withErrors($validator)
                ->withInput(Input::except('login-password'));
        }

        return Redirect::intended('dashboard');
    }

    public function doLogout()
    {
        Auth::logout();

        return Redirect::to('login');
    }

    public function dashboard()
    {
        return View::make('common/dashboard');
    }

}
