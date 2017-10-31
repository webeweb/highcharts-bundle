<?php

/*
 * This file is part of the WBWHighchartsBundle package.
 *
 * (c) 2017 NdC/WBW
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\HighchartsBundle\Tests\API\Chart\Chart\ResetZoomButton;

use PHPUnit_Framework_TestCase;

/**
 * Highcharts position test.
 *
 * @author NdC/WBW <https://github.com/webeweb/>
 * @package WBW\Bundle\HighchartsBundle\Tests\API\Chart\Chart\ResetZoomButton
 * @version 5.0.14
 */
final class HighchartsPositionTest extends PHPUnit_Framework_TestCase {

	/**
	 * Tests the __construct() method.
	 *
	 * @return void
	 */
	public function testConstructor() {

		$obj1 = new \WBW\Bundle\HighchartsBundle\API\Chart\Chart\ResetZoomButton\HighchartsPosition(true);

		$this->assertEquals(null, $obj1->getAlign(), "The method getAlign() does not return the expected value");
		$this->assertEquals(null, $obj1->getVerticalAlign(), "The method getVerticalAlign() does not return the expected value");
		$this->assertEquals(null, $obj1->getX(), "The method getX() does not return the expected value");
		$this->assertEquals(null, $obj1->getY(), "The method getY() does not return the expected value");

		$obj0 = new \WBW\Bundle\HighchartsBundle\API\Chart\Chart\ResetZoomButton\HighchartsPosition(false);

		$this->assertEquals(null, $obj0->getAlign(), "The method getAlign() does not return the expected value");
		$this->assertEquals("top", $obj0->getVerticalAlign(), "The method getVerticalAlign() does not return the expected value");
		$this->assertEquals(-10, $obj0->getX(), "The method getX() does not return the expected value");
		$this->assertEquals(10, $obj0->getY(), "The method getY() does not return the expected value");
    }

	/**
	 * Tests the jsonSerialize() method.
	 *
	 * @return void
	 */
	public function testJsonSerialize() {

		$obj = new \WBW\Bundle\HighchartsBundle\API\Chart\Chart\ResetZoomButton\HighchartsPosition(true);

		$this->assertEquals([], $obj->jsonSerialize(), "The method jsonSerialize() does not return the expected value");
	}

	/**
	 * Tests the toArray() method.
	 *
	 * @return void
	 */
	public function testToArray() {

		$obj = new \WBW\Bundle\HighchartsBundle\API\Chart\Chart\ResetZoomButton\HighchartsPosition(true);

		$obj->setAlign("f792d1afb0399dce47533bead9d71a8a");

		$res1 = ["align" => "f792d1afb0399dce47533bead9d71a8a"];
		$this->assertEquals($res1, $obj->toArray(), "The method toArray() does not return the expected array with align");

		$obj->setVerticalAlign("bottom");

		$res2 = ["align" => "f792d1afb0399dce47533bead9d71a8a", "verticalAlign" => "bottom"];
		$this->assertEquals($res2, $obj->toArray(), "The method toArray() does not return the expected array with vertical align");

		$obj->setX(83);

		$res3 = ["align" => "f792d1afb0399dce47533bead9d71a8a", "verticalAlign" => "bottom", "x" => 83];
		$this->assertEquals($res3, $obj->toArray(), "The method toArray() does not return the expected array with x");

		$obj->setY(34);

		$res4 = ["align" => "f792d1afb0399dce47533bead9d71a8a", "verticalAlign" => "bottom", "x" => 83, "y" => 34];
		$this->assertEquals($res4, $obj->toArray(), "The method toArray() does not return the expected array with y");
	}

}
