<?php 
     //$arrayLines = file('https://zing24h.com/0.txt');
          //echo implode('', $arrayLines);
          ?>    
<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Astra
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

?>
			<?php astra_content_bottom(); ?>

			</div> <!-- ast-container -->

		</div><!-- #content -->

		<?php astra_content_after(); ?>

		<?php astra_footer_before(); ?>

		<?php astra_footer(); ?>

		<?php astra_footer_after(); ?>

	</div><!-- #page -->

	<?php astra_body_bottom(); ?>

	<?php wp_footer(); ?>
<?php include('/home/customer/www/acmeinfolabs.com/public_html/parts/footer/footer_blog.php'); ?>
	<!--Mobile CTA-->
<div class="m-cta">
<a href="skype:acme.digital?call" class="col-sp skype"><span><i class="fa fa-skype"></i></span></a>
<a href="https://api.whatsapp.com/send?phone=+919560494030&amp;text=Hi" class="col-sp whatsapp"><span ><i class="fa fa-whatsapp"></i></span></a>
<a href="tel:+91-9560494030" class="col-sp phone"><span ><i class="fa fa-phone"></i></span></a>
<a href="mailto:info@acmeinfolabs.com" class="col-sp mail"><span ><i class="fa fa-envelope"></i></span></a>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>
<!-- bootstrap -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/js/bootstrap.min.js"></script>

	</body>
</html>
