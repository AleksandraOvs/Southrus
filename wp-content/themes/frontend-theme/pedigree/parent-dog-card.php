<?php 
$color = carbon_get_post_meta(get_the_ID(), 'card_color');
?>
<div class="parent-dog__card">
    <ul class="parent-dog__card__list">
        <li class="parent-dog__card__list__item" ">
            <div class="pedigree__card-dog" style="background-color: <?php if (!empty($color)): echo $color; endif;?>;">
                <a href="<?php the_permalink();?>">
                    <div class="thumb-img">
                        <?php if(has_post_thumbnail() ) : ?>
                        <?php the_post_thumbnail('mediumpic') ?>
                        <?php else: ?>
                        <div class="img-placeholder"></div>
                    <?php endif; ?>
                    </div>
                    <!-- <div class="photo_capture"><p><?php //echo carbon_get_the_post_meta('photo_autor');?></p></div> -->
                </a>
                <div class="dog-card__summary__info">
                    <h5 class="h5-heading"><?php echo carbon_get_the_post_meta('dog_name');?></h5>
                    <p class="single-dog__card__info__p"><span>Родословная:</span><?php echo carbon_get_the_post_meta('dog_genealogy');?></p>
                    <p class="single-dog__card__info__p"><span>Клеймо/чип: </span><?php echo carbon_get_the_post_meta('dog_mark');?></p>
                    <p class="single-dog__card__info__p"><span>Дата рождения: </span><?php echo carbon_get_the_post_meta('dog_birthday');?></p>
                    <p class="single-dog__card__info__p"><span>Окрас: </span><?php echo carbon_get_the_post_meta('dog_color');?></p>
                </div>
            </div>
        </li>

        <li class="parent-dog__card__list__item">
        <?php
        $mommy = carbon_get_the_post_meta( 'crb_association_mommy');
        if(!empty($mommy)){
            $id_m = wp_list_pluck( $mommy, 'id' );

            $args = array(
                'post_type' => 'dogs',
                'post__in' => $id_m,
            );
            $query = new WP_Query($args);
            if ( $query->have_posts() ) {
             
                    while ( $query->have_posts() ) { $query->the_post();
                        get_template_part('pedigree/mini-dog-card'); 
                    }
            }
            wp_reset_postdata();

        }else{
            ?>
                <div class="mini__dog-card empty-card">
                    <p>Информация отсутствует</p>
                </div>
            <?php
        }
    ?>

<?php
        $dad = carbon_get_the_post_meta( 'crb_association_daddy');
        if(!empty($dad)){
            $id_d = wp_list_pluck( $dad, 'id' );

            $args = array(
                'post_type' => 'dogs',
                'post__in' => $id_d,
            );
            $query = new WP_Query($args);
            if ( $query->have_posts() ) {
             
                    while ( $query->have_posts() ) { $query->the_post();
                        get_template_part('pedigree/mini-dog-card'); 
                    }
            }
            wp_reset_postdata();

        }
    ?>
    
        </li>


    </ul>
      
</div>
