<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title><?php echo $title;?></title>
		<meta name="description" content="description">
		<meta name="author" content="DevOOPS">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- Load CSS-->
		<?php echo Asset::css('bootstrap.css');?>
		<?php echo Asset::css('bootstrap.min.css');?>
		<?php echo Asset::css('bootstrap-theme.css');?>
		<?php echo Asset::css('bootstrap-theme.min.css');?>
		<?php echo Asset::css('style.css');?>
		<?php echo Asset::css('style.min.css');?>

		<!-- Load Javascript-->
		<?php echo Asset::js('bootstrap.js');?>
		<?php echo Asset::js('bootstrap.min.js');?>
		<?php echo Asset::js('devoops.js');?>
		<?php echo Asset::js('devoops.min.js');?>

		<!-- Load Images-->
		<?php 
			// add files paths that are not in the default paths
			$path = Asset::find_file('bootstrap.css', 'css','plugins/bootstrap/bootstrap.css');
			$path = Asset::find_file('jquery-ui.min.css', 'css','plugins/jquery-ui/jquery-ui.min.css'); 
			$path = Asset::find_file('jquery.fancybox.css', 'css','plugins/fancybox/jquery.fancybox.css');
			$path = Asset::find_file('fullcalendar.css', 'css','plugins/fullcalendar/fullcalendar.css');
			$path = Asset::find_file('xcharts.min.css', 'css','plugins/xcharts/xcharts.min.css');
			$path = Asset::find_file('select2.css', 'css','plugins/select2/select2.css');
		?>
		<link href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
		<link href='http://fonts.googleapis.com/css?family=Righteous' rel='stylesheet' type='text/css'>
		<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!--[if lt IE 9]>
				<script src="http://getbootstrap.com/docs-assets/js/html5shiv.js"></script>
				<script src="http://getbootstrap.com/docs-assets/js/respond.min.js"></script>
		<![endif]-->
	</head>
<body>
<!--Start Header-->
<div id="screensaver">
	<canvas id="canvas"></canvas>
	<i class="fa fa-lock" id="screen_unlock"></i>
</div>
<header class="navbar">
	<div class="container-fluid expanded-panel">
		<div class="row">
			<div id="logo" class="col-xs-12 col-sm-2">
				<a href="index.html">ICT DEPARMENT</a>
			</div>
			<div id="top-panel" class="col-xs-12 col-sm-10">
				<div class="row">
					<div class="col-xs-8 col-sm-4">
						<a href="#" class="show-sidebar">
						  <i class="fa fa-bars"></i>
						</a>
						<div id="search">
							<input type="text" placeholder="search"/>
							<i class="fa fa-search"></i>
						</div>
					</div>
					<div class="col-xs-4 col-sm-8 top-panel-right">
						<ul class="nav navbar-nav pull-right panel-menu">
							<li class="dropdown">
								<a href="#" class="dropdown-toggle account" data-toggle="dropdown">
									<div class="avatar">
										<?php echo Asset::img('avatar.jpg', array('class' => 'img-rounded', 'alt' =>'avatar' ));?>
									</div>
									<div class="user-mini pull-right">
										<span class="welcome">Eugene Dagohoy</span>
										<span class="badge">Administrator</span>
									</div>
								</a>
							</li>
							<li class="hidden-xs">
								<a href="logout">
									Logout
								</a>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
</header>
<!--End Header-->
<!--Start Container-->
<div id="main" class="container-fluid">
	<div class="row">
		<div id="sidebar-left" class="col-xs-2 col-sm-2">
			<ul class="nav main-menu">
				<li>
					<a href="ajax/dashboard.html" class="active ajax-link">
						<i class="fa fa-home"></i>
						<span class="hidden-xs">Dashboard</span>
					</a>
				</li>
				<li class="dropdown">
					<a href="#">
						<i class="fa fa-group"></i>
						 <span class="hidden-xs">IT Support Staff</span>
					</a>
				</li>
				<li class="dropdown">
					<a href="#" class="dropdown-toggle">
						<i class="fa fa-barcode"></i>
						 <span class="hidden-xs">Equipment Tracker</span>
					</a>
				</li>
				<li class="dropdown">
					<a href="#" class="dropdown-toggle">
						<i class="fa fa-book"></i>
						<span class="hidden-xs">Reports</span>
					</a>
				</li>
				<li class="dropdown">
					<a href="#" class="dropdown-toggle">
						<i class="fa fa-user"></i>
						 <span class="hidden-xs">System Users</span>
					</a>
				</li>
				 <li>
					<a class="ajax-link" href="ajax/calendar.html">
						 <i class="fa fa-truck"></i>
						 <span class="hidden-xs">Suppliers</span>
					</a>
				 </li>
				 <li>
					<a class="ajax-link" href="ajax/calendar.html">
						 <i class="fa fa-calendar"></i>
						 <span class="hidden-xs">Departments</span>
					</a>
				 </li>
			</ul>
		</div>
		<!--Start Content-->
		<div id="content" class="col-xs-12 col-sm-10">
			<div id="ajax-content"></div>
		</div>
		<!--End Content-->
	</div>
</div>
<!--End Container-->
</body>
</html>
