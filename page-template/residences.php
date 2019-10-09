<?php
/* Template Name: Residences Page */
get_header(); ?>

<section class="section-01">
    <div class="container">
        <div class="row">
            <div class="col-lg-4"></div>
            <div class="col-lg-4 text-center">
                <?php the_field('content_01'); ?>
                <a href="<?php echo the_field('residences_button_link') ?>" class="cta-btn"><?php the_field('button_name') ?></a>
            </div>
            <div class="col-lg-4"></div>
        </div>
    </div>
</section>

<div class="section-02">
    <div class="container">
        <div class="row">
            <div class="offset-md-1 col-md-10">
                <img class="mr-3" src="<?php the_field('image_1_5'); ?>" alt="">
                <img src="<?php the_field('image_01'); ?>" alt="">
            </div>
        </div>
        <div class="row my-5">
            <div class="offset-md-1 col-md-10 text-right">
                <img src="<?php the_field('image_02'); ?>" alt="">
            </div>
        </div>
        <div class="row">
            <div class="offset-md-1 col-md-10 text-left">
                <img src="<?php the_field('image_03'); ?>" alt="">
            </div>
        </div>
    </div>
</div>



<section class="section-04 mb-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 img-text">
            <?php $photogallery_3 = get_field('photogallery_3'); ?>
                <div class="slide-wrapper">
                    <div class="slideshow">
                        <?php foreach( $photogallery_3 as $images_3 ): ?>
                            <div class="image-handler" style="background-image: url(<?php echo $images_3['url'] ?>)">
                                <span class="pagingInfo"></span>
                                <span class="imageInfo"><?php echo $images_3['title'];?></span>
                            </div>
                        <?php endforeach; ?>
                        </div>
                        <div class="row content-disc">
                            <div class="col-md-12">
                                <h3 class="text-left">3BR Signature</h3>
                            </div>
                        </div>
                </div>
                
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>