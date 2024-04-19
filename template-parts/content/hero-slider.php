<div class="header__bg-container">
    <div class="header__bg__slideshow-container">
        <?php if (have_rows('slides')) : ?>
            <div class="header__bg__imgs-container">
                <?php
                $firstImgSet = false;
                while (have_rows('slides')) : the_row();
                    $imgBg = get_sub_field('background_image');
                    if (!$firstImgSet) {
                        $backgroundImage = esc_url($imgBg);
                        $firstImgSet = true;
                    }
                ?>
                    <div class="header__bg__imgs__item" style="background-image: url('<?php echo esc_url($imgBg); ?>');"></div>
                <?php endwhile; ?>
            </div>
            <style>
                .header__bg-container {
                    background-image: url('<?php echo $backgroundImage; ?>');
                }
            </style>
        <?php endif; ?>
        <div class="header__bg__slideshow__dots"></div>
    </div>






    <div class="header__bg__tags-container">
        <div class="header__bg__slideshow-link">
            <a href="#the-sections">
                <div class="to_down_arrow">
                    <img src="<?php echo get_template_directory_uri() . '/assets/images/icon/ios-arrow-down1.png' ?>" alt="ios-arrow-down" />
                </div>
            </a>
        </div>



        <?php 

        $share_button = get_field('share_button');
        if ($share_button == 'showBtn') {
        ?>
            <div class="share_box__container">
                <div class="share_box">
                    <input type="checkbox" id="share_button" />
                    <label for="share_button">
                        <span class="sharebtn">+</span>
                    </label>
                    <div class="share_box__paragraph_wrapper">
                        <p>share</p>
                    </div>
                    <div class="sm_list">
                        <a class="media_icon" href="#instagram" class="instagram"><i class="fab fa-instagram"></i></a>
                        <a class="media_icon" href="#linkedin" class="linkedin"><i class="fab fa-linkedin-in"></i></a>
                        <a class="media_icon" href="#whatsapp" class="whatsapp"><i class="fab fa-whatsapp"></i></a>
                        <a class="media_icon" href="#facebook" class="facebook"><i class="fab fa-facebook-f"></i></a>
                    </div>
                </div>
            </div>
        <?php
        }

        ?>



    </div>
</div>