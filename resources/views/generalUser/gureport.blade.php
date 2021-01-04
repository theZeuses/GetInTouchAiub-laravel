<!DOCTYPE html>
<html>
<head>
	<title>Report</title>
	<link rel="stylesheet" href="/assets/generalUser/css/guStyle.css">
</head>
<body>
	@include('generalUser.guMenu')
	<div id="workspace">
		<h2 align='center'>Generate Post Report</h2>
		<br/>
		<a href="{{route('generalUser.postreport')}}">
			<button type="button">
				Click Here
			</button>
		</a>
		<br/>
		<br/>
		<h2 align='center'>Generate Notice Report</h2>
		<br/>
		<a href="{{route('generalUser.noticereport')}}">
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