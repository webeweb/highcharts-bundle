<?php

/*
 * This file is part of the WBWHighchartsBundle package.
 *
 * (c) 2017 NdC/WBW
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\HighchartsBundle\Tests\API\Chart\Series\Pyramid;

use PHPUnit_Framework_TestCase;

/**
 * Highcharts data test.
 *
 * @author NdC/WBW <https://github.com/webeweb/>
 * @package WBW\Bundle\HighchartsBundle\Tests\API\Chart\Series\Pyramid
 * @version 5.0.14
 */
final class HighchartsDataTest extends PHPUnit_Framework_TestCase {

    /**
     * Test the __construct() method.
     *
     * @return void
     */
    public function testConstructor() {

        $obj1 = new \WBW\Bundle\HighchartsBundle\API\Chart\Series\Pyramid\HighchartsData(true);

        $this->assertEquals(null, $obj1->getClassName(), "The method getClassName() does not return the expected value");
        $this->assertEquals(null, $obj1->getColor(), "The method getColor() does not return the expected value");
        $this->assertEquals(null, $obj1->getColorIndex(), "The method getColorIndex() does not return the expected value");
        $this->assertEquals(null, $obj1->getDataLabels(), "The method getDataLabels() does not return the expected value");
        $this->assertEquals(null, $obj1->getDescription(), "The method getDescription() does not return the expected value");
        $this->assertEquals(null, $obj1->getDrilldown(), "The method getDrilldown() does not return the expected value");
        $this->assertEquals(null, $obj1->getEvents(), "The method getEvents() does not return the expected value");
        $this->assertEquals(null, $obj1->getId(), "The method getId() does not return the expected value");
        $this->assertEquals(null, $obj1->getLabelrank(), "The method getLabelrank() does not return the expected value");
        $this->assertEquals(null, $obj1->getLegendIndex(), "The method getLegendIndex() does not return the expected value");
        $this->assertEquals(null, $obj1->getName(), "The method getName() does not return the expected value");
        $this->assertEquals(null, $obj1->getSelected(), "The method getSelected() does not return the expected value");
        $this->assertEquals(null, $obj1->getY(), "The method getY() does not return the expected value");

        $obj0 = new \WBW\Bundle\HighchartsBundle\API\Chart\Series\Pyramid\HighchartsData(false);

        $this->assertEquals(null, $obj0->getClassName(), "The method getClassName() does not return the expected value");
        $this->assertEquals(null, $obj0->getColor(), "The method getColor() does not return the expected value");
        $this->assertEquals(null, $obj0->getColorIndex(), "The method getColorIndex() does not return the expected value");
        $this->assertEquals(null, $obj0->getDataLabels(), "The method getDataLabels() does not return the expected value");
        $this->assertEquals(null, $obj0->getDescription(), "The method getDescription() does not return the expected value");
        $this->assertEquals(null, $obj0->getDrilldown(), "The method getDrilldown() does not return the expected value");
        $this->assertEquals(null, $obj0->getEvents(), "The method getEvents() does not return the expected value");
        $this->assertEquals(null, $obj0->getId(), "The method getId() does not return the expected value");
        $this->assertEquals(null, $obj0->getLabelrank(), "The method getLabelrank() does not return the expected value");
        $this->assertEquals(null, $obj0->getLegendIndex(), "The method getLegendIndex() does not return the expected value");
        $this->assertEquals(null, $obj0->getName(), "The method getName() does not return the expected value");
        $this->assertEquals(false, $obj0->getSelected(), "The method getSelected() does not return the expected value");
        $this->assertEquals(null, $obj0->getY(), "The method getY() does not return the expected value");
    }

    /**
     * Test the clear() method.
     *
     * @return void
     */
    public function testClear() {

        $obj = new \WBW\Bundle\HighchartsBundle\API\Chart\Series\Pyramid\HighchartsData(false);

        $obj->newEvents();

        $obj->clear();

        $res = ["events" => []];
        $this->assertEquals($res, $obj->toArray(), "The method toArray() does not return the expected array");
    }

    /**
     * Test the jsonSerialize() method.
     *
     * @return void
     */
    public function testJsonSerialize() {

        $obj = new \WBW\Bundle\HighchartsBundle\API\Chart\Series\Pyramid\HighchartsData(true);

        $this->assertEquals([], $obj->jsonSerialize(), "The method jsonSerialize() does not return the expected value");
    }

    /**
     * Tests the newEvents() method.
     *
     * @return void.
     */
    public function testNewEvents() {

        $obj = new \WBW\Bundle\HighchartsBundle\API\Chart\Series\Pyramid\HighchartsData(false);

        $res = $obj->newEvents();
        $this->assertInstanceOf(\WBW\Bundle\HighchartsBundle\API\Chart\Series\Pyramid\Data\HighchartsEvents::class, $res, "The method newEvents() does not return the expected object");
    }

    /**
     * Test the toArray() method.
     *
     * @return void
     */
    public function testToArray() {

        $obj = new \WBW\Bundle\HighchartsBundle\API\Chart\Series\Pyramid\HighchartsData(true);

        $obj->setClassName("6f66e878c62db60568a3487869695820");

        $res1 = ["className" => "6f66e878c62db60568a3487869695820"];
        $this->assertEquals($res1, $obj->toArray(), "The method toArray() does not return the expected array with class name");

        $obj->setColor("70dda5dfb8053dc6d1c492574bce9bfd");

        $res2 = ["className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd"];
        $this->assertEquals($res2, $obj->toArray(), "The method toArray() does not return the expected array with color");

        $obj->setColorIndex(98);

        $res3 = ["className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 98];
        $this->assertEquals($res3, $obj->toArray(), "The method toArray() does not return the expected array with color index");

        $obj->setDataLabels(["dataLabels" => "d4d108fe6659fac79420fa083ef3adf2"]);

        $res4 = ["className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 98, "dataLabels" => ["dataLabels" => "d4d108fe6659fac79420fa083ef3adf2"]];
        $this->assertEquals($res4, $obj->toArray(), "The method toArray() does not return the expected array with data labels");

        $obj->setDescription("67daf92c833c41c95db874e18fcb2786");

        $res5 = ["className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 98, "dataLabels" => ["dataLabels" => "d4d108fe6659fac79420fa083ef3adf2"], "description" => "67daf92c833c41c95db874e18fcb2786"];
        $this->assertEquals($res5, $obj->toArray(), "The method toArray() does not return the expected array with description");

        $obj->setDrilldown("e3fd48c72943315f737d8a814fda4fd1");

        $res6 = ["className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 98, "dataLabels" => ["dataLabels" => "d4d108fe6659fac79420fa083ef3adf2"], "description" => "67daf92c833c41c95db874e18fcb2786", "drilldown" => "e3fd48c72943315f737d8a814fda4fd1"];
        $this->assertEquals($res6, $obj->toArray(), "The method toArray() does not return the expected array with drilldown");

        $obj->setEvents(new \WBW\Bundle\HighchartsBundle\API\Chart\Series\Pyramid\Data\HighchartsEvents());

        $res7 = ["className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 98, "dataLabels" => ["dataLabels" => "d4d108fe6659fac79420fa083ef3adf2"], "description" => "67daf92c833c41c95db874e18fcb2786", "drilldown" => "e3fd48c72943315f737d8a814fda4fd1", "events" => []];
        $this->assertEquals($res7, $obj->toArray(), "The method toArray() does not return the expected array with events");

        $obj->setId("b80bb7740288fda1f201890375a60c8f");

        $res8 = ["className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 98, "dataLabels" => ["dataLabels" => "d4d108fe6659fac79420fa083ef3adf2"], "description" => "67daf92c833c41c95db874e18fcb2786", "drilldown" => "e3fd48c72943315f737d8a814fda4fd1", "events" => [], "id" => "b80bb7740288fda1f201890375a60c8f"];
        $this->assertEquals($res8, $obj->toArray(), "The method toArray() does not return the expected array with id");

        $obj->setLabelrank(82);

        $res9 = ["className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 98, "dataLabels" => ["dataLabels" => "d4d108fe6659fac79420fa083ef3adf2"], "description" => "67daf92c833c41c95db874e18fcb2786", "drilldown" => "e3fd48c72943315f737d8a814fda4fd1", "events" => [], "id" => "b80bb7740288fda1f201890375a60c8f", "labelrank" => 82];
        $this->assertEquals($res9, $obj->toArray(), "The method toArray() does not return the expected array with labelrank");

        $obj->setLegendIndex(77);

        $res10 = ["className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 98, "dataLabels" => ["dataLabels" => "d4d108fe6659fac79420fa083ef3adf2"], "description" => "67daf92c833c41c95db874e18fcb2786", "drilldown" => "e3fd48c72943315f737d8a814fda4fd1", "events" => [], "id" => "b80bb7740288fda1f201890375a60c8f", "labelrank" => 82, "legendIndex" => 77];
        $this->assertEquals($res10, $obj->toArray(), "The method toArray() does not return the expected array with legend index");

        $obj->setName("b068931cc450442b63f5b3d276ea4297");

        $res11 = ["className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 98, "dataLabels" => ["dataLabels" => "d4d108fe6659fac79420fa083ef3adf2"], "description" => "67daf92c833c41c95db874e18fcb2786", "drilldown" => "e3fd48c72943315f737d8a814fda4fd1", "events" => [], "id" => "b80bb7740288fda1f201890375a60c8f", "labelrank" => 82, "legendIndex" => 77, "name" => "b068931cc450442b63f5b3d276ea4297"];
        $this->assertEquals($res11, $obj->toArray(), "The method toArray() does not return the expected array with name");

        $obj->setSelected(0);

        $res12 = ["className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 98, "dataLabels" => ["dataLabels" => "d4d108fe6659fac79420fa083ef3adf2"], "description" => "67daf92c833c41c95db874e18fcb2786", "drilldown" => "e3fd48c72943315f737d8a814fda4fd1", "events" => [], "id" => "b80bb7740288fda1f201890375a60c8f", "labelrank" => 82, "legendIndex" => 77, "name" => "b068931cc450442b63f5b3d276ea4297", "selected" => 0];
        $this->assertEquals($res12, $obj->toArray(), "The method toArray() does not return the expected array with selected");

        $obj->setY(53);

        $res13 = ["className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 98, "dataLabels" => ["dataLabels" => "d4d108fe6659fac79420fa083ef3adf2"], "description" => "67daf92c833c41c95db874e18fcb2786", "drilldown" => "e3fd48c72943315f737d8a814fda4fd1", "events" => [], "id" => "b80bb7740288fda1f201890375a60c8f", "labelrank" => 82, "legendIndex" => 77, "name" => "b068931cc450442b63f5b3d276ea4297", "selected" => 0, "y" => 53];
        $this->assertEquals($res13, $obj->toArray(), "The method toArray() does not return the expected array with y");
    }

}
