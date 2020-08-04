<?php
    $title = 'Articolo';
    $description = 'Questa è una breve descrizione del contenuto della pagina per i motori di ricerca.';
    $articleBannerImg = 'https://jakesstadiumpizza.com/wp-content/uploads/2015/09/Oven-Combo-1.jpg'; 
    $previousArticle = '#';
    $nextArticle = '#';
    require_once 'head.php';
?>
<article class="col-10 article">
    <h1 class="col-12 center title">Titolo</h1>
    <h2 class="col-12 center subtitle">Sottotitolo</h2>
    <nav id="nav-articolo" class="col-4 no-margin" aria-labelledby="titolo-nav-articolo">
        <h3 id="titolo-nav-articolo">Navigazione articolo</h3>
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
    <p class="col-8 first-paragraph">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent sodales blandit diam, dapibus convallis ante varius quis. Donec ornare faucibus vulputate. Nunc nec leo id sem rhoncus ultricies non eget neque. Nulla luctus mauris quis lacus ullamcorper maximus. Aliquam mattis, diam eu maximus sagittis, ipsum ipsum fermentum est, non cursus sem elit porttitor ante. Nulla facilisi. Aliquam erat volutpat. Nam faucibus pretium turpis ut gravida.</p>
    <h3 id="analisi" class="col-12 first-paragraph-title">Analisi</h3>
    <h4 class="col-12 paragraph-subtitle">DESIGN / SCENEGGIATURA</h4>
    <blockquote class="col-12">Vestibulum vulputate tempus sem ut rhoncus. Aliquam in dolor in sem rutrum eleifend.</blockquote>
    <div class="col-12 no-margin">
        <p class="col-6">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed fringilla nunc eu blandit fermentum. Pellentesque porta, est et tincidunt bibendum, tortor urna tincidunt purus, sed rhoncus tellus ex molestie lorem. In in convallis sem. Interdum et malesuada fames ac ante ipsum primis in faucibus. Proin facilisis, turpis ac rutrum bibendum, risus felis placerat augue, id interdum elit lorem at orci. Duis dictum lacinia luctus. In varius nunc ac fringilla viverra. Vestibulum iaculis ornare erat, id suscipit lectus maximus et. Nunc vestibulum elit ac libero finibus congue. Morbi pellentesque, arcu et auctor fringilla, tellus leo placerat ante, bibendum elementum ligula ipsum in lacus. Nullam auctor malesuada libero, eu pulvinar purus. In tempus egestas odio non imperdiet. Mauris facilisis nunc auctor velit pretium, vitae aliquam leo vestibulum.</p>
        <div class="col-6">
            <blockquote class="twitter-tweet"><p lang="en" dir="ltr">Here is a talk I gave internally at the end of 2015 around &quot;antifragile&quot; idea generation, along with examples of my thought process. Thanks <a href="https://twitter.com/boztank?ref_src=twsrc%5Etfw">@boztank</a> for getting this cleared for public release! <a href="https://t.co/EdkacQ3MrS">https://t.co/EdkacQ3MrS</a></p>&mdash; John Carmack (@ID_AA_Carmack) <a href="https://twitter.com/ID_AA_Carmack/status/1232052215684177924?ref_src=twsrc%5Etfw">February 24, 2020</a></blockquote> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
        </div>
    </div>
    <p class="col-6">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed fringilla nunc eu blandit fermentum. Pellentesque porta, est et tincidunt bibendum, tortor urna tincidunt purus, sed rhoncus tellus ex molestie lorem. In in convallis sem. Interdum et malesuada fames ac ante ipsum primis in faucibus. Proin facilisis, turpis ac rutrum bibendum, risus felis placerat augue, id interdum elit lorem at orci. Duis dictum lacinia luctus. In varius nunc ac fringilla viverra. Vestibulum iaculis ornare erat, id suscipit lectus maximus et. Nunc vestibulum elit ac libero finibus congue. Morbi pellentesque, arcu et auctor fringilla, tellus leo placerat ante, bibendum elementum ligula ipsum in lacus. Nullam auctor malesuada libero, eu pulvinar purus. In tempus egestas odio non imperdiet. Mauris facilisis nunc auctor velit pretium, vitae aliquam leo vestibulum.</p>
    <iframe height="315" src="https://www.youtube-nocookie.com/embed/0rxPZbhuhQ8" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen class="col-6"></iframe>
    <p class="col-12">Nulla scelerisque ante leo. Sed commodo purus in augue eleifend tincidunt. Proin ac sagittis dolor, vel mollis orci. Etiam vitae condimentum diam. Donec et ex viverra, dignissim sem vitae, varius massa. Fusce non diam ac dui tincidunt tincidunt. Vestibulum <a href="#">vulputate tempus</a> sem ut rhoncus. Aliquam in dolor in sem rutrum eleifend. Aliquam in faucibus nibh, non porttitor nunc. Vivamus rhoncus massa nulla, vitae semper mi volutpat sit amet. Aenean accumsan euismod bibendum. Nulla facilisi. Pellentesque convallis molestie dui, vitae volutpat risus pretium id. Curabitur odio neque, gravida vitae tincidunt non, vehicula a neque.</p>
    <figure class="col-4 center lightbox"><a href="http://rascalhouse.com/wp-content/uploads/2016/03/pizza-banner-1024x350.png" class="col-12 full-width-no-margin"><img src="img/small.jpg" srcset="img/small.jpg 250w, img/medium.jpg 500w, img/large.jpg 750w, img/extra-large.jpg 1000w" sizes="(min-width: 60em) 15vw, (min-width: 45em) 19vw, 70vw" title="" alt="" class="col-12 full-width-no-margin"></a><figcaption class="col-12 full-width-no-lateral-margin small-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse sed elit sem.</figcaption></figure>
    <p class="col-8">Nulla scelerisque ante leo. Sed commodo purus in augue eleifend tincidunt. Proin ac sagittis dolor, vel mollis orci. Etiam vitae condimentum diam. Donec et ex viverra, dignissim sem vitae, varius massa. Fusce non diam ac dui tincidunt tincidunt. Vestibulum vulputate tempus sem ut rhoncus. Aliquam in dolor in sem rutrum eleifend.</p>
    <p class="col-12">Duis tristique, ex vel condimentum laoreet, dui felis blandit ex, vel consequat felis ipsum ac dui. Curabitur ac faucibus massa. Nunc sagittis enim mi, quis lobortis felis dapibus ac. Morbi sit amet pharetra arcu. Etiam viverra interdum ligula, a aliquam eros iaculis vitae. Ut non quam mi. Integer purus ligula, finibus ut elementum vitae, lobortis eget ipsum. Proin a euismod nunc. </p>
    <p class="col-12">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed fringilla nunc eu blandit fermentum. Pellentesque porta, est et tincidunt bibendum, tortor urna tincidunt purus, sed rhoncus tellus ex molestie lorem. In in convallis sem. Interdum et malesuada fames ac ante ipsum primis in faucibus. Proin facilisis, turpis ac rutrum bibendum, risus felis placerat augue, id interdum elit lorem at orci. Duis dictum lacinia luctus. In varius nunc ac fringilla viverra. Vestibulum iaculis ornare erat, id suscipit lectus maximus et. Nunc vestibulum elit ac libero finibus congue. Morbi pellentesque, arcu et auctor fringilla, tellus leo placerat ante, bibendum elementum ligula ipsum in lacus. Nullam auctor malesuada libero, eu pulvinar purus. In tempus egestas odio non imperdiet. Mauris facilisis nunc auctor velit pretium, vitae aliquam leo vestibulum.</p>
    <h3 id="credits" class="col-12 paragraph-title">Credits</h3>
    <h4 class="col-12 paragraph-subtitle">DESIGN / SCENEGGIATURA</h4>
    <p class="col-12">Questa è la ricetta per un buon frullato:</p>
    <ul class="col-12">
        <li class="col-12">Banana</li>
        <li class="col-12">Pera</li>
        <li class="col-12">Mela</li>
    </ul>
    <p class="col-12">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed fringilla nunc eu blandit fermentum. Pellentesque porta, est et tincidunt bibendum, tortor urna tincidunt purus, sed rhoncus tellus ex molestie lorem. In in convallis sem. Interdum et malesuada fames ac ante ipsum primis in faucibus. Proin facilisis, turpis ac rutrum bibendum, risus felis placerat augue, id interdum elit lorem at orci. Duis dictum lacinia luctus. In varius nunc ac fringilla viverra. Vestibulum iaculis ornare erat, id suscipit lectus maximus et. Nunc vestibulum elit ac libero finibus congue. Morbi pellentesque, arcu et auctor fringilla, tellus leo placerat ante, bibendum elementum ligula ipsum in lacus. Nullam auctor malesuada libero, eu pulvinar purus. In tempus egestas odio non imperdiet. Mauris facilisis nunc auctor velit pretium, vitae aliquam leo vestibulum.</p>
    <h3 id="edizione" class="col-12 top-spaced-paragraph-title">Edizione</h3>
    <h4 class="col-12 paragraph-subtitle">DESIGN / SCENEGGIATURA</h4>
    <p class="col-12">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed fringilla nunc eu blandit fermentum. Pellentesque porta, est et tincidunt bibendum, tortor urna tincidunt purus, sed rhoncus tellus ex molestie lorem. In in convallis sem. Interdum et malesuada fames ac ante ipsum primis in faucibus. Proin facilisis, turpis ac rutrum bibendum, risus felis placerat augue, id interdum elit lorem at orci. Duis dictum lacinia luctus. In varius nunc ac fringilla viverra. Vestibulum iaculis ornare erat, id suscipit lectus maximus et. Nunc vestibulum elit ac libero finibus congue. Morbi pellentesque, arcu et auctor fringilla, tellus leo placerat ante, bibendum elementum ligula ipsum in lacus. Nullam auctor malesuada libero, eu pulvinar purus. In tempus egestas odio non imperdiet. Mauris facilisis nunc auctor velit pretium, vitae aliquam leo vestibulum.</p>
    <h3 id="extra" class="col-12 paragraph-title">Extra e curiosità</h3>
    <h4 class="col-12 paragraph-subtitle">DESIGN / SCENEGGIATURA</h4>
    <p class="col-12">Nulla scelerisque ante leo. Sed commodo purus in augue eleifend tincidunt. Proin ac sagittis dolor, vel mollis orci. Etiam vitae condimentum diam. Donec et ex viverra, dignissim sem vitae, varius massa. Fusce non diam ac dui tincidunt tincidunt. Vestibulum <a href="#">vulputate tempus</a> sem ut rhoncus. Aliquam in dolor in sem rutrum eleifend. Aliquam in faucibus nibh, non porttitor nunc. Vivamus rhoncus massa nulla, vitae semper mi volutpat sit amet. Aenean accumsan euismod bibendum. Nulla facilisi. Pellentesque convallis molestie dui, vitae volutpat risus pretium id. Curabitur odio neque, gravida vitae tincidunt non, vehicula a neque.</p>
    <figure class="col-4 center lightbox"><a href="https://proxy.duckduckgo.com/iu/?u=https%3A%2F%2Fpbs.twimg.com%2Fmedia%2FCWjHNz8W4AE9eES.png&f=1"><img src="img/small.jpg" srcset="img/small.jpg 250w, img/medium.jpg 500w, img/large.jpg 750w, img/extra-large.jpg 1000w" sizes="(min-width: 60em) 15vw, (min-width: 45em) 19vw, 70vw" title="" alt="" class="col-12 no-margin"></a><figcaption class="small-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec elementum feugiat nunc eu euismod. Duis lacus sapien, placerat quis turpis nec, varius fringilla dolor. Cras feugiat ac orci vitae volutpat. Nullam enim elit, sollicitudin elementum purus at, eleifend lacinia enim.</figcaption></figure>
    <p class="col-8">Nulla scelerisque ante leo. Sed commodo purus in augue eleifend tincidunt. Proin ac sagittis dolor, vel mollis orci. Etiam vitae condimentum diam. Donec et ex viverra, dignissim sem vitae, varius massa. Fusce non diam ac dui tincidunt tincidunt. Vestibulum vulputate tempus sem ut rhoncus. Aliquam in dolor in sem rutrum eleifend.</p>
    <p class="col-12">Duis tristique, ex vel condimentum laoreet, dui felis blandit ex, vel consequat felis ipsum ac dui. Curabitur ac faucibus massa. Nunc sagittis enim mi, quis lobortis felis dapibus ac. Morbi sit amet pharetra arcu. Etiam viverra interdum ligula, a aliquam eros iaculis vitae. Ut non quam mi. Integer purus ligula, finibus ut elementum vitae, lobortis eget ipsum. Proin a euismod nunc. </p>
    <p class="col-12">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed fringilla nunc eu blandit fermentum. Pellentesque porta, est et tincidunt bibendum, tortor urna tincidunt purus, sed rhoncus tellus ex molestie lorem. In in convallis sem. Interdum et malesuada fames ac ante ipsum primis in faucibus. Proin facilisis, turpis ac rutrum bibendum, risus felis placerat augue, id interdum elit lorem at orci. Duis dictum lacinia luctus. In varius nunc ac fringilla viverra. Vestibulum iaculis ornare erat, id suscipit lectus maximus et. Nunc vestibulum elit ac libero finibus congue. Morbi pellentesque, arcu et auctor fringilla, tellus leo placerat ante, bibendum elementum ligula ipsum in lacus. Nullam auctor malesuada libero, eu pulvinar purus. In tempus egestas odio non imperdiet. Mauris facilisis nunc auctor velit pretium, vitae aliquam leo vestibulum.</p>
</article>
<script src="js/generic-article.min.js" defer></script>
<?php 
    if (isset($articleBannerImg, $previousArticle, $nextArticle)) {
        echo '<script>articleBannerImg=\''.$articleBannerImg.'\';previousArticle=\''.$previousArticle.'\';nextArticle=\''.$nextArticle.'\';</script><script src="js/article-banner-and-nav.min.js" defer></script>';
    }
?>
<?php require_once 'footer.php'; ?>
