<?php get_header() ?>
      <!-- 404 -->
      <section class="section-wrap page-404" style="min-height: calc( 100vh - 120px );">
        <div class="container">

          <div class="row text-center">
            <div class="col-md-6 col-md-offset-3">
              <h1>404</h1>
              <h2 class="mb-50">Такой страницы не существует.</h2>
              <p class="mb-20">Можете перейти <a href="<?php echo get_home_url()?>">на главную</a> или воспользоваться поиском.</p>
              <form class="relative">
                <input type="search" placeholder="Поискать" class="mb-0">
                <button type="submit" class="search-button"><i class="fa fa-search"></i></button>
              </form>
            </div>
          </div>

        </div>
      </section> <!-- end 404 -->
<?php get_footer() ?>