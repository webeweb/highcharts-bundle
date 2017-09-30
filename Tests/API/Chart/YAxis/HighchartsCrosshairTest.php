<?php

/*
 * This file is part of the HighchartsBundle.
 *
 * (c) 2017 WBW
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\HighchartsBundle\Tests\API\Chart\YAxis;

use WBW\HighchartsBundle\API\Chart\YAxis\HighchartsCrosshair;
use PHPUnit_Framework_TestCase;

/**
 * Highcharts crosshair test.
 *
 * @author WBW <https://github.com/webeweb/WBWHighchartsBundle>
 * @package HighchartsBundle\Tests\API\Chart\YAxis
 * @version 5.0.14
 */
final class HighchartsCrosshairTest extends PHPUnit_Framework_TestCase {

	/**
	 * Test the toArray() method.
	 */
	public function testToArray() {

		$obj = new HighchartsCrosshair(false);

		$res = ["dashStyle" => "Solid", "snap" => true, "zIndex" => 2];
		$this->assertEquals($res, $obj->toArray(), 'The method toArray() does not return the expected array');

		$obj->setClassName("6f66e878c62db60568a3487869695820");

		$res1 = ["dashStyle" => "Solid", "snap" => true, "zIndex" => 2, "className" => "6f66e878c62db60568a3487869695820"];
		$this->assertEquals($res1, $obj->toArray(), 'The method toArray() does not return the expected array with class name');

		$obj->setColor("70dda5dfb8053dc6d1c492574bce9bfd");

		$res2 = ["dashStyle" => "Solid", "snap" => true, "zIndex" => 2, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd"];
		$this->assertEquals($res2, $obj->toArray(), 'The method toArray() does not return the expected array with color');

		$obj->setWidth(97);

		$res3 = ["dashStyle" => "Solid", "snap" => true, "zIndex" => 2, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "width" => 97];
		$this->assertEquals($res3, $obj->toArray(), 'The method toArray() does not return the expected array with width');
	}
}

