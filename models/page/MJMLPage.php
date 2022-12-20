<?php

use Kirby\Cms\Page;

class MJMLPage extends Page
{
    /**
     * Render Content as MJML
     * @return string MJML string
     */
    public function toMJML(): string {
        // (get content field)
        // render as mjml
        // return $page->render('mjml');
        return '<b>successfully rendered as mjml</b>';
    }

    /**
     * Render Content as HTML Email
     * @return string HTML string
     */
    public function toEmail(): string {
        // setup
        // require dirname(__DIR__) . '/classes/MJML.php';
        // use Soerenengels\Newsletter\MJML;

        // get MJML as MJML Object()
        // $mjml = new MJML($page->toMJML());

        // render as email
        // return $mjml->toHTML();
        return '<b>successfully rendered as email</b>';
    }

}
