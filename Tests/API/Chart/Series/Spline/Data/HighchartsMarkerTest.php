<?php

/*
 * This file is part of the HighchartsBundle.
 *
 * (c) 2017 WBW
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\HighchartsBundle\Tests\API\Chart\Series\Spline\Data;

use WBW\HighchartsBundle\API\Chart\Series\Spline\Data\HighchartsMarker;
use PHPUnit_Framework_TestCase;

/**
 * Highcharts marker test.
 *
 * @author WBW <https://github.com/webeweb/WBWHighchartsBundle>
 * @package HighchartsBundle\Tests\API\Chart\Series\Spline\Data
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

		$obj->setEnabled(1);

		$res1 = ["lineColor" => "#ffffff", "lineWidth" => 0, "radius" => 4, "enabled" => 1];
		$this->assertEquals($res1, $obj->toArray(), 'The method toArray() does not return the expected array with enabled');

		$obj->setFillColor("1fde055d3ff900e04ca08bc82066d7fd");

		$res2 = ["lineColor" => "#ffffff", "lineWidth" => 0, "radius" => 4, "enabled" => 1, "fillColor" => "1fde055d3ff900e04ca08bc82066d7fd"];
		$this->assertEquals($res2, $obj->toArray(), 'The method toArray() does not return the expected array with fill color');

		$obj->setHeight(23);

		$res3 = ["lineColor" => "#ffffff", "lineWidth" => 0, "radius" => 4, "enabled" => 1, "fillColor" => "1fde055d3ff900e04ca08bc82066d7fd", "height" => 23];
		$this->assertEquals($res3, $obj->toArray(), 'The method toArray() does not return the expected array with height');

		$obj->setSymbol("97bff26855a8bfa63e05d5477e794b24");

		$res4 = ["lineColor" => "#ffffff", "lineWidth" => 0, "radius" => 4, "enabled" => 1, "fillColor" => "1fde055d3ff900e04ca08bc82066d7fd", "height" => 23, "symbol" => "97bff26855a8bfa63e05d5477e794b24"];
		$this->assertEquals($res4, $obj->toArray(), 'The method toArray() does not return the expected array with symbol');

		$obj->setWidth(89);

		$res5 = ["lineColor" => "#ffffff", "lineWidth" => 0, "radius" => 4, "enabled" => 1, "fillColor" => "1fde055d3ff900e04ca08bc82066d7fd", "height" => 23, "symbol" => "97bff26855a8bfa63e05d5477e794b24", "width" => 89];
		$this->assertEquals($res5, $obj->toArray(), 'The method toArray() does not return the expected array with width');
	}
}

