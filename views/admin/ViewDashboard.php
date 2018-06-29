<?php $this->_t = "Administration";?>

<div class="container">
	<div class="col-md-6 col-lg-6">
		<a href="<?=URL . 'admin/library'?>">
			<div class="card">
				<div class="row">
					<div class="sec-card icon col-lg-6">
						<span class="glyphicon glyphicon-book"></span>
						<p><?=count($adminLibrary)?></p>
					</div>
				</div>
				<div class="row">
					<div class="info-card col-lg-12">
						<p>Livres diffusés</p>
					</div>
				</div>
			</div>
		</a>
	</div>
	<div class="col-md-6 col-lg-6">
		<div class="card">
			<div class="row">
				<div class="sec-card icon col-lg-6">
					<span class="glyphicon glyphicon-ok"></span>
					<p><?=count($adminBook)?></p>
				</div>
			</div>
			<div class="row">
				<div class="info-card col-lg-12">
					<p>Chapitres diffusés</p>
				</div>
			</div>
		</div>
	</div>
	<div class="col-md-6 col-lg-6">
		<div class="card">
			<div class="row">
				<div class="sec-card icon col-lg-6">
					<span class="glyphicon glyphicon-bullhorn"></span>
					<p>#</p>
				</div>
			</div>
			<div class="row">
				<div class="info-card col-lg-12">
					<p>Commentaires signalés</p>
				</div>
			</div>
		</div>
	</div>
	<div class="col-md-6 col-lg-6">
		<div class="card">
			<div class="row">
				<div class="sec-card icon col-lg-6">
					<span class="glyphicon glyphicon-file"></span>
					<?php
$comp = 0;
foreach ($adminBook as $ch) {
	if ($ch->getPublish() == false) {$comp++;}
}?>
					<p><?=$comp?></p>
				</div>
			</div>
			<div class="row">
				<div class="info-card col-lg-12">
					<p>Mes brouillons</p>
				</div>
			</div>
		</div>
	</div>
	<div class="col-md-6 col-lg-6">
		<div class="card">
			<div class="row">
				<div class="sec-card icon col-lg-6">
					<span class="glyphicon glyphicon-comment"></span>
					<p><?=count($adminChapter)?></p>
				</div>
			</div>
			<div class="row">
				<div class="info-card col-lg-12">
					<p>total des commentaires</p>
				</div>
			</div>
		</div>
	</div>
	<div class="col-md-6 col-lg-6">
		<div class="card">
			<div class="row">
				<div class="sec-card icon col-lg-6">
					<span class="glyphicon glyphicon-user"></span>
					<p><?=count($adminUser)?></p>
				</div>
			</div>
			<div class="row">
				<div class="info-card col-lg-12">
					<p>Nombre de membres</p>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="panel-admin container">
<?php
/*require VIEW . 'admin' . DS . 'viewAdminLivres.php';
require VIEW . 'admin' . DS . 'ViewAdminChapitre.php';
require VIEW . 'admin' . DS . 'ViewAdminCommentaire.php';
require VIEW . 'admin' . DS . 'ViewAdminBrouillons.php';
require VIEW . 'admin' . DS . 'ViewAdminPerso.php';*/
?>
</div>