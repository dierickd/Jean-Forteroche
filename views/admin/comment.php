<?php $title_for_layout = 'Admin | Liste des commentaires'?>

<div class="jumbotron">
  <div class="container">
    <h3>Liste des commentaires (<?=count($comment)?>)</h3>
  </div>
</div>

<div class="container">
  <p><a href=" <?=URL . '/admin/home'?> ">&larr; Retour à l'accueil administration</a></p>
  <div class="filter">
    <h3>Filtrer les messages</h3>
    <div class="option-filter">
      <table class="table-filter">
        <tbody>
          </tr>
          <tr>
            <td>
              <label class="radio-inline"><input name="opt-filter" type="radio" id="btn-all" checked="checked">Tous</label>
            </td>
          </tr>
          <tr>
            <td>
              <label class="radio-inline"><input name="opt-filter" type="radio" id="btn-opt-chapter">Par chapitre</label>
            </td>
          </tr>
          <tr id="table-chapter-filter">
            <td>
              <!-- filter by chapter name -->
              <div id="chapter-filter" class="form-group">
                <div class="sec-form">
                  <select class="select" id="select">
                    <?php foreach ($chapter as $c) {?>
                      <option value="<?=$c->id?>"><?=$c->titleChapter?></option>
                    <?php }?>
                  </select>
                </div>
              </div>
            </td>
          </tr>
          <tr>
            <td>
              <label class="radio-inline"><input name="opt-filter" type="radio" id="btn-opt-name">Par auteur</label>
            </td>
          </tr>
          <tr id="table-name-filter">
            <td>
              <!-- filter by author name -->
              <div id="name-filter" class="form-group" action="" method="post">
                <div class="sec-form">
                  <select class="selAuthor" id="selAuthor">
                    <?php foreach ($comment as $k) {?>
                      <option value="<?=$k->authorCom?>"><?=$k->authorCom?></option>
                    <?php }?>
                  </select>
                </div>
              </div>
            </td>
          </tr>
          <tr>
            <td>
              <label class="radio-inline" id="grp-notify"><input name="opt-filter" type="radio" id="btn-notify">Afficher les messages notifiés
                <?php
$nb = 0;
foreach ($comment as $k) {
	if (intval($k->validate) === 0) {
		$nb++;
	}
}?>
                (<?=$nb?>)
              </label>
            </td>
          </tr>
        </tbody>
      </table>
      <br/>
    </div>
  </div>
</div>


<?php
foreach ($comment as $k) {
	intval($k->validate) === 1 ? $class = 'online' : $class = 'offline'?>
  <div class="container article <?=$class?> <?='id' . $k->chapter_id?> <?=$k->authorCom?> <?='n' . $k->validate?>">
    <h4><?=$k->authorCom?></h4>
    <p><?=$k->date?> </p>
    <p class="<?='id' . $k->idCom?>"><b><?=$k->contentCom;?></b></p>
    <hr>
    <?php foreach ($chapter as $c) {?>
      <?php if ($c->id == $k->chapter_id) {?>
        <p><i><?=$c->titleChapter?></i></p>
      <?php }?>
    <?php }?>
    <?php if (intval($k->validate) === 1) {?>
      <a href="<?=URL . '/pages/chapter/' . $k->chapter_id . '#' . $k->idCom?>">Visualiser</a>
      <a href="<?=URL . '/comment/notify/' . $k->idCom?>"> - Bloquer</a>
      <a href="<?=URL . '/comment/delete/' . $k->idCom?>"> - Supprimer</a>
    <?php } else {?>
      <a href="<?=URL . '/comment/publish/' . $k->idCom?>">Publier</a>
      <a href="<?=URL . '/comment/delete/' . $k->idCom?>"> - Supprimer</a>
    <?php }?>
  </div>
<?php }?>
  <div class="container" id="message"></div>
</div>
