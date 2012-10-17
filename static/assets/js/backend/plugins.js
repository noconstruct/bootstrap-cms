// Avoid `console` errors in browsers that lack a console.
(function() {
    var noop = function noop() {};
    var methods = [
    'assert', 'clear', 'count', 'debug', 'dir', 'dirxml', 'error',
    'exception', 'group', 'groupCollapsed', 'groupEnd', 'info', 'log',
    'markTimeline', 'profile', 'profileEnd', 'table', 'time', 'timeEnd',
    'timeStamp', 'trace', 'warn'
    ];
    var length = methods.length;
    var console = window.console || {};

    while (length--) {
        // Only stub undefined methods.
        console[methods[length]] = console[methods[length]] || noop;
    }
}());

// Place any jQuery/helper plugins in here.

(function($){

    // #################################
    // Mustache templates
    
    /*
     * Sample:
     *      HTML:
     *          <div data-template="greeting">hi, {{name}}</div>
     *          
     *      JavaScript:
     *          $("div").mustacheFrom("greeting", {'name':'Paul'});
     */
    $.fn.mustacheFrom = function(name, vars, partials){
        return $(this).mustache($('*[data-template="' + name + '"]:first').html(), vars, partials);
    }


    /*
     * Sample:
     *      JavaScript:
     *          $("div").mustache("hi, {{name}}", {'name':'Paul'});
     */
    $.fn.mustache = function(template, vars, partials){
        var _tpl = $.mustache(template, vars, partials);
        return this.not('*[data-template]').each(function(){
            $(this).html(_tpl);
        });
    }

    $.mustache = function(template, view, partials) {
        return Mustache.to_html(template, view, partials);
    };
    
})(window.jQuery);