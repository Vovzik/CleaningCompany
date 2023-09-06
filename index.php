<?php
/*
Template Name: Главная*/
?>


<?php get_header(); ?>

<main class="main">
    <section class="home">
        <div class="home__content" style="
                background-image: url('<?php bloginfo('template_url'); ?>/assets/img/home/decor.png');
                ">

            <div class="container home__container">
                <div class="home__inner">
                    <img class="home__fonmobail" src="<?php bloginfo('template_url'); ?>/assets/img/home/mobailFon.jpg"
                         alt="alt">
                    <h1 class="home__title">
                        Профессиональная уборка квартир, домов, офисов и других объектов
                    </h1>
                    <p class="home__text">
                        Уборка от пола до потолка в течение 6 часов. Рассчитайте стоимость уборки под ваши задачи.
                    </p>

                    <div class="home__buttons">
                        <a class="home__button" href="#">
                            Узнать стоимость уборки
                        </a>
                        <a class="home__button home__button__border" href="#">
                            Пригласить на тендер
                        </a>
                    </div>
                </div>
                <div class="home__items">
                    <div class="home__item">
                        <div class="home__item-box">
                            <h2 class="home__subtitle">
                                3
                            </h2>
                            <p class="home__subtext">
                                города присутствия
                            </p>
                        </div>
                    </div>
                    <div class="home__item">
                        <div class="home__item-box">
                            <h2 class="home__subtitle">
                                +120
                            </h2>
                            <p class="home__subtext">
                                постоянных партнеров, которые нам доверяют
                            </p>
                        </div>
                    </div>
                    <div class="home__item">
                        <div class="home__item-box">
                            <h2 class="home__subtitle">
                                +50
                            </h2>
                            <p class="home__subtext">
                                экспертов по уборке в штате каждого города
                            </p>
                        </div>
                    </div>
                    <div class="home__item">
                        <div class="home__item-box">
                            <h2 class="home__subtitle">
                                10
                            </h2>
                            <p class="home__subtext">
                                лет на рынке предоставляет услуги клининга
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="economy">
        <div class="economy__content"
             style="background-image: url('<?php bloginfo('template_url'); ?>/assets/img/economy/fon.png');">
            <div class="container">
                <div class="economy__inner">
                    <h2 class="economy__title">
                        Наша задача - экономия вашего времени
                    </h2>
                    <a class="economy__btn" href="#">
                        Читать о компании
                    </a>
                </div>
                <blockquote class="economy__blockquote">
                    <p>
                        “Мы предлагаем клиентам огромное количество услуг - выполнение различных типов уборок от жилых
                        квартир до офисных центров и производственных помещений любой площади. Благодаря нашим
                        специалистам, современной техники и профессионально чистящим средствам мы можем удалить
                        практически любое загрязнение”
                    </p>
                    <span class="economy__director">
                            Дмитрий (Директор компании)
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
                        Основные услуги
                    </h2>
                    <div class="tabs-items">
                        <div class="services__buttons">
                            <div class="services__tabs-item tabs-item active">
                                Для юридических лиц
                            </div>
                            <div class="services__tabs-item tabs-item">
                                Для физических лиц
                            </div>
                        </div>
                        <div class="services__tabs-body  tabs-body open">
                            <div class="services__items">
                                <a class="services__item" href="#">
                                    <div class="services__item-box">


                                        <img class="services__item-img"
                                             src="<?php bloginfo('template_url'); ?>/assets/img/services/1.jpg"
                                             alt="alt">
                                        <h3 class="services__subtitle">
                                            Уборка офисов
                                        </h3>
                                        <p class="services__text">
                                            от 40 ₽ / м2
                                        </p>
                                    </div>
                                    <span class="services__btn">
                                    Перейти
                                </span>
                                </a>
                                <a class="services__item" href="#">
                                    <div class="services__item-box">


                                        <img class="services__item-img"
                                             src="<?php bloginfo('template_url'); ?>/assets/img/services/2.jpg"
                                             alt="alt">
                                        <h3 class="services__subtitle">
                                            Уборка коммерческих помещений
                                        </h3>
                                        <p class="services__text">
                                            от 50 ₽ / м2
                                        </p>
                                    </div>
                                    <span class="services__btn">
                                    Перейти
                                </span>
                                </a>
                                <a class="services__item" href="#">
                                    <div class="services__item-box">


                                        <img class="services__item-img"
                                             src="<?php bloginfo('template_url'); ?>/assets/img/services/3.jpg"
                                             alt="alt">
                                        <h3 class="services__subtitle">
                                            Уборка территорий
                                        </h3>
                                        <p class="services__text">
                                            от 40 ₽ / м2
                                        </p>
                                    </div>
                                    <span class="services__btn">
                                    Перейти
                                </span>
                                </a>
                                <a class="services__item" href="#">
                                    <div class="services__item-box">
                                        <img class="services__item-img"
                                             src="<?php bloginfo('template_url'); ?>/assets/img/services/4.jpg"
                                             alt="alt">
                                        <h3 class="services__subtitle">
                                            Мойка и химчистка
                                        </h3>
                                        <p class="services__text">
                                            от 40 ₽ / м2
                                        </p>
                                    </div>
                                    <span class="services__btn">
                                    Перейти
                                </span>
                                </a>
                                <a class="services__item" href="#">
                                    <div class="services__item-box">
                                        <img class="services__item-img"
                                             src="<?php bloginfo('template_url'); ?>/assets/img/services/5.jpg"
                                             alt="alt">
                                        <h3 class="services__subtitle">
                                            Гардеробное обслуживание
                                        </h3>
                                        <p class="services__text">
                                            от 40 ₽ / м2
                                        </p>
                                    </div>
                                    <span class="services__btn">
                                    Перейти
                                </span>
                                </a>
                                <a class="services__item" href="#">
                                    <div class="services__item-box">
                                        <img class="services__item-img"
                                             src="<?php bloginfo('template_url'); ?>/assets/img/services/6.jpg"
                                             alt="alt">
                                        <h3 class="services__subtitle">
                                            Дезинфекция
                                        </h3>
                                        <p class="services__text">
                                            от 40 ₽ / м2
                                        </p>
                                    </div>
                                    <span class="services__btn">
                                    Перейти
                                </span>
                                </a>
                                <a class="services__item" href="#">
                                    <div class="services__item-box">
                                        <img class="services__item-img"
                                             src="<?php bloginfo('template_url'); ?>/assets/img/services/7.jpg"
                                             alt="alt">
                                        <h3 class="services__subtitle">
                                            Сервис сменных ковров
                                        </h3>
                                        <p class="services__text">
                                            от 40 ₽ / м2
                                        </p>
                                    </div>
                                    <span class="services__btn">
                                    Перейти
                                </span>
                                </a>
                                <a class="services__item" href="#">
                                    <div class="services__item-box">


                                        <img class="services__item-img"
                                             src="<?php bloginfo('template_url'); ?>/assets/img/services/8.jpg"
                                             alt="alt">
                                        <h3 class="services__subtitle">
                                            Химчистка
                                        </h3>
                                        <p class="services__text">
                                            от 1200 ₽ / ед.
                                        </p></div>

                                    <span class="services__btn">
                                    Перейти
                                </span>
                                </a>
                                <a class="services__item" href="#">
                                    <div class="services__item-box">
                                        <h3 class="services__subtitle">
                                            Перейдите, чтобы посмотреть больше услуг
                                        </h3>
                                    </div>
                                    <span class="services__btn">
                                    Перейти
                                </span>
                                </a>
                            </div>
                        </div>
                        <div class="services__tabs-body tabs-body">
                            <div class="services__items">
                                <a class="services__item" href="#">
                                    <div class="services__item-box">


                                        <img class="services__item-img"
                                             src="<?php bloginfo('template_url'); ?>/assets/img/services/1.jpg"
                                             alt="alt">
                                        <h3 class="services__subtitle">
                                            Уборка офисов
                                        </h3>
                                        <p class="services__text">
                                            от 40 ₽ / м2
                                        </p>
                                    </div>
                                    <span class="services__btn">
                                    Перейти
                                </span>
                                </a>
                                <a class="services__item" href="#">
                                    <div class="services__item-box">


                                        <img class="services__item-img"
                                             src="<?php bloginfo('template_url'); ?>/assets/img/services/2.jpg"
                                             alt="alt">
                                        <h3 class="services__subtitle">
                                            Уборка коммерческих помещений
                                        </h3>
                                        <p class="services__text">
                                            от 50 ₽ / м2
                                        </p>
                                    </div>
                                    <span class="services__btn">
                                    Перейти
                                </span>
                                </a>
                                <a class="services__item" href="#">
                                    <div class="services__item-box">


                                        <img class="services__item-img"
                                             src="<?php bloginfo('template_url'); ?>/assets/img/services/3.jpg"
                                             alt="alt">
                                        <h3 class="services__subtitle">
                                            Уборка территорий
                                        </h3>
                                        <p class="services__text">
                                            от 40 ₽ / м2
                                        </p>
                                    </div>
                                    <span class="services__btn">
                                    Перейти
                                </span>
                                </a>
                                <a class="services__item" href="#">
                                    <div class="services__item-box">
                                        <img class="services__item-img"
                                             src="<?php bloginfo('template_url'); ?>/assets/img/services/4.jpg"
                                             alt="alt">
                                        <h3 class="services__subtitle">
                                            Мойка и химчистка
                                        </h3>
                                        <p class="services__text">
                                            от 40 ₽ / м2
                                        </p>
                                    </div>
                                    <span class="services__btn">
                                    Перейти
                                </span>
                                </a>
                                <a class="services__item" href="#">
                                    <div class="services__item-box">
                                        <img class="services__item-img"
                                             src="<?php bloginfo('template_url'); ?>/assets/img/services/5.jpg"
                                             alt="alt">
                                        <h3 class="services__subtitle">
                                            Гардеробное обслуживание
                                        </h3>
                                        <p class="services__text">
                                            от 40 ₽ / м2
                                        </p>
                                    </div>
                                    <span class="services__btn">
                                    Перейти
                                </span>
                                </a>
                                <a class="services__item" href="#">
                                    <div class="services__item-box">
                                        <img class="services__item-img"
                                             src="<?php bloginfo('template_url'); ?>/assets/img/services/6.jpg"
                                             alt="alt">
                                        <h3 class="services__subtitle">
                                            Дезинфекция
                                        </h3>
                                        <p class="services__text">
                                            от 40 ₽ / м2
                                        </p>
                                    </div>
                                    <span class="services__btn">
                                    Перейти
                                </span>
                                </a>
                                <a class="services__item" href="#">
                                    <div class="services__item-box">
                                        <img class="services__item-img"
                                             src="<?php bloginfo('template_url'); ?>/assets/img/services/7.jpg"
                                             alt="alt">
                                        <h3 class="services__subtitle">
                                            Сервис сменных ковров
                                        </h3>
                                        <p class="services__text">
                                            от 40 ₽ / м2
                                        </p>
                                    </div>
                                    <span class="services__btn">
                                    Перейти
                                </span>
                                </a>
                                <a class="services__item" href="#">
                                    <div class="services__item-box">


                                        <img class="services__item-img"
                                             src="<?php bloginfo('template_url'); ?>/assets/img/services/8.jpg"
                                             alt="alt">
                                        <h3 class="services__subtitle">
                                            Химчистка
                                        </h3>
                                        <p class="services__text">
                                            от 1200 ₽ / ед.
                                        </p></div>

                                    <span class="services__btn">
                                    Перейти
                                </span>
                                </a>
                                <a class="services__item" href="#">
                                    <div class="services__item-box">
                                        <h3 class="services__subtitle">
                                            Перейдите, чтобы посмотреть больше услуг
                                        </h3>
                                    </div>
                                    <span class="services__btn">
                                    Перейти
                                </span>
                                </a>
                            </div>
                        </div>

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
                            Узнайте примерную цену по фото
                        </h2>
                        <p>
                            Пришлите нам фото помещения и комментарии в любой удобный мессенджер, а мы сделаем для вас
                            примерный расчет!
                        </p>
                        <div class="info-price-photo__socials">
                            <div class="info-price-photo__sms">
                                Напишите нам
                            </div>
                            <div class="info-price-photo__block">
                                <a class="info-price-photo__social" href="#">
                                    <img class="info-price-photo__icon"
                                         src="<?php bloginfo('template_url'); ?>/assets/img/price/telegram.svg"
                                         alt="alt">
                                </a>
                                <a class="info-price-photo__social" href="#">
                                    <img class="info-price-photo__icon"
                                         src="<?php bloginfo('template_url'); ?>/assets/img/price/vk.svg" alt="alt">
                                </a>
                                <a class="info-price-photo__social" href="#">
                                    <img class="info-price-photo__icon"
                                         src="<?php bloginfo('template_url'); ?>/assets/img/price/watshap.svg"
                                         alt="alt">
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="info-price-photo__images">
                        <img class="info-price-photo__img"
                             src="<?php bloginfo('template_url'); ?>/assets/img/price/img.jpg" alt="alt">
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
                        Выполненные проекты
                    </h2>
                    <div class="projects__view">
                        <p class="projects__text">
                            Наши клинеры приезжают в назначенное время со всем необходимым и сразу приступают к делу.
                            Вам остаётся только оценить результат.
                        </p>
                        <a class="projects__btn projects-btn" href="#">
                            Посмотреть все работы
                        </a>
                    </div>
                </div>
                <div class="projects-slider-js projects__slider-css">
                    <div class="swiper-wrapper projects__swiper-wrapper">
                        <div class="swiper-slide projects__swiper-slide">
                            <div class="projects__box">
                                <img class="projects__img"
                                     src="<?php bloginfo('template_url'); ?>/assets/img/projects/1.png" alt="alt">
                            </div>
                            <h3 class="projects__subtitle">
                                Уборка офиса после ремонта
                            </h3>
                            <div class="projects__items">
                                <div class="projects__item">
                                    <img class="projects__icon"
                                         src="<?php bloginfo('template_url'); ?>/assets/img/projects/timer.svg"
                                         alt="alt">
                                    Сроки работ: 8 ч.
                                </div>
                                <div class="projects__item">
                                    <img class="projects__icon"
                                         src="<?php bloginfo('template_url'); ?>/assets/img/projects/price.svg"
                                         alt="alt">
                                    Стоимость: 60.000 ₽
                                </div>
                                <div class="projects__item">
                                    <img class="projects__icon"
                                         src="<?php bloginfo('template_url'); ?>/assets/img/projects/square_.svg"
                                         alt="alt">
                                    Площадь: 110 м²
                                </div>
                                <div class="projects__item">
                                    <img class="projects__icon"
                                         src="<?php bloginfo('template_url'); ?>/assets/img/projects/square_.svg"
                                         alt="alt">
                                    Площадь: 110 м²
                                </div>
                                <div class="projects__item">
                                    <img class="projects__icon"
                                         src="<?php bloginfo('template_url'); ?>/assets/img/projects/square_.svg"
                                         alt="alt">
                                    Площадь: 110 м²
                                </div>
                                <div class="projects__item">
                                    <img class="projects__icon"
                                         src="<?php bloginfo('template_url'); ?>/assets/img/projects/square_.svg"
                                         alt="alt">
                                    Площадь: 110 м²
                                </div>
                            </div>
                            <ul class="projects__list">
                                <li class="projects__list-item">
                                    1. Отмыли двери от остатков краски
                                </li>
                                <li class="projects__list-item">
                                    2. Обеспылили потолок, стены
                                </li>
                                <li class="projects__list-item">
                                    3. Отмыли двери от остатков краски
                                </li>
                                <li class="projects__list-item">
                                    4. Отмыли двери от остатков краски
                                </li>
                            </ul>
                            <ul class="projects__list projects-list-css projects-list-js">
                                <li class="projects__list-item">
                                    1. Отмыли двери от остатков краски
                                </li>
                                <li class="projects__list-item">
                                    2. Обеспылили потолок, стены
                                </li>
                                <li class="projects__list-item">
                                    3. Отмыли двери от остатков краски
                                </li>
                                <li class="projects__list-item">
                                    4. Отмыли двери от остатков краски
                                </li>
                                <li class="projects__list-item">
                                    1. Отмыли двери от остатков краски
                                </li>
                                <li class="projects__list-item">
                                    2. Обеспылили потолок, стены
                                </li>
                                <li class="projects__list-item">
                                    3. Отмыли двери от остатков краски
                                </li>
                                <li class="projects__list-item">
                                    4. Отмыли двери от остатков краски
                                </li>
                            </ul>
                            <span class="projects__read-more projects-read-more-js">
                                Читать больше
                            </span>
                        </div>
                        <div class="swiper-slide projects__swiper-slide">
                            <div class="projects__box">
                                <img class="projects__img"
                                     src="<?php bloginfo('template_url'); ?>/assets/img/projects/1.png" alt="alt">
                            </div>
                            <h3 class="projects__subtitle">
                                Уборка офиса после ремонта
                            </h3>
                            <div class="projects__items">
                                <div class="projects__item">
                                    <img class="projects__icon"
                                         src="<?php bloginfo('template_url'); ?>/assets/img/projects/timer.svg"
                                         alt="alt">
                                    Сроки работ: 8 ч.
                                </div>
                                <div class="projects__item">
                                    <img class="projects__icon"
                                         src="<?php bloginfo('template_url'); ?>/assets/img/projects/price.svg"
                                         alt="alt">
                                    Стоимость: 60.000 ₽
                                </div>
                                <div class="projects__item">
                                    <img class="projects__icon"
                                         src="<?php bloginfo('template_url'); ?>/assets/img/projects/square_.svg"
                                         alt="alt">
                                    Площадь: 110 м²
                                </div>
                            </div>
                            <ul class="projects__list">
                                <li class="projects__list-item">
                                    1. Отмыли двери от остатков краски
                                </li>
                                <li class="projects__list-item">
                                    2. Обеспылили потолок, стены
                                </li>
                                <li class="projects__list-item">
                                    3. Отмыли двери от остатков краски
                                </li>
                                <li class="projects__list-item">
                                    4. Отмыли двери от остатков краски
                                </li>
                            </ul>
                            <ul class="projects__list projects-list-css projects-list-js">
                                <li class="projects__list-item">
                                    1. Отмыли двери от остатков краски
                                </li>
                                <li class="projects__list-item">
                                    2. Обеспылили потолок, стены
                                </li>
                                <li class="projects__list-item">
                                    3. Отмыли двери от остатков краски
                                </li>
                                <li class="projects__list-item">
                                    4. Отмыли двери от остатков краски
                                </li>
                            </ul>
                            <span class="projects__read-more projects-read-more-js">
                                Читать больше
                            </span>
                        </div>
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
                        Отзывы
                    </h2>
                    <p class="reviews__text">
                        Мы ценим вас и в ответ благодарим всех Клиентов за выбор нас – CleanUp Company!
                    </p>
                </div>
                <div class="reviews__slider">
                    <div class="swiper-wrapper">
                        <a class="swiper-slide reviews__slide"
                           href="<?php bloginfo('template_url'); ?>/assets/img/reviews/zoom.jpg"
                           data-fancybox="gallery">
                            <img class="reviews__img" src="<?php bloginfo('template_url'); ?>/assets/img/reviews/1.jpg"
                                 alt="Сертификат">
                        </a>
                        <a class="swiper-slide reviews__slide"
                           href="<?php bloginfo('template_url'); ?>/assets/img/reviews/2.jpg" data-fancybox="gallery">
                            <img class="reviews__img" src="<?php bloginfo('template_url'); ?>/assets/img/reviews/2.jpg"
                                 alt="Сертификат">
                        </a>
                        <a class="swiper-slide reviews__slide"
                           href="<?php bloginfo('template_url'); ?>/assets/img/reviews/3.jpg" data-fancybox="gallery">
                            <img class="reviews__img" src="<?php bloginfo('template_url'); ?>/assets/img/reviews/3.jpg"
                                 alt="Сертификат">
                        </a>
                        <a class="swiper-slide reviews__slide"
                           href="<?php bloginfo('template_url'); ?>/assets/img/reviews/4.jpg" data-fancybox="gallery">
                            <img class="reviews__img" src="<?php bloginfo('template_url'); ?>/assets/img/reviews/4.jpg"
                                 alt="Сертификат">
                        </a>
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
                    Нам доверяют
                </h2>
                <div class="confidence__items">
                    <div class="confidence__item">
                        <img class="confidence__img"
                             src="<?php bloginfo('template_url'); ?>/assets/img/confidence/1.svg" alt="alt">
                    </div>
                    <div class="confidence__item">
                        <img class="confidence__img"
                             src="<?php bloginfo('template_url'); ?>/assets/img/confidence/2.svg" alt="alt">
                    </div>
                    <div class="confidence__item">
                        <img class="confidence__img"
                             src="<?php bloginfo('template_url'); ?>/assets/img/confidence/3.svg" alt="alt">
                    </div>
                    <div class="confidence__item">
                        <img class="confidence__img"
                             src="<?php bloginfo('template_url'); ?>/assets/img/confidence/4.svg" alt="alt">
                    </div>
                    <div class="confidence__item">
                        <img class="confidence__img"
                             src="<?php bloginfo('template_url'); ?>/assets/img/confidence/5.svg" alt="alt">
                    </div>
                    <div class="confidence__item">
                        <img class="confidence__img"
                             src="<?php bloginfo('template_url'); ?>/assets/img/confidence/6.svg" alt="alt">
                    </div>
                    <div class="confidence__item">
                        <img class="confidence__img"
                             src="<?php bloginfo('template_url'); ?>/assets/img/confidence/7.svg" alt="alt">
                    </div>
                    <div class="confidence__item">
                        <img class="confidence__img"
                             src="<?php bloginfo('template_url'); ?>/assets/img/confidence/8.svg" alt="alt">
                    </div>
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
                                                 src="<?php bloginfo('template_url'); ?>/assets/img/news/3.jpg" alt="alt">
                                        </div>
                                        <h4 class="news__title-horizontol">
                                            Повысили квалификацию по дезинфекции онлайн
                                        </h4>
                                    </a>
                                </article>
                                <article class="news__article-horizontol">
                                    <a class="news__link-horizontol"    href="#">
                                        <div class="news__box-horizontol">
                                            <img class="news__img"
                                                 src="<?php bloginfo('template_url'); ?>/assets/img/news/4.jpg" alt="alt">
                                        </div>
                                        <h4 class="news__title-horizontol">
                                            Менеджеры нашей компании посетили семинары «Академии клининга KIEHL» в Москве
                                        </h4>
                                    </a>
                                </article>
                                <article class="news__article-horizontol">
                                    <a class="news__link-horizontol" href="#">
                                        <div class="news__box-horizontol">
                                            <img class="news__img"
                                                 src="<?php bloginfo('template_url'); ?>/assets/img/news/5.jpg" alt="alt">
                                        </div>
                                        <h4 class="news__title-horizontol">
                                            Менеджеры нашей компании прошли регистрацию на выставку HYGIENALIA + PULIRE 2019
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
                                                 src="<?php bloginfo('template_url'); ?>/assets/img/news/3.jpg" alt="alt">
                                        </div>
                                        <h4 class="news__title-horizontol">
                                            Повысили квалификацию по дезинфекции онлайн
                                        </h4>
                                    </a>
                                </article>
                                <article class="news__article-horizontol">
                                    <a class="news__link-horizontol"    href="#">
                                        <div class="news__box-horizontol">
                                            <img class="news__img"
                                                 src="<?php bloginfo('template_url'); ?>/assets/img/news/4.jpg" alt="alt">
                                        </div>
                                        <h4 class="news__title-horizontol">
                                            Менеджеры нашей компании посетили семинары «Академии клининга KIEHL» в Москве
                                        </h4>
                                    </a>
                                </article>
                                <article class="news__article-horizontol">
                                    <a class="news__link-horizontol" href="#">
                                        <div class="news__box-horizontol">
                                            <img class="news__img"
                                                 src="<?php bloginfo('template_url'); ?>/assets/img/news/5.jpg" alt="alt">
                                        </div>
                                        <h4 class="news__title-horizontol">
                                            Менеджеры нашей компании прошли регистрацию на выставку HYGIENALIA + PULIRE 2019
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
                                                 src="<?php bloginfo('template_url'); ?>/assets/img/news/3.jpg" alt="alt">
                                        </div>
                                        <h4 class="news__title-horizontol">
                                            Повысили квалификацию по дезинфекции онлайн
                                        </h4>
                                    </a>
                                </article>
                                <article class="news__article-horizontol">
                                    <a class="news__link-horizontol"    href="#">
                                        <div class="news__box-horizontol">
                                            <img class="news__img"
                                                 src="<?php bloginfo('template_url'); ?>/assets/img/news/4.jpg" alt="alt">
                                        </div>
                                        <h4 class="news__title-horizontol">
                                            Менеджеры нашей компании посетили семинары «Академии клининга KIEHL» в Москве
                                        </h4>
                                    </a>
                                </article>
                                <article class="news__article-horizontol">
                                    <a class="news__link-horizontol" href="#">
                                        <div class="news__box-horizontol">
                                            <img class="news__img"
                                                 src="<?php bloginfo('template_url'); ?>/assets/img/news/5.jpg" alt="alt">
                                        </div>
                                        <h4 class="news__title-horizontol">
                                            Менеджеры нашей компании прошли регистрацию на выставку HYGIENALIA + PULIRE 2019
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

