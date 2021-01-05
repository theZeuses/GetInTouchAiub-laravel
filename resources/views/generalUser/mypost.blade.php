<!DOCTYPE html>
<html>
<head>
	<title>Report</title>
	<link rel="stylesheet" href="/assets/generalUser/css/guStyle.css">
</head>
<body>
	@include('generalUser.guMenu')
	<div id="workspace">
		<h2 align='center'>Pending Posts</h2>
		<br/>
		<a href="{{route('generalUser.pendingpostlist')}}">
			<button type="button">
				View
			</button>
		</a>
		<br/>
		<h2 align='center'>My Posts</h2>
		<br/>
		<a href="{{route('generalUser.mypostlist')}}">
			<button type="button">
				View
			</button>
		</a>
		<br/>
		<div id="searchresult">
		</div>
	</div>
</body>
</html>