<?php
get_header(); ?>

<section class="projects position-relative z-index-100">
    <!-- <div class=""> -->
        <div class="container-parent container arrow-holder position-absolute top-50 left-50 translateX-center z-index-10">
        <!-- </div> -->
    </div>
    
    <div class="slider">
        <?php
            if( have_rows('projects_image_slider') ):
            while( have_rows('projects_image_slider') ): the_row(); 
        ?>
        <div class="image-holder position-relative h-100">
            <img src="<?php the_sub_field('image'); ?>" alt="" class="img-fluid w-100 h-100">
        </div>
        <?php
            endwhile;
            endif;
        ?>
    </div>
    <div class="gradiant-bg position-absolute bottom left right"></div>
    <div class="d-none d-lg-block image-content w-100 position-absolute z-index-1">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="project-title pb-2">
                        <h1 class="mb-0 theme color-white font-octopus-700 font-36px"><?php the_title(); ?></h1>
                    </div>
                    <div class="project-categories d-flex theme color-white mb-3">
						<?php 
								$tms = get_the_terms(get_the_ID(),'Projects_category');
								$i = 0;
								$id = get_the_ID();

								foreach($tms as $tm){
									if($i == 0){
										$maincat = $tm->term_id;
									}
									if($tm->term_id != 12){
										$cat_names = $cat_names.' '. $tm->name.' ';
									}
									$i++;
								}
						
						?>
                        <p class="single-category font-octopus-300 pe-2 position-relative"><?php echo $cat_names; ?></p>
                    </div>
                </div>
                <div class="col-12 col-lg-9 col-xl-10">
                    <div class="first-details d-lg-flex">
                        <div class="pe-2 location d-flex align-items-center">
                            <div class="icon col-3">
                                <img class="img-fluid w-100" src="<?php echo get_template_directory_uri(); ?>/images/ic-project-location-white.svg" />
                            </div>
                            <div class="location-name ps-2">
                                <p class="theme color-white font-octopus-300 font-16px d-flex"><?php the_field('featured_location_name'); ?></p>
                            </div>
                        </div>
                        <div class="pe-2 ps-lg-2 area d-flex align-items-center">
                            <div class="icon">
                                <img class="img-fluid w-100" src="<?php echo get_template_directory_uri(); ?>/images/ic-project-area-white.svg" />
                            </div>
                            <div class="area-count ps-2">
                                <p class="theme color-white font-octopus-300 font-16px d-flex"><?php the_field('featured_image_area'); ?></p> 
                            </div>
                        </div>
                        <div class="pe-2 ps-lg-2 price d-flex align-items-center">
                            <div class="icon">
                                <img class="img-fluid w-100" src="<?php echo get_template_directory_uri(); ?>/images/ic-project-cost-white.svg" />
                            </div>
                            <div class="rate ps-2">
                                <p class="theme color-white font-octopus-300 font-16px d-flex"><?php the_field('featured_image_price'); ?></p>
                            </div>
                        </div>
                        <div class="pe-2 ps-lg-2 firm d-flex align-items-center">
                            <div class="icon">
                                <img class="img-fluid w-100" src="<?php echo get_template_directory_uri(); ?>/images/ic-project-pmc-white.svg" />
                            </div>
                            <div class="firm-name ps-2">
                                <p class="theme color-white font-octopus-300 font-16px d-flex"><?php the_field('featured_image_firm_name'); ?></p>
                            </div>
                        </div>
                        <div class="pe-2 ps-lg-2 architect d-flex align-items-center">
                            <div class="icon">
                                <img class="img-fluid w-100" src="<?php echo get_template_directory_uri(); ?>/images/ic-project-architect-white.svg" />
                            </div>
                            <div class="rate ps-2">
                                <p class="theme color-white font-octopus-300 font-16px d-flex"><?php the_field('featured_architect_name'); ?></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-3 col-xl-2">
                    <div class="second-details ps-lg-2 ps-lg-2 pt-3 pt-lg-0 d-lg-flex justify-content-between">
                        <div class="other-projects ps-1">
                            <a href="#other_projects">
                                <p class="theme color-white font-octopus-300 font-16px d-flex">OTHER PROJECTS</p>
                            </a>
                        </div>
                        <?php  if( ! has_term(18,'Projects_category',get_the_ID())){ ?>
                            <div class="other-projects work-with-us ps-1 ps-lg-2">
                                <a href="#work_with_us">
                                    <p class="theme color-white font-octopus-300 font-16px d-flex">WORK WITH US</p>
                                </a>
                            </div>
                        <?php
                            }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="d-lg-none mobile-image-contents">
    <div class="image-content w-100 z-index-1">
        <div class="container py-5">
            <div class="row">
                <div class="col-12">
                    <div class="project-title pb-4">
                        <p class="theme color-gray font-octopus-700 font-48px"><?php the_title(); ?></p>
                    </div>
                </div>
                <div class="col-12">
                    <div class="first-details d-flex flex-wrap">
                        <div class="py-3 pe-4 location d-flex align-items-center">
                            <div class="icon">
                                <img class="img-fluid w-100" src="<?php echo get_template_directory_uri(); ?>/images/ic-project-location.svg" />
                            </div>
                            <div class="location-name ps-2">
                                <p class="theme color-gray font-octopus-300 font-16px d-flex"><?php the_field('featured_location_name'); ?></p>
                            </div>
                        </div>
                        <div class="py-3 pe-2 ps-lg-2 area d-flex align-items-center">
                            <div class="icon">
                                <img class="img-fluid w-100" src="<?php echo get_template_directory_uri(); ?>/images/ic-project-area.svg" />
                            </div>
                            <div class="area-count ps-2">
                                <p class="theme color-gray font-octopus-300 font-16px d-flex"><?php the_field('featured_image_area'); ?></p> 
                            </div>
                        </div>
                        <div class="py-3 pe-2 ps-lg-2 price d-flex align-items-center">
                            <div class="icon">
                                <img class="img-fluid w-100" src="<?php echo get_template_directory_uri(); ?>/images/ic-project-cost.svg" />
                            </div>
                            <div class="rate ps-2">
                                <p class="theme color-gray font-octopus-300 font-16px d-flex"><?php the_field('featured_image_price'); ?></p>
                            </div>
                        </div>
                        <div class="py-3 pe-2 ps-lg-2 firm d-flex align-items-center">
                            <div class="icon">
                                <img class="img-fluid w-100" src="<?php echo get_template_directory_uri(); ?>/images/ic-project-pmc.svg" />
                            </div>
                            <div class="firm-name ps-2">
                                <p class="theme color-gray font-octopus-300 font-16px d-flex"><?php the_field('featured_image_firm_name'); ?></p>
                            </div>
                        </div>
                        <div class="py-3 pe-2 ps-lg-2 architect d-flex align-items-center">
                            <div class="icon">
                                <img class="img-fluid w-100" src="<?php echo get_template_directory_uri(); ?>/images/ic-project-architect.svg" />
                            </div>
                            <div class="rate ps-2">
                                <p class="theme color-gray font-octopus-300 font-16px d-flex"><?php the_field('featured_architect_name'); ?></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="other-projects single-projects-container position-relative z-index-100" id="other_projects">
    <div class="inner-container position-relative py-lg-5 z-index-100">
        <div class="bg-image position-absolute w-100 h-100 left top bottom"></div>  
        <div class="<?php if(isset($_POST["prehide"])){ echo 'container'; } else{ echo 'container-fluid inner-width'; } ?> py-lg-5">
            <div class="row py-5 py-lg-0">
                <div class="col-12 pb-4 pb-lg-5 mb-lg-4">
                    <div class="title">
                        <p class="uppercase after-border font-octopus-500 font-18px thme color-gray d-inline-block position-relative">other projects</p>
                    </div>
                </div>
                <div class="col-12 px-lg-0">
                    <div class="image-container">
                        <div class="slider">
							<?php
                                $args = array(
                                    'post_type' => 'projects',
                                    'post_status' => 'publish',
                                    'posts_per_page' => -1,
									'order' => 'ASC',
                                    'tax_query' => array(
                                        array(
                                            'taxonomy' => 'Projects_category',
                                            'field'    => 'term_id',
                                            'terms'    => array( 14 ),
                                            'operator' => 'NOT IN',											
                                        ), 
										array(
                                            'taxonomy' => 'Projects_category',
                                            'field'    => 'term_id',
                                            'terms'    => array( $maincat ),
                                    									
                                        ),
                                    ),
                                );
                                $query = new WP_Query($args);
                                if ( $query->have_posts() ) {
                                while ( $query->have_posts() ) {
                                $query->the_post();
                                $post_id = get_the_ID();
									//if($id != $post_id){
                            ?>
                                <div class="image-sizer">
                                    <div class="image position-relative">
                                        <img src="<?php echo get_the_post_thumbnail_url($post_id) ?>" alt="" class="img-fluid h-100">
                                        <div class="text position-absolute">
                                            <p class="title theme color-white font-octopus-500 font-36px "><?php echo get_the_title() ?></p>
                                        </div>
                                        <a href="<?php echo get_permalink( $post_id ); ?>" class="position-absolute top left bottom right"></a>
                                        <div class="image-slider position-absolute top bottom">
                                            <div class="slider-inner w-100 p-1">
                                                <div class="row location default-svg d-flex ps-1 align-items-center pb-1">
                                                    <div class="icon col-3">
                                                        <img class="img-fluid h-100" src="<?php echo get_template_directory_uri(); ?>/images/ic-project-location.svg" />
                                                    </div>
                                                    <div class="col-9 location-name">
                                                        <p class="font-octopus-300 theme color-gray capitalize font-14px"><?php the_field('featured_location_name', $post_id); ?></p>
                                                    </div>
                                                </div>
                                                <div class="row area default-svg d-flex align-items-center ps-1 pb-1">
                                                    <div class="col-3 icon">
                                                        <img class="img-fluid h-100" src="<?php echo get_template_directory_uri(); ?>/images/ic-project-area.svg" />
                                                    </div>
                                                    <div class="col-9 area-count">
                                                        <p class="font-octopus-300 font-octopus-300 theme color-gray uppercase font-14px"><?php the_field('featured_image_area', $post_id); ?></p>
                                                    </div>
                                                </div>
                                                <div class="row price default-svg align-items-center d-flex ps-1 pb-1">
                                                    <div class="col-3 icon">
                                                        <img class="img-fluid h-100" src="<?php echo get_template_directory_uri(); ?>/images/ic-project-cost.svg" />
                                                    </div>
                                                    <div class="col-9 area-price">
                                                        <p class="font-octopus-300 theme color-gray capitalize font-14px"><?php the_field('featured_image_price', $post_id); ?></p>
                                                    </div>
                                                </div>
                                                <div class="row pmc default-svg align-items-center d-flex ps-1 pb-1">
                                                    <div class="col-3 icon">
                                                        <img class="img-fluid h-100" src="<?php echo get_template_directory_uri(); ?>/images/ic-project-pmc.svg" />
                                                    </div>
                                                    <div class="col-9 area-price">
                                                        <p class="font-octopus-300 theme color-gray capitalize font-14px"><?php the_field('featured_image_firm_name', $post_id); ?></p>
                                                    </div>
                                                </div>
                                                <div class="row architect default-svg align-items-center d-flex ps-1 pb-1">
                                                    <div class="col-3 icon">
                                                        <img class="img-fluid h-100" src="<?php echo get_template_directory_uri(); ?>/images/ic-project-architect.svg" />
                                                    </div>
                                                    <div class="col-9 area-price">
                                                        <p class="font-octopus-300 theme color-gray capitalize font-14px"><?php the_field('featured_architect_name', $post_id); ?></p>
                                                    </div>
                                                </div>
                                                <div class="arrow ps-3 pt-2">
                                                    <img src="<?php echo get_template_directory_uri(); ?>/images/ic-arrow-grey.svg" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php
                                    }
								//  }
                                }
                                wp_reset_postdata();
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php 

	
	
?>
<section id="work_with_us" class="position-relative z-index-100 work-with-us theme bg-white-1 px-3 px-lg-0">
    <div class="container py-lg-5 pt-3">
		<?php  if( ! has_term(18,'Projects_category',get_the_ID())){ ?>
        <div class="row pb-4 pb-lg-5 mt-5">
            <div class="col-12 pb-5 ps-0">
                <div class="title">
                    <p class="theme color-gray font-octopus-500 font-18px d-inline-block after-border position-relative">WORK WITH US</p>
                </div>
            </div>
            <div class="col-12 ps-0">
                <div class="sub-title">
                    <p class="theme color-gray font-octopus-500 font-30px"><?php echo FrmFormsController::get_form_shortcode( array( 'id' => 2, 'title' => false, 'description' => true ) ); ?></p>
                </div>
            </div>
        </div>
        <div class="custom-box-shadow">
            <div class="row mb-5">
                <div class="col-12 col-lg-6 px-0">
                    <div class="img-container position-relative">
                        <div class="image theme bg-gray w-100 h-100 left right position-absolute" style="background-image: url(<?php the_field( "single_projects_image" , 811); ?>)">
                        </div>
                    </div>
                </div>
                
                    <!-- // $id = get_the_ID(); -->
                    <!-- // $post_categories = wp_get_post_categories( $id ); -->
                    <!-- // print_r($post_categories); -->
               
                <div class="col-12 col-lg-6 px-0">
                    <div class="form-styling p-3 p-xl-5 theme bg-white" >
                        <?php echo FrmFormsController::get_form_shortcode( array( 'id' => 2, 'title' => false, 'description' => false ) ); ?>
                    </div>
                </div>
            </div>
            
        </div>
		<?php } ?>
    </div>  
	
</section>
<?php 


	get_footer(); 

?>