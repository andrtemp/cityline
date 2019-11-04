window.$ = window.jQuery = require('jquery');
require('bootstrap');

(function(){
    var burger = document.querySelector('.burger-container'),
        header = document.querySelector('.header');

    burger.onclick = function() {
        header.classList.toggle('menu-opened');
    }
}());
