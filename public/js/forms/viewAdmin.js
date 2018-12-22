//first form
// var tagSubmit = document.getElementById('callFormTeg');
var checkBox = document.getElementById('checkbox');
var fullName = document.getElementById('fullName');
var phone4 = document.getElementById('phone');
var email = document.getElementById('formEmail');
var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
var days = [];
var day = false;
for (let i = 0; i < 7; i++) {
    days[i] = document.getElementById('dayChoice' + i);
}
checkBox.checked = false;

function checkedBOX() {
    if (checkBox.checked === false) {
        checkBox.checked = true;
    } else {
        checkBox.checked = false;
    }
}

// while(fullName.length !== 0){

// }
if (fullName.value.length !== 0) {
    document.getElementById("callFormTeg").onclick = function () {
        document.getElementById("callForm").submit();
    }
}
// document.getElementById("callFormTeg").onclick = function() {
// //     document.getElementById("callForm").submit();
//     alert('a');
// };
// document.getElementById("callForm").submit();

function formTop() {
    for (let i = 0; i < 7; i++) {

        if (days[i].checked) {
            day = days[i].checked;
        }
    }
    // alert('aaaaa');
    if (fullName.value.length === 0) {
        // alert('Введите имя');

    } else if (phone4.value.length !== 11 || isNaN(phone4.value)) {
        // alert('Неправильно введен телефон')
    } else if (email.value && !filter.test(email.value)) {
        // alert('Неверно введен email');
    } else if (!day) {
        // alert('Выберите удобный для вас день');
    } else if (checkBox.checked === false) {
        // alert(' Cогласие обязательно');
    } else {
        document.getElementById("callForm").submit();
    }
}

//Second form
var tagSubmit2 = document.getElementById('callFormTeg2');
var checkBox2 = document.getElementById('checkbox2');
var fullName2 = document.getElementById('fullName2');
var phone2 = document.getElementById('phone2');
var email2 = document.getElementById('formEmail2');
days2 = [];
var day2 = false;
// days2[0]= document.getElementById('dayChoice21');
for (let i = 0; i < 7; i++) {
    days2[i] = document.getElementById('dayChoice2' + i);
    days2[i].checked = false;
    days2[i].value = i + 1;
}

function formBotton() {
    for (let i = 0; i < 7; i++) {
        if (days2[i].checked) {
            day2 = days2[i].checked;
        }
    }
    // alert('aaaaa');
    if (fullName2.value.length === 0) {
        // alert('Введите имя');

    } else if (phone2.value.length !== 11 || isNaN(phone2.value)) {
        // alert('Неправильно введен телефон')
    } else if (email2.value && !filter.test(email2.value)) {
        // alert('Неверно введен email');
    } else if (!day2) {
        // alert('Выберите удобный для вас день');
    } else if (checkBox2.checked === false) {
        // alert(' Cогласие обязательно');
    } else {
        document.getElementById("callForm2").submit();
    }
}

function checkedBOX2() {
    if (checkBox.checked === false) {
        checkBox.checked = true;
    } else {
        checkBox.checked = false;
    }
}

function dayChecked(day) {
    for (let i = 0; i < 7; i++) {
        document.getElementById('dayChoice2' + i).style.color = "#6c757d";
        document.getElementById('dayChoice2' + i).checked = false;
    }
    document.getElementById(day).style.color = "orange";
    document.getElementById(day).checked = true;
    document.getElementById('hiddenDay').value = document.getElementById(day).value;
}

//Third form
//#3062ab
var specialists = [];
var checkBox3 = document.getElementById('checkbox3');
var fullName3 = document.getElementById('fullName3');
var phone3 = document.getElementById('phone3');
var email3 = document.getElementById('formEmail3');
var specialist = false;
for (let i = 0; i < 2; i++) {
    specialists[i] = document.getElementById('specialist' + i);
    specialists[i].checked = false;
    // specialist[i].onclick()=function(){return false};
}
checkBox3.checked = false;

function checkedBOX3() {
    if (checkBox.checked === false) {
        checkBox.checked = true;
    } else {
        checkBox.checked = false;
    }
}


function formSpecialist() {
    for (let i = 0; i < 2; i++) {
        if (specialists[i].checked === true) {
            specialist = true;
        }
    }
    if (fullName3.value.length === 0) {
        // alert('Имя непрпвильно');
    } else if (phone3.value.length !== 11 || isNaN(phone3.value)) {
        // alert('Неправильно введен телефон')
    } else if (email3.value && !filter.test(email3.value)) {
        // alert('Неверно введен email');
    } else if (specialist === false) {
        // alert('Spec');
    } else if (checkBox3.checked === false) {
        // alert(' Cогласие обязательно');
    } else {
        document.getElementById("callForm3").submit();
    }

}

checkBox3.checked = false;

function specialistCheck(specialist) {
    for (let i = 0; i < 2; i++) {
        specialists[i].style.backgroundColor = '#ee921e';
        specialists[i].checked = false;
    }
    document.getElementById(specialist).style.backgroundColor = '#3062ab';
    document.getElementById(specialist).checked = true;
    document.getElementById('hiddenSpec').value = document.getElementById(specialist).value;
}
// $("selector_dlya_formy").submit(function(){return false;})

