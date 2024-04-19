<?php

$shipping_details_paragraph = get_sub_field('shipping_details_paragraph');
$details_link_text = get_sub_field('details_link_text');
$details_link = get_sub_field('details_link');

?>

<div class="main__shipping-details">
    <img id="shipping-details__ios-airplane" src="<?php echo get_template_directory_uri() . '/assets/images/icon/ios-airplane.png' ?>" alt="ios-airplane" />
    <p>
        <?php echo $shipping_details_paragraph ?>
        <a href="<?php echo $details_link ?>"><?php echo $details_link_text ?></a>
    </p>
</div>