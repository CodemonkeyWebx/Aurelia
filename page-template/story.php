<?php
/* Template Name: Story Page */
get_header(); ?>

<section class="section-01">
  <div class="container">
    <div class="row">
        <div class="col-lg-1"></div>
        <div class="col-lg-4 align-self-center text-center"> 
            <?php the_field('content_01'); ?>
        </div>
        <div class="col-lg-1"></div>
        <div class="col-lg-5 img-line"> 
            <img class="img-fluid" src="<?php the_field('image_01'); ?>" alt="">
        </div>
        <div class="col-lg-1"></div>
    </div>
  </div>
</section>

<section class="section-02">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 bleed-left text-center">
                <div class="frame"><?php the_field('content_02'); ?></div>
            </div>
            <div class="col-lg-6 bleed-right text-center">
            <div class="frame"><?php the_field('content_03'); ?></div>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>