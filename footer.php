<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package nomme_nkkwp
 */

?>

	<footer id="colophon" class="site-footer">


	<div class="footer-area main-container">
		
		
		
		
		<div class="separate-footer-parts">
			<h2 class="">KONTAKTID</h2>
			<div>

				
				<ul class="no-disc" >	
					<li><?php the_field('nimi',  'option'); ?></li>
					<li><?php $phone = the_field('telefon', 'option'); ?><a href="tel:<?php echo $phone; ?>"><?php echo $phone; ?></a></li>
				</ul>
			</div>
			<div>

				<ul class="no-disc">	
					<li><?php the_field('email',  'option'); ?></li>
	
					<li><?php the_field('aadress',  'option'); ?></li>
				</div>
			</ul>
		</div>
	


			

</div>
		<div class="copyright">
		Copyright &copy; <?php echo date("Y"); ?> | Made by Marje Mee | All Rights Reserved | <a href="#"> Terms and Conditions</a>
		</div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
