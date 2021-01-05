<!DOCTYPE html>
<html>
<head>
	<title>Update Profile</title>
	<link rel="stylesheet" href="/assets/generalUser/css/guStyle.css">
	<script type="text/javascript" src="/assets/generalUser/js/jquery-3.5.1.js"></script>
</head>
<body>
	@include('generalUser.guMenu')
	<div id="workspace">
		<form method="post">
			<input type="hidden" name="_token" value="{{csrf_token()}}">
			<fieldset>
				<legend>Update Profile</legend>
			<table>
				<tr>
					<td>GU Id :</td>
					<td><input type="text" id="guid" name="guid" value="{{$profile['guid']}}" disabled>
				</tr>
				<tr>
					<td>Name :</td>
					<td><input type="text" name="name" value="{{$profile['name']}}"></td>
				</tr>
				<tr>
					<td>Email :</td>
					<td><input type="text" name="email" value="{{$profile['email']}}"></td>
				</tr>
				<tr>
					<td>Date Of Birth :</td>
					<td><input type="text" name="dob" value="{{$profile['dob']}}"></td>
				</tr>
				<tr>
					<td>Address :</td>
					<td><input type="text" name="address" value="{{$profile['address']}}"></td>
				</tr>
				<tr>
					<td colspan='2'>
						<input type="submit" name="update" value="Update Profile">
						<a href="{{route('generalUser.profile')}}">
							<button type="button">
								Back
							</button>
						</a>
						<input type="hidden" name="guid" value="{{$profile['guid']}}">
						<input type="hidden" name="_token" value="{{csrf_token()}}">
					</td>
				</tr>
			</table>
			</fieldset>
		</form>
		<div>
			@foreach($errors->all() as $err)
				{{$err}} <br>
			@endforeach
		</div>
	</div>
</body>
</html>