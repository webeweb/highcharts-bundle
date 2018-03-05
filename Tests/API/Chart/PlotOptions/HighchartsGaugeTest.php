<?php

/**
 * This file is part of the highcharts-bundle package.
 *
 * (c) 2017 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\HighchartsBundle\Tests\API\Chart\PlotOptions;

use PHPUnit_Framework_TestCase;

/**
 * Highcharts gauge test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\HighchartsBundle\Tests\API\Chart\PlotOptions
 * @version 5.0.14
 */
final class HighchartsGaugeTest extends PHPUnit_Framework_TestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstructor() {

        $obj1 = new \WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\HighchartsGauge(true);

        $this->assertEquals(null, $obj1->getAnimation());
        $this->assertEquals(null, $obj1->getAnimationLimit());
        $this->assertEquals(null, $obj1->getClassName());
        $this->assertEquals(null, $obj1->getColor());
        $this->assertEquals(null, $obj1->getColorIndex());
        $this->assertEquals(null, $obj1->getCursor());
        $this->assertEquals(null, $obj1->getDataLabels());
        $this->assertEquals(null, $obj1->getDescription());
        $this->assertEquals(null, $obj1->getDial());
        $this->assertEquals(null, $obj1->getEnableMouseTracking());
        $this->assertEquals(null, $obj1->getEvents());
        $this->assertEquals(null, $obj1->getExposeElementToA11y());
        $this->assertEquals(null, $obj1->getFindNearestPointBy());
        $this->assertEquals(null, $obj1->getGetExtremesFromAll());
        $this->assertEquals(null, $obj1->getKeys());
        $this->assertEquals(null, $obj1->getLinkedTo());
        $this->assertEquals(null, $obj1->getNegativeColor());
        $this->assertEquals(null, $obj1->getOvershoot());
        $this->assertEquals(null, $obj1->getPivot());
        $this->assertEquals(null, $obj1->getPoint());
        $this->assertEquals(null, $obj1->getPointDescriptionFormatter());
        $this->assertEquals(null, $obj1->getSelected());
        $this->assertEquals(null, $obj1->getShowCheckbox());
        $this->assertEquals(null, $obj1->getShowInLegend());
        $this->assertEquals(null, $obj1->getSkipKeyboardNavigation());
        $this->assertEquals(null, $obj1->getStickyTracking());
        $this->assertEquals(null, $obj1->getThreshold());
        $this->assertEquals(null, $obj1->getTooltip());
        $this->assertEquals(null, $obj1->getVisible());
        $this->assertEquals(null, $obj1->getWrap());

        $obj0 = new \WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\HighchartsGauge(false);

        $this->assertEquals(true, $obj0->getAnimation());
        $this->assertEquals(null, $obj0->getAnimationLimit());
        $this->assertEquals(null, $obj0->getClassName());
        $this->assertEquals(null, $obj0->getColor());
        $this->assertEquals(null, $obj0->getColorIndex());
        $this->assertEquals(null, $obj0->getCursor());
        $this->assertEquals(null, $obj0->getDataLabels());
        $this->assertEquals(null, $obj0->getDescription());
        $this->assertEquals(null, $obj0->getDial());
        $this->assertEquals(true, $obj0->getEnableMouseTracking());
        $this->assertEquals(null, $obj0->getEvents());
        $this->assertEquals(null, $obj0->getExposeElementToA11y());
        $this->assertEquals(null, $obj0->getFindNearestPointBy());
        $this->assertEquals(false, $obj0->getGetExtremesFromAll());
        $this->assertEquals(null, $obj0->getKeys());
        $this->assertEquals(null, $obj0->getLinkedTo());
        $this->assertEquals(null, $obj0->getNegativeColor());
        $this->assertEquals(0, $obj0->getOvershoot());
        $this->assertEquals(null, $obj0->getPivot());
        $this->assertEquals(null, $obj0->getPoint());
        $this->assertEquals(null, $obj0->getPointDescriptionFormatter());
        $this->assertEquals(false, $obj0->getSelected());
        $this->assertEquals(false, $obj0->getShowCheckbox());
        $this->assertEquals(null, $obj0->getShowInLegend());
        $this->assertEquals(null, $obj0->getSkipKeyboardNavigation());
        $this->assertEquals(true, $obj0->getStickyTracking());
        $this->assertEquals(0, $obj0->getThreshold());
        $this->assertEquals(null, $obj0->getTooltip());
        $this->assertEquals(true, $obj0->getVisible());
        $this->assertEquals(true, $obj0->getWrap());
    }

    /**
     * Tests the clear() method.
     *
     * @return void
     */
    public function testClear() {

        $obj = new \WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\HighchartsGauge(false);

        $obj->newEvents();
        $obj->newPoint();

        $obj->clear();

        $res = ["events" => [], "point" => []];
        $this->assertEquals($res, $obj->toArray());
    }

    /**
     * Tests the jsonSerialize() method.
     *
     * @return void
     */
    public function testJsonSerialize() {

        $obj = new \WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\HighchartsGauge(true);

        $this->assertEquals([], $obj->jsonSerialize());
    }

    /**
     * Tests the newEvents() method.
     *
     * @return void.
     */
    public function testNewEvents() {

        $obj = new \WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\HighchartsGauge(false);

        $res = $obj->newEvents();
        $this->assertInstanceOf(\WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\Gauge\HighchartsEvents::class, $res);
    }

    /**
     * Tests the newPoint() method.
     *
     * @return void.
     */
    public function testNewPoint() {

        $obj = new \WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\HighchartsGauge(false);

        $res = $obj->newPoint();
        $this->assertInstanceOf(\WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\Gauge\HighchartsPoint::class, $res);
    }

    /**
     * Tests the toArray() method.
     *
     * @return void
     */
    public function testToArray() {

        $obj = new \WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\HighchartsGauge(true);

        $obj->setAnimation(0);

        $res1 = ["animation" => 0];
        $this->assertEquals($res1, $obj->toArray());

        $obj->setAnimationLimit(16);

        $res2 = ["animation" => 0, "animationLimit" => 16];
        $this->assertEquals($res2, $obj->toArray());

        $obj->setClassName("6f66e878c62db60568a3487869695820");

        $res3 = ["animation" => 0, "animationLimit" => 16, "className" => "6f66e878c62db60568a3487869695820"];
        $this->assertEquals($res3, $obj->toArray());

        $obj->setColor("70dda5dfb8053dc6d1c492574bce9bfd");

        $res4 = ["animation" => 0, "animationLimit" => 16, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd"];
        $this->assertEquals($res4, $obj->toArray());

        $obj->setColorIndex(47);

        $res5 = ["animation" => 0, "animationLimit" => 16, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 47];
        $this->assertEquals($res5, $obj->toArray());

        $obj->setCursor("crosshair");

        $res6 = ["animation" => 0, "animationLimit" => 16, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 47, "cursor" => "crosshair"];
        $this->assertEquals($res6, $obj->toArray());

        $obj->setDataLabels(["dataLabels" => "d4d108fe6659fac79420fa083ef3adf2"]);

        $res7 = ["animation" => 0, "animationLimit" => 16, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 47, "cursor" => "crosshair", "dataLabels" => ["dataLabels" => "d4d108fe6659fac79420fa083ef3adf2"]];
        $this->assertEquals($res7, $obj->toArray());

        $obj->setDescription("67daf92c833c41c95db874e18fcb2786");

        $res8 = ["animation" => 0, "animationLimit" => 16, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 47, "cursor" => "crosshair", "dataLabels" => ["dataLabels" => "d4d108fe6659fac79420fa083ef3adf2"], "description" => "67daf92c833c41c95db874e18fcb2786"];
        $this->assertEquals($res8, $obj->toArray());

        $obj->setDial(["dial" => "6de514dbc026d5badb01f8ea18ffcc9b"]);

        $res9 = ["animation" => 0, "animationLimit" => 16, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 47, "cursor" => "crosshair", "dataLabels" => ["dataLabels" => "d4d108fe6659fac79420fa083ef3adf2"], "description" => "67daf92c833c41c95db874e18fcb2786", "dial" => ["dial" => "6de514dbc026d5badb01f8ea18ffcc9b"]];
        $this->assertEquals($res9, $obj->toArray());

        $obj->setEnableMouseTracking(0);

        $res10 = ["animation" => 0, "animationLimit" => 16, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 47, "cursor" => "crosshair", "dataLabels" => ["dataLabels" => "d4d108fe6659fac79420fa083ef3adf2"], "description" => "67daf92c833c41c95db874e18fcb2786", "dial" => ["dial" => "6de514dbc026d5badb01f8ea18ffcc9b"], "enableMouseTracking" => 0];
        $this->assertEquals($res10, $obj->toArray());

        $obj->setEvents(new \WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\Gauge\HighchartsEvents());

        $res11 = ["animation" => 0, "animationLimit" => 16, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 47, "cursor" => "crosshair", "dataLabels" => ["dataLabels" => "d4d108fe6659fac79420fa083ef3adf2"], "description" => "67daf92c833c41c95db874e18fcb2786", "dial" => ["dial" => "6de514dbc026d5badb01f8ea18ffcc9b"], "enableMouseTracking" => 0, "events" => []];
        $this->assertEquals($res11, $obj->toArray());

        $obj->setExposeElementToA11y(1);

        $res12 = ["animation" => 0, "animationLimit" => 16, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 47, "cursor" => "crosshair", "dataLabels" => ["dataLabels" => "d4d108fe6659fac79420fa083ef3adf2"], "description" => "67daf92c833c41c95db874e18fcb2786", "dial" => ["dial" => "6de514dbc026d5badb01f8ea18ffcc9b"], "enableMouseTracking" => 0, "events" => [], "exposeElementToA11y" => 1];
        $this->assertEquals($res12, $obj->toArray());

        $obj->setFindNearestPointBy("xy");

        $res13 = ["animation" => 0, "animationLimit" => 16, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 47, "cursor" => "crosshair", "dataLabels" => ["dataLabels" => "d4d108fe6659fac79420fa083ef3adf2"], "description" => "67daf92c833c41c95db874e18fcb2786", "dial" => ["dial" => "6de514dbc026d5badb01f8ea18ffcc9b"], "enableMouseTracking" => 0, "events" => [], "exposeElementToA11y" => 1, "findNearestPointBy" => "xy"];
        $this->assertEquals($res13, $obj->toArray());

        $obj->setGetExtremesFromAll(0);

        $res14 = ["animation" => 0, "animationLimit" => 16, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 47, "cursor" => "crosshair", "dataLabels" => ["dataLabels" => "d4d108fe6659fac79420fa083ef3adf2"], "description" => "67daf92c833c41c95db874e18fcb2786", "dial" => ["dial" => "6de514dbc026d5badb01f8ea18ffcc9b"], "enableMouseTracking" => 0, "events" => [], "exposeElementToA11y" => 1, "findNearestPointBy" => "xy", "getExtremesFromAll" => 0];
        $this->assertEquals($res14, $obj->toArray());

        $obj->setKeys(["keys" => "14f802e1fba977727845e8872c1743a7"]);

        $res15 = ["animation" => 0, "animationLimit" => 16, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 47, "cursor" => "crosshair", "dataLabels" => ["dataLabels" => "d4d108fe6659fac79420fa083ef3adf2"], "description" => "67daf92c833c41c95db874e18fcb2786", "dial" => ["dial" => "6de514dbc026d5badb01f8ea18ffcc9b"], "enableMouseTracking" => 0, "events" => [], "exposeElementToA11y" => 1, "findNearestPointBy" => "xy", "getExtremesFromAll" => 0, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"]];
        $this->assertEquals($res15, $obj->toArray());

        $obj->setLinkedTo("914fab47afc86331ec62837807a29419");

        $res16 = ["animation" => 0, "animationLimit" => 16, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 47, "cursor" => "crosshair", "dataLabels" => ["dataLabels" => "d4d108fe6659fac79420fa083ef3adf2"], "description" => "67daf92c833c41c95db874e18fcb2786", "dial" => ["dial" => "6de514dbc026d5badb01f8ea18ffcc9b"], "enableMouseTracking" => 0, "events" => [], "exposeElementToA11y" => 1, "findNearestPointBy" => "xy", "getExtremesFromAll" => 0, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "linkedTo" => "914fab47afc86331ec62837807a29419"];
        $this->assertEquals($res16, $obj->toArray());

        $obj->setNegativeColor("52fe4d3a854b01e25193b4f35fc2040e");

        $res17 = ["animation" => 0, "animationLimit" => 16, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 47, "cursor" => "crosshair", "dataLabels" => ["dataLabels" => "d4d108fe6659fac79420fa083ef3adf2"], "description" => "67daf92c833c41c95db874e18fcb2786", "dial" => ["dial" => "6de514dbc026d5badb01f8ea18ffcc9b"], "enableMouseTracking" => 0, "events" => [], "exposeElementToA11y" => 1, "findNearestPointBy" => "xy", "getExtremesFromAll" => 0, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "linkedTo" => "914fab47afc86331ec62837807a29419", "negativeColor" => "52fe4d3a854b01e25193b4f35fc2040e"];
        $this->assertEquals($res17, $obj->toArray());

        $obj->setOvershoot(1);

        $res18 = ["animation" => 0, "animationLimit" => 16, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 47, "cursor" => "crosshair", "dataLabels" => ["dataLabels" => "d4d108fe6659fac79420fa083ef3adf2"], "description" => "67daf92c833c41c95db874e18fcb2786", "dial" => ["dial" => "6de514dbc026d5badb01f8ea18ffcc9b"], "enableMouseTracking" => 0, "events" => [], "exposeElementToA11y" => 1, "findNearestPointBy" => "xy", "getExtremesFromAll" => 0, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "linkedTo" => "914fab47afc86331ec62837807a29419", "negativeColor" => "52fe4d3a854b01e25193b4f35fc2040e", "overshoot" => 1];
        $this->assertEquals($res18, $obj->toArray());

        $obj->setPivot(["pivot" => "dca758fd47f2bcd3bbf3f20bbfe2e975"]);

        $res19 = ["animation" => 0, "animationLimit" => 16, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 47, "cursor" => "crosshair", "dataLabels" => ["dataLabels" => "d4d108fe6659fac79420fa083ef3adf2"], "description" => "67daf92c833c41c95db874e18fcb2786", "dial" => ["dial" => "6de514dbc026d5badb01f8ea18ffcc9b"], "enableMouseTracking" => 0, "events" => [], "exposeElementToA11y" => 1, "findNearestPointBy" => "xy", "getExtremesFromAll" => 0, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "linkedTo" => "914fab47afc86331ec62837807a29419", "negativeColor" => "52fe4d3a854b01e25193b4f35fc2040e", "overshoot" => 1, "pivot" => ["pivot" => "dca758fd47f2bcd3bbf3f20bbfe2e975"]];
        $this->assertEquals($res19, $obj->toArray());

        $obj->setPoint(new \WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\Gauge\HighchartsPoint());

        $res20 = ["animation" => 0, "animationLimit" => 16, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 47, "cursor" => "crosshair", "dataLabels" => ["dataLabels" => "d4d108fe6659fac79420fa083ef3adf2"], "description" => "67daf92c833c41c95db874e18fcb2786", "dial" => ["dial" => "6de514dbc026d5badb01f8ea18ffcc9b"], "enableMouseTracking" => 0, "events" => [], "exposeElementToA11y" => 1, "findNearestPointBy" => "xy", "getExtremesFromAll" => 0, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "linkedTo" => "914fab47afc86331ec62837807a29419", "negativeColor" => "52fe4d3a854b01e25193b4f35fc2040e", "overshoot" => 1, "pivot" => ["pivot" => "dca758fd47f2bcd3bbf3f20bbfe2e975"], "point" => []];
        $this->assertEquals($res20, $obj->toArray());

        $obj->setPointDescriptionFormatter("b5fd0c15b3ca81f726e2c7b93907ba36");

        $res21 = ["animation" => 0, "animationLimit" => 16, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 47, "cursor" => "crosshair", "dataLabels" => ["dataLabels" => "d4d108fe6659fac79420fa083ef3adf2"], "description" => "67daf92c833c41c95db874e18fcb2786", "dial" => ["dial" => "6de514dbc026d5badb01f8ea18ffcc9b"], "enableMouseTracking" => 0, "events" => [], "exposeElementToA11y" => 1, "findNearestPointBy" => "xy", "getExtremesFromAll" => 0, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "linkedTo" => "914fab47afc86331ec62837807a29419", "negativeColor" => "52fe4d3a854b01e25193b4f35fc2040e", "overshoot" => 1, "pivot" => ["pivot" => "dca758fd47f2bcd3bbf3f20bbfe2e975"], "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36"];
        $this->assertEquals($res21, $obj->toArray());

        $obj->setSelected(1);

        $res22 = ["animation" => 0, "animationLimit" => 16, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 47, "cursor" => "crosshair", "dataLabels" => ["dataLabels" => "d4d108fe6659fac79420fa083ef3adf2"], "description" => "67daf92c833c41c95db874e18fcb2786", "dial" => ["dial" => "6de514dbc026d5badb01f8ea18ffcc9b"], "enableMouseTracking" => 0, "events" => [], "exposeElementToA11y" => 1, "findNearestPointBy" => "xy", "getExtremesFromAll" => 0, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "linkedTo" => "914fab47afc86331ec62837807a29419", "negativeColor" => "52fe4d3a854b01e25193b4f35fc2040e", "overshoot" => 1, "pivot" => ["pivot" => "dca758fd47f2bcd3bbf3f20bbfe2e975"], "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "selected" => 1];
        $this->assertEquals($res22, $obj->toArray());

        $obj->setShowCheckbox(0);

        $res23 = ["animation" => 0, "animationLimit" => 16, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 47, "cursor" => "crosshair", "dataLabels" => ["dataLabels" => "d4d108fe6659fac79420fa083ef3adf2"], "description" => "67daf92c833c41c95db874e18fcb2786", "dial" => ["dial" => "6de514dbc026d5badb01f8ea18ffcc9b"], "enableMouseTracking" => 0, "events" => [], "exposeElementToA11y" => 1, "findNearestPointBy" => "xy", "getExtremesFromAll" => 0, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "linkedTo" => "914fab47afc86331ec62837807a29419", "negativeColor" => "52fe4d3a854b01e25193b4f35fc2040e", "overshoot" => 1, "pivot" => ["pivot" => "dca758fd47f2bcd3bbf3f20bbfe2e975"], "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "selected" => 1, "showCheckbox" => 0];
        $this->assertEquals($res23, $obj->toArray());

        $obj->setShowInLegend(0);

        $res24 = ["animation" => 0, "animationLimit" => 16, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 47, "cursor" => "crosshair", "dataLabels" => ["dataLabels" => "d4d108fe6659fac79420fa083ef3adf2"], "description" => "67daf92c833c41c95db874e18fcb2786", "dial" => ["dial" => "6de514dbc026d5badb01f8ea18ffcc9b"], "enableMouseTracking" => 0, "events" => [], "exposeElementToA11y" => 1, "findNearestPointBy" => "xy", "getExtremesFromAll" => 0, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "linkedTo" => "914fab47afc86331ec62837807a29419", "negativeColor" => "52fe4d3a854b01e25193b4f35fc2040e", "overshoot" => 1, "pivot" => ["pivot" => "dca758fd47f2bcd3bbf3f20bbfe2e975"], "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "selected" => 1, "showCheckbox" => 0, "showInLegend" => 0];
        $this->assertEquals($res24, $obj->toArray());

        $obj->setSkipKeyboardNavigation(0);

        $res25 = ["animation" => 0, "animationLimit" => 16, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 47, "cursor" => "crosshair", "dataLabels" => ["dataLabels" => "d4d108fe6659fac79420fa083ef3adf2"], "description" => "67daf92c833c41c95db874e18fcb2786", "dial" => ["dial" => "6de514dbc026d5badb01f8ea18ffcc9b"], "enableMouseTracking" => 0, "events" => [], "exposeElementToA11y" => 1, "findNearestPointBy" => "xy", "getExtremesFromAll" => 0, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "linkedTo" => "914fab47afc86331ec62837807a29419", "negativeColor" => "52fe4d3a854b01e25193b4f35fc2040e", "overshoot" => 1, "pivot" => ["pivot" => "dca758fd47f2bcd3bbf3f20bbfe2e975"], "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "selected" => 1, "showCheckbox" => 0, "showInLegend" => 0, "skipKeyboardNavigation" => 0];
        $this->assertEquals($res25, $obj->toArray());

        $obj->setStickyTracking(0);

        $res26 = ["animation" => 0, "animationLimit" => 16, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 47, "cursor" => "crosshair", "dataLabels" => ["dataLabels" => "d4d108fe6659fac79420fa083ef3adf2"], "description" => "67daf92c833c41c95db874e18fcb2786", "dial" => ["dial" => "6de514dbc026d5badb01f8ea18ffcc9b"], "enableMouseTracking" => 0, "events" => [], "exposeElementToA11y" => 1, "findNearestPointBy" => "xy", "getExtremesFromAll" => 0, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "linkedTo" => "914fab47afc86331ec62837807a29419", "negativeColor" => "52fe4d3a854b01e25193b4f35fc2040e", "overshoot" => 1, "pivot" => ["pivot" => "dca758fd47f2bcd3bbf3f20bbfe2e975"], "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "selected" => 1, "showCheckbox" => 0, "showInLegend" => 0, "skipKeyboardNavigation" => 0, "stickyTracking" => 0];
        $this->assertEquals($res26, $obj->toArray());

        $obj->setThreshold(68);

        $res27 = ["animation" => 0, "animationLimit" => 16, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 47, "cursor" => "crosshair", "dataLabels" => ["dataLabels" => "d4d108fe6659fac79420fa083ef3adf2"], "description" => "67daf92c833c41c95db874e18fcb2786", "dial" => ["dial" => "6de514dbc026d5badb01f8ea18ffcc9b"], "enableMouseTracking" => 0, "events" => [], "exposeElementToA11y" => 1, "findNearestPointBy" => "xy", "getExtremesFromAll" => 0, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "linkedTo" => "914fab47afc86331ec62837807a29419", "negativeColor" => "52fe4d3a854b01e25193b4f35fc2040e", "overshoot" => 1, "pivot" => ["pivot" => "dca758fd47f2bcd3bbf3f20bbfe2e975"], "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "selected" => 1, "showCheckbox" => 0, "showInLegend" => 0, "skipKeyboardNavigation" => 0, "stickyTracking" => 0, "threshold" => 68];
        $this->assertEquals($res27, $obj->toArray());

        $obj->setTooltip(["tooltip" => "ddbfc1b6aa0ad4d79c5dac7aa3b44888"]);

        $res28 = ["animation" => 0, "animationLimit" => 16, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 47, "cursor" => "crosshair", "dataLabels" => ["dataLabels" => "d4d108fe6659fac79420fa083ef3adf2"], "description" => "67daf92c833c41c95db874e18fcb2786", "dial" => ["dial" => "6de514dbc026d5badb01f8ea18ffcc9b"], "enableMouseTracking" => 0, "events" => [], "exposeElementToA11y" => 1, "findNearestPointBy" => "xy", "getExtremesFromAll" => 0, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "linkedTo" => "914fab47afc86331ec62837807a29419", "negativeColor" => "52fe4d3a854b01e25193b4f35fc2040e", "overshoot" => 1, "pivot" => ["pivot" => "dca758fd47f2bcd3bbf3f20bbfe2e975"], "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "selected" => 1, "showCheckbox" => 0, "showInLegend" => 0, "skipKeyboardNavigation" => 0, "stickyTracking" => 0, "threshold" => 68, "tooltip" => ["tooltip" => "ddbfc1b6aa0ad4d79c5dac7aa3b44888"]];
        $this->assertEquals($res28, $obj->toArray());

        $obj->setVisible(1);

        $res29 = ["animation" => 0, "animationLimit" => 16, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 47, "cursor" => "crosshair", "dataLabels" => ["dataLabels" => "d4d108fe6659fac79420fa083ef3adf2"], "description" => "67daf92c833c41c95db874e18fcb2786", "dial" => ["dial" => "6de514dbc026d5badb01f8ea18ffcc9b"], "enableMouseTracking" => 0, "events" => [], "exposeElementToA11y" => 1, "findNearestPointBy" => "xy", "getExtremesFromAll" => 0, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "linkedTo" => "914fab47afc86331ec62837807a29419", "negativeColor" => "52fe4d3a854b01e25193b4f35fc2040e", "overshoot" => 1, "pivot" => ["pivot" => "dca758fd47f2bcd3bbf3f20bbfe2e975"], "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "selected" => 1, "showCheckbox" => 0, "showInLegend" => 0, "skipKeyboardNavigation" => 0, "stickyTracking" => 0, "threshold" => 68, "tooltip" => ["tooltip" => "ddbfc1b6aa0ad4d79c5dac7aa3b44888"], "visible" => 1];
        $this->assertEquals($res29, $obj->toArray());

        $obj->setWrap(0);

        $res30 = ["animation" => 0, "animationLimit" => 16, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 47, "cursor" => "crosshair", "dataLabels" => ["dataLabels" => "d4d108fe6659fac79420fa083ef3adf2"], "description" => "67daf92c833c41c95db874e18fcb2786", "dial" => ["dial" => "6de514dbc026d5badb01f8ea18ffcc9b"], "enableMouseTracking" => 0, "events" => [], "exposeElementToA11y" => 1, "findNearestPointBy" => "xy", "getExtremesFromAll" => 0, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "linkedTo" => "914fab47afc86331ec62837807a29419", "negativeColor" => "52fe4d3a854b01e25193b4f35fc2040e", "overshoot" => 1, "pivot" => ["pivot" => "dca758fd47f2bcd3bbf3f20bbfe2e975"], "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "selected" => 1, "showCheckbox" => 0, "showInLegend" => 0, "skipKeyboardNavigation" => 0, "stickyTracking" => 0, "threshold" => 68, "tooltip" => ["tooltip" => "ddbfc1b6aa0ad4d79c5dac7aa3b44888"], "visible" => 1, "wrap" => 0];
        $this->assertEquals($res30, $obj->toArray());
    }

}
