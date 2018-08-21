<div class="page-header">
	<div class="container">
		<h1>Editer mon profil</h1>
	</div>
</div>

<div class="container">
	<form class="form-chapter" action="<?=URL . "/auteur/save/" . $about[0]->idJf?>" method="post">
		<div class="textarea">
			<h3><b>Contenu</b></h3>
			<textarea class="tinymce" name="content" required="required">
				<p><?=$about[0]->contentJf?></p>
			</textarea>
		</div>
		<button type="submit" class="btn-save btn btn-success pull-right">Sauvegarder</button>
	</form>
</div>
