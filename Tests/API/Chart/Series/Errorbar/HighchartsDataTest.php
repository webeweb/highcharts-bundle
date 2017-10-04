<?php

/*
 * This file is part of the WBWHighchartsBundle package.
 *
 * (c) 2017 WBW
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\HighchartsBundle\Tests\API\Chart\Series\Errorbar;

use PHPUnit_Framework_TestCase;
use WBW\HighchartsBundle\API\Chart\Series\Errorbar\HighchartsData;
use WBW\HighchartsBundle\API\Chart\Series\Errorbar\Data\HighchartsEvents;

/**
 * Highcharts data test.
 *
 * @author WBW <https://github.com/webeweb/WBWHighchartsBundle>
 * @package WBW\HighchartsBundle\Tests\API\Chart\Series\Errorbar
 * @version 5.0.14
 */
final class HighchartsDataTest extends PHPUnit_Framework_TestCase {

	/**
	 * Test the clear() method.
	 *
	 * @return void
	 */
	public function testClear() {

		$obj = new HighchartsData(false);

		$obj->clear();
		$this->assertEquals([], $obj->toArray(), 'The method toArray() does not return the expected array');
	}

	/**
	 * Tests the newEvents() method.
	 *
	 * @return void.
	 */
	public function testNewEvents() {

		$obj = new HighchartsData(false);

		$res = $obj->newEvents();
		$this->assertInstanceOf(HighchartsEvents::class, $res, 'The method newEvents() does not return the expected class');
	}

	/**
	 * Test the toArray() method.
	 *
	 * @return void
	 */
	public function testToArray() {

		$obj = new HighchartsData(false);

		$res = ["selected" => false];
		$this->assertEquals($res, $obj->toArray(), 'The method toArray() does not return the expected array');

		$obj->setClassName("6f66e878c62db60568a3487869695820");

		$res1 = ["selected" => false, "className" => "6f66e878c62db60568a3487869695820"];
		$this->assertEquals($res1, $obj->toArray(), 'The method toArray() does not return the expected array with class name');

		$obj->setColor("70dda5dfb8053dc6d1c492574bce9bfd");

		$res2 = ["selected" => false, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd"];
		$this->assertEquals($res2, $obj->toArray(), 'The method toArray() does not return the expected array with color');

		$obj->setColorIndex(84);

		$res3 = ["selected" => false, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 84];
		$this->assertEquals($res3, $obj->toArray(), 'The method toArray() does not return the expected array with color index');

		$obj->setDescription("67daf92c833c41c95db874e18fcb2786");

		$res4 = ["selected" => false, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 84, "description" => "67daf92c833c41c95db874e18fcb2786"];
		$this->assertEquals($res4, $obj->toArray(), 'The method toArray() does not return the expected array with description');

		$obj->newEvents();

		$res5 = ["selected" => false, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 84, "description" => "67daf92c833c41c95db874e18fcb2786", "events" => []];
		$this->assertEquals($res5, $obj->toArray(), 'The method toArray() does not return the expected array with events');

		$obj->setHigh(90);

		$res6 = ["selected" => false, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 84, "description" => "67daf92c833c41c95db874e18fcb2786", "events" => [], "high" => 90];
		$this->assertEquals($res6, $obj->toArray(), 'The method toArray() does not return the expected array with high');

		$obj->setId("b80bb7740288fda1f201890375a60c8f");

		$res7 = ["selected" => false, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 84, "description" => "67daf92c833c41c95db874e18fcb2786", "events" => [], "high" => 90, "id" => "b80bb7740288fda1f201890375a60c8f"];
		$this->assertEquals($res7, $obj->toArray(), 'The method toArray() does not return the expected array with id');

		$obj->setLabelrank(32);

		$res8 = ["selected" => false, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 84, "description" => "67daf92c833c41c95db874e18fcb2786", "events" => [], "high" => 90, "id" => "b80bb7740288fda1f201890375a60c8f", "labelrank" => 32];
		$this->assertEquals($res8, $obj->toArray(), 'The method toArray() does not return the expected array with labelrank');

		$obj->setLow(87);

		$res9 = ["selected" => false, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 84, "description" => "67daf92c833c41c95db874e18fcb2786", "events" => [], "high" => 90, "id" => "b80bb7740288fda1f201890375a60c8f", "labelrank" => 32, "low" => 87];
		$this->assertEquals($res9, $obj->toArray(), 'The method toArray() does not return the expected array with low');

		$obj->setName("b068931cc450442b63f5b3d276ea4297");

		$res10 = ["selected" => false, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 84, "description" => "67daf92c833c41c95db874e18fcb2786", "events" => [], "high" => 90, "id" => "b80bb7740288fda1f201890375a60c8f", "labelrank" => 32, "low" => 87, "name" => "b068931cc450442b63f5b3d276ea4297"];
		$this->assertEquals($res10, $obj->toArray(), 'The method toArray() does not return the expected array with name');

		$obj->setX(59);

		$res11 = ["selected" => false, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 84, "description" => "67daf92c833c41c95db874e18fcb2786", "events" => [], "high" => 90, "id" => "b80bb7740288fda1f201890375a60c8f", "labelrank" => 32, "low" => 87, "name" => "b068931cc450442b63f5b3d276ea4297", "x" => 59];
		$this->assertEquals($res11, $obj->toArray(), 'The method toArray() does not return the expected array with x');
	}

}
