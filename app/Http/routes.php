<?php

Route::get('/', function () {
    return view('home.landing');
});

Route::get('import', ['uses' => 'ImporterController@import']);
