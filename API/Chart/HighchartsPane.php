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
 * Highcharts pane.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\HighchartsBundle\API\Chart
 * @version 5.0.14
 * @final
 */
final class HighchartsPane implements JsonSerializable {

    /**
     * Background.
     *
     * @var array
     * @since 2.3.0
     */
    private $background;

    /**
     * Center.
     *
     * @var array
     * @since 2.3.0
     */
    private $center = ["50%", "50%"];

    /**
     * End angle.
     *
     * @var integer
     * @since 2.3.0
     */
    private $endAngle;

    /**
     * Size.
     *
     * @var integer|string
     */
    private $size = "85%";

    /**
     * Start angle.
     *
     * @var integer
     * @since 2.3.0
     */
    private $startAngle;

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

        // Clear the background.
        $this->background = null;

        // Clear the center.
        $this->center = null;

        // Clear the end angle.
        $this->endAngle = null;

        // Clear the size.
        $this->size = null;

        // Clear the start angle.
        $this->startAngle = null;
    }

    /**
     * Get the background.
     *
     * @return array Returns the background.
     */
    public function getBackground() {
        return $this->background;
    }

    /**
     * Get the center.
     *
     * @return array Returns the center.
     */
    public function getCenter() {
        return $this->center;
    }

    /**
     * Get the end angle.
     *
     * @return integer Returns the end angle.
     */
    public function getEndAngle() {
        return $this->endAngle;
    }

    /**
     * Get the size.
     *
     * @return integer|string Returns the size.
     */
    public function getSize() {
        return $this->size;
    }

    /**
     * Get the start angle.
     *
     * @return integer Returns the start angle.
     */
    public function getStartAngle() {
        return $this->startAngle;
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
     * Set the background.
     *
     * @param array $background The background.
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\HighchartsPane Returns the highcharts pane.
     */
    public function setBackground(array $background = null) {
        $this->background = $background;
        return $this;
    }

    /**
     * Set the center.
     *
     * @param array $center The center.
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\HighchartsPane Returns the highcharts pane.
     */
    public function setCenter(array $center = null) {
        $this->center = $center;
        return $this;
    }

    /**
     * Set the end angle.
     *
     * @param integer $endAngle The end angle.
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\HighchartsPane Returns the highcharts pane.
     */
    public function setEndAngle($endAngle) {
        $this->endAngle = $endAngle;
        return $this;
    }

    /**
     * Set the size.
     *
     * @param integer|string $size The size.
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\HighchartsPane Returns the highcharts pane.
     */
    public function setSize($size) {
        $this->size = $size;
        return $this;
    }

    /**
     * Set the start angle.
     *
     * @param integer $startAngle The start angle.
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\HighchartsPane Returns the highcharts pane.
     */
    public function setStartAngle($startAngle) {
        $this->startAngle = $startAngle;
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

        // Set the background.
        ArrayUtility::set($output, "background", $this->background, [null]);

        // Set the center.
        ArrayUtility::set($output, "center", $this->center, [null]);

        // Set the end angle.
        ArrayUtility::set($output, "endAngle", $this->endAngle, [null]);

        // Set the size.
        ArrayUtility::set($output, "size", $this->size, [null]);

        // Set the start angle.
        ArrayUtility::set($output, "startAngle", $this->startAngle, [null]);

        // Return the output.
        return $output;
    }

}
