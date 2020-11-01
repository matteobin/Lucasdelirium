<?php
    function sanitizeOutput($buffer) {
        return preg_replace(array('/\>[^\S ]+/s', '/[^\S ]+\</s', '/(\s)+/s', '/<!--(.|\s)*?-->/'), array('>', '<', '\\1', ''), $buffer);
    }
    ob_start('sanitizeOutput');
?>
<!DOCTYPE html>
<html lang="it">
    <head>
        <link rel="icon" href="/favicon.ico">
        <link rel="stylesheet" href="/css/style.min.css">
        <?php if (isset($previousArticle, $nextArticle)): ?>
            <link rel="prev" href="<?php echo $previousArticle; ?>">
            <link rel="next" href="<?php echo $nextArticle; ?>">
        <?php endif; ?>
        <meta charset="utf-8">
        <meta name="author" content="Domenico Misciagna">
        <meta name="description" content="<?php echo $description; ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title><?php echo $title; ?></title>
        <style id="style-tag"></style>
    </head>
    <body>
        <a href="#contenuto" class="skip-nav">Vai al contenuto</a>
        <header class="row">
            <div class="container row">
                <a id="header-logo" class="logo" href="/" title="Pagina principale"><img src="/img/logo-lucasdelirium.png" alt="Lucasdelirium"></a>
                <nav id="nav-sito" aria-labelledby="titolo-nav-sito">
                    <h3 id="titolo-nav-sito">Navigazione sito</h3>
                    <ul>
                        <li class="first"><a href="/index.php">News</a></li>
                        <li><a href="/giochi.php">Schede dei giochi</a></li>
                        <li><a href="/lucaspedia.php">Lucaspedia</a></li>
                        <li><a href="/articoli.php">Articoli</a></li>
                        <li><a href="/file.php">File</a></li>
                        <li><a href="/missione.php">Missione</a></li>
                        <li><a href="/link.php">Link</a></li>
                    </ul>
                    <?php include 'socials-and-contacts.html'; ?>
                </nav>
            </div>
        </header>
        <div id="contenuto" class="container row">
