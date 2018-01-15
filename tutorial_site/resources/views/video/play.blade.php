
<!DOCTYPE html> 
<html> 
<link rel="stylesheet" type="text/css" href="{{asset('css/app.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('css/app.js')}}">
<link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link href="//vjs.zencdn.net/4.12/video-js.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


<title>{{$videos->videoName}} - {{$videos->caption}}</title>



<body>	

<div style="color: blue;margin-left: 30px;font-size: 16px;" align="left">
<h1 style="text-align:left;font-family: sans-serif;"> Tutorial Tube</h1>
<a href="{{route('video.index')}}">Home </a>  &nbsp;&nbsp;&nbsp;
<a href="{{route('upload.index')}}">Upload</a> </div>
<br>
<div style="position: absolute;padding-left: 2px;visibility: show;">
	   
	   <video id="example_video_1" class="video-js vjs-default-skin vjs-big-play-centered"
	           height="440" width="720" style="visibility: hidden;">

	<source src="#" type="video/mp4">  
	<source src="#" type="video/3gpp">  
	<source src="#" type="video/3gp">  
	<source src="#" type="video/ogg">
	</video>


<h4>&nbsp;<b>{{$videos->caption}} </b><i style="right: 0;;margin-left: 80%;" id="like"></i><br>
	&nbsp;{{$videos->description}}
	<i style="left: 0;;margin-left: 87%;" id="views">Views: {{$videos->views}}</i><br></h4>

<div style="position: absolute;">
<h3 style="color: #759df9;margin-left: 80%; margin-bottom: : -20px" >

@if(session()->has('loggedUser'))

@if(session('loggedUser')->username =='admin')


<a href="{{route('video.delete', [$videos->videoId])}}">Delete</a> 


@else

<a href="#">Report</a>

<!-- <i onclick="myFunction(this)" class="{{$class}}" id="like_button"> </i> -->
<button id="like_button"  value="{{$videos->videoId}}">Like</button>

<script type="text/javascript">
var likeCount = {{$videos->likeCount}};
 document.getElementById("like").innerHTML = "Likes: " + likeCount;


</script>



@endif
@endif
</h3>

</div>
</div>

<div style="background-color: white;visibility: show;">
   <video id="example_video_1" class="video-js vjs-default-skin vjs-big-play-centered"
	           height="440" width="720" controls autoplay>

	<source src="{{URL::asset('uploads/'.$videos->videoName.'')}}" type="video/mp4">  
	<source src="{{URL::asset('uploads/'.$videos->videoName.'')}}" type="video/3gpp">  
	<source src="{{URL::asset('uploads/'.$videos->videoName.'')}}" type="video/3gp">  
	<source src="{{URL::asset('uploads/'.$videos->videoName.'')}}" type="video/ogg">
	</video>

</div>


<div style="position: absolute; background-color: #4D545D;width: 40%; height: 50%; top: 0; right: 0; overflow-y: auto;"> 




		@foreach($lay as $vid)
	


  <div id="imgSlider" style='float:left; padding: 8px;' >

			<video id="example_video_1" class="video-js vjs-default-skin vjs-big-play-centered"
           controls preload="off" height="125" width="225">

			<source src="{{URL::asset('uploads/'.$vid->videoName.'')}}" type="video/mp4">  
			<source src="{{URL::asset('uploads/'.$vid->videoName.'')}}" type="video/3gpp">  
			<source src="{{URL::asset('uploads/'.$vid->videoName.'')}}" type="video/ogg">
			</video>
		
<br>
Views: {{$vid->views}}
<h5><a href="{{route('video.play', [$vid->videoId])}} ">{{$vid->caption}}</a></h5>

<br>

 </div>
@endforeach
 </div>

@if(session()->has('loggedUser'))


<div style="float:right; background-color: #00B1B3;width: 40%;position: fixed;overflow-y: auto;height: 50%; bottom: 0;right: 0; text-align: center;">  


	<h3>Comments</h3>  </br>
     

			
          <form action="{{route('comment.store')}}" method="post" id="comment_from">
	   {{csrf_field()}}
			<b> {{session()->get('loggedUser')->name}} </b><input id="post" type="text" name="comment" style="width: 340px;" placeholder="comment here">

       <input id="user_id" name="user_id" type="hidden" value="{{session()->get('loggedUser')->userId}}" />
       <input id="video_id" name="video_id" type="hidden" value="{{$videos->videoId}}" />

       <form>

	  </form>
	  <div>
       @foreach($comment as $cmnt)
        @foreach($all as $ulist)

        @if(($ulist->userId) == ($cmnt->user_id) && ($videos->videoId == $cmnt->video_id))

       
        <h3> {{$ulist->name}} <br></h3>
        
        @if($videos->videoId == $cmnt->video_id) 
        <h4>{{$cmnt->post}} </h4> &nbsp;
        
          @endif

        @endif

        @endforeach
	    @endforeach


	    </div>




 </div>


@endif



<div style="float: left;width: 50%;height: 50%">
	<br><br>
	<br><br><br>

</div>




</div>






<script type="text/javascript" src = "{{asset('js')}}/app.js"></script>
<script type="text/javascript" src = "{{asset('js')}}/video_like.js"></script>
<script type="text/javascript" src = "{{asset('js')}}/comment_save.js"></script>


</body> 
</html>