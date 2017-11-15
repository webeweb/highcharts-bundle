<?php

/*
 * This file is part of the highcharts-bundle package.
 *
 * (c) 2017 NdC/WBW
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\HighchartsBundle\Tests\API\Chart\PlotOptions\Waterfall\States\Hover;

use PHPUnit_Framework_TestCase;

/**
 * Highcharts halo test.
 *
 * @author NdC/WBW <https://github.com/webeweb/>
 * @package WBW\Bundle\HighchartsBundle\Tests\API\Chart\PlotOptions\Waterfall\States\Hover
 * @version 5.0.14
 */
final class HighchartsHaloTest extends PHPUnit_Framework_TestCase {

	/**
	 * Tests the __construct() method.
	 *
	 * @return void
	 */
	public function testConstructor() {

		$obj1 = new \WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\Waterfall\States\Hover\HighchartsHalo(true);

		$this->assertEquals(null, $obj1->getAttributes());
		$this->assertEquals(null, $obj1->getOpacity());
		$this->assertEquals(null, $obj1->getSize());

		$obj0 = new \WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\Waterfall\States\Hover\HighchartsHalo(false);

		$this->assertEquals(null, $obj0->getAttributes());
		$this->assertEquals(0.25, $obj0->getOpacity());
		$this->assertEquals(10, $obj0->getSize());
    }

	/**
	 * Tests the jsonSerialize() method.
	 *
	 * @return void
	 */
	public function testJsonSerialize() {

		$obj = new \WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\Waterfall\States\Hover\HighchartsHalo(true);

		$this->assertEquals([], $obj->jsonSerialize());
	}

	/**
	 * Tests the toArray() method.
	 *
	 * @return void
	 */
	public function testToArray() {

		$obj = new \WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\Waterfall\States\Hover\HighchartsHalo(true);

		$obj->setAttributes(["attributes" => "736b91750e516139acc13c5eb6564f92"]);

		$res1 = ["attributes" => ["attributes" => "736b91750e516139acc13c5eb6564f92"]];
		$this->assertEquals($res1, $obj->toArray());

		$obj->setOpacity(91);

		$res2 = ["attributes" => ["attributes" => "736b91750e516139acc13c5eb6564f92"], "opacity" => 91];
		$this->assertEquals($res2, $obj->toArray());

		$obj->setSize(73);

		$res3 = ["attributes" => ["attributes" => "736b91750e516139acc13c5eb6564f92"], "opacity" => 91, "size" => 73];
		$this->assertEquals($res3, $obj->toArray());
	}

}
