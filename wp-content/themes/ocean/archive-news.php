<?php
    get_header();
?>

<div class="news-wrapper">
    <section class="company-banner position-relative z-index-10">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 px-0">
                    <div class="banner-image news-banner-image position-relative d-flex">
                        <div class="position-absolute image w-100 h-100 bg-cover" style="background-image: url(<?php the_field('news_banner_image', 650); ?>)"></div>
                        <div class="container d-flex align-items-center">
                        <div class="banner-text top-50p">
                            <div class="company">
                                <p class="position-relative d-inline-block theme color-white font-octopus-500 font-18px after-white-border text-uppercase"><?php the_field('news_banner_title', 650); ?></p>
                            </div>
                            <div class="company-text">
                                <p class="theme color-white font-octopus-500 font-48px"><?php the_field('news_banner_sub_title', 650); ?></p>
                            </div>
                        </div>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="news-videos position-relative theme bg-white position-relative z-index-10">
        <div class="left-background position-absolute h-100 z-index-10 d-none d-md-block">
        </div>
        <div class="right-background position-absolute h-100 z-index-10 right d-none d-md-block">
        </div>
        <div class="right-bg-overlay position-absolute h-100 right d-none d-md-block"></div>
        <div class="container py-5">
            <div class="row py-lg-5">
                <div class="bg-image bg-image-left position-absolute h-100 common-bg left"></div>
                <div class="bg-image bg-image-right position-absolute h-100 common-bg right"></div>
                <div class="position-absolute bg-image-right dark-overlay h-100 right top"></div>
                <div class="calc-news-width col-12 col-md-7 z-index-100">
                    <div class="news-container">
                        <div class="latest-news pb-5">
                            <p class="theme color-gray font-octopus-500 font-18px text-uppercase after-border position-relative d-inline-block">latest news</p>
                        </div>
                        <div class="custom-select d-flex justify-content-start" id="custom-select">
							<div class="custom-label position-relative d-flex align-items-center justify-content-center">
                                <button id="main_news_all" class="px-4 position-relative text-uppercase d-flex align-items-center theme bg-white border-white-smoke w-100 justify-content-start py-3">all</button>
                            </div>
                            <label class="position-relative ms-sm-3" id="month">
                                <button class="position-relative button-1 w-100 text-start text-sm-center py-3">MONTH</button>
                                <ul class="position-absolute left right d-none z-index-100">
                                    <li class="theme color-white font-octopus-300 font-14" value="0" id="all_news">All</li>
                                    <li class="theme color-white font-octopus-300 font-14" value="1" id="01">January</li>
                                    <li class="theme color-white font-octopus-300 font-14" value="2" id="02">February</li>
                                    <li class="theme color-white font-octopus-300 font-14" value="3" id="03">March</li>
                                    <li class="theme color-white font-octopus-300 font-14" value="4" id="04">April</li>
                                    <li class="theme color-white font-octopus-300 font-14" value="5" id="05">May</li>
                                    <li class="theme color-white font-octopus-300 font-14" value="6" id="06">June</li>
                                    <li class="theme color-white font-octopus-300 font-14" value="7" id="07">July</li>
                                    <li class="theme color-white font-octopus-300 font-14" value="8" id="08">August</li>
                                    <li class="theme color-white font-octopus-300 font-14" value="9" id="09">September</li>
                                    <li class="theme color-white font-octopus-300 font-14" value="10" id="10">October</li>
                                    <li class="theme color-white font-octopus-300 font-14" value="11" id="11">November</li>
                                    <li class="theme color-white font-octopus-300 font-14" value="12" id="12">December</li>
                                </ul>
                            </label>
                            <label class="position-relative ms-sm-3" id="year">
                                <button class="position-relative button-2 w-100 text-start text-sm-center py-3">YEAR</button>
                                <ul class="position-absolute left right d-none z-index-100">
									<li class="theme color-white font-octopus-300 font-14" value="0" id="all_years_news">All</li>
                                    <li class="theme color-white font-octopus-300 font-14" value="0" id="2021">2021</li>
                                    <li class="theme color-white font-octopus-300 font-14" value="1" id="2020">2020</li>
                                    <li class="theme color-white font-octopus-300 font-14" value="2" id="2019">2019</li>
                                    <li class="theme color-white font-octopus-300 font-14" value="3" id="2018">2018</li>
                                    <li class="theme color-white font-octopus-300 font-14" value="4" id="2017">2017</li>
                                    <li class="theme color-white font-octopus-300 font-14" value="5" id="2016">2016</li>
                                    <li class="theme color-white font-octopus-300 font-14" value="6" id="2015">2015</li>
                                    <li class="theme color-white font-octopus-300 font-14" value="7" id="2014">2014</li>
                                    <li class="theme color-white font-octopus-300 font-14" value="8" id="2013">2013</li>
                                    <li class="theme color-white font-octopus-300 font-14" value="9" id="2012">2012</li>
                                </ul>
                            </label>
                        </div>
                        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                        <?php
							$date = get_the_date();
                            $month = get_the_date('m'); 
                            $year = get_the_date('Y');
                        ?>
                            <div class="main-posts py-5" data-month="<?php echo $month; ?>" data-year="<?php echo $year; ?>">
                                <div class="date pb-2">
                                    <p class="theme color-black-2 font-octopus-300 font-16px"><?php echo $date; ?></p>
                                </div>
                                <div class="project-title">
                                    <p class="theme color-black-2 font-octopus-500 font-24px"><?php echo the_title(); ?></p>
                                </div>
                            </div>
                        <?php
                            endwhile;
                            else:
                        ?>
                            <p>Sorry, no posts matched your criteria.</p>
                        <?php endif; ?>
                    </div>
                </div>
                <div class="calc-videos-width col-12 col-md-5 z-index-10 pt-5 pt-sm-0">
                    <div class="video-container mx-auto">
                        <div class="video-title pb-5">
                            <p class="theme color-gray font-octopus-500 font-18px after-border position-relative d-inline-block">VIDEOS</p>
                        </div>
                        <?php if( have_rows('news_youtube_videos',650) ): ?>
                            <?php while( have_rows('news_youtube_videos',650) ): the_row(); ?>
                                <div class="embed-container">
                                    <?php the_sub_field('video',650); ?>
                                </div>
                            <?php endwhile; ?>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<script>
    jQuery(document).ready(function($){
    

    $('.custom-select #month ul li').click(function(e){
        e.preventDefault();
        $('.custom-select #month ul').addClass("d-none");
    
        var current_month = this.id;
        $('.custom-select #month button').attr('id',current_month);
        
        var selected_month = $(this).text();
        var current_month = $('.custom-select #month button').text();
        var replaced = $('.custom-select #month button').html().replace(current_month,selected_month);
        $('.custom-select #month button').html(replaced);
    
        var month = $(this).attr('id');
        var year = $('.button-2').attr('id');
        
        if(year){
        
        $('.main-posts').hide();
        $('.main-posts[data-month='+month+'][data-year='+year+']').show();
        }
        else{
          $('.main-posts').hide();
        $('.main-posts[data-month='+month+']').show();   
        }
    });
    
    $('.custom-select #year button').click(function() {
        $('.custom-select #year ul').removeClass("d-none");
    
    });

    $('.custom-select #year ul li').click(function(e){
        e.preventDefault();
        $('.custom-select #year ul').addClass("d-none");
    
        var current_month = this.id;
        $('.custom-select #year button').attr('id',current_month);
    
        var selected_month = $(this).text();
        var current_month = $('.custom-select #year button').text();
        var replaced = $('.custom-select #year button').html().replace(current_month,selected_month);
        $('.custom-select #year button').html(replaced);
        
        
        var month = $('.button-1').attr('id');
        var year = $(this).attr('id');
        
        if(month){
        $('.main-posts').hide();
        $('.main-posts[data-month='+month+'][data-year='+year+']').show();
        }else{
          $('.main-posts').hide();
        $('.main-posts[data-year='+year+']').show();  
        }
        
    });
        
});
</script>

<?php
	get_footer();
?>