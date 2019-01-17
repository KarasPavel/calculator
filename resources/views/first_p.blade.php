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
                            <a data-fancybox="gallery" href="{{$value->photo}}">
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
                            <a data-fancybox="gallery1" href="{{$value->photo}}">
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
                            <a data-fancybox="gallery3" href="{{$value->photo}}">
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
                            <a data-fancybox="gallery3" href="{{$value->photo}}">
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