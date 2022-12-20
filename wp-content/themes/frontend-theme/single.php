<?php get_header(); the_post();?>


<!-- <div class="post-thumbnail">
    <?php //echo get_the_post_thumbnail() ?>
</div> -->
<!-- <div class="content-wrapper post-content oh"> -->
<?php
  $post = $wp_query->post;
 
  // if (is_post_type('expo')) { //ID категории
  //     get_template_part('expo', 'single');
  // } else {
?>
<!-- Content -->
<section class="post-single">
       
        <!-- large post -->
        <div class="container">
        <article class="entry-item large-post">
       
          <div class="entry-header">
            <h3 class="entry-title"><?php the_title() ?></h3>
          </div>

          <div class="entry-wrap">
            <div class="entry">

              <div class="entry-content">
                <div class="article">
                    <?php the_content() ?>

                
                </div>
<?php
                $args = array(
                  'posts_per_page' => 3,
                  'ignore_sticky_posts' => true,
    );

    $query = new WP_Query ( $args );

    if ($query->have_posts() ):
      ?>
                <!-- related posts -->
                <!-- <div class="related-posts mt-40">
                  <div class="heading-lines mb-30">
                    <h3 class="heading small">Похожие материалы</h3>
                  </div>
                  <div class="row">

                  <?php //while ($query->have_posts() ) : $query->the_post(); ?>
                    <div class="col-sm-4">
                      <article class="entry-item">
                        <div class="entry-img">
                          <a href="<?php //the_permalink() ?>">
                            <?php //the_post_thumbnail('thumbnail') ?>
                          </a>
                        </div>
                        <h4 class="entry-title">
                          <a href="<?php //the_permalink() ?>"><?php //the_title() ?></a>
                        </h4>
                        
                      </article>
                    </div>
                  <?php //endwhile; ?>
                  </div>
                </div> -->

               <?php endif;
               wp_reset_postdata(); ?>
              </div>
            </div>
          </div>
        </article> <!-- end large post -->
    
      <?php //get_sidebar() ?>
    </div>
</section> <!-- end content -->
<?php //} ?>
<?php get_footer() ?>