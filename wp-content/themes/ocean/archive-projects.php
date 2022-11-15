<?php
    get_header();
?>

<div class="news-wrapper projects-wrapper">
    <section class="company-banner position-relative z-index-10">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 px-0">
                    <div class="banner-image position-relative d-flex">
                        <div class="position-absolute image w-100 h-100 bg-cover" style="background-image: url(<?php the_field('archive_projects_banner_image', 671); ?>)"></div>
                        <div class="container position-relative">
                            <div class="banner-text top-50 position-absolute translateY-center">
                                <div class="company">
                                    <p class="position-relative d-inline-block theme color-white font-octopus-500 font-18px after-white-border text-uppercase"><?php the_field('archive_projects_banner_title', 671); ?></p>
                                </div>
                                <div class="company-text banner-text-max-width">
                                    <p class="theme color-white font-octopus-500 font-48px"><?php the_field('archive_projects_sub_title', 671); ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="news-videos projects-filter position-relative z-index-100">
        <div class="position-absolute w-100 h-100 common-bg"></div>
        <div class="container py-5">
            <div class="row">
                <div class="col-12">
                    <div class="news-container">
                        <div class="custom-select d-flex flex-wrap justify-content-center justify-content-md-center justify-content-xl-between flex-column flex-md-row" id="custom-select">
                            <div class="cont-re d-flex align-items-center flex-column flex-md-row">
                                <button class="contracting button d-flex align-items-center theme border-gray border-radius-7 px-4 py-2 <?php if(isset($_POST["re"]) || isset($_GET["re"])){ echo ''; } else{ echo 'common-active-btn'; } ?> w-100" id="18">
                                    <div class="image">
                                        <img width="35" height="28" src="<?php echo get_template_directory_uri(); ?>/images/ic-large-civil-contract.svg" />
                                    </div>
                                    <div class="ps-2 title line-height-1">
                                        <span class="theme color-gray font-octopus-700 font-14px text-uppercase">contracting</span>
                                    </div>
                                </button>
                                <button class="contracting button d-flex align-items-center theme border-gray border-radius-7 px-4 py-2 ms-md-3 mt-3 mt-md-0 <?php if(isset($_POST["re"]) || isset($_GET["re"])){ echo 'common-active-btn'; }?> w-100" id="15">
                                    <div class="image">
                                        <img width="35" height="28" src="<?php echo get_template_directory_uri(); ?>/images/ic-large-civil-contract.svg" />
                                    </div>
                                    <div class="ps-2 title line-height-1">
                                        <span class="theme color-gray font-octopus-700 font-14px text-uppercase">real estate</span>
                                    </div>
                                </button>
                            </div>
                            <div class="right-buttons d-flex flex-column flex-md-row pt-3 pt-md-0">
                                <div class="position-relative pt-3 pt-md-2 d-flex align-items-center justify-content-center" id="all">
                                    <button class="px-4 position-relative text-uppercase d-flex align-items-center theme bg-white border-white-smoke w-100 justify-content-start py-3">ALL</button>
                                </div>
                                <label class="position-relative pt-3 pt-md-2 ms-md-2" id="status">
                                    <button class="status theme border-white-smoke position-relative button-1 py-3 text-center d-flex align-items-center ps-4">STATUS</button>
                                    <ul class="position-absolute left right d-none z-index-100">
                                        <?php
                                            $categories =  get_categories( 
                                                array( "taxonomy"=> "Projects_category", "parent"=>12 )
                                            );
                                            foreach ($categories as $term) { ?>
                                                <li class="theme color-white font-octopus-300 font-14px" id=<?php echo $term->term_id; ?>><?php echo $term->name; ?></li>
                                            <?php  }
                                        ?>
                                    </ul>
                                </label>
                                
                                <label class="position-relative pt-3 pt-md-2 ms-md-3" id="contracting">
                                    <input name="newID" id="newID" style="display: none;" disabled readonly>
                                    <button class="cat-contracting theme border-white-smoke position-relative text-uppercase py-3 ps-4 text-start d-flex align-items-center" <?php if(isset($_POST['subcat']) && ($_POST['subcat'] == 'civil-construction' || $_POST['subcat'] == 'interior-contracting' || $_POST['subcat'] == 'general-contracting' || $_POST['subcat'] == 'design-build')){ if($_POST['subcat'] == 'civil-construction'){ echo "id='7'"; }elseif($_POST['subcat'] == 'interior-contracting'){ echo "id='8'"; }elseif( $_POST['subcat'] == 'general-contracting'){ echo "id='10'"; }else{ echo "id='11'";} }?>"><?php if(isset($_POST['subcat']) && ($_POST['subcat'] == 'civil-construction' || $_POST['subcat'] == 'interior-contracting' || $_POST['subcat'] == 'general-contracting' || $_POST['subcat'] == 'design-build')){echo $_POST['subcat'];}else{ echo 'category'; }?></button>
                                    <div class="filters filter-button-group">
                                        <ul class="position-absolute left right d-none z-index-100">
                                            <?php
                                                print_r($_POST['newID']);
                                                $categories =  get_categories( 
                                                    array( "taxonomy"=> "Projects_category", "parent"=>18 )
                                                );
                                                foreach ($categories as $term) { ?>
                                                    <li id=<?php echo $term->term_id; ?>><?php echo $term->name; ?></li>
                                                <?php  }
                                            ?>
                                        </ul>
                                    </div>
                                </label>
                                <label class="position-relative pt-3 pt-md-2 ms-md-3" id="real_estate">
                                    <button class="cat-real-estate theme border-white-smoke position-relative text-uppercase py-3 ps-4 text-start d-flex align-items-center" <?php if(isset($_POST['subcat']) && ($_POST['subcat'] == 'residential' || $_POST['subcat'] == 'commercial')){  if($_POST['subcat'] == 'commercial'){ echo "id='16'"; }else{ echo "id='17'";} }?>"><?php if(isset($_POST['subcat']) && ($_POST['subcat'] == 'residential' || $_POST['subcat'] == 'commercial')){echo $_POST['subcat'];}else{ echo 'category'; }?></button>
                                    <div class="filters filter-button-group">
                                        <ul class="position-absolute left right d-none z-index-100">
                                            <?php
                                                $categories = get_categories( 
                                                    array( "taxonomy"=> "Projects_category", "parent"=>15 )
                                                );
                                                foreach ($categories as $term) { ?>
                                                    <li class="theme color-white font-octopus-300 font-14px" id=<?php echo $term->term_id; ?>><?php echo $term->name; ?></li>
                                                <?php  }
                                            ?>
                                        </ul>
                                    </div>
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <div id="projects_wraper"></div>
        <div class="col-12 pt-5">
            <div class="button d-flex justify-content-center" id="loadmb" value="0">
            <p class="theme color-gray-2 font-octopus-300 font-16px d-inline-block px-5 py-3 cursor-pointer" >Load More</p>
        </div>
      </div>
    </section>
</div>

<script>

jQuery(document).ready(function($){

    var catID = $('.common-active-btn').attr("id");
    var status = 0;
    var subcat = 0;
    
        if(catID == 15){
            
            $('#contracting').hide();
            $('#real_estate').show();

        }else if(catID == 18){
            
            $('#real_estate').hide();
            $('#contracting').show();
        }

    $('.projects-filter .cont-re').on( "click", "button", function() {
        var clickedVal =  $(this).attr("id");
        $(this).addClass('common-active-btn').siblings().removeClass('common-active-btn');
        $('#newID').val(clickedVal);
      
        catID = $('.common-active-btn').attr("id");
        if(catID == 15){
            
            $('#contracting').hide();
            $('#real_estate').show();

        }else if(catID == 18){
            
            $('#real_estate').hide();
            $('#contracting').show();
        }
        
        $('#loadmb').attr('value', 0);
        
        getprojects();

    });
    

    getprojects();
  
    $("#loadmb").click(function() {
        
        var status = $('.status').attr('id');
		if(catID == 18){
            
         var subcat = $('.cat-contracting').attr('id');
        }else if(catID == 15){
            
          var subcat = $('.cat-real-estate').attr('id');   
        }        
        var currentOffset = parseInt($('#loadmb').attr('value'));
        var nextOffset = currentOffset + 5;
        $('#loadmb').attr('value', nextOffset );
        
        var form = new FormData();
  
        form.append("action", "get_projects");
        form.append("offset", nextOffset );
        form.append("catID",catID);
        form.append("status",status);
		form.append("child",subcat);


      
      var settings = {
        "url": "https://ocean.net.in/wp-admin/admin-ajax.php",
        "method": "POST",
        "timeout": 0,
        "processData": false,
        "mimeType": "multipart/form-data",
        "contentType": false,
        "data": form
      };
    
      $.ajax(settings).done(function (response) {
        $('#projects_wraper').append(response);
      });
    });

    function getprojects(){
        
      var status = $('.status').attr('id');
    
      if(catID == 18){
            
         var subcat = $('.cat-contracting').attr('id');
        }else if(catID == 15){
            
          var subcat = $('.cat-real-estate').attr('id');   
        }
        
       // alert(subcat);
        
      var form = new FormData();
      
      form.append("action", "get_projects");
      form.append("offset",0);
      form.append("catID",catID);
      form.append("status",status);
      form.append("child",subcat);
      
      var settings = {
        "url": "https://ocean.net.in/wp-admin/admin-ajax.php",
        "method": "POST",
        "timeout": 0,
        "processData": false,
        "mimeType": "multipart/form-data",
        "contentType": false,
        "data": form
      };
    
      $.ajax(settings).done(function (response) {
        $('#projects_wraper').html(response);
      });
    }
    
    
    $('.custom-select #status ul li').click(function(e){
     e.preventDefault();
    $('.custom-select #status ul').addClass("d-none");

    var current_month = this.id;
    $('.custom-select #status button').attr('id',current_month);
    $('.custom-select #status button').val(current_month);
    
    var selected_month = $(this).text();
    var current_month = $('.custom-select #status button').text();
    var replaced = $('.custom-select #status button').html().replace(current_month,selected_month);
    $('.custom-select #status button').html(replaced);
    
    $('#loadmb').attr('value', 0);
    getprojects();
  });
  
    $('.custom-select #contracting ul li').click(function(e){
        e.preventDefault();
        $('.custom-select #contracting ul').addClass("d-none");
    
        var current_month = this.id;
        $('.custom-select #contracting button').attr('id',current_month);
        
        var selected_month = $(this).text();
        var current_month = $('.custom-select #contracting button').text();
        var replaced = $('.custom-select #contracting button').html().replace(current_month,selected_month);
        $('.custom-select #contracting button').html(replaced);
        
        $('#loadmb').attr('value', 0);
        getprojects();
    });
  
  
    $('.custom-select #real_estate ul li').click(function(e){
        e.preventDefault();
        $('.custom-select #real_estate ul').addClass("d-none");
    
        var current_month = this.id;
        $('.custom-select #real_estate button').attr('id',current_month);
        
        var selected_month = $(this).text();
        var current_month = $('.custom-select #real_estate button').text();
        var replaced = $('.custom-select #real_estate button').html().replace(current_month,selected_month);
        $('.custom-select #real_estate button').html(replaced);
        
        $('#loadmb').attr('value', 0);
        getprojects();
    });

});

</script>

<?php
	get_footer();
?>