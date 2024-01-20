<!DOCTYPE HTML>
<html lang="ru">
<head>
    <title>@yield('title')Тёплый дом</title>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no"/>
    @section('styles')
        <link rel="stylesheet" href="/assets/css/main.css">
    @show
</head>
<body class="homepage is-preload">
<div id="page-wrapper">
    <!-- Header -->
    <div id="header-wrapper">
        <div class="container">
            <!-- Header -->
            <header id="header">
                <div class="inner">
                    <!-- Logo -->
                    <p class="tel fas fa-phone-volume style="><a href="tel:+79178443070" id="logo"> 89178443070</a></p>
                    <nav id="nav">
                        <ul>
                            <li class=""><a href="index">Главная</a></li>
                            <li>
                                <a href="#">Материалы</a>
                                <ul>
                                    <li><a href="kley">Клеевые смеси</a></li>
                                    <li><a href="grunt">Грунтовки и краски</a></li>
                                    <li>
                                        <a href="#">Декоративные штукатурки</a>
                                        <ul>
                                            <li><a href="shuba">Декоративная штукатурка "Шуба"</a></li>
                                            <li><a href="karoed">Декоративная штукатурка "Кароед"</a></li>
                                            <li><a href="mramor">Мраморная штукатурка</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="uteplitel">Утеплитель</a></li>
                                </ul>
                            </li>
                            <li><a href="rabota">Наши рабоы</a></li>
                            <li><a href="tehnologii">Технологии</a></li>
                            <li><a href="onas">О Нас</a></li>
                        </ul>
                    </nav>

                </div>
            </header>
            <!-- Banner -->
            <div id="banner">
                <h2>Предоставляем услуги по
                    <br/>
                    Утеплению и отделке фасада домов</h2>
                <a href="tel:+79178443070" class="button large icon solid fas fa-phone-alt">Позвонить</a>
            </div>
        </div>
    </div>
    @yield('content')

    <!-- Footer Wrapper -->
    <div id="footer-wrapper">
        <footer id="footer" class="container">
            <div class="row">
                <div class="col-3 col-6-medium col-12-small">

                    <!-- Links -->
                    <section>
                        <h2>Утепление</h2>
                        <ul class="divided">
                            <li><a href="ctoznacit">Что значит "Мокрый фасад"?</a></li>
                            <li><a href="kakayafraksiya">Какая фракция оптимальная?</a></li>
                            <li><a href="pokraskadekorativnoy">Покраска декоративной штукатурки</a></li>
                            <li><a href="mramor">Мраморная штукатурка для цоколя</a></li>
                        </ul>
                    </section>

                    <!-- Links -->
                    <section>
                        <h2>отделка газобетона</h2>
                        <ul class="divided">
                            <li><a href="shtukaturkaposteklosetke">Штукатурка по стеклосетке</a></li>
                            <li><a href="paropronicaemost">Паропроницаемость</a></li>
                            <li><a href="domaotdelkoypoqazobetonu">Дома отелкой по газобетону</a></li>
                            <li><a href="otdelkaqazobetonabezutepleniya">Отделка газобетона без утепления</a></li>
                        </ul>
                    </section>

                </div>
                <div class="col-3 col-6-medium col-12-small">

                    <!-- Links -->
                    <section>
                        <h2>мокрый фасад </h2>
                        <ul class="divided">
                            <li><a href="kley">Клеевые смеси</a></li>
                            <li><a href="grunt">Грунтовки и краски </a></li>
                            <li><a href="shuba">Декоративная штукатурка "Шуба"</a></li>
                            <li><a href="onas">О Нас</a></li>
                            <li><a href="mramor">Мраморная штукатурка</a></li>
                            <li><a href="uteplitel">Утеплитель</a></li>
                            <li><a href="karoed">Декоративная штукатурка "Кароед"</a></li>
                            <li><a href="rabota">Наши работы</a></li>
                            <li><a href="tehnologii">Технологии</a></li>
                            <li><a href="dubel">Дюбель термоголовкой</a></li>
                            <li><a href="onas">Почему мы?</a></li>
                        </ul>
                    </section>

                </div>
                <div class="col-6 col-12-medium imp-medium">

                    <!-- About -->
                    <section>
                        <h2><strong>БЕСПЛАТНЫЙ РАСЧЕТ</strong> СТОИМОСТИ ОТДЕЛКИ</h2>
                        <p>Если у Вас остались к нам <strong>вопросы</strong>, хотели бы запсаться на замеры
                            и получать консультацию, тогда <a>звоните нам</a>
                            , а мы в свою очередь, ответим на все Ваши вопросы и посчитаем общую стоимость отделки
                            фасада Вашего дома.</p>
                        <a href="tel:+79178443070" class="button alt icon solid fa-arrow-circle-right">Звонить</a>
                    </section>
                    <!-- Contact -->
                    <section>
                        <h2>контакты</h2>
                        <div>
                            <div class="row">
                                <div class="col-6 col-12-small">
                                    <dl class="contact">
                                        <dt>Telegram</dt>
                                        <dd><a href="#">@untitled-corp</a></dd>
                                        <dt>WhatsApp</dt>
                                        <dd><a href="#">facebook.com/untitled</a></dd>
                                        <dt>WWW</dt>
                                        <dd><a href="#">teplo34.ru</a></dd>
                                        <dt>Email</dt>
                                        <dd><a href="#">teplo34@yandex.ru</a></dd>
                                    </dl>
                                </div>
                                <div class="col-6 col-12-small">
                                    <dl class="contact">
                                        <dt>Адрес</dt>
                                        <dd>
                                            Российская Федерация<br />
                                            Волгоградская область, г. Волгоград<br />
                                            400011
                                        </dd>
                                        <dt>Phone</dt>
                                        <dd>+79178443070</dd>
                                    </dl>
                                </div>
                            </div>
                        </div>
                    </section>

                </div>
                <div class="col-12">
                    <div id="copyright">
                        <ul class="menu">
                            <li>&copy; Волгоград</li><li>2008 - 2023</li>
                        </ul>
                    </div>
                </div>
            </div>
        </footer>
    </div>

</div>
@section('scripts')
    <!-- Scripts -->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/jquery.dropotron.min.js"></script>
    <script src="assets/js/browser.min.js"></script>
    <script src="assets/js/breakpoints.min.js"></script>
    <script src="assets/js/util.js"></script>
    <script src="assets/js/main.js"></script>
@show
</body>
</html>


