
	<div class="detail-admin col-lg-12">
		<div id="header-5" class="admin-header">
			<h4>Personnaliser
				<span class="glyphicon glyphicon-chevron-down"></span>
				<span class="glyphicon glyphicon-chevron-up"></span>
			</h4>
		</div>
		<div id="detail-5" class="admin-detail">
			<h2>A propos</h2>
			<?php foreach ($adminAbout as $about) {?>
				<textarea class="col-lg-12" style="height: 150px;"><?=$about->getContent()?></textarea>
			<?php }?>
		</div>
	</div>