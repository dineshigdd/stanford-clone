<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package stanford-clone-theme
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<script src="https://kit.fontawesome.com/e937081694.js" crossorigin="anonymous"></script>
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'stanford-clone-theme' ); ?></a>

	<header id="masthead" class="site-header">
		<section class="site-branding-search-menuIcon-wrapper">
			<div class="site-branding">
				<?php
				the_custom_logo();
				if ( is_front_page() && is_home() ) :
					?>
					<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
					<?php
				else :
					?>
					<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
					<?php
				endif;
				$stanford_clone_theme_description = get_bloginfo( 'description', 'display' );
				if ( $stanford_clone_theme_description || is_customize_preview() ) :
					?>
					<p class="site-description"><?php echo $stanford_clone_theme_description; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></p>
				<?php endif; ?>
			</div><!-- .site-branding -->
			<button id="search-toggle" aria-controls="site-search" aria-expanded="false" data-ga-action="Search toggle"><i class="fa-solid fa-magnifying-glass"></i><?php esc_html_e( ' Search', 'stanford-clone-theme-search' ); ?></button>
			<button id="menu-toggle" class="menu-toggle" aria-controls="primary-menu" aria-expanded="false" onclick="toggle_nav_menu()"><?php esc_html_e( 'Menu', 'stanford-clone-theme' ); ?></button>
			</section>
		
		<nav id="site-navigation" class="main-navigation">			
			<?php			

				wp_nav_menu(
					array(
						'theme_location' => 'menu-1',
						'menu_id'        => 'primary-menu',
					)
				);

				wp_nav_menu(
					array(
						'theme_location' => 'secondary-menu',
						'secondary_id'        => 'secondary-menu',
					)
				);
			?>
		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->
