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
        <div class="header__content header-content-js header-fixed">
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
                      <!--  <ul class="header__list">
                            <li>
                                <a href="#">
                                    Услуги
                                </a>
                                <nav class="header__sublist-nav">
                                    <ul class="header__sublist">
                                        <li>
                                            <a href="">
                                                Юридическим лицам лицам
                                            </a>
                                            <nav class="header__sublist-sublist-nav">
                                              <ul class="header__sublist-sublist">
                                                <li>
                                                    <a href="#">
                                                        Юридическим лицам
                                                    </a>
                                                    <nav class="header__level-three-nav">
                                                        <ul class="header__level-three">
                                                            <li>
                                                                <a href="#">
                                                                    Юридическим лицам
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="#">
                                                                    Юридическим лицам
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="#">
                                                                    Юридическим лицам
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="#">
                                                                    Юридическим лицам
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </nav>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        Юридическим лицам
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        Юридическим лицам
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        Юридическим лицам
                                                    </a>
                                                </li>
                                            </ul>
                                            </nav>
                                        </li>
                                        <li>
                                            <a href="">
                                                Юридическим лицам
                                            </a>
                                            <nav class="header__sublist-sublist-nav">
                                                <ul class="header__sublist-sublist">
                                                    <li>
                                                        <a href="#">
                                                            Юридическим лицам
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#">
                                                            Юридическим лицам
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#">
                                                            Юридическим лицам
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#">
                                                            Юридическим лицам
                                                        </a>
                                                    </li>
                                                </ul>
                                            </nav>
                                        </li>
                                        <li>
                                            <a href="">
                                                Юридическим лицам
                                            </a>
                                            <nav class="header__sublist-sublist-nav">
                                                <ul class="header__sublist-sublist">
                                                    <li>
                                                        <a href="#">
                                                            Юридическим лицам
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#">
                                                            Юридическим лицам
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#">
                                                            Юридическим лицам
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#">
                                                            Юридическим лицам
                                                        </a>
                                                    </li>
                                                </ul>
                                            </nav>
                                        </li>
                                        <li>
                                            <a href="">
                                                Юридическим лицам
                                            </a>
                                            <nav class="header__sublist-sublist-nav">
                                                <ul class="header__sublist-sublist">
                                                    <li>
                                                        <a href="#">
                                                            Юридическим лицам
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#">
                                                            Юридическим лицам
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#">
                                                            Юридическим лицам
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#">
                                                            Юридическим лицам
                                                        </a>
                                                        <nav class="header__level-three-nav">
                                                            <ul class="header__level-three">
                                                                <li>
                                                                    <a href="#">
                                                                        Юридическим лицам
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="#">
                                                                        Юридическим лицам
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="#">
                                                                        Юридическим лицам
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="#">
                                                                        Юридическим лицам
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </nav>
                                                    </li>
                                                </ul>
                                            </nav>
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
                            -->
                        <?php my_nav_menu([ 'theme_location'  => 'top4' ]); ?>
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
                                    <?php
                                    wp_nav_menu( array(
                                        'theme_location' => 'side-bar',
                                        'container' => '',
                                        'menu_class' => 'header__main-list header__menu-side-bar',
                                        'depth'           => 0,
                                    ) );
                                    ?>
                                    <div class="header__inner-mobail">
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
                                    <nav class="header__main-nav">
                                        <?php
                                        wp_nav_menu( array(
                                            'theme_location' => 'top',
                                            'container' => '',
                                            'menu_class' => 'header__main-list',
                                            'depth'           => 0,
                                        ) );
                                        wp_nav_menu( array(
                                            'theme_location' => 'top2',
                                            'container' => '',
                                            'menu_class' => 'header__main-list',
                                            'depth'           => 0,
                                        ) );
                                        wp_nav_menu( array(
                                            'theme_location' => 'top3',
                                            'container' => '',
                                            'menu_class' => 'header__main-list',
                                            'depth'           => 0,
                                        ) );
                                        ?>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

