<?php

/*
 * This file is part of the HighchartsBundle.
 *
 * (c) 2017 WBW
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\HighchartsBundle\Tests\API\Chart\Series\Errorbar;

use WBW\HighchartsBundle\API\Chart\Series\Errorbar\HighchartsData;
use PHPUnit_Framework_TestCase;

/**
 * Highcharts data test.
 *
 * @author WBW <https://github.com/webeweb/WBWHighchartsBundle>
 * @package HighchartsBundle\Tests\API\Chart\Series\Errorbar
 * @version 5.0.14
 */
final class HighchartsDataTest extends PHPUnit_Framework_TestCase {

	/**
	 * Test the toArray() method.
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

		$obj->setColorIndex(74);

		$res3 = ["selected" => false, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 74];
		$this->assertEquals($res3, $obj->toArray(), 'The method toArray() does not return the expected array with color index');

		$obj->setDescription("67daf92c833c41c95db874e18fcb2786");

		$res4 = ["selected" => false, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 74, "description" => "67daf92c833c41c95db874e18fcb2786"];
		$this->assertEquals($res4, $obj->toArray(), 'The method toArray() does not return the expected array with description');

		$obj->setHigh(88);

		$res5 = ["selected" => false, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 74, "description" => "67daf92c833c41c95db874e18fcb2786", "high" => 88];
		$this->assertEquals($res5, $obj->toArray(), 'The method toArray() does not return the expected array with high');

		$obj->setId("b80bb7740288fda1f201890375a60c8f");

		$res6 = ["selected" => false, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 74, "description" => "67daf92c833c41c95db874e18fcb2786", "high" => 88, "id" => "b80bb7740288fda1f201890375a60c8f"];
		$this->assertEquals($res6, $obj->toArray(), 'The method toArray() does not return the expected array with id');

		$obj->setLabelrank(100);

		$res7 = ["selected" => false, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 74, "description" => "67daf92c833c41c95db874e18fcb2786", "high" => 88, "id" => "b80bb7740288fda1f201890375a60c8f", "labelrank" => 100];
		$this->assertEquals($res7, $obj->toArray(), 'The method toArray() does not return the expected array with labelrank');

		$obj->setLow(3);

		$res8 = ["selected" => false, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 74, "description" => "67daf92c833c41c95db874e18fcb2786", "high" => 88, "id" => "b80bb7740288fda1f201890375a60c8f", "labelrank" => 100, "low" => 3];
		$this->assertEquals($res8, $obj->toArray(), 'The method toArray() does not return the expected array with low');

		$obj->setName("b068931cc450442b63f5b3d276ea4297");

		$res9 = ["selected" => false, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 74, "description" => "67daf92c833c41c95db874e18fcb2786", "high" => 88, "id" => "b80bb7740288fda1f201890375a60c8f", "labelrank" => 100, "low" => 3, "name" => "b068931cc450442b63f5b3d276ea4297"];
		$this->assertEquals($res9, $obj->toArray(), 'The method toArray() does not return the expected array with name');

		$obj->setX(43);

		$res10 = ["selected" => false, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 74, "description" => "67daf92c833c41c95db874e18fcb2786", "high" => 88, "id" => "b80bb7740288fda1f201890375a60c8f", "labelrank" => 100, "low" => 3, "name" => "b068931cc450442b63f5b3d276ea4297", "x" => 43];
		$this->assertEquals($res10, $obj->toArray(), 'The method toArray() does not return the expected array with x');
	}
}

