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

    /* topmost header */

        var sticky_navigation_offset_top = $('#main-header').offset().top;
            
        var sticky_navigation = function(){
            var scroll_top = $(window).scrollTop(); 
                if (scroll_top > sticky_navigation_offset_top) { 
                    $('#main-header').css({ 'position': 'fixed', 'top':0, 'left':0 }).addClass('floating-header');
                } else {
                    $('#main-header').css({ 'position': 'relative' }).removeClass('floating-header'); 
                }   
            };
            
        //sticky_navigation();

        $(window).scroll(function() {
            //sticky_navigation();
        });
        
    /* STORE HEADER */

        var store_div       = $('#store-tabs');
        var store_start     = $('#main-header').outerHeight(true) + $('#smart-shopper').outerHeight(true) + $('#crumbs').outerHeight(true) + $('#store-allinfo').outerHeight(true); 
        var store_div_height = store_div.height(); 
        var store_top_height = store_div_height + 10;

        sub_floaternav(store_div, store_start, store_div_height, store_top_height);


    /* PDP HEADER */

        var pdp_div       = $('#pdp-tabs');
        var pdp_start     = $('#main-header').outerHeight(true) + $('#smart-shopper').outerHeight(true) + $('#crumbs').outerHeight(true) + $('.product-header').outerHeight(true); 
        var pdp_div_height = pdp_div.height(); 
        var pdp_top_height = pdp_div_height - 14;

        //sub_floaternav(pdp_div, pdp_start, pdp_div_height, pdp_top_height);


    } /* end larger than 481px */
    
    /* if is above or equal to 768px */
    if (responsive_viewport >= 768) {
    
        function same_height(container) {
            var items_height = [];

            $(container).each(function() { 
                items_height.push($(this).outerHeight());
            });

            var tallest_content = Math.max.apply( null, items_height );
            
            $(container).each(function(){
                var item_height = $(this).parent().height();
                $(this).css('height', tallest_content);
            });

        }
        
        same_height('ul#cat-list li');

    }
    
    /* off the bat large screen actions */
    if (responsive_viewport > 1030) {
        
    }

        $(".mobile-hidden-header").on("click", function(){
            var mobile_contents = $(this).parent().find('div.mobile-hide');
            if(mobile_contents.hasClass('open')) {
                $(mobile_contents).slideUp().removeClass('open');
            }
            else {
                mobile_contents.slideDown().addClass('open');
            }
        });
        
        /* ISOTOPES */   
            var $container = $('#container');
            // initialize Isotope
            
            $container.isotope({
              animationEngine: 'jquery',
              //layoutMode : 'fitRows',
              resizable: false, // disable normal resizing,
              cornerStampSelector: '.corner-stamp',
              masonry: { columnWidth: $container.width() / 3 }
            });
     
            // update columnWidth on window resize
            $(window).smartresize(function(){
              $container.isotope({
                masonry: { columnWidth: $container.width() / 3 }
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


    fullheight('.error-page', '#main-footer');


    /* price options */

        $('.viewmore').each(function(){
            $(this).click(function(e){
                var price_details = $(this).parent().parent().parent().next('.price-details');

                if(price_details.hasClass('open')) {
                    price_details.removeClass('open').slideUp();
                }
                else { 
                    price_details.addClass('open').slideDown();
                }

                e.preventDefault();
            });
        });

        $('.view-all').click(function(e){
            var original_text = 'Hide Details';

            if($(this).hasClass('open')) { 
                $(this).removeClass('open');
                $('.price-details').removeClass('open').slideUp(); 
                $(this).html('Show Details');
            }
            else {
                $(this).addClass('open');
                $('.price-details').addClass('open').slideDown(); 
                $(this).html(original_text);
            }
            e.preventDefault();

        });

    /* price-description */

        var price_description = $('#item-description'),price_description_height = $(price_description).outerHeight(true);
        if(price_description_height >= 200) {
            price_description.addClass('read-more');
        }

        $('.more-link a').click(function(e){
            if((price_description).hasClass('read-more')) {
                $('.more-link a span').hide();
                $('.more-link').css('top', price_description_height - 30 + 'px').fadeOut();
                price_description.css('height', price_description_height + 'px').removeClass('read-more');
                e.preventDefault();
            }
            e.preventDefault();
        });

    
    /* tabbing - clicks should not return hash in URL */

        $('dl.tabs dd').click(function(e){
            e.preventDefault();
        });

    /* SEARCH BUTTON - mobile view */

        $('.search-link').click(function(e){

            var button = $(this),
                search = $('.searchbox'),
                copy = $('.country-copy');

            if(button.hasClass('open')){
                button.removeClass('open');
                search.slideUp();
                copy.slideUp();
            }
            else {
                button.addClass('open');
                copy.slideDown();
                search.slideDown();
            }

            e.preventDefault();
        });


    var product_title_height = $('.product-header h2').outerHeight(true);
    sameheight(product_title_height, $('.price-range'));

    sameheight(product_title_height, $('.map-link'));

    sameheight($('#content').outerHeight(true), $('.sidebar'));

    /* store header nav */ 


}); /* end of as page load scripts */


function fullheight(div_name, bottom_div) {

    var header_height = $('#main-header').outerHeight(),
        footer_height = $(bottom_div).outerHeight(),
        window_height = $(window).height();

    if ($(bottom_div).attr('id') == 'media-nav') {
        footer_height = footer_height + 84;
    }

    var content_total = window_height - (header_height + footer_height);


    $(div_name).css('min-height', content_total + 'px');
}

function sameheight(height1, div){
    $(div).css('height', height1 + 'px');
}

function sub_floaternav(nav_div, start, height, top_height){

    $(window).scroll(function(){         
        var p = $(window).scrollTop(),
                  w_width = $(window).width();

        if(p >= start) {
            $(nav_div).css('top',((p)>start) ? top_height + 'px' : ''); 
            $(nav_div).addClass('floating-header'); 
        }
        else {
            $(nav_div).removeClass('floating-header');
        }
    });

}

function store_header_mobile(){

    var store_div = $('#store-tabs');
    var store_start = $('#main-header').height();
    var store_div_height = store_div.height();

    $(window).scroll(function(){         
        var p = $(window).scrollTop(),
                  w_width = $(window).width();

        if(p >= store_start) {
            $(store_div).css('top',((p)>store_start) ? store_start - 4 + 'px' : ''); 
            $(store_div).addClass('floating-header'); 
        }
        else {
            $(store_div).removeClass('floating-header');
        }
    });

}
