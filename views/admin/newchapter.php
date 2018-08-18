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

	<div class="alert alert-warning">
		<p>Chaque nouveau chapitre sera automatiquement stocké dans les brouillons, vous devrez effectuer la publication manuellement.</p>
	</div>
	<!-- form for update title and chapter -->
	<form class="form-chapter" action="<?=URL . "/chapter/add"?>" method="post">
		<table class="diffuse-add">
			<tbody>
				<tr>
					<td><label for="article" class="article">Numéro d'article</label></td>
					<td><input type="text" id="article" name="article" required="required" placeholder="Numéro d'article"></td>
				</tr>
				<?php
if (isset($_SESSION['article'])) {?>
					<tr class="text-center no-match">
						<td colspan="2">Un chapitre porte déja le numéro <?=$_SESSION['article']?></td>
					</tr>
					<tr class="text-center">
						<td colspan="2"><i><?=$_SESSION['titleChapter']?></i></td>
					</tr>
				<?php }
;
if (isset($_SESSION['error'])) {?>
					<tr class="text-center no-match">
						<td colspan="2">Numéro de chapitre non valide !</td>
					</tr>
				<?php }?>
				<tr>
					<td><label for="artwork" class="article">Ouvrage</label></td>
					<td>
						<div id="chapter-filter" class="form-group">
                <div class="sec-form">
                  <select name="artwork" class="select" id="artwork">
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
				<input type="text" id="title" name="title" required="required" value="<?=isset($_SESSION['title']) ? $_SESSION['title'] : 'Titre'?> ">
			</h4>
		</div>
		<div class="textarea">
			<h3><b>Contenu</b></h3>
			<textarea class="tinymce" name="content" required="required">
				<p><?=isset($_SESSION['content']) ? $_SESSION['content'] : ''?></p>
			</textarea>
		</div>
		<button type="submit" class="btn-save btn btn-success pull-right">Créer</button>
	</form>
</div>