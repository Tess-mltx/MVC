<?php require 'View/includes/header.php'?>

<!-- <?php ?> -->

<section>
    <h1><?= $author->name?></h1>
    <p><?= $author->description ?></p>

    <h2>Tous les articles de <?= $author->name?></h2>
    <ul>
        <?php foreach ($selectedArticles as $article): ?>
        <li>
            <a href="http://localhost/MVC/index.php?page=articles-show&title=<?= urlencode($article->title); ?>">
                <?= $article->title ?> <?= $article->formatPublishDate() ?>
            </a>
        </li>
        <?php endforeach; ?>
    </ul>
</section>

<?php require 'View/includes/footer.php'?>