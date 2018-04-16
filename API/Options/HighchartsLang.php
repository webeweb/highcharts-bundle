<?php

/**
 * This file is part of the highcharts-bundle package.
 *
 * (c) 2017 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\HighchartsBundle\API\Options;

use JsonSerializable;
use WBW\Library\Core\Utility\Argument\ArrayUtility;

/**
 * Highcharts lang.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\HighchartsBundle\API\Options
 * @version 5.0.14
 * @final
 */
final class HighchartsLang implements JsonSerializable {

    /**
     * Context button title.
     *
     * @var string
     * @since 3.0
     */
    private $contextButtonTitle = "Chart context menu";

    /**
     * Decimal point.
     *
     * @var string
     * @since 1.2.2
     */
    private $decimalPoint = ".";

    /**
     * Download JPEG.
     *
     * @var string
     * @since 2.0
     */
    private $downloadJPEG = "Download JPEG image";

    /**
     * Download PDF.
     *
     * @var string
     * @since 2.0
     */
    private $downloadPDF = "Download PDF document";

    /**
     * Download PNG.
     *
     * @var string
     * @since 2.0
     */
    private $downloadPNG = "Download PNG image";

    /**
     * Download SVG.
     *
     * @var string
     * @since 2.0
     */
    private $downloadSVG = "Download SVG vector image";

    /**
     * Drill up text.
     *
     * @var string
     * @since 3.0.8
     */
    private $drillUpText = "Back to {series.name}";

    /**
     * Invalid date.
     *
     * @var string
     * @since 4.1.8
     */
    private $invalidDate;

    /**
     * Loading.
     *
     * @var string
     */
    private $loading = "Loading...";

    /**
     * Months.
     *
     * @var array
     */
    private $months = ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"];

    /**
     * No data.
     *
     * @var string
     * @since 3.0.8
     */
    private $noData = "No data to display";

    /**
     * Numeric symbol magnitude.
     *
     * @var integer
     * @since 5.0.3
     */
    private $numericSymbolMagnitude = 1000;

    /**
     * Numeric symbols.
     *
     * @var array
     * @since 2.3.0
     */
    private $numericSymbols = ["k", "M", "G", "T", "P", "E"];

    /**
     * Print chart.
     *
     * @var string
     * @since 3.0.1
     */
    private $printChart = "Print chart";

    /**
     * Reset zoom.
     *
     * @var string
     * @since 1.2.4
     */
    private $resetZoom = "Reset zoom";

    /**
     * Reset zoom title.
     *
     * @var string
     * @since 1.2.4
     */
    private $resetZoomTitle = "Reset zoom level 1:1";

    /**
     * Short months.
     *
     * @var array
     */
    private $shortMonths = ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"];

    /**
     * Short weekdays.
     *
     * @var array
     * @since 4.2.4
     */
    private $shortWeekdays;

    /**
     * Thousands sep.
     *
     * @var string
     * @since 1.2.2
     */
    private $thousandsSep;

    /**
     * Weekdays.
     *
     * @var array
     */
    private $weekdays = ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"];

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

        // Clear the context button title.
        $this->contextButtonTitle = null;

        // Clear the decimal point.
        $this->decimalPoint = null;

        // Clear the download JPEG.
        $this->downloadJPEG = null;

        // Clear the download PDF.
        $this->downloadPDF = null;

        // Clear the download PNG.
        $this->downloadPNG = null;

        // Clear the download SVG.
        $this->downloadSVG = null;

        // Clear the drill up text.
        $this->drillUpText = null;

        // Clear the invalid date.
        $this->invalidDate = null;

        // Clear the loading.
        $this->loading = null;

        // Clear the months.
        $this->months = null;

        // Clear the no data.
        $this->noData = null;

        // Clear the numeric symbol magnitude.
        $this->numericSymbolMagnitude = null;

        // Clear the numeric symbols.
        $this->numericSymbols = null;

        // Clear the print chart.
        $this->printChart = null;

        // Clear the reset zoom.
        $this->resetZoom = null;

        // Clear the reset zoom title.
        $this->resetZoomTitle = null;

        // Clear the short months.
        $this->shortMonths = null;

        // Clear the short weekdays.
        $this->shortWeekdays = null;

        // Clear the thousands sep.
        $this->thousandsSep = null;

        // Clear the weekdays.
        $this->weekdays = null;
    }

    /**
     * Get the context button title.
     *
     * @return string Returns the context button title.
     */
    public function getContextButtonTitle() {
        return $this->contextButtonTitle;
    }

    /**
     * Get the decimal point.
     *
     * @return string Returns the decimal point.
     */
    public function getDecimalPoint() {
        return $this->decimalPoint;
    }

    /**
     * Get the download JPEG.
     *
     * @return string Returns the download JPEG.
     */
    public function getDownloadJPEG() {
        return $this->downloadJPEG;
    }

    /**
     * Get the download PDF.
     *
     * @return string Returns the download PDF.
     */
    public function getDownloadPDF() {
        return $this->downloadPDF;
    }

    /**
     * Get the download PNG.
     *
     * @return string Returns the download PNG.
     */
    public function getDownloadPNG() {
        return $this->downloadPNG;
    }

    /**
     * Get the download SVG.
     *
     * @return string Returns the download SVG.
     */
    public function getDownloadSVG() {
        return $this->downloadSVG;
    }

    /**
     * Get the drill up text.
     *
     * @return string Returns the drill up text.
     */
    public function getDrillUpText() {
        return $this->drillUpText;
    }

    /**
     * Get the invalid date.
     *
     * @return string Returns the invalid date.
     */
    public function getInvalidDate() {
        return $this->invalidDate;
    }

    /**
     * Get the loading.
     *
     * @return string Returns the loading.
     */
    public function getLoading() {
        return $this->loading;
    }

    /**
     * Get the months.
     *
     * @return array Returns the months.
     */
    public function getMonths() {
        return $this->months;
    }

    /**
     * Get the no data.
     *
     * @return string Returns the no data.
     */
    public function getNoData() {
        return $this->noData;
    }

    /**
     * Get the numeric symbol magnitude.
     *
     * @return integer Returns the numeric symbol magnitude.
     */
    public function getNumericSymbolMagnitude() {
        return $this->numericSymbolMagnitude;
    }

    /**
     * Get the numeric symbols.
     *
     * @return array Returns the numeric symbols.
     */
    public function getNumericSymbols() {
        return $this->numericSymbols;
    }

    /**
     * Get the print chart.
     *
     * @return string Returns the print chart.
     */
    public function getPrintChart() {
        return $this->printChart;
    }

    /**
     * Get the reset zoom.
     *
     * @return string Returns the reset zoom.
     */
    public function getResetZoom() {
        return $this->resetZoom;
    }

    /**
     * Get the reset zoom title.
     *
     * @return string Returns the reset zoom title.
     */
    public function getResetZoomTitle() {
        return $this->resetZoomTitle;
    }

    /**
     * Get the short months.
     *
     * @return array Returns the short months.
     */
    public function getShortMonths() {
        return $this->shortMonths;
    }

    /**
     * Get the short weekdays.
     *
     * @return array Returns the short weekdays.
     */
    public function getShortWeekdays() {
        return $this->shortWeekdays;
    }

    /**
     * Get the thousands sep.
     *
     * @return string Returns the thousands sep.
     */
    public function getThousandsSep() {
        return $this->thousandsSep;
    }

    /**
     * Get the weekdays.
     *
     * @return array Returns the weekdays.
     */
    public function getWeekdays() {
        return $this->weekdays;
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
     * Set the context button title.
     *
     * @param string $contextButtonTitle The context button title.
     * @return \WBW\Bundle\HighchartsBundle\API\Options\HighchartsLang Returns the highcharts lang.
     */
    public function setContextButtonTitle($contextButtonTitle) {
        $this->contextButtonTitle = $contextButtonTitle;
        return $this;
    }

    /**
     * Set the decimal point.
     *
     * @param string $decimalPoint The decimal point.
     * @return \WBW\Bundle\HighchartsBundle\API\Options\HighchartsLang Returns the highcharts lang.
     */
    public function setDecimalPoint($decimalPoint) {
        $this->decimalPoint = $decimalPoint;
        return $this;
    }

    /**
     * Set the download JPEG.
     *
     * @param string $downloadJPEG The download JPEG.
     * @return \WBW\Bundle\HighchartsBundle\API\Options\HighchartsLang Returns the highcharts lang.
     */
    public function setDownloadJPEG($downloadJPEG) {
        $this->downloadJPEG = $downloadJPEG;
        return $this;
    }

    /**
     * Set the download PDF.
     *
     * @param string $downloadPDF The download PDF.
     * @return \WBW\Bundle\HighchartsBundle\API\Options\HighchartsLang Returns the highcharts lang.
     */
    public function setDownloadPDF($downloadPDF) {
        $this->downloadPDF = $downloadPDF;
        return $this;
    }

    /**
     * Set the download PNG.
     *
     * @param string $downloadPNG The download PNG.
     * @return \WBW\Bundle\HighchartsBundle\API\Options\HighchartsLang Returns the highcharts lang.
     */
    public function setDownloadPNG($downloadPNG) {
        $this->downloadPNG = $downloadPNG;
        return $this;
    }

    /**
     * Set the download SVG.
     *
     * @param string $downloadSVG The download SVG.
     * @return \WBW\Bundle\HighchartsBundle\API\Options\HighchartsLang Returns the highcharts lang.
     */
    public function setDownloadSVG($downloadSVG) {
        $this->downloadSVG = $downloadSVG;
        return $this;
    }

    /**
     * Set the drill up text.
     *
     * @param string $drillUpText The drill up text.
     * @return \WBW\Bundle\HighchartsBundle\API\Options\HighchartsLang Returns the highcharts lang.
     */
    public function setDrillUpText($drillUpText) {
        $this->drillUpText = $drillUpText;
        return $this;
    }

    /**
     * Set the invalid date.
     *
     * @param string $invalidDate The invalid date.
     * @return \WBW\Bundle\HighchartsBundle\API\Options\HighchartsLang Returns the highcharts lang.
     */
    public function setInvalidDate($invalidDate) {
        $this->invalidDate = $invalidDate;
        return $this;
    }

    /**
     * Set the loading.
     *
     * @param string $loading The loading.
     * @return \WBW\Bundle\HighchartsBundle\API\Options\HighchartsLang Returns the highcharts lang.
     */
    public function setLoading($loading) {
        $this->loading = $loading;
        return $this;
    }

    /**
     * Set the months.
     *
     * @param array $months The months.
     * @return \WBW\Bundle\HighchartsBundle\API\Options\HighchartsLang Returns the highcharts lang.
     */
    public function setMonths(array $months = null) {
        $this->months = $months;
        return $this;
    }

    /**
     * Set the no data.
     *
     * @param string $noData The no data.
     * @return \WBW\Bundle\HighchartsBundle\API\Options\HighchartsLang Returns the highcharts lang.
     */
    public function setNoData($noData) {
        $this->noData = $noData;
        return $this;
    }

    /**
     * Set the numeric symbol magnitude.
     *
     * @param integer $numericSymbolMagnitude The numeric symbol magnitude.
     * @return \WBW\Bundle\HighchartsBundle\API\Options\HighchartsLang Returns the highcharts lang.
     */
    public function setNumericSymbolMagnitude($numericSymbolMagnitude) {
        $this->numericSymbolMagnitude = $numericSymbolMagnitude;
        return $this;
    }

    /**
     * Set the numeric symbols.
     *
     * @param array $numericSymbols The numeric symbols.
     * @return \WBW\Bundle\HighchartsBundle\API\Options\HighchartsLang Returns the highcharts lang.
     */
    public function setNumericSymbols(array $numericSymbols = null) {
        $this->numericSymbols = $numericSymbols;
        return $this;
    }

    /**
     * Set the print chart.
     *
     * @param string $printChart The print chart.
     * @return \WBW\Bundle\HighchartsBundle\API\Options\HighchartsLang Returns the highcharts lang.
     */
    public function setPrintChart($printChart) {
        $this->printChart = $printChart;
        return $this;
    }

    /**
     * Set the reset zoom.
     *
     * @param string $resetZoom The reset zoom.
     * @return \WBW\Bundle\HighchartsBundle\API\Options\HighchartsLang Returns the highcharts lang.
     */
    public function setResetZoom($resetZoom) {
        $this->resetZoom = $resetZoom;
        return $this;
    }

    /**
     * Set the reset zoom title.
     *
     * @param string $resetZoomTitle The reset zoom title.
     * @return \WBW\Bundle\HighchartsBundle\API\Options\HighchartsLang Returns the highcharts lang.
     */
    public function setResetZoomTitle($resetZoomTitle) {
        $this->resetZoomTitle = $resetZoomTitle;
        return $this;
    }

    /**
     * Set the short months.
     *
     * @param array $shortMonths The short months.
     * @return \WBW\Bundle\HighchartsBundle\API\Options\HighchartsLang Returns the highcharts lang.
     */
    public function setShortMonths(array $shortMonths = null) {
        $this->shortMonths = $shortMonths;
        return $this;
    }

    /**
     * Set the short weekdays.
     *
     * @param array $shortWeekdays The short weekdays.
     * @return \WBW\Bundle\HighchartsBundle\API\Options\HighchartsLang Returns the highcharts lang.
     */
    public function setShortWeekdays(array $shortWeekdays = null) {
        $this->shortWeekdays = $shortWeekdays;
        return $this;
    }

    /**
     * Set the thousands sep.
     *
     * @param string $thousandsSep The thousands sep.
     * @return \WBW\Bundle\HighchartsBundle\API\Options\HighchartsLang Returns the highcharts lang.
     */
    public function setThousandsSep($thousandsSep) {
        $this->thousandsSep = $thousandsSep;
        return $this;
    }

    /**
     * Set the weekdays.
     *
     * @param array $weekdays The weekdays.
     * @return \WBW\Bundle\HighchartsBundle\API\Options\HighchartsLang Returns the highcharts lang.
     */
    public function setWeekdays(array $weekdays = null) {
        $this->weekdays = $weekdays;
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

        // Set the context button title.
        ArrayUtility::set($output, "contextButtonTitle", $this->contextButtonTitle, [null]);

        // Set the decimal point.
        ArrayUtility::set($output, "decimalPoint", $this->decimalPoint, [null]);

        // Set the download JPEG.
        ArrayUtility::set($output, "downloadJPEG", $this->downloadJPEG, [null]);

        // Set the download PDF.
        ArrayUtility::set($output, "downloadPDF", $this->downloadPDF, [null]);

        // Set the download PNG.
        ArrayUtility::set($output, "downloadPNG", $this->downloadPNG, [null]);

        // Set the download SVG.
        ArrayUtility::set($output, "downloadSVG", $this->downloadSVG, [null]);

        // Set the drill up text.
        ArrayUtility::set($output, "drillUpText", $this->drillUpText, [null]);

        // Set the invalid date.
        ArrayUtility::set($output, "invalidDate", $this->invalidDate, [null]);

        // Set the loading.
        ArrayUtility::set($output, "loading", $this->loading, [null]);

        // Set the months.
        ArrayUtility::set($output, "months", $this->months, [null]);

        // Set the no data.
        ArrayUtility::set($output, "noData", $this->noData, [null]);

        // Set the numeric symbol magnitude.
        ArrayUtility::set($output, "numericSymbolMagnitude", $this->numericSymbolMagnitude, [null]);

        // Set the numeric symbols.
        ArrayUtility::set($output, "numericSymbols", $this->numericSymbols, [null]);

        // Set the print chart.
        ArrayUtility::set($output, "printChart", $this->printChart, [null]);

        // Set the reset zoom.
        ArrayUtility::set($output, "resetZoom", $this->resetZoom, [null]);

        // Set the reset zoom title.
        ArrayUtility::set($output, "resetZoomTitle", $this->resetZoomTitle, [null]);

        // Set the short months.
        ArrayUtility::set($output, "shortMonths", $this->shortMonths, [null]);

        // Set the short weekdays.
        ArrayUtility::set($output, "shortWeekdays", $this->shortWeekdays, [null]);

        // Set the thousands sep.
        ArrayUtility::set($output, "thousandsSep", $this->thousandsSep, [null]);

        // Set the weekdays.
        ArrayUtility::set($output, "weekdays", $this->weekdays, [null]);

        // Return the output.
        return $output;
    }

}
