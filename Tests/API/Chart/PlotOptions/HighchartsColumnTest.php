<?php

/*
 * This file is part of the highcharts-bundle package.
 *
 * (c) 2017 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\HighchartsBundle\Tests\API\Chart\PlotOptions;

use WBW\Bundle\HighchartsBundle\Tests\AbstractTestCase;

/**
 * Highcharts column test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\HighchartsBundle\Tests\API\Chart\PlotOptions
 * @version 5.0.14
 */
final class HighchartsColumnTest extends AbstractTestCase {

    /**
     * Tests clear()
     *
     * @return void
     */
    public function testClear() {

        $obj = new \WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\HighchartsColumn(false);

        $obj->newDataLabels();
        $obj->newEvents();
        $obj->newPoint();
        $obj->newStates();

        $obj->clear();

        $res = ["dataLabels" => [], "events" => [], "point" => [], "states" => []];
        $this->assertEquals($res, $obj->toArray());
    }

    /**
     * Tests jsonSerialize()
     *
     * @return void
     */
    public function testJsonSerialize() {

        $obj = new \WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\HighchartsColumn(true);

        $this->assertEquals([], $obj->jsonSerialize());
    }

    /**
     * Tests newDataLabels()
     *
     * @return void.
     */
    public function testNewDataLabels() {

        $obj = new \WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\HighchartsColumn(false);

        $res = $obj->newDataLabels();
        $this->assertInstanceOf(\WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\Column\HighchartsDataLabels::class, $res);
    }

    /**
     * Tests newEvents()
     *
     * @return void.
     */
    public function testNewEvents() {

        $obj = new \WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\HighchartsColumn(false);

        $res = $obj->newEvents();
        $this->assertInstanceOf(\WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\Column\HighchartsEvents::class, $res);
    }

    /**
     * Tests newPoint()
     *
     * @return void.
     */
    public function testNewPoint() {

        $obj = new \WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\HighchartsColumn(false);

        $res = $obj->newPoint();
        $this->assertInstanceOf(\WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\Column\HighchartsPoint::class, $res);
    }

    /**
     * Tests newStates()
     *
     * @return void.
     */
    public function testNewStates() {

        $obj = new \WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\HighchartsColumn(false);

        $res = $obj->newStates();
        $this->assertInstanceOf(\WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\Column\HighchartsStates::class, $res);
    }

    /**
     * Tests toArray()
     *
     * @return void
     */
    public function testToArray() {

        $obj = new \WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\HighchartsColumn(true);

        $obj->setAllowPointSelect(0);

        $res1 = ["allowPointSelect" => 0];
        $this->assertEquals($res1, $obj->toArray());

        $obj->setAnimation(1);

        $res2 = ["allowPointSelect" => 0, "animation" => 1];
        $this->assertEquals($res2, $obj->toArray());

        $obj->setAnimationLimit(36);

        $res3 = ["allowPointSelect" => 0, "animation" => 1, "animationLimit" => 36];
        $this->assertEquals($res3, $obj->toArray());

        $obj->setBorderColor("97da935a74593c55d78be9d1295aa994");

        $res4 = ["allowPointSelect" => 0, "animation" => 1, "animationLimit" => 36, "borderColor" => "97da935a74593c55d78be9d1295aa994"];
        $this->assertEquals($res4, $obj->toArray());

        $obj->setBorderRadius(86);

        $res5 = ["allowPointSelect" => 0, "animation" => 1, "animationLimit" => 36, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 86];
        $this->assertEquals($res5, $obj->toArray());

        $obj->setBorderWidth(69);

        $res6 = ["allowPointSelect" => 0, "animation" => 1, "animationLimit" => 36, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 86, "borderWidth" => 69];
        $this->assertEquals($res6, $obj->toArray());

        $obj->setClassName("6f66e878c62db60568a3487869695820");

        $res7 = ["allowPointSelect" => 0, "animation" => 1, "animationLimit" => 36, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 86, "borderWidth" => 69, "className" => "6f66e878c62db60568a3487869695820"];
        $this->assertEquals($res7, $obj->toArray());

        $obj->setColor("70dda5dfb8053dc6d1c492574bce9bfd");

        $res8 = ["allowPointSelect" => 0, "animation" => 1, "animationLimit" => 36, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 86, "borderWidth" => 69, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd"];
        $this->assertEquals($res8, $obj->toArray());

        $obj->setColorByPoint(1);

        $res9 = ["allowPointSelect" => 0, "animation" => 1, "animationLimit" => 36, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 86, "borderWidth" => 69, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 1];
        $this->assertEquals($res9, $obj->toArray());

        $obj->setColorIndex(5);

        $res10 = ["allowPointSelect" => 0, "animation" => 1, "animationLimit" => 36, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 86, "borderWidth" => 69, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 1, "colorIndex" => 5];
        $this->assertEquals($res10, $obj->toArray());

        $obj->setColors(["colors" => "62848e3ce5804aa985513a7922ff87b2"]);

        $res11 = ["allowPointSelect" => 0, "animation" => 1, "animationLimit" => 36, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 86, "borderWidth" => 69, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 1, "colorIndex" => 5, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"]];
        $this->assertEquals($res11, $obj->toArray());

        $obj->setCrisp(0);

        $res12 = ["allowPointSelect" => 0, "animation" => 1, "animationLimit" => 36, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 86, "borderWidth" => 69, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 1, "colorIndex" => 5, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => 0];
        $this->assertEquals($res12, $obj->toArray());

        $obj->setCropThreshold(36);

        $res13 = ["allowPointSelect" => 0, "animation" => 1, "animationLimit" => 36, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 86, "borderWidth" => 69, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 1, "colorIndex" => 5, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => 0, "cropThreshold" => 36];
        $this->assertEquals($res13, $obj->toArray());

        $obj->setCursor("crosshair");

        $res14 = ["allowPointSelect" => 0, "animation" => 1, "animationLimit" => 36, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 86, "borderWidth" => 69, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 1, "colorIndex" => 5, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => 0, "cropThreshold" => 36, "cursor" => "crosshair"];
        $this->assertEquals($res14, $obj->toArray());

        $obj->setDataLabels(new \WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\Column\HighchartsDataLabels());

        $res15 = ["allowPointSelect" => 0, "animation" => 1, "animationLimit" => 36, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 86, "borderWidth" => 69, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 1, "colorIndex" => 5, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => 0, "cropThreshold" => 36, "cursor" => "crosshair", "dataLabels" => []];
        $this->assertEquals($res15, $obj->toArray());

        $obj->setDepth(17);

        $res16 = ["allowPointSelect" => 0, "animation" => 1, "animationLimit" => 36, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 86, "borderWidth" => 69, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 1, "colorIndex" => 5, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => 0, "cropThreshold" => 36, "cursor" => "crosshair", "dataLabels" => [], "depth" => 17];
        $this->assertEquals($res16, $obj->toArray());

        $obj->setDescription("67daf92c833c41c95db874e18fcb2786");

        $res17 = ["allowPointSelect" => 0, "animation" => 1, "animationLimit" => 36, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 86, "borderWidth" => 69, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 1, "colorIndex" => 5, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => 0, "cropThreshold" => 36, "cursor" => "crosshair", "dataLabels" => [], "depth" => 17, "description" => "67daf92c833c41c95db874e18fcb2786"];
        $this->assertEquals($res17, $obj->toArray());

        $obj->setEdgeColor("acbab0d2e7e54e5a7a32fc80409601fc");

        $res18 = ["allowPointSelect" => 0, "animation" => 1, "animationLimit" => 36, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 86, "borderWidth" => 69, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 1, "colorIndex" => 5, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => 0, "cropThreshold" => 36, "cursor" => "crosshair", "dataLabels" => [], "depth" => 17, "description" => "67daf92c833c41c95db874e18fcb2786", "edgeColor" => "acbab0d2e7e54e5a7a32fc80409601fc"];
        $this->assertEquals($res18, $obj->toArray());

        $obj->setEdgeWidth(31);

        $res19 = ["allowPointSelect" => 0, "animation" => 1, "animationLimit" => 36, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 86, "borderWidth" => 69, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 1, "colorIndex" => 5, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => 0, "cropThreshold" => 36, "cursor" => "crosshair", "dataLabels" => [], "depth" => 17, "description" => "67daf92c833c41c95db874e18fcb2786", "edgeColor" => "acbab0d2e7e54e5a7a32fc80409601fc", "edgeWidth" => 31];
        $this->assertEquals($res19, $obj->toArray());

        $obj->setEnableMouseTracking(0);

        $res20 = ["allowPointSelect" => 0, "animation" => 1, "animationLimit" => 36, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 86, "borderWidth" => 69, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 1, "colorIndex" => 5, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => 0, "cropThreshold" => 36, "cursor" => "crosshair", "dataLabels" => [], "depth" => 17, "description" => "67daf92c833c41c95db874e18fcb2786", "edgeColor" => "acbab0d2e7e54e5a7a32fc80409601fc", "edgeWidth" => 31, "enableMouseTracking" => 0];
        $this->assertEquals($res20, $obj->toArray());

        $obj->setEvents(new \WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\Column\HighchartsEvents());

        $res21 = ["allowPointSelect" => 0, "animation" => 1, "animationLimit" => 36, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 86, "borderWidth" => 69, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 1, "colorIndex" => 5, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => 0, "cropThreshold" => 36, "cursor" => "crosshair", "dataLabels" => [], "depth" => 17, "description" => "67daf92c833c41c95db874e18fcb2786", "edgeColor" => "acbab0d2e7e54e5a7a32fc80409601fc", "edgeWidth" => 31, "enableMouseTracking" => 0, "events" => []];
        $this->assertEquals($res21, $obj->toArray());

        $obj->setExposeElementToA11y(0);

        $res22 = ["allowPointSelect" => 0, "animation" => 1, "animationLimit" => 36, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 86, "borderWidth" => 69, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 1, "colorIndex" => 5, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => 0, "cropThreshold" => 36, "cursor" => "crosshair", "dataLabels" => [], "depth" => 17, "description" => "67daf92c833c41c95db874e18fcb2786", "edgeColor" => "acbab0d2e7e54e5a7a32fc80409601fc", "edgeWidth" => 31, "enableMouseTracking" => 0, "events" => [], "exposeElementToA11y" => 0];
        $this->assertEquals($res22, $obj->toArray());

        $obj->setFindNearestPointBy("xy");

        $res23 = ["allowPointSelect" => 0, "animation" => 1, "animationLimit" => 36, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 86, "borderWidth" => 69, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 1, "colorIndex" => 5, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => 0, "cropThreshold" => 36, "cursor" => "crosshair", "dataLabels" => [], "depth" => 17, "description" => "67daf92c833c41c95db874e18fcb2786", "edgeColor" => "acbab0d2e7e54e5a7a32fc80409601fc", "edgeWidth" => 31, "enableMouseTracking" => 0, "events" => [], "exposeElementToA11y" => 0, "findNearestPointBy" => "xy"];
        $this->assertEquals($res23, $obj->toArray());

        $obj->setGetExtremesFromAll(0);

        $res24 = ["allowPointSelect" => 0, "animation" => 1, "animationLimit" => 36, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 86, "borderWidth" => 69, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 1, "colorIndex" => 5, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => 0, "cropThreshold" => 36, "cursor" => "crosshair", "dataLabels" => [], "depth" => 17, "description" => "67daf92c833c41c95db874e18fcb2786", "edgeColor" => "acbab0d2e7e54e5a7a32fc80409601fc", "edgeWidth" => 31, "enableMouseTracking" => 0, "events" => [], "exposeElementToA11y" => 0, "findNearestPointBy" => "xy", "getExtremesFromAll" => 0];
        $this->assertEquals($res24, $obj->toArray());

        $obj->setGroupPadding(5);

        $res25 = ["allowPointSelect" => 0, "animation" => 1, "animationLimit" => 36, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 86, "borderWidth" => 69, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 1, "colorIndex" => 5, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => 0, "cropThreshold" => 36, "cursor" => "crosshair", "dataLabels" => [], "depth" => 17, "description" => "67daf92c833c41c95db874e18fcb2786", "edgeColor" => "acbab0d2e7e54e5a7a32fc80409601fc", "edgeWidth" => 31, "enableMouseTracking" => 0, "events" => [], "exposeElementToA11y" => 0, "findNearestPointBy" => "xy", "getExtremesFromAll" => 0, "groupPadding" => 5];
        $this->assertEquals($res25, $obj->toArray());

        $obj->setGroupZPadding(41);

        $res26 = ["allowPointSelect" => 0, "animation" => 1, "animationLimit" => 36, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 86, "borderWidth" => 69, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 1, "colorIndex" => 5, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => 0, "cropThreshold" => 36, "cursor" => "crosshair", "dataLabels" => [], "depth" => 17, "description" => "67daf92c833c41c95db874e18fcb2786", "edgeColor" => "acbab0d2e7e54e5a7a32fc80409601fc", "edgeWidth" => 31, "enableMouseTracking" => 0, "events" => [], "exposeElementToA11y" => 0, "findNearestPointBy" => "xy", "getExtremesFromAll" => 0, "groupPadding" => 5, "groupZPadding" => 41];
        $this->assertEquals($res26, $obj->toArray());

        $obj->setGrouping(1);

        $res27 = ["allowPointSelect" => 0, "animation" => 1, "animationLimit" => 36, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 86, "borderWidth" => 69, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 1, "colorIndex" => 5, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => 0, "cropThreshold" => 36, "cursor" => "crosshair", "dataLabels" => [], "depth" => 17, "description" => "67daf92c833c41c95db874e18fcb2786", "edgeColor" => "acbab0d2e7e54e5a7a32fc80409601fc", "edgeWidth" => 31, "enableMouseTracking" => 0, "events" => [], "exposeElementToA11y" => 0, "findNearestPointBy" => "xy", "getExtremesFromAll" => 0, "groupPadding" => 5, "groupZPadding" => 41, "grouping" => 1];
        $this->assertEquals($res27, $obj->toArray());

        $obj->setKeys(["keys" => "14f802e1fba977727845e8872c1743a7"]);

        $res28 = ["allowPointSelect" => 0, "animation" => 1, "animationLimit" => 36, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 86, "borderWidth" => 69, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 1, "colorIndex" => 5, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => 0, "cropThreshold" => 36, "cursor" => "crosshair", "dataLabels" => [], "depth" => 17, "description" => "67daf92c833c41c95db874e18fcb2786", "edgeColor" => "acbab0d2e7e54e5a7a32fc80409601fc", "edgeWidth" => 31, "enableMouseTracking" => 0, "events" => [], "exposeElementToA11y" => 0, "findNearestPointBy" => "xy", "getExtremesFromAll" => 0, "groupPadding" => 5, "groupZPadding" => 41, "grouping" => 1, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"]];
        $this->assertEquals($res28, $obj->toArray());

        $obj->setLinkedTo("914fab47afc86331ec62837807a29419");

        $res29 = ["allowPointSelect" => 0, "animation" => 1, "animationLimit" => 36, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 86, "borderWidth" => 69, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 1, "colorIndex" => 5, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => 0, "cropThreshold" => 36, "cursor" => "crosshair", "dataLabels" => [], "depth" => 17, "description" => "67daf92c833c41c95db874e18fcb2786", "edgeColor" => "acbab0d2e7e54e5a7a32fc80409601fc", "edgeWidth" => 31, "enableMouseTracking" => 0, "events" => [], "exposeElementToA11y" => 0, "findNearestPointBy" => "xy", "getExtremesFromAll" => 0, "groupPadding" => 5, "groupZPadding" => 41, "grouping" => 1, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "linkedTo" => "914fab47afc86331ec62837807a29419"];
        $this->assertEquals($res29, $obj->toArray());

        $obj->setMaxPointWidth(7);

        $res30 = ["allowPointSelect" => 0, "animation" => 1, "animationLimit" => 36, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 86, "borderWidth" => 69, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 1, "colorIndex" => 5, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => 0, "cropThreshold" => 36, "cursor" => "crosshair", "dataLabels" => [], "depth" => 17, "description" => "67daf92c833c41c95db874e18fcb2786", "edgeColor" => "acbab0d2e7e54e5a7a32fc80409601fc", "edgeWidth" => 31, "enableMouseTracking" => 0, "events" => [], "exposeElementToA11y" => 0, "findNearestPointBy" => "xy", "getExtremesFromAll" => 0, "groupPadding" => 5, "groupZPadding" => 41, "grouping" => 1, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "linkedTo" => "914fab47afc86331ec62837807a29419", "maxPointWidth" => 7];
        $this->assertEquals($res30, $obj->toArray());

        $obj->setMinPointLength(22);

        $res31 = ["allowPointSelect" => 0, "animation" => 1, "animationLimit" => 36, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 86, "borderWidth" => 69, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 1, "colorIndex" => 5, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => 0, "cropThreshold" => 36, "cursor" => "crosshair", "dataLabels" => [], "depth" => 17, "description" => "67daf92c833c41c95db874e18fcb2786", "edgeColor" => "acbab0d2e7e54e5a7a32fc80409601fc", "edgeWidth" => 31, "enableMouseTracking" => 0, "events" => [], "exposeElementToA11y" => 0, "findNearestPointBy" => "xy", "getExtremesFromAll" => 0, "groupPadding" => 5, "groupZPadding" => 41, "grouping" => 1, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "linkedTo" => "914fab47afc86331ec62837807a29419", "maxPointWidth" => 7, "minPointLength" => 22];
        $this->assertEquals($res31, $obj->toArray());

        $obj->setNegativeColor("52fe4d3a854b01e25193b4f35fc2040e");

        $res32 = ["allowPointSelect" => 0, "animation" => 1, "animationLimit" => 36, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 86, "borderWidth" => 69, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 1, "colorIndex" => 5, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => 0, "cropThreshold" => 36, "cursor" => "crosshair", "dataLabels" => [], "depth" => 17, "description" => "67daf92c833c41c95db874e18fcb2786", "edgeColor" => "acbab0d2e7e54e5a7a32fc80409601fc", "edgeWidth" => 31, "enableMouseTracking" => 0, "events" => [], "exposeElementToA11y" => 0, "findNearestPointBy" => "xy", "getExtremesFromAll" => 0, "groupPadding" => 5, "groupZPadding" => 41, "grouping" => 1, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "linkedTo" => "914fab47afc86331ec62837807a29419", "maxPointWidth" => 7, "minPointLength" => 22, "negativeColor" => "52fe4d3a854b01e25193b4f35fc2040e"];
        $this->assertEquals($res32, $obj->toArray());

        $obj->setPoint(new \WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\Column\HighchartsPoint());

        $res33 = ["allowPointSelect" => 0, "animation" => 1, "animationLimit" => 36, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 86, "borderWidth" => 69, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 1, "colorIndex" => 5, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => 0, "cropThreshold" => 36, "cursor" => "crosshair", "dataLabels" => [], "depth" => 17, "description" => "67daf92c833c41c95db874e18fcb2786", "edgeColor" => "acbab0d2e7e54e5a7a32fc80409601fc", "edgeWidth" => 31, "enableMouseTracking" => 0, "events" => [], "exposeElementToA11y" => 0, "findNearestPointBy" => "xy", "getExtremesFromAll" => 0, "groupPadding" => 5, "groupZPadding" => 41, "grouping" => 1, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "linkedTo" => "914fab47afc86331ec62837807a29419", "maxPointWidth" => 7, "minPointLength" => 22, "negativeColor" => "52fe4d3a854b01e25193b4f35fc2040e", "point" => []];
        $this->assertEquals($res33, $obj->toArray());

        $obj->setPointDescriptionFormatter("b5fd0c15b3ca81f726e2c7b93907ba36");

        $res34 = ["allowPointSelect" => 0, "animation" => 1, "animationLimit" => 36, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 86, "borderWidth" => 69, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 1, "colorIndex" => 5, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => 0, "cropThreshold" => 36, "cursor" => "crosshair", "dataLabels" => [], "depth" => 17, "description" => "67daf92c833c41c95db874e18fcb2786", "edgeColor" => "acbab0d2e7e54e5a7a32fc80409601fc", "edgeWidth" => 31, "enableMouseTracking" => 0, "events" => [], "exposeElementToA11y" => 0, "findNearestPointBy" => "xy", "getExtremesFromAll" => 0, "groupPadding" => 5, "groupZPadding" => 41, "grouping" => 1, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "linkedTo" => "914fab47afc86331ec62837807a29419", "maxPointWidth" => 7, "minPointLength" => 22, "negativeColor" => "52fe4d3a854b01e25193b4f35fc2040e", "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36"];
        $this->assertEquals($res34, $obj->toArray());

        $obj->setPointInterval(48);

        $res35 = ["allowPointSelect" => 0, "animation" => 1, "animationLimit" => 36, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 86, "borderWidth" => 69, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 1, "colorIndex" => 5, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => 0, "cropThreshold" => 36, "cursor" => "crosshair", "dataLabels" => [], "depth" => 17, "description" => "67daf92c833c41c95db874e18fcb2786", "edgeColor" => "acbab0d2e7e54e5a7a32fc80409601fc", "edgeWidth" => 31, "enableMouseTracking" => 0, "events" => [], "exposeElementToA11y" => 0, "findNearestPointBy" => "xy", "getExtremesFromAll" => 0, "groupPadding" => 5, "groupZPadding" => 41, "grouping" => 1, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "linkedTo" => "914fab47afc86331ec62837807a29419", "maxPointWidth" => 7, "minPointLength" => 22, "negativeColor" => "52fe4d3a854b01e25193b4f35fc2040e", "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "pointInterval" => 48];
        $this->assertEquals($res35, $obj->toArray());

        $obj->setPointIntervalUnit("year");

        $res36 = ["allowPointSelect" => 0, "animation" => 1, "animationLimit" => 36, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 86, "borderWidth" => 69, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 1, "colorIndex" => 5, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => 0, "cropThreshold" => 36, "cursor" => "crosshair", "dataLabels" => [], "depth" => 17, "description" => "67daf92c833c41c95db874e18fcb2786", "edgeColor" => "acbab0d2e7e54e5a7a32fc80409601fc", "edgeWidth" => 31, "enableMouseTracking" => 0, "events" => [], "exposeElementToA11y" => 0, "findNearestPointBy" => "xy", "getExtremesFromAll" => 0, "groupPadding" => 5, "groupZPadding" => 41, "grouping" => 1, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "linkedTo" => "914fab47afc86331ec62837807a29419", "maxPointWidth" => 7, "minPointLength" => 22, "negativeColor" => "52fe4d3a854b01e25193b4f35fc2040e", "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "pointInterval" => 48, "pointIntervalUnit" => "year"];
        $this->assertEquals($res36, $obj->toArray());

        $obj->setPointPadding(100);

        $res37 = ["allowPointSelect" => 0, "animation" => 1, "animationLimit" => 36, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 86, "borderWidth" => 69, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 1, "colorIndex" => 5, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => 0, "cropThreshold" => 36, "cursor" => "crosshair", "dataLabels" => [], "depth" => 17, "description" => "67daf92c833c41c95db874e18fcb2786", "edgeColor" => "acbab0d2e7e54e5a7a32fc80409601fc", "edgeWidth" => 31, "enableMouseTracking" => 0, "events" => [], "exposeElementToA11y" => 0, "findNearestPointBy" => "xy", "getExtremesFromAll" => 0, "groupPadding" => 5, "groupZPadding" => 41, "grouping" => 1, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "linkedTo" => "914fab47afc86331ec62837807a29419", "maxPointWidth" => 7, "minPointLength" => 22, "negativeColor" => "52fe4d3a854b01e25193b4f35fc2040e", "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "pointInterval" => 48, "pointIntervalUnit" => "year", "pointPadding" => 100];
        $this->assertEquals($res37, $obj->toArray());

        $obj->setPointPlacement("between");

        $res38 = ["allowPointSelect" => 0, "animation" => 1, "animationLimit" => 36, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 86, "borderWidth" => 69, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 1, "colorIndex" => 5, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => 0, "cropThreshold" => 36, "cursor" => "crosshair", "dataLabels" => [], "depth" => 17, "description" => "67daf92c833c41c95db874e18fcb2786", "edgeColor" => "acbab0d2e7e54e5a7a32fc80409601fc", "edgeWidth" => 31, "enableMouseTracking" => 0, "events" => [], "exposeElementToA11y" => 0, "findNearestPointBy" => "xy", "getExtremesFromAll" => 0, "groupPadding" => 5, "groupZPadding" => 41, "grouping" => 1, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "linkedTo" => "914fab47afc86331ec62837807a29419", "maxPointWidth" => 7, "minPointLength" => 22, "negativeColor" => "52fe4d3a854b01e25193b4f35fc2040e", "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "pointInterval" => 48, "pointIntervalUnit" => "year", "pointPadding" => 100, "pointPlacement" => "between"];
        $this->assertEquals($res38, $obj->toArray());

        $obj->setPointRange(55);

        $res39 = ["allowPointSelect" => 0, "animation" => 1, "animationLimit" => 36, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 86, "borderWidth" => 69, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 1, "colorIndex" => 5, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => 0, "cropThreshold" => 36, "cursor" => "crosshair", "dataLabels" => [], "depth" => 17, "description" => "67daf92c833c41c95db874e18fcb2786", "edgeColor" => "acbab0d2e7e54e5a7a32fc80409601fc", "edgeWidth" => 31, "enableMouseTracking" => 0, "events" => [], "exposeElementToA11y" => 0, "findNearestPointBy" => "xy", "getExtremesFromAll" => 0, "groupPadding" => 5, "groupZPadding" => 41, "grouping" => 1, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "linkedTo" => "914fab47afc86331ec62837807a29419", "maxPointWidth" => 7, "minPointLength" => 22, "negativeColor" => "52fe4d3a854b01e25193b4f35fc2040e", "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "pointInterval" => 48, "pointIntervalUnit" => "year", "pointPadding" => 100, "pointPlacement" => "between", "pointRange" => 55];
        $this->assertEquals($res39, $obj->toArray());

        $obj->setPointStart(72);

        $res40 = ["allowPointSelect" => 0, "animation" => 1, "animationLimit" => 36, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 86, "borderWidth" => 69, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 1, "colorIndex" => 5, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => 0, "cropThreshold" => 36, "cursor" => "crosshair", "dataLabels" => [], "depth" => 17, "description" => "67daf92c833c41c95db874e18fcb2786", "edgeColor" => "acbab0d2e7e54e5a7a32fc80409601fc", "edgeWidth" => 31, "enableMouseTracking" => 0, "events" => [], "exposeElementToA11y" => 0, "findNearestPointBy" => "xy", "getExtremesFromAll" => 0, "groupPadding" => 5, "groupZPadding" => 41, "grouping" => 1, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "linkedTo" => "914fab47afc86331ec62837807a29419", "maxPointWidth" => 7, "minPointLength" => 22, "negativeColor" => "52fe4d3a854b01e25193b4f35fc2040e", "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "pointInterval" => 48, "pointIntervalUnit" => "year", "pointPadding" => 100, "pointPlacement" => "between", "pointRange" => 55, "pointStart" => 72];
        $this->assertEquals($res40, $obj->toArray());

        $obj->setPointWidth(70);

        $res41 = ["allowPointSelect" => 0, "animation" => 1, "animationLimit" => 36, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 86, "borderWidth" => 69, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 1, "colorIndex" => 5, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => 0, "cropThreshold" => 36, "cursor" => "crosshair", "dataLabels" => [], "depth" => 17, "description" => "67daf92c833c41c95db874e18fcb2786", "edgeColor" => "acbab0d2e7e54e5a7a32fc80409601fc", "edgeWidth" => 31, "enableMouseTracking" => 0, "events" => [], "exposeElementToA11y" => 0, "findNearestPointBy" => "xy", "getExtremesFromAll" => 0, "groupPadding" => 5, "groupZPadding" => 41, "grouping" => 1, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "linkedTo" => "914fab47afc86331ec62837807a29419", "maxPointWidth" => 7, "minPointLength" => 22, "negativeColor" => "52fe4d3a854b01e25193b4f35fc2040e", "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "pointInterval" => 48, "pointIntervalUnit" => "year", "pointPadding" => 100, "pointPlacement" => "between", "pointRange" => 55, "pointStart" => 72, "pointWidth" => 70];
        $this->assertEquals($res41, $obj->toArray());

        $obj->setSelected(1);

        $res42 = ["allowPointSelect" => 0, "animation" => 1, "animationLimit" => 36, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 86, "borderWidth" => 69, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 1, "colorIndex" => 5, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => 0, "cropThreshold" => 36, "cursor" => "crosshair", "dataLabels" => [], "depth" => 17, "description" => "67daf92c833c41c95db874e18fcb2786", "edgeColor" => "acbab0d2e7e54e5a7a32fc80409601fc", "edgeWidth" => 31, "enableMouseTracking" => 0, "events" => [], "exposeElementToA11y" => 0, "findNearestPointBy" => "xy", "getExtremesFromAll" => 0, "groupPadding" => 5, "groupZPadding" => 41, "grouping" => 1, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "linkedTo" => "914fab47afc86331ec62837807a29419", "maxPointWidth" => 7, "minPointLength" => 22, "negativeColor" => "52fe4d3a854b01e25193b4f35fc2040e", "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "pointInterval" => 48, "pointIntervalUnit" => "year", "pointPadding" => 100, "pointPlacement" => "between", "pointRange" => 55, "pointStart" => 72, "pointWidth" => 70, "selected" => 1];
        $this->assertEquals($res42, $obj->toArray());

        $obj->setShadow(1);

        $res43 = ["allowPointSelect" => 0, "animation" => 1, "animationLimit" => 36, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 86, "borderWidth" => 69, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 1, "colorIndex" => 5, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => 0, "cropThreshold" => 36, "cursor" => "crosshair", "dataLabels" => [], "depth" => 17, "description" => "67daf92c833c41c95db874e18fcb2786", "edgeColor" => "acbab0d2e7e54e5a7a32fc80409601fc", "edgeWidth" => 31, "enableMouseTracking" => 0, "events" => [], "exposeElementToA11y" => 0, "findNearestPointBy" => "xy", "getExtremesFromAll" => 0, "groupPadding" => 5, "groupZPadding" => 41, "grouping" => 1, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "linkedTo" => "914fab47afc86331ec62837807a29419", "maxPointWidth" => 7, "minPointLength" => 22, "negativeColor" => "52fe4d3a854b01e25193b4f35fc2040e", "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "pointInterval" => 48, "pointIntervalUnit" => "year", "pointPadding" => 100, "pointPlacement" => "between", "pointRange" => 55, "pointStart" => 72, "pointWidth" => 70, "selected" => 1, "shadow" => 1];
        $this->assertEquals($res43, $obj->toArray());

        $obj->setShowCheckbox(0);

        $res44 = ["allowPointSelect" => 0, "animation" => 1, "animationLimit" => 36, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 86, "borderWidth" => 69, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 1, "colorIndex" => 5, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => 0, "cropThreshold" => 36, "cursor" => "crosshair", "dataLabels" => [], "depth" => 17, "description" => "67daf92c833c41c95db874e18fcb2786", "edgeColor" => "acbab0d2e7e54e5a7a32fc80409601fc", "edgeWidth" => 31, "enableMouseTracking" => 0, "events" => [], "exposeElementToA11y" => 0, "findNearestPointBy" => "xy", "getExtremesFromAll" => 0, "groupPadding" => 5, "groupZPadding" => 41, "grouping" => 1, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "linkedTo" => "914fab47afc86331ec62837807a29419", "maxPointWidth" => 7, "minPointLength" => 22, "negativeColor" => "52fe4d3a854b01e25193b4f35fc2040e", "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "pointInterval" => 48, "pointIntervalUnit" => "year", "pointPadding" => 100, "pointPlacement" => "between", "pointRange" => 55, "pointStart" => 72, "pointWidth" => 70, "selected" => 1, "shadow" => 1, "showCheckbox" => 0];
        $this->assertEquals($res44, $obj->toArray());

        $obj->setShowInLegend(1);

        $res45 = ["allowPointSelect" => 0, "animation" => 1, "animationLimit" => 36, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 86, "borderWidth" => 69, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 1, "colorIndex" => 5, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => 0, "cropThreshold" => 36, "cursor" => "crosshair", "dataLabels" => [], "depth" => 17, "description" => "67daf92c833c41c95db874e18fcb2786", "edgeColor" => "acbab0d2e7e54e5a7a32fc80409601fc", "edgeWidth" => 31, "enableMouseTracking" => 0, "events" => [], "exposeElementToA11y" => 0, "findNearestPointBy" => "xy", "getExtremesFromAll" => 0, "groupPadding" => 5, "groupZPadding" => 41, "grouping" => 1, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "linkedTo" => "914fab47afc86331ec62837807a29419", "maxPointWidth" => 7, "minPointLength" => 22, "negativeColor" => "52fe4d3a854b01e25193b4f35fc2040e", "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "pointInterval" => 48, "pointIntervalUnit" => "year", "pointPadding" => 100, "pointPlacement" => "between", "pointRange" => 55, "pointStart" => 72, "pointWidth" => 70, "selected" => 1, "shadow" => 1, "showCheckbox" => 0, "showInLegend" => 1];
        $this->assertEquals($res45, $obj->toArray());

        $obj->setSkipKeyboardNavigation(1);

        $res46 = ["allowPointSelect" => 0, "animation" => 1, "animationLimit" => 36, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 86, "borderWidth" => 69, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 1, "colorIndex" => 5, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => 0, "cropThreshold" => 36, "cursor" => "crosshair", "dataLabels" => [], "depth" => 17, "description" => "67daf92c833c41c95db874e18fcb2786", "edgeColor" => "acbab0d2e7e54e5a7a32fc80409601fc", "edgeWidth" => 31, "enableMouseTracking" => 0, "events" => [], "exposeElementToA11y" => 0, "findNearestPointBy" => "xy", "getExtremesFromAll" => 0, "groupPadding" => 5, "groupZPadding" => 41, "grouping" => 1, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "linkedTo" => "914fab47afc86331ec62837807a29419", "maxPointWidth" => 7, "minPointLength" => 22, "negativeColor" => "52fe4d3a854b01e25193b4f35fc2040e", "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "pointInterval" => 48, "pointIntervalUnit" => "year", "pointPadding" => 100, "pointPlacement" => "between", "pointRange" => 55, "pointStart" => 72, "pointWidth" => 70, "selected" => 1, "shadow" => 1, "showCheckbox" => 0, "showInLegend" => 1, "skipKeyboardNavigation" => 1];
        $this->assertEquals($res46, $obj->toArray());

        $obj->setSoftThreshold(0);

        $res47 = ["allowPointSelect" => 0, "animation" => 1, "animationLimit" => 36, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 86, "borderWidth" => 69, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 1, "colorIndex" => 5, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => 0, "cropThreshold" => 36, "cursor" => "crosshair", "dataLabels" => [], "depth" => 17, "description" => "67daf92c833c41c95db874e18fcb2786", "edgeColor" => "acbab0d2e7e54e5a7a32fc80409601fc", "edgeWidth" => 31, "enableMouseTracking" => 0, "events" => [], "exposeElementToA11y" => 0, "findNearestPointBy" => "xy", "getExtremesFromAll" => 0, "groupPadding" => 5, "groupZPadding" => 41, "grouping" => 1, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "linkedTo" => "914fab47afc86331ec62837807a29419", "maxPointWidth" => 7, "minPointLength" => 22, "negativeColor" => "52fe4d3a854b01e25193b4f35fc2040e", "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "pointInterval" => 48, "pointIntervalUnit" => "year", "pointPadding" => 100, "pointPlacement" => "between", "pointRange" => 55, "pointStart" => 72, "pointWidth" => 70, "selected" => 1, "shadow" => 1, "showCheckbox" => 0, "showInLegend" => 1, "skipKeyboardNavigation" => 1, "softThreshold" => 0];
        $this->assertEquals($res47, $obj->toArray());

        $obj->setStacking("percent");

        $res48 = ["allowPointSelect" => 0, "animation" => 1, "animationLimit" => 36, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 86, "borderWidth" => 69, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 1, "colorIndex" => 5, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => 0, "cropThreshold" => 36, "cursor" => "crosshair", "dataLabels" => [], "depth" => 17, "description" => "67daf92c833c41c95db874e18fcb2786", "edgeColor" => "acbab0d2e7e54e5a7a32fc80409601fc", "edgeWidth" => 31, "enableMouseTracking" => 0, "events" => [], "exposeElementToA11y" => 0, "findNearestPointBy" => "xy", "getExtremesFromAll" => 0, "groupPadding" => 5, "groupZPadding" => 41, "grouping" => 1, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "linkedTo" => "914fab47afc86331ec62837807a29419", "maxPointWidth" => 7, "minPointLength" => 22, "negativeColor" => "52fe4d3a854b01e25193b4f35fc2040e", "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "pointInterval" => 48, "pointIntervalUnit" => "year", "pointPadding" => 100, "pointPlacement" => "between", "pointRange" => 55, "pointStart" => 72, "pointWidth" => 70, "selected" => 1, "shadow" => 1, "showCheckbox" => 0, "showInLegend" => 1, "skipKeyboardNavigation" => 1, "softThreshold" => 0, "stacking" => "percent"];
        $this->assertEquals($res48, $obj->toArray());

        $obj->setStates(new \WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\Column\HighchartsStates());

        $res49 = ["allowPointSelect" => 0, "animation" => 1, "animationLimit" => 36, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 86, "borderWidth" => 69, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 1, "colorIndex" => 5, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => 0, "cropThreshold" => 36, "cursor" => "crosshair", "dataLabels" => [], "depth" => 17, "description" => "67daf92c833c41c95db874e18fcb2786", "edgeColor" => "acbab0d2e7e54e5a7a32fc80409601fc", "edgeWidth" => 31, "enableMouseTracking" => 0, "events" => [], "exposeElementToA11y" => 0, "findNearestPointBy" => "xy", "getExtremesFromAll" => 0, "groupPadding" => 5, "groupZPadding" => 41, "grouping" => 1, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "linkedTo" => "914fab47afc86331ec62837807a29419", "maxPointWidth" => 7, "minPointLength" => 22, "negativeColor" => "52fe4d3a854b01e25193b4f35fc2040e", "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "pointInterval" => 48, "pointIntervalUnit" => "year", "pointPadding" => 100, "pointPlacement" => "between", "pointRange" => 55, "pointStart" => 72, "pointWidth" => 70, "selected" => 1, "shadow" => 1, "showCheckbox" => 0, "showInLegend" => 1, "skipKeyboardNavigation" => 1, "softThreshold" => 0, "stacking" => "percent", "states" => []];
        $this->assertEquals($res49, $obj->toArray());

        $obj->setStickyTracking(0);

        $res50 = ["allowPointSelect" => 0, "animation" => 1, "animationLimit" => 36, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 86, "borderWidth" => 69, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 1, "colorIndex" => 5, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => 0, "cropThreshold" => 36, "cursor" => "crosshair", "dataLabels" => [], "depth" => 17, "description" => "67daf92c833c41c95db874e18fcb2786", "edgeColor" => "acbab0d2e7e54e5a7a32fc80409601fc", "edgeWidth" => 31, "enableMouseTracking" => 0, "events" => [], "exposeElementToA11y" => 0, "findNearestPointBy" => "xy", "getExtremesFromAll" => 0, "groupPadding" => 5, "groupZPadding" => 41, "grouping" => 1, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "linkedTo" => "914fab47afc86331ec62837807a29419", "maxPointWidth" => 7, "minPointLength" => 22, "negativeColor" => "52fe4d3a854b01e25193b4f35fc2040e", "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "pointInterval" => 48, "pointIntervalUnit" => "year", "pointPadding" => 100, "pointPlacement" => "between", "pointRange" => 55, "pointStart" => 72, "pointWidth" => 70, "selected" => 1, "shadow" => 1, "showCheckbox" => 0, "showInLegend" => 1, "skipKeyboardNavigation" => 1, "softThreshold" => 0, "stacking" => "percent", "states" => [], "stickyTracking" => 0];
        $this->assertEquals($res50, $obj->toArray());

        $obj->setThreshold(93);

        $res51 = ["allowPointSelect" => 0, "animation" => 1, "animationLimit" => 36, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 86, "borderWidth" => 69, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 1, "colorIndex" => 5, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => 0, "cropThreshold" => 36, "cursor" => "crosshair", "dataLabels" => [], "depth" => 17, "description" => "67daf92c833c41c95db874e18fcb2786", "edgeColor" => "acbab0d2e7e54e5a7a32fc80409601fc", "edgeWidth" => 31, "enableMouseTracking" => 0, "events" => [], "exposeElementToA11y" => 0, "findNearestPointBy" => "xy", "getExtremesFromAll" => 0, "groupPadding" => 5, "groupZPadding" => 41, "grouping" => 1, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "linkedTo" => "914fab47afc86331ec62837807a29419", "maxPointWidth" => 7, "minPointLength" => 22, "negativeColor" => "52fe4d3a854b01e25193b4f35fc2040e", "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "pointInterval" => 48, "pointIntervalUnit" => "year", "pointPadding" => 100, "pointPlacement" => "between", "pointRange" => 55, "pointStart" => 72, "pointWidth" => 70, "selected" => 1, "shadow" => 1, "showCheckbox" => 0, "showInLegend" => 1, "skipKeyboardNavigation" => 1, "softThreshold" => 0, "stacking" => "percent", "states" => [], "stickyTracking" => 0, "threshold" => 93];
        $this->assertEquals($res51, $obj->toArray());

        $obj->setTooltip(["tooltip" => "ddbfc1b6aa0ad4d79c5dac7aa3b44888"]);

        $res52 = ["allowPointSelect" => 0, "animation" => 1, "animationLimit" => 36, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 86, "borderWidth" => 69, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 1, "colorIndex" => 5, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => 0, "cropThreshold" => 36, "cursor" => "crosshair", "dataLabels" => [], "depth" => 17, "description" => "67daf92c833c41c95db874e18fcb2786", "edgeColor" => "acbab0d2e7e54e5a7a32fc80409601fc", "edgeWidth" => 31, "enableMouseTracking" => 0, "events" => [], "exposeElementToA11y" => 0, "findNearestPointBy" => "xy", "getExtremesFromAll" => 0, "groupPadding" => 5, "groupZPadding" => 41, "grouping" => 1, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "linkedTo" => "914fab47afc86331ec62837807a29419", "maxPointWidth" => 7, "minPointLength" => 22, "negativeColor" => "52fe4d3a854b01e25193b4f35fc2040e", "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "pointInterval" => 48, "pointIntervalUnit" => "year", "pointPadding" => 100, "pointPlacement" => "between", "pointRange" => 55, "pointStart" => 72, "pointWidth" => 70, "selected" => 1, "shadow" => 1, "showCheckbox" => 0, "showInLegend" => 1, "skipKeyboardNavigation" => 1, "softThreshold" => 0, "stacking" => "percent", "states" => [], "stickyTracking" => 0, "threshold" => 93, "tooltip" => ["tooltip" => "ddbfc1b6aa0ad4d79c5dac7aa3b44888"]];
        $this->assertEquals($res52, $obj->toArray());

        $obj->setTurboThreshold(24);

        $res53 = ["allowPointSelect" => 0, "animation" => 1, "animationLimit" => 36, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 86, "borderWidth" => 69, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 1, "colorIndex" => 5, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => 0, "cropThreshold" => 36, "cursor" => "crosshair", "dataLabels" => [], "depth" => 17, "description" => "67daf92c833c41c95db874e18fcb2786", "edgeColor" => "acbab0d2e7e54e5a7a32fc80409601fc", "edgeWidth" => 31, "enableMouseTracking" => 0, "events" => [], "exposeElementToA11y" => 0, "findNearestPointBy" => "xy", "getExtremesFromAll" => 0, "groupPadding" => 5, "groupZPadding" => 41, "grouping" => 1, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "linkedTo" => "914fab47afc86331ec62837807a29419", "maxPointWidth" => 7, "minPointLength" => 22, "negativeColor" => "52fe4d3a854b01e25193b4f35fc2040e", "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "pointInterval" => 48, "pointIntervalUnit" => "year", "pointPadding" => 100, "pointPlacement" => "between", "pointRange" => 55, "pointStart" => 72, "pointWidth" => 70, "selected" => 1, "shadow" => 1, "showCheckbox" => 0, "showInLegend" => 1, "skipKeyboardNavigation" => 1, "softThreshold" => 0, "stacking" => "percent", "states" => [], "stickyTracking" => 0, "threshold" => 93, "tooltip" => ["tooltip" => "ddbfc1b6aa0ad4d79c5dac7aa3b44888"], "turboThreshold" => 24];
        $this->assertEquals($res53, $obj->toArray());

        $obj->setVisible(1);

        $res54 = ["allowPointSelect" => 0, "animation" => 1, "animationLimit" => 36, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 86, "borderWidth" => 69, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 1, "colorIndex" => 5, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => 0, "cropThreshold" => 36, "cursor" => "crosshair", "dataLabels" => [], "depth" => 17, "description" => "67daf92c833c41c95db874e18fcb2786", "edgeColor" => "acbab0d2e7e54e5a7a32fc80409601fc", "edgeWidth" => 31, "enableMouseTracking" => 0, "events" => [], "exposeElementToA11y" => 0, "findNearestPointBy" => "xy", "getExtremesFromAll" => 0, "groupPadding" => 5, "groupZPadding" => 41, "grouping" => 1, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "linkedTo" => "914fab47afc86331ec62837807a29419", "maxPointWidth" => 7, "minPointLength" => 22, "negativeColor" => "52fe4d3a854b01e25193b4f35fc2040e", "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "pointInterval" => 48, "pointIntervalUnit" => "year", "pointPadding" => 100, "pointPlacement" => "between", "pointRange" => 55, "pointStart" => 72, "pointWidth" => 70, "selected" => 1, "shadow" => 1, "showCheckbox" => 0, "showInLegend" => 1, "skipKeyboardNavigation" => 1, "softThreshold" => 0, "stacking" => "percent", "states" => [], "stickyTracking" => 0, "threshold" => 93, "tooltip" => ["tooltip" => "ddbfc1b6aa0ad4d79c5dac7aa3b44888"], "turboThreshold" => 24, "visible" => 1];
        $this->assertEquals($res54, $obj->toArray());

        $obj->setZoneAxis("88421adabea658556aa3ab6c6181afad");

        $res55 = ["allowPointSelect" => 0, "animation" => 1, "animationLimit" => 36, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 86, "borderWidth" => 69, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 1, "colorIndex" => 5, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => 0, "cropThreshold" => 36, "cursor" => "crosshair", "dataLabels" => [], "depth" => 17, "description" => "67daf92c833c41c95db874e18fcb2786", "edgeColor" => "acbab0d2e7e54e5a7a32fc80409601fc", "edgeWidth" => 31, "enableMouseTracking" => 0, "events" => [], "exposeElementToA11y" => 0, "findNearestPointBy" => "xy", "getExtremesFromAll" => 0, "groupPadding" => 5, "groupZPadding" => 41, "grouping" => 1, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "linkedTo" => "914fab47afc86331ec62837807a29419", "maxPointWidth" => 7, "minPointLength" => 22, "negativeColor" => "52fe4d3a854b01e25193b4f35fc2040e", "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "pointInterval" => 48, "pointIntervalUnit" => "year", "pointPadding" => 100, "pointPlacement" => "between", "pointRange" => 55, "pointStart" => 72, "pointWidth" => 70, "selected" => 1, "shadow" => 1, "showCheckbox" => 0, "showInLegend" => 1, "skipKeyboardNavigation" => 1, "softThreshold" => 0, "stacking" => "percent", "states" => [], "stickyTracking" => 0, "threshold" => 93, "tooltip" => ["tooltip" => "ddbfc1b6aa0ad4d79c5dac7aa3b44888"], "turboThreshold" => 24, "visible" => 1, "zoneAxis" => "88421adabea658556aa3ab6c6181afad"];
        $this->assertEquals($res55, $obj->toArray());

        $obj->setZones(["zones" => "26f94136f5db8afd4e9df1e512f7fdc5"]);

        $res56 = ["allowPointSelect" => 0, "animation" => 1, "animationLimit" => 36, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 86, "borderWidth" => 69, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 1, "colorIndex" => 5, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => 0, "cropThreshold" => 36, "cursor" => "crosshair", "dataLabels" => [], "depth" => 17, "description" => "67daf92c833c41c95db874e18fcb2786", "edgeColor" => "acbab0d2e7e54e5a7a32fc80409601fc", "edgeWidth" => 31, "enableMouseTracking" => 0, "events" => [], "exposeElementToA11y" => 0, "findNearestPointBy" => "xy", "getExtremesFromAll" => 0, "groupPadding" => 5, "groupZPadding" => 41, "grouping" => 1, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "linkedTo" => "914fab47afc86331ec62837807a29419", "maxPointWidth" => 7, "minPointLength" => 22, "negativeColor" => "52fe4d3a854b01e25193b4f35fc2040e", "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "pointInterval" => 48, "pointIntervalUnit" => "year", "pointPadding" => 100, "pointPlacement" => "between", "pointRange" => 55, "pointStart" => 72, "pointWidth" => 70, "selected" => 1, "shadow" => 1, "showCheckbox" => 0, "showInLegend" => 1, "skipKeyboardNavigation" => 1, "softThreshold" => 0, "stacking" => "percent", "states" => [], "stickyTracking" => 0, "threshold" => 93, "tooltip" => ["tooltip" => "ddbfc1b6aa0ad4d79c5dac7aa3b44888"], "turboThreshold" => 24, "visible" => 1, "zoneAxis" => "88421adabea658556aa3ab6c6181afad", "zones" => ["zones" => "26f94136f5db8afd4e9df1e512f7fdc5"]];
        $this->assertEquals($res56, $obj->toArray());
    }

    /**
     * Tests __construct()
     *
     * @return void
     */
    public function test__construct() {

        $obj1 = new \WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\HighchartsColumn(true);

        $this->assertNull($obj1->getAllowPointSelect());
        $this->assertNull($obj1->getAnimation());
        $this->assertNull($obj1->getAnimationLimit());
        $this->assertNull($obj1->getBorderColor());
        $this->assertNull($obj1->getBorderRadius());
        $this->assertNull($obj1->getBorderWidth());
        $this->assertNull($obj1->getClassName());
        $this->assertNull($obj1->getColor());
        $this->assertNull($obj1->getColorByPoint());
        $this->assertNull($obj1->getColorIndex());
        $this->assertNull($obj1->getColors());
        $this->assertNull($obj1->getCrisp());
        $this->assertNull($obj1->getCropThreshold());
        $this->assertNull($obj1->getCursor());
        $this->assertNull($obj1->getDataLabels());
        $this->assertNull($obj1->getDepth());
        $this->assertNull($obj1->getDescription());
        $this->assertNull($obj1->getEdgeColor());
        $this->assertNull($obj1->getEdgeWidth());
        $this->assertNull($obj1->getEnableMouseTracking());
        $this->assertNull($obj1->getEvents());
        $this->assertNull($obj1->getExposeElementToA11y());
        $this->assertNull($obj1->getFindNearestPointBy());
        $this->assertNull($obj1->getGetExtremesFromAll());
        $this->assertNull($obj1->getGroupPadding());
        $this->assertNull($obj1->getGroupZPadding());
        $this->assertNull($obj1->getGrouping());
        $this->assertNull($obj1->getKeys());
        $this->assertNull($obj1->getLinkedTo());
        $this->assertNull($obj1->getMaxPointWidth());
        $this->assertNull($obj1->getMinPointLength());
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
        $this->assertNull($obj1->getShadow());
        $this->assertNull($obj1->getShowCheckbox());
        $this->assertNull($obj1->getShowInLegend());
        $this->assertNull($obj1->getSkipKeyboardNavigation());
        $this->assertNull($obj1->getSoftThreshold());
        $this->assertNull($obj1->getStacking());
        $this->assertNull($obj1->getStates());
        $this->assertNull($obj1->getStickyTracking());
        $this->assertNull($obj1->getThreshold());
        $this->assertNull($obj1->getTooltip());
        $this->assertNull($obj1->getTurboThreshold());
        $this->assertNull($obj1->getVisible());
        $this->assertNull($obj1->getZoneAxis());
        $this->assertNull($obj1->getZones());

        $obj0 = new \WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\HighchartsColumn(false);

        $this->assertEquals(false, $obj0->getAllowPointSelect());
        $this->assertEquals(true, $obj0->getAnimation());
        $this->assertNull($obj0->getAnimationLimit());
        $this->assertEquals("#ffffff", $obj0->getBorderColor());
        $this->assertEquals(0, $obj0->getBorderRadius());
        $this->assertEquals(1, $obj0->getBorderWidth());
        $this->assertNull($obj0->getClassName());
        $this->assertNull($obj0->getColor());
        $this->assertEquals(false, $obj0->getColorByPoint());
        $this->assertNull($obj0->getColorIndex());
        $this->assertNull($obj0->getColors());
        $this->assertEquals(true, $obj0->getCrisp());
        $this->assertEquals(50, $obj0->getCropThreshold());
        $this->assertNull($obj0->getCursor());
        $this->assertNull($obj0->getDataLabels());
        $this->assertEquals(25, $obj0->getDepth());
        $this->assertNull($obj0->getDescription());
        $this->assertNull($obj0->getEdgeColor());
        $this->assertEquals(1, $obj0->getEdgeWidth());
        $this->assertEquals(true, $obj0->getEnableMouseTracking());
        $this->assertNull($obj0->getEvents());
        $this->assertNull($obj0->getExposeElementToA11y());
        $this->assertNull($obj0->getFindNearestPointBy());
        $this->assertEquals(false, $obj0->getGetExtremesFromAll());
        $this->assertEquals(0.2, $obj0->getGroupPadding());
        $this->assertEquals(1, $obj0->getGroupZPadding());
        $this->assertEquals(true, $obj0->getGrouping());
        $this->assertNull($obj0->getKeys());
        $this->assertNull($obj0->getLinkedTo());
        $this->assertNull($obj0->getMaxPointWidth());
        $this->assertEquals(0, $obj0->getMinPointLength());
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
        $this->assertEquals(false, $obj0->getShadow());
        $this->assertEquals(false, $obj0->getShowCheckbox());
        $this->assertEquals(true, $obj0->getShowInLegend());
        $this->assertNull($obj0->getSkipKeyboardNavigation());
        $this->assertEquals(true, $obj0->getSoftThreshold());
        $this->assertNull($obj0->getStacking());
        $this->assertNull($obj0->getStates());
        $this->assertEquals(true, $obj0->getStickyTracking());
        $this->assertEquals(0, $obj0->getThreshold());
        $this->assertNull($obj0->getTooltip());
        $this->assertEquals(1000, $obj0->getTurboThreshold());
        $this->assertEquals(true, $obj0->getVisible());
        $this->assertEquals("y", $obj0->getZoneAxis());
        $this->assertNull($obj0->getZones());
    }

}
