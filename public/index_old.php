<?php
/**
 * Created by PhpStorm.
 * User: saeed
 * Date: 9/26/15
 * Time: 3:45 PM
 */

    require '../app/Autoloader.php';

    use \App\Database;
    App\Autoloader::register();


    if(isset($_GET['p'])){
        $p =  $_GET['p'];

        var_dump($p);
    }

    else{
        $p = 'home';
    }


    ob_start();
    if($p === 'home'){
        require '../pages/home.php';
    } elseif ($p === 'article'){
        require '../pages/single.php';
    }
    elseif ($p === 'category'){
        require '../pages/category.php';
    }

    $content = ob_get_clean();


    require '../pages/templates/default.php';

