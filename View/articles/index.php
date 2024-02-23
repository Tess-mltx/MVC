<?php require 'View/includes/header.php'?>



<section>
    <h1>Articles</h1>
    <ul>
        <?php foreach ($articles as $article): ?>
        <li>
            <a href="http://localhost/MVC/index.php?page=articles-show&title=<?= urlencode($article->title); ?>">
                <?= $article->title ?> <?= $article->formatPublishDate() ?>
            </a>
        </li>
        <?php endforeach; ?>
    </ul>
</section>

<?php require 'View/includes/footer.php'?>