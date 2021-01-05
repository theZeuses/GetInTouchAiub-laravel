<!DOCTYPE html>
<html>
<head>
	<title>Create Notice</title>
	<link rel="stylesheet" href="/assets/accountController/css/acStyle.css">
</head>
<body>
	@include('accountController.acNavBar')
	<div id="workspace">
		<h1 align='center'>Create Notice</h1>
		<br/>
		<table id="view">
			<form id="myform" method="post">
			    To:<br/>
			   	<select id="towhom" name="towhom" value="{{old('towhom')}}">
			   		<option value="">None</option>
		   			<option value="General User">General User</option>
		   			<option value="Content Control Manager">Content Control Manager</option>
			   	</select><br/>
				Subject:<br/>
				<input type="text" id="noticesubject" name="noticesubject" value="{{old('noticesubject')}}"><br/>
				Body:<br/>
				<textarea rows="5" cols="80" id="noticebody" name="noticebody" value="{{old('noticebody')}}"></textarea><br/>
				<input type="submit" name="submit" value="Send">
				<input type="reset" id="reset" name="reset">
				<input type="hidden" name="_token" value="{{csrf_token()}}">
				<a href="{{route('accountController.achome')}}">
					<button type="button">
						Back
					</button>
				</a>
				<div id="output"></div>
			</form>
		</table>
		<br/>
		<div id="error">
			@foreach($errors->all() as $err)
				{{$err}} <br>
			@endforeach
		</div>
		<div style="color: red">{{session('msg')}} </div>
	</div>
</body>
</html>