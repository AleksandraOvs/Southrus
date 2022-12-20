<?php 
$color = carbon_get_post_meta(get_the_ID(), 'card_color');
?>

<div class="pedigree__card-dog" style="background-color: <?php if (!empty($color)): echo $color; endif;?>;">
        <a href="<?php the_permalink();?>">
            <div class="thumb-img">
                <?php if(has_post_thumbnail() ) : ?>
                <?php the_post_thumbnail('mediumpic') ?>
                <?php else: ?>
                    <div class="img-placeholder"></div>
                <?php endif; ?>
            </div>
        </a>
        <div class="dog-card__summary__info">
            <h5 class="h5-heading"><?php echo carbon_get_the_post_meta('dog_name');?></h5>

            <?php $field_dog_genealogy = carbon_get_the_post_meta('dog_genealogy'); 
                if (!empty($field_dog_genealogy)) : ?>
                <p class="single-dog__card__info__p"><span>Родословная:</span><?php echo $field_dog_genealogy; ?></p>
                <?php endif; ?>

                <?php $field_dog_mark = carbon_get_the_post_meta('dog_mark'); 
                if (!empty($field_dog_mark)) : ?>
                <p class="single-dog__card__info__p"><span>Клеймо/чип: </span><?php echo $field_dog_mark;?></p>
                <?php endif; ?>

                <?php $dogs_date_birth = carbon_get_the_post_meta('dog_birthday');
                if (!empty ($dogs_date_birth)): ?>
                <p class="single-dog__card__info__p"><span>Дата рождения: </span><?php echo $dogs_date_birth; ?></p>
                <?php endif; ?>

                <?php $dogs_color = carbon_get_the_post_meta('dog_color');
                if (!empty ($dogs_color)): ?>
                <p class="single-dog__card__info__p"><span>Окрас: </span><?php echo $dogs_color; ?></p>
                <?php endif; ?>
        </div>
</div>
