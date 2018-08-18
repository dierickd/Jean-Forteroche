
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

				<div class="col-md-12 col-lg-12 col-xs-12 title-admin">
						<h4>Chapitres</h4>
				</div>
				<?php $p = 0;
for ($i = 0; $i < count($chapter); $i++) {
	if (intval($chapter[$i]->online) === 1) {
		$p++;
	}
}?>
				<div class="col-md-12 col-lg-12 col-xs-12 detail-admin">
					<div class="col-md-4 col-lg-4 col-xs-4 icon-admin">
						<p><i class="fas fa-book-open"></i></p>
					</div>

					<div class="col-md-8 col-lg-8 col-xs-8 content-admin">
						<p class="line-all"><i>Total(s): <?=count($chapter)?></i></p>
						<p class="line-on"><i>Online(s): <?=$p?></i></p>
						<p class="line-off"><i>Offline(s): <?=count($chapter) - $p?></i></p>
					</div>
				</div>

			</div>
		</a>
	</div>

	<!-- SECTION comments  -->
<div class="col-lg-4 col-md-6 col-xs-12">
		<a href="<?=URL . '/admin/comment'?>">
			<div class="box">

				<div class="col-md-12 col-lg-12 col-xs-12 title-admin">
						<h4>Commentaires</h4>
				</div>
					<?php $s = 0;
for ($i = 0; $i < count($comment); $i++) {
	if (intval($comment[$i]->validate) === 0) {
		$s++;
	}
}?>
				<div class="col-md-12 col-lg-12 col-xs-12 detail-admin">
					<div class="col-md-4 col-lg-4 col-xs-4 icon-admin">
						<p><i class="fas fa-comments"></i></p>
					</div>

					<div class="col-md-8 col-lg-8 col-xs-8 content-admin">
						<p class="line-all"><i>Total(s): <?=count($comment)?></i></p>
						<p class="line-off"><i>Signalé(s): <?=$s?></i></p>
					</div>
				</div>

			</div>
		</a>
	</div>

	<!-- SECTION about  -->
	<div class="col-lg-4 col-md-6 col-xs-12">
		<a href="<?=URL . '/admin/about'?>">
			<div class="box">

				<div class="col-md-12 col-lg-12 col-xs-12 title-admin">
						<h4>Gérer ma présentation</h4>
				</div>

				<div class="col-md-12 col-lg-12 col-xs-12 detail-admin">
					<div class="col-md-4 col-lg-4 col-xs-4 icon-admin">
						<p><i class="fas fa-user-edit"></i></p>
					</div>

					<div class="col-md-8 col-lg-8 col-xs-8 content-admin">
						<p>Gérer...</p>
					</div>
				</div>

			</div>
		</a>
	</div>



</div>