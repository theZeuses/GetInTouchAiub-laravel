<!DOCTYPE html>
<html>
<head>
	<title>Update Profile</title>
	<link rel="stylesheet" href="/assets/accountController/css/acStyle.css">
	<script type="text/javascript" src="/assets/accountControlManager/js/jquery-3.5.1.js"></script>
</head>
<body>
	@include('accountController.acNavBar')
	<div id="workspace">
		<form method="post" enctype="multipart/form-data">
		<fieldset>
			<h2>{{$profile['name']}}</h2>
			<br/>
			<table id="view">
				<tr>
					<td>AC Id :</td>
					<td><input type='text' id='id' name='id' value="{{$profile['acid']}}" disabled></td>
				</tr>
				<tr>
					<td>Name :</td>
					<td><input type='text' id='name' name='name' value="{{$profile['name']}}"></td>
				</tr>
				<tr>
					<td>Email :</td>
					<td><input type='text' id='email' name='email' value="{{$profile['email']}}"></td>
				</tr>
				<tr>
					<td>Date Of Birth :</td>
					<td><input type='text' id='dob' name='dob' value="{{$profile['dob']}}"></td>
				</tr>
				<tr>
					<td>Address :</td>
					<td><input type='text' id='address' name='address' value="{{$profile['address']}}"></td>
				</tr>
				<tr>
					<td>Profile Picture :</td>
					<td><input type='file' id='profilepicture' name='profilepicture'></td>
				</tr>
				<tr>
					<td colspan='2'>
						<input type="submit" name="update" value="Update Profile">
						<a href="{{route('accountController.getmyinfo')}}">
							<button type="button">
								Back
							</button>
						</a>
						<input type="hidden" name="acid" value="{{$profile['acid']}}">
						<input type="hidden" name="_token" value="{{csrf_token()}}">
					</td>
				</tr>
			</table>
		</fieldset>
	</form>
	<div id="result">
		@foreach($errors->all() as $err)
			{{$err}} <br>
		@endforeach
	</div>
	</div>
</body>
</html>