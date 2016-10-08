<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" type="image/png" href="<?php bloginfo('template_url'); ?>/img/favicon.png" />
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/global.css">
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/style.css">
	<?php wp_head(); ?>
</head>
<body>

	<!-- fixed header -->
	<div class="fixed-header">
		<!-- header -->
		<header class="wrapper header-top" id="<?php the_field('h_id','option'); ?>">
			<div class="container">
				<div class="row">
					<div class="col-xs-3 logo-container">
						<a href="http://urbanstroi.by"><img src="<?php bloginfo('template_url'); ?>/img/logo.svg" alt="урбанстрой - строим для людей"></a>
					</div>
					<div class="col-xs-3 col-xs-offset-4 contact-container">
						<p class="phone"><a href="tel:<?=str_replace("-","",str_replace(" ","",get_field('h_telosn','option'))); ?>"><?php the_field('h_telosn','option'); ?></a></p>
						<p class="phone phone-mob"><a href="tel:+37529<?=str_replace("-","",str_replace(" ","",get_field('h_velcom','option'))); ?>">+375 (29) <?php the_field('h_velcom','option'); ?></a></p>
						<p class="hours"><?php the_field('h_hours','option'); ?></p>
					</div>
					<div class="col-xs-2 phones-container">
						<p class="velc"><a href="tel:+37529<?=str_replace("-","",str_replace(" ","",get_field('h_velcom','option'))); ?>"><?php the_field('h_velcom','option'); ?></a></p>
						<p class="mts"><a href="tel:+37529<?=str_replace("-","",str_replace(" ","",get_field('h_mts','option'))); ?>"><?php the_field('h_mts','option'); ?></a></p>
						<p class="life"><a href="tel:+37525<?=str_replace("-","",str_replace(" ","",get_field('h_life','option'))); ?>"><?php the_field('h_life','option'); ?></a></p>
					</div>
				</div>
			</div>
		</header>

		<!-- navigation -->
		<nav class="wrapper header-navigation">
			<div class="container">
				<?php
					if(is_home()){
						$args = array('theme_location'=>'main-menu','container'=>'','menu_class'=>'');
						wp_nav_menu( $args );
					}else{
						$args = array('theme_location'=>'blog-menu','container'=>'','menu_class'=>'');
						wp_nav_menu( $args );
					};
				?>
			</div>
		</nav>

	</div>
	<!-- end fixed header -->
