// Avoid `console` errors in browsers that lack a console.
(function() {
    var method;
    var noop = function () {};
    var methods = [
        'assert', 'clear', 'count', 'debug', 'dir', 'dirxml', 'error',
        'exception', 'group', 'groupCollapsed', 'groupEnd', 'info', 'log',
        'markTimeline', 'profile', 'profileEnd', 'table', 'time', 'timeEnd',
        'timeStamp', 'trace', 'warn'
    ];
    var length = methods.length;
    var console = (window.console = window.console || {});

    while (length--) {
        method = methods[length];

        // Only stub undefined methods.
        if (!console[method]) {
            console[method] = noop;
        }
    }
}());

$(function(){

    new jQueryCollapse($('#list1'), {
        query: 'h3',
        accordion: false,
        persist: true
    });

    new jQueryCollapse($('#list2'), {
        query: 'h3',
        accordion: false,
        persist: true
    });

    new jQueryCollapse($('#list3'), {
        query: 'h3',
        accordion: false,
        persist: true
    });

});