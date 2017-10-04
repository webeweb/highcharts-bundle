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
use WBW\HighchartsBundle\API\Chart\YAxis\HighchartsPlotLines;
use WBW\HighchartsBundle\API\Chart\YAxis\PlotLines\HighchartsLabel;

/**
 * Highcharts plot lines test.
 *
 * @author WBW <https://github.com/webeweb/WBWHighchartsBundle>
 * @package WBW\HighchartsBundle\Tests\API\Chart\YAxis
 * @version 5.0.14
 */
final class HighchartsPlotLinesTest extends PHPUnit_Framework_TestCase {

	/**
	 * Test the clear() method.
	 *
	 * @return void
	 */
	public function testClear() {

		$obj = new HighchartsPlotLines(false);

		$obj->clear();
		$this->assertEquals([], $obj->toArray(), 'The method toArray() does not return the expected array');
	}

	/**
	 * Tests the newLabel() method.
	 *
	 * @return void.
	 */
	public function testNewLabel() {

		$obj = new HighchartsPlotLines(false);

		$res = $obj->newLabel();
		$this->assertInstanceOf(HighchartsLabel::class, $res, 'The method newLabel() does not return the expected class');
	}

	/**
	 * Test the toArray() method.
	 *
	 * @return void
	 */
	public function testToArray() {

		$obj = new HighchartsPlotLines(false);

		$res = ["dashStyle" => "Solid"];
		$this->assertEquals($res, $obj->toArray(), 'The method toArray() does not return the expected array');

		$obj->setClassName("6f66e878c62db60568a3487869695820");

		$res1 = ["dashStyle" => "Solid", "className" => "6f66e878c62db60568a3487869695820"];
		$this->assertEquals($res1, $obj->toArray(), 'The method toArray() does not return the expected array with class name');

		$obj->setColor("70dda5dfb8053dc6d1c492574bce9bfd");

		$res2 = ["dashStyle" => "Solid", "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd"];
		$this->assertEquals($res2, $obj->toArray(), 'The method toArray() does not return the expected array with color');

		$obj->setEvents(["events" => "16908b0605f2645dfcb4c3a8d248cef3"]);

		$res3 = ["dashStyle" => "Solid", "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "events" => ["events" => "16908b0605f2645dfcb4c3a8d248cef3"]];
		$this->assertEquals($res3, $obj->toArray(), 'The method toArray() does not return the expected array with events');

		$obj->setId("b80bb7740288fda1f201890375a60c8f");

		$res4 = ["dashStyle" => "Solid", "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "events" => ["events" => "16908b0605f2645dfcb4c3a8d248cef3"], "id" => "b80bb7740288fda1f201890375a60c8f"];
		$this->assertEquals($res4, $obj->toArray(), 'The method toArray() does not return the expected array with id');

		$obj->newLabel();

		$res5 = ["dashStyle" => "Solid", "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "events" => ["events" => "16908b0605f2645dfcb4c3a8d248cef3"], "id" => "b80bb7740288fda1f201890375a60c8f", "label" => []];
		$this->assertEquals($res5, $obj->toArray(), 'The method toArray() does not return the expected array with label');

		$obj->setValue(85);

		$res6 = ["dashStyle" => "Solid", "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "events" => ["events" => "16908b0605f2645dfcb4c3a8d248cef3"], "id" => "b80bb7740288fda1f201890375a60c8f", "label" => [], "value" => 85];
		$this->assertEquals($res6, $obj->toArray(), 'The method toArray() does not return the expected array with value');

		$obj->setWidth(30);

		$res7 = ["dashStyle" => "Solid", "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "events" => ["events" => "16908b0605f2645dfcb4c3a8d248cef3"], "id" => "b80bb7740288fda1f201890375a60c8f", "label" => [], "value" => 85, "width" => 30];
		$this->assertEquals($res7, $obj->toArray(), 'The method toArray() does not return the expected array with width');

		$obj->setZIndex(82);

		$res8 = ["dashStyle" => "Solid", "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "events" => ["events" => "16908b0605f2645dfcb4c3a8d248cef3"], "id" => "b80bb7740288fda1f201890375a60c8f", "label" => [], "value" => 85, "width" => 30, "zIndex" => 82];
		$this->assertEquals($res8, $obj->toArray(), 'The method toArray() does not return the expected array with z index');
	}

}
