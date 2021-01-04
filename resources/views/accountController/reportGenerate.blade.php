<!DOCTYPE html>
<html>
<head>
	<title>Report Generate</title>
	<link rel="stylesheet" href="/assets/accountController/css/acStyle.css">
</head>
<body>
	@include('accountController.acNavBar')
	<div id="workspace">
		<h2 align='center'>Generate User Info</h2>
		<br/>
		<a href="{{route('accountController.userreportgenerate')}}">
			<button type="button">
				Click Here
			</button>
		</a>
		<br/>
		<br/>
		<h2 align='center'>Generate Notice Info</h2>
		<br/>
		<a href="{{route('accountController.noticereportgenerate')}}">
			<button type="button">
				Click Here
			</button>
		</a>
		<br/>
		<br/>
		<h2 align='center'>Generate General User Info</h2>
		<br/>
		<a href="{{route('accountController.gureportgenerate')}}">
			<button type="button">
				Click Here
			</button>
		</a>
		<br/>
		<br/>
		<div style="color: red">{{session('msg')}} </div>
	</div>
</body>
</html>