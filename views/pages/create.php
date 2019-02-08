
<!-- i cretae my account -->
<?php $title_for_layout = 'S\'inscrire'?>

<div class="main-create">
	<div class="title-home title">
		<h3>Créer un compte</h3>
	</div>
	<div class="main-home">

		<?php if(!empty($_SESSION['flash'])){ ?>
		<div class="msg-flash">
			<?= ($_SESSION['flash']['login']) ? '<p>'.$_SESSION['flash']['login'].'</p>' : ''; ?>
			<?= ($_SESSION['flash']['mail']) ? '<p>'.$_SESSION['flash']['mail'].'</p>' : ''; ?>
			<?= ($_SESSION['flash']['pass']) ? '<p>'.$_SESSION['flash']['pass'].'</p>' : ''; ?>
		</div>
		<?php } 
		unset($_SESSION['flash'])?>

		<form class="form-create" method="post" action="<?=URL.'?pages/register'?>">
			<div class="connect">
				<div class="connect-text">
					<label for="login">Login</label>
					<input type="text" class="form-control" id="login" name="login" placeholder="Login">
				</div>
                <hr>
				<div class="connect-text">
					<label for="email">E-mail</label>
					<input type="email" class="form-control" id="email" name="email" placeholder="email">
				</div>
				<div class="connect-text">
					<label for="email">Confirmer votre e-mail</label>
					<input type="email" class="form-control" id="email" name="confirme_email" placeholder="email">
				</div>
                <hr>
				<div class="connect-text">
					<label for="password">Mot de passe</label>
					<input type="password" class="form-control" id="password" name="password" placeholder="mot de passe">
				</div>
				<div class="connect-text">
					<label for="password">Confirmer votre mot de passe</label>
					<input type="password" class="form-control" id="password" name="confirme_password" placeholder="mot de passe">
				</div>
			</div>
			<div class="button">
				<button type="submit" class="btn btn-submit">Créer</button>
			</div>
			<div class="cancel btn-option">
				<a href="<?=URL.'?pages/connect'?>" class="btn-cancel">Annuler</a>
			</div>
		</form>
	</div>
</div>