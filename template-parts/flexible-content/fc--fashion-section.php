<section class="the-sections__fashion">
  <div class="fashion__container">

    <div class="brand__social-media">
      <?php
      if (have_rows('brand_social_media')) :
        while (have_rows('brand_social_media')) : the_row();

          $media_img = get_sub_field('media_img');
          $media_name = get_sub_field('media_name');
          $media_link = get_sub_field('media_link');

      ?>
          <div class="brand__logo">
            <img id="brand__logo_insta" src="<?php echo $media_img ?>" alt="media_img" />
            <a href="<?php echo $media_link ?>"><?php echo $media_name ?></a>
          </div>

      <?php
        endwhile;
      endif; ?>

    </div>



    <div class="fashion__articles__container">

      <?php
      if (have_rows('fashion_article')) :
        while (have_rows('fashion_article')) : the_row();

          $article_img = get_sub_field('article_img');

          if (have_rows('article_desc')) :
            while (have_rows('article_desc')) : the_row();

              $sub_heading = get_sub_field('sub_heading');
              $main_heading = get_sub_field('main_heading');
              $read_more_btn_text = get_sub_field('read_more_btn_text');
              $read_more_btn_link = get_sub_field('read_more_btn_link');
      ?>

              <article class="fashion__article fashion__article-1">
                <div class="fashion__article__bg fashion__article__bg-1">
                  <img src="<?php echo $article_img ?>" alt="article_img" />
                </div>
                <div class="fashion__article__desc">
                  <h3 class="fashion__sub-heading"><?php echo $sub_heading ?></h3>
                  <h2 class="fashion__main-heading">
                    <?php echo $main_heading ?>
                  </h2>
                  <button class="read-more_btn"><?php echo $read_more_btn_text ?></button>
                </div>
              </article>

      <?php
            endwhile;
          endif;
        endwhile;
      endif;
      ?>
      <?php
      if (have_rows('fachion_article_4')) :
        while (have_rows('fachion_article_4')) : the_row();
          $article_img_4 = get_sub_field('article_img_4');
      ?>


          <article class="fashion__article fashion__article-4">
            <div class="fashion__article__bg fashion__article__bg-4">
              <div class="fashion__article__simple-bg"></div>
              <img id="fashion__article__bg-4__img" src="<?php echo $article_img_4 ?>" alt="article_img_4" />
            </div>
            <div class="fashion__article__bg-4__desc_container">
              <?php
              if (have_rows('article_left_desc_4')) :
                while (have_rows('article_left_desc_4')) : the_row();
                  $l_sub_heading_4 = get_sub_field('sub_heading');
                  $l_main_heading_4 = get_sub_field('main_heading');
                  $l_read_more_btn_text_4 = get_sub_field('read_more_btn_text');
                  $l_read_more_btn_link_4 = get_sub_field('read_more_btn_link');

              ?>

                  <div class="fashion__article__desc fashion__article__bg-4__desc fashion__article__bg-4__desc__left-side">
                    <h3 class="fashion__sub-heading"><?php echo $l_sub_heading_4 ?></h3>
                    <h2 class="fashion__main-heading">
                      <?php echo $l_main_heading_4 ?>
                    </h2>
                    <button class="read-more_btn">
                      <?php echo $l_read_more_btn_text_4 ?>
                      <img id="btn_ios-arrow-down" src="<?php echo get_template_directory_uri() . '/assets/images/icon/ios-arrow-down.png' ?>" alt="ios-arrow-down" />
                    </button>
                  </div>
              <?php

                endwhile;
              endif;
              ?>
              <?php
              if (have_rows('article_right_desc_4')) :
                while (have_rows('article_right_desc_4')) : the_row();
                  $r_sub_heading_4 = get_sub_field('sub_heading');
                  $r_main_heading_4 = get_sub_field('main_heading');
                  $r_read_more_btn_text_4 = get_sub_field('read_more_btn_text');
                  $r_read_more_btn_link_4 = get_sub_field('read_more_btn_link');

              ?>
                  <div class="fashion__article__desc fashion__article__bg-4__desc fashion__article__bg-4__desc__right-side">
                    <h3 class="fashion__sub-heading"> <?php echo $r_sub_heading_4 ?>
                    </h3>
                    <h2 class="fashion__main-heading"> <?php echo $r_main_heading_4 ?>
                    </h2>
                    <button class="read-more_btn">
                      <?php echo $r_read_more_btn_text_4 ?>

                      <img id="btn_ios-arrow-down" src="<?php echo get_template_directory_uri() . '/assets/images/icon/ios-arrow-down.png' ?>" alt="ios-arrow-down" />
                    </button>
                  </div>
              <?php

                endwhile;
              endif;
              ?>


            </div>
          </article>



      <?php

        endwhile;
      endif;
      ?>


    </div>




  </div>
</section>