
<div class="jumbotron">
	<div class="container">
		<h3>Bienvenue sur la page d'administration</h3>
	</div>
</div>
<div class="container">
	<p><a href=" <?=URL?> ">&larr; Retour à l'accueil du site</a></p>

	<!-- SECTION CHAPITRE  -->
	<div class="col-lg-4 col-md-6 col-xs-12">
		<a href="<?=URL . '/admin/chapters'?>">
		<div class="box">
			<?php $p = 0;
for ($i = 0; $i < count($chapter); $i++) {
	if (intval($chapter[$i]->online) === 1) {
		$p++;
	}
}?>
			<h4 class="line-all"><i>Chapitre(s) total(s): </i><?=count($chapter)?></i></h4>
			<h4 class="line-on"><i>Chapitre(s) online(s): </i><?=$p?></i></h4>
			<h4 class="line-off"><i>Chapitre(s) offline(s): </i><?=count($chapter) - $p?></i></h4>
			</a>
		</div>
	</div>

	<!-- SECTION COMMENTAIRE  -->
	<div class="col-lg-4 col-md-6 col-xs-12">
		<a href="<?=URL . '/admin/comment'?>">
		<div class="box">
			<?php $s = 0;
for ($i = 0; $i < count($comment); $i++) {
	if (intval($comment[$i]->validate) === 0) {
		$s++;
	}
}?>
			<h4 class="line-all"><i>Commentaire(s) total(s): </i><?=count($comment)?></i></h4>
			<h4 class="line-off"><i>Commentaire(s) signalé(s): </i><?=$s?></i></h4>
			</a>
		</div>
	</div>
</div>