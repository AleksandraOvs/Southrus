<?php
/**
* The main template file
*/
get_header(); ?>
	
<!-- Content -->
<section class="post-content">
   
      <!-- post content -->
   
        <h1><?php single_cat_title() ?></h1>
        <?php //echo category_description()?>
      
    <?php if(have_posts() ) :?>
        <!-- list posts -->
        <ul class="posts__list">

            <?php while( have_posts() ): the_post(); ?>
            
            <li class="posts__list__item"><a href="<?php the_permalink();?>"><?php the_title();?></a></li>
            <?php endwhile;?>
    </ul> <!-- end grid posts -->
        
        <?php else :?>
            <p>В этой рубрике постов нет.</p>
        <?php endif; ?>
    
    <?php //get_sidebar() ?>
</section> 
<?php get_footer(); ?>