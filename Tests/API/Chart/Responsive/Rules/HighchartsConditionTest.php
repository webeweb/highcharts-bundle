<?php
/**
 * This file is part of the highcharts-bundle package.
 *
 * (c) 2017 NdC/WBW
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\HighchartsBundle\Tests\API\Chart\Responsive\Rules;

use PHPUnit_Framework_TestCase;

/**
 * Highcharts condition test.
 *
 * @author NdC/WBW <https://github.com/webeweb/>
 * @package WBW\Bundle\HighchartsBundle\Tests\API\Chart\Responsive\Rules
 * @version 5.0.14
 */
final class HighchartsConditionTest extends PHPUnit_Framework_TestCase {

	/**
	 * Tests the __construct() method.
	 *
	 * @return void
	 */
	public function testConstructor() {

		$obj1 = new \WBW\Bundle\HighchartsBundle\API\Chart\Responsive\Rules\HighchartsCondition(true);

		$this->assertEquals(null, $obj1->getCallback());
		$this->assertEquals(null, $obj1->getMaxHeight());
		$this->assertEquals(null, $obj1->getMaxWidth());
		$this->assertEquals(null, $obj1->getMinHeight());
		$this->assertEquals(null, $obj1->getMinWidth());

		$obj0 = new \WBW\Bundle\HighchartsBundle\API\Chart\Responsive\Rules\HighchartsCondition(false);

		$this->assertEquals(null, $obj0->getCallback());
		$this->assertEquals(null, $obj0->getMaxHeight());
		$this->assertEquals(null, $obj0->getMaxWidth());
		$this->assertEquals(0, $obj0->getMinHeight());
		$this->assertEquals(0, $obj0->getMinWidth());
    }

	/**
	 * Tests the jsonSerialize() method.
	 *
	 * @return void
	 */
	public function testJsonSerialize() {

		$obj = new \WBW\Bundle\HighchartsBundle\API\Chart\Responsive\Rules\HighchartsCondition(true);

		$this->assertEquals([], $obj->jsonSerialize());
	}

	/**
	 * Tests the toArray() method.
	 *
	 * @return void
	 */
	public function testToArray() {

		$obj = new \WBW\Bundle\HighchartsBundle\API\Chart\Responsive\Rules\HighchartsCondition(true);

		$obj->setCallback("924a8ceeac17f54d3be3f8cdf1c04eb2");

		$res1 = ["callback" => "924a8ceeac17f54d3be3f8cdf1c04eb2"];
		$this->assertEquals($res1, $obj->toArray());

		$obj->setMaxHeight(5);

		$res2 = ["callback" => "924a8ceeac17f54d3be3f8cdf1c04eb2", "maxHeight" => 5];
		$this->assertEquals($res2, $obj->toArray());

		$obj->setMaxWidth(28);

		$res3 = ["callback" => "924a8ceeac17f54d3be3f8cdf1c04eb2", "maxHeight" => 5, "maxWidth" => 28];
		$this->assertEquals($res3, $obj->toArray());

		$obj->setMinHeight(36);

		$res4 = ["callback" => "924a8ceeac17f54d3be3f8cdf1c04eb2", "maxHeight" => 5, "maxWidth" => 28, "minHeight" => 36];
		$this->assertEquals($res4, $obj->toArray());

		$obj->setMinWidth(87);

		$res5 = ["callback" => "924a8ceeac17f54d3be3f8cdf1c04eb2", "maxHeight" => 5, "maxWidth" => 28, "minHeight" => 36, "minWidth" => 87];
		$this->assertEquals($res5, $obj->toArray());
	}

}
