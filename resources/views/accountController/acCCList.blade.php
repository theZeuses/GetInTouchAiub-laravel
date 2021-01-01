<!DOCTYPE html>
<html>
<head>
	<title>Content COntrol Manager List</title>
	<link rel="stylesheet" href="/assets/accountController/css/acStyle.css">
	<script type="text/javascript" src="/assets/accountController/js/jquery-3.5.1.js"></script>
	<script type="text/javascript" src="/assets/accountController/js/searchCC.js"></script>
</head>
<body>
	@include("accountController.acNavBar")
	<div id="workspace">
		<h1 align='center'>Content Control Manager List</h1>
		<br/>
		<table id="view">
			<tr>
				<td>CC ID</td>
				<td>Name</td>
				<td>Email</td>
				<td>Gender</td>
				<td>Date Of Birth</td>
				<td>Address</td>
				<td>Profile Picture</td>
				<td>Account Status</td>
				<td>Action</td>
			</tr>
			@for($i=0; $i < count($cclist); $i++)
			<tr>
				<td>{{$cclist[$i]['ccid']}}</td>
				<td>{{$cclist[$i]['name']}}</td>
				<td>{{$cclist[$i]['email']}}</td>
				<td>{{$cclist[$i]['gender']}}</td>
				<td>{{$cclist[$i]['dob']}}</td>
				<td>{{$cclist[$i]['address']}}</td>
				<td><img width="50" src="{{$cclist[$i]['profilepicture']}}"></td>
				<td>{{$cclist[$i]['accountstatus']}}</td>
				<td>
					<a href="">Edit</a> | 
					<a href="">Delete</a>
				</td>
			</tr>
			@endfor
		</table>
		<br/>
		<h2 align='center'>Search Content Control Manager</h2>
		
		<form>
			<input type="text" id="searchkey" name="searchkey">
			<input type="button" name="search" value="Search">
		</form>
		<div id="searchresult">
		</div>
	</div>
</body>
</html>