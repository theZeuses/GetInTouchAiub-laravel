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
		<table id="view">
			<tr>
				<td>GU Id</td>
				<td>Text</td>
				<td>Action</td>
			</tr>
			@for($i=0; $i < count($gutext); $i++)
			<tr>
				<td>{{$gutext[$i]['guid']}}</td>
				<td>{{$gutext[$i]['text']}}</td>
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