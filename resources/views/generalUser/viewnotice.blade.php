<!DOCTYPE html>
<html>
<head>
	<title>Notices</title>
	<link rel="stylesheet" href="/assets/generalUser/css/guStyle.css">
</head>
<body>
	@include('generalUser.guMenu')
	<div id="workspace">
		<h1 align='center'>Notifications</h1>
		<br/>
		<table id="view">
			<tr>
				<td>ID</td>
				<td>Subject</td>
				<td>Body</td>
			</tr>
			@for($i=0; $i < count($viewnotice); $i++)
			<tr>
				<td>{{$viewnotice[$i]->adminid}}</td>
				<td>{{$viewnotice[$i]->subject}}</td>
				<td>{{$viewnotice[$i]->body}}</td>
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