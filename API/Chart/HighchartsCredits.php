<?php

/**
 * This file is part of the highcharts-bundle package.
 *
 * (c) 2017 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\HighchartsBundle\API\Chart;

use JsonSerializable;

/**
 * Highcharts credits.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\HighchartsBundle\API\Chart
 * @version 5.0.14
 * @final
 */
final class HighchartsCredits implements JsonSerializable {

    /**
     * Enabled.
     *
     * @var boolean
     */
    private $enabled = true;

    /**
     * Href.
     *
     * @var string
     */
    private $href = "http://www.highcharts.com";

    /**
     * Position.
     *
     * @var array
     * @since 2.1
     */
    private $position;

    /**
     * Style.
     *
     * @var array
     */
    private $style = ["cursor" => "pointer", "color" => "#999999", "fontSize" => "10px"];

    /**
     * Text.
     *
     * @var string
     */
    private $text = "Highcharts.com";

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

        // Clear the enabled.
        $this->enabled = null;

        // Clear the href.
        $this->href = null;

        // Clear the position.
        $this->position = null;

        // Clear the style.
        $this->style = null;

        // Clear the text.
        $this->text = null;
    }

    /**
     * Get the enabled.
     *
     * @return boolean Returns the enabled.
     */
    public function getEnabled() {
        return $this->enabled;
    }

    /**
     * Get the href.
     *
     * @return string Returns the href.
     */
    public function getHref() {
        return $this->href;
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
     * Get the style.
     *
     * @return array Returns the style.
     */
    public function getStyle() {
        return $this->style;
    }

    /**
     * Get the text.
     *
     * @return string Returns the text.
     */
    public function getText() {
        return $this->text;
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
     * Set the enabled.
     *
     * @param boolean $enabled The enabled.
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\HighchartsCredits Returns the highcharts credits.
     */
    public function setEnabled($enabled) {
        $this->enabled = $enabled;
        return $this;
    }

    /**
     * Set the href.
     *
     * @param string $href The href.
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\HighchartsCredits Returns the highcharts credits.
     */
    public function setHref($href) {
        $this->href = $href;
        return $this;
    }

    /**
     * Set the position.
     *
     * @param array $position The position.
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\HighchartsCredits Returns the highcharts credits.
     */
    public function setPosition(array $position = null) {
        $this->position = $position;
        return $this;
    }

    /**
     * Set the style.
     *
     * @param array $style The style.
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\HighchartsCredits Returns the highcharts credits.
     */
    public function setStyle(array $style = null) {
        $this->style = $style;
        return $this;
    }

    /**
     * Set the text.
     *
     * @param string $text The text.
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\HighchartsCredits Returns the highcharts credits.
     */
    public function setText($text) {
        $this->text = $text;
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

        // Check the enabled.
        if (!is_null($this->enabled)) {
            $output["enabled"] = $this->enabled;
        }

        // Check the href.
        if (!is_null($this->href)) {
            $output["href"] = $this->href;
        }

        // Check the position.
        if (!is_null($this->position)) {
            $output["position"] = $this->position;
        }

        // Check the style.
        if (!is_null($this->style)) {
            $output["style"] = $this->style;
        }

        // Check the text.
        if (!is_null($this->text)) {
            $output["text"] = $this->text;
        }

        // Return the output.
        return $output;
    }

}
