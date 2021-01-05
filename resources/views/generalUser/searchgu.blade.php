<!DOCTYPE html>
<html>
<head>
	<title>Search General User Account</title>
	<link rel="stylesheet" href="/assets/generalUser/css/guStyle.css">
	<script type="text/javascript" src="/assets/generalUser/js/jquery-3.5.1.js"></script>
	<script type="text/javascript" src="/assets/generalUser/js/searchgu.js"></script>
</head>
<body>
	@include('generalUser.guMenu')
	<div id="workspace">
		<h1 align='center'>Search General User Account</h1>
		<form>
			<input type="text" id="searchkey" name="searchkey">
			<input type="hidden" id="_token" name="_token" value="{{csrf_token()}}">
			<input type="button" name="search" value="Search">
		</form>

		<div id="searchresult">
		</div>
	</div>
</body>
</html>