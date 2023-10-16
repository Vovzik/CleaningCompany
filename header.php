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
                             src="<?php the_field('header__logo', 10) ?>" alt="Logo">
                    </a>
                    <div class="header__burger-box">
                        <div class='header__burger js__header-burgerclick'>
                            <div class='header__burger-item js__header-burger header__burger--top'></div>
                            <div class='header__burger-item js__header-burger header__burger--middle'></div>
                            <div class='header__burger-item js__header-burger header__burger--bottom'></div>
                        </div>
                    </div>

                    <div class="header__cities header__cities-click-js">
                        <?php the_field('header__cities', 10) ?>
                        <ul class="header__cities-list header__cities-open-js">
                            <?php $repeater = get_field('header__cities-list', 10); ?>

                            <?php if ($repeater) : ?>
                                <?php foreach ($repeater as $repeaters) : ?>
                                    <li class="header__cities-item">
                                        <a class="header__cities-link" href="<?php echo $repeaters['header__cities-link']?>">
                                            <?php echo $repeaters['header__cities-item']?>
                                        </a>
                                    </li>
                                <?php endforeach; ?>
                            <?php endif; ?>
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
                        <a class="header__phone" href="tel:<?php the_field('header__phone', 10) ?>">
                            <?php the_field('header__phone', 10) ?>
                        </a>
                        <a class="header__mail" href="mailto:<?php the_field('header__mail', 10) ?>">
                            <?php the_field('header__mail', 10) ?>
                        </a>
                    </div>
                    </div>
                    <a class="header__button header-button <?php the_field('header-button-class', 10) ?>" href="#" <?php the_field('header-button-data', 10) ?>>
                        <?php the_field('header-button', 10) ?>
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
                                                <?php $repeater = get_field('header__burger-socials', 10); ?>

                                                <?php if ($repeater) : ?>
                                                    <?php foreach ($repeater as $repeaters) : ?>
                                                        <a class="header__burger-social" href="<?php echo $repeaters['header__burger-social']?>">
                                                            <img class="header__burger-social-img"
                                                                 src="<?php echo $repeaters['header__burger-social-img']?>"
                                                                 alt="alt">
                                                        </a>
                                                    <?php endforeach; ?>
                                                <?php endif; ?>
                                            </div>
                                            <a class="header__burger-btn <?php the_field('header-button-class', 10) ?>" <?php the_field('header-button-data', 10) ?> href="#" >
                                                <?php the_field('header-button', 10) ?>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="header__burger-column2">
                                    <div class="header__burger-box-bottom">
                                        Услуги
                                        <a class="header__burger-logo" href="/">
                                            <img class="header__burger-logo-img"
                                                 src="<?php the_field('header__burger-logo-img', 10) ?>"
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

