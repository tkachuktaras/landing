@extends('layouts.app')

@section('title')
    Контакти
@endsection

@section('content')

    <section class="container address-area d-flex justify-content-center align-items-center">
        <h1 class="address-header">
            Контакти
        </h1>
        <div class="address-cards">
            <div class="address-card d-flex reveal-card">
                <img class="address-card-image" src="{{ asset('images/address1.png') }}">
                <div class="address-card-content d-flex">
                    <h3 class="address-card-content-header">
                        Київ
                    </h3>
                    <p class="address-card-content-text">
                        Вул. Бережанська, 15<br> Оболонський район
                    </p>
                </div>
            </div>
            <div class="address-card d-flex reveal-card">
                <img class="address-card-image" src="{{ asset('images/address2.png') }}">
                <div class="address-card-content">
                    <h3 class="address-card-content-header">
                        Київ
                    </h3>
                    <p class="address-card-content-text">
                        Вул. Нагорна, 56<br> Шевченківський район
                    </p>
                </div>
            </div>
            <div class="address-card d-flex reveal-card">
                <img class="address-card-image" src="{{ asset('images/address3.png') }}">
                <div class="address-card-content">
                    <h3 class="address-card-content-header">
                        Київ
                    </h3>
                    <p class="address-card-content-text">
                        Вул. Лобановського, 67<br> Голосіївський район
                    </p>
                </div>
            </div>
            <div class="address-card d-flex reveal-card">
                <img class="address-card-image" src="{{ asset('images/address4.png') }}">
                <div class="address-card-content">
                    <h3 class="address-card-content-header">
                        Київ
                    </h3>
                    <p class="address-card-content-text">
                        Вул. Закревського, 76 <br>Деснянський район
                    </p>
                </div>
            </div>

            <div class="address-cards-svgs">
                <svg width="107" height="107" viewBox="0 0 107 107" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <rect x="105.359" y="53.033" width="74" height="74" transform="rotate(135 105.359 53.033)" stroke="#069DC2"/>
                    <rect x="88.7767" y="53.033" width="50" height="50" transform="rotate(135 88.7767 53.033)" fill="#069DC2"/>
                    <rect class="address-card-svgs-rect" x="88.7767" y="53.033" width="50" height="50" transform="rotate(135 88.7767 53.033)" fill="#464646" fill-opacity="1"/>
                </svg>

                <svg width="2" height="50" viewBox="0 0 2 50" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M1 0V50" stroke="#069DC2"/>
                </svg>

                <svg width="107" height="107" viewBox="0 0 107 107" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <rect x="105.359" y="53.033" width="74" height="74" transform="rotate(135 105.359 53.033)" stroke="#069DC2"/>
                    <rect x="88.7767" y="53.033" width="50" height="50" transform="rotate(135 88.7767 53.033)" fill="#069DC2"/>
                    <rect class="address-card-svgs-rect" x="88.7767" y="53.033" width="50" height="50" transform="rotate(135 88.7767 53.033)" fill="#464646" fill-opacity="1"/>
                </svg>

                <svg width="2" height="50" viewBox="0 0 2 50" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M1 0V50" stroke="#069DC2"/>
                </svg>

                <svg width="107" height="107" viewBox="0 0 107 107" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <rect x="105.359" y="53.033" width="74" height="74" transform="rotate(135 105.359 53.033)" stroke="#069DC2"/>
                    <rect x="88.7767" y="53.033" width="50" height="50" transform="rotate(135 88.7767 53.033)" fill="#069DC2"/>
                    <rect class="address-card-svgs-rect" x="88.7767" y="53.033" width="50" height="50" transform="rotate(135 88.7767 53.033)" fill="#464646" fill-opacity="1"/>
                </svg>

                <svg width="2" height="50" viewBox="0 0 2 50" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M1 0V50" stroke="#069DC2"/>
                </svg>

                <svg width="107" height="107" viewBox="0 0 107 107" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <rect x="105.359" y="53.033" width="74" height="74" transform="rotate(135 105.359 53.033)" stroke="#069DC2"/>
                    <rect x="88.7767" y="53.033" width="50" height="50" transform="rotate(135 88.7767 53.033)" fill="#069DC2"/>
                    <rect class="address-card-svgs-rect" x="88.7767" y="53.033" width="50" height="50" transform="rotate(135 88.7767 53.033)" fill="#464646" fill-opacity="1"/>
                </svg>
            </div>
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

@endsection

@push('css')
    <link rel="stylesheet" href="{{ mix('/css/contacts.css') }}">
@endpush

@push('js')
    <script src="{{ asset('js/contacts.js') }}"></script>

    <script>
        function initMap() {
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
