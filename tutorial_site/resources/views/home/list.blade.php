<!DOCTYPE html>
<html>
<link rel="stylesheet" type="text/css" href="{{asset('css/app.css')}}">
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<head>
	<title>Userlist</title>
</head>
@extends('layout.header')

<body>
	@section('top')
	<h2> USER LIST </h2>
	<hr>


<div class="container">         
  <table class="table">
    <thead>
      <tr style="color:#2354a3;">
	        <th>ID</th>
			<th>NAME</th>
			<th>USERNAME</th>
			<th>EDIT</th>
			<th>DELETE</th>
      </tr>
    </thead>
    <tbody>
        @foreach($signup as $ulist)
			@if($ulist->userType != 'Admin')
			<tr>
				<td>{{$ulist->userId}}</td>
				<td>{{$ulist->name}}</td>
				<td>{{$ulist->password}}</td>

				<td> <a href="#">EDIT</a> </td>
				<td> <a href="#">DELETE</a></td>
			</tr>
			@endif
			@endforeach
	    </tbody>
	  </table>
	</div>
	@endsection

</body>
</html>

