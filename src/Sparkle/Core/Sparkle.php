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
	/** Our configuration */
	private $_config;
	/** Our instance of Spark */
	private $_spark;
	/** Our theme instance */
	private $_theme;

	/**
	 * Initialise Sparkle
	 */
	public function __construct($config = array()) {
		$this->_config = $config;
		$this->checkConfig();

		$this->_spark = new \SkylarK\Spark\Spark($this->_config['namespace'], function($html, $inner) {
			return $this->snippet($html, $inner);
		});

		// Add a version tag
		$this->_spark->addTag("SparkleVersion", function($html, $inner) {
			return '<a href="https://github.com/SkylarKelty/Sparkle" target="_blank">Sparkle</a> v0.1_dev';
		});

		// Load the theme
		$theme = $this->_config['theme'];
		$themeCore = '\\Sparkle\\Themes\\' . $theme . '\\' . $theme . 'Theme';
		$this->_theme = new $themeCore();
	}

	/**
	 * Check our config
	 */
	private function checkConfig() {
		if (!isset($this->_config['namespace'])) {
			$this->_config['namespace'] = "SPK";
		}

		if (!isset($this->_config['theme'])) {
			$this->_config['theme'] = "Corona";
		}
	}

	/**
	 * Run a page through Spark
	 */
	public function run($page) {
		return $this->_spark->run($page);
	}

	/**
	 * Processes a snippet
	 */
	public function snippet($html, $inner) {
		// Get standard defined tags
		$defined_tags = $this->_spark->getTags();

		// Get the tagname for this element
		$tagName = $this->_spark->getTagName($html);

		// Can we escape quickly?
		if (isset($defined_tags[$tagName])) {
			$func = $defined_tags[$tagName];
			return $func($html, $inner);
		}

		// Looks like we need to do something here

		// Remove the namespace from the tag name
		$namespace = $this->_spark->getNamespace();
		$tagName = substr($tagName, strlen($namespace));

		// Now, tell the theme to get us some markup
		return $this->_theme->process($tagName, array("TODO"), $inner);
	}
}