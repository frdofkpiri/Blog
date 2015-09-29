<?php

/**
 * Created by PhpStorm.
 * User: saeed
 * Date: 9/27/15
 * Time: 7:27 PM
 */

    namespace App\Table;

    use App\App;

    class Article extends Table
    {

        protected static $table ='articles';



        public static function find($id){

            return self::query("
                 SELECT articles.id, articles.title,articles.contents, categories.title as category
                FROM articles
                LEFT JOIN categories
                  ON category_id = categories.id
                WHERE articles.id = ?
                 ", [$id],  true);
        }

        public static function  getLast(){

            return self::query("
                SELECT articles.id, articles.title,articles.contents, categories.title as category
                FROM articles
                LEFT JOIN categories
                  ON category_id = categories.id
            ");
        }


        public static function lastByCategory($category_id){

            return self::query("
                SELECT articles.id, articles.title,articles.contents, categories.title as category
                FROM articles
                LEFT JOIN categories
                  ON category_id = categories.id
                WHERE category_id = ?
            ", [$category_id]);

        }

        public function getUrl(){
            return 'index.php?p=article&id='. $this->id;
        }

        public function getExtract()
        {
            $html = '<p>'. substr($this->contents,0,500) .'...</p>';
            $html .= '<p> <a href="'.$this->getUrl(). '"> Read more </a> </p>';

            return $html;

        }




    }