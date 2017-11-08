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
 * Highcharts treemap test.
 *
 * @author NdC/WBW <https://github.com/webeweb/>
 * @package WBW\Bundle\HighchartsBundle\Tests\API\Chart\Series
 * @version 5.0.14
 */
final class HighchartsTreemapTest extends PHPUnit_Framework_TestCase {

	/**
	 * Tests the __construct() method.
	 *
	 * @return void
	 */
	public function testConstructor() {

		$obj1 = new \WBW\Bundle\HighchartsBundle\API\Chart\Series\HighchartsTreemap(true);

		$this->assertEquals(null, $obj1->getAllowDrillToNode(), "The method getAllowDrillToNode() does not return the expected value");
		$this->assertEquals(null, $obj1->getAllowPointSelect(), "The method getAllowPointSelect() does not return the expected value");
		$this->assertEquals(null, $obj1->getAlternateStartingDirection(), "The method getAlternateStartingDirection() does not return the expected value");
		$this->assertEquals(null, $obj1->getAnimation(), "The method getAnimation() does not return the expected value");
		$this->assertEquals(null, $obj1->getAnimationLimit(), "The method getAnimationLimit() does not return the expected value");
		$this->assertEquals(null, $obj1->getBorderColor(), "The method getBorderColor() does not return the expected value");
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
		$this->assertEquals(null, $obj1->getDescription(), "The method getDescription() does not return the expected value");
		$this->assertEquals(null, $obj1->getEnableMouseTracking(), "The method getEnableMouseTracking() does not return the expected value");
		$this->assertEquals(null, $obj1->getEvents(), "The method getEvents() does not return the expected value");
		$this->assertEquals(null, $obj1->getExposeElementToA11y(), "The method getExposeElementToA11y() does not return the expected value");
		$this->assertEquals(null, $obj1->getFindNearestPointBy(), "The method getFindNearestPointBy() does not return the expected value");
		$this->assertEquals(null, $obj1->getGetExtremesFromAll(), "The method getGetExtremesFromAll() does not return the expected value");
		$this->assertEquals(null, $obj1->getId(), "The method getId() does not return the expected value");
		$this->assertEquals(null, $obj1->getIgnoreHiddenPoint(), "The method getIgnoreHiddenPoint() does not return the expected value");
		$this->assertEquals(null, $obj1->getIndex(), "The method getIndex() does not return the expected value");
		$this->assertEquals(null, $obj1->getInteractByLeaf(), "The method getInteractByLeaf() does not return the expected value");
		$this->assertEquals(null, $obj1->getKeys(), "The method getKeys() does not return the expected value");
		$this->assertEquals(null, $obj1->getLayoutAlgorithm(), "The method getLayoutAlgorithm() does not return the expected value");
		$this->assertEquals(null, $obj1->getLayoutStartingDirection(), "The method getLayoutStartingDirection() does not return the expected value");
		$this->assertEquals(null, $obj1->getLegendIndex(), "The method getLegendIndex() does not return the expected value");
		$this->assertEquals(null, $obj1->getLevelIsConstant(), "The method getLevelIsConstant() does not return the expected value");
		$this->assertEquals(null, $obj1->getLevels(), "The method getLevels() does not return the expected value");
		$this->assertEquals(null, $obj1->getLinkedTo(), "The method getLinkedTo() does not return the expected value");
		$this->assertEquals(null, $obj1->getMaxPointWidth(), "The method getMaxPointWidth() does not return the expected value");
		$this->assertEquals(null, $obj1->getName(), "The method getName() does not return the expected value");
		$this->assertEquals(null, $obj1->getOpacity(), "The method getOpacity() does not return the expected value");
		$this->assertEquals(null, $obj1->getPoint(), "The method getPoint() does not return the expected value");
		$this->assertEquals(null, $obj1->getPointDescriptionFormatter(), "The method getPointDescriptionFormatter() does not return the expected value");
		$this->assertEquals(null, $obj1->getSelected(), "The method getSelected() does not return the expected value");
		$this->assertEquals(null, $obj1->getShadow(), "The method getShadow() does not return the expected value");
		$this->assertEquals(null, $obj1->getShowCheckbox(), "The method getShowCheckbox() does not return the expected value");
		$this->assertEquals(null, $obj1->getShowInLegend(), "The method getShowInLegend() does not return the expected value");
		$this->assertEquals(null, $obj1->getSkipKeyboardNavigation(), "The method getSkipKeyboardNavigation() does not return the expected value");
		$this->assertEquals(null, $obj1->getSortIndex(), "The method getSortIndex() does not return the expected value");
		$this->assertEquals(null, $obj1->getStates(), "The method getStates() does not return the expected value");
		$this->assertEquals(null, $obj1->getStickyTracking(), "The method getStickyTracking() does not return the expected value");
		$this->assertEquals(null, $obj1->getTooltip(), "The method getTooltip() does not return the expected value");
		$this->assertEquals(null, $obj1->getTurboThreshold(), "The method getTurboThreshold() does not return the expected value");
		$this->assertEquals(null, $obj1->getType(), "The method getType() does not return the expected value");
		$this->assertEquals(null, $obj1->getVisible(), "The method getVisible() does not return the expected value");
		$this->assertEquals(null, $obj1->getXAxis(), "The method getXAxis() does not return the expected value");
		$this->assertEquals(null, $obj1->getYAxis(), "The method getYAxis() does not return the expected value");
		$this->assertEquals(null, $obj1->getZIndex(), "The method getZIndex() does not return the expected value");
		$this->assertEquals(null, $obj1->getZoneAxis(), "The method getZoneAxis() does not return the expected value");
		$this->assertEquals(null, $obj1->getZones(), "The method getZones() does not return the expected value");

		$obj0 = new \WBW\Bundle\HighchartsBundle\API\Chart\Series\HighchartsTreemap(false);

		$this->assertEquals(false, $obj0->getAllowDrillToNode(), "The method getAllowDrillToNode() does not return the expected value");
		$this->assertEquals(false, $obj0->getAllowPointSelect(), "The method getAllowPointSelect() does not return the expected value");
		$this->assertEquals(false, $obj0->getAlternateStartingDirection(), "The method getAlternateStartingDirection() does not return the expected value");
		$this->assertEquals(true, $obj0->getAnimation(), "The method getAnimation() does not return the expected value");
		$this->assertEquals(null, $obj0->getAnimationLimit(), "The method getAnimationLimit() does not return the expected value");
		$this->assertEquals("#e6e6e6", $obj0->getBorderColor(), "The method getBorderColor() does not return the expected value");
		$this->assertEquals(1, $obj0->getBorderWidth(), "The method getBorderWidth() does not return the expected value");
		$this->assertEquals(null, $obj0->getClassName(), "The method getClassName() does not return the expected value");
		$this->assertEquals(null, $obj0->getColor(), "The method getColor() does not return the expected value");
		$this->assertEquals(false, $obj0->getColorByPoint(), "The method getColorByPoint() does not return the expected value");
		$this->assertEquals(null, $obj0->getColorIndex(), "The method getColorIndex() does not return the expected value");
		$this->assertEquals(null, $obj0->getColors(), "The method getColors() does not return the expected value");
		$this->assertEquals(true, $obj0->getCrisp(), "The method getCrisp() does not return the expected value");
		$this->assertEquals(300, $obj0->getCropThreshold(), "The method getCropThreshold() does not return the expected value");
		$this->assertEquals(null, $obj0->getCursor(), "The method getCursor() does not return the expected value");
		$this->assertEquals(null, $obj0->getData(), "The method getData() does not return the expected value");
		$this->assertEquals(null, $obj0->getDataLabels(), "The method getDataLabels() does not return the expected value");
		$this->assertEquals(null, $obj0->getDescription(), "The method getDescription() does not return the expected value");
		$this->assertEquals(true, $obj0->getEnableMouseTracking(), "The method getEnableMouseTracking() does not return the expected value");
		$this->assertEquals(null, $obj0->getEvents(), "The method getEvents() does not return the expected value");
		$this->assertEquals(null, $obj0->getExposeElementToA11y(), "The method getExposeElementToA11y() does not return the expected value");
		$this->assertEquals(null, $obj0->getFindNearestPointBy(), "The method getFindNearestPointBy() does not return the expected value");
		$this->assertEquals(false, $obj0->getGetExtremesFromAll(), "The method getGetExtremesFromAll() does not return the expected value");
		$this->assertEquals(null, $obj0->getId(), "The method getId() does not return the expected value");
		$this->assertEquals(true, $obj0->getIgnoreHiddenPoint(), "The method getIgnoreHiddenPoint() does not return the expected value");
		$this->assertEquals(null, $obj0->getIndex(), "The method getIndex() does not return the expected value");
		$this->assertEquals(null, $obj0->getInteractByLeaf(), "The method getInteractByLeaf() does not return the expected value");
		$this->assertEquals(null, $obj0->getKeys(), "The method getKeys() does not return the expected value");
		$this->assertEquals("sliceAndDice", $obj0->getLayoutAlgorithm(), "The method getLayoutAlgorithm() does not return the expected value");
		$this->assertEquals("vertical", $obj0->getLayoutStartingDirection(), "The method getLayoutStartingDirection() does not return the expected value");
		$this->assertEquals(null, $obj0->getLegendIndex(), "The method getLegendIndex() does not return the expected value");
		$this->assertEquals(true, $obj0->getLevelIsConstant(), "The method getLevelIsConstant() does not return the expected value");
		$this->assertEquals(null, $obj0->getLevels(), "The method getLevels() does not return the expected value");
		$this->assertEquals(null, $obj0->getLinkedTo(), "The method getLinkedTo() does not return the expected value");
		$this->assertEquals(null, $obj0->getMaxPointWidth(), "The method getMaxPointWidth() does not return the expected value");
		$this->assertEquals(null, $obj0->getName(), "The method getName() does not return the expected value");
		$this->assertEquals(0.15, $obj0->getOpacity(), "The method getOpacity() does not return the expected value");
		$this->assertEquals(null, $obj0->getPoint(), "The method getPoint() does not return the expected value");
		$this->assertEquals(null, $obj0->getPointDescriptionFormatter(), "The method getPointDescriptionFormatter() does not return the expected value");
		$this->assertEquals(false, $obj0->getSelected(), "The method getSelected() does not return the expected value");
		$this->assertEquals(false, $obj0->getShadow(), "The method getShadow() does not return the expected value");
		$this->assertEquals(false, $obj0->getShowCheckbox(), "The method getShowCheckbox() does not return the expected value");
		$this->assertEquals(false, $obj0->getShowInLegend(), "The method getShowInLegend() does not return the expected value");
		$this->assertEquals(null, $obj0->getSkipKeyboardNavigation(), "The method getSkipKeyboardNavigation() does not return the expected value");
		$this->assertEquals(null, $obj0->getSortIndex(), "The method getSortIndex() does not return the expected value");
		$this->assertEquals(null, $obj0->getStates(), "The method getStates() does not return the expected value");
		$this->assertEquals(true, $obj0->getStickyTracking(), "The method getStickyTracking() does not return the expected value");
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

		$obj = new \WBW\Bundle\HighchartsBundle\API\Chart\Series\HighchartsTreemap(false);

		$obj->newDataLabels();
		$obj->newEvents();
		$obj->newPoint();
		$obj->newStates();
		$obj->newTooltip();

		$obj->clear();

		$res = ["dataLabels" => [], "events" => [], "point" => [], "states" => [], "tooltip" => []];
		$this->assertEquals($res, $obj->toArray(), "The method toArray() does not return the expected array");
	}

	/**
	 * Tests the jsonSerialize() method.
	 *
	 * @return void
	 */
	public function testJsonSerialize() {

		$obj = new \WBW\Bundle\HighchartsBundle\API\Chart\Series\HighchartsTreemap(true);

		$this->assertEquals([], $obj->jsonSerialize(), "The method jsonSerialize() does not return the expected value");
	}

	/**
	 * Tests the newDataLabels() method.
	 *
	 * @return void.
	 */
	public function testNewDataLabels() {

		$obj = new \WBW\Bundle\HighchartsBundle\API\Chart\Series\HighchartsTreemap(false);

		$res = $obj->newDataLabels();
		$this->assertInstanceOf(\WBW\Bundle\HighchartsBundle\API\Chart\Series\Treemap\HighchartsDataLabels::class, $res, "The method newDataLabels() does not return the expected object");
	}

	/**
	 * Tests the newEvents() method.
	 *
	 * @return void.
	 */
	public function testNewEvents() {

		$obj = new \WBW\Bundle\HighchartsBundle\API\Chart\Series\HighchartsTreemap(false);

		$res = $obj->newEvents();
		$this->assertInstanceOf(\WBW\Bundle\HighchartsBundle\API\Chart\Series\Treemap\HighchartsEvents::class, $res, "The method newEvents() does not return the expected object");
	}

	/**
	 * Tests the newPoint() method.
	 *
	 * @return void.
	 */
	public function testNewPoint() {

		$obj = new \WBW\Bundle\HighchartsBundle\API\Chart\Series\HighchartsTreemap(false);

		$res = $obj->newPoint();
		$this->assertInstanceOf(\WBW\Bundle\HighchartsBundle\API\Chart\Series\Treemap\HighchartsPoint::class, $res, "The method newPoint() does not return the expected object");
	}

	/**
	 * Tests the newStates() method.
	 *
	 * @return void.
	 */
	public function testNewStates() {

		$obj = new \WBW\Bundle\HighchartsBundle\API\Chart\Series\HighchartsTreemap(false);

		$res = $obj->newStates();
		$this->assertInstanceOf(\WBW\Bundle\HighchartsBundle\API\Chart\Series\Treemap\HighchartsStates::class, $res, "The method newStates() does not return the expected object");
	}

	/**
	 * Tests the newTooltip() method.
	 *
	 * @return void.
	 */
	public function testNewTooltip() {

		$obj = new \WBW\Bundle\HighchartsBundle\API\Chart\Series\HighchartsTreemap(false);

		$res = $obj->newTooltip();
		$this->assertInstanceOf(\WBW\Bundle\HighchartsBundle\API\Chart\Series\Treemap\HighchartsTooltip::class, $res, "The method newTooltip() does not return the expected object");
	}

	/**
	 * Tests the toArray() method.
	 *
	 * @return void
	 */
	public function testToArray() {

		$obj = new \WBW\Bundle\HighchartsBundle\API\Chart\Series\HighchartsTreemap(true);

		$obj->setAllowDrillToNode("true");

		$res1 = ["allowDrillToNode" => "true"];
		$this->assertEquals($res1, $obj->toArray(), "The method toArray() does not return the expected array with allow drill to node");

		$obj->setAllowPointSelect(1);

		$res2 = ["allowDrillToNode" => "true", "allowPointSelect" => 1];
		$this->assertEquals($res2, $obj->toArray(), "The method toArray() does not return the expected array with allow point select");

		$obj->setAlternateStartingDirection(1);

		$res3 = ["allowDrillToNode" => "true", "allowPointSelect" => 1, "alternateStartingDirection" => 1];
		$this->assertEquals($res3, $obj->toArray(), "The method toArray() does not return the expected array with alternate starting direction");

		$obj->setAnimation(0);

		$res4 = ["allowDrillToNode" => "true", "allowPointSelect" => 1, "alternateStartingDirection" => 1, "animation" => 0];
		$this->assertEquals($res4, $obj->toArray(), "The method toArray() does not return the expected array with animation");

		$obj->setAnimationLimit(13);

		$res5 = ["allowDrillToNode" => "true", "allowPointSelect" => 1, "alternateStartingDirection" => 1, "animation" => 0, "animationLimit" => 13];
		$this->assertEquals($res5, $obj->toArray(), "The method toArray() does not return the expected array with animation limit");

		$obj->setBorderColor("97da935a74593c55d78be9d1295aa994");

		$res6 = ["allowDrillToNode" => "true", "allowPointSelect" => 1, "alternateStartingDirection" => 1, "animation" => 0, "animationLimit" => 13, "borderColor" => "97da935a74593c55d78be9d1295aa994"];
		$this->assertEquals($res6, $obj->toArray(), "The method toArray() does not return the expected array with border color");

		$obj->setBorderWidth(84);

		$res7 = ["allowDrillToNode" => "true", "allowPointSelect" => 1, "alternateStartingDirection" => 1, "animation" => 0, "animationLimit" => 13, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderWidth" => 84];
		$this->assertEquals($res7, $obj->toArray(), "The method toArray() does not return the expected array with border width");

		$obj->setClassName("6f66e878c62db60568a3487869695820");

		$res8 = ["allowDrillToNode" => "true", "allowPointSelect" => 1, "alternateStartingDirection" => 1, "animation" => 0, "animationLimit" => 13, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderWidth" => 84, "className" => "6f66e878c62db60568a3487869695820"];
		$this->assertEquals($res8, $obj->toArray(), "The method toArray() does not return the expected array with class name");

		$obj->setColor("70dda5dfb8053dc6d1c492574bce9bfd");

		$res9 = ["allowDrillToNode" => "true", "allowPointSelect" => 1, "alternateStartingDirection" => 1, "animation" => 0, "animationLimit" => 13, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderWidth" => 84, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd"];
		$this->assertEquals($res9, $obj->toArray(), "The method toArray() does not return the expected array with color");

		$obj->setColorByPoint(1);

		$res10 = ["allowDrillToNode" => "true", "allowPointSelect" => 1, "alternateStartingDirection" => 1, "animation" => 0, "animationLimit" => 13, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderWidth" => 84, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 1];
		$this->assertEquals($res10, $obj->toArray(), "The method toArray() does not return the expected array with color by point");

		$obj->setColorIndex(51);

		$res11 = ["allowDrillToNode" => "true", "allowPointSelect" => 1, "alternateStartingDirection" => 1, "animation" => 0, "animationLimit" => 13, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderWidth" => 84, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 1, "colorIndex" => 51];
		$this->assertEquals($res11, $obj->toArray(), "The method toArray() does not return the expected array with color index");

		$obj->setColors(["colors" => "62848e3ce5804aa985513a7922ff87b2"]);

		$res12 = ["allowDrillToNode" => "true", "allowPointSelect" => 1, "alternateStartingDirection" => 1, "animation" => 0, "animationLimit" => 13, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderWidth" => 84, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 1, "colorIndex" => 51, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"]];
		$this->assertEquals($res12, $obj->toArray(), "The method toArray() does not return the expected array with colors");

		$obj->setCrisp(1);

		$res13 = ["allowDrillToNode" => "true", "allowPointSelect" => 1, "alternateStartingDirection" => 1, "animation" => 0, "animationLimit" => 13, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderWidth" => 84, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 1, "colorIndex" => 51, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => 1];
		$this->assertEquals($res13, $obj->toArray(), "The method toArray() does not return the expected array with crisp");

		$obj->setCropThreshold(11);

		$res14 = ["allowDrillToNode" => "true", "allowPointSelect" => 1, "alternateStartingDirection" => 1, "animation" => 0, "animationLimit" => 13, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderWidth" => 84, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 1, "colorIndex" => 51, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => 1, "cropThreshold" => 11];
		$this->assertEquals($res14, $obj->toArray(), "The method toArray() does not return the expected array with crop threshold");

		$obj->setCursor("crosshair");

		$res15 = ["allowDrillToNode" => "true", "allowPointSelect" => 1, "alternateStartingDirection" => 1, "animation" => 0, "animationLimit" => 13, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderWidth" => 84, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 1, "colorIndex" => 51, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => 1, "cropThreshold" => 11, "cursor" => "crosshair"];
		$this->assertEquals($res15, $obj->toArray(), "The method toArray() does not return the expected array with cursor");

		$obj->setData(["data" => "8d777f385d3dfec8815d20f7496026dc"]);

		$res16 = ["allowDrillToNode" => "true", "allowPointSelect" => 1, "alternateStartingDirection" => 1, "animation" => 0, "animationLimit" => 13, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderWidth" => 84, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 1, "colorIndex" => 51, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => 1, "cropThreshold" => 11, "cursor" => "crosshair", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"]];
		$this->assertEquals($res16, $obj->toArray(), "The method toArray() does not return the expected array with data");

		$obj->setDataLabels(new \WBW\Bundle\HighchartsBundle\API\Chart\Series\Treemap\HighchartsDataLabels());

		$res17 = ["allowDrillToNode" => "true", "allowPointSelect" => 1, "alternateStartingDirection" => 1, "animation" => 0, "animationLimit" => 13, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderWidth" => 84, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 1, "colorIndex" => 51, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => 1, "cropThreshold" => 11, "cursor" => "crosshair", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => []];
		$this->assertEquals($res17, $obj->toArray(), "The method toArray() does not return the expected array with data labels");

		$obj->setDescription("67daf92c833c41c95db874e18fcb2786");

		$res18 = ["allowDrillToNode" => "true", "allowPointSelect" => 1, "alternateStartingDirection" => 1, "animation" => 0, "animationLimit" => 13, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderWidth" => 84, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 1, "colorIndex" => 51, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => 1, "cropThreshold" => 11, "cursor" => "crosshair", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786"];
		$this->assertEquals($res18, $obj->toArray(), "The method toArray() does not return the expected array with description");

		$obj->setEnableMouseTracking(1);

		$res19 = ["allowDrillToNode" => "true", "allowPointSelect" => 1, "alternateStartingDirection" => 1, "animation" => 0, "animationLimit" => 13, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderWidth" => 84, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 1, "colorIndex" => 51, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => 1, "cropThreshold" => 11, "cursor" => "crosshair", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 1];
		$this->assertEquals($res19, $obj->toArray(), "The method toArray() does not return the expected array with enable mouse tracking");

		$obj->setEvents(new \WBW\Bundle\HighchartsBundle\API\Chart\Series\Treemap\HighchartsEvents());

		$res20 = ["allowDrillToNode" => "true", "allowPointSelect" => 1, "alternateStartingDirection" => 1, "animation" => 0, "animationLimit" => 13, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderWidth" => 84, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 1, "colorIndex" => 51, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => 1, "cropThreshold" => 11, "cursor" => "crosshair", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 1, "events" => []];
		$this->assertEquals($res20, $obj->toArray(), "The method toArray() does not return the expected array with events");

		$obj->setExposeElementToA11y(1);

		$res21 = ["allowDrillToNode" => "true", "allowPointSelect" => 1, "alternateStartingDirection" => 1, "animation" => 0, "animationLimit" => 13, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderWidth" => 84, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 1, "colorIndex" => 51, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => 1, "cropThreshold" => 11, "cursor" => "crosshair", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 1, "events" => [], "exposeElementToA11y" => 1];
		$this->assertEquals($res21, $obj->toArray(), "The method toArray() does not return the expected array with expose element to a11y");

		$obj->setFindNearestPointBy("xy");

		$res22 = ["allowDrillToNode" => "true", "allowPointSelect" => 1, "alternateStartingDirection" => 1, "animation" => 0, "animationLimit" => 13, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderWidth" => 84, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 1, "colorIndex" => 51, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => 1, "cropThreshold" => 11, "cursor" => "crosshair", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 1, "events" => [], "exposeElementToA11y" => 1, "findNearestPointBy" => "xy"];
		$this->assertEquals($res22, $obj->toArray(), "The method toArray() does not return the expected array with find nearest point by");

		$obj->setGetExtremesFromAll(1);

		$res23 = ["allowDrillToNode" => "true", "allowPointSelect" => 1, "alternateStartingDirection" => 1, "animation" => 0, "animationLimit" => 13, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderWidth" => 84, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 1, "colorIndex" => 51, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => 1, "cropThreshold" => 11, "cursor" => "crosshair", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 1, "events" => [], "exposeElementToA11y" => 1, "findNearestPointBy" => "xy", "getExtremesFromAll" => 1];
		$this->assertEquals($res23, $obj->toArray(), "The method toArray() does not return the expected array with get extremes from all");

		$obj->setId("b80bb7740288fda1f201890375a60c8f");

		$res24 = ["allowDrillToNode" => "true", "allowPointSelect" => 1, "alternateStartingDirection" => 1, "animation" => 0, "animationLimit" => 13, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderWidth" => 84, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 1, "colorIndex" => 51, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => 1, "cropThreshold" => 11, "cursor" => "crosshair", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 1, "events" => [], "exposeElementToA11y" => 1, "findNearestPointBy" => "xy", "getExtremesFromAll" => 1, "id" => "b80bb7740288fda1f201890375a60c8f"];
		$this->assertEquals($res24, $obj->toArray(), "The method toArray() does not return the expected array with id");

		$obj->setIgnoreHiddenPoint(1);

		$res25 = ["allowDrillToNode" => "true", "allowPointSelect" => 1, "alternateStartingDirection" => 1, "animation" => 0, "animationLimit" => 13, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderWidth" => 84, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 1, "colorIndex" => 51, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => 1, "cropThreshold" => 11, "cursor" => "crosshair", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 1, "events" => [], "exposeElementToA11y" => 1, "findNearestPointBy" => "xy", "getExtremesFromAll" => 1, "id" => "b80bb7740288fda1f201890375a60c8f", "ignoreHiddenPoint" => 1];
		$this->assertEquals($res25, $obj->toArray(), "The method toArray() does not return the expected array with ignore hidden point");

		$obj->setIndex(2);

		$res26 = ["allowDrillToNode" => "true", "allowPointSelect" => 1, "alternateStartingDirection" => 1, "animation" => 0, "animationLimit" => 13, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderWidth" => 84, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 1, "colorIndex" => 51, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => 1, "cropThreshold" => 11, "cursor" => "crosshair", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 1, "events" => [], "exposeElementToA11y" => 1, "findNearestPointBy" => "xy", "getExtremesFromAll" => 1, "id" => "b80bb7740288fda1f201890375a60c8f", "ignoreHiddenPoint" => 1, "index" => 2];
		$this->assertEquals($res26, $obj->toArray(), "The method toArray() does not return the expected array with index");

		$obj->setInteractByLeaf(true);

		$res27 = ["allowDrillToNode" => "true", "allowPointSelect" => 1, "alternateStartingDirection" => 1, "animation" => 0, "animationLimit" => 13, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderWidth" => 84, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 1, "colorIndex" => 51, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => 1, "cropThreshold" => 11, "cursor" => "crosshair", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 1, "events" => [], "exposeElementToA11y" => 1, "findNearestPointBy" => "xy", "getExtremesFromAll" => 1, "id" => "b80bb7740288fda1f201890375a60c8f", "ignoreHiddenPoint" => 1, "index" => 2, "interactByLeaf" => true];
		$this->assertEquals($res27, $obj->toArray(), "The method toArray() does not return the expected array with interact by leaf");

		$obj->setKeys(["keys" => "14f802e1fba977727845e8872c1743a7"]);

		$res28 = ["allowDrillToNode" => "true", "allowPointSelect" => 1, "alternateStartingDirection" => 1, "animation" => 0, "animationLimit" => 13, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderWidth" => 84, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 1, "colorIndex" => 51, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => 1, "cropThreshold" => 11, "cursor" => "crosshair", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 1, "events" => [], "exposeElementToA11y" => 1, "findNearestPointBy" => "xy", "getExtremesFromAll" => 1, "id" => "b80bb7740288fda1f201890375a60c8f", "ignoreHiddenPoint" => 1, "index" => 2, "interactByLeaf" => true, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"]];
		$this->assertEquals($res28, $obj->toArray(), "The method toArray() does not return the expected array with keys");

		$obj->setLayoutAlgorithm("strip");

		$res29 = ["allowDrillToNode" => "true", "allowPointSelect" => 1, "alternateStartingDirection" => 1, "animation" => 0, "animationLimit" => 13, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderWidth" => 84, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 1, "colorIndex" => 51, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => 1, "cropThreshold" => 11, "cursor" => "crosshair", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 1, "events" => [], "exposeElementToA11y" => 1, "findNearestPointBy" => "xy", "getExtremesFromAll" => 1, "id" => "b80bb7740288fda1f201890375a60c8f", "ignoreHiddenPoint" => 1, "index" => 2, "interactByLeaf" => true, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "layoutAlgorithm" => "strip"];
		$this->assertEquals($res29, $obj->toArray(), "The method toArray() does not return the expected array with layout algorithm");

		$obj->setLayoutStartingDirection("horizontal");

		$res30 = ["allowDrillToNode" => "true", "allowPointSelect" => 1, "alternateStartingDirection" => 1, "animation" => 0, "animationLimit" => 13, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderWidth" => 84, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 1, "colorIndex" => 51, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => 1, "cropThreshold" => 11, "cursor" => "crosshair", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 1, "events" => [], "exposeElementToA11y" => 1, "findNearestPointBy" => "xy", "getExtremesFromAll" => 1, "id" => "b80bb7740288fda1f201890375a60c8f", "ignoreHiddenPoint" => 1, "index" => 2, "interactByLeaf" => true, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "layoutAlgorithm" => "strip", "layoutStartingDirection" => "horizontal"];
		$this->assertEquals($res30, $obj->toArray(), "The method toArray() does not return the expected array with layout starting direction");

		$obj->setLegendIndex(25);

		$res31 = ["allowDrillToNode" => "true", "allowPointSelect" => 1, "alternateStartingDirection" => 1, "animation" => 0, "animationLimit" => 13, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderWidth" => 84, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 1, "colorIndex" => 51, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => 1, "cropThreshold" => 11, "cursor" => "crosshair", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 1, "events" => [], "exposeElementToA11y" => 1, "findNearestPointBy" => "xy", "getExtremesFromAll" => 1, "id" => "b80bb7740288fda1f201890375a60c8f", "ignoreHiddenPoint" => 1, "index" => 2, "interactByLeaf" => true, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "layoutAlgorithm" => "strip", "layoutStartingDirection" => "horizontal", "legendIndex" => 25];
		$this->assertEquals($res31, $obj->toArray(), "The method toArray() does not return the expected array with legend index");

		$obj->setLevelIsConstant("false");

		$res32 = ["allowDrillToNode" => "true", "allowPointSelect" => 1, "alternateStartingDirection" => 1, "animation" => 0, "animationLimit" => 13, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderWidth" => 84, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 1, "colorIndex" => 51, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => 1, "cropThreshold" => 11, "cursor" => "crosshair", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 1, "events" => [], "exposeElementToA11y" => 1, "findNearestPointBy" => "xy", "getExtremesFromAll" => 1, "id" => "b80bb7740288fda1f201890375a60c8f", "ignoreHiddenPoint" => 1, "index" => 2, "interactByLeaf" => true, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "layoutAlgorithm" => "strip", "layoutStartingDirection" => "horizontal", "legendIndex" => 25, "levelIsConstant" => "false"];
		$this->assertEquals($res32, $obj->toArray(), "The method toArray() does not return the expected array with level is constant");

		$obj->setLevels(["levels" => "836eb5e382b5d9f430df48883fca918e"]);

		$res33 = ["allowDrillToNode" => "true", "allowPointSelect" => 1, "alternateStartingDirection" => 1, "animation" => 0, "animationLimit" => 13, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderWidth" => 84, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 1, "colorIndex" => 51, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => 1, "cropThreshold" => 11, "cursor" => "crosshair", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 1, "events" => [], "exposeElementToA11y" => 1, "findNearestPointBy" => "xy", "getExtremesFromAll" => 1, "id" => "b80bb7740288fda1f201890375a60c8f", "ignoreHiddenPoint" => 1, "index" => 2, "interactByLeaf" => true, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "layoutAlgorithm" => "strip", "layoutStartingDirection" => "horizontal", "legendIndex" => 25, "levelIsConstant" => "false", "levels" => ["levels" => "836eb5e382b5d9f430df48883fca918e"]];
		$this->assertEquals($res33, $obj->toArray(), "The method toArray() does not return the expected array with levels");

		$obj->setLinkedTo("914fab47afc86331ec62837807a29419");

		$res34 = ["allowDrillToNode" => "true", "allowPointSelect" => 1, "alternateStartingDirection" => 1, "animation" => 0, "animationLimit" => 13, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderWidth" => 84, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 1, "colorIndex" => 51, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => 1, "cropThreshold" => 11, "cursor" => "crosshair", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 1, "events" => [], "exposeElementToA11y" => 1, "findNearestPointBy" => "xy", "getExtremesFromAll" => 1, "id" => "b80bb7740288fda1f201890375a60c8f", "ignoreHiddenPoint" => 1, "index" => 2, "interactByLeaf" => true, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "layoutAlgorithm" => "strip", "layoutStartingDirection" => "horizontal", "legendIndex" => 25, "levelIsConstant" => "false", "levels" => ["levels" => "836eb5e382b5d9f430df48883fca918e"], "linkedTo" => "914fab47afc86331ec62837807a29419"];
		$this->assertEquals($res34, $obj->toArray(), "The method toArray() does not return the expected array with linked to");

		$obj->setMaxPointWidth(94);

		$res35 = ["allowDrillToNode" => "true", "allowPointSelect" => 1, "alternateStartingDirection" => 1, "animation" => 0, "animationLimit" => 13, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderWidth" => 84, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 1, "colorIndex" => 51, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => 1, "cropThreshold" => 11, "cursor" => "crosshair", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 1, "events" => [], "exposeElementToA11y" => 1, "findNearestPointBy" => "xy", "getExtremesFromAll" => 1, "id" => "b80bb7740288fda1f201890375a60c8f", "ignoreHiddenPoint" => 1, "index" => 2, "interactByLeaf" => true, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "layoutAlgorithm" => "strip", "layoutStartingDirection" => "horizontal", "legendIndex" => 25, "levelIsConstant" => "false", "levels" => ["levels" => "836eb5e382b5d9f430df48883fca918e"], "linkedTo" => "914fab47afc86331ec62837807a29419", "maxPointWidth" => 94];
		$this->assertEquals($res35, $obj->toArray(), "The method toArray() does not return the expected array with max point width");

		$obj->setName("b068931cc450442b63f5b3d276ea4297");

		$res36 = ["allowDrillToNode" => "true", "allowPointSelect" => 1, "alternateStartingDirection" => 1, "animation" => 0, "animationLimit" => 13, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderWidth" => 84, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 1, "colorIndex" => 51, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => 1, "cropThreshold" => 11, "cursor" => "crosshair", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 1, "events" => [], "exposeElementToA11y" => 1, "findNearestPointBy" => "xy", "getExtremesFromAll" => 1, "id" => "b80bb7740288fda1f201890375a60c8f", "ignoreHiddenPoint" => 1, "index" => 2, "interactByLeaf" => true, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "layoutAlgorithm" => "strip", "layoutStartingDirection" => "horizontal", "legendIndex" => 25, "levelIsConstant" => "false", "levels" => ["levels" => "836eb5e382b5d9f430df48883fca918e"], "linkedTo" => "914fab47afc86331ec62837807a29419", "maxPointWidth" => 94, "name" => "b068931cc450442b63f5b3d276ea4297"];
		$this->assertEquals($res36, $obj->toArray(), "The method toArray() does not return the expected array with name");

		$obj->setOpacity(37);

		$res37 = ["allowDrillToNode" => "true", "allowPointSelect" => 1, "alternateStartingDirection" => 1, "animation" => 0, "animationLimit" => 13, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderWidth" => 84, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 1, "colorIndex" => 51, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => 1, "cropThreshold" => 11, "cursor" => "crosshair", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 1, "events" => [], "exposeElementToA11y" => 1, "findNearestPointBy" => "xy", "getExtremesFromAll" => 1, "id" => "b80bb7740288fda1f201890375a60c8f", "ignoreHiddenPoint" => 1, "index" => 2, "interactByLeaf" => true, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "layoutAlgorithm" => "strip", "layoutStartingDirection" => "horizontal", "legendIndex" => 25, "levelIsConstant" => "false", "levels" => ["levels" => "836eb5e382b5d9f430df48883fca918e"], "linkedTo" => "914fab47afc86331ec62837807a29419", "maxPointWidth" => 94, "name" => "b068931cc450442b63f5b3d276ea4297", "opacity" => 37];
		$this->assertEquals($res37, $obj->toArray(), "The method toArray() does not return the expected array with opacity");

		$obj->setPoint(new \WBW\Bundle\HighchartsBundle\API\Chart\Series\Treemap\HighchartsPoint());

		$res38 = ["allowDrillToNode" => "true", "allowPointSelect" => 1, "alternateStartingDirection" => 1, "animation" => 0, "animationLimit" => 13, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderWidth" => 84, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 1, "colorIndex" => 51, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => 1, "cropThreshold" => 11, "cursor" => "crosshair", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 1, "events" => [], "exposeElementToA11y" => 1, "findNearestPointBy" => "xy", "getExtremesFromAll" => 1, "id" => "b80bb7740288fda1f201890375a60c8f", "ignoreHiddenPoint" => 1, "index" => 2, "interactByLeaf" => true, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "layoutAlgorithm" => "strip", "layoutStartingDirection" => "horizontal", "legendIndex" => 25, "levelIsConstant" => "false", "levels" => ["levels" => "836eb5e382b5d9f430df48883fca918e"], "linkedTo" => "914fab47afc86331ec62837807a29419", "maxPointWidth" => 94, "name" => "b068931cc450442b63f5b3d276ea4297", "opacity" => 37, "point" => []];
		$this->assertEquals($res38, $obj->toArray(), "The method toArray() does not return the expected array with point");

		$obj->setPointDescriptionFormatter("b5fd0c15b3ca81f726e2c7b93907ba36");

		$res39 = ["allowDrillToNode" => "true", "allowPointSelect" => 1, "alternateStartingDirection" => 1, "animation" => 0, "animationLimit" => 13, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderWidth" => 84, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 1, "colorIndex" => 51, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => 1, "cropThreshold" => 11, "cursor" => "crosshair", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 1, "events" => [], "exposeElementToA11y" => 1, "findNearestPointBy" => "xy", "getExtremesFromAll" => 1, "id" => "b80bb7740288fda1f201890375a60c8f", "ignoreHiddenPoint" => 1, "index" => 2, "interactByLeaf" => true, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "layoutAlgorithm" => "strip", "layoutStartingDirection" => "horizontal", "legendIndex" => 25, "levelIsConstant" => "false", "levels" => ["levels" => "836eb5e382b5d9f430df48883fca918e"], "linkedTo" => "914fab47afc86331ec62837807a29419", "maxPointWidth" => 94, "name" => "b068931cc450442b63f5b3d276ea4297", "opacity" => 37, "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36"];
		$this->assertEquals($res39, $obj->toArray(), "The method toArray() does not return the expected array with point description formatter");

		$obj->setSelected(1);

		$res40 = ["allowDrillToNode" => "true", "allowPointSelect" => 1, "alternateStartingDirection" => 1, "animation" => 0, "animationLimit" => 13, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderWidth" => 84, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 1, "colorIndex" => 51, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => 1, "cropThreshold" => 11, "cursor" => "crosshair", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 1, "events" => [], "exposeElementToA11y" => 1, "findNearestPointBy" => "xy", "getExtremesFromAll" => 1, "id" => "b80bb7740288fda1f201890375a60c8f", "ignoreHiddenPoint" => 1, "index" => 2, "interactByLeaf" => true, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "layoutAlgorithm" => "strip", "layoutStartingDirection" => "horizontal", "legendIndex" => 25, "levelIsConstant" => "false", "levels" => ["levels" => "836eb5e382b5d9f430df48883fca918e"], "linkedTo" => "914fab47afc86331ec62837807a29419", "maxPointWidth" => 94, "name" => "b068931cc450442b63f5b3d276ea4297", "opacity" => 37, "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "selected" => 1];
		$this->assertEquals($res40, $obj->toArray(), "The method toArray() does not return the expected array with selected");

		$obj->setShadow(0);

		$res41 = ["allowDrillToNode" => "true", "allowPointSelect" => 1, "alternateStartingDirection" => 1, "animation" => 0, "animationLimit" => 13, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderWidth" => 84, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 1, "colorIndex" => 51, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => 1, "cropThreshold" => 11, "cursor" => "crosshair", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 1, "events" => [], "exposeElementToA11y" => 1, "findNearestPointBy" => "xy", "getExtremesFromAll" => 1, "id" => "b80bb7740288fda1f201890375a60c8f", "ignoreHiddenPoint" => 1, "index" => 2, "interactByLeaf" => true, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "layoutAlgorithm" => "strip", "layoutStartingDirection" => "horizontal", "legendIndex" => 25, "levelIsConstant" => "false", "levels" => ["levels" => "836eb5e382b5d9f430df48883fca918e"], "linkedTo" => "914fab47afc86331ec62837807a29419", "maxPointWidth" => 94, "name" => "b068931cc450442b63f5b3d276ea4297", "opacity" => 37, "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "selected" => 1, "shadow" => 0];
		$this->assertEquals($res41, $obj->toArray(), "The method toArray() does not return the expected array with shadow");

		$obj->setShowCheckbox(0);

		$res42 = ["allowDrillToNode" => "true", "allowPointSelect" => 1, "alternateStartingDirection" => 1, "animation" => 0, "animationLimit" => 13, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderWidth" => 84, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 1, "colorIndex" => 51, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => 1, "cropThreshold" => 11, "cursor" => "crosshair", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 1, "events" => [], "exposeElementToA11y" => 1, "findNearestPointBy" => "xy", "getExtremesFromAll" => 1, "id" => "b80bb7740288fda1f201890375a60c8f", "ignoreHiddenPoint" => 1, "index" => 2, "interactByLeaf" => true, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "layoutAlgorithm" => "strip", "layoutStartingDirection" => "horizontal", "legendIndex" => 25, "levelIsConstant" => "false", "levels" => ["levels" => "836eb5e382b5d9f430df48883fca918e"], "linkedTo" => "914fab47afc86331ec62837807a29419", "maxPointWidth" => 94, "name" => "b068931cc450442b63f5b3d276ea4297", "opacity" => 37, "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "selected" => 1, "shadow" => 0, "showCheckbox" => 0];
		$this->assertEquals($res42, $obj->toArray(), "The method toArray() does not return the expected array with show checkbox");

		$obj->setShowInLegend(0);

		$res43 = ["allowDrillToNode" => "true", "allowPointSelect" => 1, "alternateStartingDirection" => 1, "animation" => 0, "animationLimit" => 13, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderWidth" => 84, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 1, "colorIndex" => 51, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => 1, "cropThreshold" => 11, "cursor" => "crosshair", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 1, "events" => [], "exposeElementToA11y" => 1, "findNearestPointBy" => "xy", "getExtremesFromAll" => 1, "id" => "b80bb7740288fda1f201890375a60c8f", "ignoreHiddenPoint" => 1, "index" => 2, "interactByLeaf" => true, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "layoutAlgorithm" => "strip", "layoutStartingDirection" => "horizontal", "legendIndex" => 25, "levelIsConstant" => "false", "levels" => ["levels" => "836eb5e382b5d9f430df48883fca918e"], "linkedTo" => "914fab47afc86331ec62837807a29419", "maxPointWidth" => 94, "name" => "b068931cc450442b63f5b3d276ea4297", "opacity" => 37, "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "selected" => 1, "shadow" => 0, "showCheckbox" => 0, "showInLegend" => 0];
		$this->assertEquals($res43, $obj->toArray(), "The method toArray() does not return the expected array with show in legend");

		$obj->setSkipKeyboardNavigation(1);

		$res44 = ["allowDrillToNode" => "true", "allowPointSelect" => 1, "alternateStartingDirection" => 1, "animation" => 0, "animationLimit" => 13, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderWidth" => 84, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 1, "colorIndex" => 51, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => 1, "cropThreshold" => 11, "cursor" => "crosshair", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 1, "events" => [], "exposeElementToA11y" => 1, "findNearestPointBy" => "xy", "getExtremesFromAll" => 1, "id" => "b80bb7740288fda1f201890375a60c8f", "ignoreHiddenPoint" => 1, "index" => 2, "interactByLeaf" => true, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "layoutAlgorithm" => "strip", "layoutStartingDirection" => "horizontal", "legendIndex" => 25, "levelIsConstant" => "false", "levels" => ["levels" => "836eb5e382b5d9f430df48883fca918e"], "linkedTo" => "914fab47afc86331ec62837807a29419", "maxPointWidth" => 94, "name" => "b068931cc450442b63f5b3d276ea4297", "opacity" => 37, "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "selected" => 1, "shadow" => 0, "showCheckbox" => 0, "showInLegend" => 0, "skipKeyboardNavigation" => 1];
		$this->assertEquals($res44, $obj->toArray(), "The method toArray() does not return the expected array with skip keyboard navigation");

		$obj->setSortIndex(73);

		$res45 = ["allowDrillToNode" => "true", "allowPointSelect" => 1, "alternateStartingDirection" => 1, "animation" => 0, "animationLimit" => 13, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderWidth" => 84, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 1, "colorIndex" => 51, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => 1, "cropThreshold" => 11, "cursor" => "crosshair", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 1, "events" => [], "exposeElementToA11y" => 1, "findNearestPointBy" => "xy", "getExtremesFromAll" => 1, "id" => "b80bb7740288fda1f201890375a60c8f", "ignoreHiddenPoint" => 1, "index" => 2, "interactByLeaf" => true, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "layoutAlgorithm" => "strip", "layoutStartingDirection" => "horizontal", "legendIndex" => 25, "levelIsConstant" => "false", "levels" => ["levels" => "836eb5e382b5d9f430df48883fca918e"], "linkedTo" => "914fab47afc86331ec62837807a29419", "maxPointWidth" => 94, "name" => "b068931cc450442b63f5b3d276ea4297", "opacity" => 37, "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "selected" => 1, "shadow" => 0, "showCheckbox" => 0, "showInLegend" => 0, "skipKeyboardNavigation" => 1, "sortIndex" => 73];
		$this->assertEquals($res45, $obj->toArray(), "The method toArray() does not return the expected array with sort index");

		$obj->setStates(new \WBW\Bundle\HighchartsBundle\API\Chart\Series\Treemap\HighchartsStates());

		$res46 = ["allowDrillToNode" => "true", "allowPointSelect" => 1, "alternateStartingDirection" => 1, "animation" => 0, "animationLimit" => 13, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderWidth" => 84, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 1, "colorIndex" => 51, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => 1, "cropThreshold" => 11, "cursor" => "crosshair", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 1, "events" => [], "exposeElementToA11y" => 1, "findNearestPointBy" => "xy", "getExtremesFromAll" => 1, "id" => "b80bb7740288fda1f201890375a60c8f", "ignoreHiddenPoint" => 1, "index" => 2, "interactByLeaf" => true, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "layoutAlgorithm" => "strip", "layoutStartingDirection" => "horizontal", "legendIndex" => 25, "levelIsConstant" => "false", "levels" => ["levels" => "836eb5e382b5d9f430df48883fca918e"], "linkedTo" => "914fab47afc86331ec62837807a29419", "maxPointWidth" => 94, "name" => "b068931cc450442b63f5b3d276ea4297", "opacity" => 37, "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "selected" => 1, "shadow" => 0, "showCheckbox" => 0, "showInLegend" => 0, "skipKeyboardNavigation" => 1, "sortIndex" => 73, "states" => []];
		$this->assertEquals($res46, $obj->toArray(), "The method toArray() does not return the expected array with states");

		$obj->setStickyTracking(1);

		$res47 = ["allowDrillToNode" => "true", "allowPointSelect" => 1, "alternateStartingDirection" => 1, "animation" => 0, "animationLimit" => 13, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderWidth" => 84, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 1, "colorIndex" => 51, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => 1, "cropThreshold" => 11, "cursor" => "crosshair", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 1, "events" => [], "exposeElementToA11y" => 1, "findNearestPointBy" => "xy", "getExtremesFromAll" => 1, "id" => "b80bb7740288fda1f201890375a60c8f", "ignoreHiddenPoint" => 1, "index" => 2, "interactByLeaf" => true, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "layoutAlgorithm" => "strip", "layoutStartingDirection" => "horizontal", "legendIndex" => 25, "levelIsConstant" => "false", "levels" => ["levels" => "836eb5e382b5d9f430df48883fca918e"], "linkedTo" => "914fab47afc86331ec62837807a29419", "maxPointWidth" => 94, "name" => "b068931cc450442b63f5b3d276ea4297", "opacity" => 37, "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "selected" => 1, "shadow" => 0, "showCheckbox" => 0, "showInLegend" => 0, "skipKeyboardNavigation" => 1, "sortIndex" => 73, "states" => [], "stickyTracking" => 1];
		$this->assertEquals($res47, $obj->toArray(), "The method toArray() does not return the expected array with sticky tracking");

		$obj->setTooltip(new \WBW\Bundle\HighchartsBundle\API\Chart\Series\Treemap\HighchartsTooltip());

		$res48 = ["allowDrillToNode" => "true", "allowPointSelect" => 1, "alternateStartingDirection" => 1, "animation" => 0, "animationLimit" => 13, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderWidth" => 84, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 1, "colorIndex" => 51, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => 1, "cropThreshold" => 11, "cursor" => "crosshair", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 1, "events" => [], "exposeElementToA11y" => 1, "findNearestPointBy" => "xy", "getExtremesFromAll" => 1, "id" => "b80bb7740288fda1f201890375a60c8f", "ignoreHiddenPoint" => 1, "index" => 2, "interactByLeaf" => true, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "layoutAlgorithm" => "strip", "layoutStartingDirection" => "horizontal", "legendIndex" => 25, "levelIsConstant" => "false", "levels" => ["levels" => "836eb5e382b5d9f430df48883fca918e"], "linkedTo" => "914fab47afc86331ec62837807a29419", "maxPointWidth" => 94, "name" => "b068931cc450442b63f5b3d276ea4297", "opacity" => 37, "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "selected" => 1, "shadow" => 0, "showCheckbox" => 0, "showInLegend" => 0, "skipKeyboardNavigation" => 1, "sortIndex" => 73, "states" => [], "stickyTracking" => 1, "tooltip" => []];
		$this->assertEquals($res48, $obj->toArray(), "The method toArray() does not return the expected array with tooltip");

		$obj->setTurboThreshold(16);

		$res49 = ["allowDrillToNode" => "true", "allowPointSelect" => 1, "alternateStartingDirection" => 1, "animation" => 0, "animationLimit" => 13, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderWidth" => 84, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 1, "colorIndex" => 51, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => 1, "cropThreshold" => 11, "cursor" => "crosshair", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 1, "events" => [], "exposeElementToA11y" => 1, "findNearestPointBy" => "xy", "getExtremesFromAll" => 1, "id" => "b80bb7740288fda1f201890375a60c8f", "ignoreHiddenPoint" => 1, "index" => 2, "interactByLeaf" => true, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "layoutAlgorithm" => "strip", "layoutStartingDirection" => "horizontal", "legendIndex" => 25, "levelIsConstant" => "false", "levels" => ["levels" => "836eb5e382b5d9f430df48883fca918e"], "linkedTo" => "914fab47afc86331ec62837807a29419", "maxPointWidth" => 94, "name" => "b068931cc450442b63f5b3d276ea4297", "opacity" => 37, "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "selected" => 1, "shadow" => 0, "showCheckbox" => 0, "showInLegend" => 0, "skipKeyboardNavigation" => 1, "sortIndex" => 73, "states" => [], "stickyTracking" => 1, "tooltip" => [], "turboThreshold" => 16];
		$this->assertEquals($res49, $obj->toArray(), "The method toArray() does not return the expected array with turbo threshold");

		$obj->setType("waterfall");

		$res50 = ["allowDrillToNode" => "true", "allowPointSelect" => 1, "alternateStartingDirection" => 1, "animation" => 0, "animationLimit" => 13, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderWidth" => 84, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 1, "colorIndex" => 51, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => 1, "cropThreshold" => 11, "cursor" => "crosshair", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 1, "events" => [], "exposeElementToA11y" => 1, "findNearestPointBy" => "xy", "getExtremesFromAll" => 1, "id" => "b80bb7740288fda1f201890375a60c8f", "ignoreHiddenPoint" => 1, "index" => 2, "interactByLeaf" => true, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "layoutAlgorithm" => "strip", "layoutStartingDirection" => "horizontal", "legendIndex" => 25, "levelIsConstant" => "false", "levels" => ["levels" => "836eb5e382b5d9f430df48883fca918e"], "linkedTo" => "914fab47afc86331ec62837807a29419", "maxPointWidth" => 94, "name" => "b068931cc450442b63f5b3d276ea4297", "opacity" => 37, "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "selected" => 1, "shadow" => 0, "showCheckbox" => 0, "showInLegend" => 0, "skipKeyboardNavigation" => 1, "sortIndex" => 73, "states" => [], "stickyTracking" => 1, "tooltip" => [], "turboThreshold" => 16, "type" => "waterfall"];
		$this->assertEquals($res50, $obj->toArray(), "The method toArray() does not return the expected array with type");

		$obj->setVisible(1);

		$res51 = ["allowDrillToNode" => "true", "allowPointSelect" => 1, "alternateStartingDirection" => 1, "animation" => 0, "animationLimit" => 13, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderWidth" => 84, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 1, "colorIndex" => 51, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => 1, "cropThreshold" => 11, "cursor" => "crosshair", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 1, "events" => [], "exposeElementToA11y" => 1, "findNearestPointBy" => "xy", "getExtremesFromAll" => 1, "id" => "b80bb7740288fda1f201890375a60c8f", "ignoreHiddenPoint" => 1, "index" => 2, "interactByLeaf" => true, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "layoutAlgorithm" => "strip", "layoutStartingDirection" => "horizontal", "legendIndex" => 25, "levelIsConstant" => "false", "levels" => ["levels" => "836eb5e382b5d9f430df48883fca918e"], "linkedTo" => "914fab47afc86331ec62837807a29419", "maxPointWidth" => 94, "name" => "b068931cc450442b63f5b3d276ea4297", "opacity" => 37, "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "selected" => 1, "shadow" => 0, "showCheckbox" => 0, "showInLegend" => 0, "skipKeyboardNavigation" => 1, "sortIndex" => 73, "states" => [], "stickyTracking" => 1, "tooltip" => [], "turboThreshold" => 16, "type" => "waterfall", "visible" => 1];
		$this->assertEquals($res51, $obj->toArray(), "The method toArray() does not return the expected array with visible");

		$obj->setXAxis(43);

		$res52 = ["allowDrillToNode" => "true", "allowPointSelect" => 1, "alternateStartingDirection" => 1, "animation" => 0, "animationLimit" => 13, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderWidth" => 84, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 1, "colorIndex" => 51, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => 1, "cropThreshold" => 11, "cursor" => "crosshair", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 1, "events" => [], "exposeElementToA11y" => 1, "findNearestPointBy" => "xy", "getExtremesFromAll" => 1, "id" => "b80bb7740288fda1f201890375a60c8f", "ignoreHiddenPoint" => 1, "index" => 2, "interactByLeaf" => true, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "layoutAlgorithm" => "strip", "layoutStartingDirection" => "horizontal", "legendIndex" => 25, "levelIsConstant" => "false", "levels" => ["levels" => "836eb5e382b5d9f430df48883fca918e"], "linkedTo" => "914fab47afc86331ec62837807a29419", "maxPointWidth" => 94, "name" => "b068931cc450442b63f5b3d276ea4297", "opacity" => 37, "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "selected" => 1, "shadow" => 0, "showCheckbox" => 0, "showInLegend" => 0, "skipKeyboardNavigation" => 1, "sortIndex" => 73, "states" => [], "stickyTracking" => 1, "tooltip" => [], "turboThreshold" => 16, "type" => "waterfall", "visible" => 1, "xAxis" => 43];
		$this->assertEquals($res52, $obj->toArray(), "The method toArray() does not return the expected array with x axis");

		$obj->setYAxis(21);

		$res53 = ["allowDrillToNode" => "true", "allowPointSelect" => 1, "alternateStartingDirection" => 1, "animation" => 0, "animationLimit" => 13, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderWidth" => 84, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 1, "colorIndex" => 51, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => 1, "cropThreshold" => 11, "cursor" => "crosshair", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 1, "events" => [], "exposeElementToA11y" => 1, "findNearestPointBy" => "xy", "getExtremesFromAll" => 1, "id" => "b80bb7740288fda1f201890375a60c8f", "ignoreHiddenPoint" => 1, "index" => 2, "interactByLeaf" => true, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "layoutAlgorithm" => "strip", "layoutStartingDirection" => "horizontal", "legendIndex" => 25, "levelIsConstant" => "false", "levels" => ["levels" => "836eb5e382b5d9f430df48883fca918e"], "linkedTo" => "914fab47afc86331ec62837807a29419", "maxPointWidth" => 94, "name" => "b068931cc450442b63f5b3d276ea4297", "opacity" => 37, "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "selected" => 1, "shadow" => 0, "showCheckbox" => 0, "showInLegend" => 0, "skipKeyboardNavigation" => 1, "sortIndex" => 73, "states" => [], "stickyTracking" => 1, "tooltip" => [], "turboThreshold" => 16, "type" => "waterfall", "visible" => 1, "xAxis" => 43, "yAxis" => 21];
		$this->assertEquals($res53, $obj->toArray(), "The method toArray() does not return the expected array with y axis");

		$obj->setZIndex(29);

		$res54 = ["allowDrillToNode" => "true", "allowPointSelect" => 1, "alternateStartingDirection" => 1, "animation" => 0, "animationLimit" => 13, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderWidth" => 84, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 1, "colorIndex" => 51, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => 1, "cropThreshold" => 11, "cursor" => "crosshair", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 1, "events" => [], "exposeElementToA11y" => 1, "findNearestPointBy" => "xy", "getExtremesFromAll" => 1, "id" => "b80bb7740288fda1f201890375a60c8f", "ignoreHiddenPoint" => 1, "index" => 2, "interactByLeaf" => true, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "layoutAlgorithm" => "strip", "layoutStartingDirection" => "horizontal", "legendIndex" => 25, "levelIsConstant" => "false", "levels" => ["levels" => "836eb5e382b5d9f430df48883fca918e"], "linkedTo" => "914fab47afc86331ec62837807a29419", "maxPointWidth" => 94, "name" => "b068931cc450442b63f5b3d276ea4297", "opacity" => 37, "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "selected" => 1, "shadow" => 0, "showCheckbox" => 0, "showInLegend" => 0, "skipKeyboardNavigation" => 1, "sortIndex" => 73, "states" => [], "stickyTracking" => 1, "tooltip" => [], "turboThreshold" => 16, "type" => "waterfall", "visible" => 1, "xAxis" => 43, "yAxis" => 21, "zIndex" => 29];
		$this->assertEquals($res54, $obj->toArray(), "The method toArray() does not return the expected array with z index");

		$obj->setZoneAxis("88421adabea658556aa3ab6c6181afad");

		$res55 = ["allowDrillToNode" => "true", "allowPointSelect" => 1, "alternateStartingDirection" => 1, "animation" => 0, "animationLimit" => 13, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderWidth" => 84, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 1, "colorIndex" => 51, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => 1, "cropThreshold" => 11, "cursor" => "crosshair", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 1, "events" => [], "exposeElementToA11y" => 1, "findNearestPointBy" => "xy", "getExtremesFromAll" => 1, "id" => "b80bb7740288fda1f201890375a60c8f", "ignoreHiddenPoint" => 1, "index" => 2, "interactByLeaf" => true, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "layoutAlgorithm" => "strip", "layoutStartingDirection" => "horizontal", "legendIndex" => 25, "levelIsConstant" => "false", "levels" => ["levels" => "836eb5e382b5d9f430df48883fca918e"], "linkedTo" => "914fab47afc86331ec62837807a29419", "maxPointWidth" => 94, "name" => "b068931cc450442b63f5b3d276ea4297", "opacity" => 37, "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "selected" => 1, "shadow" => 0, "showCheckbox" => 0, "showInLegend" => 0, "skipKeyboardNavigation" => 1, "sortIndex" => 73, "states" => [], "stickyTracking" => 1, "tooltip" => [], "turboThreshold" => 16, "type" => "waterfall", "visible" => 1, "xAxis" => 43, "yAxis" => 21, "zIndex" => 29, "zoneAxis" => "88421adabea658556aa3ab6c6181afad"];
		$this->assertEquals($res55, $obj->toArray(), "The method toArray() does not return the expected array with zone axis");

		$obj->setZones(["zones" => "26f94136f5db8afd4e9df1e512f7fdc5"]);

		$res56 = ["allowDrillToNode" => "true", "allowPointSelect" => 1, "alternateStartingDirection" => 1, "animation" => 0, "animationLimit" => 13, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderWidth" => 84, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 1, "colorIndex" => 51, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => 1, "cropThreshold" => 11, "cursor" => "crosshair", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 1, "events" => [], "exposeElementToA11y" => 1, "findNearestPointBy" => "xy", "getExtremesFromAll" => 1, "id" => "b80bb7740288fda1f201890375a60c8f", "ignoreHiddenPoint" => 1, "index" => 2, "interactByLeaf" => true, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "layoutAlgorithm" => "strip", "layoutStartingDirection" => "horizontal", "legendIndex" => 25, "levelIsConstant" => "false", "levels" => ["levels" => "836eb5e382b5d9f430df48883fca918e"], "linkedTo" => "914fab47afc86331ec62837807a29419", "maxPointWidth" => 94, "name" => "b068931cc450442b63f5b3d276ea4297", "opacity" => 37, "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "selected" => 1, "shadow" => 0, "showCheckbox" => 0, "showInLegend" => 0, "skipKeyboardNavigation" => 1, "sortIndex" => 73, "states" => [], "stickyTracking" => 1, "tooltip" => [], "turboThreshold" => 16, "type" => "waterfall", "visible" => 1, "xAxis" => 43, "yAxis" => 21, "zIndex" => 29, "zoneAxis" => "88421adabea658556aa3ab6c6181afad", "zones" => ["zones" => "26f94136f5db8afd4e9df1e512f7fdc5"]];
		$this->assertEquals($res56, $obj->toArray(), "The method toArray() does not return the expected array with zones");
	}

}
