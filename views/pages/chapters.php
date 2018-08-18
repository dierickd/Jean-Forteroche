<?php $title_for_layout = 'Liste des chapitres | Jean Forteroche'?>

<div class="jumbotron">
	<div class="container">
		<?php
$nb = 0;
for ($i = 0; $i < count($chapter); $i++) {
	if (intval($chapter[$i]->online) === 1) {
		$nb++;
	}
}?>
		<h3><?=$nb?> chapitres sont disponibles</h3>
	</div>
</div>

<div class="container">

<?php
$title_for_layout = 'Chapitres | Jean-Forteroche';
for ($i = 0; $i < count($chapter); $i++) {
	if (intval($chapter[$i]->online) === 1) {?>
		<div class="pageAllChapter">
			<h3><?=$chapter[$i]->titleChapter?></h3>
			<h4><i>Chapitre <?=$chapter[$i]->nbArt;?></i></h4>
			<p><i>Publié le <?=$chapter[$i]->date?></i></p>
			<p class="text-justify"><?=substr($chapter[$i]->contentChapter, 0, 450) . ' (...)';?></p>
			<a href=" <?=URL . '/pages/chapter/' . $chapter[$i]->id?> ">Lire la suite &rarr;</a>
		</div>
	<?php }
}?>
</div>