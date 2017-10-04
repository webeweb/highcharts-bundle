<?php

/*
 * This file is part of the WBWHighchartsBundle package.
 *
 * (c) 2017 WBW
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\HighchartsBundle\Tests\API\Chart\XAxis;

use PHPUnit_Framework_TestCase;
use WBW\HighchartsBundle\API\Chart\XAxis\HighchartsCrosshair;

/**
 * Highcharts crosshair test.
 *
 * @author WBW <https://github.com/webeweb/WBWHighchartsBundle>
 * @package WBW\HighchartsBundle\Tests\API\Chart\XAxis
 * @version 5.0.14
 */
final class HighchartsCrosshairTest extends PHPUnit_Framework_TestCase {

	/**
	 * Test the clear() method.
	 *
	 * @return void
	 */
	public function testClear() {

		$obj = new HighchartsCrosshair(false);

		$obj->clear();
		$this->assertEquals([], $obj->toArray(), "The method toArray() does not return the expected array");
	}

	/**
	 * Test the toArray() method.
	 *
	 * @return void
	 */
	public function testToArray() {

		$obj = new HighchartsCrosshair(false);

		$res = ["dashStyle" => "Solid", "snap" => true, "zIndex" => 2];
		$this->assertEquals($res, $obj->toArray(), "The method toArray() does not return the expected array");

		$obj->setClassName("6f66e878c62db60568a3487869695820");

		$res1 = ["dashStyle" => "Solid", "snap" => true, "zIndex" => 2, "className" => "6f66e878c62db60568a3487869695820"];
		$this->assertEquals($res1, $obj->toArray(), "The method toArray() does not return the expected array with class name");

		$obj->setColor("70dda5dfb8053dc6d1c492574bce9bfd");

		$res2 = ["dashStyle" => "Solid", "snap" => true, "zIndex" => 2, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd"];
		$this->assertEquals($res2, $obj->toArray(), "The method toArray() does not return the expected array with color");

		$obj->setWidth(21);

		$res3 = ["dashStyle" => "Solid", "snap" => true, "zIndex" => 2, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "width" => 21];
		$this->assertEquals($res3, $obj->toArray(), "The method toArray() does not return the expected array with width");
	}

}
