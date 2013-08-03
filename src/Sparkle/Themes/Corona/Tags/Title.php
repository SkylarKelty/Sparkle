<?php
/**
 * Sparkle is a lightweight template engine built around the Spark parser
 *
 * @author Skylar Kelty <skylarkelty@gmail.com>
 */

namespace Sparkle\Themes\Corona\Tags;

/**
 * The Title tag
 */
class Title extends \Sparkle\Core\Tag
{
	public function render($attributes, $innerHTML) {
		return '<title>' . $innerHTML . '</title>';
	}
}