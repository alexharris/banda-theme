$(document).ready(function () {

/*
* Clamped-width.
* Usage:
*  <div data-clampedwidth=".myParent">This long content will force clamped width</div>
*
* Author: LV
*/
$('[data-clampedwidth]').each(function () {
    var elem = $(this);
    var parentPanel = elem.data('clampedwidth');
    var resizeFn = function () {
        var sideBarNavWidth = $(parentPanel).width() - parseInt(elem.css('paddingLeft')) - parseInt(elem.css('paddingRight')) - parseInt(elem.css('marginLeft')) - parseInt(elem.css('marginRight')) - parseInt(elem.css('borderLeftWidth')) - parseInt(elem.css('borderRightWidth'));
        elem.css('width', sideBarNavWidth);
    };

    resizeFn();
    $(window).resize(resizeFn);
});

// Load highlight-js
hljs.initHighlightingOnLoad();


// smooth scrolling
$(function() {
  $('a[href*="#"]:not([href="#"])').click(function() {
    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
      if (target.length) {
        $('html, body').animate({
          scrollTop: target.offset().top
        }, 500);
        return false;
      }
    }
  });
});

// fixed position sidebar after scrolling down a bit 
var sidebarHeight = $('.banda-sidebar-container').outerHeight(),
    footerHeight  = $('.l-footer').outerHeight(),
    headerHeight  = $('.navbar').outerHeight();

$(window).scroll(function() {    
var   body           = document.body,
      html           = document.documentElement,
      windowHeight   = $(window).height(),
      documentHeight = Math.max( body.scrollHeight, body.offsetHeight, html.clientHeight, html.scrollHeight, html.offsetHeight ),
      scroll         = $(window).scrollTop(),
      position       = $(".banda-sidebar-container").offset();

    if (scroll >= headerHeight) {  // apply fixed to sidebar when scolled past header
        $('.banda-sidebar-container').addClass('is-fixed');
    } else {
        $('.banda-sidebar-container').removeClass('is-fixed');
    }

    // if at bottom of page, and not mobile screen, change sidebar position to absolute to make sure it doesn't overlap footer 
    if ((windowHeight <= (footerHeight + sidebarHeight)) && ($(window).width() >= 544) ) { 
       if (scroll >= (documentHeight - (sidebarHeight + footerHeight + headerHeight ))) { //pos absolute for sidebar 
          $('.banda-sidebar-container').css({
              'top': ((documentHeight - (sidebarHeight + footerHeight + headerHeight + 60))+'px'), 
              'position': 'absolute',
              'max-height': 'initial',
            });
        } else { // back to fixed sidebar
          $('.banda-sidebar-container').css({
            'top': '', 
            'position': '',
            'max-height': '100%',
          });
        }
    }
}); 

});// doc ready

