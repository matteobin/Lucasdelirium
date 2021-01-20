		</div>
		<footer class="row">
			<div class="container row no-margin disclaimer">
				<div class="container">
					<h3 class="col-12 title">DISCLAIMER</h3>
					<p class="col-12 small-text">This site must be considered a "fan site". Lucasdelirium is in no way affiliated to LucasFilm, Disney, Telltale Games, LCG Entertainment, Skunkape Games, Athlon Games, Autumn Moon Entertainment, Crimson Cow, Strategy First, 4Head Studios, Viva Media, Double Fine Productions, Straandlooper Animation, Daedalic Entertainment, IF Games, Vertigo Games, Venture Moon Studios, Terrible Toybox, Sony, Microsoft, Skybound Games, Night School Studio, Campo Santo Productions, AdHoc Studio, Crackpot Entertainment, Creat Studios, Missing Link Games, Hothead Games, Electronic Arts, Electric Eggplant, Kalani Games, Pinhead Games, Ishtar Games, 2 Player Productions, Deck13</p>
				</div>
			</div>
			<div id="contatti-e-riconoscimenti" class="container row center">
				<div class="col-12"><?php include 'socials-and-contacts.html'; ?></div>
				<p class="col-12">Lucasdelirium è a cura di <b>Domenico "Diduz" Misciagna</b></p>
			</div>
		</footer>
		<script src="js/main.min.js" defer></script>
	</body>
</html>
<?php
	$html = sanitizeOutput(ob_get_contents());
	if (!is_dir('cache')) {
		mkdir('cache', 0755);
	}
	$file = fopen('cache/'.basename(filter_input(INPUT_SERVER, 'SCRIPT_FILENAME', FILTER_SANITIZE_STRING)).'.html', 'w');
	fwrite($file, $html);
	fclose($file);
?>
