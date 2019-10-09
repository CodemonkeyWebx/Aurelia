<?php
/* Template Name: Amenities Page */
get_header(); ?>

<section class="section-01">
    <div class="container">
        <div class="row">
            <div class="offset-md-2 col-md-8 text-center">
                <h3><?php the_field('title_01'); ?></h3>
                <p><?php the_field('content_01'); ?></p>
                <a data-fancybox="gallery" class="cta-btn" href="<?php the_field('starting_floor_plan_image'); ?>">View Floorplan</a>
                <div class="floor-plans d-none">
                    <?php $images = get_field('floor_plan_modal_gallery');
                    if( $images ):
                     foreach($images as $image){
                        ?>
                        <a data-fancybox="gallery" href="<?php echo $image['url']; ?>"></a>
                    <?php } 
                    endif; ?>  
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section-02 my-5">
    <div class="container py-4">
        <div class="row">
            <div class="col-lg-4"></div>
            <div class="col-lg-4 text-center"><?php the_field('content_02'); ?></div>
            <div class="col-lg-4"></div>
        </div>
        <div class="row">
            <div class="col-lg-12 img-text">
            <?php $images = get_field('photogallery'); ?>
                <div class="slide-wrapper">
                    <div class="slideshow">
                        <?php foreach( $images as $image ): ?>
                            <div class="image-handler" style="background-image: url(<?php echo $image['url'] ?>)">
                                <h3>aureliaresidences.com</h3>
                                <span class="pagingInfo"></span>
                                <span class="imageInfo"><?php echo $image['description'];?></span>
                            </div>
                        <?php endforeach; ?>
                        </div>
                </div>
                
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>