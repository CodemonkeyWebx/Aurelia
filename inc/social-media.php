<?php
  if( have_rows('social_media', 'option') ):
      echo '<div class="social-links">';
      echo '<ul>';
      while ( have_rows('social_media', 'option') ) : the_row();
      $socialchannel = get_sub_field('social_channel', 'option');
      $socialurl = get_sub_field('social_url', 'option');
      if ( $socialchannel == "facebook" ) {
      echo '<li><a class="fa fa-facebook" href="' . $socialurl . '" target="_blank"><span>Facebook</span></a></li>';
      }
      if ( $socialchannel == "flickr" ) {
      echo '<li><a class="fa fa-flickr" href="' . $socialurl . '" target="_blank"><span>Flickr</span></a></li>';
      }
      if ( $socialchannel == "instagram" ) {
      echo '<li><a class="fa fa-instagram" href="' . $socialurl . '" target="_blank"><span>Instagram</span></a></li>';
      }
      if ( $socialchannel == "linkedin" ) {
      echo '<li><a class="fa fa-linkedin" href="' . $socialurl . '" target="_blank"><span>LinkedIn</span></a></li>';
      }
      if ( $socialchannel == "google" ) {
      echo '<li><a class="fa fa-google-plus" href="' . $socialurl . '" target="_blank"><span>Google Plus</span></a></li>';
      }
      if ( $socialchannel == "pinterest" ) {
      echo '<li><a class="fa fa-pinterest-p" href="' . $socialurl . '" target="_blank"><span>Pinterest</span></a></li>';
      }
      if ( $socialchannel == "skype" ) {
      echo '<li><a class="fa fa-skype" href="' . $socialurl . '" target="_blank"><span>Skype</span></a></li>';
      }
      if ( $socialchannel == "spotify" ) {
      echo '<li><a class="fa fa-spotify" href="' . $socialurl . '" target="_blank"><span>Spotify</span></a></li>';
      }
      if ( $socialchannel == "tumblr" ) {
      echo '<li><a class="fa fa-tumblr" href="' . $socialurl . '" target="_blank"><span>Tumblr</span></a></li>';
      }
      if ( $socialchannel == "twitter" ) {
      echo '<li><a class="fa fa-twitter" href="' . $socialurl . '" target="_blank"><span>Twitter</span></a></li>';
      }
      if ( $socialchannel == "vimeo" ) {
      echo '<li><a class="fa fa-vimeo" href="' . $socialurl . '" target="_blank"><span>Vimeo</span></a></li>';
      }
      if ( $socialchannel == "youtube" ) {
      echo '<li><a class="fa fa-youtube-play" href="' . $socialurl . '" target="_blank"><span>YouTube</span></a></li>';
      }
      endwhile;
      echo '</ul>';
      echo '</div>';
  endif;
  ?>
