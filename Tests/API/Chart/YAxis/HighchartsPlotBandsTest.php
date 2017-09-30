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

use WBW\HighchartsBundle\API\Chart\YAxis\HighchartsPlotBands;
use PHPUnit_Framework_TestCase;

/**
 * Highcharts plot bands test.
 *
 * @author WBW <https://github.com/webeweb/WBWHighchartsBundle>
 * @package WBW\HighchartsBundle\Tests\API\Chart\YAxis
 * @version 5.0.14
 */
final class HighchartsPlotBandsTest extends PHPUnit_Framework_TestCase {

	/**
	 * Test the toArray() method.
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

		$obj->setEvents("16908b0605f2645dfcb4c3a8d248cef3");

		$res4 = ["borderWidth" => 0, "outerRadius" => "100%", "thickness" => "10", "borderColor" => "97da935a74593c55d78be9d1295aa994", "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "events" => "16908b0605f2645dfcb4c3a8d248cef3"];
		$this->assertEquals($res4, $obj->toArray(), 'The method toArray() does not return the expected array with events');

		$obj->setFrom(81);

		$res5 = ["borderWidth" => 0, "outerRadius" => "100%", "thickness" => "10", "borderColor" => "97da935a74593c55d78be9d1295aa994", "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "events" => "16908b0605f2645dfcb4c3a8d248cef3", "from" => 81];
		$this->assertEquals($res5, $obj->toArray(), 'The method toArray() does not return the expected array with from');

		$obj->setId("b80bb7740288fda1f201890375a60c8f");

		$res6 = ["borderWidth" => 0, "outerRadius" => "100%", "thickness" => "10", "borderColor" => "97da935a74593c55d78be9d1295aa994", "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "events" => "16908b0605f2645dfcb4c3a8d248cef3", "from" => 81, "id" => "b80bb7740288fda1f201890375a60c8f"];
		$this->assertEquals($res6, $obj->toArray(), 'The method toArray() does not return the expected array with id');

		$obj->setInnerRadius(26);

		$res7 = ["borderWidth" => 0, "outerRadius" => "100%", "thickness" => "10", "borderColor" => "97da935a74593c55d78be9d1295aa994", "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "events" => "16908b0605f2645dfcb4c3a8d248cef3", "from" => 81, "id" => "b80bb7740288fda1f201890375a60c8f", "innerRadius" => 26];
		$this->assertEquals($res7, $obj->toArray(), 'The method toArray() does not return the expected array with inner radius');

		$obj->setTo(56);

		$res8 = ["borderWidth" => 0, "outerRadius" => "100%", "thickness" => "10", "borderColor" => "97da935a74593c55d78be9d1295aa994", "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "events" => "16908b0605f2645dfcb4c3a8d248cef3", "from" => 81, "id" => "b80bb7740288fda1f201890375a60c8f", "innerRadius" => 26, "to" => 56];
		$this->assertEquals($res8, $obj->toArray(), 'The method toArray() does not return the expected array with to');

		$obj->setZIndex(63);

		$res9 = ["borderWidth" => 0, "outerRadius" => "100%", "thickness" => "10", "borderColor" => "97da935a74593c55d78be9d1295aa994", "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "events" => "16908b0605f2645dfcb4c3a8d248cef3", "from" => 81, "id" => "b80bb7740288fda1f201890375a60c8f", "innerRadius" => 26, "to" => 56, "zIndex" => 63];
		$this->assertEquals($res9, $obj->toArray(), 'The method toArray() does not return the expected array with z index');
	}
}

