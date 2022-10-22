<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package marjewp
 */

get_header();
?>

	<main id="primary" class="site-main">

		<?php
		while ( have_posts() ) :
			the_post();
?>
			
            
            
            <article  id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
            
                <?php if( get_field('cover_image') ): ?>
                <img class="cover-img-position" src="<?php the_field('cover_image'); ?>" />
                <?php endif; ?>
                <div class="main-container">


		
			
		<div class="entry-content">
			<?php the_content(); ?>

            <div>

                <?php

$posts = get_posts( array(
    'meta_query' => array(
        array(
            'key'   => 'vali_maa',
            'value' => 'esimene',
            'key'   => 'vali_maa',
            'value' => 'teine',
            'key'   => 'vali_maa',
            'value' => 'kolmas',
            )
            )
            ) );
            
            if( $posts ) {
                
                // Do something.
            }
            ?>

</div>


            <?php 
   // the query   päring   
   $the_query = new WP_Query( array(
       
       // otsime 2 postitust   kui on  postitusi siis kuva
      'posts_per_page' => 9,
   )); 
?>

<?php if ( $the_query->have_posts() ) : ?> 

    <div class="">
        <ul class=" readmore-news">
  <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
  

        <li>
                
            <div class="post-box">         
                              
                    <?php the_post_thumbnail(); // siit algavad kuvanõuded, mida on vaja  näidata see on pilt ?> 
               
                      
                <div class="post-content">             
                    <div class="time-display">          
                    <?php the_date(); // siit algavad kuvanõuded, mida on vaja  näidata see on kuupäev ?>
                    </div>  
                    <div ><a class=" news-button" href="<?php the_permalink(); ?>">    
                        <?php the_title('<h3 class="post-title">', '</h3>' ); // siit algavad kuvanõuded, mida on vaja  näidata see on pealkiri?>
                        
                        
                        
                        <?php the_excerpt();// mida on vaja  näidata see on lühikirjeldus, määra wordpressis ära, mitut sõna näitab artikli alt ?>
                    
                   <div class="news"><a class=" news-button" href="<?php the_permalink(); ?>">Read more</a>
                 
                   </a></div> 
                
                 
            </div> 
            
        </li>
        
      
        
        
        <?php endwhile; ?>
    </ul>
</div>   
  <?php wp_reset_postdata(); ?>

<?php else : ?>
  <p><?php __('No News'); ?></p>
<?php endif; ?>
		</div>








	</div><!-- .entry-content -->
</article><!-- #post-<?php the_ID(); ?> -->


<?php
		endwhile; // End of the loop.
		?>

	</main><!-- #main -->

<?php

get_footer();
