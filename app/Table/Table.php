<?php
/**
 * Created by PhpStorm.
 * User: saeed
 * Date: 9/28/15
 * Time: 12:21 AM
 */

    namespace App\Table;

    use App\App;

    class Table
    {



        public static function find($id){

            return static::query("
                SELECT *
                FROM " . static::$table. "
                WHERE id = ?
                 ", [$id], true);
        }

        public static function getAll(){
            return App::getDatabase()->query("
                SELECT *
                FROM " .static::$table. "

                 "
                ,       get_called_class());
        }


        public function __get($key){

            $method = 'get'. ucfirst($key);
            $this->$key = $this->$method();
            return $this->$key;
        }

         public static function query($statement, $attributes = null, $one = false){

            if($attributes){

                return App::getDatabase() ->prepare(
                    $statement,$attributes, get_called_class(), $one);

            }
            else{
                return App::getDatabase() ->query(
                    $statement, get_called_class(), $one);

            }

        }



    }