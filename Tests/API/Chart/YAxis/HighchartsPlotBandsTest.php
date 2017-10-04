<?php

/*
 * This file is part of the WBWHighchartsBundle package.
 *
 * (c) 2017 WBW
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\HighchartsBundle\Tests\API\Chart\YAxis;

use PHPUnit_Framework_TestCase;
use WBW\HighchartsBundle\API\Chart\YAxis\HighchartsPlotBands;
use WBW\HighchartsBundle\API\Chart\YAxis\PlotBands\HighchartsLabel;

/**
 * Highcharts plot bands test.
 *
 * @author WBW <https://github.com/webeweb/WBWHighchartsBundle>
 * @package WBW\HighchartsBundle\Tests\API\Chart\YAxis
 * @version 5.0.14
 */
final class HighchartsPlotBandsTest extends PHPUnit_Framework_TestCase {

	/**
	 * Test the clear() method.
	 *
	 * @return void
	 */
	public function testClear() {

		$obj = new HighchartsPlotBands(false);

		$obj->clear();
		$this->assertEquals([], $obj->toArray(), 'The method toArray() does not return the expected array');
	}

	/**
	 * Tests the newLabel() method.
	 *
	 * @return void.
	 */
	public function testNewLabel() {

		$obj = new HighchartsPlotBands(false);

		$res = $obj->newLabel();
		$this->assertInstanceOf(HighchartsLabel::class, $res, 'The method newLabel() does not return the expected class');
	}

	/**
	 * Test the toArray() method.
	 *
	 * @return void
	 */
	public function testToArray() {

		$obj = new HighchartsPlotBands(false);

		$res = ["borderWidth" => 0, "outerRadius" => "100%", "thickness" => "10"];
		$this->assertEquals($res, $obj->toArray(), 'The method toArray() does not return the expected array');

		$obj->setBorderColor("97da935a74593c55d78be9d1295aa994");

		$res1 = ["borderWidth" => 0, "outerRadius" => "100%", "thickness" => "10", "borderColor" => "97da935a74593c55d78be9d1295aa994"];
		$this->assertEquals($res1, $obj->toArray(), 'The method toArray() does not return the expected array with border color');

		$obj->setClassName("6f66e878c62db60568a3487869695820");

		$res2 = ["borderWidth" => 0, "outerRadius" => "100%", "thickness" => "10", "borderColor" => "97da935a74593c55d78be9d1295aa994", "className" => "6f66e878c62db60568a3487869695820"];
		$this->assertEquals($res2, $obj->toArray(), 'The method toArray() does not return the expected array with class name');

		$obj->setColor("70dda5dfb8053dc6d1c492574bce9bfd");

		$res3 = ["borderWidth" => 0, "outerRadius" => "100%", "thickness" => "10", "borderColor" => "97da935a74593c55d78be9d1295aa994", "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd"];
		$this->assertEquals($res3, $obj->toArray(), 'The method toArray() does not return the expected array with color');

		$obj->setEvents(["events" => "16908b0605f2645dfcb4c3a8d248cef3"]);

		$res4 = ["borderWidth" => 0, "outerRadius" => "100%", "thickness" => "10", "borderColor" => "97da935a74593c55d78be9d1295aa994", "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "events" => ["events" => "16908b0605f2645dfcb4c3a8d248cef3"]];
		$this->assertEquals($res4, $obj->toArray(), 'The method toArray() does not return the expected array with events');

		$obj->setFrom(45);

		$res5 = ["borderWidth" => 0, "outerRadius" => "100%", "thickness" => "10", "borderColor" => "97da935a74593c55d78be9d1295aa994", "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "events" => ["events" => "16908b0605f2645dfcb4c3a8d248cef3"], "from" => 45];
		$this->assertEquals($res5, $obj->toArray(), 'The method toArray() does not return the expected array with from');

		$obj->setId("b80bb7740288fda1f201890375a60c8f");

		$res6 = ["borderWidth" => 0, "outerRadius" => "100%", "thickness" => "10", "borderColor" => "97da935a74593c55d78be9d1295aa994", "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "events" => ["events" => "16908b0605f2645dfcb4c3a8d248cef3"], "from" => 45, "id" => "b80bb7740288fda1f201890375a60c8f"];
		$this->assertEquals($res6, $obj->toArray(), 'The method toArray() does not return the expected array with id');

		$obj->setInnerRadius(99);

		$res7 = ["borderWidth" => 0, "outerRadius" => "100%", "thickness" => "10", "borderColor" => "97da935a74593c55d78be9d1295aa994", "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "events" => ["events" => "16908b0605f2645dfcb4c3a8d248cef3"], "from" => 45, "id" => "b80bb7740288fda1f201890375a60c8f", "innerRadius" => 99];
		$this->assertEquals($res7, $obj->toArray(), 'The method toArray() does not return the expected array with inner radius');

		$obj->newLabel();

		$res8 = ["borderWidth" => 0, "outerRadius" => "100%", "thickness" => "10", "borderColor" => "97da935a74593c55d78be9d1295aa994", "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "events" => ["events" => "16908b0605f2645dfcb4c3a8d248cef3"], "from" => 45, "id" => "b80bb7740288fda1f201890375a60c8f", "innerRadius" => 99, "label" => []];
		$this->assertEquals($res8, $obj->toArray(), 'The method toArray() does not return the expected array with label');

		$obj->setTo(79);

		$res9 = ["borderWidth" => 0, "outerRadius" => "100%", "thickness" => "10", "borderColor" => "97da935a74593c55d78be9d1295aa994", "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "events" => ["events" => "16908b0605f2645dfcb4c3a8d248cef3"], "from" => 45, "id" => "b80bb7740288fda1f201890375a60c8f", "innerRadius" => 99, "label" => [], "to" => 79];
		$this->assertEquals($res9, $obj->toArray(), 'The method toArray() does not return the expected array with to');

		$obj->setZIndex(37);

		$res10 = ["borderWidth" => 0, "outerRadius" => "100%", "thickness" => "10", "borderColor" => "97da935a74593c55d78be9d1295aa994", "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "events" => ["events" => "16908b0605f2645dfcb4c3a8d248cef3"], "from" => 45, "id" => "b80bb7740288fda1f201890375a60c8f", "innerRadius" => 99, "label" => [], "to" => 79, "zIndex" => 37];
		$this->assertEquals($res10, $obj->toArray(), 'The method toArray() does not return the expected array with z index');
	}

}
