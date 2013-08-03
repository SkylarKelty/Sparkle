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
class CoronaTheme extends \Sparkle\Core\Theme
{
	/**
	 * Returns an array of valid tags for this theme
	 */
	protected function getTags() {
		return array(
			"Title",
			"Body",
			"ThemeVersion"
		);
	}
}