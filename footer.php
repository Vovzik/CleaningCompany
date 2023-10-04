
<section class="callback">
    <div class="callback__content">
        <div class="container callback__container">
            <div class="callback__inner">
                <form class="callback__form">
                    <h2 class="callback__title">
                        Запишитесь на бесплатную консультацию и мы вам позвоним
                    </h2>
                    <input class="callback__input" type="text" name="name" placeholder="Имя">
                    <input class="callback__input" type="tel" name="phone" placeholder="Телефон">
                    <button class="callback__btn" type="submit">
                        Отправить
                    </button>
                    <input type="checkbox" class="callback__checkbox-input" id="checkbox" checked>
                    <label for="checkbox" class="callback__checkbox-title">
                        Нажимая кнопку “Отправить” я согласен с обработкой персональных данных
                    </label>
                </form>
                <div class="callback__column">
                    <div class="callback__map map-js" data-coords="59.94421506418701" data-coords2="30.48710499999999"></div>
                    <div class="callback__map-box">
                        <h3 class="callback__subtitle">
                            Контакты
                        </h3>
                        <ul class="callback__list">
                            <li>
                                Санкт-Петербург, пр. Косыгина д.25, к3
                            </li>
                            <li>
                                +48 (737) 106-566
                            </li>
                            <li>
                                sales@cleanupcompany.ru
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
</main>
<footer class="footer">
   <div class="footer__content">
       <div class="container">
           <div class="footer__inner">
               <div class="footer__items">
                   <div class="footer__item">
                       <h2 class="footer__title">
                           Услуги
                       </h2>
                       <h3 class="footer__subtitle">
                           Юридические лица
                       </h3>
                       <?php
                       wp_nav_menu( array(
                           'theme_location' => 'bottom',
                           'container' => '',
                           'menu_class' => 'footer__list',
                       ) );
                       ?>
                   </div>
                   <div class="footer__item">
                       <h2 class="footer__title footer__title-opacity">
                           Услуги
                       </h2>
                       <h3 class="footer__subtitle">
                               Физические лица
                       </h3>
                       <?php
                       wp_nav_menu( array(
                           'theme_location' => 'bottom2',
                           'container' => '',
                           'menu_class' => 'footer__list',
                       ) );
                       ?>
                   </div>
                   <div class="footer__item">
                       <h2 class="footer__title">
                           О нас
                       </h2>
                       <?php
                       wp_nav_menu( array(
                           'theme_location' => 'bottom3',
                           'container' => '',
                           'menu_class' => 'footer__list',
                       ) );
                       ?>
                   </div>
               </div>
               <div class="footer__socials">
                   <p class="footer__socials-text">
                       Никаких роботов – задайте вопрос и получите быстрый ответ от человека
                   </p>
                   <div class="footer__socials-items">
                       <a class="footer__socials-item" href="#">
                           <img class="footer__socials-icon" src="<?php bloginfo('template_url'); ?>/assets/img/footer/1.svg" alt="alt">
                       </a>
                       <a class="footer__socials-item" href="#">
                           <img class="footer__socials-icon" src="<?php bloginfo('template_url'); ?>/assets/img/footer/2.svg" alt="alt">
                       </a>
                       <a class="footer__socials-item" href="#">
                           <img class="footer__socials-icon" src="<?php bloginfo('template_url'); ?>/assets/img/footer/3.svg" alt="alt">
                       </a>
                   </div>
                   <div class="footer__grafick">
                   <span class="footer__time">
                       Ежедневно с 8:30 до 20:00
                   </span>
                       <span class="footer__dayoff">
                       Без выходных
                   </span>
                   </div>
                   <a class="footer__gorod" href="#">
                       Санкт-Петербург
                   </a>
                   <div class="footer__address">
                       Санкт-Петербург, пр. Косыгина д.25, к3
                   </div>
                   <a class="footer__phone" href="tel:+48737106566">
                       +48 (737) 106-566
                   </a>
                   <a class="footer__mail" href="mailto:sales@cleanupcompany.ru">
                       sales@cleanupcompany.ru
                   </a>
                   <div class="footer__info">
                   <span class="footer__info-text">
                     ОГРН: 2305392583
                   </span>
                       <span class="footer__info-text">
                     ИНН: 92347932482934
                   </span>
                   </div>
               </div>
           </div>
           <div class="footer__bottom">
               <div class="footer__bottom-text">
                   © 2013-2023 Клининговая компания CleanUp Company — в борьбе за чистоту
               </div>
               <a class="footer__bottom-text footer__bottom-underline" href="#">
                   Политика конфиденциальности
               </a>
               <a class="footer__rubilnik" href="#">
                   Разработано Веб-Студией <span class="footer__rubilnik__color">“Рубильник”</span>
               </a>
           </div>
       </div>
   </div>
</footer>

<?php  wp_footer() ?>

<div data-popup="#popup" class="popup js__popup-open">
    <div class="popup__body">
        <div class="popup__content js__popup-content">
           <h3 class="popup__title">
               Менеджер по клинингу
           </h3>
            <div class="popup__redactor">
                <p>
                    Менеджер по клинингу на объекте — контактное звено в цепи Заказчик-Исполнитель. Мы ищем ответственного, неконфликтного работника, который обладает навыками делового общения.
                </p>
                <h4>
                    Наши требования:
                </h4>
                <ul>
                    <li>наличие высшего либо среднего-специального образования;</li>
                    <li>навыки работы с ПК;</li>
                    <li>грамотная речь, навыки делового общения;</li>
                    <li>опрятный внешний;</li>
                    <li>опыт работы в сфере клининговых услуг и менеджменте.</li>
                </ul>
                <h4>
                    График работы 5/2 , рабочий день не нормирован.
                </h4>
            </div>
        </div>
    </div>
</div>
</div>

<div data-popup="#popup-form" class="vacancies popup-form js__popup-open">
    <div class="popup-form__body">
        <div class="popup-form__content js__popup-content">
            <h3 class="popup-form__title">
                Заказать обратный звонок
            </h3>
            <p class="popup-form__text">
                Наш менеджер свяжется с вами в течение 30 минут.
            </p>
            <?php echo do_shortcode('[contact-form-7 id="4a9e8fb" title="Контактная форма 2"]'); ?>
        </div>
    </div>
</div>
</div>








<script src="https://api-maps.yandex.ru/2.1/?lang=ru_RU"></script>
</body>

</html>
