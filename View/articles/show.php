<?php require 'View/includes/header.php'?>

<!-- <?php ?> -->

<section>
    <h1><?= $article->title ?></h1>
    <p><?= $article->formatPublishDate() ?></p>
    <p><?= $article->description ?></p>

    <?php // TODO: links to next and previous ?>
    <a href="http://localhost/MVC/index.php?page=articles-show&title=<?=urlencode($prevArticle->title)?>">Previous article</a>
    <a href="http://localhost/MVC/index.php?page=articles-show&title=<?=urlencode($nextArticle->title)?>">Next article</a>
</section>

<?php require 'View/includes/footer.php'?>