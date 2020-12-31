<!DOCTYPE html>
<html>
<head>
	<title>Delete Profile</title>
	<link rel="stylesheet" href="/assets/generalUser/css/guStyle.css">
	<script type="text/javascript" src="/assets/generalUser/js/jquery-3.5.1.js"></script>
</head>
<body>
	@include('generalUser.guMenu')
	<div id="workspace">
		<form method="post">
		<fieldset>
			<legend>Delete Profile</legend>
			<table>
				<tr>
					<td>GU Id :</td>
					<td>{{$guid}}</td>
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
			<div>
				<tr>
				<td colspan="2">
					<h5>Are you sure to delete This Account?</h5><br>
					<input type="submit" name="submit" value="Yes">
					<button>
						<a href="{{route('generalUser.profile')}}">No</a>
					</button>
					<input type="hidden" name="_token" value="{{csrf_token()}}">
				</td>
			</tr>
			</div>
		</fieldset>
	</form>
	</div>
</body>
</html>