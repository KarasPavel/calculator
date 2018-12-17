<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.2/css/all.css" integrity="sha384-/rXc/GQVaYpyDdyxK+ecHPVYJSN9bmVFBvjA/9eOB+pb3F2w2N6fc5qB9Ew5yIns" crossorigin="anonymous">

    <link rel="stylesheet" href={{asset("css/bootstrap.min.css")}}>
    <link rel="stylesheet" href={{asset("css/jquery.fancybox.min.css")}}>
    <link rel="stylesheet" href={{asset("owl-carusel/dist/assets/owl.theme.default.min.css")}}>
    <link rel="stylesheet" href={{asset("owl-carusel/dist/assets/owl.carousel.min.css")}}>
    <link rel="stylesheet" href={{asset("style.css")}}>
    <link rel="stylesheet" href={{asset("css/Media.css")}}>





</head>
<body class="">
<div id="p_prldr"><div class="contpre"><i class=" svg_anm fab fa-vuejs"></i></div></div>
<header>
    <div class="container-fluid">
        <nav class="navbar fixed-top navbar-expands navbar-dark ">
            <div class="heder_nav_navbar">
                <a class="navbar-brand" href="#zero"><img src="images/Viditex_logo.png" alt="" class="logo"></a>
                <span class="white header_small_text"><i class="fas fa-map-marker-alt"></i> г. Москва</span>
                <span class="white header_small_text"><i class="far fa-clock"></i>пн - сб 10 00 - 19 00</span>
                <span class="white header_small_text"><i class="far fa-envelope"></i>mail@mail.ru</span>
                <span class="white header_small_text"><a href="#">Все услуги</a></span>
                <span class="white header_small_text"><a href="#">Контакты</a></span>
                <div class="header_call-back">
                    <p class="header_text">+7 (499) 677 20 67</p>
                    <div class="call-back_header">
                        <img src="images/phone_fontasome.png" alt="">
                        <a class="" id="" href="#win1">Заявка на звонок</a>
                    </div>
                </div>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"><p>Menu</p></span>
                </button>

            </div>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ">
                    <li class="nav-item ">
                        <a class="nav-link" href="#zero">Главная страница</a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link" href="#one">Лестницы и Стеклянные полы</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#two">Душевые ограждения</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#three">Зеркальное панно</a>
                    <li class="nav-item">
                        <a class="nav-link" href="#for">Перегородки и ограждения</a>
                    </li>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#five">Скинали</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#seven">Расчет стоимости</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#six">Контакты</a>
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
<div class="owl-carousel">
    <div id="1" data-hash="zero">
        <section>
            <div id="log" class="bg_sections1 d-flex b center-block">
                <div id="log" class="bg-1">
                    <div class="calculations_buttons">

                    </div>
                </div>
                <div class="bg-2">
                    <h2>Оперативная резка стекла и зеркал</h2>
                    <img src="images/squad_smaler.png" alt="">
                    <h3>индивидуальное изготовление</h3>
                    <img src="images/squad_smaler.png" alt="">
                    <p>Срочное изготовление - <br><span class="small_span">от 6 часов</span></p>
                    <img src="images/squad_smaler.png" alt="">
                    <p>Стоимость от: <br><span>750руб./м2</span></p>
                    <a id="calculations_buttons" href="#seven">Калькулятор стоимости простых изделий</a>
                    <a id="master_calling" href="#win1">Бесплатная консультация по телефону
                    </a>
                </div>
                <div class="bg-3">
                    <div class="master_calling">

                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">

                </div>
            </div>
        </section>
        <section>
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="services">
                            <h2>
                                НАШИ УСЛУГИ
                            </h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <a data-fancybox data-src="#selectableModal" href="javascript:;" class="">
                            <div class="services_items">
                                <img src="images/product1.jpg" alt="1">
                                <p>резка стекла на заказ</p>
                            </div>
                        </a>
                        <div style="display: none;max-width:50%;border-spacing: " id="selectableModal">
                            <h2 class="fancybox_item_h2" data-selectable="true">Резка стекла и зеркал</h2>
                            <p class="fancybox_item_text" data-selectable="true">Мы осуществляем резку стекла и зеркал на итальянском и немецком оборудовании с ЧПУ, которые обеспечивают минимальную погрешность. В некоторых случаях возможна ручная резка от профи. Резка осуществляется из листов стандартного формата - 3210х2210мм и формата "Джамбо" - 6000х3210мм. Толщина стекла варьируется от 3 до 19мм, зеркал - от 3 до 6. Стоит отметить несколько тезисов - </p>
                            <ul class="modal_list" data-selectable="true">
                                <li>Размеры при изготовлении стекла и зеркал принимаются в миллиметрах (мм). Размеры - 1м = 100 см = 1000мм.</li>
                                <li>Кромка стекла после резки очень острая и травмоопасная, так же стекло больше подвержено сколам и царапинам, поэтому рекомендуем обрабатывать кромки</li>
                            </ul>
                            <img class="fancybox_img" src="images/fancybox_img_1.png" alt="">
                            <!--  <img src="images/img_room.png" alt="">
			          <img src="images/img_room.png" alt=""> -->
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <a data-fancybox data-src="#selectableModal2" href="javascript:;" class="">
                            <div class="services_items">
                                <img src="images/product2.png" alt="1">
                                <p>резка стекла на заказ</p>
                            </div>
                        </a>
                        <div style="display: none;max-width:50%;border-spacing: " id="selectableModal2">
                            <h2 class="fancybox_item_h2" data-selectable="true">Резка стекла и зеркал</h2>
                            <p class="fancybox_item_text" data-selectable="true">Мы осуществляем резку стекла и зеркал на итальянском и немецком оборудовании с ЧПУ, которые обеспечивают минимальную погрешность. В некоторых случаях возможна ручная резка от профи. Резка осуществляется из листов стандартного формата - 3210х2210мм и формата "Джамбо" - 6000х3210мм. Толщина стекла варьируется от 3 до 19мм, зеркал - от 3 до 6. Стоит отметить несколько тезисов - </p>
                            <ul class="modal_list" data-selectable="true">
                                <li>Размеры при изготовлении стекла и зеркал принимаются в миллиметрах (мм). Размеры - 1м = 100 см = 1000мм.</li>
                                <li>Кромка стекла после резки очень острая и травмоопасная, так же стекло больше подвержено сколам и царапинам, поэтому рекомендуем обрабатывать кромки</li>
                            </ul>
                            <img class="fancybox_img" src="images/fancybox_img_1.png" alt="">
                            <!--  <img src="images/img_room.png" alt="">
						  <img src="images/img_room.png" alt=""> -->
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <a data-fancybox data-src="#selectableModal3" href="javascript:;" class="">
                            <div class="services_items">
                                <img src="images/product3.png" alt="1">
                                <p>резка стекла на заказ</p>
                            </div>
                        </a>
                        <div style="display: none;max-width:50%;border-spacing: " id="selectableModal3">
                            <h2 class="fancybox_item_h2" data-selectable="true">Резка стекла и зеркал</h2>
                            <p class="fancybox_item_text" data-selectable="true">Мы осуществляем резку стекла и зеркал на итальянском и немецком оборудовании с ЧПУ, которые обеспечивают минимальную погрешность. В некоторых случаях возможна ручная резка от профи. Резка осуществляется из листов стандартного формата - 3210х2210мм и формата "Джамбо" - 6000х3210мм. Толщина стекла варьируется от 3 до 19мм, зеркал - от 3 до 6. Стоит отметить несколько тезисов - </p>
                            <ul class="modal_list" data-selectable="true">
                                <li>Размеры при изготовлении стекла и зеркал принимаются в миллиметрах (мм). Размеры - 1м = 100 см = 1000мм.</li>
                                <li>Кромка стекла после резки очень острая и травмоопасная, так же стекло больше подвержено сколам и царапинам, поэтому рекомендуем обрабатывать кромки</li>
                            </ul>
                            <img class="fancybox_img" src="images/fancybox_img_1.png" alt="">
                            <!--  <img src="images/img_room.png" alt="">
						  <img src="images/img_room.png" alt=""> -->
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <a data-fancybox data-src="#selectableModal4" href="javascript:;" class="">
                            <div class="services_items">
                                <img src="images/product4.png" alt="1">
                                <p>резка стекла на заказ</p>
                            </div>
                        </a>
                        <div style="display: none;max-width:50%;border-spacing: " id="selectableModal4">
                            <h2 class="fancybox_item_h2" data-selectable="true">Резка стекла и зеркал</h2>
                            <p class="fancybox_item_text" data-selectable="true">Мы осуществляем резку стекла и зеркал на итальянском и немецком оборудовании с ЧПУ, которые обеспечивают минимальную погрешность. В некоторых случаях возможна ручная резка от профи. Резка осуществляется из листов стандартного формата - 3210х2210мм и формата "Джамбо" - 6000х3210мм. Толщина стекла варьируется от 3 до 19мм, зеркал - от 3 до 6. Стоит отметить несколько тезисов - </p>
                            <ul class="modal_list" data-selectable="true">
                                <li>Размеры при изготовлении стекла и зеркал принимаются в миллиметрах (мм). Размеры - 1м = 100 см = 1000мм.</li>
                                <li>Кромка стекла после резки очень острая и травмоопасная, так же стекло больше подвержено сколам и царапинам, поэтому рекомендуем обрабатывать кромки</li>
                            </ul>
                            <img class="fancybox_img" src="images/fancybox_img_1.png" alt="">
                            <!--  <img src="images/img_room.png" alt="">
						  <img src="images/img_room.png" alt=""> -->
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <a data-fancybox data-src="#selectableModal5" href="javascript:;" class="">
                            <div class="services_items">
                                <img src="images/product5.png" alt="1">
                                <p>резка стекла на заказ</p>
                            </div>
                        </a>
                        <div style="display: none;max-width:50%;border-spacing: " id="selectableModal5">
                            <h2 class="fancybox_item_h2" data-selectable="true">Резка стекла и зеркал</h2>
                            <p class="fancybox_item_text" data-selectable="true">Мы осуществляем резку стекла и зеркал на итальянском и немецком оборудовании с ЧПУ, которые обеспечивают минимальную погрешность. В некоторых случаях возможна ручная резка от профи. Резка осуществляется из листов стандартного формата - 3210х2210мм и формата "Джамбо" - 6000х3210мм. Толщина стекла варьируется от 3 до 19мм, зеркал - от 3 до 6. Стоит отметить несколько тезисов - </p>
                            <ul class="modal_list" data-selectable="true">
                                <li>Размеры при изготовлении стекла и зеркал принимаются в миллиметрах (мм). Размеры - 1м = 100 см = 1000мм.</li>
                                <li>Кромка стекла после резки очень острая и травмоопасная, так же стекло больше подвержено сколам и царапинам, поэтому рекомендуем обрабатывать кромки</li>
                            </ul>
                            <img class="fancybox_img" src="images/fancybox_img_1.png" alt="">
                            <!--  <img src="images/img_room.png" alt="">
						  <img src="images/img_room.png" alt=""> -->
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <a data-fancybox data-src="#selectableModal6" href="javascript:;" class="">
                            <div class="services_items">
                                <img src="images/product6.png" alt="1">
                                <p>резка стекла на заказ</p>
                            </div>
                        </a>
                        <div style="display: none;max-width:50%;border-spacing: " id="selectableModal6">
                            <h2 class="fancybox_item_h2" data-selectable="true">Резка стекла и зеркал</h2>
                            <p class="fancybox_item_text" data-selectable="true">Мы осуществляем резку стекла и зеркал на итальянском и немецком оборудовании с ЧПУ, которые обеспечивают минимальную погрешность. В некоторых случаях возможна ручная резка от профи. Резка осуществляется из листов стандартного формата - 3210х2210мм и формата "Джамбо" - 6000х3210мм. Толщина стекла варьируется от 3 до 19мм, зеркал - от 3 до 6. Стоит отметить несколько тезисов - </p>
                            <ul class="modal_list" data-selectable="true">
                                <li>Размеры при изготовлении стекла и зеркал принимаются в миллиметрах (мм). Размеры - 1м = 100 см = 1000мм.</li>
                                <li>Кромка стекла после резки очень острая и травмоопасная, так же стекло больше подвержено сколам и царапинам, поэтому рекомендуем обрабатывать кромки</li>
                            </ul>
                            <img class="fancybox_img" src="images/fancybox_img_1.png" alt="">
                            <!--  <img src="images/img_room.png" alt="">
						  <img src="images/img_room.png" alt=""> -->
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <a data-fancybox data-src="#selectableModal7" href="javascript:;" class="">
                            <div class="services_items">
                                <img src="images/product7.png" alt="1">
                                <p>резка стекла на заказ</p>
                            </div>
                        </a>
                        <div style="display: none;max-width:50%;border-spacing: " id="selectableModal7">
                            <h2 class="fancybox_item_h2" data-selectable="true">Резка стекла и зеркал</h2>
                            <p class="fancybox_item_text" data-selectable="true">Мы осуществляем резку стекла и зеркал на итальянском и немецком оборудовании с ЧПУ, которые обеспечивают минимальную погрешность. В некоторых случаях возможна ручная резка от профи. Резка осуществляется из листов стандартного формата - 3210х2210мм и формата "Джамбо" - 6000х3210мм. Толщина стекла варьируется от 3 до 19мм, зеркал - от 3 до 6. Стоит отметить несколько тезисов - </p>
                            <ul class="modal_list" data-selectable="true">
                                <li>Размеры при изготовлении стекла и зеркал принимаются в миллиметрах (мм). Размеры - 1м = 100 см = 1000мм.</li>
                                <li>Кромка стекла после резки очень острая и травмоопасная, так же стекло больше подвержено сколам и царапинам, поэтому рекомендуем обрабатывать кромки</li>
                            </ul>
                            <img class="fancybox_img" src="images/fancybox_img_1.png" alt="">
                            <!--  <img src="images/img_room.png" alt="">
						  <img src="images/img_room.png" alt=""> -->
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <a data-fancybox data-src="#selectableModal8" href="javascript:;" class="">
                            <div class="services_items">
                                <img src="images/product8.png" alt="1">
                                <p>резка стекла на заказ</p>
                            </div>
                        </a>
                        <div style="display: none;max-width:50%;border-spacing: " id="selectableModal8">
                            <h2 class="fancybox_item_h2" data-selectable="true">Резка стекла и зеркал</h2>
                            <p class="fancybox_item_text" data-selectable="true">Мы осуществляем резку стекла и зеркал на итальянском и немецком оборудовании с ЧПУ, которые обеспечивают минимальную погрешность. В некоторых случаях возможна ручная резка от профи. Резка осуществляется из листов стандартного формата - 3210х2210мм и формата "Джамбо" - 6000х3210мм. Толщина стекла варьируется от 3 до 19мм, зеркал - от 3 до 6. Стоит отметить несколько тезисов - </p>
                            <ul class="modal_list" data-selectable="true">
                                <li>Размеры при изготовлении стекла и зеркал принимаются в миллиметрах (мм). Размеры - 1м = 100 см = 1000мм.</li>
                                <li>Кромка стекла после резки очень острая и травмоопасная, так же стекло больше подвержено сколам и царапинам, поэтому рекомендуем обрабатывать кромки</li>
                            </ul>
                            <img class="fancybox_img" src="images/fancybox_img_1.png" alt="">
                            <!--  <img src="images/img_room.png" alt="">
						  <img src="images/img_room.png" alt=""> -->
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <a data-fancybox data-src="#selectableModal9" href="javascript:;" class="">
                            <div class="services_items">
                                <img src="images/product9.png" alt="1">
                                <p>резка стекла на заказ</p>
                            </div>
                        </a>
                        <div style="display: none;max-width:50%;border-spacing: " id="selectableModal9">
                            <h2 class="fancybox_item_h2" data-selectable="true">Резка стекла и зеркал</h2>
                            <p class="fancybox_item_text" data-selectable="true">Мы осуществляем резку стекла и зеркал на итальянском и немецком оборудовании с ЧПУ, которые обеспечивают минимальную погрешность. В некоторых случаях возможна ручная резка от профи. Резка осуществляется из листов стандартного формата - 3210х2210мм и формата "Джамбо" - 6000х3210мм. Толщина стекла варьируется от 3 до 19мм, зеркал - от 3 до 6. Стоит отметить несколько тезисов - </p>
                            <ul class="modal_list" data-selectable="true">
                                <li>Размеры при изготовлении стекла и зеркал принимаются в миллиметрах (мм). Размеры - 1м = 100 см = 1000мм.</li>
                                <li>Кромка стекла после резки очень острая и травмоопасная, так же стекло больше подвержено сколам и царапинам, поэтому рекомендуем обрабатывать кромки</li>
                            </ul>
                            <img class="fancybox_img" src="images/fancybox_img_1.png" alt="">
                            <!--  <img src="images/img_room.png" alt="">
						  <img src="images/img_room.png" alt=""> -->
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <a data-fancybox data-src="#selectableModal10" href="javascript:;" class="">
                            <div class="services_items">
                                <img src="images/product10.png" alt="1">
                                <p>резка стекла на заказ</p>
                            </div>
                        </a>
                        <div style="display: none;max-width:50%;border-spacing: " id="selectableModal10">
                            <h2 class="fancybox_item_h2" data-selectable="true">Резка стекла и зеркал</h2>
                            <p class="fancybox_item_text" data-selectable="true">Мы осуществляем резку стекла и зеркал на итальянском и немецком оборудовании с ЧПУ, которые обеспечивают минимальную погрешность. В некоторых случаях возможна ручная резка от профи. Резка осуществляется из листов стандартного формата - 3210х2210мм и формата "Джамбо" - 6000х3210мм. Толщина стекла варьируется от 3 до 19мм, зеркал - от 3 до 6. Стоит отметить несколько тезисов - </p>
                            <ul class="modal_list" data-selectable="true">
                                <li>Размеры при изготовлении стекла и зеркал принимаются в миллиметрах (мм). Размеры - 1м = 100 см = 1000мм.</li>
                                <li>Кромка стекла после резки очень острая и травмоопасная, так же стекло больше подвержено сколам и царапинам, поэтому рекомендуем обрабатывать кромки</li>
                            </ul>
                            <img class="fancybox_img" src="images/fancybox_img_1.png" alt="">
                            <!--  <img src="images/img_room.png" alt="">
						  <img src="images/img_room.png" alt=""> -->
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <a data-fancybox data-src="#selectableModal11" href="javascript:;" class="">
                            <div class="services_items">
                                <img src="images/product11.png" alt="1">
                                <p>резка стекла на заказ</p>
                            </div>
                        </a>
                        <div style="display: none;max-width:50%;border-spacing: " id="selectableModal11">
                            <h2 class="fancybox_item_h2" data-selectable="true">Резка стекла и зеркал</h2>
                            <p class="fancybox_item_text" data-selectable="true">Мы осуществляем резку стекла и зеркал на итальянском и немецком оборудовании с ЧПУ, которые обеспечивают минимальную погрешность. В некоторых случаях возможна ручная резка от профи. Резка осуществляется из листов стандартного формата - 3210х2210мм и формата "Джамбо" - 6000х3210мм. Толщина стекла варьируется от 3 до 19мм, зеркал - от 3 до 6. Стоит отметить несколько тезисов - </p>
                            <ul class="modal_list" data-selectable="true">
                                <li>Размеры при изготовлении стекла и зеркал принимаются в миллиметрах (мм). Размеры - 1м = 100 см = 1000мм.</li>
                                <li>Кромка стекла после резки очень острая и травмоопасная, так же стекло больше подвержено сколам и царапинам, поэтому рекомендуем обрабатывать кромки</li>
                            </ul>
                            <img class="fancybox_img" src="images/fancybox_img_1.png" alt="">
                            <!--  <img src="images/img_room.png" alt="">
						  <img src="images/img_room.png" alt=""> -->
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <a data-fancybox data-src="#selectableModal12" href="javascript:;" class="">
                            <div class="services_items">
                                <img src="images/product12.png" alt="1">
                                <p>резка стекла на заказ</p>
                            </div>
                        </a>
                        <div style="display: none;max-width:50%;border-spacing: " id="selectableModal12">
                            <h2 class="fancybox_item_h2" data-selectable="true">Резка стекла и зеркал</h2>
                            <p class="fancybox_item_text" data-selectable="true">Мы осуществляем резку стекла и зеркал на итальянском и немецком оборудовании с ЧПУ, которые обеспечивают минимальную погрешность. В некоторых случаях возможна ручная резка от профи. Резка осуществляется из листов стандартного формата - 3210х2210мм и формата "Джамбо" - 6000х3210мм. Толщина стекла варьируется от 3 до 19мм, зеркал - от 3 до 6. Стоит отметить несколько тезисов - </p>
                            <ul class="modal_list" data-selectable="true">
                                <li>Размеры при изготовлении стекла и зеркал принимаются в миллиметрах (мм). Размеры - 1м = 100 см = 1000мм.</li>
                                <li>Кромка стекла после резки очень острая и травмоопасная, так же стекло больше подвержено сколам и царапинам, поэтому рекомендуем обрабатывать кромки</li>
                            </ul>
                            <img class="fancybox_img" src="images/fancybox_img_1.png" alt="">
                            <!--  <img src="images/img_room.png" alt="">
						  <img src="images/img_room.png" alt=""> -->
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section>
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="advantages">
                            <h2>наши преемущества</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="advantages_items">
                            <img src="images/Money.png" alt="">
                            <p class="cursor_text">Давно выяснено, что при оценке дизайна и композиции читаемый текст мешает сосредоточиться. Lorem Ipsum используют потому, что тот обеспечивает более или менее стандартное заполнение шаблона</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="advantages_items">
                            <img src="images/Door.png" alt="">
                            <p class="cursor_text">Давно выяснено, что при оценке дизайна и композиции читаемый текст мешает сосредоточиться. Lorem Ipsum используют потому, что тот обеспечивает более или менее стандартное заполнение шаблона</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="advantages_items">
                            <img src="images/Pro.png" alt="">
                            <p class="cursor_text">Давно выяснено, что при оценке дизайна и композиции читаемый текст мешает сосредоточиться. Lorem Ipsum используют потому, что тот обеспечивает более или менее стандартное заполнение шаблона</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="advantages_items">
                            <img src="images/Diamond.png" alt="">
                            <p class="cursor_text">Давно выяснено, что при оценке дизайна и композиции читаемый текст мешает сосредоточиться. Lorem Ipsum используют потому, что тот обеспечивает более или менее стандартное заполнение шаблона</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="glass_reliability">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="glass_reliability">
                            <h2 class="">Надежность стекла VEDITEX</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="video_glass">
                            <iframe src="" frameborder="0"></iframe>
                            <img src="images/glass_img.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section>
            <div class="container">
                <div class="rov">
                    <div class="col-lg-12">
                        <div class="turnkey_product">
                            <h2>Изделия производимые «под ключ»</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-md-4">
                        <a href="#two">
                            <div class="turnkey_items">
                                <img src="images/Napolnene_home/3_dushevie_i_dveri.jpg
							" alt="1">
                                <p>Душевые</p>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4 col-md-4">
                        <a href="#three">
                            <div class="turnkey_items">
                                <img src="images/Napolnene_home/5_zerkala.jpg" alt="1">
                                <p>Зеркала</p>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4 col-md-4">
                        <a href="#five">
                            <div class="turnkey_items">
                                <img src="images/Napolnene_home/6_skinali_i_fartuki.jpg" alt="1">
                                <p>Скинали и Фартуки</p>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-md-4">
                        <a href="#one">
                            <div class="turnkey_items">
                                <img src="images/Napolnene_home/2_lestnitsi i tripleks.jpg" alt="1">
                                <p>Лестницы</p>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4 col-md-4">
                        <a href="">
                            <div class="turnkey_items">
                                <img src="images/Napolnene_home/rezka_i_obrabotka.jpg" alt="1">
                                <p>Резка и Обработка</p>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4 col-md-4">
                        <a href="#for">
                            <div class="turnkey_items">
                                <img src="images/Napolnene_home/4_peregorodki_i_dveri.jpg" alt="1">
                                <p>Перегородки</p>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </section>
        <section>
            <div class="container">
                <div class="rov">

                </div>
            </div>
        </section>
        <section>
            <div class="container">
                <div class="rov">

                </div>
            </div>
        </section>
    </div>


    <div data-hash="one">
        <section>
            <div id="log" class="bg_sections1_page2 d-flex b center-block">
                <div id="log" class="bg-1_page2">
                    <!-- <a href="#">Калькулятор стоимости простых изделий</a> -->
                </div>
                <div class="bg-2_page2">
                    <h2>Лестницы и стеклянные полы Триплекс</h2>
                    <span>Красиво</span>
                    <img src="images/squad_smaler.png" alt="">
                    <span>Герметично</span>
                    <img src="images/squad_smaler.png" alt="">
                    <span>Надежно</span>
                    <h3>индивидуальное изготовление</h3>
                    <a href="#win2">вызвать замерщика</a>
                </div>
                <div class="bg-3_page2">
                    <!-- <a href="#">Бесплатная консультация по телефону
</a> -->
                </div>
            </div>
        </section>
        <section>
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="stairs_and_flooring">
                            <h2>Лестницы и стеклянные полы.Триплекс</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="stairs_and_flooring_buttons d-flex">
                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" data-toggle="tab" href="#home" role="tab" aria-controls="home">Лестници</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#profile" role="tab" aria-controls="profile">Полы</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#messages" role="tab" aria-controls="messages">Бронирование</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#settings" role="tab" aria-controls="settings">Эксклюзив</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="tab-content">
                    <div class="tab-pane active" id="home" role="tabpanel">
                        <a data-fancybox="gallery" href="images/Stairs/1/1.jpg">
                            <div class="img_items_stairs">
                                <img src="images/Stairs/1/1.jpg">
                                <p></p>
                            </div>
                        </a>
                        <a data-fancybox="gallery" href="images/Stairs/1/2.jpg">
                            <div class="img_items_stairs">
                                <img src="images/Stairs/1/2.jpg">
                                <p></p>
                            </div>
                        </a>
                        <a data-fancybox="gallery" href="images/Stairs/1/5.jpg">
                            <div class="img_items_stairs">
                                <img src="images/Stairs/1/5.jpg">
                                <p></p>
                            </div>
                        </a>
                        <a data-fancybox="gallery" href="images/Stairs/1/6.jpg">
                            <div class="img_items_stairs">
                                <img src="images/Stairs/1/6.jpg">
                                <p></p>
                            </div>
                        </a>
                        <a data-fancybox="gallery" href="images/Stairs/1/7.jpg">
                            <div class="img_items_stairs">
                                <img src="images/Stairs/1/7.jpg">
                                <p></p>
                            </div>
                        </a>
                        <a data-fancybox="gallery" href="images/Stairs/1/8.jpg">
                            <div class="img_items_stairs">
                                <img src="images/Stairs/1/8.jpg">
                                <p></p>
                            </div>
                        </a>
                        <a data-fancybox="gallery" href="images/Stairs/1/9.jpg">
                            <div class="img_items_stairs">
                                <img src="images/Stairs/1/9.jpg">
                                <p></p>
                            </div>
                        </a>
                        <a data-fancybox="gallery" href="images/Stairs/1/10.jpg">
                            <div class="img_items_stairs">
                                <img src="images/Stairs/1/10.jpg">
                                <p></p>
                            </div>
                        </a>
                    </div>
                    <div class="tab-pane" id="profile" role="tabpanel">
                        <a data-fancybox="gallery1" href="images/Stairs/2/1.jpg">
                            <div class="img_items_stairs">
                                <img src="images/Stairs/2/1.jpg" alt="1">
                                <p></p>
                            </div>
                        </a>
                        <a data-fancybox="gallery1" href="images/Stairs/2/2.jpg">
                            <div class="img_items_stairs">
                                <img src="images/Stairs/2/2.jpg" alt="1">
                                <p></p>
                            </div>
                        </a>
                        <a data-fancybox="gallery1" href="images/Stairs/2/3.jpg">
                            <div class="img_items_stairs">
                                <img src="images/Stairs/2/3.jpg" alt="1">
                                <p></p>
                            </div>
                        </a>
                        <a data-fancybox="gallery1" href="images/Stairs/2/5.jpg">
                            <div class="img_items_stairs">
                                <img src="images/Stairs/2/5.jpg" alt="1">
                                <p></p>
                            </div>
                        </a>
                        <a data-fancybox="gallery1" href="images/Stairs/2/6.jpg">
                            <div class="img_items_stairs">
                                <img src="images/Stairs/2/6.jpg" alt="1">
                                <p></p>
                            </div>
                        </a>
                        <a data-fancybox="gallery1" href="images/Stairs/2/7.jpg">
                            <div class="img_items_stairs">
                                <img src="images/Stairs/2/7.jpg" alt="1">
                                <p></p>
                            </div>
                        </a>
                        <a data-fancybox="gallery1" href="images/Stairs/2/8.jpg">
                            <div class="img_items_stairs">
                                <img src="images/Stairs/2/8.jpg" alt="1">
                                <p></p>
                            </div>
                        </a>
                        <a data-fancybox="gallery1" href="images/Stairs/2/9.jpg">
                            <div class="img_items_stairs">
                                <img src="images/Stairs/2/9.jpg" alt="1">
                                <p></p>
                            </div>
                        </a>
                        <a data-fancybox="gallery1" href="images/Stairs/2/10.jpg">
                            <div class="img_items_stairs">
                                <img src="images/Stairs/2/10.jpg" alt="1">
                                <p></p>
                            </div>
                        </a>
                    </div>
                    <div class="tab-pane" id="messages" role="tabpanel">
                        <a data-fancybox="gallery3" href="images/Stairs/3/1.jpg">
                            <div class="img_items_stairs">
                                <img src="images/Stairs/3/1.jpg" alt="1">
                                <p></p>
                            </div>
                        </a>
                        <a data-fancybox="gallery3" href="images/Stairs/3/2.JPG">
                            <div class="img_items_stairs">
                                <img src="images/Stairs/3/2.JPG" alt="1">
                                <p></p>
                            </div>
                        </a>
                        <a data-fancybox="gallery3" href="images/Stairs/3/3.jpg">
                            <div class="img_items_stairs">
                                <img src="images/Stairs/3/3.jpg" alt="1">
                                <p></p>
                            </div>
                        </a>
                        <a data-fancybox="gallery3" href="images/Stairs/3/5.jpg">
                            <div class="img_items_stairs">
                                <img src="images/Stairs/3/5.jpg" alt="1">
                                <p></p>
                            </div>
                        </a>
                        <a data-fancybox="gallery3" href="images/Stairs/3/6.jpg">
                            <div class="img_items_stairs">
                                <img src="images/Stairs/3/6.jpg" alt="1">
                                <p></p>
                            </div>
                        </a>
                        <a data-fancybox="gallery3" href="images/Stairs/3/7.jpg">
                            <div class="img_items_stairs">
                                <img src="images/Stairs/3/7.jpg" alt="1">
                                <p></p>
                            </div>
                        </a>
                        <a data-fancybox="gallery3" href="images/Stairs/3/8.jpg">
                            <div class="img_items_stairs">
                                <img src="images/Stairs/3/8.jpg" alt="1">
                                <p></p>
                            </div>
                        </a>
                        <a data-fancybox="gallery3" href="images/Stairs/3/9.jpg">
                            <div class="img_items_stairs">
                                <img src="images/Stairs/3/9.jpg" alt="1">
                                <p></p>
                            </div>
                        </a>
                        <a data-fancybox="gallery3" href="images/Stairs/3/10.jpg">
                            <div class="img_items_stairs">
                                <img src="images/Stairs/3/10.jpg" alt="1">
                                <p></p>
                            </div>
                        </a>
                    </div>
                    <div class="tab-pane" id="settings" role="tabpanel">
                        <a data-fancybox="gallery3" href="images/Stairs/4/1.jpg">
                            <div class="img_items_stairs">
                                <img src="images/Stairs/4/1.jpg" alt="1">
                                <p></p>
                            </div>
                        </a>
                        <a data-fancybox="gallery3" href="images/Stairs/4/2.jpg">
                            <div class="img_items_stairs">
                                <img src="images/Stairs/4/2.jpg" alt="1">
                                <p></p>
                            </div>
                        </a>
                        <a data-fancybox="gallery3" href="images/Stairs/4/3.jpg">
                            <div class="img_items_stairs">
                                <img src="images/Stairs/4/3.jpg" alt="1">
                                <p></p>
                            </div>
                        </a>
                        <a data-fancybox="gallery3" href="images/Stairs/4/4.JPG">
                            <div class="img_items_stairs">
                                <img src="images/Stairs/4/4.JPG" alt="1">
                                <p></p>
                            </div>
                        </a>
                        <a data-fancybox="gallery3" href="images/Stairs/4/5.jpg">
                            <div class="img_items_stairs">
                                <img src="images/Stairs/4/5.jpg" alt="1">
                                <p></p>
                            </div>
                        </a>
                        <a data-fancybox="gallery3" href="images/Stairs/4/6.jpg">
                            <div class="img_items_stairs">
                                <img src="images/Stairs/4/6.jpg" alt="1">
                                <p></p>
                            </div>
                        </a>
                        <a data-fancybox="gallery3" href="images/Stairs/4/7.jpg">
                            <div class="img_items_stairs">
                                <img src="images/Stairs/4/7.jpg" alt="1">
                                <p></p>
                            </div>
                        </a>
                        <a data-fancybox="gallery3" href="images/Stairs/4/8.jpg">
                            <div class="img_items_stairs">
                                <img src="images/Stairs/4/8.jpg" alt="1">
                                <p></p>
                            </div>
                        </a>
                        <a data-fancybox="gallery3" href="images/Stairs/4/9.jpg">
                            <div class="img_items_stairs">
                                <img src="images/Stairs/4/9.jpg" alt="1">
                                <p></p>
                            </div>
                        </a>
                        <a data-fancybox="gallery3" href="images/Stairs/4/10.jpg">
                            <div class="img_items_stairs">
                                <img src="images/Stairs/4/10.jpg" alt="1">
                                <p></p>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </section>
        <section id="glass_reliability">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="glass_reliability">
                            <h2 class="">наше видео</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="video_our">
                            <iframe src="" frameborder="0"></iframe>
                            <iframe src="" frameborder="0"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="call_back">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="request_call_back">
                            <h2>Оформить заявку на звонок специалиста и
                                обсуждения деталей заказа</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="up_form">
                            <input type="text" placeholder="Your name">
                            <input type="text" placeholder="Your name">
                        </div>
                        <div class="down_form">
                            <input type="text" placeholder="EMail">
                            <div class="day">
                                <span><a href="#">Пн</a></span>
                                <span>Вт</span>
                                <span>Ср</span>
                                <span>Чт</span>
                                <span>Пт</span>
                                <span>Сб</span>
                                <span>Вс</span>
                            </div>
                            <div class="time1"><i class="far fa-clock"></i><br><p>Со<br> скольки</p></div>
                            <div class="time2"><i class="far fa-clock"></i><br><p>До <br>скольки</p></div>



                        </div>
                        <div class="checkbox">
                            <input type="checkbox" id="checkbox" v-model="checked">
                            <label for="checkbox"><a href="#">Cогласие с конфиденциальностью и куки</a></label>
                        </div>
                        <div class="button_forms">
                            <a href="#">отправить</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <div id="2" data-hash="two">
        <section>
            <div id="log" class="bg_sections1_page2 d-flex b center-block">
                <div id="log" class="bg-1_page_showers">
                    <!-- <a href="#">Калькулятор стоимости простых изделий</a> -->
                </div>
                <div class="bg-2_page_showers">
                    <h2>душевые ограждения и двери на заказ</h2>
                    <span>Красиво</span>
                    <img src="images/squad_smaler.png" alt="">
                    <span>Герметично</span>
                    <img src="images/squad_smaler.png" alt="">
                    <span>Надежно</span>
                    <h3>индивидуальное изготовление</h3>
                    <a href="#win2">вызвать замерщика</a>
                </div>
                <div class="bg-3_pages_howers">
                    <!-- <a href="#">Бесплатная консультация по телефону
</a> -->
                </div>
            </div>
        </section>
        <section>
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="stairs_and_flooring">
                            <h2>галерея работ</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="stairs_and_flooring_buttons d-flex">
                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" data-toggle="tab" href="#page2_home" role="tab" aria-controls="home">Угловые и фигурные</a>
                                    <p class="stairs_and_flooring_text">От 26100 руб. <br>
                                        6-8 дней</p>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#page2_profile" role="tab" aria-controls="profile">Прямые Душевые</a>
                                    <p class="stairs_and_flooring_text">От 26100 руб. <br>
                                        6-8 дней</p>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#page2_messages" role="tab" aria-controls="messages">Форма Трапеции</a>
                                    <p class="stairs_and_flooring_text">От 26100 руб. <br>
                                        6-8 дней</p>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#page2_settings" role="tab" aria-controls="settings">Двери Ниша</a>
                                    <p class="stairs_and_flooring_text">От 26100 руб. <br>
                                        6-8 дней</p>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#page2_settings1" role="tab" aria-controls="setting1">Глухие перегородки</a>
                                    <p class="stairs_and_flooring_text">От 26100 руб. <br>
                                        6-8 дней</p>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#page2_settings2" role="tab" aria-controls="settings2">Ограждения в ванную</a>
                                    <p class="stairs_and_flooring_text">От 26100 руб. <br>
                                        6-8 дней</p>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#page2_settings3" role="tab" aria-controls="settings3">С раздвижной дверью</a>
                                    <p class="stairs_and_flooring_text">От 26100 руб. <br>
                                        6-8 дней</p>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#page2_settings4" role="tab" aria-controls="settings4">Эксклюзив и опт</a>
                                    <p class="stairs_and_flooring_text">От 26100 руб. <br>
                                        6-8 дней</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="tab-content">

                    <div class="tab-pane active" id="page2_home" role="tabpanel">
                        <a data-fancybox="gallery_Showers" href="images/Showers/1/1.jpg">
                            <div class="img_items_stairs">
                                <img src="images/Showers/1/1.jpg" alt="1">
                                <p></p>
                            </div>
                        </a>
                        <a data-fancybox="gallery_Showers" href="images/Showers/1/2.jpg">
                            <div class="img_items_stairs">
                                <img src="images/Showers/1/2.jpg" alt="1">
                                <p></p>
                            </div>
                        </a>
                        <a data-fancybox="gallery_Showers" href="images/Showers/1/3.jpg">
                            <div class="img_items_stairs">
                                <img src="images/Showers/1/3.jpg" alt="1">
                                <p></p>
                            </div>
                        </a>
                        <a data-fancybox="gallery_Showers" href="images/Showers/1/4.jpg">
                            <div class="img_items_stairs">
                                <img src="images/Showers/1/4.jpg" alt="1">
                                <p></p>
                            </div>
                        </a>
                        <a data-fancybox="gallery_Showers" href="images/Showers/1/5.jpg">
                            <div class="img_items_stairs">
                                <img src="images/Showers/1/5.jpg" alt="1">
                                <p></p>
                            </div>
                        </a>
                        <a data-fancybox="gallery_Showers" href="images/Showers/1/6.jpg">
                            <div class="img_items_stairs">
                                <img src="images/Showers/1/6.jpg" alt="1">
                                <p></p>
                            </div>
                        </a>
                        <a data-fancybox="gallery_Showers" href="images/Showers/1/7.jpg">
                            <div class="img_items_stairs">
                                <img src="images/Showers/1/7.jpg" alt="1">
                                <p></p>
                            </div>
                        </a>
                        <a data-fancybox="gallery_Showers" href="images/Showers/1/8.jpg">
                            <div class="img_items_stairs">
                                <img src="images/Showers/1/8.jpg" alt="1">
                                <p></p>
                            </div>
                        </a>
                        <a data-fancybox="gallery_Showers" href="images/Showers/1/9.jpg">
                            <div class="img_items_stairs">
                                <img src="images/Showers/1/9.jpg" alt="1">
                                <p></p>
                            </div>
                        </a>
                        <a data-fancybox="gallery_Showers" href="images/Showers/1/10.jpg">
                            <div class="img_items_stairs">
                                <img src="images/Showers/1/10.jpg" alt="1">
                                <p></p>
                            </div>
                        </a>
                    </div>
                    <div class="tab-pane" id="page2_profile" role="tabpanel">
                        <a data-fancybox="gallery_Showers2" href="images/Showers/2/1 (2).jpg">
                            <div class="img_items_stairs">
                                <img src="images/Showers/2/1 (2).jpg" alt="1">
                                <p></p>
                            </div>
                        </a>
                        <a data-fancybox="gallery_Showers2" href="images/Showers/2/2.jpg">
                            <div class="img_items_stairs">
                                <img src="images/Showers/2/2.jpg" alt="1">
                                <p></p>
                            </div>
                        </a>
                        <a data-fancybox="gallery_Showers2" href="images/Showers/2/3.jpg">
                            <div class="img_items_stairs">
                                <img src="images/Showers/2/3.jpg" alt="1">
                                <p></p>
                            </div>
                        </a>
                        <a data-fancybox="gallery_Showers2" href="images/Showers/2/4.jpg">
                            <div class="img_items_stairs">
                                <img src="images/Showers/2/4.jpg" alt="1">
                                <p></p>
                            </div>
                        </a>
                        <a data-fancybox="gallery_Showers2" href="images/Showers/2/5.jpg">
                            <div class="img_items_stairs">
                                <img src="images/Showers/2/5.jpg" alt="1">
                                <p></p>
                            </div>
                        </a>
                        <a data-fancybox="gallery_Showers2" href="images/Showers/2/6.jpg">
                            <div class="img_items_stairs">
                                <img src="images/Showers/2/6.jpg" alt="1">
                                <p></p>
                            </div>
                        </a>
                        <a data-fancybox="gallery_Showers2" href="images/Showers/2/7.jpg">
                            <div class="img_items_stairs">
                                <img src="images/Showers/2/7.jpg" alt="1">
                                <p></p>
                            </div>
                        </a>
                        <a data-fancybox="gallery_Showers2" href="images/Showers/2/8.jpg">
                            <div class="img_items_stairs">
                                <img src="images/Showers/2/8.jpg" alt="1">
                                <p></p>
                            </div>
                        </a>
                        <a data-fancybox="gallery_Showers2" href="images/Showers/2/9.jpg">
                            <div class="img_items_stairs">
                                <img src="images/Showers/2/9.jpg" alt="1">
                                <p></p>
                            </div>
                        </a>
                        <a data-fancybox="gallery_Showers2" href="images/Showers/2/10.jpg">
                            <div class="img_items_stairs">
                                <img src="images/Showers/2/10.jpg" alt="1">
                                <p></p>
                            </div>
                        </a>
                    </div>
                    <div class="tab-pane" id="page2_messages" role="tabpanel">
                        <a data-fancybox="gallery_Showers1" href="images/Showers/3/1.jpg">
                            <div class="img_items_stairs">
                                <img src="images/Showers/3/1.jpg" alt="1">
                                <p></p>
                            </div>
                        </a>
                        <a data-fancybox="gallery_Showers1" href="images/Showers/3/2.jpg">
                            <div class="img_items_stairs">
                                <img src="images/Showers/3/2.jpg" alt="1">
                                <p></p>
                            </div>
                        </a>
                        <a data-fancybox="gallery_Showers1" href="images/Showers/3/3.jpg">
                            <div class="img_items_stairs">
                                <img src="images/Showers/3/3.jpg" alt="1">
                                <p></p>
                            </div>
                        </a>
                        <a data-fancybox="gallery_Showers1" href="images/Showers/3/4.jpg">
                            <div class="img_items_stairs">
                                <img src="images/Showers/3/4.jpg" alt="1">
                                <p></p>
                            </div>
                        </a>
                        <a data-fancybox="gallery_Showers1" href="images/Showers/3/6.jpg">
                            <div class="img_items_stairs">
                                <img src="images/Showers/3/6.jpg" alt="1">
                                <p></p>
                            </div>
                        </a>
                    </div>
                    <div class="tab-pane" id="page2_settings" role="tabpanel">
                        <a data-fancybox="gallery_Showers3" href="images/Showers/4/1.jpg">
                            <div class="img_items_stairs">
                                <img src="images/Showers/4/1.jpg" alt="1">
                                <p></p>
                            </div>
                        </a>
                        <a data-fancybox="gallery_Showers3" href="images/Showers/4/2.jpg">
                            <div class="img_items_stairs">
                                <img src="images/Showers/4/2.jpg" alt="1">
                                <p></p>
                            </div>
                        </a>
                        <a data-fancybox="gallery_Showers3" href="images/Showers/4/7.jpg">
                            <div class="img_items_stairs">
                                <img src="images/Showers/4/7.jpg" alt="1">
                                <p></p>
                            </div>
                        </a>
                        <a data-fancybox="gallery_Showers3" href="images/Showers/4/8.jpg">
                            <div class="img_items_stairs">
                                <img src="images/Showers/4/8.jpg" alt="1">
                                <p></p>
                            </div>
                        </a>
                        <a data-fancybox="gallery_Showers3" href="images/Showers/4/9.jpg">
                            <div class="img_items_stairs">
                                <img src="images/Showers/4/9.jpg" alt="1">
                                <p></p>
                            </div>
                        </a>
                        <a data-fancybox="gallery_Showers3" href="images/Showers/4/10.jpg">
                            <div class="img_items_stairs">
                                <img src="images/Showers/4/10.jpg" alt="1">
                                <p></p>
                            </div>
                        </a>
                    </div>
                    <div class="tab-pane" id="page2_settings1" role="tabpanel">
                        <a data-fancybox="gallery_Showers4" href="images/Showers/5/1.jpg">
                            <div class="img_items_stairs">
                                <img src="images/Showers/5/1.jpg" alt="1">
                                <p></p>
                            </div>
                        </a><a data-fancybox="gallery_Showers4" href="images/Showers/5/2.jpg">
                            <div class="img_items_stairs">
                                <img src="images/Showers/5/2.jpg" alt="1">
                                <p></p>
                            </div>
                        </a>
                        <a data-fancybox="gallery_Showers4" href="images/Showers/5/3.jpg">
                            <div class="img_items_stairs">
                                <img src="images/Showers/5/3.jpg" alt="1">
                                <p></p>
                            </div>
                        </a>
                        <a data-fancybox="gallery_Showers4" href="images/Showers/5/4.jpg">
                            <div class="img_items_stairs">
                                <img src="images/Showers/5/4.jpg" alt="1">
                                <p></p>
                            </div>
                        </a>
                        <a data-fancybox="gallery_Showers4" href="images/Showers/5/5.jpg">
                            <div class="img_items_stairs">
                                <img src="images/Showers/5/5.jpg" alt="1">
                                <p></p>
                            </div>
                        </a>
                        <a data-fancybox="gallery_Showers4" href="images/Showers/5/6.jpg">
                            <div class="img_items_stairs">
                                <img src="images/Showers/5/6.jpg" alt="1">
                                <p></p>
                            </div>
                        </a>
                        <a data-fancybox="gallery_Showers4" href="images/Showers/5/7.jpg">
                            <div class="img_items_stairs">
                                <img src="images/Showers/5/7.jpg" alt="1">
                                <p></p>
                            </div>
                        </a>
                        <a data-fancybox="gallery_Showers4" href="images/Showers/5/8.jpg">
                            <div class="img_items_stairs">
                                <img src="images/Showers/5/8.jpg" alt="1">
                                <p></p>
                            </div>
                        </a>
                        <a data-fancybox="gallery_Showers4" href="images/Showers/5/9.jpg">
                            <div class="img_items_stairs">
                                <img src="images/Showers/5/9.jpg" alt="1">
                                <p></p>
                            </div>
                        </a>
                        <a data-fancybox="gallery_Showers4" href="images/Showers/5/10.jpg">
                            <div class="img_items_stairs">
                                <img src="images/Showers/5/10.jpg" alt="1">
                                <p></p>
                            </div>
                        </a>
                    </div>
                    <div class="tab-pane" id="page2_settings2" role="tabpanel">
                        <a data-fancybox="gallery_Showers5" href="images/Showers/6/1.jpg">
                            <div class="img_items_stairs">
                                <img src="images/Showers/6/1.jpg" alt="1">
                                <p></p>
                            </div>
                        </a>
                        <a data-fancybox="gallery_Showers5" href="images/Showers/6/2.jpg">
                            <div class="img_items_stairs">
                                <img src="images/Showers/6/2.jpg" alt="1">
                                <p></p>
                            </div>
                        </a>
                        <a data-fancybox="gallery_Showers5" href="images/Showers/6/3.jpg">
                            <div class="img_items_stairs">
                                <img src="images/Showers/6/3.jpg" alt="1">
                                <p></p>
                            </div>
                        </a>
                        <a data-fancybox="gallery_Showers5" href="images/Showers/6/4.jpg">
                            <div class="img_items_stairs">
                                <img src="images/Showers/6/4.jpg" alt="1">
                                <p></p>
                            </div>
                        </a>
                        <a data-fancybox="gallery_Showers5" href="images/Showers/6/5.jpg">
                            <div class="img_items_stairs">
                                <img src="images/Showers/6/5.jpg" alt="1">
                                <p></p>
                            </div>
                        </a>
                        <a data-fancybox="gallery_Showers5" href="images/Showers/6/6.jpg">
                            <div class="img_items_stairs">
                                <img src="images/Showers/6/6.jpg" alt="1">
                                <p></p>
                            </div>
                        </a>
                        <a data-fancybox="gallery_Showers5" href="images/Showers/6/7.jpg">
                            <div class="img_items_stairs">
                                <img src="images/Showers/6/7.jpg" alt="1">
                                <p></p>
                            </div>
                        </a>
                        <a data-fancybox="gallery_Showers5" href="images/Showers/6/8.jpg">
                            <div class="img_items_stairs">
                                <img src="images/Showers/6/8.jpg" alt="1">
                                <p></p>
                            </div>
                        </a>
                        <a data-fancybox="gallery_Showers5" href="images/Showers/6/9.jpg">
                            <div class="img_items_stairs">
                                <img src="images/Showers/6/9.jpg" alt="1">
                                <p></p>
                            </div>
                        </a>
                        <a data-fancybox="gallery_Showers5" href="images/Showers/6/10.jpg">
                            <div class="img_items_stairs">
                                <img src="images/Showers/6/10.jpg" alt="1">
                                <p></p>
                            </div>
                        </a>
                    </div>
                    <div class="tab-pane" id="page2_settings3" role="tabpanel">
                        <a data-fancybox="gallery_Showers6" href="images/Showers/7/1.jpg">
                            <div class="img_items_stairs">
                                <img src="images/Showers/7/1.jpg" alt="1">
                                <p></p>
                            </div>
                        </a>
                        <a data-fancybox="gallery_Showers6" href="images/Showers/7/2.jpg">
                            <div class="img_items_stairs">
                                <img src="images/Showers/7/2.jpg" alt="1">
                                <p></p>
                            </div>
                        </a>
                        <a data-fancybox="gallery_Showers6" href="images/Showers/7/3.jpg">
                            <div class="img_items_stairs">
                                <img src="images/Showers/7/3.jpg" alt="1">
                                <p></p>
                            </div>
                        </a>
                        <a data-fancybox="gallery_Showers6" href="images/Showers/7/4.jpg">
                            <div class="img_items_stairs">
                                <img src="images/Showers/7/4.jpg" alt="1">
                                <p></p>
                            </div>
                        </a>
                        <a data-fancybox="gallery_Showers6" href="images/Showers/7/5.jpg">
                            <div class="img_items_stairs">
                                <img src="images/Showers/7/5.jpg" alt="1">
                                <p></p>
                            </div>
                        </a>
                        <a data-fancybox="gallery_Showers6" href="images/Showers/7/7.jpg">
                            <div class="img_items_stairs">
                                <img src="images/Showers/7/7.jpg" alt="1">
                                <p></p>
                            </div>
                        </a>
                        <a data-fancybox="gallery_Showers6" href="images/Showers/7/8.jpg">
                            <div class="img_items_stairs">
                                <img src="images/Showers/7/8.jpg" alt="1">
                                <p></p>
                            </div>
                        </a>
                        <a data-fancybox="gallery_Showers6" href="images/Showers/7/9.jpg">
                            <div class="img_items_stairs">
                                <img src="images/Showers/7/9.jpg" alt="1">
                                <p></p>
                            </div>
                        </a>
                        <a data-fancybox="gallery_Showers6" href="images/Showers/7/10.jpg">
                            <div class="img_items_stairs">
                                <img src="images/Showers/7/10.jpg" alt="1">
                                <p></p>
                            </div>
                        </a>
                        <a data-fancybox="gallery_Showers6" href="images/Showers/7/11.jpg">
                            <div class="img_items_stairs">
                                <img src="images/Showers/7/11.jpg" alt="1">
                                <p></p>
                            </div>
                        </a>
                    </div>
                    <div class="tab-pane" id="page2_settings4" role="tabpanel">
                        <a data-fancybox="gallery_Showers7" href="images/Showers/8/1.jpg">
                            <div class="img_items_stairs">
                                <img src="images/Showers/8/1.jpg" alt="1">
                                <p></p>
                            </div>
                        </a>
                        <a data-fancybox="gallery_Showers7" href="images/Showers/8/2.jpg">
                            <div class="img_items_stairs">
                                <img src="images/Showers/8/2.jpg" alt="1">
                                <p></p>
                            </div>
                        </a>
                        <a data-fancybox="gallery_Showers7" href="images/Showers/8/3.jpg">
                            <div class="img_items_stairs">
                                <img src="images/Showers/8/3.jpg" alt="1">
                                <p></p>
                            </div>
                        </a>
                        <a data-fancybox="gallery_Showers7" href="images/Showers/8/4.jpg">
                            <div class="img_items_stairs">
                                <img src="images/Showers/8/4.jpg" alt="1">
                                <p></p>
                            </div>
                        </a>
                        <a data-fancybox="gallery_Showers7" href="images/Showers/8/5.jpg">
                            <div class="img_items_stairs">
                                <img src="images/Showers/8/5.jpg" alt="1">
                                <p></p>
                            </div>
                        </a>
                        <a data-fancybox="gallery_Showers7" href="images/Showers/8/6.jpg">
                            <div class="img_items_stairs">
                                <img src="images/Showers/8/6.jpg" alt="1">
                                <p></p>
                            </div>
                        </a>
                        <a data-fancybox="gallery_Showers7" href="images/Showers/8/8.jpg">
                            <div class="img_items_stairs">
                                <img src="images/Showers/8/8.jpg" alt="1">
                                <p></p>
                            </div>
                        </a>
                        <a data-fancybox="gallery_Showers7" href="images/Showers/8/9.jpg">
                            <div class="img_items_stairs">
                                <img src="images/Showers/8/9.jpg" alt="1">
                                <p></p>
                            </div>
                        </a>
                        <a data-fancybox="gallery_Showers7" href="images/Showers/8/10.jpg">
                            <div class="img_items_stairs">
                                <img src="images/Showers/8/10.jpg" alt="1">
                                <p></p>
                            </div>
                        </a>
                        <a data-fancybox="gallery_Showers7" href="images/Showers/8/11.jpg">
                            <div class="img_items_stairs">
                                <img src="images/Showers/8/11.jpg" alt="1">
                                <p></p>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </section>
        <section id="glass_reliability">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="glass_reliability">
                            <h2 class="">наше видео</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="video_our">
                            <iframe src="" frameborder="0"></iframe>
                            <iframe src="" frameborder="0"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="showers_type">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="showers_type">
                            <h2>СРАВНЕНИЕ ВИДОВ ДУШЕВЫХ</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="shower_type_items d-flex">
                            <img src="images/img_showers-type.png" alt="">
                            <div class="shower_type_item-left">
                                <p>ДУШЕВОЕ ОГРАЖДЕНИЕ VEDITEX</p>
                                <ul>
                                    <li>Срок службы неограничен. Гарантия 25 лет.</li>
                                    <li>Компактно, эстетично, увеличивает пространство, сохраняет свет.</li>
                                    <li>Крайне надежно. Безопасно для детей.</li>
                                    <li>Изделие под инивидуальный заказ</li>
                                    <li>Используем немецкую, швейцарскую и российскую фурнитуру.</li>
                                    <li>Стоит не так дешево</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="shower_type_items d-flex">
                            <div class="shower_type_item-right">
                                <p>ДУШЕВОЕ ОГРАЖДЕНИЕ VEDITEX</p>
                                <ul>
                                    <li>Срок службы неограничен. Гарантия 25 лет.</li>
                                    <li>Компактно, эстетично, увеличивает пространство, сохраняет свет.</li>
                                    <li>Крайне надежно. Безопасно для детей.</li>
                                    <li>Изделие под инивидуальный заказ</li>
                                    <li>Используем немецкую, швейцарскую и российскую фурнитуру.</li>
                                    <li>Стоит не так дешево</li>
                                </ul>
                            </div>
                            <img src="images/img_showers-type-right.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="manufacture">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="hardware_manufacture">
                            <h2>производители фурнитуры</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <a data-fancybox data-src="#selectableModa_Company1" href="javascript:;" class="">
                            <div class="manufacture_items">
                                <img src="images/proizvoditeli/proizavoditel1.png" alt="">
                                <p>Название компании, Россия</p>
                            </div>
                        </a>
                        <div style="display: none;max-width:50%;border-spacing: " id="selectableModa_Company1">
                            <h2 class="fancybox_item_h2" data-selectable="true">Название компании</h2>
                            <p class="fancybox_item_text" data-selectable="true">Давно выяснено, что при оценке дизайна и композиции читаемый текст мешает сосредоточиться. Lorem Ipsum используют потому, что тот обеспечивает более или менее стандартное заполнение шаблона, а также реальное распределение букв и пробелов в абзацах, которое не получается при простой дубликации "Здесь ваш текст.. Здесь ваш текст.. Здесь ваш текст.</p>
                            <!-- <ul class="modal_list" data-selectable="true">
									  <li>Размеры при изготовлении стекла и зеркал принимаются в миллиметрах (мм). Размеры - 1м = 100 см = 1000мм.</li>
									  <li>Кромка стекла после резки очень острая и травмоопасная, так же стекло больше подвержено сколам и царапинам, поэтому рекомендуем обрабатывать кромки</li>
								  </ul>
								  <img class="fancybox_img" src="images/fancybox_img_1.png" alt=""> -->
                            <!--  <img src="images/img_room.png" alt="">
								  <img src="images/img_room.png" alt=""> -->
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <a data-fancybox data-src="#selectableModa_Company1" href="javascript:;" class="">
                            <div class="manufacture_items">
                                <img src="images/proizvoditeli/proizavoditel2.png" alt="">
                                <p>Название компании, Россия</p>
                            </div>
                        </a>
                        <div style="display: none;max-width:50%;border-spacing: " id="selectableModa_Company1">
                            <h2 class="fancybox_item_h2" data-selectable="true">Название компании</h2>
                            <p class="fancybox_item_text" data-selectable="true">Давно выяснено, что при оценке дизайна и композиции читаемый текст мешает сосредоточиться. Lorem Ipsum используют потому, что тот обеспечивает более или менее стандартное заполнение шаблона, а также реальное распределение букв и пробелов в абзацах, которое не получается при простой дубликации "Здесь ваш текст.. Здесь ваш текст.. Здесь ваш текст.</p>
                            <!-- <ul class="modal_list" data-selectable="true">
									  <li>Размеры при изготовлении стекла и зеркал принимаются в миллиметрах (мм). Размеры - 1м = 100 см = 1000мм.</li>
									  <li>Кромка стекла после резки очень острая и травмоопасная, так же стекло больше подвержено сколам и царапинам, поэтому рекомендуем обрабатывать кромки</li>
								  </ul>
								  <img class="fancybox_img" src="images/fancybox_img_1.png" alt=""> -->
                            <!--  <img src="images/img_room.png" alt="">
								  <img src="images/img_room.png" alt=""> -->
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <a data-fancybox data-src="#selectableModa_Company1" href="javascript:;" class="">
                            <div class="manufacture_items">
                                <img src="images/proizvoditeli/proizavoditel3.png" alt="">
                                <p>Название компании, Россия</p>
                            </div>
                        </a>
                        <div style="display: none;max-width:50%;border-spacing: " id="selectableModa_Company1">
                            <h2 class="fancybox_item_h2" data-selectable="true">Название компании</h2>
                            <p class="fancybox_item_text" data-selectable="true">Давно выяснено, что при оценке дизайна и композиции читаемый текст мешает сосредоточиться. Lorem Ipsum используют потому, что тот обеспечивает более или менее стандартное заполнение шаблона, а также реальное распределение букв и пробелов в абзацах, которое не получается при простой дубликации "Здесь ваш текст.. Здесь ваш текст.. Здесь ваш текст.</p>
                            <!-- <ul class="modal_list" data-selectable="true">
									  <li>Размеры при изготовлении стекла и зеркал принимаются в миллиметрах (мм). Размеры - 1м = 100 см = 1000мм.</li>
									  <li>Кромка стекла после резки очень острая и травмоопасная, так же стекло больше подвержено сколам и царапинам, поэтому рекомендуем обрабатывать кромки</li>
								  </ul>
								  <img class="fancybox_img" src="images/fancybox_img_1.png" alt=""> -->
                            <!--  <img src="images/img_room.png" alt="">
								  <img src="images/img_room.png" alt=""> -->
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <a data-fancybox data-src="#selectableModa_Company1" href="javascript:;" class="">
                            <div class="manufacture_items">
                                <img src="images/proizvoditeli/proizavoditel4.png" alt="">
                                <p>Название компании, Россия</p>
                            </div>
                        </a>
                        <div style="display: none;max-width:50%;border-spacing: " id="selectableModa_Company1">
                            <h2 class="fancybox_item_h2" data-selectable="true">Название компании</h2>
                            <p class="fancybox_item_text" data-selectable="true">Давно выяснено, что при оценке дизайна и композиции читаемый текст мешает сосредоточиться. Lorem Ipsum используют потому, что тот обеспечивает более или менее стандартное заполнение шаблона, а также реальное распределение букв и пробелов в абзацах, которое не получается при простой дубликации "Здесь ваш текст.. Здесь ваш текст.. Здесь ваш текст.</p>
                            <!-- <ul class="modal_list" data-selectable="true">
									  <li>Размеры при изготовлении стекла и зеркал принимаются в миллиметрах (мм). Размеры - 1м = 100 см = 1000мм.</li>
									  <li>Кромка стекла после резки очень острая и травмоопасная, так же стекло больше подвержено сколам и царапинам, поэтому рекомендуем обрабатывать кромки</li>
								  </ul>
								  <img class="fancybox_img" src="images/fancybox_img_1.png" alt=""> -->
                            <!--  <img src="images/img_room.png" alt="">
								  <img src="images/img_room.png" alt=""> -->
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section>
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="glass_door">
                            <h2>СТЕКЛЯННЫЕ ДВЕРИ (РАСПАШНЫЕ И РАЗДВИЖНЫЕ)</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="glass_door_items d-flex">
                            <img src="images/door_img_up.png" alt="">
                            <div class="glass_door_item">
                                <p>Качественная дверь - залог герметичности и долговечности в эксплуатации душевых кабин. Мы делаем двери из закаленного стекла, с толщиной от 8мм и выше, а ход двери обеспечивает надежная фурнитура из латунных сплавов.</p>
                                <ul>
                                    <li>Травмобезопасность и устойчивость к нагрузкам.</li>
                                    <li>Минимум металла. Безрамная конструкция</li>
                                </ul>
                                <ul>
                                    <li>Олеофобное покрытие, триплекс и другие виды обработки</li>
                                    <li>Герметизация двери и фиксация в положении 0 без стопора.</li>
                                </ul>
                                <a href="#">Заказать</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="glass_door">
                            <h2>ПРЯМЫЕ, УГЛОВЫЕ И ФИГУРНЫЕ ПЕРЕГОРОДКИ</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="glass_door_items_down d-flex">
                            <div class="glass_door_item_down">
                                <p>Перегородки и ограждения в душевую кабину стало модно делать не просто так. В основном их ценят за надежность, вариативность и эстетику, что готовой кабинки получить невозможно. Сегодня, это плавно растущий тренд, частью которого мы и предлагаем стать Вам.</p>
                                <ul>
                                    <li>Толстые, каленые стекла от 8мм с различными покрытиями и обработками</li>
                                    <li>Крепление стекла в профиль или на коннектора (точки). Минимум металла.</li>
                                </ul>
                                <ul>
                                    <li>Срок эсплуатации, по новой технологии производства - не ограничен.</li>
                                    <li>Полностью индивидуальный подход. Мы подгоним изделие под Ваш ремонт, а не наоборот.</li>
                                </ul>
                            </div>
                            <img src="images/door_img_up.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="call_back">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="request_call_back">
                            <h2>мы можем вам помочь</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="help_glaas_type d-flex">
                            <div class="help_glass_items">
                                <img src="images/glaas_type1.png" alt="">
                                <p>ОБЫЧНОЕ</p>
                            </div>
                            <div class="help_glass_items">
                                <img src="images/glass3.png" alt="">
                                <p>ОБЫЧНОЕ</p>
                            </div>
                            <div class="help_glass_items">
                                <img src="images/glass4.png" alt="">
                                <p>ОБЫЧНОЕ</p>
                            </div>
                            <div class="help_glass_items">
                                <img src="images/glass5.png" alt="">
                                <p>ОБЫЧНОЕ</p>
                            </div>
                            <div class="help_glass_items">
                                <img src="images/glaas6.png" alt="">
                                <p>ОБЫЧНОЕ</p>
                            </div>
                        </div>
                        <div class="button_next">
                            <a href="#">Далее</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <div id="3" data-hash="three">
        <section>
            <div id="log" class="bg_sections1_page2 Glasses_page d-flex b center-block">
                <div id="log" class="bg-1_page_showers Glasses_page1">
                    <!-- <a href="#">Калькулятор стоимости простых изделий</a> -->
                </div>
                <div class="bg-2_page_showers Glasses_page2">
                    <h2>зеркала на заказ с различной обработкой</h2>
                    <span>Невероятная красота</span>
                    <img src="images/squad_smaler.png" alt="">
                    <span> Швейцарское качество</span><br>

                    <span>Геометрический перфекционизм</span>
                    <h3></h3>
                    <a href="#win2">вызвать замерщика</a>
                </div>
                <div class="bg-3_pages_howers Glasses_page3">
                    <!-- <a href="#">Бесплатная консультация по телефону
</a> -->
                </div>
            </div>
        </section>
        <section>
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="stairs_and_flooring">
                            <h2>галерея работ</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="stairs_and_flooring_buttons d-flex">
                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" data-toggle="tab" href="#page3_home" role="tab" aria-controls="home">Зеркала на заказ</a>
                                    <p class="stairs_and_flooring_text">От 26100 руб. <br>
                                        6-8 дней</p>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#page3_home_1" role="tab" aria-controls="option">Зеркальное панно</a>
                                    <p class="stairs_and_flooring_text">От 26100 руб. <br>
                                        6-8 дней</p>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#page3_profile" role="tab" aria-controls="profile">Оптовые заказы</a>
                                    <p class="stairs_and_flooring_text">От 26100 руб. <br>
                                        6-8 дней</p>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#page3_messages" role="tab" aria-controls="messages">Эксклюзив решения</a>
                                    <p class="stairs_and_flooring_text">От 26100 руб. <br>
                                        6-8 дней</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="tab-content">
                    <div class="tab-pane active" id="page3_home" role="tabpanel">
                        <a data-fancybox="gallery_Glasses" href="images/Glasses/1/1.jpg">
                            <div class="img_items_stairs">
                                <img src="images/Glasses/1/1.jpg" alt="1">
                                <p></p>
                            </div>
                        </a>
                        <a data-fancybox="gallery_Glasses" href="images/Glasses/1/2.jpg">
                            <div class="img_items_stairs">
                                <img src="images/Glasses/1/2.jpg" alt="1">
                                <p></p>
                            </div>
                        </a>
                        <a data-fancybox="gallery_Glasses" href="images/Glasses/1/3.JPG">
                            <div class="img_items_stairs">
                                <img src="images/Glasses/1/3.JPG" alt="1">
                                <p></p>
                            </div>
                        </a>
                        <a data-fancybox="gallery_Glasses" href="images/Glasses/1/4.jpg">
                            <div class="img_items_stairs">
                                <img src="images/Glasses/1/4.jpg" alt="1">
                                <p></p>
                            </div>
                        </a>
                        <a data-fancybox="gallery_Glasses" href="images/Glasses/1/5.jpg">
                            <div class="img_items_stairs">
                                <img src="images/Glasses/1/5.jpg" alt="1">
                                <p></p>
                            </div>
                        </a>
                        <a data-fancybox="gallery_Glasses" href="images/Glasses/1/6.jpg">
                            <div class="img_items_stairs">
                                <img src="images/Glasses/1/6.jpg" alt="1">
                                <p></p>
                            </div>
                        </a>
                        <a data-fancybox="gallery_Glasses" href="images/Glasses/1/7.jpg">
                            <div class="img_items_stairs">
                                <img src="images/Glasses/1/7.jpg" alt="1">
                                <p></p>
                            </div>
                        </a>
                        <a data-fancybox="gallery_Glasses" href="images/Glasses/1/8.jpg">
                            <div class="img_items_stairs">
                                <img src="images/Glasses/1/8.jpg" alt="1">
                                <p></p>
                            </div>
                        </a>
                        <a data-fancybox="gallery_Glasses" href="images/Glasses/1/9.jpg">
                            <div class="img_items_stairs">
                                <img src="images/Glasses/1/9.jpg" alt="1">
                                <p></p>
                            </div>
                        </a>
                        <a data-fancybox="gallery_Glasses" href="images/Glasses/1/10.jpg">
                            <div class="img_items_stairs">
                                <img src="images/Glasses/1/10.jpg" alt="1">
                                <p></p>
                            </div>
                        </a>
                    </div>
                    <div class="tab-pane" id="page3_home_1" role="tabpanel">
                        <a data-fancybox="gallery_Glasses1" href="images/Glasses/2/1.jpg">
                            <div class="img_items_stairs">
                                <img src="images/Glasses/2/1.jpg" alt="1">
                                <p></p>
                            </div>
                        </a>
                        <a data-fancybox="gallery_Glasses1" href="images/Glasses/2/2.jpg">
                            <div class="img_items_stairs">
                                <img src="images/Glasses/2/1.jpg" alt="1">
                                <p></p>
                            </div>
                        </a>
                        <a data-fancybox="gallery_Glasses1" href="images/Glasses/2/3.jpg">
                            <div class="img_items_stairs">
                                <img src="images/Glasses/2/3.jpg" alt="1">
                                <p></p>
                            </div>
                        </a>
                        <a data-fancybox="gallery_Glasses1" href="images/Glasses/2/4.jpg">
                            <div class="img_items_stairs">
                                <img src="images/Glasses/2/4.jpg" alt="1">
                                <p></p>
                            </div>
                        </a>
                        <a data-fancybox="gallery_Glasses1" href="images/Glasses/2/5.jpg">
                            <div class="img_items_stairs">
                                <img src="images/Glasses/2/5.jpg" alt="1">
                                <p></p>
                            </div>
                        </a>
                        <a data-fancybox="gallery_Glasses1" href="images/Glasses/2/6.jpg">
                            <div class="img_items_stairs">
                                <img src="images/Glasses/2/6.jpg" alt="1">
                                <p></p>
                            </div>
                        </a>
                        <a data-fancybox="gallery_Glasses1" href="images/Glasses/2/7.jpg">
                            <div class="img_items_stairs">
                                <img src="images/Glasses/2/7.jpg" alt="1">
                                <p></p>
                            </div>
                        </a>
                        <a data-fancybox="gallery_Glasses1" href="images/Glasses/2/8.jpg">
                            <div class="img_items_stairs">
                                <img src="images/Glasses/2/8.jpg" alt="1">
                                <p></p>
                            </div>
                        </a>
                        <a data-fancybox="gallery_Glasses1" href="images/Glasses/2/9.jpg">
                            <div class="img_items_stairs">
                                <img src="images/Glasses/2/9.jpg" alt="1">
                                <p></p>
                            </div>
                        </a>
                        <a data-fancybox="gallery_Glasses1" href="images/Glasses/2/10.jpg">
                            <div class="img_items_stairs">
                                <img src="images/Glasses/2/1.jpg" alt="1">
                                <p></p>
                            </div>
                        </a>
                        <a data-fancybox="gallery_Glasses1" href="images/Glasses/2/10.jpg">
                            <div class="img_items_stairs">
                                <img src="images/Glasses/2/10.jpg" alt="1">
                                <p></p>
                            </div>
                        </a>
                    </div>
                    <div class="tab-pane" id="page3_profile" role="tabpanel">
                        <a data-fancybox="gallery_Glasses2" href="images/Glasses/3/1.jpg">
                            <div class="img_items_stairs">
                                <img src="images/Glasses/3/1.jpg" alt="1">
                                <p></p>
                            </div>
                        </a>
                        <a data-fancybox="gallery_Glasses2" href="images/Glasses/3/2.jpg">
                            <div class="img_items_stairs">
                                <img src="images/Glasses/3/2.jpg" alt="1">
                                <p></p>
                            </div>
                        </a>
                        <a data-fancybox="gallery_Glasses2" href="images/Glasses/3/3.jpg">
                            <div class="img_items_stairs">
                                <img src="images/Glasses/3/3.jpg" alt="1">
                                <p></p>
                            </div>
                        </a>
                        <a data-fancybox="gallery_Glasses2" href="images/Glasses/3/4.jpg">
                            <div class="img_items_stairs">
                                <img src="images/Glasses/3/4.jpg" alt="1">
                                <p></p>
                            </div>
                        </a>
                        <a data-fancybox="gallery_Glasses2" href="images/Glasses/3/5.jpg">
                            <div class="img_items_stairs">
                                <img src="images/Glasses/3/5.jpg" alt="1">
                                <p></p>
                            </div>
                        </a>
                        <a data-fancybox="gallery_Glasses2" href="images/Glasses/3/6.jpg">
                            <div class="img_items_stairs">
                                <img src="images/Glasses/3/6.jpg" alt="1">
                                <p></p>
                            </div>
                        </a>
                        <a data-fancybox="gallery_Glasses2" href="images/Glasses/3/7.jpg">
                            <div class="img_items_stairs">
                                <img src="images/Glasses/3/7.jpg" alt="1">
                                <p></p>
                            </div>
                        </a>
                        <a data-fancybox="gallery_Glasses2" href="images/Glasses/3/8.jpg">
                            <div class="img_items_stairs">
                                <img src="images/Glasses/3/8.jpg" alt="1">
                                <p></p>
                            </div>
                        </a>
                        <a data-fancybox="gallery_Glasses2" href="images/Glasses/3/9.jpg">
                            <div class="img_items_stairs">
                                <img src="images/Glasses/3/9.jpg" alt="1">
                                <p></p>
                            </div>
                        </a>
                        <a data-fancybox="gallery_Glasses2" href="images/Glasses/3/10.jpg">
                            <div class="img_items_stairs">
                                <img src="images/Glasses/3/10.jpg" alt="1">
                                <p></p>
                            </div>
                        </a>
                    </div>
                    <div class="tab-pane" id="page3_messages" role="tabpanel">
                        <a data-fancybox="gallery_Glasses3" href="images/Glasses/4/1.jpg">
                            <div class="img_items_stairs">
                                <img src="images/Glasses/4/1.jpg" alt="1">
                                <p></p>
                            </div>
                        </a>
                        <a data-fancybox="gallery_Glasses3" href="images/Glasses/4/2.jpg">
                            <div class="img_items_stairs">
                                <img src="images/Glasses/4/2.jpg" alt="1">
                                <p></p>
                            </div>
                        </a>
                        <a data-fancybox="gallery_Glasses3" href="images/Glasses/4/3.jpg">
                            <div class="img_items_stairs">
                                <img src="images/Glasses/4/3.jpg" alt="1">
                                <p></p>
                            </div>
                        </a>
                        <a data-fancybox="gallery_Glasses3" href="images/Glasses/4/4.jpg">
                            <div class="img_items_stairs">
                                <img src="images/Glasses/4/4.jpg" alt="1">
                                <p></p>
                            </div>
                        </a>
                        <a data-fancybox="gallery_Glasses3" href="images/Glasses/4/5.jpg">
                            <div class="img_items_stairs">
                                <img src="images/Glasses/4/5.jpg" alt="1">
                                <p></p>
                            </div>
                        </a>
                        <a data-fancybox="gallery_Glasses3" href="images/Glasses/4/6.jpg">
                            <div class="img_items_stairs">
                                <img src="images/Glasses/4/6.jpg" alt="1">
                                <p></p>
                            </div>
                        </a>
                        <a data-fancybox="gallery_Glasses3" href="images/Glasses/4/7.jpg">
                            <div class="img_items_stairs">
                                <img src="images/Glasses/4/7.jpg" alt="1">
                                <p></p>
                            </div>
                        </a>
                        <a data-fancybox="gallery_Glasses3" href="images/Glasses/4/8.JPG">
                            <div class="img_items_stairs">
                                <img src="images/Glasses/4/8.JPG" alt="1">
                                <p></p>
                            </div>
                        </a>
                        <a data-fancybox="gallery_Glasses3" href="images/Glasses/4/9.jpg">
                            <div class="img_items_stairs">
                                <img src="images/Glasses/4/9.jpg" alt="1">
                                <p></p>
                            </div>
                        </a>
                        <a data-fancybox="gallery_Glasses3" href="images/Glasses/4/10.jpg">
                            <div class="img_items_stairs">
                                <img src="images/Glasses/4/10.jpg" alt="1">
                                <p></p>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </section>
        <section id="glass_reliability">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="glass_reliability">
                            <h2 class="">наше видео</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="video_our">
                            <iframe src="" frameborder="0"></iframe>
                            <iframe src="" frameborder="0"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section>
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="glass_door">
                            <h2>СТЕКЛЯННЫЕ ДВЕРИ (РАСПАШНЫЕ И РАЗДВИЖНЫЕ)</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="glass_door_items d-flex">
                            <img src="images/door_img_up.png" alt="">
                            <div class="glass_door_item">
                                <p>Качественная дверь - залог герметичности и долговечности в эксплуатации душевых кабин. Мы делаем двери из закаленного стекла, с толщиной от 8мм и выше, а ход двери обеспечивает надежная фурнитура из латунных сплавов.</p>
                                <ul>
                                    <li>Травмобезопасность и устойчивость к нагрузкам.</li>
                                    <li>Минимум металла. Безрамная конструкция</li>
                                </ul>
                                <ul>
                                    <li>Олеофобное покрытие, триплекс и другие виды обработки</li>
                                    <li>Герметизация двери и фиксация в положении 0 без стопора.</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="link-calc">
            <div class="container">
                <div class="row">
                    <div class="col-lg-9">
                        <div class="orenge_block_calc">
                            <h2>мы поможем вам с расчетами</h2>
                            <a class="buttons_calc_glasses" href="#">калькулятор</a>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="iphone_calc">
                            <img src="images/iphone_7.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section>
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="glass_door">
                            <h2>ПРЯМЫЕ, УГЛОВЫЕ И ФИГУРНЫЕ ПЕРЕГОРОДКИ</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="glass_door_items_down d-flex">
                            <div class="glass_door_item_down Glases_page_door">
                                <p>Перегородки и ограждения в душевую кабину стало модно делать не просто так. В основном их ценят за надежность, вариативность и эстетику, что готовой кабинки получить невозможно. Сегодня, это плавно растущий тренд, частью которого мы и предлагаем стать Вам.</p>
                                <ul>
                                    <li>Толстые, каленые стекла от 8мм с различными покрытиями и обработками</li>
                                    <li>Крепление стекла в профиль или на коннектора (точки). Минимум металла.</li>
                                </ul>
                                <ul>
                                    <li>Срок эсплуатации, по новой технологии производства - не ограничен.</li>
                                    <li>Полностью индивидуальный подход. Мы подгоним изделие под Ваш ремонт, а не наоборот.</li>
                                </ul>
                            </div>
                            <img src="images/door_img_up.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="fastener">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="type_fastener">
                            <h2>типы крепежа</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="shower_type_items d-flex">
                            <div class="shower_type_item-left fastener_shower_glass">
                                <p>ДУШЕВОЕ ОГРАЖДЕНИЕ VEDITEX</p>
                                <ul>
                                    <li>Срок службы неограничен. Гарантия 25 лет.</li>
                                    <li>Компактно, эстетично, увеличивает пространство, сохраняет свет.</li>
                                    <li>Крайне надежно. Безопасно для детей.</li>
                                    <li>Изделие под инивидуальный заказ</li>
                                    <li>Используем немецкую, швейцарскую и российскую фурнитуру.</li>
                                    <li>Стоит не так дешево</li>
                                </ul>
                            </div>
                            <img class="glasses_img_fastener1" src="images/first_fastener.png" alt="">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="shower_type_items d-flex">
                            <img class="glasses_img_fastener2" src="images/second_fastener.png" alt="">
                            <div class="shower_type_item-right fastener_shower_glass2">
                                <p>ДУШЕВОЕ ОГРАЖДЕНИЕ VEDITEX</p>
                                <ul>
                                    <li>Срок службы неограничен. Гарантия 25 лет.</li>
                                    <li>Компактно, эстетично, увеличивает пространство, сохраняет свет.</li>
                                    <li>Крайне надежно. Безопасно для детей.</li>
                                    <li>Изделие под инивидуальный заказ</li>
                                    <li>Используем немецкую, швейцарскую и российскую фурнитуру.</li>
                                    <li>Стоит не так дешево</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section>
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="glass_door">
                            <h2>СТЕКЛЯННЫЕ ДВЕРИ (РАСПАШНЫЕ И РАЗДВИЖНЫЕ)</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="glass_door_items Glasses_pages_doors d-flex">
                            <img class="glass_image_page_glass" src="images/door_img_up.png" alt="">
                            <a class="glass_door_item_buttons" href="#">бесплатная консультация</a>
                            <div class="glass_door_item">
                                <p>Зеркальное панно - это композиция, состоящая из отдельных зеркальных элементов с широкой, глубокой фаской (фацетом), благодаря которой, создается неповторимая игра света, бликов и отражений в получаемых гранях, за что панно так и ценнится. Такое изделие собирается вручную и подгоняется на станке на протяжении нескольких дней (а иногда и недель) мастерами с внушительным опытом. Помимо старой итальянской технологии сборки, мы так же делаем панно путем алмазной гравировки зеркала, что более бюджетно и имеет свои плюсы.</p>
                                <ul>
                                    <li>Ручная сборка - долго, зазоры до 2мм, сложно, дорого. Превосходный блеск.</li>
                                    <li>Гравировка - быстро, без зазоров, дешевле, но с не ровной и менее блестящей фаской.</li>
                                </ul>
                                <ul>
                                    <li>Некоторые наши цеховые мастера работают в стекольной промышленности более 32 лет!</li>
                                    <li>Индивидуальный подход. Согласовываем все детали с Вами, даже те, о которых другие молчат</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section>
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="advantages">
                            <h2>наши преемущества</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="advantages_items">
                            <img src="images/Money.png" alt="">
                            <p class="cursor_text">Давно выяснено, что при оценке дизайна и композиции читаемый текст мешает сосредоточиться. Lorem Ipsum используют потому, что тот обеспечивает более или менее стандартное заполнение шаблона</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="advantages_items">
                            <img src="images/Door.png" alt="">
                            <p class="cursor_text">Давно выяснено, что при оценке дизайна и композиции читаемый текст мешает сосредоточиться. Lorem Ipsum используют потому, что тот обеспечивает более или менее стандартное заполнение шаблона</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="advantages_items">
                            <img src="images/Pro.png" alt="">
                            <p class="cursor_text">Давно выяснено, что при оценке дизайна и композиции читаемый текст мешает сосредоточиться. Lorem Ipsum используют потому, что тот обеспечивает более или менее стандартное заполнение шаблона</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="advantages_items">
                            <img src="images/Diamond.png" alt="">
                            <p class="cursor_text">Давно выяснено, что при оценке дизайна и композиции читаемый текст мешает сосредоточиться. Lorem Ipsum используют потому, что тот обеспечивает более или менее стандартное заполнение шаблона</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="manufacture">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="hardware_manufacture">
                            <h2>производители фурнитуры</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <a data-fancybox data-src="#selectableModa_Company1" href="javascript:;" class="">
                            <div class="manufacture_items">
                                <img src="images/proizvoditeli/proizavoditel1.png" alt="">
                                <p>Название компании, Россия</p>
                            </div>
                        </a>
                        <div style="display: none;max-width:50%;border-spacing: " id="selectableModa_Company1">
                            <h2 class="fancybox_item_h2" data-selectable="true">Название компании</h2>
                            <p class="fancybox_item_text" data-selectable="true">Давно выяснено, что при оценке дизайна и композиции читаемый текст мешает сосредоточиться. Lorem Ipsum используют потому, что тот обеспечивает более или менее стандартное заполнение шаблона, а также реальное распределение букв и пробелов в абзацах, которое не получается при простой дубликации "Здесь ваш текст.. Здесь ваш текст.. Здесь ваш текст.</p>
                            <!-- <ul class="modal_list" data-selectable="true">
									  <li>Размеры при изготовлении стекла и зеркал принимаются в миллиметрах (мм). Размеры - 1м = 100 см = 1000мм.</li>
									  <li>Кромка стекла после резки очень острая и травмоопасная, так же стекло больше подвержено сколам и царапинам, поэтому рекомендуем обрабатывать кромки</li>
								  </ul>
								  <img class="fancybox_img" src="images/fancybox_img_1.png" alt=""> -->
                            <!--  <img src="images/img_room.png" alt="">
								  <img src="images/img_room.png" alt=""> -->
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <a data-fancybox data-src="#selectableModa_Company1" href="javascript:;" class="">
                            <div class="manufacture_items">
                                <img src="images/proizvoditeli/proizavoditel2.png" alt="">
                                <p>Название компании, Россия</p>
                            </div>
                        </a>
                        <div style="display: none;max-width:50%;border-spacing: " id="selectableModa_Company1">
                            <h2 class="fancybox_item_h2" data-selectable="true">Название компании</h2>
                            <p class="fancybox_item_text" data-selectable="true">Давно выяснено, что при оценке дизайна и композиции читаемый текст мешает сосредоточиться. Lorem Ipsum используют потому, что тот обеспечивает более или менее стандартное заполнение шаблона, а также реальное распределение букв и пробелов в абзацах, которое не получается при простой дубликации "Здесь ваш текст.. Здесь ваш текст.. Здесь ваш текст.</p>
                            <!-- <ul class="modal_list" data-selectable="true">
									  <li>Размеры при изготовлении стекла и зеркал принимаются в миллиметрах (мм). Размеры - 1м = 100 см = 1000мм.</li>
									  <li>Кромка стекла после резки очень острая и травмоопасная, так же стекло больше подвержено сколам и царапинам, поэтому рекомендуем обрабатывать кромки</li>
								  </ul>
								  <img class="fancybox_img" src="images/fancybox_img_1.png" alt=""> -->
                            <!--  <img src="images/img_room.png" alt="">
								  <img src="images/img_room.png" alt=""> -->
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <a data-fancybox data-src="#selectableModa_Company1" href="javascript:;" class="">
                            <div class="manufacture_items">
                                <img src="images/proizvoditeli/proizavoditel3.png" alt="">
                                <p>Название компании, Россия</p>
                            </div>
                        </a>
                        <div style="display: none;max-width:50%;border-spacing: " id="selectableModa_Company1">
                            <h2 class="fancybox_item_h2" data-selectable="true">Название компании</h2>
                            <p class="fancybox_item_text" data-selectable="true">Давно выяснено, что при оценке дизайна и композиции читаемый текст мешает сосредоточиться. Lorem Ipsum используют потому, что тот обеспечивает более или менее стандартное заполнение шаблона, а также реальное распределение букв и пробелов в абзацах, которое не получается при простой дубликации "Здесь ваш текст.. Здесь ваш текст.. Здесь ваш текст.</p>
                            <!-- <ul class="modal_list" data-selectable="true">
									  <li>Размеры при изготовлении стекла и зеркал принимаются в миллиметрах (мм). Размеры - 1м = 100 см = 1000мм.</li>
									  <li>Кромка стекла после резки очень острая и травмоопасная, так же стекло больше подвержено сколам и царапинам, поэтому рекомендуем обрабатывать кромки</li>
								  </ul>
								  <img class="fancybox_img" src="images/fancybox_img_1.png" alt=""> -->
                            <!--  <img src="images/img_room.png" alt="">
								  <img src="images/img_room.png" alt=""> -->
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <a data-fancybox data-src="#selectableModa_Company1" href="javascript:;" class="">
                            <div class="manufacture_items">
                                <img src="images/proizvoditeli/proizavoditel4.png" alt="">
                                <p>Название компании, Россия</p>
                            </div>
                        </a>
                        <div style="display: none;max-width:50%;border-spacing: " id="selectableModa_Company1">
                            <h2 class="fancybox_item_h2" data-selectable="true">Название компании</h2>
                            <p class="fancybox_item_text" data-selectable="true">Давно выяснено, что при оценке дизайна и композиции читаемый текст мешает сосредоточиться. Lorem Ipsum используют потому, что тот обеспечивает более или менее стандартное заполнение шаблона, а также реальное распределение букв и пробелов в абзацах, которое не получается при простой дубликации "Здесь ваш текст.. Здесь ваш текст.. Здесь ваш текст.</p>
                            <!-- <ul class="modal_list" data-selectable="true">
									  <li>Размеры при изготовлении стекла и зеркал принимаются в миллиметрах (мм). Размеры - 1м = 100 см = 1000мм.</li>
									  <li>Кромка стекла после резки очень острая и травмоопасная, так же стекло больше подвержено сколам и царапинам, поэтому рекомендуем обрабатывать кромки</li>
								  </ul>
								  <img class="fancybox_img" src="images/fancybox_img_1.png" alt=""> -->
                            <!--  <img src="images/img_room.png" alt="">
								  <img src="images/img_room.png" alt=""> -->
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="call_back">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="request_call_back">
                            <h2>мы можем вам помочь</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="help_glaas_type d-flex">
                            <div class="help_glass_items">
                                <img src="images/glaas_type1.png" alt="">
                                <p>ОБЫЧНОЕ</p>
                            </div>
                            <div class="help_glass_items">
                                <img src="images/glass3.png" alt="">
                                <p>ОБЫЧНОЕ</p>
                            </div>
                            <div class="help_glass_items">
                                <img src="images/glass4.png" alt="">
                                <p>ОБЫЧНОЕ</p>
                            </div>
                            <div class="help_glass_items">
                                <img src="images/glass5.png" alt="">
                                <p>ОБЫЧНОЕ</p>
                            </div>
                            <div class="help_glass_items">
                                <img src="images/glaas6.png" alt="">
                                <p>ОБЫЧНОЕ</p>
                            </div>
                        </div>
                        <div class="button_next">
                            <a href="#">Далее</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <div id="4" data-hash="for">
        <section>
            <div id="log" class="bg_sections1_page2 bulckheads d-flex b center-block">
                <div id="log" class="bg-1_page_showers bulckheads1">
                    <!-- <a href="#">Калькулятор стоимости простых изделий</a> -->
                </div>
                <div class="bg-2_page_showers bulckheads2">
                    <h2>перегородки и двери из стекла на заказ</h2>
                    <span>Красиво</span>
                    <img src="images/squad_smaler.png" alt="">
                    <span>Герметично</span>
                    <img src="images/squad_smaler.png" alt="">
                    <span>Надежно</span>
                    <h3>индивидуальное изготовление</h3>
                    <a href="#win2">вызвать замерщика</a>
                </div>
                <div class="bg-3_pages_howers bulckheads3">
                    <!-- <a href="#">Бесплатная консультация по телефону
</a> -->
                </div>
            </div>
        </section>
        <section>
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="stairs_and_flooring">
                            <h2>галерея работ</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="stairs_and_flooring_buttons d-flex">
                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <li class="nav-item ">
                                    <a class="nav-link active" data-toggle="tab" href="#page4_home" role="tab" aria-controls="home">Распашные двери</a>
                                    <p class="stairs_and_flooring_text">От 26100 руб. <br>
                                        6-8 дней</p>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#page4_profile" role="tab" aria-controls="profile">Перегородки</a>
                                    <p class="stairs_and_flooring_text">От 26100 руб. <br>
                                        6-8 дней</p>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#page4_messages" role="tab" aria-controls="messages">Маятниковые двери</a>
                                    <p class="stairs_and_flooring_text">От 26100 руб. <br>
                                        6-8 дней</p>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#page4_settings" role="tab" aria-controls="settings">Раздвижные двери</a>
                                    <p class="stairs_and_flooring_text">От 26100 руб. <br>
                                        6-8 дней</p>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#page4_settings1" role="tab" aria-controls="settings">Ограждения</a>
                                    <p class="stairs_and_flooring_text">От 26100 руб. <br>
                                        6-8 дней</p>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#page4_settings2" role="tab" aria-controls="settings">Двери в коробках</a>
                                    <p class="stairs_and_flooring_text">От 26100 руб. <br>
                                        6-8 дней</p>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#page4_settings3" role="tab" aria-controls="settings">Эксклюзивные решения</a>
                                    <p class="stairs_and_flooring_text">От 26100 руб. <br>
                                        6-8 дней</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="tab-content">
                    <div class="tab-pane active" id="page4_home" role="tabpanel">
                        <a data-fancybox="gallery_Door" href="images/Door/1/1.jpg">
                            <div class="img_items_stairs">
                                <img src="images/Door/1/1.jpg" alt="1">
                                <p></p>
                            </div>
                        </a>
                        <a data-fancybox="gallery_Door" href="images/Door/1/2.jpg">
                            <div class="img_items_stairs">
                                <img src="images/Door/1/2.jpg" alt="1">
                                <p></p>
                            </div>
                        </a>
                        <a data-fancybox="gallery_Door" href="images/Door/1/3.jpg">
                            <div class="img_items_stairs">
                                <img src="images/Door/1/3.jpg" alt="1">
                                <p></p>
                            </div>
                        </a>
                        <a data-fancybox="gallery_Door" href="images/Door/1/4.jpg">
                            <div class="img_items_stairs">
                                <img src="images/Door/1/4.jpg" alt="1">
                                <p></p>
                            </div>
                        </a>
                        <a data-fancybox="gallery_Door" href="images/Door/1/5.jpg">
                            <div class="img_items_stairs">
                                <img src="images/Door/1/5.jpg" alt="1">
                                <p></p>
                            </div>
                        </a>
                        <a data-fancybox="gallery_Door" href="images/Door/1/6.jpg">
                            <div class="img_items_stairs">
                                <img src="images/Door/1/6.jpg" alt="1">
                                <p></p>
                            </div>
                        </a>
                        <a data-fancybox="gallery_Door" href="images/Door/1/7.jpg">
                            <div class="img_items_stairs">
                                <img src="images/Door/1/7.jpg" alt="1">
                                <p></p>
                            </div>
                        </a>
                        <a data-fancybox="gallery_Door" href="images/Door/1/8.jpg">
                            <div class="img_items_stairs">
                                <img src="images/Door/1/8.jpg" alt="1">
                                <p></p>
                            </div>
                        </a>
                        <a data-fancybox="gallery_Door" href="images/Door/1/9.jpg">
                            <div class="img_items_stairs">
                                <img src="images/Door/1/9.jpg" alt="1">
                                <p></p>
                            </div>
                        </a>
                        <a data-fancybox="gallery_Door" href="images/Door/1/10.jpg">
                            <div class="img_items_stairs">
                                <img src="images/Door/1/10.jpg" alt="1">
                                <p></p>
                            </div>
                        </a>
                    </div>
                    <div class="tab-pane" id="page4_profile" role="tabpanel">
                        <a data-fancybox="gallery_Door1" href="images/Door/2/1.jpg">
                            <div class="img_items_stairs">
                                <img src="images/Door/2/1.jpg" alt="1">
                                <p></p>
                            </div>
                        </a>
                        <a data-fancybox="gallery_Door1" href="images/Door/2/2.jpg">
                            <div class="img_items_stairs">
                                <img src="images/Door/2/2.jpg" alt="1">
                                <p></p>
                            </div>
                        </a>
                        <a data-fancybox="gallery_Door1" href="images/Door/2/3.jpg">
                            <div class="img_items_stairs">
                                <img src="images/Door/2/3.jpg" alt="1">
                                <p></p>
                            </div>
                        </a>
                        <a data-fancybox="gallery_Door1" href="images/Door/2/4.jpg">
                            <div class="img_items_stairs">
                                <img src="images/Door/2/4.jpg" alt="1">
                                <p></p>
                            </div>
                        </a>
                        <a data-fancybox="gallery_Door1" href="images/Door/2/5.jpg">
                            <div class="img_items_stairs">
                                <img src="images/Door/2/5.jpg" alt="1">
                                <p></p>
                            </div>
                        </a>
                        <a data-fancybox="gallery_Door1" href="images/Door/2/6.jpg">
                            <div class="img_items_stairs">
                                <img src="images/Door/2/6.jpg" alt="1">
                                <p></p>
                            </div>
                        </a>
                        <a data-fancybox="gallery_Door1" href="images/Door/2/7.jpg">
                            <div class="img_items_stairs">
                                <img src="images/Door/2/7.jpg" alt="1">
                                <p></p>
                            </div>
                        </a>
                        <a data-fancybox="gallery_Door1" href="images/Door/2/8.jpg">
                            <div class="img_items_stairs">
                                <img src="images/Door/2/8.jpg" alt="1">
                                <p></p>
                            </div>
                        </a>
                        <a data-fancybox="gallery_Door1" href="images/Door/2/9.jpg">
                            <div class="img_items_stairs">
                                <img src="images/Door/2/9.jpg" alt="1">
                                <p></p>
                            </div>
                        </a>
                        <a data-fancybox="gallery_Door1" href="images/Door/2/10.jpg">
                            <div class="img_items_stairs">
                                <img src="images/Door/2/10.jpg" alt="1">
                                <p></p>
                            </div>
                        </a>
                    </div>
                    <div class="tab-pane" id="page4_messages" role="tabpanel">
                        <a data-fancybox="gallery_Door2" href="images/Door/3/1.jpg">
                            <div class="img_items_stairs">
                                <img src="images/Door/3/1.jpg" alt="1">
                                <p></p>
                            </div>
                        </a>
                        <a data-fancybox="gallery_Door2" href="images/Door/3/3.jpg">
                            <div class="img_items_stairs">
                                <img src="images/Door/3/3.jpg" alt="1">
                                <p></p>
                            </div>
                        </a>
                        <a data-fancybox="gallery_Door2" href="images/Door/3/4.jpg">
                            <div class="img_items_stairs">
                                <img src="images/Door/3/4.jpg" alt="1">
                                <p></p>
                            </div>
                        </a>
                        <a data-fancybox="gallery_Door2" href="images/Door/3/5.jpg">
                            <div class="img_items_stairs">
                                <img src="images/Door/3/5.jpg" alt="1">
                                <p></p>
                            </div>
                        </a>
                        <a data-fancybox="gallery_Door2" href="images/Door/3/6.jpg">
                            <div class="img_items_stairs">
                                <img src="images/Door/3/6.jpg" alt="1">
                                <p></p>
                            </div>
                        </a>
                        <a data-fancybox="gallery_Door2" href="images/Door/3/7.jpg">
                            <div class="img_items_stairs">
                                <img src="images/Door/3/1.jpg" alt="1">
                                <p></p>
                            </div>
                        </a>
                        <a data-fancybox="gallery_Door2" href="images/Door/3/8.jpg">
                            <div class="img_items_stairs">
                                <img src="images/Door/3/8.jpg" alt="1">
                                <p></p>
                            </div>
                        </a>
                        <a data-fancybox="gallery_Door2" href="images/Door/3/9.jpg">
                            <div class="img_items_stairs">
                                <img src="images/Door/3/9.jpg" alt="1">
                                <p></p>
                            </div>
                        </a>
                        <a data-fancybox="gallery_Door2" href="images/Door/3/10.jpg">
                            <div class="img_items_stairs">
                                <img src="images/Door/3/10.jpg" alt="1">
                                <p></p>
                            </div>
                        </a>
                    </div>
                    <div class="tab-pane" id="page4_settings" role="tabpanel">
                        <a data-fancybox="gallery_Door3" href="images/Door/4/1.jpg">
                            <div class="img_items_stairs">
                                <img src="images/Door/4/1.jpg" alt="1">
                                <p></p>
                            </div>
                        </a>
                        <a data-fancybox="gallery_Door3" href="images/Door/4/1.jpg">
                            <div class="img_items_stairs">
                                <img src="images/Door/4/1.jpg" alt="1">
                                <p></p>
                            </div>
                        </a>
                        <a data-fancybox="gallery_Door3" href="images/Door/4/1.jpg">
                            <div class="img_items_stairs">
                                <img src="images/Door/4/2.jpg" alt="1">
                                <p></p>
                            </div>
                        </a>
                        <a data-fancybox="gallery_Door3" href="images/Door/4/3.jpg">
                            <div class="img_items_stairs">
                                <img src="images/Door/4/3.jpg" alt="1">
                                <p></p>
                            </div>
                        </a>
                        <a data-fancybox="gallery_Door3" href="images/Door/4/6.jpg">
                            <div class="img_items_stairs">
                                <img src="images/Door/4/6.jpg" alt="1">
                                <p></p>
                            </div>
                        </a>
                        <a data-fancybox="gallery_Door3" href="images/Door/4/7.jpg">
                            <div class="img_items_stairs">
                                <img src="images/Door/4/7.jpg" alt="1">
                                <p></p>
                            </div>
                        </a>
                        <a data-fancybox="gallery_Door3" href="images/Door/4/8.jpg">
                            <div class="img_items_stairs">
                                <img src="images/Door/4/8.jpg" alt="1">
                                <p></p>
                            </div>
                        </a>
                        <a data-fancybox="gallery_Door3" href="images/Door/4/9.jpg">
                            <div class="img_items_stairs">
                                <img src="images/Door/4/9.jpg" alt="1">
                                <p></p>
                            </div>
                        </a>
                        <a data-fancybox="gallery_Door3" href="images/Door/4/10.jpg">
                            <div class="img_items_stairs">
                                <img src="images/Door/4/10.jpg" alt="1">
                                <p></p>
                            </div>
                        </a>

                    </div>
                    <div class="tab-pane" id="page4_settings1" role="tabpanel">
                        <a data-fancybox="gallery_Door4" href="images/Door/5/1.jpg">
                            <div class="img_items_stairs">
                                <img src="images/Door/5/1.jpg" alt="1">
                                <p></p>
                            </div>
                        </a>
                        <a data-fancybox="gallery_Door4" href="images/Door/5/2.jpg">
                            <div class="img_items_stairs">
                                <img src="images/Door/5/2.jpg" alt="1">
                                <p></p>
                            </div>
                        </a>
                        <a data-fancybox="gallery_Door4" href="images/Door/5/3.jpg">
                            <div class="img_items_stairs">
                                <img src="images/Door/5/3.jpg" alt="1">
                                <p></p>
                            </div>
                        </a>
                        <a data-fancybox="gallery_Door4" href="images/Door/5/4.jpg">
                            <div class="img_items_stairs">
                                <img src="images/Door/5/4.jpg" alt="1">
                                <p></p>
                            </div>
                        </a>
                        <a data-fancybox="gallery_Door4" href="images/Door/5/5.jpg">
                            <div class="img_items_stairs">
                                <img src="images/Door/5/5.jpg" alt="1">
                                <p></p>
                            </div>
                        </a>
                        <a data-fancybox="gallery_Door4" href="images/Door/5/6.jpg">
                            <div class="img_items_stairs">
                                <img src="images/Door/5/6.jpg" alt="1">
                                <p></p>
                            </div>
                        </a>
                        <a data-fancybox="gallery_Door4" href="images/Door/5/7.jpg">
                            <div class="img_items_stairs">
                                <img src="images/Door/5/7.jpg" alt="1">
                                <p></p>
                            </div>
                        </a>
                        <a data-fancybox="gallery_Door4" href="images/Door/5/8.jpg">
                            <div class="img_items_stairs">
                                <img src="images/Door/5/8.jpg" alt="1">
                                <p></p>
                            </div>
                        </a>
                        <a data-fancybox="gallery_Door4" href="images/Door/5/9.jpg">
                            <div class="img_items_stairs">
                                <img src="images/Door/5/9.jpg" alt="1">
                                <p></p>
                            </div>
                        </a>
                        <a data-fancybox="gallery_Door4" href="images/Door/5/1.0jpg">
                            <div class="img_items_stairs">
                                <img src="images/Door/5/10.jpg" alt="1">
                                <p></p>
                            </div>
                        </a>
                    </div>
                    <div class="tab-pane" id="page4_settings2" role="tabpanel">
                        <a data-fancybox="gallery_Door5" href="images/Door/6/1.jpg">
                            <div class="img_items_stairs">
                                <img src="images/Door/6/1.jpg" alt="1">
                                <p></p>
                            </div>
                        </a>
                        <a data-fancybox="gallery_Door5" href="images/Door/6/2.jpg">
                            <div class="img_items_stairs">
                                <img src="images/Door/6/2.jpg" alt="1">
                                <p></p>
                            </div>
                        </a>
                        <a data-fancybox="gallery_Door5" href="images/Door/6/3.jpg">
                            <div class="img_items_stairs">
                                <img src="images/Door/6/3.jpg" alt="1">
                                <p></p>
                            </div>
                        </a>
                        <a data-fancybox="gallery_Door5" href="images/Door/6/4.jpg">
                            <div class="img_items_stairs">
                                <img src="images/Door/6/4.jpg" alt="1">
                                <p></p>
                            </div>
                        </a>
                        <a data-fancybox="gallery_Door5" href="images/Door/6/5.jpg">
                            <div class="img_items_stairs">
                                <img src="images/Door/6/5.jpg" alt="1">
                                <p></p>
                            </div>
                        </a>
                        <a data-fancybox="gallery_Door5" href="images/Door/6/6.jpg">
                            <div class="img_items_stairs">
                                <img src="images/Door/6/6.jpg" alt="1">
                                <p></p>
                            </div>
                        </a>
                        <a data-fancybox="gallery_Door5" href="images/Door/6/7.jpg">
                            <div class="img_items_stairs">
                                <img src="images/Door/6/7.jpg" alt="1">
                                <p></p>
                            </div>
                        </a>
                        <a data-fancybox="gallery_Door5" href="images/Door/6/8.jpg">
                            <div class="img_items_stairs">
                                <img src="images/Door/6/8.jpg" alt="1">
                                <p></p>
                            </div>
                        </a>
                        <a data-fancybox="gallery_Door5" href="images/Door/6/9.jpg">
                            <div class="img_items_stairs">
                                <img src="images/Door/6/9.jpg" alt="1">
                                <p></p>
                            </div>
                        </a>
                        <a data-fancybox="gallery_Door5" href="images/Door/6/10.jpg">
                            <div class="img_items_stairs">
                                <img src="images/Door/6/10.jpg" alt="1">
                                <p></p>
                            </div>
                        </a>
                    </div>
                    <div class="tab-pane" id="page4_settings3" role="tabpanel">
                        <a data-fancybox="gallery_Door6" href="images/Door/7/1.jpg">
                            <div class="img_items_stairs">
                                <img src="images/Door/7/1.jpg" alt="1">
                                <p></p>
                            </div>
                        </a>
                        <a data-fancybox="gallery_Door6" href="images/Door/7/2.jpg">
                            <div class="img_items_stairs">
                                <img src="images/Door/7/2.jpg" alt="1">
                                <p></p>
                            </div>
                        </a>
                        <a data-fancybox="gallery_Door6" href="images/Door/7/3.jpg">
                            <div class="img_items_stairs">
                                <img src="images/Door/7/3.jpg" alt="1">
                                <p></p>
                            </div>
                        </a>
                        <a data-fancybox="gallery_Door6" href="images/Door/7/4.jpg">
                            <div class="img_items_stairs">
                                <img src="images/Door/7/4.jpg" alt="1">
                                <p></p>
                            </div>
                        </a>
                        <a data-fancybox="gallery_Door6" href="images/Door/7/5.jpg">
                            <div class="img_items_stairs">
                                <img src="images/Door/7/5.jpg" alt="1">
                                <p></p>
                            </div>
                        </a>
                        <a data-fancybox="gallery_Door6" href="images/Door/7/6.jpg">
                            <div class="img_items_stairs">
                                <img src="images/Door/7/6.jpg" alt="1">
                                <p></p>
                            </div>
                        </a>
                        <a data-fancybox="gallery_Door6" href="images/Door/7/7.jpg">
                            <div class="img_items_stairs">
                                <img src="images/Door/7/7.jpg" alt="1">
                                <p></p>
                            </div>
                        </a>
                        <a data-fancybox="gallery_Door6" href="images/Door/7/1.jpg">
                            <div class="img_items_stairs">
                                <img src="images/Door/7/8.jpg" alt="1">
                                <p></p>
                            </div>
                        </a>
                        <a data-fancybox="gallery_Door6" href="images/Door/7/9.jpg">
                            <div class="img_items_stairs">
                                <img src="images/Door/7/9.jpg" alt="1">
                                <p></p>
                            </div>
                        </a>
                        <a data-fancybox="gallery_Door6" href="images/Door/7/10.jpg">
                            <div class="img_items_stairs">
                                <img src="images/Door/7/10.jpg" alt="1">
                                <p></p>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </section>
        <section id="glass_reliability">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="glass_reliability">
                            <h2 class="">наше видео</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="video_our">
                            <iframe src="" frameborder="0"></iframe>
                            <iframe src="" frameborder="0"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section>
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="advantages">
                            <h2>наши преемущества</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="advantages_items">
                            <img src="images/Money.png" alt="">
                            <p class="cursor_text">Давно выяснено, что при оценке дизайна и композиции читаемый текст мешает сосредоточиться. Lorem Ipsum используют потому, что тот обеспечивает более или менее стандартное заполнение шаблона</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="advantages_items">
                            <img src="images/Door.png" alt="">
                            <p class="cursor_text">Давно выяснено, что при оценке дизайна и композиции читаемый текст мешает сосредоточиться. Lorem Ipsum используют потому, что тот обеспечивает более или менее стандартное заполнение шаблона</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="advantages_items">
                            <img src="images/Pro.png" alt="">
                            <p class="cursor_text">Давно выяснено, что при оценке дизайна и композиции читаемый текст мешает сосредоточиться. Lorem Ipsum используют потому, что тот обеспечивает более или менее стандартное заполнение шаблона</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="advantages_items">
                            <img src="images/Diamond.png" alt="">
                            <p class="cursor_text">Давно выяснено, что при оценке дизайна и композиции читаемый текст мешает сосредоточиться. Lorem Ipsum используют потому, что тот обеспечивает более или менее стандартное заполнение шаблона</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="manufacture">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="hardware_manufacture">
                            <h2>производители фурнитуры</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <a data-fancybox data-src="#selectableModa_Company1" href="javascript:;" class="">
                            <div class="manufacture_items">
                                <img src="images/proizvoditeli/proizavoditel1.png" alt="">
                                <p>Название компании, Россия</p>
                            </div>
                        </a>
                        <div style="display: none;max-width:50%;border-spacing: " id="selectableModa_Company1">
                            <h2 class="fancybox_item_h2" data-selectable="true">Название компании</h2>
                            <p class="fancybox_item_text" data-selectable="true">Давно выяснено, что при оценке дизайна и композиции читаемый текст мешает сосредоточиться. Lorem Ipsum используют потому, что тот обеспечивает более или менее стандартное заполнение шаблона, а также реальное распределение букв и пробелов в абзацах, которое не получается при простой дубликации "Здесь ваш текст.. Здесь ваш текст.. Здесь ваш текст.</p>
                            <!-- <ul class="modal_list" data-selectable="true">
								  <li>Размеры при изготовлении стекла и зеркал принимаются в миллиметрах (мм). Размеры - 1м = 100 см = 1000мм.</li>
								  <li>Кромка стекла после резки очень острая и травмоопасная, так же стекло больше подвержено сколам и царапинам, поэтому рекомендуем обрабатывать кромки</li>
							  </ul>
							  <img class="fancybox_img" src="images/fancybox_img_1.png" alt=""> -->
                            <!--  <img src="images/img_room.png" alt="">
							  <img src="images/img_room.png" alt=""> -->
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <a data-fancybox data-src="#selectableModa_Company1" href="javascript:;" class="">
                            <div class="manufacture_items">
                                <img src="images/proizvoditeli/proizavoditel2.png" alt="">
                                <p>Название компании, Россия</p>
                            </div>
                        </a>
                        <div style="display: none;max-width:50%;border-spacing: " id="selectableModa_Company1">
                            <h2 class="fancybox_item_h2" data-selectable="true">Название компании</h2>
                            <p class="fancybox_item_text" data-selectable="true">Давно выяснено, что при оценке дизайна и композиции читаемый текст мешает сосредоточиться. Lorem Ipsum используют потому, что тот обеспечивает более или менее стандартное заполнение шаблона, а также реальное распределение букв и пробелов в абзацах, которое не получается при простой дубликации "Здесь ваш текст.. Здесь ваш текст.. Здесь ваш текст.</p>
                            <!-- <ul class="modal_list" data-selectable="true">
								  <li>Размеры при изготовлении стекла и зеркал принимаются в миллиметрах (мм). Размеры - 1м = 100 см = 1000мм.</li>
								  <li>Кромка стекла после резки очень острая и травмоопасная, так же стекло больше подвержено сколам и царапинам, поэтому рекомендуем обрабатывать кромки</li>
							  </ul>
							  <img class="fancybox_img" src="images/fancybox_img_1.png" alt=""> -->
                            <!--  <img src="images/img_room.png" alt="">
							  <img src="images/img_room.png" alt=""> -->
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <a data-fancybox data-src="#selectableModa_Company1" href="javascript:;" class="">
                            <div class="manufacture_items">
                                <img src="images/proizvoditeli/proizavoditel3.png" alt="">
                                <p>Название компании, Россия</p>
                            </div>
                        </a>
                        <div style="display: none;max-width:50%;border-spacing: " id="selectableModa_Company1">
                            <h2 class="fancybox_item_h2" data-selectable="true">Название компании</h2>
                            <p class="fancybox_item_text" data-selectable="true">Давно выяснено, что при оценке дизайна и композиции читаемый текст мешает сосредоточиться. Lorem Ipsum используют потому, что тот обеспечивает более или менее стандартное заполнение шаблона, а также реальное распределение букв и пробелов в абзацах, которое не получается при простой дубликации "Здесь ваш текст.. Здесь ваш текст.. Здесь ваш текст.</p>
                            <!-- <ul class="modal_list" data-selectable="true">
								  <li>Размеры при изготовлении стекла и зеркал принимаются в миллиметрах (мм). Размеры - 1м = 100 см = 1000мм.</li>
								  <li>Кромка стекла после резки очень острая и травмоопасная, так же стекло больше подвержено сколам и царапинам, поэтому рекомендуем обрабатывать кромки</li>
							  </ul>
							  <img class="fancybox_img" src="images/fancybox_img_1.png" alt=""> -->
                            <!--  <img src="images/img_room.png" alt="">
							  <img src="images/img_room.png" alt=""> -->
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <a data-fancybox data-src="#selectableModa_Company1" href="javascript:;" class="">
                            <div class="manufacture_items">
                                <img src="images/proizvoditeli/proizavoditel4.png" alt="">
                                <p>Название компании, Россия</p>
                            </div>
                        </a>
                        <div style="display: none;max-width:50%;border-spacing: " id="selectableModa_Company1">
                            <h2 class="fancybox_item_h2" data-selectable="true">Название компании</h2>
                            <p class="fancybox_item_text" data-selectable="true">Давно выяснено, что при оценке дизайна и композиции читаемый текст мешает сосредоточиться. Lorem Ipsum используют потому, что тот обеспечивает более или менее стандартное заполнение шаблона, а также реальное распределение букв и пробелов в абзацах, которое не получается при простой дубликации "Здесь ваш текст.. Здесь ваш текст.. Здесь ваш текст.</p>
                            <!-- <ul class="modal_list" data-selectable="true">
								  <li>Размеры при изготовлении стекла и зеркал принимаются в миллиметрах (мм). Размеры - 1м = 100 см = 1000мм.</li>
								  <li>Кромка стекла после резки очень острая и травмоопасная, так же стекло больше подвержено сколам и царапинам, поэтому рекомендуем обрабатывать кромки</li>
							  </ul>
							  <img class="fancybox_img" src="images/fancybox_img_1.png" alt=""> -->
                            <!--  <img src="images/img_room.png" alt="">
							  <img src="images/img_room.png" alt=""> -->
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="types_of_door">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="types_of_door">
                            <h2>виды дверей</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="types_of_door_items">

                        </div>
                    </div>
                </div>
                <div class="row center">
                    <div class="col-lg-4">
                        <div class="bg_types_door_items">
                            <div class="types_of_door_item">
                                <h3>Маятниковые</h3>
                                <ul class="door_plus">
                                    <li>Влагостойкость</li>
                                    <li>Прочность</li>

                                </ul>
                                <ul class="door_mines">
                                    <li>Влагостойкость</li>
                                    <li>Прочность</li>

                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="bg_types_door_items">
                            <div class="types_of_door_item">
                                <h3>Маятниковые</h3>
                                <ul class="door_plus">
                                    <li>Влагостойкость</li>
                                    <li>Прочность</li>

                                </ul>
                                <ul class="door_mines">
                                    <li>Влагостойкость</li>
                                    <li>Прочность</li>

                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="bg_types_door_items">
                            <div class="types_of_door_item">
                                <h3>Маятниковые</h3>
                                <ul class="door_plus">
                                    <li>Влагостойкость</li>
                                    <li>Прочность</li>

                                </ul>
                                <ul class="door_mines">
                                    <li>Влагостойкость</li>
                                    <li>Прочность</li>

                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="call_back">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="request_call_back">
                            <h2>мы можем вам помочь</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="help_glaas_type d-flex">
                            <div class="help_glass_items">
                                <img src="images/glaas_type1.png" alt="">
                                <p>ОБЫЧНОЕ</p>
                            </div>
                            <div class="help_glass_items">
                                <img src="images/glass3.png" alt="">
                                <p>ОБЫЧНОЕ</p>
                            </div>
                            <div class="help_glass_items">
                                <img src="images/glass4.png" alt="">
                                <p>ОБЫЧНОЕ</p>
                            </div>
                            <div class="help_glass_items">
                                <img src="images/glass5.png" alt="">
                                <p>ОБЫЧНОЕ</p>
                            </div>
                            <div class="help_glass_items">
                                <img src="images/glaas6.png" alt="">
                                <p>ОБЫЧНОЕ</p>
                            </div>
                        </div>
                        <div class="button_next">
                            <a href="#">Далее</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <div id="5" data-hash="five">
        <section>
            <div id="log" class="bg_sections1_page2 fartuck_page d-flex b center-block">
                <div id="log" class="bg-1_page_showers fartuck_page1">
                    <!-- <a href="#">Калькулятор стоимости простых изделий</a> -->
                </div>
                <div class="bg-2_page_showers fartuck_page2">
                    <h2>кухонные фартуки из стекла на заказ</h2>
                    <span>Красиво</span>
                    <img src="images/squad_smaler.png" alt="">
                    <span>Практично</span>
                    <img src="images/squad_smaler.png" alt="">
                    <span>Надежно</span>
                    <h3>индивидуальное изготовление</h3>
                    <a href="#win2">вызвать замерщика</a>
                </div>
                <div class="bg-3_pages_howers fartuck_page3">
                    <!-- <a href="#">Бесплатная консультация по телефону
</a> -->
                </div>
            </div>
        </section>

        <section>
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="stairs_and_flooring">
                            <h2>галерея работ</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="stairs_and_flooring_buttons d-flex">
                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" data-toggle="tab" href="#page5_home" role="tab" aria-controls="home">Home</a>
                                    <p class="stairs_and_flooring_text">От 26100 руб. <br>
                                        6-8 дней</p>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#page5_profile" role="tab" aria-controls="profile">Profile</a>
                                    <p class="stairs_and_flooring_text">От 26100 руб. <br>
                                        6-8 дней</p>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#page5_messages" role="tab" aria-controls="messages">Messages</a>
                                    <p class="stairs_and_flooring_text">От 26100 руб. <br>
                                        6-8 дней</p>
                                </li>

                            </ul>
                        </div>
                    </div>
                </div>
                <div class="tab-content">
                    <div class="tab-pane active" id="page5_home" role="tabpanel">
                        <a data-fancybox="gallery_Fartucks" href="images/Fartucks/1/1.jpg">
                            <div class="img_items_stairs">
                                <img src="images/Fartucks/1/1.jpg" alt="1">
                                <p></p>
                            </div>
                        </a>
                        <a data-fancybox="gallery_Fartucks" href="images/Fartucks/1/2.jpg">
                            <div class="img_items_stairs">
                                <img src="images/Fartucks/1/2.jpg" alt="1">
                                <p></p>
                            </div>
                        </a>
                        <a data-fancybox="gallery_Fartucks" href="images/Fartucks/1/10.jpg">
                            <div class="img_items_stairs">
                                <img src="images/Fartucks/1/10.jpg" alt="1">
                                <p></p>
                            </div>
                        </a>
                        <a data-fancybox="gallery_Fartucks" href="images/Fartucks/1/11.jpg">
                            <div class="img_items_stairs">
                                <img src="images/Fartucks/1/11.jpg" alt="1">
                                <p></p>
                            </div>
                        </a>
                        <a data-fancybox="gallery_Fartucks" href="images/Fartucks/1/12.jpg">
                            <div class="img_items_stairs">
                                <img src="images/Fartucks/1/12.jpg" alt="1">
                                <p></p>
                            </div>
                        </a>
                        <a data-fancybox="gallery_Fartucks" href="images/Fartucks/1/13.jpg">
                            <div class="img_items_stairs">
                                <img src="images/Fartucks/1/13.jpg" alt="1">
                                <p></p>
                            </div>
                        </a>
                        <a data-fancybox="gallery_Fartucks" href="images/Fartucks/1/14.jpg">
                            <div class="img_items_stairs">
                                <img src="images/Fartucks/1/14.jpg" alt="1">
                                <p></p>
                            </div>
                        </a>
                        <a data-fancybox="gallery_Fartucks" href="images/Fartucks/1/15.jpg">
                            <div class="img_items_stairs">
                                <img src="images/Fartucks/1/15.jpg" alt="1">
                                <p></p>
                            </div>
                        </a>
                    </div>
                    <div class="tab-pane" id="page5_profile" role="tabpanel">
                        <a data-fancybox="gallery_Fartucks1" href="images/Fartucks/2/1.jpg">
                            <div class="img_items_stairs">
                                <img src="images/Fartucks/2/1.jpg" alt="1">
                                <p></p>
                            </div>
                        </a>
                        <a data-fancybox="gallery_Fartucks1" href="images/Fartucks/2/2.jpg">
                            <div class="img_items_stairs">
                                <img src="images/Fartucks/2/2.jpg" alt="1">
                                <p></p>
                            </div>
                        </a>
                        <a data-fancybox="gallery_Fartucks1" href="images/Fartucks/2/3.jpg">
                            <div class="img_items_stairs">
                                <img src="images/Fartucks/2/3.jpg" alt="1">
                                <p></p>
                            </div>
                        </a>
                        <a data-fancybox="gallery_Fartucks1" href="images/Fartucks/2/4.jpg">
                            <div class="img_items_stairs">
                                <img src="images/Fartucks/2/4.jpg" alt="1">
                                <p></p>
                            </div>
                        </a>
                        <a data-fancybox="gallery_Fartucks1" href="images/Fartucks/2/5.jpg">
                            <div class="img_items_stairs">
                                <img src="images/Fartucks/2/5.jpg" alt="1">
                                <p></p>
                            </div>
                        </a>
                        <a data-fancybox="gallery_Fartucks1" href="images/Fartucks/2/6.jpg">
                            <div class="img_items_stairs">
                                <img src="images/Fartucks/2/6.jpg" alt="1">
                                <p></p>
                            </div>
                        </a>
                        <a data-fancybox="gallery_Fartucks1" href="images/Fartucks/2/7.jpg">
                            <div class="img_items_stairs">
                                <img src="images/Fartucks/2/7.jpg" alt="1">
                                <p></p>
                            </div>
                        </a>
                        <a data-fancybox="gallery_Fartucks1" href="images/Fartucks/2/8.jpg">
                            <div class="img_items_stairs">
                                <img src="images/Fartucks/2/8.jpg" alt="1">
                                <p></p>
                            </div>
                        </a>
                        <a data-fancybox="gallery_Fartucks1" href="images/Fartucks/2/9.jpg">
                            <div class="img_items_stairs">
                                <img src="images/Fartucks/2/9.jpg" alt="1">
                                <p></p>
                            </div>
                        </a>
                        <a data-fancybox="gallery_Fartucks1" href="images/Fartucks/2/10.jpg">
                            <div class="img_items_stairs">
                                <img src="images/Fartucks/2/10.jpg" alt="1">
                                <p></p>
                            </div>
                        </a>
                    </div>
                    <div class="tab-pane" id="page5_messages" role="tabpanel">
                        <a data-fancybox="gallery_Fartucks2" href="images/Fartucks/3/1.jpg">
                            <div class="img_items_stairs">
                                <img src="images/Fartucks/3/1.jpg" alt="1">
                                <p></p>
                            </div>
                        </a>
                        <a data-fancybox="gallery_Fartucks2" href="images/Fartucks/3/2.jpg">
                            <div class="img_items_stairs">
                                <img src="images/Fartucks/3/2.jpg" alt="1">
                                <p></p>
                            </div>
                        </a>
                        <a data-fancybox="gallery_Fartucks2" href="images/Fartucks/3/3.jpg">
                            <div class="img_items_stairs">
                                <img src="images/Fartucks/3/3.jpg" alt="1">
                                <p></p>
                            </div>
                        </a>
                        <a data-fancybox="gallery_Fartucks2" href="images/Fartucks/3/4.jpg">
                            <div class="img_items_stairs">
                                <img src="images/Fartucks/3/4.jpg" alt="1">
                                <p></p>
                            </div>
                        </a>
                        <a data-fancybox="gallery_Fartucks2" href="images/Fartucks/3/5.jpg">
                            <div class="img_items_stairs">
                                <img src="images/Fartucks/3/5.jpg" alt="1">
                                <p></p>
                            </div>
                        </a>
                        <a data-fancybox="gallery_Fartucks2" href="images/Fartucks/3/6.jpg">
                            <div class="img_items_stairs">
                                <img src="images/Fartucks/3/6.jpg" alt="1">
                                <p></p>
                            </div>
                        </a>
                        <a data-fancybox="gallery_Fartucks2" href="images/Fartucks/3/7.jpg">
                            <div class="img_items_stairs">
                                <img src="images/Fartucks/3/7.jpg" alt="1">
                                <p></p>
                            </div>
                        </a>
                        <a data-fancybox="gallery_Fartucks2" href="images/Fartucks/3/8.jpg">
                            <div class="img_items_stairs">
                                <img src="images/Fartucks/3/8.jpg" alt="1">
                                <p></p>
                            </div>
                        </a>
                        <a data-fancybox="gallery_Fartucks2" href="images/Fartucks/3/9.jpg">
                            <div class="img_items_stairs">
                                <img src="images/Fartucks/3/9.jpg" alt="1">
                                <p></p>
                            </div>
                        </a>
                        <a data-fancybox="gallery_Fartucks2" href="images/Fartucks/3/10.jpg">
                            <div class="img_items_stairs">
                                <img src="images/Fartucks/3/10.jpg" alt="1">
                                <p></p>
                            </div>
                        </a>
                        <a data-fancybox="gallery_Fartucks2" href="images/Fartucks/3/11.jpg">
                            <div class="img_items_stairs">
                                <img src="images/Fartucks/3/11.jpg" alt="1">
                                <p></p>
                            </div>
                        </a>
                        <a data-fancybox="gallery_Fartucks2" href="images/Fartucks/3/1.jpg">
                            <div class="img_items_stairs">
                                <img src="images/Fartucks/3/12.jpg" alt="1">
                                <p></p>
                            </div>
                        </a>
                    </div>
                    <!-- <div class="tab-pane" id="settings" role="tabpanel">
				<div class="img_items_stairs">
						<img src="images/img_room.png" alt="1">
						<p></p>
					</div>
					<div class="img_items_stairs">
						<img src="images/img_room.png" alt="1">
						<p></p>
					</div>
					<div class="img_items_stairs">
						<img src="images/img_room.png" alt="1">
						<p></p>
					</div>
					<div class="img_items_stairs">
						<img src="images/img_room.png" alt="1">
						<p></p>
					</div>
					<div class="img_items_stairs">
						<img src="images/img_room.png" alt="1">
						<p></p>
					</div>
			  </div> -->
                </div>
            </div>
        </section>
        <section id="glass_reliability">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="glass_reliability">
                            <h2 class="">наше видео</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="video_our">
                            <iframe src="" frameborder="0"></iframe>
                            <iframe src="" frameborder="0"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section>
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="glass_door">
                            <h2>ПРЯМАЯ ФОТОПЕЧАТЬ НА СТЕКЛЕ</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="glass_door_items Glasses_pages_doors d-flex">
                            <img class="glass_image_page_glass" src="images/door_img_up.png" alt="">
                            <div class="glass_door_item">
                                <p>Зеркальное панно - это композиция, состоящая из отдельных зеркальных элементов с широкой, глубокой фаской (фацетом), благодаря которой, создается неповторимая игра света, бликов и отражений в получаемых гранях, за что панно так и ценнится. Такое изделие собирается вручную и подгоняется на станке на протяжении нескольких дней (а иногда и недель) мастерами с внушительным опытом. Помимо старой итальянской технологии сборки, мы так же делаем панно путем алмазной гравировки зеркала, что более бюджетно и имеет свои плюсы.</p>
                                <ul>
                                    <li>Ручная сборка - долго, зазоры до 2мм, сложно, дорого. Превосходный блеск.</li>
                                    <li>Гравировка - быстро, без зазоров, дешевле, но с не ровной и менее блестящей фаской.</li>
                                </ul>
                                <ul>
                                    <li>Некоторые наши цеховые мастера работают в стекольной промышленности более 32 лет!</li>
                                    <li>Индивидуальный подход. Согласовываем все детали с Вами, даже те, о которых другие молчат</li>
                                </ul>
                            </div>
                        </div>
                        <a class="glass_door_item_buttons aprons_items_button" href="#">бесплатная консультация</a>
                    </div>
                </div>
            </div>
        </section>
        <section>
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="glass_door">
                            <h2>ЛУЧШЕЕ СТЕКЛО, ДОСТУПНАЯ СТОИМОСТЬ</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="glass_door_items_down  d-flex">
                            <div class="glass_door_item_down Glases_page_door">
                                <p>В производстве кухонных фартуков (скинали) мы используем стекло толщиной 5,6,8мм различных видов и обработки. Наш замерщик продемонтрирует образцы "вживую" и даже сможет подобрать дизайн прямо у Вас на объекте. Так же, мы обязательно закаливаем стекло перед отправкой на монтаж или доставку.</p>
                                <ul>
                                    <li>Удароустойчиво (каленое). Очень легко мыть. Стекло не боится высоких температур.</li>
                                    <li>Прозрачное стекло (м1) - для темных изображений, Осветленное (Оптивайт) - для светлых</li>
                                </ul>
                                <ul>
                                    <li>Есть возможность добавить подсветку или сделать скинали из зеркального триплекса.</li>
                                    <li>Грамотно проконсультируем и сделаем стекло с минимальной погрешностью.</li>
                                </ul>
                            </div>
                            <div class="Glasses_pages_doors"> <img src="images/door_img_up.png" alt=""></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="call_back">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="type_fastener_comparison">
                            <h2>типы крепежа</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6 ">
                        <div class="shower_type_items comparison_glass_items d-flex">
                            <img class="glasses_img_fastener1" src="images/glaas_type1.png" alt="">
                            <div class="shower_type_item-left fastener_shower_glass comparison_glass">
                                <p>осветленное стекло</p>
                                <ul>
                                    <li>Срок службы неограничен. Гарантия 25 лет.</li>
                                    <li>Крайне надежно. Безопасно для детей.</li>
                                    <li>Стоит не так дешево</li>
                                    <li>Срок службы неограничен. Гарантия 25 лет.</li>
                                    <li>Крайне надежно. Безопасно для детей.</li>
                                    <li>Стоит не так дешево</li>
                                </ul>
                            </div>

                        </div>
                    </div>
                    <div class="col-lg-6 ">
                        <div class="shower_type_items comparison_glass_items2 d-flex">

                            <div class="shower_type_item-right fastener_shower_glass2 comparison_glass2">
                                <p>обычное стекло</p>
                                <ul>
                                    <li>Срок службы неограничен. Гарантия 25 лет.</li>
                                    <li>Крайне надежно. Безопасно для детей.</li>
                                    <li>Стоит не так дешево</li>
                                    <li>Срок службы неограничен. Гарантия 25 лет.</li>
                                    <li>Крайне надежно. Безопасно для детей.</li>
                                    <li>Стоит не так дешево</li>
                                </ul>
                            </div>
                            <img class="glasses_img_fastener2" src="images/glass3.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="fastener">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="type_fastener">
                            <h2>типы крепежа</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="shower_type_items d-flex">
                            <div class="shower_type_item-left fastener_shower_glass">
                                <p>ДУШЕВОЕ ОГРАЖДЕНИЕ VEDITEX</p>
                                <ul>
                                    <li>Срок службы неограничен. Гарантия 25 лет.</li>
                                    <li>Компактно, эстетично, увеличивает пространство, сохраняет свет.</li>
                                    <li>Крайне надежно. Безопасно для детей.</li>
                                    <li>Изделие под инивидуальный заказ</li>
                                    <li>Используем немецкую, швейцарскую и российскую фурнитуру.</li>
                                    <li>Стоит не так дешево</li>
                                </ul>
                            </div>
                            <img class="glasses_img_fastener1" src="images/first_fastener.png" alt="">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="shower_type_items d-flex">
                            <img class="glasses_img_fastener2" src="images/second_fastener.png" alt="">
                            <div class="shower_type_item-right fastener_shower_glass2">
                                <p>ДУШЕВОЕ ОГРАЖДЕНИЕ VEDITEX</p>
                                <ul>
                                    <li>Срок службы неограничен. Гарантия 25 лет.</li>
                                    <li>Компактно, эстетично, увеличивает пространство, сохраняет свет.</li>
                                    <li>Крайне надежно. Безопасно для детей.</li>
                                    <li>Изделие под инивидуальный заказ</li>
                                    <li>Используем немецкую, швейцарскую и российскую фурнитуру.</li>
                                    <li>Стоит не так дешево</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="call_back">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="request_call_back">
                            <h2>мы можем вам помочь</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="help_glaas_type kripezh d-flex">
                            <div class="help_glass_items ">
                                <img src="images/types_kripezh1.png" alt="">
                                <p>ОБЫЧНОЕ</p>
                            </div>
                            <div class="help_glass_items">
                                <img src="images/types_kripezh2.png" alt="">
                                <p>ОБЫЧНОЕ</p>
                            </div>
                            <div class="help_glass_items">
                                <img src="images/types_kripezh3.png" alt="">
                                <p>ОБЫЧНОЕ</p>
                            </div>
                            <!-- <div class="help_glass_items">
							<img src="images/glass5.png" alt="">
							<p>ОБЫЧНОЕ</p>
						</div>
						<div class="help_glass_items">
							<img src="images/glaas6.png" alt="">
							<p>ОБЫЧНОЕ</p>
						</div>
 -->					</div>
                        <div class="button_next">
                            <a href="#">Далее</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <div data-hash="seven">
        <section id="page_calculations">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-3">
                        <div class="calculations_sec1_items">
                            <img src="images/page_calc_sec_1_pic1.png" alt="">
                            <p>Срок изготовления – <br> от 12 часов</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3">
                        <div class="calculations_sec1_items">
                            <img src="images/page_calc_sec_1_pic2.png" alt="">
                            <p>Минимальный заказ – <br> 300р /изделие 1000р/заказ</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3">
                        <div class="calculations_sec1_items">
                            <img src="images/page_calc_sec_1_pic3.png" alt="">
                            <p>Производство изделий «под ключ» - перегородки, душевые и многое другое</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3">
                        <div class="calculations_sec1_items">
                            <img src="images/page_calc_sec_1_pic4.png" alt="">
                            <p>Услуги по доставке и установке стеклоизделий и зеркал</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section>
            <div class="container">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="cost_calculation">
                            <h4>
                                стоимость заказа
                            </h4>
                            <input type="text">
                            <h4>ГОТОВНОСТЬ НА:</h4>
                            <p>(без срочности)</p>
                            <div class="date_calc">
                                <input type="day">
                                <input type="day">
                                <input type="day">
                            </div>
                            <p class="cost_calculation_day">( Пятница )</p>
                            <input type="checkbox" id="checkbox" v-model="checked">
                            <label for="checkbox"><a href="#"></a>Срочно</label> <br>
                            <button class="cost_butt">Оформить заказ</button>
                            <button class="cost_butt1">В корзину</button>
                            <div class="cost_calculation__link">
                                <div>
                                    <img src="images/cost_calc_link1.png" alt="">
                                    <a href="#">Консультация</a>
                                </div>
                                <div>
                                    <img src="images/cost_calc_link2.png" alt="">
                                    <a href="#">Корзина</a>
                                </div>
                                <div>
                                    <img src="images/cost_calc_link3.png" alt="">
                                    <a href="#">Замершик</a>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="col-lg-8">
                        <div class="cost_calc_first_tab first_tab_1 toggle">
                            <div id="calc_stege" class="head toggler ">
                                <p class="numver_stage">
                                    1
                                </p>
                                <h4>
                                    Выберите материал
                                </h4>
                                <i class="fas fa-angle-down"></i>
                            </div>
                            <div id="box-calc" class="wraper content actived">
                                <div class="stairs_and_flooring_buttons d-flex">
                                    <a class="nav-link" data-toggle="tab" href="#" >Зеркало</a>
                                    <a class="nav-link" data-toggle="tab" href="#" >Триплекс</a>
                                    <a class="nav-link" data-toggle="tab" href="#" >Стекло</a>
                                </div>
                            </div>
                        </div>
                        <div class="cost_calc_first_tab toggle">
                            <div id="calc_stege" class="head toggler">
                                <p class="numver_stage">
                                    2
                                </p>
                                <h4>
                                    Вид стекла
                                </h4>
                                <i class="fas fa-angle-down"></i>
                            </div>
                            <div id="box-calc" class="wraper content">
                                <div class="calc_contents d-flex">
                                    <div class="help_glass_items calc_content2">
                                        <img src="images/glaas_type1.png" alt="">
                                        <p>ОБЫЧНОЕ</p>
                                    </div>
                                    <div class="help_glass_items calc_content2">
                                        <img src="images/glass3.png" alt="">
                                        <p>Оптивайт</p>
                                    </div>
                                    <div class="help_glass_items calc_content2">
                                        <img src="images/glass4.png" alt="">
                                        <p>Бронза</p>
                                    </div>
                                    <div class="help_glass_items calc_content2">
                                        <img src="images/glass5.png" alt="">
                                        <p>Матовое</p>
                                    </div>
                                    <div class="help_glass_items calc_content2">
                                        <img src="images/glaas6.png" alt="">
                                        <p>Серое</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="cost_calc_first_tab toggle">
                            <div id="calc_stege" class="head toggler">
                                <p class="numver_stage">
                                    3
                                </p>
                                <h4>
                                    Толщина изделия
                                </h4>
                                <i class="fas fa-angle-down"></i>
                            </div>
                            <div id="box-calc" class="wraper content">
                                <div class="stage_3_choose_thiknes d-flex">
                                    <div class="choose_thiknes">
                                        <ul class="nav nav-tabs d-flex" id="myTab" role="tablist">
                                            <li class="nav-item">
                                                <a class="nav-link active" data-toggle="tab" href="#calc1" role="tab" aria-controls="home">3</a>
                                            </li>

                                            <li class="nav-item">
                                                <a class="nav-link" data-toggle="tab" href="#calc2" role="tab" aria-controls="profile">4</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" data-toggle="tab" href="#calc3" role="tab" aria-controls="messages">5</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" data-toggle="tab" href="#calc4" role="tab" aria-controls="messages">6</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" data-toggle="tab" href="#calc5" role="tab" aria-controls="messages">8</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" data-toggle="tab" href="#calc6" role="tab" aria-controls="messages">10</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" data-toggle="tab" href="#calc7" role="tab" aria-controls="messages">12</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" data-toggle="tab" href="#calc8" role="tab" aria-controls="messages">15</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" data-toggle="tab" href="#calc9" role="tab" aria-controls="messages">19</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="content-right_calc">
                                        <div class="tab-content">
                                            <div class="tab-pane active" id="calc1" role="tabpanel">
                                                <div class="img_items_stairs">
                                                    <img src="images/Fartucks/1/1.jpg" alt="1">
                                                </div>
                                            </div>
                                            <div class="tab-pane " id="calc2" role="tabpanel">
                                                <div class="img_items_stairs">
                                                    <img src="images/Fartucks/1/2.jpg" alt="1">
                                                </div>
                                            </div>
                                            <div class="tab-pane " id="calc3" role="tabpanel">
                                                <div class="img_items_stairs">
                                                    <img src="images/Fartucks/1/3.jpg" alt="1">
                                                </div>
                                            </div>
                                            <div class="tab-pane " id="calc4" role="tabpanel">
                                                <div class="img_items_stairs">
                                                    <img src="images/Fartucks/1/4.jpg" alt="1">
                                                </div>
                                            </div>
                                            <div class="tab-pane " id="calc5" role="tabpanel">
                                                <div class="img_items_stairs">
                                                    <img src="images/Fartucks/1/1.jpg" alt="1">
                                                </div>
                                            </div>
                                            <div class="tab-pane" id="calc6" role="tabpanel">
                                                <div class="img_items_stairs">
                                                    <img src="images/Fartucks/1/1.jpg" alt="1">
                                                </div>
                                            </div>
                                            <div class="tab-pane" id="calc7" role="tabpanel">
                                                <div class="img_items_stairs">
                                                    <img src="images/Fartucks/1/1.jpg" alt="1">
                                                </div>
                                            </div>
                                            <div class="tab-pane" id="calc8" role="tabpanel">
                                                <div class="img_items_stairs">
                                                    <img src="images/Fartucks/1/1.jpg" alt="1">
                                                </div>
                                            </div>
                                            <div class="tab-pane " id="calc9" role="tabpanel">
                                                <div class="img_items_stairs">
                                                    <img src="images/Fartucks/1/1.jpg" alt="1">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="cost_calc_first_tab toggle owl-stage-outer owl-height">
                            <div id="calc_stege" class="head toggler">
                                <p class="numver_stage">
                                    4
                                </p>
                                <h4>
                                    форма и размеры
                                </h4>
                                <i class="fas fa-angle-down"></i>
                            </div>
                            <div id="box-calc" class="wraper content">
                                <div class="Size_calc">
                                    <div class="item_size_calc">
                                        <img src="images/figure_size1.png" alt="">
                                        <p>прямоугольник</p>
                                    </div>
                                    <div class="item_size_calc">
                                        <img src="images/figure_size2.png" alt="">
                                        <p>КРуг</p>
                                    </div>
                                    <div class="item_size_calc">
                                        <img src="images/figure_size3.png" alt="">
                                        <p>Овал</p>
                                    </div>
                                    <div class="item_size_calc">
                                        <img src="images/figure_size4.png" alt="">
                                        <p>ИНАЯ ФОРМА</p>
                                    </div>
                                    <div class="item_size_calc">
                                        <p>Введите значения <br>
                                            (мм)</p>
                                        <div class="input_touch_size">
                                            <input type="text">
                                            <input type="text">
                                        </div>
                                        <p><a href="#">Загрузить чертеж</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="cost_calc_first_tab toggle owl-stage-outer owl-height">
                            <div id="calc_stege" class="head toggler">
                                <p class="numver_stage">
                                    5
                                </p>
                                <h4>
                                    Выберите материал
                                </h4>
                                <i class="fas fa-angle-down"></i>
                            </div>
                            <div id="box-calc" class="wraper content">
                                <div class="stairs_and_flooring_buttons butt_choose_kromka d-flex">
                                    <a class="nav-link" data-toggle="tab" href="#" >БЕЗ ОБРАБОТКИ КРОМОК</a>
                                    <a class="nav-link" data-toggle="tab" href="#" >ПОЛИРОВКА КРОМОК</a>
                                    <a class="nav-link" data-toggle="tab" href="#" >ФАЦЕТ</a>
                                </div>
                                <div class="text-kromka">
                                    <p>Кромка будет режуще-острой, а стекло хрупким.
                                        <br><span>Будьте осторожны!</span> </p>
                                    <img src="images/sloy_kromka.png" alt="">
                                </div>

                            </div>
                        </div>
                        <div class="cost_calc_first_tab toggle">
                            <div id="calc_stege" class="head toggler">
                                <p class="numver_stage">
                                    6
                                </p>
                                <h4>
                                    дополнительно
                                </h4>
                                <i class="fas fa-angle-down"></i>
                            </div>
                            <div id="box-calc" class="wraper content">
                                <div class="chekbox_sect_6 d-flex">
                                    <div class="first_chekbox">
                                        <input type="checkbox" id="checkbox" v-model="checked">
                                        <label for="checkbox"><a href="#"></a>Закалка (Термоупрочнение)</label> <br>
                                        <input type="checkbox" id="checkbox" v-model="checked">
                                        <label for="checkbox"><a href="#"></a>Отверстия и вырезы</label><br>
                                        <input type="checkbox" id="checkbox" v-model="checked">
                                        <label for="checkbox"><a href="#"></a>Монтаж</label>
                                    </div>
                                    <div class="ssecond_chekbox">
                                        <input type="checkbox" id="checkbox" v-model="checked">
                                        <label for="checkbox"><a href="#"></a>Покраска стекла</label><br>
                                        <input type="checkbox" id="checkbox" v-model="checked">
                                        <label for="checkbox"><a href="#"></a>УФ-печать</label><br>
                                        <input type="checkbox" id="checkbox" v-model="checked">
                                        <label for="checkbox"><a href="#"></a> Пескоструй</label><br>
                                    </div>
                                    <div class="third_chekbox">
                                        <input type="checkbox" id="checkbox" v-model="checked">
                                        <label for="checkbox"><a href="#"></a>Скругления по углам</label>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="cost_calc_first_tab toggle">
                            <div id="calc_stege" class="head toggler">
                                <p class="numver_stage">
                                    7
                                </p>
                                <h4>
                                    Информация по заказу
                                </h4>
                                <i class="fas fa-angle-down"></i>
                            </div>
                            <div id="box-calc" class="wraper content">
                                <div class="Contact_form">
                                    <div class="first_row">
                                        <input type="text" placeholder="Name">
                                        <input type="number" placeholder="Quantity">
                                        <input type="text" placeholder="Location">
                                    </div>
                                    <div class="second_row d-flex">
                                        <div class="leftTable">
                                            <div class="up_input d-flex ">
                                                <input type="tel" placeholder="Phone">
                                                <input type="email" placeholder="Email">
                                            </div>
                                            <div class="down_buttons_distances d-flex">
                                                <a class="nav-link" data-toggle="tab" href="#" >В пределах МКАД</a>
                                                <a class="nav-link" data-toggle="tab" href="#" >Не более 5 км от МКАД</a>
                                                <a class="nav-link" data-toggle="tab" href="#" >Московская область</a>
                                            </div>
                                        </div>
                                        <div class="right_texbox">
                                            <textarea name="tex" id="" cols="25" rows="8"></textarea>
                                        </div>
                                    </div>
                                    <div class="buttons_buy_glass d-flex justify-content-center">
                                        <button class="cost_butt buy_buttons">Оформить заказ</button>
                                        <button class="cost_butt1 buy_buttons">В корзину</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>
    </div>

    <div id="6" data-hash="six">
        <section id="contacts">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="contacts_logo text-center">
                            <img src="images/Viditex_logo.png" alt="">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="contacts_head-text">
                            <h2>КОНТАКТЫ КОМПАНИИ VEDITEX (ВЕДИТЕКС ГЛАСС)</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="contacts_items">
                            <div class="contacts_item d-flex">
                                <img src="images/063__telephone_.png" alt="">
                                <p>Главный офис (тел) - +7 (499) 677-20-67</p>
                            </div>
                            <div class="contacts_item d-flex">
                                <img src="images/049__mail.png" alt="">
                                <p>Главный офис (email) - info@v-t-x.ru</p>
                            </div>
                            <div class="contacts_item d-flex">
                                <img src="images/cirk.png" alt="">
                                <p>Конструкторский отдел - bild@v-t-x.ru</p>
                            </div>
                            <div class="contacts_item d-flex">
                                <img src="images/cirk.png" alt="">
                                <p>Производство  - ank@v-t-x.ru</p>
                            </div>
                            <div class="contacts_item d-flex">
                                <img src="images/clock-contact.png" alt="">
                                <p>Время работы  - ПН-СБ с 10.00 до 20.00</p>
                            </div>
                        </div>
                        <div class="contact_location">
                            <div class="contacts_item d-flex">
                                <img src="images/location.png" alt="">
                                <p>Офис - г.Москва, улица 2-ая Хуторская д.38А. Офис 303 (отдел продаж)</p>
                            </div>
                            <div class="contacts_item d-flex">
                                <img src="images/location.png" alt="">
                                <p>Склад / производство (простые изделия) - г.Москва, Добролюбова 6А.</p>
                            </div>
                            <div class="contacts_item d-flex">
                                <img src="images/location.png" alt="">
                                <p>Производство (сложные изделия, обработка) - Московская область, г. Наро-Фоминск, ул. Новикова, поворот направо, не доезжая до ГК. ПК "Альянс".</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

</div>



<footer>
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-3">
                <div class="footer_logo">
                    <img src="images/Viditex_logo.png" alt="" class="logo">
                </div>
            </div>
            <div class="col-lg-2 col-md-2">
                <div class="footer_menu">
                    <ul>
                        <li><a href="#">Меню</a></li>
                        <li><a href="#">Клиенты</a> </li>
                        <li><a href="#">Услуги</a></li>
                        <li><a href="#">Контакты</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-2 col-md-2">
                <div class="footer_menu">
                    <ul>
                        <li><a href="#">Меню</a></li>
                        <li><a href="#">Клиенты</a> </li>
                        <li><a href="#">Услуги</a></li>
                        <li><a href="#">Контакты</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-2 col-md-2">
                <div class="footer_menu">
                    <ul>
                        <li><a href="#">Меню</a></li>
                        <li><a href="#">Клиенты</a> </li>
                        <li><a href="#">Услуги</a></li>
                        <li><a href="#">Контакты</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-3 col-md-3">
                <div class="contacts">
                    <p>+7 (499) 677 20 67</p>
                    <div class="call-back">
                        <img src="images/phone_fontasome.png" alt="">
                        <a href="#win1">Заявка на звонок</a>
                    </div>


                </div>
                <div class="soc_icons">
                    <i class="fab fa-facebook-f"></i>
                    <i class="fab fa-instagram"></i>
                    <i class="fab fa-vimeo-v"></i>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="footer_down_text d-flex">
                    <p>© 2018 Все права защищены</p>
                    <p>Политика конфиденциальности </p>
                </div>
            </div>
        </div>
    </div>
</footer>
<a href="#x" class="overlay" id="win1"></a>
<div class="popup">
    <div class="up_form up_form_popup">
        <input type="text" placeholder="Your name">
        <input type="text" placeholder="Your name">
    </div>
    <div class="down_form down_form_popup d-flex">
        <input type="text" placeholder="EMail">
        <div class="date_popup">
            <div class="day">
                <span><a href="#">Пн</a></span>
                <span>Вт</span>
                <span>Ср</span>
                <span>Чт</span>
                <span>Пт</span>
                <span>Сб</span>
                <span>Вс</span>
            </div>
            <div class="data-time">
                <div class="input_container">
                    <img src="images/clock-regular.svg" alt="">
                    <input type="text" placeholder="Со скольки">
                </div>
                <div class="input_container">
                    <img src="images/clock-regular.svg" alt="">
                    <input type="text" placeholder="До Скольки">
                </div>
            </div>
        </div>



    </div>
    <div class="checkbox">
        <input type="checkbox" id="checkbox" v-model="checked">
        <label for="checkbox"><a href="#">Cогласие с конфиденциальностью и куки</a></label>
    </div>
    <div class="button_forms button_forms_popup">
        <a href="#">отправить</a>
    </div>
    <a class="close"title="Закрыть" href="#close"></a>
</div>
<a href="#x" class="overlay" id="win2"></a>
<div class="popup popup_choise">
    <div class="up_form up_form_popup">
        <h3 class="popup_choise_h2">ВЫЗОВ СПЕЦИАЛИСТА</h3>
        <div class="butt_choise d-flex">
            <button>Дизайнер</button>
            <button>Планировщик</button>
        </div>

        <input type="text" placeholder="Your name">
        <input type="text" placeholder="Your name">
    </div>
    <div class="down_form down_form_popup d-flex">
        <input type="text" placeholder="EMail">


        <div class="checkbox">
            <input type="checkbox" id="checkbox" v-model="checked">
            <label for="checkbox"><a href="#">Cогласие с конфиденциальностью и куки</a></label>
        </div>
        <div class="button_forms button_forms_popup">
            <a href="#">Заказать</a>
        </div>
        <a class="close"title="Закрыть" href="#close"></a>
    </div>
    <script type="text/javascript" src={{asset("js/jquery-3.3.1.min.js")}}></script>
    <script type="text/javascript" src={{asset("js/bootstrap.min.js")}}></script>
    <script src={{asset("owl-carusel/dist/owl.carousel.js")}}></script>
    <script type="text/javascript" src={{asset("js/jquery.fancybox.min.js")}}></script>
    <script type="text/javascript" src={{asset("js/popper.min.js")}}></script>
    <script type="text/javascript" src={{asset("js/tooltip.min.js")}}></script>
    <script type="text/javascript" src={{asset("js/libs/functions.js")}}></script>

    <!-- <script type="text/javascript" src="js/logic.js"></script> -->
</body>
</html>