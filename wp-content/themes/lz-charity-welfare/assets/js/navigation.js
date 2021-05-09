/**
 * Theme functions file.
 *
 * Contains handlers for navigation and widget area.
 */

jQuery(function($){
	"use strict";
	jQuery('.main-menu-navigation > ul').superfish({
		delay:       500,                            
		animation:   {opacity:'show',height:'show'},  
		speed:       'fast'                        
	});
});

function lz_charity_welfare_open() {
	jQuery(".sidenav").addClass("open");
}
function lz_charity_welfare_close() {
  	jQuery(".sidenav").removeClass("open");
}

function lz_charity_welfare_menuAccessibility() {
	var links, i, len,
	    lz_charity_welfare_menu = document.querySelector( '.nav-menu' ),
	    lz_charity_welfare_iconToggle = document.querySelector( '.nav-menu ul li:first-child a' );
	    
	let lz_charity_welfare_focusableElements = 'button, a, input';
	let lz_charity_welfare_firstFocusableElement = lz_charity_welfare_iconToggle; // get first element to be focused inside menu
	let lz_charity_welfare_focusableContent = lz_charity_welfare_menu.querySelectorAll(lz_charity_welfare_focusableElements);
	let lz_charity_welfare_lastFocusableElement = lz_charity_welfare_focusableContent[lz_charity_welfare_focusableContent.length - 1]; // get last element to be focused inside menu

	if ( ! lz_charity_welfare_menu ) {
    	return false;
	}

	links = lz_charity_welfare_menu.getElementsByTagName( 'a' );

	// Each time a menu link is focused or blurred, toggle focus.
	for ( i = 0, len = links.length; i < len; i++ ) {
	    links[i].addEventListener( 'focus', toggleFocus, true );
	    links[i].addEventListener( 'blur', toggleFocus, true );
	}

	// Sets or removes the .focus class on an element.
	function toggleFocus() {
      	var self = this;

      	// Move up through the ancestors of the current link until we hit .mobile-menu.
      	while (-1 === self.className.indexOf( 'nav-menu' ) ) {
	      	// On li elements toggle the class .focus.
	      	if ( 'li' === self.tagName.toLowerCase() ) {
	          	if ( -1 !== self.className.indexOf( 'focus' ) ) {
	          		self.className = self.className.replace( ' focus', '' );
	          	} else {
	          		self.className += ' focus';
	          	}
	      	}
	      	self = self.parentElement;
      	}
	}
    
	// Trap focus inside modal to make it ADA compliant
	document.addEventListener('keydown', function (e) {
	    let isTabPressed = e.key === 'Tab' || e.keyCode === 9;

	    if ( ! isTabPressed ) {
	    	return;
	    }

	    if ( e.shiftKey ) { // if shift key pressed for shift + tab combination
	      	if (document.activeElement === lz_charity_welfare_firstFocusableElement) {
		        lz_charity_welfare_lastFocusableElement.focus(); // add focus for the last focusable element
		        e.preventDefault();
	      	}
	    } else { // if tab key is pressed
	    	if (document.activeElement === lz_charity_welfare_lastFocusableElement) { // if focused has reached to last focusable element then focus first focusable element after pressing tab
		      	lz_charity_welfare_firstFocusableElement.focus(); // add focus for the first focusable element
		      	e.preventDefault();
	    	}
	    }
	});   
}

jQuery(function($){
	$('.mobile-menu').click(function () {
   		lz_charity_welfare_menuAccessibility();
  	});
	$('.search-toggle').click(function () {
	    lz_charity_welfare_search_focus();
  	});
});

function lz_charity_welfare_search_open() {
	jQuery(".search-outer").addClass('show');
}
function lz_charity_welfare_search_close() {
	jQuery(".search-outer").removeClass('show');
}

function lz_charity_welfare_search_focus() {
	var links, i, len,
	    lz_charity_welfare_search = document.querySelector( '.search-outer' ),
	    lz_charity_welfare_iconToggle = document.querySelector( '.search-outer input[type="search"]' );
	    
	let lz_charity_welfare_focusableElements = 'button, a, input';
	let lz_charity_welfare_firstFocusableElement = lz_charity_welfare_iconToggle; // get first element to be focused inside menu
	let lz_charity_welfare_focusableContent = lz_charity_welfare_search.querySelectorAll(lz_charity_welfare_focusableElements);
	let lz_charity_welfare_lastFocusableElement = lz_charity_welfare_focusableContent[lz_charity_welfare_focusableContent.length - 1]; // get last element to be focused inside menu

	if ( ! lz_charity_welfare_search ) {
    	return false;
	}

	links = lz_charity_welfare_search.getElementsByTagName( 'a' );

	// Each time a menu link is focused or blurred, toggle focus.
	for ( i = 0, len = links.length; i < len; i++ ) {
	    links[i].addEventListener( 'focus', toggleFocus, true );
	    links[i].addEventListener( 'blur', toggleFocus, true );
	}

	// Sets or removes the .focus class on an element.
	function toggleFocus() {
      	var self = this;

      	// Move up through the ancestors of the current link until we hit .mobile-menu.
      	while (-1 === self.className.indexOf( 'nav-menu' ) ) {
	      	// On li elements toggle the class .focus.
	      	if ( 'li' === self.tagName.toLowerCase() ) {
	          	if ( -1 !== self.className.indexOf( 'focus' ) ) {
	          		self.className = self.className.replace( ' focus', '' );
	          	} else {
	          		self.className += ' focus';
	          	}
	      	}
	      	self = self.parentElement;
      	}
	}
    
	// Trap focus inside modal to make it ADA compliant
	document.addEventListener('keydown', function (e) {
	    let isTabPressed = e.key === 'Tab' || e.keyCode === 9;

	    if ( ! isTabPressed ) {
	    	return;
	    }

	    if ( e.shiftKey ) { // if shift key pressed for shift + tab combination
	      	if (document.activeElement === lz_charity_welfare_firstFocusableElement) {
		        lz_charity_welfare_lastFocusableElement.focus(); // add focus for the last focusable element
		        e.preventDefault();
	      	}
	    } else { // if tab key is pressed
	    	if (document.activeElement === lz_charity_welfare_lastFocusableElement) { // if focused has reached to last focusable element then focus first focusable element after pressing tab
		      	lz_charity_welfare_firstFocusableElement.focus(); // add focus for the first focusable element
		      	e.preventDefault();
	    	}
	    }
	});   
}