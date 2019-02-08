<?php $title_for_layout = 'L\'auteur | Jean Forteroche'?>

<div class="title-home title">
	<h3><?=($author[0]->titleJf) ? $author[0]->titleJf : 'Qui est Jean Forteroche ?';?></h3>
</div>

<article class="article-about">
	<p><?=$author[0]->contentJf;?></p>
</article>
