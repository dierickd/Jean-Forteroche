<?php foreach($episode as $Ep) { ?>
<?php if($Ep->getIdEpisode() == $_GET['id']) { ?>
<?php $this->_t = $Ep->getTitleEpisode()." - Jean Forteroche"; ?>
<<<<<<< HEAD
<div class="header">
	
</div>
=======
>>>>>>> 2716fb16f114a8c824cd86c9e435ced24bfde9b1
<div class="container">
	<div class="header-episode">
		<p><?= $Ep->getTitleEpisode() ?></p>
	</div>
	<div class="body-episode">
		<p><?= $Ep->getContentEpisode() ?></p>
	</div>
	<div class="footer-episode">
		<p><?= $Ep->getAuthorEpisode() ?></p>
	</div>
</div>
<<<<<<< HEAD
<?php break; 
} ?>
=======
<?php break; } ?>
>>>>>>> 2716fb16f114a8c824cd86c9e435ced24bfde9b1
<?php } ?>

<div class="container">
	<div class="header-episode">
		<p>Laisser un commentaires</p>
	</div>
	<div class="body-episode">
		<form method="post" action="/action_page.php" class="frm-comment">
			<div class="form">
				<label for="pseudo">Pseudo:</label>
				<input type="text" class="form-control" id="pseudo" required>
			</div>
			<div class="form">
				<label for="comment">commentaire:</label>
				<textarea id="comment" required></textarea>
			</div>
			<hr>
			<button type="submit" class="btn btn-default">Submit</button>
		</form>
	</div>
</div>
<div class="container">
	<div class="header-episode">
		<p>Commentaires</p>
	</div>
	<div class="comment-users">
		<?php
		$countCom = 0;
		foreach($episode as $Cp) {
			if($Cp->getChapId() == $_GET['id']) {
				if(strtolower($Cp->getValCom()) == 'true') {
					$countCom++; ?>
				<div class="comment">
					<div class="head-com">
						<p><span class="glyphicon glyphicon-user"></span><i> Publié par <?= $Cp->getAuthorCom(); ?> le <?= $Cp->getDateCom(); ?></i></p>
						<p><?= $Cp->getContentCom(); ?></p>
					</div>
					<div class="container">
						<form action="<?= URL.'backend/Report.php?id='.$Cp->getIdEpisode().'&idC='.$Cp->getIdCom() ?>" method="post">
							<button class="btn btn-xs btn-danger">signaler <span class="glyphicon glyphicon-bell"></span></button>
						</form>
					</div>
				</div>
			<?php }; } } 
			if($countCom == 0) { ?>
				<div class="comment">
					<p><i>Il n'y a actuellement aucun commentaire !</i></p>
				</div>
			<?php } ?>
	</div>
</div>
