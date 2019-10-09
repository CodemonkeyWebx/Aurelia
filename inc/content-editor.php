<?php
  if( have_rows('flexible_content') ):
    while ( have_rows('flexible_content') ) : the_row();
?>

<?php
  if(get_row_layout() == "text"):
  $v = get_sub_field_object('column');
  $z = get_sub_field_object('layout');
  $u = get_sub_field_object('adjust_width');
  $y = get_sub_field_object('add_header');
  $bg = get_sub_field('background_image');
  $img = 'background-image: url(' . $bg . ');';
  $ht = '<div class="col-lg-12"><h2>' . get_sub_field('header_text') . '</h2></div>';
  $mw = '<div style="max-width: ' . get_sub_field('max_width') . 'px; margin: 0 auto">';
  $ov = get_sub_field('class_name');
?>
<!-- TEXT CONTENT -->
  <div class="<?php echo $z['value'] . ' ' . $ov; ?> text-content" style="background-color: <?php the_sub_field('background_color'); ?>; <?php echo (!$bg ? '' : $img ); ?> margin-bottom: <?php the_sub_field('margin_bottom'); ?>px; margin-top: <?php the_sub_field('margin_top'); ?>px; padding-bottom: <?php the_sub_field('padding_bottom'); ?>px; padding-top: <?php the_sub_field('padding_top'); ?>px">
    <?php echo ($ov == 'overlayed' ? '<div class="overlay"></div>' : ''); ?>
    <?php if ($v['value'] == '1_column'): ?>
    <div class="row">
      <?php echo ($z['value'] == 'container-fluid' ? '<div class="custom-width">' : '' ); ?>
      <div class="col-lg-12">
        <?php echo ($u['value'] == 'yes' ? $mw : '' ); ?>
        <?php the_sub_field('content01'); ?>
        <?php echo ($u['value'] == 'yes' ? '</div>' : '' ); ?>
      </div>
      <?php echo ($z['value'] == 'container-fluid' ? '</div>' : '' ); ?>
    </div>

    <?php elseif ($v['value'] == '2_column'): ?>
    <div class="row">
      <?php echo ($z['value'] == 'container-fluid' ? '<div class="custom-width">' : '' ); ?>
      <?php echo ($y['value'] == 'yes' ? $ht : '' ); ?>

      <div class="col-lg-6">
        <?php the_sub_field('content01'); ?>
      </div>
      <div class="col-lg-6">
        <?php the_sub_field('content02'); ?>
      </div>
      <?php echo ($z['value'] == 'container-fluid' ? '</div>' : '' ); ?>
    </div>

  <?php elseif ($v['value'] == '2a_column'): ?>
  <div class="row">
    <?php echo ($z['value'] == 'container-fluid' ? '<div class="custom-width">' : '' ); ?>
    <?php echo ($y['value'] == 'yes' ? $ht : '' ); ?>

    <div class="col-lg-3">
      <?php the_sub_field('content01'); ?>
    </div>
    <div class="col-lg-9">
      <?php the_sub_field('content02'); ?>
    </div>
    <?php echo ($z['value'] == 'container-fluid' ? '</div>' : '' ); ?>
  </div>

  <?php elseif ($v['value'] == '2b_column'): ?>
    <div class="row">
      <?php echo ($z['value'] == 'container-fluid' ? '<div class="custom-width">' : '' ); ?>
      <?php echo ($y['value'] == 'yes' ? $ht : '' ); ?>

      <div class="col-lg-9">
        <?php the_sub_field('content01'); ?>
      </div>
      <div class="col-lg-3">
        <?php the_sub_field('content02'); ?>
      </div>
      <?php echo ($z['value'] == 'container-fluid' ? '</div>' : '' ); ?>
    </div>

    <?php elseif ($v['value'] == '3_column'): ?>
    <div class="row">
      <?php echo ($z['value'] == 'container-fluid' ? '<div class="custom-width">' : '' ); ?>
      <?php echo ($y['value'] == 'yes' ? $ht : '' ); ?>
      <div class="col-lg-4">
        <?php the_sub_field('content01'); ?>
      </div>
      <div class="col-lg-4">
        <?php the_sub_field('content02'); ?>
      </div>
      <div class="col-lg-4">
        <?php the_sub_field('content03'); ?>
      </div>
      <?php echo ($z['value'] == 'container-fluid' ? '</div>' : '' ); ?>
    </div>


    <?php
      elseif ($v['value'] == 'flex_column'):
    ?>
      <?php
        if ($y['value'] == 'yes') {
      ?>
      <div class="row">
        <?php echo $ht; ?>
      </div>
      <?php
        }

        if( have_rows('flexible_section') ):
          while ( have_rows('flexible_section') ) : the_row();
          $subv = get_sub_field_object('columns');
    ?>

        <?php if ($subv['value'] == '1_column'): ?>
        <div class="row">
          <?php echo ($z['value'] == 'container-fluid' ? '<div class="custom-width">' : '' ); ?>
          <div class="col-lg-12">
            <?php echo ($u['value'] == 'yes' ? $mw : '' ); ?>
            <?php the_sub_field('n_content_1'); ?>
            <?php echo ($u['value'] == 'yes' ? '</div>' : '' ); ?>
          </div>
          <?php echo ($z['value'] == 'container-fluid' ? '</div>' : '' ); ?>
        </div>

        <?php elseif ($subv['value'] == '2_column'): ?>
        <div class="row">
          <?php echo ($z['value'] == 'container-fluid' ? '<div class="custom-width">' : '' ); ?>

          <div class="col-lg-6">
            <?php the_sub_field('n_content_1'); ?>
          </div>
          <div class="col-lg-6">
            <?php the_sub_field('n_content_2'); ?>
          </div>
          <?php echo ($z['value'] == 'container-fluid' ? '</div>' : '' ); ?>
         </div>

        <?php elseif ($subv['value'] == '3_column'): ?>
        <div class="row">
          <?php echo ($z['value'] == 'container-fluid' ? '<div class="custom-width">' : '' ); ?>
          <div class="col-lg-4">
            <?php the_sub_field('n_content_1'); ?>
          </div>
          <div class="col-lg-4">
            <?php the_sub_field('n_content_2'); ?>
          </div>
          <div class="col-lg-4">
            <?php the_sub_field('n_content_3'); ?>
          </div>
          <?php echo ($z['value'] == 'container-fluid' ? '</div>' : '' ); ?>
        </div>

          <?php elseif ($subv['value'] == '4_column'): ?>
        <div class="row">
          <?php echo ($z['value'] == 'container-fluid' ? '<div class="custom-width">' : '' ); ?>
          <div class="col-lg-3 col-sm-12">
            <?php the_sub_field('n_content_1'); ?>
          </div>
          <div class="col-lg-3 col-sm-12">
            <?php the_sub_field('n_content_2'); ?>
          </div>
          <div class="col-lg-3 col-sm-12">
            <?php the_sub_field('n_content_3'); ?>
          </div>
          <div class="col-lg-3 col-sm-12">
            <?php the_sub_field('n_content_4'); ?>
          </div>
          <?php echo ($z['value'] == 'container-fluid' ? '</div>' : '' ); ?>
        </div>

      <?php endif; ?>

      <?php if(get_row_layout() == "spacer"): ?>
        <div class="row">
          <div class="col-lg-12">
            <div style="height: <?php the_sub_field('spacer'); ?>px"></div>
          </div>
        </div>
      <?php endif; ?>

      <?php
         endwhile;
        endif;
       ?>

    <?php endif; ?>
  </div>
<!-- TEXT CONTENT #END -->
<?php endif; ?>

<?php
    endwhile;
  endif;
?>
