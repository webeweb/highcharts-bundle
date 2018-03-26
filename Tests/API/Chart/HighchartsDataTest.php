<?php

/**
 * This file is part of the highcharts-bundle package.
 *
 * (c) 2017 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\HighchartsBundle\Tests\API\Chart;

use PHPUnit_Framework_TestCase;

/**
 * Highcharts data test.
 *
 * @author webeweb <https://github.com/webeweb/>
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

        $this->assertNull($obj1->getColumns());
        $this->assertNull($obj1->getComplete());
        $this->assertNull($obj1->getCsv());
        $this->assertNull($obj1->getDateFormat());
        $this->assertNull($obj1->getDecimalPoint());
        $this->assertNull($obj1->getEndColumn());
        $this->assertNull($obj1->getEndRow());
        $this->assertNull($obj1->getFirstRowAsNames());
        $this->assertNull($obj1->getGoogleSpreadsheetKey());
        $this->assertNull($obj1->getGoogleSpreadsheetWorksheet());
        $this->assertNull($obj1->getItemDelimiter());
        $this->assertNull($obj1->getLineDelimiter());
        $this->assertNull($obj1->getParseDate());
        $this->assertNull($obj1->getParsed());
        $this->assertNull($obj1->getRows());
        $this->assertNull($obj1->getSeriesMapping());
        $this->assertNull($obj1->getStartColumn());
        $this->assertNull($obj1->getStartRow());
        $this->assertNull($obj1->getSwitchRowsAndColumns());
        $this->assertNull($obj1->getTable());

        $obj0 = new \WBW\Bundle\HighchartsBundle\API\Chart\HighchartsData(false);

        $this->assertNull($obj0->getColumns());
        $this->assertNull($obj0->getComplete());
        $this->assertNull($obj0->getCsv());
        $this->assertNull($obj0->getDateFormat());
        $this->assertEquals(".", $obj0->getDecimalPoint());
        $this->assertNull($obj0->getEndColumn());
        $this->assertNull($obj0->getEndRow());
        $this->assertEquals(true, $obj0->getFirstRowAsNames());
        $this->assertNull($obj0->getGoogleSpreadsheetKey());
        $this->assertNull($obj0->getGoogleSpreadsheetWorksheet());
        $this->assertNull($obj0->getItemDelimiter());
        $this->assertEquals("\\n", $obj0->getLineDelimiter());
        $this->assertNull($obj0->getParseDate());
        $this->assertNull($obj0->getParsed());
        $this->assertNull($obj0->getRows());
        $this->assertNull($obj0->getSeriesMapping());
        $this->assertEquals(0, $obj0->getStartColumn());
        $this->assertEquals(0, $obj0->getStartRow());
        $this->assertEquals(false, $obj0->getSwitchRowsAndColumns());
        $this->assertNull($obj0->getTable());
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

        $obj->setEndColumn(55);

        $res6 = ["columns" => ["columns" => "54ca84a794888fe8d92834787dfa935a"], "complete" => "d9a22d7a8178d5b42a8750123cbfe5b1", "csv" => "628cb5675ff524f3e719b7aa2e88fe3f", "dateFormat" => "mm/dd/YY", "decimalPoint" => "7d9af7a21241609a979bda8ca517044c", "endColumn" => 55];
        $this->assertEquals($res6, $obj->toArray());

        $obj->setEndRow(49);

        $res7 = ["columns" => ["columns" => "54ca84a794888fe8d92834787dfa935a"], "complete" => "d9a22d7a8178d5b42a8750123cbfe5b1", "csv" => "628cb5675ff524f3e719b7aa2e88fe3f", "dateFormat" => "mm/dd/YY", "decimalPoint" => "7d9af7a21241609a979bda8ca517044c", "endColumn" => 55, "endRow" => 49];
        $this->assertEquals($res7, $obj->toArray());

        $obj->setFirstRowAsNames(0);

        $res8 = ["columns" => ["columns" => "54ca84a794888fe8d92834787dfa935a"], "complete" => "d9a22d7a8178d5b42a8750123cbfe5b1", "csv" => "628cb5675ff524f3e719b7aa2e88fe3f", "dateFormat" => "mm/dd/YY", "decimalPoint" => "7d9af7a21241609a979bda8ca517044c", "endColumn" => 55, "endRow" => 49, "firstRowAsNames" => 0];
        $this->assertEquals($res8, $obj->toArray());

        $obj->setGoogleSpreadsheetKey("4c42edbd1e3a85f2857f1e3a5cf3fb59");

        $res9 = ["columns" => ["columns" => "54ca84a794888fe8d92834787dfa935a"], "complete" => "d9a22d7a8178d5b42a8750123cbfe5b1", "csv" => "628cb5675ff524f3e719b7aa2e88fe3f", "dateFormat" => "mm/dd/YY", "decimalPoint" => "7d9af7a21241609a979bda8ca517044c", "endColumn" => 55, "endRow" => 49, "firstRowAsNames" => 0, "googleSpreadsheetKey" => "4c42edbd1e3a85f2857f1e3a5cf3fb59"];
        $this->assertEquals($res9, $obj->toArray());

        $obj->setGoogleSpreadsheetWorksheet("b1444e571854190993273e8b1f53b89c");

        $res10 = ["columns" => ["columns" => "54ca84a794888fe8d92834787dfa935a"], "complete" => "d9a22d7a8178d5b42a8750123cbfe5b1", "csv" => "628cb5675ff524f3e719b7aa2e88fe3f", "dateFormat" => "mm/dd/YY", "decimalPoint" => "7d9af7a21241609a979bda8ca517044c", "endColumn" => 55, "endRow" => 49, "firstRowAsNames" => 0, "googleSpreadsheetKey" => "4c42edbd1e3a85f2857f1e3a5cf3fb59", "googleSpreadsheetWorksheet" => "b1444e571854190993273e8b1f53b89c"];
        $this->assertEquals($res10, $obj->toArray());

        $obj->setItemDelimiter("2b9ff3bde6b855958954383dc46b1d4f");

        $res11 = ["columns" => ["columns" => "54ca84a794888fe8d92834787dfa935a"], "complete" => "d9a22d7a8178d5b42a8750123cbfe5b1", "csv" => "628cb5675ff524f3e719b7aa2e88fe3f", "dateFormat" => "mm/dd/YY", "decimalPoint" => "7d9af7a21241609a979bda8ca517044c", "endColumn" => 55, "endRow" => 49, "firstRowAsNames" => 0, "googleSpreadsheetKey" => "4c42edbd1e3a85f2857f1e3a5cf3fb59", "googleSpreadsheetWorksheet" => "b1444e571854190993273e8b1f53b89c", "itemDelimiter" => "2b9ff3bde6b855958954383dc46b1d4f"];
        $this->assertEquals($res11, $obj->toArray());

        $obj->setLineDelimiter("28e3cbbd23484ddd36f72aa7110ee056");

        $res12 = ["columns" => ["columns" => "54ca84a794888fe8d92834787dfa935a"], "complete" => "d9a22d7a8178d5b42a8750123cbfe5b1", "csv" => "628cb5675ff524f3e719b7aa2e88fe3f", "dateFormat" => "mm/dd/YY", "decimalPoint" => "7d9af7a21241609a979bda8ca517044c", "endColumn" => 55, "endRow" => 49, "firstRowAsNames" => 0, "googleSpreadsheetKey" => "4c42edbd1e3a85f2857f1e3a5cf3fb59", "googleSpreadsheetWorksheet" => "b1444e571854190993273e8b1f53b89c", "itemDelimiter" => "2b9ff3bde6b855958954383dc46b1d4f", "lineDelimiter" => "28e3cbbd23484ddd36f72aa7110ee056"];
        $this->assertEquals($res12, $obj->toArray());

        $obj->setParseDate("8b186f0402c084188de6f80e91f77984");

        $res13 = ["columns" => ["columns" => "54ca84a794888fe8d92834787dfa935a"], "complete" => "d9a22d7a8178d5b42a8750123cbfe5b1", "csv" => "628cb5675ff524f3e719b7aa2e88fe3f", "dateFormat" => "mm/dd/YY", "decimalPoint" => "7d9af7a21241609a979bda8ca517044c", "endColumn" => 55, "endRow" => 49, "firstRowAsNames" => 0, "googleSpreadsheetKey" => "4c42edbd1e3a85f2857f1e3a5cf3fb59", "googleSpreadsheetWorksheet" => "b1444e571854190993273e8b1f53b89c", "itemDelimiter" => "2b9ff3bde6b855958954383dc46b1d4f", "lineDelimiter" => "28e3cbbd23484ddd36f72aa7110ee056", "parseDate" => "8b186f0402c084188de6f80e91f77984"];
        $this->assertEquals($res13, $obj->toArray());

        $obj->setParsed("c3732cbf21875cb12763787c984dd68d");

        $res14 = ["columns" => ["columns" => "54ca84a794888fe8d92834787dfa935a"], "complete" => "d9a22d7a8178d5b42a8750123cbfe5b1", "csv" => "628cb5675ff524f3e719b7aa2e88fe3f", "dateFormat" => "mm/dd/YY", "decimalPoint" => "7d9af7a21241609a979bda8ca517044c", "endColumn" => 55, "endRow" => 49, "firstRowAsNames" => 0, "googleSpreadsheetKey" => "4c42edbd1e3a85f2857f1e3a5cf3fb59", "googleSpreadsheetWorksheet" => "b1444e571854190993273e8b1f53b89c", "itemDelimiter" => "2b9ff3bde6b855958954383dc46b1d4f", "lineDelimiter" => "28e3cbbd23484ddd36f72aa7110ee056", "parseDate" => "8b186f0402c084188de6f80e91f77984", "parsed" => "c3732cbf21875cb12763787c984dd68d"];
        $this->assertEquals($res14, $obj->toArray());

        $obj->setRows(["rows" => "df347a373b8f92aa0ae3dd920a5ec2f6"]);

        $res15 = ["columns" => ["columns" => "54ca84a794888fe8d92834787dfa935a"], "complete" => "d9a22d7a8178d5b42a8750123cbfe5b1", "csv" => "628cb5675ff524f3e719b7aa2e88fe3f", "dateFormat" => "mm/dd/YY", "decimalPoint" => "7d9af7a21241609a979bda8ca517044c", "endColumn" => 55, "endRow" => 49, "firstRowAsNames" => 0, "googleSpreadsheetKey" => "4c42edbd1e3a85f2857f1e3a5cf3fb59", "googleSpreadsheetWorksheet" => "b1444e571854190993273e8b1f53b89c", "itemDelimiter" => "2b9ff3bde6b855958954383dc46b1d4f", "lineDelimiter" => "28e3cbbd23484ddd36f72aa7110ee056", "parseDate" => "8b186f0402c084188de6f80e91f77984", "parsed" => "c3732cbf21875cb12763787c984dd68d", "rows" => ["rows" => "df347a373b8f92aa0ae3dd920a5ec2f6"]];
        $this->assertEquals($res15, $obj->toArray());

        $obj->setSeriesMapping(["seriesMapping" => "2112d1fa8b6001694eb605edccdf0810"]);

        $res16 = ["columns" => ["columns" => "54ca84a794888fe8d92834787dfa935a"], "complete" => "d9a22d7a8178d5b42a8750123cbfe5b1", "csv" => "628cb5675ff524f3e719b7aa2e88fe3f", "dateFormat" => "mm/dd/YY", "decimalPoint" => "7d9af7a21241609a979bda8ca517044c", "endColumn" => 55, "endRow" => 49, "firstRowAsNames" => 0, "googleSpreadsheetKey" => "4c42edbd1e3a85f2857f1e3a5cf3fb59", "googleSpreadsheetWorksheet" => "b1444e571854190993273e8b1f53b89c", "itemDelimiter" => "2b9ff3bde6b855958954383dc46b1d4f", "lineDelimiter" => "28e3cbbd23484ddd36f72aa7110ee056", "parseDate" => "8b186f0402c084188de6f80e91f77984", "parsed" => "c3732cbf21875cb12763787c984dd68d", "rows" => ["rows" => "df347a373b8f92aa0ae3dd920a5ec2f6"], "seriesMapping" => ["seriesMapping" => "2112d1fa8b6001694eb605edccdf0810"]];
        $this->assertEquals($res16, $obj->toArray());

        $obj->setStartColumn(20);

        $res17 = ["columns" => ["columns" => "54ca84a794888fe8d92834787dfa935a"], "complete" => "d9a22d7a8178d5b42a8750123cbfe5b1", "csv" => "628cb5675ff524f3e719b7aa2e88fe3f", "dateFormat" => "mm/dd/YY", "decimalPoint" => "7d9af7a21241609a979bda8ca517044c", "endColumn" => 55, "endRow" => 49, "firstRowAsNames" => 0, "googleSpreadsheetKey" => "4c42edbd1e3a85f2857f1e3a5cf3fb59", "googleSpreadsheetWorksheet" => "b1444e571854190993273e8b1f53b89c", "itemDelimiter" => "2b9ff3bde6b855958954383dc46b1d4f", "lineDelimiter" => "28e3cbbd23484ddd36f72aa7110ee056", "parseDate" => "8b186f0402c084188de6f80e91f77984", "parsed" => "c3732cbf21875cb12763787c984dd68d", "rows" => ["rows" => "df347a373b8f92aa0ae3dd920a5ec2f6"], "seriesMapping" => ["seriesMapping" => "2112d1fa8b6001694eb605edccdf0810"], "startColumn" => 20];
        $this->assertEquals($res17, $obj->toArray());

        $obj->setStartRow(21);

        $res18 = ["columns" => ["columns" => "54ca84a794888fe8d92834787dfa935a"], "complete" => "d9a22d7a8178d5b42a8750123cbfe5b1", "csv" => "628cb5675ff524f3e719b7aa2e88fe3f", "dateFormat" => "mm/dd/YY", "decimalPoint" => "7d9af7a21241609a979bda8ca517044c", "endColumn" => 55, "endRow" => 49, "firstRowAsNames" => 0, "googleSpreadsheetKey" => "4c42edbd1e3a85f2857f1e3a5cf3fb59", "googleSpreadsheetWorksheet" => "b1444e571854190993273e8b1f53b89c", "itemDelimiter" => "2b9ff3bde6b855958954383dc46b1d4f", "lineDelimiter" => "28e3cbbd23484ddd36f72aa7110ee056", "parseDate" => "8b186f0402c084188de6f80e91f77984", "parsed" => "c3732cbf21875cb12763787c984dd68d", "rows" => ["rows" => "df347a373b8f92aa0ae3dd920a5ec2f6"], "seriesMapping" => ["seriesMapping" => "2112d1fa8b6001694eb605edccdf0810"], "startColumn" => 20, "startRow" => 21];
        $this->assertEquals($res18, $obj->toArray());

        $obj->setSwitchRowsAndColumns(0);

        $res19 = ["columns" => ["columns" => "54ca84a794888fe8d92834787dfa935a"], "complete" => "d9a22d7a8178d5b42a8750123cbfe5b1", "csv" => "628cb5675ff524f3e719b7aa2e88fe3f", "dateFormat" => "mm/dd/YY", "decimalPoint" => "7d9af7a21241609a979bda8ca517044c", "endColumn" => 55, "endRow" => 49, "firstRowAsNames" => 0, "googleSpreadsheetKey" => "4c42edbd1e3a85f2857f1e3a5cf3fb59", "googleSpreadsheetWorksheet" => "b1444e571854190993273e8b1f53b89c", "itemDelimiter" => "2b9ff3bde6b855958954383dc46b1d4f", "lineDelimiter" => "28e3cbbd23484ddd36f72aa7110ee056", "parseDate" => "8b186f0402c084188de6f80e91f77984", "parsed" => "c3732cbf21875cb12763787c984dd68d", "rows" => ["rows" => "df347a373b8f92aa0ae3dd920a5ec2f6"], "seriesMapping" => ["seriesMapping" => "2112d1fa8b6001694eb605edccdf0810"], "startColumn" => 20, "startRow" => 21, "switchRowsAndColumns" => 0];
        $this->assertEquals($res19, $obj->toArray());

        $obj->setTable("aab9e1de16f38176f86d7a92ba337a8d");

        $res20 = ["columns" => ["columns" => "54ca84a794888fe8d92834787dfa935a"], "complete" => "d9a22d7a8178d5b42a8750123cbfe5b1", "csv" => "628cb5675ff524f3e719b7aa2e88fe3f", "dateFormat" => "mm/dd/YY", "decimalPoint" => "7d9af7a21241609a979bda8ca517044c", "endColumn" => 55, "endRow" => 49, "firstRowAsNames" => 0, "googleSpreadsheetKey" => "4c42edbd1e3a85f2857f1e3a5cf3fb59", "googleSpreadsheetWorksheet" => "b1444e571854190993273e8b1f53b89c", "itemDelimiter" => "2b9ff3bde6b855958954383dc46b1d4f", "lineDelimiter" => "28e3cbbd23484ddd36f72aa7110ee056", "parseDate" => "8b186f0402c084188de6f80e91f77984", "parsed" => "c3732cbf21875cb12763787c984dd68d", "rows" => ["rows" => "df347a373b8f92aa0ae3dd920a5ec2f6"], "seriesMapping" => ["seriesMapping" => "2112d1fa8b6001694eb605edccdf0810"], "startColumn" => 20, "startRow" => 21, "switchRowsAndColumns" => 0, "table" => "aab9e1de16f38176f86d7a92ba337a8d"];
        $this->assertEquals($res20, $obj->toArray());
    }

}
