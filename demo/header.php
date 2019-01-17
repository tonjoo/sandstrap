<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	<title>SANDSTRAP DEMO</title>
	<link rel="icon" type="image/png" href="assets/images/icon/favicon.png">
	<link rel="stylesheet" href="../assets/css/style.min.css?v=0.3">

	<!-- Demo Style -->
	<link rel="stylesheet" href="assets/css/demo.css">
	<!-- End Demo Style -->

	<script src="../assets/js/jquery-3.1.1.min.js"></script>
</head>

<body class="">
	
	<div id="wrapper">
		<header id="main-header" class="main-header header-fixed">
			<div class="navbar-overlay"></div>
			<nav class="navbar-top navbar-collapse" id="navbar-top">
				<div class="container">
					<div class="row">
						<div class="col-sm-auto ml-sm-auto">							
							<ul class="nav navbar-nav">
								<li>
									<a href="#" title="Login">Login</a>
								</li>
								<li>
									<a href="#" title="Register">Register</a>
								</li>
								<li>
									<a href="#" title="Email">Email</a>
								</li>
								<li class="dropdown pll-parent-menu-item">
									<a class="no-click" href="#">
										<img src="assets/images/icon/in.gif">
										<span>Indonesia</span>
									</a>
									<ul class="dropdown-menu" role="menu">
										<li class="lang-item">
											<a href="#">
												<img src="assets/images/icon/en.gif">
												<span>English</span>
											</a>
										</li>
									</ul>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</nav>
			<nav class="navbar-primary navbar-expand-lg" aria-label="Main navigation">
				<div class="container">
					<div class="navbar-header">
						<a href="homepage.php" class="navbar-brand"><img src="assets/images/logo-primary.png" alt="Logo FK UII"></a>

						<button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-animation="false" data-target="#navbar" aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation">
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>

						<button class="top-navbar-toggler collapsed d-sm-none" data-toggle="collapse" data-target="#navbar-top"><i class="ion ion-android-more-vertical"></i></button>
					</div>
					<div id="navbar" class="navbar navbar-collapse collapse">
						<div id="navbar-close" class="navbar-close">
							<span></span>
							<span></span>
						</div>
						<div class="search-collapse">
							<form action="">
								<div class="form-group">
									<input type="text" class="form-control" placeholder="Search...">
									<button class="form-submit"><i class="ion-ios-search-strong"></i></button>
								</div>
							</form>
						</div>
						<ul class="navbar-nav main-menu ml-lg-auto">
							<li class="current-menu-item"><a href="index.php">Home</a></li>
							<li class=""><a href="documentation.php">Documentation</a></li>
							<li class=""><a href="example.php">Example</a></li>
							<li class=""><a href="https://git.tonjoo.com/tonjoo/sandstrap">Download</a></li>
						</ul>
						<a class="header-search d-none d-lg-block collapsed" href="#" title="" data-toggle="collapse" data-target="#header-search-form">
	                        <span class="header-search-close"></span>
							<svg version="1.1" xmlns="http://www.w3.org/2000/svg" width="416" height="448" viewBox="0 0 416 448"><title></title><g id="icomoon-ignore"></g><path d="M288 208c0-61.75-50.25-112-112-112s-112 50.25-112 112 50.25 112 112 112 112-50.25 112-112zM416 416c0 17.5-14.5 32-32 32-8.5 0-16.75-3.5-22.5-9.5l-85.75-85.5c-29.25 20.25-64.25 31-99.75 31-97.25 0-176-78.75-176-176s78.75-176 176-176 176 78.75 176 176c0 35.5-10.75 70.5-31 99.75l85.75 85.75c5.75 5.75 9.25 14 9.25 22.5z"></path></svg>
	                    </a>
					</div>
					<div class="header-search__form" id="header-search-form">
						<form action="">
							<div class="form-group">
								<input type="text" class="form-control" placeholder="Search...">
								<button class="btn-submit" type="submit">
									<svg version="1.1" xmlns="http://www.w3.org/2000/svg" width="416" height="448" viewBox="0 0 416 448"><title></title><g id="icomoon-ignore"></g><path d="M288 208c0-61.75-50.25-112-112-112s-112 50.25-112 112 50.25 112 112 112 112-50.25 112-112zM416 416c0 17.5-14.5 32-32 32-8.5 0-16.75-3.5-22.5-9.5l-85.75-85.5c-29.25 20.25-64.25 31-99.75 31-97.25 0-176-78.75-176-176s78.75-176 176-176 176 78.75 176 176c0 35.5-10.75 70.5-31 99.75l85.75 85.75c5.75 5.75 9.25 14 9.25 22.5z"></path></svg>
								</button>
							</div>
						</form>
					</div>
				</div>
			</nav>
		</header>