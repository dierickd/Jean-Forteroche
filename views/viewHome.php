<?php $this->_t = "Jean-Forteroche"; ?>

<div class="container">
	<div class="row">
		<div class="col-lg-12 col-ms-12 col-xs-12">
			<div class="col-lg-7 col-md-7 col-xs-12">
				<div class="row">
					<div class="col-lg-12 col-md-12 col-xs-12 text-center">
						<h1>Dernières publications</h1>
					</div>
				</div>
				<div class="row text-justify">
						<br>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laudantium a voluptates tempore, rem? Deleniti culpa quos, fuga id similique blanditiis inventore. Eius dicta, quas veritatis, ad nam incidunt libero praesentium.</p>
						<br>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laudantium a voluptates tempore, rem? Deleniti culpa quos, fuga id similique blanditiis inventore. Eius dicta, quas veritatis, ad nam incidunt libero praesentiumLorem ipsum dolor sit amet, consectetur adipisicing elit. Laudantium a voluptates tempore, rem? Deleniti culpa quos, fuga id similique blanditiis inventore. Eius dicta, quas veritatis, ad nam incidunt libero praesentiumLorem ipsum dolor sit amet, consectetur adipisicing elit. Laudantium a voluptates tempore, rem? Deleniti culpa quos, fuga id similique blanditiis inventore. Eius dicta, quas veritatis, ad nam incidunt libero praesentium.</p>
						<br>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laudantium a voluptates tempore, rem? Deleniti culpa quos, fuga id similique blanditiis inventore. Eius dicta, quas veritatis, ad nam incidunt libero praesentiumLorem ipsum dolor sit amet, consectetur adipisicing elit. Laudantium a voluptates tempore, rem? Deleniti culpa quos, fuga id similique blanditiis inventore. Eius dicta, quas veritatis, ad nam incidunt libero praesentiumLorem ipsum dolor sit amet, consectetur adipisicing elit. Laudantium a voluptates tempore, rem? Deleniti culpa quos, fuga id similique blanditiis inventore. Eius dicta, quas veritatis, ad nam incidunt libero praesentium.</p>
						<br>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laudantium a voluptates tempore, rem? Deleniti culpa quos, fuga id similique blanditiis inventore. Eius dicta, quas veritatis, ad nam incidunt libero praesentiumLorem ipsum dolor sit amet, consectetur adipisicing elit. Laudantium a voluptates tempore, rem? Deleniti culpa quos, fuga id similique blanditiis inventore. Eius dicta, quas veritatis, ad nam incidunt libero praesentiumLorem ipsum dolor sit amet, consectetur adipisicing elit. Laudantium a voluptates tempore, rem? Deleniti culpa quos, fuga id similique blanditiis inventore. Eius dicta, quas veritatis, ad nam incidunt libero praesentium.</p>
						<br>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laudantium a voluptates tempore, rem? Deleniti culpa quos, fuga id similique blanditiis inventore. Eius dicta, quas veritatis, ad nam incidunt libero praesentiumLorem ipsum dolor sit amet, consectetur adipisicing elit. Laudantium a voluptates tempore, rem? Deleniti culpa quos, fuga id similique blanditiis inventore. Eius dicta, quas veritatis, ad nam incidunt libero praesentiumLorem ipsum dolor sit amet, consectetur adipisicing elit. Laudantium a voluptates tempore, rem? Deleniti culpa quos, fuga id similique blanditiis inventore. Eius dicta, quas veritatis, ad nam incidunt libero praesentium.</p>
						<br>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laudantium a voluptates tempore, rem? Deleniti culpa quos, fuga id similique blanditiis inventore. Eius dicta, quas veritatis, ad nam incidunt libero praesentiumLorem ipsum dolor sit amet, consectetur adipisicing elit. Laudantium a voluptates tempore, rem? Deleniti culpa quos, fuga id similique blanditiis inventore. Eius dicta, quas veritatis, ad nam incidunt libero praesentiumLorem ipsum dolor sit amet, consectetur adipisicing elit. Laudantium a voluptates tempore, rem? Deleniti culpa quos, fuga id similique blanditiis inventore. Eius dicta, quas veritatis, ad nam incidunt libero praesentium.</p>
				</div>
			</div>
			<aside class="col-lg-offset-1 col-lg-4 col-md-offset-1 col-md-4 col-xs-12">
				<div class="row">
					<div class="col-lg-12 col-md-12 col-xs-12 text-center">
						<h1>Dernières oeuvres</h1>
					</div>
				</div>
				<div class="row">
					<?php
					foreach ($books as $book) { ?>
						<div class="col-lg-12 col-md-12 col-xs-12">
							<div class="book">
								<a href="livre/<?= $book->getId() ?>">
									<h4><?= $book->getTitle() ?></h4>
								</a>
								<p class="text-justify"><?= $book->getResume() ?></p>
							</div>
						</div>
					<?php } ?>
				</div>
				<div class="aside-footer col-lg-12 text-center">
					<i><a href="<?= URL.'library' ?>">Voir tous</a></i>
				</div>
			</aside>
		</div>
	</div>
</div>
