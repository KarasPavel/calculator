<div data-hash="seven">
    <section id="page_calculations">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-3">
                    <div class="calculations_sec1_items">
                        <img src="images/page_calc_sec_1_pic1.png" alt="">
                        <p>Срок изготовления – <br> от 12 часов</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3">
                    <div class="calculations_sec1_items">
                        <img src="images/page_calc_sec_1_pic2.png" alt="">
                        <p>Минимальный заказ – <br> 300р /изделие 1000р/заказ</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3">
                    <div class="calculations_sec1_items">
                        <img src="images/page_calc_sec_1_pic3.png" alt="">
                        <p>Производство изделий «под ключ» - перегородки, душевые и многое другое</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3">
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
                        <h4>
                            стоимость заказа
                        </h4>
                        <input disabled id="price" type="text">
                        <h4>ГОТОВНОСТЬ НА:</h4>
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
                            <span class="label">Срочноо</span>
                        </label> <br>
                        <button class="cost_butt">Оформить заказ</button>
                        <button class="cost_butt1">В корзину</button>
                        <div class="cost_calculation__link">
                            <div>
                                <img src="images/cost_calc_link1.png" alt="">
                                <a href="#">Консультация</a>
                            </div>
                            <div>
                                <img src="images/cost_calc_link2.png" alt="">
                                <a href="#">Корзина</a>
                            </div>
                            <div>
                                <img src="images/cost_calc_link3.png" alt="">
                                <a href="#">Замершик</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="cost_calc_first_tab first_tab_1 toggle">
                        <div id="calc_stege" class="head toggler ">
                            <p class="numver_stage">
                                1
                            </p>
                            <h4>
                                Выберите материал
                            </h4>
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
<script type="text/javascript" src={{asset("js/calculator.js")}}></script>
