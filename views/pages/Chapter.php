
<?php $title_for_layout = $chapter->titleChapter . ' | Jean Forteroche';?>

<div class="main-home">
	<div class="title-home title">
		<h3><?=$chapter->titleChapter;?></h3>
		<p><i>Chapitre <?=$chapter->nbArt;?></i></p>
	</div>
	<div class="info-chapter">
		<p>
			<i class="fas fa-user-edit"></i> <?=$chapter->authorChapter;?>
			<i class="fas fa-calendar-alt"></i> <?=$chapter->date;?>
			<?php
			$nb = 0;
			for ($i = 0; $i < count($comment); $i++) {
				if (intval($comment[$i]->validate) === 1 AND $comment[$i]->chapter_id == $chapter->id) {
					$nb++;
				}
			}?>
			<i class="fas fa-comments"></i><?=$nb?>
		</p>
	</div>
</div>
<article class="article-chapter">
	<?=$chapter->contentChapter?>
</article>
<div class="info-comment">
	<h4>Commentaires</h4>
</div>
	<?php
	foreach ($comment as $k) {
		if ($k->chapter_id == $chapter->id AND $k->validate == 1) {?>
			<div id="<?=$k->idCom?>" class="comment">
				<div class="comment-user">
					<img src="<?=URL.'/public/img/user.jpeg'; ?>" alt="">
					<p><?=$k->authorCom?></p>
				</div>
				<div class="comment-main">
					<div class="comment-content">
						<p><?=$k->contentCom?></p>
					</div>
					<div class="comment-footer">
						<div class="com-footer-l">
							<i class="fas fa-calendar-alt"></i> <?=$k->date?>
						</div>
						<div class="com-footer-r">
							<?php if(isset($_SESSION['auth'])){ ?>
								<a href="<?=URL . '?comment/notify/' . $k->idCom?>"><i class="fas fa-exclamation-triangle" title="Signaler"></i></a>
							<?php }?>
						</div>
					</div>
				</div>
			</div>
		<?php }
	}?>

<!-- formulaire de commentaire -->
<div class="add-comment">
	<?php if(isset($_SESSION['auth'])){ ?>
		<form class="form-comment" method="post" action="<?=URL . '?comment/post/' . $chapter->id?> ">
			<div class="ctrl-text">
				<label for="pseudo">Pseudo</label>
				<input type="text" class="" id="pseudo" name="pseudo" required="require" placeholder="pseudo">
			</div>
			<div class="ctrl-text">
				<label for="comment">Commentaire</label>
				<textarea class="textarea" id="comment" name="comment" required="require" placeholder="Votre commentaire"></textarea>
			</div>
			<div>
				<button type="submit" class="btn-submit">Soumettre</button>
			</div>
		</form>
	<?php } elseif(empty($_SESSION['auth'])){ ?>
		<div class="no-auth">
			<p><i class="fas fa-exclamation-triangle"></i>Vous devez posséder un compte pour ajouter un commentaire</p>
			<a href="<?=URL.'?pages/create'?>">S'inscrire</a>
		</div>
	<?php } ?>
</div>
