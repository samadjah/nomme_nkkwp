<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package nomme_nkkwp
 */

get_header();
?>

	<main id="primary" class="site-main">

		<?php if ( have_posts() ) : ?>

			<header class="page-header">
				<?php
	// kasseesiin et me ei taha rubriigi nime sinna tilpnema, koristasin ära vaata keepist jargi
				?> 
			</header><!-- .page-header -->

			<?php
			/* Start the Loop */
			while ( have_posts() ) :
				the_post();

				/*
				 * Include the Post-Type-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Type name) and that will be used instead.
				 */
				//get_template_part( 'template-parts/content', get_post_type() );
				?>

				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					<div class="main-container">

					
						
						<header class="entry-header">
						
						
						<a href="<?php the_permalink();?>"><?php the_title( '<h1 class="entry-title">', '</h1>' ); ?></a>
						</header><!-- .entry-header -->
						
						<?php nomme_nkkwp_post_thumbnail(); ?>
						
						<div class="entry-content">
							<?php the_content(); ?>
							  
						</div>

					</div><!-- .entry-content -->
				</article><!-- #post-<?php the_ID(); ?> --> 

			<?php	

			endwhile;

			the_posts_navigation();

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif;
		?>

	</main><!-- #main -->

<?php

get_footer();
