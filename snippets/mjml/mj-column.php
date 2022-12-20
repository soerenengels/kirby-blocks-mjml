<mj-column>
    <?php foreach ($column->blocks() as $block): ?>
        <?= $block->toMjml(); ?>
    <?php endforeach ?>
</mj-column>
