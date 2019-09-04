        </div>
        <footer class="row">
            <div class="container row no-margin disclaimer">
                <h1 class="col-12 title">DISCLAIMER:</h1>
                <p class="col-12 small-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent eu ipsum sit amet orci sagittis iaculis nec quis tortor. Phasellus non efficitur purus, et laoreet nulla. Sed vestibulum sit amet magna eu aliquet. Sed bibendum, nisl et tincidunt pharetra, nisl nisl consequat sem, at pulvinar metus magna non libero.</p>
            </div>
            <div class="container row">
			    <?php include 'socials-and-contacts.php'; ?>	
                <p class="col-12 center">Lucasdelirium è a cura di Domenico "Diduz" Misciagna. <a href="credits.php">Credits aggiuntivi</a></p>
            </div>
        </footer>
        <script>
            document.getElementById('style').insertAdjacentHTML('beforeend', "<?php echo(file_get_contents('css/js-style.min.css')); ?>");
            function checkWindowWidthToAddHeaderBanner() {
                if (window.innerWidth>=720 && document.querySelector('header .banner')==null) {
                    window.removeEventListener('resize', checkWindowWidthToAddHeaderBanner);
                    document.querySelector('header').insertAdjacentHTML('afterbegin', '<div class="banner row"><figure class="first-figure no-margin"><img src="http://pizzahousenl.ca/wp-content/uploads/2016/04/pizza_trad_pepperoni.png" class="col-12 full-width-no-margin"></figure><h1 class="no-margin logo"><a href="#" class="col-12 full-width-no-margin"><img src="img/logo-lucasdelirium.png" alt="Lucasdelirium" class="full-width-no-margin"></a></h1><figure class="no-margin"><img src="http://pizzahousenl.ca/wp-content/uploads/2016/04/pizza_trad_pepperoni.png" class="col-12 full-width-no-margin"></figure></div>');
                }
            }
            window.addEventListener('resize', checkWindowWidthToAddHeaderBanner);
            checkWindowWidthToAddHeaderBanner();
        </script>
	</body>
</html>
