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
 * Highcharts solidgauge test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\HighchartsBundle\Tests\API\Chart\PlotOptions
 * @version 5.0.14
 */
final class HighchartsSolidgaugeTest extends PHPUnit_Framework_TestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstructor() {

        $obj1 = new \WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\HighchartsSolidgauge(true);

        $this->assertNull($obj1->getAnimation());
        $this->assertNull($obj1->getAnimationLimit());
        $this->assertNull($obj1->getClassName());
        $this->assertNull($obj1->getColorIndex());
        $this->assertNull($obj1->getCursor());
        $this->assertNull($obj1->getDataLabels());
        $this->assertNull($obj1->getDescription());
        $this->assertNull($obj1->getEnableMouseTracking());
        $this->assertNull($obj1->getEvents());
        $this->assertNull($obj1->getExposeElementToA11y());
        $this->assertNull($obj1->getFindNearestPointBy());
        $this->assertNull($obj1->getGetExtremesFromAll());
        $this->assertNull($obj1->getKeys());
        $this->assertNull($obj1->getLinecap());
        $this->assertNull($obj1->getOvershoot());
        $this->assertNull($obj1->getPoint());
        $this->assertNull($obj1->getPointDescriptionFormatter());
        $this->assertNull($obj1->getRounded());
        $this->assertNull($obj1->getSelected());
        $this->assertNull($obj1->getShowCheckbox());
        $this->assertNull($obj1->getShowInLegend());
        $this->assertNull($obj1->getSkipKeyboardNavigation());
        $this->assertNull($obj1->getStickyTracking());
        $this->assertNull($obj1->getThreshold());
        $this->assertNull($obj1->getTooltip());
        $this->assertNull($obj1->getVisible());
        $this->assertNull($obj1->getWrap());

        $obj0 = new \WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\HighchartsSolidgauge(false);

        $this->assertEquals(true, $obj0->getAnimation());
        $this->assertNull($obj0->getAnimationLimit());
        $this->assertNull($obj0->getClassName());
        $this->assertNull($obj0->getColorIndex());
        $this->assertNull($obj0->getCursor());
        $this->assertNull($obj0->getDataLabels());
        $this->assertNull($obj0->getDescription());
        $this->assertEquals(true, $obj0->getEnableMouseTracking());
        $this->assertNull($obj0->getEvents());
        $this->assertNull($obj0->getExposeElementToA11y());
        $this->assertNull($obj0->getFindNearestPointBy());
        $this->assertEquals(false, $obj0->getGetExtremesFromAll());
        $this->assertNull($obj0->getKeys());
        $this->assertEquals("round", $obj0->getLinecap());
        $this->assertEquals(0, $obj0->getOvershoot());
        $this->assertNull($obj0->getPoint());
        $this->assertNull($obj0->getPointDescriptionFormatter());
        $this->assertEquals(false, $obj0->getRounded());
        $this->assertEquals(false, $obj0->getSelected());
        $this->assertEquals(false, $obj0->getShowCheckbox());
        $this->assertNull($obj0->getShowInLegend());
        $this->assertNull($obj0->getSkipKeyboardNavigation());
        $this->assertEquals(true, $obj0->getStickyTracking());
        $this->assertNull($obj0->getThreshold());
        $this->assertNull($obj0->getTooltip());
        $this->assertEquals(true, $obj0->getVisible());
        $this->assertEquals(true, $obj0->getWrap());
    }

    /**
     * Tests the clear() method.
     *
     * @return void
     */
    public function testClear() {

        $obj = new \WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\HighchartsSolidgauge(false);

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

        $obj = new \WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\HighchartsSolidgauge(true);

        $this->assertEquals([], $obj->jsonSerialize());
    }

    /**
     * Tests the newEvents() method.
     *
     * @return void.
     */
    public function testNewEvents() {

        $obj = new \WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\HighchartsSolidgauge(false);

        $res = $obj->newEvents();
        $this->assertInstanceOf(\WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\Solidgauge\HighchartsEvents::class, $res);
    }

    /**
     * Tests the newPoint() method.
     *
     * @return void.
     */
    public function testNewPoint() {

        $obj = new \WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\HighchartsSolidgauge(false);

        $res = $obj->newPoint();
        $this->assertInstanceOf(\WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\Solidgauge\HighchartsPoint::class, $res);
    }

    /**
     * Tests the toArray() method.
     *
     * @return void
     */
    public function testToArray() {

        $obj = new \WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\HighchartsSolidgauge(true);

        $obj->setAnimation(1);

        $res1 = ["animation" => 1];
        $this->assertEquals($res1, $obj->toArray());

        $obj->setAnimationLimit(97);

        $res2 = ["animation" => 1, "animationLimit" => 97];
        $this->assertEquals($res2, $obj->toArray());

        $obj->setClassName("6f66e878c62db60568a3487869695820");

        $res3 = ["animation" => 1, "animationLimit" => 97, "className" => "6f66e878c62db60568a3487869695820"];
        $this->assertEquals($res3, $obj->toArray());

        $obj->setColorIndex(23);

        $res4 = ["animation" => 1, "animationLimit" => 97, "className" => "6f66e878c62db60568a3487869695820", "colorIndex" => 23];
        $this->assertEquals($res4, $obj->toArray());

        $obj->setCursor("crosshair");

        $res5 = ["animation" => 1, "animationLimit" => 97, "className" => "6f66e878c62db60568a3487869695820", "colorIndex" => 23, "cursor" => "crosshair"];
        $this->assertEquals($res5, $obj->toArray());

        $obj->setDataLabels(["dataLabels" => "d4d108fe6659fac79420fa083ef3adf2"]);

        $res6 = ["animation" => 1, "animationLimit" => 97, "className" => "6f66e878c62db60568a3487869695820", "colorIndex" => 23, "cursor" => "crosshair", "dataLabels" => ["dataLabels" => "d4d108fe6659fac79420fa083ef3adf2"]];
        $this->assertEquals($res6, $obj->toArray());

        $obj->setDescription("67daf92c833c41c95db874e18fcb2786");

        $res7 = ["animation" => 1, "animationLimit" => 97, "className" => "6f66e878c62db60568a3487869695820", "colorIndex" => 23, "cursor" => "crosshair", "dataLabels" => ["dataLabels" => "d4d108fe6659fac79420fa083ef3adf2"], "description" => "67daf92c833c41c95db874e18fcb2786"];
        $this->assertEquals($res7, $obj->toArray());

        $obj->setEnableMouseTracking(0);

        $res8 = ["animation" => 1, "animationLimit" => 97, "className" => "6f66e878c62db60568a3487869695820", "colorIndex" => 23, "cursor" => "crosshair", "dataLabels" => ["dataLabels" => "d4d108fe6659fac79420fa083ef3adf2"], "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 0];
        $this->assertEquals($res8, $obj->toArray());

        $obj->setEvents(new \WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\Solidgauge\HighchartsEvents());

        $res9 = ["animation" => 1, "animationLimit" => 97, "className" => "6f66e878c62db60568a3487869695820", "colorIndex" => 23, "cursor" => "crosshair", "dataLabels" => ["dataLabels" => "d4d108fe6659fac79420fa083ef3adf2"], "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 0, "events" => []];
        $this->assertEquals($res9, $obj->toArray());

        $obj->setExposeElementToA11y(0);

        $res10 = ["animation" => 1, "animationLimit" => 97, "className" => "6f66e878c62db60568a3487869695820", "colorIndex" => 23, "cursor" => "crosshair", "dataLabels" => ["dataLabels" => "d4d108fe6659fac79420fa083ef3adf2"], "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 0, "events" => [], "exposeElementToA11y" => 0];
        $this->assertEquals($res10, $obj->toArray());

        $obj->setFindNearestPointBy("xy");

        $res11 = ["animation" => 1, "animationLimit" => 97, "className" => "6f66e878c62db60568a3487869695820", "colorIndex" => 23, "cursor" => "crosshair", "dataLabels" => ["dataLabels" => "d4d108fe6659fac79420fa083ef3adf2"], "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 0, "events" => [], "exposeElementToA11y" => 0, "findNearestPointBy" => "xy"];
        $this->assertEquals($res11, $obj->toArray());

        $obj->setGetExtremesFromAll(1);

        $res12 = ["animation" => 1, "animationLimit" => 97, "className" => "6f66e878c62db60568a3487869695820", "colorIndex" => 23, "cursor" => "crosshair", "dataLabels" => ["dataLabels" => "d4d108fe6659fac79420fa083ef3adf2"], "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 0, "events" => [], "exposeElementToA11y" => 0, "findNearestPointBy" => "xy", "getExtremesFromAll" => 1];
        $this->assertEquals($res12, $obj->toArray());

        $obj->setKeys(["keys" => "14f802e1fba977727845e8872c1743a7"]);

        $res13 = ["animation" => 1, "animationLimit" => 97, "className" => "6f66e878c62db60568a3487869695820", "colorIndex" => 23, "cursor" => "crosshair", "dataLabels" => ["dataLabels" => "d4d108fe6659fac79420fa083ef3adf2"], "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 0, "events" => [], "exposeElementToA11y" => 0, "findNearestPointBy" => "xy", "getExtremesFromAll" => 1, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"]];
        $this->assertEquals($res13, $obj->toArray());

        $obj->setLinecap("round");

        $res14 = ["animation" => 1, "animationLimit" => 97, "className" => "6f66e878c62db60568a3487869695820", "colorIndex" => 23, "cursor" => "crosshair", "dataLabels" => ["dataLabels" => "d4d108fe6659fac79420fa083ef3adf2"], "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 0, "events" => [], "exposeElementToA11y" => 0, "findNearestPointBy" => "xy", "getExtremesFromAll" => 1, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "linecap" => "round"];
        $this->assertEquals($res14, $obj->toArray());

        $obj->setOvershoot(56);

        $res15 = ["animation" => 1, "animationLimit" => 97, "className" => "6f66e878c62db60568a3487869695820", "colorIndex" => 23, "cursor" => "crosshair", "dataLabels" => ["dataLabels" => "d4d108fe6659fac79420fa083ef3adf2"], "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 0, "events" => [], "exposeElementToA11y" => 0, "findNearestPointBy" => "xy", "getExtremesFromAll" => 1, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "linecap" => "round", "overshoot" => 56];
        $this->assertEquals($res15, $obj->toArray());

        $obj->setPoint(new \WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\Solidgauge\HighchartsPoint());

        $res16 = ["animation" => 1, "animationLimit" => 97, "className" => "6f66e878c62db60568a3487869695820", "colorIndex" => 23, "cursor" => "crosshair", "dataLabels" => ["dataLabels" => "d4d108fe6659fac79420fa083ef3adf2"], "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 0, "events" => [], "exposeElementToA11y" => 0, "findNearestPointBy" => "xy", "getExtremesFromAll" => 1, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "linecap" => "round", "overshoot" => 56, "point" => []];
        $this->assertEquals($res16, $obj->toArray());

        $obj->setPointDescriptionFormatter("b5fd0c15b3ca81f726e2c7b93907ba36");

        $res17 = ["animation" => 1, "animationLimit" => 97, "className" => "6f66e878c62db60568a3487869695820", "colorIndex" => 23, "cursor" => "crosshair", "dataLabels" => ["dataLabels" => "d4d108fe6659fac79420fa083ef3adf2"], "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 0, "events" => [], "exposeElementToA11y" => 0, "findNearestPointBy" => "xy", "getExtremesFromAll" => 1, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "linecap" => "round", "overshoot" => 56, "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36"];
        $this->assertEquals($res17, $obj->toArray());

        $obj->setRounded(1);

        $res18 = ["animation" => 1, "animationLimit" => 97, "className" => "6f66e878c62db60568a3487869695820", "colorIndex" => 23, "cursor" => "crosshair", "dataLabels" => ["dataLabels" => "d4d108fe6659fac79420fa083ef3adf2"], "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 0, "events" => [], "exposeElementToA11y" => 0, "findNearestPointBy" => "xy", "getExtremesFromAll" => 1, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "linecap" => "round", "overshoot" => 56, "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "rounded" => 1];
        $this->assertEquals($res18, $obj->toArray());

        $obj->setSelected(1);

        $res19 = ["animation" => 1, "animationLimit" => 97, "className" => "6f66e878c62db60568a3487869695820", "colorIndex" => 23, "cursor" => "crosshair", "dataLabels" => ["dataLabels" => "d4d108fe6659fac79420fa083ef3adf2"], "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 0, "events" => [], "exposeElementToA11y" => 0, "findNearestPointBy" => "xy", "getExtremesFromAll" => 1, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "linecap" => "round", "overshoot" => 56, "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "rounded" => 1, "selected" => 1];
        $this->assertEquals($res19, $obj->toArray());

        $obj->setShowCheckbox(0);

        $res20 = ["animation" => 1, "animationLimit" => 97, "className" => "6f66e878c62db60568a3487869695820", "colorIndex" => 23, "cursor" => "crosshair", "dataLabels" => ["dataLabels" => "d4d108fe6659fac79420fa083ef3adf2"], "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 0, "events" => [], "exposeElementToA11y" => 0, "findNearestPointBy" => "xy", "getExtremesFromAll" => 1, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "linecap" => "round", "overshoot" => 56, "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "rounded" => 1, "selected" => 1, "showCheckbox" => 0];
        $this->assertEquals($res20, $obj->toArray());

        $obj->setShowInLegend(0);

        $res21 = ["animation" => 1, "animationLimit" => 97, "className" => "6f66e878c62db60568a3487869695820", "colorIndex" => 23, "cursor" => "crosshair", "dataLabels" => ["dataLabels" => "d4d108fe6659fac79420fa083ef3adf2"], "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 0, "events" => [], "exposeElementToA11y" => 0, "findNearestPointBy" => "xy", "getExtremesFromAll" => 1, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "linecap" => "round", "overshoot" => 56, "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "rounded" => 1, "selected" => 1, "showCheckbox" => 0, "showInLegend" => 0];
        $this->assertEquals($res21, $obj->toArray());

        $obj->setSkipKeyboardNavigation(0);

        $res22 = ["animation" => 1, "animationLimit" => 97, "className" => "6f66e878c62db60568a3487869695820", "colorIndex" => 23, "cursor" => "crosshair", "dataLabels" => ["dataLabels" => "d4d108fe6659fac79420fa083ef3adf2"], "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 0, "events" => [], "exposeElementToA11y" => 0, "findNearestPointBy" => "xy", "getExtremesFromAll" => 1, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "linecap" => "round", "overshoot" => 56, "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "rounded" => 1, "selected" => 1, "showCheckbox" => 0, "showInLegend" => 0, "skipKeyboardNavigation" => 0];
        $this->assertEquals($res22, $obj->toArray());

        $obj->setStickyTracking(0);

        $res23 = ["animation" => 1, "animationLimit" => 97, "className" => "6f66e878c62db60568a3487869695820", "colorIndex" => 23, "cursor" => "crosshair", "dataLabels" => ["dataLabels" => "d4d108fe6659fac79420fa083ef3adf2"], "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 0, "events" => [], "exposeElementToA11y" => 0, "findNearestPointBy" => "xy", "getExtremesFromAll" => 1, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "linecap" => "round", "overshoot" => 56, "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "rounded" => 1, "selected" => 1, "showCheckbox" => 0, "showInLegend" => 0, "skipKeyboardNavigation" => 0, "stickyTracking" => 0];
        $this->assertEquals($res23, $obj->toArray());

        $obj->setThreshold(65);

        $res24 = ["animation" => 1, "animationLimit" => 97, "className" => "6f66e878c62db60568a3487869695820", "colorIndex" => 23, "cursor" => "crosshair", "dataLabels" => ["dataLabels" => "d4d108fe6659fac79420fa083ef3adf2"], "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 0, "events" => [], "exposeElementToA11y" => 0, "findNearestPointBy" => "xy", "getExtremesFromAll" => 1, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "linecap" => "round", "overshoot" => 56, "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "rounded" => 1, "selected" => 1, "showCheckbox" => 0, "showInLegend" => 0, "skipKeyboardNavigation" => 0, "stickyTracking" => 0, "threshold" => 65];
        $this->assertEquals($res24, $obj->toArray());

        $obj->setTooltip(["tooltip" => "ddbfc1b6aa0ad4d79c5dac7aa3b44888"]);

        $res25 = ["animation" => 1, "animationLimit" => 97, "className" => "6f66e878c62db60568a3487869695820", "colorIndex" => 23, "cursor" => "crosshair", "dataLabels" => ["dataLabels" => "d4d108fe6659fac79420fa083ef3adf2"], "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 0, "events" => [], "exposeElementToA11y" => 0, "findNearestPointBy" => "xy", "getExtremesFromAll" => 1, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "linecap" => "round", "overshoot" => 56, "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "rounded" => 1, "selected" => 1, "showCheckbox" => 0, "showInLegend" => 0, "skipKeyboardNavigation" => 0, "stickyTracking" => 0, "threshold" => 65, "tooltip" => ["tooltip" => "ddbfc1b6aa0ad4d79c5dac7aa3b44888"]];
        $this->assertEquals($res25, $obj->toArray());

        $obj->setVisible(1);

        $res26 = ["animation" => 1, "animationLimit" => 97, "className" => "6f66e878c62db60568a3487869695820", "colorIndex" => 23, "cursor" => "crosshair", "dataLabels" => ["dataLabels" => "d4d108fe6659fac79420fa083ef3adf2"], "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 0, "events" => [], "exposeElementToA11y" => 0, "findNearestPointBy" => "xy", "getExtremesFromAll" => 1, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "linecap" => "round", "overshoot" => 56, "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "rounded" => 1, "selected" => 1, "showCheckbox" => 0, "showInLegend" => 0, "skipKeyboardNavigation" => 0, "stickyTracking" => 0, "threshold" => 65, "tooltip" => ["tooltip" => "ddbfc1b6aa0ad4d79c5dac7aa3b44888"], "visible" => 1];
        $this->assertEquals($res26, $obj->toArray());

        $obj->setWrap(0);

        $res27 = ["animation" => 1, "animationLimit" => 97, "className" => "6f66e878c62db60568a3487869695820", "colorIndex" => 23, "cursor" => "crosshair", "dataLabels" => ["dataLabels" => "d4d108fe6659fac79420fa083ef3adf2"], "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 0, "events" => [], "exposeElementToA11y" => 0, "findNearestPointBy" => "xy", "getExtremesFromAll" => 1, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "linecap" => "round", "overshoot" => 56, "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "rounded" => 1, "selected" => 1, "showCheckbox" => 0, "showInLegend" => 0, "skipKeyboardNavigation" => 0, "stickyTracking" => 0, "threshold" => 65, "tooltip" => ["tooltip" => "ddbfc1b6aa0ad4d79c5dac7aa3b44888"], "visible" => 1, "wrap" => 0];
        $this->assertEquals($res27, $obj->toArray());
    }

}
