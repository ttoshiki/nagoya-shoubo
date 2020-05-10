<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package nagoya-shoubo
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="format-detection" content="telephone=no">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<link rel="shortcut icon" href="https://nagoya-shoubo.com/wp-content/themes/nagoya-shoubo/favicon.ico">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<div id="page" class="site">
		<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e('Skip to content', 'nagoya-shouboo'); ?></a>

		<header id="masthead" class="site-header">
			<div class="row mx-2">
				<div class="col-12 col-lg-6">
					<p class="header_catchcopy">あらゆる建物の消防点検・防災設備工事なら</p>
					<?php the_custom_logo(); ?>
				</div>
				<div class="col-12 col-lg-6 header_right_outer">
					<div class="d-flex align-items-end header_right_inner">
						<img class="header_icon_tel" src="<?php bloginfo('template_directory'); ?>/img/header/icon_tel.png">
						<div class="d-flex flex-column">
							<p class="header_right_speedy">スピーディな対応を心がけます！</p>
							<span class="header_right_tel tel_link">052-304-7410</span>
						</div>
						<a class="header_icon_contact" href="<?php bloginfo('url'); ?>/contact"><img src="<?php bloginfo('template_directory'); ?>/img/header/contact.png" alt="WEBからのお問い合わせ"></a>
					</div>
				</div>
			</div>
		</header><!-- #masthead -->

		<div id="content" class="site-content">