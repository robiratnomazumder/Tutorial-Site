<!DOCTYPE html> 
<html> 
<link rel="stylesheet" type="text/css" href="{{asset('css/app.css')}}">

<title>Login Here</title>

<link href="{{ asset('css/app.css') }}" rel="stylesheet">
@extends('layout.header')


<body>

@section('top')

<br>
<br><br><br>
	<center> <h2>Login</h2>
<br>
		@if(Session::has('create'))
        <div class="alert alert-danger" role="alert" style="width:430px;padding: 7px 5px; margin-left:475px; text-align: center; background-color: #87cc4f;color: white;">
	       {{ Session::get('create') }}
	       @php  Session::forget('create');  
	       @endphp
	    </div>
        @endif
		
	<form method="post">
	{{csrf_field()}}
		<table>
			<tr>
				<td>USERNAME</td>
				<td><input type="text" name="username" value="{{session('username')}}"></td>
			</tr>
			<tr>
				<td>PASSWORD</td>
				<td><input type="password" name="password"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" value="Login"></td>
			</tr>
		</table>
	</form>

	<div>
             @if ($errors->any())
			  
			        
	            @foreach ($errors->all() as $error)
	                <li>{{ $error }}</li>
	            @endforeach
			        

			  @endif
</div>
</center>
@endsection
</body>
</html>