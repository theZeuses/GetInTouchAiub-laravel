<style type="text/css">
	table{
	  font-family: Arial, Helvetica, sans-serif;
	  border-collapse: collapse;
	  width: 10%;
	}

	#view td, th {
	  border: 1px solid #ddd;
	  padding: 4px;
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
<!DOCTYPE html>
<html>
<head>
	<title>General User PDF</title>
</head>
<body>
	<div id="workspace">
		<h1 align='center'>General User List</h1>
		<br/>
		<table id="view" width="50%">
			<tr>
				<td>GU ID</td>
				<td>Name</td>
				<td>Email</td>
				<td>Gender</td>
				<td>Date Of Birth</td>
				<td>Address</td>
				<td>User Status</td>
				<td>Account Status</td>
			</tr>
			@for($i=0; $i < count($gulist); $i++)
			<tr>
				<td>{{$gulist[$i]['guid']}}</td>
				<td>{{$gulist[$i]['name']}}</td>
				<td>{{$gulist[$i]['email']}}</td>
				<td>{{$gulist[$i]['gender']}}</td>
				<td>{{$gulist[$i]['dob']}}</td>
				<td>{{$gulist[$i]['address']}}</td>
				<td>{{$gulist[$i]['userstatus']}}</td>
				<td>{{$gulist[$i]['accountstatus']}}</td>
			</tr>
			@endfor
		</table>
		<br>
		<h5>Number of active general user = {{$active}}</h5>
		<br>
		<h5>Number of temporarily blocked general user = {{$tb}}</h5>
		<br>
		<h5>Number of banned general user = {{$banned}}</h5>
		<br>
		<h5>Total number of general user = {{$total}}</h5>
	</div>
</body>
</html>