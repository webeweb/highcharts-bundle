<?php

/**
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

        $this->assertEquals(null, $obj1->getColumns());
        $this->assertEquals(null, $obj1->getComplete());
        $this->assertEquals(null, $obj1->getCsv());
        $this->assertEquals(null, $obj1->getDateFormat());
        $this->assertEquals(null, $obj1->getDecimalPoint());
        $this->assertEquals(null, $obj1->getEndColumn());
        $this->assertEquals(null, $obj1->getEndRow());
        $this->assertEquals(null, $obj1->getFirstRowAsNames());
        $this->assertEquals(null, $obj1->getGoogleSpreadsheetKey());
        $this->assertEquals(null, $obj1->getGoogleSpreadsheetWorksheet());
        $this->assertEquals(null, $obj1->getItemDelimiter());
        $this->assertEquals(null, $obj1->getLineDelimiter());
        $this->assertEquals(null, $obj1->getParseDate());
        $this->assertEquals(null, $obj1->getParsed());
        $this->assertEquals(null, $obj1->getRows());
        $this->assertEquals(null, $obj1->getSeriesMapping());
        $this->assertEquals(null, $obj1->getStartColumn());
        $this->assertEquals(null, $obj1->getStartRow());
        $this->assertEquals(null, $obj1->getSwitchRowsAndColumns());
        $this->assertEquals(null, $obj1->getTable());

        $obj0 = new \WBW\Bundle\HighchartsBundle\API\Chart\HighchartsData(false);

        $this->assertEquals(null, $obj0->getColumns());
        $this->assertEquals(null, $obj0->getComplete());
        $this->assertEquals(null, $obj0->getCsv());
        $this->assertEquals(null, $obj0->getDateFormat());
        $this->assertEquals(".", $obj0->getDecimalPoint());
        $this->assertEquals(null, $obj0->getEndColumn());
        $this->assertEquals(null, $obj0->getEndRow());
        $this->assertEquals(true, $obj0->getFirstRowAsNames());
        $this->assertEquals(null, $obj0->getGoogleSpreadsheetKey());
        $this->assertEquals(null, $obj0->getGoogleSpreadsheetWorksheet());
        $this->assertEquals(null, $obj0->getItemDelimiter());
        $this->assertEquals("\\n", $obj0->getLineDelimiter());
        $this->assertEquals(null, $obj0->getParseDate());
        $this->assertEquals(null, $obj0->getParsed());
        $this->assertEquals(null, $obj0->getRows());
        $this->assertEquals(null, $obj0->getSeriesMapping());
        $this->assertEquals(0, $obj0->getStartColumn());
        $this->assertEquals(0, $obj0->getStartRow());
        $this->assertEquals(false, $obj0->getSwitchRowsAndColumns());
        $this->assertEquals(null, $obj0->getTable());
    }

    /**
     * Tests the jsonSerialize() method.
     *
     * @return void
     */
    public function testJsonSerialize() {

        $obj = new \WBW\Bundle\HighchartsBundle\API\Chart\HighchartsData(true);

        $this->assertEquals([], $obj->jsonSerialize());
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
        $this->assertEquals($res1, $obj->toArray());

        $obj->setComplete("d9a22d7a8178d5b42a8750123cbfe5b1");

        $res2 = ["columns" => ["columns" => "54ca84a794888fe8d92834787dfa935a"], "complete" => "d9a22d7a8178d5b42a8750123cbfe5b1"];
        $this->assertEquals($res2, $obj->toArray());

        $obj->setCsv("628cb5675ff524f3e719b7aa2e88fe3f");

        $res3 = ["columns" => ["columns" => "54ca84a794888fe8d92834787dfa935a"], "complete" => "d9a22d7a8178d5b42a8750123cbfe5b1", "csv" => "628cb5675ff524f3e719b7aa2e88fe3f"];
        $this->assertEquals($res3, $obj->toArray());

        $obj->setDateFormat("mm/dd/YY");

        $res4 = ["columns" => ["columns" => "54ca84a794888fe8d92834787dfa935a"], "complete" => "d9a22d7a8178d5b42a8750123cbfe5b1", "csv" => "628cb5675ff524f3e719b7aa2e88fe3f", "dateFormat" => "mm/dd/YY"];
        $this->assertEquals($res4, $obj->toArray());

        $obj->setDecimalPoint("7d9af7a21241609a979bda8ca517044c");

        $res5 = ["columns" => ["columns" => "54ca84a794888fe8d92834787dfa935a"], "complete" => "d9a22d7a8178d5b42a8750123cbfe5b1", "csv" => "628cb5675ff524f3e719b7aa2e88fe3f", "dateFormat" => "mm/dd/YY", "decimalPoint" => "7d9af7a21241609a979bda8ca517044c"];
        $this->assertEquals($res5, $obj->toArray());

        $obj->setEndColumn(30);

        $res6 = ["columns" => ["columns" => "54ca84a794888fe8d92834787dfa935a"], "complete" => "d9a22d7a8178d5b42a8750123cbfe5b1", "csv" => "628cb5675ff524f3e719b7aa2e88fe3f", "dateFormat" => "mm/dd/YY", "decimalPoint" => "7d9af7a21241609a979bda8ca517044c", "endColumn" => 30];
        $this->assertEquals($res6, $obj->toArray());

        $obj->setEndRow(89);

        $res7 = ["columns" => ["columns" => "54ca84a794888fe8d92834787dfa935a"], "complete" => "d9a22d7a8178d5b42a8750123cbfe5b1", "csv" => "628cb5675ff524f3e719b7aa2e88fe3f", "dateFormat" => "mm/dd/YY", "decimalPoint" => "7d9af7a21241609a979bda8ca517044c", "endColumn" => 30, "endRow" => 89];
        $this->assertEquals($res7, $obj->toArray());

        $obj->setFirstRowAsNames(1);

        $res8 = ["columns" => ["columns" => "54ca84a794888fe8d92834787dfa935a"], "complete" => "d9a22d7a8178d5b42a8750123cbfe5b1", "csv" => "628cb5675ff524f3e719b7aa2e88fe3f", "dateFormat" => "mm/dd/YY", "decimalPoint" => "7d9af7a21241609a979bda8ca517044c", "endColumn" => 30, "endRow" => 89, "firstRowAsNames" => 1];
        $this->assertEquals($res8, $obj->toArray());

        $obj->setGoogleSpreadsheetKey("4c42edbd1e3a85f2857f1e3a5cf3fb59");

        $res9 = ["columns" => ["columns" => "54ca84a794888fe8d92834787dfa935a"], "complete" => "d9a22d7a8178d5b42a8750123cbfe5b1", "csv" => "628cb5675ff524f3e719b7aa2e88fe3f", "dateFormat" => "mm/dd/YY", "decimalPoint" => "7d9af7a21241609a979bda8ca517044c", "endColumn" => 30, "endRow" => 89, "firstRowAsNames" => 1, "googleSpreadsheetKey" => "4c42edbd1e3a85f2857f1e3a5cf3fb59"];
        $this->assertEquals($res9, $obj->toArray());

        $obj->setGoogleSpreadsheetWorksheet("b1444e571854190993273e8b1f53b89c");

        $res10 = ["columns" => ["columns" => "54ca84a794888fe8d92834787dfa935a"], "complete" => "d9a22d7a8178d5b42a8750123cbfe5b1", "csv" => "628cb5675ff524f3e719b7aa2e88fe3f", "dateFormat" => "mm/dd/YY", "decimalPoint" => "7d9af7a21241609a979bda8ca517044c", "endColumn" => 30, "endRow" => 89, "firstRowAsNames" => 1, "googleSpreadsheetKey" => "4c42edbd1e3a85f2857f1e3a5cf3fb59", "googleSpreadsheetWorksheet" => "b1444e571854190993273e8b1f53b89c"];
        $this->assertEquals($res10, $obj->toArray());

        $obj->setItemDelimiter("2b9ff3bde6b855958954383dc46b1d4f");

        $res11 = ["columns" => ["columns" => "54ca84a794888fe8d92834787dfa935a"], "complete" => "d9a22d7a8178d5b42a8750123cbfe5b1", "csv" => "628cb5675ff524f3e719b7aa2e88fe3f", "dateFormat" => "mm/dd/YY", "decimalPoint" => "7d9af7a21241609a979bda8ca517044c", "endColumn" => 30, "endRow" => 89, "firstRowAsNames" => 1, "googleSpreadsheetKey" => "4c42edbd1e3a85f2857f1e3a5cf3fb59", "googleSpreadsheetWorksheet" => "b1444e571854190993273e8b1f53b89c", "itemDelimiter" => "2b9ff3bde6b855958954383dc46b1d4f"];
        $this->assertEquals($res11, $obj->toArray());

        $obj->setLineDelimiter("28e3cbbd23484ddd36f72aa7110ee056");

        $res12 = ["columns" => ["columns" => "54ca84a794888fe8d92834787dfa935a"], "complete" => "d9a22d7a8178d5b42a8750123cbfe5b1", "csv" => "628cb5675ff524f3e719b7aa2e88fe3f", "dateFormat" => "mm/dd/YY", "decimalPoint" => "7d9af7a21241609a979bda8ca517044c", "endColumn" => 30, "endRow" => 89, "firstRowAsNames" => 1, "googleSpreadsheetKey" => "4c42edbd1e3a85f2857f1e3a5cf3fb59", "googleSpreadsheetWorksheet" => "b1444e571854190993273e8b1f53b89c", "itemDelimiter" => "2b9ff3bde6b855958954383dc46b1d4f", "lineDelimiter" => "28e3cbbd23484ddd36f72aa7110ee056"];
        $this->assertEquals($res12, $obj->toArray());

        $obj->setParseDate("8b186f0402c084188de6f80e91f77984");

        $res13 = ["columns" => ["columns" => "54ca84a794888fe8d92834787dfa935a"], "complete" => "d9a22d7a8178d5b42a8750123cbfe5b1", "csv" => "628cb5675ff524f3e719b7aa2e88fe3f", "dateFormat" => "mm/dd/YY", "decimalPoint" => "7d9af7a21241609a979bda8ca517044c", "endColumn" => 30, "endRow" => 89, "firstRowAsNames" => 1, "googleSpreadsheetKey" => "4c42edbd1e3a85f2857f1e3a5cf3fb59", "googleSpreadsheetWorksheet" => "b1444e571854190993273e8b1f53b89c", "itemDelimiter" => "2b9ff3bde6b855958954383dc46b1d4f", "lineDelimiter" => "28e3cbbd23484ddd36f72aa7110ee056", "parseDate" => "8b186f0402c084188de6f80e91f77984"];
        $this->assertEquals($res13, $obj->toArray());

        $obj->setParsed("c3732cbf21875cb12763787c984dd68d");

        $res14 = ["columns" => ["columns" => "54ca84a794888fe8d92834787dfa935a"], "complete" => "d9a22d7a8178d5b42a8750123cbfe5b1", "csv" => "628cb5675ff524f3e719b7aa2e88fe3f", "dateFormat" => "mm/dd/YY", "decimalPoint" => "7d9af7a21241609a979bda8ca517044c", "endColumn" => 30, "endRow" => 89, "firstRowAsNames" => 1, "googleSpreadsheetKey" => "4c42edbd1e3a85f2857f1e3a5cf3fb59", "googleSpreadsheetWorksheet" => "b1444e571854190993273e8b1f53b89c", "itemDelimiter" => "2b9ff3bde6b855958954383dc46b1d4f", "lineDelimiter" => "28e3cbbd23484ddd36f72aa7110ee056", "parseDate" => "8b186f0402c084188de6f80e91f77984", "parsed" => "c3732cbf21875cb12763787c984dd68d"];
        $this->assertEquals($res14, $obj->toArray());

        $obj->setRows(["rows" => "df347a373b8f92aa0ae3dd920a5ec2f6"]);

        $res15 = ["columns" => ["columns" => "54ca84a794888fe8d92834787dfa935a"], "complete" => "d9a22d7a8178d5b42a8750123cbfe5b1", "csv" => "628cb5675ff524f3e719b7aa2e88fe3f", "dateFormat" => "mm/dd/YY", "decimalPoint" => "7d9af7a21241609a979bda8ca517044c", "endColumn" => 30, "endRow" => 89, "firstRowAsNames" => 1, "googleSpreadsheetKey" => "4c42edbd1e3a85f2857f1e3a5cf3fb59", "googleSpreadsheetWorksheet" => "b1444e571854190993273e8b1f53b89c", "itemDelimiter" => "2b9ff3bde6b855958954383dc46b1d4f", "lineDelimiter" => "28e3cbbd23484ddd36f72aa7110ee056", "parseDate" => "8b186f0402c084188de6f80e91f77984", "parsed" => "c3732cbf21875cb12763787c984dd68d", "rows" => ["rows" => "df347a373b8f92aa0ae3dd920a5ec2f6"]];
        $this->assertEquals($res15, $obj->toArray());

        $obj->setSeriesMapping(["seriesMapping" => "2112d1fa8b6001694eb605edccdf0810"]);

        $res16 = ["columns" => ["columns" => "54ca84a794888fe8d92834787dfa935a"], "complete" => "d9a22d7a8178d5b42a8750123cbfe5b1", "csv" => "628cb5675ff524f3e719b7aa2e88fe3f", "dateFormat" => "mm/dd/YY", "decimalPoint" => "7d9af7a21241609a979bda8ca517044c", "endColumn" => 30, "endRow" => 89, "firstRowAsNames" => 1, "googleSpreadsheetKey" => "4c42edbd1e3a85f2857f1e3a5cf3fb59", "googleSpreadsheetWorksheet" => "b1444e571854190993273e8b1f53b89c", "itemDelimiter" => "2b9ff3bde6b855958954383dc46b1d4f", "lineDelimiter" => "28e3cbbd23484ddd36f72aa7110ee056", "parseDate" => "8b186f0402c084188de6f80e91f77984", "parsed" => "c3732cbf21875cb12763787c984dd68d", "rows" => ["rows" => "df347a373b8f92aa0ae3dd920a5ec2f6"], "seriesMapping" => ["seriesMapping" => "2112d1fa8b6001694eb605edccdf0810"]];
        $this->assertEquals($res16, $obj->toArray());

        $obj->setStartColumn(35);

        $res17 = ["columns" => ["columns" => "54ca84a794888fe8d92834787dfa935a"], "complete" => "d9a22d7a8178d5b42a8750123cbfe5b1", "csv" => "628cb5675ff524f3e719b7aa2e88fe3f", "dateFormat" => "mm/dd/YY", "decimalPoint" => "7d9af7a21241609a979bda8ca517044c", "endColumn" => 30, "endRow" => 89, "firstRowAsNames" => 1, "googleSpreadsheetKey" => "4c42edbd1e3a85f2857f1e3a5cf3fb59", "googleSpreadsheetWorksheet" => "b1444e571854190993273e8b1f53b89c", "itemDelimiter" => "2b9ff3bde6b855958954383dc46b1d4f", "lineDelimiter" => "28e3cbbd23484ddd36f72aa7110ee056", "parseDate" => "8b186f0402c084188de6f80e91f77984", "parsed" => "c3732cbf21875cb12763787c984dd68d", "rows" => ["rows" => "df347a373b8f92aa0ae3dd920a5ec2f6"], "seriesMapping" => ["seriesMapping" => "2112d1fa8b6001694eb605edccdf0810"], "startColumn" => 35];
        $this->assertEquals($res17, $obj->toArray());

        $obj->setStartRow(31);

        $res18 = ["columns" => ["columns" => "54ca84a794888fe8d92834787dfa935a"], "complete" => "d9a22d7a8178d5b42a8750123cbfe5b1", "csv" => "628cb5675ff524f3e719b7aa2e88fe3f", "dateFormat" => "mm/dd/YY", "decimalPoint" => "7d9af7a21241609a979bda8ca517044c", "endColumn" => 30, "endRow" => 89, "firstRowAsNames" => 1, "googleSpreadsheetKey" => "4c42edbd1e3a85f2857f1e3a5cf3fb59", "googleSpreadsheetWorksheet" => "b1444e571854190993273e8b1f53b89c", "itemDelimiter" => "2b9ff3bde6b855958954383dc46b1d4f", "lineDelimiter" => "28e3cbbd23484ddd36f72aa7110ee056", "parseDate" => "8b186f0402c084188de6f80e91f77984", "parsed" => "c3732cbf21875cb12763787c984dd68d", "rows" => ["rows" => "df347a373b8f92aa0ae3dd920a5ec2f6"], "seriesMapping" => ["seriesMapping" => "2112d1fa8b6001694eb605edccdf0810"], "startColumn" => 35, "startRow" => 31];
        $this->assertEquals($res18, $obj->toArray());

        $obj->setSwitchRowsAndColumns(1);

        $res19 = ["columns" => ["columns" => "54ca84a794888fe8d92834787dfa935a"], "complete" => "d9a22d7a8178d5b42a8750123cbfe5b1", "csv" => "628cb5675ff524f3e719b7aa2e88fe3f", "dateFormat" => "mm/dd/YY", "decimalPoint" => "7d9af7a21241609a979bda8ca517044c", "endColumn" => 30, "endRow" => 89, "firstRowAsNames" => 1, "googleSpreadsheetKey" => "4c42edbd1e3a85f2857f1e3a5cf3fb59", "googleSpreadsheetWorksheet" => "b1444e571854190993273e8b1f53b89c", "itemDelimiter" => "2b9ff3bde6b855958954383dc46b1d4f", "lineDelimiter" => "28e3cbbd23484ddd36f72aa7110ee056", "parseDate" => "8b186f0402c084188de6f80e91f77984", "parsed" => "c3732cbf21875cb12763787c984dd68d", "rows" => ["rows" => "df347a373b8f92aa0ae3dd920a5ec2f6"], "seriesMapping" => ["seriesMapping" => "2112d1fa8b6001694eb605edccdf0810"], "startColumn" => 35, "startRow" => 31, "switchRowsAndColumns" => 1];
        $this->assertEquals($res19, $obj->toArray());

        $obj->setTable("aab9e1de16f38176f86d7a92ba337a8d");

        $res20 = ["columns" => ["columns" => "54ca84a794888fe8d92834787dfa935a"], "complete" => "d9a22d7a8178d5b42a8750123cbfe5b1", "csv" => "628cb5675ff524f3e719b7aa2e88fe3f", "dateFormat" => "mm/dd/YY", "decimalPoint" => "7d9af7a21241609a979bda8ca517044c", "endColumn" => 30, "endRow" => 89, "firstRowAsNames" => 1, "googleSpreadsheetKey" => "4c42edbd1e3a85f2857f1e3a5cf3fb59", "googleSpreadsheetWorksheet" => "b1444e571854190993273e8b1f53b89c", "itemDelimiter" => "2b9ff3bde6b855958954383dc46b1d4f", "lineDelimiter" => "28e3cbbd23484ddd36f72aa7110ee056", "parseDate" => "8b186f0402c084188de6f80e91f77984", "parsed" => "c3732cbf21875cb12763787c984dd68d", "rows" => ["rows" => "df347a373b8f92aa0ae3dd920a5ec2f6"], "seriesMapping" => ["seriesMapping" => "2112d1fa8b6001694eb605edccdf0810"], "startColumn" => 35, "startRow" => 31, "switchRowsAndColumns" => 1, "table" => "aab9e1de16f38176f86d7a92ba337a8d"];
        $this->assertEquals($res20, $obj->toArray());
    }

}
