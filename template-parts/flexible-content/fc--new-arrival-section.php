<section class="the-sections__new-arrival">
  <div class="new-arrival__container">

    <?php
    if (have_rows('new_arrival_desc')) :
      while (have_rows('new_arrival_desc')) : the_row();
        $sub_heading = get_sub_field('sub_heading');
        $main_heading = get_sub_field('main_heading');
        $main_heading_price = get_sub_field('main_heading_price');
        $shopping_btn_text = get_sub_field('shopping_btn_text');
        $shopping_btn_link = get_sub_field('shopping_btn_link');

    ?>
        <div class="new-arrival__desc">
          <h3 class="sub-heading"><?php echo $sub_heading; ?></h3>
          <h2 class="main-heading">
            <?php echo $main_heading ?>
            <span class="main-heading__price"><?php echo $main_heading_price ?></span>
          </h2>
          <button class="shopping-btn"><?php echo $shopping_btn_text ?></button>
        </div>
    <?php
      endwhile;
    else :
      echo '<p>No new arrival descriptions found.</p>';
    endif;
    ?>


    <div class="new-arrival__products">
      <?php
      if (have_rows('product_img')) :
        while (have_rows('product_img')) : the_row();
          $product_img = get_sub_field('product_img');
          $product_sub_heading = get_sub_field('product_sub_heading');
          $product_main_heading = get_sub_field('product_main_heading');
          $old_price = get_sub_field('old_price');
          $new_price = get_sub_field('new_price');

      ?>
          <div class="new-arrival__product-container">
            <div class="new-arrival__product-container__img-container">
              <div class="new-arrival__product-container__img-container__sale-option">
                <p>sale</p>
              </div>
              <div class="new-arrival__product-container__img-container__img">
                <img src="<?php echo $product_img ?>" alt="product_img" />
              </div>
              <div class="new-arrival__product-container__button-options">
                <button class="new-arrival__product-container__button-options__btn">
                  save
                </button>
                <button class="new-arrival__product-container__button-options__btn">
                  Quickview
                </button>
              </div>
            </div>
            <div class="new-arrival__product-container__detail">
              <h3 class="products__descr__sub-heading">
                <?php echo $product_sub_heading; ?>
              </h3>
              <h2 class="products__descr__main-heading">
                <?php echo $product_main_heading; ?>
              </h2>
              <div class="new-arrival__product_price product_price">
                <p id="product_price__old">
                  <?php echo $old_price; ?>
                </p>
                <p id="product_price__new">
                  <?php echo $new_price; ?>
                </p>
              </div>
            </div>
          </div>
      <?php
        endwhile;
      else :
        echo '<p>No new arrival product_img found.</p>';
      endif;
      ?>

      <?php
      $product_main_img = get_sub_field('product_main_img');
      ?>
      <div class="new-arrival__main-img">
        <img id="new-arrival__main-img__model21" src="<?php echo $product_main_img ?>" alt="product_main_img" />
      </div>
    </div>
  </div>
</section>