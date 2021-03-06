// @license magnet:?xt=urn:btih:1f739d935676111cfff4b4693e3816e664797050&dn=gpl-3.0.txt GPL-v3-or-Later
var lightboxElements = document.querySelectorAll('.lightbox a');
var lightboxElementsNumber = lightboxElements.length;
if (lightboxElementsNumber!=0) {
	document.getElementById('style-tag').innerHTML += '.lightbox-background{background:#222;height:100%;left:0;top:0;width:100%;z-index:2 }.lightbox-background,.lightbox-viewer{display:none;opacity:0;position:fixed }.lightbox-background,.lightbox-viewer,.go-up-button{cursor:pointer;-moz-transition:opacity .3s;-o-transition:opacity .3s;-webkit-transition:opacity .3s;transition:opacity .3s }.lightbox-viewer{height:90%;left:5%;overflow-y:auto;top:5%;width:90%;z-index:3 }.lightbox-viewer img{cursor:default;display:none;margin:0 auto;max-height:100%;max-width:100% }.lightbox-viewer figcaption{cursor:default;text-align:center }';
	document.body.insertAdjacentHTML('beforeend', '<div class="lightbox-background" aria-hidden="true"></div><figure class="lightbox-viewer no-margin" aria-hidden="true"><img class="loading" alt="Caricamento"><img class="loaded" alt=""><figcaption></figcaption></figure>');
	var lightboxBackground = document.querySelectorAll('.lightbox-background')[0];
	var lightboxViewer = document.querySelectorAll('.lightbox-viewer')[0];
	function closeLightbox(event) {
		var tagName = event.target.tagName.toLowerCase();
		if (tagName!='img' && tagName!='figcaption') {
			lightboxBackground.removeEventListener('click', closeLightbox);
			document.body.style.overflow = 'auto';
			removeClass(lightboxBackground, 'visible');
			removeClass(lightboxViewer, 'visible');
			setTimeout(function() {
				removeClass(lightboxBackground, 'render');
				removeClass(lightboxViewer, 'render');
				removeClass(lightboxViewer.children[0], 'render');
				removeClass(lightboxViewer.children[1], 'render');
			}, 334);
		}
	}
	function showLoadedAndHideLoading() {
			lightboxViewer.children[1].removeEventListener('load', showLoadedAndHideLoading);
			removeClass(lightboxViewer.children[0], 'render');
			addClass(lightboxViewer.children[1], 'render');
	}
	function openLightbox(event) {
		event.preventDefault();
		document.body.style.overflow = 'hidden';
		lightboxViewer.children[1].src = event.target.parentElement.href;
		lightboxViewer.children[0].src = event.target.parentElement.children[0].currentSrc;
		if (typeof(event.target.parentElement.parentElement.children[1])!=='undefined') {
			lightboxViewer.children[2].innerHTML = event.target.parentElement.parentElement.children[1].innerHTML;
		}
		addClass(lightboxViewer.children[0], 'render');
		addClass(lightboxBackground, 'render');
		setTimeout(function() {addClass(lightboxBackground, 'almost-visible');}, 34);
		addClass(lightboxViewer, 'render');
		setTimeout(function() {addClass(lightboxViewer, 'visible');}, 34);
		lightboxViewer.children[1].addEventListener('load', showLoadedAndHideLoading);
		lightboxBackground.addEventListener('click', closeLightbox);
		lightboxViewer.addEventListener('click', closeLightbox);
	}
	for (lightboxElementsIndex=0; lightboxElementsIndex<lightboxElementsNumber; lightboxElementsIndex++) {
		lightboxElements[lightboxElementsIndex].addEventListener('click', openLightbox);
	}
	delete lightboxElementsIndex;
}
// @license-end
