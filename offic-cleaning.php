<?php
//Template Name: Уборка офисов
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
    <section class="quiz">
        <div class="quiz__content">
            <div class="container">
                <form action="#">
                    <div class="quiz__inner">
                        <h2 class="quiz__title">
                            Ответьте на 6 простых вопросов по объекту
                        </h2>
                        <p class="quiz__text">
                            После чего с Вами свяжется менеджер с расчетом стоимости и вариантами сотрудничества.
                        </p>
                    </div>
                    <div class="quiz__form quiz-form-js active">
                        <div class="quiz__form-inner">
                            <h3 class="quiz__subtitle">
                                1. Какой тип уборки необходим?
                            </h3>
                            <div class="quiz__btn quiz-btn-js">
                                Далее
                            </div>
                        </div>
                        <div class="quiz__items">
                            <div class="quis__item">
                                <input type="radio" class="quiz__radio-input" id="radio" name="radio" checked>
                                <label for="radio" class="quiz__radio-title">
                                    <div class="quiz__box">
                                        <img class="quiz__img"
                                             src="<?php bloginfo('template_url'); ?>/assets/img/quiz/1.png" alt="alt">
                                    </div>
                                    <h4 class="quiz__radio-title-b">
                                        Ежедневная уборка офисов
                                    </h4>
                                </label>
                            </div>
                            <div class="quis__item">
                                <input type="radio" class="quiz__radio-input" id="radio2" name="radio">
                                <label for="radio2" class="quiz__radio-title">
                                    <div class="quiz__box">
                                        <img class="quiz__img"
                                             src="<?php bloginfo('template_url'); ?>/assets/img/quiz/2.png" alt="alt">
                                    </div>
                                    <h4 class="quiz__radio-title-b">
                                        Генеральная уборка офисов
                                    </h4>
                                </label>
                            </div>
                            <div class="quis__item">
                                <input type="radio" class="quiz__radio-input" id="radio3" name="radio">
                                <label for="radio3" class="quiz__radio-title">
                                    <div class="quiz__box">
                                        <img class="quiz__img"
                                             src="<?php bloginfo('template_url'); ?>/assets/img/quiz/3.png" alt="alt">
                                    </div>
                                    <h4 class="quiz__radio-title-b">
                                        Генеральная уборка офисов после ремонта
                                    </h4>
                                </label>
                            </div>
                            <div class="quis__item">
                                <input type="radio" class="quiz__radio-input" id="radio4" name="radio">
                                <label for="radio4" class="quiz__radio-title">
                                    <div class="quiz__box">
                                        <img class="quiz__img"
                                             src="<?php bloginfo('template_url'); ?>/assets/img/quiz/4.png" alt="alt">
                                    </div>
                                    <h4 class="quiz__radio-title-b">
                                        Разовая уборка офисов после мероприятия
                                    </h4>
                                </label>
                            </div>
                        </div>
                        <div class="quiz__buttons quiz__buttons-mobail">
                            <div class="quiz__btn quiz-btn-mobail-js">
                                Далее
                            </div>
                        </div>
                    </div>
                    <div class="quiz__form quiz__square quiz-form-js">
                        <div class="quiz__form-inner">
                            <h3 class="quiz__subtitle">
                                2. Примерная площадь?
                            </h3>
                            <div class="quiz__buttons">
                                <div class="quiz__btn quiz-back-js">
                                    Назад
                                </div>
                                <div class="quiz__btn quiz-btn-js">
                                    Далее
                                </div>
                            </div>
                        </div>
                        <div class="quiz__items">
                            <div class="quis__item">
                                <input type="radio" class="quiz__radio-input" id="radio5" name="radio1" checked>
                                <label for="radio5" class="quiz__radio-title">
                                    <h4 class="quiz__radio-title-b">
                                        До 100 м2
                                    </h4>
                                </label>
                            </div>
                            <div class="quis__item">
                                <input type="radio" class="quiz__radio-input" id="radio6" name="radio1">
                                <label for="radio6" class="quiz__radio-title">
                                    <h4 class="quiz__radio-title-b">
                                        До 100-300 м2
                                    </h4>
                                </label>
                            </div>
                            <div class="quis__item">
                                <input type="radio" class="quiz__radio-input" id="radio7" name="radio1">
                                <label for="radio7" class="quiz__radio-title">
                                    <h4 class="quiz__radio-title-b">
                                        До 300-700 м2
                                    </h4>
                                </label>
                            </div>
                            <div class="quis__item">
                                <input type="radio" class="quiz__radio-input" id="radio8" name="radio1">
                                <label for="radio8" class="quiz__radio-title">
                                    <h4 class="quiz__radio-title-b">
                                        Более 700 м2
                                    </h4>
                                </label>
                            </div>
                        </div>
                        <div class="quiz__buttons quiz__buttons-mobail">
                            <div class="quiz__btn quiz-back-mobail-js">
                                Назад
                            </div>
                            <div class="quiz__btn quiz-btn-mobail-js">
                                Далее
                            </div>
                        </div>
                    </div>
                    <div class="quiz__form quiz-form-js">
                        <div class="quiz__form-inner">
                            <h3 class="quiz__subtitle">
                                3. Что необходимо сделать?
                            </h3>
                            <div class="quiz__buttons">
                                <div class="quiz__btn quiz-back-js">
                                    Назад
                                </div>
                                <div class="quiz__btn quiz-btn-js">
                                    Далее
                                </div>
                            </div>
                        </div>
                        <div class="quiz__items">
                            <div class="quis__item">
                                <input type="radio" class="quiz__radio-input" id="radio9" name="radio2" checked>
                                <label for="radio9" class="quiz__radio-title">
                                    <div class="quiz__box">
                                        <img class="quiz__img"
                                             src="<?php bloginfo('template_url'); ?>/assets/img/quiz/1.png" alt="alt">
                                    </div>
                                    <h4 class="quiz__radio-title-b">
                                        Ежедневная уборка офисов
                                    </h4>
                                </label>
                            </div>
                            <div class="quis__item">
                                <input type="radio" class="quiz__radio-input" id="radio10" name="radio2">
                                <label for="radio10" class="quiz__radio-title">
                                    <div class="quiz__box">
                                        <img class="quiz__img"
                                             src="<?php bloginfo('template_url'); ?>/assets/img/quiz/2.png" alt="alt">
                                    </div>
                                    <h4 class="quiz__radio-title-b">
                                        Генеральная уборка офисов
                                    </h4>
                                </label>
                            </div>
                            <div class="quis__item">
                                <input type="radio" class="quiz__radio-input" id="radio11" name="radio2">
                                <label for="radio11" class="quiz__radio-title">
                                    <div class="quiz__box">
                                        <img class="quiz__img"
                                             src="<?php bloginfo('template_url'); ?>/assets/img/quiz/3.png" alt="alt">
                                    </div>
                                    <h4 class="quiz__radio-title-b">
                                        Генеральная уборка офисов после ремонта
                                    </h4>
                                </label>
                            </div>
                            <div class="quis__item">
                                <input type="radio" class="quiz__radio-input" id="radio12" name="radio2">
                                <label for="radio12" class="quiz__radio-title">
                                    <div class="quiz__box">
                                        <img class="quiz__img"
                                             src="<?php bloginfo('template_url'); ?>/assets/img/quiz/4.png" alt="alt">
                                    </div>
                                    <h4 class="quiz__radio-title-b">
                                        Разовая уборка офисов после мероприятия
                                    </h4>
                                </label>
                            </div>
                        </div>
                        <div class="quiz__buttons quiz__buttons-mobail">
                            <div class="quiz__btn quiz-back-mobail-js">
                                Назад
                            </div>
                            <div class="quiz__btn quiz-btn-mobail-js">
                                Далее
                            </div>
                        </div>
                    </div>
                    <div class="quiz__form quiz__square quiz-form-js">
                        <div class="quiz__form-inner">
                            <h3 class="quiz__subtitle">
                                4. Особенности объекта
                            </h3>
                            <div class="quiz__buttons">
                                <div class="quiz__btn quiz-back-js">
                                    Назад
                                </div>
                                <div class="quiz__btn quiz-btn-js">
                                    Далее
                                </div>
                            </div>
                        </div>
                        <div class="quiz__items">
                            <div class="quis__item">
                                <input type="radio" class="quiz__radio-input" id="radio13" name="radio3" checked>
                                <label for="radio13" class="quiz__radio-title">
                                    <h4 class="quiz__radio-title-b">
                                        Пропускной режим
                                    </h4>
                                </label>
                            </div>
                            <div class="quis__item">
                                <input type="radio" class="quiz__radio-input" id="radio14" name="radio3">
                                <label for="radio14" class="quiz__radio-title">
                                    <h4 class="quiz__radio-title-b">
                                        Нужно убрать срочно
                                    </h4>
                                </label>
                            </div>
                            <div class="quis__item">
                                <input type="radio" class="quiz__radio-input" id="radio15" name="radio3">
                                <label for="radio15" class="quiz__radio-title">
                                    <h4 class="quiz__radio-title-b">
                                        Нужна выездная оценка
                                    </h4>
                                </label>
                            </div>
                            <div class="quis__item">
                                <input type="radio" class="quiz__radio-input" id="radio16" name="radio3">
                                <label for="radio16" class="quiz__radio-title">
                                    <h4 class="quiz__radio-title-b">
                                        Объект за пределами города
                                    </h4>
                                </label>
                            </div>
                        </div>
                        <div class="quiz__buttons quiz__buttons-mobail">
                            <div class="quiz__btn quiz-back-mobail-js">
                                Назад
                            </div>
                            <div class="quiz__btn quiz-btn-mobail-js">
                                Далее
                            </div>
                        </div>
                    </div>
                    <div class="quiz__form quiz-form-js">
                        <div class="quiz__form-inner">
                            <h3 class="quiz__subtitle">
                                5. Ваши контакты для связи
                            </h3>
                            <div class="quiz__btn quiz-back-js">
                                Назад
                            </div>
                        </div>
                        <div class="quiz__form-box">
                            <input class="quiz__form-input" type="text" placeholder="Имя">
                            <input class="quiz__form-input" type="text" placeholder="Телефон">
                            <button class="quiz__btn" type="submit">
                                Отправить
                            </button>
                        </div>
                        <div class="quiz__buttons quiz__buttons-mobail">
                            <div class="quiz__btn quiz-back-mobail-js">
                                Назад
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
    <section class="services types-cleaning">
        <div class="services__content">
            <div class="container">
                <div class="services__inner">
                    <div class="types-cleaning__inner">
                        <h2 class="services__title">
                            Виды уборки
                        </h2>
                        <p class="types-cleaning__text">
                            Наши клинеры приезжают в назначенное время со всем необходимым и сразу приступают к делу.
                            Вам остаётся только оценить результат.
                        </p>
                    </div>
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
    <section class="order">
        <div class="order__content">
            <div class="container order__container">
                <div class="order__inner">
                    <div class="order__column">
                        <h2 class="order__title">
                            Как сделать заказ?
                        </h2>
                        <p class="order__text">
                            01
                        </p>
                        <a class="order__btn" href="#">
                            Оставьте заявку
                        </a>
                        <p class="order__description">
                            Менеджер свяжется с вами и согласует объём и удобное время уборки. При необходимости
                            специалист приедет и оценит степень загрязнения на месте. Это поможет корректно подобрать
                            моющие средства и технику.
                        </p>
                    </div>
                    <ul class="order__list">
                        <li class="order__list-item">
                            <div class="order__list-number">
                                01
                            </div>
                            <div class="order__list-box">
                                <h3 class="order__subtitle">
                                    Приезжаем к вам
                                </h3>
                                <p class="order__subtext">
                                    Несколько клинеров приедут в назначенный день к вам в офис и распределят
                                    обязанности.
                                </p>
                            </div>
                        </li>
                        <li class="order__list-item">
                            <div class="order__list-number">
                                02
                            </div>
                            <div class="order__list-box">
                                <h3 class="order__subtitle">
                                    Выполняем уборку
                                </h3>
                                <p class="order__subtext">
                                    Уборка происходит одновременно в нескольких комнатах и включает несколько этапов.
                                    Этапы зависят от вида услуги.
                                </p>
                            </div>
                        </li>
                        <li class="order__list-item">
                            <div class="order__list-number">
                                03
                            </div>
                            <div class="order__list-box">
                                <h3 class="order__subtitle">
                                    Подписываем документы
                                </h3>
                                <p class="order__subtext">
                                    Предоставляем акт выполненных работ. Оплатите услуги после подписания акта.
                                </p>
                            </div>
                        </li>
                    </ul>
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
