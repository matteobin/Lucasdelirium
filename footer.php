        </div>
        <footer class="row">
            <div class="container row no-margin disclaimer">
                <div class="container">
                    <h3 class="col-12 title">DISCLAIMER</h3>
                    <p class="col-12 small-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent eu ipsum sit amet orci sagittis iaculis nec quis tortor. Phasellus non efficitur purus, et laoreet nulla. Sed vestibulum sit amet magna eu aliquet. Sed bibendum, nisl et tincidunt pharetra, nisl nisl consequat sem, at pulvinar metus magna non libero.</p>
                </div>
            </div>
            <div id="contatti-e-riconoscimenti" class="container row center">
                <div class="col-12"><?php include 'socials-and-contacts.html'; ?></div>
                <p class="col-12">Lucasdelirium è a cura di Domenico "Diduz" Misciagna</p>
            </div>
        </footer>
        <script src="/js/main.min.js" defer></script>
    </body>
</html>
<?php
    $html = sanitizeOutput(ob_get_contents());
    $file = fopen('cache/'.pathinfo(filter_input(INPUT_SERVER, 'SCRIPT_FILENAME', FILTER_SANITIZE_STRING), PATHINFO_FILENAME).'.html', 'w');
    fwrite($file, $html);
    fclose($file);
?>
