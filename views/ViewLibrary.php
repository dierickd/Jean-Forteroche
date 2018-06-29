<?php $this->_t = "Liste des oeuvres | Jean-Forteroche";?>

<div class="header-book">
	<h3>Liste des chapitres <span><?=count($books)?></span></h3>
</div>

<div class="container">
	<?php foreach ($books as $library) {?>
		<div class="book row">
			<div class="info-right col-lg-12 col-md-12 col-xs-12">
				<div class="detail col-lg-12 col-md-12 col-xs-12">
					<h3><?=$library->getTitleChapter()?></h3>
					<h4><i>Chapitre <?=$library->getNbArtChapter()?></i></h4>
					<p><i><?=$library->getAuthorChapter() . ' le ' . $library->getDateChapter()?></i></p>
					<p class="text-justify"><?=substr($library->getContentChapter(), 0, 480) . ' (...)'?></p>
				</div>
				<div class="info-bottom">
					<a href="<?=URL . 'episode/' . $library->getIdChapter()?>"><i>Lire le chapitre</i></a>
				</div>
			</div>
		</div>
	<?php }?>
</div>