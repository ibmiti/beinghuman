// let delete_btn = document.getElementById('delete-btn');
// delete_btn.onclick(function(event) {
//   event.preventDefault();
// });

//  | prevent from from submitting - allow button to function
// let return_btn = document.getElementById('return-btn');
// return_btn.onclick(function(event) {
//   event.preventDefault();
// });
let addSectionsButton = document.getElementsByClassName('remove-on-page-load');
window.addEventListener('load', function(event){
    addSectionsButton.style.display = 'none';
})
// function addFieldOnButtonClick(){

// }
