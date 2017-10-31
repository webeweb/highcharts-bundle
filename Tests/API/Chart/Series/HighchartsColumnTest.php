<?php

/*
 * This file is part of the WBWHighchartsBundle package.
 *
 * (c) 2017 NdC/WBW
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\HighchartsBundle\Tests\API\Chart\Series;

use PHPUnit_Framework_TestCase;

/**
 * Highcharts column test.
 *
 * @author NdC/WBW <https://github.com/webeweb/>
 * @package WBW\Bundle\HighchartsBundle\Tests\API\Chart\Series
 * @version 5.0.14
 */
final class HighchartsColumnTest extends PHPUnit_Framework_TestCase {

	/**
	 * Tests the __construct() method.
	 *
	 * @return void
	 */
	public function testConstructor() {

		$obj1 = new \WBW\Bundle\HighchartsBundle\API\Chart\Series\HighchartsColumn(true);

		$this->assertEquals(null, $obj1->getAllowPointSelect(), "The method getAllowPointSelect() does not return the expected value");
		$this->assertEquals(null, $obj1->getAnimation(), "The method getAnimation() does not return the expected value");
		$this->assertEquals(null, $obj1->getAnimationLimit(), "The method getAnimationLimit() does not return the expected value");
		$this->assertEquals(null, $obj1->getBorderColor(), "The method getBorderColor() does not return the expected value");
		$this->assertEquals(null, $obj1->getBorderRadius(), "The method getBorderRadius() does not return the expected value");
		$this->assertEquals(null, $obj1->getBorderWidth(), "The method getBorderWidth() does not return the expected value");
		$this->assertEquals(null, $obj1->getClassName(), "The method getClassName() does not return the expected value");
		$this->assertEquals(null, $obj1->getColor(), "The method getColor() does not return the expected value");
		$this->assertEquals(null, $obj1->getColorByPoint(), "The method getColorByPoint() does not return the expected value");
		$this->assertEquals(null, $obj1->getColorIndex(), "The method getColorIndex() does not return the expected value");
		$this->assertEquals(null, $obj1->getColors(), "The method getColors() does not return the expected value");
		$this->assertEquals(null, $obj1->getCrisp(), "The method getCrisp() does not return the expected value");
		$this->assertEquals(null, $obj1->getCropThreshold(), "The method getCropThreshold() does not return the expected value");
		$this->assertEquals(null, $obj1->getCursor(), "The method getCursor() does not return the expected value");
		$this->assertEquals(null, $obj1->getData(), "The method getData() does not return the expected value");
		$this->assertEquals(null, $obj1->getDataLabels(), "The method getDataLabels() does not return the expected value");
		$this->assertEquals(null, $obj1->getDepth(), "The method getDepth() does not return the expected value");
		$this->assertEquals(null, $obj1->getDescription(), "The method getDescription() does not return the expected value");
		$this->assertEquals(null, $obj1->getEdgeColor(), "The method getEdgeColor() does not return the expected value");
		$this->assertEquals(null, $obj1->getEdgeWidth(), "The method getEdgeWidth() does not return the expected value");
		$this->assertEquals(null, $obj1->getEnableMouseTracking(), "The method getEnableMouseTracking() does not return the expected value");
		$this->assertEquals(null, $obj1->getEvents(), "The method getEvents() does not return the expected value");
		$this->assertEquals(null, $obj1->getExposeElementToA11y(), "The method getExposeElementToA11y() does not return the expected value");
		$this->assertEquals(null, $obj1->getFindNearestPointBy(), "The method getFindNearestPointBy() does not return the expected value");
		$this->assertEquals(null, $obj1->getGetExtremesFromAll(), "The method getGetExtremesFromAll() does not return the expected value");
		$this->assertEquals(null, $obj1->getGroupPadding(), "The method getGroupPadding() does not return the expected value");
		$this->assertEquals(null, $obj1->getGroupZPadding(), "The method getGroupZPadding() does not return the expected value");
		$this->assertEquals(null, $obj1->getGrouping(), "The method getGrouping() does not return the expected value");
		$this->assertEquals(null, $obj1->getId(), "The method getId() does not return the expected value");
		$this->assertEquals(null, $obj1->getIndex(), "The method getIndex() does not return the expected value");
		$this->assertEquals(null, $obj1->getKeys(), "The method getKeys() does not return the expected value");
		$this->assertEquals(null, $obj1->getLegendIndex(), "The method getLegendIndex() does not return the expected value");
		$this->assertEquals(null, $obj1->getLinkedTo(), "The method getLinkedTo() does not return the expected value");
		$this->assertEquals(null, $obj1->getMaxPointWidth(), "The method getMaxPointWidth() does not return the expected value");
		$this->assertEquals(null, $obj1->getMinPointLength(), "The method getMinPointLength() does not return the expected value");
		$this->assertEquals(null, $obj1->getName(), "The method getName() does not return the expected value");
		$this->assertEquals(null, $obj1->getNegativeColor(), "The method getNegativeColor() does not return the expected value");
		$this->assertEquals(null, $obj1->getPoint(), "The method getPoint() does not return the expected value");
		$this->assertEquals(null, $obj1->getPointDescriptionFormatter(), "The method getPointDescriptionFormatter() does not return the expected value");
		$this->assertEquals(null, $obj1->getPointInterval(), "The method getPointInterval() does not return the expected value");
		$this->assertEquals(null, $obj1->getPointIntervalUnit(), "The method getPointIntervalUnit() does not return the expected value");
		$this->assertEquals(null, $obj1->getPointPadding(), "The method getPointPadding() does not return the expected value");
		$this->assertEquals(null, $obj1->getPointPlacement(), "The method getPointPlacement() does not return the expected value");
		$this->assertEquals(null, $obj1->getPointRange(), "The method getPointRange() does not return the expected value");
		$this->assertEquals(null, $obj1->getPointStart(), "The method getPointStart() does not return the expected value");
		$this->assertEquals(null, $obj1->getPointWidth(), "The method getPointWidth() does not return the expected value");
		$this->assertEquals(null, $obj1->getSelected(), "The method getSelected() does not return the expected value");
		$this->assertEquals(null, $obj1->getShadow(), "The method getShadow() does not return the expected value");
		$this->assertEquals(null, $obj1->getShowCheckbox(), "The method getShowCheckbox() does not return the expected value");
		$this->assertEquals(null, $obj1->getShowInLegend(), "The method getShowInLegend() does not return the expected value");
		$this->assertEquals(null, $obj1->getSkipKeyboardNavigation(), "The method getSkipKeyboardNavigation() does not return the expected value");
		$this->assertEquals(null, $obj1->getSoftThreshold(), "The method getSoftThreshold() does not return the expected value");
		$this->assertEquals(null, $obj1->getStack(), "The method getStack() does not return the expected value");
		$this->assertEquals(null, $obj1->getStacking(), "The method getStacking() does not return the expected value");
		$this->assertEquals(null, $obj1->getStates(), "The method getStates() does not return the expected value");
		$this->assertEquals(null, $obj1->getStickyTracking(), "The method getStickyTracking() does not return the expected value");
		$this->assertEquals(null, $obj1->getThreshold(), "The method getThreshold() does not return the expected value");
		$this->assertEquals(null, $obj1->getTooltip(), "The method getTooltip() does not return the expected value");
		$this->assertEquals(null, $obj1->getTurboThreshold(), "The method getTurboThreshold() does not return the expected value");
		$this->assertEquals(null, $obj1->getType(), "The method getType() does not return the expected value");
		$this->assertEquals(null, $obj1->getVisible(), "The method getVisible() does not return the expected value");
		$this->assertEquals(null, $obj1->getXAxis(), "The method getXAxis() does not return the expected value");
		$this->assertEquals(null, $obj1->getYAxis(), "The method getYAxis() does not return the expected value");
		$this->assertEquals(null, $obj1->getZIndex(), "The method getZIndex() does not return the expected value");
		$this->assertEquals(null, $obj1->getZoneAxis(), "The method getZoneAxis() does not return the expected value");
		$this->assertEquals(null, $obj1->getZones(), "The method getZones() does not return the expected value");

		$obj0 = new \WBW\Bundle\HighchartsBundle\API\Chart\Series\HighchartsColumn(false);

		$this->assertEquals(false, $obj0->getAllowPointSelect(), "The method getAllowPointSelect() does not return the expected value");
		$this->assertEquals(true, $obj0->getAnimation(), "The method getAnimation() does not return the expected value");
		$this->assertEquals(null, $obj0->getAnimationLimit(), "The method getAnimationLimit() does not return the expected value");
		$this->assertEquals("#ffffff", $obj0->getBorderColor(), "The method getBorderColor() does not return the expected value");
		$this->assertEquals(0, $obj0->getBorderRadius(), "The method getBorderRadius() does not return the expected value");
		$this->assertEquals(1, $obj0->getBorderWidth(), "The method getBorderWidth() does not return the expected value");
		$this->assertEquals(null, $obj0->getClassName(), "The method getClassName() does not return the expected value");
		$this->assertEquals(null, $obj0->getColor(), "The method getColor() does not return the expected value");
		$this->assertEquals(false, $obj0->getColorByPoint(), "The method getColorByPoint() does not return the expected value");
		$this->assertEquals(null, $obj0->getColorIndex(), "The method getColorIndex() does not return the expected value");
		$this->assertEquals(null, $obj0->getColors(), "The method getColors() does not return the expected value");
		$this->assertEquals(true, $obj0->getCrisp(), "The method getCrisp() does not return the expected value");
		$this->assertEquals(50, $obj0->getCropThreshold(), "The method getCropThreshold() does not return the expected value");
		$this->assertEquals(null, $obj0->getCursor(), "The method getCursor() does not return the expected value");
		$this->assertEquals(null, $obj0->getData(), "The method getData() does not return the expected value");
		$this->assertEquals(null, $obj0->getDataLabels(), "The method getDataLabels() does not return the expected value");
		$this->assertEquals(25, $obj0->getDepth(), "The method getDepth() does not return the expected value");
		$this->assertEquals(null, $obj0->getDescription(), "The method getDescription() does not return the expected value");
		$this->assertEquals(null, $obj0->getEdgeColor(), "The method getEdgeColor() does not return the expected value");
		$this->assertEquals(1, $obj0->getEdgeWidth(), "The method getEdgeWidth() does not return the expected value");
		$this->assertEquals(true, $obj0->getEnableMouseTracking(), "The method getEnableMouseTracking() does not return the expected value");
		$this->assertEquals(null, $obj0->getEvents(), "The method getEvents() does not return the expected value");
		$this->assertEquals(null, $obj0->getExposeElementToA11y(), "The method getExposeElementToA11y() does not return the expected value");
		$this->assertEquals(null, $obj0->getFindNearestPointBy(), "The method getFindNearestPointBy() does not return the expected value");
		$this->assertEquals(false, $obj0->getGetExtremesFromAll(), "The method getGetExtremesFromAll() does not return the expected value");
		$this->assertEquals(0.2, $obj0->getGroupPadding(), "The method getGroupPadding() does not return the expected value");
		$this->assertEquals(1, $obj0->getGroupZPadding(), "The method getGroupZPadding() does not return the expected value");
		$this->assertEquals(true, $obj0->getGrouping(), "The method getGrouping() does not return the expected value");
		$this->assertEquals(null, $obj0->getId(), "The method getId() does not return the expected value");
		$this->assertEquals(null, $obj0->getIndex(), "The method getIndex() does not return the expected value");
		$this->assertEquals(null, $obj0->getKeys(), "The method getKeys() does not return the expected value");
		$this->assertEquals(null, $obj0->getLegendIndex(), "The method getLegendIndex() does not return the expected value");
		$this->assertEquals(null, $obj0->getLinkedTo(), "The method getLinkedTo() does not return the expected value");
		$this->assertEquals(null, $obj0->getMaxPointWidth(), "The method getMaxPointWidth() does not return the expected value");
		$this->assertEquals(0, $obj0->getMinPointLength(), "The method getMinPointLength() does not return the expected value");
		$this->assertEquals(null, $obj0->getName(), "The method getName() does not return the expected value");
		$this->assertEquals(null, $obj0->getNegativeColor(), "The method getNegativeColor() does not return the expected value");
		$this->assertEquals(null, $obj0->getPoint(), "The method getPoint() does not return the expected value");
		$this->assertEquals(null, $obj0->getPointDescriptionFormatter(), "The method getPointDescriptionFormatter() does not return the expected value");
		$this->assertEquals(1, $obj0->getPointInterval(), "The method getPointInterval() does not return the expected value");
		$this->assertEquals(null, $obj0->getPointIntervalUnit(), "The method getPointIntervalUnit() does not return the expected value");
		$this->assertEquals(0.1, $obj0->getPointPadding(), "The method getPointPadding() does not return the expected value");
		$this->assertEquals(null, $obj0->getPointPlacement(), "The method getPointPlacement() does not return the expected value");
		$this->assertEquals(null, $obj0->getPointRange(), "The method getPointRange() does not return the expected value");
		$this->assertEquals(0, $obj0->getPointStart(), "The method getPointStart() does not return the expected value");
		$this->assertEquals(null, $obj0->getPointWidth(), "The method getPointWidth() does not return the expected value");
		$this->assertEquals(false, $obj0->getSelected(), "The method getSelected() does not return the expected value");
		$this->assertEquals(false, $obj0->getShadow(), "The method getShadow() does not return the expected value");
		$this->assertEquals(false, $obj0->getShowCheckbox(), "The method getShowCheckbox() does not return the expected value");
		$this->assertEquals(true, $obj0->getShowInLegend(), "The method getShowInLegend() does not return the expected value");
		$this->assertEquals(null, $obj0->getSkipKeyboardNavigation(), "The method getSkipKeyboardNavigation() does not return the expected value");
		$this->assertEquals(true, $obj0->getSoftThreshold(), "The method getSoftThreshold() does not return the expected value");
		$this->assertEquals(null, $obj0->getStack(), "The method getStack() does not return the expected value");
		$this->assertEquals(null, $obj0->getStacking(), "The method getStacking() does not return the expected value");
		$this->assertEquals(null, $obj0->getStates(), "The method getStates() does not return the expected value");
		$this->assertEquals(true, $obj0->getStickyTracking(), "The method getStickyTracking() does not return the expected value");
		$this->assertEquals(0, $obj0->getThreshold(), "The method getThreshold() does not return the expected value");
		$this->assertEquals(null, $obj0->getTooltip(), "The method getTooltip() does not return the expected value");
		$this->assertEquals(1000, $obj0->getTurboThreshold(), "The method getTurboThreshold() does not return the expected value");
		$this->assertEquals(null, $obj0->getType(), "The method getType() does not return the expected value");
		$this->assertEquals(true, $obj0->getVisible(), "The method getVisible() does not return the expected value");
		$this->assertEquals("0", $obj0->getXAxis(), "The method getXAxis() does not return the expected value");
		$this->assertEquals("0", $obj0->getYAxis(), "The method getYAxis() does not return the expected value");
		$this->assertEquals(null, $obj0->getZIndex(), "The method getZIndex() does not return the expected value");
		$this->assertEquals("y", $obj0->getZoneAxis(), "The method getZoneAxis() does not return the expected value");
		$this->assertEquals(null, $obj0->getZones(), "The method getZones() does not return the expected value");
    }

	/**
	 * Tests the clear() method.
	 *
	 * @return void
	 */
	public function testClear() {

		$obj = new \WBW\Bundle\HighchartsBundle\API\Chart\Series\HighchartsColumn(false);

		$obj->newDataLabels();
		$obj->newEvents();
		$obj->newPoint();
		$obj->newStates();

		$obj->clear();

		$res = ["dataLabels" => [], "events" => [], "point" => [], "states" => []];
		$this->assertEquals($res, $obj->toArray(), "The method toArray() does not return the expected array");
	}

	/**
	 * Tests the jsonSerialize() method.
	 *
	 * @return void
	 */
	public function testJsonSerialize() {

		$obj = new \WBW\Bundle\HighchartsBundle\API\Chart\Series\HighchartsColumn(true);

		$this->assertEquals([], $obj->jsonSerialize(), "The method jsonSerialize() does not return the expected value");
	}

	/**
	 * Tests the newDataLabels() method.
	 *
	 * @return void.
	 */
	public function testNewDataLabels() {

		$obj = new \WBW\Bundle\HighchartsBundle\API\Chart\Series\HighchartsColumn(false);

		$res = $obj->newDataLabels();
		$this->assertInstanceOf(\WBW\Bundle\HighchartsBundle\API\Chart\Series\Column\HighchartsDataLabels::class, $res, "The method newDataLabels() does not return the expected object");
	}

	/**
	 * Tests the newEvents() method.
	 *
	 * @return void.
	 */
	public function testNewEvents() {

		$obj = new \WBW\Bundle\HighchartsBundle\API\Chart\Series\HighchartsColumn(false);

		$res = $obj->newEvents();
		$this->assertInstanceOf(\WBW\Bundle\HighchartsBundle\API\Chart\Series\Column\HighchartsEvents::class, $res, "The method newEvents() does not return the expected object");
	}

	/**
	 * Tests the newPoint() method.
	 *
	 * @return void.
	 */
	public function testNewPoint() {

		$obj = new \WBW\Bundle\HighchartsBundle\API\Chart\Series\HighchartsColumn(false);

		$res = $obj->newPoint();
		$this->assertInstanceOf(\WBW\Bundle\HighchartsBundle\API\Chart\Series\Column\HighchartsPoint::class, $res, "The method newPoint() does not return the expected object");
	}

	/**
	 * Tests the newStates() method.
	 *
	 * @return void.
	 */
	public function testNewStates() {

		$obj = new \WBW\Bundle\HighchartsBundle\API\Chart\Series\HighchartsColumn(false);

		$res = $obj->newStates();
		$this->assertInstanceOf(\WBW\Bundle\HighchartsBundle\API\Chart\Series\Column\HighchartsStates::class, $res, "The method newStates() does not return the expected object");
	}

	/**
	 * Tests the toArray() method.
	 *
	 * @return void
	 */
	public function testToArray() {

		$obj = new \WBW\Bundle\HighchartsBundle\API\Chart\Series\HighchartsColumn(true);

		$obj->setAllowPointSelect(0);

		$res1 = ["allowPointSelect" => 0];
		$this->assertEquals($res1, $obj->toArray(), "The method toArray() does not return the expected array with allow point select");

		$obj->setAnimation(0);

		$res2 = ["allowPointSelect" => 0, "animation" => 0];
		$this->assertEquals($res2, $obj->toArray(), "The method toArray() does not return the expected array with animation");

		$obj->setAnimationLimit(80);

		$res3 = ["allowPointSelect" => 0, "animation" => 0, "animationLimit" => 80];
		$this->assertEquals($res3, $obj->toArray(), "The method toArray() does not return the expected array with animation limit");

		$obj->setBorderColor("97da935a74593c55d78be9d1295aa994");

		$res4 = ["allowPointSelect" => 0, "animation" => 0, "animationLimit" => 80, "borderColor" => "97da935a74593c55d78be9d1295aa994"];
		$this->assertEquals($res4, $obj->toArray(), "The method toArray() does not return the expected array with border color");

		$obj->setBorderRadius(99);

		$res5 = ["allowPointSelect" => 0, "animation" => 0, "animationLimit" => 80, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 99];
		$this->assertEquals($res5, $obj->toArray(), "The method toArray() does not return the expected array with border radius");

		$obj->setBorderWidth(17);

		$res6 = ["allowPointSelect" => 0, "animation" => 0, "animationLimit" => 80, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 99, "borderWidth" => 17];
		$this->assertEquals($res6, $obj->toArray(), "The method toArray() does not return the expected array with border width");

		$obj->setClassName("6f66e878c62db60568a3487869695820");

		$res7 = ["allowPointSelect" => 0, "animation" => 0, "animationLimit" => 80, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 99, "borderWidth" => 17, "className" => "6f66e878c62db60568a3487869695820"];
		$this->assertEquals($res7, $obj->toArray(), "The method toArray() does not return the expected array with class name");

		$obj->setColor("70dda5dfb8053dc6d1c492574bce9bfd");

		$res8 = ["allowPointSelect" => 0, "animation" => 0, "animationLimit" => 80, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 99, "borderWidth" => 17, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd"];
		$this->assertEquals($res8, $obj->toArray(), "The method toArray() does not return the expected array with color");

		$obj->setColorByPoint(1);

		$res9 = ["allowPointSelect" => 0, "animation" => 0, "animationLimit" => 80, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 99, "borderWidth" => 17, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 1];
		$this->assertEquals($res9, $obj->toArray(), "The method toArray() does not return the expected array with color by point");

		$obj->setColorIndex(78);

		$res10 = ["allowPointSelect" => 0, "animation" => 0, "animationLimit" => 80, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 99, "borderWidth" => 17, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 1, "colorIndex" => 78];
		$this->assertEquals($res10, $obj->toArray(), "The method toArray() does not return the expected array with color index");

		$obj->setColors(["colors" => "62848e3ce5804aa985513a7922ff87b2"]);

		$res11 = ["allowPointSelect" => 0, "animation" => 0, "animationLimit" => 80, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 99, "borderWidth" => 17, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 1, "colorIndex" => 78, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"]];
		$this->assertEquals($res11, $obj->toArray(), "The method toArray() does not return the expected array with colors");

		$obj->setCrisp(0);

		$res12 = ["allowPointSelect" => 0, "animation" => 0, "animationLimit" => 80, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 99, "borderWidth" => 17, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 1, "colorIndex" => 78, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => 0];
		$this->assertEquals($res12, $obj->toArray(), "The method toArray() does not return the expected array with crisp");

		$obj->setCropThreshold(21);

		$res13 = ["allowPointSelect" => 0, "animation" => 0, "animationLimit" => 80, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 99, "borderWidth" => 17, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 1, "colorIndex" => 78, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => 0, "cropThreshold" => 21];
		$this->assertEquals($res13, $obj->toArray(), "The method toArray() does not return the expected array with crop threshold");

		$obj->setCursor("crosshair");

		$res14 = ["allowPointSelect" => 0, "animation" => 0, "animationLimit" => 80, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 99, "borderWidth" => 17, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 1, "colorIndex" => 78, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => 0, "cropThreshold" => 21, "cursor" => "crosshair"];
		$this->assertEquals($res14, $obj->toArray(), "The method toArray() does not return the expected array with cursor");

		$obj->setData(["data" => "8d777f385d3dfec8815d20f7496026dc"]);

		$res15 = ["allowPointSelect" => 0, "animation" => 0, "animationLimit" => 80, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 99, "borderWidth" => 17, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 1, "colorIndex" => 78, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => 0, "cropThreshold" => 21, "cursor" => "crosshair", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"]];
		$this->assertEquals($res15, $obj->toArray(), "The method toArray() does not return the expected array with data");

		$obj->setDataLabels(new \WBW\Bundle\HighchartsBundle\API\Chart\Series\Column\HighchartsDataLabels());

		$res16 = ["allowPointSelect" => 0, "animation" => 0, "animationLimit" => 80, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 99, "borderWidth" => 17, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 1, "colorIndex" => 78, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => 0, "cropThreshold" => 21, "cursor" => "crosshair", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => []];
		$this->assertEquals($res16, $obj->toArray(), "The method toArray() does not return the expected array with data labels");

		$obj->setDepth(52);

		$res17 = ["allowPointSelect" => 0, "animation" => 0, "animationLimit" => 80, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 99, "borderWidth" => 17, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 1, "colorIndex" => 78, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => 0, "cropThreshold" => 21, "cursor" => "crosshair", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => [], "depth" => 52];
		$this->assertEquals($res17, $obj->toArray(), "The method toArray() does not return the expected array with depth");

		$obj->setDescription("67daf92c833c41c95db874e18fcb2786");

		$res18 = ["allowPointSelect" => 0, "animation" => 0, "animationLimit" => 80, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 99, "borderWidth" => 17, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 1, "colorIndex" => 78, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => 0, "cropThreshold" => 21, "cursor" => "crosshair", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => [], "depth" => 52, "description" => "67daf92c833c41c95db874e18fcb2786"];
		$this->assertEquals($res18, $obj->toArray(), "The method toArray() does not return the expected array with description");

		$obj->setEdgeColor("acbab0d2e7e54e5a7a32fc80409601fc");

		$res19 = ["allowPointSelect" => 0, "animation" => 0, "animationLimit" => 80, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 99, "borderWidth" => 17, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 1, "colorIndex" => 78, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => 0, "cropThreshold" => 21, "cursor" => "crosshair", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => [], "depth" => 52, "description" => "67daf92c833c41c95db874e18fcb2786", "edgeColor" => "acbab0d2e7e54e5a7a32fc80409601fc"];
		$this->assertEquals($res19, $obj->toArray(), "The method toArray() does not return the expected array with edge color");

		$obj->setEdgeWidth(60);

		$res20 = ["allowPointSelect" => 0, "animation" => 0, "animationLimit" => 80, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 99, "borderWidth" => 17, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 1, "colorIndex" => 78, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => 0, "cropThreshold" => 21, "cursor" => "crosshair", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => [], "depth" => 52, "description" => "67daf92c833c41c95db874e18fcb2786", "edgeColor" => "acbab0d2e7e54e5a7a32fc80409601fc", "edgeWidth" => 60];
		$this->assertEquals($res20, $obj->toArray(), "The method toArray() does not return the expected array with edge width");

		$obj->setEnableMouseTracking(1);

		$res21 = ["allowPointSelect" => 0, "animation" => 0, "animationLimit" => 80, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 99, "borderWidth" => 17, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 1, "colorIndex" => 78, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => 0, "cropThreshold" => 21, "cursor" => "crosshair", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => [], "depth" => 52, "description" => "67daf92c833c41c95db874e18fcb2786", "edgeColor" => "acbab0d2e7e54e5a7a32fc80409601fc", "edgeWidth" => 60, "enableMouseTracking" => 1];
		$this->assertEquals($res21, $obj->toArray(), "The method toArray() does not return the expected array with enable mouse tracking");

		$obj->setEvents(new \WBW\Bundle\HighchartsBundle\API\Chart\Series\Column\HighchartsEvents());

		$res22 = ["allowPointSelect" => 0, "animation" => 0, "animationLimit" => 80, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 99, "borderWidth" => 17, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 1, "colorIndex" => 78, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => 0, "cropThreshold" => 21, "cursor" => "crosshair", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => [], "depth" => 52, "description" => "67daf92c833c41c95db874e18fcb2786", "edgeColor" => "acbab0d2e7e54e5a7a32fc80409601fc", "edgeWidth" => 60, "enableMouseTracking" => 1, "events" => []];
		$this->assertEquals($res22, $obj->toArray(), "The method toArray() does not return the expected array with events");

		$obj->setExposeElementToA11y(0);

		$res23 = ["allowPointSelect" => 0, "animation" => 0, "animationLimit" => 80, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 99, "borderWidth" => 17, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 1, "colorIndex" => 78, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => 0, "cropThreshold" => 21, "cursor" => "crosshair", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => [], "depth" => 52, "description" => "67daf92c833c41c95db874e18fcb2786", "edgeColor" => "acbab0d2e7e54e5a7a32fc80409601fc", "edgeWidth" => 60, "enableMouseTracking" => 1, "events" => [], "exposeElementToA11y" => 0];
		$this->assertEquals($res23, $obj->toArray(), "The method toArray() does not return the expected array with expose element to a11y");

		$obj->setFindNearestPointBy("xy");

		$res24 = ["allowPointSelect" => 0, "animation" => 0, "animationLimit" => 80, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 99, "borderWidth" => 17, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 1, "colorIndex" => 78, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => 0, "cropThreshold" => 21, "cursor" => "crosshair", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => [], "depth" => 52, "description" => "67daf92c833c41c95db874e18fcb2786", "edgeColor" => "acbab0d2e7e54e5a7a32fc80409601fc", "edgeWidth" => 60, "enableMouseTracking" => 1, "events" => [], "exposeElementToA11y" => 0, "findNearestPointBy" => "xy"];
		$this->assertEquals($res24, $obj->toArray(), "The method toArray() does not return the expected array with find nearest point by");

		$obj->setGetExtremesFromAll(0);

		$res25 = ["allowPointSelect" => 0, "animation" => 0, "animationLimit" => 80, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 99, "borderWidth" => 17, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 1, "colorIndex" => 78, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => 0, "cropThreshold" => 21, "cursor" => "crosshair", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => [], "depth" => 52, "description" => "67daf92c833c41c95db874e18fcb2786", "edgeColor" => "acbab0d2e7e54e5a7a32fc80409601fc", "edgeWidth" => 60, "enableMouseTracking" => 1, "events" => [], "exposeElementToA11y" => 0, "findNearestPointBy" => "xy", "getExtremesFromAll" => 0];
		$this->assertEquals($res25, $obj->toArray(), "The method toArray() does not return the expected array with get extremes from all");

		$obj->setGroupPadding(40);

		$res26 = ["allowPointSelect" => 0, "animation" => 0, "animationLimit" => 80, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 99, "borderWidth" => 17, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 1, "colorIndex" => 78, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => 0, "cropThreshold" => 21, "cursor" => "crosshair", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => [], "depth" => 52, "description" => "67daf92c833c41c95db874e18fcb2786", "edgeColor" => "acbab0d2e7e54e5a7a32fc80409601fc", "edgeWidth" => 60, "enableMouseTracking" => 1, "events" => [], "exposeElementToA11y" => 0, "findNearestPointBy" => "xy", "getExtremesFromAll" => 0, "groupPadding" => 40];
		$this->assertEquals($res26, $obj->toArray(), "The method toArray() does not return the expected array with group padding");

		$obj->setGroupZPadding(50);

		$res27 = ["allowPointSelect" => 0, "animation" => 0, "animationLimit" => 80, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 99, "borderWidth" => 17, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 1, "colorIndex" => 78, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => 0, "cropThreshold" => 21, "cursor" => "crosshair", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => [], "depth" => 52, "description" => "67daf92c833c41c95db874e18fcb2786", "edgeColor" => "acbab0d2e7e54e5a7a32fc80409601fc", "edgeWidth" => 60, "enableMouseTracking" => 1, "events" => [], "exposeElementToA11y" => 0, "findNearestPointBy" => "xy", "getExtremesFromAll" => 0, "groupPadding" => 40, "groupZPadding" => 50];
		$this->assertEquals($res27, $obj->toArray(), "The method toArray() does not return the expected array with group z padding");

		$obj->setGrouping(1);

		$res28 = ["allowPointSelect" => 0, "animation" => 0, "animationLimit" => 80, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 99, "borderWidth" => 17, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 1, "colorIndex" => 78, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => 0, "cropThreshold" => 21, "cursor" => "crosshair", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => [], "depth" => 52, "description" => "67daf92c833c41c95db874e18fcb2786", "edgeColor" => "acbab0d2e7e54e5a7a32fc80409601fc", "edgeWidth" => 60, "enableMouseTracking" => 1, "events" => [], "exposeElementToA11y" => 0, "findNearestPointBy" => "xy", "getExtremesFromAll" => 0, "groupPadding" => 40, "groupZPadding" => 50, "grouping" => 1];
		$this->assertEquals($res28, $obj->toArray(), "The method toArray() does not return the expected array with grouping");

		$obj->setId("b80bb7740288fda1f201890375a60c8f");

		$res29 = ["allowPointSelect" => 0, "animation" => 0, "animationLimit" => 80, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 99, "borderWidth" => 17, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 1, "colorIndex" => 78, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => 0, "cropThreshold" => 21, "cursor" => "crosshair", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => [], "depth" => 52, "description" => "67daf92c833c41c95db874e18fcb2786", "edgeColor" => "acbab0d2e7e54e5a7a32fc80409601fc", "edgeWidth" => 60, "enableMouseTracking" => 1, "events" => [], "exposeElementToA11y" => 0, "findNearestPointBy" => "xy", "getExtremesFromAll" => 0, "groupPadding" => 40, "groupZPadding" => 50, "grouping" => 1, "id" => "b80bb7740288fda1f201890375a60c8f"];
		$this->assertEquals($res29, $obj->toArray(), "The method toArray() does not return the expected array with id");

		$obj->setIndex(20);

		$res30 = ["allowPointSelect" => 0, "animation" => 0, "animationLimit" => 80, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 99, "borderWidth" => 17, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 1, "colorIndex" => 78, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => 0, "cropThreshold" => 21, "cursor" => "crosshair", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => [], "depth" => 52, "description" => "67daf92c833c41c95db874e18fcb2786", "edgeColor" => "acbab0d2e7e54e5a7a32fc80409601fc", "edgeWidth" => 60, "enableMouseTracking" => 1, "events" => [], "exposeElementToA11y" => 0, "findNearestPointBy" => "xy", "getExtremesFromAll" => 0, "groupPadding" => 40, "groupZPadding" => 50, "grouping" => 1, "id" => "b80bb7740288fda1f201890375a60c8f", "index" => 20];
		$this->assertEquals($res30, $obj->toArray(), "The method toArray() does not return the expected array with index");

		$obj->setKeys(["keys" => "14f802e1fba977727845e8872c1743a7"]);

		$res31 = ["allowPointSelect" => 0, "animation" => 0, "animationLimit" => 80, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 99, "borderWidth" => 17, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 1, "colorIndex" => 78, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => 0, "cropThreshold" => 21, "cursor" => "crosshair", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => [], "depth" => 52, "description" => "67daf92c833c41c95db874e18fcb2786", "edgeColor" => "acbab0d2e7e54e5a7a32fc80409601fc", "edgeWidth" => 60, "enableMouseTracking" => 1, "events" => [], "exposeElementToA11y" => 0, "findNearestPointBy" => "xy", "getExtremesFromAll" => 0, "groupPadding" => 40, "groupZPadding" => 50, "grouping" => 1, "id" => "b80bb7740288fda1f201890375a60c8f", "index" => 20, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"]];
		$this->assertEquals($res31, $obj->toArray(), "The method toArray() does not return the expected array with keys");

		$obj->setLegendIndex(2);

		$res32 = ["allowPointSelect" => 0, "animation" => 0, "animationLimit" => 80, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 99, "borderWidth" => 17, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 1, "colorIndex" => 78, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => 0, "cropThreshold" => 21, "cursor" => "crosshair", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => [], "depth" => 52, "description" => "67daf92c833c41c95db874e18fcb2786", "edgeColor" => "acbab0d2e7e54e5a7a32fc80409601fc", "edgeWidth" => 60, "enableMouseTracking" => 1, "events" => [], "exposeElementToA11y" => 0, "findNearestPointBy" => "xy", "getExtremesFromAll" => 0, "groupPadding" => 40, "groupZPadding" => 50, "grouping" => 1, "id" => "b80bb7740288fda1f201890375a60c8f", "index" => 20, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "legendIndex" => 2];
		$this->assertEquals($res32, $obj->toArray(), "The method toArray() does not return the expected array with legend index");

		$obj->setLinkedTo("914fab47afc86331ec62837807a29419");

		$res33 = ["allowPointSelect" => 0, "animation" => 0, "animationLimit" => 80, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 99, "borderWidth" => 17, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 1, "colorIndex" => 78, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => 0, "cropThreshold" => 21, "cursor" => "crosshair", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => [], "depth" => 52, "description" => "67daf92c833c41c95db874e18fcb2786", "edgeColor" => "acbab0d2e7e54e5a7a32fc80409601fc", "edgeWidth" => 60, "enableMouseTracking" => 1, "events" => [], "exposeElementToA11y" => 0, "findNearestPointBy" => "xy", "getExtremesFromAll" => 0, "groupPadding" => 40, "groupZPadding" => 50, "grouping" => 1, "id" => "b80bb7740288fda1f201890375a60c8f", "index" => 20, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "legendIndex" => 2, "linkedTo" => "914fab47afc86331ec62837807a29419"];
		$this->assertEquals($res33, $obj->toArray(), "The method toArray() does not return the expected array with linked to");

		$obj->setMaxPointWidth(74);

		$res34 = ["allowPointSelect" => 0, "animation" => 0, "animationLimit" => 80, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 99, "borderWidth" => 17, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 1, "colorIndex" => 78, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => 0, "cropThreshold" => 21, "cursor" => "crosshair", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => [], "depth" => 52, "description" => "67daf92c833c41c95db874e18fcb2786", "edgeColor" => "acbab0d2e7e54e5a7a32fc80409601fc", "edgeWidth" => 60, "enableMouseTracking" => 1, "events" => [], "exposeElementToA11y" => 0, "findNearestPointBy" => "xy", "getExtremesFromAll" => 0, "groupPadding" => 40, "groupZPadding" => 50, "grouping" => 1, "id" => "b80bb7740288fda1f201890375a60c8f", "index" => 20, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "legendIndex" => 2, "linkedTo" => "914fab47afc86331ec62837807a29419", "maxPointWidth" => 74];
		$this->assertEquals($res34, $obj->toArray(), "The method toArray() does not return the expected array with max point width");

		$obj->setMinPointLength(93);

		$res35 = ["allowPointSelect" => 0, "animation" => 0, "animationLimit" => 80, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 99, "borderWidth" => 17, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 1, "colorIndex" => 78, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => 0, "cropThreshold" => 21, "cursor" => "crosshair", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => [], "depth" => 52, "description" => "67daf92c833c41c95db874e18fcb2786", "edgeColor" => "acbab0d2e7e54e5a7a32fc80409601fc", "edgeWidth" => 60, "enableMouseTracking" => 1, "events" => [], "exposeElementToA11y" => 0, "findNearestPointBy" => "xy", "getExtremesFromAll" => 0, "groupPadding" => 40, "groupZPadding" => 50, "grouping" => 1, "id" => "b80bb7740288fda1f201890375a60c8f", "index" => 20, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "legendIndex" => 2, "linkedTo" => "914fab47afc86331ec62837807a29419", "maxPointWidth" => 74, "minPointLength" => 93];
		$this->assertEquals($res35, $obj->toArray(), "The method toArray() does not return the expected array with min point length");

		$obj->setName("b068931cc450442b63f5b3d276ea4297");

		$res36 = ["allowPointSelect" => 0, "animation" => 0, "animationLimit" => 80, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 99, "borderWidth" => 17, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 1, "colorIndex" => 78, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => 0, "cropThreshold" => 21, "cursor" => "crosshair", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => [], "depth" => 52, "description" => "67daf92c833c41c95db874e18fcb2786", "edgeColor" => "acbab0d2e7e54e5a7a32fc80409601fc", "edgeWidth" => 60, "enableMouseTracking" => 1, "events" => [], "exposeElementToA11y" => 0, "findNearestPointBy" => "xy", "getExtremesFromAll" => 0, "groupPadding" => 40, "groupZPadding" => 50, "grouping" => 1, "id" => "b80bb7740288fda1f201890375a60c8f", "index" => 20, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "legendIndex" => 2, "linkedTo" => "914fab47afc86331ec62837807a29419", "maxPointWidth" => 74, "minPointLength" => 93, "name" => "b068931cc450442b63f5b3d276ea4297"];
		$this->assertEquals($res36, $obj->toArray(), "The method toArray() does not return the expected array with name");

		$obj->setNegativeColor("52fe4d3a854b01e25193b4f35fc2040e");

		$res37 = ["allowPointSelect" => 0, "animation" => 0, "animationLimit" => 80, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 99, "borderWidth" => 17, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 1, "colorIndex" => 78, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => 0, "cropThreshold" => 21, "cursor" => "crosshair", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => [], "depth" => 52, "description" => "67daf92c833c41c95db874e18fcb2786", "edgeColor" => "acbab0d2e7e54e5a7a32fc80409601fc", "edgeWidth" => 60, "enableMouseTracking" => 1, "events" => [], "exposeElementToA11y" => 0, "findNearestPointBy" => "xy", "getExtremesFromAll" => 0, "groupPadding" => 40, "groupZPadding" => 50, "grouping" => 1, "id" => "b80bb7740288fda1f201890375a60c8f", "index" => 20, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "legendIndex" => 2, "linkedTo" => "914fab47afc86331ec62837807a29419", "maxPointWidth" => 74, "minPointLength" => 93, "name" => "b068931cc450442b63f5b3d276ea4297", "negativeColor" => "52fe4d3a854b01e25193b4f35fc2040e"];
		$this->assertEquals($res37, $obj->toArray(), "The method toArray() does not return the expected array with negative color");

		$obj->setPoint(new \WBW\Bundle\HighchartsBundle\API\Chart\Series\Column\HighchartsPoint());

		$res38 = ["allowPointSelect" => 0, "animation" => 0, "animationLimit" => 80, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 99, "borderWidth" => 17, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 1, "colorIndex" => 78, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => 0, "cropThreshold" => 21, "cursor" => "crosshair", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => [], "depth" => 52, "description" => "67daf92c833c41c95db874e18fcb2786", "edgeColor" => "acbab0d2e7e54e5a7a32fc80409601fc", "edgeWidth" => 60, "enableMouseTracking" => 1, "events" => [], "exposeElementToA11y" => 0, "findNearestPointBy" => "xy", "getExtremesFromAll" => 0, "groupPadding" => 40, "groupZPadding" => 50, "grouping" => 1, "id" => "b80bb7740288fda1f201890375a60c8f", "index" => 20, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "legendIndex" => 2, "linkedTo" => "914fab47afc86331ec62837807a29419", "maxPointWidth" => 74, "minPointLength" => 93, "name" => "b068931cc450442b63f5b3d276ea4297", "negativeColor" => "52fe4d3a854b01e25193b4f35fc2040e", "point" => []];
		$this->assertEquals($res38, $obj->toArray(), "The method toArray() does not return the expected array with point");

		$obj->setPointDescriptionFormatter("b5fd0c15b3ca81f726e2c7b93907ba36");

		$res39 = ["allowPointSelect" => 0, "animation" => 0, "animationLimit" => 80, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 99, "borderWidth" => 17, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 1, "colorIndex" => 78, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => 0, "cropThreshold" => 21, "cursor" => "crosshair", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => [], "depth" => 52, "description" => "67daf92c833c41c95db874e18fcb2786", "edgeColor" => "acbab0d2e7e54e5a7a32fc80409601fc", "edgeWidth" => 60, "enableMouseTracking" => 1, "events" => [], "exposeElementToA11y" => 0, "findNearestPointBy" => "xy", "getExtremesFromAll" => 0, "groupPadding" => 40, "groupZPadding" => 50, "grouping" => 1, "id" => "b80bb7740288fda1f201890375a60c8f", "index" => 20, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "legendIndex" => 2, "linkedTo" => "914fab47afc86331ec62837807a29419", "maxPointWidth" => 74, "minPointLength" => 93, "name" => "b068931cc450442b63f5b3d276ea4297", "negativeColor" => "52fe4d3a854b01e25193b4f35fc2040e", "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36"];
		$this->assertEquals($res39, $obj->toArray(), "The method toArray() does not return the expected array with point description formatter");

		$obj->setPointInterval(75);

		$res40 = ["allowPointSelect" => 0, "animation" => 0, "animationLimit" => 80, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 99, "borderWidth" => 17, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 1, "colorIndex" => 78, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => 0, "cropThreshold" => 21, "cursor" => "crosshair", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => [], "depth" => 52, "description" => "67daf92c833c41c95db874e18fcb2786", "edgeColor" => "acbab0d2e7e54e5a7a32fc80409601fc", "edgeWidth" => 60, "enableMouseTracking" => 1, "events" => [], "exposeElementToA11y" => 0, "findNearestPointBy" => "xy", "getExtremesFromAll" => 0, "groupPadding" => 40, "groupZPadding" => 50, "grouping" => 1, "id" => "b80bb7740288fda1f201890375a60c8f", "index" => 20, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "legendIndex" => 2, "linkedTo" => "914fab47afc86331ec62837807a29419", "maxPointWidth" => 74, "minPointLength" => 93, "name" => "b068931cc450442b63f5b3d276ea4297", "negativeColor" => "52fe4d3a854b01e25193b4f35fc2040e", "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "pointInterval" => 75];
		$this->assertEquals($res40, $obj->toArray(), "The method toArray() does not return the expected array with point interval");

		$obj->setPointIntervalUnit("year");

		$res41 = ["allowPointSelect" => 0, "animation" => 0, "animationLimit" => 80, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 99, "borderWidth" => 17, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 1, "colorIndex" => 78, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => 0, "cropThreshold" => 21, "cursor" => "crosshair", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => [], "depth" => 52, "description" => "67daf92c833c41c95db874e18fcb2786", "edgeColor" => "acbab0d2e7e54e5a7a32fc80409601fc", "edgeWidth" => 60, "enableMouseTracking" => 1, "events" => [], "exposeElementToA11y" => 0, "findNearestPointBy" => "xy", "getExtremesFromAll" => 0, "groupPadding" => 40, "groupZPadding" => 50, "grouping" => 1, "id" => "b80bb7740288fda1f201890375a60c8f", "index" => 20, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "legendIndex" => 2, "linkedTo" => "914fab47afc86331ec62837807a29419", "maxPointWidth" => 74, "minPointLength" => 93, "name" => "b068931cc450442b63f5b3d276ea4297", "negativeColor" => "52fe4d3a854b01e25193b4f35fc2040e", "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "pointInterval" => 75, "pointIntervalUnit" => "year"];
		$this->assertEquals($res41, $obj->toArray(), "The method toArray() does not return the expected array with point interval unit");

		$obj->setPointPadding(88);

		$res42 = ["allowPointSelect" => 0, "animation" => 0, "animationLimit" => 80, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 99, "borderWidth" => 17, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 1, "colorIndex" => 78, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => 0, "cropThreshold" => 21, "cursor" => "crosshair", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => [], "depth" => 52, "description" => "67daf92c833c41c95db874e18fcb2786", "edgeColor" => "acbab0d2e7e54e5a7a32fc80409601fc", "edgeWidth" => 60, "enableMouseTracking" => 1, "events" => [], "exposeElementToA11y" => 0, "findNearestPointBy" => "xy", "getExtremesFromAll" => 0, "groupPadding" => 40, "groupZPadding" => 50, "grouping" => 1, "id" => "b80bb7740288fda1f201890375a60c8f", "index" => 20, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "legendIndex" => 2, "linkedTo" => "914fab47afc86331ec62837807a29419", "maxPointWidth" => 74, "minPointLength" => 93, "name" => "b068931cc450442b63f5b3d276ea4297", "negativeColor" => "52fe4d3a854b01e25193b4f35fc2040e", "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "pointInterval" => 75, "pointIntervalUnit" => "year", "pointPadding" => 88];
		$this->assertEquals($res42, $obj->toArray(), "The method toArray() does not return the expected array with point padding");

		$obj->setPointPlacement("between");

		$res43 = ["allowPointSelect" => 0, "animation" => 0, "animationLimit" => 80, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 99, "borderWidth" => 17, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 1, "colorIndex" => 78, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => 0, "cropThreshold" => 21, "cursor" => "crosshair", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => [], "depth" => 52, "description" => "67daf92c833c41c95db874e18fcb2786", "edgeColor" => "acbab0d2e7e54e5a7a32fc80409601fc", "edgeWidth" => 60, "enableMouseTracking" => 1, "events" => [], "exposeElementToA11y" => 0, "findNearestPointBy" => "xy", "getExtremesFromAll" => 0, "groupPadding" => 40, "groupZPadding" => 50, "grouping" => 1, "id" => "b80bb7740288fda1f201890375a60c8f", "index" => 20, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "legendIndex" => 2, "linkedTo" => "914fab47afc86331ec62837807a29419", "maxPointWidth" => 74, "minPointLength" => 93, "name" => "b068931cc450442b63f5b3d276ea4297", "negativeColor" => "52fe4d3a854b01e25193b4f35fc2040e", "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "pointInterval" => 75, "pointIntervalUnit" => "year", "pointPadding" => 88, "pointPlacement" => "between"];
		$this->assertEquals($res43, $obj->toArray(), "The method toArray() does not return the expected array with point placement");

		$obj->setPointRange(80);

		$res44 = ["allowPointSelect" => 0, "animation" => 0, "animationLimit" => 80, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 99, "borderWidth" => 17, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 1, "colorIndex" => 78, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => 0, "cropThreshold" => 21, "cursor" => "crosshair", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => [], "depth" => 52, "description" => "67daf92c833c41c95db874e18fcb2786", "edgeColor" => "acbab0d2e7e54e5a7a32fc80409601fc", "edgeWidth" => 60, "enableMouseTracking" => 1, "events" => [], "exposeElementToA11y" => 0, "findNearestPointBy" => "xy", "getExtremesFromAll" => 0, "groupPadding" => 40, "groupZPadding" => 50, "grouping" => 1, "id" => "b80bb7740288fda1f201890375a60c8f", "index" => 20, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "legendIndex" => 2, "linkedTo" => "914fab47afc86331ec62837807a29419", "maxPointWidth" => 74, "minPointLength" => 93, "name" => "b068931cc450442b63f5b3d276ea4297", "negativeColor" => "52fe4d3a854b01e25193b4f35fc2040e", "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "pointInterval" => 75, "pointIntervalUnit" => "year", "pointPadding" => 88, "pointPlacement" => "between", "pointRange" => 80];
		$this->assertEquals($res44, $obj->toArray(), "The method toArray() does not return the expected array with point range");

		$obj->setPointStart(71);

		$res45 = ["allowPointSelect" => 0, "animation" => 0, "animationLimit" => 80, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 99, "borderWidth" => 17, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 1, "colorIndex" => 78, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => 0, "cropThreshold" => 21, "cursor" => "crosshair", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => [], "depth" => 52, "description" => "67daf92c833c41c95db874e18fcb2786", "edgeColor" => "acbab0d2e7e54e5a7a32fc80409601fc", "edgeWidth" => 60, "enableMouseTracking" => 1, "events" => [], "exposeElementToA11y" => 0, "findNearestPointBy" => "xy", "getExtremesFromAll" => 0, "groupPadding" => 40, "groupZPadding" => 50, "grouping" => 1, "id" => "b80bb7740288fda1f201890375a60c8f", "index" => 20, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "legendIndex" => 2, "linkedTo" => "914fab47afc86331ec62837807a29419", "maxPointWidth" => 74, "minPointLength" => 93, "name" => "b068931cc450442b63f5b3d276ea4297", "negativeColor" => "52fe4d3a854b01e25193b4f35fc2040e", "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "pointInterval" => 75, "pointIntervalUnit" => "year", "pointPadding" => 88, "pointPlacement" => "between", "pointRange" => 80, "pointStart" => 71];
		$this->assertEquals($res45, $obj->toArray(), "The method toArray() does not return the expected array with point start");

		$obj->setPointWidth(72);

		$res46 = ["allowPointSelect" => 0, "animation" => 0, "animationLimit" => 80, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 99, "borderWidth" => 17, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 1, "colorIndex" => 78, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => 0, "cropThreshold" => 21, "cursor" => "crosshair", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => [], "depth" => 52, "description" => "67daf92c833c41c95db874e18fcb2786", "edgeColor" => "acbab0d2e7e54e5a7a32fc80409601fc", "edgeWidth" => 60, "enableMouseTracking" => 1, "events" => [], "exposeElementToA11y" => 0, "findNearestPointBy" => "xy", "getExtremesFromAll" => 0, "groupPadding" => 40, "groupZPadding" => 50, "grouping" => 1, "id" => "b80bb7740288fda1f201890375a60c8f", "index" => 20, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "legendIndex" => 2, "linkedTo" => "914fab47afc86331ec62837807a29419", "maxPointWidth" => 74, "minPointLength" => 93, "name" => "b068931cc450442b63f5b3d276ea4297", "negativeColor" => "52fe4d3a854b01e25193b4f35fc2040e", "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "pointInterval" => 75, "pointIntervalUnit" => "year", "pointPadding" => 88, "pointPlacement" => "between", "pointRange" => 80, "pointStart" => 71, "pointWidth" => 72];
		$this->assertEquals($res46, $obj->toArray(), "The method toArray() does not return the expected array with point width");

		$obj->setSelected(1);

		$res47 = ["allowPointSelect" => 0, "animation" => 0, "animationLimit" => 80, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 99, "borderWidth" => 17, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 1, "colorIndex" => 78, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => 0, "cropThreshold" => 21, "cursor" => "crosshair", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => [], "depth" => 52, "description" => "67daf92c833c41c95db874e18fcb2786", "edgeColor" => "acbab0d2e7e54e5a7a32fc80409601fc", "edgeWidth" => 60, "enableMouseTracking" => 1, "events" => [], "exposeElementToA11y" => 0, "findNearestPointBy" => "xy", "getExtremesFromAll" => 0, "groupPadding" => 40, "groupZPadding" => 50, "grouping" => 1, "id" => "b80bb7740288fda1f201890375a60c8f", "index" => 20, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "legendIndex" => 2, "linkedTo" => "914fab47afc86331ec62837807a29419", "maxPointWidth" => 74, "minPointLength" => 93, "name" => "b068931cc450442b63f5b3d276ea4297", "negativeColor" => "52fe4d3a854b01e25193b4f35fc2040e", "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "pointInterval" => 75, "pointIntervalUnit" => "year", "pointPadding" => 88, "pointPlacement" => "between", "pointRange" => 80, "pointStart" => 71, "pointWidth" => 72, "selected" => 1];
		$this->assertEquals($res47, $obj->toArray(), "The method toArray() does not return the expected array with selected");

		$obj->setShadow(0);

		$res48 = ["allowPointSelect" => 0, "animation" => 0, "animationLimit" => 80, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 99, "borderWidth" => 17, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 1, "colorIndex" => 78, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => 0, "cropThreshold" => 21, "cursor" => "crosshair", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => [], "depth" => 52, "description" => "67daf92c833c41c95db874e18fcb2786", "edgeColor" => "acbab0d2e7e54e5a7a32fc80409601fc", "edgeWidth" => 60, "enableMouseTracking" => 1, "events" => [], "exposeElementToA11y" => 0, "findNearestPointBy" => "xy", "getExtremesFromAll" => 0, "groupPadding" => 40, "groupZPadding" => 50, "grouping" => 1, "id" => "b80bb7740288fda1f201890375a60c8f", "index" => 20, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "legendIndex" => 2, "linkedTo" => "914fab47afc86331ec62837807a29419", "maxPointWidth" => 74, "minPointLength" => 93, "name" => "b068931cc450442b63f5b3d276ea4297", "negativeColor" => "52fe4d3a854b01e25193b4f35fc2040e", "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "pointInterval" => 75, "pointIntervalUnit" => "year", "pointPadding" => 88, "pointPlacement" => "between", "pointRange" => 80, "pointStart" => 71, "pointWidth" => 72, "selected" => 1, "shadow" => 0];
		$this->assertEquals($res48, $obj->toArray(), "The method toArray() does not return the expected array with shadow");

		$obj->setShowCheckbox(0);

		$res49 = ["allowPointSelect" => 0, "animation" => 0, "animationLimit" => 80, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 99, "borderWidth" => 17, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 1, "colorIndex" => 78, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => 0, "cropThreshold" => 21, "cursor" => "crosshair", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => [], "depth" => 52, "description" => "67daf92c833c41c95db874e18fcb2786", "edgeColor" => "acbab0d2e7e54e5a7a32fc80409601fc", "edgeWidth" => 60, "enableMouseTracking" => 1, "events" => [], "exposeElementToA11y" => 0, "findNearestPointBy" => "xy", "getExtremesFromAll" => 0, "groupPadding" => 40, "groupZPadding" => 50, "grouping" => 1, "id" => "b80bb7740288fda1f201890375a60c8f", "index" => 20, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "legendIndex" => 2, "linkedTo" => "914fab47afc86331ec62837807a29419", "maxPointWidth" => 74, "minPointLength" => 93, "name" => "b068931cc450442b63f5b3d276ea4297", "negativeColor" => "52fe4d3a854b01e25193b4f35fc2040e", "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "pointInterval" => 75, "pointIntervalUnit" => "year", "pointPadding" => 88, "pointPlacement" => "between", "pointRange" => 80, "pointStart" => 71, "pointWidth" => 72, "selected" => 1, "shadow" => 0, "showCheckbox" => 0];
		$this->assertEquals($res49, $obj->toArray(), "The method toArray() does not return the expected array with show checkbox");

		$obj->setShowInLegend(1);

		$res50 = ["allowPointSelect" => 0, "animation" => 0, "animationLimit" => 80, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 99, "borderWidth" => 17, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 1, "colorIndex" => 78, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => 0, "cropThreshold" => 21, "cursor" => "crosshair", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => [], "depth" => 52, "description" => "67daf92c833c41c95db874e18fcb2786", "edgeColor" => "acbab0d2e7e54e5a7a32fc80409601fc", "edgeWidth" => 60, "enableMouseTracking" => 1, "events" => [], "exposeElementToA11y" => 0, "findNearestPointBy" => "xy", "getExtremesFromAll" => 0, "groupPadding" => 40, "groupZPadding" => 50, "grouping" => 1, "id" => "b80bb7740288fda1f201890375a60c8f", "index" => 20, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "legendIndex" => 2, "linkedTo" => "914fab47afc86331ec62837807a29419", "maxPointWidth" => 74, "minPointLength" => 93, "name" => "b068931cc450442b63f5b3d276ea4297", "negativeColor" => "52fe4d3a854b01e25193b4f35fc2040e", "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "pointInterval" => 75, "pointIntervalUnit" => "year", "pointPadding" => 88, "pointPlacement" => "between", "pointRange" => 80, "pointStart" => 71, "pointWidth" => 72, "selected" => 1, "shadow" => 0, "showCheckbox" => 0, "showInLegend" => 1];
		$this->assertEquals($res50, $obj->toArray(), "The method toArray() does not return the expected array with show in legend");

		$obj->setSkipKeyboardNavigation(1);

		$res51 = ["allowPointSelect" => 0, "animation" => 0, "animationLimit" => 80, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 99, "borderWidth" => 17, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 1, "colorIndex" => 78, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => 0, "cropThreshold" => 21, "cursor" => "crosshair", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => [], "depth" => 52, "description" => "67daf92c833c41c95db874e18fcb2786", "edgeColor" => "acbab0d2e7e54e5a7a32fc80409601fc", "edgeWidth" => 60, "enableMouseTracking" => 1, "events" => [], "exposeElementToA11y" => 0, "findNearestPointBy" => "xy", "getExtremesFromAll" => 0, "groupPadding" => 40, "groupZPadding" => 50, "grouping" => 1, "id" => "b80bb7740288fda1f201890375a60c8f", "index" => 20, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "legendIndex" => 2, "linkedTo" => "914fab47afc86331ec62837807a29419", "maxPointWidth" => 74, "minPointLength" => 93, "name" => "b068931cc450442b63f5b3d276ea4297", "negativeColor" => "52fe4d3a854b01e25193b4f35fc2040e", "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "pointInterval" => 75, "pointIntervalUnit" => "year", "pointPadding" => 88, "pointPlacement" => "between", "pointRange" => 80, "pointStart" => 71, "pointWidth" => 72, "selected" => 1, "shadow" => 0, "showCheckbox" => 0, "showInLegend" => 1, "skipKeyboardNavigation" => 1];
		$this->assertEquals($res51, $obj->toArray(), "The method toArray() does not return the expected array with skip keyboard navigation");

		$obj->setSoftThreshold(1);

		$res52 = ["allowPointSelect" => 0, "animation" => 0, "animationLimit" => 80, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 99, "borderWidth" => 17, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 1, "colorIndex" => 78, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => 0, "cropThreshold" => 21, "cursor" => "crosshair", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => [], "depth" => 52, "description" => "67daf92c833c41c95db874e18fcb2786", "edgeColor" => "acbab0d2e7e54e5a7a32fc80409601fc", "edgeWidth" => 60, "enableMouseTracking" => 1, "events" => [], "exposeElementToA11y" => 0, "findNearestPointBy" => "xy", "getExtremesFromAll" => 0, "groupPadding" => 40, "groupZPadding" => 50, "grouping" => 1, "id" => "b80bb7740288fda1f201890375a60c8f", "index" => 20, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "legendIndex" => 2, "linkedTo" => "914fab47afc86331ec62837807a29419", "maxPointWidth" => 74, "minPointLength" => 93, "name" => "b068931cc450442b63f5b3d276ea4297", "negativeColor" => "52fe4d3a854b01e25193b4f35fc2040e", "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "pointInterval" => 75, "pointIntervalUnit" => "year", "pointPadding" => 88, "pointPlacement" => "between", "pointRange" => 80, "pointStart" => 71, "pointWidth" => 72, "selected" => 1, "shadow" => 0, "showCheckbox" => 0, "showInLegend" => 1, "skipKeyboardNavigation" => 1, "softThreshold" => 1];
		$this->assertEquals($res52, $obj->toArray(), "The method toArray() does not return the expected array with soft threshold");

		$obj->setStack("fac2a47adace059aff113283a03f6760");

		$res53 = ["allowPointSelect" => 0, "animation" => 0, "animationLimit" => 80, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 99, "borderWidth" => 17, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 1, "colorIndex" => 78, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => 0, "cropThreshold" => 21, "cursor" => "crosshair", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => [], "depth" => 52, "description" => "67daf92c833c41c95db874e18fcb2786", "edgeColor" => "acbab0d2e7e54e5a7a32fc80409601fc", "edgeWidth" => 60, "enableMouseTracking" => 1, "events" => [], "exposeElementToA11y" => 0, "findNearestPointBy" => "xy", "getExtremesFromAll" => 0, "groupPadding" => 40, "groupZPadding" => 50, "grouping" => 1, "id" => "b80bb7740288fda1f201890375a60c8f", "index" => 20, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "legendIndex" => 2, "linkedTo" => "914fab47afc86331ec62837807a29419", "maxPointWidth" => 74, "minPointLength" => 93, "name" => "b068931cc450442b63f5b3d276ea4297", "negativeColor" => "52fe4d3a854b01e25193b4f35fc2040e", "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "pointInterval" => 75, "pointIntervalUnit" => "year", "pointPadding" => 88, "pointPlacement" => "between", "pointRange" => 80, "pointStart" => 71, "pointWidth" => 72, "selected" => 1, "shadow" => 0, "showCheckbox" => 0, "showInLegend" => 1, "skipKeyboardNavigation" => 1, "softThreshold" => 1, "stack" => "fac2a47adace059aff113283a03f6760"];
		$this->assertEquals($res53, $obj->toArray(), "The method toArray() does not return the expected array with stack");

		$obj->setStacking("percent");

		$res54 = ["allowPointSelect" => 0, "animation" => 0, "animationLimit" => 80, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 99, "borderWidth" => 17, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 1, "colorIndex" => 78, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => 0, "cropThreshold" => 21, "cursor" => "crosshair", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => [], "depth" => 52, "description" => "67daf92c833c41c95db874e18fcb2786", "edgeColor" => "acbab0d2e7e54e5a7a32fc80409601fc", "edgeWidth" => 60, "enableMouseTracking" => 1, "events" => [], "exposeElementToA11y" => 0, "findNearestPointBy" => "xy", "getExtremesFromAll" => 0, "groupPadding" => 40, "groupZPadding" => 50, "grouping" => 1, "id" => "b80bb7740288fda1f201890375a60c8f", "index" => 20, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "legendIndex" => 2, "linkedTo" => "914fab47afc86331ec62837807a29419", "maxPointWidth" => 74, "minPointLength" => 93, "name" => "b068931cc450442b63f5b3d276ea4297", "negativeColor" => "52fe4d3a854b01e25193b4f35fc2040e", "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "pointInterval" => 75, "pointIntervalUnit" => "year", "pointPadding" => 88, "pointPlacement" => "between", "pointRange" => 80, "pointStart" => 71, "pointWidth" => 72, "selected" => 1, "shadow" => 0, "showCheckbox" => 0, "showInLegend" => 1, "skipKeyboardNavigation" => 1, "softThreshold" => 1, "stack" => "fac2a47adace059aff113283a03f6760", "stacking" => "percent"];
		$this->assertEquals($res54, $obj->toArray(), "The method toArray() does not return the expected array with stacking");

		$obj->setStates(new \WBW\Bundle\HighchartsBundle\API\Chart\Series\Column\HighchartsStates());

		$res55 = ["allowPointSelect" => 0, "animation" => 0, "animationLimit" => 80, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 99, "borderWidth" => 17, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 1, "colorIndex" => 78, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => 0, "cropThreshold" => 21, "cursor" => "crosshair", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => [], "depth" => 52, "description" => "67daf92c833c41c95db874e18fcb2786", "edgeColor" => "acbab0d2e7e54e5a7a32fc80409601fc", "edgeWidth" => 60, "enableMouseTracking" => 1, "events" => [], "exposeElementToA11y" => 0, "findNearestPointBy" => "xy", "getExtremesFromAll" => 0, "groupPadding" => 40, "groupZPadding" => 50, "grouping" => 1, "id" => "b80bb7740288fda1f201890375a60c8f", "index" => 20, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "legendIndex" => 2, "linkedTo" => "914fab47afc86331ec62837807a29419", "maxPointWidth" => 74, "minPointLength" => 93, "name" => "b068931cc450442b63f5b3d276ea4297", "negativeColor" => "52fe4d3a854b01e25193b4f35fc2040e", "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "pointInterval" => 75, "pointIntervalUnit" => "year", "pointPadding" => 88, "pointPlacement" => "between", "pointRange" => 80, "pointStart" => 71, "pointWidth" => 72, "selected" => 1, "shadow" => 0, "showCheckbox" => 0, "showInLegend" => 1, "skipKeyboardNavigation" => 1, "softThreshold" => 1, "stack" => "fac2a47adace059aff113283a03f6760", "stacking" => "percent", "states" => []];
		$this->assertEquals($res55, $obj->toArray(), "The method toArray() does not return the expected array with states");

		$obj->setStickyTracking(0);

		$res56 = ["allowPointSelect" => 0, "animation" => 0, "animationLimit" => 80, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 99, "borderWidth" => 17, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 1, "colorIndex" => 78, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => 0, "cropThreshold" => 21, "cursor" => "crosshair", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => [], "depth" => 52, "description" => "67daf92c833c41c95db874e18fcb2786", "edgeColor" => "acbab0d2e7e54e5a7a32fc80409601fc", "edgeWidth" => 60, "enableMouseTracking" => 1, "events" => [], "exposeElementToA11y" => 0, "findNearestPointBy" => "xy", "getExtremesFromAll" => 0, "groupPadding" => 40, "groupZPadding" => 50, "grouping" => 1, "id" => "b80bb7740288fda1f201890375a60c8f", "index" => 20, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "legendIndex" => 2, "linkedTo" => "914fab47afc86331ec62837807a29419", "maxPointWidth" => 74, "minPointLength" => 93, "name" => "b068931cc450442b63f5b3d276ea4297", "negativeColor" => "52fe4d3a854b01e25193b4f35fc2040e", "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "pointInterval" => 75, "pointIntervalUnit" => "year", "pointPadding" => 88, "pointPlacement" => "between", "pointRange" => 80, "pointStart" => 71, "pointWidth" => 72, "selected" => 1, "shadow" => 0, "showCheckbox" => 0, "showInLegend" => 1, "skipKeyboardNavigation" => 1, "softThreshold" => 1, "stack" => "fac2a47adace059aff113283a03f6760", "stacking" => "percent", "states" => [], "stickyTracking" => 0];
		$this->assertEquals($res56, $obj->toArray(), "The method toArray() does not return the expected array with sticky tracking");

		$obj->setThreshold(37);

		$res57 = ["allowPointSelect" => 0, "animation" => 0, "animationLimit" => 80, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 99, "borderWidth" => 17, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 1, "colorIndex" => 78, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => 0, "cropThreshold" => 21, "cursor" => "crosshair", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => [], "depth" => 52, "description" => "67daf92c833c41c95db874e18fcb2786", "edgeColor" => "acbab0d2e7e54e5a7a32fc80409601fc", "edgeWidth" => 60, "enableMouseTracking" => 1, "events" => [], "exposeElementToA11y" => 0, "findNearestPointBy" => "xy", "getExtremesFromAll" => 0, "groupPadding" => 40, "groupZPadding" => 50, "grouping" => 1, "id" => "b80bb7740288fda1f201890375a60c8f", "index" => 20, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "legendIndex" => 2, "linkedTo" => "914fab47afc86331ec62837807a29419", "maxPointWidth" => 74, "minPointLength" => 93, "name" => "b068931cc450442b63f5b3d276ea4297", "negativeColor" => "52fe4d3a854b01e25193b4f35fc2040e", "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "pointInterval" => 75, "pointIntervalUnit" => "year", "pointPadding" => 88, "pointPlacement" => "between", "pointRange" => 80, "pointStart" => 71, "pointWidth" => 72, "selected" => 1, "shadow" => 0, "showCheckbox" => 0, "showInLegend" => 1, "skipKeyboardNavigation" => 1, "softThreshold" => 1, "stack" => "fac2a47adace059aff113283a03f6760", "stacking" => "percent", "states" => [], "stickyTracking" => 0, "threshold" => 37];
		$this->assertEquals($res57, $obj->toArray(), "The method toArray() does not return the expected array with threshold");

		$obj->setTooltip(["tooltip" => "ddbfc1b6aa0ad4d79c5dac7aa3b44888"]);

		$res58 = ["allowPointSelect" => 0, "animation" => 0, "animationLimit" => 80, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 99, "borderWidth" => 17, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 1, "colorIndex" => 78, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => 0, "cropThreshold" => 21, "cursor" => "crosshair", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => [], "depth" => 52, "description" => "67daf92c833c41c95db874e18fcb2786", "edgeColor" => "acbab0d2e7e54e5a7a32fc80409601fc", "edgeWidth" => 60, "enableMouseTracking" => 1, "events" => [], "exposeElementToA11y" => 0, "findNearestPointBy" => "xy", "getExtremesFromAll" => 0, "groupPadding" => 40, "groupZPadding" => 50, "grouping" => 1, "id" => "b80bb7740288fda1f201890375a60c8f", "index" => 20, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "legendIndex" => 2, "linkedTo" => "914fab47afc86331ec62837807a29419", "maxPointWidth" => 74, "minPointLength" => 93, "name" => "b068931cc450442b63f5b3d276ea4297", "negativeColor" => "52fe4d3a854b01e25193b4f35fc2040e", "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "pointInterval" => 75, "pointIntervalUnit" => "year", "pointPadding" => 88, "pointPlacement" => "between", "pointRange" => 80, "pointStart" => 71, "pointWidth" => 72, "selected" => 1, "shadow" => 0, "showCheckbox" => 0, "showInLegend" => 1, "skipKeyboardNavigation" => 1, "softThreshold" => 1, "stack" => "fac2a47adace059aff113283a03f6760", "stacking" => "percent", "states" => [], "stickyTracking" => 0, "threshold" => 37, "tooltip" => ["tooltip" => "ddbfc1b6aa0ad4d79c5dac7aa3b44888"]];
		$this->assertEquals($res58, $obj->toArray(), "The method toArray() does not return the expected array with tooltip");

		$obj->setTurboThreshold(52);

		$res59 = ["allowPointSelect" => 0, "animation" => 0, "animationLimit" => 80, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 99, "borderWidth" => 17, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 1, "colorIndex" => 78, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => 0, "cropThreshold" => 21, "cursor" => "crosshair", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => [], "depth" => 52, "description" => "67daf92c833c41c95db874e18fcb2786", "edgeColor" => "acbab0d2e7e54e5a7a32fc80409601fc", "edgeWidth" => 60, "enableMouseTracking" => 1, "events" => [], "exposeElementToA11y" => 0, "findNearestPointBy" => "xy", "getExtremesFromAll" => 0, "groupPadding" => 40, "groupZPadding" => 50, "grouping" => 1, "id" => "b80bb7740288fda1f201890375a60c8f", "index" => 20, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "legendIndex" => 2, "linkedTo" => "914fab47afc86331ec62837807a29419", "maxPointWidth" => 74, "minPointLength" => 93, "name" => "b068931cc450442b63f5b3d276ea4297", "negativeColor" => "52fe4d3a854b01e25193b4f35fc2040e", "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "pointInterval" => 75, "pointIntervalUnit" => "year", "pointPadding" => 88, "pointPlacement" => "between", "pointRange" => 80, "pointStart" => 71, "pointWidth" => 72, "selected" => 1, "shadow" => 0, "showCheckbox" => 0, "showInLegend" => 1, "skipKeyboardNavigation" => 1, "softThreshold" => 1, "stack" => "fac2a47adace059aff113283a03f6760", "stacking" => "percent", "states" => [], "stickyTracking" => 0, "threshold" => 37, "tooltip" => ["tooltip" => "ddbfc1b6aa0ad4d79c5dac7aa3b44888"], "turboThreshold" => 52];
		$this->assertEquals($res59, $obj->toArray(), "The method toArray() does not return the expected array with turbo threshold");

		$obj->setType("waterfall");

		$res60 = ["allowPointSelect" => 0, "animation" => 0, "animationLimit" => 80, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 99, "borderWidth" => 17, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 1, "colorIndex" => 78, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => 0, "cropThreshold" => 21, "cursor" => "crosshair", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => [], "depth" => 52, "description" => "67daf92c833c41c95db874e18fcb2786", "edgeColor" => "acbab0d2e7e54e5a7a32fc80409601fc", "edgeWidth" => 60, "enableMouseTracking" => 1, "events" => [], "exposeElementToA11y" => 0, "findNearestPointBy" => "xy", "getExtremesFromAll" => 0, "groupPadding" => 40, "groupZPadding" => 50, "grouping" => 1, "id" => "b80bb7740288fda1f201890375a60c8f", "index" => 20, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "legendIndex" => 2, "linkedTo" => "914fab47afc86331ec62837807a29419", "maxPointWidth" => 74, "minPointLength" => 93, "name" => "b068931cc450442b63f5b3d276ea4297", "negativeColor" => "52fe4d3a854b01e25193b4f35fc2040e", "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "pointInterval" => 75, "pointIntervalUnit" => "year", "pointPadding" => 88, "pointPlacement" => "between", "pointRange" => 80, "pointStart" => 71, "pointWidth" => 72, "selected" => 1, "shadow" => 0, "showCheckbox" => 0, "showInLegend" => 1, "skipKeyboardNavigation" => 1, "softThreshold" => 1, "stack" => "fac2a47adace059aff113283a03f6760", "stacking" => "percent", "states" => [], "stickyTracking" => 0, "threshold" => 37, "tooltip" => ["tooltip" => "ddbfc1b6aa0ad4d79c5dac7aa3b44888"], "turboThreshold" => 52, "type" => "waterfall"];
		$this->assertEquals($res60, $obj->toArray(), "The method toArray() does not return the expected array with type");

		$obj->setVisible(0);

		$res61 = ["allowPointSelect" => 0, "animation" => 0, "animationLimit" => 80, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 99, "borderWidth" => 17, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 1, "colorIndex" => 78, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => 0, "cropThreshold" => 21, "cursor" => "crosshair", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => [], "depth" => 52, "description" => "67daf92c833c41c95db874e18fcb2786", "edgeColor" => "acbab0d2e7e54e5a7a32fc80409601fc", "edgeWidth" => 60, "enableMouseTracking" => 1, "events" => [], "exposeElementToA11y" => 0, "findNearestPointBy" => "xy", "getExtremesFromAll" => 0, "groupPadding" => 40, "groupZPadding" => 50, "grouping" => 1, "id" => "b80bb7740288fda1f201890375a60c8f", "index" => 20, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "legendIndex" => 2, "linkedTo" => "914fab47afc86331ec62837807a29419", "maxPointWidth" => 74, "minPointLength" => 93, "name" => "b068931cc450442b63f5b3d276ea4297", "negativeColor" => "52fe4d3a854b01e25193b4f35fc2040e", "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "pointInterval" => 75, "pointIntervalUnit" => "year", "pointPadding" => 88, "pointPlacement" => "between", "pointRange" => 80, "pointStart" => 71, "pointWidth" => 72, "selected" => 1, "shadow" => 0, "showCheckbox" => 0, "showInLegend" => 1, "skipKeyboardNavigation" => 1, "softThreshold" => 1, "stack" => "fac2a47adace059aff113283a03f6760", "stacking" => "percent", "states" => [], "stickyTracking" => 0, "threshold" => 37, "tooltip" => ["tooltip" => "ddbfc1b6aa0ad4d79c5dac7aa3b44888"], "turboThreshold" => 52, "type" => "waterfall", "visible" => 0];
		$this->assertEquals($res61, $obj->toArray(), "The method toArray() does not return the expected array with visible");

		$obj->setXAxis(97);

		$res62 = ["allowPointSelect" => 0, "animation" => 0, "animationLimit" => 80, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 99, "borderWidth" => 17, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 1, "colorIndex" => 78, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => 0, "cropThreshold" => 21, "cursor" => "crosshair", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => [], "depth" => 52, "description" => "67daf92c833c41c95db874e18fcb2786", "edgeColor" => "acbab0d2e7e54e5a7a32fc80409601fc", "edgeWidth" => 60, "enableMouseTracking" => 1, "events" => [], "exposeElementToA11y" => 0, "findNearestPointBy" => "xy", "getExtremesFromAll" => 0, "groupPadding" => 40, "groupZPadding" => 50, "grouping" => 1, "id" => "b80bb7740288fda1f201890375a60c8f", "index" => 20, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "legendIndex" => 2, "linkedTo" => "914fab47afc86331ec62837807a29419", "maxPointWidth" => 74, "minPointLength" => 93, "name" => "b068931cc450442b63f5b3d276ea4297", "negativeColor" => "52fe4d3a854b01e25193b4f35fc2040e", "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "pointInterval" => 75, "pointIntervalUnit" => "year", "pointPadding" => 88, "pointPlacement" => "between", "pointRange" => 80, "pointStart" => 71, "pointWidth" => 72, "selected" => 1, "shadow" => 0, "showCheckbox" => 0, "showInLegend" => 1, "skipKeyboardNavigation" => 1, "softThreshold" => 1, "stack" => "fac2a47adace059aff113283a03f6760", "stacking" => "percent", "states" => [], "stickyTracking" => 0, "threshold" => 37, "tooltip" => ["tooltip" => "ddbfc1b6aa0ad4d79c5dac7aa3b44888"], "turboThreshold" => 52, "type" => "waterfall", "visible" => 0, "xAxis" => 97];
		$this->assertEquals($res62, $obj->toArray(), "The method toArray() does not return the expected array with x axis");

		$obj->setYAxis(30);

		$res63 = ["allowPointSelect" => 0, "animation" => 0, "animationLimit" => 80, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 99, "borderWidth" => 17, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 1, "colorIndex" => 78, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => 0, "cropThreshold" => 21, "cursor" => "crosshair", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => [], "depth" => 52, "description" => "67daf92c833c41c95db874e18fcb2786", "edgeColor" => "acbab0d2e7e54e5a7a32fc80409601fc", "edgeWidth" => 60, "enableMouseTracking" => 1, "events" => [], "exposeElementToA11y" => 0, "findNearestPointBy" => "xy", "getExtremesFromAll" => 0, "groupPadding" => 40, "groupZPadding" => 50, "grouping" => 1, "id" => "b80bb7740288fda1f201890375a60c8f", "index" => 20, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "legendIndex" => 2, "linkedTo" => "914fab47afc86331ec62837807a29419", "maxPointWidth" => 74, "minPointLength" => 93, "name" => "b068931cc450442b63f5b3d276ea4297", "negativeColor" => "52fe4d3a854b01e25193b4f35fc2040e", "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "pointInterval" => 75, "pointIntervalUnit" => "year", "pointPadding" => 88, "pointPlacement" => "between", "pointRange" => 80, "pointStart" => 71, "pointWidth" => 72, "selected" => 1, "shadow" => 0, "showCheckbox" => 0, "showInLegend" => 1, "skipKeyboardNavigation" => 1, "softThreshold" => 1, "stack" => "fac2a47adace059aff113283a03f6760", "stacking" => "percent", "states" => [], "stickyTracking" => 0, "threshold" => 37, "tooltip" => ["tooltip" => "ddbfc1b6aa0ad4d79c5dac7aa3b44888"], "turboThreshold" => 52, "type" => "waterfall", "visible" => 0, "xAxis" => 97, "yAxis" => 30];
		$this->assertEquals($res63, $obj->toArray(), "The method toArray() does not return the expected array with y axis");

		$obj->setZIndex(33);

		$res64 = ["allowPointSelect" => 0, "animation" => 0, "animationLimit" => 80, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 99, "borderWidth" => 17, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 1, "colorIndex" => 78, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => 0, "cropThreshold" => 21, "cursor" => "crosshair", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => [], "depth" => 52, "description" => "67daf92c833c41c95db874e18fcb2786", "edgeColor" => "acbab0d2e7e54e5a7a32fc80409601fc", "edgeWidth" => 60, "enableMouseTracking" => 1, "events" => [], "exposeElementToA11y" => 0, "findNearestPointBy" => "xy", "getExtremesFromAll" => 0, "groupPadding" => 40, "groupZPadding" => 50, "grouping" => 1, "id" => "b80bb7740288fda1f201890375a60c8f", "index" => 20, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "legendIndex" => 2, "linkedTo" => "914fab47afc86331ec62837807a29419", "maxPointWidth" => 74, "minPointLength" => 93, "name" => "b068931cc450442b63f5b3d276ea4297", "negativeColor" => "52fe4d3a854b01e25193b4f35fc2040e", "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "pointInterval" => 75, "pointIntervalUnit" => "year", "pointPadding" => 88, "pointPlacement" => "between", "pointRange" => 80, "pointStart" => 71, "pointWidth" => 72, "selected" => 1, "shadow" => 0, "showCheckbox" => 0, "showInLegend" => 1, "skipKeyboardNavigation" => 1, "softThreshold" => 1, "stack" => "fac2a47adace059aff113283a03f6760", "stacking" => "percent", "states" => [], "stickyTracking" => 0, "threshold" => 37, "tooltip" => ["tooltip" => "ddbfc1b6aa0ad4d79c5dac7aa3b44888"], "turboThreshold" => 52, "type" => "waterfall", "visible" => 0, "xAxis" => 97, "yAxis" => 30, "zIndex" => 33];
		$this->assertEquals($res64, $obj->toArray(), "The method toArray() does not return the expected array with z index");

		$obj->setZoneAxis("88421adabea658556aa3ab6c6181afad");

		$res65 = ["allowPointSelect" => 0, "animation" => 0, "animationLimit" => 80, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 99, "borderWidth" => 17, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 1, "colorIndex" => 78, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => 0, "cropThreshold" => 21, "cursor" => "crosshair", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => [], "depth" => 52, "description" => "67daf92c833c41c95db874e18fcb2786", "edgeColor" => "acbab0d2e7e54e5a7a32fc80409601fc", "edgeWidth" => 60, "enableMouseTracking" => 1, "events" => [], "exposeElementToA11y" => 0, "findNearestPointBy" => "xy", "getExtremesFromAll" => 0, "groupPadding" => 40, "groupZPadding" => 50, "grouping" => 1, "id" => "b80bb7740288fda1f201890375a60c8f", "index" => 20, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "legendIndex" => 2, "linkedTo" => "914fab47afc86331ec62837807a29419", "maxPointWidth" => 74, "minPointLength" => 93, "name" => "b068931cc450442b63f5b3d276ea4297", "negativeColor" => "52fe4d3a854b01e25193b4f35fc2040e", "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "pointInterval" => 75, "pointIntervalUnit" => "year", "pointPadding" => 88, "pointPlacement" => "between", "pointRange" => 80, "pointStart" => 71, "pointWidth" => 72, "selected" => 1, "shadow" => 0, "showCheckbox" => 0, "showInLegend" => 1, "skipKeyboardNavigation" => 1, "softThreshold" => 1, "stack" => "fac2a47adace059aff113283a03f6760", "stacking" => "percent", "states" => [], "stickyTracking" => 0, "threshold" => 37, "tooltip" => ["tooltip" => "ddbfc1b6aa0ad4d79c5dac7aa3b44888"], "turboThreshold" => 52, "type" => "waterfall", "visible" => 0, "xAxis" => 97, "yAxis" => 30, "zIndex" => 33, "zoneAxis" => "88421adabea658556aa3ab6c6181afad"];
		$this->assertEquals($res65, $obj->toArray(), "The method toArray() does not return the expected array with zone axis");

		$obj->setZones(["zones" => "26f94136f5db8afd4e9df1e512f7fdc5"]);

		$res66 = ["allowPointSelect" => 0, "animation" => 0, "animationLimit" => 80, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 99, "borderWidth" => 17, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 1, "colorIndex" => 78, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => 0, "cropThreshold" => 21, "cursor" => "crosshair", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => [], "depth" => 52, "description" => "67daf92c833c41c95db874e18fcb2786", "edgeColor" => "acbab0d2e7e54e5a7a32fc80409601fc", "edgeWidth" => 60, "enableMouseTracking" => 1, "events" => [], "exposeElementToA11y" => 0, "findNearestPointBy" => "xy", "getExtremesFromAll" => 0, "groupPadding" => 40, "groupZPadding" => 50, "grouping" => 1, "id" => "b80bb7740288fda1f201890375a60c8f", "index" => 20, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "legendIndex" => 2, "linkedTo" => "914fab47afc86331ec62837807a29419", "maxPointWidth" => 74, "minPointLength" => 93, "name" => "b068931cc450442b63f5b3d276ea4297", "negativeColor" => "52fe4d3a854b01e25193b4f35fc2040e", "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "pointInterval" => 75, "pointIntervalUnit" => "year", "pointPadding" => 88, "pointPlacement" => "between", "pointRange" => 80, "pointStart" => 71, "pointWidth" => 72, "selected" => 1, "shadow" => 0, "showCheckbox" => 0, "showInLegend" => 1, "skipKeyboardNavigation" => 1, "softThreshold" => 1, "stack" => "fac2a47adace059aff113283a03f6760", "stacking" => "percent", "states" => [], "stickyTracking" => 0, "threshold" => 37, "tooltip" => ["tooltip" => "ddbfc1b6aa0ad4d79c5dac7aa3b44888"], "turboThreshold" => 52, "type" => "waterfall", "visible" => 0, "xAxis" => 97, "yAxis" => 30, "zIndex" => 33, "zoneAxis" => "88421adabea658556aa3ab6c6181afad", "zones" => ["zones" => "26f94136f5db8afd4e9df1e512f7fdc5"]];
		$this->assertEquals($res66, $obj->toArray(), "The method toArray() does not return the expected array with zones");
	}

}
