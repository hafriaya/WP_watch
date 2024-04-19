<?php

if (have_rows('properties_card')) : ?>
  <section class="the-sections__properties">
    <div class="properties__container">
      <?php
      while (have_rows('properties_card')) : the_row();
        $properties_icon = get_sub_field('properties_icon');
        $properties_heading = get_sub_field('properties_heading');
        $properties_desc = get_sub_field('properties_desc');
      ?>
        <div class="properties__detail">
          <div class="properties__icon-container">
            <img src="<?php echo esc_url($properties_icon); ?>" alt="Property_Icon" />
          </div>
          <h4><?php echo $properties_heading; ?></h4>
          <p><?php echo $properties_desc; ?></p>
        </div>
      <?php endwhile; ?>
    </div>
  </section>
<?php endif; ?>