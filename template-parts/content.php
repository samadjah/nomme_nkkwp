<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package nomme_nkkwp
 */

?>


<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php
		if ( is_singular() ) :
			the_title( '<h1 class="entry-title">', '</h1>' );
		else :
			the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
		endif;

		if ( 'post' === get_post_type() ) :
			?>
			<div class="entry-meta">
				
				<?php
				nomme_nkkwp_posted_on();
				nomme_nkkwp_posted_by();
				?>
			</div><!-- .entry-meta -->
		<?php endif; ?>
	</header><!-- .entry-header -->

	<?php nomme_nkkwp_post_thumbnail(); ?>
	
<!-- panin mustandisse kalkulaatori -->

<div class="entry-content">
		<?php
		the_content(
			sprintf(
				wp_kses(
					/* translators: %s: Name of current post. Only visible to screen readers */
					__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'nomme_nkkwp' ),
					array(
						'span' => array(
							'class' => array(),
						),
					)
				),
				wp_kses_post( get_the_title() )
			)
		);

		wp_link_pages(
			array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'nomme_nkkwp' ),
				'after'  => '</div>',
			)
		);
		
		?>




<!-- <script>
	function myltiply(){
    let one = document.querySelector('.kordaja').value;
    let two = document.querySelector('.kordaja2').value;
    let tootal = parseFloat(one)*parseFloat(two)
    document.querySelector('.total').value = tootal;
  
 }
</script> -->

<!--inputdiv for helping solve calculation temporary -->
<!-- <div style="margin:auto; width: 300px; background-color:lightblue; padding: 5px;">
	<label for="">Kogused x:</label>
	<input Type="text" name="" class="kordaja" value="0" onchange="changeNumber()"><br>

</div> -->



	  

		
<?php
		// Check rows exists. Recepy block started
if( have_rows('detailid_2') ):  ?>
<section class="teine-pool">
	
	<header class="retseptipealkiri_2">
	<?php
// Loop through rows.
while( have_rows('detailid_2') ) : the_row(); ?>
	<?php the_sub_field('detailid_header_2'); ?>
	</header>			

<?php endwhile; ?>
<?php
// No value.
else :
	// Do something...
endif; ?>



	<?php
// Check rows exists.
if( have_rows('ingredients_2') ):  ?>
<!-- <section class="esimene-pool"> -->

	<div class="reteptid-ritta_2">
		<ul class="ainete-kirjeldus">
			<?php
    // Loop through rows.
    while( have_rows('ingredients_2') ) : the_row();?>
	<li class="loetelu">	
		
		<span class="yhikud"><?php the_sub_field('kogus_2'); ?></span>

		<?php the_sub_field('uhik_2'); ?>
		<?php the_sub_field('tekst_2'); ?>
	</li>	

	
    <?php endwhile; ?>
</ul>
</div> 
<?php
// No value.
else :
    // Do something...
endif; ?>



<?php
// Check rows exists.
if( have_rows('detailid_2') ):  ?>
	    <div class="reteptid-kirja_2">
			<ul class="ainete-kirjeldus">

				
				<?php	
    // Loop through rows.
    while( have_rows('detailid_2') ) : the_row(); ?>
		<li>	

			<?php 	the_sub_field('detailid_body_2'); ?>
			
				
				</li>			

<?php endwhile; ?>
</ul>
</div> 
<?php
// No value.
else :
	// Do something...
endif; ?>



<!-- <script>
	function myltiply(){
    let one = document.querySelector('.kordaja').value;
    let two = document.querySelector('.kordaja2').value;
    let tootal = parseFloat(one)*parseFloat(two)
    document.querySelector('.total').value = tootal;
  
 }
</script> -->
<!-- 
<script>
		function tuttuluttu_tutuu() {
		console.log("Ma ei tea, mida enam teha.");
		
	}
		</script> -->

<script>

// 			const kordaja = 2;
// 			const multiply = number => number * kordaja;

// 			function changeNumber() {
// 				/* 	const myNodeList = document.querySelector(".solo").textContent;
// 				console.log(myNodeList);
// 				console.log(multiply(myNodeList));
//  */
// 				const myNodeList = document.querySelectorAll(".yhikud");

// 				for (let i = 0; i < myNodeList.length; i++) {
// 					console.log(myNodeList[i].textContent);				
// 					let result= multiply(myNodeList[i].textContent);
// 					console.log(result);
// 					myNodeList[i].textContent = result
// 					console.log(myNodeList[i].textContent);
// 				}
				
// 			};
			// event.currentTarget.reset();// ei se eikka oli midagi muud ei sobi ja vaata sul kordaja ei muutu,  2 on seega  topi mis nr sisse tahad ikak 2
			



		// const number = parseInt(prompt('Enter an integer: ')); -->
		// function changeNumber(className) {
		// 	const myNodelist = document.querySelectorAll(".yhikud");
		// 	for (let i = 0; i < myNodelist.length; i++) {
			
		// 		console.log(myNodeList[i].textContent);}


// 			myNodelist[i].style.color = "red";
// 			myNodelist[i].span.value;
// 				console.log(myNodelist[i]);
// }



// 			if(document.querySelectorAll('.yhikud').length) {
//     alert("The element exists");
// }
// else {
//     alert("The element does not exist");
// }
// 			for (let ele of numbrimuutus) {
			
// 				console.log(ele);

			
		// 	 foreach (numbrimuutus as $arvuke) {
		// 		$summa = parseInt(numbrimuutus * 2);

		// 	 }
			
		// console.log(numbrimuutus);
		// console.log(summa);
		// for (let item of list) {
    	// console.log(item)};
//  }
		</script> 
	


</section><!-- recipy plock ending -->






		<!-- time to calculate block starting -->
	

<section class="time-tabel_units">
	
	<?php
	// Check rows exists.
	if( have_rows('time_to_calculate') ):  ?>
	<!-- <section class="esimene-pool"> -->
	
		<div class="time-box">
			<ul class="time-listing">
				<?php
		// Loop through rows.
		while( have_rows('time_to_calculate') ) : the_row();?>
		<li>	
			
			<span><?php the_sub_field('preparation'); ?></span>
			<?php the_sub_field('time-number'); ?>
			<?php the_sub_field('time-unit'); ?>
		</li>	
	
		
		<?php endwhile; ?>
	</ul>
	</div> 
	<?php
	// No value.
	else :
		// Do something...
	endif; ?>
	
	</section>
	
		
	<!-- time to calculate block ending -->








		
		
	</div><!-- .entry-content -->

<!-- 	<footer class="entry-footer">
		<?php //nomme_nkkwp_entry_footer(); ?>
	</footer> --><!-- .entry-footer -->
</article><!-- #post-<?php the_ID(); ?> -->
