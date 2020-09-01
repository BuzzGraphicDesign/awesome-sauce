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
						WE MAKE YOU WOW<span class="white-dots">.</span>
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

				<div class="col-12 button-header-container">
					<button class="as-button as-button--header to_services">LET’S GET STARTED</button>
				</div>
			</div>
		</div>
		
	</div>
	
	<!-- Logo -->
	<div class="logo" style="background: url('<?php echo get_home_url(); ?>/wp-content/uploads/2020/08/as-logo-new.png'); background-size: cover;"></div>
	
	<!-- Arrows -->
	<div class="header-arrow-container">		

		<div>
			<!-- Generator: Adobe Illustrator 24.2.3, SVG Export Plug-In  -->
			<svg version="1.1" xmlns="https://www.w3.org/2000/svg" xmlns:xlink="https://www.w3.org/1999/xlink" x="0px" y="0px" width="12.8px"
				 height="24.1px" viewBox="0 0 12.8 24.1" style="overflow:visible;enable-background:new 0 0 12.8 24.1;" xml:space="preserve">
			<style type="text/css">
				.st1{opacity:0;fill:white;}
			</style>
			<defs>
			</defs>
				<path class="st1" d="M6.4,24.1L12.8,0H0L6.4,24.1z"/>
			</svg>
		</div>
		<div>
			<svg version="1.1" xmlns="https://www.w3.org/2000/svg" xmlns:xlink="https://www.w3.org/1999/xlink" x="0px" y="0px" width="12.8px"
				 height="24.1px" viewBox="0 0 12.8 24.1" style="overflow:visible;enable-background:new 0 0 12.8 24.1;" xml:space="preserve">
			<style type="text/css">
				.st2{opacity:0;fill:white;}
			</style>
			<defs>
			</defs>
				<path class="st2" d="M6.4,24.1L12.8,0H0L6.4,24.1z"/>
			</svg>
		</div>

		<div>
			<svg version="1.1" xmlns="https://www.w3.org/2000/svg" xmlns:xlink="https://www.w3.org/1999/xlink" x="0px" y="0px" width="12.8px"
				 height="24.1px" viewBox="0 0 12.8 24.1" style="overflow:visible;enable-background:new 0 0 12.8 24.1;" xml:space="preserve">
			<style type="text/css">
				.st3{opacity:0;fill:white;}
			</style>
			<defs>
			</defs>
				<path class="st3" d="M6.4,24.1L12.8,0H0L6.4,24.1z"/>
			</svg>
		</div>
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
		<div class="container">			
			<div class="row" id="services">
				<div class="col-sm-12 col-md-4">
					<div class="service-1" id="service-1">
						<h1>BRAND</h1>
						<p>
							Why you do what you do comes before what you do or how you do it. We get into the detail of understanding who your customers are and help you delight and inspire them.
							Our ability to build your brand’s value proposition, the brand strategy and creative required to support it, and the tactical marketing plan to execute are the fundamentals of our marketing agency. 
						</p>
					</div>
				</div>
				<div class="col-sm-12 col-md-4">
					<div class="service-2" id="service-2">
						<h1>CAMPAIGN</h1>
						<p>
							We’re a customer focused and commercially minded agency, all about big ideas with big impact. Success hinges on using your experience and market intelligence with our breadth of expertise. We fast, flexible and ready to support your next campaign.
							We bring the big creative, social media, PR and digital expertise to your campaigns for clients with ambitious objectives.
						</p>
					</div>
				</div>
				<div class="col-sm-12 col-md-4">
					<div class="service-3" id="service-3">
						<h1>PARTNERSHIP</h1>
						<p>
							Collaboration is key. We directly impact the business being an extension of the team. Whether that be leading marketing for the business, resource to get awesome things done or expertise in niche marketing functions. 
							Leadership, design, communication, web development and SEO are some of the marketing functions we can support with.
						</p>
						<button class="as-button services-button to_team">FIND OUT MORE</button>
					</div>					
				</div>					
				<div class="col-sm-12 col-md-12">
					<div class="services-button-container">
						<button class="as-button to_team">FIND OUT MORE</button>
					</div>
				</div>		
			</div>
		</div>	
	</div>

	<!-- Team Images Lightbox -->
	<div id="lightbox1" style="display: none;">		
		<div class="div-2">
			<div class="lb-title">
				<h1>JAMES KEITH</h1>
				<p>Account Director</p>
			</div>
			<div class="lb-body">
				<p>
					A customer driven, creative thinker, James brings bold ideas! 
					Leading the client relationship, he is a strong communicator 
					and uses his 15+ years working in client side marketing roles 
					to get under the skin of a businesses brand, products or services.<br><br>

					The agencies brand strategist, James uses his international experience 
					to bring practical solutions to complex scenarios and advice on businesses 
					brand and campaign directions.<br><br>

					James has experience in both B2B and B2C companies 
					including those from the home improvement industry, 
					online only retailers and sport markets.
				</p>
			</div>
		</div>
		<span class="close-lightbox-btn">X</span>
	</div>

	<div id="lightbox2" style="display: none;">		
		<div class="div-2">
			<div class="lb-title">
				<h1>MARK BOYLES</h1>
				<p>Creative Director</p>
			</div>
			<div class="lb-body">
				<p>
					Mark brings the wow factor! Responsible for strategic design
					direction, Mark is digitally minded, using over 20 years agency
					experience to lead his graphic design and web development
					teams to formulate development strategies for brand or
					marketing campaign designs.<br><br>

					With an in depth knowledge of branding, digital, email
					marketing, typography and print techniques, Mark’s breadth of
					expertise brings a unique offering to clients.<br><br>

					Mark brings a vast amount of experience to the agency including
					work in the automotive, engineering and travel industries.
				</p>
			</div>
		</div>
		<span class="close-lightbox-btn">X</span>
	</div>
	<!-- ### Team Images Lightbox -->

	<!-- The Team Section -->
	<div class="team-section" style="background: white;" id="team-block">
		
		<div class="row">
			<div class="container">
				<div class="col-12">
					<div class="team-text-block">
						<h2>THE TEAM</h2>
						<p>
							Designers, strategic thinkers, copywriters, developers and more. 
							All experienced, with tons of expertise and full of big ideas. 
							Of course, we’re those things, we wouldn’t be a Marketing Agency if we weren't. 
							But Awesomesauce is a team built on creatives who challenge our clients so they can WOW, 
							so they can be more awesome than awesome. 
							We are a team who love marketing done Awesomesauce.
						</p>
					</div>
				</div>
				<div class="col-12">
					<div class="team-button-container">
						<button class="as-button to_contact">GET IN TOUCH</button>
					</div>					
				</div>
			</div>
		</div>

		<div class="row">
			
			<div class="col-6 img-container">
				<div class="team-image-title-1">
					
					<h1>JAMES KEITH</h1>
					<p>Account Director</p>
				
					
					<p class="view">view</p>
				</div>
				<div class="team-hover-text-1">
					
					<h1>JAMES KEITH</h1>
					<p>Account Director</p>
					<p>
						A customer driven, creative thinker, James brings bold ideas! 
						Leading the client relationship, he is a strong communicator 
						and uses his 15+ years working in client side marketing roles 
						to get under the skin of a businesses brand, products or services.<br><br>

						The agencies brand strategist, James uses his international experience 
						to bring practical solutions to complex scenarios and advice on businesses 
						brand and campaign directions.<br><br>

						James has experience in both B2B and B2C companies 
						including those from the home improvement industry, 
						online only retailers and sport markets.
					</p>
				</div>

				<div class="team-image-1"></div>				
			</div>
			
			
			<div class="col-6 img-container">				
				<div class="team-image-title-2">
					
					<h1>MARK BOYLES</h1>
					<p>Creative Director</p>

					<p class="view">view</p>
					
				</div>
				<div class="team-hover-text-2">
					
					<h1>MARK BOYLES</h1>
					<p>Creative Director</p>

					<p>
						Mark brings the wow factor! Responsible for strategic design
						direction, Mark is digitally minded, using over 20 years agency
						experience to lead his graphic design and web development
						teams to formulate development strategies for brand or
						marketing campaign designs.<br><br>
						With an in depth knowledge of branding, digital, email
						marketing, typography and print techniques, Mark’s breadth of
						expertise brings a unique offering to clients.<br><br>
						Mark brings a vast amount of experience to the agency including
						work in the automotive, engineering and travel industries.
					</p>
				</div>
				<div class="team-image-2"></div>
			</div>
			
		</div>		
	</div>

	<!-- Spikes
	<div class="spikes-container" style="background: white;">
		Generator: Adobe Illustrator 24.2.3, SVG Export Plug-In 
		<svg version="1.1" xmlns="https://www.w3.org/2000/svg" xmlns:xlink="https://www.w3.org/1999/xlink" x="0px" y="0px"
			 width="1378.54px" height="69.89px" viewBox="0 0 1378.54 69.89"
			 style="overflow:visible;enable-background:new 0 0 1378.54 69.89;" xml:space="preserve">
		<style type="text/css">
			.spikes-2{fill:#06AFAF;}
		</style>
		<defs>
		</defs>
		<path class="spikes-2" d="M1378.54,69.89h-36.25h-0.94h-35.31h-0.95h-35.31h-0.95h-35.31h-0.95h-35.31h-0.95h-35.31h-0.95h-35.31h-0.95
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
	</div> -->


	<!-- Contact Form Section -->
	<div class="contact-section" id="contact-block">
		<div class="container">
			<strong><h3>LET'S TALK</h3></strong>

			<div class="row">
				<div class="col-12 col-md-6" style="padding: 20px;">
					<span class="address">
						<p>
							Awesomesauce Marketing Ltd.<br />
							Alexandra House, Church Passage<br />
							Banbury, Oxon, OX16 5JZ<br /><br />
							Tel: <a href="tel:01295 983037" target="_blank" style="color: white;">01295 983037</a><br />
							Emai: <a href="mailto:hello@awesomesaucemarketing.co.uk" target="_blank" style="color: white;"> hello@awesomesaucemarketing.co.uk</a><br />
						</p>
					</span>
					<span style="position: relative; top: 10px;">
						<a href="https://www.linkedin.com/company/awesomesauce-marketing-agency" target="_blank"><img src="<?php get_home_url(); ?>/wp-content/uploads/2020/08/ASlinkedin.png" alt="linkedin icon" style="height: 72px" /></a>
						<a href="https://www.instagram.com/Awesomesaucemarketing" target="_blank"><img src="<?php get_home_url(); ?>/wp-content/uploads/2020/08/ASinsta.png" alt="instagramm icon" style="height: 72px" /></a>
						<a href="https://www.facebook.com/Awesomesaucemarketing" target="_blank"><img src="<?php get_home_url(); ?>/wp-content/uploads/2020/08/fb-icon.png" alt="facebook icon"></a>
						<a href="https://twitter.com/so_awesomesauce" target="_blank"><img src="<?php get_home_url(); ?>/wp-content/uploads/2020/08/twitter-icon.png" alt="twitter icon"></a>									
					</span>
				</div>
				<div class="col-12 col-md-6">
					<?php echo do_shortcode('[gravityform id="1" title="false" description="false" ajax="true" tabindex="49"]'); ?>
				</div>
			</div>
		</div>
		<footer class="footer">
			<div class="col-12">
				<div class="row">
					<div class="col-sm-12 col-md-3 footer-image">
						<div class="" style="background: url('<?php get_home_url(); ?>/wp-content/uploads/2020/08/as-logo-new.png'); background-size: cover; height: 80px; width: 160px;"></div>
					</div>
					<div class="col-sm-12 col-md-6 footer-text">
						<p>
							Awesomesauce Marketing Ltd<br />
							Alexandra House, Church Lane, Banbury, United Kingdom, OX16 5JZ<br />
							Registered in England & Wales. Company number 12801827
						</p>
					</div>				
				</div>
			</div>
		</footer>
	</div>	
	
	



	