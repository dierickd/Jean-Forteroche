<div class="page-header">
	<div class="container">
		<h1>Editer mon profil</h1>
	</div>
</div>

<div class="container">
	<form class="form-chapter" action="<?=URL . "?auteur/save/" . $about[0]->idJf?>" method="post">
		<div class="title-admin">
			<h3><b>Titre</b></h3>
			<h4>
				<input type="text" id="title" name="title" required="required" value="<?=$about[0]->titleJf?> ">
			</h4>
		</div>
		<div class="textarea">
			<h3><b>Contenu</b></h3>
			<textarea class="tinymce" name="content" required="required">
				<p><?=$about[0]->contentJf?></p>
			</textarea>
		</div>
		<button type="submit" class="btn-save btn btn-success">Sauvegarder</button>
	</form>
</div>
