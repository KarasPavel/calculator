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
                <a href="#win2" class="btn-make-order">вызвать замерщика</a>
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
            <div class="row no-padding">
                <div class="col-lg-12">
                    <div class="stairs_and_flooring_buttons stairs_and_flooring_buttons1 d-flex">
                        <ul class="nav nav-tabs ul-width-100" id="myTab" role="tablist">
                            <li class="nav-item ">
                                <a class="nav-link active" data-toggle="tab" href="#page4_home" role="tab"
                                   aria-controls="home">Распашные двери</a>
                                <p class="stairs_and_flooring_text">От 12 100 руб. <br>
                                    5-7 дней</p>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#page4_profile" role="tab"
                                   aria-controls="profile">Перегородки</a>
                                <p class="stairs_and_flooring_text">От 16 000 руб. <br>
                                    4-10 дней</p>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#page4_messages" role="tab"
                                   aria-controls="messages">Маятниковые двери</a>
                                <p class="stairs_and_flooring_text">От 16 200 руб. <br>
                                    5-8 дней</p>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#page4_settings" role="tab"
                                   aria-controls="settings">Раздвижные двери</a>
                                <p class="stairs_and_flooring_text">От 21 000 руб. <br>
                                    7-10 дней</p>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#page4_settings1" role="tab"
                                   aria-controls="settings">Ограждения</a>
                                <p class="stairs_and_flooring_text">От 15 500 руб. <br>
                                    7-12 дней</p>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#page4_settings2" role="tab"
                                   aria-controls="settings">Двери в коробках</a>
                                <p class="stairs_and_flooring_text">От 12 000 руб. <br>
                                    7-12 дней</p>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#page4_settings3" role="tab"
                                   aria-controls="settings">Эксклюзивные решения</a>
                                <p class="stairs_and_flooring_text">От 60 000 руб. <br>
                                    7-25 дней</p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="tab-content">
                <div class="tab-pane active" id="page4_home" role="tabpanel">
                    @foreach($photo as $value)
                        @if($value->type === 'распашные двери')
                            <a data-fancybox="gallery_Door" href="{{$value->photo}}">
                                <div class="img_items_stairs">
                                    <img src="{{$value->photo}}" alt="1">
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
                                    <img src="{{$value->photo}}" alt="1">
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
                                    <img src="{{$value->photo}}" alt="1">
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
                                    <img src="{{$value->photo}}" alt="1">
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
                                    <img src="{{$value->photo}}" alt="1">
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
                                    <img src="{{$value->photo}}" alt="1">
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
                        <img src="images/adv1.png" alt="">
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
                        <img src="images/adv2.png" alt="">
                        <p class="cursor_text">Работаем с общественными местами большой проходимостью.
                            Например, маятниковые двери, которые мы производим стоят в Московском метрополитене,
                            МЦК, торговых центрах, расчитаны на более чем 20 лет службы при милионной проходимости.
                            При этом закаленное стекло - пожаростойкий материал, применяемый не только для
                            эстетики.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="advantages_items">
                        <img src="images/adv3.png" alt="">
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
                        <img src="images/adv4.png" alt="">
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
            <div class="row">
                <div class="col-lg-4">
                    <div class="bg_types_door_items door-first">
                        <div class="types_of_door_item">
                            <h3>Распашные</h3>
                            <ul class="door_plus">
                                <li>Низкая стоимость</li>
                                <li>Минимальные зазоры</li>
                                <li>Широкий выбор</li>

                            </ul>
                            <ul class="door_mines">
                                <li class="orenge-mines">Дорогие доводчики</li>
                                <li class="orenge-mines">Не всегда подходит</li>

                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="bg_types_door_items door-second">
                        <div class="types_of_door_item">
                            <h3>Маятниковые</h3>
                            <ul class="door_plus">
                                <li>Средняя строимость</li>
                                <li>Крепление в пол и потолок</li>
                                <li>Идеально для ТЦ,
                                    гостиниц и офиса
                                </li>

                            </ul>
                            <ul class="door_mines">
                                <li class="orenge-mines">Узкий выбор</li>
                                <li class="orenge-mines">Средние зазоры</li>

                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="bg_types_door_items door-third">
                        <div class="types_of_door_item">
                            <h3>Раздвижные</h3>
                            <ul class="door_plus">
                                <li>Максимально удобно</li>
                                <li>Красиво и эстетично</li>
                                <li>Экономит пространство</li>

                            </ul>
                            <ul class="door_mines">
                                <li class="orenge-mines">Дорого, сложно, долго</li>
                                <li class="orenge-mines">Дорогие доводчики и электропривод</li>

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
                    <div class="help_glaas_type help_glaas_type2">
                        <div id="chekbox_sect_6" class="chekbox_sect_6  row no-gutters justify-content-center">
                            <div class="first_chekbox col-md-5 col-xl-4">
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
                            <div class="ssecond_chekbox col-md-6 col-lg-4">
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
                <div class="row formDynamic">
                    <div class="col-lg-12">
                        <div class="help_glaas_type help_glaas_type_last  col-md-9">
                            <div class="up_form row contact-form--row">
                                <div class="col-md-6">
                                    <input type="text" name="name" placeholder="Ваше имя">
                                </div>
                                <div class="col-md-6">
                                    <input type="text" name="phone" placeholder="Ваш телефон">
                                </div>
                            </div>
                            <div class="down_form down_form_2 row contact-form--row">
                                <div class="col-md-6">
                                    <input type="text" name="email" placeholder="Электронная почта">
                                </div>
                            </div>
                            <div class="checkbox">
                                <label class=truee>
                                    <input name="agree" type="checkbox">
                                    <span class="fake-checkbox " aria-hidden="true"></span>
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
