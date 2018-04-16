<?php

/**
 * This file is part of the highcharts-bundle package.
 *
 * (c) 2017 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\HighchartsBundle\API\Options;

use JsonSerializable;
use WBW\Library\Core\Utility\Argument\ArrayUtility;

/**
 * Highcharts global.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\HighchartsBundle\API\Options
 * @version 5.0.14
 * @final
 */
final class HighchartsGlobal implements JsonSerializable {

    /**
     * Date.
     *
     * @var array
     * @since 4.0.4
     */
    private $date;

    /**
     * VML radial gradient URL.
     *
     * @var string
     * @since 2.3.0
     */
    private $vMLRadialGradientURL = "http://code.highcharts.com/{version}/gfx/vml-radial-gradient.png";

    /**
     * Canvas tools URL.
     *
     * @var string
     * @deprecated
     */
    private $canvasToolsURL = "http://code.highcharts.com/{version}/modules/canvas-tools.js";

    /**
     * Get timezone offset.
     *
     * @var string
     * @since 4.1.0
     */
    private $getTimezoneOffset;

    /**
     * Timezone.
     *
     * @var string
     * @since 5.0.7
     */
    private $timezone;

    /**
     * Timezone offset.
     *
     * @var integer
     * @since 3.0.8
     */
    private $timezoneOffset = 0;

    /**
     * Use UTC.
     *
     * @var boolean
     */
    private $useUTC = true;

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

        // Clear the date.
        $this->date = null;

        // Clear the VML radial gradient URL.
        $this->vMLRadialGradientURL = null;

        // Clear the canvas tools URL.
        $this->canvasToolsURL = null;

        // Clear the get timezone offset.
        $this->getTimezoneOffset = null;

        // Clear the timezone.
        $this->timezone = null;

        // Clear the timezone offset.
        $this->timezoneOffset = null;

        // Clear the use UTC.
        $this->useUTC = null;
    }

    /**
     * Get the date.
     *
     * @return array Returns the date.
     */
    public function getDate() {
        return $this->date;
    }

    /**
     * Get the VML radial gradient URL.
     *
     * @return string Returns the VML radial gradient URL.
     */
    public function getVMLRadialGradientURL() {
        return $this->vMLRadialGradientURL;
    }

    /**
     * Get the canvas tools URL.
     *
     * @return string Returns the canvas tools URL.
     * @deprecated
     */
    public function getCanvasToolsURL() {
        return $this->canvasToolsURL;
    }

    /**
     * Get the get timezone offset.
     *
     * @return string Returns the get timezone offset.
     */
    public function getGetTimezoneOffset() {
        return $this->getTimezoneOffset;
    }

    /**
     * Get the timezone.
     *
     * @return string Returns the timezone.
     */
    public function getTimezone() {
        return $this->timezone;
    }

    /**
     * Get the timezone offset.
     *
     * @return integer Returns the timezone offset.
     */
    public function getTimezoneOffset() {
        return $this->timezoneOffset;
    }

    /**
     * Get the use UTC.
     *
     * @return boolean Returns the use UTC.
     */
    public function getUseUTC() {
        return $this->useUTC;
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
     * Set the date.
     *
     * @param array $date The date.
     * @return \WBW\Bundle\HighchartsBundle\API\Options\HighchartsGlobal Returns the highcharts global.
     */
    public function setDate(array $date = null) {
        $this->date = $date;
        return $this;
    }

    /**
     * Set the VML radial gradient URL.
     *
     * @param string $vMLRadialGradientURL The VML radial gradient URL.
     * @return \WBW\Bundle\HighchartsBundle\API\Options\HighchartsGlobal Returns the highcharts global.
     */
    public function setVMLRadialGradientURL($vMLRadialGradientURL) {
        $this->vMLRadialGradientURL = $vMLRadialGradientURL;
        return $this;
    }

    /**
     * Set the canvas tools URL.
     *
     * @param string $canvasToolsURL The canvas tools URL.
     * @return \WBW\Bundle\HighchartsBundle\API\Options\HighchartsGlobal Returns the highcharts global.
     * @deprecated
     */
    public function setCanvasToolsURL($canvasToolsURL) {
        $this->canvasToolsURL = $canvasToolsURL;
        return $this;
    }

    /**
     * Set the get timezone offset.
     *
     * @param string $getTimezoneOffset The get timezone offset.
     * @return \WBW\Bundle\HighchartsBundle\API\Options\HighchartsGlobal Returns the highcharts global.
     */
    public function setGetTimezoneOffset($getTimezoneOffset) {
        $this->getTimezoneOffset = $getTimezoneOffset;
        return $this;
    }

    /**
     * Set the timezone.
     *
     * @param string $timezone The timezone.
     * @return \WBW\Bundle\HighchartsBundle\API\Options\HighchartsGlobal Returns the highcharts global.
     */
    public function setTimezone($timezone) {
        $this->timezone = $timezone;
        return $this;
    }

    /**
     * Set the timezone offset.
     *
     * @param integer $timezoneOffset The timezone offset.
     * @return \WBW\Bundle\HighchartsBundle\API\Options\HighchartsGlobal Returns the highcharts global.
     */
    public function setTimezoneOffset($timezoneOffset) {
        $this->timezoneOffset = $timezoneOffset;
        return $this;
    }

    /**
     * Set the use UTC.
     *
     * @param boolean $useUTC The use UTC.
     * @return \WBW\Bundle\HighchartsBundle\API\Options\HighchartsGlobal Returns the highcharts global.
     */
    public function setUseUTC($useUTC) {
        $this->useUTC = $useUTC;
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

        // Set the date.
        ArrayUtility::set($output, "Date", $this->date, [null]);

        // Set the VML radial gradient URL.
        ArrayUtility::set($output, "VMLRadialGradientURL", $this->vMLRadialGradientURL, [null]);

        // Set the canvas tools URL.
        ArrayUtility::set($output, "canvasToolsURL", $this->canvasToolsURL, [null]);

        // Set the get timezone offset.
        ArrayUtility::set($output, "getTimezoneOffset", $this->getTimezoneOffset, [null]);

        // Set the timezone.
        ArrayUtility::set($output, "timezone", $this->timezone, [null]);

        // Set the timezone offset.
        ArrayUtility::set($output, "timezoneOffset", $this->timezoneOffset, [null]);

        // Set the use UTC.
        ArrayUtility::set($output, "useUTC", $this->useUTC, [null]);

        // Return the output.
        return $output;
    }

}
