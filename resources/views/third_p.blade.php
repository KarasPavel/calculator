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
                                <p class="stairs_and_flooring_text">От 2000 руб. <br>
                                    1-4 дней</p>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#page3_home_1" role="tab"
                                   aria-controls="option">Зеркальное панно</a>
                                <p class="stairs_and_flooring_text">От 25 000 руб. <br>
                                    10-14 дней</p>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#page3_profile" role="tab"
                                   aria-controls="profile">Оптовые заказы</a>
                                <p class="stairs_and_flooring_text">От 50 000 руб. <br>
                                    5-10 дней</p>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#page3_messages" role="tab"
                                   aria-controls="messages">Эксклюзив решения</a>
                                <p class="stairs_and_flooring_text">От 12 500 руб. <br>
                                    6-20 дней</p>
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
                                    <img src="{{$value->photo}}" alt="1">
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
                                    <img src="{{$value->photo}}" alt="1">
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
                                    <img src="{{$value->photo}}" alt="1">
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
                        <a class="buttons_calc_glasses" href="#raschet_stoimosti">калькулятор</a>
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
            <div class="row glasses-left-right-items">
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
                                <li class="orenge-mines">С монтажом не все так просто как кажется</li>
                                <li class="orenge-mines">Тяжело демонтировать</li>
                            </ul>
                        </div>
                        <a class="galery_kripezh-pos" data-fancybox=""
                           href="images/cley.jpg">
                            <img class="glasses_img_fastener2 " src="images/cley_small.jpg" alt="">
                        </a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="shower_type_items d-flex">
                        <a class="galery_kripezh-pos galery_kripezh-pos-right" data-fancybox=""
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
                        <img src="images/mirrors-adv2.png" alt="">
                        <p class="cursor_text">Зеркальное панно делается из отдельных элементов и подгоняется
                            вручную, чтобы обеспечить минимальные зазоры, при этом сохранив идеально ровный, яркий
                            блеск, в отличии от гравировки на зеркале, которая создает неровную тусклую грань,
                            которая больше похожа на кривое зеркало. нежели на изделие класса "Люкс"</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="advantages_items">
                        <img src="images/showers-adv1.png" alt="">
                        <p class="cursor_text">Для зеркал мы используем только влагостойкое сырье.
                            А гидрофобное покрытие, которое мы наносим, обеспечит лучшую защиту
                            от пыли, воды и грязи, позволяя
                            долгое время не намывать изделие, наслаждаясь его блеском и первозданной красотой.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="advantages_items">
                        <img src="images/adv3.png" alt="">
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
                        <img src="images/adv4.png" alt="">
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
                            <div class="help_glass_items for_option_1 mirrors-tooltip-wrap">
                                <!-- <img src="images/glaas6.png" alt=""> -->
                                <p>Серебро</p>
                                <span class="tooltiptext">Обычное зеркало, которое повсеместно используется в частных домах, спорт-залах, общественных
                                    местах и т.д. Имеет почти не заметный зеленоватый оттенок. Чтобы проверить какое у Вас зеркало, возьмите белый листок и посмотрите на него
                                    отражении. Если есть зеленца – зеркало серебро.</span>
                            </div>
                            <div class="help_glass_items for_option_1 mirrors-tooltip-wrap">
                                <!-- <img src="images/glaas_type1.png" alt=""> -->
                                <p>ClearVision</p>
                                <span class="tooltiptext">Зеркало с самым лучшим отражением, без заметных глазу оттенков. Самый белый материал
                                    на планете (отражение света около 100%). Цена на данный вид зеркал ощутимо выше, поскольку за основу берется стекло ClearVision. Используется повсеместно.</span>
                            </div>
                            <div class="help_glass_items for_option_1 mirrors-tooltip-wrap">
                                <!-- <img src="images/glass3.png" alt=""> -->
                                <p>Состаренное</p>
                            </div>
                            <div class="help_glass_items for_option_1 mirrors-tooltip-wrap">
                                <!-- <img src="images/glass4.png" alt=""> -->
                                <p>Бронза</p>
                                <span class="tooltiptext">Зеркало на основе тонированного в массе  стекла цвета "Темная бронза", с нанесением амальгамы. Используется в примерочных комнатах,
                                    в шоурумах и в домашних интерьерах. Часто используют в сочетании с темными породами дерева и с винтажными интерьерами.</span>
                            </div>
                            <div class="help_glass_items for_option_1 mirrors-tooltip-wrap">
                                <!-- <img src="images/glass5.png" alt=""> -->
                                <p>Графитовое</p>
                                <span class="tooltiptext">Зеркало на основе тонированного в массе серого стекла, с нанесением амальгамы. Используется в
                                    примерочных комнатах, в шоурумах и в домашних интерьерах. Отлично подходит под современные стили интерьеров.</span>
                            </div>
                            <div class="help_glass_items for_option_1 mirrors-tooltip-wrap">
                                <!-- <img src="images/glaas6.png" alt=""> -->
                                <p>Эксклюзив</p>
                                <span class="tooltiptext">Сюда входят эксклюзивные типы зеркал, такие как - состаренные зеркала, зеркало-шпион, кракелюр и цветные зеркала.
                                    Ввиду сложности согласования деталей, просьба оформить заказ и дождаться звонка специалиста, который проконсультирует и согласует с вами все детали заказа.
                                    Либо позвоните по нашему контактному телефону, указанному выше.</span>
                            </div>
                            <div class="help_glass_items for_option_1 mirrors-tooltip-wrap">
                                <!-- <img src="images/glaas6.png" alt=""> -->
                                <p>Золото</p>
                                <span class="tooltiptext">Зеркало с эффектным золотым отражением. В наличии 2 типа золотых зеркал - "Шампань" (мягкий тон) и "Обычное золото" (ярко-оранжевое).
                                    Все нюансы будут согласованы с нашим менеджером, который перезвонит Вам, после оформления заказа.</span>
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
                        <div id="chekbox_sect_6" class="chekbox_sect_6 row no-gutters justify-content-center">
                            <div class="first_chekbox col-md-5 col-lg-4"">
                                <label>
                                    <input id="chbx1" type="checkbox">
                                    <span class="fake-checkbox" aria-hidden="true"></span>
                                    <span class="label">Полки в ванную</span>
                                </label>
                                <label>
                                    <input id="chbx2" type="checkbox">
                                    <span class="fake-checkbox" aria-hidden="true"></span>
                                    <span class="label">Потребуется замерщик</span>
                                </label>
                                {{--<label>--}}
                                    {{--<input id="chbx3" type="checkbox">--}}
                                    {{--<span class="fake-checkbox" aria-hidden="true"></span>--}}
                                    {{--<span class="label">Только доставка</span>--}}
                                {{--</label>--}}
                            </div>
                            <div class="ssecond_chekbox col-md-5 col-lg-4"">
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
                                {{--<label>--}}
                                    {{--<input id="chbx6" type="checkbox">--}}
                                    {{--<span class="fake-checkbox" aria-hidden="true"></span>--}}
                                    {{--<span class="label">Выезд дизайнера / подбор рисунка</span>--}}
                                {{--</label>--}}
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
                                    <input type="text" name="phone" placeholder="Ваш телефон">
                                </div>
                            </div>
                            <div class="down_form down_form_2 row contact-form--row">
                                <div class="col-md-6">
                                    <input type="text" name="email" placeholder="Электронная почта">
                                </div>
                            </div>
                            <div class="checkbox">
                                <label class="true">
                                    <input name="agree" type="checkbox">
                                    <span class="fake-checkbox " aria-hidden="true"></span>
                                    <span class="label">Согласие с конфиденциальностью и куки</span>
                                </label>
                            </div>
                        </div>
                        <div class="button_next">
                            {{--<a class="next__block">отправить</a>--}}
                            <a class="action_form disable" href="javascript:void(0);" role="button" aria-disabled="true">отправить</a>
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
