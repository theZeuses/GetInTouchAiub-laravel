<!DOCTYPE html>
<html>
<head>
	<title>Inbox</title>
	<link rel="stylesheet" href="/assets/accountController/css/acStyle.css">
</head>
<body>
	@include('accountController.acNavBar')
	<div id="workspace">
		<h2 align='center'>Text From Content Control Manager</h2>
		<br/>
		<table id="view">
			<tr>
				<td>CC Id</td>
				<td>Action Type</td>
				<td>Text</td>
				<td>Action</td>
			</tr>
			@for($i=0; $i < count($cctext); $i++)
			<tr>
				<td>{{$cctext[$i]['ccid']}}</td>
				<td>{{$cctext[$i]['actiontype']}}</td>
				<td>{{$cctext[$i]['text']}}</td>
				<td> 
					<a href="">Reply</a>
				</td>
			</tr>
			@endfor
		</table>
		<br/>
		<a href="{{route('accountController.viewtext')}}">
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