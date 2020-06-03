<?php

Route::get('/home', function () {
    return view('welcome');
});

Route::get('/index', function () {
    return view('index');
});

Route::post('/input','DataController@run')->name('input-form');

Route::get('/post/1', function () {
    return view('FirstPost');
});

Route::get('/data','UserController@getUser')->name('data-info');

Route::get('/post/2', function () {
    return view('SecondPost');
});

Route::get('/pages', function() {
    return view('PagesContent',['content' => null, 'eng' => false]);
});

Route::get('/pages/eng', function() {
    return view('PagesContent',['content' => null,'eng' => true]);
});

Route::get('/pages/eng/{url}', 'ControllerCMS@getEnglishContent');

Route::get('/pages/{url}', 'ControllerCMS@getContent');


Route::get('/category', 'ControllerCMS@category');

Route::get('/admin', 'PageRes@index');

Route::post('/create-admin','PageRes@create')->name('create-admin');

Route::get('/update/{id}', 'PageRes@getById');

Route::post('/update/new/{id}/{editParam}','PageRes@update');

Route::get('/delete/{id}','PageRes@destroy');

Route::get('/update/{id}/{editParam}', 'PageRes@getById');
