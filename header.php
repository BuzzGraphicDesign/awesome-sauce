<?php
/**
 * The header for our theme
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$container = get_theme_mod( 'understrap_container_type' );
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">	
	<link rel="shortcut icon" type="image/jpg" href="/favicon.ico"/>
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?> <?php understrap_body_attributes(); ?>>
<?php do_action( 'wp_body_open' ); ?>
<div class="site" id="page">	
	<div class="header">
		<div class="container">			
			<div class="row">			
				<div class="col-12 header-inner-title">

					<!-- Type out Text  -->
					<h1 class="header-title" id="type-writer-text-1">
						
					</h1>
					<h1 class="header-title" id="type-writer-text-2">
						
					</h1>
					<h1 class="header-title" id="type-writer-text-3">
						
					</h1>					

					<!-- Sliding In Text -->
					<h1 class="header-title-slide-in" id="slide-in-text-1">
						WE DO THE UNEXPECTED<span class="white-dots">.</span>
					</h1>
					<h1 class="header-title-slide-in" id="slide-in-text-2">
						WE'RE UNFORGETTABLE<span class="white-dots">.</span>
					</h1>
					<h1 class="header-title-slide-in" id="slide-in-text-3">
						<div class="letter-w" style="display: inline-block;">WE WOW<span class="white-dots">.</span></div>
					</h1>

					<!-- Slide Up Text -->
					<h1 class="header-title-slide-up" id="slide-up-text-1">
						BE MORE AWESOME
					</h1>
					<h1 class="header-title-slide-up" id="slide-up-text-2">
						THAN AWESOME<span class="red-dot">.</span>
					</h1>
					

					<!-- Scale Down Text from BIG to Normal (animated) -->
					<h1 class="header-title-scale-down" id="scale-down-text">
						BE AWESOMESAUCE<span class="header-title flashing-dot">.</span>
					</h1>					
					
				</div>
				
				<div class="col-sm-12 col-md-3 button-header-container">
					<button class="as-button as-button--header to_services">LET’S GET STARTED</button>
				</div>
			</div>
		</div>
		
	</div>
	
	<!-- Logo -->
	<div class="logo" style="background: url('<?php echo get_home_url(); ?>/wp-content/uploads/2020/08/as-logo-new.png'); background-size: cover;"></div>
	
	<!-- Arrows -->
	<div class="header-arrow-container">		
		<?php get_template_part('block-templates/arrows-down-block');?>
	</div>

	<div class="spikes-container">
		<!-- Generator: Adobe Illustrator 24.2.3, SVG Export Plug-In  -->
		<svg version="1.1" xmlns="https://www.w3.org/2000/svg" xmlns:xlink="https://www.w3.org/1999/xlink" x="0px" y="0px"
			 width="1378.54px" height="69.89px" viewBox="0 0 1378.54 69.89"
			 style="overflow:visible;enable-background:new 0 0 1378.54 69.89;" xml:space="preserve">
		<style type="text/css">
			.spikes{fill:#FC4444;}
		</style>
		<defs>
		</defs>
		<path class="spikes" d="M1378.54,69.89h-36.25h-0.94h-35.31h-0.95h-35.31h-0.95h-35.31h-0.95h-35.31h-0.95h-35.31h-0.95h-35.31h-0.95
			h-35.31h-0.95h-35.31h-0.94h-35.31h-0.95h-35.31h-0.95h-35.31h-0.95h-35.31h-0.95H871h-0.95h-35.31h-0.95H798.5h-0.95h-35.31h-0.95
			h-35.31h-0.95h-35.31h-0.95h-35.31h-0.95h-35.31h-0.95h-35.31h-0.95h-35.31h-0.95h-35.31h-0.94h-35.31h-0.95h-35.31h-0.95h-35.31
			h-0.95h-35.31h-0.95h-35.31h-0.95h-35.31h-0.95h-35.31h-0.95h-35.31h-0.95h-35.31h-0.95h-35.31h-0.95H109.7h-0.95H73.45H72.5H37.2
			h-0.95H0L18.6,0l18.13,68.11L54.85,0l18.13,68.11L91.1,0l18.13,68.11L127.36,0l18.13,68.11L163.61,0l18.13,68.11L199.86,0
			l18.13,68.11L236.11,0l18.13,68.11L272.37,0l18.13,68.11L308.62,0l18.13,68.11L344.87,0L363,68.11L381.12,0l18.13,68.11L417.38,0
			l18.13,68.11L453.63,0l18.13,68.11L489.88,0l18.13,68.11L526.13,0l18.13,68.11L562.39,0l18.13,68.11L598.64,0l18.13,68.11L634.89,0
			l18.13,68.11L671.14,0l18.13,68.11L707.4,0l18.13,68.11L743.65,0l18.13,68.11L779.9,0l18.13,68.11L816.15,0l18.13,68.11L852.41,0
			l18.13,68.11L888.66,0l18.13,68.11L924.91,0l18.13,68.11L961.16,0l18.13,68.11L997.42,0l18.13,68.11L1033.67,0l18.13,68.11
			L1069.92,0l18.13,68.11L1106.17,0l18.13,68.11L1142.43,0l18.13,68.11L1178.68,0l18.13,68.11L1214.93,0l18.13,68.11L1251.18,0
			l18.13,68.11L1287.44,0l18.13,68.11L1323.69,0l18.13,68.11L1359.94,0L1378.54,69.89z"/>
		</svg>
	</div>

	<!-- Services Section -->
	<div class="services" id="services-block">
		<?php get_template_part('block-templates/services-block');?>
	</div>

	<!-- Team Images Lightbox for Mobile -->
	<?php get_template_part('block-templates/lightboxes-block');?>
	<!-- ### Team Images Lightbox -->

	<!-- The Team Section -->
	<div class="team-section" style="background: white;" id="team-block">		
		<?php get_template_part('block-templates/team-block');?>
	</div>

	<!-- Contact Form Section -->
	<div class="contact-section" id="contact-block">
		<?php get_template_part('block-templates/contact-footer-block');?>
	</div>	
	
	



	