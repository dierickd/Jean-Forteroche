<?php $title_for_layout = $chapter->titleChapter . ' | Admin'?>


<div class="jumbotron <?=intval($chapter->online) === 1 ? 'online-1' : 'offline-1'?> ">
	<div class="container">
		<h3><?=$chapter->titleChapter?></h3>
	</div>
</div>


<div class="container">
	<p><a href=" <?=URL . '/admin/chapters'?> ">&larr; Retour aux chapitres</a></p>
	<div class="command">
		<div class="diffuse">
			<div>
				<?php if (intval($chapter->online) === 0) {?>
					<p>Votre article n'est actuellement pas diffusé</p>
					<a href="<?=URL . '/chapter/publish/' . $chapter->id?>">Diffuser en ligne</a>
				<?php } elseif (intval($chapter->online) === 1) {?>
					<p>Votre article est actuellement en ligne</p>
					<a href="<?=URL . '/chapter/draft/' . $chapter->id?>">Déplacer dans les brouillons</a>
				<?php }?>
			</div>
			<div>
				<p>Je supprime mon article</p>
				<p class="alert alert-danger">
					ATTENTION !! La suppression est irréversible, une fois l'article supprimé, il sera impossible de revenir en arrière !
				</p>
				<a href="<?=URL . '/chapter/delete/' . $chapter->id?>" onclick="return sure();">Supprimer l'article</a>
			</div>
			<?php if (intval($chapter->online) === 1) {?>
				<div>
					<p><a href="<?=URL . '/pages/chapter/' . $chapter->id?>">Visualiser</a> dans son context</p>
				</div>
			<?php }?>
		</div>
	</div>

	<!-- form for update title and chapter -->
	<form class="form-chapter" action="<?=URL . "/chapter/save/" . $chapter->id?>" method="post">
		<div class="command">
			<div class="diffuse">
				<label for="article" class="article">Numéro du chapitre</label><br/>
				<input type="text" id="article" name="article" required="required" placeholder="Numéro d'article" value="<?=$chapter->nbArt?> ">
			</div>
		</div>
		<div class="title-admin">
			<h3><b>Titre</b></h3>
			<h4>
				<input type="text" id="title" name="title" value="<?=!empty($chapter->titleChapter) ? $chapter->titleChapter : ""?>" required="required" placeholder="titre">
			</h4>
		</div>
		<div class="textarea">
			<h3><b>Contenu</b></h3>
			<textarea class="tinymce" name="content" required="required">
				<p><?=$chapter->contentChapter?></p>
			</textarea>
		</div>
		<button type="submit" class="btn-save btn btn-success pull-right">Sauvegarder</button>
	</form>
</div>