<?php

/**
 * This file is part of the highcharts-bundle package.
 *
 * (c) 2017 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\HighchartsBundle\API\Chart\Chart;

use JsonSerializable;
use WBW\Library\Core\Utility\Argument\ArrayUtility;

/**
 * Highcharts options3d.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\HighchartsBundle\API\Chart\Chart
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
     * @var \WBW\Bundle\HighchartsBundle\API\Chart\Chart\Options3d\HighchartsFrame
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
        if (true === $ignoreDefaultValues) {
            $this->clear();
        }
    }

    /**
     * Clear.
     *
     * @return void
     */
    public function clear() {

        // Clear the alpha.
        $this->alpha = null;

        // Clear the axis label position.
        $this->axisLabelPosition = null;

        // Clear the beta.
        $this->beta = null;

        // Clear the depth.
        $this->depth = null;

        // Clear the enabled.
        $this->enabled = null;

        // Clear the fit to plot.
        $this->fitToPlot = null;

        // Clear the frame.
        if (null !== $this->frame) {
            $this->frame->clear();
        }

        // Clear the view distance.
        $this->viewDistance = null;
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
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\Chart\Options3d\HighchartsFrame Returns the frame.
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
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\Chart\Options3d\HighchartsFrame Returns the frame.
     */
    public function newFrame() {
        $this->frame = new \WBW\Bundle\HighchartsBundle\API\Chart\Chart\Options3d\HighchartsFrame();
        return $this->frame;
    }

    /**
     * Set the alpha.
     *
     * @param integer $alpha The alpha.
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\Chart\HighchartsOptions3d Returns the highcharts options3d.
     */
    public function setAlpha($alpha) {
        $this->alpha = $alpha;
        return $this;
    }

    /**
     * Set the axis label position.
     *
     * @param string $axisLabelPosition The axis label position.
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\Chart\HighchartsOptions3d Returns the highcharts options3d.
     */
    public function setAxisLabelPosition($axisLabelPosition) {
        switch ($axisLabelPosition) {
            case null:
            case "auto":
            $this->axisLabelPosition = $axisLabelPosition;
            break;
        }
        return $this;
    }

    /**
     * Set the beta.
     *
     * @param integer $beta The beta.
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\Chart\HighchartsOptions3d Returns the highcharts options3d.
     */
    public function setBeta($beta) {
        $this->beta = $beta;
        return $this;
    }

    /**
     * Set the depth.
     *
     * @param integer $depth The depth.
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\Chart\HighchartsOptions3d Returns the highcharts options3d.
     */
    public function setDepth($depth) {
        $this->depth = $depth;
        return $this;
    }

    /**
     * Set the enabled.
     *
     * @param boolean $enabled The enabled.
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\Chart\HighchartsOptions3d Returns the highcharts options3d.
     */
    public function setEnabled($enabled) {
        $this->enabled = $enabled;
        return $this;
    }

    /**
     * Set the fit to plot.
     *
     * @param boolean $fitToPlot The fit to plot.
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\Chart\HighchartsOptions3d Returns the highcharts options3d.
     */
    public function setFitToPlot($fitToPlot) {
        $this->fitToPlot = $fitToPlot;
        return $this;
    }

    /**
     * Set the frame.
     *
     * @param \WBW\Bundle\HighchartsBundle\API\Chart\Chart\Options3d\HighchartsFrame $frame The frame.
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\Chart\HighchartsOptions3d Returns the highcharts options3d.
     */
    public function setFrame(\WBW\Bundle\HighchartsBundle\API\Chart\Chart\Options3d\HighchartsFrame $frame = null) {
        $this->frame = $frame;
        return $this;
    }

    /**
     * Set the view distance.
     *
     * @param integer $viewDistance The view distance.
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\Chart\HighchartsOptions3d Returns the highcharts options3d.
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

        // Set the alpha.
        ArrayUtility::set($output, "alpha", $this->alpha, [null]);

        // Set the axis label position.
        ArrayUtility::set($output, "axisLabelPosition", $this->axisLabelPosition, [null]);

        // Set the beta.
        ArrayUtility::set($output, "beta", $this->beta, [null]);

        // Set the depth.
        ArrayUtility::set($output, "depth", $this->depth, [null]);

        // Set the enabled.
        ArrayUtility::set($output, "enabled", $this->enabled, [null]);

        // Set the fit to plot.
        ArrayUtility::set($output, "fitToPlot", $this->fitToPlot, [null]);

        // Set the frame.
        if (null !== $this->frame) {
            ArrayUtility::set($output, "frame", $this->frame->toArray(), []);
        }

        // Set the view distance.
        ArrayUtility::set($output, "viewDistance", $this->viewDistance, [null]);

        // Return the output.
        return $output;
    }

}
