<?php

/*
 * This file is part of the highcharts-bundle package.
 *
 * (c) 2017 NdC/WBW
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\HighchartsBundle\API\Chart\Series\Columnrange\States;

use JsonSerializable;

/**
 * Highcharts hover.
 *
 * @author NdC/WBW <https://github.com/webeweb/>
 * @package WBW\Bundle\HighchartsBundle\API\Chart\Series\Columnrange\States
 * @version 5.0.14
 * @final
 */
final class HighchartsHover implements JsonSerializable {

	/**
	 * Animation.
	 *
	 * @var boolean|array
	 * @since 5.0.8
	 */
	private $animation = ["duration" => 50];

	/**
	 * Enabled.
	 *
	 * @var boolean
	 * @since 1.2
	 */
	private $enabled = true;

	/**
	 * Halo.
	 *
	 * @var array
	 * @since 4.0
	 */
	private $halo;

	/**
	 * Line width.
	 *
	 * @var integer
	 */
	private $lineWidth = 2;

	/**
	 * Line width plus.
	 *
	 * @var integer
	 * @since 4.0.3
	 */
	private $lineWidthPlus = 1;

	/**
	 * Marker.
	 *
	 * @var \WBW\Bundle\HighchartsBundle\API\Chart\Series\Columnrange\States\Hover\HighchartsMarker
	 * @deprecated
	 */
	private $marker;

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

		// Clear the animation.
		$this->animation = null;

		// Clear the enabled.
		$this->enabled = null;

		// Clear the halo.
		$this->halo = null;

		// Clear the line width.
		$this->lineWidth = null;

		// Clear the line width plus.
		$this->lineWidthPlus = null;

		// Clear the marker.
		if (!is_null($this->marker)) {
			$this->marker->clear();
		}
	}

	/**
	 * Get the animation.
	 *
	 * @return boolean|array Returns the animation.
	 */
	public function getAnimation() {
		return $this->animation;
	}

	/**
	 * Get the enabled.
	 *
	 * @return boolean Returns the enabled.
	 */
	public function getEnabled() {
		return $this->enabled;
	}

	/**
	 * Get the halo.
	 *
	 * @return array Returns the halo.
	 */
	public function getHalo() {
		return $this->halo;
	}

	/**
	 * Get the line width.
	 *
	 * @return integer Returns the line width.
	 */
	public function getLineWidth() {
		return $this->lineWidth;
	}

	/**
	 * Get the line width plus.
	 *
	 * @return integer Returns the line width plus.
	 */
	public function getLineWidthPlus() {
		return $this->lineWidthPlus;
	}

	/**
	 * Get the marker.
	 *
	 * @return \WBW\Bundle\HighchartsBundle\API\Chart\Series\Columnrange\States\Hover\HighchartsMarker Returns the marker.
	 * @deprecated
	 */
	public function getMarker() {
		return $this->marker;
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
	 * Create a new marker.
	 *
	 * @return \WBW\Bundle\HighchartsBundle\API\Chart\Series\Columnrange\States\Hover\HighchartsMarker Returns the marker.
	 */
	public function newMarker() {
		$this->marker = new \WBW\Bundle\HighchartsBundle\API\Chart\Series\Columnrange\States\Hover\HighchartsMarker();
		return $this->marker;
	}

	/**
	 * Set the animation.
	 *
	 * @param boolean|array $animation The animation.
	 * @return \WBW\Bundle\HighchartsBundle\API\Chart\Series\Columnrange\States\HighchartsHover Returns the highcharts hover.
	 */
	public function setAnimation($animation) {
		$this->animation = $animation;
		return $this;
	}

	/**
	 * Set the enabled.
	 *
	 * @param boolean $enabled The enabled.
	 * @return \WBW\Bundle\HighchartsBundle\API\Chart\Series\Columnrange\States\HighchartsHover Returns the highcharts hover.
	 */
	public function setEnabled($enabled) {
		$this->enabled = $enabled;
		return $this;
	}

	/**
	 * Set the halo.
	 *
	 * @param array $halo The halo.
	 * @return \WBW\Bundle\HighchartsBundle\API\Chart\Series\Columnrange\States\HighchartsHover Returns the highcharts hover.
	 */
	public function setHalo(array $halo = null) {
		$this->halo = $halo;
		return $this;
	}

	/**
	 * Set the line width.
	 *
	 * @param integer $lineWidth The line width.
	 * @return \WBW\Bundle\HighchartsBundle\API\Chart\Series\Columnrange\States\HighchartsHover Returns the highcharts hover.
	 */
	public function setLineWidth($lineWidth) {
		$this->lineWidth = $lineWidth;
		return $this;
	}

	/**
	 * Set the line width plus.
	 *
	 * @param integer $lineWidthPlus The line width plus.
	 * @return \WBW\Bundle\HighchartsBundle\API\Chart\Series\Columnrange\States\HighchartsHover Returns the highcharts hover.
	 */
	public function setLineWidthPlus($lineWidthPlus) {
		$this->lineWidthPlus = $lineWidthPlus;
		return $this;
	}

	/**
	 * Set the marker.
	 *
	 * @param \WBW\Bundle\HighchartsBundle\API\Chart\Series\Columnrange\States\Hover\HighchartsMarker $marker The marker.
	 * @return \WBW\Bundle\HighchartsBundle\API\Chart\Series\Columnrange\States\HighchartsHover Returns the highcharts hover.
	 * @deprecated
	 */
	public function setMarker(\WBW\Bundle\HighchartsBundle\API\Chart\Series\Columnrange\States\Hover\HighchartsMarker $marker = null) {
		$this->marker = $marker;
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

		// Check the animation.
		if (!is_null($this->animation)) {
			$output["animation"] = $this->animation;
		}

		// Check the enabled.
		if (!is_null($this->enabled)) {
			$output["enabled"] = $this->enabled;
		}

		// Check the halo.
		if (!is_null($this->halo)) {
			$output["halo"] = $this->halo;
		}

		// Check the line width.
		if (!is_null($this->lineWidth)) {
			$output["lineWidth"] = $this->lineWidth;
		}

		// Check the line width plus.
		if (!is_null($this->lineWidthPlus)) {
			$output["lineWidthPlus"] = $this->lineWidthPlus;
		}

		// Check the marker.
		if (!is_null($this->marker)) {
			$output["marker"] = $this->marker->toArray();
		}

		// Return the output.
		return $output;
	}

}
