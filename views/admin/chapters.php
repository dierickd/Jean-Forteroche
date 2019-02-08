<?php $title_for_layout = 'Admin | Liste des chapitres'?>


<div class="title-home title">
	<h3>Liste de vos chapitres (<?=count($chapter)?>)</h3>
</div>
<table>
	<tbody class="allChapter">
		<?php
		foreach ($chapter as $k) {
		intval($k->online) === 1 ? $class = 'online' : $class = 'offline'?>
		<tr>
			<td class="chapter">
				<i <?= 'class="fas fa-circle '.$class.'"' ?> ></i> 
				<span class="display">Chapitre</span> <?=$k->nbArt?>
			</td>
			<td><?=$k->titleChapter?></td>
			<td class="option">
				<span>
					<a href="<?=URL . '?chapter/delete/' . $k->id?>" onclick="return sure();" title="Supprimer">
						<i class="fas fa-trash-alt"></i>
					</a>
				</span>
				<span>
					<a href=" <?=URL . '?admin/chapter/' . $k->id?> " title="Editer">
						<i class="fas fa-user-edit"></i>
					</a>
				</span>
				<span>
					<?php if (intval($k->online) === 1) {?>
						<a href="<?=URL . '?chapter/draft/' . $k->id?>" title="Déplacer vers les brouillons">
							<i class="fas fa-file-alt"></i>
						</a>
					<?php } elseif (intval($k->online) === 0) {?>
						<a href="<?=URL . '?chapter/publish/' . $k->id?>" title="Publier">
							<i class="fas fa-file-alt"></i>
						</a>
					<?php }?>
				</span>
			</td>
		</tr>
<?php }?>
	</tbody>
</table>

<p>
	<a href="<?=URL . '?admin/newchapter'?>" class="btn-new">Ajouter un chapitre</a>
</p>

