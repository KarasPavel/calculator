// const list = document.getElementById('sda');
// const searchUsers = document.getElementById('filter');
// searchUsers.addEventListener('keyup', function (e) {
//     const term = e.target.value.toLowerCase()
//     const users = list.getElementsByTagName('td');
//     Array.from(users).forEach(function (user) {
//         const text = user.firstElementChild.textContent;
//         if (text.toLowerCase().indexOf(term) != -1) {
//             text.style.display = 'block';
//         }else{
//             text.style.display ='none';
//         }
//     })
// });
// let filterInput = document.getElementById('filter');

$(document).ready(function () {

    $("#search").keyup(function () {
        var _this = this;

        $.each($("#stream_table tbody tr"), function () {
            if ($(this).text().toLowerCase().indexOf($(_this).val().toLowerCase()) === -1) {
                $(this).hide();
            } else {
                $(this).show();
            }
        });
    });


    var getCellValue = function(tr, idx){ return tr.children[idx].innerText || tr.children[idx].textContent; }

    var comparer = function(idx, asc) { return function(a, b) { return function(v1, v2) {
        return v1 !== '' && v2 !== '' && !isNaN(v1) && !isNaN(v2) ? v1 - v2 : v1.toString().localeCompare(v2);
    }(getCellValue(asc ? a : b, idx), getCellValue(asc ? b : a, idx));
    }};

// do the work...
    Array.from(document.querySelectorAll('th')).forEach(function(th) { th.addEventListener('click', function() {
        var table = th.closest('table');
        var table = table.querySelector('tbody');
        Array.from(table.querySelectorAll('tr:nth-child(n+1)'))
            .sort(comparer(Array.from(th.parentNode.children).indexOf(th), this.asc = !this.asc))
            .forEach(function(tr) { table.appendChild(tr) });
    })
    });

});
