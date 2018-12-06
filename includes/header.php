<?php
// php file for header section
header('Content-Type: text/html; charset=UTF-8');

// get base url
function base_url(){
    if(isset($_SERVER['HTTPS'])){
        $protocol = ($_SERVER['HTTPS'] && $_SERVER['HTTPS'] != "off") ? "https" : "http";
    }
    else{
        $protocol = 'http';
    }
    return $protocol . "://" . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
}

// error_reporting(E_ALL);
// ini_set('display_errors', 1);

?>


<!DOCTYPE html>
<html lang="es" dir="ltr">

	<head>

		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="title" content="<?php echo $page_title; ?>">
		<meta name="description" content="<?php echo $page_description; ?>">

		<meta property="og:image" content="<?php echo base_url(); ?>assets/images/og.jpg" />
		<meta property="og:image:type" content="image/jpg" />
		<meta property="og:image:alt" content="Una experiencia nueva en apartamentos" />

		<title>
			<?php echo $page_title; ?>
		</title>
		<link rel="apple-touch-icon" href="assets/favicons/apple-touch-icon.png" sizes="180x180">
		<link rel="icon" href="assets/favicons/favicon-32x32.png" sizes="32x32">
		<link rel="icon" href="assets/favicons/favicon-16x16.png" sizes="16x16">
		<link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
		<link href="assets/css/master.css" rel="stylesheet" type="text/css" />
		<link href="assets/css/font-awesome.css" rel="stylesheet" type="text/css" />
	</head>

	<body class="<?php echo $page_class; ?>">
		<header>
			<div id="header-1">

				<div class="container">
					<div class="navbar-header">
						<div class="logo block">
							<a href="index.php">
								<img src="assets/images/logo.png" alt="Logo">
							</a>
						</div>

						<div class="menu-social block hidden-xs">
							<ul class="menu">
								<li><a class="item" href="<?php echo $instagram_url; ?>" target="_blank" rel="nofollow" title="Instagram">
										<img src="assets/images/instagram.png" alt="Instagram">
									</a></li>
								<li><a class="item" href="<?php echo $waze_url; ?>" target="_blank" rel="nofollow" title="Waze">
										<img src="assets/images/waze.png" alt="Wase">
									</a></li>
								<li><a class="item" href="<?php echo $facebook_url; ?>" target="_blank" rel="nofollow" title="Facebook">
										<img src="assets/images/facebook.png" alt="Facebook">
									</a></li>
							</ul>
						</div>

						<div class="logo-bolivar block hidden-xs">
							<img class="logo-b" src="assets/images/logo-bolivar.png" alt="logo-bolivar">
						</div>
					</div>
				</div>
			</div>

			<div id="header-2">
				<div class="container">
					<div class="main-banner block">
						<h1 class="page-header">Apartamentos exclusivos en Real Cariari</h1>
						<p>En una ubicación privilegiada, somos la torre de apartamentos que necesitas para vivir como lo merecés.</p>
					</div>
				</div>
			</div>
			<img class="mask_top" src="assets/images/mask_top.png" alt="mask_top">
		</header>