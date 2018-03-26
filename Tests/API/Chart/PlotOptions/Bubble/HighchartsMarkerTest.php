<?php

/**
 * This file is part of the highcharts-bundle package.
 *
 * (c) 2017 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\HighchartsBundle\Tests\API\Chart\PlotOptions\Bubble;

use PHPUnit_Framework_TestCase;

/**
 * Highcharts marker test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\HighchartsBundle\Tests\API\Chart\PlotOptions\Bubble
 * @version 5.0.14
 */
final class HighchartsMarkerTest extends PHPUnit_Framework_TestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstructor() {

        $obj1 = new \WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\Bubble\HighchartsMarker(true);

        $this->assertNull($obj1->getEnabled());
        $this->assertNull($obj1->getFillColor());
        $this->assertNull($obj1->getHeight());
        $this->assertNull($obj1->getLineColor());
        $this->assertNull($obj1->getLineWidth());
        $this->assertNull($obj1->getStates());
        $this->assertNull($obj1->getSymbol());
        $this->assertNull($obj1->getWidth());

        $obj0 = new \WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\Bubble\HighchartsMarker(false);

        $this->assertNull($obj0->getEnabled());
        $this->assertNull($obj0->getFillColor());
        $this->assertNull($obj0->getHeight());
        $this->assertEquals("#ffffff", $obj0->getLineColor());
        $this->assertEquals(0, $obj0->getLineWidth());
        $this->assertNull($obj0->getStates());
        $this->assertEquals("circle", $obj0->getSymbol());
        $this->assertNull($obj0->getWidth());
    }

    /**
     * Tests the clear() method.
     *
     * @return void
     */
    public function testClear() {

        $obj = new \WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\Bubble\HighchartsMarker(false);

        $obj->newStates();

        $obj->clear();

        $res = ["states" => []];
        $this->assertEquals($res, $obj->toArray());
    }

    /**
     * Tests the jsonSerialize() method.
     *
     * @return void
     */
    public function testJsonSerialize() {

        $obj = new \WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\Bubble\HighchartsMarker(true);

        $this->assertEquals([], $obj->jsonSerialize());
    }

    /**
     * Tests the newStates() method.
     *
     * @return void.
     */
    public function testNewStates() {

        $obj = new \WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\Bubble\HighchartsMarker(false);

        $res = $obj->newStates();
        $this->assertInstanceOf(\WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\Bubble\Marker\HighchartsStates::class, $res);
    }

    /**
     * Tests the toArray() method.
     *
     * @return void
     */
    public function testToArray() {

        $obj = new \WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\Bubble\HighchartsMarker(true);

        $obj->setEnabled(0);

        $res1 = ["enabled" => 0];
        $this->assertEquals($res1, $obj->toArray());

        $obj->setFillColor("1fde055d3ff900e04ca08bc82066d7fd");

        $res2 = ["enabled" => 0, "fillColor" => "1fde055d3ff900e04ca08bc82066d7fd"];
        $this->assertEquals($res2, $obj->toArray());

        $obj->setHeight(43);

        $res3 = ["enabled" => 0, "fillColor" => "1fde055d3ff900e04ca08bc82066d7fd", "height" => 43];
        $this->assertEquals($res3, $obj->toArray());

        $obj->setLineColor("c2580eebfdbdb9fc629f50cc147c3f63");

        $res4 = ["enabled" => 0, "fillColor" => "1fde055d3ff900e04ca08bc82066d7fd", "height" => 43, "lineColor" => "c2580eebfdbdb9fc629f50cc147c3f63"];
        $this->assertEquals($res4, $obj->toArray());

        $obj->setLineWidth(53);

        $res5 = ["enabled" => 0, "fillColor" => "1fde055d3ff900e04ca08bc82066d7fd", "height" => 43, "lineColor" => "c2580eebfdbdb9fc629f50cc147c3f63", "lineWidth" => 53];
        $this->assertEquals($res5, $obj->toArray());

        $obj->setStates(new \WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\Bubble\Marker\HighchartsStates());

        $res6 = ["enabled" => 0, "fillColor" => "1fde055d3ff900e04ca08bc82066d7fd", "height" => 43, "lineColor" => "c2580eebfdbdb9fc629f50cc147c3f63", "lineWidth" => 53, "states" => []];
        $this->assertEquals($res6, $obj->toArray());

        $obj->setSymbol("triangle-down");

        $res7 = ["enabled" => 0, "fillColor" => "1fde055d3ff900e04ca08bc82066d7fd", "height" => 43, "lineColor" => "c2580eebfdbdb9fc629f50cc147c3f63", "lineWidth" => 53, "states" => [], "symbol" => "triangle-down"];
        $this->assertEquals($res7, $obj->toArray());

        $obj->setWidth(23);

        $res8 = ["enabled" => 0, "fillColor" => "1fde055d3ff900e04ca08bc82066d7fd", "height" => 43, "lineColor" => "c2580eebfdbdb9fc629f50cc147c3f63", "lineWidth" => 53, "states" => [], "symbol" => "triangle-down", "width" => 23];
        $this->assertEquals($res8, $obj->toArray());
    }

}
