<div data-hash="seven">
    <section id="page_calculations">
        <div class="container d-none d-sm-block">
            <div class="row">
                <div class="col-lg-3 col-md-3 col-sm-6">
                    <div class="calculations_sec1_items">
                        <img src="images/page_calc_sec_1_pic1.png" alt="">
                        <p>Срок изготовления – <br> от 12 часов</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6">
                    <div class="calculations_sec1_items">
                        <img src="images/page_calc_sec_1_pic2.png" alt="">
                        <p>Минимальный заказ – <br> 300р /изделие 1000р/заказ</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6">
                    <div class="calculations_sec1_items">
                        <img src="images/page_calc_sec_1_pic3.png" alt="">
                        <p>Производство изделий «под ключ» - перегородки, душевые и многое другое</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6">
                    <div class="calculations_sec1_items">
                        <img src="images/page_calc_sec_1_pic4.png" alt="">
                        <p>Услуги по доставке и установке стеклоизделий и зеркал</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="calculator-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="cost_calculation">
                        <h4 class="order-cost">стоимость заказа</h4>
                        <input disabled id="price" type="text">
                        <h4 class="readiness">ГОТОВНОСТЬ НА:</h4>
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
                            <span class="label">Срочное изготовление</span>
                        </label>
                        <br>
                        <br>
                        <br>
                        {{--<button class="cost_butt">Оформить заказ</button>--}}
                        {{--<button class="cost_butt1">В корзину</button>--}}
                        <div class="cost_calculation__link">
                            <div>
                                <a href="#win1">
                                    <img src="images/cost_calc_link1.png" alt="">
                                    <span>Консультация</span></a>
                            </div>
                            <div style="display: none">
                                <a href="#">
                                    <img src="images/cost_calc_link2.png" alt="">
                                    <span>Корзина</span></a>
                            </div>
                            <div>
                                <a href="#win2">
                                    <img src="images/cost_calc_link3.png" alt="">
                                    <span>Замерщик</span></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="cost_calc_first_tab first_tab_1 toggle">
                        <div id="calc_stege" class="head toggler ">
                            <p class="numver_stage">1</p>
                            <h4>Выберите материал</h4>
                            <i class="fas fa-angle-down"></i>
                        </div>
                        <div id="box-calc" class="wraper content actived">
                            <div class="stairs_and_flooring_buttons stairs_and_flooring_buttons_calculator  d-flex">
                                <a class="nav-link" id="glass" data-toggle="tab" href="#">Стекло</a>
                                <a class="nav-link" id="mirror" data-toggle="tab" href="#">Зеркало</a>
                                <a class="nav-link" id="triplex" data-toggle="tab" href="#">Триплекс</a>
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

<a href="#x" class="overlay" id="win4"></a>
<div id="good" class="popup popup_choise">
    <div class="up_form up_form_popup">
        <h3 class="popup_choise_h2">Спасибо</h3>
        <h3 class="popup_choise_h2">Ваш заказ принят!</h3>
    </div>
    <div class="button_forms button_forms_popup">
        <a href="#">Ok</a>
    </div>
    <a class="close" title="Закрыть" href="#close"></a>
</div>

<a href="#x" class="overlay" id="win5"></a>
<div id="good" class="popup popup_choise">
    <div id="cart" class="up_form up_form_popup">
        <h3 class="popup_choise_h2">У Вас в корзине: </h3>
    </div>
    <div class="button_forms button_forms_popup">
        <a href="#">Ok</a>
    </div>
    <a class="close" title="Закрыть" href="#close"></a>
</div>
