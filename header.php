<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta content="width=device-width, initial-scale=1" name="viewport" />
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<div class="hfeed wrapper">
<header class="site-header">
<nav class="site-menu">
<div class="search-box"><?php get_search_form(); ?></div>
<label class="toggle" for="toggle"><span class="menu-icon">&#9776;</span></label>
<input id="toggle" class="toggle" type="checkbox" />
<?php wp_nav_menu( array( 'theme_location' => 'main-menu' ) ); ?>
</nav>
</header>
<div class="site-container">
<?php if ( is_front_page() || is_home() || is_front_page() && is_home() ): ?>
<div class="site-branding">
	<div class="site-title">
<?php echo esc_html( get_bloginfo( 'name' ) ); ?>
	</div>
<div class="site-description"><?php bloginfo( 'description' ); ?></div>
</div>
<?php endif; ?>