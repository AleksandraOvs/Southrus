 <!-- Sidebar -->
 <aside class="sidebar">

<!-- Search -->
<div class="widget">
  <div class="heading-lines">
    <h3 class="widget-title heading">Поиск по сайту</h3>
  </div>
  <form class="relative" method="get" action="<?php echo site_url() ?>">
    <input type="search" name="s" placeholder="Что ищем?">
  </form>
  <input type="submit" value="Search" id="submit-button" class="btn btn-lg btn-color">
</div>

<!-- Ad banner -->
<div class="widget custom-ad-banner">
  <a href="#">
    <img src="img/banner.jpg" alt="">
  </a>
</div>


<?php 
    $args = array(
        'posts_per_page' => 4,
        'ignore_sticky_posts' => true,
    );

    $query = new WP_Query ( $args );

    if ($query->have_posts() ):
?>
<!-- Recent Posts -->
<div class="widget recent-posts">
  <div class="heading-lines">
    <h3 class="widget-title heading">Свежее в блоге</h3>
  </div>
  <div class="entry-list w-thumbs">
    <ul class="posts-list list-dividers">
        <?php while ($query->have_posts() ): $query->the_post();?>
      <li class="entry-li">
        <article class="post-small clearfix">
          <div class="entry-img">
            <a href="<?php the_permalink() ?>">
              <?php the_post_thumbnail('smallpic') ?>
            </a>
          </div>
          <div class="entry">
            <h3 class="entry-title"><a href="<?php the_permalink() ?>"><?php the_title() ?></a></h3>
            
          </div>
        </article>
      </li>
        <?php endwhile; ?>
    </ul>
  </div>
</div>

<?php endif;

wp_reset_postdata();?>
</aside> <!-- end sidebar -->