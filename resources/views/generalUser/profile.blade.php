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
			<br/>
			<table>
				<tr>
					<td>GU Id :</td>
					<td>{{$id}}</td>
				</tr>
				<tr>
					<td>Name :</td>
					<td>{{$name}}</td>
				</tr>
				<tr>
					<td>Email :</td>
					<td>{{$email}}</td>
				</tr>
				<tr>
					<td>Gender :</td>
					<td>{{$gender}}</td>
				</tr>
				<tr>
					<td>Date Of Birth :</td>
					<td>{{$dob}}</td>
				</tr>
				<tr>
					<td>Address :</td>
					<td>{{$address}}</td>
				</tr>
				<tr>
					<td>User Status :</td>
					<td>{{$userstatus}}</td>
				</tr>
				<tr>
					<td>Account Status :</td>
					<td>{{$accountstatus}}</td>
				</tr>
			</table>
			
		</fieldset>
	</form>
	</div>
</body>
</html>