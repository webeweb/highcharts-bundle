<?php
/**
 * This file is part of the highcharts-bundle package.
 *
 * (c) 2017 NdC/WBW
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\HighchartsBundle\API\Chart\Chart\Options3d\Frame;

use JsonSerializable;

/**
 * Highcharts top.
 *
 * @author NdC/WBW <https://github.com/webeweb/>
 * @package WBW\Bundle\HighchartsBundle\API\Chart\Chart\Options3d\Frame
 * @version 5.0.14
 * @final
 */
final class HighchartsTop implements JsonSerializable {

	/**
	 * Color.
	 *
	 * @var string
	 */
	private $color = "transparent";

	/**
	 * Size.
	 *
	 * @var integer
	 */
	private $size = 1;

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
	 *
	 * @return void
	 */
	public function clear() {

		// Clear the color.
		$this->color = null;

		// Clear the size.
		$this->size = null;
	}

	/**
	 * Get the color.
	 *
	 * @return string Returns the color.
	 */
	public function getColor() {
		return $this->color;
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
	 * Set the color.
	 *
	 * @param string $color The color.
	 * @return \WBW\Bundle\HighchartsBundle\API\Chart\Chart\Options3d\Frame\HighchartsTop Returns the highcharts top.
	 */
	public function setColor($color) {
		$this->color = $color;
		return $this;
	}

	/**
	 * Set the size.
	 *
	 * @param integer $size The size.
	 * @return \WBW\Bundle\HighchartsBundle\API\Chart\Chart\Options3d\Frame\HighchartsTop Returns the highcharts top.
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

		// Check the color.
		if (!is_null($this->color)) {
			$output["color"] = $this->color;
		}

		// Check the size.
		if (!is_null($this->size)) {
			$output["size"] = $this->size;
		}

		// Return the output.
		return $output;
	}

}
