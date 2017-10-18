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
 * Highcharts plot lines test.
 *
 * @author NdC/WBW <https://github.com/webeweb/>
 * @package WBW\Bundle\HighchartsBundle\Tests\API\Chart\YAxis
 * @version 5.0.14
 */
final class HighchartsPlotLinesTest extends PHPUnit_Framework_TestCase {

    /**
     * Test the __construct() method.
     *
     * @return void
     */
    public function testConstructor() {

        $obj1 = new \WBW\Bundle\HighchartsBundle\API\Chart\YAxis\HighchartsPlotLines(true);

        $this->assertEquals(null, $obj1->getClassName(), "The method getClassName() does not return the expected value");
        $this->assertEquals(null, $obj1->getColor(), "The method getColor() does not return the expected value");
        $this->assertEquals(null, $obj1->getDashStyle(), "The method getDashStyle() does not return the expected value");
        $this->assertEquals(null, $obj1->getEvents(), "The method getEvents() does not return the expected value");
        $this->assertEquals(null, $obj1->getId(), "The method getId() does not return the expected value");
        $this->assertEquals(null, $obj1->getLabel(), "The method getLabel() does not return the expected value");
        $this->assertEquals(null, $obj1->getValue(), "The method getValue() does not return the expected value");
        $this->assertEquals(null, $obj1->getWidth(), "The method getWidth() does not return the expected value");
        $this->assertEquals(null, $obj1->getZIndex(), "The method getZIndex() does not return the expected value");

        $obj0 = new \WBW\Bundle\HighchartsBundle\API\Chart\YAxis\HighchartsPlotLines(false);

        $this->assertEquals(null, $obj0->getClassName(), "The method getClassName() does not return the expected value");
        $this->assertEquals(null, $obj0->getColor(), "The method getColor() does not return the expected value");
        $this->assertEquals("Solid", $obj0->getDashStyle(), "The method getDashStyle() does not return the expected value");
        $this->assertEquals(null, $obj0->getEvents(), "The method getEvents() does not return the expected value");
        $this->assertEquals(null, $obj0->getId(), "The method getId() does not return the expected value");
        $this->assertEquals(null, $obj0->getLabel(), "The method getLabel() does not return the expected value");
        $this->assertEquals(null, $obj0->getValue(), "The method getValue() does not return the expected value");
        $this->assertEquals(null, $obj0->getWidth(), "The method getWidth() does not return the expected value");
        $this->assertEquals(null, $obj0->getZIndex(), "The method getZIndex() does not return the expected value");
    }

    /**
     * Test the clear() method.
     *
     * @return void
     */
    public function testClear() {

        $obj = new \WBW\Bundle\HighchartsBundle\API\Chart\YAxis\HighchartsPlotLines(false);

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

        $obj = new \WBW\Bundle\HighchartsBundle\API\Chart\YAxis\HighchartsPlotLines(true);

        $this->assertEquals([], $obj->jsonSerialize(), "The method jsonSerialize() does not return the expected value");
    }

    /**
     * Tests the newLabel() method.
     *
     * @return void.
     */
    public function testNewLabel() {

        $obj = new \WBW\Bundle\HighchartsBundle\API\Chart\YAxis\HighchartsPlotLines(false);

        $res = $obj->newLabel();
        $this->assertInstanceOf(\WBW\Bundle\HighchartsBundle\API\Chart\YAxis\PlotLines\HighchartsLabel::class, $res, "The method newLabel() does not return the expected object");
    }

    /**
     * Test the toArray() method.
     *
     * @return void
     */
    public function testToArray() {

        $obj = new \WBW\Bundle\HighchartsBundle\API\Chart\YAxis\HighchartsPlotLines(true);

        $obj->setClassName("6f66e878c62db60568a3487869695820");

        $res1 = ["className" => "6f66e878c62db60568a3487869695820"];
        $this->assertEquals($res1, $obj->toArray(), "The method toArray() does not return the expected array with class name");

        $obj->setColor("70dda5dfb8053dc6d1c492574bce9bfd");

        $res2 = ["className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd"];
        $this->assertEquals($res2, $obj->toArray(), "The method toArray() does not return the expected array with color");

        $obj->setDashStyle("LongDashDotDot");

        $res3 = ["className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "dashStyle" => "LongDashDotDot"];
        $this->assertEquals($res3, $obj->toArray(), "The method toArray() does not return the expected array with dash style");

        $obj->setEvents(["events" => "16908b0605f2645dfcb4c3a8d248cef3"]);

        $res4 = ["className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "dashStyle" => "LongDashDotDot", "events" => ["events" => "16908b0605f2645dfcb4c3a8d248cef3"]];
        $this->assertEquals($res4, $obj->toArray(), "The method toArray() does not return the expected array with events");

        $obj->setId("b80bb7740288fda1f201890375a60c8f");

        $res5 = ["className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "dashStyle" => "LongDashDotDot", "events" => ["events" => "16908b0605f2645dfcb4c3a8d248cef3"], "id" => "b80bb7740288fda1f201890375a60c8f"];
        $this->assertEquals($res5, $obj->toArray(), "The method toArray() does not return the expected array with id");

        $obj->setLabel(new \WBW\Bundle\HighchartsBundle\API\Chart\YAxis\PlotLines\HighchartsLabel());

        $res6 = ["className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "dashStyle" => "LongDashDotDot", "events" => ["events" => "16908b0605f2645dfcb4c3a8d248cef3"], "id" => "b80bb7740288fda1f201890375a60c8f", "label" => []];
        $this->assertEquals($res6, $obj->toArray(), "The method toArray() does not return the expected array with label");

        $obj->setValue(82);

        $res7 = ["className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "dashStyle" => "LongDashDotDot", "events" => ["events" => "16908b0605f2645dfcb4c3a8d248cef3"], "id" => "b80bb7740288fda1f201890375a60c8f", "label" => [], "value" => 82];
        $this->assertEquals($res7, $obj->toArray(), "The method toArray() does not return the expected array with value");

        $obj->setWidth(81);

        $res8 = ["className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "dashStyle" => "LongDashDotDot", "events" => ["events" => "16908b0605f2645dfcb4c3a8d248cef3"], "id" => "b80bb7740288fda1f201890375a60c8f", "label" => [], "value" => 82, "width" => 81];
        $this->assertEquals($res8, $obj->toArray(), "The method toArray() does not return the expected array with width");

        $obj->setZIndex(92);

        $res9 = ["className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "dashStyle" => "LongDashDotDot", "events" => ["events" => "16908b0605f2645dfcb4c3a8d248cef3"], "id" => "b80bb7740288fda1f201890375a60c8f", "label" => [], "value" => 82, "width" => 81, "zIndex" => 92];
        $this->assertEquals($res9, $obj->toArray(), "The method toArray() does not return the expected array with z index");
    }

}
