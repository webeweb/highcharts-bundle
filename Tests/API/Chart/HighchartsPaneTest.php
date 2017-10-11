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
 * Highcharts pane test.
 *
 * @author WBW <https://github.com/webeweb/WBWHighchartsBundle>
 * @package WBW\HighchartsBundle\Tests\API\Chart
 * @version 5.0.14
 */
final class HighchartsPaneTest extends PHPUnit_Framework_TestCase {

	/**
	 * Test the __construct() method.
	 *
	 * @return void
	 */
	public function testConstructor() {

		$obj1 = new \WBW\HighchartsBundle\API\Chart\HighchartsPane(true);

		$this->assertEquals(null, $obj1->getBackground(), "The method getBackground() does not return the expected value");
		$this->assertEquals(null, $obj1->getCenter(), "The method getCenter() does not return the expected value");
		$this->assertEquals(null, $obj1->getEndAngle(), "The method getEndAngle() does not return the expected value");
		$this->assertEquals(null, $obj1->getSize(), "The method getSize() does not return the expected value");
		$this->assertEquals(null, $obj1->getStartAngle(), "The method getStartAngle() does not return the expected value");

		$obj0 = new \WBW\HighchartsBundle\API\Chart\HighchartsPane(false);

		$this->assertEquals(null, $obj0->getBackground(), "The method getBackground() does not return the expected value");
		$this->assertEquals(["50%", "50%"], $obj0->getCenter(), "The method getCenter() does not return the expected value");
		$this->assertEquals(null, $obj0->getEndAngle(), "The method getEndAngle() does not return the expected value");
		$this->assertEquals("85%", $obj0->getSize(), "The method getSize() does not return the expected value");
		$this->assertEquals(null, $obj0->getStartAngle(), "The method getStartAngle() does not return the expected value");
	}

	/**
	 * Test the jsonSerialize() method.
	 *
	 * @return void
	 */
	public function testJsonSerialize() {

		$obj = new \WBW\HighchartsBundle\API\Chart\HighchartsPane(true);

		$this->assertEquals([], $obj->jsonSerialize(), "The method jsonSerialize() does not return the expected value");
	}

	/**
	 * Test the toArray() method.
	 *
	 * @return void
	 */
	public function testToArray() {

		$obj = new \WBW\HighchartsBundle\API\Chart\HighchartsPane(true);

		$obj->setBackground(["background" => "d229bbf31eaeebc7c88897732d8b932d"]);

		$res1 = ["background" => ["background" => "d229bbf31eaeebc7c88897732d8b932d"]];
		$this->assertEquals($res1, $obj->toArray(), "The method toArray() does not return the expected array with background");

		$obj->setCenter(["center" => "adb115059e28d960fa8badfac5516667"]);

		$res2 = ["background" => ["background" => "d229bbf31eaeebc7c88897732d8b932d"], "center" => ["center" => "adb115059e28d960fa8badfac5516667"]];
		$this->assertEquals($res2, $obj->toArray(), "The method toArray() does not return the expected array with center");

		$obj->setEndAngle(45);

		$res3 = ["background" => ["background" => "d229bbf31eaeebc7c88897732d8b932d"], "center" => ["center" => "adb115059e28d960fa8badfac5516667"], "endAngle" => 45];
		$this->assertEquals($res3, $obj->toArray(), "The method toArray() does not return the expected array with end angle");

		$obj->setSize(91);

		$res4 = ["background" => ["background" => "d229bbf31eaeebc7c88897732d8b932d"], "center" => ["center" => "adb115059e28d960fa8badfac5516667"], "endAngle" => 45, "size" => 91];
		$this->assertEquals($res4, $obj->toArray(), "The method toArray() does not return the expected array with size");

		$obj->setStartAngle(74);

		$res5 = ["background" => ["background" => "d229bbf31eaeebc7c88897732d8b932d"], "center" => ["center" => "adb115059e28d960fa8badfac5516667"], "endAngle" => 45, "size" => 91, "startAngle" => 74];
		$this->assertEquals($res5, $obj->toArray(), "The method toArray() does not return the expected array with start angle");
	}

}
