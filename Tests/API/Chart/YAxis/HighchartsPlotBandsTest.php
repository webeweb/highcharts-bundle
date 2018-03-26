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

        $this->assertNull($obj1->getBorderColor());
        $this->assertNull($obj1->getBorderWidth());
        $this->assertNull($obj1->getClassName());
        $this->assertNull($obj1->getColor());
        $this->assertNull($obj1->getEvents());
        $this->assertNull($obj1->getFrom());
        $this->assertNull($obj1->getId());
        $this->assertNull($obj1->getInnerRadius());
        $this->assertNull($obj1->getLabel());
        $this->assertNull($obj1->getOuterRadius());
        $this->assertNull($obj1->getThickness());
        $this->assertNull($obj1->getTo());
        $this->assertNull($obj1->getZIndex());

        $obj0 = new \WBW\Bundle\HighchartsBundle\API\Chart\YAxis\HighchartsPlotBands(false);

        $this->assertNull($obj0->getBorderColor());
        $this->assertEquals(0, $obj0->getBorderWidth());
        $this->assertNull($obj0->getClassName());
        $this->assertNull($obj0->getColor());
        $this->assertNull($obj0->getEvents());
        $this->assertNull($obj0->getFrom());
        $this->assertNull($obj0->getId());
        $this->assertNull($obj0->getInnerRadius());
        $this->assertNull($obj0->getLabel());
        $this->assertEquals("100%", $obj0->getOuterRadius());
        $this->assertEquals("10", $obj0->getThickness());
        $this->assertNull($obj0->getTo());
        $this->assertNull($obj0->getZIndex());
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

        $obj->setBorderWidth(62);

        $res2 = ["borderColor" => "97da935a74593c55d78be9d1295aa994", "borderWidth" => 62];
        $this->assertEquals($res2, $obj->toArray());

        $obj->setClassName("6f66e878c62db60568a3487869695820");

        $res3 = ["borderColor" => "97da935a74593c55d78be9d1295aa994", "borderWidth" => 62, "className" => "6f66e878c62db60568a3487869695820"];
        $this->assertEquals($res3, $obj->toArray());

        $obj->setColor("70dda5dfb8053dc6d1c492574bce9bfd");

        $res4 = ["borderColor" => "97da935a74593c55d78be9d1295aa994", "borderWidth" => 62, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd"];
        $this->assertEquals($res4, $obj->toArray());

        $obj->setEvents(["events" => "16908b0605f2645dfcb4c3a8d248cef3"]);

        $res5 = ["borderColor" => "97da935a74593c55d78be9d1295aa994", "borderWidth" => 62, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "events" => ["events" => "16908b0605f2645dfcb4c3a8d248cef3"]];
        $this->assertEquals($res5, $obj->toArray());

        $obj->setFrom(67);

        $res6 = ["borderColor" => "97da935a74593c55d78be9d1295aa994", "borderWidth" => 62, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "events" => ["events" => "16908b0605f2645dfcb4c3a8d248cef3"], "from" => 67];
        $this->assertEquals($res6, $obj->toArray());

        $obj->setId("b80bb7740288fda1f201890375a60c8f");

        $res7 = ["borderColor" => "97da935a74593c55d78be9d1295aa994", "borderWidth" => 62, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "events" => ["events" => "16908b0605f2645dfcb4c3a8d248cef3"], "from" => 67, "id" => "b80bb7740288fda1f201890375a60c8f"];
        $this->assertEquals($res7, $obj->toArray());

        $obj->setInnerRadius(47);

        $res8 = ["borderColor" => "97da935a74593c55d78be9d1295aa994", "borderWidth" => 62, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "events" => ["events" => "16908b0605f2645dfcb4c3a8d248cef3"], "from" => 67, "id" => "b80bb7740288fda1f201890375a60c8f", "innerRadius" => 47];
        $this->assertEquals($res8, $obj->toArray());

        $obj->setLabel(new \WBW\Bundle\HighchartsBundle\API\Chart\YAxis\PlotBands\HighchartsLabel());

        $res9 = ["borderColor" => "97da935a74593c55d78be9d1295aa994", "borderWidth" => 62, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "events" => ["events" => "16908b0605f2645dfcb4c3a8d248cef3"], "from" => 67, "id" => "b80bb7740288fda1f201890375a60c8f", "innerRadius" => 47, "label" => []];
        $this->assertEquals($res9, $obj->toArray());

        $obj->setOuterRadius(82);

        $res10 = ["borderColor" => "97da935a74593c55d78be9d1295aa994", "borderWidth" => 62, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "events" => ["events" => "16908b0605f2645dfcb4c3a8d248cef3"], "from" => 67, "id" => "b80bb7740288fda1f201890375a60c8f", "innerRadius" => 47, "label" => [], "outerRadius" => 82];
        $this->assertEquals($res10, $obj->toArray());

        $obj->setThickness(0);

        $res11 = ["borderColor" => "97da935a74593c55d78be9d1295aa994", "borderWidth" => 62, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "events" => ["events" => "16908b0605f2645dfcb4c3a8d248cef3"], "from" => 67, "id" => "b80bb7740288fda1f201890375a60c8f", "innerRadius" => 47, "label" => [], "outerRadius" => 82, "thickness" => 0];
        $this->assertEquals($res11, $obj->toArray());

        $obj->setTo(57);

        $res12 = ["borderColor" => "97da935a74593c55d78be9d1295aa994", "borderWidth" => 62, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "events" => ["events" => "16908b0605f2645dfcb4c3a8d248cef3"], "from" => 67, "id" => "b80bb7740288fda1f201890375a60c8f", "innerRadius" => 47, "label" => [], "outerRadius" => 82, "thickness" => 0, "to" => 57];
        $this->assertEquals($res12, $obj->toArray());

        $obj->setZIndex(68);

        $res13 = ["borderColor" => "97da935a74593c55d78be9d1295aa994", "borderWidth" => 62, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "events" => ["events" => "16908b0605f2645dfcb4c3a8d248cef3"], "from" => 67, "id" => "b80bb7740288fda1f201890375a60c8f", "innerRadius" => 47, "label" => [], "outerRadius" => 82, "thickness" => 0, "to" => 57, "zIndex" => 68];
        $this->assertEquals($res13, $obj->toArray());
    }

}
