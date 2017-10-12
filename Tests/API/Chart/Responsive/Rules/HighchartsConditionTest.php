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

/**
 * Highcharts condition test.
 *
 * @author WBW <https://github.com/webeweb/WBWHighchartsBundle>
 * @package WBW\HighchartsBundle\Tests\API\Chart\Responsive\Rules
 * @version 5.0.14
 */
final class HighchartsConditionTest extends PHPUnit_Framework_TestCase {

	/**
	 * Test the __construct() method.
	 *
	 * @return void
	 */
	public function testConstructor() {

		$obj1 = new \WBW\HighchartsBundle\API\Chart\Responsive\Rules\HighchartsCondition(true);

		$this->assertEquals(null, $obj1->getCallback(), "The method getCallback() does not return the expected value");
		$this->assertEquals(null, $obj1->getMaxHeight(), "The method getMaxHeight() does not return the expected value");
		$this->assertEquals(null, $obj1->getMaxWidth(), "The method getMaxWidth() does not return the expected value");
		$this->assertEquals(null, $obj1->getMinHeight(), "The method getMinHeight() does not return the expected value");
		$this->assertEquals(null, $obj1->getMinWidth(), "The method getMinWidth() does not return the expected value");

		$obj0 = new \WBW\HighchartsBundle\API\Chart\Responsive\Rules\HighchartsCondition(false);

		$this->assertEquals(null, $obj0->getCallback(), "The method getCallback() does not return the expected value");
		$this->assertEquals(null, $obj0->getMaxHeight(), "The method getMaxHeight() does not return the expected value");
		$this->assertEquals(null, $obj0->getMaxWidth(), "The method getMaxWidth() does not return the expected value");
		$this->assertEquals(0, $obj0->getMinHeight(), "The method getMinHeight() does not return the expected value");
		$this->assertEquals(0, $obj0->getMinWidth(), "The method getMinWidth() does not return the expected value");
	}

	/**
	 * Test the jsonSerialize() method.
	 *
	 * @return void
	 */
	public function testJsonSerialize() {

		$obj = new \WBW\HighchartsBundle\API\Chart\Responsive\Rules\HighchartsCondition(true);

		$this->assertEquals([], $obj->jsonSerialize(), "The method jsonSerialize() does not return the expected value");
	}

	/**
	 * Test the toArray() method.
	 *
	 * @return void
	 */
	public function testToArray() {

		$obj = new \WBW\HighchartsBundle\API\Chart\Responsive\Rules\HighchartsCondition(true);

		$obj->setCallback("924a8ceeac17f54d3be3f8cdf1c04eb2");

		$res1 = ["callback" => "924a8ceeac17f54d3be3f8cdf1c04eb2"];
		$this->assertEquals($res1, $obj->toArray(), "The method toArray() does not return the expected array with callback");

		$obj->setMaxHeight(65);

		$res2 = ["callback" => "924a8ceeac17f54d3be3f8cdf1c04eb2", "maxHeight" => 65];
		$this->assertEquals($res2, $obj->toArray(), "The method toArray() does not return the expected array with max height");

		$obj->setMaxWidth(14);

		$res3 = ["callback" => "924a8ceeac17f54d3be3f8cdf1c04eb2", "maxHeight" => 65, "maxWidth" => 14];
		$this->assertEquals($res3, $obj->toArray(), "The method toArray() does not return the expected array with max width");

		$obj->setMinHeight(71);

		$res4 = ["callback" => "924a8ceeac17f54d3be3f8cdf1c04eb2", "maxHeight" => 65, "maxWidth" => 14, "minHeight" => 71];
		$this->assertEquals($res4, $obj->toArray(), "The method toArray() does not return the expected array with min height");

		$obj->setMinWidth(100);

		$res5 = ["callback" => "924a8ceeac17f54d3be3f8cdf1c04eb2", "maxHeight" => 65, "maxWidth" => 14, "minHeight" => 71, "minWidth" => 100];
		$this->assertEquals($res5, $obj->toArray(), "The method toArray() does not return the expected array with min width");
	}

}
