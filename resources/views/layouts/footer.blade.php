</div>
<footer>
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-3">
                <div class="footer_logo">
                    <img src="images/Viditex_logo.png" alt="" class="logo">
                </div>
            </div>
            <div class="col-lg-4 col-md-3">
                <div class="footer_menu">
                    <ul>
                        <li><a href="#">Контакты</a></li>
                        <li><a href="#">Технические условия</a></li>
                        <li><a href="#">Политика конфеденциальности</a></li>
                        <li><a href="#">Политика cookie</a></li>
                        <li><a href="#">Отзывы</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-2 col-md-3">
                <div class="footer_menu">
                    <ul>
                        <li><a href="#">Доставка</a></li>
                        <li><a href="#">Установка</a></li>
                        <li><a href="#">Договор оферты</a></li>
                        <li><a href="#">Вакансии</a></li>
                        <li><a href="#">Каталог фигур</a></li>
                    </ul>
                </div>
            </div>
            <!-- <div class="col-lg-2 col-md-2">
                <div class="footer_menu">
                    <ul>
                        <li><a href="#">Меню</a></li>
                        <li><a href="#">Клиенты</a></li>
                        <li><a href="#">Услуги</a></li>
                        <li><a href="#">Контакты</a></li>
                    </ul>
                </div>
            </div> -->
            <div class="col-lg-3 col-md-3">
                <div class="contacts">
                    <p>+7 (499) 677 20 67</p>
                    <div class="call-back">
                        <img src="images/phone_fontasome.png" alt="">
                        <a href="#win1">Заявка на звонок</a>
                    </div>


                </div>
                <div class="soc_icons">
                    <i class="fab fa-facebook-f"></i>
                    <i class="fab fa-instagram"></i>
                    <i class="fab fa-vimeo-v"></i>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="footer_down_text">
                    <p>© 2018 Все права защищены.</p>
                    <p>© All rights reserved Копирование текстовой и графической информации не допускается. Часть информации лицензирована. Нарушения преследуются по действующему законодательству. </p>
                </div>
            </div>
        </div>
    </div>
</footer>
<a href="#x" class="overlay" id="win1"></a>
<div class="popup">
    <div class="up_form up_form_popup">
        <input type="text" placeholder="имя">
        <input type="text" placeholder="телефон">
    </div>
    <div class="down_form down_form_popup d-flex">
        <input type="text" placeholder="email">
        <div class="date_popup">
            {{--<div class="day">--}}
            {{--</div>--}}
            <div class="data-time">
            </div>
        </div>


    </div>
    <div class="checkbox">
        <label>
            <input type="checkbox">
            <span class="fake-checkbox" aria-hidden="true"></span>
            <span class="label">Согласие с конфиденциальностью и куки</span>
        </label>
    </div>
    <div class="button_forms button_forms_popup">
        <a href="#win3">отправить</a>
    </div>
    <a class="close" title="Закрыть" href="#close"></a>
</div>
<a href="#x" class="overlay" id="win2"></a>
<div class="popup popup_choise">
    <div class="up_form up_form_popup">
        <h3 class="popup_choise_h2">ВЫЗОВ СПЕЦИАЛИСТА</h3>
        <div class="butt_choise d-flex">
            <button>Замершик</button>
            <button>Дизайнер</button>
        </div>

        <input type="text" placeholder="имя">
        <input type="text" placeholder="телефон">
    </div>
    <div class="down_form down_form_popup d-flex">
        <input type="text" placeholder="email">


        <div class="checkbox">
            <input type="checkbox" id="checkbox18" v-model="checked">
            <label for="checkbox18"><a href="#">Cогласие с конфиденциальностью и куки</a></label>
        </div>
    </div> 
       
        <div class="button_forms button_forms_popup">
                <a href="#win3">Заказать</a>
            </div>
       
        <a class="close" title="Закрыть" href="#close"></a>
    </div>
    <a href="#x" class="overlay" id="win3"></a>
    <div class="popup popup_choise">
        <div class="up_form up_form_popup">
            <h3 class="popup_choise_h2">Ваша заявка была принята!</h3>        
        </div>       
        <div class="button_forms button_forms_popup">
            <a href="#">Ok</a>
        </div>
        <a class="close" title="Закрыть" href="#close"></a>
    </div>

    <script type="text/javascript" src={{asset("js/jquery-3.3.1.min.js")}}></script>
    <script type="text/javascript" src={{asset("js/bootstrap.min.js")}}></script>
    <script src={{asset("owl-carusel/dist/compressed.js")}}></script>
    <script type="text/javascript" src={{asset("js/jquery.fancybox.min.js")}}></script>
    {{--    <script type="text/javascript" src={{asset("js/popper.min.js")}}></script>--}}
    {{--    <script type="text/javascript" src={{asset("js/tooltip.min.js")}}></script>--}}
    {{--<script type="text/javascript" src={{asset("js/libs/functions.js")}}></script>--}}
    <script type="text/javascript" src={{asset("js/navigationButtons.js")}}></script>
    <script type="text/javascript" src={{asset("js/calculator.js")}}></script>
    <script type="text/javascript" src="js/testJs.js"></script>
     {{--<script type="text/javascript" src="js/logic.js"></script>--}}

</body>
</html>
