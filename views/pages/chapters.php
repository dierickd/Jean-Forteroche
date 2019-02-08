<?php $title_for_layout = 'Liste des chapitres | Jean Forteroche'?>

<div class="main-home">
	<div class="title-home title">
	<?php
	$nb = 0;
	for ($i = 0; $i < count($chapter); $i++) {
		if (intval($chapter[$i]->online) === 1) {
			$nb++;
		}
	}?>
		<h3><?=$nb?> chapitres sont disponibles</h3>
	</div>
	<?php
for ($i = 0; $i < count($chapter); $i++) {
	if (intval($chapter[$i]->online) === 1) {?>
		<article class="article">
			<a href=" <?=URL . '?pages/chapter/' . $chapter[$i]->id?> " class="article-link">
				<div class="article-number">
					<p>Chapitre <?=$chapter[$i]->nbArt;?></p>
				</div>
			</a>
			<div class="article-main">
				<div class="article-title">
					<a href=" <?=URL . '?pages/chapter/' . $chapter[$i]->id?> ">
						<h3><?=$chapter[$i]->titleChapter?></h3>
					</a>
				</div>
				<div class="article-content">
					<p><?=substr($chapter[$i]->contentChapter, 0, 300) . '...';?></p>
				</div>
				<div class="article-footer">
					<i class="fas fa-user-edit"></i> <?=$chapter[$i]->authorChapter;?>
					<i class="fas fa-calendar-alt"></i> <?=$chapter[$i]->date;?>
				</div>
			</div>
		</article>
	<?php }
}?>
</div>