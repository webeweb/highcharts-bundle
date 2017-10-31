<?php

/*
 * This file is part of the WBWHighchartsBundle package.
 *
 * (c) 2017 NdC/WBW
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\HighchartsBundle\Tests\API\Chart\Series\Polygon\Marker;

use PHPUnit_Framework_TestCase;

/**
 * Highcharts states test.
 *
 * @author NdC/WBW <https://github.com/webeweb/>
 * @package WBW\Bundle\HighchartsBundle\Tests\API\Chart\Series\Polygon\Marker
 * @version 5.0.14
 */
final class HighchartsStatesTest extends PHPUnit_Framework_TestCase {

	/**
	 * Tests the __construct() method.
	 *
	 * @return void
	 */
	public function testConstructor() {

		$obj1 = new \WBW\Bundle\HighchartsBundle\API\Chart\Series\Polygon\Marker\HighchartsStates(true);

		$this->assertEquals(null, $obj1->getHover(), "The method getHover() does not return the expected value");
		$this->assertEquals(null, $obj1->getSelect(), "The method getSelect() does not return the expected value");
    }

	/**
	 * Tests the clear() method.
	 *
	 * @return void
	 */
	public function testClear() {

		$obj = new \WBW\Bundle\HighchartsBundle\API\Chart\Series\Polygon\Marker\HighchartsStates(false);

		$obj->newHover();
		$obj->newSelect();

		$obj->clear();

		$res = ["hover" => [], "select" => []];
		$this->assertEquals($res, $obj->toArray(), "The method toArray() does not return the expected array");
	}

	/**
	 * Tests the jsonSerialize() method.
	 *
	 * @return void
	 */
	public function testJsonSerialize() {

		$obj = new \WBW\Bundle\HighchartsBundle\API\Chart\Series\Polygon\Marker\HighchartsStates(true);

		$this->assertEquals([], $obj->jsonSerialize(), "The method jsonSerialize() does not return the expected value");
	}

	/**
	 * Tests the newHover() method.
	 *
	 * @return void.
	 */
	public function testNewHover() {

		$obj = new \WBW\Bundle\HighchartsBundle\API\Chart\Series\Polygon\Marker\HighchartsStates(false);

		$res = $obj->newHover();
		$this->assertInstanceOf(\WBW\Bundle\HighchartsBundle\API\Chart\Series\Polygon\Marker\States\HighchartsHover::class, $res, "The method newHover() does not return the expected object");
	}

	/**
	 * Tests the newSelect() method.
	 *
	 * @return void.
	 */
	public function testNewSelect() {

		$obj = new \WBW\Bundle\HighchartsBundle\API\Chart\Series\Polygon\Marker\HighchartsStates(false);

		$res = $obj->newSelect();
		$this->assertInstanceOf(\WBW\Bundle\HighchartsBundle\API\Chart\Series\Polygon\Marker\States\HighchartsSelect::class, $res, "The method newSelect() does not return the expected object");
	}

	/**
	 * Tests the toArray() method.
	 *
	 * @return void
	 */
	public function testToArray() {

		$obj = new \WBW\Bundle\HighchartsBundle\API\Chart\Series\Polygon\Marker\HighchartsStates(true);

		$obj->setHover(new \WBW\Bundle\HighchartsBundle\API\Chart\Series\Polygon\Marker\States\HighchartsHover());

		$res1 = ["hover" => []];
		$this->assertEquals($res1, $obj->toArray(), "The method toArray() does not return the expected array with hover");

		$obj->setSelect(new \WBW\Bundle\HighchartsBundle\API\Chart\Series\Polygon\Marker\States\HighchartsSelect());

		$res2 = ["hover" => [], "select" => []];
		$this->assertEquals($res2, $obj->toArray(), "The method toArray() does not return the expected array with select");
	}

}
