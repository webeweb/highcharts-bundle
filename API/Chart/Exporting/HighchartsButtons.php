<?php

/**
 * This file is part of the highcharts-bundle package.
 *
 * (c) 2017 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\HighchartsBundle\API\Chart\Exporting;

use JsonSerializable;
use WBW\Library\Core\Utility\Argument\ArrayUtility;

/**
 * Highcharts buttons.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\HighchartsBundle\API\Chart\Exporting
 * @version 5.0.14
 * @final
 */
final class HighchartsButtons implements JsonSerializable {

    /**
     * Context button.
     *
     * @var \WBW\Bundle\HighchartsBundle\API\Chart\Exporting\Buttons\HighchartsContextButton
     */
    private $contextButton;

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

        // Clear the context button.
        if (null !== $this->contextButton) {
            $this->contextButton->clear();
        }
    }

    /**
     * Get the context button.
     *
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\Exporting\Buttons\HighchartsContextButton Returns the context button.
     */
    public function getContextButton() {
        return $this->contextButton;
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
     * Create a new context button.
     *
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\Exporting\Buttons\HighchartsContextButton Returns the context button.
     */
    public function newContextButton() {
        $this->contextButton = new \WBW\Bundle\HighchartsBundle\API\Chart\Exporting\Buttons\HighchartsContextButton();
        return $this->contextButton;
    }

    /**
     * Set the context button.
     *
     * @param \WBW\Bundle\HighchartsBundle\API\Chart\Exporting\Buttons\HighchartsContextButton $contextButton The context button.
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\Exporting\HighchartsButtons Returns the highcharts buttons.
     */
    public function setContextButton(\WBW\Bundle\HighchartsBundle\API\Chart\Exporting\Buttons\HighchartsContextButton $contextButton = null) {
        $this->contextButton = $contextButton;
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

        // Set the context button.
        if (null !== $this->contextButton) {
            ArrayUtility::set($output, "contextButton", $this->contextButton->toArray(), []);
        }

        // Return the output.
        return $output;
    }

}
