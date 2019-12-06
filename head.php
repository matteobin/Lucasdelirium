<?php
    function sanitizeOutput($buffer) {
        return preg_replace(array('/\>[^\S ]+/s', '/[^\S ]+\</s', '/(\s)+/s', '/<!--(.|\s)*?-->/'), array('>', '<', '\\1', ''), $buffer);
    }
    ob_start("sanitizeOutput");
?>
<!doctype html>
<html lang="it">
	<head>
		<meta charset="utf-8">
		<title><?php echo($title); ?></title>
		<meta name="description" content="<?php echo($description); ?>">
		<meta name="author" content="Domenico Misciagna">
        <?php if (isset($previousArticle) && isset($nextArticle)): ?>
            <link rel="prev" href="<?php echo($previousArticle); ?>">
            <link rel="next" href="<?php echo($nextArticle); ?>">
        <?php 
            endif; 
            echo file_get_contents('favicon.html');
        ?>
        <style id="style">
            <?php echo file_get_contents('css/style.min.css'); ?>
        </style>
        <meta name="viewport" content="width=device-width, initial-scale=1">
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
				<nav class="col-12 full-width-no-margin">
                    <h1 class="logo"><a href="#" class="col-12 full-width-no-margin"><img src="img/logo-lucasdelirium.png" alt="Lucasdelirium" class="full-width-no-margin"></a></h1>
					<ul class="col-12">
						<li><a href="#">Home</a></li>
						<li><a href="#">Menù 1</a></li>
						<li><a href="#">Menù 2</a></li>
						<li><a href="#">Menù 3</a></li>
						<li><a href="#">Menù 4</a></li>
					</ul>
				</nav>
                <?php include 'socials-and-contacts.php'; ?>
			</div>
        </header>
        <div class="container row">
