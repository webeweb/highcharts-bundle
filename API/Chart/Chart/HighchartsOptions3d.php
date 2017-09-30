<?php

/*
 * This file is part of the HighchartsBundle.
 *
 * (c) 2017 WBW
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\HighchartsBundle\API\Chart\Chart;

use JsonSerializable;
use WBW\HighchartsBundle\API\Chart\Chart\Options3d\HighchartsFrame;

/**
 * Highcharts options3d.
 *
 * @author WBW <https://github.com/webeweb/WBWHighchartsBundle>
 * @package HighchartsBundle\API\Chart\Chart
 * @version 5.0.14
 * @final
 */
final class HighchartsOptions3d implements JsonSerializable {

	/**
	 * Alpha.
	 *
	 * @var integer
	 * @since 4.0
	 */
	private $alpha = 0;

	/**
	 * Axis label position.
	 *
	 * @var string
	 * @since 5.0.12
	 */
	private $axisLabelPosition;

	/**
	 * Beta.
	 *
	 * @var integer
	 * @since 4.0
	 */
	private $beta = 0;

	/**
	 * Depth.
	 *
	 * @var integer
	 * @since 4.0
	 */
	private $depth = 100;

	/**
	 * Enabled.
	 *
	 * @var boolean
	 * @since 4.0
	 */
	private $enabled = false;

	/**
	 * Fit to plot.
	 *
	 * @var boolean
	 * @since 4.2.4
	 */
	private $fitToPlot = true;

	/**
	 * Frame.
	 *
	 * @var HighchartsFrame
	 * @since 4.0
	 */
	private $frame;

	/**
	 * View distance.
	 *
	 * @var integer
	 * @since 4.0
	 */
	private $viewDistance = 100;

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

		// Check the alpha.
		if (!is_null($this->alpha)) {
			$this->alpha = null;
		}

		// Check the axis label position.
		if (!is_null($this->axisLabelPosition)) {
			$this->axisLabelPosition = null;
		}

		// Check the beta.
		if (!is_null($this->beta)) {
			$this->beta = null;
		}

		// Check the depth.
		if (!is_null($this->depth)) {
			$this->depth = null;
		}

		// Check the enabled.
		if (!is_null($this->enabled)) {
			$this->enabled = null;
		}

		// Check the fit to plot.
		if (!is_null($this->fitToPlot)) {
			$this->fitToPlot = null;
		}

		// Check the frame.
		if (!is_null($this->frame)) {
			$this->frame->clear();
		}

		// Check the view distance.
		if (!is_null($this->viewDistance)) {
			$this->viewDistance = null;
		}
	}

	/**
	 * Get the alpha.
	 *
	 * @return integer Returns the alpha.
	 */
	public function getAlpha() {
		return $this->alpha;
	}

	/**
	 * Get the axis label position.
	 *
	 * @return string Returns the axis label position.
	 */
	public function getAxisLabelPosition() {
		return $this->axisLabelPosition;
	}

	/**
	 * Get the beta.
	 *
	 * @return integer Returns the beta.
	 */
	public function getBeta() {
		return $this->beta;
	}

	/**
	 * Get the depth.
	 *
	 * @return integer Returns the depth.
	 */
	public function getDepth() {
		return $this->depth;
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
	 * Get the fit to plot.
	 *
	 * @return boolean Returns the fit to plot.
	 */
	public function getFitToPlot() {
		return $this->fitToPlot;
	}

	/**
	 * Get the frame.
	 *
	 * @return HighchartsFrame Returns the frame.
	 */
	public function getFrame() {
		return $this->frame;
	}

	/**
	 * Get the view distance.
	 *
	 * @return integer Returns the view distance.
	 */
	public function getViewDistance() {
		return $this->viewDistance;
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
	 * Create a new frame.
	 *
	 * @return HighchartsFrame Returns the frame.
	 */
	public function newFrame() {
		$this->frame = new HighchartsFrame();
		return $this->frame;
	}

	/**
	 * Set the alpha.
	 *
	 * @param integer $alpha The alpha.
	 * @return HighchartsOptions3d Returns the highcharts options3d.
	 */
	public function setAlpha($alpha) {
		$this->alpha = $alpha;
		return $this;
	}

	/**
	 * Set the axis label position.
	 *
	 * @param string $axisLabelPosition The axis label position.
	 * @return HighchartsOptions3d Returns the highcharts options3d.
	 */
	public function setAxisLabelPosition($axisLabelPosition) {
		$this->axisLabelPosition = $axisLabelPosition;
		return $this;
	}

	/**
	 * Set the beta.
	 *
	 * @param integer $beta The beta.
	 * @return HighchartsOptions3d Returns the highcharts options3d.
	 */
	public function setBeta($beta) {
		$this->beta = $beta;
		return $this;
	}

	/**
	 * Set the depth.
	 *
	 * @param integer $depth The depth.
	 * @return HighchartsOptions3d Returns the highcharts options3d.
	 */
	public function setDepth($depth) {
		$this->depth = $depth;
		return $this;
	}

	/**
	 * Set the enabled.
	 *
	 * @param boolean $enabled The enabled.
	 * @return HighchartsOptions3d Returns the highcharts options3d.
	 */
	public function setEnabled($enabled) {
		$this->enabled = $enabled;
		return $this;
	}

	/**
	 * Set the fit to plot.
	 *
	 * @param boolean $fitToPlot The fit to plot.
	 * @return HighchartsOptions3d Returns the highcharts options3d.
	 */
	public function setFitToPlot($fitToPlot) {
		$this->fitToPlot = $fitToPlot;
		return $this;
	}

	/**
	 * Set the frame.
	 *
	 * @param HighchartsFrame $frame The frame.
	 * @return HighchartsOptions3d Returns the highcharts options3d.
	 */
	public function setFrame(HighchartsFrame $frame = null) {
		$this->frame = $frame;
		return $this;
	}

	/**
	 * Set the view distance.
	 *
	 * @param integer $viewDistance The view distance.
	 * @return HighchartsOptions3d Returns the highcharts options3d.
	 */
	public function setViewDistance($viewDistance) {
		$this->viewDistance = $viewDistance;
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

		// Check the alpha.
		if (!is_null($this->alpha)) {
			$output["alpha"] = $this->alpha;
		}

		// Check the axis label position.
		if (!is_null($this->axisLabelPosition)) {
			$output["axisLabelPosition"] = $this->axisLabelPosition;
		}

		// Check the beta.
		if (!is_null($this->beta)) {
			$output["beta"] = $this->beta;
		}

		// Check the depth.
		if (!is_null($this->depth)) {
			$output["depth"] = $this->depth;
		}

		// Check the enabled.
		if (!is_null($this->enabled)) {
			$output["enabled"] = $this->enabled;
		}

		// Check the fit to plot.
		if (!is_null($this->fitToPlot)) {
			$output["fitToPlot"] = $this->fitToPlot;
		}

		// Check the frame.
		if (!is_null($this->frame)) {
			$output["frame"] = $this->frame->toArray();
		}

		// Check the view distance.
		if (!is_null($this->viewDistance)) {
			$output["viewDistance"] = $this->viewDistance;
		}

		// Return the output.
		return $output;
	}
}

