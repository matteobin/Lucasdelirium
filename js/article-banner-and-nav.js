// @license magnet:?xt=urn:btih:1f739d935676111cfff4b4693e3816e664797050&dn=gpl-3.0.txt GNU General Public License (GPL) version 3
document.getElementById('style-tag').insertAdjacentHTML('beforeend', ".container a.nav{display:none}@media only screen and (min-width:45em){.container a.nav{display:block;margin-top:5em}.row .article{margin-left:0!important;margin-right:0!important}}");
function checkWindowWidthToAddArticleBannerAndNav() {
	if (window.innerWidth>=720 && document.querySelector('article .banner')==null) {
		window.removeEventListener('resize', checkWindowWidthToAddArticleBannerAndNav);
		document.querySelector('article h2').insertAdjacentHTML('afterend', '<figure class="col-12 hidden-sm banner"><img src="'+articleBannerImg+'" class="col-12 full-width-no-margin"></figure>');
		document.querySelector('article').insertAdjacentHTML('beforebegin', '<a href="'+previousArticle+'" class="col-1 nav"><svg width="100%" viewBox="0 0 100 39" xmlns="http://www.w3.org/2000/svg">Indietro<path class="st0" d="M24.017 21.1v16.778L-.334 18.645 24.017-.505v16.777H99.57v4.87z" fill="#dad4ca"/></svg></a>');
		document.querySelector('article').insertAdjacentHTML('afterend', '<a href="'+nextArticle+'" class="col-1 nav"><svg width="100%" viewBox="0 0 100 39" xmlns="http://www.w3.org/2000/svg">Avanti<path class="st0" d="M-.334 21.1v-4.87h75.552V-.546L99.57 18.686 75.218 37.92V21.14z" fill="#dad4ca"/></svg></a>');
        delete(articleBannerImg);
        delete(previousArticle);
        delete(nextArticle);
	}
}
window.addEventListener('resize', checkWindowWidthToAddArticleBannerAndNav);
checkWindowWidthToAddArticleBannerAndNav();
// @license-end
