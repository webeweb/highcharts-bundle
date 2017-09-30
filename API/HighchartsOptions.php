<?php

/*
 * This file is part of the HighchartsBundle.
 *
 * (c) 2017 WBW
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\HighchartsBundle\API;

use JsonSerializable;
use WBW\HighchartsBundle\API\Options\HighchartsGlobal;
use WBW\HighchartsBundle\API\Options\HighchartsLang;

/**
 * Highcharts options.
 *
 * @author WBW <https://github.com/webeweb/WBWHighchartsBundle>
 * @package WBW\HighchartsBundle\API
 * @version 5.0.14
 * @final
 */
final class HighchartsOptions implements JsonSerializable {

	/**
	 * Global.
	 *
	 * @var HighchartsGlobal
	 */
	private $global;

	/**
	 * Lang.
	 *
	 * @var HighchartsLang
	 */
	private $lang;

	/**
	 * Constructor.
	 *
	 * @param boolean $ignoreDefaultValues Ignore the default values.
	 */
	public function __construct($ignoreDefaultValues = true) {
		if ($ignoreDefaultValues === true) {
			$this->clear();
		}
	}

	/**
	 * Clear.
	 */
	public function clear() {

		// Check the global.
		if (!is_null($this->global)) {
			$this->global->clear();
		}

		// Check the lang.
		if (!is_null($this->lang)) {
			$this->lang->clear();
		}
	}

	/**
	 * Get the global.
	 *
	 * @return HighchartsGlobal Returns the global.
	 */
	public function getGlobal() {
		return $this->global;
	}

	/**
	 * Get the lang.
	 *
	 * @return HighchartsLang Returns the lang.
	 */
	public function getLang() {
		return $this->lang;
	}

	/**
	 * Serialize this instance.
	 *
	 * @return array Returns an array representing this instance.
	 */
	public function jsonSerialize() {
		return $this->toArray();
	}

	/**
	 * Create a new global.
	 *
	 * @return HighchartsGlobal Returns the global.
	 */
	public function newGlobal() {
		$this->global = new HighchartsGlobal();
		return $this->global;
	}

	/**
	 * Create a new lang.
	 *
	 * @return HighchartsLang Returns the lang.
	 */
	public function newLang() {
		$this->lang = new HighchartsLang();
		return $this->lang;
	}

	/**
	 * Set the global.
	 *
	 * @param HighchartsGlobal $global The global.
	 * @return HighchartsOptions Returns the highcharts options.
	 */
	public function setGlobal(HighchartsGlobal $global = null) {
		$this->global = $global;
		return $this;
	}

	/**
	 * Set the lang.
	 *
	 * @param HighchartsLang $lang The lang.
	 * @return HighchartsOptions Returns the highcharts options.
	 */
	public function setLang(HighchartsLang $lang = null) {
		$this->lang = $lang;
		return $this;
	}

	/**
	 * Convert into an array representing this instance.
	 *
	 * @return array Returns an array representing this instance.
	 */
	public function toArray() {

		// Initialize the output.
		$output = [];

		// Check the global.
		if (!is_null($this->global)) {
			$output["global"] = $this->global->toArray();
		}

		// Check the lang.
		if (!is_null($this->lang)) {
			$output["lang"] = $this->lang->toArray();
		}

		// Return the output.
		return $output;
	}
}

