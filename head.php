<?php
    function sanitize_output($buffer) {
        $search = array(
            '/\>[^\S ]+/s',
            '/[^\S ]+\</s',
            '/(\s)+/s',
            '/<!--(.|\s)*?-->/'
        );
        $replace = array(
            '>',
            '<',
            '\\1',
            ''
        );
        $buffer = preg_replace($search, $replace, $buffer);
        return $buffer;
    }
    ob_start("sanitize_output");
?>
<!doctype html>
<html lang="it">
	<head>
		<meta charset="utf-8">
		<title>Lucasdelirium | <?php echo($title); ?></title>
		<meta name="description" content="<?php echo($description); ?>">
		<meta name="author" content="Matteo Bini">
        <meta name="robots" content="noindex, nofollow">
		<meta name="viewport" content="width=device-width, initial-scale=1">
        <style id="style">
            <?php echo(file_get_contents('css/style.min.css')); ?>
        </style>
	</head>
	<body>
	    <header class="row">
			<div class="container row">
				<nav class="col-12 no-margin">
					<h1><img src="https://images.ecosia.org/-JaM4_bmF9sLn_ASqpS0dB-Mv4c=/0x390/smart/https%3A%2F%2Fwww.tortealcioccolato.com%2Fwp-content%2Fuploads%2F2012%2F03%2F141119204.jpg" alt="Lucasdelirium" class="col-12 no-margin"></h1>
					<ul class="col-12">
						<li><a href="#">Home</a></li>
						<li><a href="#">Menù 1</a></li>
						<li><a href="#">Menù 2</a></li>
						<li><a href="#">Menù 3</a></li>
						<li><a href="#">Menù 4</a></li>
					</ul>
				</nav>
				<ul class="social">
					<li><a href="#"><svg viewBox="0 0 50 50" xmlns="http://www.w3.org/2000/svg">Facebook<path d="m25 0a25 25 0 0 0-25 25 25 25 0 0 0 25 25 25 25 0 0 0 25-25 25 25 0 0 0-25-25zm3.6 10c2 0 3.6 0.1 4.1 0.2v4.8h-2.8c-2.2 0-2.6 1.1-2.6 2.6v3.7h5l-0.7 5.3h-4.3v13.4h-5.5v-13.4h-4.5v-5.3h4.5v-4.2c0-4.6 2.8-7 6.9-7z" fill="#dad4ca"/></svg></a></li>
					<li><a href="#"><svg viewBox="0 0 50 50" xmlns="http://www.w3.org/2000/svg">Twitter<path d="m25 0a25 25 0 0 0-25 25 25 25 0 0 0 25 25 25 25 0 0 0 25-25 25 25 0 0 0-25-25zm5.8 12.8c1.8 0 3.4 0.7 4.5 1.9 1.4-0.3 2.7-0.8 3.9-1.5-0.5 1.4-1.4 2.6-2.7 3.4 1.2-0.1 2.4-0.5 3.5-1-0.8 1.2-1.9 2.3-3.1 3.2 0 0.3 0 0.5 0 0.8 0 8.1-6.2 17.5-17.5 17.5-3.5 0-6.7-1-9.4-2.8 0.5 0.1 1 0.1 1.5 0.1 2.9 0 5.5-1 7.6-2.6-2.7-0.1-5-1.8-5.7-4.3 0.4 0.1 0.8 0.1 1.2 0.1 0.6 0 1.1-0.1 1.6-0.2-2.8-0.6-4.9-3-4.9-6v-0.1c0.8 0.5 1.8 0.7 2.8 0.8-1.7-1.1-2.7-3-2.7-5.1 0-1.1 0.3-2.2 0.8-3.1 3 3.7 7.6 6.2 12.7 6.4-0.1-0.5-0.2-0.9-0.2-1.4 0-3.4 2.7-6.1 6.2-6.1z" fill="#dad4ca"/></svg></a></li>
					<li><a href="#"><svg viewBox="0 0 50 50" xmlns="http://www.w3.org/2000/svg">RSS<path d="m25 0a25 25 0 0 0-25 25 25 25 0 0 0 25 25 25 25 0 0 0 25-25 25 25 0 0 0-25-25zm-11.6 12.5c13.1 0.5 23.6 11 24.1 24.1 0 0.5-0.4 0.9-0.9 0.9h-2.7c-0.5 0-0.9-0.4-0.9-0.9-0.4-10.7-9-19.2-19.7-19.7-0.5 0-0.9-0.4-0.9-0.9v-2.7c0-0.5 0.4-0.9 0.9-0.9zm0 8.1c8.6 0.5 15.5 7.4 16 16 0 0.5-0.4 0.9-0.9 0.9h-2.7c-0.5 0-0.9-0.4-0.9-0.8-0.4-6.2-5.4-11.2-11.7-11.7-0.5 0-0.8-0.4-0.8-0.9v-2.7c0-0.5 0.4-0.9 0.9-0.9zm2.6 9.8c2 0 3.6 1.6 3.6 3.6 0 2-1.6 3.6-3.6 3.6s-3.6-1.6-3.6-3.6c0-2 1.6-3.6 3.6-3.6z" fill="#dad4ca"/></svg></a></li>
					<li><a href="#"><svg viewBox="0 0 50 50" xmlns="http://www.w3.org/2000/svg">Email<path d="m25 0a25 25 0 0 0-25 25 25 25 0 0 0 25 25 25 25 0 0 0 25-25 25 25 0 0 0-25-25zm-12.2 13.8h24.4c1.6 0 2.8 1.3 2.8 2.8v16.9c0 1.6-1.3 2.8-2.8 2.8h-24.4c-1.5 0-2.8-1.3-2.8-2.8v-16.9c0-1.5 1.3-2.8 2.8-2.8zm0 2.8v2.4c1.3 1.1 3.4 2.7 7.9 6.2 1 0.8 2.9 2.6 4.3 2.6 1.4 0 3.3-1.8 4.3-2.6 4.5-3.5 6.6-5.2 7.9-6.2v-2.4h-24.4zm0 6v10.9h24.4v-10.9c-1.3 1.1-3.2 2.6-6.1 4.8-1.3 1-3.5 3.2-6 3.2-2.5 0-4.8-2.2-6-3.2-2.9-2.3-4.8-3.8-6.1-4.8z" fill="#dad4ca"/></svg></a></li>
				</ul>
			</div>
        </header>
        <div class="container row">
