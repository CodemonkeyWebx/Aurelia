<?php get_header(); ?>

<?php 
$content = get_the_content();

if($content){
?>
<div class="inner-pages">
  <?php get_content_editor(); ?> 
</div>
<?php
}else{
  ?>

<section class="section-01">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-md-6 col-lg-6 img-line text-center">
        <img class="img-fluid img-aurelia" src="<?php the_field('image_01'); ?>" alt="">
      </div>
      <div class="offset-lg-1 col-md-6 col-lg-4 text-center"> 
        <?php the_field('content_01'); ?>
        <a href="<?php the_field('section-01-button-url'); ?>" class="cta-btn"><?php the_field('section-01-button-name'); ?></a>
      </div>
    </div>
  </div>
</section>

<section class="section-02">
  <div class="container">
    <div class="row">
      <div class="offset-lg-1 col-lg-4 align-self-center text-center"> 
      <?php the_field('content_02'); ?>
      <a href="<?php the_field('link-url-02') ?>" class="cta-btn"><?php the_field('link-name-02') ?></a>
      </div>

      <div class="offset-lg-2 col-lg-4 text-center img-text"> 
        <img class="img-fluid" src="<?php the_field('image_02'); ?>" alt="">
        <p><?php the_field('image_text_01'); ?></p>
      </div>

    </div>
  </div>
</section>

<section class="section-03">
  <div class="image-separator" style="background-image: url(<?php the_field('image_03'); ?>"></div>
  <div class="container">
    <div class="row">
      <div class="col-lg-12 pt-5 mt-4">
        <?php the_field('quote'); ?>
      </div>
    </div>
  </div>
</section>

<section class="section-04">
  <div class="container">
    <div class="row">
      <div class="col-lg-4"></div>
      <div class="col-lg-4 text-center">
        <?php the_field('content_03'); ?>
        <a href="<?php the_field('link-url-03') ?>" class="cta-btn"><?php the_field('link-name-03') ?></a>
      </div>
      <div class="col-lg-4"></div>
    </div>
    <div class="row">
      <div class="col-lg-12">
      <?php $images = get_field('photogallery'); ?>

      <div class="slide-wrapper">
        <div class="slideshow">
          <?php foreach( $images as $image ): ?>
            <div class="image-handler" style="background-image: url(<?php echo $image['url'] ?>)">
      				<h3>aureliaresidences.com</h3>
              <span class="pagingInfo"></span>
      				<span class="imageInfo"><?php echo $image['title'];?></span>
      			</div>
			 
          <?php endforeach; ?>
        </div>
        
      </div>

      </div>
    </div>
  </div>
</section>

<section class="section-02 section-05">
  <div class="container">
    <div class="row">
      <div class="offset-lg-1 col-lg-4 align-self-center text-center"> 
      <?php the_field('content_04'); ?>
      <a href="<?php the_field('link-url-02') ?>" class="cta-btn"><?php the_field('link-name-02') ?></a>
      </div>
      <div class="offset-lg-1 col-lg-6 text-center img-text"> 
        <img class="img-fluid" src="<?php the_field('image_04'); ?>" alt="">
      </div>
    </div>
  </div>
</section>

<section class="section-06">
  <div class="container">
    <div class="row">
      <div class="offset-lg-3 col-lg-6 text-center">
        <?php the_field('content_05'); ?>
        <a href="<?php the_field('link-url-04') ?>" class="cta-btn"><?php the_field('link-name-05') ?></a>
      </div>
    </div>
  </div>
  <div class="image-separator" style="background-image: url(<?php the_field('image_05'); ?>"></div>
</section>



<?php
}
?>

<?php get_footer(); ?>
