<?php
//Template Name: Ежедневная уборка офисов
?>

<?php get_header(); ?>
<main class="main">
    <section class="home home-office">
        <div class="home__content" style="
            background-image: url('<?php bloginfo('template_url'); ?>/assets/img/home/decor.png');
            ">

            <div class="container home__container">
                <ul class="breadcrumbs">
                    <li><a href="#">Главная / </a></li>
                    <li><a href="#">Главная / </a></li>
                    <li><a href="#">Главная / </a></li>
                    <li>Профессиональная уборка офисов</li>
                </ul>
                <div class="home__inner">
                    <div class="home-office__info">


                        <img class="home__fonmobail"
                             src="<?php bloginfo('template_url'); ?>/assets/img/home/mobailFon.jpg"
                             alt="alt">
                        <h1 class="home__title">
                            Профессиональная уборка офисов в городе Санкт-Петербург от 40 ₽/м2
                        </h1>
                        <p class="home__text">
                            Уберемся в офисе после ремонта, переезда или корпоратива. Поддержим ежедневную чистоту.
                        </p>

                        <div class="home__buttons">
                            <a class="home__button" href="#">
                                Заказать уборку
                            </a>
                            <a class="home__button home__button__border" href="#">
                                Пригласить на тендер
                            </a>
                        </div>
                    </div>
                    <form class="home-office__form">
                        <div class="home-office__box">
                            <div class="home-office__text">
                                Тип услуги
                            </div>
                            <div class="select">
                                <div class="select__trigger">
                                    <span>Ежедневная</span>
                                    <div class="select__arrow">
                                        <svg width="8" height="11" viewBox="0 0 8 11" fill="none"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path d="M3.64645 10.3536C3.84171 10.5488 4.15829 10.5488 4.35355 10.3536L7.53553 7.17157C7.7308 6.97631 7.7308 6.65973 7.53553 6.46447C7.34027 6.2692 7.02369 6.2692 6.82843 6.46447L4 9.29289L1.17157 6.46447C0.97631 6.2692 0.659728 6.2692 0.464466 6.46447C0.269204 6.65973 0.269204 6.97631 0.464466 7.17157L3.64645 10.3536ZM3.5 -2.18557e-08L3.5 10L4.5 10L4.5 2.18557e-08L3.5 -2.18557e-08Z"
                                                  fill="black"/>
                                        </svg>
                                    </div>
                                </div>
                                <div class="select__drop">
                                    <ul class="select__list select__scroll">
                                        <li>
                                            <input id="select_0" type="radio" name="select"/>
                                            <label for="select_0">Индивидуальный предприниматель</label>
                                        </li>
                                        <li>
                                            <input id="select_1" type="radio" name="select"/>
                                            <label for="select_1">ООО</label>
                                        </li>
                                        <li>
                                            <input id="select_2" type="radio" name="select"/>
                                            <label for="select_2">Физ. лицо</label>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="home-office__box">
                            <div class="home-office__text">
                                Площадь
                            </div>
                            <div class="home-office__box-input">
                                <input class="home-office__input" placeholder="67" type="number">
                                <div class="home-office__m2">
                                    м2
                                </div>
                            </div>

                        </div>
                        <div class="home-office__box">
                            <div class="home-office__text">
                                Телефон:
                            </div>
                            <div class="home-office__box-input">
                                <input class="home-office__input phone" placeholder="+7" type="tel">
                            </div>
                        </div>
                        <div class="home-office__inner-bottom">
                            <div class="home-office__info-price">
                                <output class="home-office__output">
                                    10 000 ₽
                                </output>
                                <div class="home-office__output-text">
                                    Финальный расчет делается индивидуально
                                </div>
                            </div>
                            <button class="home-office__btn" type="submit">
                                Запросить рассчет
                            </button>
                        </div>
                    </form>
                </div>
                <div class="home__items">
                    <div class="home__item">
                        <div class="home__item-box">
                            <h2 class="home__subtitle">
                                от 11 руб./м²
                            </h2>
                            <p class="home__subtext">
                                Более 7500 выполненных заказов
                            </p>
                        </div>
                    </div>
                    <div class="home__item">
                        <div class="home__item-box">
                            <h2 class="home__subtitle">
                                Рассрочка платежа
                            </h2>
                            <p class="home__subtext">
                                Гарантия качества и сохранности вашего имущества в договоре.
                            </p>
                        </div>
                    </div>
                    <div class="home__item">
                        <div class="home__item-box">
                            <h2 class="home__subtitle">
                                12% скидка
                            </h2>
                            <p class="home__subtext">
                                Бесплатный выезд на место и оценка объекта
                            </p>
                        </div>
                    </div>
                    <div class="home__item">
                        <div class="home__item-box">
                            <h2 class="home__subtitle">
                                Бесплатный выезд
                            </h2>
                            <p class="home__subtext">
                                За результат после уборки, любым удобным способом. Без предоплаты.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="cleaning">
        <div class="cleaning__content">
                <div class="cleaning__inner">
                    <h2 class="cleaning__title">
                        Как проходит уборка
                    </h2>
                    <p class="cleaning__text">
                        Нас не вызывают, чтобы просто помыть пол и протереть окна. Мы делаем полноценную уборку, которая длится 5-8 часов, чтобы вычистить все до блеска
                    </p>
                </div>
                <div class="cleaning__box" style="background-image: url('<?php bloginfo('template_url'); ?>/assets/img/cleaning/1.jpg');">
                 <div class="cleaning__box-inner">
                    <div class="cleaning__item">
                        <div class="cleaning__open">
                            Мойка зеркал, стеклянных и металлических поверхностей, удаление следов от пальцев
                        </div>
                    </div>
                    <div class="cleaning__item">
                        <div class="cleaning__open">
                            Влажная уборка офисной мебели, плинтусов
                        </div>
                    </div>
                    <div class="cleaning__item">
                        <div class="cleaning__open">
                            Удаление пыли со всех вертикальных и горизонтальных поверхностей: стен, подоконников, дверей, мебели, полок
                        </div>
                    </div>
                    <div class="cleaning__item">
                        <div class="cleaning__open">
                            Влажная уборка полов
                        </div>
                    </div>
                    <div class="cleaning__item">
                        <div class="cleaning__open">
                            Сбор бытового мусора и его вынос.
                        </div>
                    </div>
                    <div class="cleaning__item">
                        <div class="cleaning__open">
                            Чистка оргтехники от пыли
                        </div>
                    </div>
                    <div class="cleaning__item">
                        <div class="cleaning__open">
                            Чистка батарей, розеток, выключателей, дверей, дверных коробок
                        </div>
                    </div>
                    <div class="cleaning__item">
                        <div class="cleaning__open">
                            Уборка пылесосом ковролиновых и ковровых покрытий
                        </div>
                    </div>
                 </div>
                </div>
        </div>
    </section>
    <section class="price">
        <div class="price__content">
            <div class="container">
                <div class="price__inner">
                    <div class="price__info">
                        <h2 class="price__title">
                            Цены на ежедневную уборку офиса (7 дней в неделю)
                        </h2>
                        <p class="price__text">
                            В таблице приведены ориентировочные цены. За подобным расчетом обращайтесь к нашему менеджеру!
                        </p>
                    </div>
                    <a class="price__btn button-blue" href="#">
                        Написать менеджеру
                    </a>
                </div>
                <div class="price__slider">
                    <div class="swiper-wrapper price__items">
                        <div class="swiper-slide price__item">
                            <div class="price__top">
                                <h3 class="price__subtitle">
                                    Площадь офиса, м²
                                </h3>
                                <img class="price__icon" src="<?php bloginfo('template_url'); ?>/assets/img/price/1.svg" alt="alt">
                            </div>
                            <ul class="price__list">
                                <li class="price__list-item">
                                    до 50
                                </li>
                                <li class="price__list-item">
                                    50–100
                                </li>
                                <li class="price__list-item">
                                    100–150
                                </li>
                                <li class="price__list-item">
                                    150–200
                                </li>
                                <li class="price__list-item">
                                    200–250
                                </li>
                                <li class="price__list-item">
                                    250–300
                                </li>
                                <li class="price__list-item">
                                    350
                                </li>
                                <li class="price__list-item">
                                    400
                                </li>
                                <li class="price__list-item">
                                    500
                                </li>
                                <li class="price__list-item">
                                    1000
                                </li>
                                <li class="price__list-item">
                                    1500
                                </li>
                                <li class="price__list-item">
                                    более 1500
                                </li>
                            </ul>
                        </div>
                        <div class="swiper-slide price__item price__item-middle">
                            <div class="price__top">
                                <h3 class="price__subtitle">
                                    Стоимость за 1 м²
                                </h3>
                                <img class="price__icon" src="<?php bloginfo('template_url'); ?>/assets/img/price/2.svg" alt="alt">
                            </div>
                            <ul class="price__list">
                                <li class="price__list-item">
                                    от 20 ₽
                                </li>
                                <li class="price__list-item">
                                    от 25 ₽
                                </li>
                                <li class="price__list-item">
                                    от 25 ₽
                                </li>
                                <li class="price__list-item">
                                    от 20 ₽
                                </li>
                                <li class="price__list-item">
                                    от 20 ₽
                                </li>
                                <li class="price__list-item">
                                    от 20 ₽
                                </li>
                                <li class="price__list-item">
                                    от 20 ₽
                                </li>
                                <li class="price__list-item">
                                    от 20 ₽
                                </li>
                                <li class="price__list-item">
                                    от 20 ₽
                                </li>
                                <li class="price__list-item">
                                    от 20 ₽
                                </li>
                                <li class="price__list-item">
                                    от 20 ₽
                                </li>
                                <li class="price__list-item">
                                    Для вас скидка!
                                </li>
                            </ul>
                        </div>
                        <div class="swiper-slide price__item price__item-right">
                            <div class="price__top">
                                <h3 class="price__subtitle">
                                    Стоимость по договору в месяц
                                </h3>
                                <img class="price__icon" src="<?php bloginfo('template_url'); ?>/assets/img/price/3.svg" alt="alt">
                            </div>
                            <ul class="price__list">
                                <li class="price__list-item">
                                    от 9 000 ₽
                                </li>
                                <li class="price__list-item">
                                    от 13 000 ₽
                                </li>
                                <li class="price__list-item">
                                    от 16 000 ₽
                                </li>
                                <li class="price__list-item">
                                    от 18 000 ₽
                                </li>
                                <li class="price__list-item">
                                    от 25 000 ₽
                                </li>
                                <li class="price__list-item">
                                    от 28 000 ₽
                                </li>
                                <li class="price__list-item">
                                    от 32 000 ₽
                                </li>
                                <li class="price__list-item">
                                    от 37 000 ₽
                                </li>
                                <li class="price__list-item">
                                    от 42 500 ₽
                                </li>
                                <li class="price__list-item">
                                    от 59 500 ₽
                                </li>
                                <li class="price__list-item">
                                    от 69 500 ₽
                                </li>
                                <li class="price__list-item">
                                    Для вас скидка!
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="price__progressbar price-progressbar">

                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="graphics">
        <div class="graphics__content">
            <div class="container graphics__container">
                <div class="graphics__inner">
                    <div class="graphics__info">
                        <h2 class="graphics__title title">
                            График ежедневной уборки офисов
                        </h2>
                        <p>
                            Клиент компании «CleanUp Company» может заказать ежедневную уборку офисов утром/вечером/в ночное время каждый день или уборку офисов 2/2. Не стоит забывать, что только профессиональные клинеры смогут качественно убрать помещение даже в труднодоступных местах!
                        </p>
                        <p>
                            Интересует стоимость ежедневной утренней или вечерней уборки офиса? Она зависит от таких факторов:
                        </p>
                    </div>
                    <div class="graphics__box">
                        <img class="graphics__img" src="<?php bloginfo('template_url'); ?>/assets/img/graphics/1.jpg" alt="alt">
                    </div>
                </div>
                <div class="graphics__slider">
                    <div class="swiper-wrapper graphics__items">
                        <div class="swiper-slide graphics__item">
                            <div class="graphics__number">
                                /1
                            </div>
                            <div class="graphics__item-box">
                                объем работ
                            </div>
                        </div>
                        <div class="swiper-slide graphics__item">
                            <div class="graphics__number">
                                /2
                            </div>
                            <div class="graphics__item-box">
                                количество и размеры самих комнат (сюда входит и высота потолков)
                            </div>
                        </div>
                        <div class="swiper-slide graphics__item">
                            <div class="graphics__number">
                                /3
                            </div>
                            <div class="graphics__item-box">
                                класс помещения
                                (из каких материалов изготавливается отделка)
                            </div>
                        </div>
                        <div class="swiper-slide graphics__item">
                            <div class="graphics__number">
                                /4
                            </div>
                            <div class="graphics__item-box">
                                какая техника находится в помещении
                            </div>
                        </div>
                        <div class="swiper-slide graphics__item">
                            <div class="graphics__number">
                                /5
                            </div>
                            <div class="graphics__item-box">
                                задействованные инвентарь и чистящие средства
                            </div>
                        </div>
                    </div>
                    <div class="graphics__progressbar price-progressbar">

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
    <section class="accardion">
        <div class="accardion__content">
            <div class="container accardion__container">
                <div class="accardion__inner">
                    <div class="accardion__column">
                        <h2 class="accardion__title">
                            Часто задаваемые вопросы
                        </h2>
                        <p class="accardion__text">
                            Остались вопросы? Задайте их нам
                        </p>
                        <a class="accardion__btn" href="#">
                            Задать вопрос
                        </a>
                    </div>
                    <div class="accardion__column2">
                        <div class="accardion__box">
                            <div class="accardion__question accardion-question-js">
                                Почему вам можно доверять?
                            </div>
                            <div class="accardion__answer accardion-answer-js">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam architecto at dolores
                                eius esse fugiat, inventore ipsa nesciunt nihil odio recusandae sint suscipit. Adipisci
                                amet animi aperiam deleniti esse quam?
                            </div>
                        </div>
                        <div class="accardion__box">
                            <div class="accardion__question accardion-question-js">
                                Чем генеральная уборка отличается от поддерживающей?
                            </div>
                            <div class="accardion__answer accardion-answer-js">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam architecto at dolores
                                eius esse fugiat, inventore ipsa nesciunt nihil odio recusandae sint suscipit. Adipisci
                                amet animi aperiam deleniti esse quam?
                            </div>
                        </div>
                        <div class="accardion__box">
                            <div class="accardion__question accardion-question-js">
                                После уборки обнаружились недочеты. Как быть?
                            </div>
                            <div class="accardion__answer accardion-answer-js">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam architecto at dolores
                                eius esse fugiat, inventore ipsa nesciunt nihil odio recusandae sint suscipit. Adipisci
                                amet animi aperiam deleniti esse quam?
                            </div>
                        </div>
                        <div class="accardion__box">
                            <div class="accardion__question accardion-question-js">
                                Клинер приедет со своими средствами или мне предоставить свои?
                            </div>
                            <div class="accardion__answer accardion-answer-js">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam architecto at dolores
                                eius esse fugiat, inventore ipsa nesciunt nihil odio recusandae sint suscipit. Adipisci
                                amet animi aperiam deleniti esse quam?
                            </div>
                        </div>
                        <div class="accardion__box">
                            <div class="accardion__question accardion-question-js">
                                Клинер приедет со своими средствами или мне предоставить свои?
                            </div>
                            <div class="accardion__answer accardion-answer-js">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam architecto at dolores
                                eius esse fugiat, inventore ipsa nesciunt nihil odio recusandae sint suscipit. Adipisci
                                amet animi aperiam deleniti esse quam?
                            </div>
                        </div>
                    </div>
                    <p class="accardion__text accardion__mobail">
                        Остались вопросы? Задайте их нам
                    </p>
                    <a class="accardion__btn accardion__mobail" href="#">
                        Задать вопрос
                    </a>
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
    <section class="services-offic">
        <div class="services-offic__content">
            <div class="container">
                <h2 class="services-offic__title">
                    Мы также оказываем услуги
                </h2>
                <div class="services-offic__items">
                    <a class="services-offic__item" href="#">
                        Уборка офисов
                    </a>
                    <a class="services-offic__item" href="#">
                        Уборка коммерческих помещений
                    </a>
                    <a class="services-offic__item" href="#">
                        Уборка территории
                    </a>
                    <a class="services-offic__item" href="#">
                        Мойка и химчитска разовые работы
                    </a>
                    <a class="services-offic__item" href="#">
                        Гардеробное обслуживание
                    </a>
                    <a class="services-offic__item" href="#">
                        Дезинфекция
                    </a>
                    <a class="services-offic__item" href="#">
                        Сервис сменных ковров
                    </a>
                    <a class="services-offic__item" href="#">
                        Химчистка
                    </a>
                    <a class="services-offic__item" href="#">
                        Уборка квартиры
                    </a>
                </div>
            </div>
        </div>
    </section>

<?php get_footer(); ?>
