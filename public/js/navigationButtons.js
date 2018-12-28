    window.addEventListener('hashchange', function() {
        var previous = document.getElementById('mybtn');
        var next = document.getElementById('mybtn1');
    switch (window.location.hash) {
        case "#zero":
            next.innerText = 'Лестницы и полы';
            break;
        case "#one":
            previous.innerText = 'Главная';
            next.innerText = 'Душевые  ограждения';
            break;
        case "#two":
            previous.innerText = 'Лестницы и полы';
            next.innerText = 'Зеркальнное панно';
            break;
        case "#three":
            previous.innerText = 'Душевые  ограждения';
            next.innerText = 'Перегородки';
            break;
        case "#for":
            previous.innerText = 'Зеркальнное панно';
            next.innerText = 'Скинали';
            break;
        case "#five":
            previous.innerText = 'Перегородки';
            next.innerText = 'Расчет стоимости';
            break;
        case "#seven":
            previous.innerText = 'Скинали';
            next.innerText = 'Контакты';
            break;
        case "#six":
            previous.innerText = 'Расчет стоимости';
            break;
    }

});

// buttonNext.onclick = function  {
//
//
//     switch (a) {
//         case "#zero":
//             next.innerText = 'Лестницы и полы';
//             break;
//         case "#one":
//             previous.innerText = 'Главная';
//             next.innerText = 'Душевые  ограждения';
//             break;
//         case "#two":
//             previous.innerText = 'Лестницы и полы';
//             next.innerText = 'Зеркальнное';
//             break;
//     }
// }