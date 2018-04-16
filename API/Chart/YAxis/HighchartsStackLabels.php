<?php

/**
 * This file is part of the highcharts-bundle package.
 *
 * (c) 2017 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\HighchartsBundle\API\Chart\YAxis;

use JsonSerializable;
use WBW\Library\Core\Utility\Argument\ArrayUtility;

/**
 * Highcharts stack labels.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\HighchartsBundle\API\Chart\YAxis
 * @version 5.0.14
 * @final
 */
final class HighchartsStackLabels implements JsonSerializable {

    /**
     * Align.
     *
     * @var string
     * @since 2.1.5
     */
    private $align;

    /**
     * Enabled.
     *
     * @var boolean
     * @since 2.1.5
     */
    private $enabled = false;

    /**
     * Format.
     *
     * @var string
     * @since 3.0.2
     */
    private $format = "{total}";

    /**
     * Formatter.
     *
     * @var string
     * @since 2.1.5
     */
    private $formatter;

    /**
     * Rotation.
     *
     * @var integer
     * @since 2.1.5
     */
    private $rotation = 0;

    /**
     * Style.
     *
     * @var array
     * @since 2.1.5
     */
    private $style = ["color" => "#000000", "fontSize" => "11px", "fontWeight" => "bold", "textShadow" => "1px 1px contrast, -1px -1px contrast, -1px 1px contrast, 1px -1px contrast"];

    /**
     * Text align.
     *
     * @var string
     * @since 2.1.5
     */
    private $textAlign;

    /**
     * Use HTML.
     *
     * @var boolean
     * @since 3.0
     */
    private $useHTML = false;

    /**
     * Vertical align.
     *
     * @var string
     * @since 2.1.5
     */
    private $verticalAlign;

    /**
     * X.
     *
     * @var integer
     * @since 2.1.5
     */
    private $x;

    /**
     * Y.
     *
     * @var integer
     * @since 2.1.5
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

        // Clear the enabled.
        $this->enabled = null;

        // Clear the format.
        $this->format = null;

        // Clear the formatter.
        $this->formatter = null;

        // Clear the rotation.
        $this->rotation = null;

        // Clear the style.
        $this->style = null;

        // Clear the text align.
        $this->textAlign = null;

        // Clear the use HTML.
        $this->useHTML = null;

        // Clear the vertical align.
        $this->verticalAlign = null;

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
     * Get the enabled.
     *
     * @return boolean Returns the enabled.
     */
    public function getEnabled() {
        return $this->enabled;
    }

    /**
     * Get the format.
     *
     * @return string Returns the format.
     */
    public function getFormat() {
        return $this->format;
    }

    /**
     * Get the formatter.
     *
     * @return string Returns the formatter.
     */
    public function getFormatter() {
        return $this->formatter;
    }

    /**
     * Get the rotation.
     *
     * @return integer Returns the rotation.
     */
    public function getRotation() {
        return $this->rotation;
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
     * Get the text align.
     *
     * @return string Returns the text align.
     */
    public function getTextAlign() {
        return $this->textAlign;
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
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\YAxis\HighchartsStackLabels Returns the highcharts stack labels.
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
     * Set the enabled.
     *
     * @param boolean $enabled The enabled.
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\YAxis\HighchartsStackLabels Returns the highcharts stack labels.
     */
    public function setEnabled($enabled) {
        $this->enabled = $enabled;
        return $this;
    }

    /**
     * Set the format.
     *
     * @param string $format The format.
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\YAxis\HighchartsStackLabels Returns the highcharts stack labels.
     */
    public function setFormat($format) {
        $this->format = $format;
        return $this;
    }

    /**
     * Set the formatter.
     *
     * @param string $formatter The formatter.
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\YAxis\HighchartsStackLabels Returns the highcharts stack labels.
     */
    public function setFormatter($formatter) {
        $this->formatter = $formatter;
        return $this;
    }

    /**
     * Set the rotation.
     *
     * @param integer $rotation The rotation.
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\YAxis\HighchartsStackLabels Returns the highcharts stack labels.
     */
    public function setRotation($rotation) {
        $this->rotation = $rotation;
        return $this;
    }

    /**
     * Set the style.
     *
     * @param array $style The style.
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\YAxis\HighchartsStackLabels Returns the highcharts stack labels.
     */
    public function setStyle(array $style = null) {
        $this->style = $style;
        return $this;
    }

    /**
     * Set the text align.
     *
     * @param string $textAlign The text align.
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\YAxis\HighchartsStackLabels Returns the highcharts stack labels.
     */
    public function setTextAlign($textAlign) {
        switch ($textAlign) {
            case "center":
            case "left":
            case "right":
            $this->textAlign = $textAlign;
            break;
        }
        return $this;
    }

    /**
     * Set the use HTML.
     *
     * @param boolean $useHTML The use HTML.
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\YAxis\HighchartsStackLabels Returns the highcharts stack labels.
     */
    public function setUseHTML($useHTML) {
        $this->useHTML = $useHTML;
        return $this;
    }

    /**
     * Set the vertical align.
     *
     * @param string $verticalAlign The vertical align.
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\YAxis\HighchartsStackLabels Returns the highcharts stack labels.
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
     * Set the x.
     *
     * @param integer $x The x.
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\YAxis\HighchartsStackLabels Returns the highcharts stack labels.
     */
    public function setX($x) {
        $this->x = $x;
        return $this;
    }

    /**
     * Set the y.
     *
     * @param integer $y The y.
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\YAxis\HighchartsStackLabels Returns the highcharts stack labels.
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

        // Set the enabled.
        ArrayUtility::set($output, "enabled", $this->enabled, [null]);

        // Set the format.
        ArrayUtility::set($output, "format", $this->format, [null]);

        // Set the formatter.
        ArrayUtility::set($output, "formatter", $this->formatter, [null]);

        // Set the rotation.
        ArrayUtility::set($output, "rotation", $this->rotation, [null]);

        // Set the style.
        ArrayUtility::set($output, "style", $this->style, [null]);

        // Set the text align.
        ArrayUtility::set($output, "textAlign", $this->textAlign, [null]);

        // Set the use HTML.
        ArrayUtility::set($output, "useHTML", $this->useHTML, [null]);

        // Set the vertical align.
        ArrayUtility::set($output, "verticalAlign", $this->verticalAlign, [null]);

        // Set the x.
        ArrayUtility::set($output, "x", $this->x, [null]);

        // Set the y.
        ArrayUtility::set($output, "y", $this->y, [null]);

        // Return the output.
        return $output;
    }

}
