<?php

/**
 * This file is part of the highcharts-bundle package.
 *
 * (c) 2017 NdC/WBW
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\HighchartsBundle\Tests\API\Chart\ZAxis;

use PHPUnit_Framework_TestCase;

/**
 * Highcharts plot bands test.
 *
 * @author NdC/WBW <https://github.com/webeweb/>
 * @package WBW\Bundle\HighchartsBundle\Tests\API\Chart\ZAxis
 * @version 5.0.14
 */
final class HighchartsPlotBandsTest extends PHPUnit_Framework_TestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstructor() {

        $obj1 = new \WBW\Bundle\HighchartsBundle\API\Chart\ZAxis\HighchartsPlotBands(true);

        $this->assertEquals(null, $obj1->getBorderColor());
        $this->assertEquals(null, $obj1->getBorderWidth());
        $this->assertEquals(null, $obj1->getClassName());
        $this->assertEquals(null, $obj1->getColor());
        $this->assertEquals(null, $obj1->getEvents());
        $this->assertEquals(null, $obj1->getFrom());
        $this->assertEquals(null, $obj1->getId());
        $this->assertEquals(null, $obj1->getLabel());
        $this->assertEquals(null, $obj1->getTo());
        $this->assertEquals(null, $obj1->getZIndex());

        $obj0 = new \WBW\Bundle\HighchartsBundle\API\Chart\ZAxis\HighchartsPlotBands(false);

        $this->assertEquals(null, $obj0->getBorderColor());
        $this->assertEquals(0, $obj0->getBorderWidth());
        $this->assertEquals(null, $obj0->getClassName());
        $this->assertEquals(null, $obj0->getColor());
        $this->assertEquals(null, $obj0->getEvents());
        $this->assertEquals(null, $obj0->getFrom());
        $this->assertEquals(null, $obj0->getId());
        $this->assertEquals(null, $obj0->getLabel());
        $this->assertEquals(null, $obj0->getTo());
        $this->assertEquals(null, $obj0->getZIndex());
    }

    /**
     * Tests the clear() method.
     *
     * @return void
     */
    public function testClear() {

        $obj = new \WBW\Bundle\HighchartsBundle\API\Chart\ZAxis\HighchartsPlotBands(false);

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

        $obj = new \WBW\Bundle\HighchartsBundle\API\Chart\ZAxis\HighchartsPlotBands(true);

        $this->assertEquals([], $obj->jsonSerialize());
    }

    /**
     * Tests the newLabel() method.
     *
     * @return void.
     */
    public function testNewLabel() {

        $obj = new \WBW\Bundle\HighchartsBundle\API\Chart\ZAxis\HighchartsPlotBands(false);

        $res = $obj->newLabel();
        $this->assertInstanceOf(\WBW\Bundle\HighchartsBundle\API\Chart\ZAxis\PlotBands\HighchartsLabel::class, $res);
    }

    /**
     * Tests the toArray() method.
     *
     * @return void
     */
    public function testToArray() {

        $obj = new \WBW\Bundle\HighchartsBundle\API\Chart\ZAxis\HighchartsPlotBands(true);

        $obj->setBorderColor("97da935a74593c55d78be9d1295aa994");

        $res1 = ["borderColor" => "97da935a74593c55d78be9d1295aa994"];
        $this->assertEquals($res1, $obj->toArray());

        $obj->setBorderWidth(30);

        $res2 = ["borderColor" => "97da935a74593c55d78be9d1295aa994", "borderWidth" => 30];
        $this->assertEquals($res2, $obj->toArray());

        $obj->setClassName("6f66e878c62db60568a3487869695820");

        $res3 = ["borderColor" => "97da935a74593c55d78be9d1295aa994", "borderWidth" => 30, "className" => "6f66e878c62db60568a3487869695820"];
        $this->assertEquals($res3, $obj->toArray());

        $obj->setColor("70dda5dfb8053dc6d1c492574bce9bfd");

        $res4 = ["borderColor" => "97da935a74593c55d78be9d1295aa994", "borderWidth" => 30, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd"];
        $this->assertEquals($res4, $obj->toArray());

        $obj->setEvents(["events" => "16908b0605f2645dfcb4c3a8d248cef3"]);

        $res5 = ["borderColor" => "97da935a74593c55d78be9d1295aa994", "borderWidth" => 30, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "events" => ["events" => "16908b0605f2645dfcb4c3a8d248cef3"]];
        $this->assertEquals($res5, $obj->toArray());

        $obj->setFrom(54);

        $res6 = ["borderColor" => "97da935a74593c55d78be9d1295aa994", "borderWidth" => 30, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "events" => ["events" => "16908b0605f2645dfcb4c3a8d248cef3"], "from" => 54];
        $this->assertEquals($res6, $obj->toArray());

        $obj->setId("b80bb7740288fda1f201890375a60c8f");

        $res7 = ["borderColor" => "97da935a74593c55d78be9d1295aa994", "borderWidth" => 30, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "events" => ["events" => "16908b0605f2645dfcb4c3a8d248cef3"], "from" => 54, "id" => "b80bb7740288fda1f201890375a60c8f"];
        $this->assertEquals($res7, $obj->toArray());

        $obj->setLabel(new \WBW\Bundle\HighchartsBundle\API\Chart\ZAxis\PlotBands\HighchartsLabel());

        $res8 = ["borderColor" => "97da935a74593c55d78be9d1295aa994", "borderWidth" => 30, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "events" => ["events" => "16908b0605f2645dfcb4c3a8d248cef3"], "from" => 54, "id" => "b80bb7740288fda1f201890375a60c8f", "label" => []];
        $this->assertEquals($res8, $obj->toArray());

        $obj->setTo(47);

        $res9 = ["borderColor" => "97da935a74593c55d78be9d1295aa994", "borderWidth" => 30, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "events" => ["events" => "16908b0605f2645dfcb4c3a8d248cef3"], "from" => 54, "id" => "b80bb7740288fda1f201890375a60c8f", "label" => [], "to" => 47];
        $this->assertEquals($res9, $obj->toArray());

        $obj->setZIndex(20);

        $res10 = ["borderColor" => "97da935a74593c55d78be9d1295aa994", "borderWidth" => 30, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "events" => ["events" => "16908b0605f2645dfcb4c3a8d248cef3"], "from" => 54, "id" => "b80bb7740288fda1f201890375a60c8f", "label" => [], "to" => 47, "zIndex" => 20];
        $this->assertEquals($res10, $obj->toArray());
    }

}
