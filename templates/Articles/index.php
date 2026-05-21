<h1>Blog Articles</h1>

<?php foreach ($articles as $article): ?>
    <article>
        <h2><?= var_dump($article->toArray()) ?></h2>
    </article>
<?php endforeach; ?>