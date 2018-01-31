<?php

/**
 * This file is part of the highcharts-bundle package.
 *
 * (c) 2017 NdC/WBW
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\HighchartsBundle\Tests\API\Chart\Series\Errorbar;

use PHPUnit_Framework_TestCase;

/**
 * Highcharts data test.
 *
 * @author NdC/WBW <https://github.com/webeweb/>
 * @package WBW\Bundle\HighchartsBundle\Tests\API\Chart\Series\Errorbar
 * @version 5.0.14
 */
final class HighchartsDataTest extends PHPUnit_Framework_TestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstructor() {

        $obj1 = new \WBW\Bundle\HighchartsBundle\API\Chart\Series\Errorbar\HighchartsData(true);

        $this->assertEquals(null, $obj1->getClassName());
        $this->assertEquals(null, $obj1->getColor());
        $this->assertEquals(null, $obj1->getColorIndex());
        $this->assertEquals(null, $obj1->getDescription());
        $this->assertEquals(null, $obj1->getEvents());
        $this->assertEquals(null, $obj1->getHigh());
        $this->assertEquals(null, $obj1->getId());
        $this->assertEquals(null, $obj1->getLabelrank());
        $this->assertEquals(null, $obj1->getLow());
        $this->assertEquals(null, $obj1->getName());
        $this->assertEquals(null, $obj1->getSelected());
        $this->assertEquals(null, $obj1->getX());

        $obj0 = new \WBW\Bundle\HighchartsBundle\API\Chart\Series\Errorbar\HighchartsData(false);

        $this->assertEquals(null, $obj0->getClassName());
        $this->assertEquals(null, $obj0->getColor());
        $this->assertEquals(null, $obj0->getColorIndex());
        $this->assertEquals(null, $obj0->getDescription());
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

        $obj = new \WBW\Bundle\HighchartsBundle\API\Chart\Series\Errorbar\HighchartsData(false);

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

        $obj = new \WBW\Bundle\HighchartsBundle\API\Chart\Series\Errorbar\HighchartsData(true);

        $this->assertEquals([], $obj->jsonSerialize());
    }

    /**
     * Tests the newEvents() method.
     *
     * @return void.
     */
    public function testNewEvents() {

        $obj = new \WBW\Bundle\HighchartsBundle\API\Chart\Series\Errorbar\HighchartsData(false);

        $res = $obj->newEvents();
        $this->assertInstanceOf(\WBW\Bundle\HighchartsBundle\API\Chart\Series\Errorbar\Data\HighchartsEvents::class, $res);
    }

    /**
     * Tests the toArray() method.
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

        $obj->setColorIndex(99);

        $res3 = ["className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 99];
        $this->assertEquals($res3, $obj->toArray());

        $obj->setDescription("67daf92c833c41c95db874e18fcb2786");

        $res4 = ["className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 99, "description" => "67daf92c833c41c95db874e18fcb2786"];
        $this->assertEquals($res4, $obj->toArray());

        $obj->setEvents(new \WBW\Bundle\HighchartsBundle\API\Chart\Series\Errorbar\Data\HighchartsEvents());

        $res5 = ["className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 99, "description" => "67daf92c833c41c95db874e18fcb2786", "events" => []];
        $this->assertEquals($res5, $obj->toArray());

        $obj->setHigh(7);

        $res6 = ["className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 99, "description" => "67daf92c833c41c95db874e18fcb2786", "events" => [], "high" => 7];
        $this->assertEquals($res6, $obj->toArray());

        $obj->setId("b80bb7740288fda1f201890375a60c8f");

        $res7 = ["className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 99, "description" => "67daf92c833c41c95db874e18fcb2786", "events" => [], "high" => 7, "id" => "b80bb7740288fda1f201890375a60c8f"];
        $this->assertEquals($res7, $obj->toArray());

        $obj->setLabelrank(30);

        $res8 = ["className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 99, "description" => "67daf92c833c41c95db874e18fcb2786", "events" => [], "high" => 7, "id" => "b80bb7740288fda1f201890375a60c8f", "labelrank" => 30];
        $this->assertEquals($res8, $obj->toArray());

        $obj->setLow(70);

        $res9 = ["className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 99, "description" => "67daf92c833c41c95db874e18fcb2786", "events" => [], "high" => 7, "id" => "b80bb7740288fda1f201890375a60c8f", "labelrank" => 30, "low" => 70];
        $this->assertEquals($res9, $obj->toArray());

        $obj->setName("b068931cc450442b63f5b3d276ea4297");

        $res10 = ["className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 99, "description" => "67daf92c833c41c95db874e18fcb2786", "events" => [], "high" => 7, "id" => "b80bb7740288fda1f201890375a60c8f", "labelrank" => 30, "low" => 70, "name" => "b068931cc450442b63f5b3d276ea4297"];
        $this->assertEquals($res10, $obj->toArray());

        $obj->setSelected(0);

        $res11 = ["className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 99, "description" => "67daf92c833c41c95db874e18fcb2786", "events" => [], "high" => 7, "id" => "b80bb7740288fda1f201890375a60c8f", "labelrank" => 30, "low" => 70, "name" => "b068931cc450442b63f5b3d276ea4297", "selected" => 0];
        $this->assertEquals($res11, $obj->toArray());

        $obj->setX(20);

        $res12 = ["className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 99, "description" => "67daf92c833c41c95db874e18fcb2786", "events" => [], "high" => 7, "id" => "b80bb7740288fda1f201890375a60c8f", "labelrank" => 30, "low" => 70, "name" => "b068931cc450442b63f5b3d276ea4297", "selected" => 0, "x" => 20];
        $this->assertEquals($res12, $obj->toArray());
    }

}
