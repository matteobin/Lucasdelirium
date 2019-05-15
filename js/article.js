function checkWindowWidthToAddArticleBannerAndNav() {
	if (window.innerWidth>=720 && document.querySelector('article .banner')==null) {
		window.removeEventListener('resize', checkWindowWidthToAddArticleBannerAndNav);
		document.querySelector('article h2').insertAdjacentHTML('afterend', '<figure class="col-12 banner"><img src="http://rascalhouse.com/wp-content/uploads/2016/03/pizza-banner-1024x350.png" class="col-12 no-margin"></figure>');
		document.querySelector('article').insertAdjacentHTML('beforebegin', '<a href="#" class="col-1 nav"><img src="img/freccia-sinistra.svg" alt="Indietro" class="col-12 no-margin"></a>');
		document.querySelector('article').insertAdjacentHTML('afterend', '<a href="#" class="col-1 nav"><img src="img/freccia-destra.svg" alt="Avanti" class="col-12 no-margin"></a>');
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
document.body.insertAdjacentHTML('beforeend', '<a href="#" id="go-up-button"><img src="img/torna-su.svg" title="Clicca per tornare all\'inizio dell\'articolo." alt="Torna su"></a>')
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
