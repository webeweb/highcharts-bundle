<?php

/*
 * This file is part of the WBWHighchartsBundle package.
 *
 * (c) 2017 WBW
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\HighchartsBundle\Tests\API\Chart\Series\Polygon\Data;

use PHPUnit_Framework_TestCase;
use WBW\HighchartsBundle\API\Chart\Series\Polygon\Data\HighchartsMarker;
use WBW\HighchartsBundle\API\Chart\Series\Polygon\Data\Marker\HighchartsStates;

/**
 * Highcharts marker test.
 *
 * @author WBW <https://github.com/webeweb/WBWHighchartsBundle>
 * @package WBW\HighchartsBundle\Tests\API\Chart\Series\Polygon\Data
 * @version 5.0.14
 */
final class HighchartsMarkerTest extends PHPUnit_Framework_TestCase {

	/**
	 * Test the clear() method.
	 *
	 * @return void
	 */
	public function testClear() {

		$obj = new HighchartsMarker(false);

		$obj->clear();
		$this->assertEquals([], $obj->toArray(), "The method toArray() does not return the expected array");
	}

	/**
	 * Tests the newStates() method.
	 *
	 * @return void.
	 */
	public function testNewStates() {

		$obj = new HighchartsMarker(false);

		$res = $obj->newStates();
		$this->assertInstanceOf(HighchartsStates::class, $res, "The method newStates() does not return the expected class");
	}

	/**
	 * Test the toArray() method.
	 *
	 * @return void
	 */
	public function testToArray() {

		$obj = new HighchartsMarker(false);

		$res = ["lineColor" => "#ffffff", "lineWidth" => 0, "radius" => 4];
		$this->assertEquals($res, $obj->toArray(), "The method toArray() does not return the expected array");

		$obj->setEnabled(1);

		$res1 = ["lineColor" => "#ffffff", "lineWidth" => 0, "radius" => 4, "enabled" => 1];
		$this->assertEquals($res1, $obj->toArray(), "The method toArray() does not return the expected array with enabled");

		$obj->setFillColor("1fde055d3ff900e04ca08bc82066d7fd");

		$res2 = ["lineColor" => "#ffffff", "lineWidth" => 0, "radius" => 4, "enabled" => 1, "fillColor" => "1fde055d3ff900e04ca08bc82066d7fd"];
		$this->assertEquals($res2, $obj->toArray(), "The method toArray() does not return the expected array with fill color");

		$obj->setHeight(76);

		$res3 = ["lineColor" => "#ffffff", "lineWidth" => 0, "radius" => 4, "enabled" => 1, "fillColor" => "1fde055d3ff900e04ca08bc82066d7fd", "height" => 76];
		$this->assertEquals($res3, $obj->toArray(), "The method toArray() does not return the expected array with height");

		$obj->newStates();

		$res4 = ["lineColor" => "#ffffff", "lineWidth" => 0, "radius" => 4, "enabled" => 1, "fillColor" => "1fde055d3ff900e04ca08bc82066d7fd", "height" => 76, "states" => []];
		$this->assertEquals($res4, $obj->toArray(), "The method toArray() does not return the expected array with states");

		$obj->setSymbol("triangle-down");

		$res5 = ["lineColor" => "#ffffff", "lineWidth" => 0, "radius" => 4, "enabled" => 1, "fillColor" => "1fde055d3ff900e04ca08bc82066d7fd", "height" => 76, "states" => [], "symbol" => "triangle-down"];
		$this->assertEquals($res5, $obj->toArray(), "The method toArray() does not return the expected array with symbol");

		$obj->setWidth(75);

		$res6 = ["lineColor" => "#ffffff", "lineWidth" => 0, "radius" => 4, "enabled" => 1, "fillColor" => "1fde055d3ff900e04ca08bc82066d7fd", "height" => 76, "states" => [], "symbol" => "triangle-down", "width" => 75];
		$this->assertEquals($res6, $obj->toArray(), "The method toArray() does not return the expected array with width");
	}

}
