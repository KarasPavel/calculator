


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
    <section>
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="cost_calculation">
                        <h4>
                            стоимость заказа
                        </h4>
                        <input type="text">
                        <h4>ГОТОВНОСТЬ НА:</h4>
                        <p>(без срочности)</p>
                        <div class="date_calc">
                            <input type="day">
                            <input type="day">
                            <input type="day">
                        </div>
                        <p class="cost_calculation_day">( Пятница )</p>
                        <input type="checkbox" id="checkbox" v-model="checked">
                        <label for="checkbox"><a href="#"></a>Срочно</label> <br>
                        <button class="cost_butt">Оформить заказ</button>
                        <button class="cost_butt1">В корзину</button>
                        <div class="cost_calculation__link">
                            <div onclick="update_kor(); showmod('korr')">
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
                            <div class="stairs_and_flooring_buttons d-flex">
                                <a class="nav-link" data-toggle="tab" onclick="c(1,1,this,false)">Зеркало</a>
                                <a class="nav-link" data-toggle="tab" onclick="c(1,2,this,false)">>Триплекс</a>
                                <a class="nav-link" data-toggle="tab" onclick="c(1,3,this,true)">Стекло</a>
                            </div>
                        </div>
                    </div>
                    <div class="cost_calc_first_tab toggle">
                        <div id="calc_stege" class="head toggler">
                            <p class="numver_stage">
                                2
                            </p>
                            <h4>
                                Вид стекла
                            </h4>
                            <i class="fas fa-angle-down"></i>
                        </div>
                        <div id="box-calc" class="wraper content">
                            <div class="calc_contents d-flex">
                                <div class="help_glass_items calc_content2">
                                    <img src="images/glaas_type1.png" alt="">
                                    <p>ОБЫЧНОЕ</p>
                                </div>
                                <div class="help_glass_items calc_content2">
                                    <img src="images/glass3.png" alt="">
                                    <p>Оптивайт</p>
                                </div>
                                <div class="help_glass_items calc_content2">
                                    <img src="images/glass4.png" alt="">
                                    <p>Бронза</p>
                                </div>
                                <div class="help_glass_items calc_content2">
                                    <img src="images/glass5.png" alt="">
                                    <p>Матовое</p>
                                </div>
                                <div class="help_glass_items calc_content2">
                                    <img src="images/glaas6.png" alt="">
                                    <p>Серое</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="cost_calc_first_tab toggle">
                        <div id="calc_stege" class="head toggler">
                            <p class="numver_stage">
                                3
                            </p>
                            <h4>
                                Толщина изделия
                            </h4>
                            <i class="fas fa-angle-down"></i>
                        </div>
                        <div id="box-calc" class="wraper content">
                            <div class="stage_3_choose_thiknes d-flex">
                                <div class="choose_thiknes">
                                    <ul class="nav nav-tabs d-flex" id="myTab" role="tablist">
                                        <li class="nav-item">
                                            <a class="nav-link active" data-toggle="tab" href="#calc1" role="tab" aria-controls="home">3</a>
                                        </li>

                                        <li class="nav-item">
                                            <a class="nav-link" data-toggle="tab" href="#calc2" role="tab" aria-controls="profile">4</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" data-toggle="tab" href="#calc3" role="tab" aria-controls="messages">5</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" data-toggle="tab" href="#calc4" role="tab" aria-controls="messages">6</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" data-toggle="tab" href="#calc5" role="tab" aria-controls="messages">8</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" data-toggle="tab" href="#calc6" role="tab" aria-controls="messages">10</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" data-toggle="tab" href="#calc7" role="tab" aria-controls="messages">12</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" data-toggle="tab" href="#calc8" role="tab" aria-controls="messages">15</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" data-toggle="tab" href="#calc9" role="tab" aria-controls="messages">19</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="content-right_calc">
                                    <div class="tab-content">
                                        <div class="tab-pane active" id="calc1" role="tabpanel">
                                            <div class="img_items_stairs">
                                                <img src="images/Fartucks/1/1.jpg" alt="1">
                                            </div>
                                        </div>
                                        <div class="tab-pane " id="calc2" role="tabpanel">
                                            <div class="img_items_stairs">
                                                <img src="images/Fartucks/1/2.jpg" alt="1">
                                            </div>
                                        </div>
                                        <div class="tab-pane " id="calc3" role="tabpanel">
                                            <div class="img_items_stairs">
                                                <img src="images/Fartucks/1/3.jpg" alt="1">
                                            </div>
                                        </div>
                                        <div class="tab-pane " id="calc4" role="tabpanel">
                                            <div class="img_items_stairs">
                                                <img src="images/Fartucks/1/4.jpg" alt="1">
                                            </div>
                                        </div>
                                        <div class="tab-pane " id="calc5" role="tabpanel">
                                            <div class="img_items_stairs">
                                                <img src="images/Fartucks/1/1.jpg" alt="1">
                                            </div>
                                        </div>
                                        <div class="tab-pane" id="calc6" role="tabpanel">
                                            <div class="img_items_stairs">
                                                <img src="images/Fartucks/1/1.jpg" alt="1">
                                            </div>
                                        </div>
                                        <div class="tab-pane" id="calc7" role="tabpanel">
                                            <div class="img_items_stairs">
                                                <img src="images/Fartucks/1/1.jpg" alt="1">
                                            </div>
                                        </div>
                                        <div class="tab-pane" id="calc8" role="tabpanel">
                                            <div class="img_items_stairs">
                                                <img src="images/Fartucks/1/1.jpg" alt="1">
                                            </div>
                                        </div>
                                        <div class="tab-pane " id="calc9" role="tabpanel">
                                            <div class="img_items_stairs">
                                                <img src="images/Fartucks/1/1.jpg" alt="1">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="cost_calc_first_tab toggle owl-stage-outer owl-height">
                        <div id="calc_stege" class="head toggler">
                            <p class="numver_stage">
                                4
                            </p>
                            <h4>
                                форма и размеры
                            </h4>
                            <i class="fas fa-angle-down"></i>
                        </div>
                        <div id="box-calc" class="wraper content">
                            <div class="Size_calc">
                                <div class="item_size_calc">
                                    <img src="images/figure_size1.png" alt="">
                                    <p>прямоугольник</p>
                                </div>
                                <div class="item_size_calc">
                                    <img src="images/figure_size2.png" alt="">
                                    <p>КРуг</p>
                                </div>
                                <div class="item_size_calc">
                                    <img src="images/figure_size3.png" alt="">
                                    <p>Овал</p>
                                </div>
                                <div class="item_size_calc">
                                    <img src="images/figure_size4.png" alt="">
                                    <p>ИНАЯ ФОРМА</p>
                                </div>
                                <div class="item_size_calc">
                                    <p>Введите значения <br>
                                        (мм)</p>
                                    <div class="input_touch_size">
                                        <input type="text">
                                        <input type="text">
                                    </div>
                                    <p><a href="#">Загрузить чертеж</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="cost_calc_first_tab toggle owl-stage-outer owl-height">
                        <div id="calc_stege" class="head toggler">
                            <p class="numver_stage">
                                5
                            </p>
                            <h4>
                                Выберите материал
                            </h4>
                            <i class="fas fa-angle-down"></i>
                        </div>
                        <div id="box-calc" class="wraper content">
                            <div class="stairs_and_flooring_buttons butt_choose_kromka d-flex">
                                <a class="nav-link" data-toggle="tab" href="#" >БЕЗ ОБРАБОТКИ КРОМОК</a>
                                <a class="nav-link" data-toggle="tab" href="#" >ПОЛИРОВКА КРОМОК</a>
                                <a class="nav-link" data-toggle="tab" href="#" >ФАЦЕТ</a>
                            </div>
                            <div class="text-kromka">
                                <p>Кромка будет режуще-острой, а стекло хрупким.
                                    <br><span>Будьте осторожны!</span> </p>
                                <img src="images/sloy_kromka.png" alt="">
                            </div>

                        </div>
                    </div>
                    <div class="cost_calc_first_tab toggle">
                        <div id="calc_stege" class="head toggler">
                            <p class="numver_stage">
                                6
                            </p>
                            <h4>
                                дополнительно
                            </h4>
                            <i class="fas fa-angle-down"></i>
                        </div>
                        <div id="box-calc" class="wraper content">
                            <div class="chekbox_sect_6 d-flex">
                                <div class="first_chekbox">
                                    <input type="checkbox" id="checkbox" v-model="checked">
                                    <label for="checkbox"><a href="#"></a>Закалка (Термоупрочнение)</label> <br>
                                    <input type="checkbox" id="checkbox" v-model="checked">
                                    <label for="checkbox"><a href="#"></a>Отверстия и вырезы</label><br>
                                    <input type="checkbox" id="checkbox" v-model="checked">
                                    <label for="checkbox"><a href="#"></a>Монтаж</label>
                                </div>
                                <div class="ssecond_chekbox">
                                    <input type="checkbox" id="checkbox" v-model="checked">
                                    <label for="checkbox"><a href="#"></a>Покраска стекла</label><br>
                                    <input type="checkbox" id="checkbox" v-model="checked">
                                    <label for="checkbox"><a href="#"></a>УФ-печать</label><br>
                                    <input type="checkbox" id="checkbox" v-model="checked">
                                    <label for="checkbox"><a href="#"></a> Пескоструй</label><br>
                                </div>
                                <div class="third_chekbox">
                                    <input type="checkbox" id="checkbox" v-model="checked">
                                    <label for="checkbox"><a href="#"></a>Скругления по углам</label>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="cost_calc_first_tab toggle">
                        <div id="calc_stege" class="head toggler">
                            <p class="numver_stage">
                                7
                            </p>
                            <h4>
                                Информация по заказу
                            </h4>
                            <i class="fas fa-angle-down"></i>
                        </div>
                        <div id="box-calc" class="wraper content">
                            <div class="Contact_form">
                                <div class="first_row">
                                    <input type="text" placeholder="Name">
                                    <input type="number" placeholder="Quantity">
                                    <input type="text" placeholder="Location">
                                </div>
                                <div class="second_row d-flex">
                                    <div class="leftTable">
                                        <div class="up_input d-flex ">
                                            <input type="tel" placeholder="Phone">
                                            <input type="email" placeholder="Email">
                                        </div>
                                        <div class="down_buttons_distances d-flex">
                                            <a class="nav-link" data-toggle="tab" href="#" >В пределах МКАД</a>
                                            <a class="nav-link" data-toggle="tab" href="#" >Не более 5 км от МКАД</a>
                                            <a class="nav-link" data-toggle="tab" href="#" >Московская область</a>
                                        </div>
                                    </div>
                                    <div class="right_texbox">
                                        <textarea name="tex" id="" cols="25" rows="8"></textarea>
                                    </div>
                                </div>
                                <div class="buttons_buy_glass d-flex justify-content-center">
                                    <button class="cost_butt buy_buttons">Оформить заказ</button>
                                    <button class="cost_butt1 buy_buttons">В корзину</button>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
</div>


<script>
    var f1prece111 = [754, 755, 1027, 1170, 1560, 2080, 2860, 12480, 15990]; var f1prece121 = [2860, 3185, 4030, 5200, 6370, 8580, 15900, 20900]; var f1prece131 = [1755, 2210, 3640, 4420]; var f1prece141 = [1560, 2210, 2730, 3510, 4900]; var f1prece151 = [1820, 2275, 3770, 4680]; var f1prece21 = [1560, 2500, 2800]; var f1prece22 = [6370, 7670]; var f1prece23 = [2600]; var f1prece24 = [2340]; var f1prece25 = [3770]; var f1prece26 = [9800]; var polir = [110, 110, 120, 140, 160, 180, 250, 350]; var facet0 = [200, 220, 240, 320, 420]; var facet1 = [200, 220, 240, 320, 420]; var facet2 = [320, 340, 360, 440, 540]; var facet3 = [340, 360, 380, 460, 560]; var facet4 = [360, 380, 400, 480, 580]; var facet5 = [420, 490, 510, 590, 652]; var facet6 = [420, 490, 510, 590, 652]; var zakalka1 = [280, 320, 430, 480, 520, 740, 950, 1300, 1800]; var zakalka2 = [0, 480, 510, 560, 630, 760, 1100, 1500, 2000]; var zakalka3 = [0, 480, 510, 530, 650, 750, 0, 0, 0]; var zakalka4 = [0, 480, 510, 560, 640, 760, 0, 0, 0]; var zakalka5 = [0, 480, 510, 530, 640, 740, 0, 0, 0]; </script>

<script>
    var urls = new Array('Rezka_stekla_i_zerkal_na_zakaz','Primery_i_foto_izdelij_iz_stekla_i_zerkal','Dushevye_ograzhdenija_i_dveri_iz_stekla_na_zakaz','Peregorodki_i_dveri_iz_stekla_na_zakaz','Zerkala_na_zakaz_s_razlichnoj_obrabotkoj','Kuhonnye_fartuki_iz_stekla_na_zakaz','Raschet_stoimosti','Kontakty_kompanii_VEDITEX');var kkk = 8
</script>





<script>$(function(){
        var calc='';
        $(".itm").mouseover(function(){vc(event,this);});
        $(".itm").mouseout(function(){vc2(event,this);});
        $(".itm").mousemove(function(){vc3(event,this);});
        $(".uh_button").find('li').on("click",function(){gal_goto(this);});
        $(".up_block").on("click",function(){showp(this,event);});
        $(".bustep").on('click',function(){clocess(this,event);});
        $(".rdbpanel").find(".txtradio").on(function(){setcena0();});


        $(".itm").mouseover(function(){vc(event,this);});
        $(".itm").mouseout(function(){vc2(event,this);});
        $(".itm").mousemove(function(){vc3(event,this);});


        //$(".bustep").on('click',function(){clocess(this,event);});

        //pfs2ys[2] = 1;

        lldaata(today);

        $(".Aphone").mask("9 (999) 999-9999");
    });



    var caalc;
    function cor_to_cookie(){
        var cookie_calc = getCookie("cxx");
        if (cookie_calc!=''){
            cookie_calc = JSON.parse(cookie_calc);
        } else {
            cookie_calc = [];
        }
        var newCalc = [];

        newCalc[0] = CALC[1]-1; //mat
        if (newCalc[0]==0){
            newCalc[1] = CALC[2]-1; //vid
        } else {
            newCalc[1] = CALC[2] / 10 -1; //vid
        }

        newCalc[2] = '0'; //tols	+
        newCalc[3] = CALC[4]-1; //type
        newCalc[4] = '0'; //size	+
        newCalc[5] = '0'; //polir	+
        newCalc[6] = '0'; //otv 	+
        newCalc[7] = '0'; //zakal	+
        newCalc[8] = 'false'; //paint	+
        newCalc[9] = 'false'; //uf	+
        newCalc[10] = [false, 0]; //pesk	+
        newCalc[11] = '0'; //pest_type
        newCalc[12] = '0'; //scrugl	+
        newCalc[13] = '0'; //kol_vo	+
        newCalc[14] = '0'; //price1
        newCalc[15] = '0'; //price2
        newCalc[16] = '0'; //data_start
        newCalc[17] = '0'; //data_finish
        newCalc[18] = '0'; //dostavka
        newCalc[19] = ''; //komment


        newCalc[7] = 0;

        caalc = '';
        for (var i=2;i<CALC_info.length;i++){
            if (i==4){
                caalc+=": Толщина - ";
                newCalc[2] = parseInt(CALC_info[i]);
            }
            caalc+=CALC_info[i];

            if (i==5){
                caalc+=": Размеры "+Math.ceil(p0width*1000)+'x'+Math.ceil(p0height*1000)+' мм.';
                newCalc[4] = [Math.ceil(p0width*1000), Math.ceil(p0height*1000)];
            }
            if (i==6){
                newCalc[5] = [0, 0, 0];
                if (CALC_info[i]=="Фацет"){
                    newCalc[5][0] = 2;
                    if ($("#rdk1")[0].checked){ caalc+=" 10 мм "; newCalc[5][2] = 0;}
                    if ($("#rdk2")[0].checked){ caalc+=" 15 мм "; newCalc[5][2] = 1;}
                    if ($("#rdk3")[0].checked){ caalc+=" 20 мм "; newCalc[5][2] = 2;}
                    if ($("#rdk4")[0].checked){ caalc+=" 30 мм "; newCalc[5][2] = 3;}
                    if ($("#rdk5")[0].checked){ caalc+=" 40 мм "; newCalc[5][2] = 4;}
                } else if (CALC_info[i]=="Полировка кромок"){
                    newCalc[5][0] = 1;
                }
            }
            caalc+=':';
        }
        var d = (parseInt($("#day")[0].innerHTML)<10)?'0'+$("#day")[0].innerHTML:$("#day")[0].innerHTML;
        var m = (parseInt($("#month")[0].innerHTML)<10)?'0'+$("#month")[0].innerHTML:$("#month")[0].innerHTML;
        var y = (parseInt($("#yar")[0].innerHTML)<10)?'0'+$("#yar")[0].innerHTML:$("#yar")[0].innerHTML;
        var days = d+'.'+m+'.'+y;

        var tm = new Date();
        var curr_date = tm.getDate();
        var curr_month = tm.getMonth() + 1;
        var curr_year = tm.getFullYear();

        if (curr_date<10){curr_date='0'+curr_date;}
        if (curr_month<10){curr_month='0'+curr_month;}

        newCalc[16] = curr_date+'.'+curr_month+'.'+curr_year;
        newCalc[17] = days;


        if ($("#check24").prop("checked")){
            caalc+='Закалка:';
            newCalc[7] = 1;
        }

        if ($("#check25").prop("checked")){
            caalc+='Отверстия '+$("#otverstia")[0].value+' шт.:';
            newCalc[6] = $("#otverstia")[0].value;
        }

        if ($("#check255").prop("checked")){
            caalc+='Монтаж:';
            newCalc[19]+='[Монтаж]';
        }

        if ($("#check26").prop("checked")){
            var gs234 = parseInt($("#skrgl")[0].value);
            if ($("#skrgl")[0].value==''){
                gs234 =1;
            }

            var gs236 = parseInt($("#skrgl5")[0].value);
            if ($("#skrgl5")[0].value==''){
                gs236 = 1;
            }
            caalc+='Скругление '+gs234 +' шт. '+gs236+' (мм):';

            newCalc[12] = [gs234, gs236];

        }




        if ($("#check27").prop("checked")){
            caalc+='Покраска стекла:';
            newCalc[8] = 'true';
        }


        if ($("#check28").prop("checked")){
            caalc+='УФ-печать:';
            newCalc[9] = 'true';
        }

        if ($("#check29").prop("checked")){
            var dd42g;
            newCalc[10][0] = true;
            if ($("#peskostr")[0].value==1){
                dd42g = "Рисунок";
                newCalc[10][1] = 0;
            } else {
                dd42g = "Целиком";
                newCalc[10][1] = 1;
            }
            caalc+='Пескоструй ('+dd42g+"):";
        }

        caalc += $("#kolvoizd")[0].value+' (шт.) :';  //  Количество
        newCalc[13] = $("#kolvoizd")[0].value;


        caalc += $("#addressdost")[0].value+' :';  // Доставка
        newCalc[18] = $("#addressdost")[0].value;

        if ($("#check1").prop("checked")){
            caalc+='срочно:';
            newCalc[19]+='[Срочно]';
        } else {
            caalc+='не срочно:';
        }






        console.log(newCalc);



        calc+=caalc+':'+  $("#price")[0].innerHTML  +':';
        newCalc[15] = parseInt($("#price")[0].innerHTML);
        newCalc[14] = Math.ceil(newCalc[15] / parseInt(newCalc[13]));
        calc+=days+':'+$("#Komments")[0].value+'|';
        newCalc[19] += $("#Komments")[0].value;
        document.cookie = "cx="+calc+"; path=/";
        document.cookie = "cxx="+JSON.stringify(cookie_calc.concat([newCalc]))+"; path=/";

        update_kor();
        showmod("korr");
    }

    function update_kor(){
        var kolvo_izdel = 0;
        var CLC = calc.split('|');
        var kkk = $("#korr").find(".all")[0];
        var up_kor_data = "";
        var files = decodeURIComponent(getCookie("files"));

        files = files.split("|");

        for(var CLC_i=0;CLC_i<CLC.length-1;CLC_i++){
            arrsd = CLC[CLC_i].split(':');
            up_kor_data += '<div class="kor_order"><div class="cor_numb">'+(CLC_i+1)+'</div>';
            for(var CLC_i2=0;CLC_i2<arrsd.length -1;CLC_i2++){
                up_kor_data += '<div class="kapl_imms">'+arrsd[CLC_i2]+'</div>';
            }
            up_kor_data += "<br>";
            for (var eee = 1; eee < files.length; eee++) {
                sssc32 = files[eee].split(":");
                if (sssc32[0]==CLC_i+1){
                    up_kor_data += '<div class="kapl_imms"><img src="/img/smale-file.png"> '+sssc32[1]+'</div>';
                }
            }

            kolvo_izdel++;
            up_kor_data += '<div class="del_itm" onclick="delitemclac('+CLC_i+')" title="Удалить изделие">x</div></div>';
        }
        if (kolvo_izdel==0){
            up_kor_data="<div class='empty'>Ваша корзина пуста</div>";
        }
        //console.log(CLC);
        kkk.innerHTML = up_kor_data;
    }




    function delitemclac(a){
        var cookie_calc = getCookie("cxx");
        var cookie_new = [];
        if (cookie_calc!=''){
            cookie_calc = JSON.parse(cookie_calc);
            var inx = 0;
            for (var i = 0; i < cookie_calc.length; i++) {
                if (i!=a){
                    cookie_new[inx] = cookie_calc[i];
                    inx++;
                }
            }
            document.cookie = "cxx="+JSON.stringify(cookie_new)+"; path=/";
        }





        var files = decodeURIComponent(getCookie("files"));
        files = files.split("|");

        var CLC = calc.split('|');
        var ncCALC = [];
        var ii = 0;

        var fls = "";

        var lpl = 1;
        for(var CLC_i=0;CLC_i<CLC.length;CLC_i++){
            if (CLC_i!=a){
                ncCALC[ii]=CLC[CLC_i];
                ii++;

                for (var eee = 1; eee < files.length; eee++) {
                    sssc32 = files[eee].split(":");
                    if (sssc32[0]==CLC_i+1){
                        fls+='|'+lpl+':'+sssc32[1]+':'+sssc32[2];

                    }
                }

                lpl++;
            } else {
                for (var eee = 1; eee < files.length; eee++) {
                    sssc32 = files[eee].split(":");
                    if (sssc32[0]==CLC_i+1){
                        var sj1312 = sssc32[1];
                        var sj131333 = sssc32[2];
                        $.post("delimg.php",{j1: sj1312, j2: sj131333 },function(data){
                            if (data=='no'){
                                console.log("Ошибка удаления");
                            }
                        });

                    }
                }
            }
        }





        calc = ncCALC.join('|');
        document.cookie = "cx="+calc+"; path=/";
        document.cookie = "files="+fls+"; path=/";
        update_kor();



    }


    var lastinfo = "";
    var lastblock = "";
</script>





















