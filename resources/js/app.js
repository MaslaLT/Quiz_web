import './bootstrap';
import 'bootstrap';
import '@popperjs/core';

// This will ensure Bootstrap modals are ready to be used
document.addEventListener('DOMContentLoaded', () => {
    var modalElement = document.getElementById('exampleModal');
    var modal = new bootstrap.Modal(modalElement);
});
