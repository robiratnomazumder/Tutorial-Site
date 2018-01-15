
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="{{asset('css/app.css')}}">
</head>
<body>
	
	<h2>Welcome home</h2>
	<h1>{{session('loggedUser')}}</h1>

	
	<a href="{{route('video.index')}}"><button>Videos </button></a></a> |
	<a href="{{route('logout.index')}}"><button>Logout </button></a>
	
	
	
	
	
</body>
</html>