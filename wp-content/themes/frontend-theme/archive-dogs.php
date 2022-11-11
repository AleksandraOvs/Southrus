<?php
/*
Архивная страница профилей собак
*/
?>
<?php get_header();?>
<section class="page-section">
    <?php if(have_posts() ) :?>
        <!-- grid posts -->
        <ul class="posts__list dogs">
            <?php while( have_posts() ): the_post(); ?>
          
                    <li class="posts__list__item">
                         
                        <div class="posts__list__item__img">
                           <a href="<?php the_permalink() ?>"> 
                                <?php if(has_post_thumbnail() ) : ?>
                                <?php the_post_thumbnail('smallpic') ?>
                                <?php else: ?>
                                    <div class="img-placeholder"></div>
                                <?php endif; ?>
                            </a>
                        </div>
                        
                        <div class="posts__list__item__content">
                            <h3>
                                <a href="<?php the_permalink() ?>"><?php the_title() ?></a>
                            </h3>
                            <p><span>ID:</span><?php echo carbon_get_the_post_meta('dog_id');?></p>
                        </div>
                    </li>
           
            <?php endwhile; ?>
        </ul><!-- end grid posts -->

    <?php else : ?>
            <p>Выставок не найдено</p>
    <?php endif; ?>

        <div class="row mt-20">
          <div class="col-md-12 text-center pagination">
          <?php
						echo paginate_links( array(
							'prev_next' => true,
							'prev_text' => '<i class="icon arrow_carrot-left"></i>',
							'next_text' => '<i class="icon arrow_carrot-right"></i>',
						));
					?>
          </div>
        </div>
</section> <!-- end content -->
<?php get_footer(); ?>