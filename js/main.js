document.getElementById('style-link').insertAdjacentHTML('afterend', '<link id="js-style-link" rel="stylesheet" href="css/js-style.min.css">');
function checkWindowWidthToAddHeaderBanner() {
    if (window.innerWidth>=720 && document.querySelector('header .banner')==null) {
        window.removeEventListener('resize', checkWindowWidthToAddHeaderBanner);
        document.querySelector('header').insertAdjacentHTML('afterbegin', '<div class="banner row"><figure class="first-figure no-margin"><img src="http://pizzahousenl.ca/wp-content/uploads/2016/04/pizza_trad_pepperoni.png" class="col-12 full-width-no-margin"></figure><h1 class="no-margin logo"><a href="#" class="col-12 full-width-no-margin"><img src="img/logo-lucasdelirium.png" alt="Lucasdelirium" class="full-width-no-margin"></a></h1><figure class="no-margin"><img src="http://pizzahousenl.ca/wp-content/uploads/2016/04/pizza_trad_pepperoni.png" class="col-12 full-width-no-margin"></figure></div>');
    }
}
function openMobileMenu() {
    var headerNav = document.getElementById('header-nav');
    headerNav.className += ' visible';
    setTimeout(function() {
        headerNav.className += ' open';
    }, 125);
}
function closeMobileMenu() {
    var headerNav = document.getElementById('header-nav');
    headerNav.className = 'col-12 full-width-no-margin visible';
    setTimeout(function() {
        headerNav.className = 'col-12 full-width-no-margin';
    }, 334);
}
window.addEventListener('resize', checkWindowWidthToAddHeaderBanner);
document.getElementById('open-mobile-menu-icon').addEventListener('click', openMobileMenu);
document.getElementById('close-mobile-menu-icon').addEventListener('click', closeMobileMenu);
checkWindowWidthToAddHeaderBanner();
