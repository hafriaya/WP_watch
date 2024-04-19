<section class="the-sections__collection">
  <div class="collection__container">


    <?php
    if (have_rows('collection_desc')) :
      while (have_rows('collection_desc')) : the_row();
        $sub_heading = get_sub_field('sub_heading');
        $main_heading = get_sub_field('main_heading');
        $main_heading_price = get_sub_field('main_heading_price');
        $shopping_btn_text = get_sub_field('shopping_btn_text');
        $shopping_btn_link = get_sub_field('shopping_btn_link');

?>
        <div class="collection__desc">
          <h3 class="sub-heading"><?php echo $sub_heading; ?></h3>
          <h2 class="main-heading"><?php echo $main_heading . $main_heading_price; ?></h2>
          <button class="shopping-btn"><?php echo $shopping_btn_text; ?></button>
        </div>
    <?php
      endwhile;
    else :
      echo '<p>No collection descriptions found.</p>';
    endif;
    ?>




    <?php
    if (have_rows('collection_product')) : ?>

      <div class="collection__products__slider">
        <div class="collection__products">

          <?php
          while (have_rows('collection_product')) : the_row();
            $product_img = get_sub_field('product_img');
            $product_sub_heading = get_sub_field('product_sub_heading');
            $product_main_heading = get_sub_field('product_main_heading');
            $price = get_sub_field('price');
          ?>
            <div class="collection__products_container">
              <div class="collection__products_container__product_img">
                <img src="<?php echo esc_url($product_img); ?>" alt="product_img" />
              </div>
              <div class="collection__products__descr__details">
                <h3 class="products__descr__sub-heading">
                  <?php echo $product_sub_heading; ?>
                </h3>
                <h2 class="products__descr__main-heading"><?php echo $product_main_heading; ?></h2>
                <p class="collection__product_price product_price">
                  <?php echo $price; ?>
                </p>
              </div>
            </div>

          <?php endwhile; ?>









          <div class="dots__container">
            <span class="dot"></span>
            <span class="dot"></span>
            <span class="dot"></span>
          </div>
          <a class="prev" onclick="prevSlide()">&#10094;</a>
          <a class="next" onclick="showSlides()">&#10095;</a>
        </div>
      </div>
    <?php
    endif;
    ?>
  </div>
</section>