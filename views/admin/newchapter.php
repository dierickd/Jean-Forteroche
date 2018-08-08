<?php $title_for_layout = 'Admin | Nouveau Chapitre'?>

<div class="jumbotron">
	<div class="container">
		<h3>Nouveau chapitre</h3>
	</div>
</div>


<div class="container">
	<div class="command">
	</div>
	<p><a href=" <?=URL . '/admin/chapters'?> ">&larr; Retour aux chapitres</a></p>

	<!-- form for update title and chapter -->
	<form class="form-chapter" action="<?=URL . "/chapter/add"?>" method="post">
		<table class="diffuse-new">
			<tbody>
				<tr>
					<td><label for="" class="article">Numéro d'article</label></td>
					<td><input type="text" id="article" name="article" required="required" placeholder="Numéro d'article"></td>
				</tr>
				<tr>
					<td><label for="" class="article">Ouvrage</label></td>
					<td>
						<div id="chapter-filter" class="form-group">
                <div class="sec-form">
                  <select class="select" id="select">
                    <?php foreach ($library as $l) {?>
                      <option value="<?=$l->id?>"><?=$l->title?></option>
                    <?php }?>
                  </select>
                </div>
              </div>
					</td>
				</tr>
			</tbody>
		</table>
		<div class="title-admin">
			<h3><b>Titre</b></h3>
			<h4>
				<input type="text" id="title" name="title" required="required" placeholder="titre">
			</h4>
		</div>
		<div class="textarea">
			<h3><b>Contenu</b></h3>
			<textarea class="tinymce" name="content" required="required">
				<p></p>
			</textarea>
		</div>
		<button type="submit" class="btn-save btn btn-success pull-right">Créer</button>
	</form>
</div>