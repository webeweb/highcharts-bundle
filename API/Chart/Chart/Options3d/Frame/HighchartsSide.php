<?php

/*
 * This file is part of the highcharts-bundle package.
 *
 * (c) 2017 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\HighchartsBundle\API\Chart\Chart\Options3d\Frame;

use JsonSerializable;
use WBW\Library\Core\Utility\Argument\ArrayUtility;

/**
 * Highcharts side.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Bundle\HighchartsBundle\API\Chart\Chart\Options3d\Frame
 * @version 5.0.14
 * @final
 */
final class HighchartsSide implements JsonSerializable {

    /**
     * Color.
     *
     * @var string
     * @since 4.0
     */
    private $color = "transparent";

    /**
     * Size.
     *
     * @var integer
     * @since 4.0
     */
    private $size = 1;

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

        // Clear the color.
        $this->color = null;

        // Clear the size.
        $this->size = null;
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
     * Get the size.
     *
     * @return integer Returns the size.
     */
    public function getSize() {
        return $this->size;
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
     * Set the color.
     *
     * @param string $color The color.
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\Chart\Options3d\Frame\HighchartsSide Returns the highcharts side.
     */
    public function setColor($color) {
        $this->color = $color;
        return $this;
    }

    /**
     * Set the size.
     *
     * @param integer $size The size.
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\Chart\Options3d\Frame\HighchartsSide Returns the highcharts side.
     */
    public function setSize($size) {
        $this->size = $size;
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

        // Set the color.
        ArrayUtility::set($output, "color", $this->color, [null]);

        // Set the size.
        ArrayUtility::set($output, "size", $this->size, [null]);

        // Return the output.
        return $output;
    }

}
