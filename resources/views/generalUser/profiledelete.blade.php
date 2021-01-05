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
					<td>{{$profile['guid']}}</td>
				</tr>
				<tr>
					<td>Name :</td>
					<td>{{$profile['name']}}</td>
				</tr>
				<tr>
					<td>Email :</td>
					<td>{{$profile['acid']}}email</td>
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
					<h3>Are you sure to delete this Account?</h3>
					<input type="hidden" name="_token" value="{{csrf_token()}}">
					<input type="submit" name="submit" value="Confirm">
					<a href="{{route('generalUser.profile')}}">
						<button type="button">
							Back
						</button>
					</a>
				</div>
		</fieldset>
	</form>
	</div>
</body>
</html>