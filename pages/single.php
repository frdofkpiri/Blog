<?php

    use App\App;

    use App\Table\Article;
    use App\Table\Category;

    $post = Article::find($_GET['id']);
    if($post === false){
        App::notFound();
    }


    App::setTitle($post->title);


?>


    <h1>
        <?= $post->title; ?>
    </h1>

    <p> <em> <?= $post->category;  ?> </em></p>

    <p>
        <?= $post->contents; ?>

    </p>
