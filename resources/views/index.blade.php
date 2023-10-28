<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
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
                        <button>
                            <i class="fab fa-whatsapp fa-2x"></i>
                            {{ __('Написать в Whatapp')}}
                        </button>
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
                    left section
                </div>
                <div class="col-12 col-md-6">
                    right section
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
                        <h4>Какие авто мы выкупаем</h4>
                        <p>Перечень автомобилей, которые подходят под наши условия выкупа.</p>
                        <hr>
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