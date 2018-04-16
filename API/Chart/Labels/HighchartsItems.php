<?php

/**
 * This file is part of the highcharts-bundle package.
 *
 * (c) 2017 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\HighchartsBundle\API\Chart\Labels;

use JsonSerializable;
use WBW\Library\Core\Utility\Argument\ArrayUtility;

/**
 * Highcharts items.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\HighchartsBundle\API\Chart\Labels
 * @version 5.0.14
 * @final
 */
final class HighchartsItems implements JsonSerializable {

    /**
     * Html.
     *
     * @var string
     */
    private $html;

    /**
     * Style.
     *
     * @var array
     */
    private $style;

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

        // Clear the html.
        $this->html = null;

        // Clear the style.
        $this->style = null;
    }

    /**
     * Get the html.
     *
     * @return string Returns the html.
     */
    public function getHtml() {
        return $this->html;
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
     * Set the html.
     *
     * @param string $html The html.
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\Labels\HighchartsItems Returns the highcharts items.
     */
    public function setHtml($html) {
        $this->html = $html;
        return $this;
    }

    /**
     * Set the style.
     *
     * @param array $style The style.
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\Labels\HighchartsItems Returns the highcharts items.
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

        // Set the html.
        ArrayUtility::set($output, "html", $this->html, [null]);

        // Set the style.
        ArrayUtility::set($output, "style", $this->style, [null]);

        // Return the output.
        return $output;
    }

}
