$(document).ready(function () {
    sendForm();
    subscribeForm('.formTag a.action_form');
});

function sendForm() {
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
        $('.help_glass_items').removeClass('help_glass_items-active');
        $(this).addClass('help_glass_items-active');
    });
    $('.for_option_2').click(function () {
        option2 = '';
        option2 = $(this).find('p').text();
        $('.help_glass_items').removeClass('help_glass_items-active');
        $(this).addClass('help_glass_items-active');
    });
    $('.for_option_3').click(function () {
        option3 = '';
        option3 = $(this).find('p').text();
        $('.help_glass_items').removeClass('help_glass_items-active');
        $(this).addClass('help_glass_items-active');
    });
    $('.chekbox_sect_6').on('change', '#chbx1, #chbx2, #chbx3, #chbx4, #chbx5, #chbx6',
        function () {
            findCheckboxes();
        });

    function findCheckboxes() {
        option4 = '';
        let opt4_1;
        let opt4_2;
        let opt4_3;
        let opt4_4;
        let opt4_5;
        let opt4_6;
        $('#chbx1').is(':checked') ? opt4_1 = 'Доставка изделия' : opt4_1 = '';
        $('#chbx2').is(':checked') ? opt4_2 = 'Монтаж (Установка)' : opt4_2 = '';
        $('#chbx3').is(':checked') ? opt4_3 = 'Зеркало в ванну' : opt4_3 = '';
        $('#chbx4').is(':checked') ? opt4_4 = 'Гидрофобное покрытие/антигрязь' : opt4_4 = '';
        $('#chbx5').is(':checked') ? opt4_5 = 'Стеклянные полки/дверцы' : opt4_5 = '';
        $('#chbx6').is(':checked') ? opt4_6 = 'Выезд дизайнера/подбор рисунка' : opt4_6 = '';
        option4 =
            opt4_1 + ' ' + '\n' + ' ' +
            opt4_2 + ' ' + '\n' + ' ' +
            opt4_3 + ' ' + '\n' + ' ' +
            opt4_4 + ' ' + '\n' + ' ' +
            opt4_5 + ' ' + '\n' + ' ' +
            opt4_6;
    }

    $('#gager').click(function () {
        specialist = 2;
        $('.button_forms_popup>a').removeClass('active_a-links');
        $(this).addClass('active_a-links');
    });
    $('#designer').click(function () {
        specialist = 3;
        $('.button_forms_popup>a').removeClass('active_a-links');
        $(this).addClass('active_a-links');
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

    $('.call_back_section').each(function () {
        var el = $(this);
        $(this).find('.next__block').click(function () {
            el.hide();
            el.next().show();
        });
    });
}


function subscribeForm(formSelector) {
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
        $('.help_glass_items').removeClass('help_glass_items-active');
        $(this).addClass('help_glass_items-active');
    });
    $('.for_option_2').click(function () {
        option2 = '';
        option2 = $(this).find('p').text();
        $('.help_glass_items').removeClass('help_glass_items-active');
        $(this).addClass('help_glass_items-active');
    });
    $('.for_option_3').click(function () {
        option3 = '';
        option3 = $(this).find('p').text();
        $('.help_glass_items').removeClass('help_glass_items-active');
        $(this).addClass('help_glass_items-active');
    });
    $('.chekbox_sect_6').on('change', '#chbx1, #chbx2, #chbx3, #chbx4, #chbx5, #chbx6',
        function () {
            findCheckboxes();
        });

    function findCheckboxes() {
        option4 = '';
        let opt4_1;
        let opt4_2;
        let opt4_3;
        let opt4_4;
        let opt4_5;
        let opt4_6;
        $('#chbx1').is(':checked') ? opt4_1 = 'Доставка изделия' : opt4_1 = '';
        $('#chbx2').is(':checked') ? opt4_2 = 'Монтаж (Установка)' : opt4_2 = '';
        $('#chbx3').is(':checked') ? opt4_3 = 'Зеркало в ванну' : opt4_3 = '';
        $('#chbx4').is(':checked') ? opt4_4 = 'Гидрофобное покрытие/антигрязь' : opt4_4 = '';
        $('#chbx5').is(':checked') ? opt4_5 = 'Стеклянные полки/дверцы' : opt4_5 = '';
        $('#chbx6').is(':checked') ? opt4_6 = 'Выезд дизайнера/подбор рисунка' : opt4_6 = '';
        option4 =
            opt4_1 + ' ' + '\n' + ' ' +
            opt4_2 + ' ' + '\n' + ' ' +
            opt4_3 + ' ' + '\n' + ' ' +
            opt4_4 + ' ' + '\n' + ' ' +
            opt4_5 + ' ' + '\n' + ' ' +
            opt4_6;
    }

    $('#gager').click(function () {
        specialist = 2;
        $('.button_forms_popup>a').removeClass('active_a-links');
        $(this).addClass('active_a-links');
    });
    $('#designer').click(function () {
        specialist = 3;
        $('.button_forms_popup>a').removeClass('active_a-links');
        $(this).addClass('active_a-links');
    });
    $(formSelector).click(function () {
        $(this).closest('form').find('input[type="text"]').each(function () {
            value = $(this).val();
            name = $(this).attr('name');
            dataInput[name] = value;
            comment =
                option1 + ' ' + '\n' + ' ' +
                option3 + ' ' + '\n' + ' ' +
                option2 + ' ' + '\n' + ' ' +
                option4;
        });
        if ($(this).closest('form').valid()) {
            dataInput['specialist'] = specialist;
            dataInput['comment'] = comment;
            dataInput['_token'] = $('meta[name="csrf-token"]').attr('content');
            $.post('createApplications', dataInput, function (data, status) {
            });
            comment = '';
            specialist = 1;
            document.location.assign('#win3');
        }
    });
}


function initializeCarusel(e, isShowing) {
    var ButtNext = $('.owl-next'),
        ButtPrev = $('.owl-prev');

    if ((e != null && e.relatedTarget._current === 0) || (e == null && isShowing)) {
        ButtPrev.hide();
        ButtNext.show();

    } else {
        ButtPrev.show();
        ButtNext.show();
    }
    if ((e != null && e.relatedTarget._current === 7) || (e == null && isShowing)) {
        ButtPrev.show();
        ButtNext.hide();
    }
    if ((e != null && e.relatedTarget._current === 2) || (e == null && isShowing)) {
        $("#p_prldr1").show('slow');
        setTimeout(function () {
            $("#p_prldr1").hide('slow');
        }, 2000);
    }
}


function changeCarusel(e, isVisible) {
    var ButtNext = $('.owl-next'),
        ButtPrev = $('.owl-prev');

    if ((e != null && e.page.index == 0) || (e == null && isVisible)) {
        ButtPrev.hide();
        ButtNext.show();

    } else {
        ButtPrev.show();
        ButtNext.show();

    }
    if ((e != null && e.page.index == e.page.count - 1) || (e == null && !isVisible)) {
        ButtPrev.show();
        ButtNext.hide();
    }
    if ((e != null && e.page.index == 2) || (e == null && isVisible)) {
        $("#p_prldr1").show('slow');
        setTimeout(function () {
            $("#p_prldr1").hide('slow');
        }, 2000);
    }
}


// $(document).ready(function () {
//
//     var carusel = $(".owl-carousel").owlCarousel({
//         items: 1,
//         autoHeight: true,
//         nav: true,
//         lazyLoad: false,
//         mouseDrag: false,
//         URLhashListener: true,
//         startPosition: 'URLHash',
//         onInitialized: function (e) {
//             initializeCarusel(e, true);
//         },
//         navText: ['<p onclick="topFunction()" id="mybtn">Главная</br>предыдущая страница</p><img class="nav-next" src="images/prev_arrows.png" alt="">',
//             '<p onclick="topFunction()" id="mybtn1">Лестницы и полы</br>следующая страница</p><img src="images/arrow-next_owl.png" alt="">',]
//     });
//
//     carusel.on('changed.owl.carousel', function (e) {
//         changeCarusel(e, true);
//
//     });
// });


//When the user scrolls down 20px from the top of the document, show the button

// window.onscroll = function () {
//     scrollFunction()
// };

function scrollFunction() {
    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        document.getElementById("mybtn").style.display = "block";
    } else {
        document.getElementById("mybtn").style.display = "block";
    }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
    document.body.scrollTop = 0; // For Safari
    document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
}


// $(document).ready(function () {
//     resize();
//     $(window).on("resize", resize);
// });


function resize() {
    var exp = $(".b");
    var expB = exp.width();
    var expW = $(window).width();

    var offset = exp.offset();
    exp.css("margin-left", -((expB - expW) / 2 + offset.left));
}


// Набор функций
var base = {
    // Поиск элементов по классу
    findClass: function (str, node) {
        if (document.getElementsByClassName) return (node || document).getElementsByClassName(str);
        else {
            var node = node || document, list = node.getElementsByTagName('*'), length = list.length,
                Class = str.split(/\s+/), classes = Class.length, array = [], i, j, key;
            for (i = 0; i < length; i++) {
                key = true;
                for (j = 0; j < classes; j++) if (list[i].className.search('\\b' + Class[j] + '\\b') == -1) key = false;
                if (key) array.push(list[i]);
            }
            return array;
        }
    },
    // Добавление обработчиков событий
    bind: function (node, type, listener) {
        if (node.addEventListener) node.addEventListener(type, listener, false);
        //@cc_on node.attachEvent('on' + type, function() { listener.call(node); });
    },
    // Реализация DOMContentLoaded
    init: [],
    ready: function () {
        if (!arguments.callee.done) {
            arguments.callee.done = true;
            if (this.timer) clearInterval(this.timer);
            var i, length = this.init.length;
            for (i = 0; i < length; i++) this.init[i]();
            this.init = [];
        }
    },
    check: function () {
        var _this = this, listener = function () {
            _this.ready();
        };
        if (document.addEventListener) document.addEventListener('DOMContentLoaded', listener, false);
        if (/KHTML|WebKit/i.test(navigator.userAgent)) this.timer = setInterval(function () {
            if (/loaded|complete/.test(document.readyState)) base.ready();
        }, 10);
        /*@cc_on document.write(unescape('%3CSCRIPT onreadystatechange="if(this.readyState==\'complete\') base.ready()" defer=defer src=\/\/:%3E%3C/SCRIPT%3E')); @*/
        this.bind(window, 'load', listener);
    }
};

// Функции для работы с панельками
var toggler = {
    process: function () {
        var i, list = base.findClass('toggler'), length = list.length;
        for (i = 0; i < length; i++) base.bind(list[i], 'click', this.toggle);
        list = base.findClass('content');
        length = list.length;
        for (i = 0; i < length; i++) list[i].style.display = 'none';
    },
    toggle: function () {
        var content = base.findClass('content', this.parentNode)[0], e = arguments[0] || window.event;
        $(content).slideDown("slow", function () {
            // Animation complete.
        });
        if (content.style.display == 'block') {
            content.style.display = 'none';
        }
        else {
            content.style.display = 'block';
        }
        e.preventDefault ? e.preventDefault() : e.returnValue = false;

    }
};

// Ищем блоки с классом «toggle» по событию DOMContentLoaded
base.init.push(function () {
    toggler.process();
});

// Запускаем проверку готовности DOM
base.check();


$('.cost_calc_first_tab').each(function () {
    var el = $(this);
    $(this).find('.content').click(function () {
        el.next().show();
    });

    // $('.call_back_section').each(function () {
    //     var el = $(this);
    //     $(this).find('.next__block').click(function () {
    //         el.hide();
    //         el.next().show();
    //     });
    // });

    // $(window).on('load', function () {
    //     var $preloader = $('#p_prldr'),
    //         $svg_anm = $preloader.find('.svg_anm');
    //
    //     $svg_anm.fadeOut();
    //     $preloader.delay(500).fadeOut('slow');
    // });
});

$(window).on('load', function () {
    var $preloader = $('#p_prldr'),
        $svg_anm = $preloader.find('.svg_anm');

    $svg_anm.fadeOut();
    $preloader.delay(500).fadeOut('slow');
});
$('.navbar-nav>li>a').on('click', function () {
    $('.navbar-collapse').collapse('hide');
});


// $('body').on('click', '.next__block', function () {
//     console.log('cde123')
// });


var page;
var ssilki = [
    '',
    'lestnicy_i_poly',
    'dushevye_ograjdeniya',
    'peregorodki_i_dveri',
    'zerkalnoe_panno',
    'skinali',
    'raschet_stoimosti',
    'kontakty'
];
if (ssilki.indexOf(window.location.href.split('#')[1]) === -1) {
    page = 0;
} else {
    page = ssilki.indexOf(window.location.href.split('#')[1]);
}
var knopki = [
    'Главная',
    'Лесницы и полы',
    'Душевые ограждения',
    'Перегородки и двери',
    'Зеркальное панно',
    'Скинали',
    'Рассчёт стоимости',
    'Контакты'
];
$(document).ready(function () {
    $('#buttonNavigation1').find('p').html(knopki[page + 1] + '<br>' + 'следующая страница');
    $('#buttonNavigation2').find('p').html(knopki[page - 1] + '<br>' + 'предыдущая страница');
    getPages();
    pageNextCheck();
    pagePreviousCheck();
    setActiveOwlDot()
});


function getPages() {
    $.post('getPages', {
        data: window.location.href,
        '_token': $('meta[name="csrf-token"]').attr('content'),
        _method: 'POST',
    }, function (responce) {
        $('header').show();

        // $('main').animate({
        //     width: 'toggle'
        // }).empty().append(responce);
        // sendForm();
        // subscribeForm('.formDynamic a.action_form');
        // subscribeForm('.formLower a.action_form');


        $('main').fadeOut(500, function () {
            $('main').empty().append(responce).slideDown("slow");
            sendForm();
            subscribeForm('.formDynamic a.action_form');
            subscribeForm('.formLower a.action_form');
        });
        $('footer').show();
    });
}

$('#buttonNavigation1').click(function () {
    page++;
    pageNextCheck();
    pagePreviousCheck();
    getPages();
    setActiveOwlDot();
});

$('#buttonNavigation2').click(function () {
    page--;
    pagePreviousCheck()
    $('#buttonNavigation1').show();
    $('#buttonNavigation1').find('p').html(knopki[page + 1] + '<br>' + 'следующая страница');
    getPages();
    setActiveOwlDot();
});

$('.owl-dot').click(function () {
    $(this).parent().find('.owl-dot').each(function () {
        $('.owl-dot').removeClass('active');
    });
    $(this).addClass('active');
    page = $(this).index();
    window.location.href = "#" + ssilki[page];
    getPages();
    pageNextCheck();
    pagePreviousCheck()
});

function pageNextCheck() {
    if (page === 7) {
        $('#buttonNavigation1').hide();
    } else {
        $('#buttonNavigation1').show();
        $('#buttonNavigation1').find('p').html(knopki[page + 1] + '<br>' + 'следующая страница');
    }
    if (page === 8) {
        page = 0;
    }
    if (page === 0) {
        window.location.href = '#';
    } else {
        window.location.href = "#" + ssilki[page]
    }
}

function pagePreviousCheck() {
    if (page === 0) {
        $('#buttonNavigation2').hide();
    } else {
        $('#buttonNavigation2').show();
        $('#buttonNavigation2').find('p').html(knopki[page - 1] + '<br>' + 'предыдущая страница');
    }
    if (page === -1) {
        page = 7;
    }
    if (page === 0) {
        window.location.href = '#';
    } else {
        window.location.href = "#" + ssilki[page]
    }
}

function setActiveOwlDot() {
    $('.owl-dots').find('.owl-dot').each(function () {
        $('.owl-dot').removeClass('active');
    });
    $('.owl-dot').eq(page).addClass('active');
}

function locationHashChanged() {
    // console.log(location.hash)
    // let localPage;
    // localPage = location.hash.split('#')[1];
    // console.log(localPage);
    // console.log(ssilki.indexOf(localPage) != -1);

    if (ssilki.indexOf(location.hash.split('#')[1]) != -1) {
        getPages();
        if (ssilki.indexOf(window.location.href.split('#')[1]) === -1) {
            page = 0;
        } else {
            page = ssilki.indexOf(window.location.href.split('#')[1]);
        }
        pageNextCheck();
        pagePreviousCheck();
        setActiveOwlDot();
    }


    // getPages();
    // if (ssilki.indexOf(window.location.href.split('#')[1]) === -1) {
    //     page = 0;
    // } else {
    //     page = ssilki.indexOf(window.location.href.split('#')[1]);
    // }
    // pageNextCheck();
    // pagePreviousCheck();
    // setActiveOwlDot();
}

window.onhashchange = locationHashChanged;
