document.getElementById('style-link').insertAdjacentHTML('afterend', '<link id="js-style-link" rel="stylesheet" href="css/js-style.min.css">');
function addClass(element, className) {
	if (element.classList) {
		element.classList.add(className);
	}
	else {
		element.className += ' '+className;
	}
}
function openMobileMenu() {
    document.body.style.overflowY = 'hidden';
    var headerNav = document.getElementById('header-nav');
    addClass(headerNav, 'visible');
    setTimeout(function() {
        addClass(headerNav, 'open');
    }, 125);
}
function removeClass(element, className) {
	if (element.classList) {
		element.classList.remove(className);
	} else {
		element.className = element.className.replace(new RegExp('(^|\\b)' + className.split(' ').join('|') + '(\\b|$)', 'gi'), ' ');
	}
}
function closeMobileMenu() {
    document.body.style.overflowY = 'auto';
    var headerNav = document.getElementById('header-nav');
    removeClass(headerNav, 'open');
    setTimeout(function() {
        removeClass(headerNav, 'visible');
    }, 334);
}
function insertHTML() {
    if (window.innerWidth>=720) {
        if (document.querySelector('header .banner')==null) {
            document.querySelector('header').insertAdjacentHTML('afterbegin', '<div class="banner row"><figure class="first-figure no-margin"><img src="http://pizzahousenl.ca/wp-content/uploads/2016/04/pizza_trad_pepperoni.png" class="col-12 full-width-no-margin"></figure><a href="#" class="no-margin logo" title="Pagina principale"><img src="img/logo-lucasdelirium.png" alt="Lucasdelirium" class="full-width-no-margin"></a><figure class="no-margin"><img src="http://pizzahousenl.ca/wp-content/uploads/2016/04/pizza_trad_pepperoni.png" class="col-12 full-width-no-margin"></figure></div>');
            insertionsNumber++;
        }
    } else {
        if (document.getElementById('close-mobile-menu-icon')==null && document.getElementById('open-mobile-menu-icon')==null) {
            var headerNav = document.getElementById('header-nav');
            document.getElementById('header-logo').insertAdjacentHTML('beforeend', '<span class="title">Lucasdelirium</span>');
            headerNav.insertAdjacentHTML('afterbegin', '<div class="col-12 full-width-no-margin close-icon-container"><img id="close-mobile-menu-icon" class="close-icon" src="img/icona-chiudi.svg" alt="Chiudi"></div>');
            headerNav.insertAdjacentHTML('afterend', '<div id="open-mobile-menu-icon" class="mobile-menu-icon"><span class="1"></span><span class="2"></span><span class="3"></span></div>');
            document.getElementById('open-mobile-menu-icon').addEventListener('click', openMobileMenu);
            document.getElementById('close-mobile-menu-icon').addEventListener('click', closeMobileMenu);
            insertionsNumber++;
        }
    }
    if (insertionsNumber==2) {
        window.removeEventListener('resize', insertHTML);
    }
}
insertionsNumber = 0;
window.addEventListener('resize', insertHTML);
insertHTML();
