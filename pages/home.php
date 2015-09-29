<div class="row">

    <div class="col-sm-8">

        <?php foreach (App\Table\Article::getLast() as $post) : ?>


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


