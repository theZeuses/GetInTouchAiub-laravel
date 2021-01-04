<!DOCTYPE html>
<html>
<head>
	<title>My Post Delete</title>
	<link rel="stylesheet" href="/assets/generalUser/css/guStyle.css">
	<script type="text/javascript" src="/assets/generalUser/js/jquery-3.5.1.js"></script>
</head>
<body>
	@include('generalUser.guMenu')
	<div id="workspace">
		<form method="post">
		<fieldset>
			<legend>Delete Post</legend>
			<table>
				<tr>
					<td>GU Id :</td>
					<td>{{$guid}}</td>
				</tr>
				<tr>
					<td>Text :</td>
					<td>{{$text}}</td>
				</tr>
				<tr>
					<td>File :</td>
					<td>{{$file}}</td>
				</tr>
				<tr>
					<td>Approvedby :</td>
					<td>{{$approveby}}</td>
				</tr>
			</table>
			<div>
				<h3>Are you sure to delete your post?</h3>
				<input type="submit" name="submit" value="Confirm">
				<a href="{{route('generalUser.MyPostList')}}">
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