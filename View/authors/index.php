<?php require 'View/includes/header.php'?>

<section>
    <h1>Authors</h1>
    <ul>
        <?php foreach ($authors as $author): ?>
        <li>
            <a href="http://localhost/MVC/index.php?page=authors-show&name=<?= urlencode($author->name); ?>">
                <?= $author->name ?>
            </a>
        </li>
        <?php endforeach; ?>
    </ul>
</section>

<?php require 'View/includes/footer.php'?>