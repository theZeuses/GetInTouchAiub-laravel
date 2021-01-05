<!DOCTYPE html>
<html>
<head>
	<title>Admin List</title>
	<link rel="stylesheet" href="/assets/accountController/css/acStyle.css">
	<script type="text/javascript" src="/assets/accountController/js/jquery-3.5.1.js"></script>
	<script type="text/javascript" src="/assets/accountController/js/searchAdmin.js"></script>
</head>
<body>
	@include('accountController.acNavBar')
	<div id="workspace">
		<h1 align='center'>Admin List</h1>
		<br/>
		<table id="view">
			<tr>
				<td>Admin ID</td>
				<td>Name</td>
				<td>Email</td>
				<td>Gender</td>
				<td>Date Of Birth</td>
				<td>Address</td>
				<td>Profile Picture</td>
			</tr>
			@for($i=0; $i < count($adminlist); $i++)
			<tr>
				<td>{{$adminlist[$i]['adminid']}}</td>
				<td>{{$adminlist[$i]['name']}}</td>
				<td>{{$adminlist[$i]['email']}}</td>
				<td>{{$adminlist[$i]['gender']}}</td>
				<td>{{$adminlist[$i]['dob']}}</td>
				<td>{{$adminlist[$i]['address']}}</td>
				<td><img width="50" height="45" src="{{$adminlist[$i]['profilepicture']}}"></td>
			</tr>
			@endfor
		</table>
		<br/>
		<h2 align='center'>Search Admin</h2>
		
		<form>
			<input type="text" id="searchkey" name="searchkey">
			<input type="button" name="search" value="Search">
		</form>

		<div id="searchresult">
		</div>
	</div>
</body>
</html>