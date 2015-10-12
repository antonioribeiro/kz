<?php

namespace App\Services\Admin\Http\Controllers;

use App\Http\Controllers\Controller;

class Admin extends Controller
{
	public function index()
	{
		return view('admin.index');
	}
}
