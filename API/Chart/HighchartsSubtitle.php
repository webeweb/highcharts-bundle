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
 * Highcharts subtitle.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\HighchartsBundle\API\Chart
 * @version 5.0.14
 * @final
 */
final class HighchartsSubtitle implements JsonSerializable {

    /**
     * Align.
     *
     * @var string
     * @since 2.0
     */
    private $align = "center";

    /**
     * Floating.
     *
     * @var boolean
     * @since 2.1
     */
    private $floating = false;

    /**
     * Style.
     *
     * @var array
     */
    private $style = ["color" => "#666666"];

    /**
     * Text.
     *
     * @var string
     */
    private $text;

    /**
     * Use HTML.
     *
     * @var boolean
     */
    private $useHTML = false;

    /**
     * Vertical align.
     *
     * @var string
     * @since 2.1
     */
    private $verticalAlign;

    /**
     * Width adjust.
     *
     * @var integer
     * @since 4.2.5
     */
    private $widthAdjust = -44;

    /**
     * X.
     *
     * @var integer
     * @since 2.0
     */
    private $x = 0;

    /**
     * Y.
     *
     * @var integer
     * @since 2.0
     */
    private $y;

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

        // Clear the align.
        $this->align = null;

        // Clear the floating.
        $this->floating = null;

        // Clear the style.
        $this->style = null;

        // Clear the text.
        $this->text = null;

        // Clear the use HTML.
        $this->useHTML = null;

        // Clear the vertical align.
        $this->verticalAlign = null;

        // Clear the width adjust.
        $this->widthAdjust = null;

        // Clear the x.
        $this->x = null;

        // Clear the y.
        $this->y = null;
    }

    /**
     * Get the align.
     *
     * @return string Returns the align.
     */
    public function getAlign() {
        return $this->align;
    }

    /**
     * Get the floating.
     *
     * @return boolean Returns the floating.
     */
    public function getFloating() {
        return $this->floating;
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
     * Get the text.
     *
     * @return string Returns the text.
     */
    public function getText() {
        return $this->text;
    }

    /**
     * Get the use HTML.
     *
     * @return boolean Returns the use HTML.
     */
    public function getUseHTML() {
        return $this->useHTML;
    }

    /**
     * Get the vertical align.
     *
     * @return string Returns the vertical align.
     */
    public function getVerticalAlign() {
        return $this->verticalAlign;
    }

    /**
     * Get the width adjust.
     *
     * @return integer Returns the width adjust.
     */
    public function getWidthAdjust() {
        return $this->widthAdjust;
    }

    /**
     * Get the x.
     *
     * @return integer Returns the x.
     */
    public function getX() {
        return $this->x;
    }

    /**
     * Get the y.
     *
     * @return integer Returns the y.
     */
    public function getY() {
        return $this->y;
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
     * Set the align.
     *
     * @param string $align The align.
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\HighchartsSubtitle Returns the highcharts subtitle.
     */
    public function setAlign($align) {
        switch ($align) {
            case "center":
            case "left":
            case "right":
            $this->align = $align;
            break;
        }
        return $this;
    }

    /**
     * Set the floating.
     *
     * @param boolean $floating The floating.
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\HighchartsSubtitle Returns the highcharts subtitle.
     */
    public function setFloating($floating) {
        $this->floating = $floating;
        return $this;
    }

    /**
     * Set the style.
     *
     * @param array $style The style.
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\HighchartsSubtitle Returns the highcharts subtitle.
     */
    public function setStyle(array $style = null) {
        $this->style = $style;
        return $this;
    }

    /**
     * Set the text.
     *
     * @param string $text The text.
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\HighchartsSubtitle Returns the highcharts subtitle.
     */
    public function setText($text) {
        $this->text = $text;
        return $this;
    }

    /**
     * Set the use HTML.
     *
     * @param boolean $useHTML The use HTML.
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\HighchartsSubtitle Returns the highcharts subtitle.
     */
    public function setUseHTML($useHTML) {
        $this->useHTML = $useHTML;
        return $this;
    }

    /**
     * Set the vertical align.
     *
     * @param string $verticalAlign The vertical align.
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\HighchartsSubtitle Returns the highcharts subtitle.
     */
    public function setVerticalAlign($verticalAlign) {
        switch ($verticalAlign) {
            case "bottom":
            case "middle":
            case "top":
            $this->verticalAlign = $verticalAlign;
            break;
        }
        return $this;
    }

    /**
     * Set the width adjust.
     *
     * @param integer $widthAdjust The width adjust.
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\HighchartsSubtitle Returns the highcharts subtitle.
     */
    public function setWidthAdjust($widthAdjust) {
        $this->widthAdjust = $widthAdjust;
        return $this;
    }

    /**
     * Set the x.
     *
     * @param integer $x The x.
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\HighchartsSubtitle Returns the highcharts subtitle.
     */
    public function setX($x) {
        $this->x = $x;
        return $this;
    }

    /**
     * Set the y.
     *
     * @param integer $y The y.
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\HighchartsSubtitle Returns the highcharts subtitle.
     */
    public function setY($y) {
        $this->y = $y;
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

        // Set the align.
        ArrayUtility::set($output, "align", $this->align, [null]);

        // Set the floating.
        ArrayUtility::set($output, "floating", $this->floating, [null]);

        // Set the style.
        ArrayUtility::set($output, "style", $this->style, [null]);

        // Set the text.
        ArrayUtility::set($output, "text", $this->text, [null]);

        // Set the use HTML.
        ArrayUtility::set($output, "useHTML", $this->useHTML, [null]);

        // Set the vertical align.
        ArrayUtility::set($output, "verticalAlign", $this->verticalAlign, [null]);

        // Set the width adjust.
        ArrayUtility::set($output, "widthAdjust", $this->widthAdjust, [null]);

        // Set the x.
        ArrayUtility::set($output, "x", $this->x, [null]);

        // Set the y.
        ArrayUtility::set($output, "y", $this->y, [null]);

        // Return the output.
        return $output;
    }

}
