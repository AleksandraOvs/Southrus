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
            //echo '<ul class="parents">';
                while ( $query->have_posts() ) { $query->the_post();
                    get_template_part('parts/parents');
                }
            //echo '</ul>';
        }
        wp_reset_postdata();

    }
