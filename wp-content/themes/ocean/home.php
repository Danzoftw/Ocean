<?php
/*
 * Template Name: Home Template
*/
get_header();
?>
<div class="go-to-news-floater position-fixed z-index-100">
	<!-- <div class="container"> -->
		<div class="custom-padding mx-auto">
			<div class="inner-floater theme bg-gray-5 px-4 py-3 position-relative">
				<!-- <button class="close-news position-absolute theme bg-gray">
				</button> -->
				<?php 
                    $args = array('post_type' => 'news','post_status' => 'publish','posts_per_page' => 1,'order' => 'DESC',);
                    $my_query = new WP_Query( $args ); 
                    if($my_query->have_posts()) : while($my_query->have_posts()) : $my_query->the_post();
                ?>
				<!-- <div class="row"> -->
					<!-- <div class="col-8 d-flex align-items-center">
						<p class="half-text font-16px font-octopus-300 theme color-white"><?php the_title(); ?></p>
					</div> -->
					<div class="d-flex justify-content-center goto-news">
						<a href="<?php echo get_post_type_archive_link( 'news' ); ?>" class="font-16px font-octopus-600 large theme color-white position-relative">LATEST NEWS</a>
					</div>
				<!-- </div> -->
				<?php 
                    endwhile;
                    endif;
                    wp_reset_postdata();
                ?>
			</div>
		</div>
	<!-- </div> -->
</div>
<section class="home-banner-section z-index-10 position-relative">
	<div class="video-cover">
		<video autoplay loop muted playsinline class="w-100">
			<source src="<?php echo get_template_directory_uri(); ?>/images/banner.mp4" type="video/mp4" />
		</video>
	</div>
</section>
<section class="our-services position-relative z-index-10 py-5">
	<div class="background-img position-absolute h-100 w-100"></div>
	<div class="container py-lg-5 px-lg-5">
		<div class="row px-xl-5">
			<div class="title text-center text-md-start">
				<p class="d-inline-block position-relative font-18px font-octopus-500 uppercase theme color-gray after-border"><?php the_field('contracting_services_title'); ?></p>
			</div>
		</div>
		<div class="row pt-5 position-relative px-xl-5">
			<div class="col-12 col-md-4 d-flex flex-column justify-content-around">
				<div class="text-holder">
					<div class="sub-title mb-3">
						<p class="d-none d-sm-block font-octopus-wide-700 font-32px theme black-1 text-center text-md-start "><?php the_field('our_services_title'); ?></p>
						<p class="d-block d-sm-none font-octopus-wide-700 font-32px theme black-1 text-center text-md-start "><?php the_field('our_services_title_mobile'); ?></p>
					</div>
					<div class="content pb-3 pb-sm-0">
						<p class="text-center text-md-start font-octopus-500 theme color-gray font-22px"><?php the_field('our_services_para'); ?></p>
					</div>
				</div>
				<div class="button d-none d-sm-flex align-items-center justify-content-center justify-content-sm-start pb-10 md:pb-0 pt-md-3 pt-lg-0 py-4 py-lg-0">
					<div class="outer-btn-container">
						<a href="<?php echo get_post_permalink("158") ?>">
							<div class="outer-btn-container d-flex align-items-center cursor-pointer">
								<div class="btn-click">
									<?php include 'images/services-next.svg' ?>
								</div>
								<p class="ps-5 font-octopus-300 theme color-gray font-16px">Explore more</p>
							</div>
						</a>
					</div>
				</div>
			</div>
			<div class="col-12 col-md-1">
				
			</div>
			<div class="col-12 col-md-7 position-relative">
				<div class="outer-images">
					<div class="images position-relative w-100 h-100 overflow-hidden">
						<?php $num = 1; ?>
						<?php if( have_rows('our_services_images') ): ?>
							<?php while( have_rows('our_services_images') ): the_row(); ?>
								<div class="default-image image-<?php echo $num ?> position-absolute w-100" style="background-image: url(<?php the_sub_field('image'); ?>)"></div>
								<?php $num++; ?>
							<?php endwhile; ?>
						<?php endif; ?>
					</div>
					<div class="svg-animate position-absolute">
						<?php include 'images/contracting.svg' ?>
					</div>
				</div>
			</div>
			<div class="button d-flex d-sm-none align-items-center justify-content-center justify-content-sm-start pb-10 md:pb-0 pt-md-3 pt-lg-0 pt-5 pt-sm-0">
				<div class="outer-btn-container">
					<a href="<?php echo get_post_permalink("158") ?>">
						<div class="outer-btn-container d-flex align-items-center cursor-pointer">
							<div class="btn-click">
								<?php include 'images/services-next.svg' ?>
							</div>
							<p class="ps-5 font-octopus-300 theme color-gray font-16px">Explore more</p>
						</div>
					</a>
				</div>
			</div>
		</div>
	</div>
</section>
 <section class="py-lg-5 our-services real-estate position-relative z-index-10">
	<div class="background-img position-absolute h-100 w-100"></div>
	<div class="dark-overlay position-absolute h-100 w-100 top-0"></div>
	<div class="container py-5 px-lg-5">
		<div class="row px-xl-5">
			<div class="title text-center text-md-start">
				<p class="d-inline-block position-relative font-18px font-octopus-500 uppercase theme color-gray after-border"><?php the_field('real_estate_services_title'); ?></p>
			</div>
		</div>
		<div class="row pt-5 px-xl-5 potision-relative">
			<div class="col-12 col-md-4 d-flex flex-column justify-content-around">
				<div class="text-holder">
					<div class="sub-title mb-3">
						<p class="font-octopus-wide-700 font-32px theme black-1 text-center text-md-start uppercase"><?php the_field('real_estate_main_title'); ?></p>
					</div>
					<div class="content pb-3 pb-sm-0">
						<p class="text-center text-md-start font-octopus-500 theme color-gray font-22px"><?php the_field('real_estate_paragraph'); ?></p>
					</div>
				</div>
				<div class="button d-none d-sm-flex align-items-center justify-content-center justify-content-sm-start pt-md-3 pt-lg-0 py-4 py-lg-0 z-index-2">
					<div class="outer-btn-container">
						<a href="<?php echo get_post_permalink("174") ?>">
							<div class="outer-btn-container d-flex align-items-center cursor-pointer">
								<div class="btn-click">
									<?php include 'images/services-next.svg' ?>
								</div>
								<p class="ps-5 font-octopus-300 theme color-gray font-16px">Explore more</p>
							</div>
						</a>
					</div>
				</div>
			</div>
			<div class="col-12 col-md-1">
			</div>
			<div class="col-12 col-md-7 position-relative">
				<div class="outer-images">
					<div class="images position-relative w-100 h-100 overflow-hidden">
						<?php $num = 1; ?>
						<?php if( have_rows('real_estate_images') ): ?>
							<?php while( have_rows('real_estate_images') ): the_row(); ?>
								<div class="default-image image-<?php echo $num ?> position-absolute w-100" style="background-image: url(<?php the_sub_field('images'); ?>)"></div>
								<?php $num++; ?>
							<?php endwhile; ?>
						<?php endif; ?>
					</div>
					<div class="svg-animate position-absolute">
						<?php include 'images/realestate.svg' ?>
					</div>
				</div>
			</div>
			<div class="button d-flex d-sm-none align-items-center justify-content-center justify-content-sm-start pt-5 pt-sm-0">
				<div class="outer-btn-container">
					<a href="<?php echo get_post_permalink("174") ?>">
						<div class="outer-btn-container d-flex align-items-center cursor-pointer">
							<div class="btn-click">
								<?php include 'images/services-next.svg' ?>
							</div>
							<p class="ps-5 font-octopus-300 theme color-gray font-16px">Explore more</p>
						</div>
					</a>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="py-lg-5 our-services our-projects project-showcase theme bg-white-1 position-relative z-index-10">
	<div class="container py-5 ps-lg-5">
		<div class="row ps-xl-5">
			<div class="col-12">
				<div class="title pb-4 text-center text-sm-start">
					<p class="d-inline-block position-relative text-lg font-octopus-500 uppercase theme color-gray after-border"><?php the_field('home_our_projects_section_title'); ?></p>
				</div>
			</div>
		</div>
		<div class="contact-address-sub-container contact-network-sub-container ps-xl-5 overflow-hidden">
			<div class="images-container my-4 d-flex flex-column flex-sm-row d-none d-sm-flex">
				<?php 
				$my_query = get_posts(
					array(
						'posts_per_page' => 5,
						'post_type' => 'projects',
						'tax_query' => array(
							array(
								'taxonomy' => 'Projects_category',
								'field' => 'term_id',
								'terms' => 18,
							)
						)
					)
				);
					foreach($my_query as $q){
						$image = wp_get_attachment_image_src( get_post_thumbnail_id( $q->ID ), 'single-post-thumbnail' );
					?>
					<div class="image-inner position-relative d-flex slider-collapsed">
						<img src="<?php echo $image[0]; ?>" alt="" class="w-100">
						<a href="<?php echo get_permalink($q->ID) ?>" class="position-absolute top left right bottom"></a>
						<div class="title position-absolute">
							<p class="my-home-p theme color-white font-octopus-wide-700 font-18px position-relative d-inline-block"><?php echo get_the_title($q-> ID) ?></p>
						</div>
					</div>
					<?php
					}
				?>
			</div>
			<div class="images-container images-container-mobile my-4 d-block d-sm-none">
			<?php
			$i = 0;

			foreach($my_query as $q){
				$image = wp_get_attachment_image_src( get_post_thumbnail_id( $q->ID ), 'single-post-thumbnail' );
			?>	
					<div class="image-inner image-inner-mobile d-flex flex-column  <?php if($i != 0){ echo 'hide-image'; } ?>">
						<div class="mobile-title p-2">
							<p class="theme color-white font-octopus-wide-700 font-36px position-relative d-inline-block"><?php echo get_the_title($q-> ID) ?></p>
						</div>
						<div class="image-outer position-relative">
							<img src="<?php echo $image[0]; ?>" alt="" class="w-100">
							<a href="<?php echo get_permalink($q->ID) ?>" class="position-absolute top left right bottom"></a>
						</div>
					</div>

				<?php
				$i++;
			}?>
			</div>
		</div>
	</div>
</section>

<section class="ocean-clients position-relative z-index-10 py-lg-5">
	<div class="ocean-clients-bg position-absolute w-100 h-100 top">
	</div>
	<div class="container py-5">
		<div class="row">
			<div class="col-12 pb-5">
				<div class="title mx-auto text-center font-24px text-center theme color-black-2 font-octopus-300">
					<?php the_field('journey_text'); ?>
				</div>
			</div>
			<div class="images">
				<div class="row justify-content-center">
					<div class="col-12 col-sm-10 d-flex flex-wrap justify-content-center justfiy-content-md-start">
						<?php if( have_rows('clients_logos') ): ?>
							<?php while( have_rows('clients_logos') ): the_row(); ?>
								<img src="<?php the_sub_field('logo'); ?>" alt="" class="p-2">
							<?php endwhile; ?>
						<?php endif; ?>
					</div>
				</div>
			</div>
		</div>
		<div class="row pt-5">
			<div class="col-0 col-md-4"></div>
			<div class="outer-btn col-12 col-md-4 mx-auto d-flex justify-content-center justify-content-lg-start ms-md-5">
				<div class="cursor-pointer explore-clients-text d-inline-block position-relative btn-hover-animation">
					<a class="font-16px font-octopus-300 theme color-gray pr-3" href=""><?php the_field('explore_clients_title'); ?></a>
					<div class="image position-absolute">
					</div>
				</div>
			</div>
			<div class="col-0 col-md-4"></div>
		</div>
		<div class="projects theme bg-white mt-5 mx-auto overflow-hidden">
			<div class="row align-items-center py-4 py-sm-0">
				<div class="col-12 col-sm-4 d-sm-flex d-none justify-content-center">
					<img class="w-100" src="<?php echo get_template_directory_uri(); ?>/images/office-building-2021-08-29-21-03-36-utc.jpg" />
				</div>
				<div class="ps-md-5 ps-lg-5 col-6 col-sm-4 d-flex flex-column align-items-center d-md-block">
					<div id="counters_1" class="count-container d-flex">
						<div class="counter theme color-yellow-1 font-36px font-octopus-500" 
							data-TargetNum="<?php the_field('section_our_projects_completed_count'); ?>"
							data-Speed="5678">
						</div>
						<p class="theme color-yellow-1 font-36px font-octopus-500">+</p>
					</div>
					<p class="font-octopus-500 theme font-36px color-black-2 text-center text-md-start">Completed <br>Projects</p>
				</div>
				<div class="ps-md-5 ps-lg-0 col-6 col-sm-4 d-flex flex-column align-items-center d-md-block">
					<div id="counters_1" class="count-container d-flex">
						<div class="counter theme color-yellow-1 font-36px font-octopus-500" 
							data-TargetNum="<?php the_field('section_our_projects_ongoing_count'); ?>"
							data-Speed="5678">
						</div>
						<p class="theme color-yellow-1 font-36px font-octopus-500">+</p>
					</div>
					<p class="font-octopus-500 theme font-36px color-black-2 text-center text-md-start">Ongoing <br>Projects</p>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="ocean-team ocean-clients position-relative z-index-10">
	<div class="container-fluid">
		<div class="row">
			<div class="col-12 col-sm-6 px-0 position-relative d-flex align-items-center justify-content-center py-5">
				<div class="ocean-team-bg position-absolute w-100 h-100"></div>
				<div class="px-5 ocean-team-left py-5">
					<div class="ps-md-5 pb-5 title">
						<p class="text-center text-sm-start font-26px font-octopus-300 theme color-white"><?php the_field('ocean_about_us_title'); ?></p></p>
					</div>
					<div class="ps-md-5 outer-btn text-center text-sm-start">
						<div class="cursor-pointer explore-clients-text d-inline-block position-relative btn-hover-animation-white">
							<a class="font-16px font-octopus-300 theme color-gray pe-3" href="<?php echo get_page_link(252); ?>"><?php the_field('ocean_about_us_button_text'); ?></a>
							<div class="image position-absolute">
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-12 col-sm-6 px-0">
				<div class="ocean-team-right position-relative">
					<div class="slick">
						<?php if( have_rows('ocean_about_us_images') ): ?>
							<?php while( have_rows('ocean_about_us_images') ): the_row(); ?>
								<img src="<?php the_sub_field('image'); ?>" alt="" class="cursor-pointer def-image">
							<?php endwhile; ?>
						<?php endif; ?>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="logo pt-lg-5 position-relative z-index-10 theme bg-white">
	<div class="container">
		<div class="row py-5 mx-auto col-12 col-md-10 col-lg-7 py-20">
			<?php if( have_rows('certification_logos') ): ?>
				<?php while( have_rows('certification_logos') ): the_row(); ?>
				<div class="col-4 col-sm-2 d-flex justify-content-center">
					<img src="<?php the_sub_field('image'); ?>" alt="" class="pb-4 mx-auto">
				</div>
				<?php endwhile; ?>
			<?php endif; ?>
		</div>
	</div>
</section>

<section class="expertise position-relative z-index-10">
	<div class="expertise-bg position-absolute w-100 h-100"></div>
	<div class="container">
		<div class="position-relative py-5">
			<div class="row">
				<div class="clients-outer home-slider-mw position-absolute">
					<div class="p-4 p-md-5 mx-auto col-12 col-md-10 clients theme bg-white">
						<?php if( have_rows('expertise_section_repeater') ): ?>
							<?php while( have_rows('expertise_section_repeater') ): the_row(); ?>
								<div class="client-1 d-flex flex-column mx-auto">
									<div class="logo pb-4">
										<img class="img-fluid mx-auto" src="<?php the_sub_field('logo'); ?>" alt="">
									</div>
									<div class="para text-center theme color-black-2 font-octopus-300 font-16px">
										<?php the_sub_field('content'); ?>
									</div>
									<div class="text-center client-name-desig py-4 py-md-5">
										<div class="client-name">
											<p class="theme color-black-2 font-octopus-500 font-14px"><?php the_sub_field('name'); ?></p>
										</div>
										<div class="client-desig">
											<p class="theme color-black-2 font-octopus-300 font-14px"><?php the_sub_field('designation'); ?></p>
										</div>
									</div>
								</div>
							<?php endwhile; ?>
						<?php endif; ?>
					</div>
				</div>
			</div>
			<div class="row d-flex justify-content-center home-top-rem pb-lg-5">
				<div class="col-sm-1">
				</div>
				<div class="mt-5 pt-lg-0 mt-lg-0 col-12 col-sm-5 d-flex justify-content-center justify-content-sm-end pe-md-5">
					<div class="image-cover px-3 px-md-0">
						<img class="img-fluid w-100" src="<?php echo get_template_directory_uri(); ?>/images/25-01.svg" />
					</div>
				</div>
				<div class="mt-5 pt-lg-0 mt-lg-0 col-12 col-sm-5 d-flex align-items-center justify-content-center justify-content-sm-start">
					<p class="font-octopus-500 font-36px text-center text-sm-start span-yellow-1"><?php the_field('years_of_expertise_text'); ?></p>
				</div>
				<div class="col-sm-1">
				</div>
			</div>
		</div>
	</div>
</section>

<section class="news-events ocean-clients position-relative z-index-10">
	<div class="news-bg common-bg position-absolute w-100 h-100"></div>
	<div class="dark-overlay position-absolute h-100 w-100 top-0"></div>
	<div class="container py-6">
		<div class="row py-lg-5 px-3">
			<?php 
				$args = array('post_type' => 'news','post_status' => 'publish','posts_per_page' => 3,'order' => 'DESC', 'offset' => 0);
				$my_query = new WP_Query( $args ); 
				if($my_query->have_posts()) : while($my_query->have_posts()) : $my_query->the_post();
			?>
			<div class="col-12 col-sm-4 d-flex flex-column-reverse flex-sm-column pb-5">
				<div class="date">
					<p class="font-octopus-300"><?php the_date() ?></p>
				</div>
				<div class="post-title">
					<p class="pt-3 leading-9 font-30px font-octopus-500"><?php the_title(); ?></p>
				</div>
			</div>
			<?php 
				endwhile; else:
				wp_reset_postdata();
			?>
			<p>No posts found</p>
			<?php endif; ?>
			<div class="outer-btn">
				<a href="<?php echo get_post_type_archive_link( 'news' ); ?>">
					<div class="cursor-pointer explore-clients-text d-inline-block position-relative btn-hover-animation mt-5">
						<p class="font-16px font-octopus-300 theme color-gray pr-3">News & Events</p>
						<div class="image position-absolute">
						</div>
					</div>
				</a>
			</div>
		</div>
	</div>
</section>
<?php
	get_footer();
?>