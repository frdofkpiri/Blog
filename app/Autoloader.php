<?php

/**
 * Created by PhpStorm.
 * User: saeed
 * Date: 9/26/15
 * Time: 3:40 PM
 */

namespace App;
class Autoloader
{


    /**
     * Register our autoloader
     */

    static function register(){
        spl_autoload_register(array(__CLASS__, 'autoload'));

    }

    /**
     * Autoload the file which ressambles our class
     * @param $class_name is the name of the class
     *
     */
    static function autoload($class_name){

        if(strpos($class_name, __NAMESPACE__.'\\') ===0){
            $class_name = str_replace(__NAMESPACE__ . '\\','', $class_name);
            $class_name =  str_replace('\\','/', $class_name);

            require __DIR__.'/'.$class_name.'.php';
        }


    }

}