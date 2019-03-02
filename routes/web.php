<?php

Route::get('/', ['as' => 'home', 'uses' => 'HomeController@home']);

// Routes for services


Route::get('about', ['as' => 'about', 'uses' => 'HomeController@about']);

// Routes for contact
Route::resource('messages', 'MessagesController');


// login form
Route::get('login', 'Auth\LoginController@showLoginForm');
Route::post('login', ['as'=> 'login', 'uses' => 'Auth\LoginController@login']);
Route::get('logout', 'Auth\LoginController@logout');

// test
// 
// Route::get('test', function(){
//     $user = new App\User;
//     $user->name = 'Hernan';
//     $user->email = "h@h.h";
//     $user->password = bcrypt('hola123');
//     $user->save();
//
//     return $user;
// });
