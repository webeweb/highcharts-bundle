<?php

/*
 * This file is part of the HighchartsBundle.
 *
 * (c) 2017 WBW
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\HighchartsBundle\Tests\API\Chart\Series\Solidgauge;

use WBW\HighchartsBundle\API\Chart\Series\Solidgauge\HighchartsData;
use PHPUnit_Framework_TestCase;

/**
 * Highcharts data test.
 *
 * @author WBW <https://github.com/webeweb/WBWHighchartsBundle>
 * @package WBW\HighchartsBundle\Tests\API\Chart\Series\Solidgauge
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

		$obj->setDataLabels("d4d108fe6659fac79420fa083ef3adf2");

		$res4 = ["selected" => false, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 74, "dataLabels" => "d4d108fe6659fac79420fa083ef3adf2"];
		$this->assertEquals($res4, $obj->toArray(), 'The method toArray() does not return the expected array with data labels');

		$obj->setDescription("67daf92c833c41c95db874e18fcb2786");

		$res5 = ["selected" => false, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 74, "dataLabels" => "d4d108fe6659fac79420fa083ef3adf2", "description" => "67daf92c833c41c95db874e18fcb2786"];
		$this->assertEquals($res5, $obj->toArray(), 'The method toArray() does not return the expected array with description');

		$obj->setId("b80bb7740288fda1f201890375a60c8f");

		$res6 = ["selected" => false, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 74, "dataLabels" => "d4d108fe6659fac79420fa083ef3adf2", "description" => "67daf92c833c41c95db874e18fcb2786", "id" => "b80bb7740288fda1f201890375a60c8f"];
		$this->assertEquals($res6, $obj->toArray(), 'The method toArray() does not return the expected array with id');

		$obj->setInnerRadius(26);

		$res7 = ["selected" => false, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 74, "dataLabels" => "d4d108fe6659fac79420fa083ef3adf2", "description" => "67daf92c833c41c95db874e18fcb2786", "id" => "b80bb7740288fda1f201890375a60c8f", "innerRadius" => 26];
		$this->assertEquals($res7, $obj->toArray(), 'The method toArray() does not return the expected array with inner radius');

		$obj->setLabelrank(74);

		$res8 = ["selected" => false, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 74, "dataLabels" => "d4d108fe6659fac79420fa083ef3adf2", "description" => "67daf92c833c41c95db874e18fcb2786", "id" => "b80bb7740288fda1f201890375a60c8f", "innerRadius" => 26, "labelrank" => 74];
		$this->assertEquals($res8, $obj->toArray(), 'The method toArray() does not return the expected array with labelrank');

		$obj->setName("b068931cc450442b63f5b3d276ea4297");

		$res9 = ["selected" => false, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 74, "dataLabels" => "d4d108fe6659fac79420fa083ef3adf2", "description" => "67daf92c833c41c95db874e18fcb2786", "id" => "b80bb7740288fda1f201890375a60c8f", "innerRadius" => 26, "labelrank" => 74, "name" => "b068931cc450442b63f5b3d276ea4297"];
		$this->assertEquals($res9, $obj->toArray(), 'The method toArray() does not return the expected array with name');

		$obj->setRadius(59);

		$res10 = ["selected" => false, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 74, "dataLabels" => "d4d108fe6659fac79420fa083ef3adf2", "description" => "67daf92c833c41c95db874e18fcb2786", "id" => "b80bb7740288fda1f201890375a60c8f", "innerRadius" => 26, "labelrank" => 74, "name" => "b068931cc450442b63f5b3d276ea4297", "radius" => 59];
		$this->assertEquals($res10, $obj->toArray(), 'The method toArray() does not return the expected array with radius');

		$obj->setY(90);

		$res11 = ["selected" => false, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 74, "dataLabels" => "d4d108fe6659fac79420fa083ef3adf2", "description" => "67daf92c833c41c95db874e18fcb2786", "id" => "b80bb7740288fda1f201890375a60c8f", "innerRadius" => 26, "labelrank" => 74, "name" => "b068931cc450442b63f5b3d276ea4297", "radius" => 59, "y" => 90];
		$this->assertEquals($res11, $obj->toArray(), 'The method toArray() does not return the expected array with y');
	}
}

