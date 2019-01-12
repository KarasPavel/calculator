@extends('layouts.head')
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
                            <input type="text" placeholder="имя">
                            <input type="text" placeholder="телефон">
                        </div>
                        <div class="down_form">
                            <input type="text" placeholder="email">


                        </div>
                        <div class="checkbox">
                            <label>
                                <input type="checkbox">
                                <span class="fake-checkbox" aria-hidden="true"></span>
                                <span class="label">Согласие с конфиденциальностью и куки</span>
                            </label></label>
                        </div>
                        <div class="button_forms">
                            <a class="" href="#">отправить</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    @extends('layouts.footer')