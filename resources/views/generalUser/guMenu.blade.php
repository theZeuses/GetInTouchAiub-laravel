<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="/assets/generalUser/css/guMenuStyle.css">
	<script src="https://kit.fontawesome.com/a076d05399.js"></script>
</head>
<body>
    <div class="wrapper">
      <nav id="sidebar">
        <div class="title">
			GetInTouchAIUB
		</div>
		<div class="subtitle">
			General User
		</div>
		<ul class="list-items">
			<li><a href="{{route('generalUser.home')}}"><i class="fas fa-home"></i>Home</a></li>
			<li><a href="{{route('generalUser.profile')}}"><i class="fas fa-address-card"></i>Profile</a></li>
			<li><a href="/userController/PostNewContent"><i class="fas fa-clipboard"></i>Post New Contents</a></li>
			<li><a href="/userController/MyPost"><i class="fas fa-pen-square"></i>My Posts</a></li>
			<li><a href="{{route('generalUser.allpost')}}"><i class="fas fa-pen-square"></i>All Post List</a></li>
			<li><a href="/userController/SearchGU"><i class="fas fa-search"></i>Search Other Account</a></li>
			<li><a href="{{route('generalUser.sendtext')}}"><i class="fas fa-envelope"></i>Send Message</a></li>
			<li><a href="{{route('generalUser.receivetext')}}"><i class="fas fa-envelope-open"></i>Receive Message</a></li>
			<li><a href="/userController/Notifications"><i class="fas fa-bell"></i>Notifications</a></li>
			<li><a href="/userController/Report"><i class="fas fa-file-upload"></i>Report</a></li>
			<li><a href="/logout"><i class="fas fa-sign-out-alt"></i>Logout</a></li>
		</ul>
		</nav>
    </div>
</div>
</body>
</html>