<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
	public function index(Request $request)
    {
    	//$this->middleware('abcd');
    	return view('home.index');

    	// if($request->session()->has('loggedUser'))
    	// {
    	// 	return view('home.index');
    	// }
    	// else
    	// {
    	// 	$request->session()->flash('message', 'You are not logged in. Please login');
    	// 	return redirect()->route('login.index');
    	// }
    }
}
