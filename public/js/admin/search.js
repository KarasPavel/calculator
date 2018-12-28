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
let filterInput = document.getElementById('filter');
