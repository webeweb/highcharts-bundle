<?php

/**
 * This file is part of the highcharts-bundle package.
 *
 * (c) 2017 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\HighchartsBundle\Tests\API\Chart\YAxis;

use PHPUnit_Framework_TestCase;

/**
 * Highcharts plot bands test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\HighchartsBundle\Tests\API\Chart\YAxis
 * @version 5.0.14
 */
final class HighchartsPlotBandsTest extends PHPUnit_Framework_TestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstructor() {

        $obj1 = new \WBW\Bundle\HighchartsBundle\API\Chart\YAxis\HighchartsPlotBands(true);

        $this->assertEquals(null, $obj1->getBorderColor());
        $this->assertEquals(null, $obj1->getBorderWidth());
        $this->assertEquals(null, $obj1->getClassName());
        $this->assertEquals(null, $obj1->getColor());
        $this->assertEquals(null, $obj1->getEvents());
        $this->assertEquals(null, $obj1->getFrom());
        $this->assertEquals(null, $obj1->getId());
        $this->assertEquals(null, $obj1->getInnerRadius());
        $this->assertEquals(null, $obj1->getLabel());
        $this->assertEquals(null, $obj1->getOuterRadius());
        $this->assertEquals(null, $obj1->getThickness());
        $this->assertEquals(null, $obj1->getTo());
        $this->assertEquals(null, $obj1->getZIndex());

        $obj0 = new \WBW\Bundle\HighchartsBundle\API\Chart\YAxis\HighchartsPlotBands(false);

        $this->assertEquals(null, $obj0->getBorderColor());
        $this->assertEquals(0, $obj0->getBorderWidth());
        $this->assertEquals(null, $obj0->getClassName());
        $this->assertEquals(null, $obj0->getColor());
        $this->assertEquals(null, $obj0->getEvents());
        $this->assertEquals(null, $obj0->getFrom());
        $this->assertEquals(null, $obj0->getId());
        $this->assertEquals(null, $obj0->getInnerRadius());
        $this->assertEquals(null, $obj0->getLabel());
        $this->assertEquals("100%", $obj0->getOuterRadius());
        $this->assertEquals("10", $obj0->getThickness());
        $this->assertEquals(null, $obj0->getTo());
        $this->assertEquals(null, $obj0->getZIndex());
    }

    /**
     * Tests the clear() method.
     *
     * @return void
     */
    public function testClear() {

        $obj = new \WBW\Bundle\HighchartsBundle\API\Chart\YAxis\HighchartsPlotBands(false);

        $obj->newLabel();

        $obj->clear();

        $res = ["label" => []];
        $this->assertEquals($res, $obj->toArray());
    }

    /**
     * Tests the jsonSerialize() method.
     *
     * @return void
     */
    public function testJsonSerialize() {

        $obj = new \WBW\Bundle\HighchartsBundle\API\Chart\YAxis\HighchartsPlotBands(true);

        $this->assertEquals([], $obj->jsonSerialize());
    }

    /**
     * Tests the newLabel() method.
     *
     * @return void.
     */
    public function testNewLabel() {

        $obj = new \WBW\Bundle\HighchartsBundle\API\Chart\YAxis\HighchartsPlotBands(false);

        $res = $obj->newLabel();
        $this->assertInstanceOf(\WBW\Bundle\HighchartsBundle\API\Chart\YAxis\PlotBands\HighchartsLabel::class, $res);
    }

    /**
     * Tests the toArray() method.
     *
     * @return void
     */
    public function testToArray() {

        $obj = new \WBW\Bundle\HighchartsBundle\API\Chart\YAxis\HighchartsPlotBands(true);

        $obj->setBorderColor("97da935a74593c55d78be9d1295aa994");

        $res1 = ["borderColor" => "97da935a74593c55d78be9d1295aa994"];
        $this->assertEquals($res1, $obj->toArray());

        $obj->setBorderWidth(85);

        $res2 = ["borderColor" => "97da935a74593c55d78be9d1295aa994", "borderWidth" => 85];
        $this->assertEquals($res2, $obj->toArray());

        $obj->setClassName("6f66e878c62db60568a3487869695820");

        $res3 = ["borderColor" => "97da935a74593c55d78be9d1295aa994", "borderWidth" => 85, "className" => "6f66e878c62db60568a3487869695820"];
        $this->assertEquals($res3, $obj->toArray());

        $obj->setColor("70dda5dfb8053dc6d1c492574bce9bfd");

        $res4 = ["borderColor" => "97da935a74593c55d78be9d1295aa994", "borderWidth" => 85, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd"];
        $this->assertEquals($res4, $obj->toArray());

        $obj->setEvents(["events" => "16908b0605f2645dfcb4c3a8d248cef3"]);

        $res5 = ["borderColor" => "97da935a74593c55d78be9d1295aa994", "borderWidth" => 85, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "events" => ["events" => "16908b0605f2645dfcb4c3a8d248cef3"]];
        $this->assertEquals($res5, $obj->toArray());

        $obj->setFrom(79);

        $res6 = ["borderColor" => "97da935a74593c55d78be9d1295aa994", "borderWidth" => 85, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "events" => ["events" => "16908b0605f2645dfcb4c3a8d248cef3"], "from" => 79];
        $this->assertEquals($res6, $obj->toArray());

        $obj->setId("b80bb7740288fda1f201890375a60c8f");

        $res7 = ["borderColor" => "97da935a74593c55d78be9d1295aa994", "borderWidth" => 85, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "events" => ["events" => "16908b0605f2645dfcb4c3a8d248cef3"], "from" => 79, "id" => "b80bb7740288fda1f201890375a60c8f"];
        $this->assertEquals($res7, $obj->toArray());

        $obj->setInnerRadius(95);

        $res8 = ["borderColor" => "97da935a74593c55d78be9d1295aa994", "borderWidth" => 85, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "events" => ["events" => "16908b0605f2645dfcb4c3a8d248cef3"], "from" => 79, "id" => "b80bb7740288fda1f201890375a60c8f", "innerRadius" => 95];
        $this->assertEquals($res8, $obj->toArray());

        $obj->setLabel(new \WBW\Bundle\HighchartsBundle\API\Chart\YAxis\PlotBands\HighchartsLabel());

        $res9 = ["borderColor" => "97da935a74593c55d78be9d1295aa994", "borderWidth" => 85, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "events" => ["events" => "16908b0605f2645dfcb4c3a8d248cef3"], "from" => 79, "id" => "b80bb7740288fda1f201890375a60c8f", "innerRadius" => 95, "label" => []];
        $this->assertEquals($res9, $obj->toArray());

        $obj->setOuterRadius(9);

        $res10 = ["borderColor" => "97da935a74593c55d78be9d1295aa994", "borderWidth" => 85, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "events" => ["events" => "16908b0605f2645dfcb4c3a8d248cef3"], "from" => 79, "id" => "b80bb7740288fda1f201890375a60c8f", "innerRadius" => 95, "label" => [], "outerRadius" => 9];
        $this->assertEquals($res10, $obj->toArray());

        $obj->setThickness(22);

        $res11 = ["borderColor" => "97da935a74593c55d78be9d1295aa994", "borderWidth" => 85, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "events" => ["events" => "16908b0605f2645dfcb4c3a8d248cef3"], "from" => 79, "id" => "b80bb7740288fda1f201890375a60c8f", "innerRadius" => 95, "label" => [], "outerRadius" => 9, "thickness" => 22];
        $this->assertEquals($res11, $obj->toArray());

        $obj->setTo(38);

        $res12 = ["borderColor" => "97da935a74593c55d78be9d1295aa994", "borderWidth" => 85, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "events" => ["events" => "16908b0605f2645dfcb4c3a8d248cef3"], "from" => 79, "id" => "b80bb7740288fda1f201890375a60c8f", "innerRadius" => 95, "label" => [], "outerRadius" => 9, "thickness" => 22, "to" => 38];
        $this->assertEquals($res12, $obj->toArray());

        $obj->setZIndex(40);

        $res13 = ["borderColor" => "97da935a74593c55d78be9d1295aa994", "borderWidth" => 85, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "events" => ["events" => "16908b0605f2645dfcb4c3a8d248cef3"], "from" => 79, "id" => "b80bb7740288fda1f201890375a60c8f", "innerRadius" => 95, "label" => [], "outerRadius" => 9, "thickness" => 22, "to" => 38, "zIndex" => 40];
        $this->assertEquals($res13, $obj->toArray());
    }

}
