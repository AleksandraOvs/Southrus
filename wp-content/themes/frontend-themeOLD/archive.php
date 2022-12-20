<?php
/**
* The main template file
*/
get_header(); ?>
      <!-- Content -->
      <section class="flex">
        <h1>Все записи</h1>
			<?php if(have_posts() ): 
				while (have_posts() ): the_post();		
						get_template_part('entry');
				endwhile;
				endif;
			?>
<?php get_footer(); ?>