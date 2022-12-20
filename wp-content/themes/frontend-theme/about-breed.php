<?php
/*
Template Name: Страница "О породе"

*/
?>

<?php get_header(); ?>

    <section class="post-content about-breed__page">
            <?php the_content();?>
            <h3>Ссылки:</h3>
                    <ul class="posts__list">
                    
                    <?php $posts = get_posts ("category=14&orderby=date&numberposts=7"); ?> 
                    <?php if ($posts) : ?>
                    <?php foreach ($posts as $post) : setup_postdata ($post); ?>
                        <li class="posts__list__item"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
                    <?php //get_template_part('entry', 'pages'); ?>
                    <?php endforeach; ?>
                    <?php endif; ?>    
                    
                    </ul>
                
            <h3>Стандарты:</h3>
                    <ul class="posts__list">
                    <?php $posts = get_posts ("category=15&orderby=date&numberposts=10"); ?> 
                    <?php if ($posts) : ?>
                    <?php foreach ($posts as $post) : setup_postdata ($post); ?>
                        <li class="posts__list__item"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
                    <?php endforeach; ?>
                    <?php endif; ?>    
                    </ul>

            <h3>Приставки:</h3>
Lorem, ipsum dolor sit amet consectetur adipisicing elit. Cumque, hic eos obcaecati totam perferendis quidem sed animi ratione consectetur consequatur! Corrupti quisquam porro incidunt, ratione aliquid neque est eius obcaecati?
Nulla, perspiciatis veritatis. Modi explicabo quas quam aperiam quae iusto quis consectetur, et accusantium? Vitae, omnis? Temporibus qui sed aspernatur rem perspiciatis porro. Quasi ad ducimus distinctio atque commodi consequatur?
Officia veritatis laudantium similique nesciunt vero excepturi, deleniti dolorem veniam illo ipsum ex, reiciendis optio totam at iure consequuntur aut iste? Saepe ut molestiae ullam iusto molestias voluptates impedit debitis!

            <h3>Организации:</h3>
                    <ul class="posts__list">
                    <?php $posts = get_posts ("category=16&orderby=name&numberposts=10"); ?> 
                    <?php if ($posts) : ?>
                    <?php foreach ($posts as $post) : setup_postdata ($post); ?>
                        <li class="posts__list__item"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
                    <?php endforeach; ?>
                    <?php endif; ?>    

                    </ul>
    </section>
<?php get_footer(); ?>