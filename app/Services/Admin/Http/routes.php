<?php

Route::group(['prefix' => 'admin', 'namespace' => 'App\Services\Admin\Http\Controllers'], function ()
{
	Route::get('/', ['uses' => 'Admin@index']);
});
