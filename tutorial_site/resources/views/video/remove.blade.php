<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h2>Delete Confirmation</h2>
	<a href="{{route('video.index')}}">Back</a>
	<br/><br/>
	<table>
		<tr>
			<td>ACCOUNT NO:</td>
		</tr>
		<tr>
			<td>ACCOUNT NAME:</td>
		</tr>
		<tr>
			<td>BALANCE:</td>
		</tr>
		<tr>
			<td>LAST TRANSACTION:</td>
		</tr>
	</table>
	<h4>Are you sure? This cannot be undone!!!!!!!</h4>
	<form method="post">
		{{csrf_field()}}
		
		<input type="submit" value="Confirm">
	</form>
</body>
</html>