<!DOCTYPE html>
<html>
<head>
	<title>Deactivate Profile</title>
	<link rel="stylesheet" href="/assets/accountController/css/acStyle.css">
</head>
<body>
	@include('accountController.acNavBar')
	<div id="workspace">
		<form method="post">
		<fieldset>
			<h2>{{$profile['name']}}</h2>
			<br/>
			<form method='post'>
				<table id="view">
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
						<td>Account Status :</td>
						<td>{{$profile['accountstatus']}}</td>
					</tr>
				</table>
				<div>
					<h3>Are you sure?</h3>
					<input type="hidden" name="acid" value="{{$profile['acid']}}">
					<input type="hidden" name="_token" value="{{csrf_token()}}">
					<input type="submit" name="submit" value="Confirm">
					<a href="{{route('accountController.getmyinfo')}}">
						<button type="button">
							Back
						</button>
					</a>
				</div>
			</form>
		</fieldset>
	</form>
	</div>
</body>
</html>