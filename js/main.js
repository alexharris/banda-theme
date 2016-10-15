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

// ajax search
jQuery('.search-field').keypress(function(event) {

  jQuery(this).attr('autocomplete','off');  // prevent browser autocomplete

  var searchTerm = jQuery(this).val(); // get search term
   
  if(searchTerm.length > 2){ // send request when the lenght is gt 2 letters
  
    jQuery.ajax({

      url : BASE+'/wp-admin/admin-ajax.php',
      type:"POST",
      data:{
        'action':'ajax_search',
        'term' :searchTerm
      },
      success:function(result){
        jQuery('.ajax-search').slideUp().html(result);
      }

    });
  } //end if searchTerm

}); //end keypress


//slide down search bar
$('.search-icon' ).click(function () {
 if ( $( "#search-bar" ).is( ":hidden" ) ) {
    $( "#search-bar" ).slideDown( "fast" );
    $( "#search-bar input" ).focus( );

  } else {
    $( "#search-bar" ).hide();
  }
});


// slide up search bar
$(document).mouseup(function (e)
{
    var container = $("#search-bar");

    if (!container.is(e.target) // if the target of the click isn't the container...
        && container.has(e.target).length === 0) // ... nor a descendant of the container
    {
        container.slideUp('fast');
    }

});





});// doc ready