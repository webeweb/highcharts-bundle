<?php

/**
 * This file is part of the highcharts-bundle package.
 *
 * (c) 2017 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\HighchartsBundle\API\Chart\Series\Gauge\Point;

use JsonSerializable;
use WBW\Library\Core\Utility\Argument\ArrayUtility;

/**
 * Highcharts events.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\HighchartsBundle\API\Chart\Series\Gauge\Point
 * @version 5.0.14
 * @final
 */
final class HighchartsEvents implements JsonSerializable {

    /**
     * Click.
     *
     * @var string
     */
    private $click;

    /**
     * Mouse out.
     *
     * @var string
     */
    private $mouseOut;

    /**
     * Mouse over.
     *
     * @var string
     */
    private $mouseOver;

    /**
     * Remove.
     *
     * @var string
     * @since 1.2.0
     */
    private $remove;

    /**
     * Select.
     *
     * @var string
     * @since 1.2.0
     */
    private $select;

    /**
     * Unselect.
     *
     * @var string
     * @since 1.2.0
     */
    private $unselect;

    /**
     * Update.
     *
     * @var string
     * @since 1.2.0
     */
    private $update;

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

        // Clear the click.
        $this->click = null;

        // Clear the mouse out.
        $this->mouseOut = null;

        // Clear the mouse over.
        $this->mouseOver = null;

        // Clear the remove.
        $this->remove = null;

        // Clear the select.
        $this->select = null;

        // Clear the unselect.
        $this->unselect = null;

        // Clear the update.
        $this->update = null;
    }

    /**
     * Get the click.
     *
     * @return string Returns the click.
     */
    public function getClick() {
        return $this->click;
    }

    /**
     * Get the mouse out.
     *
     * @return string Returns the mouse out.
     */
    public function getMouseOut() {
        return $this->mouseOut;
    }

    /**
     * Get the mouse over.
     *
     * @return string Returns the mouse over.
     */
    public function getMouseOver() {
        return $this->mouseOver;
    }

    /**
     * Get the remove.
     *
     * @return string Returns the remove.
     */
    public function getRemove() {
        return $this->remove;
    }

    /**
     * Get the select.
     *
     * @return string Returns the select.
     */
    public function getSelect() {
        return $this->select;
    }

    /**
     * Get the unselect.
     *
     * @return string Returns the unselect.
     */
    public function getUnselect() {
        return $this->unselect;
    }

    /**
     * Get the update.
     *
     * @return string Returns the update.
     */
    public function getUpdate() {
        return $this->update;
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
     * Set the click.
     *
     * @param string $click The click.
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\Series\Gauge\Point\HighchartsEvents Returns the highcharts events.
     */
    public function setClick($click) {
        $this->click = $click;
        return $this;
    }

    /**
     * Set the mouse out.
     *
     * @param string $mouseOut The mouse out.
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\Series\Gauge\Point\HighchartsEvents Returns the highcharts events.
     */
    public function setMouseOut($mouseOut) {
        $this->mouseOut = $mouseOut;
        return $this;
    }

    /**
     * Set the mouse over.
     *
     * @param string $mouseOver The mouse over.
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\Series\Gauge\Point\HighchartsEvents Returns the highcharts events.
     */
    public function setMouseOver($mouseOver) {
        $this->mouseOver = $mouseOver;
        return $this;
    }

    /**
     * Set the remove.
     *
     * @param string $remove The remove.
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\Series\Gauge\Point\HighchartsEvents Returns the highcharts events.
     */
    public function setRemove($remove) {
        $this->remove = $remove;
        return $this;
    }

    /**
     * Set the select.
     *
     * @param string $select The select.
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\Series\Gauge\Point\HighchartsEvents Returns the highcharts events.
     */
    public function setSelect($select) {
        $this->select = $select;
        return $this;
    }

    /**
     * Set the unselect.
     *
     * @param string $unselect The unselect.
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\Series\Gauge\Point\HighchartsEvents Returns the highcharts events.
     */
    public function setUnselect($unselect) {
        $this->unselect = $unselect;
        return $this;
    }

    /**
     * Set the update.
     *
     * @param string $update The update.
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\Series\Gauge\Point\HighchartsEvents Returns the highcharts events.
     */
    public function setUpdate($update) {
        $this->update = $update;
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

        // Set the click.
        ArrayUtility::set($output, "click", $this->click, [null]);

        // Set the mouse out.
        ArrayUtility::set($output, "mouseOut", $this->mouseOut, [null]);

        // Set the mouse over.
        ArrayUtility::set($output, "mouseOver", $this->mouseOver, [null]);

        // Set the remove.
        ArrayUtility::set($output, "remove", $this->remove, [null]);

        // Set the select.
        ArrayUtility::set($output, "select", $this->select, [null]);

        // Set the unselect.
        ArrayUtility::set($output, "unselect", $this->unselect, [null]);

        // Set the update.
        ArrayUtility::set($output, "update", $this->update, [null]);

        // Return the output.
        return $output;
    }

}
