@extends('layouts.app')

@section('title')
    Головна
@endsection

@section('content')
    <section class="banner-area">
        <div class="banner-text d-flex justify-content-center align-items-center">
            <h1>Ремонт автомобілів будь-якої <br>складності</h1>

            <h5>Ми пропонуємо сучасне високоякісне обслуговування легкових, легких вантажних <br>
                автомобілів, і мікроавтобусів в умовах і на обладнанні СТО</h5>

            <div class="banner-buttons">
                <a href="">Зв'язатись з нами</a>
                <a href="">Наші сервіси</a>
            </div>
        </div>

        <div class="swiper-wrapper">
            <div class="swiper-slide" style="background-image: url({{ asset('images/car1.png') }})"></div>
            <div class="swiper-slide" style="background-image: url({{ asset('images/car2.png') }})"></div>
            <div class="swiper-slide" style="background-image: url({{ asset('images/car3.png') }})"></div>
            <div class="swiper-slide" style="background-image: url({{ asset('images/car4.png') }})"></div>
        </div>

        <div class="swiper-pagination"></div>

        <a class="swiper-button-prev">
            <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M18.75 10C18.75 9.83424 18.6841 9.67527 18.5669 9.55805C18.4497 9.44084 18.2907 9.375 18.125 9.375H3.38374L7.31749 5.4425C7.3756 5.38439 7.42169 5.3154 7.45314 5.23948C7.48459 5.16355 7.50078 5.08218 7.50078 5C7.50078 4.91782 7.48459 4.83644 7.45314 4.76052C7.42169 4.68459 7.3756 4.61561 7.31749 4.5575C7.25938 4.49939 7.19039 4.45329 7.11447 4.42184C7.03854 4.39039 6.95717 4.37421 6.87499 4.37421C6.79281 4.37421 6.71143 4.39039 6.63551 4.42184C6.55958 4.45329 6.4906 4.49939 6.43249 4.5575L1.43249 9.5575C1.37428 9.61555 1.32811 9.68452 1.2966 9.76045C1.26509 9.83639 1.24887 9.91779 1.24887 10C1.24887 10.0822 1.26509 10.1636 1.2966 10.2395C1.32811 10.3155 1.37428 10.3844 1.43249 10.4425L6.43249 15.4425C6.4906 15.5006 6.55958 15.5467 6.63551 15.5781C6.71143 15.6096 6.79281 15.6258 6.87499 15.6258C6.95717 15.6258 7.03854 15.6096 7.11447 15.5781C7.19039 15.5467 7.25938 15.5006 7.31749 15.4425C7.3756 15.3844 7.42169 15.3154 7.45314 15.2395C7.48459 15.1636 7.50078 15.0822 7.50078 15C7.50078 14.9178 7.48459 14.8364 7.45314 14.7605C7.42169 14.6846 7.3756 14.6156 7.31749 14.5575L3.38374 10.625H18.125C18.2907 10.625 18.4497 10.5591 18.5669 10.4419C18.6841 10.3247 18.75 10.1658 18.75 10Z" fill="white"/>
            </svg>
        </a>
        <a class="swiper-button-next">
            <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M1.25 10C1.25 10.1658 1.31584 10.3247 1.43306 10.4419C1.55027 10.5592 1.70924 10.625 1.875 10.625L16.6162 10.625L12.6825 14.5575C12.6244 14.6156 12.5783 14.6846 12.5468 14.7605C12.5154 14.8364 12.4992 14.9178 12.4992 15C12.4992 15.0822 12.5154 15.1636 12.5468 15.2395C12.5783 15.3154 12.6244 15.3844 12.6825 15.4425C12.7406 15.5006 12.8096 15.5467 12.8855 15.5782C12.9614 15.6096 13.0428 15.6258 13.125 15.6258C13.2072 15.6258 13.2886 15.6096 13.3645 15.5782C13.4404 15.5467 13.5094 15.5006 13.5675 15.4425L18.5675 10.4425C18.6257 10.3844 18.6719 10.3155 18.7034 10.2395C18.7349 10.1636 18.7511 10.0822 18.7511 10C18.7511 9.9178 18.7349 9.83639 18.7034 9.76046C18.6719 9.68453 18.6257 9.61556 18.5675 9.5575L13.5675 4.5575C13.5094 4.49939 13.4404 4.4533 13.3645 4.42185C13.2886 4.3904 13.2072 4.37421 13.125 4.37421C13.0428 4.37421 12.9614 4.3904 12.8855 4.42185C12.8096 4.4533 12.7406 4.49939 12.6825 4.5575C12.6244 4.61561 12.5783 4.6846 12.5468 4.76052C12.5154 4.83645 12.4992 4.91782 12.4992 5C12.4992 5.08218 12.5154 5.16356 12.5468 5.23948C12.5783 5.31541 12.6244 5.38439 12.6825 5.4425L16.6162 9.375L1.875 9.375C1.70924 9.375 1.55027 9.44085 1.43306 9.55806C1.31584 9.67527 1.25 9.83424 1.25 10Z" fill="white"/>
            </svg>
        </a>
    </section>

    <section class="advantages-area d-flex">
        <img src="{{ asset('images/advantage-car.png') }}">

        <div class="container advantages-text">
            <h2>
                Переваги
            </h2>
            <div class="advantages-text-blocks">
                <div class="advantages-text-block">
                    <div class="advantages-text-block-header d-flex align-items-center">
                        <span>
                            01
                        </span>
                        <h3>
                            Швидкість
                        </h3>
                    </div>
                    <p>
                        Діє система попереднього запису.
                    </p>
                </div>
                <div class="advantages-text-block">
                    <div class="advantages-text-block-header d-flex align-items-center">
                        <span>
                            02
                        </span>
                        <h3>
                            Якість
                        </h3>
                    </div>
                    <p>
                        Ми використовуємо тільки сучасне професійне обладнання.
                    </p>
                </div>
                <div class="advantages-text-block">
                    <div class="advantages-text-block-header d-flex align-items-center">
                        <span>
                            03
                        </span>
                        <h3>
                            Досвід
                        </h3>
                    </div>
                    <p>
                        Працівники мають великий досвід роботи з автомобілями
                    </p>
                </div>
                <div class="advantages-text-block">
                    <div class="advantages-text-block-header d-flex align-items-center">
                        <span>
                            04
                        </span>
                        <h3>
                            Професіоналізм
                        </h3>
                    </div>
                    <p>
                        Фахівці регулярно навчаються у провідних виробників запасних частин і устаткування.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section class="container services-area">
        <div class="services-header d-flex justify-content-between">
            <h1 class="services-header-text">
                Наші сервіси
            </h1>
            <a class="services-header-button d-flex align-items-center justify-content-center" href="">Зв'язатись з нами</a>
        </div>
        <div class="services-content">
            <p class="services-content-text">
                Авторизоване СТО надає високоякісні послуги з ремонту та діагностиці, тюнінгу та комплексного обслуговування автомобілів Opel, KIA, Peugeot, Jeep, Citroen, Chery, Chevrolet та інших марок авто. У розпорядженні Автоцентру найсучасніше обладнання, новітня техніка з повним набором необхідних інструментів для гарантійного та післягарантійного обслуговування автомобілів.
            </p>
            <div class="services-content-buttons d-flex justify-content-end align-items-center">
                <a class="services-content-button-prev" href="">
                    <svg width="25" height="25" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M23.4375 12.5C23.4375 12.2928 23.3552 12.0941 23.2087 11.9476C23.0622 11.8011 22.8634 11.7188 22.6562 11.7188H4.22968L9.14687 6.80313C9.2195 6.73049 9.27712 6.64426 9.31644 6.54935C9.35575 6.45445 9.37598 6.35273 9.37598 6.25C9.37598 6.14728 9.35575 6.04556 9.31644 5.95065C9.27712 5.85575 9.2195 5.76951 9.14687 5.69688C9.07423 5.62424 8.988 5.56662 8.89309 5.52731C8.79819 5.488 8.69647 5.46777 8.59374 5.46777C8.49102 5.46777 8.3893 5.488 8.29439 5.52731C8.19949 5.56662 8.11325 5.62424 8.04062 5.69688L1.79062 11.9469C1.71786 12.0194 1.66014 12.1057 1.62075 12.2006C1.58137 12.2955 1.5611 12.3972 1.5611 12.5C1.5611 12.6028 1.58137 12.7045 1.62075 12.7994C1.66014 12.8943 1.71786 12.9806 1.79062 13.0531L8.04062 19.3031C8.11325 19.3758 8.19949 19.4334 8.29439 19.4727C8.3893 19.512 8.49102 19.5322 8.59374 19.5322C8.69647 19.5322 8.79819 19.512 8.89309 19.4727C8.988 19.4334 9.07423 19.3758 9.14687 19.3031C9.2195 19.2305 9.27712 19.1443 9.31644 19.0494C9.35575 18.9544 9.37598 18.8527 9.37598 18.75C9.37598 18.6473 9.35575 18.5456 9.31644 18.4507C9.27712 18.3557 9.2195 18.2695 9.14687 18.1969L4.22968 13.2813H22.6562C22.8634 13.2813 23.0622 13.1989 23.2087 13.0524C23.3552 12.9059 23.4375 12.7072 23.4375 12.5Z" fill="white"/>
                    </svg>
                </a>
                <a class="services-content-button-next" href="">
                    <svg width="25" height="25" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M1.56251 12.5C1.56251 12.2928 1.64482 12.0941 1.79133 11.9476C1.93784 11.8011 2.13656 11.7188 2.34376 11.7188H20.7703L15.8531 6.80313C15.7805 6.73049 15.7229 6.64426 15.6836 6.54935C15.6443 6.45445 15.624 6.35273 15.624 6.25C15.624 6.14728 15.6443 6.04556 15.6836 5.95065C15.7229 5.85575 15.7805 5.76951 15.8531 5.69688C15.9258 5.62424 16.012 5.56662 16.1069 5.52731C16.2018 5.488 16.3035 5.46777 16.4063 5.46777C16.509 5.46777 16.6107 5.488 16.7056 5.52731C16.8005 5.56662 16.8867 5.62424 16.9594 5.69688L23.2094 11.9469C23.2821 12.0194 23.3399 12.1057 23.3792 12.2006C23.4186 12.2955 23.4389 12.3972 23.4389 12.5C23.4389 12.6028 23.4186 12.7045 23.3792 12.7994C23.3399 12.8943 23.2821 12.9806 23.2094 13.0531L16.9594 19.3031C16.8867 19.3758 16.8005 19.4334 16.7056 19.4727C16.6107 19.512 16.509 19.5322 16.4063 19.5322C16.3035 19.5322 16.2018 19.512 16.1069 19.4727C16.012 19.4334 15.9258 19.3758 15.8531 19.3031C15.7805 19.2305 15.7229 19.1443 15.6836 19.0494C15.6443 18.9544 15.624 18.8527 15.624 18.75C15.624 18.6473 15.6443 18.5456 15.6836 18.4507C15.7229 18.3557 15.7805 18.2695 15.8531 18.1969L20.7703 13.2813H2.34376C2.13656 13.2813 1.93784 13.1989 1.79133 13.0524C1.64482 12.9059 1.56251 12.7072 1.56251 12.5Z" fill="white"/>
                    </svg>
                </a>
            </div>
        </div>
        <div class="services-cards swiper-wrapper d-flex">
            <div class="services-card swiper-slide">
                <img class="services-card-image" src="{{ asset('images/service1.png') }}">
                <h3 class="services-card-header">
                    Діагностика
                </h3>
                <p class="services-card-text">
                    Автоцентр пропонує своїм клієнтам вигідні пропозиції, від яких важко відмовитися.
                </p>
            </div>
            <div class="services-card swiper-slide">
                <img class="services-card-image" src="{{ asset('images/service2.png') }}">
                <h3 class="services-card-header">
                    Ремонт Авто
                </h3>
                <p class="services-card-text">
                    В автосервісі усуваються дрібні ламання, що не становлять загрози для пасажирів.
                </p>
            </div>
            <div class="services-card swiper-slide">
                <img class="services-card-image" src="{{ asset('images/service3.png') }}">
                <h3 class="services-card-header">
                    Кузовні роботи
                </h3>
                <p class="services-card-text">
                    Кузовні роботи на СТО бувають локальними й складними.
                </p>
            </div>
            <div class="services-card swiper-slide">
                <img class="services-card-image" src="{{ asset('images/service4.png') }}">
                <h3 class="services-card-header">
                    Шиномонтаж
                </h3>
                <p class="services-card-text">
                    Шиномонтаж — це популярна послуга, яку періодично потребує кожен автомобіль.
                </p>
            </div>
            <div class="services-card swiper-slide">
                <img class="services-card-image" src="{{ asset('images/service5.png') }}">
                <h3 class="services-card-header">
                    Послуги автоелектрики
                </h3>
                <p class="services-card-text">
                    Автоелектроніка займає важливе місце в конструкції будь-якого автомобіля.
                </p>
            </div>

            <div class="services-card swiper-slide">
                <img class="services-card-image" src="{{ asset('images/service1.png') }}">
                <h3 class="services-card-header">
                    Діагностика
                </h3>
                <p class="services-card-text">
                    Автоцентр пропонує своїм клієнтам вигідні пропозиції, від яких важко відмовитися.
                </p>
            </div>
            <div class="services-card swiper-slide">
                <img class="services-card-image" src="{{ asset('images/service2.png') }}">
                <h3 class="services-card-header">
                    Ремонт Авто
                </h3>
                <p class="services-card-text">
                    В автосервісі усуваються дрібні ламання, що не становлять загрози для пасажирів.
                </p>
            </div>
            <div class="services-card swiper-slide">
                <img class="services-card-image" src="{{ asset('images/service3.png') }}">
                <h3 class="services-card-header">
                    Кузовні роботи
                </h3>
                <p class="services-card-text">
                    Кузовні роботи на СТО бувають локальними й складними.
                </p>
            </div>
            <div class="services-card swiper-slide">
                <img class="services-card-image" src="{{ asset('images/service4.png') }}">
                <h3 class="services-card-header">
                    Шиномонтаж
                </h3>
                <p class="services-card-text">
                    Шиномонтаж — це популярна послуга, яку періодично потребує кожен автомобіль.
                </p>
            </div>
            <div class="services-card swiper-slide">
                <img class="services-card-image" src="{{ asset('images/service5.png') }}">
                <h3 class="services-card-header">
                    Послуги автоелектрики
                </h3>
                <p class="services-card-text">
                    Автоелектроніка займає важливе місце в конструкції будь-якого автомобіля.
                </p>
            </div>
        </div>

        <div class="services-video">
            <video autoplay muted play>
                <source src="{{ asset('videos/services.mp4') }}" type="video/mp4">
                Your browser does not support the video tag.
            </video>
        </div>
    </section>

    <section class="contact-area d-flex align-items-end">
        <div id="map"></div>
        <div class="container d-flex justify-content-end">
            <div class="contact-form">
                <h3 class="contact-form-header">Зв’язатись з нами</h3>
                <div class="form-group">
                    <input class="contact-form-input" placeholder="Ім'я">
                    <div class="line"></div>
                </div>

                <div class="form-group">
                    <input class="contact-form-input" placeholder="Пошта">
                    <div class="line"></div>
                </div>



                <div class="contact-form-container">
                    <div class="form-group">
                        <input class="contact-form-input" placeholder="+380">
                        <div class="line"></div>
                    </div>
                    <div class="form-group">
                        <input class="contact-form-input" placeholder="00000000">
                        <div class="line"></div>
                    </div>
                </div>

                <div class="form-group">
                    <input class="contact-form-input" placeholder="Ваша проблема">
                    <div class="line"></div>
                </div>

                <button class="contact-form-button" type="submit">Зателефонуйте мені</button>
            </div>
        </div>
    </section>

    <div id="subscriptionModal" class="modal">

        <div class="modal-content">
            <a onclick="closeModal()" class="close">&times;</a>
            <h1 class="modal-header">
                Підпишіться та отримайте знижку в <br>10% на ремонт автомобіля
            </h1>
            <div class="form-group">
                <input class="modal-input" placeholder="Ім'я">
                <div class="line"></div>
            </div>
            <div class="form-group">
                <input class="modal-input" placeholder="Пошта">
                <div class="line"></div>
            </div>
            <button class="modal-submit">Підписатися</button>
        </div>

    </div>

@endsection

@push('css')
    <link rel="stylesheet" href="{{ mix('/css/index.css') }}">

    <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css"
    />
@endpush

@push('js')
    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>

    <script>
        setTimeout(function() {
            const element = document.querySelectorAll('.modal');
            element[0].classList.add('active');
            document.getElementsByTagName("body")[0].style = "overflow: hidden hidden!important;";
        }, 5000);

        function closeModal() {
            const element = document.querySelectorAll('.modal');
            element[0].classList.remove('active');
            document.getElementsByTagName("body")[0].style = "overflow: hidden auto!important;";
        }
    </script>

    <script type="module">
        import Swiper from 'https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.esm.browser.min.js'

        const bannerSwiper = new Swiper('.banner-area', {
            direction: 'horizontal',
            centeredSlides: true,
            allowTouchMove: false,
            loop: true,

            speed: 1500,

            autoplay: {
                delay: 5000,
            },

            effect: 'fade',
            fadeEffect: {
                crossFade: true
            },

            pagination: {
                el: '.swiper-pagination',
            },

            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
                clickable: true,
            }
        });

        const servicesSwiper = new Swiper('.services-area', {
            direction: 'horizontal',
            centeredSlides: true,
            allowTouchMove: false,
            loop: true,
            spaceBetween: 20,

            height: 400,
            width: 1125,


            slidesPerView: 3,
            speed: 1500,

            navigation: {
                nextEl: '.services-content-button-next',
                prevEl: '.services-content-button-prev',
                clickable: true,
            },
        });
    </script>

    <script>
        function initMap() {
            // Styles a map in night mode.
            var map = new google.maps.Map(document.getElementById('map'), {
                center: {lat: 38.91, lng: -76.97},
                zoom: 12,
                styles: [
                    {
                        "featureType": "all",
                        "elementType": "labels",
                        "stylers": [
                            {
                                "visibility": "on"
                            }
                        ]
                    },
                    {
                        "featureType": "all",
                        "elementType": "labels.text.fill",
                        "stylers": [
                            {
                                "saturation": 36
                            },
                            {
                                "color": "#000000"
                            },
                            {
                                "lightness": 40
                            }
                        ]
                    },
                    {
                        "featureType": "all",
                        "elementType": "labels.text.stroke",
                        "stylers": [
                            {
                                "visibility": "on"
                            },
                            {
                                "color": "#000000"
                            },
                            {
                                "lightness": 16
                            }
                        ]
                    },
                    {
                        "featureType": "all",
                        "elementType": "labels.icon",
                        "stylers": [
                            {
                                "visibility": "off"
                            }
                        ]
                    },
                    {
                        "featureType": "administrative",
                        "elementType": "geometry.fill",
                        "stylers": [
                            {
                                "color": "#000000"
                            },
                            {
                                "lightness": 20
                            }
                        ]
                    },
                    {
                        "featureType": "administrative",
                        "elementType": "geometry.stroke",
                        "stylers": [
                            {
                                "color": "#000000"
                            },
                            {
                                "lightness": 17
                            },
                            {
                                "weight": 1.2
                            }
                        ]
                    },
                    {
                        "featureType": "administrative.country",
                        "elementType": "labels.text.fill",
                        "stylers": [
                            {
                                "color": "#838383"
                            }
                        ]
                    },
                    {
                        "featureType": "administrative.locality",
                        "elementType": "labels.text.fill",
                        "stylers": [
                            {
                                "color": "#c4c4c4"
                            }
                        ]
                    },
                    {
                        "featureType": "administrative.neighborhood",
                        "elementType": "labels.text.fill",
                        "stylers": [
                            {
                                "color": "#aaaaaa"
                            }
                        ]
                    },
                    {
                        "featureType": "landscape",
                        "elementType": "geometry",
                        "stylers": [
                            {
                                "color": "#000000"
                            },
                            {
                                "lightness": 20
                            }
                        ]
                    },
                    {
                        "featureType": "poi",
                        "elementType": "geometry",
                        "stylers": [
                            {
                                "color": "#000000"
                            },
                            {
                                "lightness": 21
                            },
                            {
                                "visibility": "on"
                            }
                        ]
                    },
                    {
                        "featureType": "poi.business",
                        "elementType": "geometry",
                        "stylers": [
                            {
                                "visibility": "on"
                            }
                        ]
                    },
                    {
                        "featureType": "road.highway",
                        "elementType": "geometry.fill",
                        "stylers": [
                            {
                                "color": "#6e6e6e"
                            },
                            {
                                "lightness": "0"
                            }
                        ]
                    },
                    {
                        "featureType": "road.highway",
                        "elementType": "geometry.stroke",
                        "stylers": [
                            {
                                "visibility": "off"
                            }
                        ]
                    },
                    {
                        "featureType": "road.highway",
                        "elementType": "labels.text.fill",
                        "stylers": [
                            {
                                "color": "#ffffff"
                            }
                        ]
                    },
                    {
                        "featureType": "road.arterial",
                        "elementType": "geometry",
                        "stylers": [
                            {
                                "color": "#000000"
                            },
                            {
                                "lightness": 18
                            }
                        ]
                    },
                    {
                        "featureType": "road.arterial",
                        "elementType": "geometry.fill",
                        "stylers": [
                            {
                                "color": "#575757"
                            }
                        ]
                    },
                    {
                        "featureType": "road.arterial",
                        "elementType": "labels.text.fill",
                        "stylers": [
                            {
                                "color": "#ffffff"
                            }
                        ]
                    },
                    {
                        "featureType": "road.arterial",
                        "elementType": "labels.text.stroke",
                        "stylers": [
                            {
                                "color": "#2c2c2c"
                            }
                        ]
                    },
                    {
                        "featureType": "road.local",
                        "elementType": "geometry",
                        "stylers": [
                            {
                                "color": "#000000"
                            },
                            {
                                "lightness": 16
                            }
                        ]
                    },
                    {
                        "featureType": "road.local",
                        "elementType": "labels.text.fill",
                        "stylers": [
                            {
                                "color": "#999999"
                            }
                        ]
                    },
                    {
                        "featureType": "transit",
                        "elementType": "geometry",
                        "stylers": [
                            {
                                "color": "#000000"
                            },
                            {
                                "lightness": 19
                            }
                        ]
                    },
                    {
                        "featureType": "water",
                        "elementType": "geometry",
                        "stylers": [
                            {
                                "color": "#000000"
                            },
                            {
                                "lightness": 17
                            }
                        ]
                    }
                ]
            });
        }
    </script>

    <script src="https://maps.googleapis.com/maps/api/js?key=&callback=initMap"
            async defer></script>
@endpush
