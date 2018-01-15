<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\User;
use Validator;

class LoginController extends Controller
{
    public function index(Request $request)
    {
    	return view('login.index');
    }

    public function verify(Request $request)
    {
                $validator = Validator::make($request->all(), [
            'username' => 'required',
            'password' => 'required'
        ]);

 
    	$user = DB::table('user')
    		->where('username', $request->username)
    		->where('password', $request->password)
    		->first();

       if ($validator->fails()) {
             return back()
            ->withErrors($validator)
            ->withInput();
        }

    	if($user != null)
    	{        
            $request->session()->put('loggedUser', $user);


    		return redirect()->route('video.index');         
    	}
    	else
    	{
    		$request->session()->flash('username', $request->username);
    		$request->session()->flash('message', 'Invalid username or password');
    	
    		return redirect()->route('login.index');
    	}
    }
}
