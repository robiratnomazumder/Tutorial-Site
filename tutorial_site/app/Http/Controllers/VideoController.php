<?php

namespace App\Http\Controllers;

use Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Video;
use App\AccountType;
use App\Http\Requests\AccountRequest;
use App\model\likemodel;

class videoController extends Controller
{
    public function index(Request $request)
    {
        
    	$videos = DB::table('videos')
        ->where('views', '>', 4)
        ->orderBy('views', 'desc')
            ->get();



            $recent = DB::table('videos')

        ->orderBy('videoId', 'desc')
            ->get();






    	return view('video.index')
    		->with('videos', $videos)
            ->with('recent', $recent);
    }


    public function store(){

        $vid = new Video();
        $vid->vidId = $request->videoId;
        $vid->vidName = $request->videoName;
        $vid->caption = $request->caption;
    }


    public function commentStore(Request $request)
    {

       
        $comment_data=[
        'user_id' =>  $request->user_id,
        'video_id' =>  $request->video_id,
        'post' => $request->comment
        ];
        DB::table('comment')->insert($comment_data);
    

$comment = DB::table('comment')

            ->get();


        return back();

    }

    public function cmnt(Request $request)
    {

       


        return 555;

    }







public function name_play()
    {
        $data = session()->get('name');
        return DB::table('user')->get();
        
    }

    public function comment_play()
    {
        $data = session()->get('post');
        return DB::table('comment')->get();
        
    }


    public function play($id)
    {

    	$videos = DB::table('videos')
    		->where('videoId', $id)
    		->first();

             DB::table('videos')
            ->where('videoId', $id)
            ->update(['views' => $videos->views+1]); 


             $lay = DB::table('videos')

        ->orderBy('videoId', 'desc')
            ->get();



          $all = $this->name_play();
          $comment = $this->comment_play();

$class = "fa fa-thumbs-up";
        return view('video.play')
            ->with('videos', $videos)
            ->with('lay', $lay)
            ->with('all', $all)
            ->with('comment', $comment)
            ->with('class', $class);
    }




    public function like(Request $request)
    {
        

        $videos = DB::table('videos')
            ->where('videoId', $request->videoId)
            ->first();

      DB::table('videos')
            ->where('videoId', $request->videoId)
            ->update(['likeCount' => $videos->likeCount+1]);



        return  $videos->likeCount+1;  

//         $lay = DB::table('videos')

//         ->orderBy('videoId', 'desc')
//             ->get();



//           $all = $this->name_play();
//           $comment = $this->comment_play();

// $class = "fa fa-thumbs-down";
//         return view('video.play')
//             ->with('videos', $videos)
//             ->with('lay', $lay)
//             ->with('all', $all)
//             ->with('comment', $comment)
//             ->with('class', $class);
    }


   public function unlike(Request $request)
    {
        

        $videos = DB::table('videos')
            ->where('videoId', $request->videoId)
            ->first();

      DB::table('videos')
            ->where('videoId', $request->videoId)
            ->update(['likeCount' => $videos->likeCount-1]);



        return  $videos->likeCount-1;  


    }




        public function delete($id)
    {
        //$account = Account::find($id);
        $video = DB::table('videos')
            ->where('videoId', $id)
            ->first();

        return view('video.delete')
            ->with('videos', $video);
    }

    public function destroy(Request $request)
    {
        $id = $request->videoId;
        Video::destroy($id);
        
        return redirect()->route('video.index');
    }



}
