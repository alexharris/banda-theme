(function( $ ) {
    "use strict";
 
    wp.customize( 'banda_link_color', function( value ) {
        value.bind( function( to ) {
            $( '.maincontent a' ).css( 'color', to );
        } );
    });
    wp.customize( 'banda_link_hover_color', function( value ) {
        value.bind( function( to ) {
            $( 'a:hover' ).css( 'color', to );
        } );
    });
    wp.customize( 'banda_secondary_text_color', function( value ) {
        value.bind( function( to ) {
            $( 'p' ).css( 'color', to );
            $( 'li' ).css( 'color', to );
            $( 'h2' ).css( 'color', to );
            $( 'h3' ).css( 'color', to );
            $( 'h4' ).css( 'color', to );
            $( 'h5' ).css( 'color', to );
            $( 'h6' ).css( 'color', to );
            $( 'blockquote' ).css( 'color', to );
            $( 'body' ).css( 'color', to );

        } );
    });
    wp.customize( 'banda_primary_text_color', function( value ) {
        value.bind( function( to ) {
            $( '.navbar-light .navbar-brand' ).css( 'color', to );
            $( '.navbar-light .navbar-nav .nav-link ' ).css( 'color', to );
            $( '.btn-primary' ).css( 'color', to );
        } );
    });
    wp.customize( 'banda_primary_color', function( value ) {
        value.bind( function( to ) {
            $( '.card' ).css( 'border-left-color', to );
            $( '#banda-sidebar ul.banda-nave' ).css( 'border-left-color', to );
            $( '.jumbotron' ).css( 'border-left-color', to );
            $( '.table' ).css( 'border-left-color', to );
            $( '.btn-primary' ).css( 'background-color', to );
            $( '.btn-primary' ).css( 'border-color', to );
            $( '.bg-primary' ).css( 'background-color', to );

        } );
    });
 
})( jQuery );