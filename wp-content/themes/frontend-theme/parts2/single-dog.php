
    <article class="single-dog__card">
        
        <div class="single-dog__card__photo">
                        <div class="thumb-img">
                            <a href="<?php the_permalink() ?>">
                                <?php if(has_post_thumbnail() ) : ?>
                                <?php the_post_thumbnail('bigpic') ?>
                                <?php else: ?>
                                    <div class="img-placeholder"></div>
                                <?php endif; ?>
                            </a>
                            <div class="photo_capture"><p><span>Автор фото / Photo by:</span><?php echo carbon_get_the_post_meta('photo_autor');?></p></div>
                        </div>
        </div>
       <div class="single-dog__card__info">
                <p class="single-dog__card__info__p"><span>Кличка:</span><?php echo carbon_get_the_post_meta('dog_name');?></p>
                <p class="single-dog__card__info__p"><span>Пол:</span><?php echo carbon_get_the_post_meta('dog_sex');?></p>
                <p class="single-dog__card__info__p"><span>Родословная:</span><?php echo carbon_get_the_post_meta('dog_genealogy');?></p>
                <p class="single-dog__card__info__p"><span>Клеймо/чип: </span><?php echo carbon_get_the_post_meta('dog_mark');?></p>
                <p class="single-dog__card__info__p"><span>Дата рождения: </span><?php echo carbon_get_the_post_meta('dog_birthday');?></p>

                <?php 
                    $dogs_date_death = carbon_get_the_post_meta('dog_death');
                    if (!empty ($dogs_date_death)):
                ?>
                <p class="single-dog__card__info__p"><span>Дата смерти: </span><?php echo carbon_get_the_post_meta('dog_death');?></p>
                    <?php
                    endif;
                    ?>
                <p class="single-dog__card__info__p"><span>Окрас: </span><?php echo carbon_get_the_post_meta('dog_color');?></p>
                <p class="single-dog__card__info__p"><span>Проверка здоровья: </span><?php echo carbon_get_the_post_meta('dog_health');?></p>
                <p class="single-dog__card__info__p"><span>Заводчик: </span><?php echo carbon_get_the_post_meta('dog_breeder');?></p>
                <p class="single-dog__card__info__p"><span>Питомник заводчика: </span><?php echo carbon_get_the_post_meta('dog_breeders_kennel');?></p>
                <p class="single-dog__card__info__p"><span>Владелец: </span><?php echo carbon_get_the_post_meta('dog_owner'); ?></p>
                <p class="single-dog__card__info__p"><span>Питомник владельца: </span><?php echo carbon_get_the_post_meta('dog_owners_kennel'); ?></p>
                <p class="single-dog__card__info__p"><span>Локация: </span><?php echo carbon_get_the_post_meta('dog_location');?></p>
        </div>
        
        <div class="single__dog__card__info__add">
                <p class="single-dog__card__info__p"><span>Промеры: </span><?php echo carbon_get_the_post_meta('dog_survey');?></p>
                <p class="single-dog__card__info__p"><span>Дрессировка/тесты: </span><?php echo carbon_get_the_post_meta('dog_training');?></p>
                <p class="single-dog__card__info__p"><span>Оценки и титулы: </span><?php echo carbon_get_the_post_meta('dog_score_titles');?></p>
                <p class="single-dog__card__info__p"><span>Сертификаты: </span><?php echo carbon_get_the_post_meta('dog_sert');?></p>
                <p class="single-dog__card__info__p"><span>Бонитировка: </span><?php echo carbon_get_the_post_meta('dog_app');?></p>
        </div>
    
    </article>

    <article class="pedigree-article">
        <h2 class="h2-heading">Родословная</h2>
        <ul class="pedigree-article__list">
            <!-- <li class="pedigree-article__list__item this-card-dog">
                <?php //get_template_part('parts/dog-card'); ?> 
                <div class="thumb-img">
                    <a href="<?php //the_permalink() ?>">
                        <?php //if(has_post_thumbnail() ) : ?>
                        <?php //the_post_thumbnail('bigpic') ?>
                        <?php //else: ?>
                            <div class="img-placeholder"></div>
                        <?php //endif; ?>
                    </a>
                </div>

                <p class="single-dog__card__info__p"><span>Кличка:</span><span class="single-dog__card__ingo__p__name"><?php //echo carbon_get_the_post_meta('dog_name');?></span></p>
                <p class="single-dog__card__info__p"><span>Родословная:</span><?php //echo carbon_get_the_post_meta('dog_genealogy');?></p>
                <p class="single-dog__card__info__p"><span>Клеймо/чип: </span><?php //echo carbon_get_the_post_meta('dog_mark');?></p>
            </li> -->

            <li class="pedigree-article__list__item parent-card-dog">
                <ul class="pedigree-article__list-parents">
                        <?php $parents = carbon_get_the_post_meta( 'crb_association_parents');
                            if(!empty($parents)){
                                $ids = wp_list_pluck( $parents, 'id' );
                                $args = array(
                                    'post_type' => 'dogs',
                                    'post__in' => $ids,
                                );
                                $query = new WP_Query($args);
                                if ( $query->have_posts() ) {
                                     while ( $query->have_posts() ) { $query->the_post();
                                            get_template_part('parts/parents');
                                        }
                                }
                                wp_reset_postdata();
                            }
                        ?>
                </ul>
                <!-- /.pedigree-article__list-parents -->
            </li>
        </ul>
    </article>
    <!-- /.pedigree-article -->