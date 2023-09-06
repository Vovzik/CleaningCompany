<?php
//Template Name: Уборка территории
?>

<?php get_header(); ?>
<main class="main">
    <section class="home home-business">
        <div class="home__content" style="
                background-image: url('<?php bloginfo('template_url'); ?>/assets/img/home/decor2.png');
                ">
            <div class="container home__container">
                <ul class="breadcrumbs">
                    <li><a href="#">Главная / </a></li>
                    <li><a href="#">Главная / </a></li>
                    <li><a href="#">Главная / </a></li>
                    <li>Профессиональная уборка офисов</li>
                </ul>
                <div class="home__inner">
                    <img class="home__fonmobail" src="<?php bloginfo('template_url'); ?>/assets/img/home/mobailFon.jpg"
                         alt="alt">
                    <h1 class="home__title">
                        Уборка бизнес центров в Санкт-Петербурге от 11 500 ₽/мес.
                    </h1>
                    <p class="home__text">
                        Мы оказываем весь комплекс клининговых работ в бизнес-центрах. Учитываем все ваши пожелания. Вы
                        сами можете выбрать задачи, отказавшись от тех, которые вам не нужны, или наоборот добавить
                        дополнительные.
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
                <div class="home__items">
                    <div class="home__item">
                        <div class="home__item-box">
                            <h2 class="home__subtitle">
                                от 11 500 руб./мес.
                            </h2>
                            <p class="home__subtext">
                                Цена уборки коммерческого помещения до 100 м²
                            </p>
                        </div>
                    </div>
                    <div class="home__item">
                        <div class="home__item-box">
                            <h2 class="home__subtitle">
                                Работаем по ГОСТ Р 51870-2014
                            </h2>
                        </div>
                    </div>
                    <div class="home__item">
                        <div class="home__item-box">
                            <h2 class="home__subtitle">
                                12% скидка
                            </h2>
                            <p class="home__subtext">
                                По кодовой фразе “CleanUp круглый год” предоставим 12% скидку по договору на годовое
                                обслуживание
                            </p>
                        </div>
                    </div>
                    <div class="home__item">
                        <div class="home__item-box">
                            <h2 class="home__subtitle">
                                НДС
                            </h2>
                            <p class="home__subtext">
                                Можем предложить варианты работы, как с НДС, так и без
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="cleaning-territory">
        <div class="cleaning-territory__content"
             style="background-image: url('<?php bloginfo('template_url'); ?>/assets/img/cleaning-territory/1.png')">
            <div class="container cleaning-territory__container">
                <div class="cleaning-territory__info">
                    <h2 class="cleaning-territory__title title">
                        Уборка территории в Санкт-Петергбурге: спил деревьев и т.д.
                        по цене от 7 руб./м2
                    </h2>
                    <img class="cleaning-territory__img"
                         src="<?php bloginfo('template_url'); ?>/assets/img/cleaning-territory/mobail.jpg" alt="alt">
                    <p>
                        Заказывайте очистку объектов и вывоз с территории мусора, снега, листвы, уборку летом или в
                        зимний период. Проведем механизированную чистку прилегающей территории, вручную уберем
                        труднодоступные участки.
                    </p>
                    <p>
                        Заказывайте у нас клининговые услуги для уличной либо генеральной уборки внутри помещений, не
                        отвлекая собственный персонал от основной работы. К нам обращаются жители 3 городов, а также
                        коммерческие и государственные организации. Помогли <strong>2 805</strong> клиентам, получили
                        более <strong>438</strong> отзывов с высокой оценкой качества работы и сервиса.
                    </p>
                </div>
            </div>
        </div>
    </section>
    <section class="calculate-cost">
        <div class="calculate-cost__content">
            <div class="container">
                <form class="calculate-cost__inner">
                    <div class="calculate-cost__column">
                        <h2 class="calculate-cost__title">
                            Рассчитайте стоимость уборки территории
                        </h2>
                        <div class="calculate-cost__item">
                            <h3 class="calculate-cost__subtitle">
                                Длина участка
                            </h3>
                            <div class="calculate-cost__nouislider js__nouslider" data-min="10" data-max="100"></div>
                            <div class="calculate-cost__input-box">
                                <input type="text" class="calculate-cost__input js__nouslider-min">
                                м.
                            </div>
                        </div>
                        <div class="calculate-cost__item">
                            <h3 class="calculate-cost__subtitle">
                                Ширина участка
                            </h3>
                            <div class="calculate-cost__nouislider js__nouslider" data-min="10" data-max="100"></div>
                            <div class="calculate-cost__input-box">
                                <input type="text" class="calculate-cost__input js__nouslider-min">
                                м.
                            </div>
                        </div>
                        <div class="calculate-cost__items">
                            <div class="select-calculate">
                                <div class="select-calculate__label select-calculate__label--dark">Уборка территории:
                                </div>
                                <div class="select-calculate__trigger select-trigger-js">
                                    <span>В летний период</span>
                                    <div class="select-calculate__arrow">
                                        <svg width="11" height="9" viewBox="0 0 11 9" fill="none"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path d="M5.5 9L0.73686 0.75H10.2631L5.5 9Z" fill="black"/>
                                        </svg>
                                    </div>
                                </div>
                                <div class="select-calculate__drop select-drop-js">
                                    <ul class="select-calculate__list">
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
                            <div class="select-calculate">
                                <div class="select-calculate__label select-calculate__label--dark">Тип подачи:</div>
                                <div class="select-calculate__trigger select-trigger-js">
                                    <span>Обычная с 7:00 до 21:00</span>
                                    <div class="select-calculate__arrow">
                                        <svg width="11" height="9" viewBox="0 0 11 9" fill="none"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path d="M5.5 9L0.73686 0.75H10.2631L5.5 9Z" fill="black"/>
                                        </svg>
                                    </div>
                                </div>
                                <div class="select-calculate__drop select-drop-js">
                                    <ul class="select-calculate__list">
                                        <li>
                                            <input id="select_3" type="radio" name="select"/>
                                            <label for="select_3">Индивидуальный предприниматель</label>
                                        </li>
                                        <li>
                                            <input id="select_4" type="radio" name="select"/>
                                            <label for="select_4">ООО</label>
                                        </li>
                                        <li>
                                            <input id="select_5" type="radio" name="select"/>
                                            <label for="select_5">Физ. лицо</label>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="calculate-cost__column2">
                        <div class="calculate-cost__text">
                            Примерная стоимость заказа
                        </div>
                        <output class="calculate-cost__output">
                            от 300 ₽
                        </output>
                        <button class="calculate-cost__btn button-blue" type="submit">
                            Оформить заказ
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </section>
    <section class="services cleaning-services territory">
        <div class="services__content">
            <div class="container">
                <div class="services__inner">
                    <h2 class="services__title">
                        Наши услуги
                    </h2>
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
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="territory-for-organizations">
        <div class="territory-for-organizations__content">
            <div class="territory-for-organizations__inner-top"
                 style="background-image: url('<?php bloginfo('template_directory'); ?>/assets/img/territory-for-organizations/1.png')">
                <div class="container territory-for-organizations__container">
                    <div class="territory-for-organizations__inner">
                        <h2 class="territory-for-organizations__title title">
                            Уборка территории в Санкт-Петербурге для организаций, учреждений
                        </h2>
                        <img class="territory-for-organizations__img" src="<?php bloginfo('template_directory'); ?>/assets/img/territory-for-organizations/mobail.jpg" alt="alt">
                        <div class="tabs-items">
                            <div class="territory-for-organizations__items">
                                <div class="territory-for-organizations__item tabs-item active">
                                    Комплексная услуга
                                </div>
                                <div class="territory-for-organizations__item tabs-item">
                                    Работаем круглый год
                                </div>
                                <div class="territory-for-organizations__item tabs-item">
                                    Уличная уборка
                                </div>
                                <div class="territory-for-organizations__item tabs-item">
                                    Стоимость услуг
                                </div>
                            </div>
                            <div class="territory-for-organizations__body tabs-body  open">
                                <div class="territory-for-organizations__box">
                                    <h3 class="territory-for-organizations__subtitle">
                                        Комплексная услуга
                                    </h3>
                                    <p>
                                        Выполняем полный спектр работ: очистка объектов от строительного мусора, сбор,
                                        погрузка и вывоз на собственном транспорте.
                                    </p>
                                </div>
                            </div>
                            <div class="territory-for-organizations__body tabs-body">
                                <div class="territory-for-organizations__box">
                                    <h3 class="territory-for-organizations__subtitle">
                                        Комплексная услуга
                                    </h3>
                                    <p>
                                        Выполняем полный спектр работ: очистка объектов от строительного мусора, сбор,
                                        погрузка и вывоз на собственном транспорте.
                                    </p>
                                </div>
                            </div>
                            <div class="territory-for-organizations__body tabs-body">
                                <div class="territory-for-organizations__box">
                                    <h3 class="territory-for-organizations__subtitle">
                                        Комплексная услуга
                                    </h3>
                                    <p>
                                        Выполняем полный спектр работ: очистка объектов от строительного мусора, сбор,
                                        погрузка и вывоз на собственном транспорте.
                                    </p>
                                </div>
                            </div>
                            <div class="territory-for-organizations__body tabs-body">
                                <div class="territory-for-organizations__box">
                                    <h3 class="territory-for-organizations__subtitle">
                                        Комплексная услуга
                                    </h3>
                                    <p>
                                        Выполняем полный спектр работ: очистка объектов от строительного мусора, сбор,
                                        погрузка и вывоз на собственном транспорте.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="price price-territory">
        <div class="price__content">
            <div class="container">
                <div class="price__inner">
                    <div class="price__info">
                        <h2 class="price__title">
                            Цены на ежедневную уборку офиса (7 дней в неделю)
                        </h2>
                    </div>
                     <div class="price-territory__column">
                         <p class="price__text">
                             Цены в прайс-листе не являются публичной офертой. Точная стоимость услуг рассчитывается для каждого заказа индивидуально. Позвоните нам!
                         </p>
                         <a class="price__btn button-blue" href="#">
                             Написать менеджеру
                         </a>
                     </div>
                </div>
                <div class="price__slider">
                    <div class="swiper-wrapper price__items">
                        <div class="swiper-slide price__item">
                            <div class="price__top">
                                <h3 class="price__subtitle">
                                    Площадь офиса, м²
                                </h3>
                                <img class="price__icon" src="<?php bloginfo('template_url'); ?>/assets/img/price/1.svg"
                                     alt="alt">
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
                                <img class="price__icon" src="<?php bloginfo('template_url'); ?>/assets/img/price/2.svg"
                                     alt="alt">
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
                                <img class="price__icon" src="<?php bloginfo('template_url'); ?>/assets/img/price/3.svg"
                                     alt="alt">
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


