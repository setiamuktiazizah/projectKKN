	<?php if (@$_SESSION['logged'] == true) : ?>

	  <div class="callout callout-info">
	    <h4>Selamat datang <?= $_SESSION['name'] ?></h4>

	    <p>Sistem Pendukung Keputusan Projet KKN dengan Metode Fuzzy AHP</p>
	  </div>
	<?php else : ?>

	  <div class="callout callout-info">
	    <h4>SPK Project KKN</h4>

	    <p>Sistem Pendukung Keputusan dengan Metode Fuzzy AHP</p>
	  </div>
	<?php endif; ?>