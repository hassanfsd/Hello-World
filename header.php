<!DOCTYPE html>
<html lang="en">
<head>
<title>Click-Technologies</title>
<link rel="Shortcut Icon" href="favicon.ico" type="image/x-icon" />
<meta charset="utf-8"><link href='http://fonts.googleapis.com/css?family=Lato:300,400,700,300italic' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="css/reset.css" type="text/css" media="screen">
<link rel="stylesheet" href="css/grid.css" type="text/css" media="screen">
<link rel="stylesheet" href="css/camera.css" type="text/css" media="screen">
<link rel="stylesheet" href="css/style.css" type="text/css" media="screen">
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/jquery-migrate-1.1.1.js"></script>
<script type="text/javascript" src="js/camera.js"></script>
<script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
<script>
    jQuery(function(){      
      jQuery('#camera_wrap_1').camera({
        height: '317px',
        loader: false,
        pagination: false,
        thumbnails: false
      });
    });
  </script>
  <!--[if lt IE 8]><div style='text-align:center'><a href="http://www.microsoft.com/windows/internet-explorer/default.aspx?ocid=ie6_countdown_bannercode"><img src="http://www.theie6countdown.com/img/upgrade.jpg"border="0"alt=""/></a></div><![endif]-->
  	<!--[if lt IE 9]>
	   	<script src="js/html5shiv.js"></script>
	   	<link rel="stylesheet" href="css/ie.css" type="text/css" media="screen">
	   	<link href='http://fonts.googleapis.com/css?family=Lato:300italic' rel='stylesheet' type='text/css'>
	   	<link href='http://fonts.googleapis.com/css?family=Lato:300' rel='stylesheet' type='text/css'>
	   	<link href='http://fonts.googleapis.com/css?family=Lato:400' rel='stylesheet' type='text/css'>
	   	<link href='http://fonts.googleapis.com/css?family=Lato:700' rel='stylesheet' type='text/css'>
    <![endif]-->
</head>

<body>
<?php $page = basename($_SERVER['PHP_SELF']); ?>
	<header>
		<div class="container_12">
			<div class="grid_12">
				<div class="wrapper">
					<a href="index.php" class="logo">design.maniacs</a>
					<nav>
						<ul class="menu">
							<li <?php if($page == 'index.php') echo 'class="active"'; ?>><a href="index.php">about</a></li>
                            <li <?php if($page == 'services.php') echo 'class="active"'; ?>><a href="services.php">Services</a></li>
							<li <?php if($page == 'works.php') echo 'class="active"'; ?>><a href="works.php">works</a></li>
							<li <?php if($page == 'training.php') echo 'class="active"'; ?>><a href="training.php">Training</a></li>
							<li <?php if($page == 'contacts.php') echo 'class="active"'; ?>><a href="contacts.php">contacts</a></li>
						</ul>
					</nav>
				</div>
			</div>
		</div>
	</header>