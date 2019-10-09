<?php
/* Template Name: Location Page */
get_header(); ?>

<section class="section-01">
    <div class="container">
        <div class="row mb-5">
            <div class="col-lg-12 text-center">
                <h2><?php the_field('title'); ?></h2>
            </div>
        </div>
        <div class="row mb-5 pb-5 align-items-center">
            <div class="offset-lg-1 col-lg-5">
                <div class="right-side-images">
                    <img class="img-fluid" src="<?php the_field('image_01'); ?>" alt="">
                </div>
            </div>
            <div class="offset-lg-1 col-lg-4 text-center">
                <?php the_field('content_01'); ?>
            </div>
        </div>
        <div class="row mb-5 align-items-center">
            <div class="offset-lg-1 col-lg-4 text-center">
                <?php the_field('content_2'); ?>
            </div>
            <div class="offset-lg-1 col-lg-5">
                <div class="left-side-images">
                    <img class="img-fluid" src="<?php the_field('image_02'); ?>" alt="">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="offset-lg-1 col-lg-4 text-center">
                <?php the_field('left_content'); ?>
            </div>
            <div class="offset-lg-2 col-lg-4 text-center">
                <?php the_field('right_content'); ?>
            </div>
        </div>
    </div>
</section>
<section class="section-02">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <img src="<?php the_field('map') ?>" alt="">
                <div class="content">
                 <?php
                    // check if the repeater field has rows of data
                    if( have_rows('location_hover_content_copy') ):
                        // loop through the rows of data
                        while ( have_rows('location_hover_content_copy') ) : the_row();
                            $number     = get_sub_field('number');
                            $content    = get_sub_field('hovered_content');
                            ?>

                            
                                <div class="circle circle-number-<?php echo $number; ?>" data-id="map-dialog-<?php echo $number; ?>"></div>
                                <div id="map-dialog-<?php echo $number; ?>" class="hidden-content">
                                    <p><?php echo $content; ?></p>
                                </div>
                            

                        <?php
                        endwhile;

                    else :

                        // no rows found

                    endif;

                    ?>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section-03">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <ul>
                    <?php while ( have_rows('location_list') ) : the_row(); ?>
                    <li><?php the_sub_field('list'); ?></li>
                    <?php endwhile; ?>
                </ul>
            </div>
        </div>
    </div>
</section>

<section class="section-04">
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1930.9731832703294!2d121.04572663482048!3d14.545059741582637!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3397c9cf866642b7%3A0xbdb2b9084e38c23c!2sAurelia+Residences!5e0!3m2!1sen!2sph!4v1564594085680!5m2!1sen!2sph" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
</section>
<?php get_footer(); ?>