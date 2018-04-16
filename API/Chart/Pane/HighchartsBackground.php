<?php

/**
 * This file is part of the highcharts-bundle package.
 *
 * (c) 2017 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\HighchartsBundle\API\Chart\Pane;

use JsonSerializable;
use WBW\Library\Core\Utility\Argument\ArrayUtility;

/**
 * Highcharts background.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\HighchartsBundle\API\Chart\Pane
 * @version 5.0.14
 * @final
 */
final class HighchartsBackground implements JsonSerializable {

    /**
     * Background color.
     *
     * @var string
     * @since 2.3.0
     */
    private $backgroundColor;

    /**
     * Border color.
     *
     * @var string
     * @since 2.3.0
     */
    private $borderColor = "#cccccc";

    /**
     * Border width.
     *
     * @var integer
     * @since 2.3.0
     */
    private $borderWidth = 1;

    /**
     * Class name.
     *
     * @var string
     * @since 5.0.0
     */
    private $className = "highcharts-pane";

    /**
     * Inner radius.
     *
     * @var integer|string
     * @since 2.3.0
     */
    private $innerRadius = "0";

    /**
     * Outer radius.
     *
     * @var integer|string
     * @since 2.3.0
     */
    private $outerRadius = "105%";

    /**
     * Shape.
     *
     * @var string
     * @since 2.3.0
     */
    private $shape = "solid";

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

        // Clear the background color.
        $this->backgroundColor = null;

        // Clear the border color.
        $this->borderColor = null;

        // Clear the border width.
        $this->borderWidth = null;

        // Clear the class name.
        $this->className = null;

        // Clear the inner radius.
        $this->innerRadius = null;

        // Clear the outer radius.
        $this->outerRadius = null;

        // Clear the shape.
        $this->shape = null;
    }

    /**
     * Get the background color.
     *
     * @return string Returns the background color.
     */
    public function getBackgroundColor() {
        return $this->backgroundColor;
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
     * Get the border width.
     *
     * @return integer Returns the border width.
     */
    public function getBorderWidth() {
        return $this->borderWidth;
    }

    /**
     * Get the class name.
     *
     * @return string Returns the class name.
     */
    public function getClassName() {
        return $this->className;
    }

    /**
     * Get the inner radius.
     *
     * @return integer|string Returns the inner radius.
     */
    public function getInnerRadius() {
        return $this->innerRadius;
    }

    /**
     * Get the outer radius.
     *
     * @return integer|string Returns the outer radius.
     */
    public function getOuterRadius() {
        return $this->outerRadius;
    }

    /**
     * Get the shape.
     *
     * @return string Returns the shape.
     */
    public function getShape() {
        return $this->shape;
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
     * Set the background color.
     *
     * @param string $backgroundColor The background color.
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\Pane\HighchartsBackground Returns the highcharts background.
     */
    public function setBackgroundColor($backgroundColor) {
        $this->backgroundColor = $backgroundColor;
        return $this;
    }

    /**
     * Set the border color.
     *
     * @param string $borderColor The border color.
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\Pane\HighchartsBackground Returns the highcharts background.
     */
    public function setBorderColor($borderColor) {
        $this->borderColor = $borderColor;
        return $this;
    }

    /**
     * Set the border width.
     *
     * @param integer $borderWidth The border width.
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\Pane\HighchartsBackground Returns the highcharts background.
     */
    public function setBorderWidth($borderWidth) {
        $this->borderWidth = $borderWidth;
        return $this;
    }

    /**
     * Set the class name.
     *
     * @param string $className The class name.
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\Pane\HighchartsBackground Returns the highcharts background.
     */
    public function setClassName($className) {
        $this->className = $className;
        return $this;
    }

    /**
     * Set the inner radius.
     *
     * @param integer|string $innerRadius The inner radius.
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\Pane\HighchartsBackground Returns the highcharts background.
     */
    public function setInnerRadius($innerRadius) {
        $this->innerRadius = $innerRadius;
        return $this;
    }

    /**
     * Set the outer radius.
     *
     * @param integer|string $outerRadius The outer radius.
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\Pane\HighchartsBackground Returns the highcharts background.
     */
    public function setOuterRadius($outerRadius) {
        $this->outerRadius = $outerRadius;
        return $this;
    }

    /**
     * Set the shape.
     *
     * @param string $shape The shape.
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\Pane\HighchartsBackground Returns the highcharts background.
     */
    public function setShape($shape) {
        switch ($shape) {
            case "arc":
            case "solid":
            $this->shape = $shape;
            break;
        }
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

        // Set the background color.
        ArrayUtility::set($output, "backgroundColor", $this->backgroundColor, [null]);

        // Set the border color.
        ArrayUtility::set($output, "borderColor", $this->borderColor, [null]);

        // Set the border width.
        ArrayUtility::set($output, "borderWidth", $this->borderWidth, [null]);

        // Set the class name.
        ArrayUtility::set($output, "className", $this->className, [null]);

        // Set the inner radius.
        ArrayUtility::set($output, "innerRadius", $this->innerRadius, [null]);

        // Set the outer radius.
        ArrayUtility::set($output, "outerRadius", $this->outerRadius, [null]);

        // Set the shape.
        ArrayUtility::set($output, "shape", $this->shape, [null]);

        // Return the output.
        return $output;
    }

}
