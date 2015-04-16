<?php 
include('../class/idview.php');
include('../class/general.php');
$c = new view();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Indonesia Day PPI Yamaguchi</title>
    <link href="<?php echo $c->host; ?>/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo $c->host; ?>/css/idstyle.css" rel="stylesheet">
</head>
<body>
    <?php
    $c->nav();
    $c->topcover();
    $c->importantmenu('background');
    $c->importantmenu('objective');
    $c->importantmenu('schedule');
    $c->contact();
    $c->credit();
    ?>
    <script src="<?php echo $c->host; ?>/js/jquery.min.js"></script>
    <script src="<?php echo $c->host; ?>/js/bootstrap.min.js"></script>
    <script type="text/javascript">
        $('body').scrollspy({ target: '.nav-follow' });
        $( ".nav li a" ).click(function(e) {
            e.preventDefault();
            $("html, body").animate({ scrollTop: $($(this).attr('href')).offset().top }, 1000);
        });
        //$("html, body").animate({ scrollTop: $('#title1').offset().top }, 1000);
    </script>
</body>
</html>