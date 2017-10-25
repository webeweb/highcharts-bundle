<?php

/*
 * This file is part of the WBWHighchartsBundle package.
 *
 * (c) 2017 NdC/WBW
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\HighchartsBundle\API\Chart\Series\Boxplot\States\Hover;

use JsonSerializable;

/**
 * Highcharts halo.
 *
 * @author NdC/WBW <https://github.com/webeweb/>
 * @package WBW\Bundle\HighchartsBundle\API\Chart\Series\Boxplot\States\Hover
 * @version 5.0.14
 * @final
 */
final class HighchartsHalo implements JsonSerializable {

    /**
     * Attributes.
     *
     * @var array
     * @since 4.0
     */
    private $attributes;

    /**
     * Opacity.
     *
     * @var integer
     * @since 4.0
     */
    private $opacity = 0.25;

    /**
     * Size.
     *
     * @var integer
     * @since 4.0
     */
    private $size = 10;

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

        // Clear the attributes.
        $this->attributes = null;

        // Clear the opacity.
        $this->opacity = null;

        // Clear the size.
        $this->size = null;
    }

    /**
     * Get the attributes.
     *
     * @return array Returns the attributes.
     */
    public function getAttributes() {
        return $this->attributes;
    }

    /**
     * Get the opacity.
     *
     * @return integer Returns the opacity.
     */
    public function getOpacity() {
        return $this->opacity;
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
     * Set the attributes.
     *
     * @param array $attributes The attributes.
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\Series\Boxplot\States\Hover\HighchartsHalo Returns the highcharts halo.
     */
    public function setAttributes(array $attributes = null) {
        $this->attributes = $attributes;
        return $this;
    }

    /**
     * Set the opacity.
     *
     * @param integer $opacity The opacity.
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\Series\Boxplot\States\Hover\HighchartsHalo Returns the highcharts halo.
     */
    public function setOpacity($opacity) {
        $this->opacity = $opacity;
        return $this;
    }

    /**
     * Set the size.
     *
     * @param integer $size The size.
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\Series\Boxplot\States\Hover\HighchartsHalo Returns the highcharts halo.
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

        // Check the attributes.
        if (!is_null($this->attributes)) {
            $output["attributes"] = $this->attributes;
        }

        // Check the opacity.
        if (!is_null($this->opacity)) {
            $output["opacity"] = $this->opacity;
        }

        // Check the size.
        if (!is_null($this->size)) {
            $output["size"] = $this->size;
        }

        // Return the output.
        return $output;
    }

}
