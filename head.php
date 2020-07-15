<?php
    function sanitizeOutput($buffer) {
        return preg_replace(array('/\>[^\S ]+/s', '/[^\S ]+\</s', '/(\s)+/s', '/<!--(.|\s)*?-->/'), array('>', '<', '\\1', ''), $buffer);
    }
    ob_start("sanitizeOutput");
?>
<!DOCTYPE html>
<html lang="it">
    <head>
        <link id="style-link" rel="stylesheet" href="css/style.min.css">
        <?php if (isset($previousArticle, $nextArticle)): ?>
            <link rel="prev" href="<?php echo($previousArticle); ?>">
            <link rel="next" href="<?php echo($nextArticle); ?>">
        <?php endif; ?>
        <meta charset="utf-8">
        <meta name="author" content="Domenico Misciagna">
        <meta name="description" content="<?php echo($description); ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title><?php echo($title); ?></title>
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
        <script>
            /*    
            @licstart  The following is the entire license notice for the 
            JavaScript code in this page.

            Copyright (C) 2014  Loic J. Duros

            The JavaScript code in this page is free software: you can
            redistribute it and/or modify it under the terms of the GNU
            General Public License (GNU GPL) as published by the Free Software
            Foundation, either version 3 of the License, or (at your option)
            any later version.  The code is distributed WITHOUT ANY WARRANTY;
            without even the implied warranty of MERCHANTABILITY or FITNESS
            FOR A PARTICULAR PURPOSE.  See the GNU GPL for more details.

            As additional permission under GNU GPL version 3 section 7, you
            may distribute non-source (e.g., minimized or compacted) forms of
            that code without the copy of the GNU GPL normally required by
            section 4, provided you include this license notice and a URL
            through which recipients can access the Corresponding Source.   


            @licend  The above is the entire license notice
            for the JavaScript code in this page.
            */
        </script>
    </head>
    <body>
        <header class="row">
            <div class="container row">
                <h1 class="logo"><a href="#" class="col-12 full-width-no-margin"><img src="img/logo-lucasdelirium.png" alt="Lucasdelirium" class="full-width-no-margin"></a></h1>
                <nav id="header-nav" class="col-12 full-width-no-margin">
                    <div class="col-12 close-icon-container"><img id="close-mobile-menu-icon" class="close-icon" src="img/icona-chiudi.svg" alt="Chiudi"></div>
                    <ul class="col-12">
                        <li><a href="#">Home</a></li>
                        <li><a href="#">Menù 1</a></li>
                        <li><a href="#">Menù 2</a></li>
                        <li><a href="#">Menù 3</a></li>
                        <li><a href="#">Menù 4</a></li>
                    </ul>
                    <?php include 'socials-and-contacts.html'; ?>
                </nav>
                <div id="open-mobile-menu-icon" class="mobile-menu-icon">
                    <span class="1"></span>
                    <span class="2"></span>
                    <span class="3"></span>
                </div>
            </div>
        </header>
        <div class="container row">
