<?php

/*
 * This file is part of the WBWHighchartsBundle package.
 *
 * (c) 2017 NdC/WBW
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\HighchartsBundle\API\Chart;

use JsonSerializable;

/**
 * Highcharts loading.
 *
 * @author WBW <https://github.com/webeweb/WBWHighchartsBundle>
 * @package WBW\HighchartsBundle\API\Chart
 * @version 5.0.14
 * @final
 */
final class HighchartsLoading implements JsonSerializable {

    /**
     * Hide duration.
     *
     * @var integer
     * @since 1.2.0
     */
    private $hideDuration = 100;

    /**
     * Label style.
     *
     * @var array
     * @since 1.2.0
     */
    private $labelStyle = ["fontWeight" => "bold", "position" => "relative", "top" => "45%"];

    /**
     * Show duration.
     *
     * @var integer
     * @since 1.2.0
     */
    private $showDuration = 100;

    /**
     * Style.
     *
     * @var array
     * @since 1.2.0
     */
    private $style = ["position" => "absolute", "backgroundColor" => "#ffffff", "opacity" => 0.5, "textAlign" => "center"];

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

        // Clear the hide duration.
        $this->hideDuration = null;

        // Clear the label style.
        $this->labelStyle = null;

        // Clear the show duration.
        $this->showDuration = null;

        // Clear the style.
        $this->style = null;
    }

    /**
     * Get the hide duration.
     *
     * @return integer Returns the hide duration.
     */
    public function getHideDuration() {
        return $this->hideDuration;
    }

    /**
     * Get the label style.
     *
     * @return array Returns the label style.
     */
    public function getLabelStyle() {
        return $this->labelStyle;
    }

    /**
     * Get the show duration.
     *
     * @return integer Returns the show duration.
     */
    public function getShowDuration() {
        return $this->showDuration;
    }

    /**
     * Get the style.
     *
     * @return array Returns the style.
     */
    public function getStyle() {
        return $this->style;
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
     * Set the hide duration.
     *
     * @param integer $hideDuration The hide duration.
     * @return \WBW\HighchartsBundle\API\Chart\HighchartsLoading Returns the highcharts loading.
     */
    public function setHideDuration($hideDuration) {
        $this->hideDuration = $hideDuration;
        return $this;
    }

    /**
     * Set the label style.
     *
     * @param array $labelStyle The label style.
     * @return \WBW\HighchartsBundle\API\Chart\HighchartsLoading Returns the highcharts loading.
     */
    public function setLabelStyle(array $labelStyle = null) {
        $this->labelStyle = $labelStyle;
        return $this;
    }

    /**
     * Set the show duration.
     *
     * @param integer $showDuration The show duration.
     * @return \WBW\HighchartsBundle\API\Chart\HighchartsLoading Returns the highcharts loading.
     */
    public function setShowDuration($showDuration) {
        $this->showDuration = $showDuration;
        return $this;
    }

    /**
     * Set the style.
     *
     * @param array $style The style.
     * @return \WBW\HighchartsBundle\API\Chart\HighchartsLoading Returns the highcharts loading.
     */
    public function setStyle(array $style = null) {
        $this->style = $style;
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

        // Check the hide duration.
        if (!is_null($this->hideDuration)) {
            $output["hideDuration"] = $this->hideDuration;
        }

        // Check the label style.
        if (!is_null($this->labelStyle)) {
            $output["labelStyle"] = $this->labelStyle;
        }

        // Check the show duration.
        if (!is_null($this->showDuration)) {
            $output["showDuration"] = $this->showDuration;
        }

        // Check the style.
        if (!is_null($this->style)) {
            $output["style"] = $this->style;
        }

        // Return the output.
        return $output;
    }

}
