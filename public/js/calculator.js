// $(document).ready(function () {
//
//
//     calculate()
// });

function calculate() {


    $('.cost_calc_first_tab').each(function () {
        var el = $(this);
        $(this).find('.content').click(function () {
            el.next().show();
        });

        $('.call_back_section').each(function () {
            var el = $(this);
            $(this).find('.next__block').click(function () {
                el.hide();
                el.next().show();
            });
        });
    });


    var deliveryBuy;
    var totalPrice = 0;
    var offsetHoursTotal = 0;
    var offsetSum = 0;
    var currency = ' руб.';
    var triplexSum = 300;
    var materialTypeId;
    var materialId;
    var depthId;
    var shapeId;
    var formatId;
    var deliveryType;
    var rndPrice = 300;
    var rndNum = 0;
    var hacPrice = 220;
    var hacNum = 0;
    var uvPrice = 3500;
    var square = 0;
    var perimeter = 0;
    var materialType;
    var sandBlastingAll = 1100;
    var sandBlastingSome = 2200;
    var paintingAll = 2500;
    var paintingSome = 4800;
    var inMKADPrice = 1200;
    var outMKADPrice = 1500;
    var moskowRegionPrice = 2500;
    var pickupPrice = 250;
    var dayName;
    var offsetHoursBasic = 24;
    var offsetHoursFacet = 0;
    var offsetHoursHardering = 0;
    var offsetHoursHoles = 0;
    var offsetHoursRound = 0;
    var offsetHoursPrinting = 0;
    var offsetHoursSand = 0;
    var offsetHoursPainting = 0;
    var urgencyPrice = 1;
    var materialPrice = {
        mirror_silver_four: 1560,
        mirror_silver_six: 2800,
        mirror_bronze_four: 2340,
        mirror_gold_four: 3770,
        mirror_graphite_four: 2600,
        mirror_aged_four: 7150,
        mirror_exclusive_four: 3770,
        mirror_clearVision_four: 6370,
        mirror_clearVision_six: 7670,
        glass_simple_three: 754,
        glass_simple_four: 754,
        glass_simple_five: 1027,
        glass_simple_six: 1170,
        glass_simple_eight: 1560,
        glass_simple_ten: 2080,
        glass_simple_twelve: 2860,
        glass_simple_fifteen: 9000,
        glass_simple_nineteen: 11000,
        glass_bronze_four: 1755,
        glass_bronze_six: 2210,
        glass_bronze_eight: 3640,
        glass_bronze_ten: 4420,
        glass_gray_four: 1820,
        glass_gray_six: 2275,
        glass_gray_eight: 3770,
        glass_gray_ten: 4680,
        glass_optWhite_four: 2860,
        glass_optWhite_five: 3185,
        glass_optWhite_six: 4030,
        glass_optWhite_eight: 5200,
        glass_optWhite_ten: 6370,
        glass_optWhite_twelve: 8580,
        glass_optWhite_fifteen: 10000,
        glass_optWhite_nineteen: 12000,
        glass_matt_four: 1560,
        glass_matt_six: 2210,
        glass_matt_eight: 2730,
        glass_matt_ten: 3510,
    };
    var processingPrice = {
        with_processing_four: 110,
        with_processing_six: 120,
        with_processing_eight: 140,
        with_processing_ten: 160,
        with_processing_twelve: 180,
        with_processing_fifteen: 250,
        with_processing_nineteen: 350,
        with_processing_five: 110,
        facet5_four: 170,
        facet10_four: 200,
        facet15_four: 220,
        facet20_four: 240,
        facet5_six: 170,
        facet10_six: 200,
        facet15_six: 220,
        facet20_six: 240,
        facet25_six: 270,
        facet30_six: 320,
        facet35_six: 370,
        facet40_six: 420,
        facet5_eight: 290,
        facet10_eight: 320,
        facet15_eight: 340,
        facet20_eight: 360,
        facet25_eight: 390,
        facet30_eight: 440,
        facet35_eight: 490,
        facet40_eight: 540,
        facet5_ten: 310,
        facet10_ten: 340,
        facet15_ten: 360,
        facet20_ten: 380,
        facet25_ten: 410,
        facet30_ten: 460,
        facet35_ten: 510,
        facet40_ten: 560,
        facet5_twelve: 330,
        facet10_twelve: 360,
        facet15_twelve: 380,
        facet20_twelve: 400,
        facet25_twelve: 430,
        facet30_twelve: 480,
        facet35_twelve: 530,
        facet40_twelve: 580,
    };
    var harderingPrice = {
        glass_simple_four: 320,
        glass_simple_five: 430,
        glass_simple_six: 480,
        glass_simple_eight: 520,
        glass_simple_ten: 740,
        glass_simple_twelve: 950,
        glass_simple_fifteen: 1300,
        glass_simple_nineteen: 1800,
        glass_bronze_four: 480,
        glass_bronze_six: 530,
        glass_bronze_eight: 650,
        glass_bronze_ten: 750,
        glass_gray_four: 480,
        glass_gray_six: 530,
        glass_gray_eight: 640,
        glass_gray_ten: 740,
        glass_optWhite_four: 480,
        glass_optWhite_five: 510,
        glass_optWhite_six: 560,
        glass_optWhite_eight: 630,
        glass_optWhite_ten: 760,
        glass_optWhite_twelve: 1100,
        glass_optWhite_fifteen: 1500,
        glass_optWhite_nineteen: 2000,
        glass_matt_four: 480,
        glass_matt_six: 560,
        glass_matt_eight: 640,
        glass_matt_ten: 760,
    };

    function setPriceValue() {
        let productPrice;
        if (materialTypeId === 'triplex') {
            totalPrice = triplexSum + offsetSum;
            return Math.round(totalPrice);
        } else {
            productPrice = getProcessingPrice()
                + getMaterialPrice()
                + getHardeningPrice()
                + getOptionalPrice();
            totalPrice = productPrice * urgencyPrice * checkQuantity() + getDeliveryPrice();
            if (!totalPrice) {
                return 0;
            } else {
                return Math.round(totalPrice);
            }
        }
    }

    function setOffsetHoursTotal() {
        let urgencyFactor_1 = 1;
        let urgencyFactor_2 = 1;
        let urgencyFactor_3 = 1;
        if (shapeId === 'circle' || shapeId === 'oval' || shapeId === 'another' || rndNum > 0) {
            offsetHoursRound = 72;
        } else {
            offsetHoursRound = 0;
        }
        if ($('#checkboxPrice').is(':checked')) {
            urgencyFactor_1 = 1 / 2;
            urgencyFactor_2 = 2 / 3;
            urgencyFactor_3 = 1 / 3;
        }
        offsetHoursTotal = offsetHoursBasic * urgencyFactor_1
            + offsetHoursFacet * urgencyFactor_2
            + offsetHoursHardering * urgencyFactor_1
            + offsetHoursHoles * urgencyFactor_1
            + offsetHoursRound * urgencyFactor_3
            + offsetHoursPrinting * urgencyFactor_2
            + offsetHoursSand * urgencyFactor_2
            + offsetHoursPainting * urgencyFactor_2;
        return Math.round(offsetHoursTotal);
    }

    var dd;
    var mm;
    var yyyy;
    var today;

    function setOrderDay() {
        $('#calculator_day').val('');
        $('#calculator_month').val('');
        $('#calculator_year').val('');
        dayName = '';
        setOffsetHoursTotal();
        setPriceValue();
        today = new Date();
        today.setHours(today.getHours() + setOffsetHoursTotal());
        dd = today.getDate();
        mm = today.getMonth() + 1;
        yyyy = today.getFullYear();
        dayName = ([
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
        $('#price').val(setPriceValue() + currency);
    }

    $('#checkboxPrice').change(function () {
        if ($('#checkboxPrice').is(':checked')) {
            offsetSum = 150;
            $('#urgency').html('( срочно )');
            urgencyPrice = 1.7;
        } else {
            offsetSum = 0;
            $('#urgency').html('( без срочности )');
            urgencyPrice = 1;
        }
        setOrderDay();
    });

    $('#triplex').click(function () {
        materialTypeId = this.id;
        $('#material').empty();
        $('#material').append('<div id="calc_stege_2" class="head toggler"></div>');
        $('#calc_stege_2').append('<p class="numver_stage">2</p>');
        $('#calc_stege_2').append('<h4>Триплекс</h4>');
        $('#calc_stege_2').append('<i class="fas fa-angle-down"></i>');
        $('#material').append('<div id="box-calc-2" class="wraper content"></div>');
        $('#box-calc-2').append('<div id="box-calc-2-2" class="calc_contents d-flex"></div>');
        $('#box-calc-2-2').append("<p class='triplex-order-info'>Существует безчисленное множество комбинаций использования многослойного стекла (триплекса)." +
            "Систематизировать и рассчитывать автоматически - сложно. Поэтому для Вашего удобства мы предлагаем бесплатный расчет" +
            " нашим специалистом по Вашему вопросу, который сможет с Вами связатся и подготовить для Вас нужную информацию по данной тематике," +
            "дать комментарии, рассказать как это будет выглядеть, сколько будет стоить и какие есть возможности реализации Вашего проекта.</p>");
        $('#material').append('<a href="tel:+74996772067" class="contacts">+7 (499) 677-20-67</a>');
        $('#material').append('<a href="mailto:info@v-t-x.ru" class="contacts">info@v-t-x.ru</a>');
        $('#material').append('<div class="button_forms button_forms_popup"><a href="#win1" class="action_form">Консультация и расчет</a></div>');
        setOrderDay();
        unfillingDivs();
    });

    var material;
    $('#mirror').click(function () {
        materialTypeId = this.id;
        material = this.text;
        $('#material').empty();
        $('#material').append('<div id="calc_stege_2" class="head toggler"></div>');
        $('#calc_stege_2').append('<p class="numver_stage">2</p>');
        $('#calc_stege_2').append('<h4>Вид зеркала</h4>');
        $('#calc_stege_2').append('<i class="fas fa-angle-down"></i>');
        $('#material').append('<div id="box-calc-2" class="wraper content"></div>');
        $('#box-calc-2').append('<div id="box-calc-2-2" class="calc_contents d-flex"></div>');
        $('#box-calc-2-2').append('<div id="silver" class="help_glass_items calc_content2 tooltip-wrap"></div>');
        $('#silver').append('<p>Серебро</p>');
        $('#silver').append('<span class="tooltiptext">Обычное зеркало, которое повсеместно используется в частных домах, спорт-залах, общественных ' +
            'местах и т.д. Имеет почти не заметный зеленоватый оттенок. Чтобы проверить какое у Вас зеркало, возьмите белый листок и посмотрите на него в' +
            ' отражении. Если есть зеленца – зеркало серебро.</span>');
        $('#box-calc-2-2').append('<div id="clearVision" class="help_glass_items calc_content2 tooltip-wrap"></div>');
        $('#clearVision').append('<p>ClearVision</p>');
        $('#clearVision').append('<span class="tooltiptext">Зеркало с самым лучшим отражением, без заметных глазу оттенков. Самый белый материал ' +
            'на планете (отражение света около 100%). Цена на данный вид зеркал ощутимо выше, поскольку за основу берется стекло ClearVision. Используется повсеместно.</span>');
        $('#box-calc-2-2').append('<div id="aged" class="help_glass_items calc_content2 tooltip-wrap"></div>');
        $('#aged').append('<p>Состаренное</p>');
        $('#exclusive').append('<span class="tooltiptext"></span>');
        $('#box-calc-2-2').append('<div id="bronze" class="help_glass_items calc_content2 tooltip-wrap"></div>');
        $('#bronze').append('<p>Бронза</p>');
        $('#bronze').append('<span class="tooltiptext">Зеркало на основе тонированного в массе  стекла цвета "Темная бронза", с нанесением амальгамы. ' +
            'Используется в примерочных комнатах, в шоурумах и в домашних интерьерах. Часто используют в сочетании с темными породами дерева и с ' +
            'винтажными интерьерами.</span>');
        $('#box-calc-2-2').append('<div id="graphite" class="help_glass_items calc_content2 tooltip-wrap"></div>');
        $('#graphite').append('<p>Графитовое</p>');
        $('#graphite').append('<span class="tooltiptext">Зеркало на основе тонированного в массе серого стекла, с нанесением амальгамы. Используется в' +
            ' примерочных комнатах, в шоурумах и в домашних интерьерах. Отлично подходит под современные стили интерьеров.</span>');
        $('#box-calc-2-2').append('<div id="exclusive" class="help_glass_items calc_content2 tooltip-wrap"></div>');
        $('#exclusive').append('<p>Эксклюзив</p>');
        $('#exclusive').append('<span class="tooltiptext">Сюда входят эксклюзивные типы зеркал, такие как - состаренные зеркала, зеркало-шпион,' +
            ' кракелюр и цветные зеркала. Ввиду сложности согласования деталей, просьба оформить заказ и дождаться звонка специалиста, который ' +
            'проконсультирует и согласует с вами все детали заказа. Либо позвоните по нашему контактному телефону, указанному выше.</span>');
        $('#box-calc-2-2').append('<div id="gold" class="help_glass_items calc_content2 tooltip-wrap"></div>');
        $('#gold').append('<p>Золото</p>');
        $('#gold').append('<span class="tooltiptext">Зеркало с эффектным золотым отражением. В наличии 2 типа золотых зеркал - "Шампань" (мягкий тон) и "Обычное золото" ' +
            '(ярко-оранжевое). Все нюансы будут согласованы с нашим менеджером, который перезвонит Вам, после оформления заказа.</span>');

        $('#calculator_day').val('');
        $('#calculator_month').val('');
        $('#calculator_year').val('');
        $('#price').val('');
        unfillingDivs();
    });

    $('#glass').click(function () {
        materialTypeId = this.id;
        material = this.text;
        $('#material').empty();
        $('#material').append('<div id="calc_stege_2" class="head toggler"></div>');
        $('#calc_stege_2').append('<p class="numver_stage">2</p>');
        $('#calc_stege_2').append('<h4>Вид стекла</h4>');
        $('#calc_stege_2').append('<i class="fas fa-angle-down"></i>');
        $('#material').append('<div id="box-calc-2" class="wraper content"></div>');
        $('#box-calc-2').append('<div id="box-calc-2-2" class="calc_contents d-flex"></div>');
        $('#box-calc-2-2').append('<div id="simple" class="help_glass_items calc_content2 tooltip-wrap"></div>');
        $('#simple').append('<img src="images/glaas_type1.png" alt="">');
        $('#simple').append('<p>Прозрачное</p>');
        $('#simple').append('<span class="tooltiptext">Стекло М1, прозрачное, или просто обычное стекло. Все это - названия флоат-стекла, ' +
            '       являющегося самым популярным материалом стекольной промышленности. Имеет зеленоватый оттенок, ярко выраженный в виде с торца.</span>');
        $('#box-calc-2-2').append('<div id="optWhite" class="help_glass_items calc_content2 tooltip-wrap"></div>');
        $('#optWhite').append('<img src="images/glass3.png" alt="">');
        $('#optWhite').append('<p>Оптивайт</p>');
        $('#optWhite').append('<span class="tooltiptext">Осветленное стекло (Optiwhite,Clearvision). Данный вид материала почти не имеет сторонних оттенков,' +
            ' кроме благородного светло-голубого цвета, заметного глазу лишь с торца полотна.</span>');
        $('#box-calc-2-2').append('<div id="bronze" class="help_glass_items calc_content2 tooltip-wrap"></div>');
        $('#bronze').append('<img src="images/glass4.png" alt="">');
        $('#bronze').append('<p>Бронза</p>');
        $('#bronze').append('<span class="tooltiptext">Тонированное в массе стекло (без пленок и покрытий) темно-бронзового цвета. Как и многие другие виды ' +
            'стекла можно закаливать. На стекле почти не заметна грязь и отпечатки рук. В сочетании общестекольным признаком - легкой очисткой, образует отличное ' +
            'сочетание для использования не только в частных домах, но и в общественных местах с высокой проходимостью.</span>');
        $('#box-calc-2-2').append('<div id="matt" class="help_glass_items calc_content2 tooltip-wrap"></div>');
        $('#matt').append('<img src="images/glass5.png" alt="">');
        $('#matt').append('<p>Матовое</p>');
        $('#matt').append('<span class="tooltiptext">Матовое стекло (сатинат, Satinato) - это вид стекла с односторонним химическим травлением, ' +
            'за счет чего был достигнут оригинальный светорассеивающий эффект, благодаря которому, видно лишь силуэты объектов и проникающий свет, ' +
            'дальше 5 сантиметров от полотна. За счет химического травления, а не грубого пескоструя, гораздо легче мыть.</span>');
        $('#box-calc-2-2').append('<div id="grey" class="help_glass_items calc_content2 tooltip-wrap"></div>');
        $('#grey').append('<img src="images/glaas6.png" alt="">');
        $('#grey').append('<p>Серое</p>');
        $('#grey').append('<span class="tooltiptext">Тонированное в массе стекло (без пленок и покрытий) серого цвета. Как и многие другие виды' +
            ' стекла можно закаливать. На стекле почти не заметна грязь и отпечатки рук. В сочетании общестекольным признаком - легкой очисткой, ' +
            'образует отличное сочетание для использования не только в частных домах, но и в общественных местах с высокой проходимостью.</span>');
        $('#price').val('');
        $('#calculator_day').val('');
        $('#calculator_month').val('');
        $('#calculator_year').val('');
        unfillingDivs();
    });

    var product;
    $('#material').on('click', '#simple, #optWhite, #bronze, #matt, #silver, #grey,' +
        '#graphite, #aged, #clearVision, #exclusive, #gold', function () {
        materialId = this.id;
        product = $(this).find('p').text();
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
        $('#calc_stege_3').append('<h4>Толщина изделия (мм)</h4>');
        $('#calc_stege_3').append('<i class="fas fa-angle-down"></i>');
        $('#depth').append('<div id="box-calc-3" class="wraper content"></div>');
        $('#box-calc-3').append('<div class="stage_3_choose_thiknes row"></div>');
        $('.stage_3_choose_thiknes').append('<div class="choose_thiknes col-md-8"></div>');
        $('.choose_thiknes').append('<ul class="nav nav-tabs d-flex" id="myTab1" role="tablist"></ul>');
        $('.stage_3_choose_thiknes').append('<div class="content-right_calc col-md-4 d-none d-md-block"><img src="images/glass_thikness.png" alt=""></div>');
        if (materialId === "simple") {
            $('#myTab1').append('<li class="nav-item">' +
                '<a id="three" class="nav-link" data-toggle="tab" href="#calc1" role="tab"' +
                'aria-controls="home">3</a>' +
                '</li>');
        }
        $('#myTab1').append('<li class="nav-item">' +
            '<a id="four" class="nav-link" data-toggle="tab" href="#calc2" role="tab"' +
            'aria-controls="profile">4</a>' +
            '</li>');
        if (materialTypeId === "glass" && (materialId === "optWhite" || materialId === "simple")) {
            $('#myTab1').append('<li class="nav-item">' +
                '<a id="five" class="nav-link" data-toggle="tab" href="#calc3" role="tab"' +
                'aria-controls="messages">5</a>' +
                '</li>');
        }
        if ((materialTypeId === "mirror" && (materialId === "clearVision" || materialId === "silver")) || (materialTypeId === "glass")) {
            $('#myTab1').append('<li class="nav-item">' +
                '<a id="six" class="nav-link" data-toggle="tab" href="#calc4" role="tab"' +
                'aria-controls="messages">6</a>' +
                '</li>');
        }
        if (materialTypeId === "glass") {
            $('#myTab1').append('<li class="nav-item">' +
                '<a id="eight" class="nav-link" data-toggle="tab" href="#calc5" role="tab"' +
                'aria-controls="messages">8</a>' +
                '</li>');
            $('#myTab1').append('<li class="nav-item">' +
                '<a id="ten" class="nav-link" data-toggle="tab" href="#calc6" role="tab"' +
                'aria-controls="messages">10</a>' +
                '</li>');
        }
        if (materialTypeId === "glass" && (materialId === "simple" || materialId === "optWhite")) {
            $('#myTab1').append('<li class="nav-item">' +
                '<a id="twelve" class="nav-link" data-toggle="tab" href="#calc7" role="tab"' +
                'aria-controls="messages">12</a>' +
                '</li>');
            $('#myTab1').append('<li class="nav-item">' +
                '<a id="fifteen" class="nav-link" data-toggle="tab" href="#calc8" role="tab"' +
                'aria-controls="messages">15</a>' +
                '</li>');
            $('#myTab1').append('<li class="nav-item">' +
                '<a id="nineteen" class="nav-link" data-toggle="tab" href="#calc9" role="tab"' +
                'aria-controls="messages">19</a>' +
                '</li>');
        }
    }

    var depth;
    $('#depth').on('click', '#three, #four, #five, #six, #eight, #ten, #twelve, #fifteen, #nineteen', function () {
        depthId = this.id;
        depth = this.text;
        $('#shape').empty();
        $('#format').empty();
        $('#extra').empty();
        $('#order_info').empty();
        fillShapeDiv();
        $('#shape').show().children().show();
    });

    function showUploadedFileName() {
        var inputOrigLength,
            inputOrigfilename;

        $('#shape').on('change', '#fileUpload', function () {

            var labelElement = $(this).next();
            inputOrigLength = this.files.length;

            if (inputOrigLength !== 0) {
                inputOrigfilename = this.files[0].name;
                labelElement.html(inputOrigfilename);
            }
            if (inputOrigLength === 0) {
                labelElement.html('Загрузить чертеж');
            }
        });
    }


    var shape = {};

    function fillShapeDiv() {
        $('#shape').append('<div id="calc_stege_4" class="head toggler"></div>');
        $('#calc_stege_4').append('<p class="numver_stage">4</p>');
        $('#calc_stege_4').append('<h4>форма и размеры</h4>');
        $('#calc_stege_4').append('<i class="fas fa-angle-down"></i>');
        $('#shape').append('<div id="box-calc-4" class="wraper content"></div>');
        $('#box-calc-4').append('<div class="Size_calc"></div>');
        $('.Size_calc').append('<div id="rectangle" class="item_size_calc"></div>');
        $('#rectangle').append('<div class="img-container"><img src="images/figure_size1.png" alt=""></div>' +
            '<p>Прямоугольник</p>');
        $('.Size_calc').append('<div id="circle" class="item_size_calc"></div>');
        $('#circle').append('<div class="img-container"><img src="images/figure_size2.png" alt=""></div>' +
            '<p>Круг</p>');
        $('.Size_calc').append('<div id="oval" class="item_size_calc"></div>');
        $('#oval').append('<div class="img-container"><img src="images/figure_size3.png" alt=""></div>' +
            '<p>Овал</p>');
        $('.Size_calc').append('<div id="another" class="item_size_calc"></div>');
        $('#another').append('<div class="img-container"><img src="images/figure_size4.png" alt=""></div>' +
            '<p>ИНАЯ ФОРМА</p>');
        $('#circle').click(function () {
            shapeId = this.id;
            shape['name'] = $(this).find('p').text();
            $('#item_size_calc').detach();
            $('.Size_calc').append('<div id="item_size_calc" class="item_size_calc shapes-size">' +
                '    <p>Введите значения</p>' +
                '    <div id="shape_size" class="input_touch_size"></div>' +
                '    <div><input type="file" name="fileUpload" id="fileUpload" class="inputfile" />' +
                '    <label for="fileUpload">Загрузить чертеж</label></div>' +
                '    </div>');
            $('#shape_size').append('<div><input id="shape_diameter" name="diameter" type="number" min="1" placeholder="мм"><p>диаметр</p></div>');
            showUploadedFileName();
        });
        $('#shape').on('click', '#rectangle, #oval, #another', function () {
            $('#item_size_calc').detach();
            $('.Size_calc').append('<div id="item_size_calc" class="item_size_calc shapes-size">' +
                '    <p>Введите значения</p>' +
                '    <div id="shape_size" class="input_touch_size"></div>' +
                '    <div><input type="file" name="fileUpload" id="fileUpload" class="inputfile" />' +
                '    <label for="fileUpload">Загрузить чертеж</label></div>' +
                '    </div>');
            shapeId = this.id;
            shape['name'] = $(this).find('p').text();
            $('#shape_size').append('<div><input id="shape_height" name="height" type="number" min="1" placeholder="мм">' +
                '<p>высота</p></div>' +
                // '</div>' +
                '<div><input id="shape_width" type="number" min="1" name="width" placeholder="мм">' +
                '<p>ширина</p></div>');
            // '</div>');
            showUploadedFileName();
        })
    }

    $('#shape').on('change', '#shape_width, #shape_height, #shape_diameter', function () {
        checkSize();
    });
    $('#shape').on('keyup', '#shape_width, #shape_height, #shape_diameter', function () {
        checkSize();
    });

    function checkSize() {
        $('.Size_calc').find('input[type="number"]').each(function () {
            let value;
            let name;
            value = $(this).val();
            name = $(this).attr('name');
            shape[name] = value;
        });
        $('#format').empty();
        $('#extra').empty();
        $('#order_info').empty();
        if ($('#shape_diameter').val() > 0 || $('#shape_height').val() * $('#shape_width').val() > 0) {
            getSquare();
            getPerimeter();
            setOrderDay();
            fillFormatDiv();
            $('#format').show().children().show();
        }
    }

    function getSquare() {
        if (shapeId === 'circle') {
            square = ($('#shape_diameter').val() * $('#shape_diameter').val()) / 1000000;
        } else {
            square = ($('#shape_height').val() * $('#shape_width').val()) / 1000000;
        }
    }

    function getPerimeter() {
        if (shapeId === 'oval') {
            perimeter = (parseInt($('#shape_height').val()) + parseInt($('#shape_width').val())) * 3 / 1000;
        } else if (shapeId === 'circle' || shapeId === 'another') {
            perimeter = $('#shape_diameter').val() * 3.14159 * 1.3 / 1000;
        } else {
            perimeter = (parseInt($('#shape_height').val()) + parseInt($('#shape_width').val())) * 2 / 1000;
        }
    }

    function getMaterialPrice() {
        materialType = materialTypeId + '_' + materialId + '_' + depthId;
        return materialPrice[materialType] * square;
    }

    function getProcessingPrice() {
        if (formatId === 'without_processing' || formatId === undefined) {
            return 0;
        } else {
            let processingType = formatId + '_' + depthId;
            return processingPrice[processingType] * perimeter;
        }
    }

    $('#hardening').change(function () {
        getHardeningPrice();
        setOrderDay();
    });

    function getHardeningPrice() {
        if ($('#hardening').is(':checked')) {
            offsetHoursHardering = 24;
            return harderingPrice[materialType] * square;
        } else {
            offsetHoursHardering = 0;
            return 0;
        }
    }

    function fillFormatDiv() {
        $('#format').append('<div id="calc_stege_5" class="head toggler"></div>');
        $('#calc_stege_5').append('<p class="numver_stage">5</p>');
        $('#calc_stege_5').append('<h4>Выберите тип обработки</h4>');
        $('#calc_stege_5').append('<i class="fas fa-angle-down"></i>');
        $('#format').append('<div id="box-calc-5" class="wraper content"></div>');
        $('#box-calc-5').append('<div id="box-calc-5-1" class="stairs_and_flooring_buttons butt_choose_kromka d-flex"></div>');
        $('#box-calc-5-1').append('<a id="without_processing" class="nav-link" data-toggle="tab" href="javascript:void(0);">БЕЗ ОБРАБОТКИ КРОМОК</a>');
        $('#format').append('<div class="text-kromka">' +
            '    <p>Кромка будет режуще-острой, а стекло хрупким.' +
            '    <br><span>Будьте осторожны!</span></p>' +
            '    <img src="images/sloy_kromka.png" alt="">' +
            '</div>');
        if (depthId != "three") {
            $('#box-calc-5-1').append('<a id="with_processing" class="nav-link" data-toggle="tab" href="javascript:void(0);">ПОЛИРОВКА КРОМОК</a>');
        }

        if ((depthId === "four" || depthId === "six" || depthId === "eight" || depthId === "ten" || depthId === "twelve") && shapeId === "rectangle") {
            $('#box-calc-5-1').append('<a id="facet" class="nav-link" data-toggle="tab" href="javascript:void(0);">ФАЦЕТ</a>');
            $('#with_processing').click(function () {
                $(".text-kromka").detach();
                $('#format').append('<div class="text-kromka">' +
                    '    <p>Кромка будет режуще-острой, а стекло хрупким.' +
                    '    <br><span>Будьте осторожны!</span></p>' +
                    '    <img src="images/sloy_kromka.png" alt="">' +
                    '</div>');
            });
            $('#without_processing').click(function () {
                $(".text-kromka").detach();
                $('#format').append('<div class="text-kromka">' +
                    '    <p>Кромка будет режуще-острой, а стекло хрупким.' +
                    '    <br><span>Будьте осторожны!</span></p>' +
                    '    <img src="images/sloy_kromka.png" alt="">' +
                    '</div>');
            });
            $('#facet').click(function () {
                $(".text-kromka").detach();
                $('#format').append('<div class="text-kromka"></div>');
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

    var format;
    $('#format').on('click', '#without_processing, #with_processing, ' +
        '#facet5, #facet10, #facet15, #facet20, #facet25, #facet30, #facet35, #facet40', function () {
        formatId = this.id;

        if (formatId[0] === 'f') {
            offsetHoursFacet = 72;
            format = 'Фацет:' + this.text;
        } else {
            offsetHoursFacet = 0;
            format = this.text;
        }
        $('#extra').empty();
        $('#order_info').empty();
        setOrderDay();
        fillExtraDiv();
        $('#extra').show().children().show();
        fillOrderDiv();
        $('#order_info').show().children().show();
    });

    function fillExtraDiv() {
        $('#extra').append('<div id="calc_stege_6" class="head toggler"></div>');
        $('#calc_stege_6').append('<p class="numver_stage">6</p>');
        $('#calc_stege_6').append('<h4>дополнительно</h4>');
        $('#calc_stege_6').append('<i class="fas fa-angle-down"></i>');
        $('#extra').append('<div id="box-calc-6" class="wraper content"></div>');
        $('#box-calc-6').append('<div id="box-calc-6-1" class="chekbox_sect_6 row no-gutters"></div>');
        $('#box-calc-6-1').append('<div id="box-calc-6-2-1" class="first_chekbox col-sm-4"></div>');
        if (depthId != "three" && formatId != "without_processing" && materialTypeId != "mirror") {
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
                    '    <input id="hac_num" min="1" type="number">Количество' +
                    '</label>');
            }
        });
        $('#box-calc-6-1').append('<div id="box-calc-6-2-2" class="ssecond_chekbox col-sm-4"></div>');
        $('#box-calc-6-2-2').append('<label>' +
            '    <input id="painting" type="checkbox">' +
            '    <span class="fake-checkbox" aria-hidden="true"></span>' +
            '    <span class="label">Покраска стекла</span>' +
            '</label>');
        $('#painting').change(function () {
            $('#pnt').detach();
            if ($('#painting').is(':checked')) {
                $('#uv_label').before('<label id="pnt">' +
                    '<select id="pnt_select">' +
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
        $('#sand_blasting').change(function () {
            $('#snd_bl').detach();
            if ($('#sand_blasting').is(':checked')) {
                $('#box-calc-6-2-2').append('<label id="snd_bl">' +
                    '<select id="snd_bl_select">' +
                    '<option selected id="snd_bl_all">Целиком</option>' +
                    '<option id="snd_bl_some">Рисунок</option>' +
                    '</select>' +
                    '</label>');
            }
        });
        $('#box-calc-6-1').append('<div id="box-calc-6-2-3" class="third_chekbox col-sm-4"></div>');
        $('#box-calc-6-2-3').append('<label>' +
            '    <input id="round_corners" type="checkbox">' +
            '    <span class="fake-checkbox" aria-hidden="true"></span>' +
            '    <span class="label">Скругления по углам</span>' +
            '</label>');
        $('#round_corners').change(function () {
            $('#rnd_con').detach();
            if ($('#round_corners').is(':checked')) {
                $('#box-calc-6-2-3').append('<label id="rnd_con">' +
                    '    <input id="rnd_con_num" min="1" type="number">' +
                    '<p>Количество</p>' +
                    '</label>');
            }
        });
    }

    $('#extra').on('change', '#rnd_con_num, #hac_num, #round_corners, #holes_and_cutouts', function () {
        rndNum = 0;
        hacNum = 0;
        checkQuantityRndHac();
    });
    $('#extra').on('keyup', '#rnd_con_num, #hac_num', function () {
        rndNum = 0;
        hacNum = 0;
        checkQuantityRndHac();
    });

    $('#extra').on('change', '#pnt, #snd_bl, #uv_printing, ' +
        '#round_corners, #holes_and_cutouts, #painting, #sand_blasting', function () {
        getOptionalPrice();
        setOrderDay();
    });

    function getOptionalPrice() {
        let sum;
        getUvPrintingPrice();
        getPaintingPrice();
        getSandBlastingPrice();
        sum = rndNum * rndPrice + hacNum * hacPrice + getUvPrintingPrice() + getPaintingPrice() + getSandBlastingPrice();
        return sum;
    }

    function getUvPrintingPrice() {
        if ($('#uv_printing').is(':checked')) {
            offsetHoursPrinting = 72;
            return uvPrice * square;
        } else {
            offsetHoursPrinting = 0;
            return 0;
        }
    }

    function getPaintingPrice() {
        let sum;
        if ($('#painting').is(':checked')) {
            offsetHoursPainting = 72;
            if ($('#pnt_select').find(':selected').attr('id') === 'pnt_some') {
                sum = paintingSome * square;
                return sum;
            } else {
                sum = paintingAll * square;
                return sum;
            }
        } else {
            offsetHoursPainting = 0;
            return 0;
        }
    }

    function getSandBlastingPrice() {
        let sum;
        if ($('#sand_blasting').is(':checked')) {
            offsetHoursSand = 72;
            if ($('#snd_bl_select').find(':selected').attr('id') === 'snd_bl_some') {
                sum = sandBlastingSome * square;
                return sum;
            } else {
                sum = sandBlastingAll * square;
                return sum;
            }
        } else {
            offsetHoursSand = 0;
            return 0;
        }
    }

    function checkQuantityRndHac() {
        offsetHoursHoles = 0;
        let result1;
        let result2;
        if ($('#round_corners').is(':checked')) {
            rndNum = 0;
            if ($('#rnd_con_num').val() > 0) {
                rndNum = $('#rnd_con_num').val();
                result1 = 1;
            } else {
                rndNum = 0;
                result1 = 0;
                $('#order_info').empty();
                deliveryType = null;
            }
        } else {
            rndNum = 0;
            result1 = 1;
        }

        if ($('#holes_and_cutouts').is(':checked')) {
            offsetHoursHoles = 12;
            hacNum = 0;
            if ($('#hac_num').val() > 0) {
                hacNum = $('#hac_num').val();
                result2 = 1;
            } else {
                offsetHoursHoles = 0;
                hacNum = 0;
                result2 = 0;
                $('#order_info').empty();
                deliveryType = null;
            }
        } else {
            hacNum = 0;
            result2 = 1;
        }

        if (result1 * result2 === 1) {
            $('#order_info').empty();
            deliveryType = null;
            getOptionalPrice()
            setOrderDay();
            fillOrderDiv();
            $('#order_info').show().children().show();
        } else {
            $('#order_info').empty();
            deliveryType = null;
        }

    }

    $('#extra').on('click', '#hardening, #sand_blasting, #painting, #uv_printing', function () {
        // $('#order_info').empty();
        setOrderDay();
        // fillOrderDiv();
        // $('#order_info').show().children().show();
    });

    function fillOrderDiv() {
        deliveryType = null;
        $('#order_info').append('<form id="calcForm" onsubmit="javascript:return false;"></form>');
        $('#calcForm').append('<div id="calc_stege_7" class="head toggler"></div>');
        $('#calc_stege_7').append('<p class="numver_stage">7</p>');
        $('#calc_stege_7').append('<h4>Информация по заказу</h4>');
        $('#calc_stege_7').append('<i class="fas fa-angle-down"></i>');
        $('#calcForm').append('<div id="box-calc-7" class="wraper content"></div>');
        $('#box-calc-7').append('<div class="Contact_form"></div>');
        $('.Contact_form').append('<div class="first_row row"></div>');
        $('.first_row').append('<div class="col-12 col-md-4"><input name="name" type="text" placeholder="Имя"></div>');
        $('.first_row').append('<div class="col-12 col-md-4"><input id="qntt" name="quantity" type="number" min="1" placeholder="Количество"></div>');
        $('.first_row').append('<div class="col-12 col-md-4"><input name="address" type="text" placeholder="Адресс"></div>');
        // $('.Contact_form').append('<div class="second_row d-flex"></div>');
        $('.Contact_form').append('<div class="second_row row"></div>');
        // $('.second_row').append('<div class="leftTable"></div>');
        // $('.leftTable').append('<div class="up_input d-flex "></div>');
        // $('.up_input').append('<div><input name="phone" type="tel" placeholder="Телефон"></div>');
        // $('.up_input').append('<div><input name="email" type="email" placeholder="Электронная почта"></div>');
        $('.second_row').append('<div class="col-12 col-md-4"><input name="phone" type="tel" placeholder="Телефон"></div>');
        $('.second_row').append('<div class="col-12 col-md-4"><input name="email" type="email" placeholder="Электронная почта"></div>');
        // $('.leftTable').append('<div class="down_buttons_distances d-flex"></div>');
        $('.second_row').append('<div class="right_texbox col-12 col-md-4"">' +
            '   <textarea name="comment" id="" cols="25" rows="10" placeholder="Комментарий к заказу"></textarea>' +
            '</div>');
        $('.second_row').append('<div class="down_buttons_distances d-flex col-12 col-md-8"></div>');
        $('.down_buttons_distances').append('<a id="pickup" class="nav-link" data-toggle="tab" href="javascript:void(0);">Самовывоз</a>');
        $('.down_buttons_distances').append('<a id="inMKAD" class="nav-link" data-toggle="tab" href="javascript:void(0);">В пределах МКАД</a>');
        $('.down_buttons_distances').append('<a id="outMKAD" class="nav-link" data-toggle="tab" href="javascript:void(0);">Не более 5 км от МКАД</a>');
        $('.down_buttons_distances').append('<a id="moskowRegion" class="nav-link" data-toggle="tab" href="javascript:void(0);">Московская область</a>');
        // $('.second_row').append('<div class="right_texbox">' +
        //     '   <textarea name="comment" id="" cols="25" rows="3" placeholder="Комментарий к заказу"></textarea>' +
        //     '</div>');
        $('.Contact_form').append('<div class="buttons_buy_glass d-flex justify-content-center"></div>');
        $('.buttons_buy_glass').append('<button id="makeOrder" class="cost_butt buy_buttons disable btn-make-order">Оформить заказ</button>');
        $('.buttons_buy_glass').append('<button id="buyProduct" class="cost_butt1 buy_buttons disable-cart btp-put-in-cart">В корзину</button>');
        $(document).find('#calcForm').validate({
            rules: {
                name: {
                    required: true,
                    minlength: 2,
                    maxlength: 35,
                },
                email: {
                    required: true,
                    email: true,
                },
                phone: {
                    required: true,
                    digits: true,
                    minlength: 10,
                    maxlength: 11,
                },
                quantity: {
                    required: true,
                    digits: true,
                    min: 1,
                    max: 100,
                },
                address: {
                    required: true,
                    minlength: 10,
                    maxlength: 100,
                },
            },
            messages: {
                name: {
                    required: "Пожалуйста, введите имя",
                    minlength: "Минимум 2 буквы",
                    maxlength: "Максимальное число букв - 35",
                },
                email: {
                    required: "Пожалуйста введите свой email",
                    email: "Пожалуйста, введите корректный email",
                },
                phone: {
                    required: "Пожалуйста, введите номер телефона",
                    digits: "Поле содержит только цифры",
                    minlength: "Минимум 10 цифр",
                    maxlength: "Максмум 11 цифр",
                },
                quantity: {
                    required: "Пожалуйста, введите количество",
                    digits: "Поле содержит только цифры",
                    min: "Минимум 1 шт",
                    max: "Максмум 100 шт",
                },
                address: {
                    required: "Пожалуйста, введите адрес",
                    minlength: "Мнимум 10 букв",
                    maxlength: "Максимальное число букв - 100",
                },
            }
        });
    }

    $('#order_info').on('click', '#pickup , #inMKAD, #outMKAD, #moskowRegion', function () {
        deliveryType = this.id;
        deliveryBuy = this.text;
        getDeliveryPrice();
        setOrderDay();
    });

    $('#order_info').on('change', '#qntt', function () {
        checkQuantity()
        setOrderDay();
    });
    $('#order_info').on('keyup', '#qntt', function () {
        checkQuantity()
        setOrderDay();
    });

    function checkQuantity() {
        let quantityOfProducts;
        $('#qntt').val() > 0 ? quantityOfProducts = $('#qntt').val() : quantityOfProducts = 1;
        return quantityOfProducts;
    }

    function getDeliveryPrice() {
        let sum;
        switch (deliveryType) {
            case 'pickup':
                sum = pickupPrice;
                break;
            case 'inMKAD':
                sum = inMKADPrice;
                break;
            case 'outMKAD':
                sum = outMKADPrice;
                break;
            case 'moskowRegion':
                sum = moskowRegionPrice;
                break;
            default:
                sum = 0;
        }
        return sum;
    }

    function unfillingDivs() {
        $('#depth').empty();
        $('#shape').empty();
        $('#format').empty();
        $('#extra').empty();
        $('#order_info').empty();
        deliveryType = null;
    }

    var option;

    $('#order_info').on('click', '#makeOrder', function () {
        if ($('#calcForm').valid() && this.id === 'makeOrder') {
            sendOrder();
        }
    });
    var order;
    $('#order_info').on('click', '#buyProduct', function () {
        if ($('#calcForm').valid() && this.id === 'buyProduct') {
            $.post('createCart', {
                data: JSON.stringify(setOrderData()),
                _token: $('meta[name="csrf-token"]').attr('content')
            }, function (data, status) {
                console.log(setOrderData());
                console.log(status);
                order = data;
                getCartDescription()
            });
            document.location.assign('#win5');
        }
    });

    $('#cart').on('click', '.button_for_delete_product_from_cart', function () {
        $.post('deleteProductFromCart/' + this.id, {
            data: this.id,
            _token: $('meta[name="csrf-token"]').attr('content')
        }, function (data, status) {
            order = data;
            getCartDescription()
        })
    });

    function getCartDescription() {
        $('#cart_table').empty();
        order.forEach(function (item, i, order) {
            let shapeData;
            if (item.orderInfo.shape.name.toString() === 'Круг') {
                shapeData = item.orderInfo.shape.name.toString() + ' ' + item.orderInfo.shape.diameter + 'мм ';
            } else {
                shapeData = item.orderInfo.shape.name.toString() + item.orderInfo.shape.height + 'X' + item.orderInfo.shape.width + ' мм ';
            }
            let description;
            description = '<p>' + item.orderInfo.material
                + ': ' + item.orderInfo.product + '</p>'
                + '<p>Толщина: ' + item.orderInfo.depth + 'мм</p> '
                + '<p>Форма и размеры: ' + shapeData + '</p>'
                + '<p>Обработка: ' + item.orderInfo.format +'</p>'
                + '<p>Дополнительно:</p><p> ' + item.orderInfo.options + '</p>'
                + '<p>Стоимость: ' + item.price + '</p>';
            $('#cart_table').append('<tr class="cart_table_row' + i + '"></tr>');
            $('.cart_table_row' + i).append('<td>' + description.toString() + '</td>');
            $('.cart_table_row' + i).append('<td><button class="button_for_delete_product_from_cart" id="' + i + '">' + i + '</button></td>');
            // $('#cart').append('<button class="button_for_delete_product_from_cart" id="' + i + '">' + i + '</button>');
        });
    }

    function sendOrder() {
        $.post('createOrders', {
            data: JSON.stringify(setOrderData()),
            _token: $('meta[name="csrf-token"]').attr('content')
        }, function (data, status) {
        });
        document.location.assign('#win4');
    }

    function findExtraOptions() {
        option = '';
        let opt1;
        let opt2;
        let opt21;
        let opt3;
        let opt31;
        let opt4;
        let opt5;
        let opt51;
        let opt6;
        let opt61;
        $('#hardening').is(':checked') ? opt1 = 'Закалка' : opt1 = '';
        $('#holes_and_cutouts').is(':checked') ? opt2 = ' // Отверстия_и_вырезы. Количество: ' : opt2 = '';
        $('#holes_and_cutouts').is(':checked') ? opt21 = hacNum : opt21 = '';
        $('#painting').is(':checked') ? opt3 = ' // Покраска: ' : opt3 = '';
        $('#painting').is(':checked') ? opt31 = $('#pnt_select').val() : opt31 = '';
        $('#uv_printing').is(':checked') ? opt4 = ' // УФ_печать' : opt4 = '';
        $('#sand_blasting').is(':checked') ? opt5 = ' // Пескоструй: ' : opt5 = '';
        $('#sand_blasting').is(':checked') ? opt51 = $('#snd_bl_select').val() : opt51 = '';
        $('#round_corners').is(':checked') ? opt6 = ' // Скругления_углов. Количество: ' : opt6 = '';
        $('#round_corners').is(':checked') ? opt61 = rndNum : opt61 = '';
        option =
            opt1 + ' ' + '\n' + ' ' +
            opt2 + ' ' + '\n' + ' ' +
            opt21 + ' ' + '\n' + ' ' +
            opt3 + ' ' + '\n' + ' ' +
            opt31 + ' ' + '\n' + ' ' +
            opt4 + ' ' + '\n' + ' ' +
            opt5 + ' ' + '\n' + ' ' +
            opt51 + ' ' + '\n' + ' ' +
            opt6 + ' ' + '\n' + ' ' +
            opt61;
        return option;
    }

    function setOrderData() {
        let value;
        let name;
        let orderData = {};
        let orderInfo = {};
        $('#order_info').find('input').each(function () {
            value = $(this).val();
            name = $(this).attr('name');
            orderData[name] = value;
        });
        orderData['comment'] = $('#order_info').find('textarea').val();
        orderData['delivery'] = deliveryBuy;
        orderInfo['material'] = material;
        orderInfo['product'] = product;
        orderInfo['depth'] = depth;
        orderInfo['shape'] = shape;
        orderInfo['format'] = format;
        orderInfo['options'] = findExtraOptions();
        orderData['orderInfo'] = orderInfo;
        orderData['price'] = setPriceValue();
        orderData['orderDate'] = yyyy + '-' + mm + '-' + dd;
        orderData['urgency'] = $('#checkboxPrice').is(':checked');
        return orderData;
    }

}
