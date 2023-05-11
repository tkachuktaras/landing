@extends('layouts.app')

@section('title')
    Головна
@endsection

@section('content')
    <section class="banner-area">
        <img src="{{ asset('images/car1.png') }}">

        <div class="banner-text d-flex justify-content-center align-items-center">
            <h1>Ремонт автомобілів будь-якої <br>складності</h1>

            <h5>Ми пропонуємо сучасне високоякісне обслуговування легкових, легких вантажних <br>
                автомобілів, і мікроавтобусів в умовах і на обладнанні СТО</h5>

            <div class="banner-buttons">
                <a href="">Зв'язатись з нами</a>
                <a href="">Наші сервіси</a>
            </div>
        </div>
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

    <section class="services-area">
        <div class="container services-header d-flex justify-content-between">
            <h1 class="services-header-text">
                Наші сервіси
            </h1>
            <a class="services-header-button d-flex align-items-center justify-content-center" href="">Зв'язатись з нами</a>
        </div>
        <div class="container services-content">
            <p class="services-content-text">
                Авторизоване СТО надає високоякісні послуги з ремонту та діагностиці, тюнінгу та комплексного обслуговування автомобілів Opel, KIA, Peugeot, Jeep, Citroen, Chery, Chevrolet та інших марок авто. У розпорядженні Автоцентру найсучасніше обладнання, новітня техніка з повним набором необхідних інструментів для гарантійного та післягарантійного обслуговування автомобілів.
            </p>
            <div class="services-content-buttons d-flex justify-content-end align-items-center">
                <a href="">
                    <svg width="25" height="25" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M23.4375 12.5C23.4375 12.2928 23.3552 12.0941 23.2087 11.9476C23.0622 11.8011 22.8634 11.7188 22.6562 11.7188H4.22968L9.14687 6.80313C9.2195 6.73049 9.27712 6.64426 9.31644 6.54935C9.35575 6.45445 9.37598 6.35273 9.37598 6.25C9.37598 6.14728 9.35575 6.04556 9.31644 5.95065C9.27712 5.85575 9.2195 5.76951 9.14687 5.69688C9.07423 5.62424 8.988 5.56662 8.89309 5.52731C8.79819 5.488 8.69647 5.46777 8.59374 5.46777C8.49102 5.46777 8.3893 5.488 8.29439 5.52731C8.19949 5.56662 8.11325 5.62424 8.04062 5.69688L1.79062 11.9469C1.71786 12.0194 1.66014 12.1057 1.62075 12.2006C1.58137 12.2955 1.5611 12.3972 1.5611 12.5C1.5611 12.6028 1.58137 12.7045 1.62075 12.7994C1.66014 12.8943 1.71786 12.9806 1.79062 13.0531L8.04062 19.3031C8.11325 19.3758 8.19949 19.4334 8.29439 19.4727C8.3893 19.512 8.49102 19.5322 8.59374 19.5322C8.69647 19.5322 8.79819 19.512 8.89309 19.4727C8.988 19.4334 9.07423 19.3758 9.14687 19.3031C9.2195 19.2305 9.27712 19.1443 9.31644 19.0494C9.35575 18.9544 9.37598 18.8527 9.37598 18.75C9.37598 18.6473 9.35575 18.5456 9.31644 18.4507C9.27712 18.3557 9.2195 18.2695 9.14687 18.1969L4.22968 13.2813H22.6562C22.8634 13.2813 23.0622 13.1989 23.2087 13.0524C23.3552 12.9059 23.4375 12.7072 23.4375 12.5Z" fill="white"/>
                    </svg>
                </a>
                <a href="">
                    <svg width="25" height="25" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M1.56251 12.5C1.56251 12.2928 1.64482 12.0941 1.79133 11.9476C1.93784 11.8011 2.13656 11.7188 2.34376 11.7188H20.7703L15.8531 6.80313C15.7805 6.73049 15.7229 6.64426 15.6836 6.54935C15.6443 6.45445 15.624 6.35273 15.624 6.25C15.624 6.14728 15.6443 6.04556 15.6836 5.95065C15.7229 5.85575 15.7805 5.76951 15.8531 5.69688C15.9258 5.62424 16.012 5.56662 16.1069 5.52731C16.2018 5.488 16.3035 5.46777 16.4063 5.46777C16.509 5.46777 16.6107 5.488 16.7056 5.52731C16.8005 5.56662 16.8867 5.62424 16.9594 5.69688L23.2094 11.9469C23.2821 12.0194 23.3399 12.1057 23.3792 12.2006C23.4186 12.2955 23.4389 12.3972 23.4389 12.5C23.4389 12.6028 23.4186 12.7045 23.3792 12.7994C23.3399 12.8943 23.2821 12.9806 23.2094 13.0531L16.9594 19.3031C16.8867 19.3758 16.8005 19.4334 16.7056 19.4727C16.6107 19.512 16.509 19.5322 16.4063 19.5322C16.3035 19.5322 16.2018 19.512 16.1069 19.4727C16.012 19.4334 15.9258 19.3758 15.8531 19.3031C15.7805 19.2305 15.7229 19.1443 15.6836 19.0494C15.6443 18.9544 15.624 18.8527 15.624 18.75C15.624 18.6473 15.6443 18.5456 15.6836 18.4507C15.7229 18.3557 15.7805 18.2695 15.8531 18.1969L20.7703 13.2813H2.34376C2.13656 13.2813 1.93784 13.1989 1.79133 13.0524C1.64482 12.9059 1.56251 12.7072 1.56251 12.5Z" fill="white"/>
                    </svg>
                </a>
            </div>
        </div>
        <div class="services-cards d-flex">
            <div class="services-card">
                <img class="services-card-image" src="{{ asset('images/service1.png') }}">
                <h3 class="services-card-header">
                    Діагностика
                </h3>
                <p class="services-card-text">
                    Автоцентр пропонує своїм клієнтам вигідні пропозиції, від яких важко відмовитися.
                </p>
            </div>
            <div class="services-card">
                <img class="services-card-image" src="{{ asset('images/service2.png') }}">
                <h3 class="services-card-header">
                    Ремонт Авто
                </h3>
                <p class="services-card-text">
                    В автосервісі усуваються дрібні ламання, що не становлять загрози для пасажирів.
                </p>
            </div>
            <div class="services-card">
                <img class="services-card-image" src="{{ asset('images/service3.png') }}">
                <h3 class="services-card-header">
                    Кузовні роботи
                </h3>
                <p class="services-card-text">
                    Кузовні роботи на СТО бувають локальними й складними.
                </p>
            </div>
            <div class="services-card">
                <img class="services-card-image" src="{{ asset('images/service4.png') }}">
                <h3 class="services-card-header">
                    Шиномонтаж
                </h3>
                <p class="services-card-text">
                    Шиномонтаж — це популярна послуга, яку періодично потребує кожен автомобіль.
                </p>
            </div>
            <div class="services-card">
                <img class="services-card-image" src="{{ asset('images/service5.png') }}">
                <h3 class="services-card-header">
                    Послуги автоелектрики
                </h3>
                <p class="services-card-text">
                    Автоелектроніка займає важливе місце в конструкції будь-якого автомобіля.
                </p>
            </div>
        </div>
    </section>

    <section class="contact-area d-flex align-items-end">
        <div id="map"></div>
        <div class="container d-flex justify-content-end">
            <div class="contact-form">
                <h3 class="contact-form-header">Зв’язатись з нами</h3>
                <input class="contact-form-input" placeholder="Ім'я">
                <input class="contact-form-input" placeholder="Пошта">
                <div class="contact-form-container">
                    <input class="contact-form-input" placeholder="+380">
                    <input class="contact-form-input" placeholder="00000000">
                </div>
                <input class="contact-form-input" placeholder="Ваша проблема">
                <button class="contact-form-button" type="submit">Зателефонуйте мені</button>
            </div>
        </div>
    </section>


@endsection

@push('css')
    <link rel="stylesheet" href="{{ mix('/css/index.css') }}">
@endpush

@push('js')
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
