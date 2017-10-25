<?php

/*
 * This file is part of the WBWHighchartsBundle package.
 *
 * (c) 2017 NdC/WBW
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\HighchartsBundle\API\Chart\Chart;

use JsonSerializable;

/**
 * Highcharts reset zoom button.
 *
 * @author NdC/WBW <https://github.com/webeweb/>
 * @package WBW\Bundle\HighchartsBundle\API\Chart\Chart
 * @version 5.0.14
 * @final
 */
final class HighchartsResetZoomButton implements JsonSerializable {

    /**
     * Position.
     *
     * @var array
     * @since 2.2
     */
    private $position;

    /**
     * Relative to.
     *
     * @var string
     * @since 2.2
     */
    private $relativeTo = "plot";

    /**
     * Theme.
     *
     * @var array
     * @since 2.2
     */
    private $theme;

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

        // Clear the position.
        $this->position = null;

        // Clear the relative to.
        $this->relativeTo = null;

        // Clear the theme.
        $this->theme = null;
    }

    /**
     * Get the position.
     *
     * @return array Returns the position.
     */
    public function getPosition() {
        return $this->position;
    }

    /**
     * Get the relative to.
     *
     * @return string Returns the relative to.
     */
    public function getRelativeTo() {
        return $this->relativeTo;
    }

    /**
     * Get the theme.
     *
     * @return array Returns the theme.
     */
    public function getTheme() {
        return $this->theme;
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
     * Set the position.
     *
     * @param array $position The position.
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\Chart\HighchartsResetZoomButton Returns the highcharts reset zoom button.
     */
    public function setPosition(array $position = null) {
        $this->position = $position;
        return $this;
    }

    /**
     * Set the relative to.
     *
     * @param string $relativeTo The relative to.
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\Chart\HighchartsResetZoomButton Returns the highcharts reset zoom button.
     */
    public function setRelativeTo($relativeTo) {
        switch ($relativeTo) {
            case "chart":
            case "plot":
                $this->relativeTo = $relativeTo;
                break;
        }
        return $this;
    }

    /**
     * Set the theme.
     *
     * @param array $theme The theme.
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\Chart\HighchartsResetZoomButton Returns the highcharts reset zoom button.
     */
    public function setTheme(array $theme = null) {
        $this->theme = $theme;
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

        // Check the position.
        if (!is_null($this->position)) {
            $output["position"] = $this->position;
        }

        // Check the relative to.
        if (!is_null($this->relativeTo)) {
            $output["relativeTo"] = $this->relativeTo;
        }

        // Check the theme.
        if (!is_null($this->theme)) {
            $output["theme"] = $this->theme;
        }

        // Return the output.
        return $output;
    }

}
