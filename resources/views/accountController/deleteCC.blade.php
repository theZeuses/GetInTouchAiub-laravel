<!DOCTYPE html>
<html>
<head>
	<title>Delete Content Control Manager</title>
	<link rel="stylesheet" href="/assets/accountController/css/acStyle.css">
</head>
<body>
	@include('accountController.acNavBar')
	<div id="workspace">
		<h5>Delete Content Control Manager</h5>
		<br/>
		<form method="post">
		<fieldset>
			<table>
				<tr>
					<td>CC Id :</td>
					<td>{{$ccid}}</td>
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
					<td>Account Status :</td>
					<td>{{$accountstatus}}</td>
				</tr>
			</table>
			<div>
				<h3>Are you sure?</h3>
				<input type="hidden" name="ccid" value="{{$ccid}}">
				<input type="hidden" name="_token" value="{{csrf_token()}}">
				<input type="submit" name="submit" value="Confirm">
				<a href="{{route('accountController.cclist')}}">
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