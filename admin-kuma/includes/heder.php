<?php

?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
		<meta charset="utf-8" />
		<title>Dodaj regiju</title>

		<meta name="description" content="responsive photo gallery using colorbox" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />

		<!-- bootstrap & fontawesome -->
		<link rel="stylesheet" href="assets/css/bootstrap.min.css" />
		<link rel="stylesheet" href="assets/font-awesome/4.5.0/css/font-awesome.min.css" />

		<!-- page specific plugin styles -->
		<link rel="stylesheet" href="assets/css/colorbox.min.css" />

		<!-- text fonts -->
		<link rel="stylesheet" href="assets/css/fonts.googleapis.com.css" />

		<!-- ace styles -->
		<link rel="stylesheet" href="assets/css/ace.min.css" class="ace-main-stylesheet" id="main-ace-style" />

		<!--[if lte IE 9]>
			<link rel="stylesheet" href="assets/css/ace-part2.min.css" class="ace-main-stylesheet" />
		<![endif]-->
		<link rel="stylesheet" href="assets/css/ace-skins.min.css" />
		<link rel="stylesheet" href="assets/css/ace-rtl.min.css" />
		<link rel="stylesheet" href="css/style.admin.css" />

		<!--[if lte IE 9]>
		  <link rel="stylesheet" href="assets/css/ace-ie.min.css" />
		<![endif]-->

		<!-- inline styles related to this page -->

		<!-- ace settings handler -->
		<script src="assets/js/ace-extra.min.js"></script>

		<!-- HTML5shiv and Respond.js for IE8 to support HTML5 elements and media queries -->

		<!--[if lte IE 8]>
		<script src="assets/js/html5shiv.min.js"></script>
		<script src="assets/js/respond.min.js"></script>
		<![endif]-->
	</head>

	<body class="no-skin">

		<div id="navbar" class="navbar navbar-default          ace-save-state">

			<div class="navbar-container ace-save-state" id="navbar-container">
				<button type="button" class="navbar-toggle menu-toggler pull-left" id="menu-toggler" data-target="#sidebar">
					<span class="sr-only">Toggle sidebar</span>

					<span class="icon-bar"></span>

					<span class="icon-bar"></span>

					<span class="icon-bar"></span>
				</button>

				<div class="navbar-header pull-left">
					<a href="#" class="navbar-brand">
						<small>
							<i class="fa fa-leaf"></i>
							Dinamikturs Admin
						</small>
					</a>
				</div>

				<div class="navbar-buttons navbar-header pull-right" role="navigation">
					
									
								<a href="logout.php"><button name="logOut" style="margin-top: 10%;nas">Log out</button></a>

				</div>
			</div><!-- /.navbar-container -->
		</div>

		<div class="main-container ace-save-state" id="main-container">
			<script type="text/javascript">
				try{ace.settings.loadState('main-container')}catch(e){}
			</script>

			<div id="sidebar" class="sidebar                  responsive                    ace-save-state">
				<script type="text/javascript">
					try{ace.settings.loadState('sidebar')}catch(e){}
				</script>

				
				<ul class="nav nav-list">
					<li class="">
						<a href="#">
							<i class="menu-icon fa fa-tachometer"></i>
							<span class="menu-text"> Dashboard </span>
						</a>

						<b class="arrow"></b>
					</li>

					
					<li class="">
						<a href="#" class="dropdown-toggle">
							<i class="menu-icon fa fa-pencil-square-o"></i>
							<span class="menu-text"> HOTELI </span>

							<b class="arrow fa fa-angle-down"></b>
						</a>

						<b class="arrow"></b>

						<ul class="submenu">
							<li class="">
								<a href="ljetovalista.php">
									<i class="menu-icon fa fa-caret-right"></i>
									Lista ljetovalista
								</a>

								<b class="arrow"></b>
							</li>
							<li class="">
								<a href="#">
									<i class="menu-icon fa fa-caret-right"></i>
									Lista hot destinacije
								</a>
								<b class="arrow"></b>
							</li>
							
							<li class="">
								<a href="#">
									<i class="menu-icon fa fa-caret-right"></i>
									Lista ekskurzije
								</a>
								<b class="arrow"></b>
							</li>
							<li> 
								<a href="#">
									<i class="menu-icon fa fa-caret-right"></i>
									Lista evropski gradovi
								</a>
								<b class="arrow"></b>
							</li>
							<li class="">
								<a href="#">
									<i class="menu-icon fa fa-caret-right"></i>
									Lista proljece
								</a>
								<b class="arrow"></b>
							</li>
							<li>
							<a href="#">
									<i class="menu-icon fa fa-caret-right"></i>
									Lista jesen
								</a>
								<b class="arrow"></b>
							</li>
							<li>
							<a href="#">
									<i class="menu-icon fa fa-caret-right"></i>
									Lista zima
								</a>
								<b class="arrow"></b>
							</li>
							<li>
							<a href="#">
									<i class="menu-icon fa fa-caret-right"></i>
									Lista krstarenja
								</a>
								<b class="arrow"></b>
							</li>

							<li class="">
								<a href="form-elements-2.html">
									<i class="menu-icon fa fa-plus purple"></i>
									Dodaj novi hotel
								</a>

								<b class="arrow"></b>
							</li>

							<li class="">
								<a href="#">
										<i class="menu-icon fa fa-plus purple"></i>
									Izmeni
								</a>

								<b class="arrow"></b>
							</li>
						
						</ul>
					</li>

					

					<li class="">
						<!-- SLAJDER -->
                         <a href="slider.php">
							<i class="menu-icon fa fa-desktop"></i>
							<span class="menu-text">
								SLAJDER
							</span>

							<b class="arrow fa fa-angle-down"></b>
						</a>
					</li>
						<li class="">
						<!-- SLAJDER -->
                         <a href="izdvajamo.php">
							<i class="menu-icon fa fa-desktop"></i>
							<span class="menu-text">
								IZDVAJAMO
							</span>

							<b class="arrow fa fa-angle-down"></b>
						</a>
					</li>
					</li>
						<li class="">
						<!-- SLAJDER -->
                         <a href="upload.php">
							<i class="menu-icon fa fa-desktop"></i>
							<span class="menu-text">
								UPLOAD FOTO
							</span>

							<b class="arrow fa fa-angle-down"></b>
						</a>
					</li>

					
					<li class="active">
						<a href="#" class="dropdown-toggle">
							<i class="menu-icon fa fa-tag"></i>
							<span class="menu-text"> LOKACIJA </span>

							<b class="arrow fa fa-angle-down"></b>
						</a>

						<b class="arrow"></b>

						<ul class="submenu">
							<li class="">
								<a href="drzaveAdmin.php">
									<i class="menu-icon fa fa-caret-right"></i>
									Dodaj drzavu
								</a>

								<b class="arrow"></b>
							</li>

							<li class="odmaraliste.html">
								<a href="#">
									<i class="menu-icon fa fa-caret-right"></i>
									Dodaj odmaraliste
								</a>

								<b class="arrow"></b>
							</li>
						</ul>

					</li>
                    
					<li class="">
						<a href="#" class="dropdown-toggle">
							<i class="menu-icon fa fa-list"></i>
							<span class="menu-text"> ARANZMANI </span>

							<b class="arrow fa fa-angle-down"></b>
						</a>

						<b class="arrow"></b>
					</li>
				</ul><!-- /.nav-list -->

				<div class="sidebar-toggle sidebar-collapse" id="sidebar-collapse">
					<i id="sidebar-toggle-icon" class="ace-icon fa fa-angle-double-left ace-save-state" data-icon1="ace-icon fa fa-angle-double-left" data-icon2="ace-icon fa fa-angle-double-right"></i>
				</div>
			</div>


			<div class="main-content">
				<div class="main-content-inner">
					<div class="breadcrumbs ace-save-state" id="breadcrumbs">
						<ul class="breadcrumb">
							<li>
								<i class="ace-icon fa fa-home home-icon"></i>
								<a href="../index.php">Povratak na sajt</a>
							</li>
							
						</ul><!-- /.breadcrumb -->

						<div class="nav-search" id="nav-search">
							<form class="form-search">
								<span class="input-icon">
									<input type="text" placeholder="Search ..." class="nav-search-input" id="nav-search-input" autocomplete="off" />
									
									<i class="ace-icon fa fa-search nav-search-icon"></i>
								</span>
							</form>
						</div><!-- /.nav-search -->
					</div>
                  <!--
					<div class="page-content">
						<div class="ace-settings-container" id="ace-settings-container">
							

							<div class="ace-settings-box clearfix" id="ace-settings-box">
								
							</div><!-- /.ace-settings-box -->
						
							<!-- ***************************************************************************** -->



