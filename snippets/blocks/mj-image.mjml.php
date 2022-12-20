<?php

use Kirby\Toolkit\Html;
use Kirby\Toolkit\Str;

/** @var \Kirby\Cms\Block $block */
$alt     = $block->alt()->esc();
$caption = $block->caption();
$crop    = $block->crop()->isTrue();
$link    = $block->link();
$href    = $link->isNotEmpty() ? Str::esc($link->toUrl()) : null;
$ratio   = $block->ratio()->or('auto');
$src     = null;

if ($block->location() == 'web') {
    $src = $block->src()->esc();
} elseif ($image = $block->image()->toFile()) {
    $alt = $alt ?? $image->alt();
    $src = $image->url();
}

?>

<mj-column>
<?php if ($src) : ?>
    <mj-image <?= Html::attr([
        'data-ratio' => $ratio,
        'data-crop' => $crop,
        'href' => $href,
        'src' => $src,
        'alt' => $alt
    ], null, ' ') ?> />
    </mj-image>

        <?php if ($caption->isNotEmpty()) : ?>
            <mj-text>
                <?= $caption ?>
            </mj-text>
        <?php endif ?>
<?php endif ?>
</mj-column>
