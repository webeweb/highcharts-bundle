<?php

/*
 * This file is part of the HighchartsBundle.
 *
 * (c) 2017 WBW
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\HighchartsBundle\Tests\API\Chart\Series\Treemap;

use WBW\HighchartsBundle\API\Chart\Series\Treemap\HighchartsLevels;
use PHPUnit_Framework_TestCase;

/**
 * Highcharts levels test.
 *
 * @author WBW <https://github.com/webeweb/WBWHighchartsBundle>
 * @package WBW\HighchartsBundle\Tests\API\Chart\Series\Treemap
 * @version 5.0.14
 */
final class HighchartsLevelsTest extends PHPUnit_Framework_TestCase {

	/**
	 * Test the toArray() method.
	 */
	public function testToArray() {

		$obj = new HighchartsLevels(false);

		$obj->setBorderColor("97da935a74593c55d78be9d1295aa994");

		$res1 = ["borderColor" => "97da935a74593c55d78be9d1295aa994"];
		$this->assertEquals($res1, $obj->toArray(), 'The method toArray() does not return the expected array with border color');

		$obj->setBorderDashStyle("8c4e9f2e21a77d83fc413d4c86d1cc81");

		$res2 = ["borderColor" => "97da935a74593c55d78be9d1295aa994", "borderDashStyle" => "8c4e9f2e21a77d83fc413d4c86d1cc81"];
		$this->assertEquals($res2, $obj->toArray(), 'The method toArray() does not return the expected array with border dash style');

		$obj->setBorderWidth(67);

		$res3 = ["borderColor" => "97da935a74593c55d78be9d1295aa994", "borderDashStyle" => "8c4e9f2e21a77d83fc413d4c86d1cc81", "borderWidth" => 67];
		$this->assertEquals($res3, $obj->toArray(), 'The method toArray() does not return the expected array with border width');

		$obj->setColor("70dda5dfb8053dc6d1c492574bce9bfd");

		$res4 = ["borderColor" => "97da935a74593c55d78be9d1295aa994", "borderDashStyle" => "8c4e9f2e21a77d83fc413d4c86d1cc81", "borderWidth" => 67, "color" => "70dda5dfb8053dc6d1c492574bce9bfd"];
		$this->assertEquals($res4, $obj->toArray(), 'The method toArray() does not return the expected array with color');

		$obj->setDataLabels("d4d108fe6659fac79420fa083ef3adf2");

		$res5 = ["borderColor" => "97da935a74593c55d78be9d1295aa994", "borderDashStyle" => "8c4e9f2e21a77d83fc413d4c86d1cc81", "borderWidth" => 67, "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "dataLabels" => "d4d108fe6659fac79420fa083ef3adf2"];
		$this->assertEquals($res5, $obj->toArray(), 'The method toArray() does not return the expected array with data labels');

		$obj->setLayoutAlgorithm("6edfdba422db433d39b1aca27fe07c46");

		$res6 = ["borderColor" => "97da935a74593c55d78be9d1295aa994", "borderDashStyle" => "8c4e9f2e21a77d83fc413d4c86d1cc81", "borderWidth" => 67, "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "dataLabels" => "d4d108fe6659fac79420fa083ef3adf2", "layoutAlgorithm" => "6edfdba422db433d39b1aca27fe07c46"];
		$this->assertEquals($res6, $obj->toArray(), 'The method toArray() does not return the expected array with layout algorithm');

		$obj->setLayoutStartingDirection("017174c02e64d1035636c0e0ca66286e");

		$res7 = ["borderColor" => "97da935a74593c55d78be9d1295aa994", "borderDashStyle" => "8c4e9f2e21a77d83fc413d4c86d1cc81", "borderWidth" => 67, "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "dataLabels" => "d4d108fe6659fac79420fa083ef3adf2", "layoutAlgorithm" => "6edfdba422db433d39b1aca27fe07c46", "layoutStartingDirection" => "017174c02e64d1035636c0e0ca66286e"];
		$this->assertEquals($res7, $obj->toArray(), 'The method toArray() does not return the expected array with layout starting direction');

		$obj->setLevel(39);

		$res8 = ["borderColor" => "97da935a74593c55d78be9d1295aa994", "borderDashStyle" => "8c4e9f2e21a77d83fc413d4c86d1cc81", "borderWidth" => 67, "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "dataLabels" => "d4d108fe6659fac79420fa083ef3adf2", "layoutAlgorithm" => "6edfdba422db433d39b1aca27fe07c46", "layoutStartingDirection" => "017174c02e64d1035636c0e0ca66286e", "level" => 39];
		$this->assertEquals($res8, $obj->toArray(), 'The method toArray() does not return the expected array with level');
	}
}

