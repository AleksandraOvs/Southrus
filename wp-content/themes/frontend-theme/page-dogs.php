<?php
/*
Template Name: Шаблон для page-dog
Template Post Type: dogs
*/
?>
<?php
    $cf_field = 'echo carbon_get_the_post_meta'; ?>
<?php get_header(); ?>

<section class="post-content">
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
                            <?php 
                            $field_photo_autor = carbon_get_the_post_meta('photo_autor');
                            if (!empty($field_photo_autor)):
                            ?>

                            <div class="photo_capture"><span>Photo by:</span><p><?php echo $field_photo_autor; ?></p></div>
                            <?php
                            endif;
                            ?>
                        </div>
        </div>
       <div class="single-dog__card__info">
                <div class="single-dog__card__info__name"><span>Кличка:</span><h3 class="single-dog__card__ingo__p__name"><?php echo carbon_get_the_post_meta('dog_name');?></h3></div>

                <?php $field_dog_sex = carbon_get_the_post_meta('dog_sex'); 
                if (!empty($field_dog_sex)) : ?>
                <p class="single-dog__card__info__p"><span>Пол:</span><?php echo $field_dog_sex; ?></p>
                <?php endif; ?>

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

                <?php $dogs_date_death = carbon_get_the_post_meta('dog_death');
                if (!empty ($dogs_date_death)): ?>
                <p class="single-dog__card__info__p"><span>Дата смерти: </span><?php echo carbon_get_the_post_meta('dog_death');?></p>
                <?php endif; ?>

                <?php
                $dogs_color = carbon_get_the_post_meta('dog_color');
                if (!empty ($dogs_color)): ?>
                    <p class="single-dog__card__info__p"><span>Окрас: </span><?php echo $dogs_color; ?></p>
                    <?php endif; ?>

                <?php $dogs_health = carbon_get_the_post_meta('dog_health');
                if (!empty ($dogs_health)): ?>
                <p class="single-dog__card__info__p"><span>Проверка здоровья: </span><?php echo $dogs_health;?></p>
                <?php endif; ?>

                <?php $dogs_breeder = carbon_get_the_post_meta('dog_breeder');
                if (!empty ($dogs_breeder)): ?>
                <p class="single-dog__card__info__p"><span>Заводчик: </span><?php echo $dogs_breeder;?></p>
                <?php endif; ?>

                <?php $dogs_breeders_kennel = carbon_get_the_post_meta('dog_breeders_kennel');
                if (!empty ($dogs_breeders_kennel)): ?>
                <p class="single-dog__card__info__p"><span>Питомник заводчика: </span><?php echo $dogs_breeders_kennel;?></p>
                <?php endif; ?>
                
                <?php $dogs_owner = carbon_get_the_post_meta('dog_owner');
                if (!empty ($dogs_owner)): ?>
                <p class="single-dog__card__info__p"><span>Владелец: </span><?php echo $dogs_owner; ?></p>
                <?php endif; ?>

                <?php $dogs_owners_kennel = carbon_get_the_post_meta('dog_owners_kennel');
                if (!empty ($dogs_owners_kennel)): ?>
                <p class="single-dog__card__info__p"><span>Питомник владельца: </span><?php echo $dogs_owners_kennel; ?></p>
                <?php endif; ?>

                <?php $dogs_location = carbon_get_the_post_meta('dog_locations');
                if (!empty ($dogs_location)): ?>
                <p class="single-dog__card__info__p"><span>Локация: </span><?php echo $dogs_location;?></p>
                <?php endif; ?>
        </div>
        
        <div class="single__dog__card__info__add">
                <?php $dogs_survey = carbon_get_the_post_meta('dog_survey');
                if (!empty ($dogs_survey)): ?>
                <p class="single-dog__card__info__p"><span>Промеры: </span><?php echo $dogs_survey;?></p>
                <?php endif; ?>

                <?php $dogs_training = carbon_get_the_post_meta('dog_training');
                if (!empty ($dogs_training)): ?>
                <p class="single-dog__card__info__p"><span>Дрессировка/тесты: </span><?php echo $dogs_training;?></p>
                <?php endif; ?>

                <?php $dogs_score_titles = carbon_get_the_post_meta('dog_score_titles');
                if (!empty ($dogs_score_titles)): ?>
                <p class="single-dog__card__info__p"><span>Оценки и титулы: </span><?php echo carbon_get_the_post_meta('dog_score_titles');?></p>
                <?php endif; ?>

                <?php $dogs_sert = carbon_get_the_post_meta('dog_sert');
                if (!empty ($dogs_sert)): ?>
                <p class="single-dog__card__info__p"><span>Сертификаты: </span><?php echo carbon_get_the_post_meta('dog_sert');?></p>
                <?php endif; ?>

                <?php $dogs_app = carbon_get_the_post_meta('dog_app');
                if (!empty ($dogs_app)): ?>
                <p class="single-dog__card__info__p"><span>Бонитировка: </span><?php echo $dogs_app; ?></p>
                <?php endif; ?>
        </div>
    
       </article>
        
       <article class="pedigree">
        <h2 class="h2-heading">Родословная</h2>
        <ul class="pedigree__list">
                    <li class="pedigree__list__item first">
                            <?php $mom = carbon_get_the_post_meta( 'crb_association_mommy');
                            if(!empty($mom)){
                                $id_m = wp_list_pluck( $mom, 'id' );
                                $args = array(
                                    'post_type' => 'dogs',
                                    'post__in' => $id_m,
                                );
                                $query = new WP_Query($args);
                                if ( $query->have_posts() ) {
                                     while ( $query->have_posts() ) { $query->the_post();
                                            get_template_part('pedigree/dog-card');
                                        }
                                }
                                wp_reset_postdata();
                            }
                            ?>
                    </li>

                    <li class="pedigree__list__item">
                            <?php $moms_parents = carbon_get_the_post_meta( 'crb_association_mommy_parents');
                            if(!empty($moms_parents)){
                                $id_mp = wp_list_pluck( $moms_parents, 'id' );
                                $args = array(
                                    'post_type' => 'dogs',
                                    'post__in' => $id_mp,
                                );
                                $query = new WP_Query($args);
                                if ( $query->have_posts() ) {
                                     while ( $query->have_posts() ) { $query->the_post();
                                            get_template_part('pedigree/parent-dog-card');
                                        }
                                }
                                wp_reset_postdata();
                            }
                            ?>
                    </li>
                    
                </ul>








                <ul class="pedigree__list">
                    <li class="pedigree__list__item first">
                            <?php $dad = carbon_get_the_post_meta( 'crb_association_daddy');
                            if(!empty($dad)){
                                $id_d = wp_list_pluck( $dad, 'id' );
                                $args = array(
                                    'post_type' => 'dogs',
                                    'post__in' => $id_d,
                                );
                                $query = new WP_Query($args);
                                if ( $query->have_posts() ) {
                                     while ( $query->have_posts() ) { $query->the_post();
                                            get_template_part('pedigree/dog-card');
                                        }
                                }
                                wp_reset_postdata();
                            }
                            ?>
                    </li>

                    <li class="pedigree__list__item">
                            <?php $dads_parents = carbon_get_the_post_meta( 'crb_association_daddy_parents');
                            if(!empty($dads_parents)){
                                $id_dp = wp_list_pluck( $dads_parents, 'id' );
                                $args = array(
                                    'post_type' => 'dogs',
                                    'post__in' => $id_dp,
                                );
                                $query = new WP_Query($args);
                                if ( $query->have_posts() ) {
                                     while ( $query->have_posts() ) { $query->the_post();
                                            get_template_part('pedigree/parent-dog-card');
                                        }
                                }
                                wp_reset_postdata();
                            }
                            ?>
                    </li>
                    
                </ul>



                
        
       </article>
       

</section>       
<?php get_footer(); ?>