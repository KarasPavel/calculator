$( document ).ready(function() {
    var offsetDay = 1;
    var currency = ' руб.';
    var priceSum = 0;

    function setPriceValue(){
        return ((priceSum  + 150*(offsetDay - 1)) + currency);
    }

    function setOrderDay() {
        var today = new Date();
        today.setDate(today.getDate() + offsetDay);
        var dd = today.getDate();
        var mm = today.getMonth()+1;
        var yyyy = today.getFullYear();
        var dayName = ([
            "( Воскресенье )",
            "( Понедельник )",
            "( Вторник )",
            "( Среда )",
            "( Четверг )",
            "( Пятница )",
            "( Суббота )",
        ][today.getDay()])
        $('#calculator_day').val(dd);
        $('#calculator_month').val(mm);
        $('#calculator_year').val(yyyy);
        $('#dayName').html(dayName);
        $('#price').val(setPriceValue());
    }

    $('#checkboxPrice').change(function () {
        $('#checkboxPrice').is(':checked') ? offsetDay = 2 : offsetDay = 1;
        setOrderDay();
    });

    $('#triplex').click(function () {
        $('#material').html(
            '<div id="calc_stege" class="head toggler">' +
            '   <p class="numver_stage">2</p>' +
            '   <h4>Триплекс</h4>' +
            '   <i class="fas fa-angle-down"></i>' +
            '</div>' +
            '<div id="box-calc" class="wraper content">' +
            '   <div class="calc_contents d-flex">' +
            '   <p>Существует безчисленное множество комбинаций использования многослойного стекла (триплекса).' +
            '      Систематизировать и рассчитывать автоматически - сложно. Поэтому для Вашего удобства мы предлагаем бесплатный расчет' +
            '      нашим специалистом по Вашему вопросу, который сможет с Вами связатся и подготовить для Вас нужную информацию по данной тематике,' +
            '      дать комментарии, рассказать как это будет выглядеть, сколько будет стоить и какие есть возможности реализации Вашего проекта.</p>' +
            '</div></div>' +
            '<br><br>' +
            '<a class="contacts">+7 (499) 677-20-67</a>' +
            '<button>Консультация и расчет</button>' +
            '<a class="contacts">info@v-t-x.ru</a>');
        priceSum = 300;
        setPriceValue();
        setOrderDay();
        unfillingDivs();
    });

    $('#mirror').click(function () {
        $('#material').html(
            '<div id="calc_stege" class="head toggler">' +
            '    <p class="numver_stage">2</p>' +
            '    <h4>Вид зеркала</h4>' +
            '    <i class="fas fa-angle-down"></i>' +
            '</div>' +
            '<div id="box-calc" class="wraper content">' +
            '    <div class="calc_contents d-flex">' +
            '        <div id="simple" class="help_glass_items calc_content2">' +
            '            <img src="images/glaas_type1.png" alt="">' +
            '            <p>ОБЫЧНОЕ</p>' +
            '        </div>' +
            '        <div id="optWhite" class="help_glass_items calc_content2">' +
            '            <img src="images/glass3.png" alt="">' +
            '            <p>Оптивайт</p>' +
            '        </div>' +
            '        <div id="bronze" class="help_glass_items calc_content2">' +
            '            <img src="images/glass4.png" alt="">' +
            '            <p>Бронза</p>' +
            '        </div>' +
            '        <div id="matt" class="help_glass_items calc_content2">' +
            '            <img src="images/glass5.png" alt="">' +
            '            <p>Матовое</p>' +
            '        </div>' +
            '        <div id="grey" class="help_glass_items calc_content2">' +
            '            <img src="images/glaas6.png" alt="">' +
            '            <p>Серое</p>' +
            '        </div>' +
            '    </div>' +
            '</div>'
        );
        unfillingDivs();
    });

    $('#glass').click(function () {
        $('#material').html(
            '<div id="calc_stege" class="head toggler">' +
            '    <p class="numver_stage">2</p>' +
            '    <h4>Вид стекла</h4>' +
            '    <i class="fas fa-angle-down"></i>' +
            '</div>' +
            '<div id="box-calc" class="wraper content">' +
            '    <div class="calc_contents d-flex">' +
            '        <div id="simple" class="help_glass_items calc_content2">' +
            '            <img src="images/glaas_type1.png" alt="">' +
            '            <p>ОБЫЧНОЕ</p>' +
            '        </div>' +
            '        <div id="optWhite" class="help_glass_items calc_content2">' +
            '            <img src="images/glass3.png" alt="">' +
            '            <p>Оптивайт</p>' +
            '        </div>' +
            '        <div id="bronze" class="help_glass_items calc_content2">' +
            '            <img src="images/glass4.png" alt="">' +
            '            <p>Бронза</p>' +
            '        </div>' +
            '        <div id="matt" class="help_glass_items calc_content2">' +
            '            <img src="images/glass5.png" alt="">' +
            '            <p>Матовое</p>' +
            '        </div>' +
            '        <div id="grey" class="help_glass_items calc_content2">' +
            '            <img src="images/glaas6.png" alt="">' +
            '            <p>Серое</p>' +
            '        </div>' +
            '    </div>' +
            '</div>'
        );
        unfillingDivs();
    });

    $('#material').on('click', '#simple, #optWhite, #bronze, #matt, #grey', function () {
        fillDepthDiv();
        $('#depth').show().children().show();
    });
    function fillDepthDiv() {
        $('#depth').html(
            '<div id="calc_stege" class="head toggler">' +
            '    <p class="numver_stage">3</p>' +
            '    <h4>Толщина изделия</h4>' +
            '    <i class="fas fa-angle-down"></i>' +
            '</div>' +
            '<div id="box-calc" class="wraper content">' +
            '    <div class="stage_3_choose_thiknes d-flex">' +
            '        <div class="choose_thiknes">' +
            '            <ul class="nav nav-tabs d-flex" id="myTab" role="tablist">' +
            '                <li class="nav-item">' +
            '                    <a id="three" class="nav-link active" data-toggle="tab" href="#calc1" role="tab"\n' +
            '                       aria-controls="home">3</a>' +
            '                </li>' +
            '                <li class="nav-item">' +
            '                    <a id="four" class="nav-link" data-toggle="tab" href="#calc2" role="tab"\n' +
            '                       aria-controls="profile">4</a>' +
            '                </li>' +
            '                <li class="nav-item">' +
            '                    <a id="five" class="nav-link" data-toggle="tab" href="#calc3" role="tab"\n' +
            '                       aria-controls="messages">5</a>' +
            '                </li>' +
            '                <li class="nav-item">' +
            '                    <a id="six" class="nav-link" data-toggle="tab" href="#calc4" role="tab"\n' +
            '                       aria-controls="messages">6</a>' +
            '                </li>' +
            '                <li class="nav-item">' +
            '                    <a id="eight" class="nav-link" data-toggle="tab" href="#calc5" role="tab"\n' +
            '                       aria-controls="messages">8</a>' +
            '                </li>' +
            '                <li class="nav-item">' +
            '                    <a id="ten" class="nav-link" data-toggle="tab" href="#calc6" role="tab"\n' +
            '                       aria-controls="messages">10</a>' +
            '                </li>' +
            '                <li class="nav-item">' +
            '                    <a id="twelve" class="nav-link" data-toggle="tab" href="#calc7" role="tab"\n' +
            '                       aria-controls="messages">12</a>' +
            '                </li>' +
            '                <li class="nav-item">' +
            '                    <a id="fifteen" class="nav-link" data-toggle="tab" href="#calc8" role="tab"\n' +
            '                       aria-controls="messages">15</a>' +
            '                </li>' +
            '                <li class="nav-item">' +
            '                    <a id="nineteen" class="nav-link" data-toggle="tab" href="#calc9" role="tab"\n' +
            '                       aria-controls="messages">19</a>' +
            '                </li>' +
            '            </ul>' +
            '        </div>' +
            '        <div class="content-right_calc">' +
            '            <div class="tab-content">' +
            '                <div class="tab-pane active" id="calc1" role="tabpanel">' +
            '                    <div class="img_items_stairs">' +
            '                        <img src="images/Fartucks/1/1.jpg" alt="1">' +
            '                    </div>' +
            '                </div>' +
            '                <div class="tab-pane " id="calc2" role="tabpanel">' +
            '                    <div class="img_items_stairs">\n' +
            '                        <img src="images/Fartucks/1/2.jpg" alt="1">' +
            '                    </div>' +
            '                </div>' +
            '                <div class="tab-pane " id="calc3" role="tabpanel">' +
            '                    <div class="img_items_stairs">' +
            '                        <img src="images/Fartucks/1/3.jpg" alt="1">' +
            '                    </div>' +
            '                </div>' +
            '                <div class="tab-pane " id="calc4" role="tabpanel">' +
            '                    <div class="img_items_stairs">' +
            '                        <img src="images/Fartucks/1/4.jpg" alt="1">' +
            '                    </div>' +
            '                </div>' +
            '                <div class="tab-pane " id="calc5" role="tabpanel">' +
            '                    <div class="img_items_stairs">' +
            '                        <img src="images/Fartucks/1/1.jpg" alt="1">' +
            '                    </div>' +
            '                </div>' +
            '                <div class="tab-pane" id="calc6" role="tabpanel">' +
            '                    <div class="img_items_stairs">' +
            '                        <img src="images/Fartucks/1/1.jpg" alt="1">' +
            '                    </div>' +
            '                </div>' +
            '                <div class="tab-pane" id="calc7" role="tabpanel">' +
            '                    <div class="img_items_stairs">' +
            '                        <img src="images/Fartucks/1/1.jpg" alt="1">' +
            '                    </div>' +
            '                </div>' +
            '                <div class="tab-pane" id="calc8" role="tabpanel">' +
            '                    <div class="img_items_stairs">' +
            '                        <img src="images/Fartucks/1/1.jpg" alt="1">' +
            '                    </div>' +
            '                </div>' +
            '                <div class="tab-pane " id="calc9" role="tabpanel">' +
            '                    <div class="img_items_stairs">' +
            '                        <img src="images/Fartucks/1/1.jpg" alt="1">' +
            '                    </div>' +
            '                </div>' +
            '            </div>' +
            '        </div>' +
            '    </div>' +
            '</div>'
        );
    }

    $('#depth').on('click', '#three, #four, #five, #six, #eight, #ten, #twelve, #fifteen, #nineteen', function () {
        fillShapeDiv();
        $('#shape').show().children().show();
    });
    function fillShapeDiv() {
        $('#shape').html(
            '<div id="calc_stege" class="head toggler">' +
            '    <p class="numver_stage">4</p>' +
            '    <h4>форма и размеры</h4>' +
            '    <i class="fas fa-angle-down"></i>' +
            '</div>' +
            '<div id="box-calc" class="wraper content">' +
            '    <div class="Size_calc">' +
            '        <div id="rectangle" class="item_size_calc">' +
            '            <img src="images/figure_size1.png" alt="">' +
            '            <p>Прямоугольник</p>' +
            '        </div>' +
            '        <div id="circle" class="item_size_calc">' +
            '            <img src="images/figure_size2.png" alt="">' +
            '            <p>Круг</p>' +
            '        </div>' +
            '        <div id="oval" class="item_size_calc">' +
            '            <img src="images/figure_size3.png" alt="">' +
            '            <p>Овал</p>' +
            '        </div>' +
            '        <div id="another" class="item_size_calc">' +
            '            <img src="images/figure_size4.png" alt="">' +
            '            <p>ИНАЯ ФОРМА</p>' +
            '        </div>' +
            '        <div class="item_size_calc">' +
            '            <p>Введите значения <br>(мм)</p>' +
            '            <div class="input_touch_size">' +
            '                <input type="text">' +
            '                <input type="text">' +
            '            </div>' +
            '        </div>' +
            '    </div>' +
            '</div>'
        )
    }

    $('#shape').on('click', '#rectangle, #circle, #oval, #another', function () {
        fillFormatDiv();
        $('#format').show().children().show();
    });
    function fillFormatDiv() {
        $('#format').html(
            '<div id="calc_stege" class="head toggler">' +
            '    <p class="numver_stage">5</p>' +
            '    <h4>Выберите тип обработки</h4>' +
            '    <i class="fas fa-angle-down"></i>' +
            '</div>' +
            '<div id="box-calc" class="wraper content">' +
            '    <div class="stairs_and_flooring_buttons butt_choose_kromka d-flex">' +
            '        <a id="without_processing" class="nav-link" data-toggle="tab" href="#">БЕЗ ОБРАБОТКИ КРОМОК</a>' +
            '        <a id="with_processing" class="nav-link" data-toggle="tab" href="#">ПОЛИРОВКА КРОМОК</a>' +
            '        <a id="facet" class="nav-link" data-toggle="tab" href="#">ФАЦЕТ</a>' +
            '    </div>' +
            '    <div class="text-kromka">' +
            '        <p>Кромка будет режуще-острой, а стекло хрупким.' +
            '            <br><span>Будьте осторожны!</span></p>' +
            '        <img src="images/sloy_kromka.png" alt="">' +
            '    </div>' +
            '</div>'
        )
    }

    $('#format').on('click', '#without_processing, #with_processing, #facet', function () {
        fillExtraDiv();
        $('#extra').show().children().show();
    });
    function fillExtraDiv() {
        $('#extra').html(
            '<div id="calc_stege" class="head toggler">' +
            '    <p class="numver_stage">6</p>' +
            '    <h4>дополнительно</h4>' +
            '    <i class="fas fa-angle-down"></i>' +
            '</div>' +
            '<div id="box-calc" class="wraper content">' +
            '    <div class="chekbox_sect_6 d-flex">' +
            '        <div class="first_chekbox">' +
            '            <label>' +
            '                <input id="hardening" type="checkbox">' +
            '                <span class="fake-checkbox" aria-hidden="true"></span>' +
            '                <span class="label">Закалка (Термоупрочнение)</span>' +
            '            </label>' +
            '            <label>' +
            '                <input id="holes_and_cutouts" type="checkbox">' +
            '                <span class="fake-checkbox" aria-hidden="true"></span>' +
            '                <span class="label">Отверстия и вырезы</span>' +
            '            </label>' +
            '            <label>' +
            '                <input id="installation" type="checkbox">' +
            '                <span class="fake-checkbox" aria-hidden="true"></span>' +
            '                <span class="label">Монтаж</span>' +
            '            </label>' +
            '        </div>' +
            '        <div class="ssecond_chekbox">' +
            '            <label>' +
            '                <input id="painting" type="checkbox">' +
            '                <span class="fake-checkbox" aria-hidden="true"></span>' +
            '                <span class="label">Покраска стекла</span>' +
            '            </label>' +
            '            <label>' +
            '                <input id="uv_printing" type="checkbox">' +
            '                <span class="fake-checkbox" aria-hidden="true"></span>' +
            '                <span class="label">УФ-печать</span>' +
            '            </label>' +
            '            <label>' +
            '                <input id="sand_blasting" type="checkbox">' +
            '                <span class="fake-checkbox" aria-hidden="true"></span>' +
            '                <span class="label">Пескоструй</span>' +
            '            </label>' +
            '        </div>' +
            '        <div class="third_chekbox">' +
            '            <label>' +
            '                <input id="round_corners" type="checkbox">' +
            '                <span class="fake-checkbox" aria-hidden="true"></span>' +
            '                <span class="label">Скругления по углам</span>' +
            '            </label>' +
            '        </div>' +
            '    </div>' +
            '</div>'
        )
    }

    $('#extra').on('click', '#hardening, #holes_and_cutouts, #installation,' +
        '#painting, #uv_printing, #sand_blasting, #round_corners', function () {
        fillOrderDiv();
        $('#order_info').show().children().show();
    });
    function fillOrderDiv() {
        $('#order_info').html(
            '<div id="calc_stege" class="head toggler">' +
            '    <p class="numver_stage">7</p>' +
            '    <h4>Информация по заказу</h4>' +
            '    <i class="fas fa-angle-down"></i>' +
            '</div>' +
            '<div id="box-calc" class="wraper content">' +
            '    <div class="Contact_form">' +
            '        <div class="first_row">' +
            '            <input type="text" placeholder="Name">' +
            '            <input type="number" placeholder="Quantity">' +
            '            <input type="text" placeholder="Location">' +
            '        </div>' +
            '        <div class="second_row d-flex">' +
            '            <div class="leftTable">' +
            '                <div class="up_input d-flex ">' +
            '                    <input type="tel" placeholder="Phone">' +
            '                    <input type="email" placeholder="Email">' +
            '                </div>' +
            '                <div class="down_buttons_distances d-flex">' +
            '                    <a class="nav-link" data-toggle="tab" href="#">В пределах МКАД</a>' +
            '                    <a class="nav-link" data-toggle="tab" href="#">Не более 5 км от МКАД</a>' +
            '                    <a class="nav-link" data-toggle="tab" href="#">Московская область</a>' +
            '                </div>' +
            '            </div>' +
            '            <div class="right_texbox">' +
            '                <textarea name="tex" id="" cols="25" rows="8"></textarea>' +
            '            </div>' +
            '        </div>' +
            '        <div class="buttons_buy_glass d-flex justify-content-center">' +
            '            <button class="cost_butt buy_buttons">Оформить заказ</button>' +
            '            <button class="cost_butt1 buy_buttons">В корзину</button>' +
            '        </div>' +
            '    </div>' +
            '</div>'
        )
    }

    function unfillingDivs() {
        $('#depth').empty();
        $('#shape').empty();
        $('#format').empty();
        $('#extra').empty();
        $('#order_info').empty();
    }
});