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



        private static $_instance;
        private static $title = "My site";

        public static function getDatabase(){

            if(self::$database === null){
                self::$database =  new Database(self::DB_NAME, self::DB_USER, self::DB_PASS, self::DB_HOST );
            }

            return self::$database;
        }

        public static function notFound(){

            header("HTTP/1.0 404 Not Found");
            header("Location:index.php?p=404");
        }

        public static function getTitle(){
            return self::$title;
        }

        public static function setTitle($title){
            self::$title = $title.'|'.self::$title ;
        }
    }