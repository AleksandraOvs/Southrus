
 <li class="pedigree-article__list-parents__item">
    <?php get_template_part('parts/dog-card'); ?>
    <?php
        $parents = carbon_get_the_post_meta( 'crb_association_parents');
        if(!empty($parents)){
            $ids = wp_list_pluck( $parents, 'id' );

            $args = array(
                'post_type' => 'dogs',
                'post__in' => $ids,
            );
            $query = new WP_Query($args);
            if ( $query->have_posts() ) {
                echo '<ul class="grandparents">';
                    while ( $query->have_posts() ) { $query->the_post();
                        get_template_part('parts/grandparents'); 
                    }
                echo '</ul>';
            }
            wp_reset_postdata();

        }
    ?>
    
</li>
