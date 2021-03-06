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

Route::get('/', function() {
    return View::make('pages/index');
});

Route::post('contact',  'HomeController@doContact');
Route::post('register', 'HomeController@doRegister');
Route::post('login',    'HomeController@doLogin');

Route::get('register', 'HomeController@showRegister');
Route::get('login',    'HomeController@showLogin');
Route::get('logout',   'HomeController@doLogout');

Route::group(array('before' => 'auth'), function() {
    Route::get('dashboard',       'HomeController@dashboard');
    Route::get('contact',         'HomeController@showContact');
    Route::get('payment-centers', 'PaymentCenterController@index');
    Route::resource('bills',      'BillController');
    Route::resource('notes',      'NoteController');
    Route::resource('receipts',   'ReceiptController');
    Route::resource('users',      'UserController');
});
