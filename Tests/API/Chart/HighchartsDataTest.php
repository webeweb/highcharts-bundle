<?php

/*
 * This file is part of the WBWHighchartsBundle package.
 *
 * (c) 2017 WBW
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\HighchartsBundle\Tests\API\Chart;

use PHPUnit_Framework_TestCase;
use WBW\HighchartsBundle\API\Chart\HighchartsData;

/**
 * Highcharts data test.
 *
 * @author WBW <https://github.com/webeweb/WBWHighchartsBundle>
 * @package WBW\HighchartsBundle\Tests\API\Chart
 * @version 5.0.14
 */
final class HighchartsDataTest extends PHPUnit_Framework_TestCase {

	/**
	 * Test the clear() method.
	 *
	 * @return void
	 */
	public function testClear() {

		$obj = new HighchartsData(false);

		$obj->clear();
		$this->assertEquals([], $obj->toArray(), 'The method toArray() does not return the expected array');
	}

	/**
	 * Test the toArray() method.
	 *
	 * @return void
	 */
	public function testToArray() {

		$obj = new HighchartsData(false);

		$res = ["decimalPoint" => ".", "firstRowAsNames" => true, "lineDelimiter" => "\\n", "startColumn" => 0, "startRow" => 0, "switchRowsAndColumns" => false];
		$this->assertEquals($res, $obj->toArray(), 'The method toArray() does not return the expected array');

		$obj->setColumns(["columns" => "54ca84a794888fe8d92834787dfa935a"]);

		$res1 = ["decimalPoint" => ".", "firstRowAsNames" => true, "lineDelimiter" => "\\n", "startColumn" => 0, "startRow" => 0, "switchRowsAndColumns" => false, "columns" => ["columns" => "54ca84a794888fe8d92834787dfa935a"]];
		$this->assertEquals($res1, $obj->toArray(), 'The method toArray() does not return the expected array with columns');

		$obj->setComplete("d9a22d7a8178d5b42a8750123cbfe5b1");

		$res2 = ["decimalPoint" => ".", "firstRowAsNames" => true, "lineDelimiter" => "\\n", "startColumn" => 0, "startRow" => 0, "switchRowsAndColumns" => false, "columns" => ["columns" => "54ca84a794888fe8d92834787dfa935a"], "complete" => "d9a22d7a8178d5b42a8750123cbfe5b1"];
		$this->assertEquals($res2, $obj->toArray(), 'The method toArray() does not return the expected array with complete');

		$obj->setCsv("628cb5675ff524f3e719b7aa2e88fe3f");

		$res3 = ["decimalPoint" => ".", "firstRowAsNames" => true, "lineDelimiter" => "\\n", "startColumn" => 0, "startRow" => 0, "switchRowsAndColumns" => false, "columns" => ["columns" => "54ca84a794888fe8d92834787dfa935a"], "complete" => "d9a22d7a8178d5b42a8750123cbfe5b1", "csv" => "628cb5675ff524f3e719b7aa2e88fe3f"];
		$this->assertEquals($res3, $obj->toArray(), 'The method toArray() does not return the expected array with csv');

		$obj->setDateFormat("mm/dd/YY");

		$res4 = ["decimalPoint" => ".", "firstRowAsNames" => true, "lineDelimiter" => "\\n", "startColumn" => 0, "startRow" => 0, "switchRowsAndColumns" => false, "columns" => ["columns" => "54ca84a794888fe8d92834787dfa935a"], "complete" => "d9a22d7a8178d5b42a8750123cbfe5b1", "csv" => "628cb5675ff524f3e719b7aa2e88fe3f", "dateFormat" => "mm/dd/YY"];
		$this->assertEquals($res4, $obj->toArray(), 'The method toArray() does not return the expected array with date format');

		$obj->setEndColumn(58);

		$res5 = ["decimalPoint" => ".", "firstRowAsNames" => true, "lineDelimiter" => "\\n", "startColumn" => 0, "startRow" => 0, "switchRowsAndColumns" => false, "columns" => ["columns" => "54ca84a794888fe8d92834787dfa935a"], "complete" => "d9a22d7a8178d5b42a8750123cbfe5b1", "csv" => "628cb5675ff524f3e719b7aa2e88fe3f", "dateFormat" => "mm/dd/YY", "endColumn" => 58];
		$this->assertEquals($res5, $obj->toArray(), 'The method toArray() does not return the expected array with end column');

		$obj->setEndRow(53);

		$res6 = ["decimalPoint" => ".", "firstRowAsNames" => true, "lineDelimiter" => "\\n", "startColumn" => 0, "startRow" => 0, "switchRowsAndColumns" => false, "columns" => ["columns" => "54ca84a794888fe8d92834787dfa935a"], "complete" => "d9a22d7a8178d5b42a8750123cbfe5b1", "csv" => "628cb5675ff524f3e719b7aa2e88fe3f", "dateFormat" => "mm/dd/YY", "endColumn" => 58, "endRow" => 53];
		$this->assertEquals($res6, $obj->toArray(), 'The method toArray() does not return the expected array with end row');

		$obj->setGoogleSpreadsheetKey("4c42edbd1e3a85f2857f1e3a5cf3fb59");

		$res7 = ["decimalPoint" => ".", "firstRowAsNames" => true, "lineDelimiter" => "\\n", "startColumn" => 0, "startRow" => 0, "switchRowsAndColumns" => false, "columns" => ["columns" => "54ca84a794888fe8d92834787dfa935a"], "complete" => "d9a22d7a8178d5b42a8750123cbfe5b1", "csv" => "628cb5675ff524f3e719b7aa2e88fe3f", "dateFormat" => "mm/dd/YY", "endColumn" => 58, "endRow" => 53, "googleSpreadsheetKey" => "4c42edbd1e3a85f2857f1e3a5cf3fb59"];
		$this->assertEquals($res7, $obj->toArray(), 'The method toArray() does not return the expected array with google spreadsheet key');

		$obj->setGoogleSpreadsheetWorksheet("b1444e571854190993273e8b1f53b89c");

		$res8 = ["decimalPoint" => ".", "firstRowAsNames" => true, "lineDelimiter" => "\\n", "startColumn" => 0, "startRow" => 0, "switchRowsAndColumns" => false, "columns" => ["columns" => "54ca84a794888fe8d92834787dfa935a"], "complete" => "d9a22d7a8178d5b42a8750123cbfe5b1", "csv" => "628cb5675ff524f3e719b7aa2e88fe3f", "dateFormat" => "mm/dd/YY", "endColumn" => 58, "endRow" => 53, "googleSpreadsheetKey" => "4c42edbd1e3a85f2857f1e3a5cf3fb59", "googleSpreadsheetWorksheet" => "b1444e571854190993273e8b1f53b89c"];
		$this->assertEquals($res8, $obj->toArray(), 'The method toArray() does not return the expected array with google spreadsheet worksheet');

		$obj->setItemDelimiter("2b9ff3bde6b855958954383dc46b1d4f");

		$res9 = ["decimalPoint" => ".", "firstRowAsNames" => true, "lineDelimiter" => "\\n", "startColumn" => 0, "startRow" => 0, "switchRowsAndColumns" => false, "columns" => ["columns" => "54ca84a794888fe8d92834787dfa935a"], "complete" => "d9a22d7a8178d5b42a8750123cbfe5b1", "csv" => "628cb5675ff524f3e719b7aa2e88fe3f", "dateFormat" => "mm/dd/YY", "endColumn" => 58, "endRow" => 53, "googleSpreadsheetKey" => "4c42edbd1e3a85f2857f1e3a5cf3fb59", "googleSpreadsheetWorksheet" => "b1444e571854190993273e8b1f53b89c", "itemDelimiter" => "2b9ff3bde6b855958954383dc46b1d4f"];
		$this->assertEquals($res9, $obj->toArray(), 'The method toArray() does not return the expected array with item delimiter');

		$obj->setParseDate("8b186f0402c084188de6f80e91f77984");

		$res10 = ["decimalPoint" => ".", "firstRowAsNames" => true, "lineDelimiter" => "\\n", "startColumn" => 0, "startRow" => 0, "switchRowsAndColumns" => false, "columns" => ["columns" => "54ca84a794888fe8d92834787dfa935a"], "complete" => "d9a22d7a8178d5b42a8750123cbfe5b1", "csv" => "628cb5675ff524f3e719b7aa2e88fe3f", "dateFormat" => "mm/dd/YY", "endColumn" => 58, "endRow" => 53, "googleSpreadsheetKey" => "4c42edbd1e3a85f2857f1e3a5cf3fb59", "googleSpreadsheetWorksheet" => "b1444e571854190993273e8b1f53b89c", "itemDelimiter" => "2b9ff3bde6b855958954383dc46b1d4f", "parseDate" => "8b186f0402c084188de6f80e91f77984"];
		$this->assertEquals($res10, $obj->toArray(), 'The method toArray() does not return the expected array with parse date');

		$obj->setParsed("c3732cbf21875cb12763787c984dd68d");

		$res11 = ["decimalPoint" => ".", "firstRowAsNames" => true, "lineDelimiter" => "\\n", "startColumn" => 0, "startRow" => 0, "switchRowsAndColumns" => false, "columns" => ["columns" => "54ca84a794888fe8d92834787dfa935a"], "complete" => "d9a22d7a8178d5b42a8750123cbfe5b1", "csv" => "628cb5675ff524f3e719b7aa2e88fe3f", "dateFormat" => "mm/dd/YY", "endColumn" => 58, "endRow" => 53, "googleSpreadsheetKey" => "4c42edbd1e3a85f2857f1e3a5cf3fb59", "googleSpreadsheetWorksheet" => "b1444e571854190993273e8b1f53b89c", "itemDelimiter" => "2b9ff3bde6b855958954383dc46b1d4f", "parseDate" => "8b186f0402c084188de6f80e91f77984", "parsed" => "c3732cbf21875cb12763787c984dd68d"];
		$this->assertEquals($res11, $obj->toArray(), 'The method toArray() does not return the expected array with parsed');

		$obj->setRows(["rows" => "df347a373b8f92aa0ae3dd920a5ec2f6"]);

		$res12 = ["decimalPoint" => ".", "firstRowAsNames" => true, "lineDelimiter" => "\\n", "startColumn" => 0, "startRow" => 0, "switchRowsAndColumns" => false, "columns" => ["columns" => "54ca84a794888fe8d92834787dfa935a"], "complete" => "d9a22d7a8178d5b42a8750123cbfe5b1", "csv" => "628cb5675ff524f3e719b7aa2e88fe3f", "dateFormat" => "mm/dd/YY", "endColumn" => 58, "endRow" => 53, "googleSpreadsheetKey" => "4c42edbd1e3a85f2857f1e3a5cf3fb59", "googleSpreadsheetWorksheet" => "b1444e571854190993273e8b1f53b89c", "itemDelimiter" => "2b9ff3bde6b855958954383dc46b1d4f", "parseDate" => "8b186f0402c084188de6f80e91f77984", "parsed" => "c3732cbf21875cb12763787c984dd68d", "rows" => ["rows" => "df347a373b8f92aa0ae3dd920a5ec2f6"]];
		$this->assertEquals($res12, $obj->toArray(), 'The method toArray() does not return the expected array with rows');

		$obj->setSeriesMapping(["seriesMapping" => "2112d1fa8b6001694eb605edccdf0810"]);

		$res13 = ["decimalPoint" => ".", "firstRowAsNames" => true, "lineDelimiter" => "\\n", "startColumn" => 0, "startRow" => 0, "switchRowsAndColumns" => false, "columns" => ["columns" => "54ca84a794888fe8d92834787dfa935a"], "complete" => "d9a22d7a8178d5b42a8750123cbfe5b1", "csv" => "628cb5675ff524f3e719b7aa2e88fe3f", "dateFormat" => "mm/dd/YY", "endColumn" => 58, "endRow" => 53, "googleSpreadsheetKey" => "4c42edbd1e3a85f2857f1e3a5cf3fb59", "googleSpreadsheetWorksheet" => "b1444e571854190993273e8b1f53b89c", "itemDelimiter" => "2b9ff3bde6b855958954383dc46b1d4f", "parseDate" => "8b186f0402c084188de6f80e91f77984", "parsed" => "c3732cbf21875cb12763787c984dd68d", "rows" => ["rows" => "df347a373b8f92aa0ae3dd920a5ec2f6"], "seriesMapping" => ["seriesMapping" => "2112d1fa8b6001694eb605edccdf0810"]];
		$this->assertEquals($res13, $obj->toArray(), 'The method toArray() does not return the expected array with series mapping');

		$obj->setTable("aab9e1de16f38176f86d7a92ba337a8d");

		$res14 = ["decimalPoint" => ".", "firstRowAsNames" => true, "lineDelimiter" => "\\n", "startColumn" => 0, "startRow" => 0, "switchRowsAndColumns" => false, "columns" => ["columns" => "54ca84a794888fe8d92834787dfa935a"], "complete" => "d9a22d7a8178d5b42a8750123cbfe5b1", "csv" => "628cb5675ff524f3e719b7aa2e88fe3f", "dateFormat" => "mm/dd/YY", "endColumn" => 58, "endRow" => 53, "googleSpreadsheetKey" => "4c42edbd1e3a85f2857f1e3a5cf3fb59", "googleSpreadsheetWorksheet" => "b1444e571854190993273e8b1f53b89c", "itemDelimiter" => "2b9ff3bde6b855958954383dc46b1d4f", "parseDate" => "8b186f0402c084188de6f80e91f77984", "parsed" => "c3732cbf21875cb12763787c984dd68d", "rows" => ["rows" => "df347a373b8f92aa0ae3dd920a5ec2f6"], "seriesMapping" => ["seriesMapping" => "2112d1fa8b6001694eb605edccdf0810"], "table" => "aab9e1de16f38176f86d7a92ba337a8d"];
		$this->assertEquals($res14, $obj->toArray(), 'The method toArray() does not return the expected array with table');
	}

}
