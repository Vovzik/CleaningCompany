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
                projectsReadMoreJs[i].addEventListener('click', () => {
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

}





