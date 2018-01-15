
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
@if(session()->has('loggedUser'))
<br>

    <div class="col-container" style="width:100%; top: 0px;background-color: white; padding: 10px">
      <div class="col" style="width:300px;top: -15px;background-color: white;">
<h1 style="text-align:left;font-family: sans-serif;"> &nbsp;Tutorial Tube</h1>
</div>
   <div class="col" style=" margin-left: 700px;">



      @if(strlen(session()->get('loggedUser')->username) > 0 && (session()->get('loggedUser')->username == 'admin'))
       <h4>{{strtoupper(session()->get('loggedUser')->username)}} |
      <a href="{{route('logout.index')}}">Logout </a>  </h4>
      @elseif(strlen(session()->get('loggedUser')->username)  > 0)
       <h4>{{strtoupper(session()->get('loggedUser')->username)}} |
      <a href="{{route('logout.index')}}">Logout </a>  </h4>
      @else
      <h4>
      <a href="{{route('login.index')}}">Login </a> |
      <a href="{{route('registration.index')}}">Registration </a> </h4>
      @endif

   </div>
    </div>  

<div class="topnav" id="myTopnav" style="width: 100%;">
      <a href="{{route('video.index')}}">Home </a> 
      <a href="{{route('upload.index')}}">Upload</a>

      @if(strlen(session()->get('loggedUser')->username) > 0 && (session()->get('loggedUser')->username == 'admin'))
      <a href= "{{URL::to('list')}}">User List</a>
       @endif
      <br>
      <br>
     
</div>
<script>
function myFunction() {
    var x = document.getElementById("myTopnav");
    if (x.className === "topnav") {
        x.className += " responsive";
    } else {
        x.className = "topnav";
    }
}
</script>
@else

<br>

    <div class="col-container" style="width:100%; top: 0px;background-color: white; padding: 10px">
      <div class="col" style="width:300px;top: -15px;background-color: white;">
<h1 style="text-align:left;font-family: sans-serif;"> &nbsp;Tutorial Tube</h1>
</div>
   <div class="col" style=" margin-left: 700px;">
   <h4>
      <a href="{{route('login.index')}}">Login </a> |
      <a href="{{route('registration.index')}}">Registration </a> </h4>

   </div>
    </div> </div> 

<div class="topnav" id="myTopnav" style="width: 100%;">

      <a href="{{route('video.index')}}">Home </a> 
      <a href="{{route('upload.index')}}">Upload</a>
 <br> <br>
</div>
<script>
function myFunction() {
    var x = document.getElementById("myTopnav");
    if (x.className === "topnav") {
        x.className += " responsive";
    } else {
        x.className = "topnav";
    }
}
</script>
@endif
@yield('top')
</body>
</html>

