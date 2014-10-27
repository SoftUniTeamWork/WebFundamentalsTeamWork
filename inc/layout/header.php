<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Team French Wine - <?=$pages[$currentPage];?></title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/lightbox.css"/>
    <link rel="stylesheet" href="css/style.css"/>
</head>
<body>

<header>
    <div class="container">
        <a href="index.php"><img src="images/header1.jpg" class="img-responsive" alt="header"></a>
    </div>
</header>

<div class="container">
    <nav class="navbar navbar-default" role="navigation">

        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#primary-nav">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <!--<a class="navbar-brand" href="#">Brand</a>-->
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="primary-nav">
            <ul class="nav navbar-nav">
                <?php foreach(array_keys($pages) as $page): ?>
                    <li<?=($currentPage == $page) ? ' class="active"' : ''; ?>><a href="index.php?p=<?=$page; ?>"><?=$pages[$page]; ?></a></li>
                <?php endforeach; ?>
            </ul>
        </div><!-- /.navbar-collapse -->
    </nav>
</div>