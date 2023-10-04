document.addEventListener("DOMContentLoaded", ready);

function ready() {
    function citiesOpen() {
        const citiesClick = document.querySelector('.header__cities-click-js');
        const citiesOpen = document.querySelector('.header__cities-open-js');


        if (citiesClick) {
            citiesClick.addEventListener('click', () => {
                citiesOpen.classList.toggle('open');
                citiesClick.classList.toggle('active');
            })
        }

    }

    citiesOpen();


    function openMenu() {
        const headerBurgerTitleJs = document.querySelectorAll('.header__burger-title-js');
        const headerBurgerListJs = document.querySelectorAll('.header__burger-list-js');


        for (let i = 0; i < headerBurgerTitleJs.length; i++) {
            if (headerBurgerTitleJs[i]) {
                headerBurgerTitleJs[i].addEventListener('click', () => {
                    headerBurgerListJs[i].classList.toggle('open');
                    headerBurgerTitleJs[i].classList.toggle('active');
                })
            }
        }


    }

    openMenu();

    function burger() {
        const js__headerBurgerClick = document.querySelectorAll('.js__header-burgerclick')
        const js__headerBurger = document.querySelectorAll('.js__header-burger');
        const headerNavOpenJs = document.querySelector('.header__burger-menu');
        const headerContentJs = document.querySelector('.header-content-js');
        const body = document.querySelector('body');
        const lockPaddingValue = window.innerWidth - body.offsetWidth + 'px'; //Получили ширину scroll
        const timeout = 400;

        for (let i = 0; i < js__headerBurgerClick.length; i++) {
            js__headerBurgerClick[i].addEventListener('click', () => {
                for (let i = 0; i < 3; i++) {
                    js__headerBurger[i].classList.toggle('open');
                    headerNavOpenJs.classList.toggle('open');
                    bodylock();

                    if (!js__headerBurger[i].classList.contains('open')) {
                        bodyUnlock();
                    }

                }
            });
        }


        function bodylock() {
            body.style.paddingRight = lockPaddingValue;
            headerContentJs.style.paddingRight = lockPaddingValue;
            body.classList.add('lock')
        };


        function bodyUnlock() {
            setTimeout(function () {
                body.style.paddingRight = '0px';
                headerContentJs.style.paddingRight = '0px';
                body.classList.remove('lock');
            }, timeout)
        };
    }

    burger();

    function tabs() {
        document.querySelectorAll('.tabs-items').forEach((element) => {
            const tabsItem = element.querySelectorAll('.tabs-item');
            const tabsBody = element.querySelectorAll('.tabs-body');


            for (let i = 0; i < tabsItem.length; i++) {
                if (tabsItem[i]) {
                    tabsItem[i].addEventListener('click', () => {
                        tabsItem.forEach((element) => {
                            element.classList.remove('active');
                        })

                        tabsItem[i].classList.add('active');

                        tabsBody.forEach((element) => {
                            element.classList.remove('open');
                        })

                        tabsBody[i].classList.add('open');
                    })
                }
            }




        })
    }

    tabs();

    function tabs2() {
        document.querySelectorAll('.tabs-items2').forEach((element) => {
            const tabsItem = element.querySelectorAll('.tabs-item2');
            const tabsBody = element.querySelectorAll('.tabs-body2');


            for (let i = 0; i < tabsItem.length; i++) {
                if (tabsItem[i]) {
                    tabsItem[i].addEventListener('click', () => {
                        tabsItem.forEach((element) => {
                            element.classList.remove('active');
                        })

                        tabsItem[i].classList.add('active');

                        tabsBody.forEach((element) => {
                            element.classList.remove('open');
                        })

                        tabsBody[i].classList.add('open');
                    })
                }
            }




        })
    }

    tabs2();

    function projectsSlider() {
        new Swiper('.projects-slider-js', {
            slidesPerView: 2,
            spaceBetween: 20,
            speed: 1000,
            loop: true,
            // Navigation arrows
            navigation: {
                nextEl: '.projects-next-js',
                prevEl: '.projects-prev-js',
            },
            breakpoints: {
                // when window width is >= 320px
                320: {
                    slidesPerView: 1,
                },
                768: {
                    slidesPerView: 2,
                },
            },
        });
    }

    projectsSlider()

    function readMore () {
        const projectsListJs = document.querySelectorAll('.projects-list-js');
        const projectsReadMoreJs = document.querySelectorAll('.projects-read-more-js');



        for (let i = 0; i < projectsReadMoreJs.length; i++) {
            if (projectsReadMoreJs[i]) {
                projectsReadMoreJs[i].addEventListener('click', (e) => {
                    projectsListJs[i].classList.toggle('open');

                    if(projectsReadMoreJs[i].innerHTML === 'Скрыть')  {
                        projectsReadMoreJs[i].innerHTML = 'Читать больше'
                    } else {
                        projectsReadMoreJs[i].innerHTML = 'Скрыть';
                    }
                })
            }
        }
    }

    readMore();

    function readMore2 () {
        const casesReadMoreJs = document.querySelectorAll('.cases-read-more-js');
        const casesHiddenJs = document.querySelectorAll('.cases-hidden-js');



        for (let i = 0; i < casesReadMoreJs.length; i++) {
            if (casesReadMoreJs[i]) {
                casesReadMoreJs[i].addEventListener('click', (e) => {
                    casesHiddenJs.forEach((element) => {
                        element.classList.toggle('open');
                    })

                    if(casesReadMoreJs[i].innerHTML === 'Скрыть')  {
                        casesReadMoreJs[i].innerHTML = 'Открыть больше...'
                    } else {
                        casesReadMoreJs[i].innerHTML = 'Скрыть';
                    }
                })
            }
        }
    }

    readMore2();


    function reviewsSlider() {
        new Swiper('.reviews__slider', {
            slidesPerView: 4,
            spaceBetween: 65,
            speed: 1000,
            loop: true,
            // Navigation arrows
            navigation: {
                nextEl: '.reviews__next',
                prevEl: '.reviews__prev',
            },
            breakpoints: {
                // when window width is >= 320px
                320: {
                    slidesPerView: 1,
                },
                481: {
                    slidesPerView: 2,
                },
                768: {
                    slidesPerView: 3,
                },
                992: {
                    slidesPerView: 4,
                },
            },
        });
    }

    reviewsSlider()

    function newsSlider() {
        const newsPrev = document.querySelector('.news__prev');
        const newsNext = document.querySelector('.news__next');


      const swiper =  new Swiper('.news__slider', {
            slidesPerView: 1,
            spaceBetween: 65,
            speed: 1000,
            loop: true,
            // Navigation arrows
            navigation: {
                nextEl: '.news__next',
                prevEl: '.news__prev',
            },
            breakpoints: {
                992: {
                    slidesPerView: 1,
                },
            },
        });


        if(newsPrev) {
            newsPrev.addEventListener('click', () => {
                swiper.slidePrev()
            })
        }

        if(newsNext) {
            newsNext.addEventListener('click', () => {
                swiper.slideNext()
            })
        }



    }

    newsSlider()


    function map () {
        //api карта
        const map = document.querySelector('.map-js');

        if (map) {
            ymaps.ready(init);
        }




        function init() {
            let i;
            let pointer = [
                [map.dataset.coords, map.dataset.coords2],
            ];

            let myMap = new ymaps.Map(map, {
                center: [map.dataset.coords, map.dataset.coords2],
                zoom: 17
            });

            for (i = 0; i < pointer.length; ++i) {
                let place = [
                    new ymaps.Placemark(pointer[0], {},{}),
                ]

                myMap.geoObjects.add(place[i]);

            }



            myMap.controls.remove('geolocationControl'); // удаляем геолокацию
            myMap.controls.remove('searchControl'); // удаляем поиск
            myMap.controls.remove('trafficControl'); // удаляем контроль трафика
            myMap.controls.remove('typeSelector'); // удаляем тип
            myMap.controls.remove('fullscreenControl'); // удаляем кнопку перехода в полноэкранный режим
            myMap.controls.remove('zoomControl'); // удаляем контрол зуммирования
            myMap.controls.remove('rulerControl'); // удаляем контрол правил
            myMap.behaviors.disable(['scrollZoom']); // отключаем скролл карты (опционально)
        };

    }

    map();

    function map2 () {
       const map = document.querySelector('.map-js2');
       const jsAddress = document.querySelector('.js-address');



       if(map) {
           ymaps.ready(init);
       }

       function init() {
       let myMap = new ymaps.Map(map, {
           center: [59.94, 30.31],
           zoom: 10,
       })
           if(jsAddress) {
               const coords = jsAddress.dataset.longitude;
               const coords2 = jsAddress.dataset.latitude;
               const placemark = new ymaps.Placemark([coords, coords2]);
               let longitude;
               let latitude;
               myMap.geoObjects.add(placemark);
               $('.contacts-label-js').each(function() {
                   var self = $(this);
                   self.bind({
                       click: function(e) {
                           longitude = self.parents('.js-address').attr('data-longitude');
                           latitude = self.parents('.js-address').attr('data-latitude');
                           placemark.geometry.setCoordinates([longitude, latitude]);
                           myMap.setCenter(placemark.geometry.getCoordinates());
                       }
                   })
               });
           }







           myMap.controls.remove('geolocationControl'); // удаляем геолокацию
           myMap.controls.remove('searchControl'); // удаляем поиск
           myMap.controls.remove('trafficControl'); // удаляем контроль трафика
           myMap.controls.remove('typeSelector'); // удаляем тип
           myMap.controls.remove('fullscreenControl'); // удаляем кнопку перехода в полноэкранный режим
           myMap.controls.remove('zoomControl'); // удаляем контрол зуммирования
           myMap.controls.remove('rulerControl'); // удаляем контрол правил
           myMap.behaviors.disable(['scrollZoom']); // отключаем скролл карты (опционально)

       }

    }

    map2();



    function select() {
        var time = 300,
            trigger = null;
        $('body').on('click', '.select__trigger', function () {
            var drop = $(this).siblings('.select__drop');
            trigger = $(this);
            trigger.toggleClass('active');
            drop.fadeToggle(time);


            $(document).mouseup(function (e) {
                if (!trigger.is(e.target)
                    && trigger.has(e.target).length === 0
                    && !drop.is(e.target)
                    && drop.has(e.target).length === 0) {
                    trigger.removeClass('active');
                    drop.fadeOut(time);
                }
            });


            $('body').on('change', '.select__drop input', function () {
                if ($(this).is(':checked')) {
                    trigger.find('span').text($(this).siblings('label').text());
                }
                trigger.removeClass('active');
                drop.fadeOut(time);
            });



        })
    }
    select()

    function select2() {
        var time = 300,
            trigger = null;
        $('body').on('click', '.select-trigger-js', function () {
            var drop = $(this).siblings('.select-drop-js');
            trigger = $(this);
            trigger.toggleClass('active');
            drop.fadeToggle(time);


            $(document).mouseup(function (e) {
                if (!trigger.is(e.target)
                    && trigger.has(e.target).length === 0
                    && !drop.is(e.target)
                    && drop.has(e.target).length === 0) {
                    trigger.removeClass('active');
                    drop.fadeOut(time);
                }
            });


            $('body').on('change', '.select-drop-js input', function () {
                if ($(this).is(':checked')) {
                    trigger.find('span').text($(this).siblings('label').text());
                }
                trigger.removeClass('active');
                drop.fadeOut(time);
            });



        })
    }
    select2()


    function mask () {
        var element = document.querySelector('.phone');

        if(element) {
            var maskOptions = {
                mask: '+7(000)000-00-00',
                lazy: false
            }
            var mask = new IMask(element, maskOptions);
        }



    }

    mask();

    function quiz() {
        const quizBtnJs = document.querySelectorAll('.quiz-btn-js');
        const quizBtnMobailJs = document.querySelectorAll('.quiz-btn-mobail-js');
        const quizBacJs = document.querySelectorAll('.quiz-back-js');
        const quizBacMobailJs = document.querySelectorAll('.quiz-back-mobail-js');
        const quizFormJs = document.querySelectorAll('.quiz-form-js');



        for (let i = 0; i < quizBtnJs.length; i++) {
            if (quizBtnJs[i]) {
                quizBtnJs[i].addEventListener('click', () => {
                    quizFormJs.forEach((Element => Element.classList.remove('active')));
                    quizFormJs[i + 1].classList.add('active');
                })
            }
        }

        for (let i = 0; i < quizBtnMobailJs.length; i++) {
            if (quizBtnMobailJs[i]) {
                quizBtnMobailJs[i].addEventListener('click', () => {
                    quizFormJs.forEach((Element => Element.classList.remove('active')));
                    quizFormJs[i + 1].classList.add('active');
                })
            }
        }

        for (let i = 0; i < quizBacJs.length; i++) {
            if (quizBacJs[i]) {
                quizBacJs[i].addEventListener('click', () => {
                    quizFormJs.forEach((Element => Element.classList.remove('active')));
                    quizFormJs[i].classList.add('active');
                })
            }
        }

        for (let i = 0; i < quizBacMobailJs.length; i++) {
            if (quizBacMobailJs[i]) {
                quizBacMobailJs[i].addEventListener('click', () => {
                    quizFormJs.forEach((Element => Element.classList.remove('active')));
                    quizFormJs[i].classList.add('active');
                })
            }
        }
    }

    quiz();

    function accardion () {
        const accardionQuestionJs = document.querySelectorAll('.accardion-question-js');
        const accardionAnswerJs = document.querySelectorAll('.accardion-answer-js');


        for (let i = 0; i < accardionQuestionJs.length; i++) {
            if (accardionQuestionJs[i]) {
                accardionQuestionJs[i].addEventListener('click', () => {
                    accardionQuestionJs[i].classList.toggle('active');
                    accardionAnswerJs[i].classList.toggle('open');
                })
            }
        }
    }
    accardion();


    function priceSlider() {
    const body = document.querySelector('body');

    if(body.clientWidth <= 1199) {
        const swiper =  new Swiper('.price__slider', {
            slidesPerView: 2.5,
            spaceBetween: 16,
            speed: 1000,
            loop: true,
            pagination: {
                el: '.price__progressbar',
                clickable: true,
                type: 'progressbar',
            },
            breakpoints: {
                320: {
                    slidesPerView: 1.1,
                },

                768: {
                    slidesPerView: 1.6,
                },
                992: {
                    slidesPerView: 2.5,
                },
            },
        });
    }



    }

    priceSlider()

    function graphicsSlider() {
        const body = document.querySelector('body');

        if(body.clientWidth <= 1199) {
            const swiper =  new Swiper('.graphics__slider', {
                slidesPerView: 2.5,
                spaceBetween: 16,
                speed: 1000,
                loop: true,
                pagination: {
                    el: '.graphics__progressbar',
                    clickable: true,
                    type: 'progressbar',
                },
                breakpoints: {
                    320: {
                        slidesPerView: 1.1,
                        spaceBetween: 2,
                    },

                    768: {
                        slidesPerView: 1.6,
                        spaceBetween: 16,

                    },
                    992: {
                        slidesPerView: 2.5,
                    },
                },
            });
        }



    }

    graphicsSlider()

    function professionalSlider() {

            const swiper =  new Swiper('.professional__slider', {
                slidesPerView: 4,
                spaceBetween: 30,
                speed: 1000,
                loop: true,
                navigation: {
                    nextEl: '.professional__next',
                    prevEl: '.professional__prev',
                },
                pagination: {
                    el: '.professional__progressbar',
                    clickable: true,
                    type: 'progressbar',
                },
                breakpoints: {
                    320: {
                        slidesPerView: 1.1,
                    },

                    481: {
                        slidesPerView: 2,
                    },

                    768: {
                        slidesPerView: 3,
                    },

                    992: {
                        slidesPerView: 4,
                    },
                },
            });
    }

    professionalSlider()

    function nouslider() {
        const games__priceSlider = document.querySelectorAll('.js__nouslider');
        const min = document.querySelectorAll('.js__nouslider-min');
        for (let i = 0; i < games__priceSlider.length; i++) {
            const inputs = [min[i]]


            noUiSlider.create(games__priceSlider[i], {
                start: [parseInt(games__priceSlider[i].dataset.min)],
                connect: true,
                range: {
                    'min': parseInt(games__priceSlider[i].dataset.min),
                    'max': parseInt(games__priceSlider[i].dataset.max),
                }
            });



            inputs.forEach((el, index) => {
                el.addEventListener('change', (event) => {
                    let arr = [null, null];
                    arr[index] = event.target.value

                    games__priceSlider[i].noUiSlider.set(arr);

                });
            });



            games__priceSlider[i].noUiSlider.on('update', function (values, handle) {
                inputs[handle].value = Math.round(values[handle]);
            });
        }
    }

    nouslider()

    function orderSummerSlider() {

        const swiper =  new Swiper('.order-summer__slider', {
            slidesPerView: 3.2,
            spaceBetween: 15,
            speed: 1000,
            loop: true,
            navigation: {
                nextEl: '.order-summer__next',
                prevEl: '.order-summer__prev',
            },
            pagination: {
                el: '.order-summer__progressbar',
                clickable: true,
                type: 'progressbar',
            },
            breakpoints: {
                320: {
                    slidesPerView: 1,
                    spaceBetween: 5,
                },

                768: {
                    slidesPerView: 2.2,
                },

                1200: {
                    slidesPerView: 3.2,
                },

            },
        });
    }

    orderSummerSlider()

    function orderSummerSnowSlider() {
        const body = document.querySelector('body');

        if(body.clientWidth <= 1199) {
            const swiper =  new Swiper('.order-summer-snow__slider', {
                slidesPerView: 3.2,
                spaceBetween: 15,
                speed: 1000,
                loop: true,
                navigation: {
                    nextEl: '.order-summer__next',
                    prevEl: '.order-summer__prev',
                },
                pagination: {
                    el: '.order-summer__progressbar',
                    clickable: true,
                    type: 'progressbar',
                },
                breakpoints: {
                    320: {
                        slidesPerView: 1,
                        spaceBetween: 5,
                    },

                    768: {
                        slidesPerView: 2.2,
                    },

                    1200: {
                        slidesPerView: 3.2,
                    },

                },
            });
        }
    }

    orderSummerSnowSlider()

    function fixedHeader () {
        const header = $(".header-fixed");
        const scrollChange = 1;
        $(window).scroll(function() {
            var scroll = $(window).scrollTop();

            if (scroll >= scrollChange) {
                header.addClass('fixed');
            } else {
                header.removeClass("fixed");
            }
        });
    }

    fixedHeader()

    function headerMenu () {
        const itemMenu = document.querySelectorAll('.header__main-list .menu-item-has-children > a');


        for (let i = 0; i < itemMenu.length; i++) {
            const createItem = document.createElement('span');
            createItem.classList.add('header__click-menu');
            itemMenu[i].append(createItem);
        }



        const menuClick = document.querySelectorAll('.header__click-menu');
        const subMenu = document.querySelectorAll('.sub-menu');




        for (let i = 0; i < menuClick.length; i++) {
                subMenu[i].classList.toggle('open')
                itemMenu[i].classList.toggle('active')


            menuClick[i].addEventListener('click', (e) => {
                e.preventDefault()
                subMenu[i].classList.toggle('open')
                itemMenu[i].classList.toggle('active')
            })
        }

    }

    headerMenu();

    function calculator() {


        function moreBtn () {
            const calculatorMoreJs = document.querySelector('.calculator-more-js');
            const calculatorOpenJs = document.querySelector('.calculator-open-js');
            if(calculatorMoreJs) {
                calculatorMoreJs.addEventListener('click', () => {
                    calculatorOpenJs.classList.toggle('open');
                    calculatorMoreJs.classList.toggle('active');

                    if(calculatorMoreJs.innerHTML === 'Скрыть') {
                        calculatorMoreJs.innerHTML = 'Показать полный список';
                    } else {
                        calculatorMoreJs.innerHTML = 'Скрыть';
                    }
                })
            }
        }
        moreBtn();

        function openForm() {
          const calculatorBtnMoreJs = document.querySelector('.calculator-btn-more-js');
          const calculatorBoxFormJs = document.querySelector('.calculator-box-form-js');

        if(calculatorBtnMoreJs) {
            calculatorBtnMoreJs.addEventListener('click', (e) => {
                e.preventDefault();
                calculatorBoxFormJs.classList.add('open');
                calculatorBtnMoreJs.style.display = 'none';
            })
        }

        }

        openForm();

        function plusMinusValue() {
            const js__calculatorMinus = document.querySelectorAll('.js-calculator-minus');
            const js__calculatorValue = document.querySelectorAll('.js-calculator-value');
            const js__calculatorPlus = document.querySelectorAll('.js-calculator-plus');
            const calculatorOutputJs = document.querySelector('.calculator-output-js');
            const calculatorNameJs = document.querySelectorAll('.calculator-name-js');
            const calculatorPriceJs = document.querySelectorAll('.calculator-price-js');
            const calculatorOpenChildJs = document.querySelector('.calculator-opendchild-js');
            if(calculatorOutputJs) {
                calculatorOutputJs.innerHTML = 0 + '₽';
            }

            const parameters = {
                name: null,
                number: null,
                price: null,
            }
            let arr1 = [];
            let result = 0;

            let summa = null;

            let prices = [];



            function addNameCountPrice (i) {
                let summaTotal = parameters.price * parameters.number

                const div = document.createElement('div');
                div.classList.add('calculator__open-child');
                div.dataset.number = i;
                parseInt(parameters.number) === 1 ? calculatorOpenChildJs.append(div) : false;


                const number = document.querySelector(`[data-number="${i}"]`);



                const span = document.createElement('span');
                const strong = document.createElement('strong');
                const close = document.createElement('div');
                close.classList.add('calculator__close');
                close.innerHTML = 'x';
                span.classList.add('calculator__name');
                strong.classList.add('calculator__number');
                parseInt(parameters.number) === 1 ? number.append(span, strong, close) : false;
                const calculatorName = document.querySelector(`[data-number="${i}"] .calculator__name`);
                const calculatorNumber = document.querySelector(`[data-number="${i}"] .calculator__number`);
                const calculatorClose = document.querySelector(`[data-number="${i}"] .calculator__close`)




                if(calculatorName) {
                    calculatorName.innerHTML = parameters.name + 'x ' + parameters.number;
                    calculatorNumber.innerHTML = summaTotal + ' руб.';
                    calculatorClose.dataset.price = summaTotal
                }








            }

            function removeNameCountPrice (i)  {
                let summaTotal = parameters.price * parameters.number

                console.log(parameters.price)


                const calculatorName = document.querySelector(`[data-number="${i}"] .calculator__name`);
                const calculatorNumber = document.querySelector(`[data-number="${i}"] .calculator__number`);





                if(calculatorName) {
                    calculatorName.innerHTML = parameters.name + 'x ' + parameters.number;
                    calculatorNumber.innerHTML = summaTotal + ' руб.';
                }

                if(parseInt(parameters.number) === 0) {
                    const index = document.querySelector(`[data-number="${i}"]`)
                    calculatorOpenChildJs.removeChild(index)
                }
            }
            function sum (x) {
                let s = 0;

                for (let i = 0; i < x.length; i++) {
                    s += x[i];
                }

                return s
            }
            function totalSummaAdd (i) {
                arr1.push(parseInt(calculatorPriceJs[i].innerHTML));
                result = sum(arr1);
                let total = result
                calculatorOutputJs.innerHTML = total + '₽' ;
            }

            function totalSummaRemove () {
                let index = arr1.indexOf(parseInt(parameters.price));
                arr1.splice(index, 1);
                result = sum(arr1);
                calculatorOutputJs.innerHTML = result + '₽';

            }

            function closeNumber (i) {

                const calculatorClose = document.querySelectorAll(`.calculator__close`);
                const calculatorOpenChild = document.querySelectorAll(`.calculator__open-child`);






                for (let j = 0; j < calculatorClose.length; j++) {
                    calculatorClose[j].addEventListener('click', () => {
                        arr1.pop()
                        js__calculatorValue[i].value = 0;
                        calculatorOpenChild[j].remove();

                        let summa = parseInt(calculatorPriceJs[i].innerHTML);
                         prices.push(summa);
                         let index = prices.indexOf(summa);
                         let elementDelete = prices.splice(index, 1)
                         let result = prices;


                        calculatorOutputJs.innerHTML = result + '₽' ;



                    })
                }



            }

            function parametersLIst (i) {

                parameters.name = calculatorNameJs[i].innerHTML
                parameters.number =  js__calculatorValue[i].value;
                parameters.price = calculatorPriceJs[i].innerHTML
            }


            for (let i = 0; i < js__calculatorPlus.length; i++) {
                js__calculatorPlus[i].addEventListener('click', () => {
                    js__calculatorValue[i].value++;
                    if (js__calculatorValue[i].value > 0) {
                        js__calculatorMinus[i].classList.add('minus-blue')
                    }



                    parametersLIst(i)
                    addNameCountPrice(i);
                    totalSummaAdd(i);

                    closeNumber(i)








                })

                js__calculatorMinus[i].addEventListener('click', () => {
                    if (js__calculatorValue[i].value > 0) {
                        js__calculatorValue[i].value--;
                    }
                    if(js__calculatorValue[i].value < 1) {
                        js__calculatorMinus[i].classList.remove('minus-blue')
                    }

                    parametersLIst(i);
                    totalSummaRemove();
                    removeNameCountPrice(i);
                })

                js__calculatorValue[i].addEventListener('input', () => {
                    if (js__calculatorValue[i].value > 0) {
                        js__calculatorMinus[i].classList.add('minus-blue')
                    }

                    if(js__calculatorValue[i].value < 1) {
                        js__calculatorMinus[i].classList.remove('minus-blue')
                    }

                })




            }
        }

        plusMinusValue();





    }

    calculator();



    function checkboxForm() {
        const input = document.querySelector('.vacancies__checkbox input');

        if(input) {
            input.setAttribute('checked', 'true');
        }
    }

    checkboxForm()

    function popup() {
        const js__popupLink = document.querySelectorAll('.js__popup-link');
        const js__popupClose = document.querySelectorAll('.js__popup-close');
        const body = document.querySelector('body');


        let unlock = true;

        const timeout = 400;




        for (let i = 0; i < js__popupLink.length; i++) {
            js__popupLink[i].addEventListener('click', (event) => {
                const popup__name = js__popupLink[i].dataset.modal;
                const popupCurent = document.querySelector(`[data-popup="${popup__name}"]`);
                popupOpen(popupCurent);
                event.preventDefault();
            });
        };


        for (let i = 0; i < js__popupClose.length; i++) {
            js__popupClose[i].addEventListener('click', (event) => {
                popupClose(js__popupClose[i].closest('.js__popup-open'));
                event.preventDefault();
            });
        };



        function popupOpen(popupCurent) {
            if (popupCurent && unlock) {
                const popupActive = document.querySelector('.js__popup-open.open');

                if (popupActive) {
                    popupClose(popupActive, false);
                } else {
                    bodylock();
                }


                popupCurent.classList.add('open');
                popupCurent.addEventListener('click', (event) => {
                    if (!event.target.closest('.js__popup-content')) {
                        popupClose(event.target.closest('.js__popup-open'));
                        console.log(true);
                    } else {
                        console.log(false);
                    }
                });
            };
        }


        function popupClose(popupActive, doUnlock = true) {
            if (unlock) {
                popupActive.classList.remove('open');

                if (doUnlock) {
                    bodyUnlock();
                };
            };
        };


        function bodylock() {
            const lockPaddingValue = window.innerWidth - document.querySelector('body').offsetWidth + 'px'; //Получили ширину scrolla

            body.style.paddingRight = lockPaddingValue;
            body.classList.add('lock');

        };


        function bodyUnlock() {
            setTimeout(function () {
                body.style.paddingRight = '0px';
                body.classList.remove('lock');
            }, timeout)
        };
    }

    popup();


}





