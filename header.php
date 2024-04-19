<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package watch
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<?php wp_body_open(); ?>
	<div id="page" class="site">
		<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e('Skip to content', 'watch'); ?></a>


		<header class="header">
			<div class="header__container">
				<div class="header__language-side">
					<select name="languages" id="anguages">
						<option value="english">english</option>
					</select>
					<div class="search-bar">
						<label>
							<input type="search" class="search-field" placeholder="Search …" value="" name="search" />
						</label>
						<input type="submit" class="search-submit" value="Search" />
					</div>
				</div>

				
				<nav class="header__nav-bar nav-bar">
					<a href="#home">home</a>
					<a href="#laSuportive">la Suportive</a>
					<a href="#excellence">excellence</a>
					<?php
					the_custom_logo();
					if (is_front_page() && is_home()) :
					?>
						<h1 class="site-title"><a href="<?php echo esc_url(home_url('/')); ?>" rel="home"><?php bloginfo('name'); ?></a></h1>
					<?php
					else :
					?>
						<p class="site-title"><a href="<?php echo esc_url(home_url('/')); ?>" rel="home"><?php bloginfo('name'); ?></a></p>
					<?php
					endif;
					$watch_description = get_bloginfo('description', 'display');
					if ($watch_description || is_customize_preview()) :
					?>
						<p class="site-description">
							<?php echo $watch_description;
							?></p>
					<?php endif; ?>
					<a href="#news">news</a>
					<a href="#aboutUs">about Us</a>
					<a href="#retailers">retailers</a>
				</nav>


				
				<div class="header__cart-side">
					<div class="header__cart-side__liked-products">
						<a href="#liked_products">
							<img src="<?php echo get_template_directory_uri() . '/assets/images/icon/ios-heart-empty.png' ?>" alt="ios-heart-empty" />
						</a>
					</div>
					<div class="header__cart-side__total-price">0.00$</div>
					<div class="header__cart-side__img-cart">
						<a href="#cart">
							<img src="<?php echo get_template_directory_uri() . '/assets/images/icon/cart-img.png' ?>" alt="cart-img" /></a>
						<div class="header__cart-side__total">
							<p id="header__cart-side__total__number">0</p>
						</div>
					</div>
				</div>
			</div>

		</header>