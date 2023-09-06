<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Клининговая компания</title>
    <?php wp_head(); ?>
</head>
<body>

<div class="wrapper ">
    <header class="header">
        <div class="header__content header-content-js">
            <div class="container">
                <div class="header__inner">
                    <a class="header__logo" href="/">
                        <img class="header__logo-img"
                             src="<?php bloginfo('template_directory'); ?>/assets/img/header/logo.jpg" alt="Logo">
                    </a>
                    <div class="header__burger-box">
                        <div class='header__burger js__header-burgerclick'>
                            <div class='header__burger-item js__header-burger header__burger--top'></div>
                            <div class='header__burger-item js__header-burger header__burger--middle'></div>
                            <div class='header__burger-item js__header-burger header__burger--bottom'></div>
                        </div>
                    </div>

                    <div class="header__cities header__cities-click-js">
                        Санкт-Петербург
                        <ul class="header__cities-list header__cities-open-js">
                            <li class="header__cities-item">
                                <a class="header__cities-link" href="#">
                                    Йошкар-ола
                                </a>
                            </li>
                            <li class="header__cities-item">
                                <a class="header__cities-link" href="#">
                                    Санчурск
                                </a>
                            </li>
                            <li class="header__cities-item">
                                <a class="header__cities-link" href="#">
                                    Санчурск
                                </a>
                            </li>
                            <li class="header__cities-item">
                                <a class="header__cities-link" href="#">
                                    Санчурск
                                </a>
                            </li>

                        </ul>
                    </div>
                    <div class="header__nav-box">
                    <nav class="header__nav">
                        <ul class="header__list">
                            <li>
                                <a href="#">
                                    Услуги
                                </a>
                                <nav class="header__sublist-nav">
                                    <ul class="header__sublist">
                                        <li>
                                            <a href="">
                                                Юридическим лицам
                                            </a>
                                        </li>
                                        <li>
                                            <a href="">
                                                Уборка офисов
                                            </a>
                                        </li>
                                        <li>
                                            <a href="">
                                                Уборка офисов
                                            </a>
                                        </li>
                                        <li>
                                            <a href="">
                                                Физическим лицам
                                            </a>
                                        </li>
                                        <li>
                                            <a href="">
                                                Уборка коммерческих помещений
                                            </a>
                                        </li>
                                        <li>
                                            <a href="">
                                                Уборка коммерческих помещений
                                            </a>
                                        </li>
                                        <li>
                                            <a href="">
                                                Уборка территорий
                                            </a>
                                        </li>
                                        <li>
                                            <a href="">
                                                Уборка территорий
                                            </a>
                                        </li>
                                        <li>
                                            <a href="">
                                                Уборка территорий
                                            </a>
                                        </li>
                                        <li>
                                            <a href="">
                                                Юридическим лицам
                                            </a>
                                        </li>
                                        <li>
                                            <a href="">
                                                Юридическим лицам
                                            </a>
                                        </li> <li>
                                            <a href="">
                                                Юридическим лицам
                                            </a>
                                        </li>
                                        <li>
                                            <a href="">
                                                Юридическим лицам
                                            </a>
                                        </li>

                                    </ul>
                                </nav>
                            </li>
                            <li>
                                <a href="#">
                                    Портфолио
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    О нас
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    Контакты
                                </a>
                            </li>

                        </ul>
                    </nav>
                    <div class="header__contacts">
                        <a class="header__phone" href="tel:+48737106566">
                            +48 (737) 106-566
                        </a>
                        <a class="header__mail" href="mailto:sales@cleanupcompany.ru">
                            sales@cleanupcompany.ru
                        </a>
                    </div>
                    </div>
                    <a class="header__button header-button" href="#">
                        Консультация
                    </a>
                    <div class="header__burger-menu">
                        <div class="container">
                            <div class="header__burger-inner">
                                <div class="header__burger-column">
                                    <h2 class="header__burger-title">
                                        Главная
                                    </h2>
                                    <h2 class="header__burger-title header__burger-title-mobail__arrow header__burger-title-js">
                                        О компании
                                    </h2>
                                    <ul class="header__burger-list header__burger-list-mobail__border header__burger-list-js">
                                        <li>
                                            <a href="">
                                                О компании
                                            </a>
                                        </li>
                                        <li>
                                            <a href="">
                                                Команда
                                            </a>
                                        </li>
                                        <li>
                                            <a href="">
                                                Отзывы
                                            </a>
                                        </li>
                                    </ul>
                                    <h2 class="header__burger-title header__burger-title-mobail__arrow header__burger-title-js">
                                        Портфолио
                                    </h2>
                                    <ul class="header__burger-list header__burger-list-mobail__border header__burger-list-js">
                                        <li>
                                            <a href="">
                                                Кейсы
                                            </a>
                                        </li>
                                    </ul>
                                    <h2 class="header__burger-title header__burger-title-mobail__arrow header__burger-title-js">
                                        Цены
                                    </h2>
                                    <ul class="header__burger-list header__burger-list-mobail__border header__burger-list-js">
                                        <li>
                                            <a href="">
                                                Калькулятор
                                            </a>
                                        </li>
                                    </ul>
                                    <div class="header__inner-mobail">
                                      <ul class="header__burger-list-bottom">
                                        <li>
                                            <a href="">
                                                Блог
                                            </a>
                                        </li>
                                        <li>
                                            <a href="">
                                                Вакансии
                                            </a>
                                        </li>
                                        <li>
                                            <a href="">
                                                Контакты
                                            </a>
                                        </li>
                                    </ul>
                                        <div class="header__block-mobail">
                                            <div class="header__burger-socials">
                                                <a class="header__burger-social" href="#">
                                                    <img class="header__burger-social-img"
                                                         src="<?php bloginfo('template_directory'); ?>/assets/img/header/1.svg"
                                                         alt="alt">
                                                </a>
                                                <a class="header__burger-social" href="#">
                                                    <img class="header__burger-social-img"
                                                         src="<?php bloginfo('template_directory'); ?>/assets/img/header/2.svg"
                                                         alt="alt">
                                                </a>
                                                <a class="header__burger-social" href="#">
                                                    <img class="header__burger-social-img"
                                                         src="<?php bloginfo('template_directory'); ?>/assets/img/header/3.svg"
                                                         alt="alt">
                                                </a>
                                            </div>
                                            <a class="header__burger-btn" href="#">
                                                Консультация
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="header__burger-column2">
                                    <div class="header__burger-box-bottom">
                                        Услуги
                                        <a class="header__burger-logo" href="/">
                                            <img class="header__burger-logo-img"
                                                 src="<?php bloginfo('template_directory'); ?>/assets/img/header/logo-menu.svg"
                                                 alt="Logo">
                                        </a>
                                        <img class="header__burger-close js__header-burgerclick"
                                             src="<?php bloginfo('template_directory'); ?>/assets/img/header/burger-icon.svg"
                                             alt="alt">
                                    </div>
                                    <div class="header__burger-items">
                                        <div class="header__burger-items-column">
                                            <h2 class="header__burger-title header__burger-title__arrow header__burger-title-js">
                                                Уборка офисов
                                            </h2>
                                            <ul class="header__burger-list header__burger-list__border header__burger-list-js">
                                                <li>
                                                    <a href="">
                                                        Ежедневная уборка офиса
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="">
                                                        Генеральная уборка офиса
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="">
                                                        Генеральная уборка офиса после ремонта или строительства
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="">
                                                        Разовая уборка офиса до или после мероприятия
                                                    </a>
                                                </li>
                                            </ul>

                                            <h2 class="header__burger-title header__burger-title__arrow header__burger-title-js">
                                                Уборка коммерческих помещений
                                            </h2>
                                            <ul class="header__burger-list header__burger-list__border header__burger-list-js">
                                                <li>
                                                    <a href="">
                                                        Уборка бизнес центров
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="">
                                                        Уборка торговых центров
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="">
                                                        Уборка кафе баров и ресторанов
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="">
                                                        Уборка гостинниц и отелей
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="">
                                                        Уборка медицинских учреждений и ЛПУ
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="">
                                                        Уборка банков
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="">
                                                        Уборка магазинов и бутиков
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="">
                                                        Уборка детских развлекательных центров
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="">
                                                        Уборка производственных и промышленных помещений
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="">
                                                        Уборка складских помещений и сортировочных центров
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="">
                                                        Уборка помещений после ремонта
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="">
                                                        Уборка паркингов
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="">
                                                        Уборка спортивных баз
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="">
                                                        Уборка бани или сауны
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="">
                                                        Уборка автосалонов
                                                    </a>
                                                </li>
                                            </ul>

                                        </div>
                                        <div class="header__burger-items-column">
                                            <h2 class="header__burger-title header__burger-title__arrow header__burger-title-js">
                                                Уборка территории
                                            </h2>
                                            <ul class="header__burger-list header__burger-list__border header__burger-list-js">
                                                <li>
                                                    <a href="">
                                                        Уборка в летний период
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="">
                                                        Уборка в зимний период
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="">
                                                        Уборка снега с крыш
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="">
                                                        Покос травы
                                                    </a>
                                                </li>
                                            </ul>

                                            <h2 class="header__burger-title header__burger-title__arrow header__burger-title-js">
                                                Мойка и химчистка
                                            </h2>
                                            <ul class="header__burger-list header__burger-list__border header__burger-list-js">
                                                <li>
                                                    <a href="">
                                                        Мойка окон
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="">
                                                        Телескопическая мойка окон
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="">
                                                        Мойка витринных окон альпинистами
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="">
                                                        Мойка фасадов
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="">
                                                        Мойка фасадов альпинистами
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="">
                                                        Мойка витрин в торговых центрах
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="">
                                                        Клининг АЗС
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="">
                                                        Обеспыливание стен и потолков
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="">
                                                        Нанесение защитных полимеров и чистка твердых полов
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="">
                                                        Чистка лифтов
                                                    </a>
                                                </li>
                                            </ul>
                                           <ul class="header__burger-list-title">
                                               <li>
                                                   <a href="#">
                                                       Гардеробное обслуживание
                                                   </a>
                                               </li>
                                               <li>
                                                   <a href="#">
                                                       Дезинфекция
                                                   </a>
                                               </li>
                                               <li>
                                                   <a href="#">
                                                       Сервис сменных ковров
                                                   </a>
                                               </li>
                                           </ul>



                                        </div>
                                        <div class="header__burger-items-column">
                                            <h2 class="header__burger-title header__burger-title__arrow header__burger-title-js">
                                                Химчистка
                                            </h2>
                                            <ul class="header__burger-list header__burger-list__border header__burger-list-js">
                                                <li>
                                                    <a href="">
                                                        Химчистка ковролина
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="">
                                                        Химчистка мебели
                                                    </a>
                                                </li>
                                            </ul>


                                            <h2 class="header__burger-title header__burger-title__arrow header__burger-title-js">
                                                Для физ. лиц
                                            </h2>
                                            <ul class="header__burger-list header__burger-list__border header__burger-list-js">
                                                <li>
                                                    <a href="">
                                                        Генеральная уборка квартиры
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="">
                                                        Поддерживающая уборка квартиры
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="">
                                                        Мойка окон в квартире
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="">
                                                        Мойка окон в квартире
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="">
                                                        Генеральная уборка дома или коттеджа, танхауса
                                                    </a>
                                                </li>
                                            </ul>


                                            <h2 class="header__burger-title header__burger-title__arrow header__burger-title-js">
                                                Дополнительно
                                            </h2>
                                            <ul class="header__burger-list header__burger-list__border header__burger-list-js">
                                                <li>
                                                    <a href="">
                                                        Мытье окон
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

