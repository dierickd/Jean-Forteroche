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
    <script>
    $(document).ready(function(){
      $(window).scroll(function() { // check if scroll event happened
        if ($(document).scrollTop() > 50) { // check if user scrolled more than 50 from top of the browser window
          $(".navbar-fixed-top").css("background-color", "#FEFEFE"); 
          $(".navbar-default .navbar-nav>li>a").css("color", "rgb(0, 86, 27)");
          $("#nav").css("box-shadow", "0px 1px 15px rgb(0, 86, 27)"); 
          $(".navbar-default .navbar-toggle .icon-bar").css("background", "rgb(0, 86, 27)");
        } else {
          $(".navbar-fixed-top").css("background-color", "transparent");
          $(".navbar-default .navbar-nav>li>a").css("color", "#FEFEFE");
          $("#nav").css("box-shadow", "none"); 
          $(".navbar-default .navbar-toggle .icon-bar").css("background", "#FEFEFE");
        }
      });
    });
</script>
</body>
</html>