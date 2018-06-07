<?php $this->_t = "A propos"; 

foreach ($about as $about) { ?>
<div class="container">
	<div class="about">
		<div class="row text-center">
			<caption class="col-md-12">
				<img src="<?= URL.'public/img/jf.jpg' ?>" alt="Jean-Forteroche">
			</caption>
		</div>
		<div class="row">
			<div class="col-lg-offset-1 col-lg-9 col-md-12 col-sm-12 col-xs-12">
				<h1><?= $about->getTitle() ?></h1>
				<p><?= $about->getContent() ?></p>
			</div>
		</div>
	</div>
</div>
<?php } ?>