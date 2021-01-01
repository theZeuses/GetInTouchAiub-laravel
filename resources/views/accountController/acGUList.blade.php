<!DOCTYPE html>
<html>
<head>
	<title>General User List</title>
	<link rel="stylesheet" href="/assets/accountController/css/acStyle.css">
	<script type="text/javascript" src="/assets/accountController/js/jquery-3.5.1.js"></script>
	<script type="text/javascript" src="/assets/accountController/js/searchGU.js"></script>
</head>
<body>
	@include('accountController.acNavBar')
	<div id="workspace">
		<h1 align='center'>General User List</h1>
		<br/>
		<table id="view">
			<tr>
				<td>GU ID</td>
				<td>Name</td>
				<td>Email</td>
				<td>Gender</td>
				<td>Date Of Birth</td>
				<td>Address</td>
				<td>Profile Picture</td>
				<td>User Status</td>
				<td>Account Status</td>
				<td>Action</td>
			</tr>
			@for($i=0; $i < count($gulist); $i++)
			<tr>
				<td>{{$gulist[$i]['guid']}}</td>
				<td>{{$gulist[$i]['name']}}</td>
				<td>{{$gulist[$i]['email']}}</td>
				<td>{{$gulist[$i]['gender']}}</td>
				<td>{{$gulist[$i]['dob']}}</td>
				<td>{{$gulist[$i]['address']}}</td>
				<td><img width="50" height="45" src="{{$gulist[$i]['profilepicture']}}"></td>
				<td>{{$gulist[$i]['userstatus']}}</td>
				<td>{{$gulist[$i]['accountstatus']}}</td>
				<td>
					<a href="">Temporarily Block</a> | 
					<a href="">Banned</a> | 
					<a href="{{route('accountController.deletegu', $gulist[$i]['id'])}}">Remove</a>
				</td>
			</tr>
			@endfor
		</table>
		<br/>
		<h2 align='center'>Search General User</h2>
		
		<form>
			<input type="text" id="searchkey" name="searchkey">
			<input type="button" name="search" value="Search">
		</form>

		<div id="searchresult">
		</div>
	</div>
</body>
</html>