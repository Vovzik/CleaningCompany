<?php
//Template Name: О компании
?>

<?php get_header(); ?>
    <main class="main">
    <section class="about">
        <div class="about__content">
            <video class="about__video" muted="" loop="" autoplay="" playsinline="true">
                <source src="https://seaman.com.ru/wp-content/uploads/2023/04/0425.mp4" type="video/mp4">
            </video>
        </div>
    </section>
    <section class="about-services">
        <div class="about-services__content">
            <div class="container">
                <div class="about-services__items">
                    <div class="about-services__item">
                        <img class="about-services__icon"
                             src="<?php bloginfo('template_url'); ?>/assets/img/about-services/1.svg" alt="alt">
                        <h2 class="about-services__title">
                            Персонал
                        </h2>
                        <p class="about-services__text">
                            370 профессиональных, обученных мастеров в четырех регионах России
                        </p>
                    </div>
                    <div class="about-services__item">
                        <img class="about-services__icon"
                             src="<?php bloginfo('template_url'); ?>/assets/img/about-services/2.svg" alt="alt">
                        <h2 class="about-services__title">
                            Оборудование
                        </h2>
                        <p class="about-services__text">
                            используем качественное оборудование и антиаллергенную химию
                        </p>
                    </div>
                    <div class="about-services__item">
                        <img class="about-services__icon"
                             src="<?php bloginfo('template_url'); ?>/assets/img/about-services/3.svg" alt="alt">
                        <h2 class="about-services__title">
                            Обслуживание
                        </h2>
                        <p class="about-services__text">
                            Более 450 тыс м2 помещений обслуживается нашим сервисом ежемесячно
                        </p>
                    </div>
                    <div class="about-services__item">
                        <img class="about-services__icon"
                             src="<?php bloginfo('template_url'); ?>/assets/img/about-services/4.svg" alt="alt">
                        <h2 class="about-services__title">
                            Мобильный график
                        </h2>
                        <p class="about-services__text">
                            Мы с легкостью подстроимся под удобный вам график уборки
                        </p>
                    </div>
                    <div class="about-services__item">
                        <img class="about-services__icon"
                             src="<?php bloginfo('template_url'); ?>/assets/img/about-services/5.svg" alt="alt">
                        <h2 class="about-services__title">
                            Спектр услуг
                        </h2>
                        <p class="about-services__text">
                            Широкий выбор клининговых услуг для дома и любых сфер бизнеса.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="about-description">
        <div class="about-description__content">
            <div class="container">
              <div class="about-description__inner">
                  <div class="about-description__info">
                      <h2 class="about-description__title">
                          CleanUp Company
                      </h2>
                      <div class="about-description__box about-description__box-media">
                          <img class="about-description__img" src="<?php bloginfo('template_url'); ?>/assets/img/about-description/1.jpg" alt="alt">
                      </div>
                      <div class="about-description__redactor">
                          <p>
                              Клининг – это профессиональная уборка помещений и прилегающей территории в соответствии с высокими стандартами Европы, осуществляемая опытными специалистами на профессиональном оборудовании. Мы сосредотачиваемся на предоставлении клиентам оказания услуг на самом высоком уровне профессионализма.
                          </p>
                          <p>
                              Клининговые услуги появились на Западе более 100 лет назад и сейчас стали неотъемлемой частью бизнеса и частной жизни в России, включая Москву и Санкт-Петербург. Company Cleanup занимает лидирующую позицию в сфере клининга в Санкт-Петербурге, Костроме, Ярославле и Иваново.
                          </p>
                          <p>
                              Мы уже более 5 лет на рынке и предоставляем широкий спектр клининговых услуг. Наша команда работает 24/7, чтобы обеспечить вас высоким качеством обслуживания. Мы постоянно инвестируем в обучение нашего персонала и обновление оборудования, чтобы удовлетворить ваши потребности. С нами чистота означает быстроту, качество и доступность.
                          </p>
                      </div>

                  </div>
                  <div class="about-description__box">
                       <img class="about-description__img" src="<?php bloginfo('template_url'); ?>/assets/img/about-description/1.jpg" alt="alt">
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