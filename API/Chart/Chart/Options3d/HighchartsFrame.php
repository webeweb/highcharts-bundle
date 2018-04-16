<?php

/**
 * This file is part of the highcharts-bundle package.
 *
 * (c) 2017 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\HighchartsBundle\API\Chart\Chart\Options3d;

use JsonSerializable;
use WBW\Library\Core\Utility\Argument\ArrayUtility;

/**
 * Highcharts frame.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\HighchartsBundle\API\Chart\Chart\Options3d
 * @version 5.0.14
 * @final
 */
final class HighchartsFrame implements JsonSerializable {

    /**
     * Back.
     *
     * @var \WBW\Bundle\HighchartsBundle\API\Chart\Chart\Options3d\Frame\HighchartsBack
     * @since 4.0
     */
    private $back;

    /**
     * Bottom.
     *
     * @var \WBW\Bundle\HighchartsBundle\API\Chart\Chart\Options3d\Frame\HighchartsBottom
     * @since 4.0
     */
    private $bottom;

    /**
     * Side.
     *
     * @var \WBW\Bundle\HighchartsBundle\API\Chart\Chart\Options3d\Frame\HighchartsSide
     * @since 4.0
     */
    private $side;

    /**
     * Top.
     *
     * @var array
     * @since 5.0.12
     */
    private $top;

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

        // Clear the back.
        if (null !== $this->back) {
            $this->back->clear();
        }

        // Clear the bottom.
        if (null !== $this->bottom) {
            $this->bottom->clear();
        }

        // Clear the side.
        if (null !== $this->side) {
            $this->side->clear();
        }

        // Clear the top.
        $this->top = null;
    }

    /**
     * Get the back.
     *
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\Chart\Options3d\Frame\HighchartsBack Returns the back.
     */
    public function getBack() {
        return $this->back;
    }

    /**
     * Get the bottom.
     *
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\Chart\Options3d\Frame\HighchartsBottom Returns the bottom.
     */
    public function getBottom() {
        return $this->bottom;
    }

    /**
     * Get the side.
     *
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\Chart\Options3d\Frame\HighchartsSide Returns the side.
     */
    public function getSide() {
        return $this->side;
    }

    /**
     * Get the top.
     *
     * @return array Returns the top.
     */
    public function getTop() {
        return $this->top;
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
     * Create a new back.
     *
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\Chart\Options3d\Frame\HighchartsBack Returns the back.
     */
    public function newBack() {
        $this->back = new \WBW\Bundle\HighchartsBundle\API\Chart\Chart\Options3d\Frame\HighchartsBack();
        return $this->back;
    }

    /**
     * Create a new bottom.
     *
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\Chart\Options3d\Frame\HighchartsBottom Returns the bottom.
     */
    public function newBottom() {
        $this->bottom = new \WBW\Bundle\HighchartsBundle\API\Chart\Chart\Options3d\Frame\HighchartsBottom();
        return $this->bottom;
    }

    /**
     * Create a new side.
     *
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\Chart\Options3d\Frame\HighchartsSide Returns the side.
     */
    public function newSide() {
        $this->side = new \WBW\Bundle\HighchartsBundle\API\Chart\Chart\Options3d\Frame\HighchartsSide();
        return $this->side;
    }

    /**
     * Set the back.
     *
     * @param \WBW\Bundle\HighchartsBundle\API\Chart\Chart\Options3d\Frame\HighchartsBack $back The back.
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\Chart\Options3d\HighchartsFrame Returns the highcharts frame.
     */
    public function setBack(\WBW\Bundle\HighchartsBundle\API\Chart\Chart\Options3d\Frame\HighchartsBack $back = null) {
        $this->back = $back;
        return $this;
    }

    /**
     * Set the bottom.
     *
     * @param \WBW\Bundle\HighchartsBundle\API\Chart\Chart\Options3d\Frame\HighchartsBottom $bottom The bottom.
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\Chart\Options3d\HighchartsFrame Returns the highcharts frame.
     */
    public function setBottom(\WBW\Bundle\HighchartsBundle\API\Chart\Chart\Options3d\Frame\HighchartsBottom $bottom = null) {
        $this->bottom = $bottom;
        return $this;
    }

    /**
     * Set the side.
     *
     * @param \WBW\Bundle\HighchartsBundle\API\Chart\Chart\Options3d\Frame\HighchartsSide $side The side.
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\Chart\Options3d\HighchartsFrame Returns the highcharts frame.
     */
    public function setSide(\WBW\Bundle\HighchartsBundle\API\Chart\Chart\Options3d\Frame\HighchartsSide $side = null) {
        $this->side = $side;
        return $this;
    }

    /**
     * Set the top.
     *
     * @param array $top The top.
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\Chart\Options3d\HighchartsFrame Returns the highcharts frame.
     */
    public function setTop(array $top = null) {
        $this->top = $top;
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

        // Set the back.
        if (null !== $this->back) {
            ArrayUtility::set($output, "back", $this->back->toArray(), []);
        }

        // Set the bottom.
        if (null !== $this->bottom) {
            ArrayUtility::set($output, "bottom", $this->bottom->toArray(), []);
        }

        // Set the side.
        if (null !== $this->side) {
            ArrayUtility::set($output, "side", $this->side->toArray(), []);
        }

        // Set the top.
        ArrayUtility::set($output, "top", $this->top, [null]);

        // Return the output.
        return $output;
    }

}
