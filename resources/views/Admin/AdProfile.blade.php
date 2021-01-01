
<!--
	Author: W3layouts
	Author URL: http://w3layouts.com
	License: Creative Commons Attribution 3.0 Unported
	License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html lang="en">
<!-- Head -->
<head>
<title>Admin Profile</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta charset="utf-8">
<meta name="keywords" content="C-Resume a Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<!-- css -->
<!-- font-awesome icons -->
<link rel="stylesheet" href="{{asset('/assets/css/font-awesome.min.css')}}" />
<!-- //font-awesome icons -->
<link href="//fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Yanone+Kaffeesatz:200,300,400,700" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">
<link rel="stylesheet" href="{{asset('/assets/css/style.css')}}" type="text/css" media="all" />
<link rel="stylesheet" href="{{asset('/assets/css/bootstrap.min.css')}}" type="text/css" media="all" />
<!-- Default-JavaScript-File -->
	<script type="text/javascript" src="{{asset('/assets/js/jquery-2.1.4.min.js')}}"></script>
	<script type="text/javascript" src="{{asset('/assets/js/bootstrap.min.js')}}"></script>
<!-- //Default-JavaScript-File -->

</head>
<body>
<!-- banner -->
	<div class="w3-banner-top">
	<div class="agileinfo-dot">
			<div class="w3layouts_menu">
				<nav class="cd-stretchy-nav edit-content">
					<a class="cd-nav-trigger" href=""> Menu <span aria-hidden="true"></span> </a>
					<ul>
						<li><a href="{{route('Admin.Viewhomead')}}" class=""><span>Home</span></a></li>
						<li><a href="{{route('Admin.VieweditProfilead')}}" ><span>Edit</span></a></li>
						<li><a href="{{route('Admin.Changepass')}}" ><span>Change_password</span></a></li>
						<li><a href="{{route('logout.logout')}}" ><span>Logout</span></a></li>
					
					</ul> 
					<span aria-hidden="true" class="stretchy-nav-bg"></span>
				</nav> 
			</div>

		<div class="w3-banner-grids">
			<div class="col-md-6 w3-banner-grid-left">
				<div class="w3-banner-img">
					     {{--@if(userlist[0].profilepicture != null && userlist[0].profilepicture.length > 0){ %>
                <img src="/assets/pictures/ " class="profile-img" alt="">
            @endif
                @else
                <img src="/assets/pictures/no-profile-pic.png" class="profile-img" alt="No profile pic">
            @endelse  --}}
					<h3 class="test">Shahriyar shazib</h3>
					<p class="test" >Admin</p>
				</div>
			</div>
			<!--<div class="col-md-6 w3-banner-grid-right">
			<div class="w3-banner-text">
				<h3>Career Goal</h3>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus dignissim velit sed nibh placerat, non aliquam purus pretium. Donec at justo dignissim, maximus elit et, vestibulum mi.</p>
			</div>!-->
				<div class=" w3-right-addres-1">
				<ul class="address">
								<li>
									<ul class="agileits-address-text ">
										<li class="agile-it-adress-left"><b>USER ID</b></li>
										<li><span>:</span>{{$pro[0]['adminid']}}</li>
									</ul>
								</li>
								<li>
									<ul class="agileits-address-text ">
										<li class="agile-it-adress-left"><b>NAME</b></li>
										<li><span>:</span>{{$pro[0]['name']}}</li>
									</ul>
								</li>
								<li>
									<ul class="agileits-address-text ">
										<li class="agile-it-adress-left"><b>D.O.B</b></li>
										<li><span>:</span>{{$pro[0]['dob']}}</li>
									</ul>
								</li>
								
								<li>
									<ul class="agileits-address-text">
										<li class="agile-it-adress-left"><b>ADDRESS</b></li>
										<li><span>:</span>{{$pro[0]['address']}}</li>
									</ul>
								</li>
								<li>
									<ul class="agileits-address-text">
										<li class="agile-it-adress-left"><b>E-MAIL</b></li>
										<li><span>:</span><a href="mailto:example@mail.com">{{$pro[0]['email']}}</a></li>
									</ul>
								</li>
								
							</ul> 

				</div>
			</div>
			<div class="clearfix"></div>
		</div>
		</div>
		<div class="thim-click-to-bottom">
				
			</div>

	</div>
<!-- banner -->

<!-- footer -->
	<div class="w3l_footer">
		<div class="container">
			
			<div class="w3ls_footer_grids">
				
				<div class="w3ls_footer_grid">
					<div class="col-md-4 w3ls_footer_grid_left">
						<div class="w3ls_footer_grid_leftl">
							<i class="fa fa-map-marker" aria-hidden="true"></i>
						</div>
						<div class="w3ls_footer_grid_leftr">
							<h4>Location</h4>
							<p>{{$pro[0]['address']}}</p>
						</div>
						<div class="clearfix"> </div>
					</div>
					<div class="col-md-4 w3ls_footer_grid_left">
						<div class="w3ls_footer_grid_leftl">
							<i class="fa fa-envelope" aria-hidden="true"></i>
						</div>
						<div class="w3ls_footer_grid_leftr">
							<h4>Email</h4>
							<a href="mailto:info@example.com">{{$pro[0]['email']}}</a>
						</div>
						<div class="clearfix"> </div>
					</div>
					<div class="col-md-4 w3ls_footer_grid_left">
						
						
						<div class="clearfix"> </div>
					</div>
					<div class="clearfix"> </div>
				</div>
			</div>
		</div>
		
	</div>
<!-- //footer -->
<script src="{{asset('/assets/js/bars.js')}}"></script>
<!-- start-smoth-scrolling -->
<script src="{{asset('/assets/js/SmoothScroll.min.js')}}"></script>
<!-- text-effect -->
		<script type="text/javascript" src="{{asset('/assets/js/jquery.transit.js')}}"></script> 
		<script type="text/javascript" src="{{asset('/assets/js/jquery.textFx.js')}}"></script> 
		<script type="text/javascript">
			$(document).ready(function() {
					$('.test').textFx({
						type: 'fadeIn',
						iChar: 100,
						iAnim: 1000
					});
			});
		</script>
<!-- //text-effect -->
<!-- menu-js --> 	
	<script src="{{asset('/assets/js/modernizr.js')}}"></script>	
	<script src="{{asset('/assets/js/menu.js')}}"></script>
<!-- //menu-js --> 	


<script type="text/javascript" src="{{asset('/assets/js/move-top.js')}}"></script>

<script type="text/javascript" src="{{asset('/assets/js/easing.js')}}"></script>
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){		
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script>
<!-- start-smoth-scrolling -->
	<script type="text/javascript">
		$(document).ready(function() {
			/*
				var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
				};
			*/
								
			$().UItoTop({ easingType: 'easeOutQuart' });
								
			});
	</script>


</body>
</html>