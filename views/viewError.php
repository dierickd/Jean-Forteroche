<?php $this->_t = "Erreur"; ?>
<div class="jumbotron error">
	<div class="container text-center">
		<h1>Oups !!</h1>
		<img src="<?= URL.'public\img\error.png' ?>" alt="Icon error">
		<p><i>Erreur :<?= $errorMsg ?></i></p>
		<a href="<?= URL.'home' ?>">Retour</a>
	</div>
</div>