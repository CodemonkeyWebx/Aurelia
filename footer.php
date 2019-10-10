<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Aurelia
 */

?>

<?php if ( is_page(268) || is_page(288) ) : ?>

<?php else : ?>

<footer id="colophon" class="site-footer">
	<div class="top-footer">
		<div class="container">
			<div class="row">
				<div class="col-lg-4 text-center">
					<h4>EXPLORE</h4>
					<ul>
						<li><a href="<?php echo site_url(); ?>/useful-info/">PRESS RELEASE</a></li>
						<li><a href="<?php echo site_url(); ?>/useful-info#brochure">DOWNLOADABLE</a></li>
						<li><a href="<?php echo site_url(); ?>/useful-info#faqs">FAQs</a></li>
						<li><a href="<?php echo site_url(); ?>/useful-info#design_team">DESIGN TEAM INFO</a></li>
					</ul>
				</div>
				<div class="col-lg-4 text-center">
					<h4>MORE</h4>
					<ul>
						<li><a href="<?php echo site_url(); ?>/terms-of-use/">TERMS OF USE</a></li>
						<li><a href="<?php echo site_url(); ?>/privacy-policy/">PRIVACY POLICY</a></li>
						<li><a href="<?php echo site_url(); ?>/disclaimer-license-to-sell-number/">LICENSE TO SELL NUMBER</a></li>
					</ul>
				</div>
				<div class="col-lg-4 text-center">
					<h4>CONTACT US</h4>
					<div class="text-lg-center">
						<ul>
							<li><a href="emailto:sales@aureliaresidences.com">sales@aureliaresidences.com</a></li>
							<li><a href="tel:2873542">+632 8 AURELIA (8 287 – 3542)</a></li>
							<li><a href="tel:09178550851">Mobile: (+63) 0917-8550851</a></li>
						</ul>
						<p><br/>
						<br/>
						</p>
					</div>
				</div>
			</div>
			<div class="row pb-4">
				<div class="col-md-12">
					<div class="text-center">
						<div class="grayscaled-logo">
							<img src="/aurelia/wp-content/uploads/2019/09/logo.svg" alt="logo">
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="bottom-footer">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 text-center align-self-center">
					&copy; <?php echo date('Y'); ?> Shang Robinsons Properties, Inc. All Rights Reserved.
				</div>
			</div>
		</div>
	</div>
</footer><!-- #colophon -->
<?php endif; ?>
	<?php wp_footer(); ?>

</body>
</html>
