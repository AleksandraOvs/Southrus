<?php
/**
* The main template file
*/
get_header(); ?>
      <!-- Content -->
      <section>
			<?php if(have_posts() ): 
				while (have_posts() ): the_post();		
						get_template_part('entry');
				endwhile;
				endif;
			?>
<?php get_footer(); ?>