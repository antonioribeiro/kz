<?php

Route::get('/', ['as' => 'home', 'uses' => 'HomeController@index']);

Route::get('dashboard', ['as' => 'dashboard', 'uses' => 'HomeController@index']);

Route::get('import', ['as' => 'import', 'uses' => 'ImporterController@import']);
