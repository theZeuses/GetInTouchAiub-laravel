<!DOCTYPE html>
<html>
<head>
	<title>Post New Content</title>
	<link rel="stylesheet" href="/assets/generalUser/css/guStyle.css">
	<script type="text/javascript" src="/assets/generalUser/js/jquery-3.5.1.js"></script>
</head>
<body>
	@include('generalUser.guMenu')
	<div id="workspace">
		<h1 align='center'>Post New Content</h1>
		<br/>
		<table id="view">
			<form method="post" enctype="multipart/form-data">
			    My Id:<br/>
			    <input type="text" id="guid" name="guid" value="{{session('username')}}" disabled><br/>
			   	<br/>
				Text:<br/>
				<textarea rows="5" cols="80" id="text" name="text" value="{{old('text')}}"></textarea><br/>
				<input type="file" name="file">
				<input type="submit" name="submit" value="Post">
				<input type="hidden" id="_token" name="_token" value="{{csrf_token()}}">
				<input type="reset" id="reset" name="reset">
				<a href="{{route('generalUser.home')}}">
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
		<div style="color: blue">{{session('msg')}} </div>
	</div>
</body>
</html>