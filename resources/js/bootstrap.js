import axios from 'axios';
window.axios = axios;

window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';

import jQuery from 'jquery';
window.$ = window.jQuery = jQuery;

// Polyfill $.type() removed in jQuery 4 but needed by Slick 1.8
if (!jQuery.type) {
    jQuery.type = function(obj) {
        if (obj == null) return obj + '';
        var class2type = {};
        'Boolean Number String Function Array Date RegExp Object Error Symbol'.split(' ').forEach(function(name) {
            class2type['[object ' + name + ']'] = name.toLowerCase();
        });
        return typeof obj === 'object' || typeof obj === 'function'
            ? class2type[Object.prototype.toString.call(obj)] || 'object'
            : typeof obj;
    };
}

// Polyfill $.isFunction() removed in jQuery 4 but needed by Slick 1.8
if (!jQuery.isFunction) {
    jQuery.isFunction = function(obj) {
        return typeof obj === 'function';
    };
}

import 'slick-carousel';
import 'slick-carousel/slick/slick.css';
import 'slick-carousel/slick/slick-theme.css';
