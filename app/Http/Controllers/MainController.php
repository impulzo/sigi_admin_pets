<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
	/**
	 * return welcome blade, from load react, principal page
	 */
    public function index(){
		return view('welcome');
	}
}
