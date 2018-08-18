<?php $title_for_layout = 'Admin | Connexion'?>
<div class="jumbotron">
	<div class="container">
		<h3>Accès administrateur</h3>
	</div>
</div>
<div class="container">
	<form class="form-connect" method="post" action="<?=URL . DS . 'admin/connect'?>">
		<div class="connect">
			<div class="form-group">
				<label for="login">Login</label>
				<input type="text" class="form-control" id="login" name="login" required="require" placeholder="Login">
			</div>
			<div class="form-group">
				<label for="password">Mot de passe</label>
				<input type="password" class="form-control" id="password" name="pass" required="require" placeholder="mot de passe">
			</div>
		</div>
		<div class="forgot">
			<small class="btn-forgot">mot de passe oublié</small>
		</div>
		<div>
			<button type="submit" class="btn btn-success">Sign in</button>
		</div>
		<?php if (isset($_SESSION['error'])) {?>
			<p class="no-match text-center">Login et/ou mot de passe incorrect !</p>
		<?php }?>
	</form>
	<form class="form-forgot" method="post" action="<?=URL . DS . 'admin/forgot'?>">
		<div class="forgotPw">
			<div class="form-group">
				<label for="mail">entrez votre adresse e-mail</label>
				<input type="email" class="form-control" id="mail" name="mail" required="require" placeholder="e-mail">
			</div>
		</div>
		<div class="forgot">
			<small class="btn-cancel">Annuler</small>
		</div>
		<div>
			<button type="submit" class="btn btn-success">Submit</button>
		</div>
	</form>
</div>
