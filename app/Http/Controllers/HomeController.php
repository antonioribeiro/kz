<?php

namespace App\Http\Controllers;

use Gate;
use Auth;

class HomeController extends Controller
{
	public function index()
	{
		if ( ! Auth::check())
		{
			return view('home.landing');
		}

		if (Gate::allows('viewDashboard', Auth::user()))
		{
			return view('dashboard.index');
		}

		return redirect()->route('chat.server.index');
	}
}
