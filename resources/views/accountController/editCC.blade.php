<!DOCTYPE html>
<html>
<head>
	<title>Edit Content Control Manager</title>
	<link rel="stylesheet" href="/assets/accountController/css/acStyle.css">
</head>
<body>
	@include('accountController.acNavBar')
	<div id="workspace">
		<h1 align='center'>Edit Content Control Manager</h1>
		<br/>
		<table id="view">
			<form method='post' enctype="multipart/form-data">
				<tr>
					<td>CC ID</td>
					<td><input type="text" id="ccid" name="ccid" value="{{$ccid}}" disabled></td>
				</tr>
				<tr>
					<td>Name</td>
					<td><input type="text" id="name" name="name" value="{{$name}}"></td>
				</tr>
				<tr>
					<td>Email</td>
					<td><input type="text" id="email" name="email" value="{{$email}}"></td>
				</tr>
				<tr>
					<td>Date of Birth</td>
					<td><input type="text" id="dob" name="dob" value="{{$dob}}"></td>
				</tr>
				<tr>
					<td>Address</td>
					<td><input type="text" id="address" name="address" value="{{$address}}"></td>
				</tr>
				<tr>
					<td>Profile Picture</td>
					<td><input type="file" id="profilepicture" name="profilepicture"></td>
				</tr>
				<tr>
					<td colspan='2'>
						<a href="{{route('accountController.cclist')}}">
							<button type="button">
								Back
							</button>
						</a>
						<input type="submit" name="submit" value="Update">
						<input type="hidden" name="_token" value="{{csrf_token()}}">
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