<?php
/**
 * Sparkle is a lightweight template engine built around the Spark parser
 *
 * @author Skylar Kelty <skylarkelty@gmail.com>
 */

namespace Sparkle\Core;

/**
 * A set of basic methods that Themes rely on
 */
abstract class Theme
{
	/**
	 * Process a tag and return the result
	 */
	public function process($tagName, $attributes, $innerHtml) {

		// Get our namespace
		$namespace = get_called_class();
		$namespace = substr($namespace, 0, strrpos($namespace, '\\'));

		$tag = $namespace . '\\Tags\\' . $tagName;
		$tag = new $tag();

		return $tag->render($attributes, $innerHtml);
	}
}