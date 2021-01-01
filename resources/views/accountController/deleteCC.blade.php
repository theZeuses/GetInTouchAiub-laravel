<!DOCTYPE html>
<html>
<head>
	<title>Delete Content Control Manager</title>
	<link rel="stylesheet" href="/assets/accountControlManager/css/acStyle.css">
	<script type="text/javascript" src="/assets/accountControlManager/js/jquery-3.5.1.js"></script>
</head>
<body>
	<%- include('acNavBar') %>
	<div id="workspace">
		<form method="post">
		<fieldset>
			<legend>Delete Content Control Manager</legend>
			<table>
				<tr>
					<td>CC Id :</td>
					<td><%=value[0].ccid %></td>
				</tr>
				<tr>
					<td>Name :</td>
					<td><%=value[0].name %></td>
				</tr>
				<tr>
					<td>Email :</td>
					<td><%=value[0].email %></td>
				</tr>
				<tr>
					<td>Gender :</td>
					<td><%=value[0].gender %></td>
				</tr>
				<tr>
					<td>Date Of Birth :</td>
					<td><%=value[0].dob %></td>
				</tr>
				<tr>
					<td>Address :</td>
					<td><%=value[0].address %></td>
				</tr>
				<tr>
					<td>accountstatus :</td>
					<td><%=value[0].accountstatus %></td>
				</tr>
			</table>
			<div>
				<h3>Are you sure?</h3>
				<a href="/acCCController/CClist">
					<button type="button">
						Back
					</button>
				</a>
				<input type="hidden" name="ccid" value="<%=value[0].ccid %>">
				<input type="submit" name="submit" value="Confirm">
			</div>
		</fieldset>
	</form>
	</div>
</body>
</html>