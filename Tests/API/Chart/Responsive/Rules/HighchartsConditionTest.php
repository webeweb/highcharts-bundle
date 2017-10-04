<?php

/*
 * This file is part of the WBWHighchartsBundle package.
 *
 * (c) 2017 WBW
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\HighchartsBundle\Tests\API\Chart\Responsive\Rules;

use PHPUnit_Framework_TestCase;
use WBW\HighchartsBundle\API\Chart\Responsive\Rules\HighchartsCondition;

/**
 * Highcharts condition test.
 *
 * @author WBW <https://github.com/webeweb/WBWHighchartsBundle>
 * @package WBW\HighchartsBundle\Tests\API\Chart\Responsive\Rules
 * @version 5.0.14
 */
final class HighchartsConditionTest extends PHPUnit_Framework_TestCase {

	/**
	 * Test the clear() method.
	 *
	 * @return void
	 */
	public function testClear() {

		$obj = new HighchartsCondition(false);

		$obj->clear();
		$this->assertEquals([], $obj->toArray(), "The method toArray() does not return the expected array");
	}

	/**
	 * Test the toArray() method.
	 *
	 * @return void
	 */
	public function testToArray() {

		$obj = new HighchartsCondition(false);

		$res = ["minHeight" => 0, "minWidth" => 0];
		$this->assertEquals($res, $obj->toArray(), "The method toArray() does not return the expected array");

		$obj->setCallback("924a8ceeac17f54d3be3f8cdf1c04eb2");

		$res1 = ["minHeight" => 0, "minWidth" => 0, "callback" => "924a8ceeac17f54d3be3f8cdf1c04eb2"];
		$this->assertEquals($res1, $obj->toArray(), "The method toArray() does not return the expected array with callback");

		$obj->setMaxHeight(82);

		$res2 = ["minHeight" => 0, "minWidth" => 0, "callback" => "924a8ceeac17f54d3be3f8cdf1c04eb2", "maxHeight" => 82];
		$this->assertEquals($res2, $obj->toArray(), "The method toArray() does not return the expected array with max height");

		$obj->setMaxWidth(22);

		$res3 = ["minHeight" => 0, "minWidth" => 0, "callback" => "924a8ceeac17f54d3be3f8cdf1c04eb2", "maxHeight" => 82, "maxWidth" => 22];
		$this->assertEquals($res3, $obj->toArray(), "The method toArray() does not return the expected array with max width");
	}

}
