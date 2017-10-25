<?php

/*
 * This file is part of the WBWHighchartsBundle package.
 *
 * (c) 2017 NdC/WBW
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\HighchartsBundle\API\Chart\Legend;

use JsonSerializable;

/**
 * Highcharts title.
 *
 * @author WBW <https://github.com/webeweb/WBWHighchartsBundle>
 * @package WBW\HighchartsBundle\API\Chart\Legend
 * @version 5.0.14
 * @final
 */
final class HighchartsTitle implements JsonSerializable {

    /**
     * Style.
     *
     * @var array
     * @since 3.0
     */
    private $style = ["fontWeight" => "bold"];

    /**
     * Text.
     *
     * @var string
     * @since 3.0
     */
    private $text;

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

        // Clear the style.
        $this->style = null;

        // Clear the text.
        $this->text = null;
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
     * Serialize this instance.
     *
     * @return array Returns an array representing this instance.
     */
    public function jsonSerialize() {
        return $this->toArray();
    }

    /**
     * Set the style.
     *
     * @param array $style The style.
     * @return \WBW\HighchartsBundle\API\Chart\Legend\HighchartsTitle Returns the highcharts title.
     */
    public function setStyle(array $style = null) {
        $this->style = $style;
        return $this;
    }

    /**
     * Set the text.
     *
     * @param string $text The text.
     * @return \WBW\HighchartsBundle\API\Chart\Legend\HighchartsTitle Returns the highcharts title.
     */
    public function setText($text) {
        $this->text = $text;
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

        // Check the style.
        if (!is_null($this->style)) {
            $output["style"] = $this->style;
        }

        // Check the text.
        if (!is_null($this->text)) {
            $output["text"] = $this->text;
        }

        // Return the output.
        return $output;
    }

}
