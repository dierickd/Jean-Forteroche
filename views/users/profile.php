
<?php $title_for_layout = 'Mon profile | Jean Forteroche';?>

<div class="main-home">
    <div class="cover-profil">
        <img src="<?= URL.'public/img/user.jpeg' ?>" alt="photo profile">
        <span class="name-profil"><h3><?= $_SESSION['user']; ?></h3></span>
    </div>
    <!-- personnal information  -->
	<div class="info-comment">
		<h4>Profil</h4>
	</div>
	<div class="info-user">
		<span>Inscription</span>
		<span><?= $user->date; ?></span>
	</div>
	<div class="info-user">
		<span>adresse mail</span>
		<span><?= $user->mail; ?></span>
		<!-- Message flash -->
		<?php if(!empty($_SESSION['flash'])){ ?>
		<div class="msg-flash">
			<?= ($_SESSION['flash']['mail']) ? '<p>'.$_SESSION['flash']['mail'].'</p>' : ''; ?>
		</div>
		<?php } ?>
		<!-- End message flash -->
	    <form action="<?=URL . "?users/change_mail/".$user->id?>" method="post" class="form-profile">
	        <div class="ctrl-text">
	            <label for="email">modifier mon adresse mail</label>
	            <input type="email" class="" id="email" name="email" required="require" placeholder="exemple@domaine.fr">
	        </div>
	        <div class="ctrl-text">
	            <label for="confirme_email">confirmer mon adresse mail</label>
	            <input type="email" class="" id="email" name="confirme_email" required="require" placeholder="exemple@domaine.fr">
	        </div>
	        <div>
	            <button type="submit" class="btn-submit">Soumettre</button>
	        </div>
	    </form>
	</div>


	<div class="info-user">
		<span>Mot de passe :</span>
		<span>**********</span>
		<!-- Message flash -->

		<?php if(!empty($_SESSION['flash'])){ ?>
		<div class="msg-flash">
			<?= ($_SESSION['flash']['pass']) ? '<p>'.$_SESSION['flash']['pass'].'</p>' : ''; ?>
		</div>
		<?php } 
		unset($_SESSION['flash'])?>
		<!-- End message flash -->
	    <form action="<?=URL . "?users/change_pass/".$user->id?>" method="post"class="form-profile">
	        <div class="ctrl-text">
	            <label for="pass">modifier mon mot de passe</label>
	            <input type="password" class="" id="pass" name="pass" required="require" placeholder="password">
	        </div>
	        <div class="ctrl-text">
	            <label for="confirme_pass">confirmer mon mot de passe</label>
	            <input type="password" class="" id="pass" name="confirme_pass" required="require" placeholder="password">
	        </div>
	        <div>
	            <button type="submit" class="btn-submit">Soumettre</button>
	        </div>
	    </form>
	</div>
</div>
</div>