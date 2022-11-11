
<?php get_header();?>

<div class="container">
    <section class="post-content">
        <article class="entry-item expo-heading">
            <div class="entry-header">
                <h2 class="entry-title"><?php the_title() ?></h2>
                <div class="expo-heading__desc">
                    <p><?php echo carbon_get_post_meta(get_the_ID(), 'crb_expo_date'); ?></p>
                    <p><?php echo carbon_get_post_meta(get_the_ID(), 'crb_expo_city'); ?></p>
                </div>
            </div>
            <?php the_content(); ?>
            <ul class="expo__members">

            <?php 
            if($expo_content = carbon_get_post_meta(get_the_ID(), 'expo_dogs')){
              foreach ($expo_content as $expo_content_item){
                ?>
            
                <li>
                 <div class="expo__members__tituls">
                    <?php
                    $expo_position = $expo_content_item['crb_position'];
                    $expo_titule = $expo_content_item['crb_expo_title'];
                    $expo_dog = carbon_get_post_meta( get_the_ID(), 'expo_dogs');
                    ?>
                        <p class="expo__members__tituls__position"><?php echo $expo_position; ?></p>
                        <p class="expo__members__tituls__title"><?php echo $expo_titule; ?></p>
                </div>
              
               
                
                <?php 
                     $association_expo = $expo_content_item['crb_association_expo'];
                     if(!empty($association_expo)){
                        ?>
                        <div class="expo__members__cards">
                        <?php
                      $id = wp_list_pluck($association_expo, 'id');
                      
                      $args = array(
                        'post_type' => 'dogs',
                        'post__in' => $id,
                      );
                      $query = new WP_Query($args);
                        if ( $query->have_posts() ) {
                          while ( $query->have_posts() ) { $query->the_post();
                           get_template_part('parts/mini-dog-card');
                          } 
                        }
                        ?>
                         </div></li>
                         <?php
                     }
                          ?>  
      
                <?php }
                } ?>          
                </ul>
        </article>
    </section>
</div>