
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>GetInTouchAiub</title>
<script src="{{asset('/assets/js/search.js')}}"></script>
      <script src="{{asset('/assets/js/jquery-2.1.4.min.js')}}"></script>
	<link rel="stylesheet" href="{{asset('/assets/fontawesome/css/all.min.css')}}"> <!-- https://fontawesome.com/ -->
	<link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro&display=swap" rel="stylesheet"> <!-- https://fonts.google.com/ -->
    <link href="{{asset('/assets/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('/assets/css/templatemo-xtra-blog.css')}}" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js"></script>
   
   

-->
</head>
<body>
	<header class="tm-header" id="tm-header">
        <div class="tm-header-wrapper">
            <button class="navbar-toggler" type="button" aria-label="Toggle navigation">
                <i class="fas fa-bars"></i>
            </button>
            <div class="tm-site-header">
				<div class="login100-form-avatar">
					<img style="width:100px;height:100px;margin-left: 25%;"src="{{asset('/assets/images/avatar-01.jpg')}}" alt="AVATAR">
				</div>
                           
                <h1 class="text-center">GetInTouchAiub</h1>
            </div>
            <nav class="tm-nav" id="tm-nav">            
                <ul>
                <li class="tm-nav-item "><a href="{{route('Admin.Viewhomead')}}" class="tm-nav-link">
                        <i class="fas fa-home"></i>
						AdminHome
                    </a></li>
                    <li class="tm-nav-item"><a href="{{route('Admin.Viewpostad')}}" class="tm-nav-link">
                        <i class="fas fa-pen"></i>
                        Post
                    </a></li>
                    <li class="tm-nav-item"><a href="{{route('Admin.Viewinsertad')}}" class="tm-nav-link">
                        <i class="fas fa-users"></i>
                        Insert
                    </a></li>
                    <li class="tm-nav-item"><a href="{{route('Admin.ViewPendingPostReqad')}}" class="tm-nav-link">
                        <i class="fas fa-users"></i>
                        Prnding Post Request
                    </a></li>
                    <li class="tm-nav-item"><a href="{{route('Admin.ViewPendingSignupReqad')}}" class="tm-nav-link">
                        <i class="fas fa-users"></i>
                        Pending Signup Request
                    </a></li>
                    <li class="tm-nav-item"><a href="{{route('Admin.ViewAdminlistad')}}" class="tm-nav-link">
                        <i class="fas fa-users"></i>
                        Admin List
                    </a></li>
					<li class="tm-nav-item"><a href="{{route('Admin.ViewUserlistad')}}" class="tm-nav-link">
                        <i class="fas fa-users"></i>
                        User List
                    </a></li>
					<li class="tm-nav-item"><a href="{{route('Admin.ViewCCListad')}}" class="tm-nav-link">
                        <i class="fas fa-users"></i>
                        Content Controller List
                    </a></li>
                    <li class="tm-nav-item"><a href="{{route('Admin.ViewACListad')}}" class="tm-nav-link">
                        <i class="fas fa-users"></i>
                        Account Controller List
                    </a></li>
                    <li class="tm-nav-item"><a href="{{route('Admin.ViewBlockListad')}}" class="tm-nav-link">
                        <i class="fas fa-users"></i>
                        Block List
					</a></li>
					<li class="tm-nav-item"><a href="{{route('Admin.ViewProfilead')}}" class="tm-nav-link">
                        <i class="fas fa-users"></i>
                        Profile
                    </a></li>
                    <li class="tm-nav-item"><a href="{{route('Admin.ViewNotificationad')}}" class="tm-nav-link">
                        <i class="far fa-comments"></i>
                        Notification
                    </a></li>
                    <li class="tm-nav-item"><a href="{{route('Admin.ViewReportad')}}" class="tm-nav-link">
                        <i class="far fa-comments"></i>
                       Generate report
                    </a></li>
                    <li class="tm-nav-item"><a href="{{route('logout.logout')}}" class="tm-nav-link">
                        <i class="fas fa-pen"></i>
                        Logout
                    </a></li>
                </ul>
            </nav>
            <div class="tm-mb-65">
                <a rel="nofollow" href="https://fb.com/templatemo" class="tm-social-link">
                    <i class="fab fa-facebook tm-social-icon"></i>
                </a>
                <a href="https://twitter.com" class="tm-social-link">
                    <i class="fab fa-twitter tm-social-icon"></i>
                </a>
                <a href="https://instagram.com" class="tm-social-link">
                    <i class="fab fa-instagram tm-social-icon"></i>
                </a>
                <a href="https://linkedin.com" class="tm-social-link">
                    <i class="fab fa-linkedin tm-social-icon"></i>
                </a>
            </div>
            
        </div>
    </header>