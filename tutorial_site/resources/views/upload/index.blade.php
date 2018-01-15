<!DOCTYPE html> 
<html> 
<link rel="stylesheet" type="text/css" href="{{asset('css/app.css')}}">
<link href="//vjs.zencdn.net/4.12/video-js.css" rel="stylesheet">
<title>Upload</title>

@extends('layout.header')
<body>	

@section('top')
<hr>
<BR>
<br>
<div align="center">
	
	 <form action="{{route('upload.store')}}" method="post" enctype="multipart/form-data">
				{{csrf_field()}}
				 <h2>Choose Video File </h2><br>

				 @if(Session::has('err'))
	        <div class="alert alert-danger" role="alert" style="width:430px;padding: 7px 5px; margin-left:55px; text-align: center; background-color: #f74c4c;color: white;">
		       {{ Session::get('err') }}
		       @php  Session::forget('err');   
		       @endphp
		    </div>
	          @endif

	          @if(Session::has('uploaded'))
	        <div class="alert alert-danger" role="alert" style="width:430px;padding: 7px 5px; margin-left:55px; text-align: center; background-color: #87cc4f;color: white;">
		       {{ Session::get('uploaded') }}
		       @php  Session::forget('uploaded');   
		       @endphp
		    </div>
	          @endif

	           @if(Session::has('abcd'))
	        <div class="alert alert-danger" role="alert" style="width:430px;padding: 7px 5px; margin-left:55px; text-align: center; background-color: #f74c4c;color: white;">
		       {{ Session::get('abcd') }}
		       @php  Session::forget('abcd');   
		       @endphp
		    </div>
	          @endif

				<br> <input type="file" name="file">
				<br>
                <input type="text" name="caption" placeholder="Caption" style="width: 250px;"> <br>
               <br>
                <select name="category" id="category" style="width: 150px;">
				   <option value="" > category </option>
				   <option value="Education"> Education </option>
				   <option value="Entertainment"> Entertainment </option>
				   <option value="Food"> Food </option>
				   <option value="Music"> Music </option>
				   <option value="Productivity"> Productivity </option>
				   <option value="Sports"> Sports </option>
				   
				   
				   
				   
				</select> 

                <br> <br>
                &nbsp;<textarea type="text" name="description"> Description</textarea>
				<br/>
				<input type="submit" value="Upload">
			</form>

			 @if ($errors->any())
		            @foreach ($errors->all() as $error)
		                <h5 style="color: red;"> {{ $error }} </h5> <br>
		            @endforeach
					
				@endif 
	</div>
@endsection
</body>
</html>