require('./bootstrap');

import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();

// Modal
window.Modal = require('laravel-modal-js').default;
Modal.init();

// Datepicker
require ('js-datepicker')


// Font Awesome icons
require ('@fortawesome/fontawesome-free/js/brands');
require ('@fortawesome/fontawesome-free/js/regular');
require ('@fortawesome/fontawesome-free/js/solid');
require ('@fortawesome/fontawesome-free/js/fontawesome');
