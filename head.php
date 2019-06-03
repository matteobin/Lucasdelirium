<!doctype html>
<html lang="it">
	<head>
		<meta charset="utf-8">
		<title>Lucasdelirium | <?php echo($title); ?></title>
		<meta name="description" content="<?php echo($description); ?>">
		<meta name="author" content="Matteo Bini">
        <meta name="robots" content="noindex, nofollow">
		<meta name="viewport" content="width=device-width, initial-scale=1">
        <style>
            html, body {
                height: 100%;
                width: 100%;
                margin: 0;
                padding: 0;
                left: 0;
                top: 0;
                font-size: 100%;
            }
            * {
                color: #DAD4CA;
                line-height: 1.5;
            }
            h1 {
                font-size: 2.5em;
            }
            h2 {
                font-size: 1.15em;
            }
            h3 {
                font-size: 2.4em;
            }
            h4 {
                font-size: 1.2em;
            }
            h5 {
                font-size: 1em;
            }
            h6 {
                font-size: 0.875em;
            }
            p, ul li {
                font-size: 1em;
                font-weight: 200;
                line-height: 1.8;
            }
            .left {
                text-align: left;
            }
            .right {
                text-align: right;
            }
            .center {
                text-align: center;
                margin-left: auto;
                margin-right: auto;
            }
            .justify {
                text-align: justify;
            }
            .container {
            width: 90%;
                   margin-left: auto;
                   margin-right: auto;
            }
            .row {
                position: relative;
                width: 100%;
            }
            .row .col-1, .row .col-2, .row .col-3, .row .col-4, .row .col-5, .row .col-6, .row .col-7, .row .col-8, .row .col-9, .row .col-10, .row .col-11, .row .col-12 {
                float: left;
                margin: 0.5em 2%;
                min-height: 0.125em;
            }
            .no-margin, .row .col-1.no-margin, .row .col-2.no-margin, .row .col-3.no-margin, .row .col-4.no-margin, .row .col-5.no-margin, .row .col-6.no-margin, .row .col-7.no-margin, .row .col-8.no-margin, .row .col-9.no-margin, .row .col-10.no-margin, .row .col-11.no-margin, .row .col-12.no-margin {
                margin: 0;
            }
            .col-12.no-margin {
                width: 100%;
            }
            .col-1,
            .col-2,
            .col-3,
            .col-4,
            .col-5,
            .col-6,
            .col-7,
            .col-8,
            .col-9,
            .col-10,
            .col-11,
            .col-12 {
                width: 96%;
            }
            .col-1-sm {
                width: 4.33%;
            }
            .col-2-sm {
                width: 12.66%;
            }
            .col-3-sm {
                width: 21%;
            }
            .col-4-sm {
                width: 29.33%;
            }
            .col-5-sm {
                width: 37.66%;
            }
            .col-6-sm {
                width: 46%;
            }
            .col-7-sm {
                width: 54.33%;
            }
            .col-8-sm {
                width: 62.66%;
            }
            .col-9-sm {
                width: 71%;
            }
            .col-10-sm {
                width: 79.33%;
            }
            .col-11-sm {
                width: 87.66%;
            }
            .col-12-sm {
                width: 96%;
            }
            .row::after {
                content: "";
                display: table;
                clear: both;
            }
            .hidden-sm {
                display: none;
            }
            a {
                text-decoration: none;
            }
            body {
                background: #0b2c51;
            }
            header {
                background: #406880;
            }
            header.row nav.col-12 h1 {
                float: left;
                width: 85%;
                margin: 0.5em 7.5%;
                text-align: center;
            }
            header nav h1 img {
                font-size: 15px;
            }
            header nav ul, ul.social, article nav ul {
                padding: 0;
                list-style: none;
            }
            header nav ul li {
                margin: 1em;
            }
            header nav ul li, article nav ul li {
                text-align: center;
            }
            header nav ul li a, article nav ul li a {
                padding: 0.5em;
            }
            header nav ul li a, article nav ul li a {
                display: block; 
                font-size: 1.2em;
                font-weight: 100;
            }
            header ul.social, footer .container .social{
                float: right;
                margin-right: calc(50% - 135px);
            }
            ul.social li {
                float: left;
                margin: 2.5px;
                text-align: center;
            }
            ul.social img {
                width: 30px;
            }
            ul.social {
                width: 200px;
            }
            article p a, footer p a {
                color: #669A1A;
            }
            footer {
                margin: 5em 0 1em 0;
            }
            footer.row .container.row.disclaimer {
                width: 100%;
                max-width: 100%;
                background: #32373A;
            }
            footer.row .disclaimer h1 {
                font-size: 1.125em;
                font-weight: normal;
                margin: 2em 2% 0 2%;
            }
            footer.row .disclaimer p {
                margin: 0 2% 2em 2%;
            }
            footer.row p {
                font-size: 0.7em;
            }
            footer .container .social{
                margin-top: 5em;
            }
            @media only screen and (min-width: 33.75em) {
                .container {
                    width: 80%;
                }
            }
            @media only screen and (min-width: 45em) {
                .col-1 {
                    width: 4.33%;
                }
                .col-2 {
                    width: 12.66%;
                }
                .col-3 {
                    width: 21%;
                }
                .col-4 {
                    width: 29.33%;
                }
                .col-5 {
                    width: 37.66%;
                }
                .col-6 {
                    width: 46%;
                }
                .col-7 {
                    width: 54.33%;
                }
                .col-8 {
                    width: 62.66%;
                }
                .col-9 {
                    width: 71%;
                }
                .col-10 {
                    width: 79.33%;
                }
                .col-11 {
                    width: 87.66%;
                }
                .col-12 {
                    width: 96%;
                }
                .hidden-sm {
                    display: block;
                }
                header .container.row {
                    width: 100%;
                    max-width: 80em;
                }
                header.row nav.col-12 {
                    width: 648px;	
                }
                header.row nav.col-12 h1 {
                    width: 100px;
                    margin: 0;
                }
                header.row nav.col-12 ul {
                    float: none;
                    display: table;
                    width: auto;
                }
                header nav.col-12 ul.col-12 {	
                    margin: 31px 0;
                }
                header.row ul.social {	
                    margin: 34px 0 22px 0;
                }
                header nav ul li {
                    display: inline;
                    float: left;
                    margin: 0 1em;
                }
                header ul.social {
                    margin-right: 0;
                    float: right;
                }
                header nav ul li a {
                    padding: 0.25em;
                }
                footer.row p, footer.row p a {
                    font-size: 1em;
                }
            }
            @media only screen and (min-width: 60em) {
                .container {
                    width: 80%;
                    max-width: 65em;
                }
            }
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
					<li><a href="#"><img src="img/icona-facebook.svg" alt="Facebook"></a></li>
					<li><a href="#"><img src="img/icona-twitter.svg" alt="Twitter"></a></li>
					<li><a href="#"><img src="img/icona-rss.svg" alt="RSS"></a></li>
					<li><a href="#"><img src="img/icona-email.svg" alt="Email"></a></li>
				</ul>
			</div>
        </header>
        <div class="container row">
