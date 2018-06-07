<?php $this->_t = "Liste des oeuvres | Jean-Forteroche"; ?>

<div class="header-book">
	<h3>Liste des oeuvres <span><?= count($books) ?></span></h3>
</div>

<div class="container">
	<?php foreach ($books as $library) { ?>
		<div class="book row">
			<div class="info-left col-lg-2 col-md-2 col-xs-4">
				<img src="" alt="photo">
			</div>
			<div class="info-right col-lg-10 col-md-10 col-xs-8">
				<div class="detail col-lg-12 col-md-12 col-xs-12">
					<h3><?= $library->getTitle() ?></h3>
					<p><?= $library->getResume() ?></p>
				</div>
				<div class="info-bottom">
					<a href="<?= URL.'livre/'.$library->getId() ?>"><i>Voir le livre</i></a>
				</div>
			</div>
		</div>
	<?php } ?>
</div>