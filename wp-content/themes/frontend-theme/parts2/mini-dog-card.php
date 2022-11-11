<article class="mini__dog-card">
    <div class="mini__dog-card__img">
        <a href="<?php the_permalink();?>">
            <div class="thumb-img">
                <?php if(has_post_thumbnail() ) : ?>
                <?php the_post_thumbnail('dogpic') ?>
                <?php else: ?>
                    <div class="img-placeholder"></div>
                <?php endif; ?>
            </div>
        </a>
    </div>

    <div class="mini__dog-card__info">
        <h4 class="h4-heading"><?php echo carbon_get_the_post_meta('dog_name');?></h4>
        <p class="single-dog__card__info__p"><span>Дата рождения:</span><?php echo carbon_get_the_post_meta('dog_birthday');?></p>
        <?php 
            $dogs_date_death = carbon_get_the_post_meta('dog_death');
                if (!empty ($dogs_date_death)):
        ?>
        <p class="single-dog__card__info__p"><span>Дата смерти: </span><?php echo carbon_get_the_post_meta('dog_death');?></p>
                    <?php
                    endif;
                    ?>
        <p class="single-dog__card__info__p"><span>Клеймо/чип:</span><?php echo carbon_get_the_post_meta('dog_mark');?></p>

    </div>

</article>
        
            
         