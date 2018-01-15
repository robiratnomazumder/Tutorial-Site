<!DOCTYPE html> 
<html> 
<link rel="stylesheet" type="text/css" href="{{asset('css/app.css')}}">
<link href="//vjs.zencdn.net/4.12/video-js.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<title>{{$videos->videoName}} - {{$videos->caption}}</title>

@extends('layout.header')

<body>	

@section('top')

<center>
	<div>
	   
	   <video id="example_video_1" class="video-js vjs-default-skin vjs-big-play-centered"
	           height="500" width="780">

	<source src="{{URL::asset('uploads/'.$videos->videoName.'')}}" type="video/mp4">  
	<source src="{{URL::asset('uploads/'.$videos->videoName.'')}}" type="video/3gpp">  
	<source src="{{URL::asset('uploads/'.$videos->videoName.'')}}" type="video/3gp">  
	<source src="{{URL::asset('uploads/'.$videos->videoName.'')}}" type="video/ogg">
	</video>


	<p id="like"></p>


<h3>{{$videos->caption}} </h3> 
<h4> <a href="#" >{{$videos->category}}</a> <br> 
	{{$videos->description}} </h4>


<button onclick="alert('{{$videos->description}}')">About</button>

<br>

</div>
<h4>Are you sure? This cannot be undone.</h4>
	<form method="post">
		{{csrf_field()}}
		<input type="hidden" name="videoId" value="{{$videos->videoId}}">
		<input type="submit" value="Confirm">
	</form>
</center>

@endsection



</body> 
</html>