<?php

/*
 * This file is part of the HighchartsBundle.
 *
 * (c) 2017 WBW
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\HighchartsBundle\API\Chart\PlotOptions\Waterfall\States\Hover;

use JsonSerializable;

/**
 * Highcharts halo.
 *
 * @author WBW <https://github.com/webeweb/WBWHighchartsBundle>
 * @package WBW\HighchartsBundle\API\Chart\PlotOptions\Waterfall\States\Hover
 * @version 5.0.14
 * @final
 */
final class HighchartsHalo implements JsonSerializable {

	/**
	 * Attributes.
	 *
	 * @var Object
	 * @since 4.0
	 */
	private $attributes;

	/**
	 * Opacity.
	 *
	 * @var integer
	 * @since 4.0
	 */
	private $opacity = 0.25;

	/**
	 * Size.
	 *
	 * @var integer
	 * @since 4.0
	 */
	private $size = 10;

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

		// Check the attributes.
		if (!is_null($this->attributes)) {
			$this->attributes = null;
		}

		// Check the opacity.
		if (!is_null($this->opacity)) {
			$this->opacity = null;
		}

		// Check the size.
		if (!is_null($this->size)) {
			$this->size = null;
		}
	}

	/**
	 * Get the attributes.
	 *
	 * @return Object Returns the attributes.
	 */
	public function getAttributes() {
		return $this->attributes;
	}

	/**
	 * Get the opacity.
	 *
	 * @return integer Returns the opacity.
	 */
	public function getOpacity() {
		return $this->opacity;
	}

	/**
	 * Get the size.
	 *
	 * @return integer Returns the size.
	 */
	public function getSize() {
		return $this->size;
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
	 * Set the attributes.
	 *
	 * @param Object $attributes The attributes.
	 * @return HighchartsHalo Returns the highcharts halo.
	 */
	public function setAttributes($attributes) {
		$this->attributes = $attributes;
		return $this;
	}

	/**
	 * Set the opacity.
	 *
	 * @param integer $opacity The opacity.
	 * @return HighchartsHalo Returns the highcharts halo.
	 */
	public function setOpacity($opacity) {
		$this->opacity = $opacity;
		return $this;
	}

	/**
	 * Set the size.
	 *
	 * @param integer $size The size.
	 * @return HighchartsHalo Returns the highcharts halo.
	 */
	public function setSize($size) {
		$this->size = $size;
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

		// Check the attributes.
		if (!is_null($this->attributes)) {
			$output["attributes"] = $this->attributes;
		}

		// Check the opacity.
		if (!is_null($this->opacity)) {
			$output["opacity"] = $this->opacity;
		}

		// Check the size.
		if (!is_null($this->size)) {
			$output["size"] = $this->size;
		}

		// Return the output.
		return $output;
	}
}

