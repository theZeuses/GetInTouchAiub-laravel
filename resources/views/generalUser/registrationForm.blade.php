<!DOCTYPE html>
<html>
<head>
	<title>Signup</title>
	<link rel="stylesheet" href="/assets/generalUser/css/guStyle.css">
</head>
<body>
	<div id="workspace">
		<h1 align='center'>Signup</h1>
		<br/>
		<table id="view">
			<form method="post" enctype="multipart/form-data">
				<tr>
					<td>GU ID</td>
					<td><input type="text" id="guid" name="guid" value="{{old('guid')}}"></td>
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
					   	<input type="radio" name="gender" id="female" value="<Female"> Female
					   	<input type="radio" name="gender" id="other" value="<Other"> Other
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
					<td><input type="file" id="image" name="image"></td>
				</tr>
				<tr>
					<td>User Status</td>
					<td>
						<select id="userstatus" name="userstatus">
					   		<option value="">None</option>
				   			<option value="Student">Student</option>
				   			<option value="Faculty">Faculty</option>
					   	</select>
					</td>
				</tr>
				<tr>
					<td colspan='2'>
						<a href="/login">
							<button type="button">
								Back
							</button>
						</a>
						<input type="submit" name="submit" value="Sign Up">
						<input type="hidden" name="_token" value="{{csrf_token()}}">
						<input type="reset" name="reset">
					</td>
				</tr>
			</form>
		</table>
		<div align="center">
			@foreach($errors->all() as $err)
				{{$err}} <br>
			@endforeach
		</div>
	</div>
</body>
</html>