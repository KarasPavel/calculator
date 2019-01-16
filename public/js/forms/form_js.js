$(document).ready(function () {
    var dataInput = {};
    var specialist = 1;
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
            var value = $(this).val();
            var name = $(this).attr('name');
            dataInput[name] = value;
        });
        if ($(this).closest('form').valid()) {
            dataInput['specialist'] = specialist;
            dataInput['_token'] = $('meta[name="csrf-token"]').attr('content');
            $.post('createApplications', dataInput, function (data, status) {
            });
            specialist = 1;
            document.location.assign('#win3');
        }
    });
});

