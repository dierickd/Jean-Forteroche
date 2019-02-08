<header>
	<nav class="navbar navbar-default navbar-top">
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
					<li><a href="<?=URL . '?auteur/about'?>">L'auteur</a></li>
					<li><a href="<?=URL . '?pages/chapters'?>">Chapitres</a></li>
				</ul>
				<ul class="nav navbar-nav navbar-right">
				<?php if ($_SESSION['auth'] == 'admin') {?>
					<li><a href="<?=URL . '?admin/home'?>"><i class="fas fa-cogs"></i> Admin</a></li>
					<li><a href="<?=URL . '?pages/logout'?>"><i class="fas fa-sign-out-alt"></i> Log out</a></li>
				<?php } elseif ($_SESSION['auth'] == 'guest') {?>
					<li><a href="<?=URL . '?users/profile'?>"><i class="fas fa-user"></i> Profile</a></li>
					<li><a href="<?=URL . '?pages/logout'?>"><i class="fas fa-sign-out-alt"></i> Log out</a></li>
				<?php } else {?>
					<li><a href="<?=URL . '?pages/connect'?>"><i class="fas fa-sign-in-alt"></i> Log in</a></li>
				<?php }?>
				</ul>
			</div>
		</div>
	</nav>
</header>

<div class="alerte-maintenance">
	<p>Ca avance bien, encore un peu de patience - Site actuellement en maintenance</p>
</div>
