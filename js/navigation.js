/**
 * File navigation.js.
 *
 * Handles toggling the navigation menu for small screens and enables TAB key
 * navigation support for dropdown menus.
 */
( function() {
	const siteNavigation = document.getElementById( 'site-navigation' );
	const siteHeader = document.getElementById( 'masthead' );
	// const belowHeader = document.getElementById( 'below-header' );
	const navBgLayout = document.getElementById( 'nav-bg-layout' );
	let siteHeaderHeight = siteHeader.offsetHeight;
	let resetScroll = false;
	const bodyElement = document.body;
	
	const siteHeaderShader = document.getElementById('site-header-shader');

	let menuStatus = false; // start with menu hidden.
	let pageScrollPosition = window.scrollY;
	let pageBackgroundPosition = false;
	
	addEventListener('scroll', () => {
		// console.log(siteHeader.offsetHeight);
		pageScrollPosition = window.scrollY;
	});

	document.body.addEventListener("keypress", (e) => {
		// console.log(e);
		// console.log(e.key);
	});

	document.onkeyup = (e) => {
		if (e.key === 'Escape') {
			menuStatus ? closeMenu() : 'false';
		}
	}

	// Return early if the navigation doesn't exist.
	if ( !siteNavigation || !siteHeader ) { return; }

	const button = siteHeader.getElementsByTagName( 'button' )[ 0 ];

	// Return early if the button doesn't exist.
	if ( 'undefined' === typeof button ) {
		return;
	}

	const menu = siteNavigation.getElementsByTagName( 'ul' )[ 0 ];

	// Toggle the .toggled class and the aria-expanded value each time the button is clicked.
	
	button.addEventListener( 'click', function() {
		!menuStatus ? openMenu() : closeMenu();
	} );

	siteHeaderShader.addEventListener( 'click', function() {
		closeMenu();
	} );

	// Remove the .toggled class and set aria-expanded to false when the user clicks outside the navigation.
	document.addEventListener( 'click', function( e ) {
		const isClickInside = siteNavigation.contains( e.target );

		if ( ! isClickInside ) {
			// siteNavigation.classList.remove( 'toggled' );
			// siteHeader.classList.remove( 'toggled' );
			// button.setAttribute( 'aria-expanded', 'false' );
		}
	} );

	// Get all the link elements within the menu.
	const links = menu.getElementsByTagName( 'a' );

	// Get all the link elements with children within the menu.
	const linksWithChildren = menu.querySelectorAll( '.menu-item-has-children > a, .page_item_has_children > a' );

	// Toggle focus each time a menu link is focused or blurred.
	for ( const link of links ) {
		link.addEventListener( 'focus', toggleFocus, true );
		link.addEventListener( 'blur', toggleFocus, true );
	}

	// Toggle focus each time a menu link with children receive a touch event.
	for ( const link of linksWithChildren ) {
		link.addEventListener( 'touchstart', toggleFocus, false );
	}

	/**
	 * Sets or removes .focus class on an element.
	 */
	function toggleFocus() {
		if ( event.type === 'focus' || event.type === 'blur' ) {
			let self = this;
			// Move up through the ancestors of the current link until we hit .nav-menu.
			while ( ! self.classList.contains( 'nav-menu' ) ) {
				// On li elements toggle the class .focus.
				if ( 'li' === self.tagName.toLowerCase() ) {
					self.classList.toggle( 'focus' );
				}
				self = self.parentNode;
			}
		}

		if ( event.type === 'touchstart' ) {
			const menuItem = this.parentNode;
			event.preventDefault();
			for ( const link of menuItem.parentNode.children ) {
				if ( menuItem !== link ) {
					link.classList.remove( 'focus' );
				}
			}
			menuItem.classList.toggle( 'focus' );
		}
	}

	function openMenu() {
		resetScroll = pageScrollPosition;

		navBgLayout.style.paddingTop = `${siteHeaderHeight}px`;
		navBgLayout.style.marginTop = `-${resetScroll}px`;
		window.scrollTo(0, 0);
		
		bodyElement.classList.add('nav-toggled');
		bodyElement.classList.add('site-header-shader-visible');
		button.setAttribute('aria-expanded', 'true');
		menuStatus = true;
	}

	function closeMenu() {
		bodyElement.classList.remove('nav-toggled');
		navBgLayout.style.removeProperty('padding-top');
		navBgLayout.style.removeProperty('margin-top');
		window.scrollTo({
			top: resetScroll,
			left: 0
		});
		
		button.setAttribute('aria-expanded', 'false');
		menuStatus = false;

		setTimeout(() => {
			if(!menuStatus) {
				bodyElement.classList.remove( 'site-header-shader-visible' );
			}
		}, 300);
	}

}() );

