<?php

namespace App\Http\Controllers;

use Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class regController extends Controller
{
    public function index()
    {
    	return view('registration.index');
    }

public function store(Request $request)
    {

       $validator = Validator::make($request->all(), [
            'name' => 'required|min:5|max:15',
            'email' => 'required|string|email',
            'username' => 'required|unique:user|min:2',
            'password' => 'required|min:4',
            'password_conf' => 'required_with:password|same:password'

            
        ]);

        if ($validator->fails()) {
             return back()
            ->withErrors($validator)
            ->withInput();
        }

        $data=[
        'userId' => null,
        'name' => $request-> name,
        'username' => $request-> username,
        'password' => $request-> password,
         'userType' => 'User'
        ];
        DB::table('user')->insert($data);
        //return back();
        return redirect()->route('login.index')->with('create', 'Account created successfully.');


    /*	$user = new User();
    	$user->name = $request->name;
    	$user->email = $request->email;
    	$user->password = $request->password;
     
    	
    	date_default_timezone_set('Asia/Dhaka');
    	$user->lastTransaction = date('Y-m-d H:i:s');
    	$user->save();
    	//return redirect()->route('account.index');
    	return redirect()->route('account.show', $user->userId);  */


    }

}
