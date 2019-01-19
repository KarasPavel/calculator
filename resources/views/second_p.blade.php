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
                                <p class="stairs_and_flooring_text">от 28100 руб. <br>
                                6-8 дней</p>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#page2_profile" role="tab"
                                   aria-controls="profile">Прямые Душевые</a>
                                <p class="stairs_and_flooring_text">от 26 600  руб. <br>
                                5-7 дней</p>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#page2_messages" role="tab"
                                   aria-controls="messages">Форма Трапеции</a>
                                <p class="stairs_and_flooring_text">От 31 100 руб. <br>
                                    7-15 дней</p>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#page2_settings" role="tab"
                                   aria-controls="settings">Двери в Нишу</a>
                                <p class="stairs_and_flooring_text">От 11 800 руб. <br>
                                    5-7 дней</p>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#page2_settings1" role="tab"
                                   aria-controls="setting1">Глухие перегородки</a>
                                <p class="stairs_and_flooring_text">От 8000 руб. <br>
                                    5-7 дней</p>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#page2_settings2" role="tab"
                                   aria-controls="settings2">Ограждения в ванную</a>
                                <p class="stairs_and_flooring_text">От 12000 руб. <br>
                                    5-7 дней</p>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#page2_settings3" role="tab"
                                   aria-controls="settings3">С раздвижной дверью</a>
                                <p class="stairs_and_flooring_text">От 30 800 руб. <br>
                                    7-10 дней</p>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#page2_settings4" role="tab"
                                   aria-controls="settings4">Эксклюзив и опт</a>
                                <p class="stairs_and_flooring_text">От 55 000 руб. <br>
                                    7-18 дней</p>
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
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="shower_type_items d-flex">
                        <div class="shower_type_item-right">
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
                        <img src="images/img_showers-type-right.png" alt="">
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
                        <img src="images/showers-adv1.png" alt="">
                        <p class="cursor_text">У нас используется каленое травмобезопасное стекло выдерживающее нагрузки до 270кгс/м2, в зависимости от комплектации.
                            Стекло, толщиной 8-12мм невозможно "просто так" разбить голыми руками, на него можно спокойно облокотится. Даже в случае разбития оно не нанесет таких
                            травм как обычное стекло, поскольку разлетится в мелкую крошку.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="advantages_items">
                        <img src="images/showers-adv2.png" alt="">
                        <p class="cursor_text">Мы подбираем комплектацию фурнитуры полностью индивидуально, консультируем, а наш замерщик привезет Вам на осмотр несколько вариантов "вживую".
                            Вы точно будете знать что за фурнитура у Вас будет стоять и какого она качества. В отличии от многих компаний, в основном, мы используем фурнитуру из латунных сплавов и
                            нержавеющей стали с гальваническим покрытием.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="advantages_items">
                        <img src="images/showers-adv3.png" alt="">
                        <p class="cursor_text">Наносим олеофобное защитное покрытие на стекло, ускоряющее стекание воды и уменьшающее количество отпечатков рук с грязью на стекле.
                            Особенно это актуально для городов и мест с высоким содержанием извести/хлора в воде, поскользу они образуют тот самый белый налет на стекло, который так тяжело отмывается.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="advantages_items">
                        <img src="images/showers-adv4.png" alt="">
                        <p class="cursor_text">Неограниченный срок службы. Вся конструкция представляет из себя комплекс простых механизмов и стекла, которые обладают крайне впечатляющими показателями долговечности.
                            При чем, речь идет об эксплуатации. Иными словами, изделие при активном использовании сохраняет свои качества многие годы. Фурнитура не тускнеет, а стекло не меняется вовсе.</p>
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
                <div class="row formDynamic">
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