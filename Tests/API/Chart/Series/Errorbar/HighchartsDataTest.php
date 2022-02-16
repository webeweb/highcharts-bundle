<?php

/**
 * This file is part of the highcharts-bundle package.
 *
 * (c) 2017 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\HighchartsBundle\Tests\API\Chart\Series\Errorbar;

use WBW\Bundle\HighchartsBundle\Tests\AbstractTestCase;

/**
 * Highcharts data test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\HighchartsBundle\Tests\API\Chart\Series\Errorbar
 * @version 5.0.14
 */
final class HighchartsDataTest extends AbstractTestCase {

    /**
     * Tests __construct()
     *
     * @return void
     */
    public function test__construct() {

        $obj1 = new \WBW\Bundle\HighchartsBundle\API\Chart\Series\Errorbar\HighchartsData(true);

        $this->assertNull($obj1->getClassName());
        $this->assertNull($obj1->getColor());
        $this->assertNull($obj1->getColorIndex());
        $this->assertNull($obj1->getDescription());
        $this->assertNull($obj1->getEvents());
        $this->assertNull($obj1->getHigh());
        $this->assertNull($obj1->getId());
        $this->assertNull($obj1->getLabelrank());
        $this->assertNull($obj1->getLow());
        $this->assertNull($obj1->getName());
        $this->assertNull($obj1->getSelected());
        $this->assertNull($obj1->getX());

        $obj0 = new \WBW\Bundle\HighchartsBundle\API\Chart\Series\Errorbar\HighchartsData(false);

        $this->assertNull($obj0->getClassName());
        $this->assertNull($obj0->getColor());
        $this->assertNull($obj0->getColorIndex());
        $this->assertNull($obj0->getDescription());
        $this->assertNull($obj0->getEvents());
        $this->assertNull($obj0->getHigh());
        $this->assertNull($obj0->getId());
        $this->assertNull($obj0->getLabelrank());
        $this->assertNull($obj0->getLow());
        $this->assertNull($obj0->getName());
        $this->assertEquals(false, $obj0->getSelected());
        $this->assertNull($obj0->getX());
    }

    /**
     * Tests clear()
     *
     * @return void
     */
    public function testClear() {

        $obj = new \WBW\Bundle\HighchartsBundle\API\Chart\Series\Errorbar\HighchartsData(false);

        $obj->newEvents();

        $obj->clear();

        $res = ["events" => []];
        $this->assertEquals($res, $obj->toArray());
    }

    /**
     * Tests jsonSerialize()
     *
     * @return void
     */
    public function testJsonSerialize() {

        $obj = new \WBW\Bundle\HighchartsBundle\API\Chart\Series\Errorbar\HighchartsData(true);

        $this->assertEquals([], $obj->jsonSerialize());
    }

    /**
     * Tests newEvents()
     *
     * @return void.
     */
    public function testNewEvents() {

        $obj = new \WBW\Bundle\HighchartsBundle\API\Chart\Series\Errorbar\HighchartsData(false);

        $res = $obj->newEvents();
        $this->assertInstanceOf(\WBW\Bundle\HighchartsBundle\API\Chart\Series\Errorbar\Data\HighchartsEvents::class, $res);
    }

    /**
     * Tests toArray()
     *
     * @return void
     */
    public function testToArray() {

        $obj = new \WBW\Bundle\HighchartsBundle\API\Chart\Series\Errorbar\HighchartsData(true);

        $obj->setClassName("6f66e878c62db60568a3487869695820");

        $res1 = ["className" => "6f66e878c62db60568a3487869695820"];
        $this->assertEquals($res1, $obj->toArray());

        $obj->setColor("70dda5dfb8053dc6d1c492574bce9bfd");

        $res2 = ["className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd"];
        $this->assertEquals($res2, $obj->toArray());

        $obj->setColorIndex(58);

        $res3 = ["className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 58];
        $this->assertEquals($res3, $obj->toArray());

        $obj->setDescription("67daf92c833c41c95db874e18fcb2786");

        $res4 = ["className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 58, "description" => "67daf92c833c41c95db874e18fcb2786"];
        $this->assertEquals($res4, $obj->toArray());

        $obj->setEvents(new \WBW\Bundle\HighchartsBundle\API\Chart\Series\Errorbar\Data\HighchartsEvents());

        $res5 = ["className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 58, "description" => "67daf92c833c41c95db874e18fcb2786", "events" => []];
        $this->assertEquals($res5, $obj->toArray());

        $obj->setHigh(55);

        $res6 = ["className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 58, "description" => "67daf92c833c41c95db874e18fcb2786", "events" => [], "high" => 55];
        $this->assertEquals($res6, $obj->toArray());

        $obj->setId("b80bb7740288fda1f201890375a60c8f");

        $res7 = ["className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 58, "description" => "67daf92c833c41c95db874e18fcb2786", "events" => [], "high" => 55, "id" => "b80bb7740288fda1f201890375a60c8f"];
        $this->assertEquals($res7, $obj->toArray());

        $obj->setLabelrank(84);

        $res8 = ["className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 58, "description" => "67daf92c833c41c95db874e18fcb2786", "events" => [], "high" => 55, "id" => "b80bb7740288fda1f201890375a60c8f", "labelrank" => 84];
        $this->assertEquals($res8, $obj->toArray());

        $obj->setLow(53);

        $res9 = ["className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 58, "description" => "67daf92c833c41c95db874e18fcb2786", "events" => [], "high" => 55, "id" => "b80bb7740288fda1f201890375a60c8f", "labelrank" => 84, "low" => 53];
        $this->assertEquals($res9, $obj->toArray());

        $obj->setName("b068931cc450442b63f5b3d276ea4297");

        $res10 = ["className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 58, "description" => "67daf92c833c41c95db874e18fcb2786", "events" => [], "high" => 55, "id" => "b80bb7740288fda1f201890375a60c8f", "labelrank" => 84, "low" => 53, "name" => "b068931cc450442b63f5b3d276ea4297"];
        $this->assertEquals($res10, $obj->toArray());

        $obj->setSelected(1);

        $res11 = ["className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 58, "description" => "67daf92c833c41c95db874e18fcb2786", "events" => [], "high" => 55, "id" => "b80bb7740288fda1f201890375a60c8f", "labelrank" => 84, "low" => 53, "name" => "b068931cc450442b63f5b3d276ea4297", "selected" => 1];
        $this->assertEquals($res11, $obj->toArray());

        $obj->setX(35);

        $res12 = ["className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 58, "description" => "67daf92c833c41c95db874e18fcb2786", "events" => [], "high" => 55, "id" => "b80bb7740288fda1f201890375a60c8f", "labelrank" => 84, "low" => 53, "name" => "b068931cc450442b63f5b3d276ea4297", "selected" => 1, "x" => 35];
        $this->assertEquals($res12, $obj->toArray());
    }

}
