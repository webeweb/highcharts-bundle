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

/**
 * Highcharts data test.
 *
 * @author WBW <https://github.com/webeweb/WBWHighchartsBundle>
 * @package WBW\HighchartsBundle\Tests\API\Chart\Series\Errorbar
 * @version 5.0.14
 */
final class HighchartsDataTest extends PHPUnit_Framework_TestCase {

	/**
	 * Test the __construct() method.
	 *
	 * @return void
	 */
	public function testConstructor() {

		$obj1 = new \WBW\HighchartsBundle\API\Chart\Series\Errorbar\HighchartsData(true);

		$this->assertEquals(null, $obj1->getClassName(), "The method getClassName() does not return the expected value");
		$this->assertEquals(null, $obj1->getColor(), "The method getColor() does not return the expected value");
		$this->assertEquals(null, $obj1->getColorIndex(), "The method getColorIndex() does not return the expected value");
		$this->assertEquals(null, $obj1->getDescription(), "The method getDescription() does not return the expected value");
		$this->assertEquals(null, $obj1->getEvents(), "The method getEvents() does not return the expected value");
		$this->assertEquals(null, $obj1->getHigh(), "The method getHigh() does not return the expected value");
		$this->assertEquals(null, $obj1->getId(), "The method getId() does not return the expected value");
		$this->assertEquals(null, $obj1->getLabelrank(), "The method getLabelrank() does not return the expected value");
		$this->assertEquals(null, $obj1->getLow(), "The method getLow() does not return the expected value");
		$this->assertEquals(null, $obj1->getName(), "The method getName() does not return the expected value");
		$this->assertEquals(null, $obj1->getSelected(), "The method getSelected() does not return the expected value");
		$this->assertEquals(null, $obj1->getX(), "The method getX() does not return the expected value");

		$obj0 = new \WBW\HighchartsBundle\API\Chart\Series\Errorbar\HighchartsData(false);

		$this->assertEquals(null, $obj0->getClassName(), "The method getClassName() does not return the expected value");
		$this->assertEquals(null, $obj0->getColor(), "The method getColor() does not return the expected value");
		$this->assertEquals(null, $obj0->getColorIndex(), "The method getColorIndex() does not return the expected value");
		$this->assertEquals(null, $obj0->getDescription(), "The method getDescription() does not return the expected value");
		$this->assertEquals(null, $obj0->getEvents(), "The method getEvents() does not return the expected value");
		$this->assertEquals(null, $obj0->getHigh(), "The method getHigh() does not return the expected value");
		$this->assertEquals(null, $obj0->getId(), "The method getId() does not return the expected value");
		$this->assertEquals(null, $obj0->getLabelrank(), "The method getLabelrank() does not return the expected value");
		$this->assertEquals(null, $obj0->getLow(), "The method getLow() does not return the expected value");
		$this->assertEquals(null, $obj0->getName(), "The method getName() does not return the expected value");
		$this->assertEquals(false, $obj0->getSelected(), "The method getSelected() does not return the expected value");
		$this->assertEquals(null, $obj0->getX(), "The method getX() does not return the expected value");
	}

	/**
	 * Test the jsonSerialize() method.
	 *
	 * @return void
	 */
	public function testJsonSerialize() {

		$obj = new \WBW\HighchartsBundle\API\Chart\Series\Errorbar\HighchartsData(true);

		$this->assertEquals([], $obj->jsonSerialize(), "The method jsonSerialize() does not return the expected value");
	}

	/**
	 * Tests the newEvents() method.
	 *
	 * @return void.
	 */
	public function testNewEvents() {

		$obj = new \WBW\HighchartsBundle\API\Chart\Series\Errorbar\HighchartsData(false);

		$res = $obj->newEvents();
		$this->assertInstanceOf(\WBW\HighchartsBundle\API\Chart\Series\Errorbar\Data\HighchartsEvents::class, $res, "The method newEvents() does not return the expected object");
	}

	/**
	 * Test the toArray() method.
	 *
	 * @return void
	 */
	public function testToArray() {

		$obj = new \WBW\HighchartsBundle\API\Chart\Series\Errorbar\HighchartsData(true);

		$obj->setClassName("6f66e878c62db60568a3487869695820");

		$res1 = ["className" => "6f66e878c62db60568a3487869695820"];
		$this->assertEquals($res1, $obj->toArray(), "The method toArray() does not return the expected array with class name");

		$obj->setColor("70dda5dfb8053dc6d1c492574bce9bfd");

		$res2 = ["className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd"];
		$this->assertEquals($res2, $obj->toArray(), "The method toArray() does not return the expected array with color");

		$obj->setColorIndex(27);

		$res3 = ["className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 27];
		$this->assertEquals($res3, $obj->toArray(), "The method toArray() does not return the expected array with color index");

		$obj->setDescription("67daf92c833c41c95db874e18fcb2786");

		$res4 = ["className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 27, "description" => "67daf92c833c41c95db874e18fcb2786"];
		$this->assertEquals($res4, $obj->toArray(), "The method toArray() does not return the expected array with description");

		$obj->setEvents(new \WBW\HighchartsBundle\API\Chart\Series\Errorbar\Data\HighchartsEvents());

		$res5 = ["className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 27, "description" => "67daf92c833c41c95db874e18fcb2786", "events" => []];
		$this->assertEquals($res5, $obj->toArray(), "The method toArray() does not return the expected array with events");

		$obj->setHigh(68);

		$res6 = ["className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 27, "description" => "67daf92c833c41c95db874e18fcb2786", "events" => [], "high" => 68];
		$this->assertEquals($res6, $obj->toArray(), "The method toArray() does not return the expected array with high");

		$obj->setId("b80bb7740288fda1f201890375a60c8f");

		$res7 = ["className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 27, "description" => "67daf92c833c41c95db874e18fcb2786", "events" => [], "high" => 68, "id" => "b80bb7740288fda1f201890375a60c8f"];
		$this->assertEquals($res7, $obj->toArray(), "The method toArray() does not return the expected array with id");

		$obj->setLabelrank(99);

		$res8 = ["className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 27, "description" => "67daf92c833c41c95db874e18fcb2786", "events" => [], "high" => 68, "id" => "b80bb7740288fda1f201890375a60c8f", "labelrank" => 99];
		$this->assertEquals($res8, $obj->toArray(), "The method toArray() does not return the expected array with labelrank");

		$obj->setLow(79);

		$res9 = ["className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 27, "description" => "67daf92c833c41c95db874e18fcb2786", "events" => [], "high" => 68, "id" => "b80bb7740288fda1f201890375a60c8f", "labelrank" => 99, "low" => 79];
		$this->assertEquals($res9, $obj->toArray(), "The method toArray() does not return the expected array with low");

		$obj->setName("b068931cc450442b63f5b3d276ea4297");

		$res10 = ["className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 27, "description" => "67daf92c833c41c95db874e18fcb2786", "events" => [], "high" => 68, "id" => "b80bb7740288fda1f201890375a60c8f", "labelrank" => 99, "low" => 79, "name" => "b068931cc450442b63f5b3d276ea4297"];
		$this->assertEquals($res10, $obj->toArray(), "The method toArray() does not return the expected array with name");

		$obj->setSelected(0);

		$res11 = ["className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 27, "description" => "67daf92c833c41c95db874e18fcb2786", "events" => [], "high" => 68, "id" => "b80bb7740288fda1f201890375a60c8f", "labelrank" => 99, "low" => 79, "name" => "b068931cc450442b63f5b3d276ea4297", "selected" => 0];
		$this->assertEquals($res11, $obj->toArray(), "The method toArray() does not return the expected array with selected");

		$obj->setX(53);

		$res12 = ["className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 27, "description" => "67daf92c833c41c95db874e18fcb2786", "events" => [], "high" => 68, "id" => "b80bb7740288fda1f201890375a60c8f", "labelrank" => 99, "low" => 79, "name" => "b068931cc450442b63f5b3d276ea4297", "selected" => 0, "x" => 53];
		$this->assertEquals($res12, $obj->toArray(), "The method toArray() does not return the expected array with x");
	}

}
