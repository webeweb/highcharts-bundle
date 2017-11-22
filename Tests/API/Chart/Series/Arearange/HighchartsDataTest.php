<?php
/**
 * This file is part of the highcharts-bundle package.
 *
 * (c) 2017 NdC/WBW
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\HighchartsBundle\Tests\API\Chart\Series\Arearange;

use PHPUnit_Framework_TestCase;

/**
 * Highcharts data test.
 *
 * @author NdC/WBW <https://github.com/webeweb/>
 * @package WBW\Bundle\HighchartsBundle\Tests\API\Chart\Series\Arearange
 * @version 5.0.14
 */
final class HighchartsDataTest extends PHPUnit_Framework_TestCase {

	/**
	 * Tests the __construct() method.
	 *
	 * @return void
	 */
	public function testConstructor() {

		$obj1 = new \WBW\Bundle\HighchartsBundle\API\Chart\Series\Arearange\HighchartsData(true);

		$this->assertEquals(null, $obj1->getClassName());
		$this->assertEquals(null, $obj1->getColor());
		$this->assertEquals(null, $obj1->getColorIndex());
		$this->assertEquals(null, $obj1->getDataLabels());
		$this->assertEquals(null, $obj1->getDescription());
		$this->assertEquals(null, $obj1->getDrilldown());
		$this->assertEquals(null, $obj1->getEvents());
		$this->assertEquals(null, $obj1->getHigh());
		$this->assertEquals(null, $obj1->getId());
		$this->assertEquals(null, $obj1->getLabelrank());
		$this->assertEquals(null, $obj1->getLow());
		$this->assertEquals(null, $obj1->getName());
		$this->assertEquals(null, $obj1->getSelected());
		$this->assertEquals(null, $obj1->getX());

		$obj0 = new \WBW\Bundle\HighchartsBundle\API\Chart\Series\Arearange\HighchartsData(false);

		$this->assertEquals(null, $obj0->getClassName());
		$this->assertEquals(null, $obj0->getColor());
		$this->assertEquals(null, $obj0->getColorIndex());
		$this->assertEquals(null, $obj0->getDataLabels());
		$this->assertEquals(null, $obj0->getDescription());
		$this->assertEquals(null, $obj0->getDrilldown());
		$this->assertEquals(null, $obj0->getEvents());
		$this->assertEquals(null, $obj0->getHigh());
		$this->assertEquals(null, $obj0->getId());
		$this->assertEquals(null, $obj0->getLabelrank());
		$this->assertEquals(null, $obj0->getLow());
		$this->assertEquals(null, $obj0->getName());
		$this->assertEquals(false, $obj0->getSelected());
		$this->assertEquals(null, $obj0->getX());
    }

	/**
	 * Tests the clear() method.
	 *
	 * @return void
	 */
	public function testClear() {

		$obj = new \WBW\Bundle\HighchartsBundle\API\Chart\Series\Arearange\HighchartsData(false);

		$obj->newEvents();

		$obj->clear();

		$res = ["events" => []];
		$this->assertEquals($res, $obj->toArray());
	}

	/**
	 * Tests the jsonSerialize() method.
	 *
	 * @return void
	 */
	public function testJsonSerialize() {

		$obj = new \WBW\Bundle\HighchartsBundle\API\Chart\Series\Arearange\HighchartsData(true);

		$this->assertEquals([], $obj->jsonSerialize());
	}

	/**
	 * Tests the newEvents() method.
	 *
	 * @return void.
	 */
	public function testNewEvents() {

		$obj = new \WBW\Bundle\HighchartsBundle\API\Chart\Series\Arearange\HighchartsData(false);

		$res = $obj->newEvents();
		$this->assertInstanceOf(\WBW\Bundle\HighchartsBundle\API\Chart\Series\Arearange\Data\HighchartsEvents::class, $res);
	}

	/**
	 * Tests the toArray() method.
	 *
	 * @return void
	 */
	public function testToArray() {

		$obj = new \WBW\Bundle\HighchartsBundle\API\Chart\Series\Arearange\HighchartsData(true);

		$obj->setClassName("6f66e878c62db60568a3487869695820");

		$res1 = ["className" => "6f66e878c62db60568a3487869695820"];
		$this->assertEquals($res1, $obj->toArray());

		$obj->setColor("70dda5dfb8053dc6d1c492574bce9bfd");

		$res2 = ["className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd"];
		$this->assertEquals($res2, $obj->toArray());

		$obj->setColorIndex(35);

		$res3 = ["className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 35];
		$this->assertEquals($res3, $obj->toArray());

		$obj->setDataLabels(["dataLabels" => "d4d108fe6659fac79420fa083ef3adf2"]);

		$res4 = ["className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 35, "dataLabels" => ["dataLabels" => "d4d108fe6659fac79420fa083ef3adf2"]];
		$this->assertEquals($res4, $obj->toArray());

		$obj->setDescription("67daf92c833c41c95db874e18fcb2786");

		$res5 = ["className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 35, "dataLabels" => ["dataLabels" => "d4d108fe6659fac79420fa083ef3adf2"], "description" => "67daf92c833c41c95db874e18fcb2786"];
		$this->assertEquals($res5, $obj->toArray());

		$obj->setDrilldown("e3fd48c72943315f737d8a814fda4fd1");

		$res6 = ["className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 35, "dataLabels" => ["dataLabels" => "d4d108fe6659fac79420fa083ef3adf2"], "description" => "67daf92c833c41c95db874e18fcb2786", "drilldown" => "e3fd48c72943315f737d8a814fda4fd1"];
		$this->assertEquals($res6, $obj->toArray());

		$obj->setEvents(new \WBW\Bundle\HighchartsBundle\API\Chart\Series\Arearange\Data\HighchartsEvents());

		$res7 = ["className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 35, "dataLabels" => ["dataLabels" => "d4d108fe6659fac79420fa083ef3adf2"], "description" => "67daf92c833c41c95db874e18fcb2786", "drilldown" => "e3fd48c72943315f737d8a814fda4fd1", "events" => []];
		$this->assertEquals($res7, $obj->toArray());

		$obj->setHigh(67);

		$res8 = ["className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 35, "dataLabels" => ["dataLabels" => "d4d108fe6659fac79420fa083ef3adf2"], "description" => "67daf92c833c41c95db874e18fcb2786", "drilldown" => "e3fd48c72943315f737d8a814fda4fd1", "events" => [], "high" => 67];
		$this->assertEquals($res8, $obj->toArray());

		$obj->setId("b80bb7740288fda1f201890375a60c8f");

		$res9 = ["className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 35, "dataLabels" => ["dataLabels" => "d4d108fe6659fac79420fa083ef3adf2"], "description" => "67daf92c833c41c95db874e18fcb2786", "drilldown" => "e3fd48c72943315f737d8a814fda4fd1", "events" => [], "high" => 67, "id" => "b80bb7740288fda1f201890375a60c8f"];
		$this->assertEquals($res9, $obj->toArray());

		$obj->setLabelrank(33);

		$res10 = ["className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 35, "dataLabels" => ["dataLabels" => "d4d108fe6659fac79420fa083ef3adf2"], "description" => "67daf92c833c41c95db874e18fcb2786", "drilldown" => "e3fd48c72943315f737d8a814fda4fd1", "events" => [], "high" => 67, "id" => "b80bb7740288fda1f201890375a60c8f", "labelrank" => 33];
		$this->assertEquals($res10, $obj->toArray());

		$obj->setLow(2);

		$res11 = ["className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 35, "dataLabels" => ["dataLabels" => "d4d108fe6659fac79420fa083ef3adf2"], "description" => "67daf92c833c41c95db874e18fcb2786", "drilldown" => "e3fd48c72943315f737d8a814fda4fd1", "events" => [], "high" => 67, "id" => "b80bb7740288fda1f201890375a60c8f", "labelrank" => 33, "low" => 2];
		$this->assertEquals($res11, $obj->toArray());

		$obj->setName("b068931cc450442b63f5b3d276ea4297");

		$res12 = ["className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 35, "dataLabels" => ["dataLabels" => "d4d108fe6659fac79420fa083ef3adf2"], "description" => "67daf92c833c41c95db874e18fcb2786", "drilldown" => "e3fd48c72943315f737d8a814fda4fd1", "events" => [], "high" => 67, "id" => "b80bb7740288fda1f201890375a60c8f", "labelrank" => 33, "low" => 2, "name" => "b068931cc450442b63f5b3d276ea4297"];
		$this->assertEquals($res12, $obj->toArray());

		$obj->setSelected(0);

		$res13 = ["className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 35, "dataLabels" => ["dataLabels" => "d4d108fe6659fac79420fa083ef3adf2"], "description" => "67daf92c833c41c95db874e18fcb2786", "drilldown" => "e3fd48c72943315f737d8a814fda4fd1", "events" => [], "high" => 67, "id" => "b80bb7740288fda1f201890375a60c8f", "labelrank" => 33, "low" => 2, "name" => "b068931cc450442b63f5b3d276ea4297", "selected" => 0];
		$this->assertEquals($res13, $obj->toArray());

		$obj->setX(43);

		$res14 = ["className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 35, "dataLabels" => ["dataLabels" => "d4d108fe6659fac79420fa083ef3adf2"], "description" => "67daf92c833c41c95db874e18fcb2786", "drilldown" => "e3fd48c72943315f737d8a814fda4fd1", "events" => [], "high" => 67, "id" => "b80bb7740288fda1f201890375a60c8f", "labelrank" => 33, "low" => 2, "name" => "b068931cc450442b63f5b3d276ea4297", "selected" => 0, "x" => 43];
		$this->assertEquals($res14, $obj->toArray());
	}

}
