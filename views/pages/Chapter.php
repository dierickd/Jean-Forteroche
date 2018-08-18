
<?php $title_for_layout = $chapter->titleChapter . ' | Jean Forteroche';?>

<div class="container">
	<h3><?=$chapter->titleChapter;?></h3>
	<h4><i>Chapitre <?=$chapter->nbArt;?></i></h4>
	<p><a href=" <?=URL . '/pages/chapters'?> ">&larr; Retour aux chapitres</a></p>
</div>
<div class="container">
	<div class="chapter">
		<?=$chapter->contentChapter?>
	</div>
</div>
<div class="container">
	<h3>Commentaires</h3>
		<?php
foreach ($comment as $k) {
	if ($k->chapter_id == $chapter->id AND $k->validate == 1) {?>
		<div id="<?=$k->idCom?>" class="comment">
			<h4><?=$k->authorCom?> </h4>
			<p><i><?=$k->date?></i></p>
			<p><?=$k->contentCom?></p>
			<a href="<?=URL . '/comment/notify/' . $k->idCom?>">signaler</a>
		</div>
	<?php }
}?>
</div>

<div class="container">
	<form class="form-comment col-md-8" method="post" action="<?=URL . '/comment/post/' . $chapter->id?> ">
		<div class="form-group">
			<label for="pseudo">Pseudo</label>
			<input type="text" class="form-control" id="pseudo" name="pseudo" required="require" placeholder="pseudo">
		</div>
		<div class="form-group">
			<label for="comment">Commentaire</label>
			<textarea class="form-control" id="comment" name="comment" required="require" placeholder="Votre commentaire"></textarea>
		</div>
		<div>
			<button type="submit" class="btn btn-success">Soumettre</button>
		</div>
		<?php if (isset($_SESSION['error'])) {?>
			<p class="no-match text-center">Login et/ou mot de passe incorrect !</p>
		<?php }?>
	</form>
</div>