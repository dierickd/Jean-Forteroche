<?php foreach($episode as $Ep) { ?>
<?php if($Ep->getIdEpisode() == $_GET['id']) { ?>
<?php $this->_t = $Ep->getTitleEpisode()." - Jean Forteroche" ?>
<div class="container">
	<div class="header-episode">
		<p><?= $Ep->getTitleEpisode() ?></p>
	</div>
	<div class="body-episode">
		<p><?= $Ep->getContentEpisode() ?></p>
	</div>
	<?php } ?>
</div>
<?php } ?>

<div class="container">
	<div class="header-episode">
		<p>Laisser un commentaires</p>
	</div>
	<div class="body-episode">
		<form method="post" action="/action_page.php">
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
	<div class="body-episode">
		
	</div>
</div>
