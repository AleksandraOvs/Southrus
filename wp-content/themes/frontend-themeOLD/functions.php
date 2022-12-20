<?php

/* CARBON FIELDS */
require get_stylesheet_directory() . '/inc/carbon-fields/carbon-fields-plugin.php';

add_action('carbon_fields_register_fields', 'crb_register_custom_fields');
function crb_register_custom_fields(){
    require_once __DIR__.'/inc/post-meta.php';
	require_once __DIR__.'/inc/theme-options.php';
}

//add_filter('use_block_editor_for_post', '__return_true', 5);
/* ADMIN BAR */
add_filter('show_admin_bar', '__return_true'); 

/* LOGO */
add_theme_support( 'custom-logo', [
	//'height'      => 55;
	//'width'       => 235,
	'flex-width'  => false,
	'flex-height' => false,
	'header-text' => '',
	'unlink-homepage-logo' => false, // WP 5.5
] );
/* THUMBNAILS FOR POSTS*/
add_theme_support( 'post-thumbnails', array( 'post','dogs' ) );
add_image_size ('bigpic', 550, 400, true);
add_image_size ('smallpic', 88, 69, true);
add_image_size ('dogpic', 200, 200, true);
//add_image_size (название, ширина, высота, обрезка);

add_action('init', 'custom_post_profiles');
function custom_post_profiles(){
        register_post_type('dogs', array(
        'labels'             => array(
            
            'name'               => 'Собаки',
            'singular_name'      => 'Собака',
            'add_new'            => 'Добавить профайл собаки',
            'add_new_item'       => 'Добавить профайл собаки',
            'edit_item'          => 'Редактировать профайл собаки',
            'new_item'           => 'Новая собака',
            'view_item'          => 'Посмотреть профайл собаки',
            'search_items'       => 'Найти профайл собаки',
            'not_found'          => 'Профайлов не найдено',
            'not_found_in_trash' => 'В корзине профайлов не найдено',
            'parent_item_colon'  => '',
            'menu_name'          => 'Профайлы собак'
        ),
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => true,
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => 2,
        'supports'           => array('title','thumbnail'),
        'menu_icon'          => 'dashicons-index-card'
    ) );
}

add_action ('wp_enqueue_scripts', 'ft_scripts');
function ft_scripts(){
    //wp_enqueue_style ( 'gfonts', 'http://fonts.googleapis.com/css?family=Montserrat:300,400%7COpen+Sans:400,400i,700%7CMerriweather:400ii?subset=cyrillic');
	wp_enqueue_style ('swiper-style', 'https://unpkg.com/swiper/swiper-bundle.min.css');
    wp_enqueue_style ('bootstrp-style', get_stylesheet_directory_uri() . '/assets/css/bootstrap.min.css');
    wp_enqueue_style ('normalize', get_stylesheet_directory_uri() . '/assets/css/normalize.css');
    wp_enqueue_style ('base-styles', get_stylesheet_directory_uri() . '/assets/css/base.css');
    wp_enqueue_style ('fonts', get_stylesheet_directory_uri() . '/assets/css/fonts.css');
    wp_enqueue_style ('styles', get_stylesheet_directory_uri());
    wp_enqueue_style ('base-style', get_stylesheet_directory_uri() . '/assets/css/style.css');
    wp_enqueue_script ('jquery', get_stylesheet_directory_uri() . '/assets/js/jquery.min.js', array('jquery'), null, true );
    wp_enqueue_script ('bootstrp-js', get_stylesheet_directory_uri() . '/assets/js/bootstrap.min.js');
	wp_enqueue_script('swiper-scripts', 'https://unpkg.com/swiper/swiper-bundle.min.js');
    wp_enqueue_script ('scripts', get_stylesheet_directory_uri() . '/assets/js/scripts.js');
	
}

/*walker*/
register_nav_menus( array(
    'head_menu' => 'Меню в шапке',
    //'footer'    => 'Меню в футере',
));

class Main_walker_menu extends Walker_Nav_Menu{
    public function start_lvl( &$output, $depth = 0, $args = null ) {
		if ( isset( $args->item_spacing ) && 'discard' === $args->item_spacing ) {
			$t = '';
			$n = '';
		} else {
			$t = "\t";
			$n = "\n";
		}
		$indent = str_repeat( $t, $depth );

		// Default class.
		$classes = array( 'dropdown-menu' );

		/**
		 * Filters the CSS class(es) applied to a menu list element.
		 *
		 * @since 4.8.0
		 *
		 * @param string[] $classes Array of the CSS classes that are applied to the menu `<ul>` element.
		 * @param stdClass $args    An object of `wp_nav_menu()` arguments.
		 * @param int      $depth   Depth of menu item. Used for padding.
		 */
		$class_names = implode( ' ', apply_filters( 'nav_menu_submenu_css_class', $classes, $args, $depth ) );
		$class_names = $class_names ? ' class="' . esc_attr( $class_names ) . '"' : '';

		$output .= "{$n}{$indent}<ul$class_names>{$n}";
	}
    /**
	 * Starts the element output.
	 *
	 * @since 3.0.0
	 * @since 4.4.0 The {@see 'nav_menu_item_args'} filter was added.
	 * @since 5.9.0 Renamed `$item` to `$data_object` and `$id` to `$current_object_id`
	 *              to match parent class for PHP 8 named parameter support.
	 *
	 * @see Walker::start_el()
	 *
	 * @param string   $output            Used to append additional content (passed by reference).
	 * @param WP_Post  $data_object       Menu item data object.
	 * @param int      $depth             Depth of menu item. Used for padding.
	 * @param stdClass $args              An object of wp_nav_menu() arguments.
	 * @param int      $current_object_id Optional. ID of the current menu item. Default 0.
	 */
	public function start_el( &$output, $data_object, $depth = 0, $args = null, $current_object_id = 0 ) {
		// Restores the more descriptive, specific name for use within this method.
		$menu_item = $data_object;

		if ( isset( $args->item_spacing ) && 'discard' === $args->item_spacing ) {
			$t = '';
			$n = '';
		} else {
			$t = "\t";
			$n = "\n";
		}
		$indent = ( $depth ) ? str_repeat( $t, $depth ) : '';

		$classes   = empty( $menu_item->classes ) ? array() : (array) $menu_item->classes;
		//$classes[] = 'menu-item-' . $menu_item->ID;
        if(in_array('menu-item-has-children', $classes )){
            $classes[] = 'dropdown';
        }

        
		/**
		 * Filters the arguments for a single nav menu item.
		 *
		 * @since 4.4.0
		 *
		 * @param stdClass $args      An object of wp_nav_menu() arguments.
		 * @param WP_Post  $menu_item Menu item data object.
		 * @param int      $depth     Depth of menu item. Used for padding.
		 */
		$args = apply_filters( 'nav_menu_item_args', $args, $menu_item, $depth );

		/**
		 * Filters the CSS classes applied to a menu item's list item element.
		 *
		 * @since 3.0.0
		 * @since 4.1.0 The `$depth` parameter was added.
		 *
		 * @param string[] $classes   Array of the CSS classes that are applied to the menu item's `<li>` element.
		 * @param WP_Post  $menu_item The current menu item object.
		 * @param stdClass $args      An object of wp_nav_menu() arguments.
		 * @param int      $depth     Depth of menu item. Used for padding.
		 */
		$class_names = implode( ' ', apply_filters( 'nav_menu_css_class', array_filter( $classes ), $menu_item, $args, $depth ) );
		$class_names = $class_names ? ' class="' . esc_attr( $class_names ) . '"' : '';

		/**
		 * Filters the ID applied to a menu item's list item element.
		 *
		 * @since 3.0.1
		 * @since 4.1.0 The `$depth` parameter was added.
		 *
		 * @param string   $menu_id   The ID that is applied to the menu item's `<li>` element.
		 * @param WP_Post  $menu_item The current menu item.
		 * @param stdClass $args      An object of wp_nav_menu() arguments.
		 * @param int      $depth     Depth of menu item. Used for padding.
		 */
		$id = apply_filters( 'nav_menu_item_id', 'menu-item-' . $menu_item->ID, $menu_item, $args, $depth );
		$id = $id ? ' id="' . esc_attr( $id ) . '"' : '';

		$output .= $indent . '<li' . $id . $class_names . '>';

		$atts           = array();
		$atts['title']  = ! empty( $menu_item->attr_title ) ? $menu_item->attr_title : '';
		$atts['target'] = ! empty( $menu_item->target ) ? $menu_item->target : '';
		if ( '_blank' === $menu_item->target && empty( $menu_item->xfn ) ) {
			$atts['rel'] = 'noopener';
		} else {
			$atts['rel'] = $menu_item->xfn;
		}
		$atts['href']         = ! empty( $menu_item->url ) ? $menu_item->url : '';
		$atts['aria-current'] = $menu_item->current ? 'page' : '';

		/**
		 * Filters the HTML attributes applied to a menu item's anchor element.
		 *
		 * @since 3.6.0
		 * @since 4.1.0 The `$depth` parameter was added.
		 *
		 * @param array $atts {
		 *     The HTML attributes applied to the menu item's `<a>` element, empty strings are ignored.
		 *
		 *     @type string $title        Title attribute.
		 *     @type string $target       Target attribute.
		 *     @type string $rel          The rel attribute.
		 *     @type string $href         The href attribute.
		 *     @type string $aria-current The aria-current attribute.
		 * }
		 * @param WP_Post  $menu_item The current menu item object.
		 * @param stdClass $args      An object of wp_nav_menu() arguments.
		 * @param int      $depth     Depth of menu item. Used for padding.
		 */
		$atts = apply_filters( 'nav_menu_link_attributes', $atts, $menu_item, $args, $depth );

		$attributes = '';
		foreach ( $atts as $attr => $value ) {
			if ( is_scalar( $value ) && '' !== $value && false !== $value ) {
				$value       = ( 'href' === $attr ) ? esc_url( $value ) : esc_attr( $value );
				$attributes .= ' ' . $attr . '="' . $value . '"';
			}
		}

		/** This filter is documented in wp-includes/post-template.php */
		$title = apply_filters( 'the_title', $menu_item->title, $menu_item->ID );

		/**
		 * Filters a menu item's title.
		 *
		 * @since 4.4.0
		 *
		 * @param string   $title     The menu item's title.
		 * @param WP_Post  $menu_item The current menu item object.
		 * @param stdClass $args      An object of wp_nav_menu() arguments.
		 * @param int      $depth     Depth of menu item. Used for padding.
		 */
		$title = apply_filters( 'nav_menu_item_title', $title, $menu_item, $args, $depth );

		$item_output  = $args->before;
		$item_output .= '<a' . $attributes . '>';
		$item_output .= $args->link_before . $title . $args->link_after;
		$item_output .= '</a>';
		$item_output .= $args->after;

		/**
		 * Filters a menu item's starting output.
		 *
		 * The menu item's starting output only includes `$args->before`, the opening `<a>`,
		 * the menu item's title, the closing `</a>`, and `$args->after`. Currently, there is
		 * no filter for modifying the opening and closing `<li>` for a menu item.
		 *
		 * @since 3.0.0
		 *
		 * @param string   $item_output The menu item's starting HTML output.
		 * @param WP_Post  $menu_item   Menu item data object.
		 * @param int      $depth       Depth of menu item. Used for padding.
		 * @param stdClass $args        An object of wp_nav_menu() arguments.
		 */
		$output .= apply_filters( 'walker_nav_menu_start_el', $item_output, $menu_item, $depth, $args );
	}
}


?>