<?php
/* Template Name: Architecture Page */
get_header(); ?>

<section class="section-01">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 bleed-left text-center">
                <div class="frame">
                    <?php the_field('content_01'); ?>
                </div>
            </div>
            <div class="col-lg-6 bleed-right text-center">
                <img class="img-fluid" src="<?php the_field('image_01'); ?>" alt="">
            </div>
        </div>
    </div>
</section>

<section class="section-02">
    <div class="container-fluid">
    <?php while ( have_rows('image_content_list') ) : the_row(); ?>
        <div class="container">
            <div class="row">
                <div class="col-lg-4"></div>
                <div class="col-lg-4 text-center"><?php the_sub_field('content'); ?></div>
                <div class="col-lg-4"></div>
            </div>
        </div>
        <div class="row" style="background-image: url(<?php the_sub_field('image'); ?>)"></div>
    <?php endwhile; ?>
    </div>
</section>

<?php get_footer(); ?>