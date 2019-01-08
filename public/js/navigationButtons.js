    window.addEventListener('hashchange', function() {
        var previous = document.getElementById('mybtn');
        var next = document.getElementById('mybtn1');
        //следующая страница
        var mybr = document.createElement('br');

        switch (window.location.hash) {
        case "#zero":
            next.innerText = 'Лестницы и полы';
            next.appendChild(mybr);
            next.innerText += 'следующая страница';
            break;
        case "#one":
            previous.innerText = 'Главная';
            previous.appendChild(mybr);
            previous.innerText += 'предыдущия страница';
            next.innerText = 'Душевые  ограждения';
            next.appendChild(mybr);
            next.innerText += 'следующая страница';
            break;
        case "#two":
            previous.innerText = 'Лестницы и полы';
            previous.appendChild(mybr);
            previous.innerText += 'предыдущия страница';
            next.innerText = 'Перегородки и двери';
            next.appendChild(mybr);
            next.innerText += 'следующая страница';
            break;
        case "#three":
            previous.innerText = 'Перегородки и двери';
            previous.appendChild(mybr);
            previous.innerText += 'предыдущия страница';
            next.innerText = 'Кухонные фартуки';
            next.appendChild(mybr);
            next.innerText += 'следующая страница';
            break;
        case "#for":
            previous.innerText = 'Душевые  ограждения';
            previous.appendChild(mybr);
            previous.innerText += 'предыдущия страница';
            next.innerText = 'Зеркальное панно';
            next.appendChild(mybr);
            next.innerText += 'следующая страница';
            break;
        case "#five":
            previous.innerText = 'Зеркальное панно';
            previous.appendChild(mybr);
            previous.innerText += 'предыдущия страница';
            next.innerText = 'Расчет стоимости';
            next.appendChild(mybr);
            next.innerText += 'следующая страница';
            break;
        case "#seven":
            previous.innerText = 'Кухонные фартуки';
            previous.appendChild(mybr);
            previous.innerText += 'предыдущия страница';
            next.innerText = 'Контакты';
            next.appendChild(mybr);
            next.innerText += 'следующая страница';
            break;
        case "#six":
            previous.innerText = 'Расчет стоимости';
            previous.appendChild(mybr);
            previous.innerText += 'предыдущия страница';
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