<?php
/**
 * @var \Kirby\Cms\Block $block
 * based on https://getkirby.com/docs/reference/panel/blocks/text
 * */
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
<div class="mjml-text" style="color: <?= $color ?>; font-family: <?= $font_family ?>; font-size: <?= $font_size ?>; font-style: <?= $font_style ?>; font-weight: <?= $font_weight ?>; line-height: <?= $line_height ?>; letter-spacing: <?= $letter_spacing ?>; height: <?= $height ?>; text-decoration: <?= $text_decoration ?>; text-transform: <?= $text_transform ?>; text-align: <?= $align ?>; background-color: <?= $background_color ?>; padding: <?= $padding ?>;">
    <?= $block->text(); ?>
</div>
