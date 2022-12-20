<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $page->title() ?></title>
    <style>
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }
        .mjml {
            margin: 0 auto;
            max-width: 80ch;
        }
        .mjml .blocks {
            margin-block: .5em;
        }
        .mjml .email_head {
            margin: 2em;
        }
        .mjml .email_body {
            box-shadow: 0 0 2em black;
            margin: 2em;
            padding: .5em;
        }
        .mjml .grid {
            display: grid;
            grid-template-columns: repeat(12, 1fr);
        }
        .mjml .column {
            grid-column: span 12;
        }
        @media screen and (min-width: 600px) {
            .mjml .column {
                grid-column: span var(--span);
            }
        }

        img {
            max-width: 100%;
            height: auto;
        }
        p {
            word-wrap: break-word;
        }

    </style>
</head>
<body class="mjml">
    <header class="email_head">
        <p><strong>Subject:</strong> <?= $page->title() ?></p>
        <p><strong>Preview:</strong> <?= $page->mjml_preview() ?></p>
    </header>
    <main class="email_body">
        <?= $slot ?>
    </main>
</body>
</html>
