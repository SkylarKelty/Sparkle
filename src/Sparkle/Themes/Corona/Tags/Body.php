<?php
/**
 * Sparkle is a lightweight template engine built around the Spark parser
 *
 * @author Skylar Kelty <skylarkelty@gmail.com>
 */

namespace Sparkle\Themes\Corona\Tags;

/**
 * The Body tag
 */
class Body extends \Sparkle\Core\Tag
{
	public function render($attributes, $innerHTML) {
		return '<body>' . $innerHTML . '</body>';
	}
}