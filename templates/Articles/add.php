<h1>Agregar artículo</h1>

<?= $this->Form->create($article) ?>
<?= $this->Form->control('title') ?>
<?= $this->Form->control('body') ?>
<?= $this->Form->button('Guardar') ?>
<?= $this->Form->end() ?>