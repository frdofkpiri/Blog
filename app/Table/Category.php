<?php
/**
 * Created by PhpStorm.
 * User: saeed
 * Date: 9/27/15
 * Time: 10:37 PM
 */

    namespace App\Table;
    use App\App;

    class Category extends Table
    {

        protected static $table = 'categories';

        public function getUrl(){
            return 'index.php?p=category&id='. $this->id;
        }

    }