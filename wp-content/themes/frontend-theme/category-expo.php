<?php
/**
* Template for expo-page
*/
get_header(); ?>
	
 <!-- Content -->
<section class="post-content">
      <!-- post content -->
      <h1><?php single_cat_title() ?></h1>
    <?php if(have_posts() ) :?>
        <!-- list posts -->
            <?php while( have_posts() ): the_post(); ?>
            <!-- <a class="expo-list__link" href="<?php //the_permalink(); ?>"> -->
            <ul class="posts__list expo">
            <li class="posts__list__item">
                <p><?php echo carbon_get_post_meta(get_the_ID(), 'crb_expo_date');?></p></li>
            <li class="posts__list__item">
            <a href="<?php the_permalink();?>"><?php the_title();?></a>
            <li class="posts__list__item location">
                <p><?php echo carbon_get_post_meta(get_the_ID(), 'crb_expo_city');?></p>
                <p><?php echo ' (' . carbon_get_post_meta(get_the_ID(), 'crb_expo_country') . ')';?></p>
            </li>
            <li class="posts__list__item">
                <p><?php echo carbon_get_post_meta(get_the_ID(), 'crb_expo_status');?></p></li>
            <li class="posts__list__item">
                <p><?php echo carbon_get_post_meta(get_the_ID(), 'crb_expo_expert');?></p></li>
             </ul> <!-- end grid posts -->
             </a>
            <?php endwhile;?>

   
        
        <?php else :?>
            <p>В этой рубрике постов нет.</p>
        <?php endif; ?>
</section>      

<?php get_footer();?>