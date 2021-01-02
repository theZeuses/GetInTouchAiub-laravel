<!DOCTYPE html>
<html>
<head>
	<title>Notices</title>
	<link rel="stylesheet" href="/assets/accountController/css/acStyle.css">
</head>
<body>
	@include('accountController.acNavBar')
	<div id="workspace">
		<h1 align='center'>Notices From Admin</h1>
		<br/>
		<table id="view">
			<tr>
				<td>Admin ID</td>
				<td>Subject</td>
				<td>Body</td>
			</tr>
			@for($i=0; $i < count($notices); $i++)
			<tr>
				<td>{{$notices[$i]->adminid}}</td>
				<td>{{$notices[$i]->subject}}</td>
				<td>{{$notices[$i]->body}}</td>
			</tr>
			@endfor
		</table>

		<div id="searchresult">
		</div>
	</div>
</body>
</html>