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
 * Highcharts exporting test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\HighchartsBundle\Tests\API\Chart
 * @version 5.0.14
 */
final class HighchartsExportingTest extends PHPUnit_Framework_TestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstructor() {

        $obj1 = new \WBW\Bundle\HighchartsBundle\API\Chart\HighchartsExporting(true);

        $this->assertEquals(null, $obj1->getAllowHTML());
        $this->assertEquals(null, $obj1->getButtons());
        $this->assertEquals(null, $obj1->getChartOptions());
        $this->assertEquals(null, $obj1->getEnabled());
        $this->assertEquals(null, $obj1->getError());
        $this->assertEquals(null, $obj1->getFallbackToExportServer());
        $this->assertEquals(null, $obj1->getFilename());
        $this->assertEquals(null, $obj1->getFormAttributes());
        $this->assertEquals(null, $obj1->getLibURL());
        $this->assertEquals(null, $obj1->getMenuItemDefinitions());
        $this->assertEquals(null, $obj1->getPrintMaxWidth());
        $this->assertEquals(null, $obj1->getScale());
        $this->assertEquals(null, $obj1->getSourceHeight());
        $this->assertEquals(null, $obj1->getSourceWidth());
        $this->assertEquals(null, $obj1->getType());
        $this->assertEquals(null, $obj1->getUrl());
        $this->assertEquals(null, $obj1->getWidth());

        $obj0 = new \WBW\Bundle\HighchartsBundle\API\Chart\HighchartsExporting(false);

        $this->assertEquals(false, $obj0->getAllowHTML());
        $this->assertEquals(null, $obj0->getButtons());
        $this->assertEquals(null, $obj0->getChartOptions());
        $this->assertEquals(true, $obj0->getEnabled());
        $this->assertEquals(null, $obj0->getError());
        $this->assertEquals(true, $obj0->getFallbackToExportServer());
        $this->assertEquals("chart", $obj0->getFilename());
        $this->assertEquals(null, $obj0->getFormAttributes());
        $this->assertEquals("https://code.highcharts.com/{version}/lib", $obj0->getLibURL());
        $this->assertEquals(null, $obj0->getMenuItemDefinitions());
        $this->assertEquals(780, $obj0->getPrintMaxWidth());
        $this->assertEquals(2, $obj0->getScale());
        $this->assertEquals(null, $obj0->getSourceHeight());
        $this->assertEquals(null, $obj0->getSourceWidth());
        $this->assertEquals("image/png", $obj0->getType());
        $this->assertEquals("https://export.highcharts.com", $obj0->getUrl());
        $this->assertEquals(null, $obj0->getWidth());
    }

    /**
     * Tests the clear() method.
     *
     * @return void
     */
    public function testClear() {

        $obj = new \WBW\Bundle\HighchartsBundle\API\Chart\HighchartsExporting(false);

        $obj->newButtons();

        $obj->clear();

        $res = ["buttons" => []];
        $this->assertEquals($res, $obj->toArray());
    }

    /**
     * Tests the jsonSerialize() method.
     *
     * @return void
     */
    public function testJsonSerialize() {

        $obj = new \WBW\Bundle\HighchartsBundle\API\Chart\HighchartsExporting(true);

        $this->assertEquals([], $obj->jsonSerialize());
    }

    /**
     * Tests the newButtons() method.
     *
     * @return void.
     */
    public function testNewButtons() {

        $obj = new \WBW\Bundle\HighchartsBundle\API\Chart\HighchartsExporting(false);

        $res = $obj->newButtons();
        $this->assertInstanceOf(\WBW\Bundle\HighchartsBundle\API\Chart\Exporting\HighchartsButtons::class, $res);
    }

    /**
     * Tests the toArray() method.
     *
     * @return void
     */
    public function testToArray() {

        $obj = new \WBW\Bundle\HighchartsBundle\API\Chart\HighchartsExporting(true);

        $obj->setAllowHTML(1);

        $res1 = ["allowHTML" => 1];
        $this->assertEquals($res1, $obj->toArray());

        $obj->setButtons(new \WBW\Bundle\HighchartsBundle\API\Chart\Exporting\HighchartsButtons());

        $res2 = ["allowHTML" => 1, "buttons" => []];
        $this->assertEquals($res2, $obj->toArray());

        $obj->setChartOptions(["chartOptions" => "0788f6dc968cd56a32e6d11f1134e345"]);

        $res3 = ["allowHTML" => 1, "buttons" => [], "chartOptions" => ["chartOptions" => "0788f6dc968cd56a32e6d11f1134e345"]];
        $this->assertEquals($res3, $obj->toArray());

        $obj->setEnabled(0);

        $res4 = ["allowHTML" => 1, "buttons" => [], "chartOptions" => ["chartOptions" => "0788f6dc968cd56a32e6d11f1134e345"], "enabled" => 0];
        $this->assertEquals($res4, $obj->toArray());

        $obj->setError("cb5e100e5a9a3e7f6d1fd97512215282");

        $res5 = ["allowHTML" => 1, "buttons" => [], "chartOptions" => ["chartOptions" => "0788f6dc968cd56a32e6d11f1134e345"], "enabled" => 0, "error" => "cb5e100e5a9a3e7f6d1fd97512215282"];
        $this->assertEquals($res5, $obj->toArray());

        $obj->setFallbackToExportServer(1);

        $res6 = ["allowHTML" => 1, "buttons" => [], "chartOptions" => ["chartOptions" => "0788f6dc968cd56a32e6d11f1134e345"], "enabled" => 0, "error" => "cb5e100e5a9a3e7f6d1fd97512215282", "fallbackToExportServer" => 1];
        $this->assertEquals($res6, $obj->toArray());

        $obj->setFilename("435ed7e9f07f740abf511a62c00eef6e");

        $res7 = ["allowHTML" => 1, "buttons" => [], "chartOptions" => ["chartOptions" => "0788f6dc968cd56a32e6d11f1134e345"], "enabled" => 0, "error" => "cb5e100e5a9a3e7f6d1fd97512215282", "fallbackToExportServer" => 1, "filename" => "435ed7e9f07f740abf511a62c00eef6e"];
        $this->assertEquals($res7, $obj->toArray());

        $obj->setFormAttributes(["formAttributes" => "7b7fc4307d3a34d310ab661dc7febf59"]);

        $res8 = ["allowHTML" => 1, "buttons" => [], "chartOptions" => ["chartOptions" => "0788f6dc968cd56a32e6d11f1134e345"], "enabled" => 0, "error" => "cb5e100e5a9a3e7f6d1fd97512215282", "fallbackToExportServer" => 1, "filename" => "435ed7e9f07f740abf511a62c00eef6e", "formAttributes" => ["formAttributes" => "7b7fc4307d3a34d310ab661dc7febf59"]];
        $this->assertEquals($res8, $obj->toArray());

        $obj->setLibURL("98a3bf7bf973c3ec4655c15c5a4d650e");

        $res9 = ["allowHTML" => 1, "buttons" => [], "chartOptions" => ["chartOptions" => "0788f6dc968cd56a32e6d11f1134e345"], "enabled" => 0, "error" => "cb5e100e5a9a3e7f6d1fd97512215282", "fallbackToExportServer" => 1, "filename" => "435ed7e9f07f740abf511a62c00eef6e", "formAttributes" => ["formAttributes" => "7b7fc4307d3a34d310ab661dc7febf59"], "libURL" => "98a3bf7bf973c3ec4655c15c5a4d650e"];
        $this->assertEquals($res9, $obj->toArray());

        $obj->setMenuItemDefinitions(["menuItemDefinitions" => "09a79ad3f58b50c3087cd936eabb5cc3"]);

        $res10 = ["allowHTML" => 1, "buttons" => [], "chartOptions" => ["chartOptions" => "0788f6dc968cd56a32e6d11f1134e345"], "enabled" => 0, "error" => "cb5e100e5a9a3e7f6d1fd97512215282", "fallbackToExportServer" => 1, "filename" => "435ed7e9f07f740abf511a62c00eef6e", "formAttributes" => ["formAttributes" => "7b7fc4307d3a34d310ab661dc7febf59"], "libURL" => "98a3bf7bf973c3ec4655c15c5a4d650e", "menuItemDefinitions" => ["menuItemDefinitions" => "09a79ad3f58b50c3087cd936eabb5cc3"]];
        $this->assertEquals($res10, $obj->toArray());

        $obj->setPrintMaxWidth(10);

        $res11 = ["allowHTML" => 1, "buttons" => [], "chartOptions" => ["chartOptions" => "0788f6dc968cd56a32e6d11f1134e345"], "enabled" => 0, "error" => "cb5e100e5a9a3e7f6d1fd97512215282", "fallbackToExportServer" => 1, "filename" => "435ed7e9f07f740abf511a62c00eef6e", "formAttributes" => ["formAttributes" => "7b7fc4307d3a34d310ab661dc7febf59"], "libURL" => "98a3bf7bf973c3ec4655c15c5a4d650e", "menuItemDefinitions" => ["menuItemDefinitions" => "09a79ad3f58b50c3087cd936eabb5cc3"], "printMaxWidth" => 10];
        $this->assertEquals($res11, $obj->toArray());

        $obj->setScale(5);

        $res12 = ["allowHTML" => 1, "buttons" => [], "chartOptions" => ["chartOptions" => "0788f6dc968cd56a32e6d11f1134e345"], "enabled" => 0, "error" => "cb5e100e5a9a3e7f6d1fd97512215282", "fallbackToExportServer" => 1, "filename" => "435ed7e9f07f740abf511a62c00eef6e", "formAttributes" => ["formAttributes" => "7b7fc4307d3a34d310ab661dc7febf59"], "libURL" => "98a3bf7bf973c3ec4655c15c5a4d650e", "menuItemDefinitions" => ["menuItemDefinitions" => "09a79ad3f58b50c3087cd936eabb5cc3"], "printMaxWidth" => 10, "scale" => 5];
        $this->assertEquals($res12, $obj->toArray());

        $obj->setSourceHeight(36);

        $res13 = ["allowHTML" => 1, "buttons" => [], "chartOptions" => ["chartOptions" => "0788f6dc968cd56a32e6d11f1134e345"], "enabled" => 0, "error" => "cb5e100e5a9a3e7f6d1fd97512215282", "fallbackToExportServer" => 1, "filename" => "435ed7e9f07f740abf511a62c00eef6e", "formAttributes" => ["formAttributes" => "7b7fc4307d3a34d310ab661dc7febf59"], "libURL" => "98a3bf7bf973c3ec4655c15c5a4d650e", "menuItemDefinitions" => ["menuItemDefinitions" => "09a79ad3f58b50c3087cd936eabb5cc3"], "printMaxWidth" => 10, "scale" => 5, "sourceHeight" => 36];
        $this->assertEquals($res13, $obj->toArray());

        $obj->setSourceWidth(18);

        $res14 = ["allowHTML" => 1, "buttons" => [], "chartOptions" => ["chartOptions" => "0788f6dc968cd56a32e6d11f1134e345"], "enabled" => 0, "error" => "cb5e100e5a9a3e7f6d1fd97512215282", "fallbackToExportServer" => 1, "filename" => "435ed7e9f07f740abf511a62c00eef6e", "formAttributes" => ["formAttributes" => "7b7fc4307d3a34d310ab661dc7febf59"], "libURL" => "98a3bf7bf973c3ec4655c15c5a4d650e", "menuItemDefinitions" => ["menuItemDefinitions" => "09a79ad3f58b50c3087cd936eabb5cc3"], "printMaxWidth" => 10, "scale" => 5, "sourceHeight" => 36, "sourceWidth" => 18];
        $this->assertEquals($res14, $obj->toArray());

        $obj->setType("image/svg+xml");

        $res15 = ["allowHTML" => 1, "buttons" => [], "chartOptions" => ["chartOptions" => "0788f6dc968cd56a32e6d11f1134e345"], "enabled" => 0, "error" => "cb5e100e5a9a3e7f6d1fd97512215282", "fallbackToExportServer" => 1, "filename" => "435ed7e9f07f740abf511a62c00eef6e", "formAttributes" => ["formAttributes" => "7b7fc4307d3a34d310ab661dc7febf59"], "libURL" => "98a3bf7bf973c3ec4655c15c5a4d650e", "menuItemDefinitions" => ["menuItemDefinitions" => "09a79ad3f58b50c3087cd936eabb5cc3"], "printMaxWidth" => 10, "scale" => 5, "sourceHeight" => 36, "sourceWidth" => 18, "type" => "image/svg+xml"];
        $this->assertEquals($res15, $obj->toArray());

        $obj->setUrl("572d4e421e5e6b9bc11d815e8a027112");

        $res16 = ["allowHTML" => 1, "buttons" => [], "chartOptions" => ["chartOptions" => "0788f6dc968cd56a32e6d11f1134e345"], "enabled" => 0, "error" => "cb5e100e5a9a3e7f6d1fd97512215282", "fallbackToExportServer" => 1, "filename" => "435ed7e9f07f740abf511a62c00eef6e", "formAttributes" => ["formAttributes" => "7b7fc4307d3a34d310ab661dc7febf59"], "libURL" => "98a3bf7bf973c3ec4655c15c5a4d650e", "menuItemDefinitions" => ["menuItemDefinitions" => "09a79ad3f58b50c3087cd936eabb5cc3"], "printMaxWidth" => 10, "scale" => 5, "sourceHeight" => 36, "sourceWidth" => 18, "type" => "image/svg+xml", "url" => "572d4e421e5e6b9bc11d815e8a027112"];
        $this->assertEquals($res16, $obj->toArray());

        $obj->setWidth(54);

        $res17 = ["allowHTML" => 1, "buttons" => [], "chartOptions" => ["chartOptions" => "0788f6dc968cd56a32e6d11f1134e345"], "enabled" => 0, "error" => "cb5e100e5a9a3e7f6d1fd97512215282", "fallbackToExportServer" => 1, "filename" => "435ed7e9f07f740abf511a62c00eef6e", "formAttributes" => ["formAttributes" => "7b7fc4307d3a34d310ab661dc7febf59"], "libURL" => "98a3bf7bf973c3ec4655c15c5a4d650e", "menuItemDefinitions" => ["menuItemDefinitions" => "09a79ad3f58b50c3087cd936eabb5cc3"], "printMaxWidth" => 10, "scale" => 5, "sourceHeight" => 36, "sourceWidth" => 18, "type" => "image/svg+xml", "url" => "572d4e421e5e6b9bc11d815e8a027112", "width" => 54];
        $this->assertEquals($res17, $obj->toArray());
    }

}
