$(document).ready(function(){
    $(".owl-carousel").owlCarousel({
        items:1,
        autoHeight:true,
        nav:true,
        lazyLoad:true,
        mouseDrag:false,
        URLhashListener:true,
        startPosition: 'URLHash',
        navText: ['<p onclick="topFunction()" id="myBtn">Название страници </br> Предидущая страница</p><img class="nav-next" src="images/prev_arrows.png" alt="">',
            '<p onclick="topFunction()" id="myBtn">Название страници </br> Следующая страница</p><img src="images/arrow-next_owl.png" alt="">'],
    });
  });



// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        document.getElementById("myBtn").style.display = "block";
    } else {
        document.getElementById("myBtn").style.display = "block";
    }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
    document.body.scrollTop = 0; // For Safari
    document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
}
	$( document ).ready(function() {
    resize();
    $(window).on("resize", resize);
});
function resize(){
    var exp = $(".b");
    var expB = exp.width();
    var expW = $(window).width();

    var offset = exp.offset();
    exp.css("margin-left", -((expB-expW)/2+offset.left));
}





	// Набор функций
	var base = {
		// Поиск элементов по классу
		findClass: function(str, node) {
			 if(document.getElementsByClassName) return (node || document).getElementsByClassName(str);
			 else {
				  var node = node || document, list = node.getElementsByTagName('*'), length = list.length, Class = str.split(/\s+/), classes = Class.length, array = [], i, j, key;
				  for(i = 0; i < length; i++) {
						key = true;
						for(j = 0; j < classes; j++) if(list[i].className.search('\\b' + Class[j] + '\\b') == -1) key = false;
						if(key) array.push(list[i]);
				  }
				  return array;
			 }
		},
		// Добавление обработчиков событий
		bind: function(node, type, listener) {
			if(node.addEventListener) node.addEventListener(type, listener, false);
			//@cc_on node.attachEvent('on' + type, function() { listener.call(node); });
		},
		// Реализация DOMContentLoaded
		init: [],
		ready: function() {
			if(!arguments.callee.done) {
				arguments.callee.done = true;
				if(this.timer) clearInterval(this.timer);
				var i, length = this.init.length;
				for(i = 0; i < length; i++) this.init[i]();
				this.init = [];
			}
		},
		check: function() {
			var _this = this, listener = function() {
				_this.ready();
			};
			if(document.addEventListener) document.addEventListener('DOMContentLoaded', listener, false);
			if(/KHTML|WebKit/i.test(navigator.userAgent)) this.timer = setInterval(function() {
				if(/loaded|complete/.test(document.readyState)) base.ready();
			}, 10);
			/*@cc_on document.write(unescape('%3CSCRIPT onreadystatechange="if(this.readyState==\'complete\') base.ready()" defer=defer src=\/\/:%3E%3C/SCRIPT%3E')); @*/
			this.bind(window, 'load', listener);
		}
	};
	
	// Функции для работы с панельками
	var toggler = {
		process: function() {
			var i, list = base.findClass('toggler'), length = list.length;
			for(i = 0; i < length; i++) base.bind(list[i], 'click', this.toggle);
			list = base.findClass('content');
			length = list.length;
			for(i = 0; i < length; i++) list[i].style.display = 'none';
		},
		toggle: function() {
            var content = base.findClass('content', this.parentNode)[0], e = arguments[0] || window.event;
            $(content).slideDown( "slow", function() {
                // Animation complete.
              });
			if(content.style.display == 'block') {
				content.style.display = 'none';
			}
			else {
				content.style.display = 'block';
			}
            e.preventDefault ? e.preventDefault() : e.returnValue = false;

		}
    };       
	
	// Ищем блоки с классом «toggle» по событию DOMContentLoaded
	base.init.push(function() {
		toggler.process();
	});
	
	// Запускаем проверку готовности DOM
	base.check();




	$('.cost_calc_first_tab').each(function() {
		var el = $(this);
		$(this).find('.content').click(function() {
			el.next().show();		
	});
});

