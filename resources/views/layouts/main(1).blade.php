<html dir="ltr" lang="en">
<head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">

<!-- Meta data -->
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
<meta content="Admitro - Laravel Bootstrap Admin Template" name="description">
<meta content="Spruko Technologies Private Limited" name="author">
<meta name="keywords" content="laravel admin dashboard, best laravel admin panel, laravel admin dashboard, php admin panel template, blade template in laravel, laravel dashboard template, laravel template bootstrap, laravel simple admin panel,laravel dashboard template,laravel bootstrap 4 template, best admin panel for laravel,laravel admin panel template, laravel admin dashboard template, laravel bootstrap admin template, laravel admin template bootstrap 4">
    <title>VHRS @yield('Budget Review')</title>
    <link rel="icon" href="{{ asset('media/image/favicon.png') }}" type="image/x-icon">
    <!-- Google font-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/animated.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/dark.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/icons.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/skin-modes.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('colors/color1.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('plugins/p-scrollbar/p-scrollbar.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('plugins/simplebar/css/simplebar.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('plugins/switcher/css/switcher.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('plugins/switcher/js/demo.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('plugins/apex/apex.css') }}" type="text/css">
</head>
<body class="app main-body" cz-shortcut-listen="true"><div class="horizontalMenucontainer">		
		
		<!---Global-loader-->
		<div id="global-loader" style="display: none;">
			<img src="Admitro%20-%20Admin%20Panel%20HTML%20template_files/loader.svg" alt="loader">
		</div>
		<!--- End Global-loader-->

		<!-- Page -->
		<div class="page">
			<div class="page-main">
			
			<!--header-->
<div class="hor-header header top-header">
					<div class="container">
						<div class="d-flex">
							<a class="animated-arrow hor-toggle horizontal-navtoggle"><span></span></a>
							<a class="header-brand" href="https://laravel.spruko.com/admitro/Horizontal-Light/href=%20%20%20%20https://laravel.spruko.com/admitro/Horizontal-Light/index">
								<img src="Admitro%20-%20Admin%20Panel%20HTML%20template_files/logo.png" class="header-brand-img desktop-lgo" alt="Admintro logo">
								<img src="Admitro%20-%20Admin%20Panel%20HTML%20template_files/logo1.png" class="header-brand-img dark-logo" alt="Admintro logo">
								<img src="Admitro%20-%20Admin%20Panel%20HTML%20template_files/favicon.png" class="header-brand-img mobile-logo" alt="Admintro logo">
								<img src="Admitro%20-%20Admin%20Panel%20HTML%20template_files/favicon1.png" class="header-brand-img darkmobile-logo" alt="Admintro logo">
							</a>
							<div class="mt-1">
								<form class="form-inline">
									<div class="search-element">
										<input type="search" class="form-control header-search" placeholder="Search…" aria-label="Search" tabindex="1">
										<button class="btn btn-primary-color" type="submit">
											<svg class="header-icon search-icon" x="1008" y="1248" viewBox="0 0 24 24" height="100%" width="100%" preserveAspectRatio="xMidYMid meet" focusable="false">
												<path d="M0 0h24v24H0V0z" fill="none"></path><path d="M15.5 14h-.79l-.28-.27C15.41 12.59 16 11.11 16 9.5 16 5.91 13.09 3 9.5 3S3 5.91 3 9.5 5.91 16 9.5 16c1.61 0 3.09-.59 4.23-1.57l.27.28v.79l5 4.99L20.49 19l-4.99-5zm-6 0C7.01 14 5 11.99 5 9.5S7.01 5 9.5 5 14 7.01 14 9.5 11.99 14 9.5 14z"></path>
											</svg>
										</button>
									</div>
								</form>
							</div>

							<!-- SEARCH -->
							<div class="d-flex order-lg-2 ml-auto">
								<a href="#" data-toggle="search" class="nav-link nav-link-lg d-md-none navsearch">
									<svg class="header-icon search-icon" x="1008" y="1248" viewBox="0 0 24 24" height="100%" width="100%" preserveAspectRatio="xMidYMid meet" focusable="false">
										<path d="M0 0h24v24H0V0z" fill="none"></path><path d="M15.5 14h-.79l-.28-.27C15.41 12.59 16 11.11 16 9.5 16 5.91 13.09 3 9.5 3S3 5.91 3 9.5 5.91 16 9.5 16c1.61 0 3.09-.59 4.23-1.57l.27.28v.79l5 4.99L20.49 19l-4.99-5zm-6 0C7.01 14 5 11.99 5 9.5S7.01 5 9.5 5 14 7.01 14 9.5 11.99 14 9.5 14z"></path>
									</svg>
								</a>
								<div class="dropdown   header-fullscreen">
									<a class="nav-link icon full-screen-link p-0" id="fullscreen-button">
										<svg xmlns="http://www.w3.org/2000/svg" class="header-icon" width="24" height="24" viewBox="0 0 24 24"><path d="M10 4L8 4 8 8 4 8 4 10 10 10zM8 20L10 20 10 14 4 14 4 16 8 16zM20 14L14 14 14 20 16 20 16 16 20 16zM20 8L16 8 16 4 14 4 14 10 20 10z"></path></svg>
									</a>
								</div>
								<div class="dropdown header-message">
									<a class="nav-link icon" data-toggle="dropdown">
										<svg xmlns="http://www.w3.org/2000/svg" class="header-icon" width="24" height="24" viewBox="0 0 24 24"><path d="M20,2H4C2.897,2,2,2.897,2,4v12c0,1.103,0.897,2,2,2h3v3.767L13.277,18H20c1.103,0,2-0.897,2-2V4C22,2.897,21.103,2,20,2z M20,16h-7.277L9,18.233V16H4V4h16V16z"></path><path d="M7 7H17V9H7zM7 11H14V13H7z"></path></svg>
										<span class="badge badge-success side-badge">3</span>
									</a>
									<div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow  animated">
										<div class="dropdown-header">
											<h6 class="mb-0">Messages</h6>
											<span class="badge badge-pill badge-primary ml-auto">View all</span>
										</div>
										<div class="header-dropdown-list message-menu ps" id="message-menu">
											<a class="dropdown-item border-bottom" href="#">
												<div class="d-flex align-items-center">
													<div class="">
														<span class="avatar avatar-md brround align-self-center cover-image" data-image-src="https://laravel.spruko.com/admitro/Horizontal-Light/assets/images/users/1.jpg" style="background: rgba(0, 0, 0, 0) url(&quot;https://laravel.spruko.com/admitro/Horizontal-Light/assets/images/users/1.jpg&quot;) repeat scroll center center;"></span>
													</div>
													<div class="d-flex">
														<div class="pl-3">
															<h6 class="mb-1">Jack Wright</h6>
															<p class="fs-13 mb-1">All the best your template awesome</p>
															<div class="small text-muted">
																3 hours ago
															</div>
														</div>
													</div>
												</div>
											</a>
											<a class="dropdown-item border-bottom">
												<div class="d-flex align-items-center">
													<div class="">
														<span class="avatar avatar-md brround align-self-center cover-image" data-image-src="https://laravel.spruko.com/admitro/Horizontal-Light/assets/images/users/2.jpg" style="background: rgba(0, 0, 0, 0) url(&quot;https://laravel.spruko.com/admitro/Horizontal-Light/assets/images/users/2.jpg&quot;) repeat scroll center center;"></span>
													</div>
													<div class="d-flex">
														<div class="pl-3">
															<h6 class="mb-1">Lisa Rutherford</h6>
															<p class="fs-13 mb-1">Hey! there I'm available</p>
															<div class="small text-muted">
																5 hour ago
															</div>
														</div>
													</div>
												</div>
											</a>
											<a class="dropdown-item border-bottom">
												<div class="d-flex align-items-center">
													<div class="">
														<span class="avatar avatar-md brround align-self-center cover-image" data-image-src="https://laravel.spruko.com/admitro/Horizontal-Light/assets/images/users/3.jpg" style="background: rgba(0, 0, 0, 0) url(&quot;https://laravel.spruko.com/admitro/Horizontal-Light/assets/images/users/3.jpg&quot;) repeat scroll center center;"></span>
													</div>
													<div class="d-flex">
														<div class="pl-3">
															<h6 class="mb-1">Blake Walker</h6>
															<p class="fs-13 mb-1">Just created a new blog post</p>
															<div class="small text-muted">
																45 mintues ago
															</div>
														</div>
													</div>
												</div>
											</a>
											<a class="dropdown-item border-bottom">
												<div class="d-flex align-items-center">
													<div class="">
														<span class="avatar avatar-md brround align-self-center cover-image" data-image-src="https://laravel.spruko.com/admitro/Horizontal-Light/assets/images/users/4.jpg" style="background: rgba(0, 0, 0, 0) url(&quot;https://laravel.spruko.com/admitro/Horizontal-Light/assets/images/users/4.jpg&quot;) repeat scroll center center;"></span>
													</div>
													<div class="d-flex">
														<div class="pl-3">
															<h6 class="mb-1">Fiona Morrison</h6>
															<p class="fs-13 mb-1">Added new comment on your photo</p>
															<div class="small text-muted">
																2 days ago
															</div>
														</div>
													</div>
												</div>
											</a>
											<a class="dropdown-item border-bottom">
												<div class="d-flex align-items-center">
													<div class="">
														<span class="avatar avatar-md brround align-self-center cover-image" data-image-src="https://laravel.spruko.com/admitro/Horizontal-Light/assets/images/users/6.jpg" style="background: rgba(0, 0, 0, 0) url(&quot;https://laravel.spruko.com/admitro/Horizontal-Light/assets/images/users/6.jpg&quot;) repeat scroll center center;"></span>
													</div>
													<div class="d-flex">
														<div class="pl-3">
															<h6 class="mb-1">Stewart Bond</h6>
															<p class="fs-13 mb-1">Your payment invoice is generated</p>
															<div class="small text-muted">
																3 days ago
															</div>
														</div>
													</div>
												</div>
											</a>
											<a class="dropdown-item border-bottom">
												<div class="d-flex align-items-center">
													<div class="">
														<span class="avatar avatar-md brround align-self-center cover-image" data-image-src="https://laravel.spruko.com/admitro/Horizontal-Light/assets/images/users/7.jpg" style="background: rgba(0, 0, 0, 0) url(&quot;https://laravel.spruko.com/admitro/Horizontal-Light/assets/images/users/7.jpg&quot;) repeat scroll center center;"></span>
													</div>
													<div class="d-flex">
														<div class="pl-3">
															<h6 class="mb-1">Faith Dickens</h6>
															<p class="fs-13 mb-1">Please check your mail....</p>
															<div class="small text-muted">
																4 days ago
															</div>
														</div>
													</div>
												</div>
											</a>
										<div class="ps__rail-x" style="left: 0px; bottom: 0px;"><div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div></div><div class="ps__rail-y" style="top: 0px; right: 0px;"><div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 0px;"></div></div></div>
										<div class=" text-center p-2 border-top">
											<a href="#" class="">See All Messages</a>
										</div>
									</div>
								</div>
								<div class="dropdown header-notify">
									<a class="nav-link icon" data-toggle="dropdown">
										<svg xmlns="http://www.w3.org/2000/svg" class="header-icon" width="24" height="24" viewBox="0 0 24 24"><path d="M19 13.586V10c0-3.217-2.185-5.927-5.145-6.742C13.562 2.52 12.846 2 12 2s-1.562.52-1.855 1.258C7.185 4.074 5 6.783 5 10v3.586l-1.707 1.707C3.105 15.48 3 15.734 3 16v2c0 .553.447 1 1 1h16c.553 0 1-.447 1-1v-2c0-.266-.105-.52-.293-.707L19 13.586zM19 17H5v-.586l1.707-1.707C6.895 14.52 7 14.266 7 14v-4c0-2.757 2.243-5 5-5s5 2.243 5 5v4c0 .266.105.52.293.707L19 16.414V17zM12 22c1.311 0 2.407-.834 2.818-2H9.182C9.593 21.166 10.689 22 12 22z"></path></svg>
										<span class="pulse "></span>
									</a>
									<div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow  animated">
										<div class="dropdown-header">
											<h6 class="mb-0">Notifications</h6>
											<span class="badge badge-pill badge-primary ml-auto">View all</span>
										</div>
										<div class="notify-menu ps">
											<a href="#" class="dropdown-item border-bottom d-flex pl-4">
												<div class="notifyimg bg-info-transparent text-info"> <i class="ti-comment-alt"></i> </div>
												<div>
													<div class="font-weight-normal1">Message Sent.</div>
													<div class="small text-muted">3 hours ago</div>
												</div>
											</a>
											<a href="#" class="dropdown-item border-bottom d-flex pl-4">
												<div class="notifyimg bg-primary-transparent text-primary"> <i class="ti-shopping-cart-full"></i> </div>
												<div>
													<div class="font-weight-normal1"> Order Placed</div>
													<div class="small text-muted">5  hour ago</div>
												</div>
											</a>
											<a href="#" class="dropdown-item border-bottom d-flex pl-4">
												<div class="notifyimg bg-warning-transparent text-warning"> <i class="ti-calendar"></i> </div>
												<div>
													<div class="font-weight-normal1"> Event Started</div>
													<div class="small text-muted">45 mintues ago</div>
												</div>
											</a>
											<a href="#" class="dropdown-item border-bottom d-flex pl-4">
												<div class="notifyimg bg-success-transparent text-success"> <i class="ti-desktop"></i> </div>
												<div>
													<div class="font-weight-normal1">Your Admin lanuched</div>
													<div class="small text-muted">1 daya ago</div>
												</div>
											</a>
										<div class="ps__rail-x" style="left: 0px; bottom: 0px;"><div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div></div><div class="ps__rail-y" style="top: 0px; right: 0px;"><div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 0px;"></div></div></div>
										<div class=" text-center p-2 border-top">
											<a href="#" class="">View All Notifications</a>
										</div>
									</div>
								</div>
								<div class="dropdown profile-dropdown">
									<a href="#" class="nav-link pr-0 leading-none" data-toggle="dropdown">
										<span>
											<img src="Admitro%20-%20Admin%20Panel%20HTML%20template_files/2.jpg" alt="img" class="avatar avatar-md brround">
										</span>
									</a>
									<div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow animated">
										<div class="text-center">
											<a href="#" class="dropdown-item text-center user pb-0 font-weight-bold">Jessica</a>
											<span class="text-center user-semi-title">Web Designer</span>
											<div class="dropdown-divider"></div>
										</div>
										<a class="dropdown-item d-flex" href="#">
											<svg class="header-icon mr-3" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0V0z" fill="none"></path><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zM7.07 18.28c.43-.9 3.05-1.78 4.93-1.78s4.51.88 4.93 1.78C15.57 19.36 13.86 20 12 20s-3.57-.64-4.93-1.72zm11.29-1.45c-1.43-1.74-4.9-2.33-6.36-2.33s-4.93.59-6.36 2.33C4.62 15.49 4 13.82 4 12c0-4.41 3.59-8 8-8s8 3.59 8 8c0 1.82-.62 3.49-1.64 4.83zM12 6c-1.94 0-3.5 1.56-3.5 3.5S10.06 13 12 13s3.5-1.56 3.5-3.5S13.94 6 12 6zm0 5c-.83 0-1.5-.67-1.5-1.5S11.17 8 12 8s1.5.67 1.5 1.5S12.83 11 12 11z"></path></svg>
											<div class="">Profile</div>
										</a>
										<a class="dropdown-item d-flex" href="#">
											<svg class="header-icon mr-3" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0V0z" fill="none"></path><path d="M19.43 12.98c.04-.32.07-.64.07-.98 0-.34-.03-.66-.07-.98l2.11-1.65c.19-.15.24-.42.12-.64l-2-3.46c-.09-.16-.26-.25-.44-.25-.06 0-.12.01-.17.03l-2.49 1c-.52-.4-1.08-.73-1.69-.98l-.38-2.65C14.46 2.18 14.25 2 14 2h-4c-.25 0-.46.18-.49.42l-.38 2.65c-.61.25-1.17.59-1.69.98l-2.49-1c-.06-.02-.12-.03-.18-.03-.17 0-.34.09-.43.25l-2 3.46c-.13.22-.07.49.12.64l2.11 1.65c-.04.32-.07.65-.07.98 0 .33.03.66.07.98l-2.11 1.65c-.19.15-.24.42-.12.64l2 3.46c.09.16.26.25.44.25.06 0 .12-.01.17-.03l2.49-1c.52.4 1.08.73 1.69.98l.38 2.65c.03.24.24.42.49.42h4c.25 0 .46-.18.49-.42l.38-2.65c.61-.25 1.17-.59 1.69-.98l2.49 1c.06.02.12.03.18.03.17 0 .34-.09.43-.25l2-3.46c.12-.22.07-.49-.12-.64l-2.11-1.65zm-1.98-1.71c.04.31.05.52.05.73 0 .21-.02.43-.05.73l-.14 1.13.89.7 1.08.84-.7 1.21-1.27-.51-1.04-.42-.9.68c-.43.32-.84.56-1.25.73l-1.06.43-.16 1.13-.2 1.35h-1.4l-.19-1.35-.16-1.13-1.06-.43c-.43-.18-.83-.41-1.23-.71l-.91-.7-1.06.43-1.27.51-.7-1.21 1.08-.84.89-.7-.14-1.13c-.03-.31-.05-.54-.05-.74s.02-.43.05-.73l.14-1.13-.89-.7-1.08-.84.7-1.21 1.27.51 1.04.42.9-.68c.43-.32.84-.56 1.25-.73l1.06-.43.16-1.13.2-1.35h1.39l.19 1.35.16 1.13 1.06.43c.43.18.83.41 1.23.71l.91.7 1.06-.43 1.27-.51.7 1.21-1.07.85-.89.7.14 1.13zM12 8c-2.21 0-4 1.79-4 4s1.79 4 4 4 4-1.79 4-4-1.79-4-4-4zm0 6c-1.1 0-2-.9-2-2s.9-2 2-2 2 .9 2 2-.9 2-2 2z"></path></svg>
											<div class="">Settings</div>
										</a>
										<a class="dropdown-item d-flex" href="#">
											<svg class="header-icon mr-3" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0V0z" fill="none"></path><path d="M4 4h16v12H5.17L4 17.17V4m0-2c-1.1 0-1.99.9-1.99 2L2 22l4-4h14c1.1 0 2-.9 2-2V4c0-1.1-.9-2-2-2H4zm2 10h12v2H6v-2zm0-3h12v2H6V9zm0-3h12v2H6V6z"></path></svg>
											<div class="">Messages</div>
										</a>
										<a class="dropdown-item d-flex" href="#">
											<svg class="header-icon mr-3" xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" height="24" viewBox="0 0 24 24" width="24"><g><rect fill="none" height="24" width="24"></rect></g><g><path d="M11,7L9.6,8.4l2.6,2.6H2v2h10.2l-2.6,2.6L11,17l5-5L11,7z M20,19h-8v2h8c1.1,0,2-0.9,2-2V5c0-1.1-0.9-2-2-2h-8v2h8V19z"></path></g></svg>
											<div class="">Sign Out</div>
										</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!--/header-->				<!--/Horizontal-main -->
				<div class="sticky" style="margin-bottom: -60px;">
					<div class="horizontal-main hor-menu clearfix">
						<div class="horizontal-mainwrapper container clearfix">
							<!--Nav-->
							<nav class="horizontalMenu clearfix"><div class="horizontal-overlapbg active"></div>
								<ul class="horizontalMenu-list">
									<li aria-haspopup="true" class="active">
										<a href="https://laravel.spruko.com/admitro/Horizontal-Light/index" class="sub-icon active">
											<svg class="hor-icon" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0V0z" fill="none"></path><path d="M19 5v2h-4V5h4M9 5v6H5V5h4m10 8v6h-4v-6h4M9 17v2H5v-2h4M21 3h-8v6h8V3zM11 3H3v10h8V3zm10 8h-8v10h8V11zm-10 4H3v6h8v-6z"></path></svg>
											Dashboard
										</a>
									</li>
									<li aria-haspopup="true">
									<!-- <span class="horizontalMenu-click"><i class="horizontalMenu-arrow fa fa-angle-down"></i></span> -->
										<a href="{{url('/salesorder_entry')}}" class="">
											<svg class="hor-icon" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0V0z" fill="none"></path><path d="M16.66 4.52l2.83 2.83-2.83 2.83-2.83-2.83 2.83-2.83M9 5v4H5V5h4m10 10v4h-4v-4h4M9 15v4H5v-4h4m7.66-13.31L11 7.34 16.66 13l5.66-5.66-5.66-5.65zM11 3H3v8h8V3zm10 10h-8v8h8v-8zm-10 0H3v8h8v-8z"></path></svg>
											Sales Order 
											<!-- <i class="fa fa-angle-down horizontal-icon"></i> -->
										</a>										
									</li>
									<li aria-haspopup="true">
									<!-- <span class="horizontalMenu-click"><i class="horizontalMenu-arrow fa fa-angle-down"></i></span> -->
										<a href="#" class="">
											<svg class="hor-icon" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0V0z" fill="none"></path><path d="M16.66 4.52l2.83 2.83-2.83 2.83-2.83-2.83 2.83-2.83M9 5v4H5V5h4m10 10v4h-4v-4h4M9 15v4H5v-4h4m7.66-13.31L11 7.34 16.66 13l5.66-5.66-5.66-5.65zM11 3H3v8h8V3zm10 10h-8v8h8v-8zm-10 0H3v8h8v-8z"></path></svg>
											Turn Over 
											<!-- <i class="fa fa-angle-down horizontal-icon"></i> -->
										</a>										
									</li>
									<li aria-haspopup="true">
									<!-- <span class="horizontalMenu-click"><i class="horizontalMenu-arrow fa fa-angle-down"></i></span> -->
										<a href="#" class="">
											<svg class="hor-icon" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0V0z" fill="none"></path><path d="M16.66 4.52l2.83 2.83-2.83 2.83-2.83-2.83 2.83-2.83M9 5v4H5V5h4m10 10v4h-4v-4h4M9 15v4H5v-4h4m7.66-13.31L11 7.34 16.66 13l5.66-5.66-5.66-5.65zM11 3H3v8h8V3zm10 10h-8v8h8v-8zm-10 0H3v8h8v-8z"></path></svg>
											Collection 
											<!-- <i class="fa fa-angle-down horizontal-icon"></i> -->
										</a>										
									</li>
									<!-- <li aria-haspopup="true"><span class="horizontalMenu-click"><i class="horizontalMenu-arrow fa fa-angle-down"></i></span>
										<a href="https://laravel.spruko.com/admitro/Horizontal-Light/#" class="">
											<svg class="hor-icon" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0V0z" fill="none"></path><path d="M16.66 4.52l2.83 2.83-2.83 2.83-2.83-2.83 2.83-2.83M9 5v4H5V5h4m10 10v4h-4v-4h4M9 15v4H5v-4h4m7.66-13.31L11 7.34 16.66 13l5.66-5.66-5.66-5.65zM11 3H3v8h8V3zm10 10h-8v8h8v-8zm-10 0H3v8h8v-8z"></path></svg>
											Sales Order <i class="fa fa-angle-down horizontal-icon"></i>
										</a>
										<ul class="sub-menu">
											<li aria-haspopup="true"><a href="https://laravel.spruko.com/admitro/Horizontal-Light/widgets-2">Chart Widgets</a></li>
											<li aria-haspopup="true"><a href="https://laravel.spruko.com/admitro/Horizontal-Light/widgets-1">Widgets</a></li>
										</ul>
									</li> -->
									<!-- <li aria-haspopup="true"><span class="horizontalMenu-click"><i class="horizontalMenu-arrow fa fa-angle-down"></i></span>
										<a href="https://laravel.spruko.com/admitro/Horizontal-Light/#" class="sub-icon">
											<svg class="hor-icon" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0V0z" fill="none"></path><path d="M4 8h4V4H4v4zm6 12h4v-4h-4v4zm-6 0h4v-4H4v4zm0-6h4v-4H4v4zm6 0h4v-4h-4v4zm6-10v4h4V4h-4zm-6 4h4V4h-4v4zm6 6h4v-4h-4v4zm0 6h4v-4h-4v4z"></path></svg>
											Turn Over <i class="fa fa-angle-down horizontal-icon"></i>
										</a>
										<div class="horizontal-megamenu clearfix">
											<div class="container">
												<div class="mega-menubg">
													<div class="row">
														<div class="col-lg-3 col-md-12 col-xs-12 link-list">
															<ul>
																<li><h3 class="fs-14 font-weight-bold">Chat</h3></li>
																<li aria-haspopup="true"><a href="https://laravel.spruko.com/admitro/Horizontal-Light/chat">Chat 01</a></li>
																<li aria-haspopup="true"><a href="https://laravel.spruko.com/admitro/Horizontal-Light/chat2">Chat 02</a></li>
																<li aria-haspopup="true"><a href="https://laravel.spruko.com/admitro/Horizontal-Light/chat3">Chat 03</a></li>
																<li><h3 class="fs-14 font-weight-bold mt-3">Contact</h3></li>
																<li aria-haspopup="true"><a href="https://laravel.spruko.com/admitro/Horizontal-Light/contact-list">Contact list 01</a></li>
																<li aria-haspopup="true"><a href="https://laravel.spruko.com/admitro/Horizontal-Light/contact-list2">Contact list 02</a></li>
																<li aria-haspopup="true"><a href="https://laravel.spruko.com/admitro/Horizontal-Light/calendar">Calendar</a></li>
															</ul>
														</div>
														<div class="col-lg-3 col-md-12 col-xs-12 link-list">
															<ul>
																<li aria-haspopup="true"><a href="https://laravel.spruko.com/admitro/Horizontal-Light/cookies">Cookies</a></li>
																<li aria-haspopup="true"><a href="https://laravel.spruko.com/admitro/Horizontal-Light/counters">Counters</a></li>
																<li aria-haspopup="true"><a href="https://laravel.spruko.com/admitro/Horizontal-Light/dragula">Dragula Card</a></li>
																<li aria-haspopup="true"><a href="https://laravel.spruko.com/admitro/Horizontal-Light/image-comparison">Image Comparison</a></li>
																<li aria-haspopup="true"><a href="https://laravel.spruko.com/admitro/Horizontal-Light/img-crop"> Image Crop</a></li>
																<li aria-haspopup="true"><a href="https://laravel.spruko.com/admitro/Horizontal-Light/loaders">Loaders</a></li>
																<li aria-haspopup="true"><a href="https://laravel.spruko.com/admitro/Horizontal-Light/notify">Notifications</a></li>
																<li aria-haspopup="true"><a href="https://laravel.spruko.com/admitro/Horizontal-Light/page-sessiontimeout">Page-sessiontimeout</a></li>
															</ul>
														</div>
														<div class="col-lg-3 col-md-12 col-xs-12 link-list">
															<ul>
																<li aria-haspopup="true"><a href="https://laravel.spruko.com/admitro/Horizontal-Light/rangeslider">Range slider</a></li>
																<li aria-haspopup="true"><a href="https://laravel.spruko.com/admitro/Horizontal-Light/rating">Rating</a></li>
																<li aria-haspopup="true"><a href="https://laravel.spruko.com/admitro/Horizontal-Light/sweetalert"> Sweet alerts</a></li>
																<li aria-haspopup="true"><a href="https://laravel.spruko.com/admitro/Horizontal-Light/time-line"> Time Line</a></li>
																<li><h3 class="fs-14 font-weight-bold mb-1 mt-3">Todo List</h3></li>
																<li aria-haspopup="true"><a href="https://laravel.spruko.com/admitro/Horizontal-Light/todo-list">Todo List 01</a></li>
																<li aria-haspopup="true"><a href="https://laravel.spruko.com/admitro/Horizontal-Light/todo-list2">Todo List 02</a></li>
																<li aria-haspopup="true"><a href="https://laravel.spruko.com/admitro/Horizontal-Light/todo-list3">Todo List 03</a></li>
															</ul>
														</div>
														<div class="col-lg-3 col-md-12 col-xs-12 link-list">
															<ul>
																<li><h3 class="fs-14 font-weight-bold">File Manager</h3></li>
																<li aria-haspopup="true"><a href="https://laravel.spruko.com/admitro/Horizontal-Light/file-manager">File Manager 01</a></li>
																<li aria-haspopup="true"><a href="https://laravel.spruko.com/admitro/Horizontal-Light/file-manager-list">File Manager 02</a></li>
																<li><h3 class="fs-14 font-weight-bold mt-3">User List</h3></li>
																<li aria-haspopup="true"><a href="https://laravel.spruko.com/admitro/Horizontal-Light/users-list-1">User List 01</a></li>
																<li aria-haspopup="true"><a href="https://laravel.spruko.com/admitro/Horizontal-Light/users-list-2">User List 02</a></li>
																<li aria-haspopup="true"><a href="https://laravel.spruko.com/admitro/Horizontal-Light/users-list-3">User List 03</a></li>
																<li aria-haspopup="true"><a href="https://laravel.spruko.com/admitro/Horizontal-Light/users-list-4">User List 04</a></li>
															</ul>
														</div>
													</div>
												</div>
											</div>
										</div>
									</li> -->
									<!-- <li aria-haspopup="true"><span class="horizontalMenu-click"><i class="horizontalMenu-arrow fa fa-angle-down"></i></span>
										<a href="https://laravel.spruko.com/admitro/Horizontal-Light/#" class="sub-icon">
											<svg class="hor-icon" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0V0z" fill="none"></path><path d="M8 16h8v2H8zm0-4h8v2H8zm6-10H6c-1.1 0-2 .9-2 2v16c0 1.1.89 2 1.99 2H18c1.1 0 2-.9 2-2V8l-6-6zm4 18H6V4h7v5h5v11z"></path></svg>
											Collection <i class="fa fa-angle-down horizontal-icon"></i>
										</a>
										<ul class="sub-menu">
											<li aria-haspopup="true"><a href="https://laravel.spruko.com/admitro/Horizontal-Light/form-elements"> Form Elements</a></li>
											<li aria-haspopup="true"><a href="https://laravel.spruko.com/admitro/Horizontal-Light/advanced-forms"> Advanced Forms</a></li>
											<li aria-haspopup="true"><a href="https://laravel.spruko.com/admitro/Horizontal-Light/form-wizard">Form Wizard</a></li>
											<li aria-haspopup="true"><a href="https://laravel.spruko.com/admitro/Horizontal-Light/form-editor">Form Editor</a></li>
											<li aria-haspopup="true"><a href="https://laravel.spruko.com/admitro/Horizontal-Light/form-sizes">Form Element Sizes</a></li>
											<li aria-haspopup="true"><a href="https://laravel.spruko.com/admitro/Horizontal-Light/form-treeview">Form Treeviewh</a></li>
										</ul>
									</li> -->
									<!-- <li aria-haspopup="true"><span class="horizontalMenu-click"><i class="horizontalMenu-arrow fa fa-angle-down"></i></span>
										<a href="https://laravel.spruko.com/admitro/Horizontal-Light/#" class="sub-icon">
											<svg class="hor-icon" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0V0z" fill="none"></path><path d="M19 15v4H5v-4h14m1-2H4c-.55 0-1 .45-1 1v6c0 .55.45 1 1 1h16c.55 0 1-.45 1-1v-6c0-.55-.45-1-1-1zM7 18.5c-.82 0-1.5-.67-1.5-1.5s.68-1.5 1.5-1.5 1.5.67 1.5 1.5-.67 1.5-1.5 1.5zM19 5v4H5V5h14m1-2H4c-.55 0-1 .45-1 1v6c0 .55.45 1 1 1h16c.55 0 1-.45 1-1V4c0-.55-.45-1-1-1zM7 8.5c-.82 0-1.5-.67-1.5-1.5S6.18 5.5 7 5.5s1.5.68 1.5 1.5S7.83 8.5 7 8.5z"></path></svg>
											Elements  <i class="fa fa-angle-down horizontal-icon"></i>
										</a>
										<div class="horizontal-megamenu clearfix">
											<div class="container">
												<div class="mega-menubg">
													<div class="row">
														<div class="col-lg-3 col-md-12 col-xs-12 link-list">
															<ul>
																<li aria-haspopup="true"><a href="https://laravel.spruko.com/admitro/Horizontal-Light/accordion">Accordion</a></li>
																<li aria-haspopup="true"><a href="https://laravel.spruko.com/admitro/Horizontal-Light/alerts">Alerts</a></li>
																<li aria-haspopup="true"><a href="https://laravel.spruko.com/admitro/Horizontal-Light/avatars">Avatars</a></li>
																<li aria-haspopup="true"><a href="https://laravel.spruko.com/admitro/Horizontal-Light/badge">Badges</a></li>
																<li aria-haspopup="true"><a href="https://laravel.spruko.com/admitro/Horizontal-Light/breadcrumbs">Breadcrumb</a></li>
																<li aria-haspopup="true"><a href="https://laravel.spruko.com/admitro/Horizontal-Light/buttons">Buttons</a></li>
																<li aria-haspopup="true"><a href="https://laravel.spruko.com/admitro/Horizontal-Light/cards">Cards</a></li>
																<li aria-haspopup="true"><a href="https://laravel.spruko.com/admitro/Horizontal-Light/cards-image">Card Images</a></li>
																<li aria-haspopup="true"><a href="https://laravel.spruko.com/admitro/Horizontal-Light/carousel">Carousel</a></li>
																<li aria-haspopup="true"><a href="https://laravel.spruko.com/admitro/Horizontal-Light/dropdown"> Dropdown</a></li>
																<li aria-haspopup="true"><a href="https://laravel.spruko.com/admitro/Horizontal-Light/footers">Footers</a></li>
																<li aria-haspopup="true"><a href="https://laravel.spruko.com/admitro/Horizontal-Light/headers">Headers</a></li>
															</ul>
														</div>
														<div class="col-lg-3 col-md-12 col-xs-12 link-list">
															<ul>

																<li aria-haspopup="true"><a href="https://laravel.spruko.com/admitro/Horizontal-Light/jumbotron">Jumbotron</a></li>
																<li aria-haspopup="true"><a href="https://laravel.spruko.com/admitro/Horizontal-Light/list">List Group</a></li>
																<li aria-haspopup="true"><a href="https://laravel.spruko.com/admitro/Horizontal-Light/media-object"> Media Obejct</a></li>
																<li aria-haspopup="true"><a href="https://laravel.spruko.com/admitro/Horizontal-Light/modal">Modal</a></li>
																<li aria-haspopup="true"><a href="https://laravel.spruko.com/admitro/Horizontal-Light/navigation">Navigation</a></li>
																<li aria-haspopup="true"><a href="https://laravel.spruko.com/admitro/Horizontal-Light/pagination">Pagination</a></li>
																<li aria-haspopup="true"><a href="https://laravel.spruko.com/admitro/Horizontal-Light/panels"> Panel</a></li>
																<li aria-haspopup="true"><a href="https://laravel.spruko.com/admitro/Horizontal-Light/popover">Popover</a></li>
																<li aria-haspopup="true"><a href="https://laravel.spruko.com/admitro/Horizontal-Light/progress">Progress</a></li>
																<li aria-haspopup="true"><a href="https://laravel.spruko.com/admitro/Horizontal-Light/tabs">Tabs</a></li>
																<li aria-haspopup="true"><a href="https://laravel.spruko.com/admitro/Horizontal-Light/tags">Tags</a></li>
																<li aria-haspopup="true"><a href="https://laravel.spruko.com/admitro/Horizontal-Light/tooltip"> Tooltips</a></li>
															</ul>
														</div>
														<div class="col-lg-3 col-md-12 col-xs-12 link-list">
															<ul>
																<li><h3 class="fs-14 font-weight-bold mb-1">Utilities</h3></li>
																<li aria-haspopup="true"><a href="https://laravel.spruko.com/admitro/Horizontal-Light/elements-border">Border</a></li>
																<li aria-haspopup="true"><a href="https://laravel.spruko.com/admitro/Horizontal-Light/element-colors">Colors</a></li>
																<li aria-haspopup="true"><a href="https://laravel.spruko.com/admitro/Horizontal-Light/elements-display"> Display</a></li>
																<li aria-haspopup="true"><a href="https://laravel.spruko.com/admitro/Horizontal-Light/element-flex">Flex Items</a></li>
																<li aria-haspopup="true"><a href="https://laravel.spruko.com/admitro/Horizontal-Light/element-height">Height</a></li>
																<li aria-haspopup="true"><a href="https://laravel.spruko.com/admitro/Horizontal-Light/elements-margin">Margin</a></li>
																<li aria-haspopup="true"><a href="https://laravel.spruko.com/admitro/Horizontal-Light/elements-paddning">Padding</a></li>
																<li aria-haspopup="true"><a href="https://laravel.spruko.com/admitro/Horizontal-Light/element-typography">Typhography</a></li>
																<li aria-haspopup="true"><a href="https://laravel.spruko.com/admitro/Horizontal-Light/element-width">Width</a></li>
															</ul>
														</div>
														<div class="col-lg-3 col-md-12 col-xs-12 link-list">
															<ul>
																<li><h3 class="fs-14 font-weight-bold">Tables</h3></li>
																<li aria-haspopup="true"><a href="https://laravel.spruko.com/admitro/Horizontal-Light/tables">Default table</a></li>
																<li aria-haspopup="true"><a href="https://laravel.spruko.com/admitro/Horizontal-Light/datatable">Data Table</a></li>
																<li><h3 class="fs-14 font-weight-bold mt-3">E-Commerce</h3></li>
																<li aria-haspopup="true"><a href="https://laravel.spruko.com/admitro/Horizontal-Light/shop"> Products</a></li>
																<li aria-haspopup="true"><a href="https://laravel.spruko.com/admitro/Horizontal-Light/shop-des">Product Details</a></li>
																<li aria-haspopup="true"><a href="https://laravel.spruko.com/admitro/Horizontal-Light/cart">Shopping Cart</a></li>
																<li><h3 class="fs-14 font-weight-bold mt-3">Maps</h3></li>
																<li aria-haspopup="true"><a href="https://laravel.spruko.com/admitro/Horizontal-Light/maps2">Leaflet Maps</a></li>
																<li aria-haspopup="true"><a href="https://laravel.spruko.com/admitro/Horizontal-Light/maps3">Mapel Maps</a></li>
																<li aria-haspopup="true"><a href="https://laravel.spruko.com/admitro/Horizontal-Light/maps">Vector Maps</a></li>
															</ul>
														</div>
													</div>
												</div>
											</div>
										</div>
									</li> -->
									<!-- <li aria-haspopup="true"><span class="horizontalMenu-click"><i class="horizontalMenu-arrow fa fa-angle-down"></i></span>
										<a href="https://laravel.spruko.com/admitro/Horizontal-Light/#" class="sub-icon">
											<svg class="hor-icon" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0V0z" fill="none"></path><path d="M19 3H5c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm0 16H5V5h14v14zM7 10h2v7H7zm4-3h2v10h-2zm4 6h2v4h-2z"></path></svg>
											Charts <i class="fa fa-angle-down horizontal-icon"></i>
										</a>
										<ul class="sub-menu">
											<li aria-haspopup="true"><a href="https://laravel.spruko.com/admitro/Horizontal-Light/chart-apex">Apex Charts</a></li>
											<li aria-haspopup="true"><a href="https://laravel.spruko.com/admitro/Horizontal-Light/chart-chartist">Chartjs Charts</a></li>
											<li aria-haspopup="true"><a href="https://laravel.spruko.com/admitro/Horizontal-Light/chart-echart">Echart Charts</a></li>
											<li aria-haspopup="true"><a href="https://laravel.spruko.com/admitro/Horizontal-Light/chart-flot">Flot Charts</a></li>
											<li aria-haspopup="true"><a href="https://laravel.spruko.com/admitro/Horizontal-Light/chart-morris"> Morris Charts</a></li>
											<li aria-haspopup="true"><a href="https://laravel.spruko.com/admitro/Horizontal-Light/chart-peity">Pie Charts</a></li>
											<li aria-haspopup="true"><a href="https://laravel.spruko.com/admitro/Horizontal-Light/chart-c3">C3 Charts</a></li>
										</ul>
									</li> -->
									<!-- <li aria-haspopup="true"><span class="horizontalMenu-click"><i class="horizontalMenu-arrow fa fa-angle-down"></i></span>
										<a href="https://laravel.spruko.com/admitro/Horizontal-Light/#" class="sub-icon">
											<svg class="hor-icon" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0V0z" fill="none"></path><path d="M11.99 18.54l-7.37-5.73L3 14.07l9 7 9-7-1.63-1.27zM12 16l7.36-5.73L21 9l-9-7-9 7 1.63 1.27L12 16zm0-11.47L17.74 9 12 13.47 6.26 9 12 4.53z"></path></svg>
											Pages <i class="fa fa-angle-down horizontal-icon"></i>
										</a>
										<ul class="sub-menu">
											<li aria-haspopup="true" class="sub-menu-sub"><span class="horizontalMenu-click02"><i class="horizontalMenu-arrow fa fa-angle-down"></i></span><a href="https://laravel.spruko.com/admitro/Horizontal-Light/#">Profile</a>
												<ul class="sub-menu">
													<li aria-haspopup="true"><a href="https://laravel.spruko.com/admitro/Horizontal-Light/profile-1"> Profile 01</a></li>
													<li aria-haspopup="true"><a href="https://laravel.spruko.com/admitro/Horizontal-Light/profile-2">Profile 02</a></li>
													<li aria-haspopup="true"><a href="https://laravel.spruko.com/admitro/Horizontal-Light/profile-3">Profile 03</a></li>
												</ul>
											</li>
											<li aria-haspopup="true"><a href="https://laravel.spruko.com/admitro/Horizontal-Light/editprofile">Edit Profile</a></li>
											<li aria-haspopup="true" class="sub-menu-sub"><span class="horizontalMenu-click02"><i class="horizontalMenu-arrow fa fa-angle-down"></i></span><a href="https://laravel.spruko.com/admitro/Horizontal-Light/#">Email</a>
												<ul class="sub-menu">
													<li aria-haspopup="true"><a href="https://laravel.spruko.com/admitro/Horizontal-Light/email-compose">Email Compose</a></li>
													<li aria-haspopup="true"><a href="https://laravel.spruko.com/admitro/Horizontal-Light/email-inbox">Email Inbox</a></li>
													<li aria-haspopup="true"><a href="https://laravel.spruko.com/admitro/Horizontal-Light/email-read">Email Read</a></li>
												</ul>
											</li>
											<li aria-haspopup="true" class="sub-menu-sub"><span class="horizontalMenu-click02"><i class="horizontalMenu-arrow fa fa-angle-down"></i></span><a href="https://laravel.spruko.com/admitro/Horizontal-Light/#">Pricing</a>
												<ul class="sub-menu">
													<li aria-haspopup="true"><a href="https://laravel.spruko.com/admitro/Horizontal-Light/pricing">Pricing 01</a></li>
													<li aria-haspopup="true"><a href="https://laravel.spruko.com/admitro/Horizontal-Light/pricing-2">Pricing 02</a></li>
													<li aria-haspopup="true"><a href="https://laravel.spruko.com/admitro/Horizontal-Light/pricing-3">Pricing 03</a></li>
												</ul>
											</li>
											<li aria-haspopup="true" class="sub-menu-sub"><span class="horizontalMenu-click02"><i class="horizontalMenu-arrow fa fa-angle-down"></i></span><a href="https://laravel.spruko.com/admitro/Horizontal-Light/#">Invoice</a>
												<ul class="sub-menu">
													<li aria-haspopup="true"><a href="https://laravel.spruko.com/admitro/Horizontal-Light/invoice-list">Invoice list</a></li>
													<li aria-haspopup="true"><a href="https://laravel.spruko.com/admitro/Horizontal-Light/invoice-1">Invoice 01</a></li>
													<li aria-haspopup="true"><a href="https://laravel.spruko.com/admitro/Horizontal-Light/invoice-2">Invoice 02</a></li>
													<li aria-haspopup="true"><a href="https://laravel.spruko.com/admitro/Horizontal-Light/invoice-3">Invoice 03</a></li>
													<li aria-haspopup="true"><a href="https://laravel.spruko.com/admitro/Horizontal-Light/invoice-add">Add Invoice</a></li>
													<li aria-haspopup="true"><a href="https://laravel.spruko.com/admitro/Horizontal-Light/invoice-edit">Edit Invoice</a></li>
												</ul>
											</li>
											<li aria-haspopup="true" class="sub-menu-sub"><span class="horizontalMenu-click02"><i class="horizontalMenu-arrow fa fa-angle-down"></i></span><a href="https://laravel.spruko.com/admitro/Horizontal-Light/#">Blog</a>
												<ul class="sub-menu">
													<li aria-haspopup="true"><a href="https://laravel.spruko.com/admitro/Horizontal-Light/blog">Blog 01</a></li>
													<li aria-haspopup="true"><a href="https://laravel.spruko.com/admitro/Horizontal-Light/blog-2">Blog 02</a></li>
													<li aria-haspopup="true"><a href="https://laravel.spruko.com/admitro/Horizontal-Light/blog-3">Blog 03</a></li>
													<li aria-haspopup="true"><a href="https://laravel.spruko.com/admitro/Horizontal-Light/blog-styles">Blog Styles</a></li>
												</ul>
											</li>
											<li aria-haspopup="true"><a href="https://laravel.spruko.com/admitro/Horizontal-Light/gallery">Gallery</a></li>
											<li aria-haspopup="true"><a href="https://laravel.spruko.com/admitro/Horizontal-Light/faq">FAQS</a></li>
											<li aria-haspopup="true"><a href="https://laravel.spruko.com/admitro/Horizontal-Light/terms">Terms</a></li>
											<li aria-haspopup="true"><a href="https://laravel.spruko.com/admitro/Horizontal-Light/search"> Search</a></li>
											<li aria-haspopup="true"><a href="https://laravel.spruko.com/admitro/Horizontal-Light/empty">Empty Page</a></li>
										</ul>
									</li> -->
									<!-- <li aria-haspopup="true"><span class="horizontalMenu-click"><i class="horizontalMenu-arrow fa fa-angle-down"></i></span>
										<a href="https://laravel.spruko.com/admitro/Horizontal-Light/#" class="sub-icon">
											<svg class="hor-icon" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0V0z" fill="none"></path><path d="M14.25 2.26l-.08-.04-.01.02C13.46 2.09 12.74 2 12 2 6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10c0-4.75-3.31-8.72-7.75-9.74zM19.41 9h-7.99l2.71-4.7c2.4.66 4.35 2.42 5.28 4.7zM13.1 4.08L10.27 9l-1.15 2L6.4 6.3C7.84 4.88 9.82 4 12 4c.37 0 .74.03 1.1.08zM5.7 7.09L8.54 12l1.15 2H4.26C4.1 13.36 4 12.69 4 12c0-1.85.64-3.55 1.7-4.91zM4.59 15h7.98l-2.71 4.7c-2.4-.67-4.34-2.42-5.27-4.7zm6.31 4.91L14.89 13l2.72 4.7C16.16 19.12 14.18 20 12 20c-.38 0-.74-.04-1.1-.09zm7.4-3l-4-6.91h5.43c.17.64.27 1.31.27 2 0 1.85-.64 3.55-1.7 4.91z"></path></svg>
											Custom Pages<i class="fa fa-angle-down horizontal-icon"></i>
										</a>
										<ul class="sub-menu">
											<li aria-haspopup="true" class="sub-menu-sub"><span class="horizontalMenu-click02"><i class="horizontalMenu-arrow fa fa-angle-down"></i></span><a href="https://laravel.spruko.com/admitro/Horizontal-Light/#">Register</a>
												<ul class="sub-menu">
													<li aria-haspopup="true"><a href="https://laravel.spruko.com/admitro/Horizontal-Light/register-1">Register 01</a></li>
													<li aria-haspopup="true"><a href="https://laravel.spruko.com/admitro/Horizontal-Light/register-2">Register 02</a></li>
													<li aria-haspopup="true"><a href="https://laravel.spruko.com/admitro/Horizontal-Light/register-3">Register 03</a></li>
												</ul>
											</li>
											<li aria-haspopup="true" class="sub-menu-sub"><span class="horizontalMenu-click02"><i class="horizontalMenu-arrow fa fa-angle-down"></i></span><a href="https://laravel.spruko.com/admitro/Horizontal-Light/#">Login</a>
												<ul class="sub-menu">
													<li aria-haspopup="true"><a href="https://laravel.spruko.com/admitro/Horizontal-Light/login-1">Login 01</a></li>
													<li aria-haspopup="true"><a href="https://laravel.spruko.com/admitro/Horizontal-Light/login-2">Login 02</a></li>
													<li aria-haspopup="true"><a href="https://laravel.spruko.com/admitro/Horizontal-Light/login-3">Login 03</a></li>
												</ul>
											</li>
											<li aria-haspopup="true" class="sub-menu-sub"><span class="horizontalMenu-click02"><i class="horizontalMenu-arrow fa fa-angle-down"></i></span><a href="https://laravel.spruko.com/admitro/Horizontal-Light/#">Forget Password</a>
												<ul class="sub-menu">
													<li aria-haspopup="true"><a href="https://laravel.spruko.com/admitro/Horizontal-Light/forgot-password-1">Forget Password 01</a></li>
													<li aria-haspopup="true"><a href="https://laravel.spruko.com/admitro/Horizontal-Light/forgot-password-2">Forget Password 02</a></li>
													<li aria-haspopup="true"><a href="https://laravel.spruko.com/admitro/Horizontal-Light/forgot-password-3">Forget Password 03</a></li>
												</ul>
											</li>
											<li aria-haspopup="true" class="sub-menu-sub"><span class="horizontalMenu-click02"><i class="horizontalMenu-arrow fa fa-angle-down"></i></span><a href="https://laravel.spruko.com/admitro/Horizontal-Light/#">Reset Password</a>
												<ul class="sub-menu">
													<li aria-haspopup="true"><a href="https://laravel.spruko.com/admitro/Horizontal-Light/reset-password-1">Reset Password 01</a></li>
													<li aria-haspopup="true"><a href="https://laravel.spruko.com/admitro/Horizontal-Light/reset-password-2">Reset Password 02</a></li>
													<li aria-haspopup="true"><a href="https://laravel.spruko.com/admitro/Horizontal-Light/reset-password-3">Reset Password 03</a></li>
												</ul>
											</li>
											<li aria-haspopup="true" class="sub-menu-sub"><span class="horizontalMenu-click02"><i class="horizontalMenu-arrow fa fa-angle-down"></i></span><a href="https://laravel.spruko.com/admitro/Horizontal-Light/#">Lock Screen</a>
												<ul class="sub-menu">
													<li aria-haspopup="true"><a href="https://laravel.spruko.com/admitro/Horizontal-Light/lockscreen-1">Lock Screen 01</a></li>
													<li aria-haspopup="true"><a href="https://laravel.spruko.com/admitro/Horizontal-Light/lockscreen-2">Lock Screen 02</a></li>
													<li aria-haspopup="true"><a href="https://laravel.spruko.com/admitro/Horizontal-Light/lockscreen-3">Lock Screen 03</a></li>
												</ul>
											</li>
											<li aria-haspopup="true"><a href="https://laravel.spruko.com/admitro/Horizontal-Light/construction">Under Construction</a></li>
											<li aria-haspopup="true"><a href="https://laravel.spruko.com/admitro/Horizontal-Light/coming">Coming Soon </a></li>
											<li aria-haspopup="true" class="sub-menu-sub"><span class="horizontalMenu-click02"><i class="horizontalMenu-arrow fa fa-angle-down"></i></span><a href="https://laravel.spruko.com/admitro/Horizontal-Light/#">Error Pages</a>
												<ul class="sub-menu">
													<li aria-haspopup="true"><a href="https://laravel.spruko.com/admitro/Horizontal-Light/400">400</a></li>
													<li aria-haspopup="true"><a href="https://laravel.spruko.com/admitro/Horizontal-Light/401">401</a></li>
													<li aria-haspopup="true"><a href="https://laravel.spruko.com/admitro/Horizontal-Light/403">403</a></li>
													<li aria-haspopup="true"><a href="https://laravel.spruko.com/admitro/Horizontal-Light/404">404</a></li>
													<li aria-haspopup="true"><a href="https://laravel.spruko.com/admitro/Horizontal-Light/500">500</a></li>
													<li aria-haspopup="true"><a href="https://laravel.spruko.com/admitro/Horizontal-Light/503">503</a></li>
												</ul>
											</li>
										</ul>
									</li> -->
									<!-- <li aria-haspopup="true"><span class="horizontalMenu-click"><i class="horizontalMenu-arrow fa fa-angle-down"></i></span>
										<a href="https://laravel.spruko.com/admitro/Horizontal-Light/#" class="sub-icon">
											<svg class="hor-icon" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0z" fill="none"></path><path d="M12 22C6.49 22 2 17.51 2 12S6.49 2 12 2s10 4.04 10 9c0 3.31-2.69 6-6 6h-1.77c-.28 0-.5.22-.5.5 0 .12.05.23.13.33.41.47.64 1.06.64 1.67 0 1.38-1.12 2.5-2.5 2.5zm0-18c-4.41 0-8 3.59-8 8s3.59 8 8 8c.28 0 .5-.22.5-.5 0-.16-.08-.28-.14-.35-.41-.46-.63-1.05-.63-1.65 0-1.38 1.12-2.5 2.5-2.5H16c2.21 0 4-1.79 4-4 0-3.86-3.59-7-8-7z"></path><circle cx="6.5" cy="11.5" r="1.5"></circle><circle cx="9.5" cy="7.5" r="1.5"></circle><circle cx="14.5" cy="7.5" r="1.5"></circle><circle cx="17.5" cy="11.5" r="1.5"></circle></svg>
											Icons <i class="fa fa-angle-down horizontal-icon"></i>
										</a>
										<ul class="sub-menu">
											<li aria-haspopup="true"><a href="https://laravel.spruko.com/admitro/Horizontal-Light/icons">Font Awesome</a></li>
											<li aria-haspopup="true"><a href="https://laravel.spruko.com/admitro/Horizontal-Light/icons2">Material Design Icons</a></li>
											<li aria-haspopup="true"><a href="https://laravel.spruko.com/admitro/Horizontal-Light/icons3">Simple Line Icons</a></li>
											<li aria-haspopup="true"><a href="https://laravel.spruko.com/admitro/Horizontal-Light/icons4">Feather Icons</a></li>
											<li aria-haspopup="true"><a href="https://laravel.spruko.com/admitro/Horizontal-Light/icons5">Ionic Icons</a></li>
											<li aria-haspopup="true"><a href="https://laravel.spruko.com/admitro/Horizontal-Light/icons6">Flag Icons</a></li>
											<li aria-haspopup="true"><a href="https://laravel.spruko.com/admitro/Horizontal-Light/icons7">pe7 Icons</a></li>
											<li aria-haspopup="true"><a href="https://laravel.spruko.com/admitro/Horizontal-Light/icons8">Themify Icons</a></li>
											<li aria-haspopup="true"><a href="https://laravel.spruko.com/admitro/Horizontal-Light/icons9">Typicons Icons</a></li>
											<li aria-haspopup="true"><a href="https://laravel.spruko.com/admitro/Horizontal-Light/icons10">Weather Icons</a></li>
											<li aria-haspopup="true"><a href="https://laravel.spruko.com/admitro/Horizontal-Light/icons11">Material Svgs</a></li>
										</ul>
									</li> -->
								</ul>
							</nav>
							<!--Nav-->
						</div>
					</div>
				<!-- </div><div class="jumps-prevent" style="padding-top: 60px;"></div> -->
				<!--/Horizontal-main -->				<!-- Hor-Content -->
				<!-- <div class="hor-content main-content">
					<div class="container"> -->
												<!--Page header-->
						<!-- <div class="page-header">
							<div class="page-leftheader">
								<h4 class="page-title mb-0">Hi! Welcome Back</h4>
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="https://laravel.spruko.com/admitro/Horizontal-Light/#"><i class="fe fe-home mr-2 fs-14"></i>Home</a></li>
									<li class="breadcrumb-item active" aria-current="page"><a href="https://laravel.spruko.com/admitro/Horizontal-Light/#">Sales Dashboard</a></li>
								</ol>
							</div>
							<div class="page-rightheader">
								<div class="btn btn-list">
									<a href="https://laravel.spruko.com/admitro/Horizontal-Light/#" class="btn btn-info"><i class="fe fe-settings mr-1"></i> General Settings </a>
									<a href="https://laravel.spruko.com/admitro/Horizontal-Light/#" class="btn btn-danger"><i class="fe fe-printer mr-1"></i> Print </a>
									<a href="https://laravel.spruko.com/admitro/Horizontal-Light/#" class="btn btn-warning"><i class="fe fe-shopping-cart mr-1"></i> Buy Now </a>
								</div>
							</div>
						</div> -->
						<!--End Page header-->						
					<!-- </div>
				</div> -->
				<!-- End app-content-->

			</div>

<main class="main-content">
            @yield('header')

            @yield('content')

<!--Footer-->
			<footer class="footer main-footer">
				<div class="container">
					<div class="row align-items-center flex-row-reverse">
						<div class="col-md-12 col-sm-12 text-center">
							Copyright © 2021 <a href="https://laravel.spruko.com/admitro/Horizontal-Light/#">Voltech</a>. Designed by <a href="https://laravel.spruko.com/admitro/Horizontal-Light/#">Team ERP</a> All rights reserved.
						</div>
					</div>
				</div>
			</footer>
			<!-- End Footer-->
        </main>

								</div><!-- End Page -->


    <script src="{{ asset('plugins/mandatory/apexcharts.js') }}"></script>
    <script src="{{ asset('plugins/mandatory/bootstrap.js') }}"></script>
    <script src="{{ asset('plugins/mandatory/chart.js') }}"></script>
    <script src="{{ asset('plugins/mandatory/circle-progress.js') }}"></script>
    <script src="{{ asset('plugins/mandatory/custom.js') }}"></script>
    <script src="{{ asset('plugins/mandatory/echarts.js') }}"></script>
    <script src="{{ asset('plugins/mandatory/horizontal-menu.js') }}"></script>
    <script src="{{ asset('plugins/mandatory/index1.js') }}"></script>
    <script src="{{ asset('plugins/mandatory/jquery.js') }}"></script>
    <script src="{{ asset('plugins/mandatory/jquery_002.js') }}"></script>
    <script src="{{ asset('plugins/mandatory/jquery_003.js') }}"></script>
    <script src="{{ asset('plugins/mandatory/jquery-3.js') }}"></script>
    <script src="{{ asset('plugins/mandatory/moment.js') }}"></script>
    <script src="{{ asset('plugins/mandatory/peitychart.js') }}"></script>
    <script src="{{ asset('plugins/mandatory/popper.js') }}"></script>
    <script src="{{ asset('plugins/mandatory/p-scroll.js') }}"></script>
    <script src="{{ asset('plugins/mandatory/p-scrollbar.js') }}"></script>
    <script src="{{ asset('plugins/mandatory/select2.js') }}"></script>
    <script src="{{ asset('plugins/mandatory/select2_002.js') }}"></script>
    <script src="{{ asset('plugins/mandatory/simplebar.js') }}"></script>
    <script src="{{ asset('plugins/mandatory/stiky.js') }}"></script>
    <script src="{{ asset('plugins/mandatory/switcher.js') }}"></script>
    <script src="{{ asset('plugins/mandatory/utils.js') }}"></script>
    @stack('scripts')
</body>


</html>