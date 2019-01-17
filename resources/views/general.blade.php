<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Veditex</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.2/css/all.css"
          integrity="sha384-/rXc/GQVaYpyDdyxK+ecHPVYJSN9bmVFBvjA/9eOB+pb3F2w2N6fc5qB9Ew5yIns" crossorigin="anonymous">
    <link rel="stylesheet" href={{asset("css/bootstrap.min.css")}}>
    <link rel="stylesheet" href={{asset("css/jquery.fancybox.min.css")}}>
    <link rel="stylesheet" href={{asset("owl-carusel/dist/assets/owl.theme.default.min.css")}}>
    <link rel="stylesheet" href={{asset("owl-carusel/dist/assets/owl.carousel.min.css")}}>
    <link rel="stylesheet" href={{asset("style.css")}}>
    <link rel="stylesheet" href={{asset("css/Media.css")}}>


</head>
<body class="">
<header style="display: none;">
    <div class="container-fluid">
        <nav class="navbar fixed-top navbar-expands navbar-dark ">
            <div class="heder_nav_navbar">
                <a class="navbar-brand" href="#zero"><img src="images/Viditex_logo.png" alt="" class="logo"></a>
                <span class="white header_small_text"><i class="fas fa-map-marker-alt"></i> г. Москва</span>
                <span class="white header_small_text"><i class="far fa-clock"></i>пн - сб 10 00 - 19 00</span>
                <a href="mailto:info@v-t-x.ru"><span class="white header_small_text"><i class="far fa-envelope"></i>info@v-t-x.ru</span></a>
                <span class="white header_small_text"><a href="#">Все услуги</a></span>
                <span class="white header_small_text"><a href="#">Контакты</a></span>
                <div class="header_call-back">
                    <p class="header_text">+7 (499) 677 20 67</p>
                    <div class="call-back_header">
                        <img src="images/phone_fontasome.png" alt="">
                        <a class="" id="" href="#win1">Заявка на звонок</a>
                    </div>
                </div>
                <button class="navbar-toggler" type="button" data-toggle="collapse"
                        data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"><p>Menu</p></span>
                </button>

            </div>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ">
                    <li class="nav-item ">
                        <a class="nav-link" href="#zero"><i class="fas fa-bookmark"></i>Главная страница</a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link" href="#one"><i class="fas fa-shoe-prints"></i>Лестницы и Стеклянные полы</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#two"><i class="fas fa-shower"></i> Душевые ограждения</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#three"><i class="fas fa-hourglass-start"></i>Зеркальное панно</a>
                    <li class="nav-item">
                        <a class="nav-link" href="#for"><i class="fas fa-door-open"></i>Перегородки и ограждения</a>
                    </li>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#five"><i class="fas fa-expand-arrows-alt"></i>Скинали</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#seven"><i class="fas fa-calculator"></i>Расчет стоимости</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#six"><i class="far fa-address-card"></i> Контакты</a>
                    </li>
                    @if(!$user)
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('login')}}">Вход</a>
                            <a class="nav-link" href="{{route('register')}}">Регистрация</a>
                        </li>
                    @endif
                    @if($user && $user->hasRole('user'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('cabinet',[$user->id])}}">Личный кабинет</a>
                        </li>
                    @endif
                    @if($user && $user->hasRole('admin|junior_admin|manager'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('dashboard')}}">Admin panel</a>
                        </li>
                    @endif
                    @if($user)
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('logout')}}">Выйти</a>
                        </li>
                    @endif
                </ul>
            </div>
        </nav>
    </div>
</header>

<main>
    <div id="p_prldr">
        <div class="contpre"><i class=" svg_anm fab fa-vuejs"></i></div>
    </div>
</main>

<footer style="display: none;">
    <button id="buttonNavigation2" type="button" role="presentation" class="owl-next">
        <p onclick="topFunction()" id="mybtn1">Next<br>следующая страница</p>
        <img src="images/arrow-next_owl.png" alt="">
    </button>
    <button id="buttonNavigation2" type="button" role="presentation" class="owl-prev" style="">
        <p onclick="topFunction()" id="mybtn">Previous<br>предыдущия страница</p>
        <img class="nav-next" src="images/prev_arrows.png" alt="">
    </button>
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-3">
                <div class="footer_logo">
                    <img src="images/Viditex_logo.png" alt="" class="logo">
                </div>
            </div>
            <div class="col-lg-4 col-md-3">
                <div class="footer_menu">
                    <ul>
                        <li><a href="#">Контакты</a></li>
                        <li><a href="#">Технические условия</a></li>
                        <li><a href="#">Политика конфеденциальности</a></li>
                        <li><a href="#">Политика cookie</a></li>
                        <li><a href="#">Отзывы</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-2 col-md-3">
                <div class="footer_menu">
                    <ul>
                        <li><a href="#">Доставка</a></li>
                        <li><a href="#">Установка</a></li>
                        <li><a href="#">Договор оферты</a></li>
                        <li><a href="#">Вакансии</a></li>
                        <li><a href="#">Каталог фигур</a></li>
                    </ul>
                </div>
            </div>
            <!-- <div class="col-lg-2 col-md-2">
                <div class="footer_menu">
                    <ul>
                        <li><a href="#">Меню</a></li>
                        <li><a href="#">Клиенты</a></li>
                        <li><a href="#">Услуги</a></li>
                        <li><a href="#">Контакты</a></li>
                    </ul>
                </div>
            </div> -->
            <div class="col-lg-3 col-md-3">
                <div class="contacts">
                    <p>+7 (499) 677 20 67</p>
                    <div class="call-back">
                        <img src="images/phone_fontasome.png" alt="">
                        <a href="#win1">Заявка на звонок</a>
                    </div>


                </div>
                <div class="soc_icons">
                    <i class="fab fa-vk"></i>
                    <i class="fab fa-instagram"></i>
                    <!-- <i class="fab fa-vimeo-v"></i> -->
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="footer_down_text">
                    <p>© 2018 Все права защищены.</p>
                    <p>© All rights reserved Копирование текстовой и графической информации не допускается. Часть
                        информации лицензирована. Нарушения преследуются по действующему законодательству. </p>
                </div>
            </div>
        </div>
    </div>
</footer>

<form>
    <a href="#x" class="overlay" id="win1"></a>
    <div class="popup formTag">
        <div class="up_form up_form_popup">
            <input type="text" name="name" placeholder="имя">
            <input type="text" name="phone" placeholder="телефон">
        </div>
        <div class="down_form down_form_popup d-flex">
            <input type="text" name="email" placeholder="email">
        </div>
        <div class="checkbox">
            <label>
                <input name="agree" required type="checkbox">
                <span class="fake-checkbox" aria-hidden="true"></span>
                <span class="label">Согласие с конфиденциальностью и куки</span>
            </label>
        </div>
        <div class="button_forms button_forms_popup">
            <a class="action_form" href="javascript:void(0);">отправить</a>
        </div>
        <a class="close" title="Закрыть" href="#close"></a>
    </div>
</form>


<form>
    <a href="#x" class="overlay" id="win2"></a>
    <div class="popup popup_choise formTag">
        <div class="up_form up_form_popup">
            <h3 class="popup_choise_h2">ВЫЗОВ СПЕЦИАЛИСТА</h3>
            <div class="butt_choise button_forms button_forms_popup d-flex">
                <a id="gager">Замершик</a>
                <a id="designer">Дизайнер</a>
            </div>
            <input type="text" name="name" placeholder="имя">
            <input type="text" name="phone" placeholder="телефон">
        </div>
        <div class="down_form down_form_popup d-flex">
            <input type="text" name="email" placeholder="email">
            {{--<div class="checkbox">--}}
            {{--<input name="agree" type="checkbox" id="checkbox18" v-model="checked">--}}
            {{--<label for="checkbox18">--}}
            {{--<a href="#">Сгласие с конфиденциальностью и куки</a>--}}
            {{--</label>--}}
            {{--</div>--}}
        </div>
        <div class="checkbox">
            <label>
                <input name="agree" required type="checkbox">
                <span class="fake-checkbox" aria-hidden="true"></span>
                <span class="label">Согласие с конфиденциальностью и куки</span>
            </label>
        </div>

        <div class="button_forms button_forms_popup">
            <a class="action_form" href="javascript:void(0);">Заказать</a>
            {{--<a href="#win3">Заказать</a>--}}
        </div>
        <a class="close" title="Закрыть" href="#close"></a>
    </div>
</form>

<a href="#x" class="overlay" id="win3"></a>
<div id="good" class="popup popup_choise">
    <div class="up_form up_form_popup">
        <h3 class="popup_choise_h2">Ваша заявка была принята!</h3>
    </div>
    <div class="button_forms button_forms_popup">
        <a href="#">Ok</a>
    </div>
    <a class="close" title="Закрыть" href="#close"></a>
</div>

<script type="text/javascript" src={{asset("js/jquery-3.3.1.min.js")}}></script>
<script type="text/javascript" src={{asset("js/bootstrap.min.js")}}></script>
<script type="text/javascript" src={{asset("js/jquery.fancybox.min.js")}}></script>
<script type="text/javascript" src={{asset("js/navigationButtons.js")}}></script>
<script type="text/javascript" src={{asset("js/calculator.js")}}></script>
<script type="text/javascript" src={{asset("js/libs/focus_block.js")}}></script>
<script type="text/javascript" src={{asset("js/forms/form_js.js")}}></script>
<script type="text/javascript" src={{asset("js/jquery.validate.js")}}></script>
<script type="text/javascript" src={{asset("js/libs/functions.js")}}></script>

</body>
</html>