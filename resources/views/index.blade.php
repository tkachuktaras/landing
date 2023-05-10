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
        <div>

        </div>
    </section>
@endsection

@push('css')

@endpush

@push('js')

@endpush
