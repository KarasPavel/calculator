<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.2/css/all.css"
          integrity="sha384-/rXc/GQVaYpyDdyxK+ecHPVYJSN9bmVFBvjA/9eOB+pb3F2w2N6fc5qB9Ew5yIns" crossorigin="anonymous">

    <link rel="stylesheet" href=<?php echo e(asset("css/bootstrap.min.css")); ?>>
    <link rel="stylesheet" href=<?php echo e(asset("css/jquery.fancybox.min.css")); ?>>
    <link rel="stylesheet" href=<?php echo e(asset("owl-carusel/dist/assets/owl.theme.default.min.css")); ?>>
    <link rel="stylesheet" href=<?php echo e(asset("owl-carusel/dist/assets/owl.carousel.min.css")); ?>>
    <link rel="stylesheet" href=<?php echo e(asset("style.css")); ?>>
    <link rel="stylesheet" href=<?php echo e(asset("css/Media.css")); ?>>


</head>
<body style='overflow-x:hidden;'>
<div id="p_prldr">
    <div class="contpre"><i class=" svg_anm fab fa-vuejs"></i></div>
</div>
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
                    <?php if(!$user): ?>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo e(route('login')); ?>">Вход</a>
                            <a class="nav-link" href="<?php echo e(route('register')); ?>">Регистрация</a>
                        </li>
                    <?php endif; ?>
                    <?php if($user && $user->hasRole('user')): ?>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo e(route('cabinet',[$user->id])); ?>">Личный кабинет</a>
                        </li>
                    <?php endif; ?>
                    <?php if($user && $user->hasRole('admin|junior_admin|manager')): ?>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo e(route('dashboard')); ?>">Admin panel</a>
                        </li>
                    <?php endif; ?>
                    <?php if($user): ?>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo e(route('logout')); ?>">Выйти</a>
                        </li>
                    <?php endif; ?>
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
                            <p class="fancybox_item_text" data-selectable="true">Мы осуществляем резку стекла и зеркал
                                на итальянском и немецком оборудовании с ЧПУ, которые обеспечивают минимальную
                                погрешность. В некоторых случаях возможна ручная резка от профи. Резка осуществляется из
                                листов стандартного формата - 3210х2210мм и формата "Джамбо" - 6000х3210мм. Толщина
                                стекла варьируется от 3 до 19мм, зеркал - от 3 до 6. Стоит отметить несколько тезисов
                                - </p>
                            <ul class="modal_list" data-selectable="true">
                                <li>Размеры при изготовлении стекла и зеркал принимаются в миллиметрах (мм). Размеры -
                                    1м = 100 см = 1000мм.
                                </li>
                                <li>Кромка стекла после резки очень острая и травмоопасная, так же стекло больше
                                    подвержено сколам и царапинам, поэтому рекомендуем обрабатывать кромки
                                </li>
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
                            <p class="fancybox_item_text" data-selectable="true">Мы осуществляем резку стекла и зеркал
                                на итальянском и немецком оборудовании с ЧПУ, которые обеспечивают минимальную
                                погрешность. В некоторых случаях возможна ручная резка от профи. Резка осуществляется из
                                листов стандартного формата - 3210х2210мм и формата "Джамбо" - 6000х3210мм. Толщина
                                стекла варьируется от 3 до 19мм, зеркал - от 3 до 6. Стоит отметить несколько тезисов
                                - </p>
                            <ul class="modal_list" data-selectable="true">
                                <li>Размеры при изготовлении стекла и зеркал принимаются в миллиметрах (мм). Размеры -
                                    1м = 100 см = 1000мм.
                                </li>
                                <li>Кромка стекла после резки очень острая и травмоопасная, так же стекло больше
                                    подвержено сколам и царапинам, поэтому рекомендуем обрабатывать кромки
                                </li>
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
                            <p class="fancybox_item_text" data-selectable="true">Мы осуществляем резку стекла и зеркал
                                на итальянском и немецком оборудовании с ЧПУ, которые обеспечивают минимальную
                                погрешность. В некоторых случаях возможна ручная резка от профи. Резка осуществляется из
                                листов стандартного формата - 3210х2210мм и формата "Джамбо" - 6000х3210мм. Толщина
                                стекла варьируется от 3 до 19мм, зеркал - от 3 до 6. Стоит отметить несколько тезисов
                                - </p>
                            <ul class="modal_list" data-selectable="true">
                                <li>Размеры при изготовлении стекла и зеркал принимаются в миллиметрах (мм). Размеры -
                                    1м = 100 см = 1000мм.
                                </li>
                                <li>Кромка стекла после резки очень острая и травмоопасная, так же стекло больше
                                    подвержено сколам и царапинам, поэтому рекомендуем обрабатывать кромки
                                </li>
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
                            <p class="fancybox_item_text" data-selectable="true">Мы осуществляем резку стекла и зеркал
                                на итальянском и немецком оборудовании с ЧПУ, которые обеспечивают минимальную
                                погрешность. В некоторых случаях возможна ручная резка от профи. Резка осуществляется из
                                листов стандартного формата - 3210х2210мм и формата "Джамбо" - 6000х3210мм. Толщина
                                стекла варьируется от 3 до 19мм, зеркал - от 3 до 6. Стоит отметить несколько тезисов
                                - </p>
                            <ul class="modal_list" data-selectable="true">
                                <li>Размеры при изготовлении стекла и зеркал принимаются в миллиметрах (мм). Размеры -
                                    1м = 100 см = 1000мм.
                                </li>
                                <li>Кромка стекла после резки очень острая и травмоопасная, так же стекло больше
                                    подвержено сколам и царапинам, поэтому рекомендуем обрабатывать кромки
                                </li>
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
                            <p class="fancybox_item_text" data-selectable="true">Мы осуществляем резку стекла и зеркал
                                на итальянском и немецком оборудовании с ЧПУ, которые обеспечивают минимальную
                                погрешность. В некоторых случаях возможна ручная резка от профи. Резка осуществляется из
                                листов стандартного формата - 3210х2210мм и формата "Джамбо" - 6000х3210мм. Толщина
                                стекла варьируется от 3 до 19мм, зеркал - от 3 до 6. Стоит отметить несколько тезисов
                                - </p>
                            <ul class="modal_list" data-selectable="true">
                                <li>Размеры при изготовлении стекла и зеркал принимаются в миллиметрах (мм). Размеры -
                                    1м = 100 см = 1000мм.
                                </li>
                                <li>Кромка стекла после резки очень острая и травмоопасная, так же стекло больше
                                    подвержено сколам и царапинам, поэтому рекомендуем обрабатывать кромки
                                </li>
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
                            <p class="fancybox_item_text" data-selectable="true">Мы осуществляем резку стекла и зеркал
                                на итальянском и немецком оборудовании с ЧПУ, которые обеспечивают минимальную
                                погрешность. В некоторых случаях возможна ручная резка от профи. Резка осуществляется из
                                листов стандартного формата - 3210х2210мм и формата "Джамбо" - 6000х3210мм. Толщина
                                стекла варьируется от 3 до 19мм, зеркал - от 3 до 6. Стоит отметить несколько тезисов
                                - </p>
                            <ul class="modal_list" data-selectable="true">
                                <li>Размеры при изготовлении стекла и зеркал принимаются в миллиметрах (мм). Размеры -
                                    1м = 100 см = 1000мм.
                                </li>
                                <li>Кромка стекла после резки очень острая и травмоопасная, так же стекло больше
                                    подвержено сколам и царапинам, поэтому рекомендуем обрабатывать кромки
                                </li>
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
                            <p class="fancybox_item_text" data-selectable="true">Мы осуществляем резку стекла и зеркал
                                на итальянском и немецком оборудовании с ЧПУ, которые обеспечивают минимальную
                                погрешность. В некоторых случаях возможна ручная резка от профи. Резка осуществляется из
                                листов стандартного формата - 3210х2210мм и формата "Джамбо" - 6000х3210мм. Толщина
                                стекла варьируется от 3 до 19мм, зеркал - от 3 до 6. Стоит отметить несколько тезисов
                                - </p>
                            <ul class="modal_list" data-selectable="true">
                                <li>Размеры при изготовлении стекла и зеркал принимаются в миллиметрах (мм). Размеры -
                                    1м = 100 см = 1000мм.
                                </li>
                                <li>Кромка стекла после резки очень острая и травмоопасная, так же стекло больше
                                    подвержено сколам и царапинам, поэтому рекомендуем обрабатывать кромки
                                </li>
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
                            <p class="fancybox_item_text" data-selectable="true">Мы осуществляем резку стекла и зеркал
                                на итальянском и немецком оборудовании с ЧПУ, которые обеспечивают минимальную
                                погрешность. В некоторых случаях возможна ручная резка от профи. Резка осуществляется из
                                листов стандартного формата - 3210х2210мм и формата "Джамбо" - 6000х3210мм. Толщина
                                стекла варьируется от 3 до 19мм, зеркал - от 3 до 6. Стоит отметить несколько тезисов
                                - </p>
                            <ul class="modal_list" data-selectable="true">
                                <li>Размеры при изготовлении стекла и зеркал принимаются в миллиметрах (мм). Размеры -
                                    1м = 100 см = 1000мм.
                                </li>
                                <li>Кромка стекла после резки очень острая и травмоопасная, так же стекло больше
                                    подвержено сколам и царапинам, поэтому рекомендуем обрабатывать кромки
                                </li>
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
                            <p class="fancybox_item_text" data-selectable="true">Мы осуществляем резку стекла и зеркал
                                на итальянском и немецком оборудовании с ЧПУ, которые обеспечивают минимальную
                                погрешность. В некоторых случаях возможна ручная резка от профи. Резка осуществляется из
                                листов стандартного формата - 3210х2210мм и формата "Джамбо" - 6000х3210мм. Толщина
                                стекла варьируется от 3 до 19мм, зеркал - от 3 до 6. Стоит отметить несколько тезисов
                                - </p>
                            <ul class="modal_list" data-selectable="true">
                                <li>Размеры при изготовлении стекла и зеркал принимаются в миллиметрах (мм). Размеры -
                                    1м = 100 см = 1000мм.
                                </li>
                                <li>Кромка стекла после резки очень острая и травмоопасная, так же стекло больше
                                    подвержено сколам и царапинам, поэтому рекомендуем обрабатывать кромки
                                </li>
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
                            <p class="fancybox_item_text" data-selectable="true">Мы осуществляем резку стекла и зеркал
                                на итальянском и немецком оборудовании с ЧПУ, которые обеспечивают минимальную
                                погрешность. В некоторых случаях возможна ручная резка от профи. Резка осуществляется из
                                листов стандартного формата - 3210х2210мм и формата "Джамбо" - 6000х3210мм. Толщина
                                стекла варьируется от 3 до 19мм, зеркал - от 3 до 6. Стоит отметить несколько тезисов
                                - </p>
                            <ul class="modal_list" data-selectable="true">
                                <li>Размеры при изготовлении стекла и зеркал принимаются в миллиметрах (мм). Размеры -
                                    1м = 100 см = 1000мм.
                                </li>
                                <li>Кромка стекла после резки очень острая и травмоопасная, так же стекло больше
                                    подвержено сколам и царапинам, поэтому рекомендуем обрабатывать кромки
                                </li>
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
                            <p class="fancybox_item_text" data-selectable="true">Мы осуществляем резку стекла и зеркал
                                на итальянском и немецком оборудовании с ЧПУ, которые обеспечивают минимальную
                                погрешность. В некоторых случаях возможна ручная резка от профи. Резка осуществляется из
                                листов стандартного формата - 3210х2210мм и формата "Джамбо" - 6000х3210мм. Толщина
                                стекла варьируется от 3 до 19мм, зеркал - от 3 до 6. Стоит отметить несколько тезисов
                                - </p>
                            <ul class="modal_list" data-selectable="true">
                                <li>Размеры при изготовлении стекла и зеркал принимаются в миллиметрах (мм). Размеры -
                                    1м = 100 см = 1000мм.
                                </li>
                                <li>Кромка стекла после резки очень острая и травмоопасная, так же стекло больше
                                    подвержено сколам и царапинам, поэтому рекомендуем обрабатывать кромки
                                </li>
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
                            <p class="fancybox_item_text" data-selectable="true">Мы осуществляем резку стекла и зеркал
                                на итальянском и немецком оборудовании с ЧПУ, которые обеспечивают минимальную
                                погрешность. В некоторых случаях возможна ручная резка от профи. Резка осуществляется из
                                листов стандартного формата - 3210х2210мм и формата "Джамбо" - 6000х3210мм. Толщина
                                стекла варьируется от 3 до 19мм, зеркал - от 3 до 6. Стоит отметить несколько тезисов
                                - </p>
                            <ul class="modal_list" data-selectable="true">
                                <li>Размеры при изготовлении стекла и зеркал принимаются в миллиметрах (мм). Размеры -
                                    1м = 100 см = 1000мм.
                                </li>
                                <li>Кромка стекла после резки очень острая и травмоопасная, так же стекло больше
                                    подвержено сколам и царапинам, поэтому рекомендуем обрабатывать кромки
                                </li>
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
                            <p class="cursor_text">Давно выяснено, что при оценке дизайна и композиции читаемый текст
                                мешает сосредоточиться. Lorem Ipsum используют потому, что тот обеспечивает более или
                                менее стандартное заполнение шаблона</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="advantages_items">
                            <img src="images/Door.png" alt="">
                            <p class="cursor_text">Давно выяснено, что при оценке дизайна и композиции читаемый текст
                                мешает сосредоточиться. Lorem Ipsum используют потому, что тот обеспечивает более или
                                менее стандартное заполнение шаблона</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="advantages_items">
                            <img src="images/Pro.png" alt="">
                            <p class="cursor_text">Давно выяснено, что при оценке дизайна и композиции читаемый текст
                                мешает сосредоточиться. Lorem Ipsum используют потому, что тот обеспечивает более или
                                менее стандартное заполнение шаблона</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="advantages_items">
                            <img src="images/Diamond.png" alt="">
                            <p class="cursor_text">Давно выяснено, что при оценке дизайна и композиции читаемый текст
                                мешает сосредоточиться. Lorem Ipsum используют потому, что тот обеспечивает более или
                                менее стандартное заполнение шаблона</p>
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
                                    <a class="nav-link active" data-toggle="tab" href="#home" role="tab"
                                       aria-controls="home">Лестници</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#profile" role="tab"
                                       aria-controls="profile">Полы</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#messages" role="tab"
                                       aria-controls="messages">Бронирование</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#settings" role="tab"
                                       aria-controls="settings">Эксклюзив</a>
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
                        <?php if($user && $user->hasRole('admin|junior_admin|moderator')): ?>
                            <a data-fancybox="gallery" href="images/AddImage.jpg">
                                <div class="img_items_stairs">
                                    <img src="images/AddImage.jpg">
                                    <p></p>
                                </div>
                            </a>
                        <?php endif; ?>
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
                        <form action="<?php echo e(url('createApplications')); ?>" method="post" id="callForm2">
                            <div class="up_form">
                                <input type="text" name="fullName" placeholder="ФИО" id="fullName2" required>
                                <input type="tel" id="phone2" name="phone" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}"
                                       placeholder="phone _(___)___-____" required>
                            </div>
                            <div class="down_form">
                                <input type="text" id='formEmail2' name="email" placeholder="email(необязательно)">
                                <div class="day">
                                    <span><a value="1" name="dayChoice" id="dayChoice20"
                                             onclick="dayChecked('dayChoice20')">Пн</a></span>
                                    <span><a value="2" name="dayChoice" id="dayChoice21"
                                             onclick="dayChecked('dayChoice21')">Вт</a></span>
                                    <span><a value="3" name="dayChoice" id="dayChoice22"
                                             onclick="dayChecked('dayChoice22')">Ср</a></span>
                                    <span><a value="4" name="dayChoice" id="dayChoice23"
                                             onclick="dayChecked('dayChoice23')">Чт</a></span>
                                    <span><a value="5" name="dayChoice" id="dayChoice24"
                                             onclick="dayChecked('dayChoice24')">Пт</a></span>
                                    <span><a value="6" name="dayChoice" id="dayChoice25"
                                             onclick="dayChecked('dayChoice25')">Сб</a></span>
                                    <span><a value="7" name="dayChoice" id="dayChoice26"
                                             onclick="dayChecked('dayChoice26')">Вс</a></span>
                                </div>
                                <input type="hidden" id="hiddenDay" name="day">
                                <div class="time1"><i class="far fa-clock"></i><br>
                                    <p>Со<br> скольки</p></div>
                                <input id="timeStart2" name="timeStart" value="00:44" type="time"
                                       placeholder="Со скольки">
                                <div class="time2"><i class="far fa-clock"></i><br>
                                    <p>До <br>скольки</p></div>
                                <input id="timeEnd2" name="timeEnd" value="00:44" type="time" placeholder="До Скольки">
                            </div>
                            <div class="checkbox">
                                <label><input type="checkbox" id="checkbox2" v-model="checked"
                                              onclick="checkedBOX2()"></label>
                                
                                <a>Cогласие с конфиденциальностью и куки</a>
                            </div>
                            <div class="button_forms button_forms_popup">
                                <a id="callFormTeg2" onclick="formBotton()">Отправить</a>
                            <?php echo e(csrf_field()); ?>

                        </form>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <div id="2" data-hash="two">
        <!-- <div id="p_prldr1">

					<div class="contpre"><i class=" svg_anm fab fa-vuejs"></i></div>

				</div> -->
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
                                    <a class="nav-link active" data-toggle="tab" href="#page2_home" role="tab"
                                       aria-controls="home">Угловые и фигурные</a>
                                    <p class="stairs_and_flooring_text">От 26100 руб. <br>
                                        6-8 дней</p>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#page2_profile" role="tab"
                                       aria-controls="profile">Прямые Душевые</a>
                                    <p class="stairs_and_flooring_text">От 26100 руб. <br>
                                        6-8 дней</p>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#page2_messages" role="tab"
                                       aria-controls="messages">Форма Трапеции</a>
                                    <p class="stairs_and_flooring_text">От 26100 руб. <br>
                                        6-8 дней</p>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#page2_settings" role="tab"
                                       aria-controls="settings">Двери Ниша</a>
                                    <p class="stairs_and_flooring_text">От 26100 руб. <br>
                                        6-8 дней</p>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#page2_settings1" role="tab"
                                       aria-controls="setting1">Глухие перегородки</a>
                                    <p class="stairs_and_flooring_text">От 26100 руб. <br>
                                        6-8 дней</p>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#page2_settings2" role="tab"
                                       aria-controls="settings2">Ограждения в ванную</a>
                                    <p class="stairs_and_flooring_text">От 26100 руб. <br>
                                        6-8 дней</p>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#page2_settings3" role="tab"
                                       aria-controls="settings3">С раздвижной дверью</a>
                                    <p class="stairs_and_flooring_text">От 26100 руб. <br>
                                        6-8 дней</p>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#page2_settings4" role="tab"
                                       aria-controls="settings4">Эксклюзив и опт</a>
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
                            <p class="fancybox_item_text" data-selectable="true">Давно выяснено, что при оценке дизайна
                                и композиции читаемый текст мешает сосредоточиться. Lorem Ipsum используют потому, что
                                тот обеспечивает более или менее стандартное заполнение шаблона, а также реальное
                                распределение букв и пробелов в абзацах, которое не получается при простой дубликации
                                "Здесь ваш текст.. Здесь ваш текст.. Здесь ваш текст.</p>
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
                            <p class="fancybox_item_text" data-selectable="true">Давно выяснено, что при оценке дизайна
                                и композиции читаемый текст мешает сосредоточиться. Lorem Ipsum используют потому, что
                                тот обеспечивает более или менее стандартное заполнение шаблона, а также реальное
                                распределение букв и пробелов в абзацах, которое не получается при простой дубликации
                                "Здесь ваш текст.. Здесь ваш текст.. Здесь ваш текст.</p>
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
                            <p class="fancybox_item_text" data-selectable="true">Давно выяснено, что при оценке дизайна
                                и композиции читаемый текст мешает сосредоточиться. Lorem Ipsum используют потому, что
                                тот обеспечивает более или менее стандартное заполнение шаблона, а также реальное
                                распределение букв и пробелов в абзацах, которое не получается при простой дубликации
                                "Здесь ваш текст.. Здесь ваш текст.. Здесь ваш текст.</p>
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
                            <p class="fancybox_item_text" data-selectable="true">Давно выяснено, что при оценке дизайна
                                и композиции читаемый текст мешает сосредоточиться. Lorem Ipsum используют потому, что
                                тот обеспечивает более или менее стандартное заполнение шаблона, а также реальное
                                распределение букв и пробелов в абзацах, которое не получается при простой дубликации
                                "Здесь ваш текст.. Здесь ваш текст.. Здесь ваш текст.</p>
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
                                <p>Качественная дверь - залог герметичности и долговечности в эксплуатации душевых
                                    кабин. Мы делаем двери из закаленного стекла, с толщиной от 8мм и выше, а ход двери
                                    обеспечивает надежная фурнитура из латунных сплавов.</p>
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
                                <p>Перегородки и ограждения в душевую кабину стало модно делать не просто так. В
                                    основном их ценят за надежность, вариативность и эстетику, что готовой кабинки
                                    получить невозможно. Сегодня, это плавно растущий тренд, частью которого мы и
                                    предлагаем стать Вам.</p>
                                <ul>
                                    <li>Толстые, каленые стекла от 8мм с различными покрытиями и обработками</li>
                                    <li>Крепление стекла в профиль или на коннектора (точки). Минимум металла.</li>
                                </ul>
                                <ul>
                                    <li>Срок эсплуатации, по новой технологии производства - не ограничен.</li>
                                    <li>Полностью индивидуальный подход. Мы подгоним изделие под Ваш ремонт, а не
                                        наоборот.
                                    </li>
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
                            <a href="#seven">Далее</a>
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
                                    <a class="nav-link active" data-toggle="tab" href="#page3_home" role="tab"
                                       aria-controls="home">Зеркала на заказ</a>
                                    <p class="stairs_and_flooring_text">От 26100 руб. <br>
                                        6-8 дней</p>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#page3_home_1" role="tab"
                                       aria-controls="option">Зеркальное панно</a>
                                    <p class="stairs_and_flooring_text">От 26100 руб. <br>
                                        6-8 дней</p>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#page3_profile" role="tab"
                                       aria-controls="profile">Оптовые заказы</a>
                                    <p class="stairs_and_flooring_text">От 26100 руб. <br>
                                        6-8 дней</p>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#page3_messages" role="tab"
                                       aria-controls="messages">Эксклюзив решения</a>
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
                                <p>Качественная дверь - залог герметичности и долговечности в эксплуатации душевых
                                    кабин. Мы делаем двери из закаленного стекла, с толщиной от 8мм и выше, а ход двери
                                    обеспечивает надежная фурнитура из латунных сплавов.</p>
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
                            <a class="buttons_calc_glasses" href="#seven">калькулятор</a>
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
                                <p>Перегородки и ограждения в душевую кабину стало модно делать не просто так. В
                                    основном их ценят за надежность, вариативность и эстетику, что готовой кабинки
                                    получить невозможно. Сегодня, это плавно растущий тренд, частью которого мы и
                                    предлагаем стать Вам.</p>
                                <ul>
                                    <li>Толстые, каленые стекла от 8мм с различными покрытиями и обработками</li>
                                    <li>Крепление стекла в профиль или на коннектора (точки). Минимум металла.</li>
                                </ul>
                                <ul>
                                    <li>Срок эсплуатации, по новой технологии производства - не ограничен.</li>
                                    <li>Полностью индивидуальный подход. Мы подгоним изделие под Ваш ремонт, а не
                                        наоборот.
                                    </li>
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
                            <a class="glass_door_item_buttons" href="#win1">бесплатная консультация</a>
                            <div class="glass_door_item">
                                <p>Зеркальное панно - это композиция, состоящая из отдельных зеркальных элементов с
                                    широкой, глубокой фаской (фацетом), благодаря которой, создается неповторимая игра
                                    света, бликов и отражений в получаемых гранях, за что панно так и ценнится. Такое
                                    изделие собирается вручную и подгоняется на станке на протяжении нескольких дней (а
                                    иногда и недель) мастерами с внушительным опытом. Помимо старой итальянской
                                    технологии сборки, мы так же делаем панно путем алмазной гравировки зеркала, что
                                    более бюджетно и имеет свои плюсы.</p>
                                <ul>
                                    <li>Ручная сборка - долго, зазоры до 2мм, сложно, дорого. Превосходный блеск.</li>
                                    <li>Гравировка - быстро, без зазоров, дешевле, но с не ровной и менее блестящей
                                        фаской.
                                    </li>
                                </ul>
                                <ul>
                                    <li>Некоторые наши цеховые мастера работают в стекольной промышленности более 32
                                        лет!
                                    </li>
                                    <li>Индивидуальный подход. Согласовываем все детали с Вами, даже те, о которых
                                        другие молчат
                                    </li>
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
                            <p class="cursor_text">Давно выяснено, что при оценке дизайна и композиции читаемый текст
                                мешает сосредоточиться. Lorem Ipsum используют потому, что тот обеспечивает более или
                                менее стандартное заполнение шаблона</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="advantages_items">
                            <img src="images/Door.png" alt="">
                            <p class="cursor_text">Давно выяснено, что при оценке дизайна и композиции читаемый текст
                                мешает сосредоточиться. Lorem Ipsum используют потому, что тот обеспечивает более или
                                менее стандартное заполнение шаблона</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="advantages_items">
                            <img src="images/Pro.png" alt="">
                            <p class="cursor_text">Давно выяснено, что при оценке дизайна и композиции читаемый текст
                                мешает сосредоточиться. Lorem Ipsum используют потому, что тот обеспечивает более или
                                менее стандартное заполнение шаблона</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="advantages_items">
                            <img src="images/Diamond.png" alt="">
                            <p class="cursor_text">Давно выяснено, что при оценке дизайна и композиции читаемый текст
                                мешает сосредоточиться. Lorem Ipsum используют потому, что тот обеспечивает более или
                                менее стандартное заполнение шаблона</p>
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
                                <img src="images/proizvoditeli/proizavoditel2.png" alt="">
                                <p>Bohle | Германия</p>
                            </div>
                        </a>
                        <div style="display: none;max-width:50%;border-spacing: " id="selectableModa_Company1">
                            <h2 class="fancybox_item_h2" data-selectable="true">Название компании</h2>
                            <p class="fancybox_item_text" data-selectable="true">Давно выяснено, что при оценке дизайна
                                и композиции читаемый текст мешает сосредоточиться. Lorem Ipsum используют потому, что
                                тот обеспечивает более или менее стандартное заполнение шаблона, а также реальное
                                распределение букв и пробелов в абзацах, которое не получается при простой дубликации
                                "Здесь ваш текст.. Здесь ваш текст.. Здесь ваш текст.</p>
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
                                <p>DORMA | Швейцария</p>
                            </div>
                        </a>
                        <div style="display: none;max-width:50%;border-spacing: " id="selectableModa_Company1">
                            <h2 class="fancybox_item_h2" data-selectable="true">Название компании</h2>
                            <p class="fancybox_item_text" data-selectable="true">Давно выяснено, что при оценке дизайна
                                и композиции читаемый текст мешает сосредоточиться. Lorem Ipsum используют потому, что
                                тот обеспечивает более или менее стандартное заполнение шаблона, а также реальное
                                распределение букв и пробелов в абзацах, которое не получается при простой дубликации
                                "Здесь ваш текст.. Здесь ваш текст.. Здесь ваш текст.</p>
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
                                <p>ТИТАН | Россия</p>
                            </div>
                        </a>
                        <div style="display: none;max-width:50%;border-spacing: " id="selectableModa_Company1">
                            <h2 class="fancybox_item_h2" data-selectable="true">Название компании</h2>
                            <p class="fancybox_item_text" data-selectable="true">Давно выяснено, что при оценке дизайна
                                и композиции читаемый текст мешает сосредоточиться. Lorem Ipsum используют потому, что
                                тот обеспечивает более или менее стандартное заполнение шаблона, а также реальное
                                распределение букв и пробелов в абзацах, которое не получается при простой дубликации
                                "Здесь ваш текст.. Здесь ваш текст.. Здесь ваш текст.</p>
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
                                <img src="images/proizvoditeli/proizavoditel1.png" alt="">
                                <p>Minusco | Италия</p>
                            </div>
                        </a>
                        <div style="display: none;max-width:50%;border-spacing: " id="selectableModa_Company1">
                            <h2 class="fancybox_item_h2" data-selectable="true">Название компании</h2>
                            <p class="fancybox_item_text" data-selectable="true">Давно выяснено, что при оценке дизайна
                                и композиции читаемый текст мешает сосредоточиться. Lorem Ipsum используют потому, что
                                тот обеспечивает более или менее стандартное заполнение шаблона, а также реальное
                                распределение букв и пробелов в абзацах, которое не получается при простой дубликации
                                "Здесь ваш текст.. Здесь ваш текст.. Здесь ваш текст.</p>
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
                            <a href="#seven">Далее</a>
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
                                    <a class="nav-link active" data-toggle="tab" href="#page4_home" role="tab"
                                       aria-controls="home">Распашные двери</a>
                                    <p class="stairs_and_flooring_text">От 26100 руб. <br>
                                        6-8 дней</p>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#page4_profile" role="tab"
                                       aria-controls="profile">Перегородки</a>
                                    <p class="stairs_and_flooring_text">От 26100 руб. <br>
                                        6-8 дней</p>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#page4_messages" role="tab"
                                       aria-controls="messages">Маятниковые двери</a>
                                    <p class="stairs_and_flooring_text">От 26100 руб. <br>
                                        6-8 дней</p>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#page4_settings" role="tab"
                                       aria-controls="settings">Раздвижные двери</a>
                                    <p class="stairs_and_flooring_text">От 26100 руб. <br>
                                        6-8 дней</p>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#page4_settings1" role="tab"
                                       aria-controls="settings">Ограждения</a>
                                    <p class="stairs_and_flooring_text">От 26100 руб. <br>
                                        6-8 дней</p>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#page4_settings2" role="tab"
                                       aria-controls="settings">Двери в коробках</a>
                                    <p class="stairs_and_flooring_text">От 26100 руб. <br>
                                        6-8 дней</p>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#page4_settings3" role="tab"
                                       aria-controls="settings">Эксклюзивные решения</a>
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
                            <p class="cursor_text">Давно выяснено, что при оценке дизайна и композиции читаемый текст
                                мешает сосредоточиться. Lorem Ipsum используют потому, что тот обеспечивает более или
                                менее стандартное заполнение шаблона</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="advantages_items">
                            <img src="images/Door.png" alt="">
                            <p class="cursor_text">Давно выяснено, что при оценке дизайна и композиции читаемый текст
                                мешает сосредоточиться. Lorem Ipsum используют потому, что тот обеспечивает более или
                                менее стандартное заполнение шаблона</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="advantages_items">
                            <img src="images/Pro.png" alt="">
                            <p class="cursor_text">Давно выяснено, что при оценке дизайна и композиции читаемый текст
                                мешает сосредоточиться. Lorem Ipsum используют потому, что тот обеспечивает более или
                                менее стандартное заполнение шаблона</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="advantages_items">
                            <img src="images/Diamond.png" alt="">
                            <p class="cursor_text">Давно выяснено, что при оценке дизайна и композиции читаемый текст
                                мешает сосредоточиться. Lorem Ipsum используют потому, что тот обеспечивает более или
                                менее стандартное заполнение шаблона</p>
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
                            <p class="fancybox_item_text" data-selectable="true">Давно выяснено, что при оценке дизайна
                                и композиции читаемый текст мешает сосредоточиться. Lorem Ipsum используют потому, что
                                тот обеспечивает более или менее стандартное заполнение шаблона, а также реальное
                                распределение букв и пробелов в абзацах, которое не получается при простой дубликации
                                "Здесь ваш текст.. Здесь ваш текст.. Здесь ваш текст.</p>
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
                            <p class="fancybox_item_text" data-selectable="true">Давно выяснено, что при оценке дизайна
                                и композиции читаемый текст мешает сосредоточиться. Lorem Ipsum используют потому, что
                                тот обеспечивает более или менее стандартное заполнение шаблона, а также реальное
                                распределение букв и пробелов в абзацах, которое не получается при простой дубликации
                                "Здесь ваш текст.. Здесь ваш текст.. Здесь ваш текст.</p>
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
                            <p class="fancybox_item_text" data-selectable="true">Давно выяснено, что при оценке дизайна
                                и композиции читаемый текст мешает сосредоточиться. Lorem Ipsum используют потому, что
                                тот обеспечивает более или менее стандартное заполнение шаблона, а также реальное
                                распределение букв и пробелов в абзацах, которое не получается при простой дубликации
                                "Здесь ваш текст.. Здесь ваш текст.. Здесь ваш текст.</p>
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
                            <p class="fancybox_item_text" data-selectable="true">Давно выяснено, что при оценке дизайна
                                и композиции читаемый текст мешает сосредоточиться. Lorem Ipsum используют потому, что
                                тот обеспечивает более или менее стандартное заполнение шаблона, а также реальное
                                распределение букв и пробелов в абзацах, которое не получается при простой дубликации
                                "Здесь ваш текст.. Здесь ваш текст.. Здесь ваш текст.</p>
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
                            <a href="#seven">Далее</a>
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
                                    <a class="nav-link active" data-toggle="tab" href="#page5_home" role="tab"
                                       aria-controls="home">Скинали с Фотопечатью</a>
                                    <p class="stairs_and_flooring_text">От 26100 руб. <br>
                                        6-8 дней</p>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#page5_profile" role="tab"
                                       aria-controls="profile">Одноцветные фартуки</a>
                                    <p class="stairs_and_flooring_text">От 26100 руб. <br>
                                        6-8 дней</p>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#page5_messages" role="tab"
                                       aria-controls="messages">Скинали с подсветкой</a>
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
                        <a data-fancybox="gallery_Fartucks" href="images/Fartucks/1/2.jpg">
                            <div class="img_items_stairs">
                                <img src=<?php echo e(asset("images/Fartucks/1/3.jpg")); ?> alt="1">
                                <p></p>
                            </div>
                        </a>
                        <a data-fancybox="gallery_Fartucks" href="images/Fartucks/1/2.jpg">
                            <div class="img_items_stairs">
                                <img src="images/Fartucks/1/4.jpg" alt="1">
                                <p></p>
                            </div>
                        </a>
                        <!-- <a data-fancybox="gallery_Fartucks" href="images/Fartucks/1/2.jpg">
					<div class="img_items_stairs">
							<img src="images/Fartucks/1/5.jpg" alt="1">
							<p></p>
						</div> -->
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
                        <!-- <a data-fancybox="gallery_Fartucks2" href="images/Fartucks/3/7.jpg">
					<div class="img_items_stairs">
							<img src="images/Fartucks/3/7.jpg" alt="1">
							<p></p>
						</div>
				</a> -->
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
                                <p>Зеркальное панно - это композиция, состоящая из отдельных зеркальных элементов с
                                    широкой, глубокой фаской (фацетом), благодаря которой, создается неповторимая игра
                                    света, бликов и отражений в получаемых гранях, за что панно так и ценнится. Такое
                                    изделие собирается вручную и подгоняется на станке на протяжении нескольких дней (а
                                    иногда и недель) мастерами с внушительным опытом. Помимо старой итальянской
                                    технологии сборки, мы так же делаем панно путем алмазной гравировки зеркала, что
                                    более бюджетно и имеет свои плюсы.</p>
                                <ul>
                                    <li>Ручная сборка - долго, зазоры до 2мм, сложно, дорого. Превосходный блеск.</li>
                                    <li>Гравировка - быстро, без зазоров, дешевле, но с не ровной и менее блестящей
                                        фаской.
                                    </li>
                                </ul>
                                <ul>
                                    <li>Некоторые наши цеховые мастера работают в стекольной промышленности более 32
                                        лет!
                                    </li>
                                    <li>Индивидуальный подход. Согласовываем все детали с Вами, даже те, о которых
                                        другие молчат
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <a class="glass_door_item_buttons aprons_items_button" href="#win1">бесплатная консультация</a>
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
                                <p>В производстве кухонных фартуков (скинали) мы используем стекло толщиной 5,6,8мм
                                    различных видов и обработки. Наш замерщик продемонтрирует образцы "вживую" и даже
                                    сможет подобрать дизайн прямо у Вас на объекте. Так же, мы обязательно закаливаем
                                    стекло перед отправкой на монтаж или доставку.</p>
                                <ul>
                                    <li>Удароустойчиво (каленое). Очень легко мыть. Стекло не боится высоких
                                        температур.
                                    </li>
                                    <li>Прозрачное стекло (м1) - для темных изображений, Осветленное (Оптивайт) - для
                                        светлых
                                    </li>
                                </ul>
                                <ul>
                                    <li>Есть возможность добавить подсветку или сделать скинали из зеркального
                                        триплекса.
                                    </li>
                                    <li>Грамотно проконсультируем и сделаем стекло с минимальной погрешностью.</li>
                                </ul>
                            </div>
                            <div class="Glasses_pages_doors"><img src="images/door_img_up.png" alt=""></div>
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
 -->                    </div>
                        <div class="button_next">
                            <a href="#seven">Далее</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    
    <div data-hash="seven">
        <section id="page_calculations">
            
                
                    
                        
                            
                            
                        
                    
                    
                        
                            
                            
                        
                    
                    
                        
                            
                            
                        
                    
                    
                        
                            
                            
                        
                    
                
            
        
        
            
                
                    
                        
                            
                                
                            
                            
                            
                            
                            
                                
                                
                                
                            
                            
                            
                            
                            
                            
                            
                                
                                    
                                    
                                
                                
                                    
                                    
                                    
                                
                                
                                    
                                    
                                
                            

                        
                    
                    
                        
                            
                                
                                    
                                
                                
                                    
                                
                                
                            
                            
                                
                                    
                                    
                                    
                                    
                                    
                                    
                                
                            
                        
                        
                            
                                
                                    
                                
                                
                                    
                                
                                
                            
                            
                                
                                    
                                        
                                        
                                    
                                    
                                        
                                        
                                    
                                    
                                        
                                        
                                    
                                    
                                        
                                        
                                    
                                    
                                        
                                        
                                    
                                
                            
                        
                        
                            
                                
                                    
                                
                                
                                    
                                
                                
                            
                            
                                
                                    
                                        
                                            
                                                
                                                   
                                            

                                            
                                                
                                                   
                                            
                                            
                                                
                                                   
                                            
                                            
                                                
                                                   
                                            
                                            
                                                
                                                   
                                            
                                            
                                                
                                                   
                                            
                                            
                                                
                                                   
                                            
                                            
                                                
                                                   
                                            
                                            
                                                
                                                   
                                            
                                        
                                    
                                    
                                        
                                            
                                                
                                                    
                                                
                                            
                                            
                                                
                                                    
                                                
                                            
                                            
                                                
                                                    
                                                
                                            
                                            
                                                
                                                    
                                                
                                            
                                            
                                                
                                                    
                                                
                                            
                                            
                                                
                                                    
                                                
                                            
                                            
                                                
                                                    
                                                
                                            
                                            
                                                
                                                    
                                                
                                            
                                            
                                                
                                                    
                                                
                                            
                                        
                                    
                                
                            
                        
                        
                            
                                
                                    
                                
                                
                                    
                                
                                
                            
                            
                                
                                    
                                        
                                        
                                    
                                    
                                        
                                        
                                    
                                    
                                        
                                        
                                    
                                    
                                        
                                        
                                    
                                    
                                        
                                            
                                        
                                            
                                            
                                        
                                        
                                    
                                
                            
                        
                        
                            
                                
                                    
                                
                                
                                    
                                
                                
                            
                            
                                
                                    
                                    
                                    
                                
                                
                                    
                                        
                                    
                                

                            
                        
                        
                            
                                
                                    
                                
                                
                                    
                                
                                
                            
                            
                                
                                    
                                        
                                        
                                        
                                        
                                        
                                        
                                    
                                    
                                        
                                        
                                        
                                        
                                        
                                        
                                    
                                    
                                        
                                        
                                    
                                

                            
                        
                        
                            
                                
                                    
                                
                                
                                    
                                
                                
                            
                            
                                
                                    
                                        
                                        
                                        
                                    
                                    
                                        
                                            
                                                
                                                
                                            
                                            
                                                
                                                
                                                
                                            
                                        
                                        
                                            
                                        
                                    
                                    
                                        
                                        
                                    
                                
                            
                        

                    
                
            

            
            
            
                
                
                
                <meta name="geo.region" content="RU-" />
                <meta name="ICBM" content="55.8058150, 37.5668260" />
                <script src="<?php echo e(asset('js/jquery.min.js')); ?>"></script>
                <script src="<?php echo e(asset('js/jquery.fancybox.min.js')); ?>"></script>

                <link rel="stylesheet" href=<?php echo e(asset("fonts/fonts.css")); ?>>
                <link rel="stylesheet" href=<?php echo e(asset("main.css")); ?>>
                <link rel="stylesheet" href=<?php echo e(asset("js/jquery.fancybox.min.css")); ?>>
                <link rel="stylesheet" href=<?php echo e(asset("calc.css")); ?>>

                <link rel="stylesheet" href=<?php echo e(asset("js/owl.carousel.min.css")); ?>><!--  -->
                <link rel="stylesheet" href=<?php echo e(asset("dop.css")); ?>>

                <!-- Google Tag Manager -->
            
            
            
            
            
            <!-- End Google Tag Manager -->


                <script>
                    var f1prece111 = [754, 755, 1027, 1170, 1560, 2080, 2860, 12480, 15990]; var f1prece121 = [2860, 3185, 4030, 5200, 6370, 8580, 15900, 20900]; var f1prece131 = [1755, 2210, 3640, 4420]; var f1prece141 = [1560, 2210, 2730, 3510, 4900]; var f1prece151 = [1820, 2275, 3770, 4680]; var f1prece21 = [1560, 2500, 2800]; var f1prece22 = [6370, 7670]; var f1prece23 = [2600]; var f1prece24 = [2340]; var f1prece25 = [3770]; var f1prece26 = [9800]; var polir = [110, 110, 120, 140, 160, 180, 250, 350]; var facet0 = [200, 220, 240, 320, 420]; var facet1 = [200, 220, 240, 320, 420]; var facet2 = [320, 340, 360, 440, 540]; var facet3 = [340, 360, 380, 460, 560]; var facet4 = [360, 380, 400, 480, 580]; var facet5 = [420, 490, 510, 590, 652]; var facet6 = [420, 490, 510, 590, 652]; var zakalka1 = [280, 320, 430, 480, 520, 740, 950, 1300, 1800]; var zakalka2 = [0, 480, 510, 560, 630, 760, 1100, 1500, 2000]; var zakalka3 = [0, 480, 510, 530, 650, 750, 0, 0, 0]; var zakalka4 = [0, 480, 510, 560, 640, 760, 0, 0, 0]; var zakalka5 = [0, 480, 510, 530, 640, 740, 0, 0, 0]; </script>

                
                
                

                
                <meta name="theme-color" content="#244b66">
                <script>
                    var today = "";
                    var phone = '';
                    var mail  = '';
                    var bz = '';
                </script>
                <script>var Screen = [6,7,8]; var calc='';  calc = 'Зеркало:Серебро:: Толщина - 6 мм:Круг: Размеры 10000x10000 мм.:Полировка кромок:Отверстия  шт.:Монтаж:Скругление 1 шт. 1 (мм):УФ-печать:Пескоструй (Рисунок):2 (шт.) : :не срочно::2367400 руб.:15.01.2019:|Зеркало:Серебро:: Толщина - 6 мм:Круг: Размеры 10000x10000 мм.:Полировка кромок:Отверстия  шт.:Монтаж:Скругление 1 шт. 1 (мм):УФ-печать:Пескоструй (Рисунок):2 (шт.) : :не срочно::2367400 руб.:15.01.2019:|Зеркало:Серебро:: Толщина - 6 мм:Иная форма: Размеры 1000x1000 мм.:Без обработки кромок:1 (шт.) : :не срочно::300 руб.:22.12.2018:|1 (шт.) : :не срочно::0 руб.:22.12.2018:|';
                    var ttl_arr = new Array("Резка изделий из стекла и зеркал на заказ в Москве","Фото изделий из стекла и зеркал Ведитекс","Душевые ограждения и двери из стекла на заказ в Москве","Перегородки и маятниковые двери из стекла для дома и офиса","Зеркала на заказ с обработкой кромок или фацетом в Москве","Кухонные фартуки из стекла с прямой УФ печатью на заказ","Расчет стоимости резки и обработки стекла или зеркал Online","Контакты компании VEDITEX («Ведитекс гласс») в Москве");  var sed_arr = new Array("Резка стекла и зеркал с обработкой кромок, фацетом. Высококачественные материалы AGC (Япония) и Guardian (Англия), при цене от 760руб/м2","Фото душевых ограждений, дверей из стекла, зеркального панно, различных эксклюзивных решений от компании VEDITEX (Ведитекс)","Душевые перегородки, ограждения и двери из стекла различных видов. Сделаем за 7 дней с качественной фурнитурой. Замеры, доставка, установка","Стеклянные перегородки с маятниковыми или распашными дверями из стекла на заказ. Сроки – от 7 дней. Сделаем «под ключ» от замера до установки.","Зеркальные панно и зеркала на заказ с различными обработками, фацетом или рисунком, зеркальные двери. Фотографии и цены. Бесплатная консультация.","Фартуки из стекла с прямой печатью по технологии UV, с гарантированным качеством и долговечностью. Сочные цвета, ЭКО-чернила и каленое стекло","Точный расчет стоимости простых изделий из стекла и зеркал на заказ. Возможность сразу оформить заказ. Срочное изготовление стеклоизделий от 6 часов!","Компания VEDITEX находится по улице 2-ая Хуторская д.38А. Офис 303. Наш телефон – +7 (499) 677-20-67. Электронная почта – info@v-t-x.ru"); </script><title>Расчет стоимости резки и обработки стекла или зеркал Online</title><meta name='description' content='Точный расчет стоимости простых изделий из стекла и зеркал на заказ. Возможность сразу оформить заказ. Срочное изготовление стеклоизделий от 6 часов!'><script src=<?php echo e(asset("js/owl.carousel.min.js")); ?>></script>

                <link rel="stylesheet" href=<?php echo e(asset("media.css")); ?>>
                
                <style>
                    body { font-family: 'Roboto Slab', serif; }
                </style>
            </head>
            <body  class="ver001 ver002">
            <div class="first_preloader">
                <div class="Load"><div class="loaad"></div></div>
            </div>
            <div id="vspl" class="hidevspl">0001</div>
            <div id="cons"></div>
            <div id="content">

                <div id="foter2">
                    <a class="lnk" href="/Rezka_stekla_i_zerkal_na_zakaz" sh="1"><div class="logo tipnav" ></div></a>
                    <div id="ft" >
                        <div id="ft0"  class="nk2" style=' margin-right: 96px;'>
                            <a class="lnk" href="/Raschet_stoimosti" sh="7"><button class="tipnav" >Расчет стоимости online</button>
                                <br>
                                <span>
				Вы сможете самостоятельно рассчитать  <br>
				цену резки и обработки простых изделий.
			</span>

                        </div>
                        <ul class="show" id="fh">
                            <li><div class="icon phone"></div><div class="m5"><a href="tel:+74996772067">+7 (499) 677 20 67</a></div></li>
                            <li>   <div class="icon city"></div><div class="m4"><div class="linnk"><a class="lnk" href="/Kontakty_kompanii_VEDITEX" sh="8"> г. Москва </a></div></div> </li>
                            <li onclick="showmod('spec')"><div class="icon call"></div><div class="m3 clc" ><div class="linnk">Заявка на звонок</div></div></li>
                            <li><div class="icon work"></div><div class="m2">пн - сб 10 00 - 19 00</div></li>
                        </ul>
                    </div>
                    <div class="prenav">
                        <div class="menu_icon ">Меню</div>
                    </div>

                    <div id="foter3">
                        <div class="j jw8f"> <a class="lnk" href="/Kontakty_kompanii_VEDITEX" sh="8"> г. Москва</a></div>
                        <div class="j menua menu_icon">Меню</div><br>

                        <div class="j">пн - сб 10 00 - 19 00</div><br>
                        <div class="j"><div class="icon phone"></div><a href="tel:+74996772067">+7 (499) 677 20 67</a></div>
                    </div>
                </div>

                <div id="navblack" class="hide_nav">
                    <div class="X Xcloce"></div>
                    <nav>

                        <ol>

                            <a class="lnk" href="/Rezka_stekla_i_zerkal_na_zakaz" sh="1"> <li class="home">Главная страница</li></a><a class="lnk" href="/Primery_i_foto_izdelij_iz_stekla_i_zerkal" sh="2"> <li class="ourwork">Примеры работ</li></a><a class="lnk" href="/Dushevye_ograzhdenija_i_dveri_iz_stekla_na_zakaz" sh="3"> <li class="bords">Душевые ограждения</li></a><a class="lnk" href="/Peregorodki_i_dveri_iz_stekla_na_zakaz" sh="4"> <li class="frames">Перегородки и ограждения</li></a><a class="lnk" href="/Zerkala_na_zakaz_s_razlichnoj_obrabotkoj" sh="5"> <li class="mirrors">Зеркальное панно</li></a><a class="lnk" href="/Kuhonnye_fartuki_iz_stekla_na_zakaz" sh="6"> <li class="skinaly">Скинали</li></a><a class="lnk" href="/Raschet_stoimosti" sh="7"> <li class="calc">Расчет стоимости</li></a><a class="lnk" href="/Kontakty_kompanii_VEDITEX" sh="8"> <li class="cont">Контакты</li></a>
                        </ol>
                        <div class="lk" onclick="showmod('log')">Личный кабинет</div>
                    </nav>
                </div>	<script src=<?php echo e(asset("js/menup.js")); ?>></script>

                <div id="galery_slide">

                    <div id="screen">
                        
                        
                        
                        
                        
                        
                        <div class="b center_block" ttl="Расчет стоимости" id="box7">
                            <div class="calc_block">
                                <!--

                                            В данном калькуляторе Вы сможете рассчитать точную стоимость и сроки изготовления Вашего заказа,
                                            максимально быстро, понятным и простым интерфейсом, позволяющим оформить заказ без помощи менеджера и
                                            приезда в офис, а так же получить доступ к личному кабинету, отслеживая срок исполнения и статус изделия.

                                    -->	<div class="p hws"></div>
                                <div class="p">

                                    <div class="clac_top">
                                        <span class="number">1</span>
                                        <span class="calc_ttl">Выберите материал</span>
                                        <span class="selstep">-</span>
                                        <span class="bustep">
					<svg>
						<polyline points="0,15 15,0 30,15" fill="rgba(249,249,249,0)" stroke-width="2" stroke="rgb(0,0,0)"/>
					</svg>
				</span>
                                    </div>
                                    <span class="block_options">
				<button class="v2 u" onclick="c(1,1,this,false)">Стекло</button>
				<button class="v2 u" onclick="c(1,2,this,false)">Зеркало</button>
				<button class="v2  u" onclick="c(1,3,this,true)">Триплекс</button>
                                        <!--<button class="v2 u" onclick="c(1,4,this,false)">Конструкции</button>-->
			</span>

                                </div>
                                <div class="p hidden_block">
                                    <div class="clac_top">
                                        <span class="number">2</span>
                                        <span class="calc_ttl">Вид материала</span>
                                        <span class="selstep"></span>
                                        <span class="bustep">
					<svg>
						<polyline points="0,15 15,0 30,15" fill="rgba(249,249,249,0)" stroke-width="2" stroke="rgb(0,0,0)"/>
					</svg>
				</span>
                                    </div>
                                    <span class="block_options bus2">

			</span>
                                </div>





                                <div class="p hidden_block">

                                    <div class="clac_top">
                                        <span class="number">3</span>
                                        <span class="calc_ttl">Толщина изделия</span>
                                        <span class="selstep">-</span>
                                        <span class="bustep">
					<svg>
						<polyline points="0,15 15,0 30,15" fill="rgba(249,249,249,0)" stroke-width="2" stroke="rgb(0,0,0)"/>
					</svg>
				</span>
                                    </div>
                                    <span class="block_options bus3">

			</span>

                                </div>
                                <div class="p hidden_block">

                                    <div class="clac_top">
                                        <span class="number">4</span>
                                        <span class="calc_ttl">Форма и размеры</span>
                                        <span class="selstep">-</span>
                                        <span class="bustep">
					<svg>
						<polyline points="0,15 15,0 30,15" fill="rgba(249,249,249,0)" stroke-width="2" stroke="rgb(0,0,0)"/>
					</svg>
				</span>
                                    </div>
                                    <span class="block_options bus4">

			</span>

                                </div>
                                <div class="p hidden_block">

                                    <div class="clac_top">
                                        <span class="number">5</span>
                                        <span class="calc_ttl">Обработка кромок</span>
                                        <span class="selstep">-</span>
                                        <span class="bustep">
					<svg>
						<polyline points="0,15 15,0 30,15" fill="rgba(249,249,249,0)" stroke-width="2" stroke="rgb(0,0,0)"/>
					</svg>
				</span>
                                    </div>
                                    <span class="block_options bus5">

			</span>

                                </div>

                                <div class="p hidden_block">

                                    <div class="clac_top">
                                        <span class="number">6</span>
                                        <span class="calc_ttl">Дополнительно</span>
                                        <span class="selstep">-</span>
                                        <span class="bustep">
					<svg>
						<polyline points="0,15 15,0 30,15" fill="rgba(249,249,249,0)" stroke-width="2" stroke="rgb(0,0,0)"/>
					</svg>
				</span>
                                    </div>
                                    <span class="block_options bus6">
				po
			</span>

                                </div>


                                <div class="p hidden_block">

                                    <div class="clac_top">
                                        <span class="number">7</span>
                                        <span class="calc_ttl">Информация по заказу</span>
                                        <span class="selstep">-</span>
                                        <span class="bustep">
					<svg>
						<polyline points="0,15 15,0 30,15" fill="rgba(249,249,249,0)" stroke-width="2" stroke="rgb(0,0,0)"/>
					</svg>
				</span>
                                    </div>
                                    <span class="block_options bus7">

			</span>

                                </div>

                                <div class="hide">
                                    <div class="u11" title="Вид стекла" titleh="Толщина изделия">
	<span onmouseover="moc(2,1,this)" onmouseout="mx()" onclick="c(2,1,this,false)" class="box u">
		<span class="imagea e1"></span><br>
		<span class="ttls">Обычное</span>
	</span>
                                        <span onmouseover="moc(2,2,this)" onmouseout="mx()" onclick="c(2,2,this,false)" class="box u">
		<span class="imagea e3"></span><br>
		<span class="ttls">Оптивайт</span>
	</span>
                                        <span onmouseover="moc(2,3,this)" onmouseout="mx()" onclick="c(2,3,this,false)" class="box u">
		<span class="imagea e2"></span><br>
		<span class="ttls">Бронза</span>
	</span>

                                        <span onmouseover="moc(2,4,this)" onmouseout="mx()" onclick="c(2,4,this,false)" class="box u">
		<span class="imagea e4"></span><br>
		<span class="ttls">Матовое</span>
	</span>
                                        <span onmouseover="moc(2,5,this)" onmouseout="mx()" onclick="c(2,5,this,false)" class="box u">
		<span class="imagea e5"></span><br>
		<span class="ttls">Серое</span>
	</span>
                                        <div class="box_info1">
                                            Выберте стекло
                                        </div>
                                    </div>

                                    <div class="u12"  title="Вид зеркала" titleh="Толщина изделия">
                                        <!--<span onmouseover="moc(2,10,this)" onmouseout="mx()" onclick="c(2,10,this,false)" class="box u">
                                    <span class="imagea e1"></span> <br>
                                        <span class="ttls">Серебро</span>

                                    </span>-->
                                        <button class="v2 u" onmouseover="moc(2,10,this)" onmouseout="mx()" onclick="c(2,10,this,false)">Серебро</button>
                                        <!--<span onmouseover="moc(2,20,this)" onmouseout="mx()" onclick="c(2,20,this,false)" class="box u">
                                    <span class="imagea e2"></span> <br>
                                        <span class="ttls">Clearvision</span>

                                    </span>-->
                                        <button class="v2 u" onmouseover="moc(2,20,this)" onmouseout="mx()" onclick="c(2,20,this,false)">Clearvision</button>
                                        <!--<span onmouseover="moc(2,30,this)" onmouseout="mx()" onclick="c(2,30,this,false)" class="box u">
                                    <span class="imagea e3"></span> <br>
                                        <span class="ttls">Графит</span>

                                    </span>-->
                                        <button class="v2 u" onmouseover="moc(2,30,this)" onmouseout="mx()" onclick="c(2,30,this,false)">Графит</button>
                                        <br>
                                        <!--<span onmouseover="moc(2,40,this)" onmouseout="mx()" onclick="c(2,40,this,false)" class="box u">
                                    <span class="imagea e4"></span> <br>
                                        <span class="ttls">Бронза</span>

                                    </span>-->
                                        <button class="v2 u" onmouseover="moc(2,40,this)" onmouseout="mx()" onclick="c(2,40,this,false)">Бронза</button>
                                        <!--<span onmouseover="moc(2,50,this)" onmouseout="mx()" onclick="c(2,50,this,false)" class="box u">
                                    <span class="imagea e5"></span> <br>
                                        <span class="ttls">Золото</span>

                                    </span>-->
                                        <button class="v2 u" onmouseover="moc(2,50,this)" onmouseout="mx()" onclick="c(2,50,this,false)">Золото</button>
                                        <!--<span onmouseover="moc(2,60,this)" onmouseout="mx()" onclick="c(2,60,this,false)" class="box u">
                                    <span class="imagea e5"></span> <br>
                                        <span class="ttls">Эксклюзив</span>

                                    </span>-->
                                        <button class="v2 u" onmouseover="moc(2,60,this)" onmouseout="mx()" onclick="c(2,60,this,false)">Эксклюзив</button>
                                        <div class="box_info1">
                                            Выберте стекло
                                        </div>
                                    </div>


                                    <div class="u13" dest='1' title="Триплекс" titleh=" ">
                                        Существует безчисленное множество комбинаций использования многослойного стекла (триплекса).
                                        Систематизировать и рассчитывать автоматически - сложно. Поэтому для Вашего удобства мы предлагаем бесплатный расчет
                                        нашим специалистом по Вашему вопросу, который сможет с Вами связатся и подготовить для Вас нужную информацию по данной тематике,
                                        дать комментарии, рассказать как это будет выглядеть, сколько будет стоить и какие есть возможности реализации Вашего проекта.
                                    </div>



                                    <div class="u14" title="Конструкции" titleh="Ваши данные">

                                        <button class="v2 u" onmouseover="moc(2,86,this)" onmouseout="mx()" onclick="c(2,86,this,true)">Душевые ограждения</button>
                                        <button class="v2 u" onmouseover="moc(2,86,this)" onmouseout="mx()" onclick="c(2,86,this,true)">Уф-склейка</button>
                                        <button class="v2 u" onmouseover="moc(2,86,this)" onmouseout="mx()" onclick="c(2,86,this,true)">Зеркальное панно</button>
                                        <button class="v2 u" onmouseover="moc(2,86,this)" onmouseout="mx()" onclick="c(2,86,this,true)">Мебель из стекла</button>
                                        <button class="v2 u" onmouseover="moc(2,86,this)" onmouseout="mx()" onclick="c(2,86,this,true)">Перегородки</button>
                                        <button class="v2 u" onmouseover="moc(2,86,this)" onmouseout="mx()" onclick="c(2,86,this,true)">Цельностеклянные двери</button>
                                        <button class="v2 u" onmouseover="moc(2,86,this)" onmouseout="mx()" onclick="c(2,86,this,true)">Комплексное снабжение объектов</button>
                                        <button class="v2 u" onmouseover="moc(2,86,this)" onmouseout="mx()" onclick="c(2,86,this,true)">Лестницы и ограждения</button>
                                        <button class="v2 u" onmouseover="moc(2,86,this)" onmouseout="mx()" onclick="c(2,86,this,true)">Входнные группы</button>
                                        <button class="v2 u" onmouseover="moc(2,86,this)" onmouseout="mx()" onclick="c(2,86,this,true)">Зеркала с подсветкой</button>
                                        <button class="v2 u" onmouseover="moc(2,86,this)" onmouseout="mx()" onclick="c(2,86,this,true)">Кухонные фартуки</button>
                                        <button class="v2 u" onmouseover="moc(2,86,this)" onmouseout="mx()" onclick="c(2,86,this,true)">Аквариумы</button>
                                        <button class="v2 u" onmouseover="moc(2,86,this)" onmouseout="mx()" onclick="c(2,86,this,true)">Эксклюзив</button>

                                    </div>









                                    <div class="u31" title="Форма и размеры" titleh="Обработка кромок">
	<span onmouseover="moc(4,1,this)" onmouseout="mx()" onclick="c(4,1,this,false)" class="box u">
		<span class="imagea e21_1"></span><br>
		<span class="ttls">Прямоугольник</span>
	</span>
                                        <span onmouseover="moc(4,2,this)" onmouseout="mx()" onclick="c(4,2,this,false)" class="box u">
		<span class="imagea e21_2"></span><br>
		<span class="ttls">Круг</span>
	</span>
                                        <span onmouseover="moc(4,3,this)" onmouseout="mx()" onclick="c(4,3,this,false)" class="box u">
		<span class="imagea e21_3"></span><br>
		<span class="ttls">Овал</span>
	</span>
                                        <span onmouseover="moc(4,4,this)" onmouseout="mx()" onclick="c(4,4,this,false)" class="box u">
		<span class="imagea e21_4"></span><br>
		<span class="ttls">Иная форма</span>
	</span>

                                        <div class="box_info1 box_info2 box_info3" >
                                            <br>
                                            Выберите форму<br>будущего изделия
                                            <br>
                                        </div>
                                    </div>



                                    <div class="u42 u43 u44" title="Обработка кромок" titleh="Дополнительно">
                                        <div class="erd">
                                            <button class="v2 u kont" onmouseover="moc(5,1,this)" onmouseout="mx()" onclick="c(5,1,this,false)">Без обработки кромок</button>
                                            <button class="v2 u kont" onmouseover="moc(5,2,this)" onmouseout="mx()" onclick="c(5,2,this,false)">Полировка кромок</button>

                                        </div>

                                        <div class="box_info1 box_info2 ">
                                            <br>
                                            Выберите форму<br>будущего изделия
                                            <br>
                                        </div>
                                    </div>



                                    <div class="u41" title="Обработка кромок" titleh="Дополнительно">
                                        <div class="erd">
                                            <button class="v2 u kont" onmouseover="moc(5,1,this)" onmouseout="mx()" onclick="c(5,1,this,false)">Без обработки кромок</button>
                                            <button class="v2 u kont" onmouseover="moc(5,2,this)" onmouseout="mx()" onclick="c(5,2,this,false)">Полировка кромок</button>
                                            <button class="v2 u kont" onmouseover="moc(5,3,this)" onmouseout="mx()" onclick="c(5,3,this,false)">Фацет</button>
                                        </div>

                                        <div class="box_info1 box_info2 " >
                                            <br>
                                            Выберите форму<br>будущего изделия
                                            <br>
                                        </div>
                                    </div>




                                    <div class="u444" title="Обработка кромок" titleh="Дополнительно">
                                        <div class="erd">
                                            <button class="v2 u kont " onmouseover="moc(5,1,this)" onmouseout="mx()" onclick="c(5,1,this,false)">Без обработки кромок</button>
                                        </div>
                                        <div class="box_info1 box_info2"  >
                                            Кромка будет режуще-острой, а стекло хрупким. <br>
                                            Будьте осторожны! <br>

                                            <div class="imgclc c1"></div>
                                        </div>
                                    </div>





                                    <div class="u286" title="Инфо" >
                                        Мы так же производим сложные изделия в различных вариациях и формах.
                                        Но, ввиду, сложности автоматического расчета подобного изделия, предлагаем оставить заявку
                                        или связаться с нами для предоставления корректного расчета Вашего заказа. Так же Вы можете
                                        Сделать ТОЧНЫЙ расчет отдельно по стеклу и зеркалам в соотвествующих категорях данного калькулятора.
                                    </div>


                                    <!--
                                    <div class="p" id="u22">
                                        <button class="v2 u" onmouseover="moc(1,1,this)" onmouseout="mx()" onclick="c(1,1,this)">Стекло</button>
                                        <button class="v2 u" onmouseover="moc(1,2,this)" onmouseout="mx()" onclick="c(1,2,this)">Зеркало</button>
                                        <button class="v2 u" onmouseover="moc(1,3,this)" onmouseout="mx()" onclick="c(1,3,this)">Триплекс</button>
                                        <button class="v2 u" onmouseover="moc(1,4,this)" onmouseout="mx()" onclick="c(1,4,this)">Конструкции</button>
                                    </div>
                                    -->






                                    <div class="doppp">
                                        <br><br>
                                        <a class="contact" href="tel:+7 (49) 677-20-67">+7 (499) 677-20-67</a>
                                        <button onclick="showmod('spec')">Консультация и расчет</button>
                                        <a class="contact" href="mailto: info@v-t-x.ru">info@v-t-x.ru</a>
                                    </div>




                                    <div class="u51" title="Дополнительно" titleh="0">
                                        <div class="box3x3">
                                            <div class="d4r">
                                                <input type="checkbox" onchange="setcena0()" id="check24" >
                                                <label for="check24"><span class="checkbox" ></span><h3>Закалка (Термоупрочнение)</h3></label><br>


                                                <input type="checkbox" min='1' onchange="setcena0()" id="check25" class="zkey">
                                                <label for="check25"><span class="checkbox"></span><h3>Отверстия и вырезы</h3></label>
                                                <div class="hb1 zamok">
                                                    <input  type="number" placeholder="Количество"  onchange="setcena0()" id="otverstia" min="1" ></input>
                                                    <button class="v2 ML0" onclick="showfile(1)">Загрузить схему отверстий</button>
                                                </div>

                                                <input type="checkbox" onchange="setcena0()" id="check255">
                                                <label for="check255"><span class="checkbox" ></span><h3>Монтаж</h3></label><br>
                                                <!--
                                                <select name="noe" id="">
                                                    <option value="bbb">111</option>
                                                </select>
                                                -->
                                            </div>
                                            <div class="d4r">
                                                <input onchange="setcena0()" type="checkbox" id="check26" class="zkey">
                                                <label for="check26"><span class="checkbox"></span>
                                                    <h3>Скругления по углам</h3>
                                                </label><br>
                                                <div class="hb2 zamok">
                                                    <input onchange="setcena0()" type="number" min="1" max="4" id="skrgl" placeholder="Количество скруглений"></input>
                                                    <input type="number" id="skrgl5" placeholder="Радиус скруглений (мм)"></input>
                                                    <button class="v2 ML0" onclick="showfile(3)">Загрузить схему скруглений</button>
                                                </div>
                                            </div>

                                            <div class="d4r">
                                                <input onchange="setcena0()" type="checkbox" id="check27">
                                                <label for="check27"><span class="checkbox"></span>
                                                    <h3>Покраска стекла</h3>
                                                </label><br>

                                                <input onchange="setcena0()" type="checkbox" id="check28">
                                                <label for="check28"><span class="checkbox"></span>
                                                    <h3>УФ-печать</h3>
                                                </label><br>

                                                <input onchange="setcena0()" type="checkbox" id="check29" class="zkey">
                                                <label for="check29"><span class="checkbox"></span>
                                                    <h3>Пескоструй</h3>
                                                </label><br>

                                                <div class="hb2 zamok">
                                                    <select  onchange="setcena0()" name="noe" id="peskostr">
                                                        <option value="1">Рисунок</option>
                                                        <option value="2">Целиком</option>
                                                    </select>
                                                    <button class="v2 ML0" onclick="showfile(2)">Загрузить рисунок</button>
                                                </div>
                                            </div>

                                        </div>
                                    </div>




                                    <div class="u52" title="Дополнительно" titleh="0">
                                        <div class="box3x3">
                                            <div class="d4r">


                                                <input type="checkbox" min='1' onchange="setcena0()" id="check25" class="zkey">
                                                <label for="check25"><span class="checkbox"></span><h3>Отверстия и вырезы</h3></label>
                                                <div class="hb1 zamok">
                                                    <input  type="number" placeholder="Количество"  onchange="setcena0()" id="otverstia" min="1" ></input>
                                                    <button class="v2 ML0" onclick="showfile()">Загрузить схему отверстий</button>
                                                </div>

                                                <input type="checkbox" onchange="setcena0()" id="check255">
                                                <label for="check255"><span class="checkbox" ></span><h3>Монтаж</h3></label><br>
                                                <!--
                                                <select name="noe" id="">
                                                    <option value="bbb">111</option>
                                                </select>
                                                -->
                                            </div>
                                            <div class="d4r">
                                                <input onchange="setcena0()" type="checkbox" id="check26" class="zkey">
                                                <label for="check26"><span class="checkbox"></span>
                                                    <h3>Скругления по углам</h3>
                                                </label><br>
                                                <div class="hb2 zamok">
                                                    <input onchange="setcena0()" type="number" min="1" max="4" id="skrgl" placeholder="Количество скруглений"></input>
                                                    <input type="number" id="skrgl5" placeholder="Радиус скруглений (мм)"></input>
                                                    <button class="v2 ML0" onclick="showfile()">Загрузить схему скруглений</button>
                                                </div>
                                            </div>

                                            <div class="d4r">

                                                <input onchange="setcena0()" type="checkbox" id="check28">
                                                <label for="check28"><span class="checkbox"></span>
                                                    <h3>УФ-печать</h3>
                                                </label><br>

                                                <input onchange="setcena0()" type="checkbox" id="check29" class="zkey">
                                                <label for="check29"><span class="checkbox"></span>
                                                    <h3>Пескоструй</h3>
                                                </label><br>

                                                <div class="hb2 zamok">
                                                    <select  onchange="setcena0()" name="noe" id="peskostr">
                                                        <option value="1">Рисунок</option>
                                                        <option value="2">Целиком</option>
                                                    </select>
                                                    <button class="v2 ML0" onclick="showfile()">Загрузить рисунок</button>
                                                </div>
                                            </div>

                                        </div>
                                    </div>



                                    <div class="u53 l" title="Дополнительно" titleh="0">
                                        <div class="box3x3 l">


                                            <input type="checkbox" onchange="setcena0()" id="check255">
                                            <label for="check255"><span class="checkbox" ></span><h3>Монтаж</h3></label><br>


                                            <input onchange="setcena0()" type="checkbox" id="check26" class="zkey">
                                            <label for="check26"><span class="checkbox"></span>
                                                <h3>Скругления по углам</h3>
                                            </label><br>
                                            <div class="hb2 zamok">
                                                <input onchange="setcena0()" type="number" min="1" max="4" id="skrgl" placeholder="Количество скруглений"></input>
                                                <input type="number" id="skrgl5" placeholder="Радиус скруглений (мм)"></input>
                                                <button class="v2 ML0" onclick="showfile()">Загрузить схему отверстий</button>
                                            </div>



                                        </div>
                                    </div>






























                                    <div class="u21" title="Толщина изделия" titleh="Форма и размеры">
	<span  class="box_height">
		<span class="bh u" onclick="c(3,1,this,false)">3</span>
		<span class="bh u" onclick="c(3,2,this,false)">4</span>
		<span class="bh u" onclick="c(3,3,this,false)">5</span>
		<span class="bh u" onclick="c(3,4,this,false)">6</span>
		<span class="bh u" onclick="c(3,5,this,false)">8</span>
		<span class="bh u" onclick="c(3,6,this,false)">10</span>
		<span class="bh u" onclick="c(3,7,this,false)">12</span>
		<span class="bh u" onclick="c(3,8,this,false)">15</span>
		<span class="bh u" onclick="c(3,9,this,false)">19</span>
	</span>


                                        <div class="box_info2">
                                            <br>
                                            <svg style="margin-top: 10px;" height="50" width="280">
                                                <polyline points="30,1 0,30 250,30 270,1 30,1" fill="rgb(249,249,249)" stroke-width="1" stroke="rgb(0,0,0)"/>
                                                <polyline points="0,30 0,40 250,40 250,30" fill="rgb(100,100,249)" stroke-width="1" stroke="rgb(0,0,0)"/>
                                                <polyline points="250,40 270,10 270,1 250,30" fill="rgb(100,100,249)" stroke-width="1" stroke="rgb(0,0,0)"/>
                                            </svg>

                                        </div>

                                        <div class="box_info1">
                                            <!-- Толщина зависит -->
                                        </div>
                                    </div>








                                    <div class="u23" title="Толщина изделия" titleh="Форма и размеры">
                                        <!--  Бронза  -->
                                        <span style="width: 150px;" class="box_height">
		<span class="bh u" onmouseover="moc(3,1,this)" onmouseout="mx()" onclick="c(3,1,this,false)">4</span>
		<span class="bh u" onmouseover="moc(3,2,this)" onmouseout="mx()" onclick="c(3,2,this,false)">6</span>
		<span class="bh u" onmouseover="moc(3,3,this)" onmouseout="mx()" onclick="c(3,3,this,false)">8</span>
		<span class="bh u" onmouseover="moc(3,4,this)" onmouseout="mx()" onclick="c(3,4,this,false)">10</span>
	</span>


                                        <div class="box_info2">
                                            <br>
                                            <svg style="margin-top: 10px;" height="50" width="280">
                                                <polyline points="30,1 0,30 250,30 270,1 30,1" fill="rgb(249,249,249)" stroke-width="1" stroke="rgb(0,0,0)"/>
                                                <polyline points="0,30 0,40 250,40 250,30" fill="rgb(100,100,249)" stroke-width="1" stroke="rgb(0,0,0)"/>
                                                <polyline points="250,40 270,10 270,1 250,30" fill="rgb(100,100,249)" stroke-width="1" stroke="rgb(0,0,0)"/>
                                            </svg>

                                        </div>

                                        <div class="box_info1">
                                            <!-- Толщина зависит -->
                                        </div>
                                    </div>






                                    <div class="u22" title="Толщина изделия" titleh="Форма и размеры">
                                        <!--  Оптивайт  -->
                                        <span  style="width: 250px;" class="box_height">
		<span class="bh u" onmouseover="moc(3,1,this)" onmouseout="mx()" onclick="c(3,1,this,false)">4</span>
		<span class="bh u" onmouseover="moc(3,2,this)" onmouseout="mx()" onclick="c(3,2,this,false)">5</span>
		<span class="bh u" onmouseover="moc(3,3,this)" onmouseout="mx()" onclick="c(3,3,this,false)">6</span>
		<span class="bh u" onmouseover="moc(3,4,this)" onmouseout="mx()" onclick="c(3,4,this,false)">8</span>
		<span class="bh u" onmouseover="moc(3,5,this)" onmouseout="mx()" onclick="c(3,5,this,false)">10</span>
		<span class="bh u" onmouseover="moc(3,6,this)" onmouseout="mx()" onclick="c(3,6,this,false)">12</span>
		<span class="bh u" onmouseover="moc(3,7,this)" onmouseout="mx()" onclick="c(3,7,this,false)">15</span>
		<span class="bh u" onmouseover="moc(3,8,this)" onmouseout="mx()" onclick="c(3,8,this,false)">19</span>

	</span>


                                        <div class="box_info2">
                                            <br>
                                            <svg style="margin-top: 10px;" height="50" width="280">
                                                <polyline points="30,1 0,30 250,30 270,1 30,1" fill="rgb(249,249,249)" stroke-width="1" stroke="rgb(0,0,0)"/>
                                                <polyline points="0,30 0,40 250,40 250,30" fill="rgb(100,100,249)" stroke-width="1" stroke="rgb(0,0,0)"/>
                                                <polyline points="250,40 270,10 270,1 250,30" fill="rgb(100,100,249)" stroke-width="1" stroke="rgb(0,0,0)"/>
                                            </svg>

                                        </div>

                                        <div class="box_info1">
                                            <!-- Толщина зависит -->
                                        </div>
                                    </div>



                                    <div class="u24" title="Толщина изделия" titleh="Форма и размеры">
                                        <!--  Матовое  -->
                                        <span style="width: 200px;" class="box_height">
		<span class="bh u" onmouseover="moc(3,1,this)" onmouseout="mx()" onclick="c(3,1,this,false)">4</span>
		<span class="bh u" onmouseover="moc(3,2,this)" onmouseout="mx()" onclick="c(3,2,this,false)">6</span>
		<span class="bh u" onmouseover="moc(3,3,this)" onmouseout="mx()" onclick="c(3,3,this,false)">8</span>
		<span class="bh u" onmouseover="moc(3,4,this)" onmouseout="mx()" onclick="c(3,4,this,false)">10</span>
		<span class="bh u" onmouseover="moc(3,5,this)" onmouseout="mx()" onclick="c(3,5,this,false)">12</span>
	</span>


                                        <div class="box_info2">
                                            <br>
                                            <svg style="margin-top: 10px;" height="50" width="280">
                                                <polyline points="30,1 0,30 250,30 270,1 30,1" fill="rgb(249,249,249)" stroke-width="1" stroke="rgb(0,0,0)"/>
                                                <polyline points="0,30 0,40 250,40 250,30" fill="rgb(100,100,249)" stroke-width="1" stroke="rgb(0,0,0)"/>
                                                <polyline points="250,40 270,10 270,1 250,30" fill="rgb(100,100,249)" stroke-width="1" stroke="rgb(0,0,0)"/>
                                            </svg>

                                        </div>

                                        <div class="box_info1">
                                            <!-- Толщина зависит -->
                                        </div>
                                    </div>

                                    <div class="u25" title="Толщина изделия" titleh="Форма и размеры">
                                        <!--  серое  -->
                                        <span style="width: 150px;" class="box_height">
		<span class="bh u" onmouseover="moc(3,1,this)" onmouseout="mx()" onclick="c(3,1,this,false)">4</span>
		<span class="bh u" onmouseover="moc(3,2,this)" onmouseout="mx()" onclick="c(3,2,this,false)">6</span>
		<span class="bh u" onmouseover="moc(3,3,this)" onmouseout="mx()" onclick="c(3,3,this,false)">8</span>
		<span class="bh u" onmouseover="moc(3,4,this)" onmouseout="mx()" onclick="c(3,4,this,false)">10</span>
	</span>


                                        <div class="box_info2">
                                            <br>
                                            <svg style="margin-top: 10px;" height="50" width="280">
                                                <polyline points="30,1 0,30 250,30 270,1 30,1" fill="rgb(249,249,249)" stroke-width="1" stroke="rgb(0,0,0)"/>
                                                <polyline points="0,30 0,40 250,40 250,30" fill="rgb(100,100,249)" stroke-width="1" stroke="rgb(0,0,0)"/>
                                                <polyline points="250,40 270,10 270,1 250,30" fill="rgb(100,100,249)" stroke-width="1" stroke="rgb(0,0,0)"/>
                                            </svg>

                                        </div>

                                        <div class="box_info1">		<!-- Толщина зависит -->

                                        </div>
                                    </div>
























                                    <div class="u210" title="Толщина изделия" titleh="Форма и размеры">

                                        <!--   Зеркало 4 мм серебро  -->
                                        <span style="width: 150px;" class="box_height">
		<span class="bh u" onmouseover="moc(3,1,this)" onmouseout="mx()" onclick="c(3,1,this,false)">4</span>
		<span class="bh u" onmouseover="moc(3,2,this)" onmouseout="mx()" onclick="c(3,2,this,false)">5</span>
		<span class="bh u" onmouseover="moc(3,3,this)" onmouseout="mx()" onclick="c(3,3,this,false)">6</span>
	</span>


                                        <div class="box_info2">
                                            <br>
                                            <svg style="margin-top: 10px;">
                                                <polyline points="30,1 0,30 250,30 270,1 30,1" fill="rgb(249,249,249)" stroke-width="1" stroke="rgb(0,0,0)"/>
                                                <polyline points="0,30 0,40 250,40 250,30" fill="rgb(100,100,249)" stroke-width="1" stroke="rgb(0,0,0)"/>
                                                <polyline points="250,40 270,10 270,1 250,30" fill="rgb(100,100,249)" stroke-width="1" stroke="rgb(0,0,0)"/>
                                            </svg>
                                        </div>

                                        <div class="box_info1">
                                            Толщина зависит
                                        </div>
                                    </div>




                                    <div class=" u230 u240 u250 u260" title="Толщина изделия" titleh="Форма и размеры">
                                        <!--    граф    -->
                                        <!--    ckth    -->
                                        <!--    золоо     -->
                                        <span style="width: 150px;" class="box_height">
		<span class="bh u" onmouseover="moc(3,1,this)" onmouseout="mx()" onclick="c(3,1,this,false)">4</span>
	</span>


                                        <div class="box_info2">
                                            <br>
                                            <svg style="margin-top: 10px;">
                                                <polyline points="30,1 0,30 250,30 270,1 30,1" fill="rgb(249,249,249)" stroke-width="1" stroke="rgb(0,0,0)"/>
                                                <polyline points="0,30 0,40 250,40 250,30" fill="rgb(100,100,249)" stroke-width="1" stroke="rgb(0,0,0)"/>
                                                <polyline points="250,40 270,10 270,1 250,30" fill="rgb(100,100,249)" stroke-width="1" stroke="rgb(0,0,0)"/>
                                            </svg>
                                        </div>

                                        <div class="box_info1">
                                            Толщина зависит
                                        </div>
                                    </div>





                                    <div class="u220" title="Толщина изделия" titleh="Форма и размеры">
                                        <!--    Зеркало 6 мм осветленное     -->
                                        <span style="width: 150px;" class="box_height">
		<span class="bh u" onmouseover="moc(3,1,this)" onmouseout="mx()" onclick="c(3,1,this,false)">4</span>
		<span class="bh u" onmouseover="moc(3,2,this)" onmouseout="mx()" onclick="c(3,2,this,false)">6</span>
	</span>


                                        <div class="box_info2">
                                            <br>
                                            <svg style="margin-top: 10px;">
                                                <polyline points="30,1 0,30 250,30 270,1 30,1" fill="rgb(249,249,249)" stroke-width="1" stroke="rgb(0,0,0)"/>
                                                <polyline points="0,30 0,40 250,40 250,30"     fill="rgb(100,100,249)" stroke-width="1" stroke="rgb(0,0,0)"/>
                                                <polyline points="250,40 270,10 270,1 250,30"  fill="rgb(100,100,249)" stroke-width="1" stroke="rgb(0,0,0)"/>
                                            </svg>
                                        </div>

                                        <div class="box_info1">
                                            Толщина зависит
                                        </div>
                                    </div>


















                                    <div class="u61" title="Информация по заказу" titleh="0">
                                        <div class="user_data">
                                            <div class="a l">Имя</div>
                                            <input type="text" onchange="cuser(this,1)" value="bvzxczxcxz">
                                            <div class="a l">Номер телефона</div>
                                            <input type="text" class="Aphone" onchange="cuser(this,2)" value="321312321231">
                                            <button class="bgsize" onclick="cor_to_cookie(); ORDER();">Оформить заказ</button>

                                        </div>

                                        <div class="user_data ">
                                            <div class="a l">Количество изделий</div>
                                            <div class="btnn" onclick="gsa(-1)">-</div>
                                            <input id="kolvoizd" class="mka" value="1" min="1" onchange="setcena0()" type="number">
                                            <div class="btnn" onclick="gsa(1)">+</div>
                                            <div class="a l" >Эл. почта</div>
                                            <input type="email" onchange="cuser(this,3)" value="bobo@gmailc">
                                            <button class="corzina_btn bgsize" onmouseover="moc(Добавить в корзину,this)" onmouseout="mx()" onclick="cor_to_cookie()">Добавить в корзину</button>
                                        </div>

                                        <div class="user_data user_data2">
                                            <div class="a l">Адрес доставки</div>
                                            <input id="addressdost" type="text" onchange="cuser(this,4)" value="">

                                            <div class="a l">Комментарий к изделию</div>
                                            <textarea id="Komments" style="max-height: 85px; min-height: 85px;" id="" cols="30" rows="4" onchange="cuser(this,5)"></textarea>

                                            <input type="radio" onchange="setcena0()" name="dostavc" id="dos1" >
                                            <label for="dos1"><span class="txtradio">В пределах<br>МКАД</span></label>

                                            <input type="radio" onchange="setcena0()" name="dostavc" id="dos2" >
                                            <label for="dos2"><span  class="txtradio">Не более 5 км<br>от МКАД</span></label>


                                            <input type="radio" onchange="setcena0()" name="dostavc" id="dos3">
                                            <label for="dos3"><span class="txtradio">Московская<br>область</span></label>
                                        </div>

                                        <div class="user_data smsize">
                                            <p>
                                                <button class="corzina_btn"  onclick="cor_to_cookie()">Добавить в корзину</button>
                                                <button onclick="cor_to_cookie(); ORDER();">Оформить заказ</button>
                                            </p>
                                        </div>
                                    </div>


                                </div>


                                <div class="hide" id="i11">
                                    Стекло М1, прозрачное, или простое, обычное стекло.
                                    Все это - названия флоат-стекла, являющегося самым популярным материалом <br> в стекольной промышенности. Имеет зеленоватый оттенок,
                                    ярко выраженный, если смотреть с торца. Этот недостаток компенсируется низкой ценой.
                                </div>

                                <div class="hide" id="i12">
                                    Осветленное стекло (Optiwhite, Clearvision). Данное стекло почти не имеет сторонних оттенков, <br>
                                    кроме благородного, светло-голубого цвета, заметного глазу лишь с торца изделия.
                                </div>

                                <div class="hide" id="i13">
                                    Тонированное в массе стекло (без пленок и покрытий) в темно бронзовый цвет. Как имногие другие виды стекла можно закаливать. На стекле почти
                                    не заметна грязь и отпечатки рук. В сумме с общестекольным признаком - легкой очисткой, образует отличное сочетание для использования не
                                    только в частных интерьерах, но и в общественных местах с высокой проходимостью.
                                </div>

                                <div class="hide" id="i14">
                                    Матовое стекло (сатинат, Satinato) - это вид стекла с односторонним матовым покрытием, нанесенным путем химического травления,
                                    за счет чего, возникает светорассеивающий эффект, благодаря которому, видно лишь силуэты объектов и свет.
                                    За счет химического травления, а не грубого пескоструя, гораздо легче мыть и стекло более грязеустойчиво.
                                </div>

                                <div class="hide" id="i15">
                                    Тонированное в массе стекло (без пленок и покрытий) в темно-серый цвет. Как имногие другие виды стекла можно закаливать. На стекле почти
                                    не заметна грязь и отпечатки рук. В сумме с общестекольным признаком - легкой очисткой, образует отличное сочетание для использования не
                                    только в частных интерьерах, но и в общественных местах с высокой проходимостью. Так же идеально вписывается в современные стили.
                                </div>




                                <div class="hide" id="i210">
                                    Обычное зеркало, которое используется повсеместно, в частных домах, спорт-залах, общественных местах, лифтах и пр. класса эконом.
                                    Имеет почти не заметный зеленоватый оттенок, выделяющийся только в светлых помещениях и интерьерах.
                                </div>

                                <div class="hide" id="i220">
                                    Зеркало с наилучим отражением, без заметному глазу оттенков. Самый белый материал известный науке (отражение света). Цена на данный вид
                                    материала ощутимо выше, поскольку за основу берется стекло ClearVision. Используется повсеместно в интерьерах класса Премиум / Люкс.
                                </div>

                                <div class="hide" id="i230">
                                    Зеркало на основе тонированного в массе серого стекла, с нанесением амальгамы. Используется в примерочных комнатах, в шоурумах
                                    и в дизайнерских интерьерах. Не подходит для бытового использования (как обычное зеркало), носит декоративный и условно-практическую функцию.
                                </div>

                                <div class="hide" id="i240">
                                    Зеркало на основе тонированного в массе стекла "Бронза", с нанесением амальгамы. Используется в примерочных комнатах, в шоурумах
                                    и в дизайнерских интерьерах. Не подходит для бытового использования (как обычное зеркало), носит декоративный и условно-практическую функцию.
                                </div>

                                <div class="hide" id="i250">
                                    Зеркало с эффектным золотым отражением. В наличии 2 типа золотых зеркал  - "Шампань" (мягкий тон) и "Обычное золото" (ярко-оранжевое).
                                    Все нюансы будут согласованы с нашим менеджером, который перезвонит Вам после оформления заказа.
                                </div>

                                <div class="hide" id="i260">
                                    В данную категорию входят эксклюзивные виды зеркал, такие как - состаренные зеркала, зеркало-шпион, кракелюр и цветные зеркала.
                                    Ввиду сложности согласования деталей, просьба оформить заказ и дождаться звонка специалиста, который даст всю интересующую Вас информацию.
                                    Цена эксклюзивных зеркал колеблится. Поэтому для данного вида рассчитываем стоимость исходя из среднего значения стоимости.
                                </div>




                                <!-- выше описание стекол, ниже - зеркал (под картинкой которые)  -->




                                <div class="hide" id="i111">
                                    211 1
                                </div>

                                <div class="hide" id="i112">
                                    221 2
                                </div>

                                <div class="hide" id="i113">
                                    231 3
                                </div>

                                <div class="hide" id="i114">
                                    241 4
                                </div>

                                <div class="hide" id="i115">
                                    251 5
                                </div>







                                <div class="hide" id="tolshina">
                                    толщина
                                </div>




                                <!-- есть вероятност, что ниже - ненужное гавно  -->

                                <div class="hide" id="i210">
                                    Стекло М1, прозрачное, или простое, обычное стекло. <br>
                                    Все это - названия флоат-стекла, являющегося самым популярным материалом в стекольной промышенности. Имеет зеленоватый оттенок, <br>
                                    ярко выраженный, если смотреть с торца. Этот недостаток компенсируется низкой ценой.
                                </div>

                                <div class="hide" id="i220">
                                    фывфывфыв

                                </div>

                                <div class="hide" id="i230">
                                    3Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vel voluptate perspiciatis, aliquam eius sequi architecto iste dolore eaque ea, repellendus doloremque nemo voluptatem, laboriosam, molestiae.
                                </div>

                                <div class="hide" id="i240">
                                    4Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vel voluptate perspiciatis, aliquam eius sequi architecto iste dolore eaque ea, repellendus doloremque nemo voluptatem, laboriosam, molestiae.
                                </div>

                                <div class="hide" id="i250">
                                    5Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vel voluptate perspiciatis, aliquam eius sequi architecto iste dolore eaque ea, repellendus doloremque nemo voluptatem, laboriosam, molestiae.
                                </div>

                                <div class="hide" id="i260">
                                    6sectetur adipisicing elit. Vel voluptate perspiciatis, aliquam eius sequi architecto iste dolore eaque ea, repellendus doloremque nemo voluptatem, laboriosam, molestiae.
                                </div>


                                <div class="hide" id="i270">
                                    4Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vel voluptate perspiciatis, aliquam eius sequi architecto iste dolore eaque ea, repellendus doloremque nemo voluptatem, laboriosam, molestiae.
                                </div>

                                <div class="hide" id="i280">
                                    5Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vel voluptate perspiciatis, aliquam eius sequi architecto iste dolore eaque ea, repellendus doloremque nemo voluptatem, laboriosam, molestiae.
                                </div>

                                <div class="hide" id="i290">
                                    6sectetur adipisicing elit. Vel voluptate perspiciatis, aliquam eius sequi architecto iste dolore eaque ea, repellendus doloremque nemo voluptatem, laboriosam, molestiae.
                                </div>








                                <div class="hide" id="i31">
                                    5Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vel voluptate perspiciatis, aliquam eius sequi architecto iste dolore eaque ea, repellendus doloremque nemo voluptatem, laboriosam, molestiae.
                                </div>






                                <div class="hide" id="i51">
                                    Кромка будет режуще-острой, а стекло хрупким. <br>
                                    Будьте осторожны! <br>

                                    <div class="imgclc c1"></div>
                                </div>

                                <div class="hide" id="i52">
                                    Полировка кромок, помимо травмобезопасности, делает стекло прочнее и эстетичнее.<br>
                                    <div class="imgclc c2"></div>
                                </div>






                                <div class="hide" id="i53">
                                    <div class="rdbpanel">
                                        <input type="radio" onchange="setcena0()" name="facetsize" id="rdk1">
                                        <label for="rdk1"><span class="txtradio">10 мм</span></label>
                                        <input type="radio" onchange="setcena0()" name="facetsize" id="rdk2">
                                        <label for="rdk2"><span class="txtradio">15 мм</span></label>
                                        <input type="radio" onchange="setcena0()" name="facetsize" id="rdk3" checked>
                                        <label for="rdk3"><span  class="txtradio">20 мм</span></label>
                                        <input type="radio" onchange="setcena0()" name="facetsize" id="rdk4">
                                        <label for="rdk4"><span class="txtradio">30 мм</span></label>
                                        <input type="radio" onchange="setcena0()" name="facetsize" id="rdk5">
                                        <label for="rdk5"><span class="txtradio">40 мм</span></label>
                                    </div><br>
                                    <div class="imgclc c3"></div>
                                </div>


                                <div class="hide" id="i54">
                                    <div class="rdbpanel">
                                        <input type="radio" onchange="setcena0()" name="facetsize" id="rdk1">
                                        <label for="rdk1"><span class="txtradio">10 мм</span></label>
                                        <input type="radio" onchange="setcena0()" name="facetsize" id="rdk2" checked>
                                        <label for="rdk2"><span class="txtradio">15 мм</span></label>
                                        <input type="radio" onchange="setcena0()" name="facetsize" id="rdk3" >
                                        <label for="rdk3"><span  class="txtradio">20 мм</span></label>
                                    </div><br>
                                    <div class="imgclc c3"></div>
                                </div>


                                <div class="hide" id="i41"><br>
                                    Введите значения<br>(мм)<br>
                                    <div class="parwht">
                                        <input id="wh08" onkeyup="prebla5()" min="100" type="number" placeholder="Ширина">
                                        <div class="a l d-i-b ">x</div>
                                        <input id="hg08" onkeyup="prebla5()" min="100" type="number" placeholder="Высота">
                                    </div>

                                </div>

                                <div class="hide" id="i42"><br>
                                    Введите значения<br>(мм)<br>
                                    <input id="rad08" onkeyup="prebla3()" min="100" type="number" placeholder="Диаметр (мм)">

                                </div>




                                <div class="hide" id="i44"><br>
                                    Введите значения<br>(мм)<br>
                                    <div class="parwht">
                                        <input id="wh08" onkeyup="prebla5()" min="100" type="number" placeholder="Ширина">
                                        <div class="a l d-i-b ">x</div>
                                        <input id="hg08" onkeyup="prebla5()" min="100" type="number" placeholder="Высота">
                                    </div>
                                    <button class="v2 w95" onclick="showfile(0)">Загрузить чертеж</button>
                                </div>










                            </div>
                            <div class="predata">
                            </div>  <script>$(function(){
                                    $(".itm").mouseover(function(){vc(event,this);});
                                    $(".itm").mouseout(function(){vc2(event,this);});
                                    $(".itm").mousemove(function(){vc3(event,this);});
                                    $(".uh_button").find('li').on("click",function(){gal_goto(this);});
                                    $(".up_block").on("click",function(){showp(this,event);});
                                    $(".bustep").on('click',function(){clocess(this,event);});
                                    $(".rdbpanel").find(".txtradio").on(function(){setcena0();});


                                    $(".itm").mouseover(function(){vc(event,this);});
                                    $(".itm").mouseout(function(){vc2(event,this);});
                                    $(".itm").mousemove(function(){vc3(event,this);});


                                    //$(".bustep").on('click',function(){clocess(this,event);});

                                    //pfs2ys[2] = 1;

                                    lldaata(today);

                                    $(".Aphone").mask("9 (999) 999-9999");
                                });



                                var caalc;
                                function cor_to_cookie(){
                                    var cookie_calc = getCookie("cxx");
                                    if (cookie_calc!=''){
                                        cookie_calc = JSON.parse(cookie_calc);
                                    } else {
                                        cookie_calc = [];
                                    }
                                    var newCalc = [];

                                    newCalc[0] = CALC[1]-1; //mat
                                    if (newCalc[0]==0){
                                        newCalc[1] = CALC[2]-1; //vid
                                    } else {
                                        newCalc[1] = CALC[2] / 10 -1; //vid
                                    }

                                    newCalc[2] = '0'; //tols	+
                                    newCalc[3] = CALC[4]-1; //type
                                    newCalc[4] = '0'; //size	+
                                    newCalc[5] = '0'; //polir	+
                                    newCalc[6] = '0'; //otv 	+
                                    newCalc[7] = '0'; //zakal	+
                                    newCalc[8] = 'false'; //paint	+
                                    newCalc[9] = 'false'; //uf	+
                                    newCalc[10] = [false, 0]; //pesk	+
                                    newCalc[11] = '0'; //pest_type
                                    newCalc[12] = '0'; //scrugl	+
                                    newCalc[13] = '0'; //kol_vo	+
                                    newCalc[14] = '0'; //price1
                                    newCalc[15] = '0'; //price2
                                    newCalc[16] = '0'; //data_start
                                    newCalc[17] = '0'; //data_finish
                                    newCalc[18] = '0'; //dostavka
                                    newCalc[19] = ''; //komment


                                    newCalc[7] = 0;

                                    caalc = '';
                                    for (var i=2;i<CALC_info.length;i++){
                                        if (i==4){
                                            caalc+=": Толщина - ";
                                            newCalc[2] = parseInt(CALC_info[i]);
                                        }
                                        caalc+=CALC_info[i];

                                        if (i==5){
                                            caalc+=": Размеры "+Math.ceil(p0width*1000)+'x'+Math.ceil(p0height*1000)+' мм.';
                                            newCalc[4] = [Math.ceil(p0width*1000), Math.ceil(p0height*1000)];
                                        }
                                        if (i==6){
                                            newCalc[5] = [0, 0, 0];
                                            if (CALC_info[i]=="Фацет"){
                                                newCalc[5][0] = 2;
                                                if ($("#rdk1")[0].checked){ caalc+=" 10 мм "; newCalc[5][2] = 0;}
                                                if ($("#rdk2")[0].checked){ caalc+=" 15 мм "; newCalc[5][2] = 1;}
                                                if ($("#rdk3")[0].checked){ caalc+=" 20 мм "; newCalc[5][2] = 2;}
                                                if ($("#rdk4")[0].checked){ caalc+=" 30 мм "; newCalc[5][2] = 3;}
                                                if ($("#rdk5")[0].checked){ caalc+=" 40 мм "; newCalc[5][2] = 4;}
                                            } else if (CALC_info[i]=="Полировка кромок"){
                                                newCalc[5][0] = 1;
                                            }
                                        }
                                        caalc+=':';
                                    }
                                    var d = (parseInt($("#day")[0].innerHTML)<10)?'0'+$("#day")[0].innerHTML:$("#day")[0].innerHTML;
                                    var m = (parseInt($("#month")[0].innerHTML)<10)?'0'+$("#month")[0].innerHTML:$("#month")[0].innerHTML;
                                    var y = (parseInt($("#yar")[0].innerHTML)<10)?'0'+$("#yar")[0].innerHTML:$("#yar")[0].innerHTML;
                                    var days = d+'.'+m+'.'+y;

                                    var tm = new Date();
                                    var curr_date = tm.getDate();
                                    var curr_month = tm.getMonth() + 1;
                                    var curr_year = tm.getFullYear();

                                    if (curr_date<10){curr_date='0'+curr_date;}
                                    if (curr_month<10){curr_month='0'+curr_month;}

                                    newCalc[16] = curr_date+'.'+curr_month+'.'+curr_year;
                                    newCalc[17] = days;


                                    if ($("#check24").prop("checked")){
                                        caalc+='Закалка:';
                                        newCalc[7] = 1;
                                    }

                                    if ($("#check25").prop("checked")){
                                        caalc+='Отверстия '+$("#otverstia")[0].value+' шт.:';
                                        newCalc[6] = $("#otverstia")[0].value;
                                    }

                                    if ($("#check255").prop("checked")){
                                        caalc+='Монтаж:';
                                        newCalc[19]+='[Монтаж]';
                                    }

                                    if ($("#check26").prop("checked")){
                                        var gs234 = parseInt($("#skrgl")[0].value);
                                        if ($("#skrgl")[0].value==''){
                                            gs234 =1;
                                        }

                                        var gs236 = parseInt($("#skrgl5")[0].value);
                                        if ($("#skrgl5")[0].value==''){
                                            gs236 = 1;
                                        }
                                        caalc+='Скругление '+gs234 +' шт. '+gs236+' (мм):';

                                        newCalc[12] = [gs234, gs236];

                                    }




                                    if ($("#check27").prop("checked")){
                                        caalc+='Покраска стекла:';
                                        newCalc[8] = 'true';
                                    }


                                    if ($("#check28").prop("checked")){
                                        caalc+='УФ-печать:';
                                        newCalc[9] = 'true';
                                    }

                                    if ($("#check29").prop("checked")){
                                        var dd42g;
                                        newCalc[10][0] = true;
                                        if ($("#peskostr")[0].value==1){
                                            dd42g = "Рисунок";
                                            newCalc[10][1] = 0;
                                        } else {
                                            dd42g = "Целиком";
                                            newCalc[10][1] = 1;
                                        }
                                        caalc+='Пескоструй ('+dd42g+"):";
                                    }

                                    caalc += $("#kolvoizd")[0].value+' (шт.) :';  //  Количество
                                    newCalc[13] = $("#kolvoizd")[0].value;


                                    caalc += $("#addressdost")[0].value+' :';  // Доставка
                                    newCalc[18] = $("#addressdost")[0].value;

                                    if ($("#check1").prop("checked")){
                                        caalc+='срочно:';
                                        newCalc[19]+='[Срочно]';
                                    } else {
                                        caalc+='не срочно:';
                                    }






                                    console.log(newCalc);



                                    calc+=caalc+':'+  $("#price")[0].innerHTML  +':';
                                    newCalc[15] = parseInt($("#price")[0].innerHTML);
                                    newCalc[14] = Math.ceil(newCalc[15] / parseInt(newCalc[13]));
                                    calc+=days+':'+$("#Komments")[0].value+'|';
                                    newCalc[19] += $("#Komments")[0].value;
                                    document.cookie = "cx="+calc+"; path=/";
                                    document.cookie = "cxx="+JSON.stringify(cookie_calc.concat([newCalc]))+"; path=/";

                                    update_kor();
                                    showmod("korr");
                                }

                                function update_kor(){
                                    var kolvo_izdel = 0;
                                    var CLC = calc.split('|');
                                    var kkk = $("#korr").find(".all")[0];
                                    var up_kor_data = "";
                                    var files = decodeURIComponent(getCookie("files"));

                                    files = files.split("|");

                                    for(var CLC_i=0;CLC_i<CLC.length-1;CLC_i++){
                                        arrsd = CLC[CLC_i].split(':');
                                        up_kor_data += '<div class="kor_order"><div class="cor_numb">'+(CLC_i+1)+'</div>';
                                        for(var CLC_i2=0;CLC_i2<arrsd.length -1;CLC_i2++){
                                            up_kor_data += '<div class="kapl_imms">'+arrsd[CLC_i2]+'</div>';
                                        }
                                        up_kor_data += "<br>";
                                        for (var eee = 1; eee < files.length; eee++) {
                                            sssc32 = files[eee].split(":");
                                            if (sssc32[0]==CLC_i+1){
                                                up_kor_data += '<div class="kapl_imms"><img src="/img/smale-file.png"> '+sssc32[1]+'</div>';
                                            }
                                        }

                                        kolvo_izdel++;
                                        up_kor_data += '<div class="del_itm" onclick="delitemclac('+CLC_i+')" title="Удалить изделие">x</div></div>';
                                    }
                                    if (kolvo_izdel==0){
                                        up_kor_data="<div class='empty'>Ваша корзина пуста</div>";
                                    }
                                    //console.log(CLC);
                                    kkk.innerHTML = up_kor_data;
                                }




                                function delitemclac(a){
                                    var cookie_calc = getCookie("cxx");
                                    var cookie_new = [];
                                    if (cookie_calc!=''){
                                        cookie_calc = JSON.parse(cookie_calc);
                                        var inx = 0;
                                        for (var i = 0; i < cookie_calc.length; i++) {
                                            if (i!=a){
                                                cookie_new[inx] = cookie_calc[i];
                                                inx++;
                                            }
                                        }
                                        document.cookie = "cxx="+JSON.stringify(cookie_new)+"; path=/";
                                    }





                                    var files = decodeURIComponent(getCookie("files"));
                                    files = files.split("|");

                                    var CLC = calc.split('|');
                                    var ncCALC = [];
                                    var ii = 0;

                                    var fls = "";

                                    var lpl = 1;
                                    for(var CLC_i=0;CLC_i<CLC.length;CLC_i++){
                                        if (CLC_i!=a){
                                            ncCALC[ii]=CLC[CLC_i];
                                            ii++;

                                            for (var eee = 1; eee < files.length; eee++) {
                                                sssc32 = files[eee].split(":");
                                                if (sssc32[0]==CLC_i+1){
                                                    fls+='|'+lpl+':'+sssc32[1]+':'+sssc32[2];

                                                }
                                            }

                                            lpl++;
                                        } else {
                                            for (var eee = 1; eee < files.length; eee++) {
                                                sssc32 = files[eee].split(":");
                                                if (sssc32[0]==CLC_i+1){
                                                    var sj1312 = sssc32[1];
                                                    var sj131333 = sssc32[2];
                                                    $.post("delimg.php",{j1: sj1312, j2: sj131333 },function(data){
                                                        if (data=='no'){
                                                            console.log("Ошибка удаления");
                                                        }
                                                    });

                                                }
                                            }
                                        }
                                    }





                                    calc = ncCALC.join('|');
                                    document.cookie = "cx="+calc+"; path=/";
                                    document.cookie = "files="+fls+"; path=/";
                                    update_kor();



                                }


                                var lastinfo = "";
                                var lastblock = "";
                            </script>  </div>
                        <div class="b next_block" ttl="Контакты" id="box8">Скрытый код страницы 8  </div>				</div>

                    <div class="data  " >

                        <div class="data_gh">
                            <span>Стоимость изделия</span><br>
                            <div id="price">0 руб.</div>
                        </div>

                        <div class="data_gh">
                            <span>Готовность на:</span><br>
                            <div class="extra" id='speed'>(без срочности)</div>
                            <div class="hooly_day">
                                <div id="day"></div>
                                <div id="month"></div>
                                <div id="yar"></div>
                            </div>
                            <div class="extra"></div>

                            <input id="check1"  onchange="setcena0()" type="checkbox">

                            <label for="check1"><span class="checkbox"></span><span>Срочное изготовление</span></label>

                        </div>

                        <div class="dop_buttons">
                            <div class="data_gh">
                                <button onclick="cor_to_cookie(); ORDER();">Оформить заказ</button>
                                <button class="corzina_btn" onclick="cor_to_cookie();">Добавить в корзину</button>
                            </div>
                            <div class="icon_pay" onclick="update_kor(); showmod('korr')">
                                корзина
                            </div>
                            <div class="icon_cons"  onclick="showmod('spec')">
                                консультация
                            </div>
                            <div class="icon_zamer"  onclick="showmod('Call')">
                                замерщик
                            </div>
                        </div>


                    </div>
                </div>

                <div id="botnavpanel">
                    <div class="indicator">
                        <div class="ring " sh="1" id="s1"><div class="ring_block"><div class="ring_show">Главная страница</div></div></div><div class="ring " sh="2" id="s2"><div class="ring_block"><div class="ring_show">Примеры работ</div></div></div><div class="ring " sh="3" id="s3"><div class="ring_block"><div class="ring_show">Душевые ограждения</div></div></div><div class="ring " sh="4" id="s4"><div class="ring_block"><div class="ring_show">Двери и перегородки</div></div></div><div class="ring " sh="5" id="s5"><div class="ring_block"><div class="ring_show">Зеркала на заказ</div></div></div><div class="ring " sh="6" id="s6"><div class="ring_block"><div class="ring_show">Кухонные фартуки</div></div></div><div class="ring select" sh="7" id="s7"><div class="ring_block"><div class="ring_show">Расчет стоимости</div></div></div><div class="ring " sh="8" id="s8"><div class="ring_block"><div class="ring_show">Контакты</div></div></div>		</div>

                    <div class="show btn" id="before">
                        <p>предыдущая страница</p>
                        <div id="b1" class="hidden bnttl"></div>
                        <div id="b2" class="show bnttl">Кухонные фартуки</div>
                        <div class="bef_icon"></div>
                    </div>
                    <div class="show btn" id="after">
                        <p>cледующая страница</p>
                        <div id="b3" class="hidden bnttl"></div>
                        <div id="b4" class="show bnttl ">Контакты</div>
                        <div class="nxt_icon"></div>
                    </div>
                </div>
            </div>

            <!-- -->

            <script type="text/javascript" >
                (function (d, w, c) {
                    (w[c] = w[c] || []).push(function() {
                        try {
                            w.yaCounter45979905 = new Ya.Metrika({
                                id:45979905,
                                clickmap:true,
                                trackLinks:true,
                                accurateTrackBounce:true,
                                webvisor:true,
                                trackHash:true
                            });
                        } catch(e) { }
                    });

                    var n = d.getElementsByTagName("script")[0],
                        s = d.createElement("script"),
                        f = function () { n.parentNode.insertBefore(s, n); };
                    s.type = "text/javascript";
                    s.async = true;
                    s.src = "https://cdn.jsdelivr.net/npm/yandex-metrica-watch/watch.js";

                    if (w.opera == "[object Opera]") {
                        d.addEventListener("DOMContentLoaded", f, false);
                    } else { f(); }
                })(document, window, "yandex_metrika_callbacks");
            </script>

            <!-- -->

            <noscript><div><img src="https://mc.yandex.ru/watch/45979905" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
            <script src=<?php echo e(asset("js/maskedinput.js")); ?>></script>

            <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-K6BWG7P"
                              height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>

            <script src=<?php echo e(asset("js/logic.js")); ?>></script>
            <div id="korr" class="black">
                <div class="cell">
                    <div class="win">
                        <div class="close" onclick="hidemod('korr')">x</div>
                        <span class="heading">Корзина</span>
                        <div class="all"> </div>
                        <button onclick="yaCounter45979905.reachGoal('korzinka_osn'); ORDER()">Оформить заказ</button>
                    </div>
                </div>
            </div>

            <div id="Call" class="black ">
                <div class="cell">
                    <div class="win ">
                        <div class="close" onclick="hidemod('Call')">x</div><br>
                        <span class="heading">Вызов специалиста</span><br><br>
                        <div class="all">
                            <div>
                                <button onclick="z(1,this)" class="v2 u selecter">Замерщик</button>
                                <button onclick="z(2,this)" class="v2 u">Дизайнер</button>
                            </div>
                            <input type="text" placeholder="Ваше имя" id="clc_f_name">
                            <div class="error_phone hide_error">Введите телефон</div>
                            <input class="Aphone" type="text" placeholder="Телефон*" id="clc_f_phone">
                            <textarea name="ao"  placeholder="Адрес объекта" id="clc_f_address"></textarea>
                            <br>
                            <!--<div class="cena">Стоимость выезда 1000 руб.</div><br>-->
                        </div>
                        <button onclick="yaCounter45979905.reachGoal('osn_zamer'); Call()">Заказать</button>
                    </div>
                </div>
            </div>

            <div id="spec" class="black ">
                <div class="cell">
                    <div class="win ">
                        <div class="close" onclick="hidemod('spec')">x</div><br>
                        <span class="heading">Заявка на звонок</span><br><br>
                        <div class="all">
                            <input type="text" placeholder="Ваше имя" id="clc_f_name2">
                            <div class="error_phone2 hide_error">Введите телефон</div>
                            <input class="Aphone" type="text" placeholder="Телефон*" id="clc_f_phone2">
                            <textarea name="ao"  placeholder="Комментарий" id="clc_f_address2"></textarea>
                            <br><br>
                        </div>
                        <button onclick="yaCounter45979905.reachGoal('osn_consult'); spec()">Заказать</button>
                    </div>
                </div>
            </div>

            <div id="userdata" class="black ">
                <div class="cell">
                    <div class="win ">
                        <div class="close" onclick="hidemod('userdata')">x</div>
                        <span class="heading">Введите<br>свои данные</span>
                        <div class="all">
                            <input type="text" onchange="cuser(this,1)" placeholder="Имя" value="bvzxczxcxz">
                            <input type="text" class="Aphone" onchange="cuser(this,2)" placeholder="Телефон" value="321312321231">
                            <input type="text" onchange="cuser(this,3)" placeholder="Почта" value="bobo@gmailc">
                        </div>

                        <button onclick="hidemod('userdata');   ORDER();">   Заказать   </button>
                    </div>
                </div>
            </div>


            <div id="message" class="black ">
                <div class="cell">
                    <div class="win ">
                        <div class="close" onclick="hidemod('message')">x</div>
                        <br>
                        <h2>Сообщение</h2><br>
                        <h3 class="l"></h3>
                        <br><br>
                        <button onclick="showmod('spec');">Бесплатная консультация</button>
                    </div>
                </div>
            </div>

            <div id="log" class="black ">
                <div class="cell">
                    <form action="https://veditex.glass/login.php" method="POST">
                        <div class="win ">
                            <div class="close" onclick="hidemod('log')">x</div>
                            <h3>Вход</h3><br>
                            <input placeholder="Логин" name="login" type="text">
                            <input placeholder="Пароль" name="password" type="password">
                            <button>Вход</button>
                        </div>
                    </form>
                </div>
            </div>

            <div id="File" class="black ">
                <div class="cell">
                    <div class="win ">
                        <div class="close" onclick="hidemod('File')">x</div><br>
                        <span class="heading">Загрузить файл</span><br><br>
                        <div class="all">

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
                                <p>Производство - ank@v-t-x.ru</p>
                            </div>
                            <div class="contacts_item d-flex">
                                <img src="images/clock-contact.png" alt="">
                                <p>Время работы - ПН-СБ с 10.00 до 20.00</p>
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
                                <p>Производство (сложные изделия, обработка) - Московская область, г. Наро-Фоминск, ул.
                                    Новикова, поворот направо, не доезжая до ГК. ПК "Альянс".</p>
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
                        <li><a href="#">Клиенты</a></li>
                        <li><a href="#">Услуги</a></li>
                        <li><a href="#">Контакты</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-2 col-md-2">
                <div class="footer_menu">
                    <ul>
                        <li><a href="#">Меню</a></li>
                        <li><a href="#">Клиенты</a></li>
                        <li><a href="#">Услуги</a></li>
                        <li><a href="#">Контакты</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-2 col-md-2">
                <div class="footer_menu">
                    <ul>
                        <li><a href="#">Меню</a></li>
                        <li><a href="#">Клиенты</a></li>
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
    
    <form action="<?php echo e(url('createApplications')); ?>" method="post" id="callForm">
        <div class="up_form up_form_popup">
            <input type="text" name="fullName" placeholder="ФИО" id="fullName" required>
            
            <input type="tel" id="phone" name="phone" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}"
                   placeholder="phone _(___)___-____" required>
            
            
        </div>
        <div class="down_form down_form_popup d-flex">
            <input type="text" id='formEmail' name="email" placeholder="email(необязательно)">
            <div class="date_popup">
                <div class="day">
                    <input type="radio" value="1" name="dayChoice" id="dayChoice0"><a>Пн</a>
                    <input type="radio" value="2" name="dayChoice" id="dayChoice1"><a>Вт</a>
                    <input type="radio" value="3" name="dayChoice" id="dayChoice2"><a>Ср</a>
                    <input type="radio" value="4" name="dayChoice" id="dayChoice3"><a>Чт</a>
                    <input type="radio" value="5" name="dayChoice" id="dayChoice4"><a>Пт</a>
                    <input type="radio" value="6" name="dayChoice" id="dayChoice5"><a>Сб</a>
                    <input type="radio" value="7" name="dayChoice" id="dayChoice6"><a>Вс</a>
                    
                    
                    
                    
                    
                    
                </div>
                <div class="data-time">
                    <div class="input_container">
                        <img src="images/clock-regular.svg" alt="">
                        <input name="timeStart" value="00:44" type="time" placeholder="Со скольки">
                    </div>
                    <div class="input_container">
                        <img src="images/clock-regular.svg" alt="">
                        <input name="timeEnd" value="00:44" type="time" placeholder="До Скольки">
                    </div>
                </div>
            </div>
        </div>
        <div class="checkbox">
            <label><input type="checkbox" id="checkbox" v-model="checked" onclick="checkedBOX()"></label>
            
            
            <a>Cогласие с конфиденциальностью и куки</a>
        </div>
        <div class="button_forms button_forms_popup">
            <a id="callFormTeg" onclick="formTop()">Отправить</a>
            
            
        </div>
        <?php echo e(csrf_field()); ?>

    </form>
    <a class="close" title="Закрыть" href="#close"></a>
</div>
<a href="#x" class="overlay" id="win2"></a>
<form class="popup popup_choise" action="<?php echo e(url('createApplications')); ?>" method="post" id="callForm3">
    <div class="up_form up_form_popup">

        <h3 class="popup_choise_h2">ВЫЗОВ СПЕЦИАЛИСТА</h3>
        <div id="buttChoise" class="butt_choise d-flex">
            <button type="button" name="specialist" value="2" id="specialist0" onclick="specialistCheck('specialist0')">Дизайнер</button>
            <button type="button" name="specialist" value="3" id="specialist1" onclick="specialistCheck('specialist1')">Планировщик</button>
        </div>
        
        <input type="hidden" id="hiddenSpec" name="specialist">
        <input type="text" name="fullName" placeholder="ФИО" id="fullName3">
        <input type="tel" id="phone3" name="phone" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}"
               placeholder="phone _(___)___-____">
        <input type="text" id='formEmail3' name="email" placeholder="email(необязательно)">
    </div>
    


    <div class="checkbox">
        <input type="checkbox" id="checkbox3" v-model="checked" onclick="checkedBOX3()">
        <a>Cогласие с конфиденциальностью и куки</a>
    </div>
    <div class="button_forms button_forms_popup">
        
        <a onclick="formSpecialist()">Заказать</a>
    </div>
    <?php echo e(csrf_field()); ?>

</form>

<a class="close" title="Закрыть" href="#close"></a>
</div>
<script type="text/javascript" src=<?php echo e(asset("js/jquery-3.3.1.min.js")); ?>></script>
<script type="text/javascript" src=<?php echo e(asset("js/bootstrap.min.js")); ?>></script>
<script src=<?php echo e(asset("owl-carusel/dist/compressed.js")); ?>></script>
<script type="text/javascript" src=<?php echo e(asset("js/jquery.fancybox.min.js")); ?>></script>
<script type="text/javascript" src=<?php echo e(asset("js/popper.min.js")); ?>></script>
<script type="text/javascript" src=<?php echo e(asset("js/tooltip.min.js")); ?>></script>
<script type="text/javascript" src=<?php echo e(asset("js/libs/function_min.js")); ?>></script>
<script type="text/javascript" src=<?php echo e(asset("js/forms/viewAdmin.js")); ?>></script>
<script type="text/javascript" src=<?php echo e(asset("js/calculator.js")); ?>></script>
<script type="text/javascript" src="js/logic.js"></script>
</body>
</html>