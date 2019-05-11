function createCssLinkToHead(href) {
	var link = document.createElement('link');
	link.rel = 'stylesheet';
	link.href = href;
	document.head.appendChild(link);
}
createCssLinkToHead('css/js-style.css');
function addBannerStyleHeader() {
	document.querySelector('header').insertAdjacentHTML('afterbegin', '<div class="row no-margin banner"><figure class="no-margin first"><img src="http://pizzahousenl.ca/wp-content/uploads/2016/04/pizza_trad_pepperoni.png" class="col-12 no-margin"></figure><h1 class="no-margin"><img src="https://images.ecosia.org/-JaM4_bmF9sLn_ASqpS0dB-Mv4c=/0x390/smart/https%3A%2F%2Fwww.tortealcioccolato.com%2Fwp-content%2Fuploads%2F2012%2F03%2F141119204.jpg" alt="Lucasdelirium" class="col-12 no-margin"></h1><figure class="no-margin"><img src="http://pizzahousenl.ca/wp-content/uploads/2016/04/pizza_trad_pepperoni.png" class="col-12 no-margin"></figure></div>');
}