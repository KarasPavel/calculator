$(document).ready(function () {
    var dataInput = {};
    var specialist = 1;
    var value;
    var name;
    var comment = '';
    var option1 = '';
    var option2 = '';
    var option3 = '';
    var option4 = '';

    $('.for_option_1').click(function () {
        option1 = '';
        option1 = $(this).find('p').text();
        // console.log(option1)
    });
    $('.for_option_2').click(function () {
        option2 = '';
        option2 = $(this).find('p').text();
        // console.log(option2)
    });
    $('.for_option_3').click(function () {
        option3 = '';
        option3 = $(this).find('p').text();
        // console.log(option3)
    });
    $('.chekbox_sect_6').on('change',
        '#chbx1_1, #chbx1_2, #chbx1_3, #chbx1_4, #chbx1_5, #chbx1_6' +
        '#chbx2_1, #chbx2_2, #chbx2_3, #chbx2_4, #chbx2_5, #chbx2_6' +
        '#chbx3_1, #chbx3_2, #chbx3_3, #chbx3_4, #chbx3_5, #chbx3_6' +
        '#chbx4_1, #chbx4_2, #chbx4_3, #chbx4_4, #chbx4_5, #chbx4_6',
        function () {
        findCheckboxes();
    });

    function findCheckboxes(){
        option4 = '';
        let opt411;
        let opt412;
        let opt413;
        let opt414;
        let opt415;
        let opt416;
        let opt421;
        let opt422;
        let opt423;
        let opt424;
        let opt425;
        let opt426;
        let opt431;
        let opt432;
        let opt433;
        let opt434;
        let opt435;
        let opt436;
        let opt441;
        let opt442;
        let opt443;
        let opt444;
        let opt445;
        let opt446;
        $('#chbx1_1').is(':checked') ? opt411 = 'Доставка изделия'               : opt411 = '';
        $('#chbx1_2').is(':checked') ? opt412 = 'Монтаж (Установка)'             : opt412 = '';
        $('#chbx1_3').is(':checked') ? opt413 = 'Зеркало в ванну'                : opt413 = '';
        $('#chbx1_4').is(':checked') ? opt414 = 'Гидрофобное покрытие/антигрязь' : opt414 = '';
        $('#chbx1_5').is(':checked') ? opt415 = 'Стеклянные полки/дверцы'        : opt415 = '';
        $('#chbx1_6').is(':checked') ? opt416 = 'Выезд дизайнера/подбор рисунка' : opt416 = '';
        $('#chbx2_1').is(':checked') ? opt421 = 'Доставка изделия'               : opt421 = '';
        $('#chbx2_2').is(':checked') ? opt422 = 'Монтаж (Установка)'             : opt422 = '';
        $('#chbx2_3').is(':checked') ? opt423 = 'Зеркало в ванну'                : opt423 = '';
        $('#chbx2_4').is(':checked') ? opt424 = 'Гидрофобное покрытие/антигрязь' : opt424 = '';
        $('#chbx2_5').is(':checked') ? opt425 = 'Стеклянные полки/дверцы'        : opt425 = '';
        $('#chbx2_6').is(':checked') ? opt426 = 'Выезд дизайнера/подбор рисунка' : opt426 = '';
        $('#chbx3_1').is(':checked') ? opt431 = 'Доставка изделия'               : opt431 = '';
        $('#chbx3_2').is(':checked') ? opt432 = 'Монтаж (Установка)'             : opt432 = '';
        $('#chbx3_3').is(':checked') ? opt433 = 'Зеркало в ванну'                : opt433 = '';
        $('#chbx3_4').is(':checked') ? opt434 = 'Гидрофобное покрытие/антигрязь' : opt434 = '';
        $('#chbx3_5').is(':checked') ? opt435 = 'Стеклянные полки/дверцы'        : opt435 = '';
        $('#chbx3_6').is(':checked') ? opt436 = 'Выезд дизайнера/подбор рисунка' : opt436 = '';
        $('#chbx4_1').is(':checked') ? opt441 = 'Доставка изделия'               : opt441 = '';
        $('#chbx4_2').is(':checked') ? opt442 = 'Монтаж (Установка)'             : opt442 = '';
        $('#chbx4_3').is(':checked') ? opt443 = 'Зеркало в ванну'                : opt443 = '';
        $('#chbx4_4').is(':checked') ? opt444 = 'Гидрофобное покрытие/антигрязь' : opt444 = '';
        $('#chbx4_5').is(':checked') ? opt445 = 'Стеклянные полки/дверцы'        : opt445 = '';
        $('#chbx4_6').is(':checked') ? opt446 = 'Выезд дизайнера/подбор рисунка' : opt446 = '';
        option4 =
            opt411 + '\n' +
            opt412 + '\n' +
            opt413 + '\n' +
            opt414 + '\n' +
            opt415 + '\n' +
            opt416 + '\n' +
            opt421 + '\n' +
            opt422 + '\n' +
            opt423 + '\n' +
            opt424 + '\n' +
            opt425 + '\n' +
            opt426 + '\n' +
            opt431 + '\n' +
            opt432 + '\n' +
            opt433 + '\n' +
            opt434 + '\n' +
            opt435 + '\n' +
            opt436 + '\n' +
            opt441 + '\n' +
            opt442 + '\n' +
            opt443 + '\n' +
            opt444 + '\n' +
            opt445 + '\n' +
            opt446;
        // console.log(option4)
    }

    $('#gager').click(function () {
        specialist = 2;
    });
    $('#designer').click(function () {
        specialist = 3;
    });
    $(document).find('form').each(function () {
        $(this).validate({
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
                agree: {
                    required: true
                },
            },
            messages: {
                name: {
                    required: "Пожалуйста, введите имя",
                    minlength: "Имя должно содержать минимум 2 буквы",
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
                agree: {
                    required: "Пожалуйста отметьте согласие с конфиденциальностью и куки",
                },
            }
        })
    });

    $('.formTag a.action_form').click(function () {
        $(this).closest('.formTag').find('input[type="text"]').each(function () {
            value = $(this).val();
            name = $(this).attr('name');
            dataInput[name] = value;
            comment =
                option1 + ' '+ '\n' + ' ' +
                option3 + ' '+ '\n' + ' ' +
                option2 + ' '+ '\n' + ' ' +
                option4;
        });
        if ($(this).closest('form').valid()) {
            dataInput['specialist'] = specialist;
            dataInput['comment'] = comment;
            dataInput['_token'] = $('meta[name="csrf-token"]').attr('content');
            // console.log(dataInput);
            $.post('createApplications', dataInput, function (data, status) {
            });
            comment = '';
            specialist = 1;
            document.location.assign('#win3');
        }
    });
});

