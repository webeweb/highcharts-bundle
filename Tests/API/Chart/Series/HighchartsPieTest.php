<?php

/*
 * This file is part of the highcharts-bundle package.
 *
 * (c) 2017 NdC/WBW
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\HighchartsBundle\Tests\API\Chart\Series;

use PHPUnit_Framework_TestCase;

/**
 * Highcharts pie test.
 *
 * @author NdC/WBW <https://github.com/webeweb/>
 * @package WBW\Bundle\HighchartsBundle\Tests\API\Chart\Series
 * @version 5.0.14
 */
final class HighchartsPieTest extends PHPUnit_Framework_TestCase {

	/**
	 * Tests the __construct() method.
	 *
	 * @return void
	 */
	public function testConstructor() {

		$obj1 = new \WBW\Bundle\HighchartsBundle\API\Chart\Series\HighchartsPie(true);

		$this->assertEquals(null, $obj1->getAllowPointSelect());
		$this->assertEquals(null, $obj1->getAnimation());
		$this->assertEquals(null, $obj1->getAnimationLimit());
		$this->assertEquals(null, $obj1->getBorderColor());
		$this->assertEquals(null, $obj1->getBorderWidth());
		$this->assertEquals(null, $obj1->getCenter());
		$this->assertEquals(null, $obj1->getClassName());
		$this->assertEquals(null, $obj1->getColorIndex());
		$this->assertEquals(null, $obj1->getColors());
		$this->assertEquals(null, $obj1->getCursor());
		$this->assertEquals(null, $obj1->getData());
		$this->assertEquals(null, $obj1->getDataLabels());
		$this->assertEquals(null, $obj1->getDepth());
		$this->assertEquals(null, $obj1->getDescription());
		$this->assertEquals(null, $obj1->getEnableMouseTracking());
		$this->assertEquals(null, $obj1->getEndAngle());
		$this->assertEquals(null, $obj1->getEvents());
		$this->assertEquals(null, $obj1->getExposeElementToA11y());
		$this->assertEquals(null, $obj1->getFindNearestPointBy());
		$this->assertEquals(null, $obj1->getGetExtremesFromAll());
		$this->assertEquals(null, $obj1->getId());
		$this->assertEquals(null, $obj1->getIgnoreHiddenPoint());
		$this->assertEquals(null, $obj1->getIndex());
		$this->assertEquals(null, $obj1->getInnerSize());
		$this->assertEquals(null, $obj1->getKeys());
		$this->assertEquals(null, $obj1->getLegendIndex());
		$this->assertEquals(null, $obj1->getLinkedTo());
		$this->assertEquals(null, $obj1->getMinSize());
		$this->assertEquals(null, $obj1->getName());
		$this->assertEquals(null, $obj1->getPoint());
		$this->assertEquals(null, $obj1->getPointDescriptionFormatter());
		$this->assertEquals(null, $obj1->getSelected());
		$this->assertEquals(null, $obj1->getShadow());
		$this->assertEquals(null, $obj1->getShowInLegend());
		$this->assertEquals(null, $obj1->getSize());
		$this->assertEquals(null, $obj1->getSkipKeyboardNavigation());
		$this->assertEquals(null, $obj1->getSlicedOffset());
		$this->assertEquals(null, $obj1->getStartAngle());
		$this->assertEquals(null, $obj1->getStates());
		$this->assertEquals(null, $obj1->getStickyTracking());
		$this->assertEquals(null, $obj1->getTooltip());
		$this->assertEquals(null, $obj1->getType());
		$this->assertEquals(null, $obj1->getVisible());
		$this->assertEquals(null, $obj1->getZIndex());
		$this->assertEquals(null, $obj1->getZoneAxis());
		$this->assertEquals(null, $obj1->getZones());

		$obj0 = new \WBW\Bundle\HighchartsBundle\API\Chart\Series\HighchartsPie(false);

		$this->assertEquals(false, $obj0->getAllowPointSelect());
		$this->assertEquals(true, $obj0->getAnimation());
		$this->assertEquals(null, $obj0->getAnimationLimit());
		$this->assertEquals("#ffffff", $obj0->getBorderColor());
		$this->assertEquals(1, $obj0->getBorderWidth());
		$this->assertEquals([null, null], $obj0->getCenter());
		$this->assertEquals(null, $obj0->getClassName());
		$this->assertEquals(null, $obj0->getColorIndex());
		$this->assertEquals(null, $obj0->getColors());
		$this->assertEquals(null, $obj0->getCursor());
		$this->assertEquals(null, $obj0->getData());
		$this->assertEquals(null, $obj0->getDataLabels());
		$this->assertEquals(0, $obj0->getDepth());
		$this->assertEquals(null, $obj0->getDescription());
		$this->assertEquals(true, $obj0->getEnableMouseTracking());
		$this->assertEquals(null, $obj0->getEndAngle());
		$this->assertEquals(null, $obj0->getEvents());
		$this->assertEquals(null, $obj0->getExposeElementToA11y());
		$this->assertEquals(null, $obj0->getFindNearestPointBy());
		$this->assertEquals(false, $obj0->getGetExtremesFromAll());
		$this->assertEquals(null, $obj0->getId());
		$this->assertEquals(true, $obj0->getIgnoreHiddenPoint());
		$this->assertEquals(null, $obj0->getIndex());
		$this->assertEquals("0", $obj0->getInnerSize());
		$this->assertEquals(null, $obj0->getKeys());
		$this->assertEquals(null, $obj0->getLegendIndex());
		$this->assertEquals(null, $obj0->getLinkedTo());
		$this->assertEquals(80, $obj0->getMinSize());
		$this->assertEquals(null, $obj0->getName());
		$this->assertEquals(null, $obj0->getPoint());
		$this->assertEquals(null, $obj0->getPointDescriptionFormatter());
		$this->assertEquals(false, $obj0->getSelected());
		$this->assertEquals(false, $obj0->getShadow());
		$this->assertEquals(false, $obj0->getShowInLegend());
		$this->assertEquals(null, $obj0->getSize());
		$this->assertEquals(null, $obj0->getSkipKeyboardNavigation());
		$this->assertEquals(10, $obj0->getSlicedOffset());
		$this->assertEquals(0, $obj0->getStartAngle());
		$this->assertEquals(null, $obj0->getStates());
		$this->assertEquals(false, $obj0->getStickyTracking());
		$this->assertEquals(null, $obj0->getTooltip());
		$this->assertEquals(null, $obj0->getType());
		$this->assertEquals(true, $obj0->getVisible());
		$this->assertEquals(null, $obj0->getZIndex());
		$this->assertEquals("y", $obj0->getZoneAxis());
		$this->assertEquals(null, $obj0->getZones());
    }

	/**
	 * Tests the clear() method.
	 *
	 * @return void
	 */
	public function testClear() {

		$obj = new \WBW\Bundle\HighchartsBundle\API\Chart\Series\HighchartsPie(false);

		$obj->newDataLabels();
		$obj->newEvents();
		$obj->newPoint();
		$obj->newStates();

		$obj->clear();

		$res = ["dataLabels" => [], "events" => [], "point" => [], "states" => []];
		$this->assertEquals($res, $obj->toArray());
	}

	/**
	 * Tests the jsonSerialize() method.
	 *
	 * @return void
	 */
	public function testJsonSerialize() {

		$obj = new \WBW\Bundle\HighchartsBundle\API\Chart\Series\HighchartsPie(true);

		$this->assertEquals([], $obj->jsonSerialize());
	}

	/**
	 * Tests the newDataLabels() method.
	 *
	 * @return void.
	 */
	public function testNewDataLabels() {

		$obj = new \WBW\Bundle\HighchartsBundle\API\Chart\Series\HighchartsPie(false);

		$res = $obj->newDataLabels();
		$this->assertInstanceOf(\WBW\Bundle\HighchartsBundle\API\Chart\Series\Pie\HighchartsDataLabels::class, $res);
	}

	/**
	 * Tests the newEvents() method.
	 *
	 * @return void.
	 */
	public function testNewEvents() {

		$obj = new \WBW\Bundle\HighchartsBundle\API\Chart\Series\HighchartsPie(false);

		$res = $obj->newEvents();
		$this->assertInstanceOf(\WBW\Bundle\HighchartsBundle\API\Chart\Series\Pie\HighchartsEvents::class, $res);
	}

	/**
	 * Tests the newPoint() method.
	 *
	 * @return void.
	 */
	public function testNewPoint() {

		$obj = new \WBW\Bundle\HighchartsBundle\API\Chart\Series\HighchartsPie(false);

		$res = $obj->newPoint();
		$this->assertInstanceOf(\WBW\Bundle\HighchartsBundle\API\Chart\Series\Pie\HighchartsPoint::class, $res);
	}

	/**
	 * Tests the newStates() method.
	 *
	 * @return void.
	 */
	public function testNewStates() {

		$obj = new \WBW\Bundle\HighchartsBundle\API\Chart\Series\HighchartsPie(false);

		$res = $obj->newStates();
		$this->assertInstanceOf(\WBW\Bundle\HighchartsBundle\API\Chart\Series\Pie\HighchartsStates::class, $res);
	}

	/**
	 * Tests the toArray() method.
	 *
	 * @return void
	 */
	public function testToArray() {

		$obj = new \WBW\Bundle\HighchartsBundle\API\Chart\Series\HighchartsPie(true);

		$obj->setAllowPointSelect(0);

		$res1 = ["allowPointSelect" => 0];
		$this->assertEquals($res1, $obj->toArray());

		$obj->setAnimation(1);

		$res2 = ["allowPointSelect" => 0, "animation" => 1];
		$this->assertEquals($res2, $obj->toArray());

		$obj->setAnimationLimit(93);

		$res3 = ["allowPointSelect" => 0, "animation" => 1, "animationLimit" => 93];
		$this->assertEquals($res3, $obj->toArray());

		$obj->setBorderColor("97da935a74593c55d78be9d1295aa994");

		$res4 = ["allowPointSelect" => 0, "animation" => 1, "animationLimit" => 93, "borderColor" => "97da935a74593c55d78be9d1295aa994"];
		$this->assertEquals($res4, $obj->toArray());

		$obj->setBorderWidth(79);

		$res5 = ["allowPointSelect" => 0, "animation" => 1, "animationLimit" => 93, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderWidth" => 79];
		$this->assertEquals($res5, $obj->toArray());

		$obj->setCenter(["center" => "adb115059e28d960fa8badfac5516667"]);

		$res6 = ["allowPointSelect" => 0, "animation" => 1, "animationLimit" => 93, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderWidth" => 79, "center" => ["center" => "adb115059e28d960fa8badfac5516667"]];
		$this->assertEquals($res6, $obj->toArray());

		$obj->setClassName("6f66e878c62db60568a3487869695820");

		$res7 = ["allowPointSelect" => 0, "animation" => 1, "animationLimit" => 93, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderWidth" => 79, "center" => ["center" => "adb115059e28d960fa8badfac5516667"], "className" => "6f66e878c62db60568a3487869695820"];
		$this->assertEquals($res7, $obj->toArray());

		$obj->setColorIndex(79);

		$res8 = ["allowPointSelect" => 0, "animation" => 1, "animationLimit" => 93, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderWidth" => 79, "center" => ["center" => "adb115059e28d960fa8badfac5516667"], "className" => "6f66e878c62db60568a3487869695820", "colorIndex" => 79];
		$this->assertEquals($res8, $obj->toArray());

		$obj->setColors(["colors" => "62848e3ce5804aa985513a7922ff87b2"]);

		$res9 = ["allowPointSelect" => 0, "animation" => 1, "animationLimit" => 93, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderWidth" => 79, "center" => ["center" => "adb115059e28d960fa8badfac5516667"], "className" => "6f66e878c62db60568a3487869695820", "colorIndex" => 79, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"]];
		$this->assertEquals($res9, $obj->toArray());

		$obj->setCursor("crosshair");

		$res10 = ["allowPointSelect" => 0, "animation" => 1, "animationLimit" => 93, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderWidth" => 79, "center" => ["center" => "adb115059e28d960fa8badfac5516667"], "className" => "6f66e878c62db60568a3487869695820", "colorIndex" => 79, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "cursor" => "crosshair"];
		$this->assertEquals($res10, $obj->toArray());

		$obj->setData(["data" => "8d777f385d3dfec8815d20f7496026dc"]);

		$res11 = ["allowPointSelect" => 0, "animation" => 1, "animationLimit" => 93, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderWidth" => 79, "center" => ["center" => "adb115059e28d960fa8badfac5516667"], "className" => "6f66e878c62db60568a3487869695820", "colorIndex" => 79, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "cursor" => "crosshair", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"]];
		$this->assertEquals($res11, $obj->toArray());

		$obj->setDataLabels(new \WBW\Bundle\HighchartsBundle\API\Chart\Series\Pie\HighchartsDataLabels());

		$res12 = ["allowPointSelect" => 0, "animation" => 1, "animationLimit" => 93, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderWidth" => 79, "center" => ["center" => "adb115059e28d960fa8badfac5516667"], "className" => "6f66e878c62db60568a3487869695820", "colorIndex" => 79, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "cursor" => "crosshair", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => []];
		$this->assertEquals($res12, $obj->toArray());

		$obj->setDepth(38);

		$res13 = ["allowPointSelect" => 0, "animation" => 1, "animationLimit" => 93, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderWidth" => 79, "center" => ["center" => "adb115059e28d960fa8badfac5516667"], "className" => "6f66e878c62db60568a3487869695820", "colorIndex" => 79, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "cursor" => "crosshair", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => [], "depth" => 38];
		$this->assertEquals($res13, $obj->toArray());

		$obj->setDescription("67daf92c833c41c95db874e18fcb2786");

		$res14 = ["allowPointSelect" => 0, "animation" => 1, "animationLimit" => 93, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderWidth" => 79, "center" => ["center" => "adb115059e28d960fa8badfac5516667"], "className" => "6f66e878c62db60568a3487869695820", "colorIndex" => 79, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "cursor" => "crosshair", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => [], "depth" => 38, "description" => "67daf92c833c41c95db874e18fcb2786"];
		$this->assertEquals($res14, $obj->toArray());

		$obj->setEnableMouseTracking(1);

		$res15 = ["allowPointSelect" => 0, "animation" => 1, "animationLimit" => 93, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderWidth" => 79, "center" => ["center" => "adb115059e28d960fa8badfac5516667"], "className" => "6f66e878c62db60568a3487869695820", "colorIndex" => 79, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "cursor" => "crosshair", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => [], "depth" => 38, "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 1];
		$this->assertEquals($res15, $obj->toArray());

		$obj->setEndAngle(0);

		$res16 = ["allowPointSelect" => 0, "animation" => 1, "animationLimit" => 93, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderWidth" => 79, "center" => ["center" => "adb115059e28d960fa8badfac5516667"], "className" => "6f66e878c62db60568a3487869695820", "colorIndex" => 79, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "cursor" => "crosshair", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => [], "depth" => 38, "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 1, "endAngle" => 0];
		$this->assertEquals($res16, $obj->toArray());

		$obj->setEvents(new \WBW\Bundle\HighchartsBundle\API\Chart\Series\Pie\HighchartsEvents());

		$res17 = ["allowPointSelect" => 0, "animation" => 1, "animationLimit" => 93, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderWidth" => 79, "center" => ["center" => "adb115059e28d960fa8badfac5516667"], "className" => "6f66e878c62db60568a3487869695820", "colorIndex" => 79, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "cursor" => "crosshair", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => [], "depth" => 38, "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 1, "endAngle" => 0, "events" => []];
		$this->assertEquals($res17, $obj->toArray());

		$obj->setExposeElementToA11y(1);

		$res18 = ["allowPointSelect" => 0, "animation" => 1, "animationLimit" => 93, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderWidth" => 79, "center" => ["center" => "adb115059e28d960fa8badfac5516667"], "className" => "6f66e878c62db60568a3487869695820", "colorIndex" => 79, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "cursor" => "crosshair", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => [], "depth" => 38, "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 1, "endAngle" => 0, "events" => [], "exposeElementToA11y" => 1];
		$this->assertEquals($res18, $obj->toArray());

		$obj->setFindNearestPointBy("xy");

		$res19 = ["allowPointSelect" => 0, "animation" => 1, "animationLimit" => 93, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderWidth" => 79, "center" => ["center" => "adb115059e28d960fa8badfac5516667"], "className" => "6f66e878c62db60568a3487869695820", "colorIndex" => 79, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "cursor" => "crosshair", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => [], "depth" => 38, "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 1, "endAngle" => 0, "events" => [], "exposeElementToA11y" => 1, "findNearestPointBy" => "xy"];
		$this->assertEquals($res19, $obj->toArray());

		$obj->setGetExtremesFromAll(0);

		$res20 = ["allowPointSelect" => 0, "animation" => 1, "animationLimit" => 93, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderWidth" => 79, "center" => ["center" => "adb115059e28d960fa8badfac5516667"], "className" => "6f66e878c62db60568a3487869695820", "colorIndex" => 79, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "cursor" => "crosshair", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => [], "depth" => 38, "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 1, "endAngle" => 0, "events" => [], "exposeElementToA11y" => 1, "findNearestPointBy" => "xy", "getExtremesFromAll" => 0];
		$this->assertEquals($res20, $obj->toArray());

		$obj->setId("b80bb7740288fda1f201890375a60c8f");

		$res21 = ["allowPointSelect" => 0, "animation" => 1, "animationLimit" => 93, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderWidth" => 79, "center" => ["center" => "adb115059e28d960fa8badfac5516667"], "className" => "6f66e878c62db60568a3487869695820", "colorIndex" => 79, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "cursor" => "crosshair", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => [], "depth" => 38, "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 1, "endAngle" => 0, "events" => [], "exposeElementToA11y" => 1, "findNearestPointBy" => "xy", "getExtremesFromAll" => 0, "id" => "b80bb7740288fda1f201890375a60c8f"];
		$this->assertEquals($res21, $obj->toArray());

		$obj->setIgnoreHiddenPoint(1);

		$res22 = ["allowPointSelect" => 0, "animation" => 1, "animationLimit" => 93, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderWidth" => 79, "center" => ["center" => "adb115059e28d960fa8badfac5516667"], "className" => "6f66e878c62db60568a3487869695820", "colorIndex" => 79, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "cursor" => "crosshair", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => [], "depth" => 38, "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 1, "endAngle" => 0, "events" => [], "exposeElementToA11y" => 1, "findNearestPointBy" => "xy", "getExtremesFromAll" => 0, "id" => "b80bb7740288fda1f201890375a60c8f", "ignoreHiddenPoint" => 1];
		$this->assertEquals($res22, $obj->toArray());

		$obj->setIndex(59);

		$res23 = ["allowPointSelect" => 0, "animation" => 1, "animationLimit" => 93, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderWidth" => 79, "center" => ["center" => "adb115059e28d960fa8badfac5516667"], "className" => "6f66e878c62db60568a3487869695820", "colorIndex" => 79, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "cursor" => "crosshair", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => [], "depth" => 38, "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 1, "endAngle" => 0, "events" => [], "exposeElementToA11y" => 1, "findNearestPointBy" => "xy", "getExtremesFromAll" => 0, "id" => "b80bb7740288fda1f201890375a60c8f", "ignoreHiddenPoint" => 1, "index" => 59];
		$this->assertEquals($res23, $obj->toArray());

		$obj->setInnerSize("a6d1a6164e85630d2ca35170621de672");

		$res24 = ["allowPointSelect" => 0, "animation" => 1, "animationLimit" => 93, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderWidth" => 79, "center" => ["center" => "adb115059e28d960fa8badfac5516667"], "className" => "6f66e878c62db60568a3487869695820", "colorIndex" => 79, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "cursor" => "crosshair", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => [], "depth" => 38, "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 1, "endAngle" => 0, "events" => [], "exposeElementToA11y" => 1, "findNearestPointBy" => "xy", "getExtremesFromAll" => 0, "id" => "b80bb7740288fda1f201890375a60c8f", "ignoreHiddenPoint" => 1, "index" => 59, "innerSize" => "a6d1a6164e85630d2ca35170621de672"];
		$this->assertEquals($res24, $obj->toArray());

		$obj->setKeys(["keys" => "14f802e1fba977727845e8872c1743a7"]);

		$res25 = ["allowPointSelect" => 0, "animation" => 1, "animationLimit" => 93, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderWidth" => 79, "center" => ["center" => "adb115059e28d960fa8badfac5516667"], "className" => "6f66e878c62db60568a3487869695820", "colorIndex" => 79, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "cursor" => "crosshair", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => [], "depth" => 38, "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 1, "endAngle" => 0, "events" => [], "exposeElementToA11y" => 1, "findNearestPointBy" => "xy", "getExtremesFromAll" => 0, "id" => "b80bb7740288fda1f201890375a60c8f", "ignoreHiddenPoint" => 1, "index" => 59, "innerSize" => "a6d1a6164e85630d2ca35170621de672", "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"]];
		$this->assertEquals($res25, $obj->toArray());

		$obj->setLegendIndex(100);

		$res26 = ["allowPointSelect" => 0, "animation" => 1, "animationLimit" => 93, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderWidth" => 79, "center" => ["center" => "adb115059e28d960fa8badfac5516667"], "className" => "6f66e878c62db60568a3487869695820", "colorIndex" => 79, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "cursor" => "crosshair", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => [], "depth" => 38, "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 1, "endAngle" => 0, "events" => [], "exposeElementToA11y" => 1, "findNearestPointBy" => "xy", "getExtremesFromAll" => 0, "id" => "b80bb7740288fda1f201890375a60c8f", "ignoreHiddenPoint" => 1, "index" => 59, "innerSize" => "a6d1a6164e85630d2ca35170621de672", "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "legendIndex" => 100];
		$this->assertEquals($res26, $obj->toArray());

		$obj->setLinkedTo("914fab47afc86331ec62837807a29419");

		$res27 = ["allowPointSelect" => 0, "animation" => 1, "animationLimit" => 93, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderWidth" => 79, "center" => ["center" => "adb115059e28d960fa8badfac5516667"], "className" => "6f66e878c62db60568a3487869695820", "colorIndex" => 79, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "cursor" => "crosshair", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => [], "depth" => 38, "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 1, "endAngle" => 0, "events" => [], "exposeElementToA11y" => 1, "findNearestPointBy" => "xy", "getExtremesFromAll" => 0, "id" => "b80bb7740288fda1f201890375a60c8f", "ignoreHiddenPoint" => 1, "index" => 59, "innerSize" => "a6d1a6164e85630d2ca35170621de672", "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "legendIndex" => 100, "linkedTo" => "914fab47afc86331ec62837807a29419"];
		$this->assertEquals($res27, $obj->toArray());

		$obj->setMinSize(75);

		$res28 = ["allowPointSelect" => 0, "animation" => 1, "animationLimit" => 93, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderWidth" => 79, "center" => ["center" => "adb115059e28d960fa8badfac5516667"], "className" => "6f66e878c62db60568a3487869695820", "colorIndex" => 79, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "cursor" => "crosshair", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => [], "depth" => 38, "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 1, "endAngle" => 0, "events" => [], "exposeElementToA11y" => 1, "findNearestPointBy" => "xy", "getExtremesFromAll" => 0, "id" => "b80bb7740288fda1f201890375a60c8f", "ignoreHiddenPoint" => 1, "index" => 59, "innerSize" => "a6d1a6164e85630d2ca35170621de672", "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "legendIndex" => 100, "linkedTo" => "914fab47afc86331ec62837807a29419", "minSize" => 75];
		$this->assertEquals($res28, $obj->toArray());

		$obj->setName("b068931cc450442b63f5b3d276ea4297");

		$res29 = ["allowPointSelect" => 0, "animation" => 1, "animationLimit" => 93, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderWidth" => 79, "center" => ["center" => "adb115059e28d960fa8badfac5516667"], "className" => "6f66e878c62db60568a3487869695820", "colorIndex" => 79, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "cursor" => "crosshair", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => [], "depth" => 38, "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 1, "endAngle" => 0, "events" => [], "exposeElementToA11y" => 1, "findNearestPointBy" => "xy", "getExtremesFromAll" => 0, "id" => "b80bb7740288fda1f201890375a60c8f", "ignoreHiddenPoint" => 1, "index" => 59, "innerSize" => "a6d1a6164e85630d2ca35170621de672", "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "legendIndex" => 100, "linkedTo" => "914fab47afc86331ec62837807a29419", "minSize" => 75, "name" => "b068931cc450442b63f5b3d276ea4297"];
		$this->assertEquals($res29, $obj->toArray());

		$obj->setPoint(new \WBW\Bundle\HighchartsBundle\API\Chart\Series\Pie\HighchartsPoint());

		$res30 = ["allowPointSelect" => 0, "animation" => 1, "animationLimit" => 93, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderWidth" => 79, "center" => ["center" => "adb115059e28d960fa8badfac5516667"], "className" => "6f66e878c62db60568a3487869695820", "colorIndex" => 79, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "cursor" => "crosshair", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => [], "depth" => 38, "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 1, "endAngle" => 0, "events" => [], "exposeElementToA11y" => 1, "findNearestPointBy" => "xy", "getExtremesFromAll" => 0, "id" => "b80bb7740288fda1f201890375a60c8f", "ignoreHiddenPoint" => 1, "index" => 59, "innerSize" => "a6d1a6164e85630d2ca35170621de672", "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "legendIndex" => 100, "linkedTo" => "914fab47afc86331ec62837807a29419", "minSize" => 75, "name" => "b068931cc450442b63f5b3d276ea4297", "point" => []];
		$this->assertEquals($res30, $obj->toArray());

		$obj->setPointDescriptionFormatter("b5fd0c15b3ca81f726e2c7b93907ba36");

		$res31 = ["allowPointSelect" => 0, "animation" => 1, "animationLimit" => 93, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderWidth" => 79, "center" => ["center" => "adb115059e28d960fa8badfac5516667"], "className" => "6f66e878c62db60568a3487869695820", "colorIndex" => 79, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "cursor" => "crosshair", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => [], "depth" => 38, "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 1, "endAngle" => 0, "events" => [], "exposeElementToA11y" => 1, "findNearestPointBy" => "xy", "getExtremesFromAll" => 0, "id" => "b80bb7740288fda1f201890375a60c8f", "ignoreHiddenPoint" => 1, "index" => 59, "innerSize" => "a6d1a6164e85630d2ca35170621de672", "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "legendIndex" => 100, "linkedTo" => "914fab47afc86331ec62837807a29419", "minSize" => 75, "name" => "b068931cc450442b63f5b3d276ea4297", "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36"];
		$this->assertEquals($res31, $obj->toArray());

		$obj->setSelected(0);

		$res32 = ["allowPointSelect" => 0, "animation" => 1, "animationLimit" => 93, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderWidth" => 79, "center" => ["center" => "adb115059e28d960fa8badfac5516667"], "className" => "6f66e878c62db60568a3487869695820", "colorIndex" => 79, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "cursor" => "crosshair", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => [], "depth" => 38, "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 1, "endAngle" => 0, "events" => [], "exposeElementToA11y" => 1, "findNearestPointBy" => "xy", "getExtremesFromAll" => 0, "id" => "b80bb7740288fda1f201890375a60c8f", "ignoreHiddenPoint" => 1, "index" => 59, "innerSize" => "a6d1a6164e85630d2ca35170621de672", "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "legendIndex" => 100, "linkedTo" => "914fab47afc86331ec62837807a29419", "minSize" => 75, "name" => "b068931cc450442b63f5b3d276ea4297", "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "selected" => 0];
		$this->assertEquals($res32, $obj->toArray());

		$obj->setShadow(1);

		$res33 = ["allowPointSelect" => 0, "animation" => 1, "animationLimit" => 93, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderWidth" => 79, "center" => ["center" => "adb115059e28d960fa8badfac5516667"], "className" => "6f66e878c62db60568a3487869695820", "colorIndex" => 79, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "cursor" => "crosshair", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => [], "depth" => 38, "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 1, "endAngle" => 0, "events" => [], "exposeElementToA11y" => 1, "findNearestPointBy" => "xy", "getExtremesFromAll" => 0, "id" => "b80bb7740288fda1f201890375a60c8f", "ignoreHiddenPoint" => 1, "index" => 59, "innerSize" => "a6d1a6164e85630d2ca35170621de672", "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "legendIndex" => 100, "linkedTo" => "914fab47afc86331ec62837807a29419", "minSize" => 75, "name" => "b068931cc450442b63f5b3d276ea4297", "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "selected" => 0, "shadow" => 1];
		$this->assertEquals($res33, $obj->toArray());

		$obj->setShowInLegend(0);

		$res34 = ["allowPointSelect" => 0, "animation" => 1, "animationLimit" => 93, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderWidth" => 79, "center" => ["center" => "adb115059e28d960fa8badfac5516667"], "className" => "6f66e878c62db60568a3487869695820", "colorIndex" => 79, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "cursor" => "crosshair", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => [], "depth" => 38, "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 1, "endAngle" => 0, "events" => [], "exposeElementToA11y" => 1, "findNearestPointBy" => "xy", "getExtremesFromAll" => 0, "id" => "b80bb7740288fda1f201890375a60c8f", "ignoreHiddenPoint" => 1, "index" => 59, "innerSize" => "a6d1a6164e85630d2ca35170621de672", "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "legendIndex" => 100, "linkedTo" => "914fab47afc86331ec62837807a29419", "minSize" => 75, "name" => "b068931cc450442b63f5b3d276ea4297", "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "selected" => 0, "shadow" => 1, "showInLegend" => 0];
		$this->assertEquals($res34, $obj->toArray());

		$obj->setSize("f7bd60b75b29d79b660a2859395c1a24");

		$res35 = ["allowPointSelect" => 0, "animation" => 1, "animationLimit" => 93, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderWidth" => 79, "center" => ["center" => "adb115059e28d960fa8badfac5516667"], "className" => "6f66e878c62db60568a3487869695820", "colorIndex" => 79, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "cursor" => "crosshair", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => [], "depth" => 38, "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 1, "endAngle" => 0, "events" => [], "exposeElementToA11y" => 1, "findNearestPointBy" => "xy", "getExtremesFromAll" => 0, "id" => "b80bb7740288fda1f201890375a60c8f", "ignoreHiddenPoint" => 1, "index" => 59, "innerSize" => "a6d1a6164e85630d2ca35170621de672", "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "legendIndex" => 100, "linkedTo" => "914fab47afc86331ec62837807a29419", "minSize" => 75, "name" => "b068931cc450442b63f5b3d276ea4297", "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "selected" => 0, "shadow" => 1, "showInLegend" => 0, "size" => "f7bd60b75b29d79b660a2859395c1a24"];
		$this->assertEquals($res35, $obj->toArray());

		$obj->setSkipKeyboardNavigation(1);

		$res36 = ["allowPointSelect" => 0, "animation" => 1, "animationLimit" => 93, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderWidth" => 79, "center" => ["center" => "adb115059e28d960fa8badfac5516667"], "className" => "6f66e878c62db60568a3487869695820", "colorIndex" => 79, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "cursor" => "crosshair", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => [], "depth" => 38, "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 1, "endAngle" => 0, "events" => [], "exposeElementToA11y" => 1, "findNearestPointBy" => "xy", "getExtremesFromAll" => 0, "id" => "b80bb7740288fda1f201890375a60c8f", "ignoreHiddenPoint" => 1, "index" => 59, "innerSize" => "a6d1a6164e85630d2ca35170621de672", "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "legendIndex" => 100, "linkedTo" => "914fab47afc86331ec62837807a29419", "minSize" => 75, "name" => "b068931cc450442b63f5b3d276ea4297", "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "selected" => 0, "shadow" => 1, "showInLegend" => 0, "size" => "f7bd60b75b29d79b660a2859395c1a24", "skipKeyboardNavigation" => 1];
		$this->assertEquals($res36, $obj->toArray());

		$obj->setSlicedOffset(14);

		$res37 = ["allowPointSelect" => 0, "animation" => 1, "animationLimit" => 93, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderWidth" => 79, "center" => ["center" => "adb115059e28d960fa8badfac5516667"], "className" => "6f66e878c62db60568a3487869695820", "colorIndex" => 79, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "cursor" => "crosshair", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => [], "depth" => 38, "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 1, "endAngle" => 0, "events" => [], "exposeElementToA11y" => 1, "findNearestPointBy" => "xy", "getExtremesFromAll" => 0, "id" => "b80bb7740288fda1f201890375a60c8f", "ignoreHiddenPoint" => 1, "index" => 59, "innerSize" => "a6d1a6164e85630d2ca35170621de672", "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "legendIndex" => 100, "linkedTo" => "914fab47afc86331ec62837807a29419", "minSize" => 75, "name" => "b068931cc450442b63f5b3d276ea4297", "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "selected" => 0, "shadow" => 1, "showInLegend" => 0, "size" => "f7bd60b75b29d79b660a2859395c1a24", "skipKeyboardNavigation" => 1, "slicedOffset" => 14];
		$this->assertEquals($res37, $obj->toArray());

		$obj->setStartAngle(90);

		$res38 = ["allowPointSelect" => 0, "animation" => 1, "animationLimit" => 93, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderWidth" => 79, "center" => ["center" => "adb115059e28d960fa8badfac5516667"], "className" => "6f66e878c62db60568a3487869695820", "colorIndex" => 79, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "cursor" => "crosshair", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => [], "depth" => 38, "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 1, "endAngle" => 0, "events" => [], "exposeElementToA11y" => 1, "findNearestPointBy" => "xy", "getExtremesFromAll" => 0, "id" => "b80bb7740288fda1f201890375a60c8f", "ignoreHiddenPoint" => 1, "index" => 59, "innerSize" => "a6d1a6164e85630d2ca35170621de672", "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "legendIndex" => 100, "linkedTo" => "914fab47afc86331ec62837807a29419", "minSize" => 75, "name" => "b068931cc450442b63f5b3d276ea4297", "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "selected" => 0, "shadow" => 1, "showInLegend" => 0, "size" => "f7bd60b75b29d79b660a2859395c1a24", "skipKeyboardNavigation" => 1, "slicedOffset" => 14, "startAngle" => 90];
		$this->assertEquals($res38, $obj->toArray());

		$obj->setStates(new \WBW\Bundle\HighchartsBundle\API\Chart\Series\Pie\HighchartsStates());

		$res39 = ["allowPointSelect" => 0, "animation" => 1, "animationLimit" => 93, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderWidth" => 79, "center" => ["center" => "adb115059e28d960fa8badfac5516667"], "className" => "6f66e878c62db60568a3487869695820", "colorIndex" => 79, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "cursor" => "crosshair", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => [], "depth" => 38, "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 1, "endAngle" => 0, "events" => [], "exposeElementToA11y" => 1, "findNearestPointBy" => "xy", "getExtremesFromAll" => 0, "id" => "b80bb7740288fda1f201890375a60c8f", "ignoreHiddenPoint" => 1, "index" => 59, "innerSize" => "a6d1a6164e85630d2ca35170621de672", "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "legendIndex" => 100, "linkedTo" => "914fab47afc86331ec62837807a29419", "minSize" => 75, "name" => "b068931cc450442b63f5b3d276ea4297", "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "selected" => 0, "shadow" => 1, "showInLegend" => 0, "size" => "f7bd60b75b29d79b660a2859395c1a24", "skipKeyboardNavigation" => 1, "slicedOffset" => 14, "startAngle" => 90, "states" => []];
		$this->assertEquals($res39, $obj->toArray());

		$obj->setStickyTracking(1);

		$res40 = ["allowPointSelect" => 0, "animation" => 1, "animationLimit" => 93, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderWidth" => 79, "center" => ["center" => "adb115059e28d960fa8badfac5516667"], "className" => "6f66e878c62db60568a3487869695820", "colorIndex" => 79, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "cursor" => "crosshair", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => [], "depth" => 38, "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 1, "endAngle" => 0, "events" => [], "exposeElementToA11y" => 1, "findNearestPointBy" => "xy", "getExtremesFromAll" => 0, "id" => "b80bb7740288fda1f201890375a60c8f", "ignoreHiddenPoint" => 1, "index" => 59, "innerSize" => "a6d1a6164e85630d2ca35170621de672", "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "legendIndex" => 100, "linkedTo" => "914fab47afc86331ec62837807a29419", "minSize" => 75, "name" => "b068931cc450442b63f5b3d276ea4297", "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "selected" => 0, "shadow" => 1, "showInLegend" => 0, "size" => "f7bd60b75b29d79b660a2859395c1a24", "skipKeyboardNavigation" => 1, "slicedOffset" => 14, "startAngle" => 90, "states" => [], "stickyTracking" => 1];
		$this->assertEquals($res40, $obj->toArray());

		$obj->setTooltip(["tooltip" => "ddbfc1b6aa0ad4d79c5dac7aa3b44888"]);

		$res41 = ["allowPointSelect" => 0, "animation" => 1, "animationLimit" => 93, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderWidth" => 79, "center" => ["center" => "adb115059e28d960fa8badfac5516667"], "className" => "6f66e878c62db60568a3487869695820", "colorIndex" => 79, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "cursor" => "crosshair", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => [], "depth" => 38, "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 1, "endAngle" => 0, "events" => [], "exposeElementToA11y" => 1, "findNearestPointBy" => "xy", "getExtremesFromAll" => 0, "id" => "b80bb7740288fda1f201890375a60c8f", "ignoreHiddenPoint" => 1, "index" => 59, "innerSize" => "a6d1a6164e85630d2ca35170621de672", "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "legendIndex" => 100, "linkedTo" => "914fab47afc86331ec62837807a29419", "minSize" => 75, "name" => "b068931cc450442b63f5b3d276ea4297", "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "selected" => 0, "shadow" => 1, "showInLegend" => 0, "size" => "f7bd60b75b29d79b660a2859395c1a24", "skipKeyboardNavigation" => 1, "slicedOffset" => 14, "startAngle" => 90, "states" => [], "stickyTracking" => 1, "tooltip" => ["tooltip" => "ddbfc1b6aa0ad4d79c5dac7aa3b44888"]];
		$this->assertEquals($res41, $obj->toArray());

		$obj->setType("waterfall");

		$res42 = ["allowPointSelect" => 0, "animation" => 1, "animationLimit" => 93, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderWidth" => 79, "center" => ["center" => "adb115059e28d960fa8badfac5516667"], "className" => "6f66e878c62db60568a3487869695820", "colorIndex" => 79, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "cursor" => "crosshair", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => [], "depth" => 38, "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 1, "endAngle" => 0, "events" => [], "exposeElementToA11y" => 1, "findNearestPointBy" => "xy", "getExtremesFromAll" => 0, "id" => "b80bb7740288fda1f201890375a60c8f", "ignoreHiddenPoint" => 1, "index" => 59, "innerSize" => "a6d1a6164e85630d2ca35170621de672", "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "legendIndex" => 100, "linkedTo" => "914fab47afc86331ec62837807a29419", "minSize" => 75, "name" => "b068931cc450442b63f5b3d276ea4297", "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "selected" => 0, "shadow" => 1, "showInLegend" => 0, "size" => "f7bd60b75b29d79b660a2859395c1a24", "skipKeyboardNavigation" => 1, "slicedOffset" => 14, "startAngle" => 90, "states" => [], "stickyTracking" => 1, "tooltip" => ["tooltip" => "ddbfc1b6aa0ad4d79c5dac7aa3b44888"], "type" => "waterfall"];
		$this->assertEquals($res42, $obj->toArray());

		$obj->setVisible(1);

		$res43 = ["allowPointSelect" => 0, "animation" => 1, "animationLimit" => 93, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderWidth" => 79, "center" => ["center" => "adb115059e28d960fa8badfac5516667"], "className" => "6f66e878c62db60568a3487869695820", "colorIndex" => 79, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "cursor" => "crosshair", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => [], "depth" => 38, "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 1, "endAngle" => 0, "events" => [], "exposeElementToA11y" => 1, "findNearestPointBy" => "xy", "getExtremesFromAll" => 0, "id" => "b80bb7740288fda1f201890375a60c8f", "ignoreHiddenPoint" => 1, "index" => 59, "innerSize" => "a6d1a6164e85630d2ca35170621de672", "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "legendIndex" => 100, "linkedTo" => "914fab47afc86331ec62837807a29419", "minSize" => 75, "name" => "b068931cc450442b63f5b3d276ea4297", "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "selected" => 0, "shadow" => 1, "showInLegend" => 0, "size" => "f7bd60b75b29d79b660a2859395c1a24", "skipKeyboardNavigation" => 1, "slicedOffset" => 14, "startAngle" => 90, "states" => [], "stickyTracking" => 1, "tooltip" => ["tooltip" => "ddbfc1b6aa0ad4d79c5dac7aa3b44888"], "type" => "waterfall", "visible" => 1];
		$this->assertEquals($res43, $obj->toArray());

		$obj->setZIndex(0);

		$res44 = ["allowPointSelect" => 0, "animation" => 1, "animationLimit" => 93, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderWidth" => 79, "center" => ["center" => "adb115059e28d960fa8badfac5516667"], "className" => "6f66e878c62db60568a3487869695820", "colorIndex" => 79, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "cursor" => "crosshair", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => [], "depth" => 38, "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 1, "endAngle" => 0, "events" => [], "exposeElementToA11y" => 1, "findNearestPointBy" => "xy", "getExtremesFromAll" => 0, "id" => "b80bb7740288fda1f201890375a60c8f", "ignoreHiddenPoint" => 1, "index" => 59, "innerSize" => "a6d1a6164e85630d2ca35170621de672", "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "legendIndex" => 100, "linkedTo" => "914fab47afc86331ec62837807a29419", "minSize" => 75, "name" => "b068931cc450442b63f5b3d276ea4297", "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "selected" => 0, "shadow" => 1, "showInLegend" => 0, "size" => "f7bd60b75b29d79b660a2859395c1a24", "skipKeyboardNavigation" => 1, "slicedOffset" => 14, "startAngle" => 90, "states" => [], "stickyTracking" => 1, "tooltip" => ["tooltip" => "ddbfc1b6aa0ad4d79c5dac7aa3b44888"], "type" => "waterfall", "visible" => 1, "zIndex" => 0];
		$this->assertEquals($res44, $obj->toArray());

		$obj->setZoneAxis("88421adabea658556aa3ab6c6181afad");

		$res45 = ["allowPointSelect" => 0, "animation" => 1, "animationLimit" => 93, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderWidth" => 79, "center" => ["center" => "adb115059e28d960fa8badfac5516667"], "className" => "6f66e878c62db60568a3487869695820", "colorIndex" => 79, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "cursor" => "crosshair", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => [], "depth" => 38, "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 1, "endAngle" => 0, "events" => [], "exposeElementToA11y" => 1, "findNearestPointBy" => "xy", "getExtremesFromAll" => 0, "id" => "b80bb7740288fda1f201890375a60c8f", "ignoreHiddenPoint" => 1, "index" => 59, "innerSize" => "a6d1a6164e85630d2ca35170621de672", "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "legendIndex" => 100, "linkedTo" => "914fab47afc86331ec62837807a29419", "minSize" => 75, "name" => "b068931cc450442b63f5b3d276ea4297", "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "selected" => 0, "shadow" => 1, "showInLegend" => 0, "size" => "f7bd60b75b29d79b660a2859395c1a24", "skipKeyboardNavigation" => 1, "slicedOffset" => 14, "startAngle" => 90, "states" => [], "stickyTracking" => 1, "tooltip" => ["tooltip" => "ddbfc1b6aa0ad4d79c5dac7aa3b44888"], "type" => "waterfall", "visible" => 1, "zIndex" => 0, "zoneAxis" => "88421adabea658556aa3ab6c6181afad"];
		$this->assertEquals($res45, $obj->toArray());

		$obj->setZones(["zones" => "26f94136f5db8afd4e9df1e512f7fdc5"]);

		$res46 = ["allowPointSelect" => 0, "animation" => 1, "animationLimit" => 93, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderWidth" => 79, "center" => ["center" => "adb115059e28d960fa8badfac5516667"], "className" => "6f66e878c62db60568a3487869695820", "colorIndex" => 79, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "cursor" => "crosshair", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => [], "depth" => 38, "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 1, "endAngle" => 0, "events" => [], "exposeElementToA11y" => 1, "findNearestPointBy" => "xy", "getExtremesFromAll" => 0, "id" => "b80bb7740288fda1f201890375a60c8f", "ignoreHiddenPoint" => 1, "index" => 59, "innerSize" => "a6d1a6164e85630d2ca35170621de672", "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "legendIndex" => 100, "linkedTo" => "914fab47afc86331ec62837807a29419", "minSize" => 75, "name" => "b068931cc450442b63f5b3d276ea4297", "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "selected" => 0, "shadow" => 1, "showInLegend" => 0, "size" => "f7bd60b75b29d79b660a2859395c1a24", "skipKeyboardNavigation" => 1, "slicedOffset" => 14, "startAngle" => 90, "states" => [], "stickyTracking" => 1, "tooltip" => ["tooltip" => "ddbfc1b6aa0ad4d79c5dac7aa3b44888"], "type" => "waterfall", "visible" => 1, "zIndex" => 0, "zoneAxis" => "88421adabea658556aa3ab6c6181afad", "zones" => ["zones" => "26f94136f5db8afd4e9df1e512f7fdc5"]];
		$this->assertEquals($res46, $obj->toArray());
	}

}
