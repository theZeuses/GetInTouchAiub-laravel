<!DOCTYPE html>
<html>
<head>
	<title>Notices</title>
	<link rel="stylesheet" href="/assets/accountController/css/acStyle.css">
</head>
<style type="text/css">
table{
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
  overflow-x:auto;
}

#view td, th {
  border: 1px solid #ddd;
  padding: 8px;
}

#view tr:nth-child(even){background-color: #f2f2f2;}

#view tr:hover {background-color: #ddd;}

#view th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #4CAF50;
  color: white;
}
</style>
<body>
	<div id="workspace">
		<h1 align='center'>Notices From Admin</h1>
		<br/>
		<table id="view">
			<tr>
				<td>AC ID</td>
				<td>Subject</td>
				<td>Body</td>
				<td>To Whom</td>
			</tr>
			@for($i=0; $i < count($notices); $i++)
			<tr>
				<td>{{$notices[$i]->acid}}</td>
				<td>{{$notices[$i]->subject}}</td>
				<td>{{$notices[$i]->body}}</td>
				<td>{{$notices[$i]->towhom}}</td>
			</tr>
			@endfor
		</table>
		<br>
		<h5>Total notices : {{count($notices)}}</h5>
		<br/>
		<h5>Total notices send for content controller: {{$cc}}</h5>
		<br/>
		<h5>Total notices send for general user: {{$gu}}</h5>
		<br/>
		<div id="searchresult">
		</div>
	</div>
</body>
</html>