$( document ).ready(function() {
    var offsetDay = 1;
    var currency = ' руб.';
    var priceSum = 0;
    var materiaTypelId; // mirror, glass
    var materialId; // '#simple, #optWhite, #bronze, #matt, #silver, #grey, #graphite, #aged, #clearVision, #exclusive, #gold'
    var depthId;
    var shapeId;
    var format;

    // function httpGet(url) {
    //     return new Promise(function (resolve) {
    //         let xhr = new XMLHttpRequest();
    //         xhr.open('GET', url, true);
    //         xhr.onload = function () {
    //             if (this.status === 200) {
    //                 resolve(this.responseText);
    //             }
    //         };
    //         xhr.send();
    //     });
    // }

    // httpGet(location.origin + "/members")
    //     .then(response => funcSelectMember(JSON.parse(response)));
    //
    // function funcSelectMember(extData) {
    //     for (let i = 0; i < extData.length; i++) {
    //         elem = new Option(extData[i]['name'], extData[i]['id']);
    //         member_name.appendChild(elem)
    //     }
    // }

    // Route::get('members', 'Dbrequest@member');

    // public function members()
    // {
    //     $stacks = DB::table('members')->get();
    //     return response()->json($members);
    // }


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
        $('#material').empty();
        $('#material').append('<div id="calc_stege_2" class="head toggler"></div>');
        $('#calc_stege_2').append('<p class="numver_stage">2</p>');
        $('#calc_stege_2').append('<h4>Триплекс</h4>');
        $('#calc_stege_2').append('<i class="fas fa-angle-down"></i>');
        $('#material').append('<div id="box-calc-2" class="wraper content"></div>');
        $('#box-calc-2').append('<div id="box-calc-2-2" class="calc_contents d-flex"></div>');
        $('#box-calc-2-2').append("<p>Существует безчисленное множество комбинаций использования многослойного стекла (триплекса)." +
            "Систематизировать и рассчитывать автоматически - сложно. Поэтому для Вашего удобства мы предлагаем бесплатный расчет" +
            "нашим специалистом по Вашему вопросу, который сможет с Вами связатся и подготовить для Вас нужную информацию по данной тематике," +
            "дать комментарии, рассказать как это будет выглядеть, сколько будет стоить и какие есть возможности реализации Вашего проекта.</p>");
        $('#material').append('<a class="contacts">+7 (499) 677-20-67</a>');
        $('#material').append('<a href="#win1">   Консультация и расчет   </a>');
        $('#material').append('<a class="contacts">info@v-t-x.ru</a>');
        priceSum = 300;
        setPriceValue();
        setOrderDay();
        unfillingDivs();
    });

    $('#mirror').click(function () {
        materiaTypelId = this.id;
        $('#material').empty();
        $('#material').append('<div id="calc_stege_2" class="head toggler"></div>');
        $('#calc_stege_2').append('<p class="numver_stage">2</p>');
        $('#calc_stege_2').append('<h4>Вид зеркала</h4>');
        $('#calc_stege_2').append('<i class="fas fa-angle-down"></i>');
        $('#material').append('<div id="box-calc-2" class="wraper content"></div>');
        $('#box-calc-2').append('<div id="box-calc-2-2" class="calc_contents d-flex"></div>');
        $('#box-calc-2-2').append('<div id="clearVision" class="help_glass_items calc_content2"></div>');
        $('#clearVision').append('<p>ClearVision</p>');
        $('#box-calc-2-2').append('<div id="aged" class="help_glass_items calc_content2"></div>');
        $('#aged').append('<p>Состаренное</p>');
        $('#box-calc-2-2').append('<div id="bronze" class="help_glass_items calc_content2"></div>');
        $('#bronze').append('<p>Бронза</p>');
        $('#box-calc-2-2').append('<div id="graphite" class="help_glass_items calc_content2"></div>');
        $('#graphite').append('<p>Графитовое</p>');
        $('#box-calc-2-2').append('<div id="silver" class="help_glass_items calc_content2"></div>');
        $('#silver').append('<p>Серебро</p>');
        $('#box-calc-2-2').append('<div id="exclusive" class="help_glass_items calc_content2"></div>');
        $('#exclusive').append('<p>Эксклюзив</p>');
        $('#box-calc-2-2').append('<div id="gold" class="help_glass_items calc_content2"></div>');
        $('#gold').append('<p>Золото</p>');

        unfillingDivs();
    });

    $('#glass').click(function () {
        materiaTypelId = this.id;
        $('#material').empty();
        $('#material').append('<div id="calc_stege_2" class="head toggler"></div>');
        $('#calc_stege_2').append('<p class="numver_stage">2</p>');
        $('#calc_stege_2').append('<h4>Вид стекла</h4>');
        $('#calc_stege_2').append('<i class="fas fa-angle-down"></i>');
        $('#material').append('<div id="box-calc-2" class="wraper content"></div>');
        $('#box-calc-2').append('<div id="box-calc-2-2" class="calc_contents d-flex"></div>');
        $('#box-calc-2-2').append('<div id="simple" class="help_glass_items calc_content2"></div>');
        $('#simple').append('<img src="images/glaas_type1.png" alt="">');
        $('#simple').append('<p>Прозрачное</p>');
        $('#box-calc-2-2').append('<div id="optWhite" class="help_glass_items calc_content2"></div>');
        $('#optWhite').append('<img src="images/glass3.png" alt="">');
        $('#optWhite').append('<p>Оптивайт</p>');
        $('#box-calc-2-2').append('<div id="bronze" class="help_glass_items calc_content2"></div>');
        $('#bronze').append('<img src="images/glass4.png" alt="">');
        $('#bronze').append('<p>Бронза</p>');
        $('#box-calc-2-2').append('<div id="matt" class="help_glass_items calc_content2"></div>');
        $('#matt').append('<img src="images/glass5.png" alt="">');
        $('#matt').append('<p>Матовое</p>');
        $('#box-calc-2-2').append('<div id="grey" class="help_glass_items calc_content2"></div>');
        $('#grey').append('<img src="images/glaas6.png" alt="">');
        $('#grey').append('<p>Серое</p>');
        unfillingDivs();
    });

    $('#material').on('click', '#simple, #optWhite, #bronze, #matt, #silver, #grey,' +
        '#graphite, #aged, #clearVision, #exclusive, #gold', function () {
        materialId = this.id;
        $('#depth').empty();
        $('#shape').empty();
        $('#format').empty();
        $('#extra').empty();
        $('#order_info').empty();
        fillDepthDiv();
        $('#depth').show().children().show();
    });
    function fillDepthDiv() {
        $('#depth').append('<div id="calc_stege_3" class="head toggler"></div>');
        $('#calc_stege_3').append('<p class="numver_stage">3</p>');
        $('#calc_stege_3').append('<h4>Толщина изделия</h4>');
        $('#calc_stege_3').append('<i class="fas fa-angle-down"></i>');
        $('#depth').append('<div id="box-calc-3" class="wraper content"></div>');
        $('#box-calc-3').append('<div class="stage_3_choose_thiknes d-flex"></div>');
        $('.stage_3_choose_thiknes').append('<div class="choose_thiknes"></div>');
        $('.choose_thiknes').append('<ul class="nav nav-tabs d-flex" id="myTab1" role="tablist"></ul>');

        $('.stage_3_choose_thiknes').append('<div class="content-right_calc"></div>');
        $('.content-right_calc').append('<div id="tab-content" class="tab-content"></div>');

        if (materialId === "simple") {
            $('#myTab1').append('<li class="nav-item">' +
                '<a id="three" class="nav-link active" data-toggle="tab" href="#calc1" role="tab"' +
                'aria-controls="home">3</a>' +
                '</li>');
            $('#tab-content').append('<div class="tab-pane active" id="calc1" role="tabpanel">' +
                '<div class="img_items_stairs">' +
                '<img src="images/Fartucks/1/1.jpg" alt="1">' +
                '</div></div>');
        }

        $('#myTab1').append('<li class="nav-item">' +
            '<a id="four" class="nav-link" data-toggle="tab" href="#calc2" role="tab"' +
            'aria-controls="profile">4</a>' +
            '</li>');
        $('#tab-content').append('<div class="tab-pane" id="calc2" role="tabpanel">' +
            '<div class="img_items_stairs">' +
            '<img src="images/Fartucks/1/2.jpg" alt="1">' +
            '</div></div>');
        
        if (materiaTypelId === "glass" && (materialId === "optWhite" || materialId === "simple")) {
            $('#myTab1').append('<li class="nav-item">' +
                '<a id="five" class="nav-link" data-toggle="tab" href="#calc3" role="tab"' +
                'aria-controls="messages">5</a>' +
                '</li>');
            $('#tab-content').append('<div class="tab-pane" id="calc3" role="tabpanel">' +
                '<div class="img_items_stairs">' +
                '<img src="images/Fartucks/1/3.jpg" alt="1">' +
                '</div></div>');
        }

        if ((materiaTypelId === "mirror" && (materialId === "clearVision" || materialId === "silver")) || (materiaTypelId === "glass")) {
            $('#myTab1').append('<li class="nav-item">' +
                '<a id="six" class="nav-link" data-toggle="tab" href="#calc4" role="tab"' +
                'aria-controls="messages">6</a>' +
                '</li>');
            $('#tab-content').append('<div class="tab-pane" id="calc4" role="tabpanel">' +
                '<div class="img_items_stairs">' +
                '<img src="images/Fartucks/1/4.jpg" alt="1">' +
                '</div></div>');
        }

        if (materiaTypelId === "glass") {
            $('#myTab1').append('<li class="nav-item">' +
                '<a id="eight" class="nav-link" data-toggle="tab" href="#calc5" role="tab"' +
                'aria-controls="messages">8</a>' +
                '</li>');
            $('#tab-content').append('<div class="tab-pane" id="calc5" role="tabpanel">' +
                '<div class="img_items_stairs">' +
                '<img src="images/Fartucks/1/5.jpg" alt="1">' +
                '</div></div>');
            $('#myTab1').append('<li class="nav-item">' +
                '<a id="ten" class="nav-link" data-toggle="tab" href="#calc6" role="tab"' +
                'aria-controls="messages">10</a>' +
                '</li>');
            $('#tab-content').append('<div class="tab-pane" id="calc6" role="tabpanel">' +
                '<div class="img_items_stairs">' +
                '<img src="images/Fartucks/1/6.jpg" alt="1">' +
                '</div></div>');
        }

        if (materiaTypelId === "glass" && (materialId === "simple" || materialId === "optWhite")) {
            $('#myTab1').append('<li class="nav-item">' +
                '<a id="twelve" class="nav-link" data-toggle="tab" href="#calc7" role="tab"' +
                'aria-controls="messages">12</a>' +
                '</li>');
            $('#tab-content').append('<div class="tab-pane" id="calc7" role="tabpanel">' +
                '<div class="img_items_stairs">' +
                '<img src="images/Fartucks/1/7.jpg" alt="1">' +
                '</div></div>');
            $('#myTab1').append('<li class="nav-item">' +
                '<a id="fifteen" class="nav-link" data-toggle="tab" href="#calc8" role="tab"' +
                'aria-controls="messages">15</a>' +
                '</li>');
            $('#tab-content').append('<div class="tab-pane" id="calc8" role="tabpanel">' +
                '<div class="img_items_stairs">' +
                '<img src="images/Fartucks/1/8.jpg" alt="1">' +
                '</div></div>');
            $('#myTab1').append('<li class="nav-item">' +
                '<a id="nineteen" class="nav-link" data-toggle="tab" href="#calc9" role="tab"' +
                'aria-controls="messages">19</a>' +
                '</li>');
            $('#tab-content').append('<div class="tab-pane" id="calc9" role="tabpanel">' +
                '<div class="img_items_stairs">' +
                '<img src="images/Fartucks/1/9.jpg" alt="1">' +
                '</div></div>');
        }
    }

    $('#depth').on('click', '#three, #four, #five, #six, #eight, #ten, #twelve, #fifteen, #nineteen', function () {
        depthId = this.id;
        $('#shape').empty();
        $('#format').empty();
        $('#extra').empty();
        $('#order_info').empty();
        fillShapeDiv();
        $('#shape').show().children().show();
    });
    function fillShapeDiv() {
        $('#shape').append('<div id="calc_stege_4" class="head toggler"></div>');
        $('#calc_stege_4').append('<p class="numver_stage">4</p>');
        $('#calc_stege_4').append('<h4>форма и размеры</h4>');
        $('#calc_stege_4').append('<i class="fas fa-angle-down"></i>');
        $('#shape').append('<div id="box-calc-4" class="wraper content"></div>');
        $('#box-calc-4').append('<div class="Size_calc"></div>');
        $('.Size_calc').append('<div id="rectangle" class="item_size_calc"></div>');
        $('#rectangle').append('<img src="images/figure_size1.png" alt="">' +
            '<p>Прямоугольник</p>');
        $('.Size_calc').append('<div id="circle" class="item_size_calc"></div>');
        $('#circle').append('<img src="images/figure_size2.png" alt="">' +
            '<p>Круг</p>');
        $('.Size_calc').append('<div id="oval" class="item_size_calc"></div>');
        $('#oval').append('<img src="images/figure_size3.png" alt="">' +
            '<p>Овал</p>');
        $('.Size_calc').append('<div id="another" class="item_size_calc"></div>');
        $('#another').append('<img src="images/figure_size4.png" alt="">' +
            '<p>ИНАЯ ФОРМА</p>');
        $('.Size_calc').append('<div class="item_size_calc">' +
            '    <p>Введите размеры</p>' +
            '    <div id="shape_size" class="input_touch_size">' +
            '    </div></div>');
        $('#circle').click(function () {
            shapeId = this.id;
            $('#shape_size').empty();
            $('#shape_size').append('<input id="diameter" type="number" placeholder="мм">диаметр');
        });
        $('#shape').on('click', '#rectangle, #oval, #another', function () {
            shapeId = this.id;
            $('#shape_size').empty();
            $('#shape_size').append('<input id="height" type="number" placeholder="мм">высота' +
                '<input id="width" type="number" placeholder="мм">ширина');
        })
        $('#shape_size').append('<input id="height" type="number" placeholder="мм">высота' +
            '<input id="width" type="number" placeholder="мм">ширина')

    }

    // $('#shape').on('keyup', '#width, #height, #diameter', function () {
    //
    //     console.log('123')
    // })

    $('#shape').on('click', '#rectangle, #circle, #oval, #another', function () {
        shapeId = this.id;
        $('#format').empty();
        $('#extra').empty();
        $('#order_info').empty();
        fillFormatDiv();
        $('#format').show().children().show();
    });
    function fillFormatDiv() {
        $('#format').append('<div id="calc_stege_5" class="head toggler"></div>');
        $('#calc_stege_5').append('<p class="numver_stage">5</p>');
        $('#calc_stege_5').append('<h4>Выберите тип обработки</h4>');
        $('#calc_stege_5').append('<i class="fas fa-angle-down"></i>');
        $('#format').append('<div id="box-calc-5" class="wraper content"></div>');
        $('#box-calc-5').append('<div id="box-calc-5-1" class="stairs_and_flooring_buttons butt_choose_kromka d-flex"></div>');
        $('#box-calc-5-1').append('<a id="without_processing" class="nav-link" data-toggle="tab" href="#">БЕЗ ОБРАБОТКИ КРОМОК</a>');
        $('#format').append('<div class="text-kromka">' +
            '    <p>Кромка будет режуще-острой, а стекло хрупким.' +
            '    <br><span>Будьте осторожны!</span></p>' +
            '    <img src="images/sloy_kromka.png" alt="">' +
            '</div>');
        if (depthId != "three") {
            $('#box-calc-5-1').append('<a id="with_processing" class="nav-link" data-toggle="tab" href="#">ПОЛИРОВКА КРОМОК</a>');
        }

        if (depthId === "four" || depthId === "six" || depthId === "eight" || depthId === "ten" || depthId === "twelve") {
            $('#box-calc-5-1').append('<a id="facet" class="nav-link" data-toggle="tab" href="#">ФАЦЕТ</a>');
            $('#with_processing').click(function () {
                $(".text-kromka").empty();
                $('#format').append('<div class="text-kromka">' +
                    '    <p>Кромка будет режуще-острой, а стекло хрупким.' +
                    '    <br><span>Будьте осторожны!</span></p>' +
                    '    <img src="images/sloy_kromka.png" alt="">' +
                    '</div>');
            });
            $('#without_processing').click(function () {
                $(".text-kromka").empty();
                $('#format').append('<div class="text-kromka">' +
                    '    <p>Кромка будет режуще-острой, а стекло хрупким.' +
                    '    <br><span>Будьте осторожны!</span></p>' +
                    '    <img src="images/sloy_kromka.png" alt="">' +
                    '</div>');
            });
            $('#facet').click(function () {
                $(".text-kromka").empty();
                $('#extra').empty();
                $('.text-kromka').prepend('<ul class="nav nav-tabs d-flex" id="myTab2" role="tablist"></ul>');

                $("#myTab2").append('<li class="nav-item">' +
                    '<a id="facet5" class="nav-link" data-toggle="tab" role="tab"' +
                    'aria-controls="messages">5 мм</a>' +
                    '</li>');
                $("#myTab2").append('<li class="nav-item">' +
                    '<a id="facet10" class="nav-link" data-toggle="tab" role="tab"' +
                    'aria-controls="messages">10 мм</a>' +
                    '</li>');
                $("#myTab2").append('<li class="nav-item">' +
                    '<a id="facet15" class="nav-link" data-toggle="tab" role="tab"' +
                    'aria-controls="messages">15 мм</a>' +
                    '</li>');
                $("#myTab2").append('<li class="nav-item">' +
                    '<a id="facet20" class="nav-link" data-toggle="tab" role="tab"' +
                    'aria-controls="messages">20 мм</a>' +
                    '</li>');

                if (depthId != "four") {
                    $("#myTab2").append('<li class="nav-item">' +
                        '<a id="facet25" class="nav-link" data-toggle="tab" role="tab"' +
                        'aria-controls="messages">25 мм</a>' +
                        '</li>');
                    $("#myTab2").append('<li class="nav-item">' +
                        '<a id="facet30" class="nav-link" data-toggle="tab" role="tab"' +
                        'aria-controls="messages">30 мм</a>' +
                        '</li>');
                    $("#myTab2").append('<li class="nav-item">' +
                        '<a id="facet35" class="nav-link" data-toggle="tab" role="tab"' +
                        'aria-controls="messages">35 мм</a>' +
                        '</li>');
                    $("#myTab2").append('<li class="nav-item">' +
                        '<a id="facet40" class="nav-link" data-toggle="tab" role="tab"' +
                        'aria-controls="messages">40 мм</a>' +
                        '</li>');
                }
                $('#format').append('<div class="text-kromka">' +
                    '    <p>Кромка будет режуще-острой, а стекло хрупким.' +
                    '    <br><span>Будьте осторожны!</span></p>' +
                    '    <img src="images/sloy_kromka.png" alt="">' +
                    '</div>');
            })
        }

    }

    $('#format').on('click', '#without_processing, #with_processing, ' +
        '#facet5, #facet10, #facet15, #facet20, #facet25, #facet30, #facet35, #facet40', function () {
        format = this.id;
        $('#extra').empty();
        $('#order_info').empty();
        fillExtraDiv();
        $('#extra').show().children().show();
    });

    function fillExtraDiv() {
        $('#extra').append('<div id="calc_stege_6" class="head toggler"></div>');
        $('#calc_stege_6').append('<p class="numver_stage">6</p>');
        $('#calc_stege_6').append('<h4>дополнительно</h4>');
        $('#calc_stege_6').append('<i class="fas fa-angle-down"></i>');
        $('#extra').append('<div id="box-calc-6" class="wraper content"></div>');
        $('#box-calc-6').append('<div id="box-calc-6-1" class="chekbox_sect_6 d-flex"></div>');
        $('#box-calc-6-1').append('<div id="box-calc-6-2-1" class="first_chekbox"></div>');
        if (depthId != "three"){
            $('#box-calc-6-2-1').append('<label>' +
                '    <input id="hardening" type="checkbox">' +
                '    <span class="fake-checkbox" aria-hidden="true"></span>' +
                '    <span class="label">Закалка (Термоупрочнение)</span>' +
                '</label>');
        }
        $('#box-calc-6-2-1').append('<label>' +
            '    <input id="holes_and_cutouts" type="checkbox">' +
            '    <span class="fake-checkbox" aria-hidden="true"></span>' +
            '    <span class="label">Отверстия и вырезы</span>' +
            '</label>');
        $('#holes_and_cutouts').change(function () {
            $('#hac').detach();
            if ($('#holes_and_cutouts').is(':checked')) {
                $('#box-calc-6-2-1').append('<label id="hac">' +
                    '    <input id="hac_num" type="number">Количество' +
                    '</label>');
            }
        });

        $('#box-calc-6-1').append('<div id="box-calc-6-2-2" class="ssecond_chekbox"></div>');
        $('#box-calc-6-2-2').append('<label>' +
            '    <input id="painting" type="checkbox">' +
            '    <span class="fake-checkbox" aria-hidden="true"></span>' +
            '    <span class="label">Покраска стекла</span>' +
            '</label>');
        $('#painting').click(function () {
            $('#pnt').detach();
            if ($('#painting').is(':checked')) {
                $('#uv_label').before('<label id="pnt">' +
                    '<select>' +
                    '<option selected id="pnt_all">Целиком</option>' +
                    '<option id="pnt_some">Выборка</option>' +
                    '</select>' +
                    '</label>');
            }
        });
        $('#box-calc-6-2-2').append('<label id="uv_label">' +
            '    <input id="uv_printing" type="checkbox">' +
            '    <span class="fake-checkbox" aria-hidden="true"></span>' +
            '    <span class="label">УФ-печать</span>' +
            '</label>');
        $('#box-calc-6-2-2').append('<label>' +
            '    <input id="sand_blasting" type="checkbox">' +
            '    <span class="fake-checkbox" aria-hidden="true"></span>' +
            '    <span class="label">Пескоструй</span>' +
            '</label>');
        $('#sand_blasting').click(function () {
            $('#snd_bl').detach();
            if ($('#sand_blasting').is(':checked')) {
                $('#box-calc-6-2-2').append('<label id="snd_bl">' +
                    '<select>' +
                    '<option selected id="snd_bl_all">Целиком</option>' +
                    '<option id="snd_bl_some">Выборка</option>' +
                    '</select>' +
                    '</label>');
            }
        });
        $('#box-calc-6-1').append('<div id="box-calc-6-2-3" class="third_chekbox"></div>');
        $('#box-calc-6-2-3').append('<label>' +
            '    <input id="round_corners" type="checkbox">' +
            '    <span class="fake-checkbox" aria-hidden="true"></span>' +
            '    <span class="label">Скругления по углам</span>' +
            '</label>');
        $('#round_corners').click(function () {
            $('#rnd_con').detach();
            if ($('#round_corners').is(':checked')) {
                $('#box-calc-6-2-3').append('<label id="rnd_con">' +
                    '    <input id="rnd_con_num" type="number">Количество' +
                    '</label>');
            }
        });
    }

    $('#extra').on('click', '#hardening, #holes_and_cutouts, #installation,' +
        '#painting, #uv_printing, #sand_blasting, #round_corners', function () {
        $('#order_info').empty();
        fillOrderDiv();
        $('#order_info').show().children().show();
    });
    function fillOrderDiv() {
        $('#order_info').append('<div id="calc_stege_7" class="head toggler"></div>');
        $('#calc_stege_7').append('<p class="numver_stage">7</p>');
        $('#calc_stege_7').append('<h4>Информация по заказу</h4>');
        $('#calc_stege_7').append('<i class="fas fa-angle-down"></i>');
        $('#order_info').append('<div id="box-calc-7" class="wraper content"></div>');
        $('#box-calc-7').append('<div class="Contact_form"></div>');
        $('.Contact_form').append('<div class="first_row"></div>');
        $('.first_row').append('<input type="text" placeholder="Name">');
        $('.first_row').append('<input type="number" placeholder="Quantity">');
        $('.first_row').append('<input type="text" placeholder="Location">');
        $('.Contact_form').append('<div class="second_row d-flex"></div>');
        $('.second_row').append('<div class="leftTable"></div>');
        $('.leftTable').append('<div class="up_input d-flex "></div>');
        $('.up_input').append('<input type="tel" placeholder="Phone">');
        $('.up_input').append('<input type="email" placeholder="Email">');
        $('.leftTable').append('<div class="down_buttons_distances d-flex"></div>');
        $('.down_buttons_distances').append('<a class="nav-link" data-toggle="tab" href="#">В пределах МКАД</a>');
        $('.down_buttons_distances').append('<a class="nav-link" data-toggle="tab" href="#">Не более 5 км от МКАД</a>');
        $('.down_buttons_distances').append('<a class="nav-link" data-toggle="tab" href="#">Московская область</a>');
        $('.second_row').append('<div class="right_texbox">' +
            '   <textarea name="tex" id="" cols="25" rows="3"></textarea>' +
            '</div>');
        $('.Contact_form').append('<div class="buttons_buy_glass d-flex justify-content-center"></div>');
        $('.buttons_buy_glass').append('<button class="cost_butt buy_buttons">Оформить заказ</button>');
        $('.buttons_buy_glass').append('<button class="cost_butt1 buy_buttons">В корзину</button>');
    }

    function unfillingDivs() {
        $('#depth').empty();
        $('#shape').empty();
        $('#format').empty();
        $('#extra').empty();
        $('#order_info').empty();
    }
});