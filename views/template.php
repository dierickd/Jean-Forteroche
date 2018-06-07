<!doctype html>
<html lang="fr" class="full-height">
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= $t ?></title>
    <meta name="description" content="Jean-Forteroche">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="<?= URL.'public/css/style.css' ?>">
</head>
<body id="top">
  <div class="main">
    <?= $content ?>
  </div>
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script type="text/javascript">
        $('a[href^="#"]').click(function(){
            var the_id = $(this).attr("href");
            if (the_id === '#') {
                return;
            }
            $('html, body').animate({
                scrollTop:$(the_id).offset().top - 50
            }, 'slow');
            return false;
        });
    </script>
    <script>
    $(document).ready(function(){
      $(window).scroll(function() { 
        if($(document).scrollTop() > 150) {
          $(".glyphicon-menu-up").css("right", "0px");
        } else {
          $(".glyphicon-menu-up").css("right", "-50px");
        }
      });
    });
</script>
</body>
</html>
