<?php

/*
 * This file is part of the WBWHighchartsBundle package.
 *
 * (c) 2017 NdC/WBW
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\HighchartsBundle\Tests\API\Chart;

use PHPUnit_Framework_TestCase;

/**
 * Highcharts exporting test.
 *
 * @author NdC/WBW <https://github.com/webeweb/>
 * @package WBW\Bundle\HighchartsBundle\Tests\API\Chart
 * @version 5.0.14
 */
final class HighchartsExportingTest extends PHPUnit_Framework_TestCase {

    /**
     * Test the __construct() method.
     *
     * @return void
     */
    public function testConstructor() {

        $obj1 = new \WBW\Bundle\HighchartsBundle\API\Chart\HighchartsExporting(true);

        $this->assertEquals(null, $obj1->getAllowHTML(), "The method getAllowHTML() does not return the expected value");
        $this->assertEquals(null, $obj1->getButtons(), "The method getButtons() does not return the expected value");
        $this->assertEquals(null, $obj1->getChartOptions(), "The method getChartOptions() does not return the expected value");
        $this->assertEquals(null, $obj1->getEnabled(), "The method getEnabled() does not return the expected value");
        $this->assertEquals(null, $obj1->getError(), "The method getError() does not return the expected value");
        $this->assertEquals(null, $obj1->getFallbackToExportServer(), "The method getFallbackToExportServer() does not return the expected value");
        $this->assertEquals(null, $obj1->getFilename(), "The method getFilename() does not return the expected value");
        $this->assertEquals(null, $obj1->getFormAttributes(), "The method getFormAttributes() does not return the expected value");
        $this->assertEquals(null, $obj1->getLibURL(), "The method getLibURL() does not return the expected value");
        $this->assertEquals(null, $obj1->getMenuItemDefinitions(), "The method getMenuItemDefinitions() does not return the expected value");
        $this->assertEquals(null, $obj1->getPrintMaxWidth(), "The method getPrintMaxWidth() does not return the expected value");
        $this->assertEquals(null, $obj1->getScale(), "The method getScale() does not return the expected value");
        $this->assertEquals(null, $obj1->getSourceHeight(), "The method getSourceHeight() does not return the expected value");
        $this->assertEquals(null, $obj1->getSourceWidth(), "The method getSourceWidth() does not return the expected value");
        $this->assertEquals(null, $obj1->getType(), "The method getType() does not return the expected value");
        $this->assertEquals(null, $obj1->getUrl(), "The method getUrl() does not return the expected value");
        $this->assertEquals(null, $obj1->getWidth(), "The method getWidth() does not return the expected value");

        $obj0 = new \WBW\Bundle\HighchartsBundle\API\Chart\HighchartsExporting(false);

        $this->assertEquals(false, $obj0->getAllowHTML(), "The method getAllowHTML() does not return the expected value");
        $this->assertEquals(null, $obj0->getButtons(), "The method getButtons() does not return the expected value");
        $this->assertEquals(null, $obj0->getChartOptions(), "The method getChartOptions() does not return the expected value");
        $this->assertEquals(true, $obj0->getEnabled(), "The method getEnabled() does not return the expected value");
        $this->assertEquals(null, $obj0->getError(), "The method getError() does not return the expected value");
        $this->assertEquals(true, $obj0->getFallbackToExportServer(), "The method getFallbackToExportServer() does not return the expected value");
        $this->assertEquals("chart", $obj0->getFilename(), "The method getFilename() does not return the expected value");
        $this->assertEquals(null, $obj0->getFormAttributes(), "The method getFormAttributes() does not return the expected value");
        $this->assertEquals("https://code.highcharts.com/{version}/lib", $obj0->getLibURL(), "The method getLibURL() does not return the expected value");
        $this->assertEquals(null, $obj0->getMenuItemDefinitions(), "The method getMenuItemDefinitions() does not return the expected value");
        $this->assertEquals(780, $obj0->getPrintMaxWidth(), "The method getPrintMaxWidth() does not return the expected value");
        $this->assertEquals(2, $obj0->getScale(), "The method getScale() does not return the expected value");
        $this->assertEquals(null, $obj0->getSourceHeight(), "The method getSourceHeight() does not return the expected value");
        $this->assertEquals(null, $obj0->getSourceWidth(), "The method getSourceWidth() does not return the expected value");
        $this->assertEquals("image/png", $obj0->getType(), "The method getType() does not return the expected value");
        $this->assertEquals("https://export.highcharts.com", $obj0->getUrl(), "The method getUrl() does not return the expected value");
        $this->assertEquals(null, $obj0->getWidth(), "The method getWidth() does not return the expected value");
    }

    /**
     * Test the clear() method.
     *
     * @return void
     */
    public function testClear() {

        $obj = new \WBW\Bundle\HighchartsBundle\API\Chart\HighchartsExporting(false);

        $obj->newButtons();

        $obj->clear();

        $res = ["buttons" => []];
        $this->assertEquals($res, $obj->toArray(), "The method toArray() does not return the expected array");
    }

    /**
     * Test the jsonSerialize() method.
     *
     * @return void
     */
    public function testJsonSerialize() {

        $obj = new \WBW\Bundle\HighchartsBundle\API\Chart\HighchartsExporting(true);

        $this->assertEquals([], $obj->jsonSerialize(), "The method jsonSerialize() does not return the expected value");
    }

    /**
     * Tests the newButtons() method.
     *
     * @return void.
     */
    public function testNewButtons() {

        $obj = new \WBW\Bundle\HighchartsBundle\API\Chart\HighchartsExporting(false);

        $res = $obj->newButtons();
        $this->assertInstanceOf(\WBW\Bundle\HighchartsBundle\API\Chart\Exporting\HighchartsButtons::class, $res, "The method newButtons() does not return the expected object");
    }

    /**
     * Test the toArray() method.
     *
     * @return void
     */
    public function testToArray() {

        $obj = new \WBW\Bundle\HighchartsBundle\API\Chart\HighchartsExporting(true);

        $obj->setAllowHTML(1);

        $res1 = ["allowHTML" => 1];
        $this->assertEquals($res1, $obj->toArray(), "The method toArray() does not return the expected array with allow HTML");

        $obj->setButtons(new \WBW\Bundle\HighchartsBundle\API\Chart\Exporting\HighchartsButtons());

        $res2 = ["allowHTML" => 1, "buttons" => []];
        $this->assertEquals($res2, $obj->toArray(), "The method toArray() does not return the expected array with buttons");

        $obj->setChartOptions(["chartOptions" => "0788f6dc968cd56a32e6d11f1134e345"]);

        $res3 = ["allowHTML" => 1, "buttons" => [], "chartOptions" => ["chartOptions" => "0788f6dc968cd56a32e6d11f1134e345"]];
        $this->assertEquals($res3, $obj->toArray(), "The method toArray() does not return the expected array with chart options");

        $obj->setEnabled(1);

        $res4 = ["allowHTML" => 1, "buttons" => [], "chartOptions" => ["chartOptions" => "0788f6dc968cd56a32e6d11f1134e345"], "enabled" => 1];
        $this->assertEquals($res4, $obj->toArray(), "The method toArray() does not return the expected array with enabled");

        $obj->setError("cb5e100e5a9a3e7f6d1fd97512215282");

        $res5 = ["allowHTML" => 1, "buttons" => [], "chartOptions" => ["chartOptions" => "0788f6dc968cd56a32e6d11f1134e345"], "enabled" => 1, "error" => "cb5e100e5a9a3e7f6d1fd97512215282"];
        $this->assertEquals($res5, $obj->toArray(), "The method toArray() does not return the expected array with error");

        $obj->setFallbackToExportServer(1);

        $res6 = ["allowHTML" => 1, "buttons" => [], "chartOptions" => ["chartOptions" => "0788f6dc968cd56a32e6d11f1134e345"], "enabled" => 1, "error" => "cb5e100e5a9a3e7f6d1fd97512215282", "fallbackToExportServer" => 1];
        $this->assertEquals($res6, $obj->toArray(), "The method toArray() does not return the expected array with fallback to export server");

        $obj->setFilename("435ed7e9f07f740abf511a62c00eef6e");

        $res7 = ["allowHTML" => 1, "buttons" => [], "chartOptions" => ["chartOptions" => "0788f6dc968cd56a32e6d11f1134e345"], "enabled" => 1, "error" => "cb5e100e5a9a3e7f6d1fd97512215282", "fallbackToExportServer" => 1, "filename" => "435ed7e9f07f740abf511a62c00eef6e"];
        $this->assertEquals($res7, $obj->toArray(), "The method toArray() does not return the expected array with filename");

        $obj->setFormAttributes(["formAttributes" => "7b7fc4307d3a34d310ab661dc7febf59"]);

        $res8 = ["allowHTML" => 1, "buttons" => [], "chartOptions" => ["chartOptions" => "0788f6dc968cd56a32e6d11f1134e345"], "enabled" => 1, "error" => "cb5e100e5a9a3e7f6d1fd97512215282", "fallbackToExportServer" => 1, "filename" => "435ed7e9f07f740abf511a62c00eef6e", "formAttributes" => ["formAttributes" => "7b7fc4307d3a34d310ab661dc7febf59"]];
        $this->assertEquals($res8, $obj->toArray(), "The method toArray() does not return the expected array with form attributes");

        $obj->setLibURL("98a3bf7bf973c3ec4655c15c5a4d650e");

        $res9 = ["allowHTML" => 1, "buttons" => [], "chartOptions" => ["chartOptions" => "0788f6dc968cd56a32e6d11f1134e345"], "enabled" => 1, "error" => "cb5e100e5a9a3e7f6d1fd97512215282", "fallbackToExportServer" => 1, "filename" => "435ed7e9f07f740abf511a62c00eef6e", "formAttributes" => ["formAttributes" => "7b7fc4307d3a34d310ab661dc7febf59"], "libURL" => "98a3bf7bf973c3ec4655c15c5a4d650e"];
        $this->assertEquals($res9, $obj->toArray(), "The method toArray() does not return the expected array with lib URL");

        $obj->setMenuItemDefinitions(["menuItemDefinitions" => "09a79ad3f58b50c3087cd936eabb5cc3"]);

        $res10 = ["allowHTML" => 1, "buttons" => [], "chartOptions" => ["chartOptions" => "0788f6dc968cd56a32e6d11f1134e345"], "enabled" => 1, "error" => "cb5e100e5a9a3e7f6d1fd97512215282", "fallbackToExportServer" => 1, "filename" => "435ed7e9f07f740abf511a62c00eef6e", "formAttributes" => ["formAttributes" => "7b7fc4307d3a34d310ab661dc7febf59"], "libURL" => "98a3bf7bf973c3ec4655c15c5a4d650e", "menuItemDefinitions" => ["menuItemDefinitions" => "09a79ad3f58b50c3087cd936eabb5cc3"]];
        $this->assertEquals($res10, $obj->toArray(), "The method toArray() does not return the expected array with menu item definitions");

        $obj->setPrintMaxWidth(99);

        $res11 = ["allowHTML" => 1, "buttons" => [], "chartOptions" => ["chartOptions" => "0788f6dc968cd56a32e6d11f1134e345"], "enabled" => 1, "error" => "cb5e100e5a9a3e7f6d1fd97512215282", "fallbackToExportServer" => 1, "filename" => "435ed7e9f07f740abf511a62c00eef6e", "formAttributes" => ["formAttributes" => "7b7fc4307d3a34d310ab661dc7febf59"], "libURL" => "98a3bf7bf973c3ec4655c15c5a4d650e", "menuItemDefinitions" => ["menuItemDefinitions" => "09a79ad3f58b50c3087cd936eabb5cc3"], "printMaxWidth" => 99];
        $this->assertEquals($res11, $obj->toArray(), "The method toArray() does not return the expected array with print max width");

        $obj->setScale(77);

        $res12 = ["allowHTML" => 1, "buttons" => [], "chartOptions" => ["chartOptions" => "0788f6dc968cd56a32e6d11f1134e345"], "enabled" => 1, "error" => "cb5e100e5a9a3e7f6d1fd97512215282", "fallbackToExportServer" => 1, "filename" => "435ed7e9f07f740abf511a62c00eef6e", "formAttributes" => ["formAttributes" => "7b7fc4307d3a34d310ab661dc7febf59"], "libURL" => "98a3bf7bf973c3ec4655c15c5a4d650e", "menuItemDefinitions" => ["menuItemDefinitions" => "09a79ad3f58b50c3087cd936eabb5cc3"], "printMaxWidth" => 99, "scale" => 77];
        $this->assertEquals($res12, $obj->toArray(), "The method toArray() does not return the expected array with scale");

        $obj->setSourceHeight(53);

        $res13 = ["allowHTML" => 1, "buttons" => [], "chartOptions" => ["chartOptions" => "0788f6dc968cd56a32e6d11f1134e345"], "enabled" => 1, "error" => "cb5e100e5a9a3e7f6d1fd97512215282", "fallbackToExportServer" => 1, "filename" => "435ed7e9f07f740abf511a62c00eef6e", "formAttributes" => ["formAttributes" => "7b7fc4307d3a34d310ab661dc7febf59"], "libURL" => "98a3bf7bf973c3ec4655c15c5a4d650e", "menuItemDefinitions" => ["menuItemDefinitions" => "09a79ad3f58b50c3087cd936eabb5cc3"], "printMaxWidth" => 99, "scale" => 77, "sourceHeight" => 53];
        $this->assertEquals($res13, $obj->toArray(), "The method toArray() does not return the expected array with source height");

        $obj->setSourceWidth(14);

        $res14 = ["allowHTML" => 1, "buttons" => [], "chartOptions" => ["chartOptions" => "0788f6dc968cd56a32e6d11f1134e345"], "enabled" => 1, "error" => "cb5e100e5a9a3e7f6d1fd97512215282", "fallbackToExportServer" => 1, "filename" => "435ed7e9f07f740abf511a62c00eef6e", "formAttributes" => ["formAttributes" => "7b7fc4307d3a34d310ab661dc7febf59"], "libURL" => "98a3bf7bf973c3ec4655c15c5a4d650e", "menuItemDefinitions" => ["menuItemDefinitions" => "09a79ad3f58b50c3087cd936eabb5cc3"], "printMaxWidth" => 99, "scale" => 77, "sourceHeight" => 53, "sourceWidth" => 14];
        $this->assertEquals($res14, $obj->toArray(), "The method toArray() does not return the expected array with source width");

        $obj->setType("image/svg+xml");

        $res15 = ["allowHTML" => 1, "buttons" => [], "chartOptions" => ["chartOptions" => "0788f6dc968cd56a32e6d11f1134e345"], "enabled" => 1, "error" => "cb5e100e5a9a3e7f6d1fd97512215282", "fallbackToExportServer" => 1, "filename" => "435ed7e9f07f740abf511a62c00eef6e", "formAttributes" => ["formAttributes" => "7b7fc4307d3a34d310ab661dc7febf59"], "libURL" => "98a3bf7bf973c3ec4655c15c5a4d650e", "menuItemDefinitions" => ["menuItemDefinitions" => "09a79ad3f58b50c3087cd936eabb5cc3"], "printMaxWidth" => 99, "scale" => 77, "sourceHeight" => 53, "sourceWidth" => 14, "type" => "image/svg+xml"];
        $this->assertEquals($res15, $obj->toArray(), "The method toArray() does not return the expected array with type");

        $obj->setUrl("572d4e421e5e6b9bc11d815e8a027112");

        $res16 = ["allowHTML" => 1, "buttons" => [], "chartOptions" => ["chartOptions" => "0788f6dc968cd56a32e6d11f1134e345"], "enabled" => 1, "error" => "cb5e100e5a9a3e7f6d1fd97512215282", "fallbackToExportServer" => 1, "filename" => "435ed7e9f07f740abf511a62c00eef6e", "formAttributes" => ["formAttributes" => "7b7fc4307d3a34d310ab661dc7febf59"], "libURL" => "98a3bf7bf973c3ec4655c15c5a4d650e", "menuItemDefinitions" => ["menuItemDefinitions" => "09a79ad3f58b50c3087cd936eabb5cc3"], "printMaxWidth" => 99, "scale" => 77, "sourceHeight" => 53, "sourceWidth" => 14, "type" => "image/svg+xml", "url" => "572d4e421e5e6b9bc11d815e8a027112"];
        $this->assertEquals($res16, $obj->toArray(), "The method toArray() does not return the expected array with url");

        $obj->setWidth(80);

        $res17 = ["allowHTML" => 1, "buttons" => [], "chartOptions" => ["chartOptions" => "0788f6dc968cd56a32e6d11f1134e345"], "enabled" => 1, "error" => "cb5e100e5a9a3e7f6d1fd97512215282", "fallbackToExportServer" => 1, "filename" => "435ed7e9f07f740abf511a62c00eef6e", "formAttributes" => ["formAttributes" => "7b7fc4307d3a34d310ab661dc7febf59"], "libURL" => "98a3bf7bf973c3ec4655c15c5a4d650e", "menuItemDefinitions" => ["menuItemDefinitions" => "09a79ad3f58b50c3087cd936eabb5cc3"], "printMaxWidth" => 99, "scale" => 77, "sourceHeight" => 53, "sourceWidth" => 14, "type" => "image/svg+xml", "url" => "572d4e421e5e6b9bc11d815e8a027112", "width" => 80];
        $this->assertEquals($res17, $obj->toArray(), "The method toArray() does not return the expected array with width");
    }

}
