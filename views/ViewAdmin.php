<?php $this->_t = "Administration | Jean-forteroche"; ?>

<div class="container">
	<div class="forms col-lg-offset-4 col-lg-4 col-md-offset-4 col-md-4 col-ms-offset-4 col-ms-4 col-xs-offset-1 col-xs-9">
		<div class="log-header">
			<h4>Connexion</h4>
		</div>
		<form method="post" action="admin/connect">
			<div class="log input-group">
				<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
				<input id="login" type="text" class="form-control" name="login" placeholder="login">
			</div>
			<div class="pass input-group">
				<span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
				<input id="password" type="password" class="form-control" name="password" placeholder="Password">
			</div>
			<div class="log-footer">
				<input class="btn btn-success" type="submit" type="text" value="connexion">
			</div>
		</form>
	</div>
</div>
