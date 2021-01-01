<!DOCTYPE html>
<html>
<head>
	<title>Decline Request</title>
	<link rel="stylesheet" href="/assets/accountController/css/acStyle.css">
</head>
<body>
	@include('accountController.acNavBar')
	<div id="workspace">
		<form method="post">
		<fieldset>
			<h5>Decline Request</h5>
			<br>
			<table>
				<tr>
					<td>Gu Id :</td>
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
			</table>
			<div>
				<h3>Are you sure?</h3>
				<input type="hidden" name="_token" value="{{csrf_token()}}">
				<input type="submit" name="submit" value="Confirm">
				<a href="{{route('accountController.verifygeneraluser')}}">
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