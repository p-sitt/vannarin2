<?php

namespace App\Http\Controllers\Water;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class WaterController extends Controller
{
    public function index()
	{
	    return view('layouts/water/water');
	}

	public function waterStatus()
	{
	    return view('layouts/water/status');
	}
}
