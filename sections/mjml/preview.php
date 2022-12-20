<?php
use Kirby\Toolkit\Str;

return [
    'props' => [
        'label' => function (string $label = 'Inbox Preview') {
            return $label;
        },
    ],
    'computed' => [
        'subject' => function (): string {
            return Str::short($this->model()->title(), 140);
        },
        'preview' => function (): string {
            return Str::short($this->model()->mjml_preview(), 140);
        },
        'abstract' => function (): string {
            return Str::short($this->model()->mjml_email()->toBlocks()->excerpt(), 140);
        },
        'url' => function (): string {
            return $this->model()->url();
        }
    ]
];
