
$(window).load(function(){ 
  
  /* CAROUSELS */

    $('#catalog-carousel-home').carouFredSel({
      auto: false,
      direction: 'up',
      width: '100%',
      height: '100%',
      scroll: 1,
      items: {
        visible: '+1'
      },
      prev: '#catalog-prev',
      next: '#catalog-next'
    });

    $('#widget-brands-carousel').carouFredSel({
      auto: false,
      width: '100%',
      height: 'auto',
      prev: '#brand-prev',
      next: '#brand-next'
    });

    $('#widget-nearby-shops').carouFredSel({
      auto: false,
      width: '100%',
      height: '100%',
      direction: 'up',
      /*
      items: {
        visible: 3
      }, */
      scroll: {
        items: 1
      },
      prev: '#sidebar-shops-prev',
      next: '#sidebar-shops-next'
    });

  // $('#sidebar-categories').stickyMojo({footerID: '#main-footer', contentID: '#content'});

  same_height('.results-grid .thumb');
  same_height('.results-grid .cat-info');
  // same_height('.featured-grid .thumb');
  same_height('.featured-grid .item');

  least_height('#catalog-carousel img', '#catalog-carousel img');

  show_hide('.header-cat-link', '.all-category-links');
  show_hide('.search-link', '.mobile-search');

  mobile_dropdown('.pull-down', '.pull-content');
  mobile_dropdown('.view-shop-info', '.mobile-shop-info');
  mobile_dropdown('.view-establishment-list', '.establishment-list');

  loc_suggestions();
  loc_autocomplete();
  mobile_category_menu();

  copy_height('.page-button', '.magazine-container');

  same_height_hidden('.same-height .item-container');
  same_height_hidden('.all-category-links a');

  window_height('.min-height');
  menu_showmore($('.trigger-more-links'));


  /* RESIZE */

    var resizeTimer;
      $(window).resize(function() {
          clearTimeout(resizeTimer);
          resizeTimer = setTimeout(function(){
            
            copy_height('.page-button', '.magazine-container');

            least_height('#catalog-carousel .thumb img', '#catalog-carousel .thumb img');

            max_height('.magazine-container', $('#main-header').height() + $('.page-numbers').outerHeight(true));

            window_height('.min-height');

          }, 10);
      });


  /* home grid on load */
    home_loader();
    $('.home-preview-content').on('load', function(event) {
      same_height('.featured-grid .thumb');
      same_height('.featured-grid .cat-info');
    });

});

function window_height(container) {
  var window_height = $(window).height(),
      top_height = window_height - ($('#main-header').outerHeight(true) + $('#main-footer').outerHeight(true));

  $(container).css('min-height', top_height);
}

function same_height(container) {
  var items_height = [];

  $(container).each(function() { 
      items_height.push($(this).outerHeight(true));
  });

  var tallest_content = Math.max.apply( null, items_height );
  
  $(container).each(function(){
      var item_height = $(this).parent().height();
      $(this).css('height', tallest_content);
  });
}

function same_height_hidden(container) {
  var items_height = [];

  $(container).each(function() { 
      items_height.push($(this).actual('outerHeight'));
  });
  //alert(items_height);

  var tallest_content = Math.max.apply( null, items_height );
  
  $(container).each(function(){
      var item_height = $(this).parent().height();
      $(this).css('height', tallest_content);
  });
}

function copy_height(changing, original) {

  var new_height = $(original).height();
  $(changing).css('height', new_height);

}

function least_height(items, container) {

  var items_height = [];

  $(items).each(function() { 
      items_height.push($(this).outerHeight());
  });

  var shortest = Math.min.apply( null, items_height );
  
  $(container).each(function(){
      var item_height = $(this).parent().height();
      $(this).css('height', shortest);
  });

}

function max_height(container, other) {
  var new_height = $(window).height() - other;
  $(container).css('height', new_height);
}

function show_hide(link, container) {

  $(link).click(function(){

    if($(container).hasClass('hide')) {
      $(container).slideDown().removeClass('hide');
    }

    else {
      $(container).slideUp().addClass('hide');
    }

    event.preventDefault();
  });

}

function mobile_dropdown(link, container) {

  $(link).each(function(){

    $(this).click(function(){
      var content = $(this).next(container);

      if(content.hasClass('mobile-hide') || content.hasClass('hide')) {
        $(content).removeClass('mobile-hide').removeClass('hide');
      }
      else {
        $(content).addClass('mobile-hide').addClass('hide');
      }
      event.preventDefault();
    });

  });
}

function loc_suggestions() {
  var trigger_link = $('.loc-suggestions-trigger'),
      container = $('.location-suggestions'),
      input_form = $('#header-location'),
      suggested_list = $('.location-autocomplete');

  input_form.focus(function(){
    container.slideDown().removeClass('hide');
  });

  input_form.blur(function(){
    container.slideUp().addClass('hide');
    suggested_list.slideUp().addClass('hide');
  });

  var link = $('.location-suggestions a');

  link.each(function(){
    $(this).click(function(){
      var option = $(this).text();
      input_form.val(option);

      // event.preventDefault();
    });
  });
}

function loc_autocomplete() {

  var input_box = $('#header-location'),
      suggested_list = $('.location-autocomplete'),
      auto_container = $('.location-suggestions');

  $(input_box).keydown(function(){
    auto_container.slideUp().addClass('hide');
  setTimeout(function() {
    /*
    $(suggested_list).text($(input_box).val());
    */
    suggested_list.slideDown().removeClass('hide');
    }, 50);
  });

}

function home_loader() {

  $('#sidebar-establishments a').each(function(){
    var loader_container = $('.home-preview-content');

    $(this).click(function(){
      var clicked_link = $(this).attr('href');

      if (clicked_link = '#') {
        event.preventDefault();
      }
      else {
        alert('test');
        $(loader_container).load(clicked_link);

        event.preventDefault();
      }

    });

  });
}

function mobile_category_menu(){
  var link = $('.header-cat-link'),
      main_header = $('#main-header');

  var window_width = $(window).width();

  if(window_width < 769){
    link.click(function(){
      if(link.hasClass('active')) {
        main_header.addClass('fixed');
        link.removeClass('active');
        $('.home-preview').css('top', '600px');
        $('.home-intro').css({'margin-top': '44px', 'margin-bottom': '24px'});
        $('.breadcrumbs').css('margin-top', '-12px');
      }
      else {
        link.addClass('active');
        main_header.removeClass('fixed');
        $('.home-preview').css('top', '0');
        $('.home-intro').css({'margin-top': '0', 'margin-bottom': '0'});
        $('.breadcrumbs').css('margin-top', '12px');
      }
    });
  }
}


function menu_showmore(link) {

  $(link).click(function(){
    var content = $(this).parent().parent().next();
    if(content.hasClass('hide')) {
      content.slideDown().removeClass('hide');
    }
    else {
      content.slideUp().addClass('hide');
    }
    event.preventDefault();
  });

  $('.trigger-close-menu').click(function(){
    var content = $(this).parent().parent();
    if(content.hasClass('hide')) {
      content.slideDown().removeClass('hide');
    }
    else {
      content.slideUp().addClass('hide');
    }
    event.preventDefault();
  });

}

$(function(){ // document ready
 
  if (!!$('.sticky').offset()) { // make sure ".sticky" element exists
 
    var stickyTop = $('.sticky').offset().top; // returns number 
 
    $(window).scroll(function(){ // scroll event
 
      var windowTop = $(window).scrollTop(); // returns number 
 
      if (stickyTop < windowTop){
        $('.sticky').css({ position: 'fixed', top: 60 });
      }
      else {
        $('.sticky').css('position','static');
      }
 
    });
 
  }
 
});

$(document).foundation();
