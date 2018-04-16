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
 * Highcharts events.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\HighchartsBundle\API\Chart\Chart
 * @version 5.0.14
 * @final
 */
final class HighchartsEvents implements JsonSerializable {

    /**
     * Add series.
     *
     * @var string
     * @since 1.2.0
     */
    private $addSeries;

    /**
     * After print.
     *
     * @var string
     * @since 4.1.0
     */
    private $afterPrint;

    /**
     * Before print.
     *
     * @var string
     * @since 4.1.0
     */
    private $beforePrint;

    /**
     * Click.
     *
     * @var string
     * @since 1.2.0
     */
    private $click;

    /**
     * Drilldown.
     *
     * @var string
     * @since 3.0.8
     */
    private $drilldown;

    /**
     * Drillup.
     *
     * @var string
     * @since 3.0.8
     */
    private $drillup;

    /**
     * Drillupall.
     *
     * @var string
     * @since 4.2.4
     */
    private $drillupall;

    /**
     * Load.
     *
     * @var string
     */
    private $load;

    /**
     * Redraw.
     *
     * @var string
     * @since 1.2.0
     */
    private $redraw;

    /**
     * Render.
     *
     * @var string
     * @since 5.0.7
     */
    private $render;

    /**
     * Selection.
     *
     * @var string
     */
    private $selection;

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

        // Clear the add series.
        $this->addSeries = null;

        // Clear the after print.
        $this->afterPrint = null;

        // Clear the before print.
        $this->beforePrint = null;

        // Clear the click.
        $this->click = null;

        // Clear the drilldown.
        $this->drilldown = null;

        // Clear the drillup.
        $this->drillup = null;

        // Clear the drillupall.
        $this->drillupall = null;

        // Clear the load.
        $this->load = null;

        // Clear the redraw.
        $this->redraw = null;

        // Clear the render.
        $this->render = null;

        // Clear the selection.
        $this->selection = null;
    }

    /**
     * Get the add series.
     *
     * @return string Returns the add series.
     */
    public function getAddSeries() {
        return $this->addSeries;
    }

    /**
     * Get the after print.
     *
     * @return string Returns the after print.
     */
    public function getAfterPrint() {
        return $this->afterPrint;
    }

    /**
     * Get the before print.
     *
     * @return string Returns the before print.
     */
    public function getBeforePrint() {
        return $this->beforePrint;
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
     * Get the drilldown.
     *
     * @return string Returns the drilldown.
     */
    public function getDrilldown() {
        return $this->drilldown;
    }

    /**
     * Get the drillup.
     *
     * @return string Returns the drillup.
     */
    public function getDrillup() {
        return $this->drillup;
    }

    /**
     * Get the drillupall.
     *
     * @return string Returns the drillupall.
     */
    public function getDrillupall() {
        return $this->drillupall;
    }

    /**
     * Get the load.
     *
     * @return string Returns the load.
     */
    public function getLoad() {
        return $this->load;
    }

    /**
     * Get the redraw.
     *
     * @return string Returns the redraw.
     */
    public function getRedraw() {
        return $this->redraw;
    }

    /**
     * Get the render.
     *
     * @return string Returns the render.
     */
    public function getRender() {
        return $this->render;
    }

    /**
     * Get the selection.
     *
     * @return string Returns the selection.
     */
    public function getSelection() {
        return $this->selection;
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
     * Set the add series.
     *
     * @param string $addSeries The add series.
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\Chart\HighchartsEvents Returns the highcharts events.
     */
    public function setAddSeries($addSeries) {
        $this->addSeries = $addSeries;
        return $this;
    }

    /**
     * Set the after print.
     *
     * @param string $afterPrint The after print.
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\Chart\HighchartsEvents Returns the highcharts events.
     */
    public function setAfterPrint($afterPrint) {
        $this->afterPrint = $afterPrint;
        return $this;
    }

    /**
     * Set the before print.
     *
     * @param string $beforePrint The before print.
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\Chart\HighchartsEvents Returns the highcharts events.
     */
    public function setBeforePrint($beforePrint) {
        $this->beforePrint = $beforePrint;
        return $this;
    }

    /**
     * Set the click.
     *
     * @param string $click The click.
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\Chart\HighchartsEvents Returns the highcharts events.
     */
    public function setClick($click) {
        $this->click = $click;
        return $this;
    }

    /**
     * Set the drilldown.
     *
     * @param string $drilldown The drilldown.
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\Chart\HighchartsEvents Returns the highcharts events.
     */
    public function setDrilldown($drilldown) {
        $this->drilldown = $drilldown;
        return $this;
    }

    /**
     * Set the drillup.
     *
     * @param string $drillup The drillup.
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\Chart\HighchartsEvents Returns the highcharts events.
     */
    public function setDrillup($drillup) {
        $this->drillup = $drillup;
        return $this;
    }

    /**
     * Set the drillupall.
     *
     * @param string $drillupall The drillupall.
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\Chart\HighchartsEvents Returns the highcharts events.
     */
    public function setDrillupall($drillupall) {
        $this->drillupall = $drillupall;
        return $this;
    }

    /**
     * Set the load.
     *
     * @param string $load The load.
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\Chart\HighchartsEvents Returns the highcharts events.
     */
    public function setLoad($load) {
        $this->load = $load;
        return $this;
    }

    /**
     * Set the redraw.
     *
     * @param string $redraw The redraw.
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\Chart\HighchartsEvents Returns the highcharts events.
     */
    public function setRedraw($redraw) {
        $this->redraw = $redraw;
        return $this;
    }

    /**
     * Set the render.
     *
     * @param string $render The render.
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\Chart\HighchartsEvents Returns the highcharts events.
     */
    public function setRender($render) {
        $this->render = $render;
        return $this;
    }

    /**
     * Set the selection.
     *
     * @param string $selection The selection.
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\Chart\HighchartsEvents Returns the highcharts events.
     */
    public function setSelection($selection) {
        $this->selection = $selection;
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

        // Set the add series.
        ArrayUtility::set($output, "addSeries", $this->addSeries, [null]);

        // Set the after print.
        ArrayUtility::set($output, "afterPrint", $this->afterPrint, [null]);

        // Set the before print.
        ArrayUtility::set($output, "beforePrint", $this->beforePrint, [null]);

        // Set the click.
        ArrayUtility::set($output, "click", $this->click, [null]);

        // Set the drilldown.
        ArrayUtility::set($output, "drilldown", $this->drilldown, [null]);

        // Set the drillup.
        ArrayUtility::set($output, "drillup", $this->drillup, [null]);

        // Set the drillupall.
        ArrayUtility::set($output, "drillupall", $this->drillupall, [null]);

        // Set the load.
        ArrayUtility::set($output, "load", $this->load, [null]);

        // Set the redraw.
        ArrayUtility::set($output, "redraw", $this->redraw, [null]);

        // Set the render.
        ArrayUtility::set($output, "render", $this->render, [null]);

        // Set the selection.
        ArrayUtility::set($output, "selection", $this->selection, [null]);

        // Return the output.
        return $output;
    }

}
