<!DOCTYPE html>
<html>
<head>
	<title>All Post</title>
	<link rel="stylesheet" href="/assets/generalUser/css/guStyle.css">
	<script type="text/javascript" src="/assets/generalUser/js/jquery-3.5.1.js"></script>
	<script type="text/javascript" src="/assets/generalUser/js/searchanypost.js"></script>
</head>
<body>
	@include('generalUser.guMenu')
	<div id="workspace">
		<h1 align='center'>All Post List</h1>
		<br/>
		<table id="view">
			<tr>
				<td>GU ID</td>
				<td>Text</td>
				<td>File</td>
				<td>Approved By</td>
			</tr>
			@for($i=0; $i < count($allpost); $i++)
			<tr>
				<td>{{$allpost[$i]['guid']}}</td>
				<td>{{$allpost[$i]['text']}}</td>
				<td><file width="50" height="45" src="{{$allpost[$i]['post']}}"></td>
				<td>{{$allpost[$i]['approvedby']}}</td>	
			</tr>
			@endfor
		</table>
		<br/>
		<h2 align='center'>Search Any Post</h2>
		
		<form>
			<input type="text" id="searchkey" name="searchkey">
			<input type="button" name="search" value="Search">
		</form>

		<div id="searchresult">
		</div>
	</div>
</body>
</html>