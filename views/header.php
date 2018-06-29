<header>
	<nav id="nav" class="navbar navbar-default navbar-fixed-top">
		<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="<?=URL . 'home'?>"><span id="JF">Jean FORTEROCHE</span></a>
			</div>
			<div class="collapse navbar-collapse">
				<ul class="nav navbar-nav">
					<li><a href="<?=URL . 'home'?>">Accueil</a></li>
					<li><a href="<?=URL . 'about'?>">L'auteur</a></li>
					<li><a href="<?=URL . 'library'?>">Chapitres</a></li>
					<li><a href="<?=URL . 'admin'?>">Administration</a></li>
				</ul>
			</div>
		</div>
	</nav>
	<?php if (!isset($_GET['layout'])) {?>
		<div class="cover-header header-bottom text-center">
			<h2>Jean forteroche</h2>
		</div>
	<?php } else {?>
	<div class="cover-admin header-bottom text-center">
			<h2>Administration</h2>
		</div>
	<?php }?>
</header>

