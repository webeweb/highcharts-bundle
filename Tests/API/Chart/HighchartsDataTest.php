<?php

/*
 * This file is part of the highcharts-bundle package.
 *
 * (c) 2017 NdC/WBW
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\HighchartsBundle\Tests\API\Chart;

use PHPUnit_Framework_TestCase;

/**
 * Highcharts data test.
 *
 * @author NdC/WBW <https://github.com/webeweb/>
 * @package WBW\Bundle\HighchartsBundle\Tests\API\Chart
 * @version 5.0.14
 */
final class HighchartsDataTest extends PHPUnit_Framework_TestCase {

	/**
	 * Tests the __construct() method.
	 *
	 * @return void
	 */
	public function testConstructor() {

		$obj1 = new \WBW\Bundle\HighchartsBundle\API\Chart\HighchartsData(true);

		$this->assertEquals(null, $obj1->getColumns(), "The method getColumns() does not return the expected value");
		$this->assertEquals(null, $obj1->getComplete(), "The method getComplete() does not return the expected value");
		$this->assertEquals(null, $obj1->getCsv(), "The method getCsv() does not return the expected value");
		$this->assertEquals(null, $obj1->getDateFormat(), "The method getDateFormat() does not return the expected value");
		$this->assertEquals(null, $obj1->getDecimalPoint(), "The method getDecimalPoint() does not return the expected value");
		$this->assertEquals(null, $obj1->getEndColumn(), "The method getEndColumn() does not return the expected value");
		$this->assertEquals(null, $obj1->getEndRow(), "The method getEndRow() does not return the expected value");
		$this->assertEquals(null, $obj1->getFirstRowAsNames(), "The method getFirstRowAsNames() does not return the expected value");
		$this->assertEquals(null, $obj1->getGoogleSpreadsheetKey(), "The method getGoogleSpreadsheetKey() does not return the expected value");
		$this->assertEquals(null, $obj1->getGoogleSpreadsheetWorksheet(), "The method getGoogleSpreadsheetWorksheet() does not return the expected value");
		$this->assertEquals(null, $obj1->getItemDelimiter(), "The method getItemDelimiter() does not return the expected value");
		$this->assertEquals(null, $obj1->getLineDelimiter(), "The method getLineDelimiter() does not return the expected value");
		$this->assertEquals(null, $obj1->getParseDate(), "The method getParseDate() does not return the expected value");
		$this->assertEquals(null, $obj1->getParsed(), "The method getParsed() does not return the expected value");
		$this->assertEquals(null, $obj1->getRows(), "The method getRows() does not return the expected value");
		$this->assertEquals(null, $obj1->getSeriesMapping(), "The method getSeriesMapping() does not return the expected value");
		$this->assertEquals(null, $obj1->getStartColumn(), "The method getStartColumn() does not return the expected value");
		$this->assertEquals(null, $obj1->getStartRow(), "The method getStartRow() does not return the expected value");
		$this->assertEquals(null, $obj1->getSwitchRowsAndColumns(), "The method getSwitchRowsAndColumns() does not return the expected value");
		$this->assertEquals(null, $obj1->getTable(), "The method getTable() does not return the expected value");

		$obj0 = new \WBW\Bundle\HighchartsBundle\API\Chart\HighchartsData(false);

		$this->assertEquals(null, $obj0->getColumns(), "The method getColumns() does not return the expected value");
		$this->assertEquals(null, $obj0->getComplete(), "The method getComplete() does not return the expected value");
		$this->assertEquals(null, $obj0->getCsv(), "The method getCsv() does not return the expected value");
		$this->assertEquals(null, $obj0->getDateFormat(), "The method getDateFormat() does not return the expected value");
		$this->assertEquals(".", $obj0->getDecimalPoint(), "The method getDecimalPoint() does not return the expected value");
		$this->assertEquals(null, $obj0->getEndColumn(), "The method getEndColumn() does not return the expected value");
		$this->assertEquals(null, $obj0->getEndRow(), "The method getEndRow() does not return the expected value");
		$this->assertEquals(true, $obj0->getFirstRowAsNames(), "The method getFirstRowAsNames() does not return the expected value");
		$this->assertEquals(null, $obj0->getGoogleSpreadsheetKey(), "The method getGoogleSpreadsheetKey() does not return the expected value");
		$this->assertEquals(null, $obj0->getGoogleSpreadsheetWorksheet(), "The method getGoogleSpreadsheetWorksheet() does not return the expected value");
		$this->assertEquals(null, $obj0->getItemDelimiter(), "The method getItemDelimiter() does not return the expected value");
		$this->assertEquals("\\n", $obj0->getLineDelimiter(), "The method getLineDelimiter() does not return the expected value");
		$this->assertEquals(null, $obj0->getParseDate(), "The method getParseDate() does not return the expected value");
		$this->assertEquals(null, $obj0->getParsed(), "The method getParsed() does not return the expected value");
		$this->assertEquals(null, $obj0->getRows(), "The method getRows() does not return the expected value");
		$this->assertEquals(null, $obj0->getSeriesMapping(), "The method getSeriesMapping() does not return the expected value");
		$this->assertEquals(0, $obj0->getStartColumn(), "The method getStartColumn() does not return the expected value");
		$this->assertEquals(0, $obj0->getStartRow(), "The method getStartRow() does not return the expected value");
		$this->assertEquals(false, $obj0->getSwitchRowsAndColumns(), "The method getSwitchRowsAndColumns() does not return the expected value");
		$this->assertEquals(null, $obj0->getTable(), "The method getTable() does not return the expected value");
    }

	/**
	 * Tests the jsonSerialize() method.
	 *
	 * @return void
	 */
	public function testJsonSerialize() {

		$obj = new \WBW\Bundle\HighchartsBundle\API\Chart\HighchartsData(true);

		$this->assertEquals([], $obj->jsonSerialize(), "The method jsonSerialize() does not return the expected value");
	}

	/**
	 * Tests the toArray() method.
	 *
	 * @return void
	 */
	public function testToArray() {

		$obj = new \WBW\Bundle\HighchartsBundle\API\Chart\HighchartsData(true);

		$obj->setColumns(["columns" => "54ca84a794888fe8d92834787dfa935a"]);

		$res1 = ["columns" => ["columns" => "54ca84a794888fe8d92834787dfa935a"]];
		$this->assertEquals($res1, $obj->toArray(), "The method toArray() does not return the expected array with columns");

		$obj->setComplete("d9a22d7a8178d5b42a8750123cbfe5b1");

		$res2 = ["columns" => ["columns" => "54ca84a794888fe8d92834787dfa935a"], "complete" => "d9a22d7a8178d5b42a8750123cbfe5b1"];
		$this->assertEquals($res2, $obj->toArray(), "The method toArray() does not return the expected array with complete");

		$obj->setCsv("628cb5675ff524f3e719b7aa2e88fe3f");

		$res3 = ["columns" => ["columns" => "54ca84a794888fe8d92834787dfa935a"], "complete" => "d9a22d7a8178d5b42a8750123cbfe5b1", "csv" => "628cb5675ff524f3e719b7aa2e88fe3f"];
		$this->assertEquals($res3, $obj->toArray(), "The method toArray() does not return the expected array with csv");

		$obj->setDateFormat("mm/dd/YY");

		$res4 = ["columns" => ["columns" => "54ca84a794888fe8d92834787dfa935a"], "complete" => "d9a22d7a8178d5b42a8750123cbfe5b1", "csv" => "628cb5675ff524f3e719b7aa2e88fe3f", "dateFormat" => "mm/dd/YY"];
		$this->assertEquals($res4, $obj->toArray(), "The method toArray() does not return the expected array with date format");

		$obj->setDecimalPoint("7d9af7a21241609a979bda8ca517044c");

		$res5 = ["columns" => ["columns" => "54ca84a794888fe8d92834787dfa935a"], "complete" => "d9a22d7a8178d5b42a8750123cbfe5b1", "csv" => "628cb5675ff524f3e719b7aa2e88fe3f", "dateFormat" => "mm/dd/YY", "decimalPoint" => "7d9af7a21241609a979bda8ca517044c"];
		$this->assertEquals($res5, $obj->toArray(), "The method toArray() does not return the expected array with decimal point");

		$obj->setEndColumn(30);

		$res6 = ["columns" => ["columns" => "54ca84a794888fe8d92834787dfa935a"], "complete" => "d9a22d7a8178d5b42a8750123cbfe5b1", "csv" => "628cb5675ff524f3e719b7aa2e88fe3f", "dateFormat" => "mm/dd/YY", "decimalPoint" => "7d9af7a21241609a979bda8ca517044c", "endColumn" => 30];
		$this->assertEquals($res6, $obj->toArray(), "The method toArray() does not return the expected array with end column");

		$obj->setEndRow(89);

		$res7 = ["columns" => ["columns" => "54ca84a794888fe8d92834787dfa935a"], "complete" => "d9a22d7a8178d5b42a8750123cbfe5b1", "csv" => "628cb5675ff524f3e719b7aa2e88fe3f", "dateFormat" => "mm/dd/YY", "decimalPoint" => "7d9af7a21241609a979bda8ca517044c", "endColumn" => 30, "endRow" => 89];
		$this->assertEquals($res7, $obj->toArray(), "The method toArray() does not return the expected array with end row");

		$obj->setFirstRowAsNames(1);

		$res8 = ["columns" => ["columns" => "54ca84a794888fe8d92834787dfa935a"], "complete" => "d9a22d7a8178d5b42a8750123cbfe5b1", "csv" => "628cb5675ff524f3e719b7aa2e88fe3f", "dateFormat" => "mm/dd/YY", "decimalPoint" => "7d9af7a21241609a979bda8ca517044c", "endColumn" => 30, "endRow" => 89, "firstRowAsNames" => 1];
		$this->assertEquals($res8, $obj->toArray(), "The method toArray() does not return the expected array with first row as names");

		$obj->setGoogleSpreadsheetKey("4c42edbd1e3a85f2857f1e3a5cf3fb59");

		$res9 = ["columns" => ["columns" => "54ca84a794888fe8d92834787dfa935a"], "complete" => "d9a22d7a8178d5b42a8750123cbfe5b1", "csv" => "628cb5675ff524f3e719b7aa2e88fe3f", "dateFormat" => "mm/dd/YY", "decimalPoint" => "7d9af7a21241609a979bda8ca517044c", "endColumn" => 30, "endRow" => 89, "firstRowAsNames" => 1, "googleSpreadsheetKey" => "4c42edbd1e3a85f2857f1e3a5cf3fb59"];
		$this->assertEquals($res9, $obj->toArray(), "The method toArray() does not return the expected array with google spreadsheet key");

		$obj->setGoogleSpreadsheetWorksheet("b1444e571854190993273e8b1f53b89c");

		$res10 = ["columns" => ["columns" => "54ca84a794888fe8d92834787dfa935a"], "complete" => "d9a22d7a8178d5b42a8750123cbfe5b1", "csv" => "628cb5675ff524f3e719b7aa2e88fe3f", "dateFormat" => "mm/dd/YY", "decimalPoint" => "7d9af7a21241609a979bda8ca517044c", "endColumn" => 30, "endRow" => 89, "firstRowAsNames" => 1, "googleSpreadsheetKey" => "4c42edbd1e3a85f2857f1e3a5cf3fb59", "googleSpreadsheetWorksheet" => "b1444e571854190993273e8b1f53b89c"];
		$this->assertEquals($res10, $obj->toArray(), "The method toArray() does not return the expected array with google spreadsheet worksheet");

		$obj->setItemDelimiter("2b9ff3bde6b855958954383dc46b1d4f");

		$res11 = ["columns" => ["columns" => "54ca84a794888fe8d92834787dfa935a"], "complete" => "d9a22d7a8178d5b42a8750123cbfe5b1", "csv" => "628cb5675ff524f3e719b7aa2e88fe3f", "dateFormat" => "mm/dd/YY", "decimalPoint" => "7d9af7a21241609a979bda8ca517044c", "endColumn" => 30, "endRow" => 89, "firstRowAsNames" => 1, "googleSpreadsheetKey" => "4c42edbd1e3a85f2857f1e3a5cf3fb59", "googleSpreadsheetWorksheet" => "b1444e571854190993273e8b1f53b89c", "itemDelimiter" => "2b9ff3bde6b855958954383dc46b1d4f"];
		$this->assertEquals($res11, $obj->toArray(), "The method toArray() does not return the expected array with item delimiter");

		$obj->setLineDelimiter("28e3cbbd23484ddd36f72aa7110ee056");

		$res12 = ["columns" => ["columns" => "54ca84a794888fe8d92834787dfa935a"], "complete" => "d9a22d7a8178d5b42a8750123cbfe5b1", "csv" => "628cb5675ff524f3e719b7aa2e88fe3f", "dateFormat" => "mm/dd/YY", "decimalPoint" => "7d9af7a21241609a979bda8ca517044c", "endColumn" => 30, "endRow" => 89, "firstRowAsNames" => 1, "googleSpreadsheetKey" => "4c42edbd1e3a85f2857f1e3a5cf3fb59", "googleSpreadsheetWorksheet" => "b1444e571854190993273e8b1f53b89c", "itemDelimiter" => "2b9ff3bde6b855958954383dc46b1d4f", "lineDelimiter" => "28e3cbbd23484ddd36f72aa7110ee056"];
		$this->assertEquals($res12, $obj->toArray(), "The method toArray() does not return the expected array with line delimiter");

		$obj->setParseDate("8b186f0402c084188de6f80e91f77984");

		$res13 = ["columns" => ["columns" => "54ca84a794888fe8d92834787dfa935a"], "complete" => "d9a22d7a8178d5b42a8750123cbfe5b1", "csv" => "628cb5675ff524f3e719b7aa2e88fe3f", "dateFormat" => "mm/dd/YY", "decimalPoint" => "7d9af7a21241609a979bda8ca517044c", "endColumn" => 30, "endRow" => 89, "firstRowAsNames" => 1, "googleSpreadsheetKey" => "4c42edbd1e3a85f2857f1e3a5cf3fb59", "googleSpreadsheetWorksheet" => "b1444e571854190993273e8b1f53b89c", "itemDelimiter" => "2b9ff3bde6b855958954383dc46b1d4f", "lineDelimiter" => "28e3cbbd23484ddd36f72aa7110ee056", "parseDate" => "8b186f0402c084188de6f80e91f77984"];
		$this->assertEquals($res13, $obj->toArray(), "The method toArray() does not return the expected array with parse date");

		$obj->setParsed("c3732cbf21875cb12763787c984dd68d");

		$res14 = ["columns" => ["columns" => "54ca84a794888fe8d92834787dfa935a"], "complete" => "d9a22d7a8178d5b42a8750123cbfe5b1", "csv" => "628cb5675ff524f3e719b7aa2e88fe3f", "dateFormat" => "mm/dd/YY", "decimalPoint" => "7d9af7a21241609a979bda8ca517044c", "endColumn" => 30, "endRow" => 89, "firstRowAsNames" => 1, "googleSpreadsheetKey" => "4c42edbd1e3a85f2857f1e3a5cf3fb59", "googleSpreadsheetWorksheet" => "b1444e571854190993273e8b1f53b89c", "itemDelimiter" => "2b9ff3bde6b855958954383dc46b1d4f", "lineDelimiter" => "28e3cbbd23484ddd36f72aa7110ee056", "parseDate" => "8b186f0402c084188de6f80e91f77984", "parsed" => "c3732cbf21875cb12763787c984dd68d"];
		$this->assertEquals($res14, $obj->toArray(), "The method toArray() does not return the expected array with parsed");

		$obj->setRows(["rows" => "df347a373b8f92aa0ae3dd920a5ec2f6"]);

		$res15 = ["columns" => ["columns" => "54ca84a794888fe8d92834787dfa935a"], "complete" => "d9a22d7a8178d5b42a8750123cbfe5b1", "csv" => "628cb5675ff524f3e719b7aa2e88fe3f", "dateFormat" => "mm/dd/YY", "decimalPoint" => "7d9af7a21241609a979bda8ca517044c", "endColumn" => 30, "endRow" => 89, "firstRowAsNames" => 1, "googleSpreadsheetKey" => "4c42edbd1e3a85f2857f1e3a5cf3fb59", "googleSpreadsheetWorksheet" => "b1444e571854190993273e8b1f53b89c", "itemDelimiter" => "2b9ff3bde6b855958954383dc46b1d4f", "lineDelimiter" => "28e3cbbd23484ddd36f72aa7110ee056", "parseDate" => "8b186f0402c084188de6f80e91f77984", "parsed" => "c3732cbf21875cb12763787c984dd68d", "rows" => ["rows" => "df347a373b8f92aa0ae3dd920a5ec2f6"]];
		$this->assertEquals($res15, $obj->toArray(), "The method toArray() does not return the expected array with rows");

		$obj->setSeriesMapping(["seriesMapping" => "2112d1fa8b6001694eb605edccdf0810"]);

		$res16 = ["columns" => ["columns" => "54ca84a794888fe8d92834787dfa935a"], "complete" => "d9a22d7a8178d5b42a8750123cbfe5b1", "csv" => "628cb5675ff524f3e719b7aa2e88fe3f", "dateFormat" => "mm/dd/YY", "decimalPoint" => "7d9af7a21241609a979bda8ca517044c", "endColumn" => 30, "endRow" => 89, "firstRowAsNames" => 1, "googleSpreadsheetKey" => "4c42edbd1e3a85f2857f1e3a5cf3fb59", "googleSpreadsheetWorksheet" => "b1444e571854190993273e8b1f53b89c", "itemDelimiter" => "2b9ff3bde6b855958954383dc46b1d4f", "lineDelimiter" => "28e3cbbd23484ddd36f72aa7110ee056", "parseDate" => "8b186f0402c084188de6f80e91f77984", "parsed" => "c3732cbf21875cb12763787c984dd68d", "rows" => ["rows" => "df347a373b8f92aa0ae3dd920a5ec2f6"], "seriesMapping" => ["seriesMapping" => "2112d1fa8b6001694eb605edccdf0810"]];
		$this->assertEquals($res16, $obj->toArray(), "The method toArray() does not return the expected array with series mapping");

		$obj->setStartColumn(35);

		$res17 = ["columns" => ["columns" => "54ca84a794888fe8d92834787dfa935a"], "complete" => "d9a22d7a8178d5b42a8750123cbfe5b1", "csv" => "628cb5675ff524f3e719b7aa2e88fe3f", "dateFormat" => "mm/dd/YY", "decimalPoint" => "7d9af7a21241609a979bda8ca517044c", "endColumn" => 30, "endRow" => 89, "firstRowAsNames" => 1, "googleSpreadsheetKey" => "4c42edbd1e3a85f2857f1e3a5cf3fb59", "googleSpreadsheetWorksheet" => "b1444e571854190993273e8b1f53b89c", "itemDelimiter" => "2b9ff3bde6b855958954383dc46b1d4f", "lineDelimiter" => "28e3cbbd23484ddd36f72aa7110ee056", "parseDate" => "8b186f0402c084188de6f80e91f77984", "parsed" => "c3732cbf21875cb12763787c984dd68d", "rows" => ["rows" => "df347a373b8f92aa0ae3dd920a5ec2f6"], "seriesMapping" => ["seriesMapping" => "2112d1fa8b6001694eb605edccdf0810"], "startColumn" => 35];
		$this->assertEquals($res17, $obj->toArray(), "The method toArray() does not return the expected array with start column");

		$obj->setStartRow(31);

		$res18 = ["columns" => ["columns" => "54ca84a794888fe8d92834787dfa935a"], "complete" => "d9a22d7a8178d5b42a8750123cbfe5b1", "csv" => "628cb5675ff524f3e719b7aa2e88fe3f", "dateFormat" => "mm/dd/YY", "decimalPoint" => "7d9af7a21241609a979bda8ca517044c", "endColumn" => 30, "endRow" => 89, "firstRowAsNames" => 1, "googleSpreadsheetKey" => "4c42edbd1e3a85f2857f1e3a5cf3fb59", "googleSpreadsheetWorksheet" => "b1444e571854190993273e8b1f53b89c", "itemDelimiter" => "2b9ff3bde6b855958954383dc46b1d4f", "lineDelimiter" => "28e3cbbd23484ddd36f72aa7110ee056", "parseDate" => "8b186f0402c084188de6f80e91f77984", "parsed" => "c3732cbf21875cb12763787c984dd68d", "rows" => ["rows" => "df347a373b8f92aa0ae3dd920a5ec2f6"], "seriesMapping" => ["seriesMapping" => "2112d1fa8b6001694eb605edccdf0810"], "startColumn" => 35, "startRow" => 31];
		$this->assertEquals($res18, $obj->toArray(), "The method toArray() does not return the expected array with start row");

		$obj->setSwitchRowsAndColumns(1);

		$res19 = ["columns" => ["columns" => "54ca84a794888fe8d92834787dfa935a"], "complete" => "d9a22d7a8178d5b42a8750123cbfe5b1", "csv" => "628cb5675ff524f3e719b7aa2e88fe3f", "dateFormat" => "mm/dd/YY", "decimalPoint" => "7d9af7a21241609a979bda8ca517044c", "endColumn" => 30, "endRow" => 89, "firstRowAsNames" => 1, "googleSpreadsheetKey" => "4c42edbd1e3a85f2857f1e3a5cf3fb59", "googleSpreadsheetWorksheet" => "b1444e571854190993273e8b1f53b89c", "itemDelimiter" => "2b9ff3bde6b855958954383dc46b1d4f", "lineDelimiter" => "28e3cbbd23484ddd36f72aa7110ee056", "parseDate" => "8b186f0402c084188de6f80e91f77984", "parsed" => "c3732cbf21875cb12763787c984dd68d", "rows" => ["rows" => "df347a373b8f92aa0ae3dd920a5ec2f6"], "seriesMapping" => ["seriesMapping" => "2112d1fa8b6001694eb605edccdf0810"], "startColumn" => 35, "startRow" => 31, "switchRowsAndColumns" => 1];
		$this->assertEquals($res19, $obj->toArray(), "The method toArray() does not return the expected array with switch rows and columns");

		$obj->setTable("aab9e1de16f38176f86d7a92ba337a8d");

		$res20 = ["columns" => ["columns" => "54ca84a794888fe8d92834787dfa935a"], "complete" => "d9a22d7a8178d5b42a8750123cbfe5b1", "csv" => "628cb5675ff524f3e719b7aa2e88fe3f", "dateFormat" => "mm/dd/YY", "decimalPoint" => "7d9af7a21241609a979bda8ca517044c", "endColumn" => 30, "endRow" => 89, "firstRowAsNames" => 1, "googleSpreadsheetKey" => "4c42edbd1e3a85f2857f1e3a5cf3fb59", "googleSpreadsheetWorksheet" => "b1444e571854190993273e8b1f53b89c", "itemDelimiter" => "2b9ff3bde6b855958954383dc46b1d4f", "lineDelimiter" => "28e3cbbd23484ddd36f72aa7110ee056", "parseDate" => "8b186f0402c084188de6f80e91f77984", "parsed" => "c3732cbf21875cb12763787c984dd68d", "rows" => ["rows" => "df347a373b8f92aa0ae3dd920a5ec2f6"], "seriesMapping" => ["seriesMapping" => "2112d1fa8b6001694eb605edccdf0810"], "startColumn" => 35, "startRow" => 31, "switchRowsAndColumns" => 1, "table" => "aab9e1de16f38176f86d7a92ba337a8d"];
		$this->assertEquals($res20, $obj->toArray(), "The method toArray() does not return the expected array with table");
	}

}
