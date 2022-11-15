<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" href="" type="image/x-icon" />
	<title><?php wp_title(''); ?></title>
	<?php wp_head();?>
</head>
<script type="text/javascript">
    var ajaxurl = "<?php echo admin_url('admin-ajax.php'); ?>";
</script>

<body <?php body_class(); ?>>
	<header class="header-shell position-fixed w-100 left top theme bg-white">
		<div class="container">
			<div class="main-loader left position-absolute left vh-100 w-100 theme bg-gray z-index-100" id="myProgress">
				<div class="loader-wrapper position-absolute top-50 left-50 translate-center">
					<div class="loader-width theme bg-white" id="myBar"></div>
					<div class="loader-text theme color-white text-center pt-5 mt-5 position-absolute w-100 top-50 left-50 translate-center" id="myNumber">1</div>
					<div class="loader-text theme color-white text-center pt-5 mt-5 position-absolute w-100 top-50 left-50 translate-center" id="mySecondNumber">50</div>
				</div>
				
			</div>
			<div class="row">
				<nav class="navbar py-3 w-100 z-index-15 col-12 px-3">
					<div class="logo-section d-flex">
						<a class="navbar-brand m-0 py-0 position-relative z-index-2 d-flex pe-0 pe-lg-4" href="<?php echo get_home_url(); ?>">
							<img src="<?php echo get_theme_mod('logo_url'); ?>" class="site-logo mr-3 h-100">
						</a>
					</div>
					<div class="menu-holder d-flex align-items-center">
						<div class="primary-menu z-index-14 d-none d-lg-flex align-self-center mr-4">
							<?php
								if (has_nav_menu('primary_header')) {
									wp_nav_menu(array(
										'theme_location' => 'primary_header',
										'container' => false,
										'menu_class' => 'menu-section flex-row navbar-nav ml-auto h-100 justify-content-lg-center theme bg-transparent uppercase font-octopus-700',
										)
									);
								}
						   ?>
						</div>
						<button class="menu outline-none collapsed position-relative me-4 me-sm-0 pe-lg-0 z-index-4 d-lg-none">
							<div class="menu-btn-container">
								<div class="menu-open-btn position-absolute pt-2">
									<div class="bar1 common-bar"></div>
									<div class="bar2 common-bar"></div>
									<div class="bar3 common-bar"></div>
								</div>
								<div class="menu-close-btn position-absolute display-0 pt-2">
									<div class="bar1 common-bar"></div>
									<div class="bar2 common-bar"></div>
									<div class="bar3 common-bar"></div>
								</div>
							</div>
					    </button>
					    <div class="collapse mobile-menu text-center z-index-13 position-fixed theme bg-white border-0 w-100 bg-cover d-block d-lg-none" id="navbarSupportedContent">
							<?php
								if (has_nav_menu('primary_mobile')) {
									wp_nav_menu(array(
										'theme_location' => 'primary_mobile',
										'container' => false,
										'menu_class' => 'mobile-menu-section navbar-nav h-100 theme color-white bg-gray p-5',
										)
									);
								}
						   	?>
						<div class="social-icons position-fixed w-100 d-flex justify-content-around px-5">
							<?php if( have_rows('social_icons', 749) ): ?>
								<?php while( have_rows('social_icons', 749) ): the_row(); ?>
									<div class="twitter mx-2">
										<a href="#">
											<img src="<?php the_sub_field('icon', 749); ?>" alt="">
										</a>
									</div>
								<?php endwhile; ?>
							<?php endif; ?>
						</div>
						</div>
					</div>
				</nav>
			</div>
		</div>
	</header>
	<script type="text/javascript">
	
	document.getElementById('mySecondNumber').classList.add('d-none');

    function preloadFunc(){
        document.getElementById('myBar').classList.add('half-width');
		var up = true;
		var value = 0;
		var increment = 1;
		var midVal = 50;
		var maxVal = 100;
		var intervalOne = 20;
		function PerformCalc() {
			if (up == true) {
				value += increment;
				if (value == midVal) {
					up = false;
					document.getElementById('myNumber').classList.add('d-none');
					document.getElementById('mySecondNumber').classList.remove('d-none');
				}
				if(up==false){
					clearInterval(myVar);
				}
			}
			document.getElementById('myNumber').innerHTML = value;
		}
		var myVar = setInterval(PerformCalc, intervalOne);
    }
    window.onpaint = preloadFunc();

	document.onreadystatechange = function () {
		if (document.readyState === 'complete') {
			var up = true;
			var newVal = 0;
			var increment = 1;
			var midVal = 50;
			var maxVal = 100;
			var intervalOne = 0;
			function PerformCalcTwo() {
				if (up == true) {
					newVal += increment;
					if (newVal == maxVal) {
						up = false;
						clearInterval(myVar2);
						document.getElementById('myProgress').classList.add('remove-overlay');
					}
				}
				document.getElementById('mySecondNumber').innerHTML = newVal;
			}
			var myVar2 = setInterval(PerformCalcTwo, 0);
			document.getElementById('myBar').classList.remove('half-width');
			document.getElementById('myBar').classList.add('full-width');
		}
	}

</script>