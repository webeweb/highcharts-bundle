<?php

/*
 * This file is part of the highcharts-bundle package.
 *
 * (c) 2017 NdC/WBW
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\HighchartsBundle\Tests\API\Chart\Series\Column\States\Hover;

use PHPUnit_Framework_TestCase;

/**
 * Highcharts halo test.
 *
 * @author NdC/WBW <https://github.com/webeweb/>
 * @package WBW\Bundle\HighchartsBundle\Tests\API\Chart\Series\Column\States\Hover
 * @version 5.0.14
 */
final class HighchartsHaloTest extends PHPUnit_Framework_TestCase {

	/**
	 * Tests the __construct() method.
	 *
	 * @return void
	 */
	public function testConstructor() {

		$obj1 = new \WBW\Bundle\HighchartsBundle\API\Chart\Series\Column\States\Hover\HighchartsHalo(true);

		$this->assertEquals(null, $obj1->getAttributes(), "The method getAttributes() does not return the expected value");
		$this->assertEquals(null, $obj1->getOpacity(), "The method getOpacity() does not return the expected value");
		$this->assertEquals(null, $obj1->getSize(), "The method getSize() does not return the expected value");

		$obj0 = new \WBW\Bundle\HighchartsBundle\API\Chart\Series\Column\States\Hover\HighchartsHalo(false);

		$this->assertEquals(null, $obj0->getAttributes(), "The method getAttributes() does not return the expected value");
		$this->assertEquals(0.25, $obj0->getOpacity(), "The method getOpacity() does not return the expected value");
		$this->assertEquals(10, $obj0->getSize(), "The method getSize() does not return the expected value");
    }

	/**
	 * Tests the jsonSerialize() method.
	 *
	 * @return void
	 */
	public function testJsonSerialize() {

		$obj = new \WBW\Bundle\HighchartsBundle\API\Chart\Series\Column\States\Hover\HighchartsHalo(true);

		$this->assertEquals([], $obj->jsonSerialize(), "The method jsonSerialize() does not return the expected value");
	}

	/**
	 * Tests the toArray() method.
	 *
	 * @return void
	 */
	public function testToArray() {

		$obj = new \WBW\Bundle\HighchartsBundle\API\Chart\Series\Column\States\Hover\HighchartsHalo(true);

		$obj->setAttributes(["attributes" => "736b91750e516139acc13c5eb6564f92"]);

		$res1 = ["attributes" => ["attributes" => "736b91750e516139acc13c5eb6564f92"]];
		$this->assertEquals($res1, $obj->toArray(), "The method toArray() does not return the expected array with attributes");

		$obj->setOpacity(50);

		$res2 = ["attributes" => ["attributes" => "736b91750e516139acc13c5eb6564f92"], "opacity" => 50];
		$this->assertEquals($res2, $obj->toArray(), "The method toArray() does not return the expected array with opacity");

		$obj->setSize(45);

		$res3 = ["attributes" => ["attributes" => "736b91750e516139acc13c5eb6564f92"], "opacity" => 50, "size" => 45];
		$this->assertEquals($res3, $obj->toArray(), "The method toArray() does not return the expected array with size");
	}

}
