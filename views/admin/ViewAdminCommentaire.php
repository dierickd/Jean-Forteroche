
	<div class="detail-admin col-lg-12">
		<div id="header-3" class="admin-header">
			<h4>Commentaires signalés
				<span class="glyphicon glyphicon-chevron-down"></span>
				<span class="glyphicon glyphicon-chevron-up"></span>
			</h4>
		</div>
		<div id="detail-3" class="admin-detail">
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Optio alias porro quisquam quasi eum sed, ipsa eveniet, iste reprehenderit nostrum cumque beatae delectus accusantium facere, ut blanditiis maiores quibusdam hic?
			Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum saepe quaerat sint voluptatum culpa error debitis ab, neque consequatur velit itaque labore sunt ullam suscipit? Alias quod, deserunt mollitia nam.</p>
			<?php

foreach ($adminBook as $ligne) {
	var_dump($ligne);
	echo $ligne->getContentChapter();
	// Lecture de chaque tableau de chaque ligne
	foreach ($ligne as $cle => $valeur) {
		// Affichage
		var_dump($ligne);
	}
}
?>
		</div>
	</div>