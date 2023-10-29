<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $data->name }} : {{ $data->phone }}</title>
    {{-- favicon --}}
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('/assets/images/favicon/apple-touch-icon.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{asset('/assets/images/favicon/favicon-32x32.png')}}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('/assets/images/favicon/favicon-16x16.png')}}">
    <link rel="manifest" href="{{ asset('/assets/images/favicon/site.webmanifest')}}">
    <link rel="shortcut icon" href="{{asset('/assets/images/favicon/favicon.ico')}}">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="msapplication-config" content="{{asset('/assets/images/favicon/browserconfig.xml')}}">
    <meta name="theme-color" content="#ffffff">
    {{-- end favicon --}}
    @vite('resources/css/app.sass')
    @vite('resources/js/app.js')
</head>
<body>
<div id="app">
    <nav>
        <div class="container">
            <div class="row align-items-center g-1">
                <div class="col-6 col-md-6">
                    <div class="logo">
                        <img src="{{ $data->logo }}" alt="{{ $data->name }}">
                        <div class="d-block">
                            <h5>{{ $data->name }}</h5>
                            <span>{{ $data->description }}</span>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-md-6">
                    <div class="cta-navbar">
                        <a 
                            href="{{ $data->waLink }}"
                            target="_blank"
                        >
                            <i class="fa fa-whatsapp fa-2x"></i>
                            {{ __('Написать в Whatapp')}}
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </nav>
    <div class="hero-banner" style="background: url('{{ $data->heroBanner }}')">
        <top-scroll></top-scroll>
        <div class="overlay"></div>
        <div class="container position-relative">
            <div class="row">
                <div class="col-12 col-md-6">
                    <div class="bg-white px-2 py-1 mb-2" style="width:fit-content">
                        <h5 class="blink mb-0">принимаем битые и неисправные авто!</h5>
                    </div>

                    <h1 class="mb-2">Срочный выкуп автомобилей в Томске</h1>
                    <span class="mb-4 d-block">Оставьте заявку сейчас, чтобы узнать ориентировочную стоимость - это бесплатно!</span>
                    <div class="d-flex">
                        <a href="tel:{{ $data->phone }}" class="btn btn-primary"> <i class="fa fa-phone"></i> Позвонить</a>
                        <a href="{{ $data->waLink }}" class="btn btn-success mx-2"> <i class="fa fa-whatsapp"></i> Whatapp</a>
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    
                </div>
            </div>
        </div>
    </div>
    <section>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="title">
                        <h4>Преимущества работы с нами</h4>
                        <p>Список преимуществ сотрудничества с нами, которые обычное отмечают наши клиенты.</p>
                        <hr>
                    </div>
                </div>
            </div>
            <div class="why-we">
                <div class="row g-2">
                    <div class="col-6 col-md-4">
                        <div class="item" style="background: url('{{ asset('assets/images/1.jpg') }}')">
                            <div class="overlay"></div>
                            <div class="content">
                                <h5>Деньги уже сегодня</h5>
                                <p>Вы получите деньги за свой автомобиль всего за один час</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-md-4">
                        <div class="item" style="background: url('{{ asset('assets/images/2.jpg') }}')">
                            <div class="overlay"></div>
                            <div class="content">
                                <h5>Быстрая оценка</h5>
                                <p>Быстрая и бесплатная оценка автомобиля</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-md-4">
                        <div class="item" style="background: url('{{ asset('assets/images/3.jpg') }}')">
                            <div class="overlay"></div>
                            <div class="content">
                                <h5>Отличная цена</h5>
                                <p>до 95% от рыночной стоимости</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-md-4">
                        <div class="item" style="background: url('{{ asset('assets/images/4.jpg') }}')">
                            <div class="overlay"></div>
                            <div class="content">
                                <h5>Безопасность сделки</h5>
                                <p>гарантируем безопасность сделки</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="title">
                        <h4>Оставьте заявку на оценку сейчас</h4>
                        <p>Пройдите небольшой опрос, чтобы мы могли точнее сориентировать вас по стоимости выкупа автомобиля</p>
                        <hr>
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <rating-request :data='@json($data)'></rating-request>
                </div>
            </div>
        </div>
    </section>
    <section class="pb-0">
        <div class="cta-recall bg-danger text-white py-4">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="p-3 border rounded">
                            <h4>Позвоните и получите бесплатную консультацию и оценку!</h4>
                            <p>Наши менеджеры ответят на любые ваши вопросы по выкупу автомобиля, а также скажут ориентировочную стоимость</p>
                            <div class="text-center">
                                <a href="tel{{ $data->phone }}" class="btn btn-outline-light">{{ $data->phone }}</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <footer>
        <div class="container">
            <div class="row g-1 align-items-center">
                <div class="col-6">
                    <div class="footer-logo">
                        <img src="{{ $data->logo }}" alt="{{ $data->name }}">
                        <div class="d-block">
                            <h5>{{ $data->name }}</h5>
                            <span> {{ $data->description }} </span>
                        </div>
                    </div>
                </div>
                <div class="col-6">
                    <div class="footer-cta">
                        <button>
                            <i class="fa fa-phone"></i>
                            Позвонить
                        </button>
                    </div>
                </div>
                <div class="col-12">
                    <div class="footer-copyright">
                        © {{ now()->year }} Все права защищены
                    </div>
                </div>
            </div>
        </div>
    </footer>
</div>
</body>
</html>