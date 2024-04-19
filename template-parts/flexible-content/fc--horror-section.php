<section class="the-sections__horror">
  <div class="horror__container">


    <?php
    if (have_rows('horror_desc')) :
      while (have_rows('horror_desc')) : the_row();
        $sub_heading = get_sub_field('sub_heading');
        $main_heading = get_sub_field('main_heading');
        $main_heading_price = get_sub_field('main_heading_price');
        $shopping_btn_text = get_sub_field('shopping_btn_text');
        $shopping_btn_link = get_sub_field('shopping_btn_link');

    ?>
        <div class="horror__desc">
          <h3 class="sub-heading"><?php echo $sub_heading; ?></h3>
          <h2 class="main-heading">
            <?php echo $main_heading; ?>
            <span class="main-heading__price"><?php echo $main_heading_price; ?></span>
          </h2>
          <button class="shopping-btn"><?php echo $shopping_btn_text; ?></button>
        </div>
    <?php
      endwhile;
    else :
      echo '<p>No collection descriptions found.</p>';
    endif;
    ?>

    <?php
    $horror_bg_img = get_sub_field('horror_bg_img');
    ?>
    <div class="horror__container__bg" style="background-image: url('<?php echo $horror_bg_img; ?>');">
      <!-- <img src="./frontend/src/images/backgrounds/horror-bg.png" alt="horror-bg"> -->
    </div>
  </div>
</section>