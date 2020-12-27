<!DOCTYPE html>
<html>
<head>
	<title>General User List</title>
	<link rel="stylesheet" href="/assets/accountControlManager/css/acStyle.css">
	<script type="text/javascript" src="/assets/accountControlManager/js/jquery-3.5.1.js"></script>
	<script type="text/javascript" src="/assets/accountControlManager/js/searchGU.js"></script>
</head>
<body>
	<%- include('acNavBar') %>
	<div id="workspace">
		<h1 align='center'>General User List</h1>
		<br/>
		<table id="view">
			<tr>
				<td>GU ID</td>
				<td>Name</td>
				<td>Email</td>
				<td>Gender</td>
				<td>Date Of Birth</td>
				<td>Address</td>
				<td>Profile Picture</td>
				<td>User Status</td>
				<td>Account Status</td>
				<td>Action</td>
			</tr>
			<% for(var i=0; i< userlist.length; i++ ){ %>
			<tr>
				<td><%= userlist[i].guid %></td>
				<td><%= userlist[i].name %></td>
				<td><%= userlist[i].email %></td>
				<td><%= userlist[i].gender %></td>
				<td><%= userlist[i].dob %></td>
				<td><%= userlist[i].address %></td>
				<td><%= userlist[i].profilepicture %></td>
				<td><%= userlist[i].userstatus %></td>
				<td><%= userlist[i].accountstatus %></td>
				<td>
					<a href="/acGUController/GUTemporarilyBlock/<%=userlist[i].id%>">Temporarily Block</a> | 
					<a href="/acGUController/GUBanned/<%=userlist[i].id%>">Banned</a> | 
					<a href="/acGUController/GURemove/<%=userlist[i].id%>">Remove</a>
				</td>
			</tr>
			<% } %>
		</table>
		<br/>
		<h2 align='center'>Search General User</h2>
		
		<form>
			<input type="text" id="searchkey" name="searchkey">
			<input type="button" name="search" value="Search">
		</form>

		<div id="searchresult">
		</div>
	</div>
</body>
</html>