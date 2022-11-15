<?php
  /*
   * Template Name: Cookie policy Template
  */
  get_header();
?>

<section class="py-5 mt-custom">
  <div class="container">
    <div class="row">
      <div class="col-12 col-lg-10">
        <div class="title-holder mb-4">
          <h1 class="large-title theme color-light-blue font-Open-Sans-semiBold"><?php the_title(); ?></h1>
        </div>
        <div class="content-holder">
          <?php the_content(); ?>
        </div>
      </div>
    </div>
  </div>
</section>

<?php
  get_footer();
?>
