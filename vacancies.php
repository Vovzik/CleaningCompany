<?php
//Template Name: Вакансии
?>

<?php get_header(); ?>
    <main class="main">
      <section class="vacancies">
          <div class="vacancies__content">
              <div class="container">
                  <h1 class="vacancies__title title">
                      Вакансии
                  </h1>
                  <div class="vacancies__inner">
                      <div class="vacancies__tabs tabs-items">
                          <div class="vacancies__items">
                              <div class="vacancies__item tabs-item active">
                                  Санкт-Петербург
                              </div>
                              <div class="vacancies__item tabs-item">
                                  Кострома
                              </div>
                              <div class="vacancies__item tabs-item">
                                  Ярославль
                              </div>
                              <div class="vacancies__item tabs-item">
                                  Иваново
                              </div>
                          </div>
                          <div class="vacancies__open tabs-body open">
                              <div class="vacancies__box">
                                  <h2 class="vacancies__subtitle">
                                      Менеджер по клинингу
                                  </h2>
                                  <div class="vacancies__price">
                                      от 30 000 руб. на руки
                                  </div>
                                  <div class="vacancies__experience">
                                      Требуемый опыт работы: 1–3 года
                                  </div>
                                  <div class="vacancies__grafic">
                                      Требуемый опыт работы: 1–3 года
                                  </div>
                                  <ul class="vacancies__list">
                                      <li class="vacancies__list-item">
                                          В обязанности менеджера входит:
                                      </li>
                                      <li class="vacancies__list-item">
                                          ведение документации, табелей на объектах;
                                      </li>
                                      <li class="vacancies__list-item">
                                          онтроль-учет расходных материалов;
                                      </li>
                                      <li class="vacancies__list-item">
                                          к деловое общение с заказчиком;
                                      </li>
                                      <li class="vacancies__list-item">
                                          управление персоналом на объекте.
                                      </li>
                                  </ul>
                                  <a class="vacancies__btn js__popup-link" href="#" data-modal="#popup">
                                      Подробнее
                                  </a>
                              </div>
                              <div class="vacancies__box">
                                  <h2 class="vacancies__subtitle">
                                      Менеджер по клинингу
                                  </h2>
                                  <div class="vacancies__price">
                                      от 30 000 руб. на руки
                                  </div>
                                  <div class="vacancies__experience">
                                      Требуемый опыт работы: 1–3 года
                                  </div>
                                  <div class="vacancies__grafic">
                                      Требуемый опыт работы: 1–3 года
                                  </div>
                                  <ul class="vacancies__list">
                                      <li class="vacancies__list-item">
                                          В обязанности менеджера входит:
                                      </li>
                                      <li class="vacancies__list-item">
                                          ведение документации, табелей на объектах;
                                      </li>
                                      <li class="vacancies__list-item">
                                          онтроль-учет расходных материалов;
                                      </li>
                                      <li class="vacancies__list-item">
                                          к деловое общение с заказчиком;
                                      </li>
                                      <li class="vacancies__list-item">
                                          управление персоналом на объекте.
                                      </li>
                                  </ul>
                                  <a class="vacancies__btn js__popup-link" href="#" data-modal="#popup">
                                      Подробнее
                                  </a>
                              </div>
                          </div>
                          <div class="vacancies__open tabs-body">
                              <div class="vacancies__box">
                                  <h2 class="vacancies__subtitle">
                                      Менеджер по клинингу
                                  </h2>
                                  <div class="vacancies__price">
                                      от 30 000 руб. на руки
                                  </div>
                                  <div class="vacancies__experience">
                                      Требуемый опыт работы: 1–3 года
                                  </div>
                                  <div class="vacancies__grafic">
                                      Требуемый опыт работы: 1–3 года
                                  </div>
                                  <ul class="vacancies__list">
                                      <li class="vacancies__list-item">
                                          В обязанности менеджера входит:
                                      </li>
                                      <li class="vacancies__list-item">
                                          ведение документации, табелей на объектах;
                                      </li>
                                      <li class="vacancies__list-item">
                                          онтроль-учет расходных материалов;
                                      </li>
                                      <li class="vacancies__list-item">
                                          к деловое общение с заказчиком;
                                      </li>
                                      <li class="vacancies__list-item">
                                          управление персоналом на объекте.
                                      </li>
                                  </ul>
                                  <a class="vacancies__btn" href="#">
                                      Подробнее
                                  </a>
                              </div>
                          </div>
                      </div>
                      <div class="vacancies__form">
                          <h2 class="vacancies__form-title">
                              Заявка на работу:
                          </h2>
                          <?php echo do_shortcode( '[contact-form-7 id="b9e7c49" title="Контактная форма"]' ); ?>
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