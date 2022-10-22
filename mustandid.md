

<!-- time to calculate block starting -->
	

<section onload="multiply();" class="time-tabel_units">
	
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