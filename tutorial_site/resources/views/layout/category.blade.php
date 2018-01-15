<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

    <div class="vertical-menu">
	  <a class="active">Category</a>
	  <a href="{{URL::to('/sports')}}">Sports </a>
	  <a href="{{URL::to('/music')}}">Music</a>
	  <a href="{{URL::to('/education')}}">Education</a>
	  <a href="{{URL::to('/food')}}">Food</a>
	   <a href="{{URL::to('/entertainment')}}">Entertainment</a>
	</div>

   


@yield('category')




</body>
</html>