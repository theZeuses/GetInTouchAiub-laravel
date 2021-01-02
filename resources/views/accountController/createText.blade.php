<!DOCTYPE html>
<html>
<head>
	<title>Create Notice</title>
	<link rel="stylesheet" href="/assets/accountController/css/acStyle.css">
	<script type="text/javascript" src="/assets/accountController/js/jquery-3.5.1.js"></script>
	<script type="text/javascript" src="/assets/accountController/js/createText.js"></script>
</head>
<body>
	@include('accountController.acNavBar')
	<div id="workspace">
		<h1 align='center'>Send Text</h1>
		<br/>
		<table id="view">
			<form id="myform" method="post">
			    Receiver Id:<br/>
			    <input type="text" id="receiverid" name="receiverid" value="{{old('receiverid')}}"><br/>
			   	<br/>
				Text:<br/>
				<textarea rows="5" cols="80" id="text" name="text" value="{{old('text')}}"></textarea><br/>
				<input type="submit" name="submit" value="Send">
				<a href="{{route('accountController.achome')}}">
					<button type="button">
						Back
					</button>
				</a>
				<input type="hidden" id="_token" name="_token" value="{{csrf_token()}}">
				<input type="reset" id="reset" name="reset">
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