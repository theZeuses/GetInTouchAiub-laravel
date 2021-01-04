<!DOCTYPE html>
<html>
<head>
	<title>Pending Post List</title>
	<link rel="stylesheet" href="/assets/generalUser/css/guStyle.css">
</head>
<body>
	@include('generalUser.guMenu')
	<div id="workspace">
		<h1 align='center'>Pending Post List</h1>
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
		<a href="{{route('generalUser.requesttoapprove')}}">
			<button>
				Request To Approve
			</button>
		</a>
		<a href="{{route('generalUser.mypost')}}">
			<button>
				Back
			</button>
		</a>
		<br/>
		<div id="result">
		</div>
	</div>
</body>
</html>