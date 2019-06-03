        </div>
        <footer class="row">
            <div class="container row no-margin disclaimer">
                <h1 class="col-12">DISCLAIMER:</h1>
                <p class="col-12">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent eu ipsum sit amet orci sagittis iaculis nec quis tortor. Phasellus non efficitur purus, et laoreet nulla. Sed vestibulum sit amet magna eu aliquet. Sed bibendum, nisl et tincidunt pharetra, nisl nisl consequat sem, at pulvinar metus magna non libero.</p>
            </div>
            <div class="container row">
                <ul class="social">
                    <li><a href="#"><img src="img/icona-facebook.svg" alt="Facebook"></a></li>
                    <li><a href="#"><img src="img/icona-twitter.svg" alt="Twitter"></a></li>
                    <li><a href="#"><img src="img/icona-rss.svg" alt="RSS"></a></li>
                    <li><a href="#"><img src="img/icona-email.svg" alt="Email"></a></li>
                </ul>
                <p class="col-12 center">Praesent vehicula sem vel tincidunt condimentum. Donec ultricies metus <a href="#">tristique</a> sapien feugiat hendrerit.</p>
            </div>
        </footer>
        <script>
            jsStyle = document.createElement('link');
            jsStyle.rel = 'stylesheet';
            jsStyle.href = 'css/js-style.css';
            document.head.appendChild(jsStyle);
            delete(jsStyle);
            function checkWindowWidthToAddHeaderBanner() {
                if (window.innerWidth>=720 && document.querySelector('header .banner')==null) {
                    window.removeEventListener('resize', checkWindowWidthToAddHeaderBanner);
                    document.querySelector('header').insertAdjacentHTML('afterbegin', '<div class="row no-margin banner"><figure class="no-margin first"><img src="http://pizzahousenl.ca/wp-content/uploads/2016/04/pizza_trad_pepperoni.png" class="col-12 no-margin"></figure><h1 class="no-margin"><img src="https://images.ecosia.org/-JaM4_bmF9sLn_ASqpS0dB-Mv4c=/0x390/smart/https%3A%2F%2Fwww.tortealcioccolato.com%2Fwp-content%2Fuploads%2F2012%2F03%2F141119204.jpg" alt="Lucasdelirium" class="col-12 no-margin"></h1><figure class="no-margin"><img src="http://pizzahousenl.ca/wp-content/uploads/2016/04/pizza_trad_pepperoni.png" class="col-12 no-margin"></figure></div>');
                }
            }
            window.addEventListener('resize', checkWindowWidthToAddHeaderBanner);
            checkWindowWidthToAddHeaderBanner();
        </script>
	</body>
</html>
