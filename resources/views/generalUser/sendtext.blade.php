<!DOCTYPE html>
<html>
<head>
	<title>Send Message</title>
	<link rel="stylesheet" href="assets/generalUser/css/guStyle.css">
	<script type="text/javascript" src="/assets/generalUser/js/jquery-3.5.1.js"></script>
	<script type="text/javascript" src="/assets/generalUser/js/sendtext.js"></script>
</head>
<body>
	@include('generalUser.guMenu')
	<div id="workspace">
		<h1 align='center'>Send Message</h1>
		<br/>
		<table id="view">
			<form id="myform" method="post">
			    Receiver Id:<br/>
			    <input type="text" id="receiverid" name="receiverid" value="{{old('receiverid')}}"><br/>
			   	<br/>
				Text:<br/>
				<textarea rows="5" cols="80" id="text" name="text" value="{{old('text')}}"></textarea><br/>
				<input type="submit" name="submit" value="Send">
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