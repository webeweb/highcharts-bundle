<?php

/*
 * This file is part of the highcharts-bundle package.
 *
 * (c) 2017 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\HighchartsBundle\Tests\API\Chart\Series;

use WBW\Bundle\HighchartsBundle\Tests\AbstractTestCase;

/**
 * Highcharts errorbar test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\HighchartsBundle\Tests\API\Chart\Series
 * @version 5.0.14
 */
final class HighchartsErrorbarTest extends AbstractTestCase {

    /**
     * Tests clear()
     *
     * @return void
     */
    public function testClear() {

        $obj = new \WBW\Bundle\HighchartsBundle\API\Chart\Series\HighchartsErrorbar(false);

        $obj->newEvents();
        $obj->newPoint();
        $obj->newStates();

        $obj->clear();

        $res = ["events" => [], "point" => [], "states" => []];
        $this->assertEquals($res, $obj->toArray());
    }

    /**
     * Tests jsonSerialize()
     *
     * @return void
     */
    public function testJsonSerialize() {

        $obj = new \WBW\Bundle\HighchartsBundle\API\Chart\Series\HighchartsErrorbar(true);

        $this->assertEquals([], $obj->jsonSerialize());
    }

    /**
     * Tests newEvents()
     *
     * @return void.
     */
    public function testNewEvents() {

        $obj = new \WBW\Bundle\HighchartsBundle\API\Chart\Series\HighchartsErrorbar(false);

        $res = $obj->newEvents();
        $this->assertInstanceOf(\WBW\Bundle\HighchartsBundle\API\Chart\Series\Errorbar\HighchartsEvents::class, $res);
    }

    /**
     * Tests newPoint()
     *
     * @return void.
     */
    public function testNewPoint() {

        $obj = new \WBW\Bundle\HighchartsBundle\API\Chart\Series\HighchartsErrorbar(false);

        $res = $obj->newPoint();
        $this->assertInstanceOf(\WBW\Bundle\HighchartsBundle\API\Chart\Series\Errorbar\HighchartsPoint::class, $res);
    }

    /**
     * Tests newStates()
     *
     * @return void.
     */
    public function testNewStates() {

        $obj = new \WBW\Bundle\HighchartsBundle\API\Chart\Series\HighchartsErrorbar(false);

        $res = $obj->newStates();
        $this->assertInstanceOf(\WBW\Bundle\HighchartsBundle\API\Chart\Series\Errorbar\HighchartsStates::class, $res);
    }

    /**
     * Tests toArray()
     *
     * @return void
     */
    public function testToArray() {

        $obj = new \WBW\Bundle\HighchartsBundle\API\Chart\Series\HighchartsErrorbar(true);

        $obj->setAllowPointSelect(0);

        $res1 = ["allowPointSelect" => 0];
        $this->assertEquals($res1, $obj->toArray());

        $obj->setAnimationLimit(47);

        $res2 = ["allowPointSelect" => 0, "animationLimit" => 47];
        $this->assertEquals($res2, $obj->toArray());

        $obj->setClassName("6f66e878c62db60568a3487869695820");

        $res3 = ["allowPointSelect" => 0, "animationLimit" => 47, "className" => "6f66e878c62db60568a3487869695820"];
        $this->assertEquals($res3, $obj->toArray());

        $obj->setColor("70dda5dfb8053dc6d1c492574bce9bfd");

        $res4 = ["allowPointSelect" => 0, "animationLimit" => 47, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd"];
        $this->assertEquals($res4, $obj->toArray());

        $obj->setColorByPoint(1);

        $res5 = ["allowPointSelect" => 0, "animationLimit" => 47, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 1];
        $this->assertEquals($res5, $obj->toArray());

        $obj->setColorIndex(88);

        $res6 = ["allowPointSelect" => 0, "animationLimit" => 47, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 1, "colorIndex" => 88];
        $this->assertEquals($res6, $obj->toArray());

        $obj->setColors(["colors" => "62848e3ce5804aa985513a7922ff87b2"]);

        $res7 = ["allowPointSelect" => 0, "animationLimit" => 47, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 1, "colorIndex" => 88, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"]];
        $this->assertEquals($res7, $obj->toArray());

        $obj->setCrisp(1);

        $res8 = ["allowPointSelect" => 0, "animationLimit" => 47, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 1, "colorIndex" => 88, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => 1];
        $this->assertEquals($res8, $obj->toArray());

        $obj->setCursor("crosshair");

        $res9 = ["allowPointSelect" => 0, "animationLimit" => 47, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 1, "colorIndex" => 88, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => 1, "cursor" => "crosshair"];
        $this->assertEquals($res9, $obj->toArray());

        $obj->setData(["data" => "8d777f385d3dfec8815d20f7496026dc"]);

        $res10 = ["allowPointSelect" => 0, "animationLimit" => 47, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 1, "colorIndex" => 88, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => 1, "cursor" => "crosshair", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"]];
        $this->assertEquals($res10, $obj->toArray());

        $obj->setDepth(35);

        $res11 = ["allowPointSelect" => 0, "animationLimit" => 47, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 1, "colorIndex" => 88, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => 1, "cursor" => "crosshair", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "depth" => 35];
        $this->assertEquals($res11, $obj->toArray());

        $obj->setDescription("67daf92c833c41c95db874e18fcb2786");

        $res12 = ["allowPointSelect" => 0, "animationLimit" => 47, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 1, "colorIndex" => 88, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => 1, "cursor" => "crosshair", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "depth" => 35, "description" => "67daf92c833c41c95db874e18fcb2786"];
        $this->assertEquals($res12, $obj->toArray());

        $obj->setEdgeColor("acbab0d2e7e54e5a7a32fc80409601fc");

        $res13 = ["allowPointSelect" => 0, "animationLimit" => 47, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 1, "colorIndex" => 88, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => 1, "cursor" => "crosshair", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "depth" => 35, "description" => "67daf92c833c41c95db874e18fcb2786", "edgeColor" => "acbab0d2e7e54e5a7a32fc80409601fc"];
        $this->assertEquals($res13, $obj->toArray());

        $obj->setEdgeWidth(54);

        $res14 = ["allowPointSelect" => 0, "animationLimit" => 47, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 1, "colorIndex" => 88, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => 1, "cursor" => "crosshair", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "depth" => 35, "description" => "67daf92c833c41c95db874e18fcb2786", "edgeColor" => "acbab0d2e7e54e5a7a32fc80409601fc", "edgeWidth" => 54];
        $this->assertEquals($res14, $obj->toArray());

        $obj->setEnableMouseTracking(1);

        $res15 = ["allowPointSelect" => 0, "animationLimit" => 47, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 1, "colorIndex" => 88, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => 1, "cursor" => "crosshair", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "depth" => 35, "description" => "67daf92c833c41c95db874e18fcb2786", "edgeColor" => "acbab0d2e7e54e5a7a32fc80409601fc", "edgeWidth" => 54, "enableMouseTracking" => 1];
        $this->assertEquals($res15, $obj->toArray());

        $obj->setEvents(new \WBW\Bundle\HighchartsBundle\API\Chart\Series\Errorbar\HighchartsEvents());

        $res16 = ["allowPointSelect" => 0, "animationLimit" => 47, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 1, "colorIndex" => 88, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => 1, "cursor" => "crosshair", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "depth" => 35, "description" => "67daf92c833c41c95db874e18fcb2786", "edgeColor" => "acbab0d2e7e54e5a7a32fc80409601fc", "edgeWidth" => 54, "enableMouseTracking" => 1, "events" => []];
        $this->assertEquals($res16, $obj->toArray());

        $obj->setExposeElementToA11y(1);

        $res17 = ["allowPointSelect" => 0, "animationLimit" => 47, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 1, "colorIndex" => 88, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => 1, "cursor" => "crosshair", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "depth" => 35, "description" => "67daf92c833c41c95db874e18fcb2786", "edgeColor" => "acbab0d2e7e54e5a7a32fc80409601fc", "edgeWidth" => 54, "enableMouseTracking" => 1, "events" => [], "exposeElementToA11y" => 1];
        $this->assertEquals($res17, $obj->toArray());

        $obj->setFindNearestPointBy("xy");

        $res18 = ["allowPointSelect" => 0, "animationLimit" => 47, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 1, "colorIndex" => 88, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => 1, "cursor" => "crosshair", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "depth" => 35, "description" => "67daf92c833c41c95db874e18fcb2786", "edgeColor" => "acbab0d2e7e54e5a7a32fc80409601fc", "edgeWidth" => 54, "enableMouseTracking" => 1, "events" => [], "exposeElementToA11y" => 1, "findNearestPointBy" => "xy"];
        $this->assertEquals($res18, $obj->toArray());

        $obj->setGetExtremesFromAll(1);

        $res19 = ["allowPointSelect" => 0, "animationLimit" => 47, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 1, "colorIndex" => 88, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => 1, "cursor" => "crosshair", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "depth" => 35, "description" => "67daf92c833c41c95db874e18fcb2786", "edgeColor" => "acbab0d2e7e54e5a7a32fc80409601fc", "edgeWidth" => 54, "enableMouseTracking" => 1, "events" => [], "exposeElementToA11y" => 1, "findNearestPointBy" => "xy", "getExtremesFromAll" => 1];
        $this->assertEquals($res19, $obj->toArray());

        $obj->setGroupZPadding(80);

        $res20 = ["allowPointSelect" => 0, "animationLimit" => 47, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 1, "colorIndex" => 88, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => 1, "cursor" => "crosshair", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "depth" => 35, "description" => "67daf92c833c41c95db874e18fcb2786", "edgeColor" => "acbab0d2e7e54e5a7a32fc80409601fc", "edgeWidth" => 54, "enableMouseTracking" => 1, "events" => [], "exposeElementToA11y" => 1, "findNearestPointBy" => "xy", "getExtremesFromAll" => 1, "groupZPadding" => 80];
        $this->assertEquals($res20, $obj->toArray());

        $obj->setId("b80bb7740288fda1f201890375a60c8f");

        $res21 = ["allowPointSelect" => 0, "animationLimit" => 47, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 1, "colorIndex" => 88, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => 1, "cursor" => "crosshair", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "depth" => 35, "description" => "67daf92c833c41c95db874e18fcb2786", "edgeColor" => "acbab0d2e7e54e5a7a32fc80409601fc", "edgeWidth" => 54, "enableMouseTracking" => 1, "events" => [], "exposeElementToA11y" => 1, "findNearestPointBy" => "xy", "getExtremesFromAll" => 1, "groupZPadding" => 80, "id" => "b80bb7740288fda1f201890375a60c8f"];
        $this->assertEquals($res21, $obj->toArray());

        $obj->setIndex(7);

        $res22 = ["allowPointSelect" => 0, "animationLimit" => 47, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 1, "colorIndex" => 88, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => 1, "cursor" => "crosshair", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "depth" => 35, "description" => "67daf92c833c41c95db874e18fcb2786", "edgeColor" => "acbab0d2e7e54e5a7a32fc80409601fc", "edgeWidth" => 54, "enableMouseTracking" => 1, "events" => [], "exposeElementToA11y" => 1, "findNearestPointBy" => "xy", "getExtremesFromAll" => 1, "groupZPadding" => 80, "id" => "b80bb7740288fda1f201890375a60c8f", "index" => 7];
        $this->assertEquals($res22, $obj->toArray());

        $obj->setKeys(["keys" => "14f802e1fba977727845e8872c1743a7"]);

        $res23 = ["allowPointSelect" => 0, "animationLimit" => 47, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 1, "colorIndex" => 88, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => 1, "cursor" => "crosshair", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "depth" => 35, "description" => "67daf92c833c41c95db874e18fcb2786", "edgeColor" => "acbab0d2e7e54e5a7a32fc80409601fc", "edgeWidth" => 54, "enableMouseTracking" => 1, "events" => [], "exposeElementToA11y" => 1, "findNearestPointBy" => "xy", "getExtremesFromAll" => 1, "groupZPadding" => 80, "id" => "b80bb7740288fda1f201890375a60c8f", "index" => 7, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"]];
        $this->assertEquals($res23, $obj->toArray());

        $obj->setLegendIndex(3);

        $res24 = ["allowPointSelect" => 0, "animationLimit" => 47, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 1, "colorIndex" => 88, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => 1, "cursor" => "crosshair", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "depth" => 35, "description" => "67daf92c833c41c95db874e18fcb2786", "edgeColor" => "acbab0d2e7e54e5a7a32fc80409601fc", "edgeWidth" => 54, "enableMouseTracking" => 1, "events" => [], "exposeElementToA11y" => 1, "findNearestPointBy" => "xy", "getExtremesFromAll" => 1, "groupZPadding" => 80, "id" => "b80bb7740288fda1f201890375a60c8f", "index" => 7, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "legendIndex" => 3];
        $this->assertEquals($res24, $obj->toArray());

        $obj->setLineWidth(96);

        $res25 = ["allowPointSelect" => 0, "animationLimit" => 47, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 1, "colorIndex" => 88, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => 1, "cursor" => "crosshair", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "depth" => 35, "description" => "67daf92c833c41c95db874e18fcb2786", "edgeColor" => "acbab0d2e7e54e5a7a32fc80409601fc", "edgeWidth" => 54, "enableMouseTracking" => 1, "events" => [], "exposeElementToA11y" => 1, "findNearestPointBy" => "xy", "getExtremesFromAll" => 1, "groupZPadding" => 80, "id" => "b80bb7740288fda1f201890375a60c8f", "index" => 7, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "legendIndex" => 3, "lineWidth" => 96];
        $this->assertEquals($res25, $obj->toArray());

        $obj->setLinkedTo("914fab47afc86331ec62837807a29419");

        $res26 = ["allowPointSelect" => 0, "animationLimit" => 47, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 1, "colorIndex" => 88, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => 1, "cursor" => "crosshair", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "depth" => 35, "description" => "67daf92c833c41c95db874e18fcb2786", "edgeColor" => "acbab0d2e7e54e5a7a32fc80409601fc", "edgeWidth" => 54, "enableMouseTracking" => 1, "events" => [], "exposeElementToA11y" => 1, "findNearestPointBy" => "xy", "getExtremesFromAll" => 1, "groupZPadding" => 80, "id" => "b80bb7740288fda1f201890375a60c8f", "index" => 7, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "legendIndex" => 3, "lineWidth" => 96, "linkedTo" => "914fab47afc86331ec62837807a29419"];
        $this->assertEquals($res26, $obj->toArray());

        $obj->setMaxPointWidth(44);

        $res27 = ["allowPointSelect" => 0, "animationLimit" => 47, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 1, "colorIndex" => 88, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => 1, "cursor" => "crosshair", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "depth" => 35, "description" => "67daf92c833c41c95db874e18fcb2786", "edgeColor" => "acbab0d2e7e54e5a7a32fc80409601fc", "edgeWidth" => 54, "enableMouseTracking" => 1, "events" => [], "exposeElementToA11y" => 1, "findNearestPointBy" => "xy", "getExtremesFromAll" => 1, "groupZPadding" => 80, "id" => "b80bb7740288fda1f201890375a60c8f", "index" => 7, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "legendIndex" => 3, "lineWidth" => 96, "linkedTo" => "914fab47afc86331ec62837807a29419", "maxPointWidth" => 44];
        $this->assertEquals($res27, $obj->toArray());

        $obj->setName("b068931cc450442b63f5b3d276ea4297");

        $res28 = ["allowPointSelect" => 0, "animationLimit" => 47, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 1, "colorIndex" => 88, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => 1, "cursor" => "crosshair", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "depth" => 35, "description" => "67daf92c833c41c95db874e18fcb2786", "edgeColor" => "acbab0d2e7e54e5a7a32fc80409601fc", "edgeWidth" => 54, "enableMouseTracking" => 1, "events" => [], "exposeElementToA11y" => 1, "findNearestPointBy" => "xy", "getExtremesFromAll" => 1, "groupZPadding" => 80, "id" => "b80bb7740288fda1f201890375a60c8f", "index" => 7, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "legendIndex" => 3, "lineWidth" => 96, "linkedTo" => "914fab47afc86331ec62837807a29419", "maxPointWidth" => 44, "name" => "b068931cc450442b63f5b3d276ea4297"];
        $this->assertEquals($res28, $obj->toArray());

        $obj->setNegativeColor("52fe4d3a854b01e25193b4f35fc2040e");

        $res29 = ["allowPointSelect" => 0, "animationLimit" => 47, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 1, "colorIndex" => 88, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => 1, "cursor" => "crosshair", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "depth" => 35, "description" => "67daf92c833c41c95db874e18fcb2786", "edgeColor" => "acbab0d2e7e54e5a7a32fc80409601fc", "edgeWidth" => 54, "enableMouseTracking" => 1, "events" => [], "exposeElementToA11y" => 1, "findNearestPointBy" => "xy", "getExtremesFromAll" => 1, "groupZPadding" => 80, "id" => "b80bb7740288fda1f201890375a60c8f", "index" => 7, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "legendIndex" => 3, "lineWidth" => 96, "linkedTo" => "914fab47afc86331ec62837807a29419", "maxPointWidth" => 44, "name" => "b068931cc450442b63f5b3d276ea4297", "negativeColor" => "52fe4d3a854b01e25193b4f35fc2040e"];
        $this->assertEquals($res29, $obj->toArray());

        $obj->setPoint(new \WBW\Bundle\HighchartsBundle\API\Chart\Series\Errorbar\HighchartsPoint());

        $res30 = ["allowPointSelect" => 0, "animationLimit" => 47, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 1, "colorIndex" => 88, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => 1, "cursor" => "crosshair", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "depth" => 35, "description" => "67daf92c833c41c95db874e18fcb2786", "edgeColor" => "acbab0d2e7e54e5a7a32fc80409601fc", "edgeWidth" => 54, "enableMouseTracking" => 1, "events" => [], "exposeElementToA11y" => 1, "findNearestPointBy" => "xy", "getExtremesFromAll" => 1, "groupZPadding" => 80, "id" => "b80bb7740288fda1f201890375a60c8f", "index" => 7, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "legendIndex" => 3, "lineWidth" => 96, "linkedTo" => "914fab47afc86331ec62837807a29419", "maxPointWidth" => 44, "name" => "b068931cc450442b63f5b3d276ea4297", "negativeColor" => "52fe4d3a854b01e25193b4f35fc2040e", "point" => []];
        $this->assertEquals($res30, $obj->toArray());

        $obj->setPointDescriptionFormatter("b5fd0c15b3ca81f726e2c7b93907ba36");

        $res31 = ["allowPointSelect" => 0, "animationLimit" => 47, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 1, "colorIndex" => 88, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => 1, "cursor" => "crosshair", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "depth" => 35, "description" => "67daf92c833c41c95db874e18fcb2786", "edgeColor" => "acbab0d2e7e54e5a7a32fc80409601fc", "edgeWidth" => 54, "enableMouseTracking" => 1, "events" => [], "exposeElementToA11y" => 1, "findNearestPointBy" => "xy", "getExtremesFromAll" => 1, "groupZPadding" => 80, "id" => "b80bb7740288fda1f201890375a60c8f", "index" => 7, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "legendIndex" => 3, "lineWidth" => 96, "linkedTo" => "914fab47afc86331ec62837807a29419", "maxPointWidth" => 44, "name" => "b068931cc450442b63f5b3d276ea4297", "negativeColor" => "52fe4d3a854b01e25193b4f35fc2040e", "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36"];
        $this->assertEquals($res31, $obj->toArray());

        $obj->setPointInterval(50);

        $res32 = ["allowPointSelect" => 0, "animationLimit" => 47, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 1, "colorIndex" => 88, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => 1, "cursor" => "crosshair", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "depth" => 35, "description" => "67daf92c833c41c95db874e18fcb2786", "edgeColor" => "acbab0d2e7e54e5a7a32fc80409601fc", "edgeWidth" => 54, "enableMouseTracking" => 1, "events" => [], "exposeElementToA11y" => 1, "findNearestPointBy" => "xy", "getExtremesFromAll" => 1, "groupZPadding" => 80, "id" => "b80bb7740288fda1f201890375a60c8f", "index" => 7, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "legendIndex" => 3, "lineWidth" => 96, "linkedTo" => "914fab47afc86331ec62837807a29419", "maxPointWidth" => 44, "name" => "b068931cc450442b63f5b3d276ea4297", "negativeColor" => "52fe4d3a854b01e25193b4f35fc2040e", "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "pointInterval" => 50];
        $this->assertEquals($res32, $obj->toArray());

        $obj->setPointIntervalUnit("year");

        $res33 = ["allowPointSelect" => 0, "animationLimit" => 47, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 1, "colorIndex" => 88, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => 1, "cursor" => "crosshair", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "depth" => 35, "description" => "67daf92c833c41c95db874e18fcb2786", "edgeColor" => "acbab0d2e7e54e5a7a32fc80409601fc", "edgeWidth" => 54, "enableMouseTracking" => 1, "events" => [], "exposeElementToA11y" => 1, "findNearestPointBy" => "xy", "getExtremesFromAll" => 1, "groupZPadding" => 80, "id" => "b80bb7740288fda1f201890375a60c8f", "index" => 7, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "legendIndex" => 3, "lineWidth" => 96, "linkedTo" => "914fab47afc86331ec62837807a29419", "maxPointWidth" => 44, "name" => "b068931cc450442b63f5b3d276ea4297", "negativeColor" => "52fe4d3a854b01e25193b4f35fc2040e", "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "pointInterval" => 50, "pointIntervalUnit" => "year"];
        $this->assertEquals($res33, $obj->toArray());

        $obj->setPointPadding(94);

        $res34 = ["allowPointSelect" => 0, "animationLimit" => 47, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 1, "colorIndex" => 88, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => 1, "cursor" => "crosshair", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "depth" => 35, "description" => "67daf92c833c41c95db874e18fcb2786", "edgeColor" => "acbab0d2e7e54e5a7a32fc80409601fc", "edgeWidth" => 54, "enableMouseTracking" => 1, "events" => [], "exposeElementToA11y" => 1, "findNearestPointBy" => "xy", "getExtremesFromAll" => 1, "groupZPadding" => 80, "id" => "b80bb7740288fda1f201890375a60c8f", "index" => 7, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "legendIndex" => 3, "lineWidth" => 96, "linkedTo" => "914fab47afc86331ec62837807a29419", "maxPointWidth" => 44, "name" => "b068931cc450442b63f5b3d276ea4297", "negativeColor" => "52fe4d3a854b01e25193b4f35fc2040e", "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "pointInterval" => 50, "pointIntervalUnit" => "year", "pointPadding" => 94];
        $this->assertEquals($res34, $obj->toArray());

        $obj->setPointPlacement("between");

        $res35 = ["allowPointSelect" => 0, "animationLimit" => 47, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 1, "colorIndex" => 88, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => 1, "cursor" => "crosshair", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "depth" => 35, "description" => "67daf92c833c41c95db874e18fcb2786", "edgeColor" => "acbab0d2e7e54e5a7a32fc80409601fc", "edgeWidth" => 54, "enableMouseTracking" => 1, "events" => [], "exposeElementToA11y" => 1, "findNearestPointBy" => "xy", "getExtremesFromAll" => 1, "groupZPadding" => 80, "id" => "b80bb7740288fda1f201890375a60c8f", "index" => 7, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "legendIndex" => 3, "lineWidth" => 96, "linkedTo" => "914fab47afc86331ec62837807a29419", "maxPointWidth" => 44, "name" => "b068931cc450442b63f5b3d276ea4297", "negativeColor" => "52fe4d3a854b01e25193b4f35fc2040e", "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "pointInterval" => 50, "pointIntervalUnit" => "year", "pointPadding" => 94, "pointPlacement" => "between"];
        $this->assertEquals($res35, $obj->toArray());

        $obj->setPointRange(69);

        $res36 = ["allowPointSelect" => 0, "animationLimit" => 47, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 1, "colorIndex" => 88, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => 1, "cursor" => "crosshair", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "depth" => 35, "description" => "67daf92c833c41c95db874e18fcb2786", "edgeColor" => "acbab0d2e7e54e5a7a32fc80409601fc", "edgeWidth" => 54, "enableMouseTracking" => 1, "events" => [], "exposeElementToA11y" => 1, "findNearestPointBy" => "xy", "getExtremesFromAll" => 1, "groupZPadding" => 80, "id" => "b80bb7740288fda1f201890375a60c8f", "index" => 7, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "legendIndex" => 3, "lineWidth" => 96, "linkedTo" => "914fab47afc86331ec62837807a29419", "maxPointWidth" => 44, "name" => "b068931cc450442b63f5b3d276ea4297", "negativeColor" => "52fe4d3a854b01e25193b4f35fc2040e", "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "pointInterval" => 50, "pointIntervalUnit" => "year", "pointPadding" => 94, "pointPlacement" => "between", "pointRange" => 69];
        $this->assertEquals($res36, $obj->toArray());

        $obj->setPointStart(96);

        $res37 = ["allowPointSelect" => 0, "animationLimit" => 47, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 1, "colorIndex" => 88, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => 1, "cursor" => "crosshair", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "depth" => 35, "description" => "67daf92c833c41c95db874e18fcb2786", "edgeColor" => "acbab0d2e7e54e5a7a32fc80409601fc", "edgeWidth" => 54, "enableMouseTracking" => 1, "events" => [], "exposeElementToA11y" => 1, "findNearestPointBy" => "xy", "getExtremesFromAll" => 1, "groupZPadding" => 80, "id" => "b80bb7740288fda1f201890375a60c8f", "index" => 7, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "legendIndex" => 3, "lineWidth" => 96, "linkedTo" => "914fab47afc86331ec62837807a29419", "maxPointWidth" => 44, "name" => "b068931cc450442b63f5b3d276ea4297", "negativeColor" => "52fe4d3a854b01e25193b4f35fc2040e", "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "pointInterval" => 50, "pointIntervalUnit" => "year", "pointPadding" => 94, "pointPlacement" => "between", "pointRange" => 69, "pointStart" => 96];
        $this->assertEquals($res37, $obj->toArray());

        $obj->setPointWidth(3);

        $res38 = ["allowPointSelect" => 0, "animationLimit" => 47, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 1, "colorIndex" => 88, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => 1, "cursor" => "crosshair", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "depth" => 35, "description" => "67daf92c833c41c95db874e18fcb2786", "edgeColor" => "acbab0d2e7e54e5a7a32fc80409601fc", "edgeWidth" => 54, "enableMouseTracking" => 1, "events" => [], "exposeElementToA11y" => 1, "findNearestPointBy" => "xy", "getExtremesFromAll" => 1, "groupZPadding" => 80, "id" => "b80bb7740288fda1f201890375a60c8f", "index" => 7, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "legendIndex" => 3, "lineWidth" => 96, "linkedTo" => "914fab47afc86331ec62837807a29419", "maxPointWidth" => 44, "name" => "b068931cc450442b63f5b3d276ea4297", "negativeColor" => "52fe4d3a854b01e25193b4f35fc2040e", "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "pointInterval" => 50, "pointIntervalUnit" => "year", "pointPadding" => 94, "pointPlacement" => "between", "pointRange" => 69, "pointStart" => 96, "pointWidth" => 3];
        $this->assertEquals($res38, $obj->toArray());

        $obj->setSelected(0);

        $res39 = ["allowPointSelect" => 0, "animationLimit" => 47, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 1, "colorIndex" => 88, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => 1, "cursor" => "crosshair", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "depth" => 35, "description" => "67daf92c833c41c95db874e18fcb2786", "edgeColor" => "acbab0d2e7e54e5a7a32fc80409601fc", "edgeWidth" => 54, "enableMouseTracking" => 1, "events" => [], "exposeElementToA11y" => 1, "findNearestPointBy" => "xy", "getExtremesFromAll" => 1, "groupZPadding" => 80, "id" => "b80bb7740288fda1f201890375a60c8f", "index" => 7, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "legendIndex" => 3, "lineWidth" => 96, "linkedTo" => "914fab47afc86331ec62837807a29419", "maxPointWidth" => 44, "name" => "b068931cc450442b63f5b3d276ea4297", "negativeColor" => "52fe4d3a854b01e25193b4f35fc2040e", "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "pointInterval" => 50, "pointIntervalUnit" => "year", "pointPadding" => 94, "pointPlacement" => "between", "pointRange" => 69, "pointStart" => 96, "pointWidth" => 3, "selected" => 0];
        $this->assertEquals($res39, $obj->toArray());

        $obj->setSkipKeyboardNavigation(0);

        $res40 = ["allowPointSelect" => 0, "animationLimit" => 47, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 1, "colorIndex" => 88, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => 1, "cursor" => "crosshair", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "depth" => 35, "description" => "67daf92c833c41c95db874e18fcb2786", "edgeColor" => "acbab0d2e7e54e5a7a32fc80409601fc", "edgeWidth" => 54, "enableMouseTracking" => 1, "events" => [], "exposeElementToA11y" => 1, "findNearestPointBy" => "xy", "getExtremesFromAll" => 1, "groupZPadding" => 80, "id" => "b80bb7740288fda1f201890375a60c8f", "index" => 7, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "legendIndex" => 3, "lineWidth" => 96, "linkedTo" => "914fab47afc86331ec62837807a29419", "maxPointWidth" => 44, "name" => "b068931cc450442b63f5b3d276ea4297", "negativeColor" => "52fe4d3a854b01e25193b4f35fc2040e", "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "pointInterval" => 50, "pointIntervalUnit" => "year", "pointPadding" => 94, "pointPlacement" => "between", "pointRange" => 69, "pointStart" => 96, "pointWidth" => 3, "selected" => 0, "skipKeyboardNavigation" => 0];
        $this->assertEquals($res40, $obj->toArray());

        $obj->setStates(new \WBW\Bundle\HighchartsBundle\API\Chart\Series\Errorbar\HighchartsStates());

        $res41 = ["allowPointSelect" => 0, "animationLimit" => 47, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 1, "colorIndex" => 88, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => 1, "cursor" => "crosshair", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "depth" => 35, "description" => "67daf92c833c41c95db874e18fcb2786", "edgeColor" => "acbab0d2e7e54e5a7a32fc80409601fc", "edgeWidth" => 54, "enableMouseTracking" => 1, "events" => [], "exposeElementToA11y" => 1, "findNearestPointBy" => "xy", "getExtremesFromAll" => 1, "groupZPadding" => 80, "id" => "b80bb7740288fda1f201890375a60c8f", "index" => 7, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "legendIndex" => 3, "lineWidth" => 96, "linkedTo" => "914fab47afc86331ec62837807a29419", "maxPointWidth" => 44, "name" => "b068931cc450442b63f5b3d276ea4297", "negativeColor" => "52fe4d3a854b01e25193b4f35fc2040e", "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "pointInterval" => 50, "pointIntervalUnit" => "year", "pointPadding" => 94, "pointPlacement" => "between", "pointRange" => 69, "pointStart" => 96, "pointWidth" => 3, "selected" => 0, "skipKeyboardNavigation" => 0, "states" => []];
        $this->assertEquals($res41, $obj->toArray());

        $obj->setStemColor("98696f23b6ed2a881042dfa365a28d23");

        $res42 = ["allowPointSelect" => 0, "animationLimit" => 47, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 1, "colorIndex" => 88, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => 1, "cursor" => "crosshair", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "depth" => 35, "description" => "67daf92c833c41c95db874e18fcb2786", "edgeColor" => "acbab0d2e7e54e5a7a32fc80409601fc", "edgeWidth" => 54, "enableMouseTracking" => 1, "events" => [], "exposeElementToA11y" => 1, "findNearestPointBy" => "xy", "getExtremesFromAll" => 1, "groupZPadding" => 80, "id" => "b80bb7740288fda1f201890375a60c8f", "index" => 7, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "legendIndex" => 3, "lineWidth" => 96, "linkedTo" => "914fab47afc86331ec62837807a29419", "maxPointWidth" => 44, "name" => "b068931cc450442b63f5b3d276ea4297", "negativeColor" => "52fe4d3a854b01e25193b4f35fc2040e", "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "pointInterval" => 50, "pointIntervalUnit" => "year", "pointPadding" => 94, "pointPlacement" => "between", "pointRange" => 69, "pointStart" => 96, "pointWidth" => 3, "selected" => 0, "skipKeyboardNavigation" => 0, "states" => [], "stemColor" => "98696f23b6ed2a881042dfa365a28d23"];
        $this->assertEquals($res42, $obj->toArray());

        $obj->setStemDashStyle("LongDashDotDot");

        $res43 = ["allowPointSelect" => 0, "animationLimit" => 47, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 1, "colorIndex" => 88, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => 1, "cursor" => "crosshair", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "depth" => 35, "description" => "67daf92c833c41c95db874e18fcb2786", "edgeColor" => "acbab0d2e7e54e5a7a32fc80409601fc", "edgeWidth" => 54, "enableMouseTracking" => 1, "events" => [], "exposeElementToA11y" => 1, "findNearestPointBy" => "xy", "getExtremesFromAll" => 1, "groupZPadding" => 80, "id" => "b80bb7740288fda1f201890375a60c8f", "index" => 7, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "legendIndex" => 3, "lineWidth" => 96, "linkedTo" => "914fab47afc86331ec62837807a29419", "maxPointWidth" => 44, "name" => "b068931cc450442b63f5b3d276ea4297", "negativeColor" => "52fe4d3a854b01e25193b4f35fc2040e", "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "pointInterval" => 50, "pointIntervalUnit" => "year", "pointPadding" => 94, "pointPlacement" => "between", "pointRange" => 69, "pointStart" => 96, "pointWidth" => 3, "selected" => 0, "skipKeyboardNavigation" => 0, "states" => [], "stemColor" => "98696f23b6ed2a881042dfa365a28d23", "stemDashStyle" => "LongDashDotDot"];
        $this->assertEquals($res43, $obj->toArray());

        $obj->setStemWidth(45);

        $res44 = ["allowPointSelect" => 0, "animationLimit" => 47, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 1, "colorIndex" => 88, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => 1, "cursor" => "crosshair", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "depth" => 35, "description" => "67daf92c833c41c95db874e18fcb2786", "edgeColor" => "acbab0d2e7e54e5a7a32fc80409601fc", "edgeWidth" => 54, "enableMouseTracking" => 1, "events" => [], "exposeElementToA11y" => 1, "findNearestPointBy" => "xy", "getExtremesFromAll" => 1, "groupZPadding" => 80, "id" => "b80bb7740288fda1f201890375a60c8f", "index" => 7, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "legendIndex" => 3, "lineWidth" => 96, "linkedTo" => "914fab47afc86331ec62837807a29419", "maxPointWidth" => 44, "name" => "b068931cc450442b63f5b3d276ea4297", "negativeColor" => "52fe4d3a854b01e25193b4f35fc2040e", "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "pointInterval" => 50, "pointIntervalUnit" => "year", "pointPadding" => 94, "pointPlacement" => "between", "pointRange" => 69, "pointStart" => 96, "pointWidth" => 3, "selected" => 0, "skipKeyboardNavigation" => 0, "states" => [], "stemColor" => "98696f23b6ed2a881042dfa365a28d23", "stemDashStyle" => "LongDashDotDot", "stemWidth" => 45];
        $this->assertEquals($res44, $obj->toArray());

        $obj->setStickyTracking(0);

        $res45 = ["allowPointSelect" => 0, "animationLimit" => 47, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 1, "colorIndex" => 88, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => 1, "cursor" => "crosshair", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "depth" => 35, "description" => "67daf92c833c41c95db874e18fcb2786", "edgeColor" => "acbab0d2e7e54e5a7a32fc80409601fc", "edgeWidth" => 54, "enableMouseTracking" => 1, "events" => [], "exposeElementToA11y" => 1, "findNearestPointBy" => "xy", "getExtremesFromAll" => 1, "groupZPadding" => 80, "id" => "b80bb7740288fda1f201890375a60c8f", "index" => 7, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "legendIndex" => 3, "lineWidth" => 96, "linkedTo" => "914fab47afc86331ec62837807a29419", "maxPointWidth" => 44, "name" => "b068931cc450442b63f5b3d276ea4297", "negativeColor" => "52fe4d3a854b01e25193b4f35fc2040e", "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "pointInterval" => 50, "pointIntervalUnit" => "year", "pointPadding" => 94, "pointPlacement" => "between", "pointRange" => 69, "pointStart" => 96, "pointWidth" => 3, "selected" => 0, "skipKeyboardNavigation" => 0, "states" => [], "stemColor" => "98696f23b6ed2a881042dfa365a28d23", "stemDashStyle" => "LongDashDotDot", "stemWidth" => 45, "stickyTracking" => 0];
        $this->assertEquals($res45, $obj->toArray());

        $obj->setTooltip(["tooltip" => "ddbfc1b6aa0ad4d79c5dac7aa3b44888"]);

        $res46 = ["allowPointSelect" => 0, "animationLimit" => 47, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 1, "colorIndex" => 88, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => 1, "cursor" => "crosshair", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "depth" => 35, "description" => "67daf92c833c41c95db874e18fcb2786", "edgeColor" => "acbab0d2e7e54e5a7a32fc80409601fc", "edgeWidth" => 54, "enableMouseTracking" => 1, "events" => [], "exposeElementToA11y" => 1, "findNearestPointBy" => "xy", "getExtremesFromAll" => 1, "groupZPadding" => 80, "id" => "b80bb7740288fda1f201890375a60c8f", "index" => 7, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "legendIndex" => 3, "lineWidth" => 96, "linkedTo" => "914fab47afc86331ec62837807a29419", "maxPointWidth" => 44, "name" => "b068931cc450442b63f5b3d276ea4297", "negativeColor" => "52fe4d3a854b01e25193b4f35fc2040e", "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "pointInterval" => 50, "pointIntervalUnit" => "year", "pointPadding" => 94, "pointPlacement" => "between", "pointRange" => 69, "pointStart" => 96, "pointWidth" => 3, "selected" => 0, "skipKeyboardNavigation" => 0, "states" => [], "stemColor" => "98696f23b6ed2a881042dfa365a28d23", "stemDashStyle" => "LongDashDotDot", "stemWidth" => 45, "stickyTracking" => 0, "tooltip" => ["tooltip" => "ddbfc1b6aa0ad4d79c5dac7aa3b44888"]];
        $this->assertEquals($res46, $obj->toArray());

        $obj->setTurboThreshold(41);

        $res47 = ["allowPointSelect" => 0, "animationLimit" => 47, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 1, "colorIndex" => 88, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => 1, "cursor" => "crosshair", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "depth" => 35, "description" => "67daf92c833c41c95db874e18fcb2786", "edgeColor" => "acbab0d2e7e54e5a7a32fc80409601fc", "edgeWidth" => 54, "enableMouseTracking" => 1, "events" => [], "exposeElementToA11y" => 1, "findNearestPointBy" => "xy", "getExtremesFromAll" => 1, "groupZPadding" => 80, "id" => "b80bb7740288fda1f201890375a60c8f", "index" => 7, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "legendIndex" => 3, "lineWidth" => 96, "linkedTo" => "914fab47afc86331ec62837807a29419", "maxPointWidth" => 44, "name" => "b068931cc450442b63f5b3d276ea4297", "negativeColor" => "52fe4d3a854b01e25193b4f35fc2040e", "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "pointInterval" => 50, "pointIntervalUnit" => "year", "pointPadding" => 94, "pointPlacement" => "between", "pointRange" => 69, "pointStart" => 96, "pointWidth" => 3, "selected" => 0, "skipKeyboardNavigation" => 0, "states" => [], "stemColor" => "98696f23b6ed2a881042dfa365a28d23", "stemDashStyle" => "LongDashDotDot", "stemWidth" => 45, "stickyTracking" => 0, "tooltip" => ["tooltip" => "ddbfc1b6aa0ad4d79c5dac7aa3b44888"], "turboThreshold" => 41];
        $this->assertEquals($res47, $obj->toArray());

        $obj->setType("waterfall");

        $res48 = ["allowPointSelect" => 0, "animationLimit" => 47, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 1, "colorIndex" => 88, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => 1, "cursor" => "crosshair", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "depth" => 35, "description" => "67daf92c833c41c95db874e18fcb2786", "edgeColor" => "acbab0d2e7e54e5a7a32fc80409601fc", "edgeWidth" => 54, "enableMouseTracking" => 1, "events" => [], "exposeElementToA11y" => 1, "findNearestPointBy" => "xy", "getExtremesFromAll" => 1, "groupZPadding" => 80, "id" => "b80bb7740288fda1f201890375a60c8f", "index" => 7, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "legendIndex" => 3, "lineWidth" => 96, "linkedTo" => "914fab47afc86331ec62837807a29419", "maxPointWidth" => 44, "name" => "b068931cc450442b63f5b3d276ea4297", "negativeColor" => "52fe4d3a854b01e25193b4f35fc2040e", "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "pointInterval" => 50, "pointIntervalUnit" => "year", "pointPadding" => 94, "pointPlacement" => "between", "pointRange" => 69, "pointStart" => 96, "pointWidth" => 3, "selected" => 0, "skipKeyboardNavigation" => 0, "states" => [], "stemColor" => "98696f23b6ed2a881042dfa365a28d23", "stemDashStyle" => "LongDashDotDot", "stemWidth" => 45, "stickyTracking" => 0, "tooltip" => ["tooltip" => "ddbfc1b6aa0ad4d79c5dac7aa3b44888"], "turboThreshold" => 41, "type" => "waterfall"];
        $this->assertEquals($res48, $obj->toArray());

        $obj->setVisible(1);

        $res49 = ["allowPointSelect" => 0, "animationLimit" => 47, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 1, "colorIndex" => 88, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => 1, "cursor" => "crosshair", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "depth" => 35, "description" => "67daf92c833c41c95db874e18fcb2786", "edgeColor" => "acbab0d2e7e54e5a7a32fc80409601fc", "edgeWidth" => 54, "enableMouseTracking" => 1, "events" => [], "exposeElementToA11y" => 1, "findNearestPointBy" => "xy", "getExtremesFromAll" => 1, "groupZPadding" => 80, "id" => "b80bb7740288fda1f201890375a60c8f", "index" => 7, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "legendIndex" => 3, "lineWidth" => 96, "linkedTo" => "914fab47afc86331ec62837807a29419", "maxPointWidth" => 44, "name" => "b068931cc450442b63f5b3d276ea4297", "negativeColor" => "52fe4d3a854b01e25193b4f35fc2040e", "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "pointInterval" => 50, "pointIntervalUnit" => "year", "pointPadding" => 94, "pointPlacement" => "between", "pointRange" => 69, "pointStart" => 96, "pointWidth" => 3, "selected" => 0, "skipKeyboardNavigation" => 0, "states" => [], "stemColor" => "98696f23b6ed2a881042dfa365a28d23", "stemDashStyle" => "LongDashDotDot", "stemWidth" => 45, "stickyTracking" => 0, "tooltip" => ["tooltip" => "ddbfc1b6aa0ad4d79c5dac7aa3b44888"], "turboThreshold" => 41, "type" => "waterfall", "visible" => 1];
        $this->assertEquals($res49, $obj->toArray());

        $obj->setWhiskerColor("3176f361ab524a038497eb1a6c93df38");

        $res50 = ["allowPointSelect" => 0, "animationLimit" => 47, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 1, "colorIndex" => 88, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => 1, "cursor" => "crosshair", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "depth" => 35, "description" => "67daf92c833c41c95db874e18fcb2786", "edgeColor" => "acbab0d2e7e54e5a7a32fc80409601fc", "edgeWidth" => 54, "enableMouseTracking" => 1, "events" => [], "exposeElementToA11y" => 1, "findNearestPointBy" => "xy", "getExtremesFromAll" => 1, "groupZPadding" => 80, "id" => "b80bb7740288fda1f201890375a60c8f", "index" => 7, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "legendIndex" => 3, "lineWidth" => 96, "linkedTo" => "914fab47afc86331ec62837807a29419", "maxPointWidth" => 44, "name" => "b068931cc450442b63f5b3d276ea4297", "negativeColor" => "52fe4d3a854b01e25193b4f35fc2040e", "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "pointInterval" => 50, "pointIntervalUnit" => "year", "pointPadding" => 94, "pointPlacement" => "between", "pointRange" => 69, "pointStart" => 96, "pointWidth" => 3, "selected" => 0, "skipKeyboardNavigation" => 0, "states" => [], "stemColor" => "98696f23b6ed2a881042dfa365a28d23", "stemDashStyle" => "LongDashDotDot", "stemWidth" => 45, "stickyTracking" => 0, "tooltip" => ["tooltip" => "ddbfc1b6aa0ad4d79c5dac7aa3b44888"], "turboThreshold" => 41, "type" => "waterfall", "visible" => 1, "whiskerColor" => "3176f361ab524a038497eb1a6c93df38"];
        $this->assertEquals($res50, $obj->toArray());

        $obj->setWhiskerLength(67);

        $res51 = ["allowPointSelect" => 0, "animationLimit" => 47, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 1, "colorIndex" => 88, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => 1, "cursor" => "crosshair", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "depth" => 35, "description" => "67daf92c833c41c95db874e18fcb2786", "edgeColor" => "acbab0d2e7e54e5a7a32fc80409601fc", "edgeWidth" => 54, "enableMouseTracking" => 1, "events" => [], "exposeElementToA11y" => 1, "findNearestPointBy" => "xy", "getExtremesFromAll" => 1, "groupZPadding" => 80, "id" => "b80bb7740288fda1f201890375a60c8f", "index" => 7, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "legendIndex" => 3, "lineWidth" => 96, "linkedTo" => "914fab47afc86331ec62837807a29419", "maxPointWidth" => 44, "name" => "b068931cc450442b63f5b3d276ea4297", "negativeColor" => "52fe4d3a854b01e25193b4f35fc2040e", "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "pointInterval" => 50, "pointIntervalUnit" => "year", "pointPadding" => 94, "pointPlacement" => "between", "pointRange" => 69, "pointStart" => 96, "pointWidth" => 3, "selected" => 0, "skipKeyboardNavigation" => 0, "states" => [], "stemColor" => "98696f23b6ed2a881042dfa365a28d23", "stemDashStyle" => "LongDashDotDot", "stemWidth" => 45, "stickyTracking" => 0, "tooltip" => ["tooltip" => "ddbfc1b6aa0ad4d79c5dac7aa3b44888"], "turboThreshold" => 41, "type" => "waterfall", "visible" => 1, "whiskerColor" => "3176f361ab524a038497eb1a6c93df38", "whiskerLength" => 67];
        $this->assertEquals($res51, $obj->toArray());

        $obj->setWhiskerWidth(34);

        $res52 = ["allowPointSelect" => 0, "animationLimit" => 47, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 1, "colorIndex" => 88, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => 1, "cursor" => "crosshair", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "depth" => 35, "description" => "67daf92c833c41c95db874e18fcb2786", "edgeColor" => "acbab0d2e7e54e5a7a32fc80409601fc", "edgeWidth" => 54, "enableMouseTracking" => 1, "events" => [], "exposeElementToA11y" => 1, "findNearestPointBy" => "xy", "getExtremesFromAll" => 1, "groupZPadding" => 80, "id" => "b80bb7740288fda1f201890375a60c8f", "index" => 7, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "legendIndex" => 3, "lineWidth" => 96, "linkedTo" => "914fab47afc86331ec62837807a29419", "maxPointWidth" => 44, "name" => "b068931cc450442b63f5b3d276ea4297", "negativeColor" => "52fe4d3a854b01e25193b4f35fc2040e", "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "pointInterval" => 50, "pointIntervalUnit" => "year", "pointPadding" => 94, "pointPlacement" => "between", "pointRange" => 69, "pointStart" => 96, "pointWidth" => 3, "selected" => 0, "skipKeyboardNavigation" => 0, "states" => [], "stemColor" => "98696f23b6ed2a881042dfa365a28d23", "stemDashStyle" => "LongDashDotDot", "stemWidth" => 45, "stickyTracking" => 0, "tooltip" => ["tooltip" => "ddbfc1b6aa0ad4d79c5dac7aa3b44888"], "turboThreshold" => 41, "type" => "waterfall", "visible" => 1, "whiskerColor" => "3176f361ab524a038497eb1a6c93df38", "whiskerLength" => 67, "whiskerWidth" => 34];
        $this->assertEquals($res52, $obj->toArray());

        $obj->setXAxis(39);

        $res53 = ["allowPointSelect" => 0, "animationLimit" => 47, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 1, "colorIndex" => 88, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => 1, "cursor" => "crosshair", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "depth" => 35, "description" => "67daf92c833c41c95db874e18fcb2786", "edgeColor" => "acbab0d2e7e54e5a7a32fc80409601fc", "edgeWidth" => 54, "enableMouseTracking" => 1, "events" => [], "exposeElementToA11y" => 1, "findNearestPointBy" => "xy", "getExtremesFromAll" => 1, "groupZPadding" => 80, "id" => "b80bb7740288fda1f201890375a60c8f", "index" => 7, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "legendIndex" => 3, "lineWidth" => 96, "linkedTo" => "914fab47afc86331ec62837807a29419", "maxPointWidth" => 44, "name" => "b068931cc450442b63f5b3d276ea4297", "negativeColor" => "52fe4d3a854b01e25193b4f35fc2040e", "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "pointInterval" => 50, "pointIntervalUnit" => "year", "pointPadding" => 94, "pointPlacement" => "between", "pointRange" => 69, "pointStart" => 96, "pointWidth" => 3, "selected" => 0, "skipKeyboardNavigation" => 0, "states" => [], "stemColor" => "98696f23b6ed2a881042dfa365a28d23", "stemDashStyle" => "LongDashDotDot", "stemWidth" => 45, "stickyTracking" => 0, "tooltip" => ["tooltip" => "ddbfc1b6aa0ad4d79c5dac7aa3b44888"], "turboThreshold" => 41, "type" => "waterfall", "visible" => 1, "whiskerColor" => "3176f361ab524a038497eb1a6c93df38", "whiskerLength" => 67, "whiskerWidth" => 34, "xAxis" => 39];
        $this->assertEquals($res53, $obj->toArray());

        $obj->setYAxis(87);

        $res54 = ["allowPointSelect" => 0, "animationLimit" => 47, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 1, "colorIndex" => 88, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => 1, "cursor" => "crosshair", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "depth" => 35, "description" => "67daf92c833c41c95db874e18fcb2786", "edgeColor" => "acbab0d2e7e54e5a7a32fc80409601fc", "edgeWidth" => 54, "enableMouseTracking" => 1, "events" => [], "exposeElementToA11y" => 1, "findNearestPointBy" => "xy", "getExtremesFromAll" => 1, "groupZPadding" => 80, "id" => "b80bb7740288fda1f201890375a60c8f", "index" => 7, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "legendIndex" => 3, "lineWidth" => 96, "linkedTo" => "914fab47afc86331ec62837807a29419", "maxPointWidth" => 44, "name" => "b068931cc450442b63f5b3d276ea4297", "negativeColor" => "52fe4d3a854b01e25193b4f35fc2040e", "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "pointInterval" => 50, "pointIntervalUnit" => "year", "pointPadding" => 94, "pointPlacement" => "between", "pointRange" => 69, "pointStart" => 96, "pointWidth" => 3, "selected" => 0, "skipKeyboardNavigation" => 0, "states" => [], "stemColor" => "98696f23b6ed2a881042dfa365a28d23", "stemDashStyle" => "LongDashDotDot", "stemWidth" => 45, "stickyTracking" => 0, "tooltip" => ["tooltip" => "ddbfc1b6aa0ad4d79c5dac7aa3b44888"], "turboThreshold" => 41, "type" => "waterfall", "visible" => 1, "whiskerColor" => "3176f361ab524a038497eb1a6c93df38", "whiskerLength" => 67, "whiskerWidth" => 34, "xAxis" => 39, "yAxis" => 87];
        $this->assertEquals($res54, $obj->toArray());

        $obj->setZIndex(70);

        $res55 = ["allowPointSelect" => 0, "animationLimit" => 47, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 1, "colorIndex" => 88, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => 1, "cursor" => "crosshair", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "depth" => 35, "description" => "67daf92c833c41c95db874e18fcb2786", "edgeColor" => "acbab0d2e7e54e5a7a32fc80409601fc", "edgeWidth" => 54, "enableMouseTracking" => 1, "events" => [], "exposeElementToA11y" => 1, "findNearestPointBy" => "xy", "getExtremesFromAll" => 1, "groupZPadding" => 80, "id" => "b80bb7740288fda1f201890375a60c8f", "index" => 7, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "legendIndex" => 3, "lineWidth" => 96, "linkedTo" => "914fab47afc86331ec62837807a29419", "maxPointWidth" => 44, "name" => "b068931cc450442b63f5b3d276ea4297", "negativeColor" => "52fe4d3a854b01e25193b4f35fc2040e", "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "pointInterval" => 50, "pointIntervalUnit" => "year", "pointPadding" => 94, "pointPlacement" => "between", "pointRange" => 69, "pointStart" => 96, "pointWidth" => 3, "selected" => 0, "skipKeyboardNavigation" => 0, "states" => [], "stemColor" => "98696f23b6ed2a881042dfa365a28d23", "stemDashStyle" => "LongDashDotDot", "stemWidth" => 45, "stickyTracking" => 0, "tooltip" => ["tooltip" => "ddbfc1b6aa0ad4d79c5dac7aa3b44888"], "turboThreshold" => 41, "type" => "waterfall", "visible" => 1, "whiskerColor" => "3176f361ab524a038497eb1a6c93df38", "whiskerLength" => 67, "whiskerWidth" => 34, "xAxis" => 39, "yAxis" => 87, "zIndex" => 70];
        $this->assertEquals($res55, $obj->toArray());

        $obj->setZoneAxis("88421adabea658556aa3ab6c6181afad");

        $res56 = ["allowPointSelect" => 0, "animationLimit" => 47, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 1, "colorIndex" => 88, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => 1, "cursor" => "crosshair", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "depth" => 35, "description" => "67daf92c833c41c95db874e18fcb2786", "edgeColor" => "acbab0d2e7e54e5a7a32fc80409601fc", "edgeWidth" => 54, "enableMouseTracking" => 1, "events" => [], "exposeElementToA11y" => 1, "findNearestPointBy" => "xy", "getExtremesFromAll" => 1, "groupZPadding" => 80, "id" => "b80bb7740288fda1f201890375a60c8f", "index" => 7, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "legendIndex" => 3, "lineWidth" => 96, "linkedTo" => "914fab47afc86331ec62837807a29419", "maxPointWidth" => 44, "name" => "b068931cc450442b63f5b3d276ea4297", "negativeColor" => "52fe4d3a854b01e25193b4f35fc2040e", "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "pointInterval" => 50, "pointIntervalUnit" => "year", "pointPadding" => 94, "pointPlacement" => "between", "pointRange" => 69, "pointStart" => 96, "pointWidth" => 3, "selected" => 0, "skipKeyboardNavigation" => 0, "states" => [], "stemColor" => "98696f23b6ed2a881042dfa365a28d23", "stemDashStyle" => "LongDashDotDot", "stemWidth" => 45, "stickyTracking" => 0, "tooltip" => ["tooltip" => "ddbfc1b6aa0ad4d79c5dac7aa3b44888"], "turboThreshold" => 41, "type" => "waterfall", "visible" => 1, "whiskerColor" => "3176f361ab524a038497eb1a6c93df38", "whiskerLength" => 67, "whiskerWidth" => 34, "xAxis" => 39, "yAxis" => 87, "zIndex" => 70, "zoneAxis" => "88421adabea658556aa3ab6c6181afad"];
        $this->assertEquals($res56, $obj->toArray());

        $obj->setZones(["zones" => "26f94136f5db8afd4e9df1e512f7fdc5"]);

        $res57 = ["allowPointSelect" => 0, "animationLimit" => 47, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 1, "colorIndex" => 88, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => 1, "cursor" => "crosshair", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "depth" => 35, "description" => "67daf92c833c41c95db874e18fcb2786", "edgeColor" => "acbab0d2e7e54e5a7a32fc80409601fc", "edgeWidth" => 54, "enableMouseTracking" => 1, "events" => [], "exposeElementToA11y" => 1, "findNearestPointBy" => "xy", "getExtremesFromAll" => 1, "groupZPadding" => 80, "id" => "b80bb7740288fda1f201890375a60c8f", "index" => 7, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "legendIndex" => 3, "lineWidth" => 96, "linkedTo" => "914fab47afc86331ec62837807a29419", "maxPointWidth" => 44, "name" => "b068931cc450442b63f5b3d276ea4297", "negativeColor" => "52fe4d3a854b01e25193b4f35fc2040e", "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "pointInterval" => 50, "pointIntervalUnit" => "year", "pointPadding" => 94, "pointPlacement" => "between", "pointRange" => 69, "pointStart" => 96, "pointWidth" => 3, "selected" => 0, "skipKeyboardNavigation" => 0, "states" => [], "stemColor" => "98696f23b6ed2a881042dfa365a28d23", "stemDashStyle" => "LongDashDotDot", "stemWidth" => 45, "stickyTracking" => 0, "tooltip" => ["tooltip" => "ddbfc1b6aa0ad4d79c5dac7aa3b44888"], "turboThreshold" => 41, "type" => "waterfall", "visible" => 1, "whiskerColor" => "3176f361ab524a038497eb1a6c93df38", "whiskerLength" => 67, "whiskerWidth" => 34, "xAxis" => 39, "yAxis" => 87, "zIndex" => 70, "zoneAxis" => "88421adabea658556aa3ab6c6181afad", "zones" => ["zones" => "26f94136f5db8afd4e9df1e512f7fdc5"]];
        $this->assertEquals($res57, $obj->toArray());
    }

    /**
     * Tests __construct()
     *
     * @return void
     */
    public function test__construct() {

        $obj1 = new \WBW\Bundle\HighchartsBundle\API\Chart\Series\HighchartsErrorbar(true);

        $this->assertNull($obj1->getAllowPointSelect());
        $this->assertNull($obj1->getAnimationLimit());
        $this->assertNull($obj1->getClassName());
        $this->assertNull($obj1->getColor());
        $this->assertNull($obj1->getColorByPoint());
        $this->assertNull($obj1->getColorIndex());
        $this->assertNull($obj1->getColors());
        $this->assertNull($obj1->getCrisp());
        $this->assertNull($obj1->getCursor());
        $this->assertNull($obj1->getData());
        $this->assertNull($obj1->getDepth());
        $this->assertNull($obj1->getDescription());
        $this->assertNull($obj1->getEdgeColor());
        $this->assertNull($obj1->getEdgeWidth());
        $this->assertNull($obj1->getEnableMouseTracking());
        $this->assertNull($obj1->getEvents());
        $this->assertNull($obj1->getExposeElementToA11y());
        $this->assertNull($obj1->getFindNearestPointBy());
        $this->assertNull($obj1->getGetExtremesFromAll());
        $this->assertNull($obj1->getGroupZPadding());
        $this->assertNull($obj1->getId());
        $this->assertNull($obj1->getIndex());
        $this->assertNull($obj1->getKeys());
        $this->assertNull($obj1->getLegendIndex());
        $this->assertNull($obj1->getLineWidth());
        $this->assertNull($obj1->getLinkedTo());
        $this->assertNull($obj1->getMaxPointWidth());
        $this->assertNull($obj1->getName());
        $this->assertNull($obj1->getNegativeColor());
        $this->assertNull($obj1->getPoint());
        $this->assertNull($obj1->getPointDescriptionFormatter());
        $this->assertNull($obj1->getPointInterval());
        $this->assertNull($obj1->getPointIntervalUnit());
        $this->assertNull($obj1->getPointPadding());
        $this->assertNull($obj1->getPointPlacement());
        $this->assertNull($obj1->getPointRange());
        $this->assertNull($obj1->getPointStart());
        $this->assertNull($obj1->getPointWidth());
        $this->assertNull($obj1->getSelected());
        $this->assertNull($obj1->getSkipKeyboardNavigation());
        $this->assertNull($obj1->getStates());
        $this->assertNull($obj1->getStemColor());
        $this->assertNull($obj1->getStemDashStyle());
        $this->assertNull($obj1->getStemWidth());
        $this->assertNull($obj1->getStickyTracking());
        $this->assertNull($obj1->getTooltip());
        $this->assertNull($obj1->getTurboThreshold());
        $this->assertNull($obj1->getType());
        $this->assertNull($obj1->getVisible());
        $this->assertNull($obj1->getWhiskerColor());
        $this->assertNull($obj1->getWhiskerLength());
        $this->assertNull($obj1->getWhiskerWidth());
        $this->assertNull($obj1->getXAxis());
        $this->assertNull($obj1->getYAxis());
        $this->assertNull($obj1->getZIndex());
        $this->assertNull($obj1->getZoneAxis());
        $this->assertNull($obj1->getZones());

        $obj0 = new \WBW\Bundle\HighchartsBundle\API\Chart\Series\HighchartsErrorbar(false);

        $this->assertEquals(false, $obj0->getAllowPointSelect());
        $this->assertNull($obj0->getAnimationLimit());
        $this->assertNull($obj0->getClassName());
        $this->assertEquals("#000000", $obj0->getColor());
        $this->assertEquals(false, $obj0->getColorByPoint());
        $this->assertNull($obj0->getColorIndex());
        $this->assertNull($obj0->getColors());
        $this->assertEquals(true, $obj0->getCrisp());
        $this->assertNull($obj0->getCursor());
        $this->assertNull($obj0->getData());
        $this->assertEquals(25, $obj0->getDepth());
        $this->assertNull($obj0->getDescription());
        $this->assertNull($obj0->getEdgeColor());
        $this->assertEquals(1, $obj0->getEdgeWidth());
        $this->assertEquals(true, $obj0->getEnableMouseTracking());
        $this->assertNull($obj0->getEvents());
        $this->assertNull($obj0->getExposeElementToA11y());
        $this->assertNull($obj0->getFindNearestPointBy());
        $this->assertEquals(false, $obj0->getGetExtremesFromAll());
        $this->assertEquals(1, $obj0->getGroupZPadding());
        $this->assertNull($obj0->getId());
        $this->assertNull($obj0->getIndex());
        $this->assertNull($obj0->getKeys());
        $this->assertNull($obj0->getLegendIndex());
        $this->assertEquals(1, $obj0->getLineWidth());
        $this->assertEquals(":previous", $obj0->getLinkedTo());
        $this->assertNull($obj0->getMaxPointWidth());
        $this->assertNull($obj0->getName());
        $this->assertNull($obj0->getNegativeColor());
        $this->assertNull($obj0->getPoint());
        $this->assertNull($obj0->getPointDescriptionFormatter());
        $this->assertEquals(1, $obj0->getPointInterval());
        $this->assertNull($obj0->getPointIntervalUnit());
        $this->assertEquals(0.1, $obj0->getPointPadding());
        $this->assertNull($obj0->getPointPlacement());
        $this->assertNull($obj0->getPointRange());
        $this->assertEquals(0, $obj0->getPointStart());
        $this->assertNull($obj0->getPointWidth());
        $this->assertEquals(false, $obj0->getSelected());
        $this->assertNull($obj0->getSkipKeyboardNavigation());
        $this->assertNull($obj0->getStates());
        $this->assertNull($obj0->getStemColor());
        $this->assertEquals("Solid", $obj0->getStemDashStyle());
        $this->assertNull($obj0->getStemWidth());
        $this->assertEquals(true, $obj0->getStickyTracking());
        $this->assertNull($obj0->getTooltip());
        $this->assertEquals(1000, $obj0->getTurboThreshold());
        $this->assertNull($obj0->getType());
        $this->assertEquals(true, $obj0->getVisible());
        $this->assertNull($obj0->getWhiskerColor());
        $this->assertEquals("50%", $obj0->getWhiskerLength());
        $this->assertNull($obj0->getWhiskerWidth());
        $this->assertEquals("0", $obj0->getXAxis());
        $this->assertEquals("0", $obj0->getYAxis());
        $this->assertNull($obj0->getZIndex());
        $this->assertEquals("y", $obj0->getZoneAxis());
        $this->assertNull($obj0->getZones());
    }

}
