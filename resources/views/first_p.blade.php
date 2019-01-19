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
                        <h2>Мифы о прочности стекла</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="glass_door_items d-flex">
                        <img src="images/second_page_imageBlock/1/1.jpg" alt="">
                        <div class="glass_door_item">
                            <p> Стекло действительно хрупкий материал, но вот к прочности
                             стеклоизделий принято относится со скепсисом,
                             а зря... Многослойное стекло с чередованием каленых
                             слоев и специальных полимеров, способно выдерживать 
                             колоссальные нагрузки, при этом обладая прозрачностью.</p>
                            <ul>
                                <li>Взрывобезопасное и пожаростойкое стекло с фирменной технологией</li>
                                <li>Пулестойкость до класса 6А (винтовка СВД Патрон+пуля БЗ-32)</li>
                            </ul>
                            <ul>
                                <li>Взломостойкость превышая класс Б3 (70+ ударов пожарным топором в точку)</li>
                                <li>Ударостойкость выше стандарта А3 (382 ДЖ/38.2кгс/м2)</li>
                            </ul>
                            <a href="#">Заказать</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="glass_door">
                        <h2>Декорирование и новые идеи</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="glass_door_items_down d-flex">
                        <div class="glass_door_item_down">
                            <p> Триплекс, благодаря многим слоям, обладает миллионами вариаций декорирования.
                             Внутри слоев можно запечь любые плоские предметы, от купюр и высушенных бабочек до
                              дисков от болгарки (из нашего опыта). Мы предлагаем клиентам много своих вариаций, 
                            например 3D эффекты. Представьте, идете Вы по лестнице, а у Вас под ногами листья и
                             ветки с прозрачными участками. </p>
                            <ul>
                                <li>Никаких проблем со скольжением. Фирменная технология.</li>
                                <li>Исполняем Ваши идеи, предлагаем свои</li>
                            </ul>
                            <ul>
                                <li>Огромный простор для творчества и дизайна</li>
                                <li>Делаем двустороннее зеркало или зеркало + стекло
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
                <div class="row formLower">
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
                            </label>
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
