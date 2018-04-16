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
 * Highcharts breaks.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\HighchartsBundle\API\Chart\YAxis
 * @version 5.0.14
 * @final
 */
final class HighchartsBreaks implements JsonSerializable {

    /**
     * Break size.
     *
     * @var integer
     * @since 4.1.0
     */
    private $breakSize = 0;

    /**
     * From.
     *
     * @var integer
     * @since 4.1.0
     */
    private $from;

    /**
     * Repeat.
     *
     * @var integer
     * @since 4.1.0
     */
    private $repeat = 0;

    /**
     * To.
     *
     * @var integer
     * @since 4.1.0
     */
    private $to;

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

        // Clear the break size.
        $this->breakSize = null;

        // Clear the from.
        $this->from = null;

        // Clear the repeat.
        $this->repeat = null;

        // Clear the to.
        $this->to = null;
    }

    /**
     * Get the break size.
     *
     * @return integer Returns the break size.
     */
    public function getBreakSize() {
        return $this->breakSize;
    }

    /**
     * Get the from.
     *
     * @return integer Returns the from.
     */
    public function getFrom() {
        return $this->from;
    }

    /**
     * Get the repeat.
     *
     * @return integer Returns the repeat.
     */
    public function getRepeat() {
        return $this->repeat;
    }

    /**
     * Get the to.
     *
     * @return integer Returns the to.
     */
    public function getTo() {
        return $this->to;
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
     * Set the break size.
     *
     * @param integer $breakSize The break size.
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\YAxis\HighchartsBreaks Returns the highcharts breaks.
     */
    public function setBreakSize($breakSize) {
        $this->breakSize = $breakSize;
        return $this;
    }

    /**
     * Set the from.
     *
     * @param integer $from The from.
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\YAxis\HighchartsBreaks Returns the highcharts breaks.
     */
    public function setFrom($from) {
        $this->from = $from;
        return $this;
    }

    /**
     * Set the repeat.
     *
     * @param integer $repeat The repeat.
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\YAxis\HighchartsBreaks Returns the highcharts breaks.
     */
    public function setRepeat($repeat) {
        $this->repeat = $repeat;
        return $this;
    }

    /**
     * Set the to.
     *
     * @param integer $to The to.
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\YAxis\HighchartsBreaks Returns the highcharts breaks.
     */
    public function setTo($to) {
        $this->to = $to;
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

        // Set the break size.
        ArrayUtility::set($output, "breakSize", $this->breakSize, [null]);

        // Set the from.
        ArrayUtility::set($output, "from", $this->from, [null]);

        // Set the repeat.
        ArrayUtility::set($output, "repeat", $this->repeat, [null]);

        // Set the to.
        ArrayUtility::set($output, "to", $this->to, [null]);

        // Return the output.
        return $output;
    }

}
