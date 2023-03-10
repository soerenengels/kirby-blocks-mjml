<?php

use Kirby\Cms\App as Kirby;

require __DIR__ . '/vendor/autoload.php';

/* maybe use https://getkirby.com/docs/guide/plugins/plugin-setup-autoloader */
load([
    'Soerenengels\Newsletter\MJML' => __DIR__ . '/classes/MJML.php',
    'MJMLBlock' => __DIR__ . '/models/blocks/MJMLBlock.php',
]);

Kirby::plugin('soerenengels/blocks-mjml', [
    'blockModels' => [
        'mj-heading' => MJMLBlock::class,
        'mj-text' => MJMLBlock::class,
        'mj-divider' => MJMLBlock::class,
        'mj-image' => MJMLBlock::class,
        /* 'mj-list' => MJMLBlock::class,
        'mj-raw' => MJMLBlock::class, */
    ],
    'blueprints' => [
        // Responsive E-Mail Blueprint, Section and partials
        'pages/mjml' => __DIR__ . '/blueprints/mjml.yml',
        'sections/mjml/email' => __DIR__ . '/blueprints/sections/mjml/email.yml',
        'fields/mjml/preview' => __DIR__ . '/blueprints/fields/mjml/preview.yml',
        'layout/mjml/content' => __DIR__ . '/blueprints/layout/mjml/content.yml',
        'layout/mjml/fieldsets' => __DIR__ . '/blueprints/layout/mjml/fieldsets.yml',
        'layout/mjml/layouts' => __DIR__ . '/blueprints/layout/mjml/layouts.yml',
        'layout/mjml/settings' => __DIR__ . '/blueprints/layout/mjml/settings.yml',
        // Available MJML Blocks
        'blocks/mj-text' => __DIR__ . '/blueprints/blocks/mjml/mj-text.yml',
        'blocks/mj-heading' => __DIR__ . '/blueprints/blocks/mjml/mj-heading.yml',
        'blocks/mj-divider' => __DIR__ . '/blueprints/blocks/mjml/mj-divider.yml',
        'blocks/mj-image' => __DIR__ . '/blueprints/blocks/mjml/mj-image.yml',
        /* 'blocks/mj-list' => __DIR__ . '/blueprints/blocks/mjml/mj-list.yml',
        'blocks/mj-raw' => __DIR__ . '/blueprints/blocks/mjml/mj-raw.yml', */
        // Fields for Reuse
        'fields/mjml/settings/align' => __DIR__ . '/blueprints/fields/mjml/settings/align.yml',
        'fields/mjml/settings/background' => __DIR__ . '/blueprints/fields/mjml/settings/background.yml',
        'fields/mjml/settings/border' => __DIR__ . '/blueprints/fields/mjml/settings/border.yml',
        'fields/mjml/settings/border-style' => __DIR__ . '/blueprints/fields/mjml/settings/border-style.yml',
        'fields/mjml/settings/border-width' => __DIR__ . '/blueprints/fields/mjml/settings/border-width.yml',
        'fields/mjml/settings/color' => __DIR__ . '/blueprints/fields/mjml/settings/color.yml',
        'fields/mjml/settings/direction' => __DIR__ . '/blueprints/fields/mjml/settings/direction.yml',
        'fields/mjml/settings/font-family' => __DIR__ . '/blueprints/fields/mjml/settings/font-family.yml',
        'fields/mjml/settings/font-size' => __DIR__ . '/blueprints/fields/mjml/settings/font-size.yml',
        'fields/mjml/settings/font-style' => __DIR__ . '/blueprints/fields/mjml/settings/font-style.yml',
        'fields/mjml/settings/font-weight' => __DIR__ . '/blueprints/fields/mjml/settings/font-weight.yml',
        'fields/mjml/settings/full-width' => __DIR__ . '/blueprints/fields/mjml/settings/full-width.yml',
        'fields/mjml/settings/line-height' => __DIR__ . '/blueprints/fields/mjml/settings/line-height.yml',
        'fields/mjml/settings/letter-spacing' => __DIR__ . '/blueprints/fields/mjml/settings/letter-spacing.yml',
        'fields/mjml/settings/height' => __DIR__ . '/blueprints/fields/mjml/settings/height.yml',
        'fields/mjml/settings/text-decoration' => __DIR__ . '/blueprints/fields/mjml/settings/text-decoration.yml',
        'fields/mjml/settings/text-transform' => __DIR__ . '/blueprints/fields/mjml/settings/text-transform.yml',
        'fields/mjml/settings/container-background-color' => __DIR__ . '/blueprints/fields/mjml/settings/container-background-color.yml',
        'fields/mjml/settings/padding' => __DIR__ . '/blueprints/fields/mjml/settings/padding.yml',
        'fields/mjml/settings/width' => __DIR__ . '/blueprints/fields/mjml/settings/width.yml',
        'fields/mjml/settings/css-class' => __DIR__ . '/blueprints/fields/mjml/settings/css-class.yml',
    ],
    'sections' => [
        'mjml_preview' => require __DIR__ . '/sections/mjml/preview.php',
        // 'mjml_email' => __DIR__ . '/blueprints/sections/mjml/email.yml',
    ],
    'snippets' => [
        // default layouts for html and mjml content representation
        'layouts/mjml/mjml' => __DIR__ . '/snippets/layouts/mjml/mjml.php',
        'layouts/mjml/html' => __DIR__ . '/snippets/layouts/mjml/html.php',
        // mjml blocks as html and mjml content representation
        'blocks/mj-divider' => __DIR__ . '/snippets/blocks/mj-divider.php',
        'blocks/mj-divider.mjml' => __DIR__ . '/snippets/blocks/mj-divider.mjml.php',
        'blocks/mj-heading' => __DIR__ . '/snippets/blocks/mj-heading.php',
        'blocks/mj-heading.mjml' => __DIR__ . '/snippets/blocks/mj-heading.mjml.php',
        'blocks/mj-image' => __DIR__ . '/snippets/blocks/mj-image.php',
        'blocks/mj-text' => __DIR__ . '/snippets/blocks/mj-text.php',
        'blocks/mj-text.mjml' => __DIR__ . '/snippets/blocks/mj-text.mjml.php',
        'blocks/mj-image' => __DIR__ . '/snippets/blocks/mj-image.php',
        'blocks/mj-image.mjml' => __DIR__ . '/snippets/blocks/mj-image.mjml.php',
        /* 'blocks/mj-list' => __DIR__ . '/snippets/blocks/mj-list.php',
        'blocks/mj-list.mjml' => __DIR__ . '/snippets/blocks/mj-list.mjml.php',
        'blocks/mj-raw' => __DIR__ . '/snippets/blocks/mj-raw.php',
        'blocks/mj-raw.mjml' => __DIR__ . '/snippets/blocks/mj-raw.mjml.php', */
        // mjml components as snippets
        'mjml/mj-head' => __DIR__ . '/snippets/mjml/mj-head.php',
        'mjml/mj-body' => __DIR__ . '/snippets/mjml/mj-body.php',
        'mjml/mj-section' => __DIR__ . '/snippets/mjml/mj-section.php',
        'mjml/mj-column' => __DIR__ . '/snippets/mjml/mj-column.php',
    ],
    'templates' => [
        'mjml' => __DIR__ . '/templates/mjml.php',
        'mjml.mjml' => __DIR__ . '/templates/mjml.mjml.php'
    ],
]);
