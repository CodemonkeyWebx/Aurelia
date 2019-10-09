<?php
/* Template Name: Contact Page */
get_header(); ?>

<section class="section-03">
    <div class="container">
        <div class="row">
            <div class="col-lg-3"></div>
            <div class="col-lg-6 text-center">
            <?php echo do_shortcode('[contact-form-7 id="5" title="Contact form"]'); ?>
            </div>
            <div class="col-lg-3"></div>
        </div>
    </div>
</section>

<section class="section-01 my-5">
    <div class="container">
        <div class="row">
        <?php while ( have_rows('list_box') ) : the_row(); ?>
           <div class="col-lg-4 text-center">
                <img src="<?php the_sub_field('icon'); ?>" alt="">
                <h3><?php the_sub_field('header'); ?></h3>
                <?php the_sub_field('content'); ?>
            </div>
            <?php endwhile; ?>
        </div>
    </div>
</section>

<section class="section-02">
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1930.9731832703294!2d121.04572663482048!3d14.545059741582637!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3397c9cf866642b7%3A0xbdb2b9084e38c23c!2sAurelia+Residences!5e0!3m2!1sen!2sph!4v1564594085680!5m2!1sen!2sph" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
</section>

<?php get_footer(); ?>