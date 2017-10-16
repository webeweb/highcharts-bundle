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

/**
 * Highcharts series test.
 *
 * @author WBW <https://github.com/webeweb/WBWHighchartsBundle>
 * @package WBW\HighchartsBundle\Tests\API\Chart
 * @version 5.0.14
 */
final class HighchartsSeriesTest extends PHPUnit_Framework_TestCase {

	/**
	 * Test the __construct() method.
	 *
	 * @return void
	 */
	public function testConstructor() {

		$obj1 = new \WBW\HighchartsBundle\API\Chart\HighchartsSeries(true);

		$this->assertEquals(null, $obj1->getData(), "The method getData() does not return the expected value");
		$this->assertEquals(null, $obj1->getDataParser(), "The method getDataParser() does not return the expected value");
		$this->assertEquals(null, $obj1->getDataURL(), "The method getDataURL() does not return the expected value");
		$this->assertEquals(null, $obj1->getId(), "The method getId() does not return the expected value");
		$this->assertEquals(null, $obj1->getIndex(), "The method getIndex() does not return the expected value");
		$this->assertEquals(null, $obj1->getLegendIndex(), "The method getLegendIndex() does not return the expected value");
		$this->assertEquals(null, $obj1->getName(), "The method getName() does not return the expected value");
		$this->assertEquals(null, $obj1->getStack(), "The method getStack() does not return the expected value");
		$this->assertEquals(null, $obj1->getType(), "The method getType() does not return the expected value");
		$this->assertEquals(null, $obj1->getXAxis(), "The method getXAxis() does not return the expected value");
		$this->assertEquals(null, $obj1->getYAxis(), "The method getYAxis() does not return the expected value");
		$this->assertEquals(null, $obj1->getZIndex(), "The method getZIndex() does not return the expected value");

		$obj0 = new \WBW\HighchartsBundle\API\Chart\HighchartsSeries(false);

		$this->assertEquals(null, $obj0->getData(), "The method getData() does not return the expected value");
		$this->assertEquals(null, $obj0->getDataParser(), "The method getDataParser() does not return the expected value");
		$this->assertEquals(null, $obj0->getDataURL(), "The method getDataURL() does not return the expected value");
		$this->assertEquals(null, $obj0->getId(), "The method getId() does not return the expected value");
		$this->assertEquals(null, $obj0->getIndex(), "The method getIndex() does not return the expected value");
		$this->assertEquals(null, $obj0->getLegendIndex(), "The method getLegendIndex() does not return the expected value");
		$this->assertEquals(null, $obj0->getName(), "The method getName() does not return the expected value");
		$this->assertEquals(null, $obj0->getStack(), "The method getStack() does not return the expected value");
		$this->assertEquals(null, $obj0->getType(), "The method getType() does not return the expected value");
		$this->assertEquals("0", $obj0->getXAxis(), "The method getXAxis() does not return the expected value");
		$this->assertEquals("0", $obj0->getYAxis(), "The method getYAxis() does not return the expected value");
		$this->assertEquals(null, $obj0->getZIndex(), "The method getZIndex() does not return the expected value");
	}

	/**
	 * Test the jsonSerialize() method.
	 *
	 * @return void
	 */
	public function testJsonSerialize() {

		$obj = new \WBW\HighchartsBundle\API\Chart\HighchartsSeries(true);

		$this->assertEquals([], $obj->jsonSerialize(), "The method jsonSerialize() does not return the expected value");
	}

	/**
	 * Test the toArray() method.
	 *
	 * @return void
	 */
	public function testToArray() {

		$obj = new \WBW\HighchartsBundle\API\Chart\HighchartsSeries(true);

		$obj->setData(["data" => "8d777f385d3dfec8815d20f7496026dc"]);

		$res1 = ["data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"]];
		$this->assertEquals($res1, $obj->toArray(), "The method toArray() does not return the expected array with data");

		$obj->setDataParser("26911c12e7a30f2bebc2a377f4f64a22");

		$res2 = ["data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataParser" => "26911c12e7a30f2bebc2a377f4f64a22"];
		$this->assertEquals($res2, $obj->toArray(), "The method toArray() does not return the expected array with data parser");

		$obj->setDataURL("2ebe18c8193e5056fb035560a9469c0a");

		$res3 = ["data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataParser" => "26911c12e7a30f2bebc2a377f4f64a22", "dataURL" => "2ebe18c8193e5056fb035560a9469c0a"];
		$this->assertEquals($res3, $obj->toArray(), "The method toArray() does not return the expected array with data URL");

		$obj->setId("b80bb7740288fda1f201890375a60c8f");

		$res4 = ["data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataParser" => "26911c12e7a30f2bebc2a377f4f64a22", "dataURL" => "2ebe18c8193e5056fb035560a9469c0a", "id" => "b80bb7740288fda1f201890375a60c8f"];
		$this->assertEquals($res4, $obj->toArray(), "The method toArray() does not return the expected array with id");

		$obj->setIndex(74);

		$res5 = ["data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataParser" => "26911c12e7a30f2bebc2a377f4f64a22", "dataURL" => "2ebe18c8193e5056fb035560a9469c0a", "id" => "b80bb7740288fda1f201890375a60c8f", "index" => 74];
		$this->assertEquals($res5, $obj->toArray(), "The method toArray() does not return the expected array with index");

		$obj->setLegendIndex(77);

		$res6 = ["data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataParser" => "26911c12e7a30f2bebc2a377f4f64a22", "dataURL" => "2ebe18c8193e5056fb035560a9469c0a", "id" => "b80bb7740288fda1f201890375a60c8f", "index" => 74, "legendIndex" => 77];
		$this->assertEquals($res6, $obj->toArray(), "The method toArray() does not return the expected array with legend index");

		$obj->setName("b068931cc450442b63f5b3d276ea4297");

		$res7 = ["data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataParser" => "26911c12e7a30f2bebc2a377f4f64a22", "dataURL" => "2ebe18c8193e5056fb035560a9469c0a", "id" => "b80bb7740288fda1f201890375a60c8f", "index" => 74, "legendIndex" => 77, "name" => "b068931cc450442b63f5b3d276ea4297"];
		$this->assertEquals($res7, $obj->toArray(), "The method toArray() does not return the expected array with name");

		$obj->setStack("fac2a47adace059aff113283a03f6760");

		$res8 = ["data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataParser" => "26911c12e7a30f2bebc2a377f4f64a22", "dataURL" => "2ebe18c8193e5056fb035560a9469c0a", "id" => "b80bb7740288fda1f201890375a60c8f", "index" => 74, "legendIndex" => 77, "name" => "b068931cc450442b63f5b3d276ea4297", "stack" => "fac2a47adace059aff113283a03f6760"];
		$this->assertEquals($res8, $obj->toArray(), "The method toArray() does not return the expected array with stack");

		$obj->setType("waterfall");

		$res9 = ["data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataParser" => "26911c12e7a30f2bebc2a377f4f64a22", "dataURL" => "2ebe18c8193e5056fb035560a9469c0a", "id" => "b80bb7740288fda1f201890375a60c8f", "index" => 74, "legendIndex" => 77, "name" => "b068931cc450442b63f5b3d276ea4297", "stack" => "fac2a47adace059aff113283a03f6760", "type" => "waterfall"];
		$this->assertEquals($res9, $obj->toArray(), "The method toArray() does not return the expected array with type");

		$obj->setXAxis(51);

		$res10 = ["data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataParser" => "26911c12e7a30f2bebc2a377f4f64a22", "dataURL" => "2ebe18c8193e5056fb035560a9469c0a", "id" => "b80bb7740288fda1f201890375a60c8f", "index" => 74, "legendIndex" => 77, "name" => "b068931cc450442b63f5b3d276ea4297", "stack" => "fac2a47adace059aff113283a03f6760", "type" => "waterfall", "xAxis" => 51];
		$this->assertEquals($res10, $obj->toArray(), "The method toArray() does not return the expected array with x axis");

		$obj->setYAxis(7);

		$res11 = ["data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataParser" => "26911c12e7a30f2bebc2a377f4f64a22", "dataURL" => "2ebe18c8193e5056fb035560a9469c0a", "id" => "b80bb7740288fda1f201890375a60c8f", "index" => 74, "legendIndex" => 77, "name" => "b068931cc450442b63f5b3d276ea4297", "stack" => "fac2a47adace059aff113283a03f6760", "type" => "waterfall", "xAxis" => 51, "yAxis" => 7];
		$this->assertEquals($res11, $obj->toArray(), "The method toArray() does not return the expected array with y axis");

		$obj->setZIndex(7);

		$res12 = ["data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataParser" => "26911c12e7a30f2bebc2a377f4f64a22", "dataURL" => "2ebe18c8193e5056fb035560a9469c0a", "id" => "b80bb7740288fda1f201890375a60c8f", "index" => 74, "legendIndex" => 77, "name" => "b068931cc450442b63f5b3d276ea4297", "stack" => "fac2a47adace059aff113283a03f6760", "type" => "waterfall", "xAxis" => 51, "yAxis" => 7, "zIndex" => 7];
		$this->assertEquals($res12, $obj->toArray(), "The method toArray() does not return the expected array with z index");
	}

}
