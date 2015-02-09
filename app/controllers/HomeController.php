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
        $rules = array(
            'signup-last-name'             => 'required',
            'signup-first-name'            => 'required',
            'signup-email'                 => 'required|email',
            'signup-username'              => 'required|unique:users,user_name',
            'signup-password'              => 'required|alphaNum|min:8|Confirmed',
            'signup-password_confirmation' => 'required|alphaNum|min:8'
        );

        $validator = Validator::make(Input::all(), $rules);

        if ($validator->fails()) {
            return Redirect::to('register')
                ->withErrors($validator)
                ->withInput();
        } else {
            $user = array(
                'user_name'   => Input::get('signup-username'),
                'password'    => Hash::make(Input::get('signup-password')),
                'last_name'   => Input::get('signup-last-name'),
                'first_name'  => Input::get('signup-first-name'),
                'middle_name' => null,
                'email'       => Input::get('signup-email'),
                'user_type'   => 2,
                'address'     => null,
                'status'      => 'A'
            );

            User::create($user);
        }

        return Redirect::to('login');
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
