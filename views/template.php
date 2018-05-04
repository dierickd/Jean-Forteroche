<!doctype html>
<html lang="fr" class="full-height">
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= $t ?></title>
    <meta name="description" content="Jean-Forteroche">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="<?= URL.'public/css/style.css' ?>">

</head>
<body>
    <?= $content ?>
    <footer class="panel-footer text-center">
        Blog réalisé avec PHP, HTML5 et CSS.
    </footer>
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script type="text/javascript">
        $('a[href^="#"]').click(function(){
            var the_id = $(this).attr("href");
            if (the_id === '#') {
                return;
            }
            $('html, body').animate({
                scrollTop:$(the_id).offset().top
            }, 'slow');
            return false;
        });
    </script>
</body>
</html>