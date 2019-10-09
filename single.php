<?php get_header(); ?>

<div class="inner-single-post">

	<div class="container">
		<div class="row">
			<div class="col-lg-12">

    		<?php
      		while ( have_posts() ) :
      			the_post();
      			get_template_part( 'template-parts/content', get_post_type() );
    		?>
    		<div class="post-navigation">
    			<?php echo brinkman_the_post_navigation(); ?>
    		</div>
    		<?php
          endwhile;
        ?>

			</div>
		</div>
	</div>

</div>

<?php get_footer(); ?>
