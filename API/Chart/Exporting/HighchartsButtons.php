<?php

/*
 * This file is part of the HighchartsBundle.
 *
 * (c) 2017 WBW
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\HighchartsBundle\API\Chart\Exporting;

use JsonSerializable;
use WBW\HighchartsBundle\API\Chart\Exporting\Buttons\HighchartsContextButton;

/**
 * Highcharts buttons.
 *
 * @author WBW <https://github.com/webeweb/WBWHighchartsBundle>
 * @package HighchartsBundle\API\Chart\Exporting
 * @version 5.0.14
 * @final
 */
final class HighchartsButtons implements JsonSerializable {

	/**
	 * Context button.
	 *
	 * @var HighchartsContextButton
	 */
	private $contextButton;

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

		// Check the context button.
		if (!is_null($this->contextButton)) {
			$this->contextButton->clear();
		}
	}

	/**
	 * Get the context button.
	 *
	 * @return HighchartsContextButton Returns the context button.
	 */
	public function getContextButton() {
		return $this->contextButton;
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
	 * Create a new context button.
	 *
	 * @return HighchartsContextButton Returns the context button.
	 */
	public function newContextButton() {
		$this->contextButton = new HighchartsContextButton();
		return $this->contextButton;
	}

	/**
	 * Set the context button.
	 *
	 * @param HighchartsContextButton $contextButton The context button.
	 * @return HighchartsButtons Returns the highcharts buttons.
	 */
	public function setContextButton(HighchartsContextButton $contextButton = null) {
		$this->contextButton = $contextButton;
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

		// Check the context button.
		if (!is_null($this->contextButton)) {
			$output["contextButton"] = $this->contextButton->toArray();
		}

		// Return the output.
		return $output;
	}
}

