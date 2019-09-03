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
        <?php endif; ?>
		<meta name="viewport" content="width=device-width, initial-scale=1">
        <style id="style">
            <?php echo file_get_contents('css/style.min.css'); ?>
        </style>
        <?php echo file_get_contents('favicon.html'); ?>
	</head>
	<body>
	    <header class="row">
			<div class="container row">
				<nav class="col-12 full-width-no-margin">
                    <h1 class="logo"><a href="#" class="col-12 full-width-no-margin"><?php echo file_get_contents('img/logo-lucasdelirium.svg'); ?></a></h1>
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
