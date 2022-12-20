<?php
    snippet('layouts/mjml/mjml', slots: true);
?>
<?php foreach ($page->mjml_email()->toLayouts() as $section): ?>
    <?php snippet('mjml/mj-section', compact('section')) ?>
<?php endforeach; ?>
