<?php
get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post();
?>
<div class="main-contracting-section position-realative z-index-100">
<section class="contracting position-relative z-index-100">
    <div class="bg-image position-absolute w-100 h-100"></div>
    <div class="container py-5">
        <div class="row py-md- justify-content-start py-lg-5">
            <div class="col-12 col-md-11 position-relative">
                <div class="px-3 px-sm-0">
                    <div class="title pb-4 pb-sm-3 pb-md-5">
                        <p class="d-inline-block font-18px theme color-gray font-octopus-500 uppercase position-relative after-border"><?php the_field('contracting_title'); ?></p>
                    </div>
                    <div class="para">
                        <p class="para font-40px theme color-gray font-octopus-500"><?php the_field('contracting_paragraph'); ?></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php
        endwhile; else: ?>
        <p>Sorry, no posts matched your criteria.</p>
    <?php endif; ?>
</section>
<section class="civil-construction contracting z-index-100 position-relative">
    <div class="outer-image">
        <img src="<?php the_field('civil_construction_image'); ?>" alt="" class="w-100">
        <div class="image-overlay position-absolute left right"></div>
        <div class="title position-absolute left-50 top-50 translate-center w-100">
            <p class="main-title theme color-white font-octopus-wide-700 font-36px text-center pb-2 drop-shadow-1"><?php the_field('contracting_main_title'); ?></p>
            <p class="sub-title theme color-white font-octopus-wide-700 font-60px text-center drop-shadow-1"><?php the_field('contracting_sub_title'); ?></p>
        </div>
    </div>
    <div class="contracting-elements position-absolute w-100">
        <div class="container">
            <div class="row d-flex justify-content-center py-5">
                <div class="col-12 px-0 d-none d-md-block">
                    <div class="px-3 px-sm-0">
                        <?php
                            if (has_nav_menu('primary_header')) {
                                wp_nav_menu(array(
                                    'theme_location' => 'primary_header',
                                    'container' => false,
                                    'menu_class' => 'menu-section ps-0 mb-0',
                                    )
                                );
                            }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="civil-construction-content position-relative z-index-100">
    <div class="bg-image position-absolute w-100 h-100"></div>
    <div class="container py-2 py-sm-5">
        <div class="py-5 row d-flex justify-content-center">
            <div class="col-12 col-sm-10 col-md-9">
                <div class="content theme color-gray px-3 px-sm-0">
                    <?php the_field('civil_construction_content'); ?>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="company-career-slider project-showcase ocean-clients py-0 py-sm-5 position-relative z-index-100 theme bg-white">
    <div class="container py-5">
        <div class="row">
            <div class="col-12">
                <div class="title px-3 px-sm-0">
                    <p class="theme color-gray font-18px d-inline-block position-relative after-border mb-4">PROJECT SHOWCASE</p>
                </div>
            </div>
        </div>
        <div class="position-relative contact-address-sub-container contact-network-sub-container pt-3 pt-md-4 pt-lg-5 px-3 px-sm-0">
            <div class="showcase-slick" id="showcase_slick">
                <?php
                    $category_id = get_field('post_category_id');
                    $args = array(
                    'post_type' => 'projects',
                    'posts_per_page' => 5,
                    "orderby" => "date",
      				"order" => 'ASC',
                        'tax_query' => array(
                            array(
                            'taxonomy' => 'Projects_category',
                            'field' => 'term_id',
                            'terms' => $category_id,
                            )
                        )
                    );
                    $query = new WP_Query( $args ); 
                    if($query->have_posts()) {
                    while($query->have_posts()) : $query->the_post();
                ?>
                    <a href="<?php the_permalink(); ?>">
                        <div class="position-relative">
                            <?php echo get_the_post_thumbnail() ?>
                            <div class="title position-absolute z-index-2">
                                <p class="theme color-white font-octopus-wide-700 font-36px position-relative d-inline-block"><?php the_title(); ?></p>
                            </div>
                            <button class="position-absolute top bottom left right w-100 theme bg-transparent border-0" type="submit" value="Submit" name="prehide" value="submit"></button>
                            <div class="gradiant-bg position-absolute bottom left right"></div>
                        </div>
                    </a>
                <?php 
                    endwhile;
                    }
                    wp_reset_postdata();
                ?>
            </div>
        </div>
        <div class="project-showcase-list px-3">
            <div class="row pt-5">
            <?php
                $category_id = get_field('post_category_id');
                $args = array(
                'post_type' => 'projects',
                "orderby" => "date",
      			"order" => 'ASC',
                'offset' => 5,
                    'tax_query' => array(
                        array(
                        'taxonomy' => 'Projects_category',
                        'field' => 'term_id',
                        'terms' => $category_id,
                        )
                    )
                );
                $query = new WP_Query( $args ); 
                if($query->have_posts()) {
                    while($query->have_posts()) : $query->the_post();
                        ?>
                        <div class="col-6 col-lg-3 py-3 d-flex align-items-center">
                                <a href="<?php the_permalink(); ?>">
                                    <p class="theme color-black-1 font-octopus-500 font-18px"><?php the_title(); ?></p>
                                </a>
                            </div>
                        <?php
                    endwhile;
                }
				wp_reset_query();
            ?>
            </div>
        </div>
         <form action="<?php echo get_post_type_archive_link( 'projects' ); ?>" method="post">
            <div class="outer-btn col-12 col-md-4 pt-5 mt-lg-5 d-inline-block">
                <div class="px-3 px-sm-0">
					<input type="text" style="display:none;" name="subcat" value="<?php     global $post;
 echo    $post_slug = $post->post_name;
 ?>"/>
                    <button type="submit" value="Submit" name="co" value="submit" class="cursor-pointer explore-clients-text d-inline-block position-relative btn-hover-animation">
                        <a>Explore More!</a> 
                        <div class="image position-absolute me-1">
                        </div>
                    </button>
                </div>
            </div>

            </form>
    </div>
</section>
<section class="p-0 cccp contracting position-relative z-index-100">
    <div class="outer-section position-relative">
    <div class="bg-image position-absolute h-100 w-100"></div>
        <div class="container py-lg-5">
            <div class="row py-5 px-2 px-sm-1">
                <div class="col-12 col-sm-6">
                    <div class="image mx-auto px-5 px-sm-0">
                        <img class="img-fluid" src="<?php the_field('experience_svg_image'); ?>" />
                    </div>
                </div>
                <div class="col-12 col-sm-6 d-flex align-items-center">
                    <div class="content pt-5 pt-sm-0 font-36px">
                        <div class="font-36px font-octopus-wide-500 text-center text-sm-start"><?php the_field('completed_civil_construction_text'); ?></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="construction-tabs civil-construction contracting theme bg-white-1 pt-0 position-relative z-index-100">
    <div class="contracting-elements position-absolute w-100">
        <div class="container">
            <div class="px-3 px-sm-0">
                <div class="row d-flex justify-content-center py-5">
                    <div class="col-12 px-0">
                        <?php
                            if (has_nav_menu('primary_header')) {
                                wp_nav_menu(array(
                                    'theme_location' => 'primary_header',
                                    'container' => false,
                                    'menu_class' => 'menu-section ps-0 mb-0',
                                    )
                                );
                            }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
</div>
<?php get_footer(); ?>