<?php
	$title = 'Articolo';
	$description = 'Questa è una breve descrizione del contenuto della pagina per i motori di ricerca.';
	require_once('head.php');
?>
            <style>
                article h1, article h4 {
                    font-weight: 900;
                }
                .container article h2.col-12 {
                    margin-bottom: 1em;
                }
                article ul {
                    padding: 0;
                }
                .container.row article nav {
                    background: #DAD4CA;
                    margin: 0;
                    padding: 0.5em 2%;
                }
                article nav ul li a {
                    color: #8E2D68;
                }
                .container article h3.first {
                    margin-top: 3em;
                }
                .container.row article h3 {
                    margin-top: 4em;
                }
                .container article h3.margin-top {
                    margin-top: 6em;
                }
                article figure figcaption {
                    font-size: 0.938em;
                }
                @media only screen and (min-width: 45em) {
                    .container.row article {
                        width: 100%;
                        margin: 0.5em 0;
                    }
                    .row article p.first {
                        text-align: justify;
                        margin-top: 0;
                    }
                    article nav ul li {
                        text-align: left;
                    }   
                }
            </style>
            <article class="col-10">
                <h1 class="col-12 center">Titolo</h1>
                <h2 class="col-12 center">Sottotitolo</h2>
                <nav class="col-4">
                    <ul>
                        <li><a href="#analisi">Analisi</a></li>
                        <li><a href="#credits">Credits</a></li>
                        <li><a href="#edizione">Edizione</a></li>
                        <li><a href="#extra">Extra e Curiosità</a></li>
                        <li><a href="#">Supporto tecnico</a></li>
                        <li><a href="#">Copertine</a></li>
                        <li><a href="#">Soluzione</a></li>
                    </ul>    
                </nav>
                <p class="col-8 first">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent sodales blandit diam, dapibus convallis ante varius quis. Donec ornare faucibus vulputate. Nunc nec leo id sem rhoncus ultricies non eget neque. Nulla luctus mauris quis lacus ullamcorper maximus. Aliquam mattis, diam eu maximus sagittis, ipsum ipsum fermentum est, non cursus sem elit porttitor ante. Nulla facilisi. Aliquam erat volutpat. Nam faucibus pretium turpis ut gravida.</p>
                <h3 id="analisi" class="col-12 first">Analisi</h3>
                <h4 class="col-12">DESIGN / SCENEGGIATURA</h4>
                <p class="col-12">Nulla scelerisque ante leo. Sed commodo purus in augue eleifend tincidunt. Proin ac sagittis dolor, vel mollis orci. Etiam vitae condimentum diam. Donec et ex viverra, dignissim sem vitae, varius massa. Fusce non diam ac dui tincidunt tincidunt. Vestibulum <a href="#">vulputate tempus</a> sem ut rhoncus. Aliquam in dolor in sem rutrum eleifend. Aliquam in faucibus nibh, non porttitor nunc. Vivamus rhoncus massa nulla, vitae semper mi volutpat sit amet. Aenean accumsan euismod bibendum. Nulla facilisi. Pellentesque convallis molestie dui, vitae volutpat risus pretium id. Curabitur odio neque, gravida vitae tincidunt non, vehicula a neque.</p>
                <figure class="col-4 center lightbox"><a href="http://rascalhouse.com/wp-content/uploads/2016/03/pizza-banner-1024x350.png"><img src="img/small.jpg" srcset="img/small.jpg 250w, img/medium.jpg 500w, img/large.jpg 750w, img/extra-large.jpg 1000w" sizes="(min-width: 60em) 15vw, (min-width: 45em) 19vw, 70vw" title="" alt="" class="col-12 no-margin"><figcaption>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse sed elit sem.</figcaption></a></figure>
                <p class="col-8">Nulla scelerisque ante leo. Sed commodo purus in augue eleifend tincidunt. Proin ac sagittis dolor, vel mollis orci. Etiam vitae condimentum diam. Donec et ex viverra, dignissim sem vitae, varius massa. Fusce non diam ac dui tincidunt tincidunt. Vestibulum vulputate tempus sem ut rhoncus. Aliquam in dolor in sem rutrum eleifend.</p>
                <p class="col-12">Duis tristique, ex vel condimentum laoreet, dui felis blandit ex, vel consequat felis ipsum ac dui. Curabitur ac faucibus massa. Nunc sagittis enim mi, quis lobortis felis dapibus ac. Morbi sit amet pharetra arcu. Etiam viverra interdum ligula, a aliquam eros iaculis vitae. Ut non quam mi. Integer purus ligula, finibus ut elementum vitae, lobortis eget ipsum. Proin a euismod nunc. </p>
                <p class="col-12">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed fringilla nunc eu blandit fermentum. Pellentesque porta, est et tincidunt bibendum, tortor urna tincidunt purus, sed rhoncus tellus ex molestie lorem. In in convallis sem. Interdum et malesuada fames ac ante ipsum primis in faucibus. Proin facilisis, turpis ac rutrum bibendum, risus felis placerat augue, id interdum elit lorem at orci. Duis dictum lacinia luctus. In varius nunc ac fringilla viverra. Vestibulum iaculis ornare erat, id suscipit lectus maximus et. Nunc vestibulum elit ac libero finibus congue. Morbi pellentesque, arcu et auctor fringilla, tellus leo placerat ante, bibendum elementum ligula ipsum in lacus. Nullam auctor malesuada libero, eu pulvinar purus. In tempus egestas odio non imperdiet. Mauris facilisis nunc auctor velit pretium, vitae aliquam leo vestibulum.</p>
                <h3 id="credits" class="col-12">Credits</h3>
                <h4 class="col-12">DESIGN / SCENEGGIATURA</h4>
                <p class="col-12">Questa è la ricetta per un buon frullato:</p>
                <ul class="col-12">
                    <li class="col-12">Banana</li>
                    <li class="col-12">Pera</li>
                    <li class="col-12">Mela</li>
                </ul>
                <p class="col-12">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed fringilla nunc eu blandit fermentum. Pellentesque porta, est et tincidunt bibendum, tortor urna tincidunt purus, sed rhoncus tellus ex molestie lorem. In in convallis sem. Interdum et malesuada fames ac ante ipsum primis in faucibus. Proin facilisis, turpis ac rutrum bibendum, risus felis placerat augue, id interdum elit lorem at orci. Duis dictum lacinia luctus. In varius nunc ac fringilla viverra. Vestibulum iaculis ornare erat, id suscipit lectus maximus et. Nunc vestibulum elit ac libero finibus congue. Morbi pellentesque, arcu et auctor fringilla, tellus leo placerat ante, bibendum elementum ligula ipsum in lacus. Nullam auctor malesuada libero, eu pulvinar purus. In tempus egestas odio non imperdiet. Mauris facilisis nunc auctor velit pretium, vitae aliquam leo vestibulum.</p>
                <h3 id="edizione" class="col-12 margin-top">Edizione</h3>
                <h4 class="col-12">DESIGN / SCENEGGIATURA</h4>
                <p class="col-12">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed fringilla nunc eu blandit fermentum. Pellentesque porta, est et tincidunt bibendum, tortor urna tincidunt purus, sed rhoncus tellus ex molestie lorem. In in convallis sem. Interdum et malesuada fames ac ante ipsum primis in faucibus. Proin facilisis, turpis ac rutrum bibendum, risus felis placerat augue, id interdum elit lorem at orci. Duis dictum lacinia luctus. In varius nunc ac fringilla viverra. Vestibulum iaculis ornare erat, id suscipit lectus maximus et. Nunc vestibulum elit ac libero finibus congue. Morbi pellentesque, arcu et auctor fringilla, tellus leo placerat ante, bibendum elementum ligula ipsum in lacus. Nullam auctor malesuada libero, eu pulvinar purus. In tempus egestas odio non imperdiet. Mauris facilisis nunc auctor velit pretium, vitae aliquam leo vestibulum.</p>
                <h3 id="extra" class="col-12 first">Extra e curiosità</h3>
                <h4 class="col-12">DESIGN / SCENEGGIATURA</h4>
                <p class="col-12">Nulla scelerisque ante leo. Sed commodo purus in augue eleifend tincidunt. Proin ac sagittis dolor, vel mollis orci. Etiam vitae condimentum diam. Donec et ex viverra, dignissim sem vitae, varius massa. Fusce non diam ac dui tincidunt tincidunt. Vestibulum <a href="#">vulputate tempus</a> sem ut rhoncus. Aliquam in dolor in sem rutrum eleifend. Aliquam in faucibus nibh, non porttitor nunc. Vivamus rhoncus massa nulla, vitae semper mi volutpat sit amet. Aenean accumsan euismod bibendum. Nulla facilisi. Pellentesque convallis molestie dui, vitae volutpat risus pretium id. Curabitur odio neque, gravida vitae tincidunt non, vehicula a neque.</p>
                <figure class="col-4 center lightbox"><a href="https://proxy.duckduckgo.com/iu/?u=https%3A%2F%2Fpbs.twimg.com%2Fmedia%2FCWjHNz8W4AE9eES.png&f=1"><img src="img/small.jpg" srcset="img/small.jpg 250w, img/medium.jpg 500w, img/large.jpg 750w, img/extra-large.jpg 1000w" sizes="(min-width: 60em) 15vw, (min-width: 45em) 19vw, 70vw" title="" alt="" class="col-12 no-margin"><figcaption>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec elementum feugiat nunc eu euismod. Duis lacus sapien, placerat quis turpis nec, varius fringilla dolor. Cras feugiat ac orci vitae volutpat. Nullam enim elit, sollicitudin elementum purus at, eleifend lacinia enim.</figcaption></a></figure>
                <p class="col-8">Nulla scelerisque ante leo. Sed commodo purus in augue eleifend tincidunt. Proin ac sagittis dolor, vel mollis orci. Etiam vitae condimentum diam. Donec et ex viverra, dignissim sem vitae, varius massa. Fusce non diam ac dui tincidunt tincidunt. Vestibulum vulputate tempus sem ut rhoncus. Aliquam in dolor in sem rutrum eleifend.</p>
                <p class="col-12">Duis tristique, ex vel condimentum laoreet, dui felis blandit ex, vel consequat felis ipsum ac dui. Curabitur ac faucibus massa. Nunc sagittis enim mi, quis lobortis felis dapibus ac. Morbi sit amet pharetra arcu. Etiam viverra interdum ligula, a aliquam eros iaculis vitae. Ut non quam mi. Integer purus ligula, finibus ut elementum vitae, lobortis eget ipsum. Proin a euismod nunc. </p>
                <p class="col-12">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed fringilla nunc eu blandit fermentum. Pellentesque porta, est et tincidunt bibendum, tortor urna tincidunt purus, sed rhoncus tellus ex molestie lorem. In in convallis sem. Interdum et malesuada fames ac ante ipsum primis in faucibus. Proin facilisis, turpis ac rutrum bibendum, risus felis placerat augue, id interdum elit lorem at orci. Duis dictum lacinia luctus. In varius nunc ac fringilla viverra. Vestibulum iaculis ornare erat, id suscipit lectus maximus et. Nunc vestibulum elit ac libero finibus congue. Morbi pellentesque, arcu et auctor fringilla, tellus leo placerat ante, bibendum elementum ligula ipsum in lacus. Nullam auctor malesuada libero, eu pulvinar purus. In tempus egestas odio non imperdiet. Mauris facilisis nunc auctor velit pretium, vitae aliquam leo vestibulum.</p>
            </article>
            <script>
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
            </script>
<?php require_once('footer.php'); ?>
