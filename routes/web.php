<?php

Route::get('/', function ()
{
  return view('web.index');
});

Route::get('login', function ()
{
  return view('auth.login');
});

Route::get('login/register', function ()
{
  return view('auth.register');
});

Route::get('login/register/guia', function ()
{
  return view('web.guiaCuer');
});

//Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');
