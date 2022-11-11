

                        <li class="pedigree-article__list-parents__item__gparents__item">
                            <?php get_template_part('parts/mini-dog-card'); ?>

                            <?php
        $preparents = carbon_get_the_post_meta( 'crb_association_parents');
        if(!empty($preparents)){
            $ids = wp_list_pluck( $preparents, 'id' );

            $args = array(
                'post_type' => 'dogs',
                'post__in' => $ids,
            );
            $query = new WP_Query($args);
            if ( $query->have_posts() ) {
                echo '<ul class="preparents__list">';
                    while ( $query->have_posts() ) { $query->the_post();
                        //get_template_part('parts/grandparents'); 
                        ?>
                        <li class="preparents">
                        <?php //get_template_part('parts/mini-dog-card'); ?>
                            <a href="<?php the_permalink();?>">
                                <div class="thumb-img">
                                    <?php if(has_post_thumbnail() ) : ?>
                                    <?php the_post_thumbnail('smallpic') ?>
                                    <?php else: ?>
                                        <div class="img-placeholder"></div>
                                    <?php endif; ?>
                                </div>
                            </a>

                            <div class="preparents__info">
                          <h5 class="single-dog__card__ingo__p__name"><?php echo carbon_get_the_post_meta('dog_name');?></h5>
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
                        </li>
                        <?php
                    }
                echo '</ul>';
            }
            wp_reset_postdata();

        }
    ?>
                        </li>