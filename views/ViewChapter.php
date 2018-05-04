<?php $this->_t = "Liste des chapitres"; ?>

	<div class="header-book">
		<h3>Title book</h3>
	</div>
<div class="container">
<?php 
date_default_timezone_set('Europe/Paris');
setlocale(LC_TIME, 'fr_FR.utf8','fra');

if(count($chapter) > 0) {
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
				<a class="btn btn-default" href="<?= '?action=episode&id='.$chapters->getIdChapter() ?>">Lire la suite</a>
			</div>
		</div>
<?php } } } else { ?>
		<div class="jumbotron">
			<div class="container">
				<p><i>Il n'y a actuellement aucun chapitre publié !</i></p>
			</div>
		</div>
<?php } ?>
	</div>