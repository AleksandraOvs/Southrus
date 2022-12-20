<?php 
$color = carbon_get_post_meta(get_the_ID(), 'card_color');
?>

<div class="pedigree__card-dog mini-card" style="background-color: <?php if (!empty($color)): echo $color; endif;?>;">
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

        <?php $field_dog_mark = carbon_get_the_post_meta('dog_mark'); 
                if (!empty($field_dog_mark)) : ?>
                <p class="single-dog__card__info__p"><span>Клеймо/чип: </span><?php echo $field_dog_mark; ?></p>
                <?php endif; ?>

    </div>

                </div>
        
            
         