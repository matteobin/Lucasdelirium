<?php
    function sanitizeOutput($buffer) {
        return preg_replace(array('/\>[^\S ]+/s', '/[^\S ]+\</s', '/(\s)+/s', '/<!--(.|\s)*?-->/'), array('>', '<', '\\1', ''), $buffer);
    }
    ob_start("sanitizeOutput");
?>
<!DOCTYPE html>
<html lang="it-IT">
    <head>
        <link id="style-link" rel="stylesheet" href="css/style.min.css">
        <?php if (isset($previousArticle, $nextArticle)): ?>
            <link rel="prev" href="<?php echo $previousArticle; ?>">
            <link rel="next" href="<?php echo $nextArticle; ?>">
        <?php endif; ?>
        <meta charset="utf-8">
        <meta name="author" content="Domenico Misciagna">
        <meta name="description" content="<?php echo $description; ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title><?php echo $title; ?></title>
        <!-- favicon starts -->
        <link rel="apple-touch-icon" sizes="180x180" href="apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="192x192" href="android-chrome-192x192.png">
        <link rel="icon" type="image/png" sizes="16x16" href="favicon-16x16.png">
        <link rel="manifest" href="site.webmanifest">
        <link rel="mask-icon" href="safari-pinned-tab.svg" color="#272d31">
        <meta name="msapplication-TileColor" content="#2b5797">
        <meta name="msapplication-TileImage" content="mstile-144x144.png">
        <meta name="theme-color" content="#ffffff">
        <!-- favicon ends -->
        <style id="style-tag"></style>
    </head>
    <body>
        <a href="#contenuto" class="skip-nav">Vai al contenuto</a>
        <header class="row">
            <div class="container row">
                <a id="header-logo" class="logo" href="#" title="Pagina principale"><img src="img/logo-lucasdelirium.png" alt="Lucasdelirium"></a>
                <nav id="header-nav" aria-labelledby="nav-sito">
                    <h2 id="nav-sito">Navigazione sito</h2>
                    <ul>
                        <li class="first"><a href="#">Home</a></li>
                        <li><a href="#">Menù 1</a></li>
                        <li><a href="#">Menù 2</a></li>
                        <li><a href="#">Menù 3</a></li>
                        <li><a href="#">Menù 4</a></li>
                    </ul>
                    <?php include 'socials-and-contacts.html'; ?>
                </nav>
            </div>
        </header>
        <div id="contenuto" class="container row">
