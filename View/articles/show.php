<?php require 'View/includes/header.php'?>

<!-- <?php ?> -->

<section>
    <h1><?= $article->title ?></h1>
    <p><?= $article->formatPublishDate() ?></p>
    <p><?= $article->description ?></p>

    <?php // TODO: links to next and previous ?>
    <a href="http://localhost/MVC/index.php?page=articles-show?<?php prev($articles); ?>">Previous article</a>
    <a href="http://localhost/MVC/index.php?page=articles-show?<?php next($articles); ?>">Next article</a>
</section>

<?php require 'View/includes/footer.php'?>