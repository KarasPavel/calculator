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
                <a href="#win2" class="btn-make-order">вызвать замерщика</a>
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
            <div class="row no-padding">
                <div class="col-lg-12">
                    <div class="stairs_and_flooring_buttons stairs_and_flooring_buttons2 d-flex">
                        <ul class="nav nav-tabs ul-width-100" id="myTab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" data-toggle="tab" href="#page5_home" role="tab"
                                   aria-controls="home">Скинали с Фотопечатью</a>
                                <p class="stairs_and_flooring_text">От 14 800 руб. <br>
                                    5-7 дней</p>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#page5_profile" role="tab"
                                   aria-controls="profile">Одноцветные фартуки</a>
                                <p class="stairs_and_flooring_text">От 12 400 руб. <br>
                                    5-7 дней</p>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#page5_messages" role="tab"
                                   aria-controls="messages">Скинали с подсветкой</a>
                                <p class="stairs_and_flooring_text">От 30 000 руб. <br>
                                    10-16 дней</p>
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
                            </a>
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
            <div class="row no-padding">
                <div class="col-lg-12">
                    <div class="glass_door_items Glasses_pages_doors img-text-up-container d-flex">
                        <!-- <div class="glass_door_items_new_img d-flex"> -->
                        <div class="">
                            <img src="images/five_page_imgBlock/1/1.jpg" alt="">
                        </div>
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
                    <a class="glass_door_item_buttons aprons_items_button btn-make-order btn-free-consultation" href="#win1">бесплатная консультация</a>
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
            <div class="row no-padding">
                <div class="col-lg-12">
                    <div class="glass_door_items_down img-text-bottom-container d-flex">
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
                        <div class="Glasses_pages_doors">
                            <img src="images/five_page_imgBlock/2/1.jpg" alt="">
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
                        <img src="images/fartuk-adv2.png" alt="">
                        <p class="cursor_text">Используем технологию прямой печати изображений на стекле, яркими и контрастными чернилами с ультрафиолетовым отверждением.
                            Благодяря технологии, картинка обладает неограниченным сроком службы, крайне устойчива к механическим повреждениям и не боится сильных перепадов температуры.
                            Как многие конкуренты, мы НЕ обманываем Вас и предоставляем реальную УФ-печать, а не дешевые пленки, облезающие через год эксплуатации или до первой сырости в швах.
                        </p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="advantages_items">
                        <img src="images/fartuk-adv4.png" alt="">
                        <p class="cursor_text">Стекло очень легко отмывается без дополнительных инструментов и моющих средств. При этом, стекло и фотопечать устойчивы к бытовой химии,
                            ведь стекло - это один из самых химически-нейтральных материалов на планете.
                        </p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="advantages_items">
                        <img src="images/adv4.png" alt="">
                        <p class="cursor_text">Стекло не только красиво, оно и крайне прочно. После закалки, стекло приобретает устойчивость к температурам от -52 до +200 градусов (C),
                            выдерживает нагрузки до 140 кг и может выдержать удар сковородкой или кастрюлей, что не редкость, например на кухне.
                        </p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="advantages_items">
                        <img src="images/fartuk-adv3.png" alt="">
                        <p class="cursor_text">Мы используем Английское и Японское сырье высшей марки, таких брендов как - AGC (Япония), Guardian (Великобритания), Pilkington (Великобритания).
                            Стандартно на кухонный фартук идет закаленное стекло толщиной 6мм.</p>
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
            <div class="row no-padding">
                <div class="col-lg-6 ">
                    <div class="shower_type_items comparison_glass_items comparison-blocks d-flex">
                        <img class="glasses_img_fastener1" src="images/glaas_type1.png" alt="">
                        <div class="shower_type_item-left fastener_shower_glass comparison_glass">
                            <p>Прозрачное (М1 или бц)</p>
                            <ul>
                                <li>низкая стоимость</li>
                                <li>ускоренные сроки поставки</li>
                                <li>идеально для темных тонов (не зеленит)</li>
                                <li class="orenge-mines">сильно зеленит на светлых и белых тонах</li>
                                <li class="orenge-mines">менее "сочные" краски</li>
                                <li class="orenge-mines">больше отсвечивает солнечные лучи</li>
                            </ul>
                        </div>

                    </div>
                </div>
                <div class="col-lg-6 ">
                    <div class="shower_type_items comparison_glass_items2 comparison-blocks comparison-blocks--bottom d-flex">

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
            <div class="row fartuks-left-right-items skinali_types_of_connectors no-padding">
                <div class="col-lg-6">
                    <div class="shower_type_items d-flex connector-block-first">
                        <div class="shower_type_item-left fastener_shower_glass connector-type">
                            <p>СПЕЦИАЛЬНЫЙ КЛЕЙ</p>
                            <ul>
                                <li>Выдерживает нагрузку более 220 кг на м2</li>
                                <li>Эстетично (нет сторонних элементов)</li>
                                <li>Безопасно в случае разбития</li>
                                <li>Влагостойкость (не разрушается от влаги)</li>
                                <li>Идеально для крепления в нишу</li>
                                <li class="orenge-mines">С монтажом не все так просто как кажется</li>
                                <li class="orenge-mines">Тяжело демонтировать</li>
                                {{--<li>Простой и понятный монтаж</li>--}}
                                {{--<li>Простое согласование схемы</li>--}}
                                {{--<li>Можно подобрать крышки под Ваш дизайн</li>--}}
                                {{--<li>Требует сверления стены</li>--}}
                                {{--<li>Высокая хрупкость (из-за отверстий)</li>--}}
                                {{--<li>Самый дорогой вид крепежа</li>--}}
                                {{--<li>Не всем нравятся выпирающие элементы</li>--}}
                            </ul>
                        </div>
                        <a class="galery_kripezh-pos" data-fancybox=""
                           href="images/cley.jpg">
                            <img class="glasses_img_fastener2" src="images/cley_small.jpg" alt="">
                        </a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="shower_type_items d-flex connector-block-second">
                        <a data-fancybox="" href="images/second_fastener_big.jpg" class="connector-link">
                            <img class="glasses_img_fastener2" src="images/second_fastener.png" alt="">
                        </a>
                        <div class="shower_type_item-right fastener_shower_glass2 connector-type">
                            <p>ТОЧЕЧНЫЙ КРЕПЕЖ</p>
                            <ul>
                                <li>простой и понятный монтаж</li>
                                <li>Эпростое согласование схемы</li>
                                <li>можно подобрать крышки под Ваш дизайн</li>
                                <li class="orenge-mines">требует сверления стены</li>
                                <li class="orenge-mines">высокая хрупкость (из-за отверстий)</li>
                                <li class="orenge-mines">самый дорогой вид крепежа</li>
                                <li class="orenge-mines">не всем равятся выпирающие элементы</li>
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
                        <div class="help_glaas_type kripezh get-price-fast d-flex">
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
                    <div class="help_glaas_type help_glaas_type2">
                        <div id="chekbox_sect_6" class="chekbox_sect_6 row no-gutters justify-content-center">
                            <div class="first_chekbox col-md-5">
                                <label>
                                    <input id="chbx1" type="checkbox">
                                    <span class="fake-checkbox" aria-hidden="true"></span>
                                    <span class="label">Полки из стекла</span>
                                </label>
                                <label>
                                    <input id="chbx2" type="checkbox">
                                    <span class="fake-checkbox" aria-hidden="true"></span>
                                    <span class="label">Зеркало в ванную</span>
                                </label>
                                <label>
                                    <input id="chbx3" type="checkbox">
                                    <span class="fake-checkbox" aria-hidden="true"></span>
                                    <span class="label">Потребуется приезд дизайнера</span>
                                </label>
                            </div>
                            <div class="ssecond_chekbox col-md-5">
                                <label>
                                    <input id="chbx4" type="checkbox">
                                    <span class="fake-checkbox" aria-hidden="true"></span>
                                    <span class="label">Услуги по установке и доставке</span>
                                </label>
                                <label>
                                    <input id="chbx5" type="checkbox">
                                    <span class="fake-checkbox" aria-hidden="true"></span>
                                    <span class="label">Только доставка</span>
                                </label>
                                <label>
                                    <input id="chbx6" type="checkbox">
                                    <span class="fake-checkbox" aria-hidden="true"></span>
                                    <span class="label">Требуется консультация и по другим изделиям</span>
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
                <div class="row formDynamic">
                    <div class="col-lg-12">
                        <div class="help_glaas_type help_glaas_type_last col-md-9">
                            <div class="up_form row contact-form--row">
                                <div class="col-md-6">
                                    <input type="text" name="name" placeholder="Ваше имя">
                                </div>
                                <div class="col-md-6">
                                    <input class="phone_us" type="text" name="phone" placeholder="Ваш телефон">
                                </div>
                            </div>
                            <div class="down_form down_form_2 row contact-form--row">
                                <div class="col-md-6">
                                    <input type="text" name="email" placeholder="Электронная почта">
                                </div>
                            </div>
                            <div class="checkbox">
                                <label class="truee">
                                    <input name="agree" type="checkbox">
                                    <span class="fake-checkbox" aria-hidden="true"></span>
                                    <span class="label">Согласие с <a href="docs/PrivacyPolicy.pdf" target="_blank" class="link_to_policy">конфиденциальностью</a> и <a href="#win6" class="link_to_policy">куки</a></span>
                                </label>
                            </div>
                        </div>
                        <div class="button_next">
                            {{--<a class="next__block">отправить</a>--}}
                            <a class="action_form disable" href="javascript:void(0);">отправить</a>
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
