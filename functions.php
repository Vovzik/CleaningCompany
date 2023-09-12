<?php
add_action('wp_enqueue_scripts', 'my_wp_head_css' ); // хук автоматом сработает во время wp_head
function my_wp_head_css() {
    wp_enqueue_style( 'my_head_style', get_stylesheet_directory_uri() .'/assets/scss/main.css', array(), null );
}


add_action('wp_enqueue_scripts', 'my_wp_head_js' ); // хук автоматом сработает во время wp_head
function my_wp_head_js() {
    wp_enqueue_script( 'swiper', get_stylesheet_directory_uri() .'/assets/js/libs/swiper-bundle.min.js', array(), null, true );
    wp_enqueue_script( 'jq', get_stylesheet_directory_uri() .'/assets/js/libs/jquery-3.5.1.min.js', array(), null, true );
    wp_enqueue_script( 'gallery', get_stylesheet_directory_uri() .'/assets/js/libs/jquery.fancybox.min.js', array(), null, true );
    wp_enqueue_script( 'mask', get_stylesheet_directory_uri() .'/assets/js/libs/mask.js', array(), null, true );
    wp_enqueue_script( 'nouislider', get_stylesheet_directory_uri() .'/assets/js/libs/nouislider.min.js', array(), null, true );
    wp_enqueue_script( 'main', get_stylesheet_directory_uri() .'/assets/js/main.js', array(), null, true );
}



register_nav_menus(array(
    'top'    => 'Основное меню',    //Название месторасположения меню в шаблоне
    'top2'    => 'Основное меню 2',    //Название месторасположения меню в шаблоне
    'top3'    => 'Основное меню 3',    //Название месторасположения меню в шаблоне
    'side-bar'    => 'Сайд бар',    //Название месторасположения меню в шаблоне
    'bottom'    => 'подвал меню',    //Название месторасположения меню в шаблоне
    'bottom2'    => 'подвал меню 2',    //Название месторасположения меню в шаблоне
    'bottom3'    => 'подвал меню 3',    //Название месторасположения меню в шаблоне
    'top4'    => 'шапка меню',    //Название месторасположения меню в шаблоне
));


// свой класс построения меню:
class My_Walker_Nav_Menu extends Walker_Nav_Menu {

    // add classes to ul sub-menus
    function start_lvl( &$output, $depth = 0, $args = NULL ) {
        // depth dependent classes
        $indent = ( $depth > 0  ? str_repeat( "\t", $depth ) : '' ); // code indent
        $display_depth = ( $depth + 1); // because it counts the first submenu as 0
        $classes = array(
            ( $display_depth === 1 ? 'header__sublist' : '' ),
            ( $display_depth === 2 ? 'header__sublist-sublist' : '' ),
            ( $display_depth === 3 ? 'header__level-three' : '' ),
            ( $display_depth % 2  ? 'menu-odd' : 'menu-even' ),
            'menu-depth-' . $display_depth
        );

        $classesNav = array(
            ( $display_depth === 1 ? 'header__sublist-nav' : '' ),
            ( $display_depth === 2 ? 'header__sublist-sublist-nav' : '' ),
            ( $display_depth === 3 ? 'header__level-three-nav' : '' ),
        );

        $class_names = implode( ' ', $classes );
        $class_namesNav = implode( ' ', $classesNav );

        // build html
        $output .= '<nav class="' . $class_namesNav . '">' .  '<ul class="' . $class_names . '">';
    }

    // add main/sub classes to li's and links
    function start_el( &$output, $data_object, $depth = 0, $args = null, $current_object_id = 0 ) {
        global $wp_query;

        // Restores the more descriptive, specific name for use within this method.
        $item = $data_object;

        $indent = ( $depth > 0 ? str_repeat( "\t", $depth ) : '' ); // code indent

        // depth dependent classes
        $depth_classes = array(
            ( $depth === 0 ? 'header__list-item' : '' ),
            ( $depth === 1 ? 'header__sublist-item' : '' ),
            ( $depth === 2 ? 'header__sublist-sublist-item' : '' ),
            ( $depth === 3 ? 'header__level-three-item' : '' ),
        );
        $depth_class_names = esc_attr( implode( ' ', $depth_classes ) );

        // passed classes
        $classes = empty( $item->classes ) ? array() : (array) $item->classes;
        $class_names = esc_attr( implode( ' ', apply_filters( 'nav_menu_css_class', array_filter( $classes ), $item ) ) );

        // build html
        $output .= $indent . '<li id="nav-menu-item-'. $item->ID . '" class="' . $depth_class_names . ' ' . $class_names . '">';

        // link attributes
        $attributes  = ! empty( $item->attr_title ) ? ' title="'  . esc_attr( $item->attr_title ) .'"' : '';
        $attributes .= ! empty( $item->target )     ? ' target="' . esc_attr( $item->target     ) .'"' : '';
        $attributes .= ! empty( $item->xfn )        ? ' rel="'    . esc_attr( $item->xfn        ) .'"' : '';
        $attributes .= ! empty( $item->url )        ? ' href="'   . esc_attr( $item->url        ) .'"' : '';

        $attributes .= ' class="' .
            ( $depth === 0 ? 'header__list-item-link' : '')
            .
            ( $depth === 1 ? 'header__sublist-item-link' : '')
            .
            ( $depth === 2 ? 'header__sublist-sublist-item-link' : '')
            .
            ($depth === 3 ? 'header__level-three-item-link' : '') . '"';

        $item_output = sprintf( '%1$s<a%2$s>%3$s%4$s%5$s</a>%6$s',
            $args->before,
            $attributes,
            $args->link_before,
            apply_filters( 'the_title', $item->title, $item->ID ),
            $args->link_after,
            $args->after
        );

        // build html
        $output .= apply_filters( 'walker_nav_menu_start_el', $item_output, $item, $depth, $args );
    }

}

function my_nav_menu( $args ) {

    $args = array_merge( [
        'container' => '',
        'menu_class' => 'header__list',
        'walker' => new My_Walker_Nav_Menu()
    ], $args );

    echo wp_nav_menu( $args );
}










