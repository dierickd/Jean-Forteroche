<header>
	<nav id="nav" class="navbar navbar-default navbar-top">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="<?=URL?>"><span id="JF">Jean FORTEROCHE</span></a>
			</div>
			<div class="collapse navbar-collapse">
				<ul class="nav navbar-nav">
					<li><a href="<?=URL?>">Accueil</a></li>
					<li><a href="<?=URL . '/auteur/about'?>">L'auteur</a></li>
					<li><a href="<?=URL . '/pages/chapters'?>">Chapitres</a></li>
				</ul>
				<ul class="nav navbar-nav navbar-right">
				<?php if (isset($_SESSION['admin']) OR isset($_COOKIE['admin'])) {?>
					<li><a href="<?=URL . '/admin/home'?>">Administration</a></li>
					<li><a href="<?=URL . '/admin/chapters'?>">Chapitres</a></li>
					<li><a href="<?=URL . '/admin/comment'?>">commentaires</a></li>
					<li><a href="<?=URL . '/admin/about'?>">About</a></li>
					<li><a href="<?=URL . '/admin/logout'?>">Logout</a></li>
				<?php } else {?>
					<li><a href="<?=URL . '/admin/connect'?>">Login</a></li>
				<?php }?>
				</ul>
			</div>
		</div>
	</nav>
</header>

