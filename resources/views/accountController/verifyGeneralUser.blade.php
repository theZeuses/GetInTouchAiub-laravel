<!DOCTYPE html>
<html>
<head>
	<title>Verify User</title>
	<link rel="stylesheet" href="/assets/accountController/css/acStyle.css">
</head>
<body>
	@include('accountController.acNavBar')
	<div id="workspace">
		<h5 align='center'>Verify Signup Requests</h5>
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
				<td>Action</td>
			</tr>
			@for($i=0; $i < count($list); $i++)
			<tr>
				<td>{{$list[$i]['guid']}}</td>
				<td>{{$list[$i]['name']}}</td>
				<td>{{$list[$i]['email']}}</td>
				<td>{{$list[$i]['gender']}}</td>
				<td>{{$list[$i]['dob']}}</td>
				<td>{{$list[$i]['address']}}</td>
				<td><img width="50" height="45" src="{{$list[$i]['profilepicture']}}"></td>
				<td>{{$list[$i]['userstatus']}}</td>
				<td>
					<a href="{{route('accountController.approveregrequest', $list[$i]['id'])}}">Approve</a>
					<a href="{{route('accountController.declineregrequest', $list[$i]['id'])}}">Decline</a>
				</td>
			</tr>
			@endfor
		</table>
		<div id="searchresult">
		</div>
	</div>
</body>
</html>