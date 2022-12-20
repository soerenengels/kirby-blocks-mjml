# Kirby Blocks: MJML Edition (work in progress)

The **kirby-blocks-mjml** plugin for [Kirby](https://getkirby.com/) (> 3.9.0) helps you to create responsive emails by the use of custom [MJML](https://documentation.mjml.io/) blocks.

This plugin consits basically of three components:

- a responsive email **blueprint**,
- two default **templates** for mjml and html content representation
- a **MJML class** to generate respomsive html from a mjml document

Install the plugin and its requirements and use it for your needs.

----

## Work in Progress

As the plugin is still work in progress it is discouraged to use it in production. Comments, feedback or issues are very welcome.

- TODO: implement the attributes for ```snippets/blocks/mj-*.php``` where not already implemented
- add further components, see [mjml documentation](https://documentation.mjml.io/)
- TODO: improve documentation in ```README.md```, e.g. explain the problem: why is mjml a solution?
- TODO: [publish plugin](https://getkirby.com/docs/guide/plugins/plugin-setup-basic#publish-your-plugin) on [packagist](https://packagist.org/)
- TODO: tell [people about it](https://forum.getkirby.com/t/email-template-editing-in-panel/20703/6)

Currently only tested in local environment.

----

In your README, describe the plugin in every little detail and how to use it:

****

## Install the plugin

This plugin requires **Kirby >3.9.0** and **node** installed in your environment.

You have [three](https://getkirby.com/docs/guide/plugins/plugin-setup-basic#the-three-plugin-installation-methods) options to install this plugin.

### Composer

``` bash
composer require soerenengels/kirby-blocks-mjml
```

### Download

Download and copy this repository to `/site/plugins/kirby-blocks-mjml`.

### Git submodule

``` bash
git submodule add https://github.com/soerenengels/kirby-blocks-mjml.git site/plugins/kirby-blocks-mjml
```

## Setup

*How can users use the plugin? Ideally, add step by step instructions, not just a few examples. This is particularly important if using the plugin requires some background knowledge or user code.*

*Additional instructions on how to configure the plugin (e.g. blueprint setup, config options, etc.)*

1. install plugin
2. install requirement in plugin repository: ``` npm i```
3. use mjml-Template

As there seems to be any maintained possibility to convert MJML to HMTL in PHP, this plugin requires the installation of the mjml node module.

## Options

*Document the options and APIs that this plugin offers*

You can choose between a couple of handy MJML-Blocks to create a responsive email.

*Are there any config settings? If so, what is each config setting good for?*

## Documentation

### Templates

```php
  'templates' => [
    'mjml' => __DIR__ . '/templates/mjml.php', // default template for email on page
    'mjml.mjml' => __DIR__ . '/templates/mjml.mjml.php' // mjml content representation
  ],
```

This plugin provides two templates: ```templates/mjml.php``` and ```templates/mjml.mjml.php```. While the first template creates the default template, if you plan to display the E-Mail on the page (e.g. a newsletter issue), the second template creates a mjml document ([content representation](https://getkirby.com/docs/guide/templates/content-representations)) for further processing.

The mjml content representation utilizes the layouts/mjml.php snippet:

```php
$data = [
  'language' => $kirby->language() ?? 'en', // TODO: default as option
  'direction' => $kirby->language()?->direction() ?? 'ltr', // TODO: default as option
  'title' => $page->title(),
  'preview' => $page->preview(),
  'font' => [
    'name' => null,
    'href' => null
  ],
]
```

If you do not want your website to expose the mjml content representation publicly, you have to secure the route.

E.g. in site/config/config.php:

```php
return [
  // ...
  'routes' => [
    [
      'pattern' => '(:any).mjml',
      'action' => function () {
        // TODO: Add example
      }
    ]
  ]
  // ...
]
```

### What is a MJMLBlock?

A MJML block consists of a blueprint, two block content representations and preview component.

```files
blueprints/
  blocks/
    mjml/
      mj-custom-block-name.yml
snippets/
  blocks/
    mj-custom-block-name.php
    mj-custom-block-name.mjml.php
src/
  components/
    Blocks/
      MJMLCustomBlockName.vue
```

The files get registered in the ```src/index.js``` and ```index.php```.

### What do I use the BlockModel for?

The BlockModel *MJMLBlock* extends the custom MJML blocks, which are based on the *Kirby\Cms\Block* class. Therefor you can use the ```->toMJML()``` method on MJML blocks to create a MJML content representation. This method is internally used to create a valid MJML document from the mjml-Template.

Example:
...

### What does the MJML class do?

The MJML class is a simplified version of [qferr's](https://github.com/qferr) [qferr/mjml-php](https://github.com/qferr/mjml-php) class, which unfortunately didn't work out for me. It takes a ```$mjml_input``` as parameter and offers the ```->toHTMLEmail()``` method to generate a responsive html email from a valid mjml document.

Example:

```php
$mjml = new MJML('a valid mjml document');
$html_email = $mjml->toHTMLEmail();
```

As alternative you could also use the MJML API.

## Development

I have some **open questions** development wise and would be glad about feedback and help:

- What are ways to improve performance?
- Can I use template language with this plugin?
- Are there ideas to better connect the MJML blocks to Core Kirby blocks? [maybe...?](https://getkirby.com/docs/reference/plugins/extensions/blocks) [or this](https://getkirby.com/docs/cookbook/panel/block-basics)
- How can I make the code more error prove?
- Where are validations necessary?
- How to make the preview section ```src/Sections/MJMLPreview.vue``` instantly reflect changes? [maybe...?](https://getkirby.com/docs/reference/plugins/internals/store#how-to-access-store)
- Are there ideas to programmatically generate attributes from MJML documentation in case of changes?

You can extend this plugin by [creating a custom MJML component](https://github.com/mjmlio/mjml-component-boilerplate) and adding a MJMLBlock to Kirby.

## License

MIT

## Credits

- Thanks to the incredible [Kirby Documentation](https://getkirby.com/docs/reference/) and Guides
- [MJML](https://github.com/mjmlio/mjml)
- MJML Class is inspired by [qferr's](https://github.com/qferr) [qferr/mjml-php](https://github.com/qferr/mjml-php)
- [Sören Engels](https://github.com/soerenengels)

## To implement

- ```<mj-section>``` https://documentation.mjml.io/#mj-section --> get settings in snippet
- ```<mj-spacer>``` https://documentation.mjml.io/#mj-spacer
- ```<mj-social>``` https://documentation.mjml.io/#mj-social
- ```<mj-social-element>``` https://documentation.mjml.io/#mj-social-element
- ```<mj-raw>``` https://documentation.mjml.io/#mj-raw
- ```<mj-hero>``` https://documentation.mjml.io/#mj-hero
- ```<mj-image>``` https://documentation.mjml.io/#mj-image
- ```<mj-navbar>``` https://documentation.mjml.io/#mj-navbar
- ```<mj-include>``` https://documentation.mjml.io/#mj-include
- ```<mj-table>``` https://documentation.mjml.io/#mj-include
- ```<mj-accordion>``` https://documentation.mjml.io/#mj-accordion
- ```<mj-button>``` https://documentation.mjml.io/#mj-button

## Kirby Core Layouts missing feature to implement well

**Issue:** ...
**Idea:** May be possible by utilizing the [kirby-column-settings](https://github.com/Adaphath/kirby-column-settings) or [kirby-column-blocks](https://github.com/youngcut/) Plugin?

- ```<mj-wrapper>``` https://documentation.mjml.io/#mj-wrapper
- ```<mj-column>``` https://documentation.mjml.io/#mj-column
- - ```<mj-group>``` https://documentation.mjml.io/#mj-group

## Not implemented

- ```<mj-html-attribute>``` https://documentation.mjml.io/#mj-attributes
- ```<mj-carousel>``` https://documentation.mjml.io/#mj-carousel
