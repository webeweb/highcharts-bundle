<?php

/*
 * This file is part of the WBWHighchartsBundle package.
 *
 * (c) 2017 NdC/WBW
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\HighchartsBundle\API\Chart;

use JsonSerializable;

/**
 * Highcharts exporting.
 *
 * @author WBW <https://github.com/webeweb/WBWHighchartsBundle>
 * @package WBW\HighchartsBundle\API\Chart
 * @version 5.0.14
 * @final
 */
final class HighchartsExporting implements JsonSerializable {

    /**
     * Allow HTML.
     *
     * @var boolean
     * @since 4.1.8
     */
    private $allowHTML = false;

    /**
     * Buttons.
     *
     * @var \WBW\HighchartsBundle\API\Chart\Exporting\HighchartsButtons
     */
    private $buttons;

    /**
     * Chart options.
     *
     * @var array
     */
    private $chartOptions;

    /**
     * Enabled.
     *
     * @var boolean
     * @since 2.0
     */
    private $enabled = true;

    /**
     * Error.
     *
     * @var string
     * @since 5.0.0
     */
    private $error;

    /**
     * Fallback to export server.
     *
     * @var boolean
     * @since 4.1.8
     */
    private $fallbackToExportServer = true;

    /**
     * Filename.
     *
     * @var string
     * @since 2.0
     */
    private $filename = "chart";

    /**
     * Form attributes.
     *
     * @var array
     * @since 3.0.8
     */
    private $formAttributes;

    /**
     * Lib URL.
     *
     * @var string
     * @since 5.0.0
     */
    private $libURL = "https://code.highcharts.com/{version}/lib";

    /**
     * Menu item definitions.
     *
     * @var array
     * @since 5.0.13
     */
    private $menuItemDefinitions;

    /**
     * Print max width.
     *
     * @var integer
     * @since 4.2.5
     */
    private $printMaxWidth = 780;

    /**
     * Scale.
     *
     * @var integer
     * @since 3.0
     */
    private $scale = 2;

    /**
     * Source height.
     *
     * @var integer
     * @since 3.0
     */
    private $sourceHeight;

    /**
     * Source width.
     *
     * @var integer
     * @since 3.0
     */
    private $sourceWidth;

    /**
     * Type.
     *
     * @var string
     * @since 2.0
     */
    private $type = "image/png";

    /**
     * Url.
     *
     * @var string
     * @since 2.0
     */
    private $url = "https://export.highcharts.com";

    /**
     * Width.
     *
     * @var integer
     * @since 2.0
     */
    private $width;

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

        // Clear the allow HTML.
        $this->allowHTML = null;

        // Clear the buttons.
        if (!is_null($this->buttons)) {
            $this->buttons->clear();
        }

        // Clear the chart options.
        $this->chartOptions = null;

        // Clear the enabled.
        $this->enabled = null;

        // Clear the error.
        $this->error = null;

        // Clear the fallback to export server.
        $this->fallbackToExportServer = null;

        // Clear the filename.
        $this->filename = null;

        // Clear the form attributes.
        $this->formAttributes = null;

        // Clear the lib URL.
        $this->libURL = null;

        // Clear the menu item definitions.
        $this->menuItemDefinitions = null;

        // Clear the print max width.
        $this->printMaxWidth = null;

        // Clear the scale.
        $this->scale = null;

        // Clear the source height.
        $this->sourceHeight = null;

        // Clear the source width.
        $this->sourceWidth = null;

        // Clear the type.
        $this->type = null;

        // Clear the url.
        $this->url = null;

        // Clear the width.
        $this->width = null;
    }

    /**
     * Get the allow HTML.
     *
     * @return boolean Returns the allow HTML.
     */
    public function getAllowHTML() {
        return $this->allowHTML;
    }

    /**
     * Get the buttons.
     *
     * @return \WBW\HighchartsBundle\API\Chart\Exporting\HighchartsButtons Returns the buttons.
     */
    public function getButtons() {
        return $this->buttons;
    }

    /**
     * Get the chart options.
     *
     * @return array Returns the chart options.
     */
    public function getChartOptions() {
        return $this->chartOptions;
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
     * Get the error.
     *
     * @return string Returns the error.
     */
    public function getError() {
        return $this->error;
    }

    /**
     * Get the fallback to export server.
     *
     * @return boolean Returns the fallback to export server.
     */
    public function getFallbackToExportServer() {
        return $this->fallbackToExportServer;
    }

    /**
     * Get the filename.
     *
     * @return string Returns the filename.
     */
    public function getFilename() {
        return $this->filename;
    }

    /**
     * Get the form attributes.
     *
     * @return array Returns the form attributes.
     */
    public function getFormAttributes() {
        return $this->formAttributes;
    }

    /**
     * Get the lib URL.
     *
     * @return string Returns the lib URL.
     */
    public function getLibURL() {
        return $this->libURL;
    }

    /**
     * Get the menu item definitions.
     *
     * @return array Returns the menu item definitions.
     */
    public function getMenuItemDefinitions() {
        return $this->menuItemDefinitions;
    }

    /**
     * Get the print max width.
     *
     * @return integer Returns the print max width.
     */
    public function getPrintMaxWidth() {
        return $this->printMaxWidth;
    }

    /**
     * Get the scale.
     *
     * @return integer Returns the scale.
     */
    public function getScale() {
        return $this->scale;
    }

    /**
     * Get the source height.
     *
     * @return integer Returns the source height.
     */
    public function getSourceHeight() {
        return $this->sourceHeight;
    }

    /**
     * Get the source width.
     *
     * @return integer Returns the source width.
     */
    public function getSourceWidth() {
        return $this->sourceWidth;
    }

    /**
     * Get the type.
     *
     * @return string Returns the type.
     */
    public function getType() {
        return $this->type;
    }

    /**
     * Get the url.
     *
     * @return string Returns the url.
     */
    public function getUrl() {
        return $this->url;
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
     * Serialize this instance.
     *
     * @return array Returns an array representing this instance.
     */
    public function jsonSerialize() {
        return $this->toArray();
    }

    /**
     * Create a new buttons.
     *
     * @return \WBW\HighchartsBundle\API\Chart\Exporting\HighchartsButtons Returns the buttons.
     */
    public function newButtons() {
        $this->buttons = new \WBW\HighchartsBundle\API\Chart\Exporting\HighchartsButtons();
        return $this->buttons;
    }

    /**
     * Set the allow HTML.
     *
     * @param boolean $allowHTML The allow HTML.
     * @return \WBW\HighchartsBundle\API\Chart\HighchartsExporting Returns the highcharts exporting.
     */
    public function setAllowHTML($allowHTML) {
        $this->allowHTML = $allowHTML;
        return $this;
    }

    /**
     * Set the buttons.
     *
     * @param \WBW\HighchartsBundle\API\Chart\Exporting\HighchartsButtons $buttons The buttons.
     * @return \WBW\HighchartsBundle\API\Chart\HighchartsExporting Returns the highcharts exporting.
     */
    public function setButtons(\WBW\HighchartsBundle\API\Chart\Exporting\HighchartsButtons $buttons = null) {
        $this->buttons = $buttons;
        return $this;
    }

    /**
     * Set the chart options.
     *
     * @param array $chartOptions The chart options.
     * @return \WBW\HighchartsBundle\API\Chart\HighchartsExporting Returns the highcharts exporting.
     */
    public function setChartOptions(array $chartOptions = null) {
        $this->chartOptions = $chartOptions;
        return $this;
    }

    /**
     * Set the enabled.
     *
     * @param boolean $enabled The enabled.
     * @return \WBW\HighchartsBundle\API\Chart\HighchartsExporting Returns the highcharts exporting.
     */
    public function setEnabled($enabled) {
        $this->enabled = $enabled;
        return $this;
    }

    /**
     * Set the error.
     *
     * @param string $error The error.
     * @return \WBW\HighchartsBundle\API\Chart\HighchartsExporting Returns the highcharts exporting.
     */
    public function setError($error) {
        $this->error = $error;
        return $this;
    }

    /**
     * Set the fallback to export server.
     *
     * @param boolean $fallbackToExportServer The fallback to export server.
     * @return \WBW\HighchartsBundle\API\Chart\HighchartsExporting Returns the highcharts exporting.
     */
    public function setFallbackToExportServer($fallbackToExportServer) {
        $this->fallbackToExportServer = $fallbackToExportServer;
        return $this;
    }

    /**
     * Set the filename.
     *
     * @param string $filename The filename.
     * @return \WBW\HighchartsBundle\API\Chart\HighchartsExporting Returns the highcharts exporting.
     */
    public function setFilename($filename) {
        $this->filename = $filename;
        return $this;
    }

    /**
     * Set the form attributes.
     *
     * @param array $formAttributes The form attributes.
     * @return \WBW\HighchartsBundle\API\Chart\HighchartsExporting Returns the highcharts exporting.
     */
    public function setFormAttributes(array $formAttributes = null) {
        $this->formAttributes = $formAttributes;
        return $this;
    }

    /**
     * Set the lib URL.
     *
     * @param string $libURL The lib URL.
     * @return \WBW\HighchartsBundle\API\Chart\HighchartsExporting Returns the highcharts exporting.
     */
    public function setLibURL($libURL) {
        $this->libURL = $libURL;
        return $this;
    }

    /**
     * Set the menu item definitions.
     *
     * @param array $menuItemDefinitions The menu item definitions.
     * @return \WBW\HighchartsBundle\API\Chart\HighchartsExporting Returns the highcharts exporting.
     */
    public function setMenuItemDefinitions(array $menuItemDefinitions = null) {
        $this->menuItemDefinitions = $menuItemDefinitions;
        return $this;
    }

    /**
     * Set the print max width.
     *
     * @param integer $printMaxWidth The print max width.
     * @return \WBW\HighchartsBundle\API\Chart\HighchartsExporting Returns the highcharts exporting.
     */
    public function setPrintMaxWidth($printMaxWidth) {
        $this->printMaxWidth = $printMaxWidth;
        return $this;
    }

    /**
     * Set the scale.
     *
     * @param integer $scale The scale.
     * @return \WBW\HighchartsBundle\API\Chart\HighchartsExporting Returns the highcharts exporting.
     */
    public function setScale($scale) {
        $this->scale = $scale;
        return $this;
    }

    /**
     * Set the source height.
     *
     * @param integer $sourceHeight The source height.
     * @return \WBW\HighchartsBundle\API\Chart\HighchartsExporting Returns the highcharts exporting.
     */
    public function setSourceHeight($sourceHeight) {
        $this->sourceHeight = $sourceHeight;
        return $this;
    }

    /**
     * Set the source width.
     *
     * @param integer $sourceWidth The source width.
     * @return \WBW\HighchartsBundle\API\Chart\HighchartsExporting Returns the highcharts exporting.
     */
    public function setSourceWidth($sourceWidth) {
        $this->sourceWidth = $sourceWidth;
        return $this;
    }

    /**
     * Set the type.
     *
     * @param string $type The type.
     * @return \WBW\HighchartsBundle\API\Chart\HighchartsExporting Returns the highcharts exporting.
     */
    public function setType($type) {
        switch ($type) {
            case "application/pdf":
            case "image/jpeg":
            case "image/png":
            case "image/svg+xml":
                $this->type = $type;
                break;
        }
        return $this;
    }

    /**
     * Set the url.
     *
     * @param string $url The url.
     * @return \WBW\HighchartsBundle\API\Chart\HighchartsExporting Returns the highcharts exporting.
     */
    public function setUrl($url) {
        $this->url = $url;
        return $this;
    }

    /**
     * Set the width.
     *
     * @param integer $width The width.
     * @return \WBW\HighchartsBundle\API\Chart\HighchartsExporting Returns the highcharts exporting.
     */
    public function setWidth($width) {
        $this->width = $width;
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

        // Check the allow HTML.
        if (!is_null($this->allowHTML)) {
            $output["allowHTML"] = $this->allowHTML;
        }

        // Check the buttons.
        if (!is_null($this->buttons)) {
            $output["buttons"] = $this->buttons->toArray();
        }

        // Check the chart options.
        if (!is_null($this->chartOptions)) {
            $output["chartOptions"] = $this->chartOptions;
        }

        // Check the enabled.
        if (!is_null($this->enabled)) {
            $output["enabled"] = $this->enabled;
        }

        // Check the error.
        if (!is_null($this->error)) {
            $output["error"] = $this->error;
        }

        // Check the fallback to export server.
        if (!is_null($this->fallbackToExportServer)) {
            $output["fallbackToExportServer"] = $this->fallbackToExportServer;
        }

        // Check the filename.
        if (!is_null($this->filename)) {
            $output["filename"] = $this->filename;
        }

        // Check the form attributes.
        if (!is_null($this->formAttributes)) {
            $output["formAttributes"] = $this->formAttributes;
        }

        // Check the lib URL.
        if (!is_null($this->libURL)) {
            $output["libURL"] = $this->libURL;
        }

        // Check the menu item definitions.
        if (!is_null($this->menuItemDefinitions)) {
            $output["menuItemDefinitions"] = $this->menuItemDefinitions;
        }

        // Check the print max width.
        if (!is_null($this->printMaxWidth)) {
            $output["printMaxWidth"] = $this->printMaxWidth;
        }

        // Check the scale.
        if (!is_null($this->scale)) {
            $output["scale"] = $this->scale;
        }

        // Check the source height.
        if (!is_null($this->sourceHeight)) {
            $output["sourceHeight"] = $this->sourceHeight;
        }

        // Check the source width.
        if (!is_null($this->sourceWidth)) {
            $output["sourceWidth"] = $this->sourceWidth;
        }

        // Check the type.
        if (!is_null($this->type)) {
            $output["type"] = $this->type;
        }

        // Check the url.
        if (!is_null($this->url)) {
            $output["url"] = $this->url;
        }

        // Check the width.
        if (!is_null($this->width)) {
            $output["width"] = $this->width;
        }

        // Return the output.
        return $output;
    }

}
