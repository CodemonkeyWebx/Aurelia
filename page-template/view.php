<?php
/* Template Name: Floor Plans Page */
get_header(); ?>

<section class="view-aurelia">
    <div class="d-none d-md-block">
        <div class="container">
            <div class="row align-items-center">
                <div class="offset-md-1 col-md-4 text-center">
                    <div class="frame">
                        <?php the_field('view_content'); ?>
                    </div>
                </div>
                <div class="offset-md-1 col-md-6 text-center">
                    <a data-fancybox href="<?php the_field('view_image'); ?>"><img class="zoom-button float-right" src="/aurelia/wp-content/uploads/2019/08/Vector-Smart-Object.png" alt=""></a>
                    <img class="img-fluid" src="<?php the_field('view_image'); ?>" alt="">
                </div>
            </div>
        </div>
    </div>
    <div class="d-block d-md-none">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <div class="mobile-frame my-5">
                        <?php the_field('view_content'); ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="mobile-bg">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <div class="mobile-frame my-5">
                            <img class="img-fluid" src="<?php the_field('view_image'); ?>" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="view-compass">
    <?php while ( have_rows('view_image_content_list') ) : the_row(); ?>
        <div class="container">
            <div class="row">

                <div class="offset-lg-3 col-lg-6 text-center"><?php the_sub_field('view_content_repeater'); ?></div>

            </div>
        </div>
        <div class="banner-image-view" style="background-image: url(<?php the_sub_field('view_image_repeater'); ?>)">
            <img src="<?php the_sub_field('view_image_repeater'); ?>" alt="">
        </div>
    <?php endwhile; ?>
</section>

<section class="view-night">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="slide-wrapper">
                    <?php $images_night = get_field('view_night_gallery'); ?>
                    <div class="slideshow">
                        <?php foreach( $images_night as $image_night ): ?>
                            <div class="image-handler" style="background-image: url(<?php echo $image_night['url'] ?>)">
                                <h3>aureliaresidences.com</h3>
                                <span class="pagingInfo"></span>
                                <span class="imageInfo"><?php echo $image_night['caption'];?></span>
                            </div>
                        <?php endforeach; ?>
                        </div>
                </div>
            </div>
        </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>