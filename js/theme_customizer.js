(function( $ ) {
    "use strict";
 
    wp.customize( 'banda_link_color', function( value ) {
        value.bind( function( to ) {
            $( 'a' ).css( 'color', to );
        } );
    });
 
})( jQuery );