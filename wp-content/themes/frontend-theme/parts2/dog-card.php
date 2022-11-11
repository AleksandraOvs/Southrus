<div class="dog-card">
    <!-- <div class="dog-card__summary">     -->
        <a href="<?php the_permalink();?>">
            <div class="thumb-img">
                <?php if(has_post_thumbnail() ) : ?>
                <?php the_post_thumbnail('dogpic') ?>
                <?php else: ?>
                    <div class="img-placeholder"></div>
                <?php endif; ?>
            </div>
            <div class="photo_capture"><p><?php echo carbon_get_the_post_meta('photo_autor');?></p></div>
        </a>
        <div class="dog-card__summary__info">
            <h5 class="h5-heading"><?php echo carbon_get_the_post_meta('dog_name');?></h5>
            <p class="single-dog__card__info__p"><span>Родословная:</span><?php echo carbon_get_the_post_meta('dog_genealogy');?></p>
            <p class="single-dog__card__info__p"><span>Клеймо/чип: </span><?php echo carbon_get_the_post_meta('dog_mark');?></p>
            <p class="single-dog__card__info__p"><span>Дата рождения: </span><?php echo carbon_get_the_post_meta('dog_birthday');?></p>
            <p class="single-dog__card__info__p"><span>Окрас: </span><?php echo carbon_get_the_post_meta('dog_color');?></p>
        </div>
        

    <!-- </div> -->

</div>
        
            
         