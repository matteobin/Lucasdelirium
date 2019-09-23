document.getElementById('style').insertAdjacentHTML('beforeend', ".container a.nav{display:none}@media only screen and (min-width:45em){.container a.nav{display:block;margin-top:5em}.row .article{margin-left:0!important;margin-right:0!important}}");
function checkWindowWidthToAddArticleBannerAndNav() {
	if (window.innerWidth>=720 && document.querySelector('article .banner')==null) {
		window.removeEventListener('resize', checkWindowWidthToAddArticleBannerAndNav);
		document.querySelector('article h2').insertAdjacentHTML('afterend', '<figure class="col-12 hidden-sm banner"><img src="'+articleBannerImg+'" class="col-12 full-width-no-margin"></figure>');
		document.querySelector('article').insertAdjacentHTML('beforebegin', '<a href="'+previousArticle+'" class="col-1 nav">'+leftArrow+'</a>');
		document.querySelector('article').insertAdjacentHTML('afterend', '<a href="'+nextArticle+'" class="col-1 nav">'+rightArrow+'</a>');
        delete(articleBannerImg);
        delete(previousArticle);
        delete(nextArticle);
	}
}
window.addEventListener('resize', checkWindowWidthToAddArticleBannerAndNav);
checkWindowWidthToAddArticleBannerAndNav();
