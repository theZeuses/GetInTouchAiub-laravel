<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="/assets/accountController/css/acStyle.css">
	<title>Account Controll Manager Home</title>
</head>
<body>
	@include('accountController.acNavBar')
	<div id="workspace">
		<h1 align='center'>Welcome Back</h1>
		<br/>
		<img src="{{$profile['profilepicture']}}" alt="Avatar" width="200" height="200">
		<h5>{{$profile['name']}}</h5>
		<br/>
	</div>
</body>
</html>