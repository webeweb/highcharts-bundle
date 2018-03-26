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
 * Highcharts series test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\HighchartsBundle\Tests\API\Chart
 * @version 5.0.14
 */
final class HighchartsSeriesTest extends PHPUnit_Framework_TestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstructor() {

        $obj1 = new \WBW\Bundle\HighchartsBundle\API\Chart\HighchartsSeries(true);

        $this->assertNull($obj1->getData());
        $this->assertNull($obj1->getDataParser());
        $this->assertNull($obj1->getDataURL());
        $this->assertNull($obj1->getId());
        $this->assertNull($obj1->getIndex());
        $this->assertNull($obj1->getLegendIndex());
        $this->assertNull($obj1->getName());
        $this->assertNull($obj1->getStack());
        $this->assertNull($obj1->getType());
        $this->assertNull($obj1->getXAxis());
        $this->assertNull($obj1->getYAxis());
        $this->assertNull($obj1->getZIndex());

        $obj0 = new \WBW\Bundle\HighchartsBundle\API\Chart\HighchartsSeries(false);

        $this->assertNull($obj0->getData());
        $this->assertNull($obj0->getDataParser());
        $this->assertNull($obj0->getDataURL());
        $this->assertNull($obj0->getId());
        $this->assertNull($obj0->getIndex());
        $this->assertNull($obj0->getLegendIndex());
        $this->assertNull($obj0->getName());
        $this->assertNull($obj0->getStack());
        $this->assertNull($obj0->getType());
        $this->assertEquals("0", $obj0->getXAxis());
        $this->assertEquals("0", $obj0->getYAxis());
        $this->assertNull($obj0->getZIndex());
    }

    /**
     * Tests the jsonSerialize() method.
     *
     * @return void
     */
    public function testJsonSerialize() {

        $obj = new \WBW\Bundle\HighchartsBundle\API\Chart\HighchartsSeries(true);

        $this->assertEquals([], $obj->jsonSerialize());
    }

    /**
     * Tests the toArray() method.
     *
     * @return void
     */
    public function testToArray() {

        $obj = new \WBW\Bundle\HighchartsBundle\API\Chart\HighchartsSeries(true);

        $obj->setData(["data" => "8d777f385d3dfec8815d20f7496026dc"]);

        $res1 = ["data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"]];
        $this->assertEquals($res1, $obj->toArray());

        $obj->setDataParser("26911c12e7a30f2bebc2a377f4f64a22");

        $res2 = ["data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataParser" => "26911c12e7a30f2bebc2a377f4f64a22"];
        $this->assertEquals($res2, $obj->toArray());

        $obj->setDataURL("2ebe18c8193e5056fb035560a9469c0a");

        $res3 = ["data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataParser" => "26911c12e7a30f2bebc2a377f4f64a22", "dataURL" => "2ebe18c8193e5056fb035560a9469c0a"];
        $this->assertEquals($res3, $obj->toArray());

        $obj->setId("b80bb7740288fda1f201890375a60c8f");

        $res4 = ["data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataParser" => "26911c12e7a30f2bebc2a377f4f64a22", "dataURL" => "2ebe18c8193e5056fb035560a9469c0a", "id" => "b80bb7740288fda1f201890375a60c8f"];
        $this->assertEquals($res4, $obj->toArray());

        $obj->setIndex(0);

        $res5 = ["data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataParser" => "26911c12e7a30f2bebc2a377f4f64a22", "dataURL" => "2ebe18c8193e5056fb035560a9469c0a", "id" => "b80bb7740288fda1f201890375a60c8f", "index" => 0];
        $this->assertEquals($res5, $obj->toArray());

        $obj->setLegendIndex(39);

        $res6 = ["data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataParser" => "26911c12e7a30f2bebc2a377f4f64a22", "dataURL" => "2ebe18c8193e5056fb035560a9469c0a", "id" => "b80bb7740288fda1f201890375a60c8f", "index" => 0, "legendIndex" => 39];
        $this->assertEquals($res6, $obj->toArray());

        $obj->setName("b068931cc450442b63f5b3d276ea4297");

        $res7 = ["data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataParser" => "26911c12e7a30f2bebc2a377f4f64a22", "dataURL" => "2ebe18c8193e5056fb035560a9469c0a", "id" => "b80bb7740288fda1f201890375a60c8f", "index" => 0, "legendIndex" => 39, "name" => "b068931cc450442b63f5b3d276ea4297"];
        $this->assertEquals($res7, $obj->toArray());

        $obj->setStack("fac2a47adace059aff113283a03f6760");

        $res8 = ["data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataParser" => "26911c12e7a30f2bebc2a377f4f64a22", "dataURL" => "2ebe18c8193e5056fb035560a9469c0a", "id" => "b80bb7740288fda1f201890375a60c8f", "index" => 0, "legendIndex" => 39, "name" => "b068931cc450442b63f5b3d276ea4297", "stack" => "fac2a47adace059aff113283a03f6760"];
        $this->assertEquals($res8, $obj->toArray());

        $obj->setType("waterfall");

        $res9 = ["data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataParser" => "26911c12e7a30f2bebc2a377f4f64a22", "dataURL" => "2ebe18c8193e5056fb035560a9469c0a", "id" => "b80bb7740288fda1f201890375a60c8f", "index" => 0, "legendIndex" => 39, "name" => "b068931cc450442b63f5b3d276ea4297", "stack" => "fac2a47adace059aff113283a03f6760", "type" => "waterfall"];
        $this->assertEquals($res9, $obj->toArray());

        $obj->setXAxis(68);

        $res10 = ["data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataParser" => "26911c12e7a30f2bebc2a377f4f64a22", "dataURL" => "2ebe18c8193e5056fb035560a9469c0a", "id" => "b80bb7740288fda1f201890375a60c8f", "index" => 0, "legendIndex" => 39, "name" => "b068931cc450442b63f5b3d276ea4297", "stack" => "fac2a47adace059aff113283a03f6760", "type" => "waterfall", "xAxis" => 68];
        $this->assertEquals($res10, $obj->toArray());

        $obj->setYAxis(5);

        $res11 = ["data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataParser" => "26911c12e7a30f2bebc2a377f4f64a22", "dataURL" => "2ebe18c8193e5056fb035560a9469c0a", "id" => "b80bb7740288fda1f201890375a60c8f", "index" => 0, "legendIndex" => 39, "name" => "b068931cc450442b63f5b3d276ea4297", "stack" => "fac2a47adace059aff113283a03f6760", "type" => "waterfall", "xAxis" => 68, "yAxis" => 5];
        $this->assertEquals($res11, $obj->toArray());

        $obj->setZIndex(47);

        $res12 = ["data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataParser" => "26911c12e7a30f2bebc2a377f4f64a22", "dataURL" => "2ebe18c8193e5056fb035560a9469c0a", "id" => "b80bb7740288fda1f201890375a60c8f", "index" => 0, "legendIndex" => 39, "name" => "b068931cc450442b63f5b3d276ea4297", "stack" => "fac2a47adace059aff113283a03f6760", "type" => "waterfall", "xAxis" => 68, "yAxis" => 5, "zIndex" => 47];
        $this->assertEquals($res12, $obj->toArray());
    }

}
