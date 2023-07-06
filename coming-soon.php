<?php

/**
 * Template Name: Coming Soon
 */

 ?>
<?php get_header(); ?>

	<body <?php body_class(); ?>>
	<div class="fh5co-loader"></div>

	<aside id="fh5co-aside" role="sidebar" class="text-center bg-image">
		<h1 id="fh5co-logo"><a href="<?php echo site_url(); ?>"><?php echo bloginfo(); ?></a></h1>
	</aside>

	<div id="fh5co-main-content">
		<div class="dt js-dt">
			<div class="dtc js-dtc">
				<div class="simply-countdown-one animate-box" data-animate-effect="fadeInUp"></div>

				<div class="row">
					<div class="col-md-12">
						<div class="row">
							<div class="col-lg-7">
								<div class="fh5co-intro animate-box">
									<h2><?php echo get_field('coming_soon_title'); ?></h2>
									<p><?php echo get_field('coming_soon_content'); ?></p>
								</div>
							</div>
							
							<div class="col-lg-7 animate-box">
								<form action="#" id="fh5co-subscribe">
                                    <?php echo do_shortcode( '[mc4wp_form id=20]' ); ?>
								</form>
							</div>
						</div>
					</div>
				</div>
					
			</div>
		</div>

<?php get_footer(); ?>
	

