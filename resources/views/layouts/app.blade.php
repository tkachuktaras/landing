<!DOCTYPE html>
<html lang="uk">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title')</title>

    @stack('css')

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{ mix('/css/app.css') }}">
</head>
<body style="overflow: hidden auto;">
    <header class="header">
        <div class="container d-flex justify-content-between align-items-center">
            <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                <g clip-path="url(#clip0_0_11)">
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M15 30C6.71531 30 0 23.2847 0 15C0 6.71531 6.71531 0 15 0C23.2847 0 30 6.71531 30 15C30 23.2847 23.2847 30 15 30ZM22.9688 18.0628V10.3753L15 5.625L7.03125 10.3753V19.7081L15 24.375L21.5766 20.5238L14.5097 16.3331L15.7894 15.6253V8.21906L21.1706 11.4272V14.8331L19.4953 13.8441L19.0453 15.7088L22.9688 18.0628ZM8.82938 11.4281L14.0025 8.34375V14.5013L8.82938 17.5012V11.4281ZM12.6703 17.3756L17.9766 20.5191L15 22.2609L9.72844 19.1737L12.6703 17.3747V17.3756Z" fill="white"/>
                </g>
                <defs>
                    <clipPath id="clip0_0_11">
                        <rect width="30" height="30" fill="white"/>
                    </clipPath>
                </defs>
            </svg>

            <nav class="header-nav">
                <ul class="header-nav-menu d-flex">
                    <li><a href="{{ route('index') }}" alt="">Головна</a></li>
                    <li><a href="" alt="">Про нас</a></li>
                    <li><a href="" alt="">Сервіси</a></li>
                    <li><a href="" alt="">Відгуки</a></li>
                    <li><a href="{{ route('contacts') }}" alt="">Контакти</a></li>
                </ul>
            </nav>

            <div class="header-phone d-flex align-items-center">
                <svg width="21" height="22" viewBox="0 0 21 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M18.3125 21.1562H18.1797C2.82812 20.2734 0.648432 7.32031 0.343745 3.36719C0.319194 3.05983 0.355533 2.75064 0.450679 2.45735C0.545824 2.16406 0.697906 1.89242 0.898212 1.65801C1.09852 1.42359 1.34311 1.23101 1.61797 1.09128C1.89284 0.951555 2.19257 0.867439 2.5 0.843751H6.80468C7.11762 0.843448 7.42344 0.937118 7.68252 1.11263C7.94161 1.28814 8.14202 1.5374 8.25781 1.82813L9.44531 4.75C9.55964 5.03402 9.58802 5.34537 9.52691 5.64538C9.46579 5.94539 9.31789 6.22084 9.10156 6.4375L7.4375 8.11719C7.69743 9.59434 8.40483 10.956 9.46398 12.0179C10.5231 13.0799 11.8829 13.7909 13.3594 14.0547L15.0547 12.375C15.2746 12.1611 15.5526 12.0166 15.8541 11.9596C16.1556 11.9027 16.4672 11.9357 16.75 12.0547L19.6953 13.2344C19.9817 13.3538 20.226 13.5558 20.3971 13.8146C20.5682 14.0734 20.6584 14.3773 20.6562 14.6875V18.8125C20.6562 19.4341 20.4093 20.0302 19.9698 20.4698C19.5302 20.9093 18.9341 21.1562 18.3125 21.1562ZM2.68749 2.40625C2.48029 2.40625 2.28158 2.48856 2.13507 2.63507C1.98856 2.78159 1.90624 2.9803 1.90624 3.1875V3.25C2.26562 7.875 4.57031 18.8125 18.2656 19.5938C18.3683 19.6001 18.4711 19.5861 18.5684 19.5526C18.6656 19.5191 18.7552 19.4667 18.8322 19.3985C18.9091 19.3303 18.9718 19.2475 19.0167 19.155C19.0616 19.0625 19.0878 18.962 19.0937 18.8594V14.6875L16.1484 13.5078L13.9062 15.7344L13.5312 15.6875C6.73437 14.8359 5.81249 8.03906 5.81249 7.96875L5.76562 7.59375L7.98437 5.35156L6.8125 2.40625H2.68749Z" fill="white"/>
                </svg>
                <a href="tel:+380968745881" alt="">+380968745881</a>
            </div>
        </div>
    </header>

    @yield('content')

    <footer class="footer-area">
        <div class="container footer-container d-flex">
            <div class="footer-info d-flex justify-content-between">
                <svg width="50" height="50" viewBox="0 0 50 50" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <g clip-path="url(#clip0_0_119)">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M25 50C11.1922 50 0 38.8078 0 25C0 11.1922 11.1922 0 25 0C38.8078 0 50 11.1922 50 25C50 38.8078 38.8078 50 25 50ZM38.2812 30.1047V17.2922L25 9.375L11.7188 17.2922V32.8469L25 40.625L35.9609 34.2063L24.1828 27.2219L26.3156 26.0422V13.6984L35.2844 19.0453V24.7219L32.4922 23.0734L31.7422 26.1813L38.2812 30.1047V30.1047ZM14.7156 19.0469L23.3375 13.9062V24.1688L14.7156 29.1687V19.0469ZM21.1172 28.9594L29.9609 34.1984L25 37.1016L16.2141 31.9562L21.1172 28.9578V28.9594Z" fill="white"/>
                    </g>
                    <defs>
                        <clipPath id="clip0_0_119">
                            <rect width="50" height="50" fill="white"/>
                        </clipPath>
                    </defs>
                </svg>

                <div class="form-group" style="margin-bottom: 0px">
                    <input class="footer-info-input" placeholder="Пошта">
                    <div class="line"></div>
                </div>
            </div>

            <div class="footer-links d-flex justify-content-between">
                <nav class="footer-links-nav">
                    <ul class="footer-links-nav-menu d-flex">
                        <li><a href="" alt="">Головна</a></li>
                        <li><a href="" alt="">Про нас</a></li>
                        <li><a href="" alt="">Сервіси</a></li>
                        <li><a href="" alt="">Відгуки</a></li>
                        <li><a href="" alt="">Зв’язатись з нами</a></li>
                    </ul>
                </nav>
                <nav class="footer-links-nav">
                    <ul class="footer-links-nav-menu d-flex">
                        <li><a href="" alt="">Головна</a></li>
                        <li><a href="" alt="">Про нас</a></li>
                        <li><a href="" alt="">Сервіси</a></li>
                        <li><a href="" alt="">Відгуки</a></li>
                        <li><a href="" alt="">Зв’язатись з нами</a></li>
                    </ul>
                </nav>
                <div>
                    <div class="footer-links-phone d-flex align-items-center">
                        <svg width="21" height="22" viewBox="0 0 21 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M18.3125 21.1562H18.1797C2.82812 20.2734 0.648432 7.32031 0.343745 3.36719C0.319194 3.05983 0.355533 2.75064 0.450679 2.45735C0.545824 2.16406 0.697906 1.89242 0.898212 1.65801C1.09852 1.42359 1.34311 1.23101 1.61797 1.09128C1.89284 0.951555 2.19257 0.867439 2.5 0.843751H6.80468C7.11762 0.843448 7.42344 0.937118 7.68252 1.11263C7.94161 1.28814 8.14202 1.5374 8.25781 1.82813L9.44531 4.75C9.55964 5.03402 9.58802 5.34537 9.52691 5.64538C9.46579 5.94539 9.31789 6.22084 9.10156 6.4375L7.4375 8.11719C7.69743 9.59434 8.40483 10.956 9.46398 12.0179C10.5231 13.0799 11.8829 13.7909 13.3594 14.0547L15.0547 12.375C15.2746 12.1611 15.5526 12.0166 15.8541 11.9596C16.1556 11.9027 16.4672 11.9357 16.75 12.0547L19.6953 13.2344C19.9817 13.3538 20.226 13.5558 20.3971 13.8146C20.5682 14.0734 20.6584 14.3773 20.6562 14.6875V18.8125C20.6562 19.4341 20.4093 20.0302 19.9698 20.4698C19.5302 20.9093 18.9341 21.1562 18.3125 21.1562ZM2.68749 2.40625C2.48029 2.40625 2.28158 2.48856 2.13507 2.63507C1.98856 2.78159 1.90624 2.9803 1.90624 3.1875V3.25C2.26562 7.875 4.57031 18.8125 18.2656 19.5938C18.3683 19.6001 18.4711 19.5861 18.5684 19.5526C18.6656 19.5191 18.7552 19.4667 18.8322 19.3985C18.9091 19.3303 18.9718 19.2475 19.0167 19.155C19.0616 19.0625 19.0878 18.962 19.0937 18.8594V14.6875L16.1484 13.5078L13.9062 15.7344L13.5312 15.6875C6.73437 14.8359 5.81249 8.03906 5.81249 7.96875L5.76562 7.59375L7.98437 5.35156L6.8125 2.40625H2.68749Z" fill="white"/>
                        </svg>
                        <a href="tel:+380968745881" alt="">+380968745881</a>
                    </div>
                    <div class="footer-links-phone d-flex align-items-center">
                        <svg width="21" height="22" viewBox="0 0 21 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M18.3125 21.1562H18.1797C2.82812 20.2734 0.648432 7.32031 0.343745 3.36719C0.319194 3.05983 0.355533 2.75064 0.450679 2.45735C0.545824 2.16406 0.697906 1.89242 0.898212 1.65801C1.09852 1.42359 1.34311 1.23101 1.61797 1.09128C1.89284 0.951555 2.19257 0.867439 2.5 0.843751H6.80468C7.11762 0.843448 7.42344 0.937118 7.68252 1.11263C7.94161 1.28814 8.14202 1.5374 8.25781 1.82813L9.44531 4.75C9.55964 5.03402 9.58802 5.34537 9.52691 5.64538C9.46579 5.94539 9.31789 6.22084 9.10156 6.4375L7.4375 8.11719C7.69743 9.59434 8.40483 10.956 9.46398 12.0179C10.5231 13.0799 11.8829 13.7909 13.3594 14.0547L15.0547 12.375C15.2746 12.1611 15.5526 12.0166 15.8541 11.9596C16.1556 11.9027 16.4672 11.9357 16.75 12.0547L19.6953 13.2344C19.9817 13.3538 20.226 13.5558 20.3971 13.8146C20.5682 14.0734 20.6584 14.3773 20.6562 14.6875V18.8125C20.6562 19.4341 20.4093 20.0302 19.9698 20.4698C19.5302 20.9093 18.9341 21.1562 18.3125 21.1562ZM2.68749 2.40625C2.48029 2.40625 2.28158 2.48856 2.13507 2.63507C1.98856 2.78159 1.90624 2.9803 1.90624 3.1875V3.25C2.26562 7.875 4.57031 18.8125 18.2656 19.5938C18.3683 19.6001 18.4711 19.5861 18.5684 19.5526C18.6656 19.5191 18.7552 19.4667 18.8322 19.3985C18.9091 19.3303 18.9718 19.2475 19.0167 19.155C19.0616 19.0625 19.0878 18.962 19.0937 18.8594V14.6875L16.1484 13.5078L13.9062 15.7344L13.5312 15.6875C6.73437 14.8359 5.81249 8.03906 5.81249 7.96875L5.76562 7.59375L7.98437 5.35156L6.8125 2.40625H2.68749Z" fill="white"/>
                        </svg>
                        <a href="tel:+380968745881" alt="">+380968745881</a>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    @stack('js')
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
