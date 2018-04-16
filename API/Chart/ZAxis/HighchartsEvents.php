<?php

/**
 * This file is part of the highcharts-bundle package.
 *
 * (c) 2017 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\HighchartsBundle\API\Chart\ZAxis;

use JsonSerializable;
use WBW\Library\Core\Utility\Argument\ArrayUtility;

/**
 * Highcharts events.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\HighchartsBundle\API\Chart\ZAxis
 * @version 5.0.14
 * @final
 */
final class HighchartsEvents implements JsonSerializable {

    /**
     * After breaks.
     *
     * @var string
     * @since 4.1.0
     */
    private $afterBreaks;

    /**
     * After set extremes.
     *
     * @var string
     * @since 2.3
     */
    private $afterSetExtremes;

    /**
     * Point break.
     *
     * @var string
     * @since 4.1.0
     */
    private $pointBreak;

    /**
     * Point in break.
     *
     * @var string
     */
    private $pointInBreak;

    /**
     * Set extremes.
     *
     * @var string
     * @since 1.2.0
     */
    private $setExtremes;

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

        // Clear the after breaks.
        $this->afterBreaks = null;

        // Clear the after set extremes.
        $this->afterSetExtremes = null;

        // Clear the point break.
        $this->pointBreak = null;

        // Clear the point in break.
        $this->pointInBreak = null;

        // Clear the set extremes.
        $this->setExtremes = null;
    }

    /**
     * Get the after breaks.
     *
     * @return string Returns the after breaks.
     */
    public function getAfterBreaks() {
        return $this->afterBreaks;
    }

    /**
     * Get the after set extremes.
     *
     * @return string Returns the after set extremes.
     */
    public function getAfterSetExtremes() {
        return $this->afterSetExtremes;
    }

    /**
     * Get the point break.
     *
     * @return string Returns the point break.
     */
    public function getPointBreak() {
        return $this->pointBreak;
    }

    /**
     * Get the point in break.
     *
     * @return string Returns the point in break.
     */
    public function getPointInBreak() {
        return $this->pointInBreak;
    }

    /**
     * Get the set extremes.
     *
     * @return string Returns the set extremes.
     */
    public function getSetExtremes() {
        return $this->setExtremes;
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
     * Set the after breaks.
     *
     * @param string $afterBreaks The after breaks.
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\ZAxis\HighchartsEvents Returns the highcharts events.
     */
    public function setAfterBreaks($afterBreaks) {
        $this->afterBreaks = $afterBreaks;
        return $this;
    }

    /**
     * Set the after set extremes.
     *
     * @param string $afterSetExtremes The after set extremes.
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\ZAxis\HighchartsEvents Returns the highcharts events.
     */
    public function setAfterSetExtremes($afterSetExtremes) {
        $this->afterSetExtremes = $afterSetExtremes;
        return $this;
    }

    /**
     * Set the point break.
     *
     * @param string $pointBreak The point break.
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\ZAxis\HighchartsEvents Returns the highcharts events.
     */
    public function setPointBreak($pointBreak) {
        $this->pointBreak = $pointBreak;
        return $this;
    }

    /**
     * Set the point in break.
     *
     * @param string $pointInBreak The point in break.
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\ZAxis\HighchartsEvents Returns the highcharts events.
     */
    public function setPointInBreak($pointInBreak) {
        $this->pointInBreak = $pointInBreak;
        return $this;
    }

    /**
     * Set the set extremes.
     *
     * @param string $setExtremes The set extremes.
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\ZAxis\HighchartsEvents Returns the highcharts events.
     */
    public function setSetExtremes($setExtremes) {
        $this->setExtremes = $setExtremes;
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

        // Set the after breaks.
        ArrayUtility::set($output, "afterBreaks", $this->afterBreaks, [null]);

        // Set the after set extremes.
        ArrayUtility::set($output, "afterSetExtremes", $this->afterSetExtremes, [null]);

        // Set the point break.
        ArrayUtility::set($output, "pointBreak", $this->pointBreak, [null]);

        // Set the point in break.
        ArrayUtility::set($output, "pointInBreak", $this->pointInBreak, [null]);

        // Set the set extremes.
        ArrayUtility::set($output, "setExtremes", $this->setExtremes, [null]);

        // Return the output.
        return $output;
    }

}
