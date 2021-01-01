<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="/assets/accountController/css/acNavBarStyle.css">
	<script src="https://kit.fontawesome.com/a076d05399.js"></script>
</head>
<body>
    <div class="wrapper">
      <nav id="sidebar">
        <div class="title">
			GetInTouchAIUB
		</div>
		<div class="subtitle">
			Account Control Manager
		</div>
		<ul class="list-items">
			<li><a href="{{route('accountController.achome')}}"><i class="fas fa-home"></i>Home</a></li>
			<li><a href="{{route('accountController.createcc')}}"><i class="fas fa-plus"></i>Add New Content Controller</a></li>
			<li><a href="{{route('accountController.verifygeneraluser')}}"><i class="fas fa-user-check"></i>Verify General User</a></li>
			<li><a href="/acText/Text"><i class="fas fa-inbox"></i>Inbox</a></li>
			<li><a href="/acNotice/Notices"><i class="fas fa-bell"></i>Notification</a></li>
			<li><a href="/acText/CreateText"><i class="fas fa-mail-bulk"></i>Send Message</a></li>
			<li><a href="/acNotice/CreateNotice"><i class="fas fa-paper-plane"></i>Send Notification</a></li>
			<li><a href="{{route('accountController.acadminlist')}}"><i class="fas fa-list-ol"></i>Admin List</a></li>
			<li><a href="{{route('accountController.cclist')}}"><i class="fas fa-list-ol"></i>Content Controller List</a></li>
			<li><a href="{{route('accountController.gulist')}}"><i class="fas fa-list-ol"></i>General User List</a></li>
			<li><a href="/acReportGenerate"><i class="fas fa-file-pdf"></i>Report Generate</a></li>
			<li><a href="{{route('accountController.getmyinfo')}}"><i class="fas fa-user"></i>Profile</a></li>
			<li><a href="/logout"><i class="fas fa-sign-out-alt"></i>Logout</a></li>
		</ul>
		</nav>
    </div>
</div>
</body>
</html>
