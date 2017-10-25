<?php

/*
 * This file is part of the WBWHighchartsBundle package.
 *
 * (c) 2017 NdC/WBW
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\HighchartsBundle\API\Chart\ZAxis;

use JsonSerializable;

/**
 * Highcharts crosshair.
 *
 * @author WBW <https://github.com/webeweb/WBWHighchartsBundle>
 * @package WBW\HighchartsBundle\API\Chart\ZAxis
 * @version 5.0.14
 * @final
 */
final class HighchartsCrosshair implements JsonSerializable {

    /**
     * Class name.
     *
     * @var string
     * @since 5.0.0
     */
    private $className;

    /**
     * Color.
     *
     * @var string
     * @since 4.1
     */
    private $color;

    /**
     * Dash style.
     *
     * @var string
     * @since 4.1
     */
    private $dashStyle = "Solid";

    /**
     * Snap.
     *
     * @var boolean
     * @since 4.1
     */
    private $snap = true;

    /**
     * Width.
     *
     * @var integer
     * @since 4.1
     */
    private $width;

    /**
     * Z index.
     *
     * @var integer
     * @since 4.1
     */
    private $zIndex = 2;

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

        // Clear the class name.
        $this->className = null;

        // Clear the color.
        $this->color = null;

        // Clear the dash style.
        $this->dashStyle = null;

        // Clear the snap.
        $this->snap = null;

        // Clear the width.
        $this->width = null;

        // Clear the z index.
        $this->zIndex = null;
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
     * Get the color.
     *
     * @return string Returns the color.
     */
    public function getColor() {
        return $this->color;
    }

    /**
     * Get the dash style.
     *
     * @return string Returns the dash style.
     */
    public function getDashStyle() {
        return $this->dashStyle;
    }

    /**
     * Get the snap.
     *
     * @return boolean Returns the snap.
     */
    public function getSnap() {
        return $this->snap;
    }

    /**
     * Get the width.
     *
     * @return integer Returns the width.
     */
    public function getWidth() {
        return $this->width;
    }

    /**
     * Get the z index.
     *
     * @return integer Returns the z index.
     */
    public function getZIndex() {
        return $this->zIndex;
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
     * Set the class name.
     *
     * @param string $className The class name.
     * @return \WBW\HighchartsBundle\API\Chart\ZAxis\HighchartsCrosshair Returns the highcharts crosshair.
     */
    public function setClassName($className) {
        $this->className = $className;
        return $this;
    }

    /**
     * Set the color.
     *
     * @param string $color The color.
     * @return \WBW\HighchartsBundle\API\Chart\ZAxis\HighchartsCrosshair Returns the highcharts crosshair.
     */
    public function setColor($color) {
        $this->color = $color;
        return $this;
    }

    /**
     * Set the dash style.
     *
     * @param string $dashStyle The dash style.
     * @return \WBW\HighchartsBundle\API\Chart\ZAxis\HighchartsCrosshair Returns the highcharts crosshair.
     */
    public function setDashStyle($dashStyle) {
        switch ($dashStyle) {
            case "Dash":
            case "DashDot":
            case "Dot":
            case "LongDash":
            case "LongDashDot":
            case "LongDashDotDot":
            case "ShortDash":
            case "ShortDashDot":
            case "ShortDashDotDot":
            case "ShortDot":
            case "Solid":
                $this->dashStyle = $dashStyle;
                break;
        }
        return $this;
    }

    /**
     * Set the snap.
     *
     * @param boolean $snap The snap.
     * @return \WBW\HighchartsBundle\API\Chart\ZAxis\HighchartsCrosshair Returns the highcharts crosshair.
     */
    public function setSnap($snap) {
        $this->snap = $snap;
        return $this;
    }

    /**
     * Set the width.
     *
     * @param integer $width The width.
     * @return \WBW\HighchartsBundle\API\Chart\ZAxis\HighchartsCrosshair Returns the highcharts crosshair.
     */
    public function setWidth($width) {
        $this->width = $width;
        return $this;
    }

    /**
     * Set the z index.
     *
     * @param integer $zIndex The z index.
     * @return \WBW\HighchartsBundle\API\Chart\ZAxis\HighchartsCrosshair Returns the highcharts crosshair.
     */
    public function setZIndex($zIndex) {
        $this->zIndex = $zIndex;
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

        // Check the class name.
        if (!is_null($this->className)) {
            $output["className"] = $this->className;
        }

        // Check the color.
        if (!is_null($this->color)) {
            $output["color"] = $this->color;
        }

        // Check the dash style.
        if (!is_null($this->dashStyle)) {
            $output["dashStyle"] = $this->dashStyle;
        }

        // Check the snap.
        if (!is_null($this->snap)) {
            $output["snap"] = $this->snap;
        }

        // Check the width.
        if (!is_null($this->width)) {
            $output["width"] = $this->width;
        }

        // Check the z index.
        if (!is_null($this->zIndex)) {
            $output["zIndex"] = $this->zIndex;
        }

        // Return the output.
        return $output;
    }

}
