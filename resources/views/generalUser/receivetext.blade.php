<!DOCTYPE html>
<html>
<head>
	<title>Inbox</title>
	<link rel="stylesheet" href="/assets/generalUser/css/guStyle.css">
</head>
<body>
	@include('generalUser.guMenu')
	<div id="workspace">
		<h2 align='center'>Received Message</h2>
		<br/>
		<table id="view">
			<tr>
				<td>Senders Id</td>
				<td>Text</td>
			</tr>
			@for($i=0; $i < count($receivetext); $i++)
			<tr>
				<td>{{$receivetext[$i]['guid']}}</td>
				<td>{{$receivetext[$i]['text']}}</td>
			</tr>
			@endfor
		</table>
		<br/>
		<a href="{{route('generalUser.home')}}">
			<button type="button">
				Back
			</button>
		</a>
		<br/>
		<div id="searchresult">
		</div>
	</div>
</body>
</html>