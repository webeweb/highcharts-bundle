<?php

/**
 * This file is part of the highcharts-bundle package.
 *
 * (c) 2017 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\HighchartsBundle\Tests\API\Chart\Series\Boxplot;

use PHPUnit_Framework_TestCase;

/**
 * Highcharts data test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\HighchartsBundle\Tests\API\Chart\Series\Boxplot
 * @version 5.0.14
 */
final class HighchartsDataTest extends PHPUnit_Framework_TestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstructor() {

        $obj1 = new \WBW\Bundle\HighchartsBundle\API\Chart\Series\Boxplot\HighchartsData(true);

        $this->assertNull($obj1->getClassName());
        $this->assertNull($obj1->getColor());
        $this->assertNull($obj1->getColorIndex());
        $this->assertNull($obj1->getDataLabels());
        $this->assertNull($obj1->getDescription());
        $this->assertNull($obj1->getDrilldown());
        $this->assertNull($obj1->getEvents());
        $this->assertNull($obj1->getHigh());
        $this->assertNull($obj1->getId());
        $this->assertNull($obj1->getLabelrank());
        $this->assertNull($obj1->getLow());
        $this->assertNull($obj1->getMedian());
        $this->assertNull($obj1->getName());
        $this->assertNull($obj1->getQ1());
        $this->assertNull($obj1->getQ3());
        $this->assertNull($obj1->getSelected());
        $this->assertNull($obj1->getX());
        $this->assertNull($obj1->getY());

        $obj0 = new \WBW\Bundle\HighchartsBundle\API\Chart\Series\Boxplot\HighchartsData(false);

        $this->assertNull($obj0->getClassName());
        $this->assertNull($obj0->getColor());
        $this->assertNull($obj0->getColorIndex());
        $this->assertNull($obj0->getDataLabels());
        $this->assertNull($obj0->getDescription());
        $this->assertNull($obj0->getDrilldown());
        $this->assertNull($obj0->getEvents());
        $this->assertNull($obj0->getHigh());
        $this->assertNull($obj0->getId());
        $this->assertNull($obj0->getLabelrank());
        $this->assertNull($obj0->getLow());
        $this->assertNull($obj0->getMedian());
        $this->assertNull($obj0->getName());
        $this->assertNull($obj0->getQ1());
        $this->assertNull($obj0->getQ3());
        $this->assertEquals(false, $obj0->getSelected());
        $this->assertNull($obj0->getX());
        $this->assertNull($obj0->getY());
    }

    /**
     * Tests the clear() method.
     *
     * @return void
     */
    public function testClear() {

        $obj = new \WBW\Bundle\HighchartsBundle\API\Chart\Series\Boxplot\HighchartsData(false);

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

        $obj = new \WBW\Bundle\HighchartsBundle\API\Chart\Series\Boxplot\HighchartsData(true);

        $this->assertEquals([], $obj->jsonSerialize());
    }

    /**
     * Tests the newEvents() method.
     *
     * @return void.
     */
    public function testNewEvents() {

        $obj = new \WBW\Bundle\HighchartsBundle\API\Chart\Series\Boxplot\HighchartsData(false);

        $res = $obj->newEvents();
        $this->assertInstanceOf(\WBW\Bundle\HighchartsBundle\API\Chart\Series\Boxplot\Data\HighchartsEvents::class, $res);
    }

    /**
     * Tests the toArray() method.
     *
     * @return void
     */
    public function testToArray() {

        $obj = new \WBW\Bundle\HighchartsBundle\API\Chart\Series\Boxplot\HighchartsData(true);

        $obj->setClassName("6f66e878c62db60568a3487869695820");

        $res1 = ["className" => "6f66e878c62db60568a3487869695820"];
        $this->assertEquals($res1, $obj->toArray());

        $obj->setColor("70dda5dfb8053dc6d1c492574bce9bfd");

        $res2 = ["className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd"];
        $this->assertEquals($res2, $obj->toArray());

        $obj->setColorIndex(97);

        $res3 = ["className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 97];
        $this->assertEquals($res3, $obj->toArray());

        $obj->setDataLabels(["dataLabels" => "d4d108fe6659fac79420fa083ef3adf2"]);

        $res4 = ["className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 97, "dataLabels" => ["dataLabels" => "d4d108fe6659fac79420fa083ef3adf2"]];
        $this->assertEquals($res4, $obj->toArray());

        $obj->setDescription("67daf92c833c41c95db874e18fcb2786");

        $res5 = ["className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 97, "dataLabels" => ["dataLabels" => "d4d108fe6659fac79420fa083ef3adf2"], "description" => "67daf92c833c41c95db874e18fcb2786"];
        $this->assertEquals($res5, $obj->toArray());

        $obj->setDrilldown("e3fd48c72943315f737d8a814fda4fd1");

        $res6 = ["className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 97, "dataLabels" => ["dataLabels" => "d4d108fe6659fac79420fa083ef3adf2"], "description" => "67daf92c833c41c95db874e18fcb2786", "drilldown" => "e3fd48c72943315f737d8a814fda4fd1"];
        $this->assertEquals($res6, $obj->toArray());

        $obj->setEvents(new \WBW\Bundle\HighchartsBundle\API\Chart\Series\Boxplot\Data\HighchartsEvents());

        $res7 = ["className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 97, "dataLabels" => ["dataLabels" => "d4d108fe6659fac79420fa083ef3adf2"], "description" => "67daf92c833c41c95db874e18fcb2786", "drilldown" => "e3fd48c72943315f737d8a814fda4fd1", "events" => []];
        $this->assertEquals($res7, $obj->toArray());

        $obj->setHigh(20);

        $res8 = ["className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 97, "dataLabels" => ["dataLabels" => "d4d108fe6659fac79420fa083ef3adf2"], "description" => "67daf92c833c41c95db874e18fcb2786", "drilldown" => "e3fd48c72943315f737d8a814fda4fd1", "events" => [], "high" => 20];
        $this->assertEquals($res8, $obj->toArray());

        $obj->setId("b80bb7740288fda1f201890375a60c8f");

        $res9 = ["className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 97, "dataLabels" => ["dataLabels" => "d4d108fe6659fac79420fa083ef3adf2"], "description" => "67daf92c833c41c95db874e18fcb2786", "drilldown" => "e3fd48c72943315f737d8a814fda4fd1", "events" => [], "high" => 20, "id" => "b80bb7740288fda1f201890375a60c8f"];
        $this->assertEquals($res9, $obj->toArray());

        $obj->setLabelrank(11);

        $res10 = ["className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 97, "dataLabels" => ["dataLabels" => "d4d108fe6659fac79420fa083ef3adf2"], "description" => "67daf92c833c41c95db874e18fcb2786", "drilldown" => "e3fd48c72943315f737d8a814fda4fd1", "events" => [], "high" => 20, "id" => "b80bb7740288fda1f201890375a60c8f", "labelrank" => 11];
        $this->assertEquals($res10, $obj->toArray());

        $obj->setLow(80);

        $res11 = ["className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 97, "dataLabels" => ["dataLabels" => "d4d108fe6659fac79420fa083ef3adf2"], "description" => "67daf92c833c41c95db874e18fcb2786", "drilldown" => "e3fd48c72943315f737d8a814fda4fd1", "events" => [], "high" => 20, "id" => "b80bb7740288fda1f201890375a60c8f", "labelrank" => 11, "low" => 80];
        $this->assertEquals($res11, $obj->toArray());

        $obj->setMedian(77);

        $res12 = ["className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 97, "dataLabels" => ["dataLabels" => "d4d108fe6659fac79420fa083ef3adf2"], "description" => "67daf92c833c41c95db874e18fcb2786", "drilldown" => "e3fd48c72943315f737d8a814fda4fd1", "events" => [], "high" => 20, "id" => "b80bb7740288fda1f201890375a60c8f", "labelrank" => 11, "low" => 80, "median" => 77];
        $this->assertEquals($res12, $obj->toArray());

        $obj->setName("b068931cc450442b63f5b3d276ea4297");

        $res13 = ["className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 97, "dataLabels" => ["dataLabels" => "d4d108fe6659fac79420fa083ef3adf2"], "description" => "67daf92c833c41c95db874e18fcb2786", "drilldown" => "e3fd48c72943315f737d8a814fda4fd1", "events" => [], "high" => 20, "id" => "b80bb7740288fda1f201890375a60c8f", "labelrank" => 11, "low" => 80, "median" => 77, "name" => "b068931cc450442b63f5b3d276ea4297"];
        $this->assertEquals($res13, $obj->toArray());

        $obj->setQ1(95);

        $res14 = ["className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 97, "dataLabels" => ["dataLabels" => "d4d108fe6659fac79420fa083ef3adf2"], "description" => "67daf92c833c41c95db874e18fcb2786", "drilldown" => "e3fd48c72943315f737d8a814fda4fd1", "events" => [], "high" => 20, "id" => "b80bb7740288fda1f201890375a60c8f", "labelrank" => 11, "low" => 80, "median" => 77, "name" => "b068931cc450442b63f5b3d276ea4297", "q1" => 95];
        $this->assertEquals($res14, $obj->toArray());

        $obj->setQ3(91);

        $res15 = ["className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 97, "dataLabels" => ["dataLabels" => "d4d108fe6659fac79420fa083ef3adf2"], "description" => "67daf92c833c41c95db874e18fcb2786", "drilldown" => "e3fd48c72943315f737d8a814fda4fd1", "events" => [], "high" => 20, "id" => "b80bb7740288fda1f201890375a60c8f", "labelrank" => 11, "low" => 80, "median" => 77, "name" => "b068931cc450442b63f5b3d276ea4297", "q1" => 95, "q3" => 91];
        $this->assertEquals($res15, $obj->toArray());

        $obj->setSelected(0);

        $res16 = ["className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 97, "dataLabels" => ["dataLabels" => "d4d108fe6659fac79420fa083ef3adf2"], "description" => "67daf92c833c41c95db874e18fcb2786", "drilldown" => "e3fd48c72943315f737d8a814fda4fd1", "events" => [], "high" => 20, "id" => "b80bb7740288fda1f201890375a60c8f", "labelrank" => 11, "low" => 80, "median" => 77, "name" => "b068931cc450442b63f5b3d276ea4297", "q1" => 95, "q3" => 91, "selected" => 0];
        $this->assertEquals($res16, $obj->toArray());

        $obj->setX(65);

        $res17 = ["className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 97, "dataLabels" => ["dataLabels" => "d4d108fe6659fac79420fa083ef3adf2"], "description" => "67daf92c833c41c95db874e18fcb2786", "drilldown" => "e3fd48c72943315f737d8a814fda4fd1", "events" => [], "high" => 20, "id" => "b80bb7740288fda1f201890375a60c8f", "labelrank" => 11, "low" => 80, "median" => 77, "name" => "b068931cc450442b63f5b3d276ea4297", "q1" => 95, "q3" => 91, "selected" => 0, "x" => 65];
        $this->assertEquals($res17, $obj->toArray());

        $obj->setY(22);

        $res18 = ["className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 97, "dataLabels" => ["dataLabels" => "d4d108fe6659fac79420fa083ef3adf2"], "description" => "67daf92c833c41c95db874e18fcb2786", "drilldown" => "e3fd48c72943315f737d8a814fda4fd1", "events" => [], "high" => 20, "id" => "b80bb7740288fda1f201890375a60c8f", "labelrank" => 11, "low" => 80, "median" => 77, "name" => "b068931cc450442b63f5b3d276ea4297", "q1" => 95, "q3" => 91, "selected" => 0, "x" => 65, "y" => 22];
        $this->assertEquals($res18, $obj->toArray());
    }

}
