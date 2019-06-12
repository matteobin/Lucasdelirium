function checkWindowWidthToAddArticleBannerAndNav() {
	if (window.innerWidth>=720 && document.querySelector('article .banner')==null) {
		window.removeEventListener('resize', checkWindowWidthToAddArticleBannerAndNav);
		document.querySelector('article h2').insertAdjacentHTML('afterend', '<figure class="col-12 banner"><img src="http://rascalhouse.com/wp-content/uploads/2016/03/pizza-banner-1024x350.png" class="col-12 no-margin"></figure>');
		document.querySelector('article').insertAdjacentHTML('beforebegin', '<a href="#" class="col-1 nav"><svg width="100%" viewBox="0 0 100 39" xmlns="http://www.w3.org/2000/svg"><path class="st0" d="M24.017 21.1v16.778L-.334 18.645 24.017-.505v16.777H99.57v4.87z" fill="#dad4ca"/></svg></a>');
		document.querySelector('article').insertAdjacentHTML('afterend', '<a href="#" class="col-1 nav"><svg width="100%" viewBox="0 0 100 39" xmlns="http://www.w3.org/2000/svg">Avanti<path class="st0" d="M-.334 21.1v-4.87h75.552V-.546L99.57 18.686 75.218 37.92V21.14z" fill="#dad4ca"/>Avanti</svg></a>');
	}
}
window.addEventListener('resize', checkWindowWidthToAddArticleBannerAndNav);
checkWindowWidthToAddArticleBannerAndNav();
function addClass(element, className) {
	if (element.classList) {
		element.classList.add(className);
	}
	else {
		element.className += ' '+className;
	}
}
function removeClass(element, className) {
	if (element.classList) {
		element.classList.remove(className);
	} else {
		element.className = element.className.replace(new RegExp('(^|\\b)' + className.split(' ').join('|') + '(\\b|$)', 'gi'), ' ');
	}
}
var lightboxElements = document.querySelectorAll('figure.lightbox a');
var lightboxElementsNumber = lightboxElements.length;
if (lightboxElementsNumber!=0) {
	document.body.insertAdjacentHTML('beforeend', '<div id="lightbox-background"></div><figure id="lightbox-viewer"><img class="loading" alt="Caricamento"><img class="loaded" alt=""><figcaption></figcaption></figure>');
	var lightboxBackground = document.getElementById('lightbox-background');
	var lightboxViewer = document.getElementById('lightbox-viewer');
	function closeLightbox(event) {
		var tagName = event.target.tagName.toLowerCase();
		if (tagName!='img' && tagName!='figcaption') {
			lightboxBackground.removeEventListener('click', closeLightbox);
			document.body.style.overflow = 'auto';
			removeClass(lightboxBackground, 'visible');
			removeClass(lightboxViewer, 'visible');
			setTimeout(function() {
				removeClass(lightboxBackground, 'active');
				removeClass(lightboxViewer, 'active');
				removeClass(lightboxViewer.children[0], 'visible');
				removeClass(lightboxViewer.children[1], 'visible');
			}, 334);
		}
	}
	function showLoadedAndHideLoading() {
			lightboxViewer.children[1].removeEventListener('load', showLoadedAndHideLoading);
			removeClass(lightboxViewer.children[0], 'visible');
			addClass(lightboxViewer.children[1], 'visible');
	}
	function openLightbox(event) {
		event.preventDefault();
		document.body.style.overflow = 'hidden';
		lightboxViewer.children[1].src = event.target.parentElement.href;
		lightboxViewer.children[0].src = event.target.parentElement.children[0].currentSrc;
		if (typeof(event.target.parentElement.children[1])!=='undefined') {
			lightboxViewer.children[2].innerHTML = event.target.parentElement.children[1].innerHTML;
		}
		addClass(lightboxViewer.children[0], 'visible');
		addClass(lightboxBackground, 'active');
		setTimeout(function() {addClass(lightboxBackground, 'visible');}, 34);
		addClass(lightboxViewer, 'active');
		setTimeout(function() {addClass(lightboxViewer, 'visible');}, 34);
		lightboxViewer.children[1].addEventListener('load', showLoadedAndHideLoading);
		lightboxBackground.addEventListener('click', closeLightbox);
		lightboxViewer.addEventListener('click', closeLightbox);
	}
	for (lightboxElementsIndex=0; lightboxElementsIndex<lightboxElementsNumber; lightboxElementsIndex++) {
		lightboxElements[lightboxElementsIndex].addEventListener('click', openLightbox);
	}
	delete(lightboxElementsIndex);
}
document.body.insertAdjacentHTML('beforeend', '<a href="#" id="go-up-button"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 65 70" title="Clicca per tornare all\'inizio dell\'articolo.">Torna su<g fill="#19273d"><path d="M7.7 33.511L32.675 1.876 57.65 33.511z"/><g><path d="M20.376 47.078h-7.441V67.74H9.9V46.79H2.46V44.26h17.916zM41.182 56.976c0 2.24-.362 4.262-1.156 5.924s-1.879 2.962-3.251 3.9c-1.373.868-3.034 1.301-4.913 1.301-1.806 0-3.467-.433-4.84-1.373-1.445-.866-2.529-2.167-3.25-3.828-.796-1.662-1.157-3.613-1.23-5.78V55.46c0-2.24.362-4.19 1.157-5.924s1.878-3.034 3.25-3.901c1.446-.94 3.035-1.373 4.841-1.373 1.878 0 3.468.433 4.912 1.373 1.445.867 2.529 2.167 3.251 3.9.795 1.735 1.156 3.685 1.156 5.925v1.517zm-3.035-1.517c0-2.746-.578-4.84-1.661-6.285s-2.673-2.168-4.624-2.168-3.467.723-4.551 2.168-1.662 3.54-1.734 6.14v1.734c0 2.673.578 4.768 1.662 6.285s2.673 2.312 4.623 2.312 3.468-.723 4.552-2.167 1.661-3.468 1.661-6.141v-1.878zM48.84 58.71v9.03h-3.035V44.622h8.525c2.528 0 4.55.65 5.924 1.95 1.444 1.301 2.167 3.035 2.167 5.13 0 2.24-.723 3.973-2.095 5.201s-3.396 1.807-6.069 1.807zm0-2.529h5.49c1.661 0 2.89-.361 3.756-1.156s1.3-1.878 1.3-3.323c0-1.373-.433-2.456-1.3-3.323-.867-.795-2.095-1.228-3.612-1.3H48.84z"/></g></g></svg></a>');
function updateDocumentHeight() {
	documentHeight = Math.max(document.body.scrollHeight, document.body.offsetHeight, document.documentElement.clientHeight, document.documentElement.scrollHeight, document.documentElement.offsetHeight);
}
var updateDocumentHeightTimeout = setTimeout(function() {updateDocumentHeight();}, 125);
window.addEventListener('resize', function() {
	clearTimeout(updateDocumentHeightTimeout);
	updateDocumentHeightTimeout = setTimeout(function() {updateDocumentHeight();}, 125);
});
function hasClass(element, className) {
	if (element.classList) {
		return element.classList.contains(className);
	} else {
		return new RegExp('(^| )' + className + '( |$)', 'gi').test(element.className);
	}
}
var hideGoUpButtonTimeoutStarted = false;
function hideGoUpButton() {
	var goUpButton = document.getElementById('go-up-button');
	hideGoUpButtonTimeoutStarted = true;
	setTimeout(function() {removeClass(goUpButton, 'visible');}, 1834);
	setTimeout(function() {removeClass(goUpButton, 'active');}, 2134);
}
function checkScrolledToShowGoUpButton() {
	var goUpButton = document.getElementById('go-up-button');
	if (document.documentElement.scrollTop>=documentHeight/3) {
		if (!hasClass(goUpButton, 'active')) {
			addClass(goUpButton, 'active');
			setTimeout(function() {addClass(goUpButton, 'visible');}, 34);
			hideGoUpButtonTimeoutStarted = false;
			if (window.innerWidth<720) {
				hideGoUpButton();
			}
		} else if (window.innerWidth<720 && !hideGoUpButtonTimeoutStarted) {
			hideGoUpButton();
		}
	} else if (hasClass(goUpButton, 'visible')) {
		removeClass(goUpButton, 'visible');
		setTimeout(function() {removeClass(goUpButton, 'active');}, 334);
	}
}
var checkScrolledToShowGoUpButtonTimeout = setTimeout(function() {checkScrolledToShowGoUpButton();}, 250);
window.addEventListener('scroll', function() {
	clearTimeout(checkScrolledToShowGoUpButtonTimeout);
	checkScrolledToShowGoUpButtonTimeout = setTimeout(function() {checkScrolledToShowGoUpButton();}, 250);
});
window.addEventListener('resize', checkScrolledToShowGoUpButton);