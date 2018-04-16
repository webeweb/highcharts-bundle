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
use WBW\Library\Core\Utility\Argument\ArrayUtility;

/**
 * Highcharts data.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\HighchartsBundle\API\Chart
 * @version 5.0.14
 * @final
 */
final class HighchartsData implements JsonSerializable {

    /**
     * Columns.
     *
     * @var array
     * @since 4.0
     */
    private $columns;

    /**
     * Complete.
     *
     * @var string
     * @since 4.0
     */
    private $complete;

    /**
     * Csv.
     *
     * @var string
     * @since 4.0
     */
    private $csv;

    /**
     * Date format.
     *
     * @var string
     * @since 4.0
     */
    private $dateFormat;

    /**
     * Decimal point.
     *
     * @var string
     * @since 4.1.0
     */
    private $decimalPoint = ".";

    /**
     * End column.
     *
     * @var integer
     * @since 4.0
     */
    private $endColumn;

    /**
     * End row.
     *
     * @var integer
     * @since 4.0.4
     */
    private $endRow;

    /**
     * First row as names.
     *
     * @var boolean
     * @since 4.1.0
     */
    private $firstRowAsNames = true;

    /**
     * Google spreadsheet key.
     *
     * @var string
     * @since 4.0
     */
    private $googleSpreadsheetKey;

    /**
     * Google spreadsheet worksheet.
     *
     * @var string
     * @since 4.0
     */
    private $googleSpreadsheetWorksheet;

    /**
     * Item delimiter.
     *
     * @var string
     * @since 4.0
     */
    private $itemDelimiter;

    /**
     * Line delimiter.
     *
     * @var string
     * @since 4.0
     */
    private $lineDelimiter = "\\n";

    /**
     * Parse date.
     *
     * @var string
     * @since 4.0
     */
    private $parseDate;

    /**
     * Parsed.
     *
     * @var string
     * @since 4.0
     */
    private $parsed;

    /**
     * Rows.
     *
     * @var array
     * @since 4.0
     */
    private $rows;

    /**
     * Series mapping.
     *
     * @var array
     * @since 4.0.4
     */
    private $seriesMapping;

    /**
     * Start column.
     *
     * @var integer
     * @since 4.0
     */
    private $startColumn = 0;

    /**
     * Start row.
     *
     * @var integer
     * @since 4.0
     */
    private $startRow = 0;

    /**
     * Switch rows and columns.
     *
     * @var boolean
     * @since 4.0
     */
    private $switchRowsAndColumns = false;

    /**
     * Table.
     *
     * @var string
     * @since 4.0
     */
    private $table;

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

        // Clear the columns.
        $this->columns = null;

        // Clear the complete.
        $this->complete = null;

        // Clear the csv.
        $this->csv = null;

        // Clear the date format.
        $this->dateFormat = null;

        // Clear the decimal point.
        $this->decimalPoint = null;

        // Clear the end column.
        $this->endColumn = null;

        // Clear the end row.
        $this->endRow = null;

        // Clear the first row as names.
        $this->firstRowAsNames = null;

        // Clear the google spreadsheet key.
        $this->googleSpreadsheetKey = null;

        // Clear the google spreadsheet worksheet.
        $this->googleSpreadsheetWorksheet = null;

        // Clear the item delimiter.
        $this->itemDelimiter = null;

        // Clear the line delimiter.
        $this->lineDelimiter = null;

        // Clear the parse date.
        $this->parseDate = null;

        // Clear the parsed.
        $this->parsed = null;

        // Clear the rows.
        $this->rows = null;

        // Clear the series mapping.
        $this->seriesMapping = null;

        // Clear the start column.
        $this->startColumn = null;

        // Clear the start row.
        $this->startRow = null;

        // Clear the switch rows and columns.
        $this->switchRowsAndColumns = null;

        // Clear the table.
        $this->table = null;
    }

    /**
     * Get the columns.
     *
     * @return array Returns the columns.
     */
    public function getColumns() {
        return $this->columns;
    }

    /**
     * Get the complete.
     *
     * @return string Returns the complete.
     */
    public function getComplete() {
        return $this->complete;
    }

    /**
     * Get the csv.
     *
     * @return string Returns the csv.
     */
    public function getCsv() {
        return $this->csv;
    }

    /**
     * Get the date format.
     *
     * @return string Returns the date format.
     */
    public function getDateFormat() {
        return $this->dateFormat;
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
     * Get the end column.
     *
     * @return integer Returns the end column.
     */
    public function getEndColumn() {
        return $this->endColumn;
    }

    /**
     * Get the end row.
     *
     * @return integer Returns the end row.
     */
    public function getEndRow() {
        return $this->endRow;
    }

    /**
     * Get the first row as names.
     *
     * @return boolean Returns the first row as names.
     */
    public function getFirstRowAsNames() {
        return $this->firstRowAsNames;
    }

    /**
     * Get the google spreadsheet key.
     *
     * @return string Returns the google spreadsheet key.
     */
    public function getGoogleSpreadsheetKey() {
        return $this->googleSpreadsheetKey;
    }

    /**
     * Get the google spreadsheet worksheet.
     *
     * @return string Returns the google spreadsheet worksheet.
     */
    public function getGoogleSpreadsheetWorksheet() {
        return $this->googleSpreadsheetWorksheet;
    }

    /**
     * Get the item delimiter.
     *
     * @return string Returns the item delimiter.
     */
    public function getItemDelimiter() {
        return $this->itemDelimiter;
    }

    /**
     * Get the line delimiter.
     *
     * @return string Returns the line delimiter.
     */
    public function getLineDelimiter() {
        return $this->lineDelimiter;
    }

    /**
     * Get the parse date.
     *
     * @return string Returns the parse date.
     */
    public function getParseDate() {
        return $this->parseDate;
    }

    /**
     * Get the parsed.
     *
     * @return string Returns the parsed.
     */
    public function getParsed() {
        return $this->parsed;
    }

    /**
     * Get the rows.
     *
     * @return array Returns the rows.
     */
    public function getRows() {
        return $this->rows;
    }

    /**
     * Get the series mapping.
     *
     * @return array Returns the series mapping.
     */
    public function getSeriesMapping() {
        return $this->seriesMapping;
    }

    /**
     * Get the start column.
     *
     * @return integer Returns the start column.
     */
    public function getStartColumn() {
        return $this->startColumn;
    }

    /**
     * Get the start row.
     *
     * @return integer Returns the start row.
     */
    public function getStartRow() {
        return $this->startRow;
    }

    /**
     * Get the switch rows and columns.
     *
     * @return boolean Returns the switch rows and columns.
     */
    public function getSwitchRowsAndColumns() {
        return $this->switchRowsAndColumns;
    }

    /**
     * Get the table.
     *
     * @return string Returns the table.
     */
    public function getTable() {
        return $this->table;
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
     * Set the columns.
     *
     * @param array $columns The columns.
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\HighchartsData Returns the highcharts data.
     */
    public function setColumns(array $columns = null) {
        $this->columns = $columns;
        return $this;
    }

    /**
     * Set the complete.
     *
     * @param string $complete The complete.
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\HighchartsData Returns the highcharts data.
     */
    public function setComplete($complete) {
        $this->complete = $complete;
        return $this;
    }

    /**
     * Set the csv.
     *
     * @param string $csv The csv.
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\HighchartsData Returns the highcharts data.
     */
    public function setCsv($csv) {
        $this->csv = $csv;
        return $this;
    }

    /**
     * Set the date format.
     *
     * @param string $dateFormat The date format.
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\HighchartsData Returns the highcharts data.
     */
    public function setDateFormat($dateFormat) {
        switch ($dateFormat) {
            case null:
            case "YYYY-mm-dd":
            case "dd/mm/YY":
            case "dd/mm/YYYY":
            case "dd/mm/YYYY":
            case "mm/dd/YY":
            case "mm/dd/YYYY":
            $this->dateFormat = $dateFormat;
            break;
        }
        return $this;
    }

    /**
     * Set the decimal point.
     *
     * @param string $decimalPoint The decimal point.
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\HighchartsData Returns the highcharts data.
     */
    public function setDecimalPoint($decimalPoint) {
        $this->decimalPoint = $decimalPoint;
        return $this;
    }

    /**
     * Set the end column.
     *
     * @param integer $endColumn The end column.
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\HighchartsData Returns the highcharts data.
     */
    public function setEndColumn($endColumn) {
        $this->endColumn = $endColumn;
        return $this;
    }

    /**
     * Set the end row.
     *
     * @param integer $endRow The end row.
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\HighchartsData Returns the highcharts data.
     */
    public function setEndRow($endRow) {
        $this->endRow = $endRow;
        return $this;
    }

    /**
     * Set the first row as names.
     *
     * @param boolean $firstRowAsNames The first row as names.
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\HighchartsData Returns the highcharts data.
     */
    public function setFirstRowAsNames($firstRowAsNames) {
        $this->firstRowAsNames = $firstRowAsNames;
        return $this;
    }

    /**
     * Set the google spreadsheet key.
     *
     * @param string $googleSpreadsheetKey The google spreadsheet key.
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\HighchartsData Returns the highcharts data.
     */
    public function setGoogleSpreadsheetKey($googleSpreadsheetKey) {
        $this->googleSpreadsheetKey = $googleSpreadsheetKey;
        return $this;
    }

    /**
     * Set the google spreadsheet worksheet.
     *
     * @param string $googleSpreadsheetWorksheet The google spreadsheet worksheet.
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\HighchartsData Returns the highcharts data.
     */
    public function setGoogleSpreadsheetWorksheet($googleSpreadsheetWorksheet) {
        $this->googleSpreadsheetWorksheet = $googleSpreadsheetWorksheet;
        return $this;
    }

    /**
     * Set the item delimiter.
     *
     * @param string $itemDelimiter The item delimiter.
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\HighchartsData Returns the highcharts data.
     */
    public function setItemDelimiter($itemDelimiter) {
        $this->itemDelimiter = $itemDelimiter;
        return $this;
    }

    /**
     * Set the line delimiter.
     *
     * @param string $lineDelimiter The line delimiter.
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\HighchartsData Returns the highcharts data.
     */
    public function setLineDelimiter($lineDelimiter) {
        $this->lineDelimiter = $lineDelimiter;
        return $this;
    }

    /**
     * Set the parse date.
     *
     * @param string $parseDate The parse date.
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\HighchartsData Returns the highcharts data.
     */
    public function setParseDate($parseDate) {
        $this->parseDate = $parseDate;
        return $this;
    }

    /**
     * Set the parsed.
     *
     * @param string $parsed The parsed.
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\HighchartsData Returns the highcharts data.
     */
    public function setParsed($parsed) {
        $this->parsed = $parsed;
        return $this;
    }

    /**
     * Set the rows.
     *
     * @param array $rows The rows.
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\HighchartsData Returns the highcharts data.
     */
    public function setRows(array $rows = null) {
        $this->rows = $rows;
        return $this;
    }

    /**
     * Set the series mapping.
     *
     * @param array $seriesMapping The series mapping.
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\HighchartsData Returns the highcharts data.
     */
    public function setSeriesMapping(array $seriesMapping = null) {
        $this->seriesMapping = $seriesMapping;
        return $this;
    }

    /**
     * Set the start column.
     *
     * @param integer $startColumn The start column.
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\HighchartsData Returns the highcharts data.
     */
    public function setStartColumn($startColumn) {
        $this->startColumn = $startColumn;
        return $this;
    }

    /**
     * Set the start row.
     *
     * @param integer $startRow The start row.
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\HighchartsData Returns the highcharts data.
     */
    public function setStartRow($startRow) {
        $this->startRow = $startRow;
        return $this;
    }

    /**
     * Set the switch rows and columns.
     *
     * @param boolean $switchRowsAndColumns The switch rows and columns.
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\HighchartsData Returns the highcharts data.
     */
    public function setSwitchRowsAndColumns($switchRowsAndColumns) {
        $this->switchRowsAndColumns = $switchRowsAndColumns;
        return $this;
    }

    /**
     * Set the table.
     *
     * @param string $table The table.
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\HighchartsData Returns the highcharts data.
     */
    public function setTable($table) {
        $this->table = $table;
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

        // Set the columns.
        ArrayUtility::set($output, "columns", $this->columns, [null]);

        // Set the complete.
        ArrayUtility::set($output, "complete", $this->complete, [null]);

        // Set the csv.
        ArrayUtility::set($output, "csv", $this->csv, [null]);

        // Set the date format.
        ArrayUtility::set($output, "dateFormat", $this->dateFormat, [null]);

        // Set the decimal point.
        ArrayUtility::set($output, "decimalPoint", $this->decimalPoint, [null]);

        // Set the end column.
        ArrayUtility::set($output, "endColumn", $this->endColumn, [null]);

        // Set the end row.
        ArrayUtility::set($output, "endRow", $this->endRow, [null]);

        // Set the first row as names.
        ArrayUtility::set($output, "firstRowAsNames", $this->firstRowAsNames, [null]);

        // Set the google spreadsheet key.
        ArrayUtility::set($output, "googleSpreadsheetKey", $this->googleSpreadsheetKey, [null]);

        // Set the google spreadsheet worksheet.
        ArrayUtility::set($output, "googleSpreadsheetWorksheet", $this->googleSpreadsheetWorksheet, [null]);

        // Set the item delimiter.
        ArrayUtility::set($output, "itemDelimiter", $this->itemDelimiter, [null]);

        // Set the line delimiter.
        ArrayUtility::set($output, "lineDelimiter", $this->lineDelimiter, [null]);

        // Set the parse date.
        ArrayUtility::set($output, "parseDate", $this->parseDate, [null]);

        // Set the parsed.
        ArrayUtility::set($output, "parsed", $this->parsed, [null]);

        // Set the rows.
        ArrayUtility::set($output, "rows", $this->rows, [null]);

        // Set the series mapping.
        ArrayUtility::set($output, "seriesMapping", $this->seriesMapping, [null]);

        // Set the start column.
        ArrayUtility::set($output, "startColumn", $this->startColumn, [null]);

        // Set the start row.
        ArrayUtility::set($output, "startRow", $this->startRow, [null]);

        // Set the switch rows and columns.
        ArrayUtility::set($output, "switchRowsAndColumns", $this->switchRowsAndColumns, [null]);

        // Set the table.
        ArrayUtility::set($output, "table", $this->table, [null]);

        // Return the output.
        return $output;
    }

}
