<?php
/**
 * Created by PhpStorm.
 * User: saeed
 * Date: 9/27/15
 * Time: 9:37 PM
 */

namespace App;


    class App
    {



        public $title  = "my site";

        private static $_instance;

        public static function getInstance(){
            if(is_null(self::$_instance)){
                self::$_instance = new  App();
            }
            return self::$_instance;
        }
    }