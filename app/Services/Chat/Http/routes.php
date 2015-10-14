<?php

Route::group(['prefix' => 'chat/server', 'namespace' => 'App\Services\Chat\Http\Controllers'], function ()
{
	Route::get('/', ['as' => 'chat.server.index', 'uses' => 'Chat@index']);
});
