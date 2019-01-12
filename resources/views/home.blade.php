@extends('layouts.head')
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
<div id="1" data-hash="zero" class="home-page">
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


        <div class="owl-nav">
            <button type="button" role="presentation" class="owl-prev" style="">
                <p onclick="topFunction()" id="mybtn" style="display: block;">Название страници <br> Предыдущая страница</p><img class="nav-next" src="images/prev_arrows.png" alt=""></button>
            <button type="button" role="presentation" class="owl-next">
                <p onclick="topFunction()" id="mybtn">Название страници <br> Следующая страница</p><img src="images/arrow-next_owl.png" alt=""></button>
        </div>

    </section>
</div>
@extends('layouts.footer')