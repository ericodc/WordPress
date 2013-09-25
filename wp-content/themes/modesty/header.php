<!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) | !(IE 8)  ]><!-->
<html>
<!--<![endif]-->
	<head>
		<title><?php wp_title('|', true,'right'); ?></title>
		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
		<meta charset="<?php bloginfo( 'charset' ); ?>" />
		<?php wp_head(); ?>
	</head>
<body <?php body_class(); ?>>
	<div id="container_top">
		<div id="content_top">
			<div id="logo"><?php echo esc_html(bloginfo('name')); ?></div>
			<div id="description"><?php echo esc_html(bloginfo('description'));?></div>
			<div id="nav">
				<?php wp_nav_menu(array(
						/*'menu' => 'main_menu',*/
						'theme_location' => 'main_menu',
						'container' => '',
						'menu_class' => 'nav',)); ?>
			</div>
		</div>
	</div>