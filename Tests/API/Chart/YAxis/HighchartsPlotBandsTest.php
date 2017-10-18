<?php

/*
 * This file is part of the WBWHighchartsBundle package.
 *
 * (c) 2017 NdC/WBW
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\HighchartsBundle\Tests\API\Chart\YAxis;

use PHPUnit_Framework_TestCase;

/**
 * Highcharts plot bands test.
 *
 * @author NdC/WBW <https://github.com/webeweb/>
 * @package WBW\Bundle\HighchartsBundle\Tests\API\Chart\YAxis
 * @version 5.0.14
 */
final class HighchartsPlotBandsTest extends PHPUnit_Framework_TestCase {

    /**
     * Test the __construct() method.
     *
     * @return void
     */
    public function testConstructor() {

        $obj1 = new \WBW\Bundle\HighchartsBundle\API\Chart\YAxis\HighchartsPlotBands(true);

        $this->assertEquals(null, $obj1->getBorderColor(), "The method getBorderColor() does not return the expected value");
        $this->assertEquals(null, $obj1->getBorderWidth(), "The method getBorderWidth() does not return the expected value");
        $this->assertEquals(null, $obj1->getClassName(), "The method getClassName() does not return the expected value");
        $this->assertEquals(null, $obj1->getColor(), "The method getColor() does not return the expected value");
        $this->assertEquals(null, $obj1->getEvents(), "The method getEvents() does not return the expected value");
        $this->assertEquals(null, $obj1->getFrom(), "The method getFrom() does not return the expected value");
        $this->assertEquals(null, $obj1->getId(), "The method getId() does not return the expected value");
        $this->assertEquals(null, $obj1->getInnerRadius(), "The method getInnerRadius() does not return the expected value");
        $this->assertEquals(null, $obj1->getLabel(), "The method getLabel() does not return the expected value");
        $this->assertEquals(null, $obj1->getOuterRadius(), "The method getOuterRadius() does not return the expected value");
        $this->assertEquals(null, $obj1->getThickness(), "The method getThickness() does not return the expected value");
        $this->assertEquals(null, $obj1->getTo(), "The method getTo() does not return the expected value");
        $this->assertEquals(null, $obj1->getZIndex(), "The method getZIndex() does not return the expected value");

        $obj0 = new \WBW\Bundle\HighchartsBundle\API\Chart\YAxis\HighchartsPlotBands(false);

        $this->assertEquals(null, $obj0->getBorderColor(), "The method getBorderColor() does not return the expected value");
        $this->assertEquals(0, $obj0->getBorderWidth(), "The method getBorderWidth() does not return the expected value");
        $this->assertEquals(null, $obj0->getClassName(), "The method getClassName() does not return the expected value");
        $this->assertEquals(null, $obj0->getColor(), "The method getColor() does not return the expected value");
        $this->assertEquals(null, $obj0->getEvents(), "The method getEvents() does not return the expected value");
        $this->assertEquals(null, $obj0->getFrom(), "The method getFrom() does not return the expected value");
        $this->assertEquals(null, $obj0->getId(), "The method getId() does not return the expected value");
        $this->assertEquals(null, $obj0->getInnerRadius(), "The method getInnerRadius() does not return the expected value");
        $this->assertEquals(null, $obj0->getLabel(), "The method getLabel() does not return the expected value");
        $this->assertEquals("100%", $obj0->getOuterRadius(), "The method getOuterRadius() does not return the expected value");
        $this->assertEquals("10", $obj0->getThickness(), "The method getThickness() does not return the expected value");
        $this->assertEquals(null, $obj0->getTo(), "The method getTo() does not return the expected value");
        $this->assertEquals(null, $obj0->getZIndex(), "The method getZIndex() does not return the expected value");
    }

    /**
     * Test the clear() method.
     *
     * @return void
     */
    public function testClear() {

        $obj = new \WBW\Bundle\HighchartsBundle\API\Chart\YAxis\HighchartsPlotBands(false);

        $obj->newLabel();

        $obj->clear();

        $res = ["label" => []];
        $this->assertEquals($res, $obj->toArray(), "The method toArray() does not return the expected array");
    }

    /**
     * Test the jsonSerialize() method.
     *
     * @return void
     */
    public function testJsonSerialize() {

        $obj = new \WBW\Bundle\HighchartsBundle\API\Chart\YAxis\HighchartsPlotBands(true);

        $this->assertEquals([], $obj->jsonSerialize(), "The method jsonSerialize() does not return the expected value");
    }

    /**
     * Tests the newLabel() method.
     *
     * @return void.
     */
    public function testNewLabel() {

        $obj = new \WBW\Bundle\HighchartsBundle\API\Chart\YAxis\HighchartsPlotBands(false);

        $res = $obj->newLabel();
        $this->assertInstanceOf(\WBW\Bundle\HighchartsBundle\API\Chart\YAxis\PlotBands\HighchartsLabel::class, $res, "The method newLabel() does not return the expected object");
    }

    /**
     * Test the toArray() method.
     *
     * @return void
     */
    public function testToArray() {

        $obj = new \WBW\Bundle\HighchartsBundle\API\Chart\YAxis\HighchartsPlotBands(true);

        $obj->setBorderColor("97da935a74593c55d78be9d1295aa994");

        $res1 = ["borderColor" => "97da935a74593c55d78be9d1295aa994"];
        $this->assertEquals($res1, $obj->toArray(), "The method toArray() does not return the expected array with border color");

        $obj->setBorderWidth(15);

        $res2 = ["borderColor" => "97da935a74593c55d78be9d1295aa994", "borderWidth" => 15];
        $this->assertEquals($res2, $obj->toArray(), "The method toArray() does not return the expected array with border width");

        $obj->setClassName("6f66e878c62db60568a3487869695820");

        $res3 = ["borderColor" => "97da935a74593c55d78be9d1295aa994", "borderWidth" => 15, "className" => "6f66e878c62db60568a3487869695820"];
        $this->assertEquals($res3, $obj->toArray(), "The method toArray() does not return the expected array with class name");

        $obj->setColor("70dda5dfb8053dc6d1c492574bce9bfd");

        $res4 = ["borderColor" => "97da935a74593c55d78be9d1295aa994", "borderWidth" => 15, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd"];
        $this->assertEquals($res4, $obj->toArray(), "The method toArray() does not return the expected array with color");

        $obj->setEvents(["events" => "16908b0605f2645dfcb4c3a8d248cef3"]);

        $res5 = ["borderColor" => "97da935a74593c55d78be9d1295aa994", "borderWidth" => 15, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "events" => ["events" => "16908b0605f2645dfcb4c3a8d248cef3"]];
        $this->assertEquals($res5, $obj->toArray(), "The method toArray() does not return the expected array with events");

        $obj->setFrom(8);

        $res6 = ["borderColor" => "97da935a74593c55d78be9d1295aa994", "borderWidth" => 15, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "events" => ["events" => "16908b0605f2645dfcb4c3a8d248cef3"], "from" => 8];
        $this->assertEquals($res6, $obj->toArray(), "The method toArray() does not return the expected array with from");

        $obj->setId("b80bb7740288fda1f201890375a60c8f");

        $res7 = ["borderColor" => "97da935a74593c55d78be9d1295aa994", "borderWidth" => 15, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "events" => ["events" => "16908b0605f2645dfcb4c3a8d248cef3"], "from" => 8, "id" => "b80bb7740288fda1f201890375a60c8f"];
        $this->assertEquals($res7, $obj->toArray(), "The method toArray() does not return the expected array with id");

        $obj->setInnerRadius(93);

        $res8 = ["borderColor" => "97da935a74593c55d78be9d1295aa994", "borderWidth" => 15, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "events" => ["events" => "16908b0605f2645dfcb4c3a8d248cef3"], "from" => 8, "id" => "b80bb7740288fda1f201890375a60c8f", "innerRadius" => 93];
        $this->assertEquals($res8, $obj->toArray(), "The method toArray() does not return the expected array with inner radius");

        $obj->setLabel(new \WBW\Bundle\HighchartsBundle\API\Chart\YAxis\PlotBands\HighchartsLabel());

        $res9 = ["borderColor" => "97da935a74593c55d78be9d1295aa994", "borderWidth" => 15, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "events" => ["events" => "16908b0605f2645dfcb4c3a8d248cef3"], "from" => 8, "id" => "b80bb7740288fda1f201890375a60c8f", "innerRadius" => 93, "label" => []];
        $this->assertEquals($res9, $obj->toArray(), "The method toArray() does not return the expected array with label");

        $obj->setOuterRadius(30);

        $res10 = ["borderColor" => "97da935a74593c55d78be9d1295aa994", "borderWidth" => 15, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "events" => ["events" => "16908b0605f2645dfcb4c3a8d248cef3"], "from" => 8, "id" => "b80bb7740288fda1f201890375a60c8f", "innerRadius" => 93, "label" => [], "outerRadius" => 30];
        $this->assertEquals($res10, $obj->toArray(), "The method toArray() does not return the expected array with outer radius");

        $obj->setThickness(40);

        $res11 = ["borderColor" => "97da935a74593c55d78be9d1295aa994", "borderWidth" => 15, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "events" => ["events" => "16908b0605f2645dfcb4c3a8d248cef3"], "from" => 8, "id" => "b80bb7740288fda1f201890375a60c8f", "innerRadius" => 93, "label" => [], "outerRadius" => 30, "thickness" => 40];
        $this->assertEquals($res11, $obj->toArray(), "The method toArray() does not return the expected array with thickness");

        $obj->setTo(87);

        $res12 = ["borderColor" => "97da935a74593c55d78be9d1295aa994", "borderWidth" => 15, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "events" => ["events" => "16908b0605f2645dfcb4c3a8d248cef3"], "from" => 8, "id" => "b80bb7740288fda1f201890375a60c8f", "innerRadius" => 93, "label" => [], "outerRadius" => 30, "thickness" => 40, "to" => 87];
        $this->assertEquals($res12, $obj->toArray(), "The method toArray() does not return the expected array with to");

        $obj->setZIndex(79);

        $res13 = ["borderColor" => "97da935a74593c55d78be9d1295aa994", "borderWidth" => 15, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "events" => ["events" => "16908b0605f2645dfcb4c3a8d248cef3"], "from" => 8, "id" => "b80bb7740288fda1f201890375a60c8f", "innerRadius" => 93, "label" => [], "outerRadius" => 30, "thickness" => 40, "to" => 87, "zIndex" => 79];
        $this->assertEquals($res13, $obj->toArray(), "The method toArray() does not return the expected array with z index");
    }

}
