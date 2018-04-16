<?php

/**
 * This file is part of the highcharts-bundle package.
 *
 * (c) 2017 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\HighchartsBundle\API\Chart;

use JsonSerializable;
use WBW\Library\Core\Utility\Argument\ArrayUtility;

/**
 * Highcharts drilldown.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\HighchartsBundle\API\Chart
 * @version 5.0.14
 * @final
 */
final class HighchartsDrilldown implements JsonSerializable {

    /**
     * Active axis label style.
     *
     * @var array
     * @since 3.0.8
     */
    private $activeAxisLabelStyle = ["cursor" => "pointer", "color" => "#003399", "fontWeight" => "bold", "textDecoration" => "underline"];

    /**
     * Active data label style.
     *
     * @var array
     * @since 3.0.8
     */
    private $activeDataLabelStyle = ["cursor" => "pointer", "color" => "#003399", "fontWeight" => "bold", "textDecoration" => "underline"];

    /**
     * Allow point drilldown.
     *
     * @var boolean
     * @since 4.1.7
     */
    private $allowPointDrilldown = true;

    /**
     * Animation.
     *
     * @var boolean|array
     * @since 3.0.8
     */
    private $animation;

    /**
     * Drill up button.
     *
     * @var array
     * @since 3.0.8
     */
    private $drillUpButton;

    /**
     * Series.
     *
     * @var array
     * @since 3.0.8
     */
    private $series;

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

        // Clear the active axis label style.
        $this->activeAxisLabelStyle = null;

        // Clear the active data label style.
        $this->activeDataLabelStyle = null;

        // Clear the allow point drilldown.
        $this->allowPointDrilldown = null;

        // Clear the animation.
        $this->animation = null;

        // Clear the drill up button.
        $this->drillUpButton = null;

        // Clear the series.
        $this->series = null;
    }

    /**
     * Get the active axis label style.
     *
     * @return array Returns the active axis label style.
     */
    public function getActiveAxisLabelStyle() {
        return $this->activeAxisLabelStyle;
    }

    /**
     * Get the active data label style.
     *
     * @return array Returns the active data label style.
     */
    public function getActiveDataLabelStyle() {
        return $this->activeDataLabelStyle;
    }

    /**
     * Get the allow point drilldown.
     *
     * @return boolean Returns the allow point drilldown.
     */
    public function getAllowPointDrilldown() {
        return $this->allowPointDrilldown;
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
     * Get the drill up button.
     *
     * @return array Returns the drill up button.
     */
    public function getDrillUpButton() {
        return $this->drillUpButton;
    }

    /**
     * Get the series.
     *
     * @return array Returns the series.
     */
    public function getSeries() {
        return $this->series;
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
     * Set the active axis label style.
     *
     * @param array $activeAxisLabelStyle The active axis label style.
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\HighchartsDrilldown Returns the highcharts drilldown.
     */
    public function setActiveAxisLabelStyle(array $activeAxisLabelStyle = null) {
        $this->activeAxisLabelStyle = $activeAxisLabelStyle;
        return $this;
    }

    /**
     * Set the active data label style.
     *
     * @param array $activeDataLabelStyle The active data label style.
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\HighchartsDrilldown Returns the highcharts drilldown.
     */
    public function setActiveDataLabelStyle(array $activeDataLabelStyle = null) {
        $this->activeDataLabelStyle = $activeDataLabelStyle;
        return $this;
    }

    /**
     * Set the allow point drilldown.
     *
     * @param boolean $allowPointDrilldown The allow point drilldown.
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\HighchartsDrilldown Returns the highcharts drilldown.
     */
    public function setAllowPointDrilldown($allowPointDrilldown) {
        $this->allowPointDrilldown = $allowPointDrilldown;
        return $this;
    }

    /**
     * Set the animation.
     *
     * @param boolean|array $animation The animation.
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\HighchartsDrilldown Returns the highcharts drilldown.
     */
    public function setAnimation($animation) {
        $this->animation = $animation;
        return $this;
    }

    /**
     * Set the drill up button.
     *
     * @param array $drillUpButton The drill up button.
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\HighchartsDrilldown Returns the highcharts drilldown.
     */
    public function setDrillUpButton(array $drillUpButton = null) {
        $this->drillUpButton = $drillUpButton;
        return $this;
    }

    /**
     * Set the series.
     *
     * @param array $series The series.
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\HighchartsDrilldown Returns the highcharts drilldown.
     */
    public function setSeries(array $series = null) {
        $this->series = $series;
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

        // Set the active axis label style.
        ArrayUtility::set($output, "activeAxisLabelStyle", $this->activeAxisLabelStyle, [null]);

        // Set the active data label style.
        ArrayUtility::set($output, "activeDataLabelStyle", $this->activeDataLabelStyle, [null]);

        // Set the allow point drilldown.
        ArrayUtility::set($output, "allowPointDrilldown", $this->allowPointDrilldown, [null]);

        // Set the animation.
        ArrayUtility::set($output, "animation", $this->animation, [null]);

        // Set the drill up button.
        ArrayUtility::set($output, "drillUpButton", $this->drillUpButton, [null]);

        // Set the series.
        ArrayUtility::set($output, "series", $this->series, [null]);

        // Return the output.
        return $output;
    }

}
