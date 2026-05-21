<h1>Blog Articles</h1>

<?php foreach ($articles as $article): ?>
    <article>
        <h2>
            <?= $this->Html->link(
                h($articles->title),
                ['action' => 'view', $articles->slug]
            ) ?>
        </h2>
        <p>
            <small>Published: <?= $articles->created->format('F d, Y') ?></small>
        </p>
        <p><?= h($article->body) ?></p>
    </article>
<?php endforeach; ?>

<?= $this->Html->link('New Article', ['action' => 'add'], ['class' => 'button']) ?>