<?php $this->_t = "Jean-Forteroche";?>

<div class="container">
	<div class="row">
		<div class="col-lg-12 col-ms-12 col-xs-12">
			<div class="row">
				<div class="col-lg-12 col-md-12 col-xs-12 text-center">
					<h1>Derniers chapitres</h1>
				</div>
			</div>
			<article class="col-lg-12 col-md-12 col-xs-12">
				<div class="row">
					<?php
foreach ($books as $book) {?>
						<div class="col-lg-12 col-md-12 col-xs-12">
							<div class="book">
								<a href="episode/<?=$book->getIdChapter()?>">
									<h4><?=$book->getTitleChapter()?> - chapitre <?=$book->getNbArtChapter()?></h4>
								</a>
								<p class="text-justify"><?=substr($book->getContentChapter(), 0, 480) . ' (...)';?></p>
							</div>
						</div>
					<?php }?>
				</div>
				<div class="aside-footer col-lg-12 text-center">
					<i><a href="<?=URL . 'library'?>">Voir tous</a></i>
				</div>
			</article>
		</div>
	</div>
</div>