<?php

/*
 * This file is part of the HighchartsBundle.
 *
 * (c) 2017 WBW
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\HighchartsBundle\Tests\API\Chart\Series\Polygon;

use WBW\HighchartsBundle\API\Chart\Series\Polygon\HighchartsMarker;
use PHPUnit_Framework_TestCase;

/**
 * Highcharts marker test.
 *
 * @author WBW <https://github.com/webeweb/WBWHighchartsBundle>
 * @package HighchartsBundle\Tests\API\Chart\Series\Polygon
 * @version 5.0.14
 */
final class HighchartsMarkerTest extends PHPUnit_Framework_TestCase {

	/**
	 * Test the toArray() method.
	 */
	public function testToArray() {

		$obj = new HighchartsMarker(false);

		$res = ["lineColor" => "#ffffff", "lineWidth" => 0, "radius" => 4];
		$this->assertEquals($res, $obj->toArray(), 'The method toArray() does not return the expected array');

		$obj->setEnabled(0);

		$res1 = ["lineColor" => "#ffffff", "lineWidth" => 0, "radius" => 4, "enabled" => 0];
		$this->assertEquals($res1, $obj->toArray(), 'The method toArray() does not return the expected array with enabled');

		$obj->setFillColor("1fde055d3ff900e04ca08bc82066d7fd");

		$res2 = ["lineColor" => "#ffffff", "lineWidth" => 0, "radius" => 4, "enabled" => 0, "fillColor" => "1fde055d3ff900e04ca08bc82066d7fd"];
		$this->assertEquals($res2, $obj->toArray(), 'The method toArray() does not return the expected array with fill color');

		$obj->setHeight(74);

		$res3 = ["lineColor" => "#ffffff", "lineWidth" => 0, "radius" => 4, "enabled" => 0, "fillColor" => "1fde055d3ff900e04ca08bc82066d7fd", "height" => 74];
		$this->assertEquals($res3, $obj->toArray(), 'The method toArray() does not return the expected array with height');

		$obj->setSymbol("97bff26855a8bfa63e05d5477e794b24");

		$res4 = ["lineColor" => "#ffffff", "lineWidth" => 0, "radius" => 4, "enabled" => 0, "fillColor" => "1fde055d3ff900e04ca08bc82066d7fd", "height" => 74, "symbol" => "97bff26855a8bfa63e05d5477e794b24"];
		$this->assertEquals($res4, $obj->toArray(), 'The method toArray() does not return the expected array with symbol');

		$obj->setWidth(76);

		$res5 = ["lineColor" => "#ffffff", "lineWidth" => 0, "radius" => 4, "enabled" => 0, "fillColor" => "1fde055d3ff900e04ca08bc82066d7fd", "height" => 74, "symbol" => "97bff26855a8bfa63e05d5477e794b24", "width" => 76];
		$this->assertEquals($res5, $obj->toArray(), 'The method toArray() does not return the expected array with width');
	}
}

