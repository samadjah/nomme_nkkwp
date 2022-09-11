<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package nomme_nkkwp
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header recepy-blokc">
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
		</header><!-- .entry-header -->

		<?php nomme_nkkwp_post_thumbnail(); ?>

		<div class="entry-content">
		<section class="recepy-blokc">
	


				<?php the_content(); ?>
				
	
			</section>
			
			
		</div><!-- .entry-content -->
	

</article><!-- #post-<?php the_ID(); ?> -->
