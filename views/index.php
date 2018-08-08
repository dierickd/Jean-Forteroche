<?php $title_for_layout = 'Chapitres | Jean-Forteroche';?>


<div class="jumbotron text-center">
	<h3>Dernières publications</h3>
</div>

<div class="container">
	<?php

for ($i = 0; $i < count($chapter); $i++) {
	if (intval($chapter[$i]->online) === 1) {?>
		<div class="pageAllChapter">
			<h3><?=$chapter[$i]->titleChapter?></h3>
			<h4><i>Chapitre <?=$chapter[$i]->nbArt;?></i></h4>
			<p class="text-justify"><?=substr($chapter[$i]->contentChapter, 0, 450) . ' (...)';?></p>
			<p><a href=" <?=URL . '/pages/chapter/' . $chapter[$i]->id?> ">Lire la suite &rarr;</a></p>
		<?php }?>
		</div>
<?php }?>
<div class="text-center"><a href="<?=URL . '/pages/chapters'?>"> >> Voir plus << </a></div>
</div>