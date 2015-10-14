<?php

namespace App\Services\Chat\Http\Controllers;

use App\Http\Controllers\Controller;

class Chat extends Controller
{
	public function index()
	{
		return view('chat.server.index');
	}
}
