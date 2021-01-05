<!DOCTYPE html>
<html>
<head>
	<title>My Post List</title>
	<link rel="stylesheet" href="/assets/generalUser/css/guStyle.css">
</head>
<body>
	@include('generalUser.guMenu')
	<div id="workspace">
		<h1 align='center'>My Post List</h1>
		<br/>
		<table id="view">
			<tr>
				<td>Gu ID</td>
				<td>Text</td>
				<td>File</td>
				<td>Action</td>
			</tr>
			@for($i=0; $i < count($postlist); $i++)
			<tr>
				<td>{{$postlist[$i]['guid']}}</td>
				<td>{{$postlist[$i]['text']}}</td>
				<td>{{$postlist[$i]['file']}}</td>
				<td>
					<a href="{{route('generalUser.editpost', $postlist[$i]['id'])}}">Edit</a>
					<a href="{{route('generalUser.deletepost', $postlist[$i]['id'])}}">Delete</a>
				</td>
			</tr>
			@endfor
		</table>
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