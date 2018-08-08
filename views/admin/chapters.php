<?php $title_for_layout = 'Admin | Liste des chapitres'?>

<div class="jumbotron">
	<div class="container">
		<h3>Liste de vos chapitres (<?=count($chapter)?>)</h3>
	</div>
</div>

<div class="container overflow">
	<p><a href=" <?=URL . '/admin/home'?> ">&larr; Retour à l'accueil administration</a></p>
	<table class="allChapter">
		<thead>
			<tr>
				<th class="hidden-xs"><i>ID</i></th>
				<th><i>Statut</i></th>
				<th><i>Chapitre</i></th>
				<th><i>Titre</i></th>
				<th><i>Action</i></th>
			</tr>
		</thead>
		<tbody>
	<?php
foreach ($chapter as $k) {
	intval($k->online) === 1 ? $class = 'btn-online' : $class = 'btn-offline'?>
			<tr>
				<td class="hidden-xs"><?=$k->id?></td>
				<td>
					<?php if (intval($k->online) === 1) {?>
						<span class="btn-online"><?=strtoupper('en ligne')?></span>
					<?php } elseif (intval($k->online) === 0) {?>
						<span class="btn-offline"><?=strtoupper('non publie')?></span>
					<?php }?>
				</td>
				<td><?=$k->nbArt?></td>
				<td><?=$k->titleChapter?></td>
				<td><a href=" <?=URL . '/admin/chapter/' . $k->id?> ">Editer</a>&nbsp
				<a href="<?=URL . '/chapter/delete/' . $k->id?>" onclick="return sure();">Supprimer</a></td>
			</tr>
	<?php }?>
		</tbody>
	</table>

	<div class="create">
		<a href="<?=URL . '/admin/newchapter'?>" class="btn-new">Nouveau</a>
	</div>
</div>