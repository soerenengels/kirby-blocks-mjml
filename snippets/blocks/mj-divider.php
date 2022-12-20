<?php
/* TODO: Validate Input */
use Kirby\Toolkit\Html;
/**
 * @var \Kirby\Cms\Block $block
 * based on https://getkirby.com/docs/reference/panel/blocks/line
 * */
$width = $block->width();
$align = $block->align();
$padding = $block->padding();
$color = $block->color();
$border_style = $block->border_style();
$border_width = $block->border_width();
$border = $border_width . ' ' . $border_style . ' ' . $color;
?>
<div style="text-align: <?= $align ?>;">
    <hr style="display: inline-block; width: <?= $width ?>; padding: <?= $padding ?>; border: 0; border-top: <?= $border ?>;" />
</div>
