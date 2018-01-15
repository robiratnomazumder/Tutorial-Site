
<!DOCTYPE html> 
<html> 
<link rel="stylesheet" type="text/css" href="{{asset('css/app.css')}}">

<title>Register Here</title>

@extends('layout.header')

<body>	

@section('top')
<hr>
		
<div style="margin-left: 15px;width: 95%;"> </div>
	<table border="0" width="100%">
		<tr>
			<td width="100"></td>
			<td>
				<br/>
				<center> <h2> Registration</h2>
				<form action="{{route('registration.verify')}}" method="post">
				{{csrf_field()}}
						<table>
							<tr>
								<td>FULL NAME: </td>
								<td><input type="text" name="name" placeholder="Minimum 5"></td>
							</tr>
							<tr>
								<td>EMAIL: </td>
								<td><input type="text" name="email" placeholder="YourEmail@example.com"></td>
							</tr>
							<tr>
								<td>USERNAME: </td>
								<td><input type="text" name="username" placeholder="Unique User Name"></td>
							</tr>
							<tr>
								<td>PASSWORD: </td>
								<td><input type="password" name="password" placeholder="Minimum 4"></td>
							</tr>
							<tr>
								<td>CONFIRM PASSWORD: </td>
								<td><input type="password" name="password_conf" placeholder="Re-type Password"></td>
							</tr>
							
							<tr>
								<td></td>
								<td><input type="submit" value="Signup"></td>
							</tr>
							<tr>
								<td></td>
								<td>
									<br/>
									Click <a href="{{route('login.index')}}">here</a> to login
								</td>
							</tr>
						</table>
					</form>
					<br/>
					<br/>

					    @if ($errors->any())
					        
				            @foreach ($errors->all() as $error)
				                <li>{{ $error }}</li>
				            @endforeach
					
                    @endif

				</center>
			</td>
			<td width="100"></td>
		</tr>
	</table>

@endsection
</body>
</html>