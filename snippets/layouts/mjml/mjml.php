<mjml
    lang="<?= ($language ?? $kirby->language()) ?? 'en' ?>"
    dir="<?= ($direction ?? $kirby->language()?->direction()) ?? 'ltr' ?>">

    <?php snippet('mjml/mj-head', [
        'title' => $title ?? $page->title(),
        'preview' => $preview ?? $page->preview()
    ]) ?>

    <!-- https://documentation.mjml.io/#mj-body -->
    <?php snippet('mjml/mj-body', [
       'background_color' => '#f5f5f5',
       'css_class' => '',
       'width' => '600px'
    ], slots: true) ?>

    <?= $slot ?>
    <?php endsnippet(); ?>

</mjml>
