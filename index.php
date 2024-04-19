<?php

/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package watch
 */

get_header();
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Seoulify</title>
  <link rel="stylesheet" href="./frontend/src/styles/style.css" />
</head>

<body>

  <div class="header__bg-container">
    <div class="header__bg__slideshow-container">
      <div class="header__bg__imgs-container">
        <div class="header__bg__imgs__item"></div>
        <div class="header__bg__imgs__item"></div>
        <div class="header__bg__imgs__item"></div>
        <div class="header__bg__imgs__item"></div>
      </div>
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
      <div class="share_box__container">
        <div class="share_box">
          <input type="checkbox" id="share_button" />
          <label for="share_button">
            <span class="sharebtn">
              +
              <!-- <i class="fas fa-plus"></i> -->
            </span>
          </label>

          <div class="share_box__paragraph_wrapper">
            <p>share</p>
          </div>
          <div class="sm_list">
            <a class="media_icon" href="#instagram" class="instagram">
              <i class="fab fa-instagram"></i>
            </a>
            <a class="media_icon" href="#linkedin" class="linkedin">
              <i class="fab fa-linkedin-in"></i>
            </a>
            <a class="media_icon" href="#whatsapp" class="whatsapp">
              <i class="fab fa-whatsapp"></i>
            </a>
            <a class="media_icon" href="#facebook" class="facebook">
              <i class="fab fa-facebook-f"></i>
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>

  <main class="main">
   
    <div class="the-sections" id="the-sections">
    </div>
  </main>

  <script src="https://widget.taggbox.com/embed-lite.min.js" type="text/javascript"></script>
  <script src="https://kit.fontawesome.com/704ff50790.js" crossorigin="anonymous"></script>
</body>

</html>

<?php
get_footer();
?>