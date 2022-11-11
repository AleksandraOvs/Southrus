<article class="mini__dog-card">
    <div class="mini__dog-card__img">
        <a href="<?php the_permalink();?>">
            <div class="thumb-img">
                <?php if(has_post_thumbnail() ) : ?>
                <?php the_post_thumbnail('smallpic') ?>
                <?php else: ?>
                    <div class="img-placeholder"></div>
                <?php endif; ?>
            </div>
        </a>
    </div>

    <div class="mini__dog-card__info">
        <h5 class="h5-heading"><?php echo carbon_get_the_post_meta('dog_name');?></h5>
        <p class="single-dog__card__info__p"><?php echo carbon_get_the_post_meta('dog_birthday');?></p>
        <p class="single-dog__card__info__p"><?php echo carbon_get_the_post_meta('dog_mark');?></p>
    </div>

</article>
        
            
         