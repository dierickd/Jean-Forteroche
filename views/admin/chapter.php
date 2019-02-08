<?php $title_for_layout = $chapter->titleChapter . ' | Admin'?>




<div class="main-home">
	<div class="title-home title">
		<h3><?=$chapter->titleChapter?></h3>
	</div>
	<div class="action chapter">
		<?php if (intval($chapter->online) === 0) {?>
			<p>
				<i <?= 'class="fas fa-circle offline"'?> ></i>
				Votre article n'est actuellement pas diffusé
			</p>
			<p>
				<a href="<?=URL . '?chapter/publish/' . $chapter->id?>"  title="Publier">
					<i class="fas fa-file-alt"></i> Publier
				</a>
			</p>
		<?php } elseif (intval($chapter->online) === 1) {?>
			<p>
				<i <?= 'class="fas fa-circle online"'?> ></i>
				Votre article est actuellement en ligne
			</p>
			<p>
				<a href="<?=URL . '?chapter/draft/' . $chapter->id?>" title="Déplacer vers les brouillons">
					<i class="fas fa-file-alt"></i> Déplacer vers les brouillons
				</a>
			</p>
		<?php }?>
			<p>
				<a href="<?=URL . '?chapter/delete/' . $chapter->id?>" onclick="return sure();">
					<i class="fas fa-trash-alt"></i> Supprimer l'article
				</a>
			</p>

		<?php if (intval($chapter->online) === 1) {?>
			<p>
				<a href="<?=URL . '?pages/chapter/' . $chapter->id?>">
					<i class="fas fa-eye"></i> Visualiser
				</a> dans son context
			</p>
		<?php }?>
	</div>

	<!-- form for update title and chapter -->
	<form class="form-chapter" action="<?=URL . "?chapter/save/" . $chapter->id?>" method="post">
		<div class="chapter-admin">
			<b>Numéro du chapitre </b>
			<input type="text" id="article" name="article" required="required" placeholder="Numéro d'article" value="<?=$chapter->nbArt?> ">
		</div>
		<div class="chapter-admin">
			<b>Titre</b>
			<input type="text" id="title" name="title" value="<?=!empty($chapter->titleChapter) ? $chapter->titleChapter : ""?>" required="required" placeholder="titre">
		</div>
		<div class="textarea">
			<b>Contenu</b>
			<textarea class="tinymce" name="content" required="required">
				<p><?=$chapter->contentChapter?></p>
			</textarea>
		</div>
		<button type="submit" class="btn-save btn btn-success">Sauvegarder</button>
	</form>
</div>

