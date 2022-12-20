<!-- https://documentation.mjml.io/#mj-head -->
<mj-head>

    <!-- mj-preview -->
    <mj-preview><?= $preview ?></mj-preview>

    <!-- mj-title -->
    <mj-title><?= $title ?></mj-title>

    <!-- mj-font -->
    <!-- inject: https://documentation.mjml.io/#mj-font -->
    <?php if (isset($font) && $font->name() && $font->href()): ?>
    <mj-font
        name="<?= $font->name() ?>"
        href="<?= $font->href() ?>" />
    <?php endif; ?>

    <!-- mj-style -->
    <!-- inject: https://documentation.mjml.io/#mj-style -->
    <?php if (isset($slots) && ($mj_style = $slots->mj_style())): ?>
        <?= $mj_style ?>
    <?php endif ?>

    <!-- mj-breakpoint -->
    <!-- inject: https://documentation.mjml.io/#mj-breakpoint -->
    <?php if (isset($breakpoint)): ?>
    <mj-breakpoint width="<?= $breakpoint ?>" />
    <?php endif; ?>

    <!-- mj-attributes -->
    <!-- inject: https://documentation.mjml.io/#mj-attributes -->
    <?php if (isset($slots) && ($mj_attributes = $slots->mj_attributes())): ?>
    <mj-attributes>
        <?= $mj_attributes ?>
    </mj-attributes>
    <?php endif ?>

    <?php if (isset($slot)): ?>
    <?= $slots->default() ?>
    <?php endif; ?>

</mj-head>
