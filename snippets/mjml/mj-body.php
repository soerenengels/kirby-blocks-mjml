<mj-body
    <?php e($background_color, `background-color="${background_color}"`) ?>
    <?php e($css_class, `css-class="${css_class}"`) ?>
    <?php e($width, `width="${width}"`) ?>>
    <?php if($slot = $slots->mjml_body()): ?>
        <?php // Slot ?>
    <?php else: ?>
        <?php foreach ($page->text()->toLayouts() as $layout) : ?>
            <mj-section
                class="grid"
                id="<?= $layout->id() ?>">
                <?php foreach ($layout->columns() as $column) : ?>
                    <mj-column
                        class="column"
                        style="--span:<?= $column->span() ?>">
                        <div class="blocks">
                            <?= $column->blocks() ?>
                        </div>
                    </mj-column>
                <?php endforeach ?>
            </mj-section>
        <?php endforeach ?>
    <?php endif; ?>
    <?= $slots->default() ?>
</mj-body>
