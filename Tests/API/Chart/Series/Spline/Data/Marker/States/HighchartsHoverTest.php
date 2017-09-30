<?php

/*
 * This file is part of the HighchartsBundle.
 *
 * (c) 2017 WBW
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\HighchartsBundle\Tests\API\Chart\Series\Spline\Data\Marker\States;

use WBW\HighchartsBundle\API\Chart\Series\Spline\Data\Marker\States\HighchartsHover;
use PHPUnit_Framework_TestCase;

/**
 * Highcharts hover test.
 *
 * @author WBW <https://github.com/webeweb/WBWHighchartsBundle>
 * @package WBW\HighchartsBundle\Tests\API\Chart\Series\Spline\Data\Marker\States
 * @version 5.0.14
 */
final class HighchartsHoverTest extends PHPUnit_Framework_TestCase {

	/**
	 * Test the toArray() method.
	 */
	public function testToArray() {

		$obj = new HighchartsHover(false);

		$res = ["enabled" => true, "lineColor" => "#ffffff", "lineWidth" => 0, "lineWidthPlus" => 1, "radiusPlus" => 2];
		$this->assertEquals($res, $obj->toArray(), 'The method toArray() does not return the expected array');

		$obj->setFillColor("1fde055d3ff900e04ca08bc82066d7fd");

		$res1 = ["enabled" => true, "lineColor" => "#ffffff", "lineWidth" => 0, "lineWidthPlus" => 1, "radiusPlus" => 2, "fillColor" => "1fde055d3ff900e04ca08bc82066d7fd"];
		$this->assertEquals($res1, $obj->toArray(), 'The method toArray() does not return the expected array with fill color');

		$obj->setRadius(41);

		$res2 = ["enabled" => true, "lineColor" => "#ffffff", "lineWidth" => 0, "lineWidthPlus" => 1, "radiusPlus" => 2, "fillColor" => "1fde055d3ff900e04ca08bc82066d7fd", "radius" => 41];
		$this->assertEquals($res2, $obj->toArray(), 'The method toArray() does not return the expected array with radius');
	}
}

