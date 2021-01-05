<!DOCTYPE html>
<html>
<head>
	<title>Post Report</title>
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
		<h2 align='center'>My Post List</h2>
		<br/>
		<table id="view">
			<tr>
				<td>Gu ID</td>
				<td>Text</td>
				<td>File</td>
			</tr>
			@for($i=0; $i < count($postlist); $i++)
			<tr>
				<td>{{$postlist[$i]['guid']}}</td>
				<td>{{$postlist[$i]['text']}}</td>
				<td>{{$postlist[$i]['file']}}</td>
			</tr>
			@endfor
		</table>
		<br/>
		<h5>Total post : {{$postcount}}</h5>
		<br/>
		<h2 align='center'>My Pending Post List</h2>
		<br/>
		<table id="view">
			<tr>
				<td>Gu ID</td>
				<td>Text</td>
				<td>File</td>
			</tr>
			@for($i=0; $i < count($pendingpostlist); $i++)
			<tr>
				<td>{{$pendingpostlist[$i]['guid']}}</td>
				<td>{{$pendingpostlist[$i]['text']}}</td>
				<td>{{$pendingpostlist[$i]['file']}}</td>
			</tr>
			@endfor
		</table>
		<br/>
		<h5>Total pending post : {{$pendingpostcount}}</h5>
		<br/>
	</div>
</body>
</html>