<article class="pedigree">
    <h2 class="h2-heading">Родословная</h2>
    <ul class="pedigree__list">
        <li class="pedigree__list__item">
            <?php get_template_part('parts/dog-card'); ?>
        </li><!-- /.pedigree__list__item -->
        <li class="pedigree__list__item">
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
                            //get_template_part('parts/parents');
                    ?>
                        <div class="pedigree__list__item__parents">
                            <?php get_template_part('parts/dog-card'); ?>
                            <?php $parents = carbon_get_the_post_meta( 'crb_association_parents');
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
                                            //get_template_part('parts/grandparents');
                                            get_template_part('parts/dog-card');
                                    }
                                    echo '</ul>';
                                    }
                                    wp_reset_postdata();
                                    }

                            ?>
                        </div>
                    <?php
                            }
                        }
                        wp_reset_postdata();
                    }
                    ?>

                   
        </li><!-- /.pedigree__list__item -->
        
    </ul>
</article>