<?php
/*
Template Name: Главная*/

global $post;

function console_log($data)
{ // сама функция
    if (is_array($data) || is_object($data)) {
        echo("<script>console.log('php_array: " . json_encode($data) . "');</script>");
    } else {
        echo("<script>console.log('php_string: " . $data . "');</script>");
    }
}


?>


<?php get_header(); ?>

<main class="main">
    <section class="home">
        <div class="home__content" style="
                background-image: url('<?php the_field('home__img-desc', 10) ?>');
                ">
            <div class="container home__container">
                <div class="home__inner">
                    <img class="home__fonmobail" src="<?php the_field('home__img-mobail', 10) ?>"
                         alt="alt">
                    <h1 class="home__title">
                        <?php the_field('home__title', 10) ?>
                    </h1>
                    <p class="home__text">
                        <?php the_field('home__text', 10) ?>
                    </p>

                    <div class="home__buttons">
                        <a class="home__button" href="<?php the_field('home__button-link', 10) ?>">
                            <?php the_field('home__button', 10) ?>
                        </a>
                        <a class="home__button home__button__border"
                           href=" <?php the_field('home__button-border-link', 10) ?>">
                            <?php the_field('home__button-border', 10) ?>
                        </a>
                    </div>
                </div>
                <div class="home__items">
                    <?php $repeater = get_field('home__items', 10); ?>
                    <?php if ($repeater) : ?>
                        <?php foreach ($repeater as $repeaters) : ?>
                            <div class="home__item">
                                <div class="home__item-box">
                                    <h2 class="home__subtitle">
                                        <?php echo $repeaters['home__subtitle'] ?>
                                    </h2>
                                    <p class="home__subtext">
                                        <?php echo $repeaters['home__subtext'] ?>
                                    </p>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </section>
    <section class="economy">
        <div class="economy__content"
             style="background-image: url('<?php the_field('economy__img', 10) ?>');">
            <div class="container">
                <div class="economy__inner">
                    <h2 class="economy__title">
                        <?php the_field('economy__title', 10) ?>
                    </h2>
                    <a class="economy__btn" href="<?php the_field('economy__btn-link', 10) ?>">
                        <?php the_field('economy__btn', 10) ?>
                    </a>
                </div>
                <blockquote class="economy__blockquote">
                    <p>
                        <?php the_field('economy__quate', 10) ?>
                    </p>
                    <span class="economy__director">
                            <?php the_field('economy__director', 10) ?>
                    </span>
                </blockquote>
            </div>
        </div>
    </section>
    <section class="services">
        <div class="services__content">
            <div class="container">
                <div class="services__inner">
                    <h2 class="services__title">
                        <?php the_field('services__title', 10) ?>
                    </h2>
                    <div class="tabs-items">
                        <div class="services__buttons">
                            <?php $repeater = get_field('services__buttons', 10); ?>

                            <?php if ($repeater) : ?>
                                <?php foreach ($repeater as $repeaters) : ?>
                                    <div class="services__tabs-item tabs-item <?php echo $repeaters['services__active'] ?>">
                                        <?php echo $repeaters['services__tabs-item'] ?>
                                    </div>
                                <?php endforeach; ?>
                            <?php endif; ?>
                        </div>
                        <?php $repeater = get_field('services__tabs-body', 10); ?>

                        <?php if ($repeater) : ?>
                            <?php foreach ($repeater as $repeaters) : ?>
                                <div class="services__tabs-body  tabs-body <?php echo $repeaters['tabs-body'] ?>">
                                    <div class="services__items">
                                        <?php if ($repeaters['services__items']) : ?>
                                            <?php foreach ($repeaters['services__items'] as $item) : ?>
                                                <a class="services__item" href="<?php echo $item['services__link'] ?>">
                                                    <div class="services__item-box">
                                                        <img class="services__item-img"
                                                             src="<?php echo $item['services__item-img'] ?>"
                                                             alt="alt">
                                                        <h3 class="services__subtitle">
                                                            <?php echo $item['services__subtitle'] ?>
                                                        </h3>
                                                        <p class="services__text">
                                                            <?php echo $item['services__text'] ?>
                                                        </p>
                                                    </div>
                                                    <span class="services__btn">
                                                        <?php echo $item['services__btn'] ?>
                                                    </span>
                                                </a>
                                            <?php endforeach; ?>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="info-price-photo">
        <div class="info-price-photo__content">
            <div class="container">
                <div class="info-price-photo__inner">
                    <div class="info-price-photo__info">
                        <h2 class="info-price-photo__title">
                            <?php the_field('info-price-photo__title', 10) ?>
                        </h2>
                        <?php the_field('info-price-photo__text', 10) ?>
                        <div class="info-price-photo__socials">
                            <div class="info-price-photo__sms">
                                <?php the_field('info-price-photo__sms', 10) ?>
                            </div>
                            <div class="info-price-photo__block">
                                <?php $repeater = get_field('info-price-photo__block', 10); ?>

                                <?php if ($repeater) : ?>
                                    <?php foreach ($repeater as $repeaters) : ?>
                                        <a class="info-price-photo__social"
                                           href="<?php echo $repeaters['info-price-photo__social'] ?>">
                                            <img class="info-price-photo__icon"
                                                 src="<?php echo $repeaters['info-price-photo__icon'] ?>"
                                                 alt="alt">
                                        </a>
                                    <?php endforeach; ?>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                    <div class="info-price-photo__images">
                        <img class="info-price-photo__img"
                             src="<?php the_field('info-price-photo__img', 10) ?>" alt="alt">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="projects">
        <div class="projects__content">
            <div class="container">
                <div class="projects__inner">
                    <h2 class="projects__title">
                        <?php the_field('projects__title', 10) ?>
                    </h2>
                    <div class="projects__view">
                        <p class="projects__text">
                            <?php the_field('projects__text', 10) ?>
                        </p>
                        <a class="projects__btn projects-btn" href="<?php the_field('projects__btn-link', 10) ?>">
                            <?php the_field('projects__btn', 10) ?>
                        </a>
                    </div>
                </div>
                <div class="projects-slider-js projects__slider-css">
                    <div class="swiper-wrapper projects__swiper-wrapper">
                        <?php $repeater = get_field('projects-slider-js', 10); ?>

                        <?php if ($repeater) : ?>
                            <?php foreach ($repeater as $repeaters) : ?>
                                <div class="swiper-slide projects__swiper-slide">
                                    <div class="projects__box">
                                        <img class="projects__img"
                                             src=" <?php echo $repeaters['projects__img'] ?>" alt="alt">
                                    </div>
                                    <h3 class="projects__subtitle">
                                        <?php echo $repeaters['projects__subtitle'] ?>
                                    </h3>
                                    <div class="projects__items">
                                        <?php if ($repeaters['projects__items']) : ?>
                                            <?php foreach ($repeaters['projects__items'] as $item) : ?>
                                                <div class="projects__item">
                                                    <img class="projects__icon"
                                                         src="<?php echo $item['projects__icon'] ?>"
                                                         alt="alt">
                                                    <?php echo $item['projects__item'] ?>
                                                </div>
                                            <?php endforeach; ?>
                                        <?php endif; ?>
                                    </div>
                                    <ul class="projects__list">
                                        <?php if ($repeaters['projects__list']) : ?>
                                            <?php foreach ($repeaters['projects__list'] as $item) : ?>
                                                <li class="projects__list-item">
                                                    <?php echo $item['projects__list-item'] ?>
                                                </li>
                                            <?php endforeach; ?>
                                        <?php endif; ?>
                                    </ul>
                                    <ul class="projects__list projects-list-css projects-list-js">
                                        <?php if ($repeaters['projects-list-js']) : ?>
                                            <?php foreach ($repeaters['projects-list-js'] as $item) : ?>
                                                <li class="projects__list-item">
                                                    <?php echo $item['projects__list-item'] ?>
                                                </li>
                                            <?php endforeach; ?>
                                        <?php endif; ?>
                                    </ul>
                                    <span class="projects__read-more projects-read-more-js">
                                Читать больше
                            </span>
                                </div>
                            <?php endforeach; ?>
                        <?php endif; ?>
                    </div>
                    <div class="projects__navigation projects-navigation-css">
                        <div class="projects__prev projects-prev-js projects-prev-css"></div>
                        <div class="projects__next projects-next-js projects-next-css"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="reviews">
        <div class="reviews__content">
            <div class="container">
                <div class="reviews__inner">
                    <h2 class="reviews__title">
                        <?php the_field('reviews__title', 10) ?>
                    </h2>
                    <p class="reviews__text">
                        <?php the_field('reviews__text', 10) ?>
                    </p>
                </div>
                <div class="reviews__slider">
                    <div class="swiper-wrapper">
                        <?php $repeater = get_field('reviews__slider', 10); ?>

                        <?php if ($repeater) : ?>
                            <?php foreach ($repeater as $repeaters) : ?>
                                <a class="swiper-slide reviews__slide"
                                   href="<?php echo $repeaters['reviews__slide'] ?>"
                                   data-fancybox="gallery">
                                    <img class="reviews__img" src="<?php echo $repeaters['reviews__img'] ?>"
                                         alt="Сертификат">
                                </a>
                            <?php endforeach; ?>
                        <?php endif; ?>
                    </div>
                    <div class="reviews__navigation projects-navigation-css">
                        <div class="reviews__prev  projects-prev-css"></div>
                        <div class="reviews__next  projects-next-css"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="confidence">
        <div class="confidence__content">
            <div class="container">
                <h2 class="confidence__title">
                    <?php the_field('confidence__title', 10) ?>
                </h2>
                <div class="confidence__items">
                    <?php $repeater = get_field('confidence__items', 10); ?>

                    <?php if ($repeater) : ?>
                        <?php foreach ($repeater as $repeaters) : ?>
                            <div class="confidence__item">
                                <img class="confidence__img"
                                     src="<?php echo $repeaters['confidence__item'] ?>" alt="alt">
                            </div>
                        <?php endforeach; ?>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </section>
    <section class="news">
        <div class="news__content">
            <div class="container">
                <div class="news__inner">
                    <h2 class="news__title">
                        Статьи и новости
                    </h2>
                    <div class="news__navigation news__navigation-mobail projects-navigation-css">
                        <div class="news__prev  projects-prev-css"></div>
                        <div class="news__next  projects-next-css"></div>
                    </div>
                </div>
                <div class="news__slider">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide news__slide">
                            <div class="news__column">
                                <?php $posts = get_posts("category=15&orderby=date&numberposts=10"); ?>
                                <?php $chot = 0 ?>
                                <?php if ($posts) : ?>
                                    <?php foreach ($posts as $post) : setup_postdata($post); ?>

                                        <?php switch ($chot) {
                                            case '0': ?>
                                                <article class="news__article">
                                                    <a class="news__link" href="<?php the_permalink() ?>">
                                                        <div class="news__box">
                                                            <img class="news__img"
                                                                 src="<?php the_post_thumbnail_url() ?>"
                                                                 alt="alt">
                                                        </div>
                                                        <h3 class="news__subtitle">
                                                           <?php the_title() ?>
                                                        </h3>
                                                        <span class="news__btn">
                                                           Подробнее
                                                         </span>
                                                    </a>
                                                </article>
                                                <?php break ?>
                                            <?php case '1': ?>
                                                <article class="news__article">
                                                    <a class="news__link" href="<?php the_permalink() ?>">
                                                        <div class="news__box">
                                                            <img class="news__img"
                                                                 src="<?php the_post_thumbnail_url() ?>"
                                                                 alt="alt">
                                                        </div>
                                                        <h3 class="news__subtitle">
                                                            <?php the_title() ?>
                                                        </h3>
                                                        <span class="news__btn">
                                                           Подробнее
                                                         </span>
                                                    </a>
                                                </article>
                                                <?php break ?>
                                            <?php } ?>


                                        <?php $chot++ ?>
                                    <?php endforeach; ?>
                                <?php endif; ?>
                            </div>
                            <div class="news__column2">
                                <?php $posts = get_posts("category=15&orderby=date&numberposts=10"); ?>
                                <?php $chot = 0 ?>
                                <?php if ($posts) : ?>
                                    <?php foreach ($posts as $post) : setup_postdata($post); ?>

                                        <?php switch ($chot) {
                                            case '2': ?>
                                                <article class="news__article-horizontol">
                                                    <a class="news__link-horizontol" href="<?php the_permalink() ?>">
                                                        <div class="news__box-horizontol">
                                                            <img class="news__img"
                                                                 src="<?php the_post_thumbnail_url() ?>"
                                                                 alt="alt">
                                                        </div>
                                                        <h4 class="news__title-horizontol">
                                                            <?php the_title() ?>
                                                        </h4>
                                                    </a>
                                                </article>
                                                <?php break ?>
                                            <?php case '3': ?>
                                                <article class="news__article-horizontol">
                                                    <a class="news__link-horizontol" href="<?php the_permalink() ?>">
                                                        <div class="news__box-horizontol">
                                                            <img class="news__img"
                                                                 src="<?php the_post_thumbnail_url() ?>"
                                                                 alt="alt">
                                                        </div>
                                                        <h4 class="news__title-horizontol">
                                                            <?php the_title() ?>
                                                        </h4>
                                                    </a>
                                                </article>
                                                <?php break ?>
                                            <?php case '4': ?>
                                                <article class="news__article-horizontol">
                                                    <a class="news__link-horizontol" href="<?php the_permalink() ?>">
                                                        <div class="news__box-horizontol">
                                                            <img class="news__img"
                                                                 src="<?php the_post_thumbnail_url() ?>"
                                                                 alt="alt">
                                                        </div>
                                                        <h4 class="news__title-horizontol">
                                                            <?php the_title() ?>
                                                        </h4>
                                                    </a>
                                                </article>
                                                <?php break ?>
                                            <?php } ?>


                                        <?php $chot++ ?>
                                    <?php endforeach; ?>
                                <?php endif; ?>
                            </div>
                        </div>
                        <div class="swiper-slide news__slide">
                            <div class="news__column">
                                <?php $posts = get_posts("category=15&orderby=date&numberposts=10"); ?>
                                <?php $chot = 0 ?>
                                <?php if ($posts) : ?>
                                    <?php foreach ($posts as $post) : setup_postdata($post); ?>

                                        <?php switch ($chot) {
                                            case '5': ?>
                                                <article class="news__article">
                                                    <a class="news__link" href="<?php the_permalink() ?>">
                                                        <div class="news__box">
                                                            <img class="news__img"
                                                                 src="<?php the_post_thumbnail_url() ?>"
                                                                 alt="alt">
                                                        </div>
                                                        <h3 class="news__subtitle">
                                                            <?php the_title() ?>
                                                        </h3>
                                                        <span class="news__btn">
                                                           Подробнее
                                                         </span>
                                                    </a>
                                                </article>
                                                <?php break ?>
                                            <?php case '6': ?>
                                                <article class="news__article">
                                                    <a class="news__link" href="<?php the_permalink() ?>">
                                                        <div class="news__box">
                                                            <img class="news__img"
                                                                 src="<?php the_post_thumbnail_url() ?>"
                                                                 alt="alt">
                                                        </div>
                                                        <h3 class="news__subtitle">
                                                            <?php the_title() ?>
                                                        </h3>
                                                        <span class="news__btn">
                                                           Подробнее
                                                         </span>
                                                    </a>
                                                </article>
                                                <?php break ?>
                                            <?php } ?>


                                        <?php $chot++ ?>
                                    <?php endforeach; ?>
                                <?php endif; ?>
                            </div>
                            <div class="news__column2">
                                <?php $posts = get_posts("category=15&orderby=date&numberposts=10"); ?>
                                <?php $chot = 0 ?>
                                <?php if ($posts) : ?>
                                    <?php foreach ($posts as $post) : setup_postdata($post); ?>

                                        <?php switch ($chot) {
                                            case '7': ?>
                                                <article class="news__article-horizontol">
                                                    <a class="news__link-horizontol" href="<?php the_permalink() ?>">
                                                        <div class="news__box-horizontol">
                                                            <img class="news__img"
                                                                 src="<?php the_post_thumbnail_url() ?>"
                                                                 alt="alt">
                                                        </div>
                                                        <h4 class="news__title-horizontol">
                                                            <?php the_title() ?>
                                                        </h4>
                                                    </a>
                                                </article>
                                                <?php break ?>
                                            <?php case '8': ?>
                                                <article class="news__article-horizontol">
                                                    <a class="news__link-horizontol" href="<?php the_permalink() ?>">
                                                        <div class="news__box-horizontol">
                                                            <img class="news__img"
                                                                 src="<?php the_post_thumbnail_url() ?>"
                                                                 alt="alt">
                                                        </div>
                                                        <h4 class="news__title-horizontol">
                                                            <?php the_title() ?>
                                                        </h4>
                                                    </a>
                                                </article>
                                                <?php break ?>
                                            <?php case '9': ?>
                                                <article class="news__article-horizontol">
                                                    <a class="news__link-horizontol" href="<?php the_permalink() ?>">
                                                        <div class="news__box-horizontol">
                                                            <img class="news__img"
                                                                 src="<?php the_post_thumbnail_url() ?>"
                                                                 alt="alt">
                                                        </div>
                                                        <h4 class="news__title-horizontol">
                                                            <?php the_title() ?>
                                                        </h4>
                                                    </a>
                                                </article>
                                                <?php break ?>
                                            <?php } ?>


                                        <?php $chot++ ?>
                                    <?php endforeach; ?>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                    <div class="news__navigation projects-navigation-css">
                        <div class="news__prev  projects-prev-css"></div>
                        <div class="news__next  projects-next-css"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>





    <?php get_footer(); ?>


