<?php

/**
 * This file is part of the highcharts-bundle package.
 *
 * (c) 2017 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\HighchartsBundle\Tests\API\Chart\Series\Treemap;

use PHPUnit_Framework_TestCase;

/**
 * Highcharts data test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\HighchartsBundle\Tests\API\Chart\Series\Treemap
 * @version 5.0.14
 */
final class HighchartsDataTest extends PHPUnit_Framework_TestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstructor() {

        $obj1 = new \WBW\Bundle\HighchartsBundle\API\Chart\Series\Treemap\HighchartsData(true);

        $this->assertNull($obj1->getClassName());
        $this->assertNull($obj1->getColor());
        $this->assertNull($obj1->getColorIndex());
        $this->assertNull($obj1->getColorValue());
        $this->assertNull($obj1->getDataLabels());
        $this->assertNull($obj1->getDescription());
        $this->assertNull($obj1->getDrilldown());
        $this->assertNull($obj1->getEvents());
        $this->assertNull($obj1->getId());
        $this->assertNull($obj1->getLabelrank());
        $this->assertNull($obj1->getName());
        $this->assertNull($obj1->getParent());
        $this->assertNull($obj1->getSelected());
        $this->assertNull($obj1->getValue());

        $obj0 = new \WBW\Bundle\HighchartsBundle\API\Chart\Series\Treemap\HighchartsData(false);

        $this->assertNull($obj0->getClassName());
        $this->assertNull($obj0->getColor());
        $this->assertNull($obj0->getColorIndex());
        $this->assertNull($obj0->getColorValue());
        $this->assertNull($obj0->getDataLabels());
        $this->assertNull($obj0->getDescription());
        $this->assertNull($obj0->getDrilldown());
        $this->assertNull($obj0->getEvents());
        $this->assertNull($obj0->getId());
        $this->assertNull($obj0->getLabelrank());
        $this->assertNull($obj0->getName());
        $this->assertNull($obj0->getParent());
        $this->assertEquals(false, $obj0->getSelected());
        $this->assertNull($obj0->getValue());
    }

    /**
     * Tests the clear() method.
     *
     * @return void
     */
    public function testClear() {

        $obj = new \WBW\Bundle\HighchartsBundle\API\Chart\Series\Treemap\HighchartsData(false);

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

        $obj = new \WBW\Bundle\HighchartsBundle\API\Chart\Series\Treemap\HighchartsData(true);

        $this->assertEquals([], $obj->jsonSerialize());
    }

    /**
     * Tests the newEvents() method.
     *
     * @return void.
     */
    public function testNewEvents() {

        $obj = new \WBW\Bundle\HighchartsBundle\API\Chart\Series\Treemap\HighchartsData(false);

        $res = $obj->newEvents();
        $this->assertInstanceOf(\WBW\Bundle\HighchartsBundle\API\Chart\Series\Treemap\Data\HighchartsEvents::class, $res);
    }

    /**
     * Tests the toArray() method.
     *
     * @return void
     */
    public function testToArray() {

        $obj = new \WBW\Bundle\HighchartsBundle\API\Chart\Series\Treemap\HighchartsData(true);

        $obj->setClassName("6f66e878c62db60568a3487869695820");

        $res1 = ["className" => "6f66e878c62db60568a3487869695820"];
        $this->assertEquals($res1, $obj->toArray());

        $obj->setColor("70dda5dfb8053dc6d1c492574bce9bfd");

        $res2 = ["className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd"];
        $this->assertEquals($res2, $obj->toArray());

        $obj->setColorIndex(62);

        $res3 = ["className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 62];
        $this->assertEquals($res3, $obj->toArray());

        $obj->setColorValue(31);

        $res4 = ["className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 62, "colorValue" => 31];
        $this->assertEquals($res4, $obj->toArray());

        $obj->setDataLabels(["dataLabels" => "d4d108fe6659fac79420fa083ef3adf2"]);

        $res5 = ["className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 62, "colorValue" => 31, "dataLabels" => ["dataLabels" => "d4d108fe6659fac79420fa083ef3adf2"]];
        $this->assertEquals($res5, $obj->toArray());

        $obj->setDescription("67daf92c833c41c95db874e18fcb2786");

        $res6 = ["className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 62, "colorValue" => 31, "dataLabels" => ["dataLabels" => "d4d108fe6659fac79420fa083ef3adf2"], "description" => "67daf92c833c41c95db874e18fcb2786"];
        $this->assertEquals($res6, $obj->toArray());

        $obj->setDrilldown("e3fd48c72943315f737d8a814fda4fd1");

        $res7 = ["className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 62, "colorValue" => 31, "dataLabels" => ["dataLabels" => "d4d108fe6659fac79420fa083ef3adf2"], "description" => "67daf92c833c41c95db874e18fcb2786", "drilldown" => "e3fd48c72943315f737d8a814fda4fd1"];
        $this->assertEquals($res7, $obj->toArray());

        $obj->setEvents(new \WBW\Bundle\HighchartsBundle\API\Chart\Series\Treemap\Data\HighchartsEvents());

        $res8 = ["className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 62, "colorValue" => 31, "dataLabels" => ["dataLabels" => "d4d108fe6659fac79420fa083ef3adf2"], "description" => "67daf92c833c41c95db874e18fcb2786", "drilldown" => "e3fd48c72943315f737d8a814fda4fd1", "events" => []];
        $this->assertEquals($res8, $obj->toArray());

        $obj->setId("b80bb7740288fda1f201890375a60c8f");

        $res9 = ["className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 62, "colorValue" => 31, "dataLabels" => ["dataLabels" => "d4d108fe6659fac79420fa083ef3adf2"], "description" => "67daf92c833c41c95db874e18fcb2786", "drilldown" => "e3fd48c72943315f737d8a814fda4fd1", "events" => [], "id" => "b80bb7740288fda1f201890375a60c8f"];
        $this->assertEquals($res9, $obj->toArray());

        $obj->setLabelrank(39);

        $res10 = ["className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 62, "colorValue" => 31, "dataLabels" => ["dataLabels" => "d4d108fe6659fac79420fa083ef3adf2"], "description" => "67daf92c833c41c95db874e18fcb2786", "drilldown" => "e3fd48c72943315f737d8a814fda4fd1", "events" => [], "id" => "b80bb7740288fda1f201890375a60c8f", "labelrank" => 39];
        $this->assertEquals($res10, $obj->toArray());

        $obj->setName("b068931cc450442b63f5b3d276ea4297");

        $res11 = ["className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 62, "colorValue" => 31, "dataLabels" => ["dataLabels" => "d4d108fe6659fac79420fa083ef3adf2"], "description" => "67daf92c833c41c95db874e18fcb2786", "drilldown" => "e3fd48c72943315f737d8a814fda4fd1", "events" => [], "id" => "b80bb7740288fda1f201890375a60c8f", "labelrank" => 39, "name" => "b068931cc450442b63f5b3d276ea4297"];
        $this->assertEquals($res11, $obj->toArray());

        $obj->setParent("d0e45878043844ffc41aac437e86b602");

        $res12 = ["className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 62, "colorValue" => 31, "dataLabels" => ["dataLabels" => "d4d108fe6659fac79420fa083ef3adf2"], "description" => "67daf92c833c41c95db874e18fcb2786", "drilldown" => "e3fd48c72943315f737d8a814fda4fd1", "events" => [], "id" => "b80bb7740288fda1f201890375a60c8f", "labelrank" => 39, "name" => "b068931cc450442b63f5b3d276ea4297", "parent" => "d0e45878043844ffc41aac437e86b602"];
        $this->assertEquals($res12, $obj->toArray());

        $obj->setSelected(0);

        $res13 = ["className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 62, "colorValue" => 31, "dataLabels" => ["dataLabels" => "d4d108fe6659fac79420fa083ef3adf2"], "description" => "67daf92c833c41c95db874e18fcb2786", "drilldown" => "e3fd48c72943315f737d8a814fda4fd1", "events" => [], "id" => "b80bb7740288fda1f201890375a60c8f", "labelrank" => 39, "name" => "b068931cc450442b63f5b3d276ea4297", "parent" => "d0e45878043844ffc41aac437e86b602", "selected" => 0];
        $this->assertEquals($res13, $obj->toArray());

        $obj->setValue(39);

        $res14 = ["className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 62, "colorValue" => 31, "dataLabels" => ["dataLabels" => "d4d108fe6659fac79420fa083ef3adf2"], "description" => "67daf92c833c41c95db874e18fcb2786", "drilldown" => "e3fd48c72943315f737d8a814fda4fd1", "events" => [], "id" => "b80bb7740288fda1f201890375a60c8f", "labelrank" => 39, "name" => "b068931cc450442b63f5b3d276ea4297", "parent" => "d0e45878043844ffc41aac437e86b602", "selected" => 0, "value" => 39];
        $this->assertEquals($res14, $obj->toArray());
    }

}
