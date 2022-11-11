<?php get_header() ?>
<div class="content-wrapper oh">

<!-- Content -->
<section class="content-wrapper blog-standard">
  <div class="container relative">
    <div class="row">

      <!-- post content -->
      <div class="col-md-9 post-content mb-50">
            <h1>Результаты поиска по запросу: &laquo;<?php the_search_query() ?> &raquo;</h1>
        <?php if(have_posts() ){ ?>

          <?php

          while (have_posts() ): the_post();

             
                  get_template_part('entry');
                
            
          endwhile;
        } else{
            echo 'Материалов по Вашему запросу не найдено.';
        }
          
          ?>

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


      </div> <!-- end col -->

<?php get_sidebar() ?>
    </div> <!-- end row -->
  </div> <!-- end container -->
</section> <!-- end content -->
<?php get_footer() ?>