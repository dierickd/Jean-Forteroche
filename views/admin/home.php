<?php $title_for_layout = 'Administration | Jean Forteroche';?>

<div class="title-home title">
	<h3>Administration</h3>
</div>
<p><a href=" <?=URL?> ">&larr; Retour à l'accueil du site</a></p>
<div class="content">

	<div class="main-home">
		<!-- SECTION CHAPITRE  -->
		<div class="main-box">
			<a href="<?=URL . '?admin/chapters'?>">
				<?php $p = 0;
				for ($i = 0; $i < count($chapter); $i++) {
					if (intval($chapter[$i]->online) === 1) {
						$p++;
					}
				}?>
				<div class="box">
					<div class="box-left">
						<i class="fas fa-book-open"></i>
					</div>
					<div class="box-right">
						<div class="content-admin">
							<p class="line-all"><i>Total(s): <?=count($chapter)?></i></p>
							<p class="line-on"><i>Online(s): <?=$p?></i></p>
							<p class="line-off"><i>Offline(s): <?=count($chapter) - $p?></i></p>
						</div>
					</div>
				</div>
			</a>
		</div>

		<!-- SECTION comments  -->
		<div class="main-box">
			<a href="<?=URL . '?admin/comment'?>">
				<?php $s = 0;
				for ($i = 0; $i < count($comment); $i++) {
					if (intval($comment[$i]->validate) === 0) {
						$s++;
					}
				}?>	
				<div class="box">
					<div class="box-left">
						<i class="fas fa-comments"></i>
					</div>
					<div class="box-right">
						<div class="content-admin">
							<p class="line-all"><i>Total(s): <?=count($comment)?></i></p>
							<p class="line-off"><i>Signalé(s): <?=$s?></i></p>
						</div>
					</div>
				</div>
			</a>
		</div>

		<!-- SECTION about  -->
		<div class="main-box">
			<a href="<?=URL . '?admin/about'?>">
				<div class="box">
					<div class="box-left">
						<i class="fas fa-user-edit"></i>
					</div>
					<div class="box-right">
						<div class="content-admin">
							<p>Gérer...</p>
						</div>
					</div>
				</div>
			</a>
		</div>

		<!-- SECTION members  -->
		<div class="main-box">
			<a href="<?=URL . '?admin/home'?>">
				<div class="box">
					<div class="box-left">
						<i class="fas fa-users"></i>
					</div>
					<div class="box-right">
						<div class="content-admin">
							<p class="line-all"><i>Totals membres: <?=count($members)?></i></p>
						</div>
					</div>
				</div>
			</a>
		</div>
	</div>
	<aside class="aside-admin">
		<div class="title-admin title">
			<h3>Dernières inscriptions</h3>
		</div>
		<?php
		foreach ($members as $key => $k) { 
			if($k->id != '13') {?>
				<div class="aside">
					<article class="aside-members">
						<div class="content-members">
							<p><i class="fas fa-bookmark"></i> <?=$k->user ?> (<?=$k->date ?>)</p>
							<p>Email : <?=$k->mail ?></p>
						</div>
					</article>
				</div>
			<?php }
		} ?>
	</aside>


</div>