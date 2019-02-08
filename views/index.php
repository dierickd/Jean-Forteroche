<?php $title_for_layout = 'Accueil | Jean Forteroche';?>
<div class="content">
	<div class="main-home">
		<div class="title-home title">
			<h3>Dernières publications</h3>
		</div>

		<?php
		for ($i = 0; $i < count($chapter); $i++) {
		if (intval($chapter[$i]->online) === 1) {?>
			<article class="article">
				<a href=" <?=URL . '?pages/chapter/' . $chapter[$i]->id?> " class="article-link">
					<div class="article-number">
						<p>Chapitre <?=$chapter[$i]->nbArt;?></p>
					</div>
				</a>
				<div class="article-main">
					<div class="article-title">
						<a href=" <?=URL . '?pages/chapter/' . $chapter[$i]->id?> ">
							<h3><?=$chapter[$i]->titleChapter?></h3>
						</a>
					</div>
					<div class="article-content">
						<p><?=substr($chapter[$i]->contentChapter, 0, 300) . '...';?></p>
					</div>
					<div class="article-footer">
						<i class="fas fa-user-edit"></i> <?=$chapter[$i]->authorChapter;?>
						<i class="fas fa-calendar-alt"></i> <?=$chapter[$i]->date;?>
					</div>
				</div>
			</article>
			<?php }?>
		<?php }?>
		<div class="text-center"><a href="<?=URL . '?pages/chapters'?>"> >> Voir plus << </a></div>
	</div>
	<aside class="aside-home">
		<div class="title-home title">
			<h3>Derniers commentaires</h3>
		</div>
	<?php 
		foreach ($comment as $key => $k) { 
			if($k->validate == '1') { ?>
			<div class="aside">
				<article class="aside-com">
					<div class="content-com">
						<?=$k->contentCom ?>
					</div>
					<div class="footer-com">
						<?=$k->authorCom.' le '.$k->date ?>
					</div>
				</article>
			</div>
		<?php } }?>
	</aside>
</div>