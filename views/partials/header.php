<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<title><?php echo $title; ?></title>
		<!-- Favicon -->
		<link href="<?php echo $asset_url; ?>/img/brand/favicon.png" rel="icon" type="image/png">
		<!-- Fonts -->
		<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
		<!-- Icons -->
		<link href="<?php echo $asset_url; ?>/js/plugins/nucleo/css/nucleo.css" rel="stylesheet">
		<link href="<?php echo $asset_url; ?>/js/plugins/@fortawesome/fontawesome-free/css/all.min.css" rel="stylesheet">
		<!-- CSS Files -->
		<link href="<?php echo $asset_url; ?>/css/argon-dashboard.css?v=1.1.1" rel="stylesheet">
	</head>

	<body class="" data-gr-c-s-loaded="true">
		<nav class="navbar navbar-vertical fixed-left navbar-expand-md navbar-light bg-white" id="sidenav-main">
			<div class="container-fluid">
				<!-- Toggler -->
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#sidenav-collapse-main" aria-controls="sidenav-main" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<!-- Brand -->
				<a class="navbar-brand pt-0" href="<?php echo get_url(); ?>">
					<div class="navbar-brand-icon "><i class="ni ni-spaceship"></i></div>
					<span class="navbar-brand-text">My App</span>
				</a>
				<!-- User -->
				<ul class="nav align-items-center d-md-none">
					<li class="nav-item dropdown">
						<a class="nav-link" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							<div class="media align-items-center">
								<span class="avatar avatar-sm rounded-circle">
									<img alt="Image placeholder" src="<?php echo $asset_url; ?>/img/theme/team-4-800x800.jpg">
								</span>
							</div>
						</a>
						<div class="dropdown-menu dropdown-menu-arrow dropdown-menu-right">
							<div class=" dropdown-header noti-title">
								<h6 class="text-overflow m-0">Welcome!</h6>
							</div>
							<div class="dropdown-divider"></div>
							<a href="<?php echo get_url( 'logout' ); ?>" class="dropdown-item">
								<i class="ni ni-user-run"></i>
								<span>Logout</span>
							</a>
						</div>
					</li>
				</ul>
				<!-- Collapse -->
				<div class="collapse navbar-collapse" id="sidenav-collapse-main">
					<!-- Collapse header -->
					<div class="navbar-collapse-header d-md-none">
						<div class="row">
							<div class="col-6 collapse-brand">
								<a class="navbar-brand pt-0" href="<?php echo get_url(); ?>">
									<div class="navbar-brand-icon "><i class="ni ni-spaceship"></i></div>
									<span class="navbar-brand-text">My App</span>
								</a>
							</div>
							<div class="col-6 collapse-close">
								<button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#sidenav-collapse-main" aria-controls="sidenav-main" aria-expanded="false" aria-label="Toggle sidenav">
									<span></span>
									<span></span>
								</button>
							</div>
						</div>
					</div>
					<!-- Navigation -->
					<?php Flight::render( 'partials/menu' ); ?>
					<!-- Divider -->
					<hr class="my-3">
				</div>
			</div>
		</nav>
		<div class="main-content">
			<!-- Navbar -->
			<nav class="navbar navbar-top navbar-expand-md navbar-dark" id="navbar-main">
				<div class="container-fluid">
					<!-- Brand -->
					<span class="h4 mb-0 text-white text-uppercase d-none d-lg-inline-block"><?php echo $title; ?></span>
					<!-- Form -->

					<!-- User -->
					<ul class="navbar-nav align-items-center d-none d-md-flex">
						<li class="nav-item dropdown">
							<a class="nav-link pr-0" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
								<div class="media align-items-center">
									<span class="avatar avatar-sm rounded-circle">
										<img alt="Image placeholder" src="<?php echo $asset_url; ?>/img/theme/team-4-800x800.jpg">
									</span>
									<div class="media-body ml-2 d-none d-lg-block">
										<span class="mb-0 text-sm  font-weight-bold">Nuzril</span>
									</div>
								</div>
							</a>
							<div class="dropdown-menu dropdown-menu-arrow dropdown-menu-right">
								<div class=" dropdown-header noti-title">
									<h6 class="text-overflow m-0">Welcome!</h6>
								</div>
								<div class="dropdown-divider"></div>
								<a href="<?php echo get_url( 'logout' ); ?>" class="dropdown-item">
									<i class="ni ni-user-run"></i>
									<span>Logout</span>
								</a>
							</div>
						</li>
					</ul>
				</div>
			</nav>
			<!-- End Navbar -->