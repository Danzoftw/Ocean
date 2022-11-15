jQuery(document).ready(function($){

  $('#all').click(function() {
    location.reload();
  });
	
  $('#all_news').click(function() {
    location.reload();
  });
	
   $('#all_years_news').click(function() {
	location.reload();
  });
	
	$('#main_news_all').click(function() {
	location.reload();
  });


  $('.go-to-news-floater .close-news').click(function() {
    $('.go-to-news-floater').remove();
  });
  
  if (window.outerWidth < 576) {
    $('section.project-showcase .images-container-mobile .image-inner-mobile').click(function(){
      $(this).toggleClass('hide-image').siblings().addClass('hide-image')
    });
  }else{
    $('section.project-showcase .images-container .image-inner:first').removeClass('slider-collapsed').addClass('slider-expanded');
    $('section.project-showcase .images-container .image-inner').mouseover(function(){
      $(this).addClass('slider-expanded').removeClass('slider-collapsed custom-25').siblings().addClass('custom-25');
    });
    $('section.project-showcase .images-container .image-inner').mouseout(function(){
      $(this).siblings().addClass('slider-collapsed').removeClass('slider-expanded');
      $(".my-home-p").addClass("font-36px").removeClass("font-18px");
    });
  }

    size_li = $("#myList li").size();
    x=4;
    $('#myList li:lt('+x+')').show();
    $('#loadMore').click(function () {
        x = (x+5 <= size_li) ? x+5 : size_li;
        $('#myList li:lt('+x+')').show();

        x==size_li ? x++ : size_li
          $('.loadMore').hide();
    });

   var innerWidth = $('.projects-filter .single-content-0').innerHeight();
   $('.projects-filter .single-content-1').css({"height": innerWidth});
   $('.projects-filter .single-content-2').css({"top": innerWidth});
   $('.projects-filter .single-content-3').css({"top": innerWidth});
   $(window).resize(function() {
     $('.projects-filter .single-content-1').css({"height": innerWidth});
   });

  $('.custom-select #status button').click(function() {
    $('.custom-select #status ul').removeClass("d-none");
  });

  $('.custom-select #contracting button').click(function() {
      $('.custom-select #contracting ul').removeClass("d-none");
  });

  $('.custom-select #real_estate button').click(function() {
    $('.custom-select #real_estate ul').removeClass("d-none");
  });

  $('.custom-select #month button').click(function() {
    $('.custom-select #month ul').removeClass('d-none');
});

  //Sidebar menu
  $('.header-shell .menu .menu-btn-container .menu-open-btn').click(function(){
    $('.navbar .menu-holder .mobile-menu').toggleClass('right').css({"top": header_height});
    $(this).addClass('display-0').siblings().removeClass('display-0');
  });

  $('.header-shell .menu .menu-btn-container .menu-close-btn').click(function(){
    $('.navbar .menu-holder .mobile-menu').toggleClass('right').css({"top": header_height});
    $(this).addClass('display-0');
    $('.header-shell .menu .menu-btn-container .menu-open-btn').removeClass('display-0');
  });

  $('.menu-holder .mobile-menu .mobile-menu-section .menu-item').click(function(){
    $(this).toggleClass('unset-li-height').siblings().removeClass('unset-li-height');
    
  });

  //slick init
  $('.ocean-team .slick').slick({
    infinite: true,
    autoplay: true,
    autoplaySpeed: 2000,
    slidesToShow: 1,
    slidesToScroll: 1,
    arrows: false,
    dots: false,
    adaptiveHeight: true
  });

  $('.expertise .clients').slick({
    infinite: true,
    autoplay: false,
    autoplaySpeed: 2000,
    slidesToShow: 1,
    slidesToScroll: 1,
    arrows: true,
    dots: true,
    adaptiveHeight: true
  });
  
  $('#showcase_slick').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    dots: false,
    centerMode: false,
    focusOnSelect: false,
    arrows: true,
    responsive: [
      {
        breakpoint: 768,
        settings: {
          arrows: false,
          autoplay: true,
          autoplaySpeed: 2000,
          infinite: true,
          speed: 1000
        }
      }
    ]
  });
  $('#awards-slick').slick({
    slidesToShow: 2,
    slidesToScroll: 1,
    dots: false,
    centerMode: false,
    focusOnSelect: false,
    responsive: [
      {
        breakpoint: 1200,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1,
        }
      },
      {
        breakpoint: 768,
        settings: {
          centerMode: false,
          slidesToShow: 1,
          slidesToScroll: 1,
          infinite: true,
          arrows: false,
          dots: false,
          autoplay: false,
        }
      }
    ]
  });

  $('.philosophy .sub-title').slick({
    infinite: false,
    slidesToShow: 1,
    slidesToScroll: 1,
    arrows: false,
    autoplaySpeed: 2000,
    infinite: true,
    speed: 1000,
    fade: true,
    asNavFor: '.philosophy .my-slider'
  });

  $('.philosophy .my-slider').slick({
    infinite: false,
    asNavFor: '.philosophy .sub-title', 
    autoplaySpeed: 2000,
    speed: 1000,
    infinite: true,
    centerMode: true,
    centerPadding: '60px',
    slidesToShow: 1,
    slidesToScroll: 1,
    arrows: true,
    dots: false,
    variableWidth: false,
    responsive: [
      {
        breakpoint: 1024,
        settings: {
          centerMode: false,
          slidesToShow: 1,
          infinite: true,
          arrows: true,
          dots: false,
          autoplay: false,
        }
      }
    ]
  });

  $('.other-projects .image-container .slider').slick({
    infinite: true,    
    autoplaySpeed: 2000,
    speed: 1000,
    centerMode: true,
    centerPadding: '60px',
    slidesToShow: 2,
    slidesToScroll: 1,
    arrows: true,
    dots: false,
    responsive: [
      {
        breakpoint: 992,
        settings: {
          centerMode: true,
          centerPadding: '60px',
          slidesToShow: 1,
          arrows: true,
          dots: false,
          autoplay: false,
        }
      }
    ]
  });

  //Single projects slick
  $('.projects .slider').slick({
    infinite: true,
    autoplay: false,
    autoplaySpeed: 2000,
    speed: 1000,
    slidesToShow: 1,
    slidesToScroll: 1,
    arrows: true,
    dots: false,
    appendArrows: $('.projects .arrow-holder')
  });

  //Clients and associations slick
  $('section.clients .my-custom-slider').slick({
    infinite: true,
    autoplay: false,
    autoplaySpeed: 2000,
    speed: 1000,
    slidesToShow: 1,
    slidesToScroll: 1,
    arrows: true,
    dots: false,
    adaptiveHeight: true,
  });

  //Company career slider
  $('.company-career-slider .images-container').slick({
    infinite: true,
    autoplay: false,
    autoplaySpeed: 2000,
    speed: 1000,
    slidesToShow: 2,
    slidesToScroll: 1,
    arrows: true,
    dots: false,
    adaptiveHeight: true,
  });

    $('.ocean-team .ocean-team-right .image-1').click(function(){
      $('.image-1').toggleClass("images-hide");
      $('.ocean-team .ocean-team-right .image-2').toggleClass("images-show");
    });
    $('.ocean-team .ocean-team-right .image-2').click(function(){
      $('.image-2').toggleClass("images-show");
      $('.ocean-team .ocean-team-right .image-1').toggleClass("images-hide");
    });



  var windowWidth = $(window).width();
  var innerContainer = $('.company-team .container').innerWidth();
  var innerContainerWidth = windowWidth - innerContainer;
  f = innerContainerWidth / 2;

  var containerWidth = $('.container').width();
  var mainWidth = windowWidth - containerWidth;
  mainWidth = mainWidth / 2;

  var header_height = $('.header-shell').innerHeight();
  var footer_height =  $('.footer-section').innerHeight();
  var footer_height_0 =  0;


  //work-with-us inner container width
  var innerWwu = $('.work-with-us .container').innerWidth();
  var innerWwuContainerWidth = windowWidth - innerWwu;
  mainWwu = innerWwuContainerWidth / 2;

  $('.single-projects-container .inner-width').css({'padding-left': mainWwu});

  $(window).resize(function() {
    $('.single-projects-container .inner-width').css({'padding-left': mainWwu});
  });

  //Home page margin-bottom
  if (window.matchMedia('(min-width: 1024px)').matches){
    $('section.news-events').css({'margin-bottom': footer_height});
    }else{
      $('section.news-events').css({'margin-bottom': footer_height_0});
  }
  $(window).resize(function() {
    if (window.matchMedia('(min-width: 1024px)').matches){
      $('section.news-events').css({'margin-bottom': footer_height});
      }else{
        $('section.news-events').css({'margin-bottom': footer_height_0});
    }
  });
//Work with us margin-bottom
if (window.matchMedia('(min-width: 1024px)').matches){
  $('section.work-with-us').css({'margin-bottom': footer_height});
  }else{
    $('section.work-with-us').css({'margin-bottom': footer_height_0});
}
$(window).resize(function() {
  if (window.matchMedia('(min-width: 1024px)').matches){
    $('section.work-with-us').css({'margin-bottom': footer_height});
    }else{
      $('section.work-with-us').css({'margin-bottom': footer_height_0});
  }
});

//Company margin-bottom
if (window.matchMedia('(min-width: 1024px)').matches){
  $('section.downloads').css({'margin-bottom': footer_height});
  }else{
    $('section.downloads').css({'margin-bottom': footer_height_0});
}
$(window).resize(function() {
  if (window.matchMedia('(min-width: 1024px)').matches){
    $('section.downloads').css({'margin-bottom': footer_height});
    }else{
      $('section.downloads').css({'margin-bottom': footer_height_0});
  }
});
//Archive projects margin bottom
if (window.matchMedia('(min-width: 1024px)').matches){
  $('div.projects-wrapper').css({'margin-bottom': footer_height});
  }else{
    $('div.projects-wrapper').css({'margin-bottom': footer_height_0});
}
$(window).resize(function() {
  if (window.matchMedia('(min-width: 1024px)').matches){
    $('div.projects-wrapper').css({'margin-bottom': footer_height});
    }else{
      $('div.projects-wrapper').css({'margin-bottom': footer_height_0});
  }
});
//Contact us margin bottom
if (window.matchMedia('(min-width: 1024px)').matches){
  $('.google-map').css({'margin-bottom': footer_height});
  }else{
    $('.google-map').css({'margin-bottom': footer_height_0});
}
$(window).resize(function() {
  if (window.matchMedia('(min-width: 1024px)').matches){
    $('.google-map').css({'margin-bottom': footer_height});
    }else{
      $('.google-map').css({'margin-bottom': footer_height_0});
  }
});

//Archive news margin bottom
if (window.matchMedia('(min-width: 1024px)').matches){
  $('div.news-wrapper').css({'margin-bottom': footer_height});
  }else{
    $('div.news-wrapper').css({'margin-bottom': footer_height_0});
}
$(window).resize(function() {
  if (window.matchMedia('(min-width: 1024px)').matches){
    $('div.news-wrapper').css({'margin-bottom': footer_height});
    }else{
      $('div.news-wrapper').css({'margin-bottom': footer_height_0});
  }
});

//Single contracting
if (window.matchMedia('(min-width: 1024px)').matches){
  $('div.main-contracting-section').css({'margin-bottom': footer_height});
  }else{
    $('div.main-contracting-section').css({'margin-bottom': footer_height_0});
}
$(window).resize(function() {
  if (window.matchMedia('(min-width: 1024px)').matches){
    $('div.main-contracting-section').css({'margin-bottom': footer_height});
    }else{
      $('div.main-contracting-section').css({'margin-bottom': footer_height_0});
  }
});

//Clients Associations
if (window.matchMedia('(min-width: 1024px)').matches){
  $('section.outer-clients-associations-container').css({'margin-bottom': footer_height});
  }else{
    $('section.outer-clients-associations-container').css({'margin-bottom': footer_height_0});
}
$(window).resize(function() {
  if (window.matchMedia('(min-width: 1024px)').matches){
    $('section.outer-clients-associations-container').css({'margin-bottom': footer_height});
    }else{
      $('section.outer-clients-associations-container').css({'margin-bottom': footer_height_0});
  }
});

  $('.contact-us-form').css({'padding-top': header_height});

  //Other projects
  var of = $('.company-team .container').offset();
  left = of.left;
  innerContainerWidth = $(window).width() - left - $('.company-team .container').width();

  if (window.matchMedia('(min-width: 1024px)').matches){
    $('section.other-projects .inner-container').css({'padding-left': innerContainerWidth});
    }else{
  }
  $(window).resize(function() {
    if (window.matchMedia('(min-width: 1024px)').matches){
      $('section.other-projects .inner-container').css({'padding-left': innerContainerWidth});
      }else{
    }
  });

   $('.form-styling .frm_form_fields .frm_submit .frm_button_submit').addClass('font-16px');

//Other projects
  $(window).resize(function() {
    $('.contact-us-form').css({'padding-top': header_height});
  });

//custom-services-section

  var windowWidth = $(window).width();
  var containerWidth = $('.container').width();
  var mainWidth = windowWidth - containerWidth;
  mainWidth = mainWidth / 2;
  $('.our-projects .custom-services-container').css({'padding-left': mainWidth});

$(window).resize(function() {
  var windowWidth = $(window).width();
  var containerWidth = $('.container').width();
  var mainWidth = windowWidth - containerWidth;
  mainWidth = mainWidth / 2;
  $('.our-projects .custom-services-container').css({'padding-left': mainWidth});
});

  var tab_height = $(".ocean-team .ocean-team-bg").innerHeight();
  var tab_width = $(".ocean-team .ocean-team-bg").innerWidth();
  $(".ocean-team .ocean-team-right .def-image").css({'height': tab_height, 'width': tab_width});

 //ocean team
  $(window).resize(function() {
  var tab_height = $(".ocean-team .ocean-team-bg").innerHeight();
  var tab_width = $(".ocean-team .ocean-team-bg").innerWidth();

  $(".ocean-team .ocean-team-right .def-image").css({'height': tab_height, 'width': tab_width});
});

AOS.init();

    //waypoint
    if (window.matchMedia('(max-width: 576px)').matches){
      var waypoint = new Waypoint({
        element: document.getElementById('integrity_trigger'),
        handler: function(direction) {
          $( '.integrity-quality' ).toggleClass( 'common-svg-1' );
        },
        offset: '50%'
      });
      var waypoint = new Waypoint({
        element: document.getElementById('integrity_trigger'),
        handler: function(direction) {
          $( '.integrity-quality' ).toggleClass( 'common-svg-1' );
        },
        offset: '10%'
      });
    }
    var waypoint = new Waypoint({
      element: document.getElementById('sticky-top-trigger'),
      handler: function(direction) {
        if(direction == 'down'){
          $('#sticky-year').addClass('top-sticky-add');
        }else{
          $('#sticky-year').removeClass('top-sticky-add');
        }
      },
      offset: '50%',
    });

    var waypoint = new Waypoint({
      element: document.getElementById('sticky-bottom-trigger'),
      handler: function(direction) {
        if(direction == 'down'){
          $('#sticky-year').addClass('bottom-sticky-add');
        }else{
          $('#sticky-year').addClass('top-sticky-add');
          $('#sticky-year').removeClass('bottom-sticky-add');
        }
      },
      offset: '90%',
    });

      var numItems = $('.left-counter').length*2;
      var myCounter = 0;
      var customOffset = 40; 
      for(var i=0; i< numItems-1;){
        var waypoint = new Waypoint({
          element: document.getElementById('detect_left_circle_'+i),
          handler: function(direction) {
            if(direction == 'down'){
              myCounter++;
              var year = $('#year_'+myCounter).text();
              
              $('.current_year > p').text(year);

            }else{
              myCounter--;
              var year = $('#year_'+myCounter).text();
              $('.current_year > p').text(year);
            }
          },
          offset: customOffset+'%'
        });
        i++;
      }
});