<?php

use App\Singletone\Ping;
use App\Strategy\Context;
use App\Classes\File;
use App\Classes\Slack;
use App\SimpleFactory\SimpleFactory;
use App\Classes\DataBase;
use App\State\Database as StateDataBase;
use App\State\Context as StateContext;

require '../vendor/autoload.php';


$log = new Context(new DataBase());
$slack = new Context(new Slack());
$file = new Context(new File());

$databaseFactory = SimpleFactory::createLogger('App\Classes\DataBase');
$slackFactory = SimpleFactory::createLogger('App\Classes\Slack');
$FileFactory = SimpleFactory::createLogger('App\Classes\File');
?>

<html>

<body>
    #this is strategy pattern
    <p> <?php echo $log->execute() . '|' . $file->execute() . '|' . $slack->execute(); ?></p>

    #this is state pattern

    <p>
        <?php
        $context = new StateContext(new StateDataBase());
        ?>
    </p>
    <p>
        <?php $context->request1(); ?>
    </p>
    <p>
        <?php $context->request2(); ?>
    </p>

    #this is simple factory
    <p><?php echo $databaseFactory->log() . '|' . $FileFactory->log() . '|' . $slackFactory->log(); ?></p>
</body>

</html>