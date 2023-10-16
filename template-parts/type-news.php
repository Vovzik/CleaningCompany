<?php
global $post;
?>

<?php
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
    <section class="news-and-articles">
        <div class="news-and-articles__content">
            <div class="container">
                <h1 class="news-and-articles__title title">
                    Новости и статьи
                </h1>
                <div class="news-and-articles__items">
                    <?php $posts = get_posts("category=15&numberposts=-1"); ?>
                    <?php if ($posts) : ?>
                        <?php foreach ($posts as $post) : setup_postdata($post); ?>
                            <a class="news-and-articles__item" href="<?php the_permalink() ?>">
                                <div class="news-and-articles__box">
                                    <img class="news-and-articles__img"  src="<?php the_post_thumbnail_url() ?>" alt="alt">
                                </div>
                                <h2 class="news-and-articles__subtitle">
                                    <?php the_title() ?>
                                </h2>
                                <p class="news-and-articles__text">
                                    <?php the_truncated_post( 300 ); ?>
                                </p>
                                <span class="news-and-articles__btn">
                            Подробнее...
                        </span>
                            </a>
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
                                <article class="news__article">
                                    <a class="news__link" href="#">
                                        <div class="news__box">
                                            <img class="news__img"
                                                 src="<?php bloginfo('template_url'); ?>/assets/img/news/1.jpg"
                                                 alt="alt">
                                        </div>
                                        <h3 class="news__subtitle">
                                            Провели чистку и дезинфекцию фасада архивного комитета Санкт-Петербурга
                                        </h3>
                                        <span class="news__btn">
                                            Подробнее
                                        </span>
                                    </a>
                                </article>
                                <article class="news__article">
                                    <a class="news__link" href="#">
                                        <div class="news__box">
                                            <img class="news__img"
                                                 src="<?php bloginfo('template_url'); ?>/assets/img/news/2.jpg"
                                                 alt="alt">
                                        </div>
                                        <h3 class="news__subtitle">
                                            Мы на CLEANEXPO 2020 MOSCOW и бизнес-сессии
                                        </h3>
                                        <span class="news__btn">
                                            Подробнее
                                        </span>
                                    </a>
                                </article>
                            </div>
                            <div class="news__column2">
                                <article class="news__article-horizontol">
                                    <a class="news__link-horizontol" href="#">
                                        <div class="news__box-horizontol">
                                            <img class="news__img"
                                                 src="<?php bloginfo('template_url'); ?>/assets/img/news/3.jpg"
                                                 alt="alt">
                                        </div>
                                        <h4 class="news__title-horizontol">
                                            Повысили квалификацию по дезинфекции онлайн
                                        </h4>
                                    </a>
                                </article>
                                <article class="news__article-horizontol">
                                    <a class="news__link-horizontol" href="#">
                                        <div class="news__box-horizontol">
                                            <img class="news__img"
                                                 src="<?php bloginfo('template_url'); ?>/assets/img/news/4.jpg"
                                                 alt="alt">
                                        </div>
                                        <h4 class="news__title-horizontol">
                                            Менеджеры нашей компании посетили семинары «Академии клининга KIEHL» в
                                            Москве
                                        </h4>
                                    </a>
                                </article>
                                <article class="news__article-horizontol">
                                    <a class="news__link-horizontol" href="#">
                                        <div class="news__box-horizontol">
                                            <img class="news__img"
                                                 src="<?php bloginfo('template_url'); ?>/assets/img/news/5.jpg"
                                                 alt="alt">
                                        </div>
                                        <h4 class="news__title-horizontol">
                                            Менеджеры нашей компании прошли регистрацию на выставку HYGIENALIA + PULIRE
                                            2019
                                        </h4>
                                    </a>
                                </article>
                            </div>
                        </div>
                        <div class="swiper-slide news__slide">
                            <div class="news__column">
                                <article class="news__article">
                                    <a class="news__link" href="#">
                                        <div class="news__box">
                                            <img class="news__img"
                                                 src="<?php bloginfo('template_url'); ?>/assets/img/news/1.jpg"
                                                 alt="alt">
                                        </div>
                                        <h3 class="news__subtitle">
                                            Провели чистку и дезинфекцию фасада архивного комитета Санкт-Петербурга
                                        </h3>
                                        <span class="news__btn">
                                            Подробнее
                                        </span>
                                    </a>
                                </article>
                                <article class="news__article">
                                    <a class="news__link" href="#">
                                        <div class="news__box">
                                            <img class="news__img"
                                                 src="<?php bloginfo('template_url'); ?>/assets/img/news/2.jpg"
                                                 alt="alt">
                                        </div>
                                        <h3 class="news__subtitle">
                                            Мы на CLEANEXPO 2020 MOSCOW и бизнес-сессии
                                        </h3>
                                        <span class="news__btn">
                                            Подробнее
                                        </span>
                                    </a>
                                </article>
                            </div>
                            <div class="news__column2">
                                <article class="news__article-horizontol">
                                    <a class="news__link-horizontol" href="#">
                                        <div class="news__box-horizontol">
                                            <img class="news__img"
                                                 src="<?php bloginfo('template_url'); ?>/assets/img/news/3.jpg"
                                                 alt="alt">
                                        </div>
                                        <h4 class="news__title-horizontol">
                                            Повысили квалификацию по дезинфекции онлайн
                                        </h4>
                                    </a>
                                </article>
                                <article class="news__article-horizontol">
                                    <a class="news__link-horizontol" href="#">
                                        <div class="news__box-horizontol">
                                            <img class="news__img"
                                                 src="<?php bloginfo('template_url'); ?>/assets/img/news/4.jpg"
                                                 alt="alt">
                                        </div>
                                        <h4 class="news__title-horizontol">
                                            Менеджеры нашей компании посетили семинары «Академии клининга KIEHL» в
                                            Москве
                                        </h4>
                                    </a>
                                </article>
                                <article class="news__article-horizontol">
                                    <a class="news__link-horizontol" href="#">
                                        <div class="news__box-horizontol">
                                            <img class="news__img"
                                                 src="<?php bloginfo('template_url'); ?>/assets/img/news/5.jpg"
                                                 alt="alt">
                                        </div>
                                        <h4 class="news__title-horizontol">
                                            Менеджеры нашей компании прошли регистрацию на выставку HYGIENALIA + PULIRE
                                            2019
                                        </h4>
                                    </a>
                                </article>
                            </div>
                        </div>
                        <div class="swiper-slide news__slide">
                            <div class="news__column">
                                <article class="news__article">
                                    <a class="news__link" href="#">
                                        <div class="news__box">
                                            <img class="news__img"
                                                 src="<?php bloginfo('template_url'); ?>/assets/img/news/1.jpg"
                                                 alt="alt">
                                        </div>
                                        <h3 class="news__subtitle">
                                            Провели чистку и дезинфекцию фасада архивного комитета Санкт-Петербурга
                                        </h3>
                                        <span class="news__btn">
                                            Подробнее
                                        </span>
                                    </a>
                                </article>
                                <article class="news__article">
                                    <a class="news__link" href="#">
                                        <div class="news__box">
                                            <img class="news__img"
                                                 src="<?php bloginfo('template_url'); ?>/assets/img/news/2.jpg"
                                                 alt="alt">
                                        </div>
                                        <h3 class="news__subtitle">
                                            Мы на CLEANEXPO 2020 MOSCOW и бизнес-сессии
                                        </h3>
                                        <span class="news__btn">
                                            Подробнее
                                        </span>
                                    </a>
                                </article>
                            </div>
                            <div class="news__column2">
                                <article class="news__article-horizontol">
                                    <a class="news__link-horizontol" href="#">
                                        <div class="news__box-horizontol">
                                            <img class="news__img"
                                                 src="<?php bloginfo('template_url'); ?>/assets/img/news/3.jpg"
                                                 alt="alt">
                                        </div>
                                        <h4 class="news__title-horizontol">
                                            Повысили квалификацию по дезинфекции онлайн
                                        </h4>
                                    </a>
                                </article>
                                <article class="news__article-horizontol">
                                    <a class="news__link-horizontol" href="#">
                                        <div class="news__box-horizontol">
                                            <img class="news__img"
                                                 src="<?php bloginfo('template_url'); ?>/assets/img/news/4.jpg"
                                                 alt="alt">
                                        </div>
                                        <h4 class="news__title-horizontol">
                                            Менеджеры нашей компании посетили семинары «Академии клининга KIEHL» в
                                            Москве
                                        </h4>
                                    </a>
                                </article>
                                <article class="news__article-horizontol">
                                    <a class="news__link-horizontol" href="#">
                                        <div class="news__box-horizontol">
                                            <img class="news__img"
                                                 src="<?php bloginfo('template_url'); ?>/assets/img/news/5.jpg"
                                                 alt="alt">
                                        </div>
                                        <h4 class="news__title-horizontol">
                                            Менеджеры нашей компании прошли регистрацию на выставку HYGIENALIA + PULIRE
                                            2019
                                        </h4>
                                    </a>
                                </article>
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
