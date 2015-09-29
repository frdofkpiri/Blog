<?php
/**
 * Created by PhpStorm.
 * User: saeed
 * Date: 9/26/15
 * Time: 3:45 PM
 */

    require '../app/Autoloader.php';


    App\Autoloader::register();

    $config = new App\Config();

    $app = \App\App::getInstance();

    $app->title = "Testing here with";


    $app2 =  \App\App::getInstance();


    echo $app2->title;
