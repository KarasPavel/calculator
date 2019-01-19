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
                                <li>стоит запомнить что "лазерами" и "плазмой" стекло режут в фантастических фильмах и в
                                    воображении некоторых людей. В реальности резка осуществляется алмазной фрезой или
                                    гидроабразивом, а ломка - либо вручную, либо на вибростоле.
                                </li>
                                <li>Изделия сложной формы режем либо по шаблону из твердого материала (картон, оргалит,
                                    фанера), либо на ЧПУ, если у Вас есть возможность сделать чертеж в формате DWG.
                                </li>
                                <li>Стоит знать, что закаленное стекло не подвергается большинству механических
                                    воздействий. Иными словами - его нельзя резать и сверлить. Сначала мы режем и
                                    сверлим материал по размеру а потом уже закаливаем.
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
                                <p>замеры и консультации</p>
                            </div>
                        </a>
                        <div style="display: none;max-width:50%;border-spacing: " id="selectableModal2">
                            <h2 class="fancybox_item_h2" data-selectable="true">Замеры и консультации</h2>
                            <p class="fancybox_item_text" data-selectable="true">Мы осуществляем выезды специалистов на
                                объект заказчика для замеров и консультации.
                                В отличии от многих конкуретов мы отличаемся быстрой скоростью работы и удобным
                                сервисом. Это выражается в следующем -</p>
                            <ul class="modal_list" data-selectable="true">
                                <li>Все замерщики с монтажным опытом. Специалист покажет Вам "вживую" образцы стекла и
                                    фурнитуры, сделает чертеж и даст рекомендации по ремонту, если это потребуется.
                                </li>
                                <li>Стоимость вызда специалиста варьируется от 0 до 1500 рублей в зависимости от
                                    сложности замера и загрузки специалистов. Зачастую замер бесплатен.
                                </li>
                                <li>Замеры осуществляем в будние и выходные дни с 9.00 до 21.00 при обычных условиях
                                    заказа
                                </li>
                                <li>Если захотите, Вы сможете сразу после замера заключить договор не выходя из дома.
                                    Оформление договора занимает 20 минут.

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
                                <p>сверление отверстий</p>
                            </div>
                        </a>
                        <div style="display: none;max-width:50%;border-spacing: " id="selectableModal3">
                            <h2 class="fancybox_item_h2" data-selectable="true">Сверление отверстий и вырезов</h2>
                            <p class="fancybox_item_text" data-selectable="true">Сверление отверстий в стекле и на
                                зеркалах - это сложная задача, которая делается по чертежу заказчика или по замерам
                                нашего специалиста. Сверловка производится на станках или вручную, взависимости от
                                ситуации и места отверстия. Используются лучшие сверла с алмазной крошкой, специальные
                                абразивы. Сверление осуществляется в охлаждающей жидкости.</p>
                            <ul class="modal_list" data-selectable="true">
                                <li>По умолчанию мы сверлим отверстия следующих диаметров (мм) -
                                    4,5,6,8,10,12,16,18,20,22,24,25,28, 30,35,40,45,50,55,60,65,70,80,90,100,110
                                </li>
                                <li>Исходя из вышеперечисленых размеров, так же может быть сделан внутренний вырез в
                                    стекле различной формы.
                                </li>
                                <li>Вокруг отверстия образуются микросколы, которые либо шлифуются во время зенковки
                                    отверстия, либо прикрываются крепежом или рамкой.
                                </li>
                                <li>Сверление в домашних условиях не рекомендуем, если все же решитесь, позаботьтесь о
                                    безопасности.
                                </li>
                                <li>Даже на низких оборотах треснувшее стекло летящее в Вашу сторону может стать
                                    последним гвоздем в крышку техники безопасности или в иную крышку...
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
                                <p>обработка кромок</p>
                            </div>
                        </a>
                        <div style="display: none;max-width:50%;border-spacing: " id="selectableModal4">
                            <h2 class="fancybox_item_h2" data-selectable="true">Обработка кромок</h2>
                            <p class="fancybox_item_text" data-selectable="true">Мы осуществляем обработку кромок
                                стеклоизделий и зеркал на итальянских станках "Intermac".
                                Видов обработки кромок много, но по нормативу мы делаем следующие -</p>
                            <ul class="modal_list" data-selectable="true">
                                <li>Полировка кромок - это снятие фаски 1-2мм с обоих сторон стекла со стороны кромки, с
                                    последующей шлифовкой до прозрачного состояния. Этот вариант обработки обрел
                                    популярность благодаря эстетическим качествам и удобству эксплуатации. Материал
                                    после обработки более травмобезопасен и может быть в дальнейшем термообработан
                                    (закален). Вот так выглядит подобная обработка -
                                </li>
                                <li>Фацет - это широкая декоративная фаска сделанная с лицевой стороны зеркала или
                                    стекла. Размер фаски варьируется от 5 до 60 мм. Обратная сторона (тыльная), может
                                    быть отполирована, оставлена без обработки или на ней может быть сделана аналогичная
                                    фаска (двусторонний фацет). По умолчанию тыльную сторону просто полируют со снятием
                                    фаски 1-2мм. Выглядит фацет так -
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
                                <p>UV(УФ) склейка</p>
                            </div>
                        </a>
                        <div style="display: none;max-width:50%;border-spacing: " id="selectableModal5">
                            <h2 class="fancybox_item_h2" data-selectable="true">УФ-склейка (UV / ультрафиолетовая)</h2>
                            <p class="fancybox_item_text" data-selectable="true">Современные технологии полимерной и
                                стекольной промышленности позволяют создавать сверхпрочную, прозрачную склейку стекла и
                                зеркал без каких либо дополнительных крепежных элементов.
                                Технология основывается на специфическом свойстве некоторых полимеров затвердевать под
                                воздействием ультрафиолетовых лучшей со средней длиной волны. Это позволяет создавать
                                прочные химсоставы, UV-отверждения, которые используется в современных технических
                                принтерах, тканях и в стекольной промышленности в том числе. </p>
                            <ul class="modal_list" data-selectable="true">
                                <li>В жидком состоянии хим.состав крайне токсичен и вызывает сильные химические ожоги,
                                    но после отверждения безопасен и может быть использован даже на кухнях, поскольку по
                                    сути, представляет из себя обычный пластик.

                                </li>
                                <li>Мы сотрудничаем с Российскими (Нижегородская лаборатория полимеров) и Немецкими
                                    (Bohle group) производителями, стоит отметить, что это направление - одно из
                                    немногих направлений, где Российские производители показывают лучшие результаты по
                                    большинству параметров.
                                </li>
                                <li>
                                    Стоимость склейки варьируется от 500 до 1200 руб/п.м.
                                </li>
                                <li>
                                    К стеклу можно приклеить - стекло, металл, некоторые сорта дерева (есть требования к
                                    обработке, ощутимо выше ценник), шлифованный камень с плотностью выше кварца.
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
                                <p>матовка стекла (пескоструй)</p>
                            </div>
                        </a>
                        <div style="display: none;max-width:50%;border-spacing: " id="selectableModal6">
                            <h2 class="fancybox_item_h2" data-selectable="true">Матовка стекла (пескоструй)</h2>
                            <p class="fancybox_item_text" data-selectable="true">Матирование стекла - обработка
                                глянцевой стороны стекла таким образом, чтобы достичь большего светорассеивания, и как
                                итог получить матовую, слегка шероховатую поверхность, которая "размывает" стоящие за
                                ним предметы. матировать можно как все стекло целиком, так и его часть, создав тем самым
                                рисунок. Самый популярный вид матирования - пескоструенная обработка. В этом случае, на
                                стекло под большим давлением воздействует специальный абразивный состав, состоящий из
                                песка и примесей, которые шлифуют поверхность, образуя эффект светорассеивания. Когда
                                требуется нанести рисусунок, ту часть стекла, которая должна быть прозрачной, закрывают
                                толстой пленкой, а все остальное обрабатывают. Как итог - матовый рисунок и прозрачный
                                фон, или наоборот (все по эскизу).
                            </p>
                            <ul class="modal_list" data-selectable="true">
                                <li>Матовку можно осуществлять после закалки стекла.
                                </li>
                                <li>Матировать можно зеркало как с лицевой части, так и со стороны амальгамы. При
                                    матовке со стороны амальгамы, в матовую часть с задней стороны зеркала можно
                                    вмонтировать невидимые светодиоды и создать равномерную подсветку.
                                </li>
                                <li>
                                    Само матирование занимает 30-40 минут, а вот подготовка к нему ощутимо больше. Стоит
                                    учитывать что это одна из самых долгих процедур стеклообработки.
                                </li>
                                <li>
                                    После пескоструя в нашей компании принято наносить лак (модификатор), который
                                    защищает поверхность и делает её более грязеустойчивой. Это уже включено в базовую
                                    стоимость услуг.
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
                                <p>покраска по RAL</p>
                            </div>
                        </a>
                        <div style="display: none;max-width:50%;border-spacing: " id="selectableModal7">
                            <h2 class="fancybox_item_h2" data-selectable="true">Покраска стекла по RAL</h2>
                            <p class="fancybox_item_text" data-selectable="true">Популярная услуга, которая превращает
                                стекло в самостоятельный дизайнерский элемент, подчеркивая и приумножая яркость красок.
                                Покраску мы осуществляем разными способами, среди которых - </p>
                            <ul class="modal_list" data-selectable="true">
                                <li>Покраска стекла специализированными красками на водной основе. (Стандартный вариант)
                                </li>
                                <li>Нанесение красок путем УФ-печати с белилами или без. Позволяет делать рамки,
                                    надписи, очень красивый градиент и т.п.
                                </li>
                                <li>
                                    Придание нужного оттенка при помощи пленки в триплексе. Этот вид позволяет создать
                                    матовые эффекты с цветом.
                                </li>
                            </ul>
                            <p>Также отметим несколько фактов -</p>
                            <ul class="modal_list" data-selectable="true">
                                <li>мы сами коллируем краски по каталогу RAL K7 Classic, но так же можем постараться
                                    подобрать цвет к Вашей мебели или стенам, даже если его нет в каталоге.
                                </li>
                                <li>крашенные стекла можно безбоязненно приклеивать к стене на специализированные
                                    герметики, без сжатия
                                </li>
                                <li>
                                    яркие краски стоит наносить на осветленное стекло, а темные - на обычное,
                                    прозрачное. Это связано с тем, что у прозрачного стекла есть зеленоватый оттенок,
                                    который может искажать цвета.
                                </li>
                                <li>УФ-печать градиента относится к специфическим услугам. Стоимость рассчитывается
                                    только по конкретному запросу. Тоже самое касается цветных триплексов.
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
                                <p>триплекс, бронирование</p>
                            </div>
                        </a>
                        <div style="display: none;max-width:50%;border-spacing: " id="selectableModal8">
                            <h2 class="fancybox_item_h2" data-selectable="true">Триплекс (термоламинация)</h2>
                            <p class="fancybox_item_text" data-selectable="true">Триплекс - это изделие состоящее из
                                двух и более стекол, объединяемых полимерными пленками разного состава. В триплексе
                                можно использовать зеркала, крашенные стекла, стекла с УФ-печатью. Так же, это большая
                                возможность для творчества. Запекать в триплексе можно различные предметы, бумагу, ткани
                                и даже подсоединенные светодиоды. Современные технологии ламинации стекла позволяют
                                достигнуть уникального "смарт" эффекта - изменение степени матовости стекла. И, с каждым
                                годом, технологии идут вперед, нам поступают очень оригинальные заказы и мы всегда
                                находим решение сложных задач.</p>
                            <ul class="modal_list" data-selectable="true">
                                <li>Триплекс - это не только эстетика и творчество. Это невероятная прочность и
                                    устойчивость. Некоторые виды триплекса выдерживают пулеметную очередь, и сотни
                                    ударов кувалдой. Не просто так, триплекс часто называют "антивандальным стеклом".
                                </li>
                                <li>Стекла соединяются между собой в печи, за счет того, что полименая пленка в процессе
                                    нагрева растекается, после чего резко затвердевает навсегда. Разъеденить триплекс
                                    практически невозможно.
                                </li>
                                <li>Из триплекса так же делают смотровые площадки, стеклянные полы, витрины,
                                    иллюминаторы и т.п.
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
                                <p>закалка (термоупрочнение стекла)</p>
                            </div>
                        </a>
                        <div style="display: none;max-width:50%;border-spacing: " id="selectableModal9">
                            <h2 class="fancybox_item_h2" data-selectable="true">Закалка (термоупрочнение стекла)</h2>
                            <p class="fancybox_item_text" data-selectable="true">Закалка - это процесс термической
                                обработки, при которой в стекле появляются постоянные внутренние напряжения из-за
                                бысрого охлаждения стекла от температуры, превышающей температуру стеклования. Стекло
                                приобретает ряд специфических свойств, одни из которых - повышение прочности на изгиб и
                                менее царапающуюся поверхность. Стоит учитывать следующее - </p>
                            <ul class="modal_list" data-selectable="true">
                                <li>закаленное стекло является более травмобезопасным. Если его разбить оно разлетится
                                    на маленькие равномерные куски, которые могут поцарапать, но вряд ли нанесут
                                    существенное увечье, как это возможно с незакаленным стеклом.
                                </li>
                                <li>закаливается лишь ядро стекла, по кромке напряжение минимально. Соотвественно,
                                    кромка может быть такой же хрупкой как и у обычного стекла, но только кромка.
                                </li>
                                <li>закаленное стекло сравнимо по прочности с легкими сплавами металла, а прочность на
                                    изгиб равна некоторым видам стали. Поэтому не стоит недооценивать прочность стекла.
                                </li>
                                <li>
                                    данное стекло можно использовать в триплексе (склееным плашмя по два и более), что
                                    даст непревзойденный антивандальный эффект.

                                </li>
                                <li>диапазон рабочих температур - -40 - +210 градусов по Цельсию.
                                </li>
                                <li>зеркала не закаливаются, поскольку в печи плавится амальгама
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
                                <p>фотопечать (УФ-технология)</p>
                            </div>
                        </a>
                        <div style="display: none;max-width:50%;border-spacing: " id="selectableModal10">
                            <h2 class="fancybox_item_h2" data-selectable="true">Печать на стекле</h2>
                            <p class="fancybox_item_text" data-selectable="true">Одной из наших услуг является
                                фотопечать на стекле при помоще УФ-принтера с разрешением 1480 dpi.
                                УФ-печать (UV) - это технология нанесения изображения на стекло путем прямой печати с
                                использованием чернил, содержащих полимеры, которые обладают свойством отвеждения под
                                воздействием ультрафиолетового излучения со средней длиной волны. Простыми словами -
                                современная технология, позволяющая перенести почти любую картинку в ультра-HD качестве
                                без искажений на стекло, которое придаст дополнительно блеск и защитит рисунок от
                                механических повреждений. Стоит знать -
                            </p>
                            <ul class="modal_list" data-selectable="true">
                                <li>изображение печатается с тыльной стороны стекла, устойчиво к температурному
                                    воздействию, абсолютно экологично, не осыпается, не выцветает и не растрескивается,
                                    а так же не требует никакого ухода.

                                </li>
                                <li>многие компании портят репутацию подобных изделий предлагая пленки под видом
                                    УФ-печати, которые отслаиваются через пол года-год, а изображение сильно полосит и
                                    выцветает. Не верьте обещаниям и словам, просто проверяйте изделие до монтажа, если
                                    это пленка - лучше даже не вешайте. Уф-печать невозможно снять как пленку.
                                </li>
                                <li>стекло придает дополнительный блеск изображению, краски становятся еще более
                                    насыщеными и яркими
                                </li>
                                <li>
                                    Изображение можно подобрать либо самим, либо с помощью нашего дизайнера. Так же в
                                    процессе обсуждения можно будет подредактировать рисунок по размеру или напечатать
                                    только часть выбранного изображения.
                                </li>
                                <li>стоит учитывать что основных вида прозрачных стекол два - прозрачное (м1) и
                                    осветленное (Оптивайт). Второе дороже почти в 1.5 раза, но обладает наилучшей
                                    цветопередачей, а обычное стекло на белых и светлых тонах слегка искажает цвет в
                                    сторону зеленых оттенков.
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
                                <p>профессиональный монтаж</p>
                            </div>
                        </a>
                        <div style="display: none;max-width:50%;border-spacing: " id="selectableModal11">
                            <h2 class="fancybox_item_h2" data-selectable="true">Профессиональный монтаж</h2>
                            <p class="fancybox_item_text" data-selectable="true">В нашей компании работают
                                профессиональные монтажники со специализацией на стеклоизделиях и зеркалах.
                                Изготовить стекло - это задача, зачастую сравнимая по сложности с его установкой.
                                Именно поэтому в наших монтажных бригадах люди умеющие работать не только руками, но и
                                головой. </p>
                            <ul class="modal_list" data-selectable="true">
                                <li>монтаж осуществляем в один день с доставкой
                                </li>
                                <li>все монтажники в компании имеют за плечами не менее 3 лет опыта в стекольной
                                    промышленности
                                </li>
                                <li>
                                    монтажники работают без выходных
                                </li>
                                <li>
                                    шумные работы осуществляются в дневное время, если есть ограничения
                                </li>
                                <li>
                                    за час до приезда Вам отзвониться специалист, за день согласуют приезд
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
                                <p>доставка стеклоизделий</p>
                            </div>
                        </a>
                        <div style="display: none;max-width:50%;border-spacing: " id="selectableModal12">
                            <h2 class="fancybox_item_h2" data-selectable="true">Доставка стеклоизделий и зеркал</h2>
                            <p class="fancybox_item_text" data-selectable="true">Стекло устойвый и прочный материал, но
                                оно боится ударов, особенно об металл или камень. Поэтому надо со всей серьезностью
                                отнестись к его перевозке.
                                Наша компания осуществляет услуги доставки изделий из стекла и зеркал. Но с рядом
                                нюансов -</p>
                            <ul class="modal_list" data-selectable="true">
                                <li>доставка осущесвтляется на закрытых и открытых автомобилях (фургон или открытая
                                    пирамида). Совсем маленькие изделия могут быть отправлены либо пешим курьером, либо
                                    на легковом автомобиле типа "каблук"
                                </li>
                                <li>стекло упаковывается в зависимости от его вида и хрупкости. По умолчанию - в стретч
                                    пленку, с закрытыми углами.
                                </li>
                                <li>НЕЛЬЗЯ ставить стекло на плитку, металл, черепицу, на грязный пол с песком или
                                    мелким мусором
                                </li>
                                <li>проверить товар надлежит до его принятия, следует осмотреть изделие на предмет
                                    дефектов и замерить егл
                                </li>
                                <li>переносить стекло можно только в вертикальном положении, не допуская резких изгибов
                                    (если стекло тонкое)
                                </li>
                                <li>при переноске крупногабаритного стекла используйте только ТРОЙНЫЕ присоски.
                                    Поверхости присасывания протереть.
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
                            <h2>наши преимущества</h2>
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
                        <div class="video_glass d-flex">
                            @if(isset($video) && $video[0]->show === 1)
                                <iframe width="50%" height="335px"
                                        src={{$video[0]->video}}
                                                frameborder="0"
                                        allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                                        allowfullscreen></iframe>
                            @endif
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
                        <a href="#Primery_lestnich">
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
                        <div class="stairs_and_flooring_buttons stairs_and_flooring_buttons4 d-flex">
                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" data-toggle="tab" href="#home" role="tab"
                                       aria-controls="home">Лестницы</a>
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
                        @foreach($photo as $value)
                            @if($value->type === 'лестницы')
                                {{--{{$value->id}}--}}
                                <a data-fancybox="" href="{{$value->photo}}">
                                    <div class="img_items_stairs">
                                        <img src="{{$value->small_photo}}">
                                        <p></p>
                                    </div>
                                </a>
                            @endif
                        @endforeach
                    </div>
                    <div class="tab-pane" id="profile" role="tabpanel">
                        @foreach($photo as $value)
                            @if($value->type === 'полы')
                                <a data-fancybox="" href="{{$value->photo}}">
                                    <div class="img_items_stairs">
                                        <img src="{{$value->small_photo}}" alt="1">
                                        <p></p>
                                    </div>
                                </a>
                            @endif
                        @endforeach
                    </div>
                    <div class="tab-pane" id="messages" role="tabpanel">
                        @foreach($photo as $value)
                            @if($value->type === 'бронирование')
                                <a data-fancybox="" href="{{$value->photo}}">
                                    <div class="img_items_stairs">
                                        <img src="{{$value->small_photo}}" alt="1">
                                        <p></p>
                                    </div>
                                </a>
                            @endif
                        @endforeach
                    </div>
                    <div class="tab-pane" id="settings" role="tabpanel">
                        @foreach($photo as $value)
                            @if($value->type === 'эксклюзив')
                                <a data-fancybox="" href="{{$value->photo}}">
                                    <div class="img_items_stairs">
                                        <img src="{{$value->small_photo}}" alt="1">
                                        <p></p>
                                    </div>
                                </a>
                            @endif
                        @endforeach
                    </div>
                </div>
            </div>
        </section>
        @if($video[1]->show  === 1 || $video[2]->show  === 1)
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
                            <div class="video_our d-flex">
                                @if($video[1]->show ===1)
                                    <iframe width="560" height="315"
                                            src={{$video[1]->video}}
                                                    frameborder="0"
                                            allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                                            allowfullscreen></iframe>
                                @endif
                                @if($video[2]->show ===1)
                                    <iframe width="560" height="315"
                                            src={{$video[2]->video}}
                                                    frameborder="0"
                                            allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                                            allowfullscreen></iframe>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        @endif
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
                            <img src="images/second_page_imageBlock/1/1.jpg" alt="">
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
                            <img src="images/second_page_imageBlock/2/1.jpg" alt="">
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
                <form>
                    <div class="row formTag">
                        <div class="col-lg-12">
                            <div class="up_form">
                                <input type="text" name="name" placeholder="имя">
                                <input type="text" name="phone" placeholder="телефон">
                            </div>
                            <div class="down_form">
                                <input type="text" name="email" placeholder="email">


                            </div>
                            <div class="checkbox">
                                <label>
                                    <input name="agree" type="checkbox">
                                    <span class="fake-checkbox" aria-hidden="true"></span>
                                    <span class="label">Согласие с конфиденциальностью и куки</span>
                                </label></label>
                            </div>
                            <div class="button_forms">
                                {{--<a class="" href="#">отправить</a>--}}
                                <a class="action_form" href="javascript:void(0);">отправить</a>
                            </div>
                        </div>
                    </div>
                </form>
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
                        <div class="stairs_and_flooring_buttons  d-flex">
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
                        @foreach($photo as $value)
                            @if($value->type === 'угловые и фигурные')
                                <a data-fancybox="" href="{{$value->photo}}">
                                    <div class="img_items_stairs">
                                        <img src="{{$value->small_photo}}" alt="1">
                                        <p></p>
                                    </div>
                                </a>
                            @endif
                        @endforeach
                    </div>
                    <div class="tab-pane" id="page2_profile" role="tabpanel">
                        @foreach($photo as $value)
                            @if($value->type === 'прямые душевые')
                                <a data-fancybox="" href="{{$value->photo}}">
                                    <div class="img_items_stairs">
                                        <img src="{{$value->small_photo}}" alt="1">
                                        <p></p>
                                    </div>
                                </a>
                            @endif
                        @endforeach
                    </div>
                    <div class="tab-pane" id="page2_messages" role="tabpanel">
                        @foreach($photo as $value)
                            @if($value->type === 'форма трапеции')
                                <a data-fancybox="" href="{{$value->photo}}">
                                    <div class="img_items_stairs">
                                        <img src="{{$value->small_photo}}" alt="1">
                                        <p></p>
                                    </div>
                                </a>
                            @endif
                        @endforeach
                    </div>
                    <div class="tab-pane" id="page2_settings" role="tabpanel">
                        @foreach($photo as $value)
                            @if($value->type === 'двери ниша')
                                <a data-fancybox="" href="{{$value->photo}}">
                                    <div class="img_items_stairs">
                                        <img src="{{$value->small_photo}}" alt="1">
                                        <p></p>
                                    </div>
                                </a>
                            @endif
                        @endforeach
                    </div>
                    <div class="tab-pane" id="page2_settings1" role="tabpanel">
                        @foreach($photo as $value)
                            @if($value->type === 'глухие перегородки')
                                <a data-fancybox="" href="{{$value->photo}}">
                                    <div class="img_items_stairs">
                                        <img src="{{$value->small_photo}}" alt="1">
                                        <p></p>
                                    </div>
                                </a>
                            @endif
                        @endforeach
                    </div>
                    <div class="tab-pane" id="page2_settings2" role="tabpanel">
                        @foreach($photo as $value)
                            @if($value->type === 'ограждения в ванную')
                                <a data-fancybox="" href="{{$value->photo}}">
                                    <div class="img_items_stairs">
                                        <img src="{{$value->small_photo}}" alt="1">
                                        <p></p>
                                    </div>
                                </a>
                            @endif
                        @endforeach
                    </div>
                    <div class="tab-pane" id="page2_settings3" role="tabpanel">
                        @foreach($photo as $value)
                            @if($value->type === 'с раздвижной дверью')
                                <a data-fancybox="" href="{{$value->photo}}">
                                    <div class="img_items_stairs">
                                        <img src="{{$value->small_photo}}" alt="1">
                                        <p></p>
                                    </div>
                                </a>
                            @endif
                        @endforeach
                    </div>
                    <div class="tab-pane" id="page2_settings4" role="tabpanel">
                        @foreach($photo as $value)
                            @if($value->type === 'эксклюзив и опт')
                                <a data-fancybox="" href="{{$value->photo}}">
                                    <div class="img_items_stairs">
                                        <img src="{{$value->small_photo}}" alt="1">
                                        <p></p>
                                    </div>
                                </a>
                            @endif
                        @endforeach
                    </div>
                </div>
            </div>
        </section>
        @if($video[3]->show  === 1 || $video[4]->show  === 1)
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
                            <div class="video_our d-flex">
                                @if($video[3]->show ===1)
                                    <iframe width="560" height="315"
                                            src={{$video[3]->video}}
                                                    frameborder="0"
                                            allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                                            allowfullscreen></iframe>
                                @endif
                                @if($video[4]->show ===1)
                                    <iframe width="560" height="315"
                                            src={{$video[4]->video}}
                                                    frameborder="0"
                                            allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                                            allowfullscreen></iframe>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        @endif
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
                                <p>"Итальянская" или "Чешская" душевая кабина</p>
                                <ul>
                                    <li>Просто купить, везде есть</li>
                                    <li>Эконом" - цены, "Эконом" - качество</li>
                                    <li class="dark-mines">Срок службы без проблем ограничен</li>
                                    <li class="dark-mines">Везде щели, все скрипит и трясется. "Коробка" с радио.</li>
                                    <li class="dark-mines">По факту - Китайское производство. Никаких гарантий закалки.
                                        Стекло 4-8мм
                                    </li>
                                    <li class="dark-mines">Тесно, скользко, неудобно, все дрожит</li>
                                    <li>Скудный выбор, безвкусно и не вписывается в интерьер</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="shower_type_items d-flex">
                            <div class="shower_type_item-right">
                                <p>ДУШЕВОЕ ОГРАЖДЕНИЕ VEDITEX</p>
                                <ul>
                                    <li>Срок службы неограничен</li>
                                    <li>Компактно, эстетично, увеличивает пространство, сохраняет свет.</li>
                                    <li>Крайне надежно, безопасно для детей и пожилых людей. Стекло 8-12мм</li>
                                    <li>Удобно, быстро, практично</li>
                                    <li class="pluss">Полностью индивидульно. Возможны рисунки, уф-печать, триплекс</li>
                                    <li>Нужен замер</li>
                                    <li>Зачастую дороже кабины</li>
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
                                <img src="images/proizvoditeli/proizavoditel2.png" alt="">
                                <p>Bohle | Германия</p>
                            </div>
                        </a>
                        <div style="display: none;max-width:50%;border-spacing: " id="selectableModa_Company1">
                            <h2 class="fancybox_item_h2" data-selectable="true"> Bohle (боле)</h2>
                            <p class="fancybox_item_text" data-selectable="true">Bohle (боле) - компания, с которой
                                фактически все начинается. Компания с 100 годами насыщенной истории, ставшая образцом
                                качества и золотым стандартом в сфере стеклообработки. Предприятие является
                                производителем с собственным конструкторским бюро, у которого "списывают" все технологии
                                и стиль многие сотни мелких компаний. Сейчас компания держит качетво на "премиальном"
                                уровне при адекватном ценообразовании. <br><br>

                                Преимущества компании -<br>
                                - высочайшее качество производства<br>
                                - идеальное исполнение инженерных идей<br>
                                - практичный и стильный дизайн<br>
                                - разумная стоимость<br>
                                - высокое качество уплотнителей<br></p>
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
                        <a data-fancybox data-src="#selectableModa_Company2" href="javascript:;" class="">
                            <div class="manufacture_items">
                                <img src="images/proizvoditeli/proizavoditel3.png" alt="">
                                <p>DORMA | Швейцария</p>
                            </div>
                        </a>
                        <div style="display: none;max-width:50%;border-spacing: " id="selectableModa_Company2">
                            <h2 class="fancybox_item_h2" data-selectable="true">Dorma (Дорма)</h2>
                            <p class="fancybox_item_text" data-selectable="true">Dorma (Дорма) - швейцарская компания
                                основанная в 1908 году, изначально специализировалась на мебельной
                                фурнитуре, но с 70-ых годов активно стала заниматься стекольным направлением. Преуспела
                                компания
                                в автоматических дверях и маятниковых системах с фантастической надежность. Например,
                                такую фурнитуру
                                используют на входных дверях Московского метро, а многие торговые
                                и бизнесс центры оснащены автоматическими дверями данной компании. <br><br>
                                Приемущества -<br>
                                - лидер в области качественных автоматических дверей<br>
                                - лидер в области экзотических и специализированных решений для стекла<br>
                                - равное качество с Bohle в области маятниковых систем<br>
                                - возможность собрать достойную комплектацию для отелей и гостиниц<br></p>
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
                        <a data-fancybox data-src="#selectableModa_Company3" href="javascript:;" class="">
                            <div class="manufacture_items">
                                <img src="images/proizvoditeli/proizavoditel4.png" alt="">
                                <p>ТИТАН | Россия</p>
                            </div>
                        </a>
                        <div style="display: none;max-width:50%;border-spacing: " id="selectableModa_Company3">
                            <h2 class="fancybox_item_h2" data-selectable="true">TITAN (Титан)</h2>
                            <p class="fancybox_item_text" data-selectable="true">TITAN (Титан) - известная в России и
                                СНГ компания-дистрибьютор фурнитуры для стеклоизделий и сопутствующих товаров. Компания
                                является производителем фурнитуры среднего ценового сегмента с достойными
                                эксплутационными качествами. По факту произщводство находится в Китае, но четко
                                контролируется российскими специалистами.<br><br>
                                Приемущества -<br>
                                - доступная стоимость<br>
                                - качество на среднем и высоком уровнях<br>
                                - широкий выбор специальных решений,
                                которые мы используем в работе <br></p>
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
                        <a data-fancybox data-src="#selectableModa_Company4" href="javascript:;" class="">
                            <div class="manufacture_items">
                                <img src="images/proizvoditeli/proizavoditel1.png" alt="">
                                <p>Minusco | Италия</p>
                            </div>
                        </a>
                        <div style="display: none;max-width:50%;border-spacing: " id="selectableModa_Company4">
                            <h2 class="fancybox_item_h2" data-selectable="true">Minusco (Минуско)</h2>
                            <p class="fancybox_item_text" data-selectable="true">Minusco (Минуско) - итальянский бренд,
                                входящий в группу компаний Colcom. Специализация - дизайнерские решения в области
                                стеклоизделий. Компания производит эстетичную фурнитуру, с качественным гальваническим
                                покрытием, в разных отделках и цветах, ориентированную в основном на максимально узкий
                                запрос дизайнеров в сфере стеклоизделий. Отличается высокой стоимостью и долгим сроком
                                поставки, но качество с внешним видом оправдывают ожидания. <br><br>
                                Приемущества -<br>
                                - эстетика и проработанный дизайн<br>
                                - обилие специализированных решений<br>
                                - высочайшие показатели стойкости (гальваника)<br>
                                - качественные уплотнители <br></p>
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
                            <div class="glass_door_items_new_img d-flex">
                                <img src="images/Lestnici_img_block/1/1.jpg" alt="">
                                <img src="images/Lestnici_img_block/1/2.jpg" alt="">
                            </div>
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
                            <div class="glass_door_items_new_img d-flex">
                                <img src="images/Lestnici_img_block/2/1.jpg" alt="">
                                <img src="images/Lestnici_img_block/2/2.jpg" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <div class="call_back_section">
            <section id="call_back" class="call_back_section">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="request_call_back">
                                <h2>быстро запросить стоимость</h2>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="help_glaas_type d-flex">
                                <div class="help_glass_items for_option_1">
                                    <img src="images/glaas_type1.png" alt="">
                                    <p>Прозрачное</p>
                                </div>
                                <div class="help_glass_items for_option_1">
                                    <img src="images/glass3.png" alt="">
                                    <p>Оптивайт</p>
                                </div>
                                <div class="help_glass_items for_option_1">
                                    <img src="images/glass4.png" alt="">
                                    <p>Бронза</p>
                                </div>
                                <div class="help_glass_items for_option_1">
                                    <img src="images/glass5.png" alt="">
                                    <p>Матовое</p>
                                </div>
                                <div class="help_glass_items for_option_1">
                                    <img src="images/glaas6.png" alt="">
                                    <p>Серое</p>
                                </div>
                            </div>
                            <div class="button_next">
                                <a class="next__block">Далее</a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>

        <div class="call_back_section">
            <section id="call_back">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="request_call_back">
                                <h2>быстро запросить стоимость</h2>
                                <p>Стадия ремона</p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="help_glaas_type help_glaas_type2 d-flex">
                                <div class="help_glass_items help_glass_items2 for_option_2">
                                    <img src="images/cost_calc_link1.png" alt="">
                                    <p>РЕМОНТ В РАЗГАРЕ</p>
                                    <span>Нужна консультация</span>
                                </div>
                                <div class="help_glass_items help_glass_items2 for_option_2">
                                    <img src="images/cost_calc_link3.png" alt="">
                                    <p>ВСЕ ГОТОВО К ЗАМЕРУ</p>
                                    <span>Нужен расчет или замер</span>
                                </div>
                            </div>
                            <div class="button_next">
                                <a class="next__block">Далее</a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>

        <section id="call_back" class="call_back_section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="request_call_back">
                            <h2>быстро запросить стоимость</h2>
                            <p>Дополнительные требования</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="help_glaas_type help_glaas_type2 d-flex">
                            <div id="chekbox_sect_6" class="chekbox_sect_6 d-flex">
                                <div class="first_chekbox">
                                    <label>
                                        <input id="chbx1" type="checkbox">
                                        <span class="fake-checkbox" aria-hidden="true"></span>
                                        <span class="label">Доставка изделия</span>
                                    </label>
                                    <label>
                                        <input id="chbx2" type="checkbox">
                                        <span class="fake-checkbox" aria-hidden="true"></span>
                                        <span class="label">Монтаж (Установка)</span>
                                    </label>
                                    <label>
                                        <input id="chbx3" type="checkbox">
                                        <span class="fake-checkbox" aria-hidden="true"></span>
                                        <span class="label">Зеркало в ванну</span>
                                    </label>
                                </div>
                                <div class="ssecond_chekbox">
                                    <label>
                                        <input id="chbx4" type="checkbox">
                                        <span class="fake-checkbox" aria-hidden="true"></span>
                                        <span class="label">Гидрофобное покрытие / антигрязь</span>
                                    </label>
                                    <label>
                                        <input id="chbx5" type="checkbox">
                                        <span class="fake-checkbox" aria-hidden="true"></span>
                                        <span class="label">Стеклянные полки / дверцы</span>
                                    </label>
                                    <label>
                                        <input id="chbx6" type="checkbox">
                                        <span class="fake-checkbox" aria-hidden="true"></span>
                                        <span class="label">Выезд дизайнера / подбор рисунка</span>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="button_next">
                            <a class="next__block">Далее</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="call_back" class="call_back_section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="request_call_back">
                            <h2>быстро запросить стоимость</h2>
                            <p>Контактные данные</p>
                        </div>
                    </div>
                </div>
                <form>
                    <div class="row formTag">
                        <div class="col-lg-12">
                            <div class="help_glaas_type help_glaas_type_last ">
                                <div class="up_form ">
                                    {{--<input type="text" placeholder="Your name">--}}
                                    <input type="text" name="name" placeholder="Имя">
                                    <input type="text" name="phone" placeholder="Телефон">
                                </div>
                                <div class="down_form down_form_2">
                                    {{--<input type="text" placeholder="EMail">--}}
                                    <input type="text" name="email" placeholder="email">
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input name="agree" type="checkbox">
                                        <span class="fake-checkbox" aria-hidden="true"></span>
                                        <span class="label">Согласие с конфиденциальностью и куки</span>
                                    </label>
                                </div>
                            </div>
                            <div class="button_next">
                                {{--<a class="next__block" >отправить</a>--}}
                                <a class="action_form" href="javascript:void(0);">отправить</a>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </section>
        <section id="call_back" class="call_back_section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="help_glaas_type help_glaas_type_last thanku ">
                            <h2 class=" popup_choise_h2">Спасибо за заказ!</h2>
                        </div>
                        <div class="button_next">
                            <a>Ок</a>
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
                        <div class="stairs_and_flooring_buttons stairs_and_flooring_buttons1 d-flex">
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
                        @foreach($photo as $value)
                            @if($value->type === 'распашные двери')
                                <a data-fancybox="" href="{{$value->photo}}">
                                    <div class="img_items_stairs">
                                        <img src="{{$value->small_photo}}" alt="1">
                                        <p></p>
                                    </div>
                                </a>
                            @endif
                        @endforeach
                    </div>
                    <div class="tab-pane" id="page4_profile" role="tabpanel">
                        @foreach($photo as $value)
                            @if($value->type === 'перегородки')
                                <a data-fancybox="gallery_Door1" href="{{$value->photo}}">
                                    <div class="img_items_stairs">
                                        <img src="{{$value->small_photo}}" alt="1">
                                        <p></p>
                                    </div>
                                </a>
                            @endif
                        @endforeach
                    </div>
                    <div class="tab-pane" id="page4_messages" role="tabpanel">
                        @foreach($photo as $value)
                            @if($value->type === 'маятниковые двери')
                                <a data-fancybox="gallery_Door2" href="{{$value->photo}}">
                                    <div class="img_items_stairs">
                                        <img src="{{$value->small_photo}}" alt="1">
                                        <p></p>
                                    </div>
                                </a>
                            @endif
                        @endforeach
                    </div>
                    <div class="tab-pane" id="page4_settings" role="tabpanel">
                        @foreach($photo as $value)
                            @if($value->type === 'раздвижные двери')
                                <a data-fancybox="gallery_Door3" href="{{$value->photo}}">
                                    <div class="img_items_stairs">
                                        <img src="{{$value->small_photo}}" alt="1">
                                        <p></p>
                                    </div>
                                </a>
                            @endif
                        @endforeach
                    </div>
                    <div class="tab-pane" id="page4_settings1" role="tabpanel">
                        @foreach($photo as $value)
                            @if($value->type === 'ограждения')
                                <a data-fancybox="gallery_Door4" href="{{$value->photo}}">
                                    <div class="img_items_stairs">
                                        <img src="{{$value->small_photo}}" alt="1">
                                        <p></p>
                                    </div>
                                </a>
                            @endif
                        @endforeach
                    </div>
                    <div class="tab-pane" id="page4_settings2" role="tabpanel">
                        @foreach($photo as $value)
                            @if($value->type === 'двери в коробках')
                                <a data-fancybox="gallery_Door5" href="{{$value->photo}}">
                                    <div class="img_items_stairs">
                                        <img src="{{$value->small_photo}}" alt="1">
                                        <p></p>
                                    </div>
                                </a>
                            @endif
                        @endforeach
                    </div>
                    <div class="tab-pane" id="page4_settings3" role="tabpanel">
                        @foreach($photo as $value)
                            @if($value->type === 'эксклюзивные решения')
                                <a data-fancybox="gallery_Door6" href="{{$value->photo}}">
                                    <div class="img_items_stairs">
                                        <img src="{{$value->small_photo}}" alt="1">
                                        <p></p>
                                    </div>
                                </a>
                            @endif
                        @endforeach

                    </div>
                </div>
            </div>
        </section>
        @if($video[5]->show  === 1 || $video[6]->show  === 1)
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
                            <div class="video_our d-flex">
                                @if($video[5]->show ===1)
                                    <iframe width="560" height="315"
                                            src={{$video[5]->video}}
                                                    frameborder="0"
                                            allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                                            allowfullscreen></iframe>
                                @endif
                                @if($video[6]->show  ===1)
                                    <iframe width="560" height="315"
                                            src={{$video[6]->video}}
                                                    frameborder="0"
                                            allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                                            allowfullscreen></iframe>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        @endif
        <section>
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="advantages">
                            <h2>наши преимущества</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="advantages_items">
                            <img src="images/Money.png" alt="">
                            <p class="cursor_text">Мы не самая бюджетная компания на рынке.
                                Вы можете найти сотни вариантов более дешевых пластиковых и модульных перегородок,
                                которые даже
                                близко не сравнятся с характеристиками нашей продукции.
                                Мы гордимся тем, что за оплаченные деньги Вы получите изделие, за которое не стыдно.
                                Уверяем, что пресловутое соотношение "цена/качество" у нас самое лучшее.</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="advantages_items">
                            <img src="images/Door.png" alt="">
                            <p class="cursor_text">Работаем с общественными местами большой проходимостью.
                                Например, маятниковые двери, которые мы производим стоят в Московском метрополитене,
                                МЦК, торговых центрах, расчитаны на более чем 20 лет службы при милионной проходимости.
                                При этом закаленное стекло - пожаростойкий материал, применяемый не только для
                                эстетики.</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="advantages_items">
                            <img src="images/Pro.png" alt="">
                            <p class="cursor_text">В нашей компании работают люди с существенным опытом работы в
                                стекольной промышленности.
                                Вы можете быть уверены в профессионализме наших рабочих и монтажников.
                                Мы работаем в сфере уже не первый год, сталкивались с большим количеством проблем и
                                всегда находили решения.
                                Опыт - это не пустой звук, особенно в нашем ремесле.</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="advantages_items">
                            <img src="images/Diamond.png" alt="">
                            <p class="cursor_text">Используем первоклассное сырье от ведущих мировых брендов -
                                AGC (Япония), Guardian (Великобритания), Pilkington (Великобритания).
                                Обработка изделий, так же ведется на Итальянском и Немецком оборудовании,
                                зарекомендовавших себя как лучшие на рынке, дающее точные размеры и превосходное
                                качество изделий.</p>
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
                            <h2 class="fancybox_item_h2" data-selectable="true"> Bohle (боле)</h2>
                            <p class="fancybox_item_text" data-selectable="true">Bohle (боле) - компания, с которой
                                фактически все начинается. Компания с 100 годами насыщенной истории, ставшая образцом
                                качества и золотым стандартом в сфере стеклообработки. Предприятие является
                                производителем с собственным конструкторским бюро, у которого "списывают" все технологии
                                и стиль многие сотни мелких компаний. Сейчас компания держит качетво на "премиальном"
                                уровне при адекватном ценообразовании. <br><br>

                                Преимущества компании -<br>
                                - высочайшее качество производства<br>
                                - идеальное исполнение инженерных идей<br>
                                - практичный и стильный дизайн<br>
                                - разумная стоимость<br>
                                - высокое качество уплотнителей<br></p>
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
                        <a data-fancybox data-src="#selectableModa_Company2" href="javascript:;" class="">
                            <div class="manufacture_items">
                                <img src="images/proizvoditeli/proizavoditel3.png" alt="">
                                <p>DORMA | Швейцария</p>
                            </div>
                        </a>
                        <div style="display: none;max-width:50%;border-spacing: " id="selectableModa_Company2">
                            <h2 class="fancybox_item_h2" data-selectable="true">Dorma (Дорма)</h2>
                            <p class="fancybox_item_text" data-selectable="true">Dorma (Дорма) - швейцарская компания
                                основанная в 1908 году, изначально специализировалась на мебельной
                                фурнитуре, но с 70-ых годов активно стала заниматься стекольным направлением. Преуспела
                                компания
                                в автоматических дверях и маятниковых системах с фантастической надежность. Например,
                                такую фурнитуру
                                используют на входных дверях Московского метро, а многие торговые
                                и бизнесс центры оснащены автоматическими дверями данной компании. <br><br>
                                Приемущества -<br>
                                - лидер в области качественных автоматических дверей<br>
                                - лидер в области экзотических и специализированных решений для стекла<br>
                                - равное качество с Bohle в области маятниковых систем<br>
                                - возможность собрать достойную комплектацию для отелей и гостиниц<br></p>
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
                        <a data-fancybox data-src="#selectableModa_Company3" href="javascript:;" class="">
                            <div class="manufacture_items">
                                <img src="images/proizvoditeli/proizavoditel4.png" alt="">
                                <p>ТИТАН | Россия</p>
                            </div>
                        </a>
                        <div style="display: none;max-width:50%;border-spacing: " id="selectableModa_Company3">
                            <h2 class="fancybox_item_h2" data-selectable="true">TITAN (Титан)</h2>
                            <p class="fancybox_item_text" data-selectable="true">TITAN (Титан) - известная в России и
                                СНГ компания-дистрибьютор фурнитуры для стеклоизделий и сопутствующих товаров. Компания
                                является производителем фурнитуры среднего ценового сегмента с достойными
                                эксплутационными качествами. По факту произщводство находится в Китае, но четко
                                контролируется российскими специалистами.<br><br>
                                Приемущества -<br>
                                - доступная стоимость<br>
                                - качество на среднем и высоком уровнях<br>
                                - широкий выбор специальных решений,
                                которые мы используем в работе <br></p>
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
                        <a data-fancybox data-src="#selectableModa_Company4" href="javascript:;" class="">
                            <div class="manufacture_items">
                                <img src="images/proizvoditeli/proizavoditel1.png" alt="">
                                <p>Minusco | Италия</p>
                            </div>
                        </a>
                        <div style="display: none;max-width:50%;border-spacing: " id="selectableModa_Company4">
                            <h2 class="fancybox_item_h2" data-selectable="true">Minusco (Минуско)</h2>
                            <p class="fancybox_item_text" data-selectable="true">Minusco (Минуско) - итальянский бренд,
                                входящий в группу компаний Colcom. Специализация - дизайнерские решения в области
                                стеклоизделий. Компания производит эстетичную фурнитуру, с качественным гальваническим
                                покрытием, в разных отделках и цветах, ориентированную в основном на максимально узкий
                                запрос дизайнеров в сфере стеклоизделий. Отличается высокой стоимостью и долгим сроком
                                поставки, но качество с внешним видом оправдывают ожидания. <br><br>
                                Приемущества -<br>
                                - эстетика и проработанный дизайн<br>
                                - обилие специализированных решений<br>
                                - высочайшие показатели стойкости (гальваника)<br>
                                - качественные уплотнители <br></p>
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
                                <h3>Распашные</h3>
                                <ul class="door_plus">
                                    <li>Низкая стоимость</li>
                                    <li>Минимальные зазоры</li>
                                    <li>Широкий выбор</li>

                                </ul>
                                <ul class="door_mines">
                                    <li>Дорогие доводчики</li>
                                    <li>Не всегда подходит</li>

                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="bg_types_door_items">
                            <div class="types_of_door_item">
                                <h3>Маятниковые</h3>
                                <ul class="door_plus">
                                    <li>Средняя строимость</li>
                                    <li>Крепление</li>
                                    <li>Идеально для ТЦ,
                                        гостиниц и офиса
                                    </li>

                                </ul>
                                <ul class="door_mines">
                                    <li>Узкий выбор</li>
                                    <li>Средние зазоры</li>

                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="bg_types_door_items">
                            <div class="types_of_door_item">
                                <h3>Раздвижные</h3>
                                <ul class="door_plus">
                                    <li>Максимально удобно</li>
                                    <li>Красиво и эстетично</li>
                                    <li>Экономит пространство</li>

                                </ul>
                                <ul class="door_mines">
                                    <li>Дорого, сложно, долго</li>
                                    <li>Дорогие доводчики
                                        и электропривод
                                    </li>

                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <div class="call_back_section">
            <section id="call_back" class="call_back_section">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="request_call_back">
                                <h2>быстро запросить стоимость</h2>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="help_glaas_type d-flex">
                                <div class="help_glass_items for_option_1">
                                    <img src="images/glaas_type1.png" alt="">
                                    <p>ПРОЗРАЧНОЕ</p>
                                </div>
                                <div class="help_glass_items for_option_1">
                                    <img src="images/glass3.png" alt="">
                                    <p>ОПТИВАЙТ</p>
                                </div>
                                <div class="help_glass_items for_option_1">
                                    <img src="images/glass4.png" alt="">
                                    <p>БРОНЗА</p>
                                </div>
                                <div class="help_glass_items for_option_1">
                                    <img src="images/glass5.png" alt="">
                                    <p>МАТОВОЕ</p>
                                </div>
                                <div class="help_glass_items for_option_1">
                                    <img src="images/glaas6.png" alt="">
                                    <p>СЕРОЕ</p>
                                </div>
                            </div>
                            <div class="button_next">
                                <a class="next__block">Далее</a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>

        <div class="call_back_section">
            <section id="call_back">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="request_call_back">
                                <h2>быстро запросить стоимость</h2>
                                <p>Стадия ремона</p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="help_glaas_type help_glaas_type2 d-flex">
                                <div class="help_glass_items help_glass_items2 for_option_2">
                                    <img src="images/cost_calc_link1.png" alt="">
                                    <p>РЕМОНТ В РАЗГАРЕ</p>
                                    <span>Нужна консультация</span>
                                </div>
                                <div class="help_glass_items help_glass_items2 for_option_2">
                                    <img src="images/cost_calc_link3.png" alt="">
                                    <p>ВСЕ ГОТОВО К ЗАМЕРУ</p>
                                    <span>Нужен расчет или замер</span>
                                </div>
                            </div>
                            <div class="button_next">
                                <a class="next__block">Далее</a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>

        <section id="call_back" class="call_back_section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="request_call_back">
                            <h2>быстро запросить стоимость</h2>
                            <p>Дополнительные требования</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="help_glaas_type help_glaas_type2 d-flex">
                            <div id="chekbox_sect_6" class="chekbox_sect_6 d-flex">
                                <div class="first_chekbox">
                                    <label>
                                        <input id="chbx1" type="checkbox">
                                        <span class="fake-checkbox" aria-hidden="true"></span>
                                        <span class="label">Доставка изделия</span>
                                    </label>
                                    <label>
                                        <input id="chbx2" type="checkbox">
                                        <span class="fake-checkbox" aria-hidden="true"></span>
                                        <span class="label">Монтаж (Установка)</span>
                                    </label>
                                    <label>
                                        <input id="chbx3" type="checkbox">
                                        <span class="fake-checkbox" aria-hidden="true"></span>
                                        <span class="label">Зеркало в ванну</span>
                                    </label>
                                </div>
                                <div class="ssecond_chekbox">
                                    <label>
                                        <input id="chbx4" type="checkbox">
                                        <span class="fake-checkbox" aria-hidden="true"></span>
                                        <span class="label">Гидрофобное покрытие / антигрязь</span>
                                    </label>
                                    <label>
                                        <input id="chbx5" type="checkbox">
                                        <span class="fake-checkbox" aria-hidden="true"></span>
                                        <span class="label">Стеклянные полки / дверцы</span>
                                    </label>
                                    <label>
                                        <input id="chbx6" type="checkbox">
                                        <span class="fake-checkbox" aria-hidden="true"></span>
                                        <span class="label">Выезд дизайнера / подбор рисунка</span>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="button_next">
                            <a class="next__block">Далее</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="call_back" class="call_back_section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="request_call_back">
                            <h2>быстро запросить стоимость</h2>
                            <p>Контактные данные</p>
                        </div>
                    </div>
                </div>
                <form>
                    <div class="row formTag">
                        <div class="col-lg-12">
                            <div class="help_glaas_type help_glaas_type_last ">
                                <div class="up_form ">
                                    {{--<input type="text" placeholder="Your name">--}}
                                    <input type="text" name="name" placeholder="имя">
                                    <input type="text" name="phone" placeholder="Телефон">
                                </div>
                                <div class="down_form down_form_2">
                                    {{--<input type="text" placeholder="EMail">--}}
                                    <input type="text" name="email" placeholder="email">
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input name="agree" type="checkbox">
                                        <span class="fake-checkbox" aria-hidden="true"></span>
                                        <span class="label">Согласие с конфиденциальностью и куки</span>
                                    </label>
                                </div>
                            </div>
                            <div class="button_next">
                                {{--<a class="next__block">отправить</a>--}}
                                <a class="action_form" href="javascript:void(0);">отправить</a>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </section>
        <section id="call_back" class="call_back_section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="help_glaas_type help_glaas_type_last thanku ">
                            <h2 class=" popup_choise_h2">Спасибо за заказ!</h2>
                        </div>
                        <div class="button_next">
                            <a>Ок</a>
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
                        <div class="stairs_and_flooring_buttons stairs_and_flooring_buttons5 d-flex">
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
                        @foreach($photo as $value)
                            @if($value->type === 'зеркала на заказ')
                                <a data-fancybox="gallery_Glasses" href="{{$value->photo}}">
                                    <div class="img_items_stairs">
                                        <img src="{{$value->small_photo}}" alt="1">
                                        <p></p>
                                    </div>
                                </a>
                            @endif
                        @endforeach
                    </div>
                    <div class="tab-pane" id="page3_home_1" role="tabpanel">
                        @foreach($photo as $value)
                            @if($value->type === 'зеркальное панно')
                                <a data-fancybox="gallery_Glasses1" href="{{$value->photo}}">
                                    <div class="img_items_stairs">
                                        <img src="{{$value->small_photo}}" alt="1">
                                        <p></p>
                                    </div>
                                </a>
                            @endif
                        @endforeach
                    </div>
                    <div class="tab-pane" id="page3_profile" role="tabpanel">
                        @foreach($photo as $value)
                            @if($value->type === 'оптовые заказы')
                                <a data-fancybox="gallery_Glasses2" href="{{$value->photo}}">
                                    <div class="img_items_stairs">
                                        <img src="{{$value->small_photo}}" alt="1">
                                        <p></p>
                                    </div>
                                </a>
                            @endif
                        @endforeach
                    </div>
                    <div class="tab-pane" id="page3_messages" role="tabpanel">
                        @foreach($photo as $value)
                            @if($value->type === 'эксклюзив решения')
                                <a data-fancybox="gallery_Glasses3" href="{{$value->photo}}">
                                    <div class="img_items_stairs">
                                        <img src="{{$value->small_photo}}" alt="1">
                                        <p></p>
                                    </div>
                                </a>
                            @endif
                        @endforeach
                    </div>
                </div>
            </div>
        </section>
        @if($video[7]->show  === 1 || $video[8]->show  === 1)
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
                            <div class="video_our d-flex">
                                @if($video[7]->show ===1)
                                    <iframe width="560" height="315"
                                            src={{$video[7]->video}}
                                                    frameborder="0"
                                            allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                                            allowfullscreen></iframe>
                                @endif
                                @if($video[8]->show ===1)
                                    <iframe width="560" height="315"
                                            src={{$video[8]->video}}
                                                    frameborder="0"
                                            allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                                            allowfullscreen></iframe>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        @endif
        <section>
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="glass_door">
                            <h2>О некоторых свойствах наших зеркал</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="glass_door_items d-flex">
                            <div class="glass_door_items_new_img d-flex">
                                <img src="images/three_page_image/1/1.jpg" alt="">
                                <img src="images/three_page_image/1/2.jpg" alt="">
                            </div>
                            <div class="glass_door_item">
                                <p>Наша компания производит зеркала с различными вариантами
                                    обработок, с подсветкой и рисунками от простого изделия
                                    в отрез, до зеркал с подогревами, экраном и подсветкой.
                                    В работе используются премиум-материалы от лучших в мире
                                    производителей, таких как Bohle, AGC и Glaverbel.
                                    Качество продукции соответствует
                                    евростандарту ISO, а сырье сертифицировано в России.</p>
                                <ul>
                                    <li>Все наши зеркала имеют влагостойкую амальгаму</li>
                                    <li>Изготавливаем гнутые и двусторонние зеркала</li>
                                </ul>
                                <ul>
                                    <li>Наносим гидрофобное покрытие (от отпечатков и налета)</li>
                                    <li>Делаем подсветку, подогрев, сенсорные кнопки при запросе</li>
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
                            <h2>Расчет простого изделия в режиме ONLINE</h2>
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
                            <h2>Сочетание простоты и новых технологий</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="glass_door_items_down d-flex">
                            <div class="glass_door_item_down Glases_page_door">
                                <p> Мы изготавливаем как малые зеркала по размерам,
                                    так и сложные технические изделия. Например,
                                    зеркальный встраиваемый телевизор с защитой
                                    от влаги или зеркало-шпион, которое используется
                                    на постах охраны, в роскошных интерьерах и в
                                    специализированных учреждениях.</p>
                                <ul>
                                    <li>Собственная разработка и производство. От А до Я.</li>
                                    <li>Мониторы для бань, саун и душевых</li>
                                </ul>
                                <ul>
                                    <li>Мониторы для бань, саун и душевых</li>
                                    <li>Пулестойкие зеркала, скрытые двери, зеркало-шпион</li>
                                </ul>
                            </div>
                            <div class="glass_door_items_new_img d-flex">
                                <img src="images/three_page_image/2/1.jpg" alt="">
                                <img src="images/three_page_image/2/2.jpg" alt="">
                            </div>
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
                                <p>СПЕЦИАЛЬНЫЙ КЛЕЙ</p>
                                <ul>
                                    <li>Выдерживает нагрузку более 220 кг на м2</li>
                                    <li>Эстетично (нет сторонних элементов)</li>
                                    <li>Безопасно в случае разбития</li>
                                    <li>Влагостойкость (не разрушается от влаги)</li>
                                    <li>Идеально для крепления в нишу</li>
                                    <li class="dark-mines">С монтажом не все так просто как кажется</li>
                                    <li>Тяжело демонтировать</li>
                                </ul>
                            </div>
                            <a class="galery_kripezh-pos" data-fancybox="gallery_kripezh"
                               href="images/cley.jpg">
                                <img class="glasses_img_fastener2 " src="images/cley_small.jpg" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="shower_type_items d-flex">
                            <a class="galery_kripezh-pos" data-fancybox="gallery_kripezh"
                               href="images/plastin.jpg">
                                <img class="glasses_img_fastener2 imgg_2" src="images/first_fastener.png" alt="">
                            </a>
                            <div class="shower_type_item-right fastener_shower_glass2">
                                <p>КРЕПЕЖНЫЕ ПЛАСТИНЫ</p>
                                <ul>
                                    <li>Не требует сверления зеркала</li>
                                    <li>Легко снять и перемещать</li>
                                    <li>Простой монтаж</li>
                                    <li>"Прощает" ошибки при монтаже</li>
                                    <li>Требует сверления стены</li>
                                    <li>Легче разбить (есть амплитуда хода)</li>
                                    <li>Требуется сверление стены (ответная часть)</li>
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
                            <h2>Зеркальное панно по итальянской технологии</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="glass_door_items Glasses_pages_doors d-flex">
                            <div class="glass_door_items_new_img d-flex">
                                <img src="images/three_page_image/3/1.jpg" alt="">
                                <img src="images/three_page_image/3/2.jpg" alt="">
                            </div>
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
                            <h2>наши преимущества</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="advantages_items">
                            <img src="images/Money.png" alt="">
                            <p class="cursor_text">Зеркальное панно делается из отдельных элементов и подгоняется
                                вручную, чтобы обеспечить минимальные зазоры, при этом сохранив идеально ровный, яркий
                                блеск, в отличии от гравировки на зеркале, которая создает неровную тусклую грань,
                                которая больше похожа на кривое зеркало. нежели на изделие класса "Люкс"</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="advantages_items">
                            <img src="images/Door.png" alt="">
                            <p class="cursor_text">Для зеркал мы используем только влагостойкое сырье.
                                А гидрофобное покрытие, которое мы наносим, обеспечит лучшую защиту
                                от пыли, воды и грязи, позволяя
                                долгое время не намывать изделие, наслаждаясь его блеском и первозданной красотой.</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="advantages_items">
                            <img src="images/Pro.png" alt="">
                            <p class="cursor_text">Зеркальное панно делают для невероятной по своей красоте
                                игры бликов, красоты рисунка и эстетики геометрических линий. Это не просто
                                зеркало. Это исключительно, творческая и кропотливая работа, к которой допускаются
                                только старшие мастера производства. Поверьте, подогнать зеркала друг к другу без
                                замазок и с
                                минимальным швом, без использования гравера, который значительно тускнее и дает
                                искривленнее фацета,
                                - это искусство.</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="advantages_items">
                            <img src="images/Diamond.png" alt="">
                            <p class="cursor_text">Для изготовления зеркального панно применяется
                                зеркала различного типа и цвета высшей марки. Зеркала дополнительно
                                полируются, на них наносят защитные покрытия и они проходят доп. проверки,
                                находясь под личным контролем Цехового Мастера.</p>
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
                            <h2 class="fancybox_item_h2" data-selectable="true"> Bohle (боле)</h2>
                            <p class="fancybox_item_text" data-selectable="true">Bohle (боле) - компания, с которой
                                фактически все начинается. Компания с 100 годами насыщенной истории, ставшая образцом
                                качества и золотым стандартом в сфере стеклообработки. Предприятие является
                                производителем с собственным конструкторским бюро, у которого "списывают" все технологии
                                и стиль многие сотни мелких компаний. Сейчас компания держит качетво на "премиальном"
                                уровне при адекватном ценообразовании. <br><br>

                                Преимущества компании -<br>
                                - высочайшее качество производства<br>
                                - идеальное исполнение инженерных идей<br>
                                - практичный и стильный дизайн<br>
                                - разумная стоимость<br>
                                - высокое качество уплотнителей<br></p>
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
                        <a data-fancybox data-src="#selectableModa_Company2" href="javascript:;" class="">
                            <div class="manufacture_items">
                                <img src="images/proizvoditeli/proizavoditel3.png" alt="">
                                <p>DORMA | Швейцария</p>
                            </div>
                        </a>
                        <div style="display: none;max-width:50%;border-spacing: " id="selectableModa_Company2">
                            <h2 class="fancybox_item_h2" data-selectable="true">Dorma (Дорма)</h2>
                            <p class="fancybox_item_text" data-selectable="true">Dorma (Дорма) - швейцарская компания
                                основанная в 1908 году, изначально специализировалась на мебельной
                                фурнитуре, но с 70-ых годов активно стала заниматься стекольным направлением. Преуспела
                                компания
                                в автоматических дверях и маятниковых системах с фантастической надежность. Например,
                                такую фурнитуру
                                используют на входных дверях Московского метро, а многие торговые
                                и бизнесс центры оснащены автоматическими дверями данной компании. <br><br>
                                Приемущества -<br>
                                - лидер в области качественных автоматических дверей<br>
                                - лидер в области экзотических и специализированных решений для стекла<br>
                                - равное качество с Bohle в области маятниковых систем<br>
                                - возможность собрать достойную комплектацию для отелей и гостиниц<br></p>
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
                        <a data-fancybox data-src="#selectableModa_Company3" href="javascript:;" class="">
                            <div class="manufacture_items">
                                <img src="images/proizvoditeli/proizavoditel4.png" alt="">
                                <p>ТИТАН | Россия</p>
                            </div>
                        </a>
                        <div style="display: none;max-width:50%;border-spacing: " id="selectableModa_Company3">
                            <h2 class="fancybox_item_h2" data-selectable="true">TITAN (Титан)</h2>
                            <p class="fancybox_item_text" data-selectable="true">TITAN (Титан) - известная в России и
                                СНГ компания-дистрибьютор фурнитуры для стеклоизделий и сопутствующих товаров. Компания
                                является производителем фурнитуры среднего ценового сегмента с достойными
                                эксплутационными качествами. По факту произщводство находится в Китае, но четко
                                контролируется российскими специалистами.<br><br>
                                Приемущества -<br>
                                - доступная стоимость<br>
                                - качество на среднем и высоком уровнях<br>
                                - широкий выбор специальных решений,
                                которые мы используем в работе <br></p>
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
                        <a data-fancybox data-src="#selectableModa_Company4" href="javascript:;" class="">
                            <div class="manufacture_items">
                                <img src="images/proizvoditeli/proizavoditel1.png" alt="">
                                <p>Minusco | Италия</p>
                            </div>
                        </a>
                        <div style="display: none;max-width:50%;border-spacing: " id="selectableModa_Company4">
                            <h2 class="fancybox_item_h2" data-selectable="true">Minusco (Минуско)</h2>
                            <p class="fancybox_item_text" data-selectable="true">Minusco (Минуско) - итальянский бренд,
                                входящий в группу компаний Colcom. Специализация - дизайнерские решения в области
                                стеклоизделий. Компания производит эстетичную фурнитуру, с качественным гальваническим
                                покрытием, в разных отделках и цветах, ориентированную в основном на максимально узкий
                                запрос дизайнеров в сфере стеклоизделий. Отличается высокой стоимостью и долгим сроком
                                поставки, но качество с внешним видом оправдывают ожидания. <br><br>
                                Приемущества -<br>
                                - эстетика и проработанный дизайн<br>
                                - обилие специализированных решений<br>
                                - высочайшие показатели стойкости (гальваника)<br>
                                - качественные уплотнители <br></p>
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

        <div class="call_back_section">
            <section id="call_back" class="call_back_section">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="request_call_back">
                                <h2>быстро запросить стоимость</h2>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="help_glaas_type d-flex">
                                <div class="help_glass_items for_option_1">
                                    <img src="images/glaas_type1.png" alt="">
                                    <p>ПРОЗРАЧНОЕ</p>
                                </div>
                                <div class="help_glass_items for_option_1">
                                    <img src="images/glass3.png" alt="">
                                    <p>ОПТИВАЙТ</p>
                                </div>
                                <div class="help_glass_items for_option_1">
                                    <img src="images/glass4.png" alt="">
                                    <p>БРОНЗА</p>
                                </div>
                                <div class="help_glass_items for_option_1">
                                    <img src="images/glass5.png" alt="">
                                    <p>МАТОВОЕ</p>
                                </div>
                                <div class="help_glass_items for_option_1">
                                    <img src="images/glaas6.png" alt="">
                                    <p>СЕРОЕ</p>
                                </div>
                            </div>
                            <div class="button_next">
                                <a class="next__block">Далее</a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>

        <div class="call_back_section">
            <section id="call_back">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="request_call_back">
                                <h2>быстро запросить стоимость</h2>
                                <p>Стадия ремона</p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="help_glaas_type help_glaas_type2 d-flex">
                                <div class="help_glass_items help_glass_items2 for_option_2">
                                    <img src="images/cost_calc_link1.png" alt="">
                                    <p>РЕМОНТ В РАЗГАРЕ</p>
                                    <span>Нужна консультация</span>
                                </div>
                                <div class="help_glass_items help_glass_items2 for_option_2">
                                    <img src="images/cost_calc_link3.png" alt="">
                                    <p>ВСЕ ГОТОВО К ЗАМЕРУ</p>
                                    <span>Нужен расчет или замер</span>
                                </div>
                            </div>
                            <div class="button_next">
                                <a class="next__block">Далее</a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>

        <section id="call_back" class="call_back_section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="request_call_back">
                            <h2>быстро запросить стоимость</h2>
                            <p>Дополнительные требования</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="help_glaas_type help_glaas_type2 d-flex">
                            <div id="chekbox_sect_6" class="chekbox_sect_6 d-flex">
                                <div class="first_chekbox">
                                    <label>
                                        <input id="chbx1" type="checkbox">
                                        <span class="fake-checkbox" aria-hidden="true"></span>
                                        <span class="label">Доставка изделия</span>
                                    </label>
                                    <label>
                                        <input id="chbx2" type="checkbox">
                                        <span class="fake-checkbox" aria-hidden="true"></span>
                                        <span class="label">Монтаж (Установка)</span>
                                    </label>
                                    <label>
                                        <input id="chbx3" type="checkbox">
                                        <span class="fake-checkbox" aria-hidden="true"></span>
                                        <span class="label">Зеркало в ванну</span>
                                    </label>
                                </div>
                                <div class="ssecond_chekbox">
                                    <label>
                                        <input id="chbx4" type="checkbox">
                                        <span class="fake-checkbox" aria-hidden="true"></span>
                                        <span class="label">Гидрофобное покрытие / антигрязь</span>
                                    </label>
                                    <label>
                                        <input id="chbx5" type="checkbox">
                                        <span class="fake-checkbox" aria-hidden="true"></span>
                                        <span class="label">Стеклянные полки / дверцы</span>
                                    </label>
                                    <label>
                                        <input id="chbx6" type="checkbox">
                                        <span class="fake-checkbox" aria-hidden="true"></span>
                                        <span class="label">Выезд дизайнера / подбор рисунка</span>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="button_next">
                            <a class="next__block">Далее</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="call_back" class="call_back_section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="request_call_back">
                            <h2>быстро запросить стоимость</h2>
                            <p>Контактные данные</p>
                        </div>
                    </div>
                </div>
                <form>
                    <div class="row formTag">
                        <div class="col-lg-12">
                            <div class="help_glaas_type help_glaas_type_last ">
                                <div class="up_form ">
                                    {{--<input type="text" placeholder="Your name">--}}
                                    <input type="text" name="name" placeholder="имя">
                                    <input type="text" name="phone" placeholder="Телефон">
                                </div>
                                <div class="down_form down_form_2">
                                    {{--<input type="text" placeholder="EMail">--}}
                                    <input type="text" name="email" placeholder="email">
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input name="agree" type="checkbox">
                                        <span class="fake-checkbox" aria-hidden="true"></span>
                                        <span class="label">Согласие с конфиденциальностью и куки</span>
                                    </label>
                                </div>
                            </div>
                            <div class="button_next">
                                {{--<a class="next__block">отправить</a>--}}
                                <a class="action_form" href="javascript:void(0);">отправить</a>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </section>
        <section id="call_back" class="call_back_section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="help_glaas_type help_glaas_type_last thanku ">
                            <h2 class=" popup_choise_h2">Спасибо за заказ!</h2>
                        </div>
                        <div class="button_next">
                            <a>Ок</a>
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
                        <div class="stairs_and_flooring_buttons stairs_and_flooring_buttons2 d-flex">
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
                        @foreach($photo as $value)
                            @if($value->type === 'скинали с фотопечатью')
                                <a data-fancybox="gallery_Fartucks" href="{{$value->photo}}">
                                    <div class="img_items_stairs">
                                        <img src="{{$value->photo}}" alt="1">
                                        <p></p>
                                    </div>
                                </a>
                            @endif
                        @endforeach
                    </div>
                    <div class="tab-pane" id="page5_profile" role="tabpanel">
                        @foreach($photo as $value)
                            @if($value->type === 'одноцветные фартуки')
                                <a data-fancybox="gallery_Fartucks1" href="{{$value->photo}}">
                                    <div class="img_items_stairs">
                                        <img src="{{$value->photo}}" alt="1">
                                        <p></p>
                                    </div>
                                </a>
                            @endif
                        @endforeach
                    </div>
                    <div class="tab-pane" id="page5_messages" role="tabpanel">
                        @foreach($photo as $value)
                            @if($value->type === 'скинали с подсветкой')
                                <a data-fancybox="gallery_Fartucks2" href="{{$value->photo}}">
                                    <div class="img_items_stairs">
                                        <img src="{{$value->photo}}" alt="1">
                                        <p></p>
                                    </div>
                            @endif
                        @endforeach
                    </div>
                </div>
            </div>
        </section>
        @if($video[9]->show  === 1 || $video[10]->show  === 1)
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
                            <div class="video_our d-flex">
                                @if($video[9]->show  === 1)
                                    <iframe width="560" height="315"
                                            src={{$video[9]->video}}
                                                    frameborder="0"
                                            allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                                            allowfullscreen></iframe>
                                @endif
                                @if($video[10]->show  === 1)
                                    <iframe width="560" height="315"
                                            src={{$video[10]->video}}
                                                    frameborder="0"
                                            allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                                            allowfullscreen></iframe>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        @endif
        <section>
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="glass_door">
                            <h2>Премиальная УФ-печать, без обмана и пленок</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="glass_door_items Glasses_pages_doors d-flex">
                            <!-- <div class="glass_door_items_new_img d-flex"> -->
                            <img src="images/five_page_imgBlock/1/1.jpg" alt="">

                            <!-- </div> -->
                            <div class="glass_door_item">
                                <p> Наносим специализированные полимерные краски, стойкие
                                    к нахождению в агрессивных средах и механическим
                                    повреждениям. В отличии от многих производителей
                                    используем Японские полимеры и наносим толстый
                                    слой белил, вместо дешевых пленок.</p>
                                <ul>
                                    <li>Очень "сочный" и насыщенные цвета, с гарантией долговечности.</li>
                                    <li>Не смываются, не боятся мороза, влаги и перепадов температур.
                                    </li>
                                </ul>
                                <ul>
                                    <li>Не желтеют и не выцветают, как дешевые краски и пленки
                                    </li>
                                    <li>Бесплатно консультируем, помогаем с выбором картинки.
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
                            <h2>Премиальное исполнение</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="glass_door_items_down  d-flex">
                            <div class="glass_door_item_down Glases_page_door">
                                <p> В работе используем самые лучшие материалы и краски.
                                    Используем самые дорогие и наиболее качественные виды
                                    сырья, при этом сохраняя адекватные цены и сроки поставки.
                                    Даем полные консультации, рекомендации и сопровождаем заказ
                                    от замера и подбора картинки до установки.</p>
                                <ul>
                                    <li>Четко сформулированые сроки и задачи по договору.
                                    </li>
                                    <li>Опытные замерщики, способные дать консультацию.
                                    </li>
                                </ul>
                                <ul>
                                    <li>Сопровождение на всех этапах заказа
                                    </li>
                                    <li>Зачастую, молча исправляем не наши косяки =)</li>
                                </ul>
                            </div>
                            <div class="Glasses_pages_doors"><img src="images/five_page_imgBlock/2/1.jpg" alt=""></div>
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
                            <h2>Сравнение видов стекла </h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6 ">
                        <div class="shower_type_items comparison_glass_items d-flex">
                            <img class="glasses_img_fastener1" src="images/glaas_type1.png" alt="">
                            <div class="shower_type_item-left fastener_shower_glass comparison_glass">
                                <p>Прозрачное (М1 или бц)</p>
                                <ul>
                                    <li>низкая стоимость</li>
                                    <li>ускоренные сроки поставки</li>
                                    <li>идеально для темных тонов (не зеленит)</li>
                                    <li class="dark-mines">сильно зеленит на светлых и белых тонах</li>
                                    <li class="dark-mines">менее "сочные" краски</li>
                                    <li>больше отсвечивает солнечные лучи</li>
                                </ul>
                            </div>

                        </div>
                    </div>
                    <div class="col-lg-6 ">
                        <div class="shower_type_items comparison_glass_items2 d-flex">

                            <div class="shower_type_item-right fastener_shower_glass2 comparison_glass2">
                                <p>Осветленное (Crystal или Optiwhite)</p>
                                <ul>
                                    <li>идеальная цветопередача</li>
                                    <li>нет сторонних оттенков с лица</li>
                                    <li>делает изображение "сочнее" и выраженнее</li>
                                    <li class="pluss">можно спокойно наносить любой цвет или оттенок</li>
                                    <li class="pluss">меньше зеркалит и бликует, нежели обычное</li>
                                    <li>цена стекла ощутимо выше</li>
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
                                <p>СПЕЦИАЛЬНЫЙ КЛЕЙ</p>
                                <ul>
                                    <li>Выдерживает нагрузку более 220 кг на м2</li>
                                    <li>Эстетично (нет сторонних элементов)</li>
                                    <li>Безопасно в случае разбития</li>
                                    <li>Влагостойкость (не разрушается от влаги)</li>
                                    <li>Идеально для крепления в нишу</li>
                                    <li class="dark-mines">С монтажом не все так просто как кажется</li>
                                    <li>Тяжело демонтировать</li>
                                    {{--<li>Простой и понятный монтаж</li>--}}
                                    {{--<li>Простое согласование схемы</li>--}}
                                    {{--<li>Можно подобрать крышки под Ваш дизайн</li>--}}
                                    {{--<li>Требует сверления стены</li>--}}
                                    {{--<li>Высокая хрупкость (из-за отверстий)</li>--}}
                                    {{--<li>Самый дорогой вид крепежа</li>--}}
                                    {{--<li>Не всем нравятся выпирающие элементы</li>--}}
                                </ul>
                            </div>
                            <a class="galery_kripezh-pos" data-fancybox="gallery_kripezh"
                               href="images/cley.jpg">
                                <img class="glasses_img_fastener2" src="images/cley_small.jpg" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="shower_type_items d-flex">
                            <a data-fancybox="gallery_kripezh" href="images/second_fastener_big.jpg">
                                <img class="glasses_img_fastener2" src="images/second_fastener.png" alt="">
                            </a>
                            <div class="shower_type_item-right fastener_shower_glass2">
                                <p>ТОЧЕЧНЫЙ КРЕПЕЖ</p>
                                <ul>
                                    <li>Выдерживает нагрузку более 220 кг на м2</li>
                                    <li>Эстетично (нет сторонних элементов)</li>
                                    <li>Безопасно в случае разбития</li>
                                    <li>Влагостойкость (не разрушается от влаги)</li>
                                    <li class="pluss">Идеально для крепления в нишу</li>
                                    <li>С монтажом не все так просто как кажется</li>
                                    <li>Тяжело демонтировать</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <div class="call_back_section">
            <section id="call_back">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="request_call_back">
                                <h2>быстро запросить стоимость</h2>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="help_glaas_type kripezh d-flex">
                                <div class="help_glass_items for_option_1">
                                    <img src="images/types_kripezh1.png" alt="">
                                    <p>Креежная пластина</p>
                                </div>
                                <div class="help_glass_items for_option_1">
                                    <img src="images/cley_small.jpg" alt="">
                                    <p>Специальный клей</p>
                                </div>
                                <div class="help_glass_items for_option_1">
                                    <img src="images/types_kripezh3.png" alt="">
                                    <p>Точечный крепеж</p>
                                </div>
                                <!-- <div class="help_glass_items for_option_1">
							<img src="images/glass5.png" alt="">
							<p>ОБЫЧНОЕ</p>
						</div>
						<div class="help_glass_items for_option_1">
							<img src="images/glaas6.png" alt="">
							<p>ОБЫЧНОЕ</p>
						</div>
 -->                    </div>
                            <div class="button_next">
                                <a class="next__block">Далее</a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>

        <!-- <section id="call_back" class="call_back_section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="request_call_back">
                            <h2>быстро запросить стоимость</h2>
                            <p>Выбор нанесения покрытия</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="help_glaas_type d-flex">
                            <div class="help_glass_items for_option_3">
                                <img src="images/types_kripezh2.png" alt="">
                                <p>прозрачное стекло</p>
                            </div>
                            <div class="help_glass_items for_option_3">
                                <img src="images/types_kripezh2.png" alt="">
                                <p>градиент</p>
                            </div>
                            <div class="help_glass_items for_option_3">
                                <img src="images/types_kripezh2.png" alt="">
                                <p>однотонная покраска</p>
                            </div>
                            <div class="help_glass_items for_option_3">
                                <img src="images/types_kripezh2.png" alt="">
                                <p>УФ-печать</p>
                            </div>
                            <div class="help_glass_items for_option_3">
                                <img src="images/types_kripezh2.png" alt="">
                                <p>3D-эффект</p>
                            </div>
                            <div class="help_glass_items for_option_3">
                                <img src="images/types_kripezh2.png" alt="">
                                <p>матовка</p>
                            </div>
                        </div>
                        <div class="button_next">
                            <a class="next__block">Далее</a>
                        </div>
                    </div>
                </div>
            </div>
        </section> -->


        <div class="call_back_section">
            <section id="call_back">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="request_call_back">
                                <h2>быстро запросить стоимость</h2>
                                <p>Стадия ремона</p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="help_glaas_type help_glaas_type2 d-flex">
                                <div class="help_glass_items help_glass_items2 for_option_2">
                                    <img src="images/cost_calc_link1.png" alt="">
                                    <p>Кухня не установлена</p>
                                    <span>Нужна консультация</span>
                                </div>
                                <div class="help_glass_items help_glass_items2 for_option_2">
                                    <img src="images/cost_calc_link3.png" alt="">
                                    <p>Кухня установлена нужен замер</p>
                                    <span>Нужен расчет или замер</span>
                                </div>
                            </div>
                            <div class="button_next">
                                <a class="next__block">Далее</a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>

        <section id="call_back" class="call_back_section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="request_call_back">
                            <h2>быстро запросить стоимость</h2>
                            <p>Дополнительные требования</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="help_glaas_type help_glaas_type2 d-flex">
                            <div id="chekbox_sect_6" class="chekbox_sect_6 d-flex">
                                <div class="first_chekbox">
                                    <label>
                                        <input id="chbx1" type="checkbox">
                                        <span class="fake-checkbox" aria-hidden="true"></span>
                                        <span class="label">Доставка изделия</span>
                                    </label>
                                    <label>
                                        <input id="chbx2" type="checkbox">
                                        <span class="fake-checkbox" aria-hidden="true"></span>
                                        <span class="label">Монтаж (Установка)</span>
                                    </label>
                                    <label>
                                        <input id="chbx3" type="checkbox">
                                        <span class="fake-checkbox" aria-hidden="true"></span>
                                        <span class="label">Зеркало в ванну</span>
                                    </label>
                                </div>
                                <div class="ssecond_chekbox">
                                    <label>
                                        <input id="chbx4" type="checkbox">
                                        <span class="fake-checkbox" aria-hidden="true"></span>
                                        <span class="label">Гидрофобное покрытие / антигрязь</span>
                                    </label>
                                    <label>
                                        <input id="chbx5" type="checkbox">
                                        <span class="fake-checkbox" aria-hidden="true"></span>
                                        <span class="label">Стеклянные полки / дверцы</span>
                                    </label>
                                    <label>
                                        <input id="chbx6" type="checkbox">
                                        <span class="fake-checkbox" aria-hidden="true"></span>
                                        <span class="label">Выезд дизайнера / подбор рисунка</span>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="button_next">
                            <a class="next__block">Далее</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="call_back" class="call_back_section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="request_call_back">
                            <h2>быстро запросить стоимость</h2>
                            <p>Контактные данные</p>
                        </div>
                    </div>
                </div>
                <form>
                    <div class="row formTag">
                        <div class="col-lg-12">
                            <div class="help_glaas_type help_glaas_type_last ">
                                <div class="up_form ">
                                    {{--<input type="text" placeholder="Your name">--}}
                                    <input type="text" name="name" placeholder="имя">
                                    <input type="text" name="phone" placeholder="Телефон">
                                </div>
                                <div class="down_form down_form_2">
                                    {{--<input type="text" placeholder="EMail">--}}
                                    <input type="text" name="email" placeholder="email">
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input name="agree" type="checkbox">
                                        <span class="fake-checkbox" aria-hidden="true"></span>
                                        <span class="label">Согласие с конфиденциальностью и куки</span>
                                    </label>
                                </div>
                            </div>
                            <div class="button_next">
                                {{--<a class="next__block">отправить</a>--}}
                                <a class="action_form" href="javascript:void(0);">отправить</a>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </section>
        <section id="call_back" class="call_back_section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="help_glaas_type help_glaas_type_last thanku ">
                            <h2 class=" popup_choise_h2">Спасибо за заказ!</h2>
                        </div>
                        <div class="button_next">
                            <a>Ок</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <div data-hash="seven">
        <!-- <section id="page_calculations">
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
        </section> -->
        <section>
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="wrap_">
                            <div class="popupp">
                                <div class="up_form up_form_popup">
                                    <h3 class="popup_choise_h2">"Калькулятор обновляется до 28 января. Приносим
                                        извинения за временные неудобства." <br> :)</h3>

                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4">
                            <!-- <div class="cost_calculation">
                                <h4>
                                    стоимость заказа
                                </h4>
                                <input disabled id="price" type="text">
                                <h4>ГОТОВНОСТЬ НА:</h4>
                                <p id="urgency"></p>
                                <div id="cost_calculation_day" class="date_calc">
                                    <input disabled id="calculator_day" type="day">
                                    <input disabled id="calculator_month" type="day">
                                    <input disabled id="calculator_year" type="day">
                                </div>
                                <p id="dayName" class="cost_calculation_day"></p>
                                <label>
                                    <input id="checkboxPrice" type="checkbox">
                                    <span class="fake-checkbox" aria-hidden="true"></span>
                                    <span class="label">Срочноо</span>
                                </label> <br>
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
                        </div> -->
                            <div class="col-lg-8">
                                <div class="cost_calc_first_tab first_tab_1 toggle">
                                    <!-- <div id="calc_stege" class="head toggler ">
                                        <p class="numver_stage">
                                            1
                                        </p>
                                        <h4>
                                            Выберите материал
                                        </h4>
                                        <i class="fas fa-angle-down"></i>
                                    </div> -->
                                    <div id="box-calc" class="wraper content actived">
                                        <div class="stairs_and_flooring_buttons stairs_and_flooring_buttons_calculator  d-flex">
                                            <a class="nav-link" id="glass" data-toggle="tab" href="#">Стекло</a>
                                            <a class="nav-link" id="mirror" data-toggle="tab" href="#">Зеркало</a>
                                            <a class="inav-link" id="triplex" data-toggle="tab" href="#">Триплекс</a>
                                        </div>
                                    </div>
                                </div>


                                <div id="material" class="cost_calc_first_tab toggle">
                                </div>
                                <div id="depth" class="cost_calc_first_tab toggle">
                                </div>
                                <div id="shape" class="cost_calc_first_tab toggle owl-stage-outer owl-height">
                                </div>
                                <div id="format" class="cost_calc_first_tab toggle owl-stage-outer owl-height">
                                </div>
                                <div id="extra" class="cost_calc_first_tab toggle">
                                </div>
                                <div id="order_info" class="cost_calc_first_tab toggle">
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
<script src={{asset("owl-carusel/dist/compressed.js")}}></script>
<script type="text/javascript" src={{asset("js/jquery.fancybox.min.js")}}></script>
{{--    <script type="text/javascript" src={{asset("js/popper.min.js")}}></script>--}}
{{--    <script type="text/javascript" src={{asset("js/tooltip.min.js")}}></script>--}}
<script type="text/javascript" src={{asset("js/libs/functions.js")}}></script>
<script type="text/javascript" src={{asset("js/navigationButtons.js")}}></script>
<script type="text/javascript" src={{asset("js/calculator.js")}}></script>
<script type="text/javascript" src={{asset("js/libs/focus_block.js")}}></script>

<script type="text/javascript" src={{asset("js/forms/form_js.js")}}></script>
<script type="text/javascript" src={{asset("js/jquery.validate.js")}}></script>

<!-- <script type="text/javascript" src="js/logic.js"></script> -->
</body>
</html>