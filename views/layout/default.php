<!doctype html>
<html lang="fr" class="full-height">
<head>
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?=isset($title_for_layout) ? $title_for_layout : 'Jean-Forteroche'?></title>
  <meta name="description" content="Jean-Forteroche">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="<?=URL . '/public/css/style.css'?>">
  <script src='https://code.jquery.com/jquery-3.1.0.js'></script>
  <link href="https://fonts.googleapis.com/css?family=Poppins:400,400i,700" rel="stylesheet">
  <script src="<?=URL . '/public/js/javascript.js'?>"></script>
</head>
<body id="top">
  <div class="main">
    <?=$content_for_layout?>
  </div>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src="<?=URL . '/public/js/tinymce/tinymce.min.js'?>"></script>
  <script src="<?=URL . '/public/js/tinymce/init-tinymce.js'?>"></script>
</body>
</html>
