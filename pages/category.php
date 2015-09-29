<?php

/**
 * Created by PhpStorm.
 * User: saeed
 * Date: 9/28/15
 * Time: 2:45 AM
 */

    use App\Table\Category;
    use \App\Table\Article;
    use \App\App;
    $category = Category::find($_GET['id']);

    if($category === false){
        App::notFound();
    }
    $article = Article::lastByCategory($_GET['id']);

    $category = Category::getAll();
    var_dump($category);

?>


    <h1> <?= $category->title  ?></h1>
    <?php var_dump($category->title); ?>

<div class="row">

    <div class="col-sm-8">

        <?php foreach ($article as $post) : ?>


            <h2><a href="<?= $post->Url ?>"><?= $post->title;   ?>  </a>  </h2>

            <p><i>  <?= $post->category; ?>  </i>  </p>

            <p> <?=  $post->Extract; ?>  </p>

        <?php endforeach; ?>

    </div>
    <div class="col-sm-4">
        <ul>
            <?php foreach(\App\Table\Category::getAll() as $category): ?>

                <li><a href="<?=  $category->Url  ?>"> <?= $category->title; ?></a></li>

            <?php endforeach ?>

        </ul>
    </div>

</div>



