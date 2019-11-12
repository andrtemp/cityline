window.$ = window.jQuery = require('jquery');
require('bootstrap');

window.addEventListener('DOMContentLoaded', (event) => {
    let burger = document.querySelector('.burger-container'),
        header = document.querySelector('.header');

    burger.onclick = function() {
        header.classList.toggle('menu-opened');
    };

    $(document).on('click', '[data-toggle="lightbox"]', function(event) {
        event.preventDefault();
        $(this).ekkoLightbox({
            wrapping: false,
        });
    });
});
