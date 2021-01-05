<!DOCTYPE html>
<html>
<head>
	<title>General User Home</title>
</head>
<body>
	@include('generalUser.guMenu')
	<div id="workspace">
		<h1 align='center'>Welcome Home</h1>
		<br/>
		<h5>{{$profile['name']}}</h5>
	</div>
</body>
</html>