<?php
/*
Архивная страница выставок
*/
?>
<?php get_header();?>

 <!-- Content -->
<section class="post-content">
      <!-- post content -->
    
        <h1>Архив выставок</h1>
        <?php //echo category_description()?>
      
    <?php if(have_posts() ) :?>
        <!-- list posts -->
        

            <?php while( have_posts() ): the_post(); ?>
            <a class="expo-list__link" href="<?php the_permalink(); ?>">
            <ul class="posts__list expo">
            <li class="posts__list__item">
                <p><?php echo carbon_get_post_meta(get_the_ID(), 'crb_expo_date');?></p></li>
            <li class="posts__list__item">
                <p class="expo__name"><?php the_title();?></p>
            <li class="posts__list__item location">
                <p><?php echo carbon_get_post_meta(get_the_ID(), 'crb_expo_city');?></p>
                <span>(<?php echo carbon_get_post_meta(get_the_ID(), 'crb_expo_country');?>)</span>
            </li>
            <li class="posts__list__item">
                <p><?php echo carbon_get_post_meta(get_the_ID(), 'crb_expo_status');?></p></li>
            <li class="posts__list__item">
                <p><?php echo carbon_get_post_meta(get_the_ID(), 'crb_expo_expert');?></p></li>
            
            <?php //get_template_part( 'entry' ) ?>
            <?php //get_template_part( 'entry', 'kjhkjhhk' ) ?>
             </ul> <!-- end grid posts -->
             </a>
            <?php endwhile;?>

   
        
        <?php else :?>
            <p>В этой рубрике постов нет.</p>
        <?php endif; ?>
  
    
    <?php //get_sidebar() ?>
</section>      


<?php get_footer();?>