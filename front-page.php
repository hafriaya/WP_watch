<?php

/**
 * Template Name: Home 
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package watch
 */

get_header();


get_template_part('template-parts/content/hero', 'slider');



?>

<main class="main">



    <?php

    if (have_rows('flexible_content')) :

        while (have_rows('flexible_content')) : the_row();

            if (get_row_layout() == 'shipping_details') :
                // Echo shipping_details Section
                get_template_part('template-parts/flexible-content/fc--shipping-details');
    ?>
                <br />
                <div class="the-sections" id="the-sections">
                <?php

            elseif (get_row_layout() == 'collection_section') :
                // Echo collection Section
                get_template_part('template-parts/flexible-content/fc--collection-section');
                ?>
                    <br />
                <?php
            elseif (get_row_layout() == 'new_arrival_section') :
                // Echo new_arrival Section
                get_template_part('template-parts/flexible-content/fc--new-arrival-section');
                ?>
                    <br />
                <?php
            elseif (get_row_layout() == 'horror_section') :
                // Echo horror_section Section
                get_template_part('template-parts/flexible-content/fc--horror-section');
                ?>
                    <br />
                <?php
            elseif (get_row_layout() == 'insta_posts_section') :
                // Echo insta-posts Section
                get_template_part('template-parts/flexible-content/fc--insta-posts-section');
                ?>
                    <br />
                <?php
            elseif (get_row_layout() == 'fashion_section') :
                // Echo fashion_section Section
                get_template_part('template-parts/flexible-content/fc--fashion-section');
                ?>
                    <br />
                <?php
            elseif (get_row_layout() == 'properties_section') :
                // Echo Properties Section
                get_template_part('template-parts/flexible-content/fc--properties-section');
                ?>
                    <br />

        <?php

            endif;

        endwhile;


    else :
        echo 'no flexible content found';
    endif;
        ?>

                </div>
</main>



<?php

get_footer();
