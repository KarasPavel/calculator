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

    $('.call_back_section').each(function () {
        var el = $(this);
        $(this).find('.next__block').click(function () {
            el.hide();
            el.next().show();
        });

    });

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


// var views = [];
// var currentIndex;
var page = 0;
$(document).ready(function () {
    window.location.href = '#';
    $('#buttonNavigation1').find('p').html(knopki[page + 1] + '<br>' + 'следующая страница');
    // currentIndex = 0;
    getPages()
});

var ssilki = [
    'glavnaya',
    'lestnicy_i_poly',
    'dushevye_ograjdeniya',
    'peregorodki_i_dveri',
    'zerkalnoe_panno',
    'skinali',
    'raschet_stoimosti',
    'kontakty'
];

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

function getPages() {
    $.post('getPages', {
        data: window.location.href,
        '_token': $('meta[name="csrf-token"]').attr('content'),
        _method: 'POST',
        ssilka: ssilki[page],
    }, function (responce) {
        // views.push(responce);
        $('header').show();
        $('main').fadeOut(500, function () {
            $('main').empty().append(responce).slideDown("fast");
        });
        $('footer').show();
    });
}

$('#buttonNavigation1').click(function () {
    page++;
    pageCheck();
    getPages();
    setActiveOwlDot();
});

$('#buttonNavigation2').click(function () {
    page = 0;
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
    getPages();
    pageCheck();
});

function pageCheck() {
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

function setActiveOwlDot() {
    $('.owl-dots').find('.owl-dot').each(function () {
        $('.owl-dot').removeClass('active');
    });
    $('.owl-dot').eq(page).addClass('active');
}