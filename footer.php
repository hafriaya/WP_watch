<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package watch
 */

?>
<footer class="footer">
	<div class="footer__details_container">
		<div class="footer__detail footer__detail__contact">
			<h3>Contact Info</h3>
			<p>Phone: +4 (509) 120 6705</p>
			<p>
				Address: 1418 Riverwood Drive, Suite 3245 Cottonwood, CA 96052,
				United State
			</p>
			<div class="payments_datail">
				<p>We accept:</p>
				<img src="<?php echo get_template_directory_uri() . '/assets/images/icon/mastercard_inverse.png' ?>" alt="mastercard_inverse" />
				<img src="<?php echo get_template_directory_uri() . '/assets/images/icon/jcb_inverse.png' ?>" alt="jcb_inverse" />
				<img src="<?php echo get_template_directory_uri() . '/assets/images/icon/paypal_inverse.png' ?>" alt="paypal_inverse" />
				<img src="<?php echo get_template_directory_uri() . '/assets/images/icon/visa_inverse.png' ?>" alt="visa_inverse" />
				<img src="<?php echo get_template_directory_uri() . '/assets/images/icon/amazon_inverse.png' ?>" alt="amazon_inverse" />
			</div>
		</div>
		<div class="footer__detail footer__detail__help">
			<h3>Get Help</h3>
			<p>Delivery Information</p>
			<p>Sale Terms & Conditions</p>
			<p>Returns & Refunds</p>
			<p>Privacy Notice</p>
			<p>Shopping FAQs</p>
		</div>
		<div class="footer__detail footer__detail__categories">
			<h3>Popular Categories</h3>
			<p>Coats (45)</p>
			<p>Jeans (278)</p>
			<p>Tops (64)</p>
			<p>Sweaters (129)</p>
			<p>Jackets (3)</p>
		</div>
		<div class="footer__detail footer__detail__subscribe">
			<h3>Let’s stay in touch</h3>
			<form class="subscribe_form" action="mailto:seoulify@gmail.com" method="get">
				<input id="subscribe_input" type="email" name="email" placeholder="your email address" required />
				<button id="subscribe_btn" type="submit">Subscribe</button>
			</form>
			<p>Keep up to date with our latest news and special offers.</p>
		</div>
	</div>
	<div class="website_signature">
		<div class="website__copyright">
			<p>© 2019, Seoulify Website. Made with passion</p>
		</div>
		<div class="website__rights">
			<p>All Rights Reserved.</p>
		</div>
	</div>
</footer>

<?php wp_footer(); ?>

<script src="https://widget.taggbox.com/embed-lite.min.js" type="text/javascript"></script>
<script src="https://kit.fontawesome.com/704ff50790.js" crossorigin="anonymous"></script>
</body>

</html>