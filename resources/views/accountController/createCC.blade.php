<!DOCTYPE html>
<html>
<head>
	<title>Create Content Control Manager</title>
	<link rel="stylesheet" href="/assets/accountController/css/acStyle.css">
</head>
<body>
	@include('accountController.acNavBar')
	<div id="workspace">
		<h1 align='center'>Create Content Control Manager</h1>
		<br/>
		<table id="view">
			<form method="post" enctype="multipart/form-data">
				<tr>
					<td>CC ID</td>
					<td><input type="text" id="ccid" name="ccid" value="{{old('ccid')}}"></td>
				</tr>
				<tr>
					<td>Name</td>
					<td><input type="text" id="name" name="name" value="{{old('name')}}"></td>
				</tr>
				<tr>
					<td>Email</td>
					<td><input type="text" id="email" name="email" value="{{old('email')}}"></td>
				</tr>
				<tr>
					<td>Gender</td>
					<td>
						<input type="radio" name="gender" id="male" value="Male"> Male
					   	<input type="radio" name="gender" id="female" value="Female"> Female
					   	<input type="radio" name="gender" id="other" value="Other"> Other
					</td>
				</tr>
				<tr>
					<td>Date of Birth</td>
					<td><input type="text" id="dob" name="dob" value="{{old('dob')}}"></td>
				</tr>
				<tr>
					<td>Address</td>
					<td><input type="text" id="address" name="address" value="{{old('address')}}"></td>
				</tr>
				<tr>
					<td>Profile Picture</td>
					<td><input type="file" id="profilepicture" name="profilepicture"></td>
				</tr>
				<tr>
					<td colspan='2'>
						<a href="{{route('accountController.achome')}}">
							<button type="button">
								Back
							</button>
						</a>
						<input type="hidden" name="_token" value="{{csrf_token()}}">
						<input type="submit" name="submit" value="Create">
						<input type="reset" name="reset">
					</td>
				</tr>
			</form>
		</table>
		<div id="searchresult">
			@foreach($errors->all() as $err)
				{{$err}} <br>
			@endforeach
		</div>
	</div>
</body>
</html>