<?php $this->_t = "Jean-Forteroche"; ?>
<div class="container">
<?php foreach ($books as $book) { ?>
	<div class="col-lg-4 col-md-4 col-xs-6">
		<div class="thumbnail">
			<a href="?action=chapter&id=<?= $book->getId() ?>">
				<h3><?= $book->getTitle() ?></h3>
			</a>
			<p><?= $book->getResume() ?></p>
		</div>
	</div>
<?php } ?>
</div>

