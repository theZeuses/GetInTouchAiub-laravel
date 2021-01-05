<!DOCTYPE html>
<html>
<head>
	<title>Request To Check Id Problem</title>
	<link rel="stylesheet" href="/assets/generalUser/css/guStyle.css">
</head>
<body>
	<div id="workspace">
		<h1 align='center'>Request To Check Id Problem</h1>
		<br/>
		<table id="view">
			<form method="post">
			    To:<br/>
			    <input type="text" id="towhom" name="towhom1" value="Account Control Manager" disabled><br/>
			   	<br/>
			   	Action Type:<br/>
			   	<input type="text" name="actiontype1" value="Check Id Problem" disabled>
				Text:<br/>
				<textarea rows="5" cols="80" id="text" name="text"></textarea><br/>
				<input type="submit" id="send" name="send" value="Send">
				<input type="reset" id="reset" name="reset">
				<input type="hidden" id="_token" name="_token" value="{{csrf_token()}}">
				<input type="hidden" id="towhom" name="towhom" value="Account Control Manager">
				<input type="hidden" name="actiontype" value="Check Id Problem">
				<a href="/login">
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