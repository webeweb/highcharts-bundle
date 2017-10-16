<?php

/*
 * This file is part of the WBWHighchartsBundle package.
 *
 * (c) 2017 WBW
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\HighchartsBundle\Tests\API\Chart\Chart\Options3d\Frame;

use PHPUnit_Framework_TestCase;

/**
 * Highcharts back test.
 *
 * @author WBW <https://github.com/webeweb/WBWHighchartsBundle>
 * @package WBW\HighchartsBundle\Tests\API\Chart\Chart\Options3d\Frame
 * @version 5.0.14
 */
final class HighchartsBackTest extends PHPUnit_Framework_TestCase {

	/**
	 * Test the __construct() method.
	 *
	 * @return void
	 */
	public function testConstructor() {

		$obj1 = new \WBW\HighchartsBundle\API\Chart\Chart\Options3d\Frame\HighchartsBack(true);

		$this->assertEquals(null, $obj1->getColor(), "The method getColor() does not return the expected value");
		$this->assertEquals(null, $obj1->getSize(), "The method getSize() does not return the expected value");
		$this->assertEquals(null, $obj1->getVisible(), "The method getVisible() does not return the expected value");

		$obj0 = new \WBW\HighchartsBundle\API\Chart\Chart\Options3d\Frame\HighchartsBack(false);

		$this->assertEquals("transparent", $obj0->getColor(), "The method getColor() does not return the expected value");
		$this->assertEquals(1, $obj0->getSize(), "The method getSize() does not return the expected value");
		$this->assertEquals("default", $obj0->getVisible(), "The method getVisible() does not return the expected value");
	}

	/**
	 * Test the jsonSerialize() method.
	 *
	 * @return void
	 */
	public function testJsonSerialize() {

		$obj = new \WBW\HighchartsBundle\API\Chart\Chart\Options3d\Frame\HighchartsBack(true);

		$this->assertEquals([], $obj->jsonSerialize(), "The method jsonSerialize() does not return the expected value");
	}

	/**
	 * Test the toArray() method.
	 *
	 * @return void
	 */
	public function testToArray() {

		$obj = new \WBW\HighchartsBundle\API\Chart\Chart\Options3d\Frame\HighchartsBack(true);

		$obj->setColor("70dda5dfb8053dc6d1c492574bce9bfd");

		$res1 = ["color" => "70dda5dfb8053dc6d1c492574bce9bfd"];
		$this->assertEquals($res1, $obj->toArray(), "The method toArray() does not return the expected array with color");

		$obj->setSize(36);

		$res2 = ["color" => "70dda5dfb8053dc6d1c492574bce9bfd", "size" => 36];
		$this->assertEquals($res2, $obj->toArray(), "The method toArray() does not return the expected array with size");

		$obj->setVisible(false);

		$res3 = ["color" => "70dda5dfb8053dc6d1c492574bce9bfd", "size" => 36, "visible" => false];
		$this->assertEquals($res3, $obj->toArray(), "The method toArray() does not return the expected array with visible");
	}

}
