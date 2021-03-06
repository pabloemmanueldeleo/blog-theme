<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' : '; } ?><?php bloginfo('name'); ?> | <?php bloginfo('description'); ?></title>

		<link href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon.ico" rel="shortcut icon">
		<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?>" href="<?php bloginfo('rss2_url'); ?>" />

		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="<?php bloginfo('description'); ?>">

		<?php wp_head(); ?>
		<link href="https://fonts.googleapis.com/css?family=Montez" rel="stylesheet">

		<script type="text/javascript">
			(function(w) {
				if (document.cookie.indexOf("type_loaded") > -1 && w.document.documentElement.className.indexOf('type-loaded') === -1) {
					w.document.documentElement.className += " type-loaded";
				}
			}(this));
		</script>

	</head>
	<body <?php body_class(); ?>>

		<!-- wrapper -->
		<div class="wrapper">

			<!-- header -->
			<header class="header clear" role="banner">

					<!-- logo -->
					<div class="logo">
						<a href="<?php echo home_url(); ?>">
							<!-- svg logo - toddmotto.com/mastering-svg-use-for-a-retina-web-fallbacks-with-png-script -->
							<img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="Ren Aysha" class="logo-img">
						</a>
					</div>
					<h1 class="header-title">
						<a href="<?php echo home_url(); ?>">Ren Aysha</a>
					</h1>

					<span class="description-title">
						<?php echo get_bloginfo( 'description' ) ?>
					</span>

					<div class="social">
						<ul>
							<li><a href="https://twitter.com/RenettaRenula"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
							<li><a href="https://sg.linkedin.com/in/aysha-anggraini-a05a8249"><i class="fa fa-linkedin-square" aria-hidden="true"></i></a></li>
							<li><a href="https://github.com/renettarenula/"><i class="fa fa-github" aria-hidden="true"></i></a></li>
							<li><a href="http://codepen.io/rrenula/"><i class="fa fa-codepen" aria-hidden="true"></i></a></li>
							<li><a href="https://dribbble.com/renaysha"><i class="fa fa-dribbble" aria-hidden="true"></i></a></li>
						</ul>
					</div>

					<!-- /logo -->

					<!-- nav -->

					<!-- /nav -->

			</header>
			<!-- /header -->
