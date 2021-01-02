<!DOCTYPE html>
<html>
<head>
	<title>Profile</title>
	<link rel="stylesheet" href="assets/generalUser/css/guStyle.css">
	<script type="text/javascript" src="/assets/generalUser/js/jquery-3.5.1.js"></script>
</head>
<body>
	@include('generalUser.guMenu')
	<div id="workspace">
		<form method="post">
		<fieldset>
			<h2>{{$profile['name']}}</h2>
			<br/>
			<table>
				<tr>
					<td>GU Id :</td>
					<td>{{$profile['guid']}}</td>
				</tr>
				<tr>
					<td>Name :</td>
					<td>{{$profile['name']}}</td>
				</tr>
				<tr>
					<td>Email :</td>
					<td>{{$profile['email']}}</td>
				</tr>
				<tr>
					<td>Gender :</td>
					<td>{{$profile['gender']}}</td>
				</tr>
				<tr>
					<td>Date Of Birth :</td>
					<td>{{$profile['dob']}}</td>
				</tr>
				<tr>
					<td>Address :</td>
					<td>{{$profile['address']}}</td>
				</tr>
				<tr>
					<td>User Status :</td>
					<td>{{$profile['userstatus']}}</td>
				</tr>
				<tr>
					<td>Account Status :</td>
					<td>{{$profile['accountstatus']}}</td>
				</tr>
			</table>
			<div>
				<a href="{{route('generalUser.profileedit')}}">
					<button type="button">
						Update Profile
					</button>
				</a>
				<a href="{{route('generalUser.profiledelete')}}">
					<button type="button">
						Delete Profile
					</button>
				</a>
				<a href="{{route('generalUser.home')}}">
					<button type="button">
						Back
					</button>
				</a>
			</div>
			<input type="hidden" name="guid" value="{{$profile['guid']}}">
		</fieldset>
	</form>
	</div>
</body>
</html>