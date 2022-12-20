<mj-section id="<?= $section->id() ?>">
    <?php foreach ($section->columns() as $column) : ?>
        <?php snippet('mjml/mj-column', compact('column')) ?>
    <?php endforeach ?>
</mj-section>
