// function httpGet(url) {
//     return new Promise(function (resolve, reject) {
//         var xhr = new XMLHttpRequest();
//         xhr.open('GET', url, true);
//         xhr.onload = function () {
//             if (this.status == 200) {
//                 resolve(this.responseText);
//             }
//         };
//         xhr.send();
//     });
// }

var currentIndex = 0;
var views = [];
var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
$(document).ready(function () {

    // httpGet(location.origin + "/getPages")
    //     .then(response => test(response));

    // function test(response){
    //     alert(response);
    // }
    $.post('getPages', {
        data: window.location.href,
        '_token': $('meta[name="csrf-token"]').attr('content'),
        _method: 'POST',
    }, function (data, status) {

        // console.log(status);
        views.push(responce)
    });


    $('.navbar-brand').on('click', function () {
        $('.home-page > section').empty(2000);
        $('.home-page').append($(views[0])).slideDown("fast");
    });
});