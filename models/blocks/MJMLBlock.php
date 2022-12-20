<?php
use Kirby\Cms\Block;

/**
 * Extends the Kirby\Cms\Block class
 * to create mjml content representation
 */
class MJMLBlock extends Block
{
    /**
	 * Converts the block to MJML
	 *
	 * @return string
	 */
	public function toMjml(): string
	{
		try {
			$kirby = $this->parent()->kirby();
            //return 'empty string';
			return (string)$kirby->snippet('blocks/' . $this->type() . '.mjml', $this->controller(), true);
		} catch (Throwable $e) {
			if ($kirby->option('debug') === true) {
				return '<p>Block error: "' . $e->getMessage() . '" in block type: "' . $this->type() . '"</p>';
			}

			return '';
		}
	}
}
