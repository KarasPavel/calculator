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

    $('body').on('click', '.for_option_1', function () {
    // $('.for_option_1').click(function () {
        option1 = '';
        option1 = $(this).find('p').text();
        console.log(option1)
    });
    $('body').on('click', '.for_option_2', function () {
    // $('.for_option_2').click(function () {
        option2 = '';
        option2 = $(this).find('p').text();
        console.log(option2)
    });
        $('body').on('click', '.for_option_3', function () {
    // $('.for_option_3').click(function () {
        option3 = '';
        option3 = $(this).find('p').text();
        console.log(option3)
    });
    $('body').on('change', '#chbx1, #chbx2, #chbx3, #chbx4, #chbx5, #chbx6',
    // $('.chekbox_sect_6').on('change', '#chbx1, #chbx2, #chbx3, #chbx4, #chbx5, #chbx6',
        function () {
        findCheckboxes();
    });

    function findCheckboxes(){
        option4 = '';
        let opt4_1;
        let opt4_2;
        let opt4_3;
        let opt4_4;
        let opt4_5;
        let opt4_6;
        $('#chbx1').is(':checked') ? opt4_1 = 'Доставка изделия'               : opt4_1 = '';
        $('#chbx2').is(':checked') ? opt4_2 = 'Монтаж (Установка)'             : opt4_2 = '';
        $('#chbx3').is(':checked') ? opt4_3 = 'Зеркало в ванну'                : opt4_3 = '';
        $('#chbx4').is(':checked') ? opt4_4 = 'Гидрофобное покрытие/антигрязь' : opt4_4 = '';
        $('#chbx5').is(':checked') ? opt4_5 = 'Стеклянные полки/дверцы'        : opt4_5 = '';
        $('#chbx6').is(':checked') ? opt4_6 = 'Выезд дизайнера/подбор рисунка' : opt4_6 = '';
        option4 =
            opt4_1 + ' '+ '\n' + ' ' +
            opt4_2 + ' '+ '\n' + ' ' +
            opt4_3 + ' '+ '\n' + ' ' +
            opt4_4 + ' '+ '\n' + ' ' +
            opt4_5 + ' '+ '\n' + ' ' +
            opt4_6;
        console.log(option4)
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

    $('body').on('click', '.action_form', function () {
        console.log('click');
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
                console.log(dataInput);
                console.log(data);
                console.log(status);
            });
            comment = '';
            specialist = 1;
            document.location.assign('#win3');
        }
    });
});

