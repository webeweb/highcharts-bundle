<?php

/*
 * This file is part of the HighchartsBundle.
 *
 * (c) 2017 WBW
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\HighchartsBundle\Tests\API\Chart\PlotOptions\Spline;

use WBW\HighchartsBundle\API\Chart\PlotOptions\Spline\HighchartsZones;
use PHPUnit_Framework_TestCase;

/**
 * Highcharts zones test.
 *
 * @author WBW <https://github.com/webeweb/WBWHighchartsBundle>
 * @package HighchartsBundle\Tests\API\Chart\PlotOptions\Spline
 * @version 5.0.14
 */
final class HighchartsZonesTest extends PHPUnit_Framework_TestCase {

	/**
	 * Test the toArray() method.
	 */
	public function testToArray() {

		$obj = new HighchartsZones(false);

		$obj->setClassName("6f66e878c62db60568a3487869695820");

		$res1 = ["className" => "6f66e878c62db60568a3487869695820"];
		$this->assertEquals($res1, $obj->toArray(), 'The method toArray() does not return the expected array with class name');

		$obj->setColor("70dda5dfb8053dc6d1c492574bce9bfd");

		$res2 = ["className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd"];
		$this->assertEquals($res2, $obj->toArray(), 'The method toArray() does not return the expected array with color');

		$obj->setDashStyle("5ad5e24042182b1974cdf57345defe8e");

		$res3 = ["className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "dashStyle" => "5ad5e24042182b1974cdf57345defe8e"];
		$this->assertEquals($res3, $obj->toArray(), 'The method toArray() does not return the expected array with dash style');

		$obj->setFillColor("1fde055d3ff900e04ca08bc82066d7fd");

		$res4 = ["className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "dashStyle" => "5ad5e24042182b1974cdf57345defe8e", "fillColor" => "1fde055d3ff900e04ca08bc82066d7fd"];
		$this->assertEquals($res4, $obj->toArray(), 'The method toArray() does not return the expected array with fill color');

		$obj->setValue(73);

		$res5 = ["className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "dashStyle" => "5ad5e24042182b1974cdf57345defe8e", "fillColor" => "1fde055d3ff900e04ca08bc82066d7fd", "value" => 73];
		$this->assertEquals($res5, $obj->toArray(), 'The method toArray() does not return the expected array with value');
	}
}
