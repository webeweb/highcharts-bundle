<?php

/**
 * This file is part of the highcharts-bundle package.
 *
 * (c) 2017 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\HighchartsBundle\API\Chart\Responsive\Rules;

use JsonSerializable;
use WBW\Library\Core\Utility\Argument\ArrayUtility;

/**
 * Highcharts condition.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\HighchartsBundle\API\Chart\Responsive\Rules
 * @version 5.0.14
 * @final
 */
final class HighchartsCondition implements JsonSerializable {

    /**
     * Callback.
     *
     * @var string
     * @since 5.0.0
     */
    private $callback;

    /**
     * Max height.
     *
     * @var integer
     * @since 5.0.0
     */
    private $maxHeight;

    /**
     * Max width.
     *
     * @var integer
     * @since 5.0.0
     */
    private $maxWidth;

    /**
     * Min height.
     *
     * @var integer
     * @since 5.0.0
     */
    private $minHeight = 0;

    /**
     * Min width.
     *
     * @var integer
     * @since 5.0.0
     */
    private $minWidth = 0;

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

        // Clear the callback.
        $this->callback = null;

        // Clear the max height.
        $this->maxHeight = null;

        // Clear the max width.
        $this->maxWidth = null;

        // Clear the min height.
        $this->minHeight = null;

        // Clear the min width.
        $this->minWidth = null;
    }

    /**
     * Get the callback.
     *
     * @return string Returns the callback.
     */
    public function getCallback() {
        return $this->callback;
    }

    /**
     * Get the max height.
     *
     * @return integer Returns the max height.
     */
    public function getMaxHeight() {
        return $this->maxHeight;
    }

    /**
     * Get the max width.
     *
     * @return integer Returns the max width.
     */
    public function getMaxWidth() {
        return $this->maxWidth;
    }

    /**
     * Get the min height.
     *
     * @return integer Returns the min height.
     */
    public function getMinHeight() {
        return $this->minHeight;
    }

    /**
     * Get the min width.
     *
     * @return integer Returns the min width.
     */
    public function getMinWidth() {
        return $this->minWidth;
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
     * Set the callback.
     *
     * @param string $callback The callback.
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\Responsive\Rules\HighchartsCondition Returns the highcharts condition.
     */
    public function setCallback($callback) {
        $this->callback = $callback;
        return $this;
    }

    /**
     * Set the max height.
     *
     * @param integer $maxHeight The max height.
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\Responsive\Rules\HighchartsCondition Returns the highcharts condition.
     */
    public function setMaxHeight($maxHeight) {
        $this->maxHeight = $maxHeight;
        return $this;
    }

    /**
     * Set the max width.
     *
     * @param integer $maxWidth The max width.
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\Responsive\Rules\HighchartsCondition Returns the highcharts condition.
     */
    public function setMaxWidth($maxWidth) {
        $this->maxWidth = $maxWidth;
        return $this;
    }

    /**
     * Set the min height.
     *
     * @param integer $minHeight The min height.
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\Responsive\Rules\HighchartsCondition Returns the highcharts condition.
     */
    public function setMinHeight($minHeight) {
        $this->minHeight = $minHeight;
        return $this;
    }

    /**
     * Set the min width.
     *
     * @param integer $minWidth The min width.
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\Responsive\Rules\HighchartsCondition Returns the highcharts condition.
     */
    public function setMinWidth($minWidth) {
        $this->minWidth = $minWidth;
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

        // Set the callback.
        ArrayUtility::set($output, "callback", $this->callback, [null]);

        // Set the max height.
        ArrayUtility::set($output, "maxHeight", $this->maxHeight, [null]);

        // Set the max width.
        ArrayUtility::set($output, "maxWidth", $this->maxWidth, [null]);

        // Set the min height.
        ArrayUtility::set($output, "minHeight", $this->minHeight, [null]);

        // Set the min width.
        ArrayUtility::set($output, "minWidth", $this->minWidth, [null]);

        // Return the output.
        return $output;
    }

}
