<?php
/**
 * Sparkle is a lightweight template engine built around the Spark parser
 *
 * @author Skylar Kelty <skylarkelty@gmail.com>
 */

namespace Sparkle\Themes\Corona;

/**
 * The default theme of Sparkle
 */
class CoronaTheme
{
	/**
	 * Process a tag and return the result
	 */
	public function process($tagName, $attributes, $innerHtml) {
		return $innerHtml;
	}
}