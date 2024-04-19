<?php

$posts_select = get_sub_field('posts_select');
if ($posts_select == 'showPosts') :
    $media_profile_name = get_sub_field('media_profile_name');
    $social_media_link = get_sub_field('social_media_link');

?>

    <section class="the-sections__insta-posts">
        <div class="insta-posts__container">
            <div class="insta-posts__desc">
                <h3 class="sub-heading">Share your style with #Louiserard.</h3>
                <div class="insta-posts__path">
                    <img src="<?php echo get_template_directory_uri() . '/assets/images/icon/logo_insta.png' ?>" alt="logo_insta" />
                    <p>
                        Follow
                        <a href="<?php echo $social_media_link ?>">@<?php echo $media_profile_name ?></a>
                        for inspiration.
                    </p>
                </div>
            </div>
            <div class="insta-posts__slider">
                <div class="taggbox" style="width: 100%; height: 100%" data-widget-id="152254" data-tags="false"></div>
            </div>
        </div>
    </section>
<?php
endif; ?>

