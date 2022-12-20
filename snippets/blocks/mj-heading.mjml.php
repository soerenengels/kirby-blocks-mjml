<?php
/** @var \Kirby\Cms\MJMLBlock $block */
$color = $block->color();
$font_family = $block->font_family();
$font_size = $block->font_size();
$font_style = $block->font_style();
$font_weight = $block->font_weight();
$line_height = $block->line_height();
$letter_spacing = $block->letter_spacing();
$height = $block->height();
$text_decoration = $block->text_decoration();
$text_transform = $block->text_transform();
$align = $block->align();
$background_color = $block->background_color();
$padding = $block->padding();
?>

<mj-text
    color="<?= $color ?>"
    font-family="<?= $font_family ?>"
    font-size="<?= $font_size ?>"
    font-style="<?= $font_style ?>"
    font-weight="<?= $font_weight ?>"
    line-height="<?= $line_height ?>"
    letter-spacing="<?= $letter_spacing ?>"
    height="<?= $height ?>"
    text-decoration="<?= $text_decoration ?>"
    text-transform="<?= $text_transform ?>"
    align="<?= $align ?>"
    container-background-color="<?= $background_color ?>"
    padding="<?= $padding ?>">
    <<?= $level = $block->level()->or('h2') ?>><?= $block->text() ?></<?= $level ?>>
</mj-text>
