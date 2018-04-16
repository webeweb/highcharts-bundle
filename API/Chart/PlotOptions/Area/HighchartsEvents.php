<?php

/**
 * This file is part of the highcharts-bundle package.
 *
 * (c) 2017 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\Area;

use JsonSerializable;
use WBW\Library\Core\Utility\Argument\ArrayUtility;

/**
 * Highcharts events.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\Area
 * @version 5.0.14
 * @final
 */
final class HighchartsEvents implements JsonSerializable {

    /**
     * After animate.
     *
     * @var string
     * @since 4.0
     */
    private $afterAnimate;

    /**
     * Checkbox click.
     *
     * @var string
     * @since 1.2.0
     */
    private $checkboxClick;

    /**
     * Click.
     *
     * @var string
     */
    private $click;

    /**
     * Hide.
     *
     * @var string
     * @since 1.2.0
     */
    private $hide;

    /**
     * Legend item click.
     *
     * @var string
     */
    private $legendItemClick;

    /**
     * Mouse out.
     *
     * @var string
     */
    private $mouseOut;

    /**
     * Mouse over.
     *
     * @var string
     */
    private $mouseOver;

    /**
     * Show.
     *
     * @var string
     * @since 1.2.0
     */
    private $show;

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

        // Clear the after animate.
        $this->afterAnimate = null;

        // Clear the checkbox click.
        $this->checkboxClick = null;

        // Clear the click.
        $this->click = null;

        // Clear the hide.
        $this->hide = null;

        // Clear the legend item click.
        $this->legendItemClick = null;

        // Clear the mouse out.
        $this->mouseOut = null;

        // Clear the mouse over.
        $this->mouseOver = null;

        // Clear the show.
        $this->show = null;
    }

    /**
     * Get the after animate.
     *
     * @return string Returns the after animate.
     */
    public function getAfterAnimate() {
        return $this->afterAnimate;
    }

    /**
     * Get the checkbox click.
     *
     * @return string Returns the checkbox click.
     */
    public function getCheckboxClick() {
        return $this->checkboxClick;
    }

    /**
     * Get the click.
     *
     * @return string Returns the click.
     */
    public function getClick() {
        return $this->click;
    }

    /**
     * Get the hide.
     *
     * @return string Returns the hide.
     */
    public function getHide() {
        return $this->hide;
    }

    /**
     * Get the legend item click.
     *
     * @return string Returns the legend item click.
     */
    public function getLegendItemClick() {
        return $this->legendItemClick;
    }

    /**
     * Get the mouse out.
     *
     * @return string Returns the mouse out.
     */
    public function getMouseOut() {
        return $this->mouseOut;
    }

    /**
     * Get the mouse over.
     *
     * @return string Returns the mouse over.
     */
    public function getMouseOver() {
        return $this->mouseOver;
    }

    /**
     * Get the show.
     *
     * @return string Returns the show.
     */
    public function getShow() {
        return $this->show;
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
     * Set the after animate.
     *
     * @param string $afterAnimate The after animate.
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\Area\HighchartsEvents Returns the highcharts events.
     */
    public function setAfterAnimate($afterAnimate) {
        $this->afterAnimate = $afterAnimate;
        return $this;
    }

    /**
     * Set the checkbox click.
     *
     * @param string $checkboxClick The checkbox click.
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\Area\HighchartsEvents Returns the highcharts events.
     */
    public function setCheckboxClick($checkboxClick) {
        $this->checkboxClick = $checkboxClick;
        return $this;
    }

    /**
     * Set the click.
     *
     * @param string $click The click.
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\Area\HighchartsEvents Returns the highcharts events.
     */
    public function setClick($click) {
        $this->click = $click;
        return $this;
    }

    /**
     * Set the hide.
     *
     * @param string $hide The hide.
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\Area\HighchartsEvents Returns the highcharts events.
     */
    public function setHide($hide) {
        $this->hide = $hide;
        return $this;
    }

    /**
     * Set the legend item click.
     *
     * @param string $legendItemClick The legend item click.
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\Area\HighchartsEvents Returns the highcharts events.
     */
    public function setLegendItemClick($legendItemClick) {
        $this->legendItemClick = $legendItemClick;
        return $this;
    }

    /**
     * Set the mouse out.
     *
     * @param string $mouseOut The mouse out.
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\Area\HighchartsEvents Returns the highcharts events.
     */
    public function setMouseOut($mouseOut) {
        $this->mouseOut = $mouseOut;
        return $this;
    }

    /**
     * Set the mouse over.
     *
     * @param string $mouseOver The mouse over.
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\Area\HighchartsEvents Returns the highcharts events.
     */
    public function setMouseOver($mouseOver) {
        $this->mouseOver = $mouseOver;
        return $this;
    }

    /**
     * Set the show.
     *
     * @param string $show The show.
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\Area\HighchartsEvents Returns the highcharts events.
     */
    public function setShow($show) {
        $this->show = $show;
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

        // Set the after animate.
        ArrayUtility::set($output, "afterAnimate", $this->afterAnimate, [null]);

        // Set the checkbox click.
        ArrayUtility::set($output, "checkboxClick", $this->checkboxClick, [null]);

        // Set the click.
        ArrayUtility::set($output, "click", $this->click, [null]);

        // Set the hide.
        ArrayUtility::set($output, "hide", $this->hide, [null]);

        // Set the legend item click.
        ArrayUtility::set($output, "legendItemClick", $this->legendItemClick, [null]);

        // Set the mouse out.
        ArrayUtility::set($output, "mouseOut", $this->mouseOut, [null]);

        // Set the mouse over.
        ArrayUtility::set($output, "mouseOver", $this->mouseOver, [null]);

        // Set the show.
        ArrayUtility::set($output, "show", $this->show, [null]);

        // Return the output.
        return $output;
    }

}
