<?php
/* Template Name: Craft Page */
get_header(); ?>

<section class="section-story-01">
  <div class="container">
    <div class="row align-items-center">
        <div class="offset-lg-1 col-md-6 col-lg-4 text-center"> 
            <?php the_field('content_story_01'); ?>
        </div>
        <div class="offset-lg-1 col-md-6 col-lg-6 text-center img-line"> 
            <img class="img-fluid" src="<?php the_field('image_story_01'); ?>" alt="">
        </div>
    </div>
  </div>
</section>

<section class="section-story-02">
    <div class="d-none d-md-block">
        <div class="container">
            <div class="row">
                <div class="offset-md-1 col-md-4 left text-center">
                    <div class="frame">
                        <?php the_field('content_story_02'); ?>
                    </div>
                </div>
                <div class="offset-md-2 col-md-4 text-center">
                    <div class="frame">
                        <?php the_field('content_story_03'); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="d-block d-md-none">
        <div class="container">
            <div class="row">
                <div class="col-md-12 left text-center">
                    <div class="my-5">
                        <?php the_field('content_story_02'); ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="mobile-bg">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <div class="my-5">
                            <?php the_field('content_story_03'); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section-01">
    <div class="d-none d-md-block">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6 text-center">
                    <div class="frame">
                        <?php the_field('content_01'); ?>
                        <a class="cta-btn mr-3" href="useful-info#design_team">MORE DETAILS</a>
                		<a data-fancybox class="cta-btn" href="<?php the_field('team_button_link_02'); ?>">VIEW VIDEO</a>
                    </div>
                </div>
                <div class="col-md-6 text-center">
                    <a data-fancybox href="<?php the_field('image_01'); ?>"><img class="zoom-button float-right" src="/aurelia/wp-content/uploads/2019/08/Vector-Smart-Object.png" alt=""></a>
                    <img class="img-fluid" src="<?php the_field('image_01'); ?>" alt="">
                    <p><?php the_field('image_text'); ?></p>
                </div>
            </div>
        </div>
    </div>
    <div class="d-block d-md-none">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-12 text-center">
                    <div class="mobile-frame">
                        <?php the_field('content_01'); ?>
                        <a class="cta-btn mr-3" href="useful-info#design_team">MORE DETAILS</a>
                		<a data-fancybox class="cta-btn" href="<?php the_field('team_button_link_02'); ?>">VIEW VIDEO</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="mobile-bg">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-12 text-center">
                        <div class="mobile-frame my-5">
                            <img class="img-fluid" src="<?php the_field('image_01'); ?>" alt="">
                            <p><?php the_field('image_text'); ?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section-02">
    <div class="container">
        <div class="row">
            <div class="offset-lg-2 col-lg-8 text-center">
            <div class="embed-container embed-responsive embed-responsive-16by9">
                <video class="embed-responsive-item" controls>
                  <source src="<?php the_field('video'); ?>#t=0.8" type="video/mp4">
                </video>
            </div>
            </div>
        </div>
    </div>
</section>

<section class="section-03">
    <div class="d-none d-md-block">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6 text-center">
                    <a data-fancybox href="<?php the_field('image_02'); ?>"><img class="zoom-button float-right" src="/aurelia/wp-content/uploads/2019/08/Vector-Smart-Object.png" alt=""></a>
	                <img class="img-fluid" src="<?php the_field('image_02'); ?>" alt="">
	                <p><?php the_field('image_text2'); ?></p>
                </div>
                <div class="col-md-6 text-center">
					<div class="frame">
                        <?php the_field('content_02'); ?>
	                    <a class="cta-btn mr-3" href="useful-info#design_team">MORE DETAILS</a>
	                	<a data-fancybox class="cta-btn" href="<?php the_field('team_button_link_02'); ?>">VIEW VIDEO</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="d-block d-md-none">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-12 text-center">
                    <div class="mobile-frame">
                        <?php the_field('content_02'); ?>
	                    <a class="cta-btn mr-3" href="useful-info#design_team">MORE DETAILS</a>
	                	<a data-fancybox class="cta-btn" href="<?php the_field('team_button_link_02'); ?>">VIEW VIDEO</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="mobile-bg">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-12 text-center">
                        <div class="mobile-frame">
                            <a data-fancybox href="<?php the_field('image_02'); ?>"><img class="zoom-button float-right" src="/aurelia/wp-content/uploads/2019/08/Vector-Smart-Object.png" alt=""></a>
			                <img class="img-fluid" src="<?php the_field('image_02'); ?>" alt="">
			                <p><?php the_field('image_text2'); ?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="team-behind-aurelia">
    <div class="container">
        <div class="row mb-4">
            <div class="offset-md-3 col-md-6">
                <?php the_field('team_content_team_0'); ?>
            </div>
        </div>
        <div class="row">
            <div class="offset-lg-1 col-lg-4 text-center">
                <div class="circle-image_1 mb-4" style="background-image: url(<?php the_field('image_team_01'); ?>);">
                    <img src="<?php the_field('image_team_01'); ?>" alt="">
                </div>
                <?php the_field('team_content_team_01'); ?>
                <a data-fancybox href="<?php the_field('team_button_link'); ?>" class="cta-btn" target="_blank"><?php the_field('team_button_name'); ?></a>
            </div>
            <div class="offset-lg-2 col-lg-4 text-center">
                <div class="circle-image_2 mb-4" style="background-image: url(<?php the_field('image_team_02'); ?>);">
                    <img src="<?php the_field('image_team_02'); ?>" alt="">
                </div>
                <?php the_field('team_content_team_02'); ?>
                <a data-fancybox href="<?php the_field('team_button_link_02'); ?>" target="_blank" class="cta-btn"><?php the_field('team_button_name_02'); ?></a>
            </div>
        </div>
    </div>
</section>

<section class="consultants">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h3 class="mb-5">CONSULTANTS</h3>
            </div>
            <div class="col-lg-4">
                <?php the_field('left-content_03'); ?>
            </div>
            <div class="col-lg-4">
                <?php the_field('center-content_3'); ?>
            </div>
            <div class="col-lg-4">
                <?php the_field('right-content_4'); ?>
            </div>
        </div>
    </div>
</section>

<div class="aurelia-residences-section-01">
    <div class="container">
        <div class="row">
            <div class="offset-lg-1 col-lg-10 text-center">
                <?php the_field('aurelia_residences_content'); ?>
            </div>
            <div class="offset-lg-3 col-lg-6 text-center">
            	<?php the_field('aurelia_residences_content_02'); ?>
            </div>
        </div>
        <div class="row align-items-center">
        	<div class="col-md-6 text-center aurelia-border-right">
            	<?php the_field('residences_left_content'); ?>
            </div>
            <div class="col-md-6 text-center">
            	<?php the_field('residences_right_content'); ?>
            </div>
        </div>
    </div>
</div>

<section class="view-aurelia">
    <div class="d-none d-md-block">
        <div class="container">
            <div class="row align-items-center">
                <div class="offset-md-1 col-md-4 text-center">
                    <div class="frame">
                        <?php the_field('content_03'); ?>
                    </div>
                </div>
                <div class="offset-md-1 col-md-6 text-center">
                    <a data-fancybox href="<?php the_field('image_03'); ?>"><img class="zoom-button float-right" src="/aurelia/wp-content/uploads/2019/08/Vector-Smart-Object.png" alt=""></a>
                    <img class="img-fluid" src="<?php the_field('image_03'); ?>" alt="">
                </div>
            </div>
        </div>
    </div>
    <div class="d-block d-md-none">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <div class="mobile-frame my-5">
                        <?php the_field('content_03'); ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="mobile-bg">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <div class="mobile-frame my-5">
                            <img class="img-fluid" src="<?php the_field('image_03'); ?>" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>