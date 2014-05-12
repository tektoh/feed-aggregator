<!DOCTYPE html>
<html>
<head>
    <?php echo $this->Html->charset(); ?>
    <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>20x20maker::<?= $title ?></title>
        <?php
            echo $this->fetch('meta');

            echo $this->Html->css('//ajax.googleapis.com/ajax/libs/jqueryui/1.10.4/themes/smoothness/jquery-ui.css');
            echo $this->Html->css('//netdna.bootstrapcdn.com/bootswatch/3.1.1/amelia/bootstrap.min.css');
            echo $this->Html->css('//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css');
            echo $this->Html->css('style.css');
            echo $this->fetch('css');
    ?>
</head>
<body>
    <nav class="navbar navbar-default" role="navigation">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">FeedAggregator</a>
            </div>
            <? if ($loggedIn): ?>
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="/users/logout">Logout</a></li>
                </ul>
            </div>
            <? endif ?>
        </div><!-- /.container-fluid -->
    </nav>
    <div class="container session-flush"><?php echo $this->Session->flash(); ?></div>
    <?php echo $this->fetch('content'); ?>
    <?php
        echo $this->Html->script('//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js');
        echo $this->Html->script('//ajax.googleapis.com/ajax/libs/jqueryui/1.10.4/jquery-ui.min.js');
        echo $this->Html->script('//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js');
        echo $this->fetch('script');
    ?>
</body>
</html>