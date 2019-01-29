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
                            <div>
                                <a id="myCart" href="#win5">
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
                            <div class="stairs_and_flooring_buttons stairs_and_flooring_buttons_calculator d-flex">
                                <a class="nav-link" id="glass" href="javascript:void(0);">Стекло</a>
                                <a class="nav-link" id="mirror" href="javascript:void(0);">Зеркало</a>
                                <a class="nav-link" id="triplex" href="javascript:void(0);">Триплекс</a>
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
                    <div id="order_info" class="cost_calc_first_tab toggle" style="display: none;">
                        <form id="calcForm" onsubmit="javascript:return false;">
                            <div id="calc_stege_7" class="head toggler">
                                <p class="numver_stage">7</p>
                                <h4>Информация по заказу</h4>
                                <i class="fas fa-angle-down"></i>
                            </div>
                            <div id="box-calc-7" class="wraper content">
                                <div class="Contact_form">
                                    <div class="first_row row">
                                        <div class="col-12 col-md-4"><input name="name" type="text" placeholder="Имя">
                                        </div>
                                        <div class="col-12 col-md-4"><input id="qntt" name="quantity" type="number"
                                                                            min="1" placeholder="Количество"></div>
                                        <div class="col-12 col-md-4"><input name="address" type="text"
                                                                            placeholder="Адресс"></div>
                                    </div>
                                    <div class="second_row row">
                                        <div class="col-12 col-md-4"><input class="phone_us" name="phone" type="tel"
                                                                            placeholder="Телефон"></div>
                                        <div class="col-12 col-md-4"><input name="email" type="email"
                                                                            placeholder="Электронная почта"></div>
                                        <div class="right_texbox col-12 col-md-4"><textarea name="comment" id=""
                                                                                            cols="25" rows="10"
                                                                                            placeholder="Комментарий к заказу"></textarea>
                                        </div>
                                        <div class="down_buttons_distances d-flex col-12 col-md-8">
                                            <a id="pickup" class="nav-link" data-toggle="tab"
                                               href="javascript:void(0);">Самовывоз</a>
                                            <a id="inMKAD" class="nav-link" data-toggle="tab"
                                               href="javascript:void(0);">В пределах МКАД</a>
                                            <a id="outMKAD" class="nav-link" data-toggle="tab"
                                               href="javascript:void(0);">Не более 5 км от МКАД</a>
                                            <a id="moskowRegion" class="nav-link" data-toggle="tab"
                                               href="javascript:void(0);">Московская область</a>
                                        </div>
                                    </div>
                                    <div class="buttons_buy_glass d-flex justify-content-center">
                                        <button id="makeOrder" class="cost_butt buy_buttons disable btn-make-order">
                                            Оформить заказ
                                        </button>
                                        <button id="buyProduct"
                                                class="cost_butt1 buy_buttons disable-cart btp-put-in-cart">В корзину
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </form>
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
<div id="good" class="popup popup_choise popup_cart">
    <div id="cart" class="up_form up_form_popup">
        <h3 class="popup_choise_h2">У Вас в корзине: </h3>
        <div class='table-responsive'>
            <table class="table table-hover table-sm">
                <tbody id="cart_table">
                </tbody>
            </table>
        </div>
    </div>
    <div class="button_forms button_forms_popup buttons-cart">
        <a href="#close" class="buttons-cart-ok btn-make-order">Ok</a>
    {{--</div>--}}
    {{--<div class="button_forms button_forms_popup">--}}
        <a id="buyAll" href="#close" class="buttons-cart-make-order btn-make-order">Заказать</a>
    </div>
    <a class="close cart-close" title="Закрыть" href="#close"></a>
</div>
