<?php
/**
 * Sparkle is a lightweight template engine built around the Spark parser
 *
 * @author Skylar Kelty <skylarkelty@gmail.com>
 */

namespace Sparkle\Core;

/**
 * The core of Sparkle
 */
class Sparkle
{
	/** Our instance of Spark*/
	private $_spark;

	/**
	 * Initialise Sparkle
	 */
	public function __construct() {
		$this->_spark = new \Spark\Core\Spark();
	}

	/**
	 * Run a page through Spark
	 */
	public function run($page) {
		return $this->_spark->run($page);
	}
}