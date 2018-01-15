<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Validator;

class uploadController extends Controller
{


         public function comment_store(Request $request)
    {

       

        $comment_data=[
        'user_id' =>  $request-> user_id,
        'video_id' =>  $request-> video_id,
        'post' => $request-> comment
        ];
        DB::table('comment')->insert($comment_data);
        //return back();
        //return redirect()->route('upload.index')->with('create', 'Account created successfully.');
        return back();

    }



  public function index()
    {
    	return view('upload.index');
    }
    public function store(Request $request)
    {


    	if($request->hasFile('file'))
    	{
            $file = $request->file('file');

            $type = $file->getMimeType();

            if($type=='video/mp4' || $type=='video/x-msvideo' || $type== 'video/x-flv' )
            {
			$name = $file->getClientOriginalName();

	         $validator = Validator::make($request->all(), [
	        'caption' => 'required|min:10', 
	        'description' => 'required|min:15',
	        'category' => 'required'
	         ]);


         if ($validator->fails()) {

             return back()
            ->withErrors($validator)
            ->withInput();
        }

        $file->move('uploads', $file->getClientOriginalName());
           $data=[
            'videoId' => null,
            'videoName' => $name,
            'caption' => $request-> caption,
            'description'=> $request-> description,
            'likeCount' => 0,
            'reportCount' => 0,
            'category'=> $request-> category,
            'views'=> 0
            ];
        
            DB::table('videos')->insert($data);

            return back()->with('uploaded', 'Video uploaded successfully');
             }
        

             else
             {
              
             return back()->with('err', 'Upload MP4 File Only.');
             }


    	}
    	else
    	{
            $validator = Validator::make($request->all(), [
            'caption' => 'required|min:10', 
            'description' => 'required|min:15',
            'category' => 'required'
             ]);


         if ($validator->fails()) {

             return back()
            ->withErrors($validator)
            ->withInput();
        }
    		  //return back();
          return back()->with('abcd', 'This video is not accepted');

    	}
    }



}
