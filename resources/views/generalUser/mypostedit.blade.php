<!DOCTYPE html>
<html>
<head>
	<title>Edit Post</title>
	<link rel="stylesheet" href="/assets/generalUser/css/guStyle.css">
</head>
<body>
	@include('generalUser.guMenu')
	<div id="workspace">
		<h1 align='center'>Edit Post</h1>
		<br/>
		<table id="view">
			<form method="post" enctype="multipart/form-data">
			    My Id:<br/>
			    <input type="text" id="guid" name="guid" value="{{$guid}}" disabled><br/>
			   	<br/>
				Text:<br/>
				<textarea rows="5" cols="80" name="text">{{$text}}</textarea><br/>
				<input type="file" name="file">
				<input type="submit" name="submit" value="Post">
				<input type="hidden" id="_token" name="_token" value="{{csrf_token()}}">
				<input type="reset" id="reset" name="reset">
				<a href="{{route('generalUser.mypostlist')}}">
					<button type="button">
						Back
					</button>
				</a>
			</form>
		</table>
		<br/>
		<div id="error">
			@foreach($errors->all() as $err)
				{{$err}} <br>
			@endforeach
		</div>
	</div>
</body>
</html>