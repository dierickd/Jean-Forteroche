<?php $title_for_layout = 'Connexion profile'?>
<!-- Conect to account -->

	<?php if($_SESSION['success']){ ?>
	<div class="success">
		<p>Votre compte a été créé avec succès, un email a été envoyé à l'adresse <b><?= $_SESSION['success'] ?></b> pour valider votre compte.</p>
	</div>
	<?php } 
	unset($_SESSION['success']);?>
<div class="main-connect">
	<div class="title-home title">
		<h3>Accès membres</h3>
	</div>
	<div class="main-home">
		<?php if (isset($_SESSION['error'])) {?>
			<p class="no-match"><?= $_SESSION['error']; ?></p>
		<?php
		unset($_POST['error']);
		}?>
		<form class="form-connect" method="post" action="<?=URL.'?pages/connect'?>">
			<div class="connect">
				<div class="connect-text">
					<label for="login">Login</label>
					<input type="text" class="form-control" id="login" name="login" required="require" placeholder="Login">
				</div>
				<div class="connect-text">
					<label for="password">Mot de passe</label>
					<input type="password" class="form-control" id="password" name="pass" required="require" placeholder="mot de passe">
				</div>
			</div>
			<div class="forgot btn-option">
				<small class="btn-forgot">mot de passe oublié</small>
			</div>
			<div class="button">
				<button type="submit" class="btn btn-submit">Sign in</button>
			</div>
			<div class="create btn-option">
				<a href="<?=URL.'?pages/create'?>" class="btn-create">S'inscrire</a>
			</div>
		</form>
	</div>
</div>

<!-- i forgot my password -->
<div class="main-forgot">
	<div class="title-home title">
		<h3>Mot de passe oublié</h3>
	</div>
	<form class="form-forgot" method="post" action="<?=URL.'?pages/forgot'?>">
		<div class="forgotPw">
			<div class="form-group">
				<label for="mail">entrez votre adresse e-mail</label>
				<input type="email" class="form-control" id="mail" name="mail" required="require" placeholder="e-mail">
			</div>
		</div>
		<div class="button">
			<button type="submit" class="btn btn-submit">Envoyer</button>
		</div>
		<div class="cancel btn-option">
			<p class="btn-cancel">Annuler</p>
		</div>
	</form>
</div>
