<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class AdminController extends Controller
{
		public function userlist(){
		
		$signup=DB::table('user')->get();
    	return View('home.list',compact('signup'));
}
   
}
