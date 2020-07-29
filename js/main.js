// @license magnet:?xt=urn:btih:1f739d935676111cfff4b4693e3816e664797050&dn=gpl-3.0.txt GNU General Public License (GPL) version 3
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
    var headerNav = document.getElementById('nav-sito');
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
    var headerNav = document.getElementById('nav-sito');
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
            var headerNav = document.getElementById('nav-sito');
            document.getElementById('header-logo').insertAdjacentHTML('beforeend', '<span class="title">Lucasdelirium</span>');
            headerNav.insertAdjacentHTML('afterbegin', '<div class="col-12 full-width-no-margin close-icon-container"><span id="close-mobile-menu-icon" class="close-icon-wrapper"><svg aria-hidden="true" data-prefix="fas" data-icon="times" class="svg-inline--fa fa-times fa-w-11" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 352 512">Chiudi<path fill="#dad4ca" d="M243 256l100-100c12-12 12-32 0-45l-22-22a31 31 0 00-45 0L176 189 76 89a31 31 0 00-45 0L9 111a31 31 0 000 45l100 100L9 356a31 31 0 000 45l22 22c13 12 33 12 45 0l100-100 100 100c12 12 32 12 45 0l22-22c12-13 12-33 0-45L243 256z"/></svg></span></div>');
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
// @license-end
