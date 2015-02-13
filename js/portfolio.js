$(document).ready(function(){

    // Scroll Left

    $('a[href^=#]').click(function(){
        cible = $(this).attr('href');
        if($(cible).length >= 1){
            left = $(cible).offset().left;
        }
        $('html, body').animate({scrollLeft:left}, 1500);
    });

    // Width variable

    var nb_element = 0;
    var content    = document.getElementById('content');
    var articles   = content.getElementsByTagName('article');

    for(i=0; i < articles.length; i++) {
        if(articles[i].className == 'horizontalScroll') nb_element++;
    }

    content.style.width = (nb_element * 100) + '%';

    for(i=0; i < articles.length; i++) {
        if(articles[i].className == 'horizontalScroll') articles[i].style.width = (100 / nb_element) + '%';
    }
});

/*! Copyright (c) 2013 Brandon Aaron (http://brandonaaron.net)
 * Licensed under the MIT License (LICENSE.txt).
 *
 * Thanks to: http://adomas.org/javascript-mouse-wheel/ for some pointers.
 * Thanks to: Mathias Bank(http://www.mathias-bank.de) for a scope bug fix.
 * Thanks to: Seamus Leahy for adding deltaX and deltaY
 *
 * Version: 3.1.3
 *
 * Requires: 1.2.2+
 */

(function (factory) {
    if ( typeof define === 'function' && define.amd ) {
        // AMD. Register as an anonymous module.
        define(['jquery'], factory);
    } else if (typeof exports === 'object') {
        // Node/CommonJS style for Browserify
        module.exports = factory;
    } else {
        // Browser globals
        factory(jQuery);
    }
}(function ($) {

    var toFix = ['wheel', 'mousewheel', 'DOMMouseScroll', 'MozMousePixelScroll'];
    var toBind = 'onwheel' in document || document.documentMode >= 9 ? ['wheel'] : ['mousewheel', 'DomMouseScroll', 'MozMousePixelScroll'];
    var lowestDelta, lowestDeltaXY;

    if ( $.event.fixHooks ) {
        for ( var i = toFix.length; i; ) {
            $.event.fixHooks[ toFix[--i] ] = $.event.mouseHooks;
        }
    }

    $.event.special.mousewheel = {
        setup: function() {
            if ( this.addEventListener ) {
                for ( var i = toBind.length; i; ) {
                    this.addEventListener( toBind[--i], handler, false );
                }
            } else {
                this.onmousewheel = handler;
            }
        },

        teardown: function() {
            if ( this.removeEventListener ) {
                for ( var i = toBind.length; i; ) {
                    this.removeEventListener( toBind[--i], handler, false );
                }
            } else {
                this.onmousewheel = null;
            }
        }
    };

    $.fn.extend({
        mousewheel: function(fn) {
            return fn ? this.bind("mousewheel", fn) : this.trigger("mousewheel");
        },

        unmousewheel: function(fn) {
            return this.unbind("mousewheel", fn);
        }
    });


    function handler(event) {
        var orgEvent = event || window.event,
            args = [].slice.call(arguments, 1),
            delta = 0,
            deltaX = 0,
            deltaY = 0,
            absDelta = 0,
            absDeltaXY = 0,
            fn;
        event = $.event.fix(orgEvent);
        event.type = "mousewheel";

        // Old school scrollwheel delta
        if ( orgEvent.wheelDelta ) { delta = orgEvent.wheelDelta; }
        if ( orgEvent.detail )     { delta = orgEvent.detail * -1; }

        // New school wheel delta (wheel event)
        if ( orgEvent.deltaY ) {
            deltaY = orgEvent.deltaY * -1;
            delta  = deltaY;
        }
        if ( orgEvent.deltaX ) {
            deltaX = orgEvent.deltaX;
            delta  = deltaX * -1;
        }

        // Webkit
        if ( orgEvent.wheelDeltaY !== undefined ) { deltaY = orgEvent.wheelDeltaY; }
        if ( orgEvent.wheelDeltaX !== undefined ) { deltaX = orgEvent.wheelDeltaX * -1; }

        // Look for lowest delta to normalize the delta values
        absDelta = Math.abs(delta);
        if ( !lowestDelta || absDelta < lowestDelta ) { lowestDelta = absDelta; }
        absDeltaXY = Math.max(Math.abs(deltaY), Math.abs(deltaX));
        if ( !lowestDeltaXY || absDeltaXY < lowestDeltaXY ) { lowestDeltaXY = absDeltaXY; }

        // Get a whole value for the deltas
        fn = delta > 0 ? 'floor' : 'ceil';
        delta  = Math[fn](delta / lowestDelta);
        deltaX = Math[fn](deltaX / lowestDeltaXY);
        deltaY = Math[fn](deltaY / lowestDeltaXY);

        // Add event and delta to the front of the arguments
        args.unshift(event, delta, deltaX, deltaY);

        return ($.event.dispatch || $.event.handle).apply(this, args);
    }

}));

/*Voir le code source de matthieu*/

/*$('.htmlcss').bind('inview', function(event, isInView) {
	if (isInView) {
		$(".htmlcss").animate({width:"75%"}, 1200);
	} else {

	}
});

$('.javascript').bind('inview', function(event, isInView) {
	if (isInView) {
		$(".javascript").animate({width:"25%"}, 1200);
	} else {

	}
});

$('.php').bind('inview', function(event, isInView) {
	if (isInView) {
		$(".php").animate({width:"15%"}, 1200);
	} else {

	}
});

$('.symfony').bind('inview', function(event, isInView) {
	if (isInView) {
		$(".symfony").animate({width:"15%"}, 1200);
	} else {

	}
});

$('.wordpress').bind('inview', function(event, isInView) {
	if (isInView) {
		$(".wordpress").animate({width:"55%"}, 1200);
	} else {

	}
});

$('.photoshop').bind('inview', function(event, isInView) {
	if (isInView) {
		$(".photoshop").animate({width:"70%"}, 1200);
	} else {

	}
});

$('.illustrator').bind('inview', function(event, isInView) {
	if (isInView) {
		$(".illustrator").animate({width:"70%"}, 1200);
	} else {

	}
});

$('.macintosh').bind('inview', function(event, isInView) {
	if (isInView) {
		$(".macintosh").animate({width:"90%"}, 1200);
	} else {

	}
});*/