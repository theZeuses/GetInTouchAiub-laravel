<!DOCTYPE html>
<html>
<head>
	<title>Inbox</title>
	<link rel="stylesheet" href="/assets/accountController/css/acStyle.css">
</head>
<body>
	@include('accountController.acNavBar')
	<div id="workspace">
		<h2 align='center'>Text From General Users</h2>
		<br/>
		<a href="{{route('accountController.viewtextgu')}}">
			<button type="button">
				Click Here
			</button>
		</a>
		<br/>
		<h2 align='center'>Text From Content Control Manager</h2>
		<br/>
		<a href="{{route('accountController.viewtextcc')}}">
			<button type="button">
				Click Here
			</button>
		</a>
		<br/>
		<div id="searchresult">
		</div>
	</div>
</body>
</html>