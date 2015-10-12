<?php

Route::get('/', function () {
    return view('welcome');
});

Route::get('import', ['uses' => 'ImporterController@import']);
