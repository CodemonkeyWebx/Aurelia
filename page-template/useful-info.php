<?php
/* Template Name: Useful Info Page */
get_header(); ?>

<section id="brochure" class="section-01">
    <div class="container">
        <div class="row">
            <div class="col-lg-3"></div>
            <div class="col-lg-6 text-center">
                <?php the_field('content_01'); ?>
            </div>
            <div class="col-lg-3"></div>
        </div>
        <div class="row">
            <div class="col-lg-12 text-center">
                <dl class="display-table">
                <?php while ( have_rows('brochure') ) : the_row(); ?>
                <?php $date = date_create(get_sub_field('date')); ?>
                        <div></div>
                        <dt><?php the_sub_field('name'); ?></dt>
                        <dt class="text-md-center"><?php the_sub_field('file_type'); ?></dt>
                        <dt><?php echo date_format($date, "M Y"); ?></dt>
                        <dt class="text-md-right"><a download href="<?php the_sub_field('pdf_file'); ?>">DOWNLOAD</a></dt>
                <?php endwhile; ?>
                </dl>
            </div>
        </div>
    </div>
</section>

<section id="faqs" class="seciont-02">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h2 class="text-center">FAQs</h2>
                <div class="accordion" id="accordion">

                    <?php $w = 0; ?>
                    <?php while ( have_rows('faq') ) : the_row(); ?>
                    <?php $w++; ?>
                        <div class="card">
                            <div class="card-header" id="heading-<?= $w; ?>">
                                <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapse-<?= $w; ?>" aria-expanded="false" aria-controls="collapse-<?= $w; ?>">
                                    <div><?php the_sub_field('question'); ?></div>
                                </button>
                            </div>

                            <div id="collapse-<?= $w; ?>" class="collapse" aria-labelledby="heading-<?= $w; ?>" data-parent="#accordion">
                            <div class="card-body">
                                <?php the_sub_field('answer'); ?>
                            </div>
                            </div>
                        </div>
                        
                    <?php endwhile; ?>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="design_team" class="team-behind-aurelia">
    <div class="container">
        <div class="row mb-4">
            <div class="offset-md-3 col-md-6">
                <?php the_field('title_and_subtitle'); ?>
            </div>
        </div>
        <div class="row">
            <div class="offset-lg-1 col-lg-4 text-center">
                <div class="circle-image_1 mb-4" style="background-image: url(<?php the_field('left-image-icon'); ?>);">
                    <img src="<?php the_field('left-image-icon'); ?>" alt="">
                </div>
                <?php the_field('left_content'); ?>
                <a data-fancybox href="<?php the_field('left_button_link'); ?>" class="cta-btn" target="_blank"><?php the_field('left_button_name'); ?></a>
            </div>
            <div class="offset-lg-2 col-lg-4 text-center">
                <div class="circle-image_2 mb-4" style="background-image: url(<?php the_field('right-image-icon'); ?>);">
                    <img src="<?php the_field('right-image-icon'); ?>" alt="">
                </div>
                <?php the_field('right_content'); ?>
                <a data-fancybox href="<?php the_field('right_button_link'); ?>" target="_blank" class="cta-btn"><?php the_field('right_button_name'); ?></a>
            </div>
        </div>
    </div>
</section>

<section class="consultants mb-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h3 class="mb-5">CONSULTANTS</h3>
            </div>
            <div class="col-lg-4">
                <?php the_field('left_consultant_content'); ?>
            </div>
            <div class="col-lg-4">
                <?php the_field('center_consultant_content'); ?>
            </div>
            <div class="col-lg-4">
                <?php the_field('right_consultant_content'); ?>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>