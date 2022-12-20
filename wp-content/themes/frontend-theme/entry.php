<div <?php //post_class('col-sm-6') ?>>
            <article class="entry-item">

            <?php if(has_post_thumbnail() ) : ?>
              <div class="entry-img">
                <!-- <a href="<?php the_permalink() ?>">
                <?php //the_post_thumbnail('thumbnail') ?>
                </a> -->
              </div>
              <?php else: echo '<div class="img-entry-placeholder"></div>'; ?>
              <?php endif; ?>
              <div class="entry-header">
                <h2 class="entry-title">
                  <a href="<?php the_permalink() ?>"><?php the_title();?></a>
                </h2>
              </div>
              <div class="entry-wrap">
                <div class="entry">
                  <div class="entry-content">
                   <?php the_excerpt() ?>
                  </div>
                </div>
              </div>
            </article>
          </div>