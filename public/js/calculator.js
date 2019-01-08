var price = document.getElementById('price');
var priceCheckbox = document.getElementById('checkboxPrice');
var mirror = document.getElementById('mirror');
var glass = document.getElementById('glass');
var triplex = document.getElementById('triplex');
var offsetDay = 1;
var currency = ' руб.';
var priceSum = 0;

function setPriceValue(){
    return price.value = (priceSum  + 150*(offsetDay - 1)) + currency;
}

// document.getElementById('calc_stege').onclick = function(){
//     setOrderDay();
// }



function setOrderDay() {
    var today = new Date();
    today.setDate(today.getDate() + offsetDay);
    var dd = today.getDate();
    var mm = today.getMonth()+1;
    var yyyy = today.getFullYear();
    var day = document.getElementById('calculator_day');
    var month = document.getElementById('calculator_month');
    var year = document.getElementById('calculator_year');
    var dayName;
    dayName = ([
        "( Воскресенье )",
        "( Понедельник )",
        "( Вторник )",
        "( Среда )",
        "( Четверг )",
        "( Пятница )",
        "( Суббота )",
    ][today.getDay()])
    day.value = dd;
    month.value = mm;
    year.value = yyyy;
    document.getElementById('dayName').innerText = dayName;
    price.value = setPriceValue();
}

priceCheckbox.onchange = function () {
    priceCheckbox.checked ? offsetDay = 2 : offsetDay = 1;
    setOrderDay();
}

triplex.onclick = function () {
    document.getElementById('forNotTriplex').innerHTML =
        '<div id="calc_stege" class="head toggler">' +
        '   <p class="numver_stage">2</p>' +
        '   <h4>Триплекс</h4>' +
        '   <i class="fas fa-angle-down"></i>' +
        '</div>' +
        '<div id="box-calc" class="wraper content">' +
        '   <div class="calc_contents d-flex">' +
        '   <p>Существует безчисленное множество комбинаций использования многослойного стекла (триплекса).\n' +
        '      Систематизировать и рассчитывать автоматически - сложно. Поэтому для Вашего удобства мы предлагаем бесплатный расчет\n' +
        '      нашим специалистом по Вашему вопросу, который сможет с Вами связатся и подготовить для Вас нужную информацию по данной тематике,\n' +
        '      дать комментарии, рассказать как это будет выглядеть, сколько будет стоить и какие есть возможности реализации Вашего проекта.</p>\n' +
        '</div></div>' +
        '<br><br>' +
        '<a class="contacts">+7 (499) 677-20-67</a>' +
        '<button>Консультация и расчет</button>' +
        '<a class="contacts">info@v-t-x.ru</a>';
    priceSum = 300;
    setPriceValue();
    setOrderDay();
}

mirror.onclick = function () {
    document.getElementById('forNotTriplex').innerHTML =
        '<div id="calc_stege" class="head toggler">' +
        '    <p class="numver_stage"> 2 </p>' +
        '    <h4>Вид зеркала</h4>' +
        '    <i class="fas fa-angle-down"></i>' +
        '</div>' +
        '<div id="box-calc" class="wraper content">' +
        '    <div class="calc_contents d-flex">' +
        '        <div class="help_glass_items calc_content2">' +
        '            <img src="images/glaas_type1.png" alt="">' +
        '            <p>ОБЫЧНОЕ</p>' +
        '        </div>' +
        '        <div class="help_glass_items calc_content2">' +
        '            <img src="images/glass3.png" alt="">' +
        '            <p>Оптивайт</p>' +
        '        </div>' +
        '        <div class="help_glass_items calc_content2">' +
        '            <img src="images/glass4.png" alt="">' +
        '            <p>Бронза</p>' +
        '        </div>' +
        '        <div class="help_glass_items calc_content2">' +
        '            <img src="images/glass5.png" alt="">' +
        '            <p>Матовое</p>' +
        '        </div>' +
        '        <div class="help_glass_items calc_content2">' +
        '            <img src="images/glaas6.png" alt="">' +
        '            <p>Серое</p>' +
        '        </div>' +
        '    </div>' +
        '</div>';
}

// TRIPLEX CALCULATOR



// triplex
//     alert('a');
//     document.getElementById('price').value = "300";


// function triplexFunction(){
//     price.value = "300";
// }

