<?php 
include('class/view.php');
include('class/general.php');
$c = new view();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Fricking Blog</title>
    <link href="<?php echo $c->host; ?>/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo $c->host; ?>/css/style.css" rel="stylesheet">
</head>
<body>
    <?php
    $c->nav();
    switch(getsuperglobal('get','p')){
    case 'about':
        $c->pageheader('About','about');
        $c->about();
        break;
    case 'activities':
        $c->pageheader('Activities','activities');
        $c->bloglist();
        break;
    case 'blog':
        $c->pageheader('Blog','blog');
        $c->blogdetail();
        break;
    case 'contact':
        $c->pageheader('Contact','contact');
        $c->contact();
        break;
    default :
        $c->carousel();
        $c->menulist('Latest Activities');
        $c->sectioncolored();
        $c->importantmenu();
        $c->menulist('Other Activities');
        $c->jumplink();
        break;
    }
    $c->credit();
    ?>
    <script src="<?php echo $c->host; ?>/js/jquery-1.11.2.min.js"></script>
    <script src="<?php echo $c->host; ?>/js/bootstrap.min.js"></script>
</body>
</html>