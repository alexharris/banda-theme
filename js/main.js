$(document).ready(function ( $ ) {


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
 
  // prevent browser autocomplete
  jQuery(this).attr('autocomplete','off');
   
  // get search term
  var searchTerm = jQuery(this).val();
   
  // send request when the lenght is gt 2 letters
  if(searchTerm.length > 2){
   var BASE = "<?php echo home_url() ?>";

   
  jQuery.ajax({
    url :  'wp-admin/admin-ajax.php',
    type : 'post',
    data : {
      action : 'ajax_search',
      term : searchTerm
    },
    success : function( response ) {


                $('#ajax-search').html(response).fadeIn();

    }
  });
  }
});


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
$(document).mousedown(function (e)
{
    var container = $("#search-bar");

    if (!container.is(e.target) // if the target of the click isn't the container...
        && container.has(e.target).length === 0) // ... nor a descendant of the container
    {
        container.slideUp('fast');
    }

});


//touch click helper
(function ($) {
    $.fn.tclick = function (onclick) {
        this.bind("touchstart", function (e) { onclick.call(this, e); e.stopPropagation(); e.preventDefault(); });
        this.bind("mousedown", function (e) { onclick.call(this, e); });   //substitute mousedown event for exact same result as touchstart
        return this;
    };
})(jQuery);

//scroll to top
$("a[href='#top']").click(function() {
  $("html, body").animate({ scrollTop: 0 }, "slow");
});


});// doc ready

//flyout nav toggle
$('.navbar-toggler').click(function(){
    $('.entries-sidebar').toggleClass('flyout-open');
});