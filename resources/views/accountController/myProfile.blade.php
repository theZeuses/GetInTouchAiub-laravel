<!DOCTYPE html>
<html>
<head>
	<title>My Profile</title>
	<link rel="stylesheet" href="/assets/accountController/css/acStyle.css">
	<script type="text/javascript" src="/assets/accountController/js/jquery-3.5.1.js"></script>
</head>
<body>
	@include('accountController.acNavBar')
	<div id="workspace">
		<form method="post">
		<fieldset>
			<h2>{{$profile['name']}}</h2>
			<br/>
			<table id="view">
				<tr colspan="2">
					<img src="{{$profile['profilepicture']}}" alt="Avatar" width="200" height="200">
					<br/>
				</tr>
				<tr>
					<td>AC Id :</td>
					<td>{{$profile['acid']}}</td>
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
					<td>accountstatus :</td>
					<td>{{$profile['accountstatus']}}</td>
				</tr>
			</table>
			<div>
				
				<a href="">
					<button type="button">
						Update Profile
					</button>
				</a>
				<a href="">
					<button type="button">
						Deactivate Profile
					</button>
				</a>
				<a href="">
					<button type="button">
						Change Password
					</button>
				</a>
				<a href="{{route('accountController.achome')}}">
					<button type="button">
						Back
					</button>
				</a>
				<input type="hidden" name="acid" value="<%=user[0].acid %>">
			</div>
		</fieldset>
	</form>
	</div>
</body>
</html>