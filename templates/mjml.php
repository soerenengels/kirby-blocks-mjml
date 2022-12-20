<?php snippet('layouts/mjml/html', slots: true) ?>
<?php foreach ($page->mjml_email()->toLayouts() as $layout) : ?>
    <section class="grid" id="<?= $layout->id() ?>">
        <?php foreach ($layout->columns() as $column) : ?>
            <section class="column" style="--span:<?= $column->span() ?>">
                <div class="blocks">
                    <?= $column->blocks() ?>
                </div>
            </section>
        <?php endforeach ?>
    </section>
<?php endforeach ?>
