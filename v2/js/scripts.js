/*
Bones Scripts File
Author: Eddie Machado
*/

// IE8 ployfill for GetComputed Style (for Responsive Script below)
if (!window.getComputedStyle) {
    window.getComputedStyle = function(el, pseudo) {
        this.el = el;
        this.getPropertyValue = function(prop) {
            var re = /(\-([a-z]){1})/g;
            if (prop == 'float') prop = 'styleFloat';
            if (re.test(prop)) {
                prop = prop.replace(re, function () {
                    return arguments[2].toUpperCase();
                });
            }
            return el.currentStyle[prop] ? el.currentStyle[prop] : null;
        }
        return this;
    }
}

// as the page loads, call these scripts
jQuery(document).ready(function($) {
    
    /* getting viewport width */
    var responsive_viewport = $(window).width();
    
    /* if is below 481px */
    if (responsive_viewport < 768) {
        
        $(".widget h3").on("click", function(){
            var contents = $(this).parent().find('div.widget-content');

            if(contents.hasClass('open')) {
                $('div.widget-content.open').slideUp().removeClass('open');
            }
            else {
                contents.slideDown().addClass('open');
            }
            
        });

    } /* end smallest screen */
    
    /* if is larger than 481px */
    if (responsive_viewport > 481) {
        
        /** TOPMOST HEADER **/
        var div = $('#main-header');
        var start = $(div).offset().top;
        var div_height = div.height();

        $(window).scroll(function(){         
             var p = $(window).scrollTop(),
                  w_width = $(window).width();

            if(p >= div_height) {
                $(div).css('top',((p)>start) ? '0px' : ''); 
                $(div).addClass('floating-header'); 
            }
            else {
                $(div).removeClass('floating-header');
            }
        });

    } /* end larger than 481px */
    
    /* if is above or equal to 768px */
    if (responsive_viewport >= 768) {
    
    }
    
    /* off the bat large screen actions */
    if (responsive_viewport > 1030) {
        
    }

        var $container = $('#container')
        // initialize Isotope
        $container.isotope({
          animationEngine: 'jquery',
          layoutMode : 'fitRows',
          resizable: false, // disable normal resizing
          masonry: { columnWidth: $container.width() / 3 }
        });

        // update columnWidth on window resize
        $(window).smartresize(function(){
          $container.isotope({
            masonry: { columnWidth: $container.width() / 3 }
          });
        });


        var $container2 = $('#hub-categories ul')
        // initialize Isotope
        $container2.isotope({
          animationEngine: 'jquery',
          layoutMode : 'fitRows',
          resizable: false, // disable normal resizing
          masonry: { columnWidth: $container.width() / 4 }
        });

        // update columnWidth on window resize
        $(window).smartresize(function(){
          $container2.isotope({
            masonry: { columnWidth: $container2.width() / 4 }
          });
        });


    /* about tab */

    function about_tab(){
        var article = $('#about-tab article');
        if (article.hasClass('open')) {
            article.slideUp().removeClass('open');
        }
        else { 
            article.slideDown().addClass('open');
        }
    }

    var tab_label = $("#about-tab"),
        about_article = $('#about-tab article');

        tab_label.on("click", function(e){
            about_tab();
            e.preventDefault();
        });

        tab_label.hover(
          function () {
            about_article.toggleClass("open").stop(true, true).slideToggle();
            about_article.removeClass('open');
            e.preventDefault();
          }
        );


    function same_height(container) {
        var items_height = [];
        $(container).each(function() { items_height.push($(this).outerHeight()) });
        var tallest_content = Math.max.apply( null, items_height );
        
        $(container).each(function(){
            var item_height = $(this).parent().height();
            $(this).css('height', tallest_content);
        });

        
        $(window).resize(function() {
            $(container).each(function() { items_height.push($(this).outerHeight()) });
            var tallest_content = Math.max.apply( null, items_height );

            $(container).each(function(){
                var item_height = $(this).parent().height();
                $(this).css('height', tallest_content);
            });
        });
        
    }

    same_height('#cat-list li');

}); /* end of as page load scripts */

