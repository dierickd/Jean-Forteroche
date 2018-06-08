<?php

$this->_t = "Connexion | Jean-forteroche"; ?>

<div class="container">
	<div class="forms col-lg-offset-4 col-lg-4 col-md-offset-4 col-md-4 col-ms-offset-4 col-ms-4 col-xs-offset-1 col-xs-9">
		<div class="log-header">
			<h4>Connexion</h4>
		</div>
		<form method="post" action="admin/connect">
			<?php if(isset($_SESSION['error'])){ ?>
				<div class="no-match">
					<p><b>Login ou mot de passe non valide !</b></p>
				</div>
			<?php unset($_SESSION['error']); } ?>
			<div class="log input-group">
				<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
				<input id="login" type="text" class="form-control" name="login" placeholder="login" required="required">
			</div>
			<div class="pass input-group">
				<span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
				<input id="password" type="password" class="form-control" name="password" placeholder="Password" required="required">
			</div>
			<div class="log-footer">
				<input class="btn btn-success" type="submit" type="text" value="connexion">
			</div>
		</form>
	</div>
</div>
