/**
 * This file adds some LIVE to the Theme Customizer live preview. To leverage
 * this, set your custom settings to 'postMessage' and then add your handling
 * here. Your javascript should grab settings from customizer controls, and 
 * then make any necessary changes to the page using jQuery.
 */
( function( $ ) {

	// Update the site title in real time...
	wp.customize( 'blogname', function( value ) {
		value.bind( function( newval ) {
			$( '#site-title a' ).html( newval );
		} );
	} );
	
	//Update the site description in real time...
	wp.customize( 'blogdescription', function( value ) {
		value.bind( function( newval ) {
			$( '.site-description' ).html( newval );
		} );
	} );

	//Update site title color in real time...
	wp.customize( 'header_textcolor', function( value ) {
		value.bind( function( newval ) {
			$('#site-title a').css('color', newval );
		} );
	} );

	//Update site background color...
	wp.customize( 'background_color', function( value ) {
		value.bind( function( newval ) {
			$('body').css('background-color', newval );
		} );
	} );
	
	//Update site link color in real time...
	wp.customize( 'link_textcolor', function( value ) {
		value.bind( function( newval ) {
			$('.widget>ul>li>a, p>a').css('color', newval );
		} );
	} );

	//Update site link color in real time...
	wp.customize( 'heading_linkcolor', function( value ) {
		value.bind( function( newval ) {
			$('h1 a, .h1 a, h2 a, .h2 a, h3 a, .h3 a, h4 a, .h4 a, h5 a, .h5 a, h6 a, .h6 a').css('color', newval );
		} );
	} );

	//Update site headings weight in real time...
	wp.customize( 'headings_weight', function( value ) {
		value.bind( function( newval ) {
			$('h1 a, .h1 a, h2 a, .h2 a, h3 a, .h3 a, h4 a, .h4 a, h5 a, .h5 a, h6 a, .h6 a').css('font-weight', newval );
			$('h1, .h1, h2, .h2, h3, .h3, h4, .h4, h5, .h5, h6, .h6, .site-description').css('font-weight', newval );
		} );
	} );

	//Update site primary color in real time...
	wp.customize( 'primary_color', function( value ) {
		value.bind( function( newval ) {
			$('.btn-primary, .bypostauthor .media-heading, .btn-primary:hover, .btn-primary:focus, .btn-primary:active, .btn-primary.active, .open .dropdown-toggle.btn-primary').css('background-color', newval );
			$('blockquote, .sticky, .form-control:focus, .search-field:focus, .btn-primary, .btn-primary:hover, .btn-primary:focus, .btn-primary:active, .btn-primary.active, .open .dropdown-toggle.btn-primary').css('border-color', newval );
		} );
	} );

	//Update site font in real time...
	wp.customize( 'headings_font', function( value ) {
		value.bind( function( newval ) {
			$('.site-description, h1 a, .h1 a, h2 a, .h2 a, h3 a, .h3 a, h4 a, .h4 a, h5 a, .h5 a, h6 a, .h6 a, h1, .h1, h2, .h2, h3, .h3, h4, .h4, h5, .h5, h6, .h6').css('font-family', newval );
		} );
	} );

	//Update site font in real time...
	wp.customize( 'body_font', function( value ) {
		value.bind( function( newval ) {
			$('body').css('font-family', newval );
		} );
	} );
	
} )( jQuery );
