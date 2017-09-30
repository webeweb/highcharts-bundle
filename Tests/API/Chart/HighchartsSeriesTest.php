<?php

/*
 * This file is part of the HighchartsBundle.
 *
 * (c) 2017 WBW
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\HighchartsBundle\Tests\API\Chart;

use WBW\HighchartsBundle\API\Chart\HighchartsSeries;
use PHPUnit_Framework_TestCase;

/**
 * Highcharts series test.
 *
 * @author WBW <https://github.com/webeweb/WBWHighchartsBundle>
 * @package HighchartsBundle\Tests\API\Chart
 * @version 5.0.14
 */
final class HighchartsSeriesTest extends PHPUnit_Framework_TestCase {

	/**
	 * Test the toArray() method.
	 */
	public function testToArray() {

		$obj = new HighchartsSeries(false);

		$res = ["xAxis" => "0", "yAxis" => "0"];
		$this->assertEquals($res, $obj->toArray(), 'The method toArray() does not return the expected array');

		$obj->setData(["data" => "8d777f385d3dfec8815d20f7496026dc"]);

		$res1 = ["xAxis" => "0", "yAxis" => "0", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"]];
		$this->assertEquals($res1, $obj->toArray(), 'The method toArray() does not return the expected array with data');

		$obj->setId("b80bb7740288fda1f201890375a60c8f");

		$res2 = ["xAxis" => "0", "yAxis" => "0", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "id" => "b80bb7740288fda1f201890375a60c8f"];
		$this->assertEquals($res2, $obj->toArray(), 'The method toArray() does not return the expected array with id');

		$obj->setIndex(11);

		$res3 = ["xAxis" => "0", "yAxis" => "0", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "id" => "b80bb7740288fda1f201890375a60c8f", "index" => 11];
		$this->assertEquals($res3, $obj->toArray(), 'The method toArray() does not return the expected array with index');

		$obj->setLegendIndex(52);

		$res4 = ["xAxis" => "0", "yAxis" => "0", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "id" => "b80bb7740288fda1f201890375a60c8f", "index" => 11, "legendIndex" => 52];
		$this->assertEquals($res4, $obj->toArray(), 'The method toArray() does not return the expected array with legend index');

		$obj->setName("b068931cc450442b63f5b3d276ea4297");

		$res5 = ["xAxis" => "0", "yAxis" => "0", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "id" => "b80bb7740288fda1f201890375a60c8f", "index" => 11, "legendIndex" => 52, "name" => "b068931cc450442b63f5b3d276ea4297"];
		$this->assertEquals($res5, $obj->toArray(), 'The method toArray() does not return the expected array with name');

		$obj->setStack("fac2a47adace059aff113283a03f6760");

		$res6 = ["xAxis" => "0", "yAxis" => "0", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "id" => "b80bb7740288fda1f201890375a60c8f", "index" => 11, "legendIndex" => 52, "name" => "b068931cc450442b63f5b3d276ea4297", "stack" => "fac2a47adace059aff113283a03f6760"];
		$this->assertEquals($res6, $obj->toArray(), 'The method toArray() does not return the expected array with stack');

		$obj->setType("599dcce2998a6b40b1e38e8c6006cb0a");

		$res7 = ["xAxis" => "0", "yAxis" => "0", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "id" => "b80bb7740288fda1f201890375a60c8f", "index" => 11, "legendIndex" => 52, "name" => "b068931cc450442b63f5b3d276ea4297", "stack" => "fac2a47adace059aff113283a03f6760", "type" => "599dcce2998a6b40b1e38e8c6006cb0a"];
		$this->assertEquals($res7, $obj->toArray(), 'The method toArray() does not return the expected array with type');

		$obj->setZIndex(53);

		$res8 = ["xAxis" => "0", "yAxis" => "0", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "id" => "b80bb7740288fda1f201890375a60c8f", "index" => 11, "legendIndex" => 52, "name" => "b068931cc450442b63f5b3d276ea4297", "stack" => "fac2a47adace059aff113283a03f6760", "type" => "599dcce2998a6b40b1e38e8c6006cb0a", "zIndex" => 53];
		$this->assertEquals($res8, $obj->toArray(), 'The method toArray() does not return the expected array with z index');
	}
}

