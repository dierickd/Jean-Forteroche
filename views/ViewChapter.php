<?php $this->_t = "Liste des chapitres";

foreach ($chapter as $chapters) {
if($chapters->getIdLib() == $_GET['id']) { ?>

	<div class="header-book">
		<h3><?= $chapters->getTitleLib() ?></h3>
	</div>
	<div class="return container">
		<a href="<?= URL.'library' ?>">
			<i class="fa fa-chevron-left fa-1x"></i><i class="fa fa-chevron-left fa-1x"></i> 
			Retour aux oeuvres
		</a>
	</div>
<?php }
break; } ?>


<div class="container">
<?php 
date_default_timezone_set('Europe/Paris');
setlocale(LC_TIME, 'fr_FR.utf8','fra');

foreach ($chapter as $chapters) {
if($chapters->getPublish() == 'true') { ?>
		<div class="header-episode">
			<p><?= $chapters->getTitleChapter() ?></p>
		</div>
		<div class="body-episode">
			<p><?= substr($chapters->getContentChapter(), 0, 480).' (...)'; ?></p>
			<hr/>
			<div class="footer-episode">
				<i><p>Par <?= $chapters->getAuthorChapter() ?> le <?= strftime("%d %B %Y", strtotime($chapters->getDateChapter())) ?></p></i>
				<a class="btn btn-default" href="<?= URL.'episode/'.$chapters->getIdChapter() ?>">Lire la suite</a>
			</div>
		</div>
<?php } } ?>
</div>