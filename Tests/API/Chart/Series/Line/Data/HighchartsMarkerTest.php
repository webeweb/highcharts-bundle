<?php
/**
 * This file is part of the highcharts-bundle package.
 *
 * (c) 2017 NdC/WBW
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\HighchartsBundle\Tests\API\Chart\Series\Line\Data;

use PHPUnit_Framework_TestCase;

/**
 * Highcharts marker test.
 *
 * @author NdC/WBW <https://github.com/webeweb/>
 * @package WBW\Bundle\HighchartsBundle\Tests\API\Chart\Series\Line\Data
 * @version 5.0.14
 */
final class HighchartsMarkerTest extends PHPUnit_Framework_TestCase {

	/**
	 * Tests the __construct() method.
	 *
	 * @return void
	 */
	public function testConstructor() {

		$obj1 = new \WBW\Bundle\HighchartsBundle\API\Chart\Series\Line\Data\HighchartsMarker(true);

		$this->assertEquals(null, $obj1->getEnabled());
		$this->assertEquals(null, $obj1->getFillColor());
		$this->assertEquals(null, $obj1->getHeight());
		$this->assertEquals(null, $obj1->getLineColor());
		$this->assertEquals(null, $obj1->getLineWidth());
		$this->assertEquals(null, $obj1->getRadius());
		$this->assertEquals(null, $obj1->getStates());
		$this->assertEquals(null, $obj1->getSymbol());
		$this->assertEquals(null, $obj1->getWidth());

		$obj0 = new \WBW\Bundle\HighchartsBundle\API\Chart\Series\Line\Data\HighchartsMarker(false);

		$this->assertEquals(null, $obj0->getEnabled());
		$this->assertEquals(null, $obj0->getFillColor());
		$this->assertEquals(null, $obj0->getHeight());
		$this->assertEquals("#ffffff", $obj0->getLineColor());
		$this->assertEquals(0, $obj0->getLineWidth());
		$this->assertEquals(4, $obj0->getRadius());
		$this->assertEquals(null, $obj0->getStates());
		$this->assertEquals(null, $obj0->getSymbol());
		$this->assertEquals(null, $obj0->getWidth());
    }

	/**
	 * Tests the clear() method.
	 *
	 * @return void
	 */
	public function testClear() {

		$obj = new \WBW\Bundle\HighchartsBundle\API\Chart\Series\Line\Data\HighchartsMarker(false);

		$obj->newStates();

		$obj->clear();

		$res = ["states" => []];
		$this->assertEquals($res, $obj->toArray());
	}

	/**
	 * Tests the jsonSerialize() method.
	 *
	 * @return void
	 */
	public function testJsonSerialize() {

		$obj = new \WBW\Bundle\HighchartsBundle\API\Chart\Series\Line\Data\HighchartsMarker(true);

		$this->assertEquals([], $obj->jsonSerialize());
	}

	/**
	 * Tests the newStates() method.
	 *
	 * @return void.
	 */
	public function testNewStates() {

		$obj = new \WBW\Bundle\HighchartsBundle\API\Chart\Series\Line\Data\HighchartsMarker(false);

		$res = $obj->newStates();
		$this->assertInstanceOf(\WBW\Bundle\HighchartsBundle\API\Chart\Series\Line\Data\Marker\HighchartsStates::class, $res);
	}

	/**
	 * Tests the toArray() method.
	 *
	 * @return void
	 */
	public function testToArray() {

		$obj = new \WBW\Bundle\HighchartsBundle\API\Chart\Series\Line\Data\HighchartsMarker(true);

		$obj->setEnabled(1);

		$res1 = ["enabled" => 1];
		$this->assertEquals($res1, $obj->toArray());

		$obj->setFillColor("1fde055d3ff900e04ca08bc82066d7fd");

		$res2 = ["enabled" => 1, "fillColor" => "1fde055d3ff900e04ca08bc82066d7fd"];
		$this->assertEquals($res2, $obj->toArray());

		$obj->setHeight(81);

		$res3 = ["enabled" => 1, "fillColor" => "1fde055d3ff900e04ca08bc82066d7fd", "height" => 81];
		$this->assertEquals($res3, $obj->toArray());

		$obj->setLineColor("c2580eebfdbdb9fc629f50cc147c3f63");

		$res4 = ["enabled" => 1, "fillColor" => "1fde055d3ff900e04ca08bc82066d7fd", "height" => 81, "lineColor" => "c2580eebfdbdb9fc629f50cc147c3f63"];
		$this->assertEquals($res4, $obj->toArray());

		$obj->setLineWidth(17);

		$res5 = ["enabled" => 1, "fillColor" => "1fde055d3ff900e04ca08bc82066d7fd", "height" => 81, "lineColor" => "c2580eebfdbdb9fc629f50cc147c3f63", "lineWidth" => 17];
		$this->assertEquals($res5, $obj->toArray());

		$obj->setRadius(8);

		$res6 = ["enabled" => 1, "fillColor" => "1fde055d3ff900e04ca08bc82066d7fd", "height" => 81, "lineColor" => "c2580eebfdbdb9fc629f50cc147c3f63", "lineWidth" => 17, "radius" => 8];
		$this->assertEquals($res6, $obj->toArray());

		$obj->setStates(new \WBW\Bundle\HighchartsBundle\API\Chart\Series\Line\Data\Marker\HighchartsStates());

		$res7 = ["enabled" => 1, "fillColor" => "1fde055d3ff900e04ca08bc82066d7fd", "height" => 81, "lineColor" => "c2580eebfdbdb9fc629f50cc147c3f63", "lineWidth" => 17, "radius" => 8, "states" => []];
		$this->assertEquals($res7, $obj->toArray());

		$obj->setSymbol("triangle-down");

		$res8 = ["enabled" => 1, "fillColor" => "1fde055d3ff900e04ca08bc82066d7fd", "height" => 81, "lineColor" => "c2580eebfdbdb9fc629f50cc147c3f63", "lineWidth" => 17, "radius" => 8, "states" => [], "symbol" => "triangle-down"];
		$this->assertEquals($res8, $obj->toArray());

		$obj->setWidth(14);

		$res9 = ["enabled" => 1, "fillColor" => "1fde055d3ff900e04ca08bc82066d7fd", "height" => 81, "lineColor" => "c2580eebfdbdb9fc629f50cc147c3f63", "lineWidth" => 17, "radius" => 8, "states" => [], "symbol" => "triangle-down", "width" => 14];
		$this->assertEquals($res9, $obj->toArray());
	}

}
