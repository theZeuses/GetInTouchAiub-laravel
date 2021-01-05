<!DOCTYPE html>
<html>
<head>
	<title>Notice Report</title>
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
		<h2 align='center'>Admin Notice</h2>
		<br/>
		<table id="view">
			<tr>
				<td>Admin ID</td>
				<td>Subject</td>
				<td>Body</td>
			</tr>
			@for($i=0; $i < count($notices); $i++)
			<tr>
				<td>{{$notices[$i]['adminid']}}</td>
				<td>{{$notices[$i]['subject']}}</td>
				<td>{{$notices[$i]['body']}}</td>
			</tr>
			@endfor
		</table>
		<br/>
		<h5>Total notices from admin is : {{$noticecount}}</h5>
		<br/>		
	</div>
</body>
</html>