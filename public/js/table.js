/*
const dropdown = document.querySelector('.drop');
const drop = document.querySelector('.expand');

dropdown.addEventListener('click', () => {
    drop.style.display = 'block';
})*/

$(function() {
    $('.drop').on('click', function() {
        $(this).toggleClass('selected').closest('tr').next().toggle();
    })
});