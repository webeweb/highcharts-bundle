<?php

/**
 * This file is part of the highcharts-bundle package.
 *
 * (c) 2017 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\HighchartsBundle\API\Chart\Series\Treemap;

use JsonSerializable;
use WBW\Library\Core\Utility\Argument\ArrayUtility;

/**
 * Highcharts levels.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\HighchartsBundle\API\Chart\Series\Treemap
 * @version 5.0.14
 * @final
 */
final class HighchartsLevels implements JsonSerializable {

    /**
     * Border color.
     *
     * @var string
     * @since 4.1.0
     */
    private $borderColor;

    /**
     * Border dash style.
     *
     * @var string
     * @since 4.1.0
     */
    private $borderDashStyle;

    /**
     * Border width.
     *
     * @var integer
     * @since 4.1.0
     */
    private $borderWidth;

    /**
     * Color.
     *
     * @var string
     * @since 4.1.0
     */
    private $color;

    /**
     * Data labels.
     *
     * @var array
     * @since 4.1.0
     */
    private $dataLabels;

    /**
     * Layout algorithm.
     *
     * @var string
     * @since 4.1.0
     */
    private $layoutAlgorithm;

    /**
     * Layout starting direction.
     *
     * @var string
     * @since 4.1.0
     */
    private $layoutStartingDirection;

    /**
     * Level.
     *
     * @var integer
     * @since 4.1.0
     */
    private $level;

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

        // Clear the border color.
        $this->borderColor = null;

        // Clear the border dash style.
        $this->borderDashStyle = null;

        // Clear the border width.
        $this->borderWidth = null;

        // Clear the color.
        $this->color = null;

        // Clear the data labels.
        $this->dataLabels = null;

        // Clear the layout algorithm.
        $this->layoutAlgorithm = null;

        // Clear the layout starting direction.
        $this->layoutStartingDirection = null;

        // Clear the level.
        $this->level = null;
    }

    /**
     * Get the border color.
     *
     * @return string Returns the border color.
     */
    public function getBorderColor() {
        return $this->borderColor;
    }

    /**
     * Get the border dash style.
     *
     * @return string Returns the border dash style.
     */
    public function getBorderDashStyle() {
        return $this->borderDashStyle;
    }

    /**
     * Get the border width.
     *
     * @return integer Returns the border width.
     */
    public function getBorderWidth() {
        return $this->borderWidth;
    }

    /**
     * Get the color.
     *
     * @return string Returns the color.
     */
    public function getColor() {
        return $this->color;
    }

    /**
     * Get the data labels.
     *
     * @return array Returns the data labels.
     */
    public function getDataLabels() {
        return $this->dataLabels;
    }

    /**
     * Get the layout algorithm.
     *
     * @return string Returns the layout algorithm.
     */
    public function getLayoutAlgorithm() {
        return $this->layoutAlgorithm;
    }

    /**
     * Get the layout starting direction.
     *
     * @return string Returns the layout starting direction.
     */
    public function getLayoutStartingDirection() {
        return $this->layoutStartingDirection;
    }

    /**
     * Get the level.
     *
     * @return integer Returns the level.
     */
    public function getLevel() {
        return $this->level;
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
     * Set the border color.
     *
     * @param string $borderColor The border color.
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\Series\Treemap\HighchartsLevels Returns the highcharts levels.
     */
    public function setBorderColor($borderColor) {
        $this->borderColor = $borderColor;
        return $this;
    }

    /**
     * Set the border dash style.
     *
     * @param string $borderDashStyle The border dash style.
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\Series\Treemap\HighchartsLevels Returns the highcharts levels.
     */
    public function setBorderDashStyle($borderDashStyle) {
        $this->borderDashStyle = $borderDashStyle;
        return $this;
    }

    /**
     * Set the border width.
     *
     * @param integer $borderWidth The border width.
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\Series\Treemap\HighchartsLevels Returns the highcharts levels.
     */
    public function setBorderWidth($borderWidth) {
        $this->borderWidth = $borderWidth;
        return $this;
    }

    /**
     * Set the color.
     *
     * @param string $color The color.
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\Series\Treemap\HighchartsLevels Returns the highcharts levels.
     */
    public function setColor($color) {
        $this->color = $color;
        return $this;
    }

    /**
     * Set the data labels.
     *
     * @param array $dataLabels The data labels.
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\Series\Treemap\HighchartsLevels Returns the highcharts levels.
     */
    public function setDataLabels(array $dataLabels = null) {
        $this->dataLabels = $dataLabels;
        return $this;
    }

    /**
     * Set the layout algorithm.
     *
     * @param string $layoutAlgorithm The layout algorithm.
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\Series\Treemap\HighchartsLevels Returns the highcharts levels.
     */
    public function setLayoutAlgorithm($layoutAlgorithm) {
        switch ($layoutAlgorithm) {
            case "sliceAndDice":
            case "squarified":
            case "strip":
            case "stripes":
            $this->layoutAlgorithm = $layoutAlgorithm;
            break;
        }
        return $this;
    }

    /**
     * Set the layout starting direction.
     *
     * @param string $layoutStartingDirection The layout starting direction.
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\Series\Treemap\HighchartsLevels Returns the highcharts levels.
     */
    public function setLayoutStartingDirection($layoutStartingDirection) {
        switch ($layoutStartingDirection) {
            case "horizontal":
            case "vertical":
            $this->layoutStartingDirection = $layoutStartingDirection;
            break;
        }
        return $this;
    }

    /**
     * Set the level.
     *
     * @param integer $level The level.
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\Series\Treemap\HighchartsLevels Returns the highcharts levels.
     */
    public function setLevel($level) {
        $this->level = $level;
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

        // Set the border color.
        ArrayUtility::set($output, "borderColor", $this->borderColor, [null]);

        // Set the border dash style.
        ArrayUtility::set($output, "borderDashStyle", $this->borderDashStyle, [null]);

        // Set the border width.
        ArrayUtility::set($output, "borderWidth", $this->borderWidth, [null]);

        // Set the color.
        ArrayUtility::set($output, "color", $this->color, [null]);

        // Set the data labels.
        ArrayUtility::set($output, "dataLabels", $this->dataLabels, [null]);

        // Set the layout algorithm.
        ArrayUtility::set($output, "layoutAlgorithm", $this->layoutAlgorithm, [null]);

        // Set the layout starting direction.
        ArrayUtility::set($output, "layoutStartingDirection", $this->layoutStartingDirection, [null]);

        // Set the level.
        ArrayUtility::set($output, "level", $this->level, [null]);

        // Return the output.
        return $output;
    }

}
