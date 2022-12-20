<?php
namespace Soerenengels\Newsletter;

/**
     * Renders MJML document string
     * to HTML document string
     * via node_modules mjml binary
     * @param string $mjml_input MJML input as string
     * @param string $mjml_binary MJML binary, defaults to node_modules/.bin/mjml
     * @return string generated HTML email
     */
class MJML
{
    /**
     * The MJML binary
     * @var string $bin binary of mjml module
     */
    private $bin;

    /**
     * MJML constructor.
     * @param string $mjml_input
     * @param string $mjml_binary
     */
    public function __construct(string $mjml_input, string $mjml_binary = null)
    {
        $this->mjml_input = $mjml_input;
        $this->bin = ($mjml_binary != null) ? $mjml_binary : (getcwd() . '/node_modules/.bin/mjml');
        $this->error_message = '';
        $this->html_output = null;
    }

    // TODO: ->validate()
    // private function to validate mjml_input

    /**
     * Generate HTML email
     * @return string HTML Content for Mail
     */
    public function toHTMLMail(): string
    {
        /* $options = `-i -s --config.validationLevel --config.minify`;
        $command = `node {$this->bin} {$options}`; */
        $command = 'node ' . getcwd() . '/node_modules/.bin/mjml -i -s --config.validationLevel --config.minify';

        $descriptor_spec = array(
            0 => array("pipe", "r"),
            1 => array("pipe", "w"),
            2 => array("pipe", "w")
        );
        $process = proc_open(
            $command,
            $descriptor_spec,
            $pipes,
            null,
        );

        fwrite($pipes[0], $this->mjml_input);
        fclose($pipes[0]);
        $this->html_output = stream_get_contents($pipes[1]);
        fclose($pipes[1]);
        $this->error_message = stream_get_contents($pipes[2]);
        fclose($pipes[2]);
        proc_close($process);

        // in case of debugging return: dump($this->error_message);
        return $this->html_output;
    }
}
