<?php $title_for_layout = 'Nouveau Chapitre | Admin'?>


<div class="container">
	<div class="title-home title">
		<h3>Nouveau chapitre</h3>
	</div>
	<p>
		<a href="<?= URL . '?admin/chapters'; ?>"> Retour aux chapitres</a>
	</p>

	<div class="alert alert-warning">
		<p>Chaque nouveau chapitre sera automatiquement stocké dans les brouillons, vous devrez effectuer la publication manuellement.</p>
	</div>
	<!-- form for update title and chapter -->
	<form class="form-chapter" action="<?=URL . "?chapter/add"?>" method="post">

		<?php
		if (isset($_SESSION['article'])) {?>
			<p class="error">
				Un chapitre porte déja le numéro <?=$_SESSION['article']?>
			</p>
			<p>
				<i><?=$_SESSION['titleChapter']?></i>
			</p>
		<?php };
		if (isset($_SESSION['error'])) {?>
			<p class="error">
				Numéro de chapitre non valide !
			</p>
		<?php } ?>
		<div class="chapter-admin">
			<b>Ouvrage(s) </b>
			<select name="artwork" class="select" id="artwork">
                <?php foreach ($library as $l) {?>
                  	<option value="<?=$l->id?>"><?=$l->title?></option>
                <?php }?>
            </select>
		</div>

		<div class="chapter-admin">
			<b>Numéro du chapitre </b>
			<input type="text" id="article" name="article" required="required" value="<?php if(isset($_SESSION['article'])){echo $_SESSION['article']; } ?>" placeholder="Numéro d'article">
		</div>


		<div class="chapter-admin">
			<b>Titre</b>
			<input type="text" id="title" name="title" required="required" value="<?php if(isset($_SESSION['title'])){echo $_SESSION['title']; } ?>" placeholder="Titre" >
		</div>

		<div class="textarea">
			<b>Contenu</b>
			<textarea class="tinymce" name="content" required="required" placeholder="Entrez votre texte ici">
				<p><?php if(isset($_SESSION['content'])){echo $_SESSION['content'];} ?></p>
			</textarea>
		</div>
		<button type="submit" class="btn-save btn btn-success">Créer</button>
	</form>
</div>
<?php
unset($_SESSION['titleChapter']);
unset($_SESSION['article']);
unset($_SESSION['title']);
unset($_SESSION['content']);
unset($_SESSION['error']);
unset($_SESSION['article']);
?>
