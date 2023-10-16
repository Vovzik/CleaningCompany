


<?php get_header(); ?>

<main class="main">
    <?php
    // получаем значение произвольного поля из нынешней таксономии (тип категории)
    $queried_object = get_queried_object();
    $taxonomy = $queried_object->taxonomy;
    $term_id = $queried_object->term_id;


    $type = get_field('cat_type', $taxonomy . '_' . $term_id);



    if($type == 'products'){ // для аренды или продажи

    }else{ // для новостей
        get_template_part('template-parts/type-news');
    }
    ?>




    <?php get_footer(); ?>

