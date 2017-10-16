<?php

/*
 * This file is part of the WBWHighchartsBundle package.
 *
 * (c) 2017 WBW
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\HighchartsBundle\Tests\API\Chart\PlotOptions;

use PHPUnit_Framework_TestCase;

/**
 * Highcharts waterfall test.
 *
 * @author WBW <https://github.com/webeweb/WBWHighchartsBundle>
 * @package WBW\HighchartsBundle\Tests\API\Chart\PlotOptions
 * @version 5.0.14
 */
final class HighchartsWaterfallTest extends PHPUnit_Framework_TestCase {

	/**
	 * Test the __construct() method.
	 *
	 * @return void
	 */
	public function testConstructor() {

		$obj1 = new \WBW\HighchartsBundle\API\Chart\PlotOptions\HighchartsWaterfall(true);

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
		$this->assertEquals(null, $obj1->getCursor(), "The method getCursor() does not return the expected value");
		$this->assertEquals(null, $obj1->getDashStyle(), "The method getDashStyle() does not return the expected value");
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
		$this->assertEquals(null, $obj1->getKeys(), "The method getKeys() does not return the expected value");
		$this->assertEquals(null, $obj1->getLineColor(), "The method getLineColor() does not return the expected value");
		$this->assertEquals(null, $obj1->getLineWidth(), "The method getLineWidth() does not return the expected value");
		$this->assertEquals(null, $obj1->getLinkedTo(), "The method getLinkedTo() does not return the expected value");
		$this->assertEquals(null, $obj1->getMaxPointWidth(), "The method getMaxPointWidth() does not return the expected value");
		$this->assertEquals(null, $obj1->getMinPointLength(), "The method getMinPointLength() does not return the expected value");
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
		$this->assertEquals(null, $obj1->getStates(), "The method getStates() does not return the expected value");
		$this->assertEquals(null, $obj1->getStickyTracking(), "The method getStickyTracking() does not return the expected value");
		$this->assertEquals(null, $obj1->getThreshold(), "The method getThreshold() does not return the expected value");
		$this->assertEquals(null, $obj1->getTooltip(), "The method getTooltip() does not return the expected value");
		$this->assertEquals(null, $obj1->getUpColor(), "The method getUpColor() does not return the expected value");
		$this->assertEquals(null, $obj1->getVisible(), "The method getVisible() does not return the expected value");
		$this->assertEquals(null, $obj1->getZoneAxis(), "The method getZoneAxis() does not return the expected value");
		$this->assertEquals(null, $obj1->getZones(), "The method getZones() does not return the expected value");

		$obj0 = new \WBW\HighchartsBundle\API\Chart\PlotOptions\HighchartsWaterfall(false);

		$this->assertEquals(false, $obj0->getAllowPointSelect(), "The method getAllowPointSelect() does not return the expected value");
		$this->assertEquals(true, $obj0->getAnimation(), "The method getAnimation() does not return the expected value");
		$this->assertEquals(null, $obj0->getAnimationLimit(), "The method getAnimationLimit() does not return the expected value");
		$this->assertEquals("#333333", $obj0->getBorderColor(), "The method getBorderColor() does not return the expected value");
		$this->assertEquals(0, $obj0->getBorderRadius(), "The method getBorderRadius() does not return the expected value");
		$this->assertEquals(1, $obj0->getBorderWidth(), "The method getBorderWidth() does not return the expected value");
		$this->assertEquals(null, $obj0->getClassName(), "The method getClassName() does not return the expected value");
		$this->assertEquals(null, $obj0->getColor(), "The method getColor() does not return the expected value");
		$this->assertEquals(false, $obj0->getColorByPoint(), "The method getColorByPoint() does not return the expected value");
		$this->assertEquals(null, $obj0->getColorIndex(), "The method getColorIndex() does not return the expected value");
		$this->assertEquals(null, $obj0->getColors(), "The method getColors() does not return the expected value");
		$this->assertEquals(true, $obj0->getCrisp(), "The method getCrisp() does not return the expected value");
		$this->assertEquals(null, $obj0->getCursor(), "The method getCursor() does not return the expected value");
		$this->assertEquals("Dot", $obj0->getDashStyle(), "The method getDashStyle() does not return the expected value");
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
		$this->assertEquals(null, $obj0->getKeys(), "The method getKeys() does not return the expected value");
		$this->assertEquals("#333333", $obj0->getLineColor(), "The method getLineColor() does not return the expected value");
		$this->assertEquals(1, $obj0->getLineWidth(), "The method getLineWidth() does not return the expected value");
		$this->assertEquals(null, $obj0->getLinkedTo(), "The method getLinkedTo() does not return the expected value");
		$this->assertEquals(null, $obj0->getMaxPointWidth(), "The method getMaxPointWidth() does not return the expected value");
		$this->assertEquals(0, $obj0->getMinPointLength(), "The method getMinPointLength() does not return the expected value");
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
		$this->assertEquals(null, $obj0->getStates(), "The method getStates() does not return the expected value");
		$this->assertEquals(true, $obj0->getStickyTracking(), "The method getStickyTracking() does not return the expected value");
		$this->assertEquals(0, $obj0->getThreshold(), "The method getThreshold() does not return the expected value");
		$this->assertEquals(null, $obj0->getTooltip(), "The method getTooltip() does not return the expected value");
		$this->assertEquals(null, $obj0->getUpColor(), "The method getUpColor() does not return the expected value");
		$this->assertEquals(true, $obj0->getVisible(), "The method getVisible() does not return the expected value");
		$this->assertEquals("y", $obj0->getZoneAxis(), "The method getZoneAxis() does not return the expected value");
		$this->assertEquals(null, $obj0->getZones(), "The method getZones() does not return the expected value");
	}

	/**
	 * Test the clear() method.
	 *
	 * @return void
	 */
	public function testClear() {

		$obj = new \WBW\HighchartsBundle\API\Chart\PlotOptions\HighchartsWaterfall(false);

		$obj->newDataLabels();
		$obj->newEvents();
		$obj->newPoint();
		$obj->newStates();

		$obj->clear();

		$res = ["dataLabels" => [], "events" => [], "point" => [], "states" => []];
		$this->assertEquals($res, $obj->toArray(), "The method toArray() does not return the expected array");
	}

	/**
	 * Test the jsonSerialize() method.
	 *
	 * @return void
	 */
	public function testJsonSerialize() {

		$obj = new \WBW\HighchartsBundle\API\Chart\PlotOptions\HighchartsWaterfall(true);

		$this->assertEquals([], $obj->jsonSerialize(), "The method jsonSerialize() does not return the expected value");
	}

	/**
	 * Tests the newDataLabels() method.
	 *
	 * @return void.
	 */
	public function testNewDataLabels() {

		$obj = new \WBW\HighchartsBundle\API\Chart\PlotOptions\HighchartsWaterfall(false);

		$res = $obj->newDataLabels();
		$this->assertInstanceOf(\WBW\HighchartsBundle\API\Chart\PlotOptions\Waterfall\HighchartsDataLabels::class, $res, "The method newDataLabels() does not return the expected object");
	}

	/**
	 * Tests the newEvents() method.
	 *
	 * @return void.
	 */
	public function testNewEvents() {

		$obj = new \WBW\HighchartsBundle\API\Chart\PlotOptions\HighchartsWaterfall(false);

		$res = $obj->newEvents();
		$this->assertInstanceOf(\WBW\HighchartsBundle\API\Chart\PlotOptions\Waterfall\HighchartsEvents::class, $res, "The method newEvents() does not return the expected object");
	}

	/**
	 * Tests the newPoint() method.
	 *
	 * @return void.
	 */
	public function testNewPoint() {

		$obj = new \WBW\HighchartsBundle\API\Chart\PlotOptions\HighchartsWaterfall(false);

		$res = $obj->newPoint();
		$this->assertInstanceOf(\WBW\HighchartsBundle\API\Chart\PlotOptions\Waterfall\HighchartsPoint::class, $res, "The method newPoint() does not return the expected object");
	}

	/**
	 * Tests the newStates() method.
	 *
	 * @return void.
	 */
	public function testNewStates() {

		$obj = new \WBW\HighchartsBundle\API\Chart\PlotOptions\HighchartsWaterfall(false);

		$res = $obj->newStates();
		$this->assertInstanceOf(\WBW\HighchartsBundle\API\Chart\PlotOptions\Waterfall\HighchartsStates::class, $res, "The method newStates() does not return the expected object");
	}

	/**
	 * Test the toArray() method.
	 *
	 * @return void
	 */
	public function testToArray() {

		$obj = new \WBW\HighchartsBundle\API\Chart\PlotOptions\HighchartsWaterfall(true);

		$obj->setAllowPointSelect(0);

		$res1 = ["allowPointSelect" => 0];
		$this->assertEquals($res1, $obj->toArray(), "The method toArray() does not return the expected array with allow point select");

		$obj->setAnimation(0);

		$res2 = ["allowPointSelect" => 0, "animation" => 0];
		$this->assertEquals($res2, $obj->toArray(), "The method toArray() does not return the expected array with animation");

		$obj->setAnimationLimit(55);

		$res3 = ["allowPointSelect" => 0, "animation" => 0, "animationLimit" => 55];
		$this->assertEquals($res3, $obj->toArray(), "The method toArray() does not return the expected array with animation limit");

		$obj->setBorderColor("97da935a74593c55d78be9d1295aa994");

		$res4 = ["allowPointSelect" => 0, "animation" => 0, "animationLimit" => 55, "borderColor" => "97da935a74593c55d78be9d1295aa994"];
		$this->assertEquals($res4, $obj->toArray(), "The method toArray() does not return the expected array with border color");

		$obj->setBorderRadius(58);

		$res5 = ["allowPointSelect" => 0, "animation" => 0, "animationLimit" => 55, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 58];
		$this->assertEquals($res5, $obj->toArray(), "The method toArray() does not return the expected array with border radius");

		$obj->setBorderWidth(94);

		$res6 = ["allowPointSelect" => 0, "animation" => 0, "animationLimit" => 55, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 58, "borderWidth" => 94];
		$this->assertEquals($res6, $obj->toArray(), "The method toArray() does not return the expected array with border width");

		$obj->setClassName("6f66e878c62db60568a3487869695820");

		$res7 = ["allowPointSelect" => 0, "animation" => 0, "animationLimit" => 55, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 58, "borderWidth" => 94, "className" => "6f66e878c62db60568a3487869695820"];
		$this->assertEquals($res7, $obj->toArray(), "The method toArray() does not return the expected array with class name");

		$obj->setColor("70dda5dfb8053dc6d1c492574bce9bfd");

		$res8 = ["allowPointSelect" => 0, "animation" => 0, "animationLimit" => 55, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 58, "borderWidth" => 94, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd"];
		$this->assertEquals($res8, $obj->toArray(), "The method toArray() does not return the expected array with color");

		$obj->setColorByPoint(1);

		$res9 = ["allowPointSelect" => 0, "animation" => 0, "animationLimit" => 55, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 58, "borderWidth" => 94, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 1];
		$this->assertEquals($res9, $obj->toArray(), "The method toArray() does not return the expected array with color by point");

		$obj->setColorIndex(43);

		$res10 = ["allowPointSelect" => 0, "animation" => 0, "animationLimit" => 55, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 58, "borderWidth" => 94, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 1, "colorIndex" => 43];
		$this->assertEquals($res10, $obj->toArray(), "The method toArray() does not return the expected array with color index");

		$obj->setColors(["colors" => "62848e3ce5804aa985513a7922ff87b2"]);

		$res11 = ["allowPointSelect" => 0, "animation" => 0, "animationLimit" => 55, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 58, "borderWidth" => 94, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 1, "colorIndex" => 43, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"]];
		$this->assertEquals($res11, $obj->toArray(), "The method toArray() does not return the expected array with colors");

		$obj->setCrisp(1);

		$res12 = ["allowPointSelect" => 0, "animation" => 0, "animationLimit" => 55, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 58, "borderWidth" => 94, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 1, "colorIndex" => 43, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => 1];
		$this->assertEquals($res12, $obj->toArray(), "The method toArray() does not return the expected array with crisp");

		$obj->setCursor("crosshair");

		$res13 = ["allowPointSelect" => 0, "animation" => 0, "animationLimit" => 55, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 58, "borderWidth" => 94, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 1, "colorIndex" => 43, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => 1, "cursor" => "crosshair"];
		$this->assertEquals($res13, $obj->toArray(), "The method toArray() does not return the expected array with cursor");

		$obj->setDashStyle("5ad5e24042182b1974cdf57345defe8e");

		$res14 = ["allowPointSelect" => 0, "animation" => 0, "animationLimit" => 55, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 58, "borderWidth" => 94, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 1, "colorIndex" => 43, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => 1, "cursor" => "crosshair", "dashStyle" => "5ad5e24042182b1974cdf57345defe8e"];
		$this->assertEquals($res14, $obj->toArray(), "The method toArray() does not return the expected array with dash style");

		$obj->setDataLabels(new \WBW\HighchartsBundle\API\Chart\PlotOptions\Waterfall\HighchartsDataLabels());

		$res15 = ["allowPointSelect" => 0, "animation" => 0, "animationLimit" => 55, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 58, "borderWidth" => 94, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 1, "colorIndex" => 43, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => 1, "cursor" => "crosshair", "dashStyle" => "5ad5e24042182b1974cdf57345defe8e", "dataLabels" => []];
		$this->assertEquals($res15, $obj->toArray(), "The method toArray() does not return the expected array with data labels");

		$obj->setDepth(95);

		$res16 = ["allowPointSelect" => 0, "animation" => 0, "animationLimit" => 55, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 58, "borderWidth" => 94, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 1, "colorIndex" => 43, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => 1, "cursor" => "crosshair", "dashStyle" => "5ad5e24042182b1974cdf57345defe8e", "dataLabels" => [], "depth" => 95];
		$this->assertEquals($res16, $obj->toArray(), "The method toArray() does not return the expected array with depth");

		$obj->setDescription("67daf92c833c41c95db874e18fcb2786");

		$res17 = ["allowPointSelect" => 0, "animation" => 0, "animationLimit" => 55, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 58, "borderWidth" => 94, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 1, "colorIndex" => 43, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => 1, "cursor" => "crosshair", "dashStyle" => "5ad5e24042182b1974cdf57345defe8e", "dataLabels" => [], "depth" => 95, "description" => "67daf92c833c41c95db874e18fcb2786"];
		$this->assertEquals($res17, $obj->toArray(), "The method toArray() does not return the expected array with description");

		$obj->setEdgeColor("acbab0d2e7e54e5a7a32fc80409601fc");

		$res18 = ["allowPointSelect" => 0, "animation" => 0, "animationLimit" => 55, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 58, "borderWidth" => 94, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 1, "colorIndex" => 43, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => 1, "cursor" => "crosshair", "dashStyle" => "5ad5e24042182b1974cdf57345defe8e", "dataLabels" => [], "depth" => 95, "description" => "67daf92c833c41c95db874e18fcb2786", "edgeColor" => "acbab0d2e7e54e5a7a32fc80409601fc"];
		$this->assertEquals($res18, $obj->toArray(), "The method toArray() does not return the expected array with edge color");

		$obj->setEdgeWidth(81);

		$res19 = ["allowPointSelect" => 0, "animation" => 0, "animationLimit" => 55, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 58, "borderWidth" => 94, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 1, "colorIndex" => 43, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => 1, "cursor" => "crosshair", "dashStyle" => "5ad5e24042182b1974cdf57345defe8e", "dataLabels" => [], "depth" => 95, "description" => "67daf92c833c41c95db874e18fcb2786", "edgeColor" => "acbab0d2e7e54e5a7a32fc80409601fc", "edgeWidth" => 81];
		$this->assertEquals($res19, $obj->toArray(), "The method toArray() does not return the expected array with edge width");

		$obj->setEnableMouseTracking(1);

		$res20 = ["allowPointSelect" => 0, "animation" => 0, "animationLimit" => 55, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 58, "borderWidth" => 94, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 1, "colorIndex" => 43, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => 1, "cursor" => "crosshair", "dashStyle" => "5ad5e24042182b1974cdf57345defe8e", "dataLabels" => [], "depth" => 95, "description" => "67daf92c833c41c95db874e18fcb2786", "edgeColor" => "acbab0d2e7e54e5a7a32fc80409601fc", "edgeWidth" => 81, "enableMouseTracking" => 1];
		$this->assertEquals($res20, $obj->toArray(), "The method toArray() does not return the expected array with enable mouse tracking");

		$obj->setEvents(new \WBW\HighchartsBundle\API\Chart\PlotOptions\Waterfall\HighchartsEvents());

		$res21 = ["allowPointSelect" => 0, "animation" => 0, "animationLimit" => 55, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 58, "borderWidth" => 94, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 1, "colorIndex" => 43, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => 1, "cursor" => "crosshair", "dashStyle" => "5ad5e24042182b1974cdf57345defe8e", "dataLabels" => [], "depth" => 95, "description" => "67daf92c833c41c95db874e18fcb2786", "edgeColor" => "acbab0d2e7e54e5a7a32fc80409601fc", "edgeWidth" => 81, "enableMouseTracking" => 1, "events" => []];
		$this->assertEquals($res21, $obj->toArray(), "The method toArray() does not return the expected array with events");

		$obj->setExposeElementToA11y(0);

		$res22 = ["allowPointSelect" => 0, "animation" => 0, "animationLimit" => 55, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 58, "borderWidth" => 94, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 1, "colorIndex" => 43, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => 1, "cursor" => "crosshair", "dashStyle" => "5ad5e24042182b1974cdf57345defe8e", "dataLabels" => [], "depth" => 95, "description" => "67daf92c833c41c95db874e18fcb2786", "edgeColor" => "acbab0d2e7e54e5a7a32fc80409601fc", "edgeWidth" => 81, "enableMouseTracking" => 1, "events" => [], "exposeElementToA11y" => 0];
		$this->assertEquals($res22, $obj->toArray(), "The method toArray() does not return the expected array with expose element to a11y");

		$obj->setFindNearestPointBy("xy");

		$res23 = ["allowPointSelect" => 0, "animation" => 0, "animationLimit" => 55, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 58, "borderWidth" => 94, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 1, "colorIndex" => 43, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => 1, "cursor" => "crosshair", "dashStyle" => "5ad5e24042182b1974cdf57345defe8e", "dataLabels" => [], "depth" => 95, "description" => "67daf92c833c41c95db874e18fcb2786", "edgeColor" => "acbab0d2e7e54e5a7a32fc80409601fc", "edgeWidth" => 81, "enableMouseTracking" => 1, "events" => [], "exposeElementToA11y" => 0, "findNearestPointBy" => "xy"];
		$this->assertEquals($res23, $obj->toArray(), "The method toArray() does not return the expected array with find nearest point by");

		$obj->setGetExtremesFromAll(0);

		$res24 = ["allowPointSelect" => 0, "animation" => 0, "animationLimit" => 55, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 58, "borderWidth" => 94, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 1, "colorIndex" => 43, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => 1, "cursor" => "crosshair", "dashStyle" => "5ad5e24042182b1974cdf57345defe8e", "dataLabels" => [], "depth" => 95, "description" => "67daf92c833c41c95db874e18fcb2786", "edgeColor" => "acbab0d2e7e54e5a7a32fc80409601fc", "edgeWidth" => 81, "enableMouseTracking" => 1, "events" => [], "exposeElementToA11y" => 0, "findNearestPointBy" => "xy", "getExtremesFromAll" => 0];
		$this->assertEquals($res24, $obj->toArray(), "The method toArray() does not return the expected array with get extremes from all");

		$obj->setGroupPadding(82);

		$res25 = ["allowPointSelect" => 0, "animation" => 0, "animationLimit" => 55, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 58, "borderWidth" => 94, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 1, "colorIndex" => 43, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => 1, "cursor" => "crosshair", "dashStyle" => "5ad5e24042182b1974cdf57345defe8e", "dataLabels" => [], "depth" => 95, "description" => "67daf92c833c41c95db874e18fcb2786", "edgeColor" => "acbab0d2e7e54e5a7a32fc80409601fc", "edgeWidth" => 81, "enableMouseTracking" => 1, "events" => [], "exposeElementToA11y" => 0, "findNearestPointBy" => "xy", "getExtremesFromAll" => 0, "groupPadding" => 82];
		$this->assertEquals($res25, $obj->toArray(), "The method toArray() does not return the expected array with group padding");

		$obj->setGroupZPadding(32);

		$res26 = ["allowPointSelect" => 0, "animation" => 0, "animationLimit" => 55, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 58, "borderWidth" => 94, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 1, "colorIndex" => 43, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => 1, "cursor" => "crosshair", "dashStyle" => "5ad5e24042182b1974cdf57345defe8e", "dataLabels" => [], "depth" => 95, "description" => "67daf92c833c41c95db874e18fcb2786", "edgeColor" => "acbab0d2e7e54e5a7a32fc80409601fc", "edgeWidth" => 81, "enableMouseTracking" => 1, "events" => [], "exposeElementToA11y" => 0, "findNearestPointBy" => "xy", "getExtremesFromAll" => 0, "groupPadding" => 82, "groupZPadding" => 32];
		$this->assertEquals($res26, $obj->toArray(), "The method toArray() does not return the expected array with group z padding");

		$obj->setGrouping(1);

		$res27 = ["allowPointSelect" => 0, "animation" => 0, "animationLimit" => 55, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 58, "borderWidth" => 94, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 1, "colorIndex" => 43, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => 1, "cursor" => "crosshair", "dashStyle" => "5ad5e24042182b1974cdf57345defe8e", "dataLabels" => [], "depth" => 95, "description" => "67daf92c833c41c95db874e18fcb2786", "edgeColor" => "acbab0d2e7e54e5a7a32fc80409601fc", "edgeWidth" => 81, "enableMouseTracking" => 1, "events" => [], "exposeElementToA11y" => 0, "findNearestPointBy" => "xy", "getExtremesFromAll" => 0, "groupPadding" => 82, "groupZPadding" => 32, "grouping" => 1];
		$this->assertEquals($res27, $obj->toArray(), "The method toArray() does not return the expected array with grouping");

		$obj->setKeys(["keys" => "14f802e1fba977727845e8872c1743a7"]);

		$res28 = ["allowPointSelect" => 0, "animation" => 0, "animationLimit" => 55, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 58, "borderWidth" => 94, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 1, "colorIndex" => 43, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => 1, "cursor" => "crosshair", "dashStyle" => "5ad5e24042182b1974cdf57345defe8e", "dataLabels" => [], "depth" => 95, "description" => "67daf92c833c41c95db874e18fcb2786", "edgeColor" => "acbab0d2e7e54e5a7a32fc80409601fc", "edgeWidth" => 81, "enableMouseTracking" => 1, "events" => [], "exposeElementToA11y" => 0, "findNearestPointBy" => "xy", "getExtremesFromAll" => 0, "groupPadding" => 82, "groupZPadding" => 32, "grouping" => 1, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"]];
		$this->assertEquals($res28, $obj->toArray(), "The method toArray() does not return the expected array with keys");

		$obj->setLineColor("c2580eebfdbdb9fc629f50cc147c3f63");

		$res29 = ["allowPointSelect" => 0, "animation" => 0, "animationLimit" => 55, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 58, "borderWidth" => 94, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 1, "colorIndex" => 43, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => 1, "cursor" => "crosshair", "dashStyle" => "5ad5e24042182b1974cdf57345defe8e", "dataLabels" => [], "depth" => 95, "description" => "67daf92c833c41c95db874e18fcb2786", "edgeColor" => "acbab0d2e7e54e5a7a32fc80409601fc", "edgeWidth" => 81, "enableMouseTracking" => 1, "events" => [], "exposeElementToA11y" => 0, "findNearestPointBy" => "xy", "getExtremesFromAll" => 0, "groupPadding" => 82, "groupZPadding" => 32, "grouping" => 1, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "lineColor" => "c2580eebfdbdb9fc629f50cc147c3f63"];
		$this->assertEquals($res29, $obj->toArray(), "The method toArray() does not return the expected array with line color");

		$obj->setLineWidth(16);

		$res30 = ["allowPointSelect" => 0, "animation" => 0, "animationLimit" => 55, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 58, "borderWidth" => 94, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 1, "colorIndex" => 43, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => 1, "cursor" => "crosshair", "dashStyle" => "5ad5e24042182b1974cdf57345defe8e", "dataLabels" => [], "depth" => 95, "description" => "67daf92c833c41c95db874e18fcb2786", "edgeColor" => "acbab0d2e7e54e5a7a32fc80409601fc", "edgeWidth" => 81, "enableMouseTracking" => 1, "events" => [], "exposeElementToA11y" => 0, "findNearestPointBy" => "xy", "getExtremesFromAll" => 0, "groupPadding" => 82, "groupZPadding" => 32, "grouping" => 1, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "lineColor" => "c2580eebfdbdb9fc629f50cc147c3f63", "lineWidth" => 16];
		$this->assertEquals($res30, $obj->toArray(), "The method toArray() does not return the expected array with line width");

		$obj->setLinkedTo("914fab47afc86331ec62837807a29419");

		$res31 = ["allowPointSelect" => 0, "animation" => 0, "animationLimit" => 55, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 58, "borderWidth" => 94, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 1, "colorIndex" => 43, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => 1, "cursor" => "crosshair", "dashStyle" => "5ad5e24042182b1974cdf57345defe8e", "dataLabels" => [], "depth" => 95, "description" => "67daf92c833c41c95db874e18fcb2786", "edgeColor" => "acbab0d2e7e54e5a7a32fc80409601fc", "edgeWidth" => 81, "enableMouseTracking" => 1, "events" => [], "exposeElementToA11y" => 0, "findNearestPointBy" => "xy", "getExtremesFromAll" => 0, "groupPadding" => 82, "groupZPadding" => 32, "grouping" => 1, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "lineColor" => "c2580eebfdbdb9fc629f50cc147c3f63", "lineWidth" => 16, "linkedTo" => "914fab47afc86331ec62837807a29419"];
		$this->assertEquals($res31, $obj->toArray(), "The method toArray() does not return the expected array with linked to");

		$obj->setMaxPointWidth(15);

		$res32 = ["allowPointSelect" => 0, "animation" => 0, "animationLimit" => 55, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 58, "borderWidth" => 94, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 1, "colorIndex" => 43, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => 1, "cursor" => "crosshair", "dashStyle" => "5ad5e24042182b1974cdf57345defe8e", "dataLabels" => [], "depth" => 95, "description" => "67daf92c833c41c95db874e18fcb2786", "edgeColor" => "acbab0d2e7e54e5a7a32fc80409601fc", "edgeWidth" => 81, "enableMouseTracking" => 1, "events" => [], "exposeElementToA11y" => 0, "findNearestPointBy" => "xy", "getExtremesFromAll" => 0, "groupPadding" => 82, "groupZPadding" => 32, "grouping" => 1, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "lineColor" => "c2580eebfdbdb9fc629f50cc147c3f63", "lineWidth" => 16, "linkedTo" => "914fab47afc86331ec62837807a29419", "maxPointWidth" => 15];
		$this->assertEquals($res32, $obj->toArray(), "The method toArray() does not return the expected array with max point width");

		$obj->setMinPointLength(61);

		$res33 = ["allowPointSelect" => 0, "animation" => 0, "animationLimit" => 55, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 58, "borderWidth" => 94, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 1, "colorIndex" => 43, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => 1, "cursor" => "crosshair", "dashStyle" => "5ad5e24042182b1974cdf57345defe8e", "dataLabels" => [], "depth" => 95, "description" => "67daf92c833c41c95db874e18fcb2786", "edgeColor" => "acbab0d2e7e54e5a7a32fc80409601fc", "edgeWidth" => 81, "enableMouseTracking" => 1, "events" => [], "exposeElementToA11y" => 0, "findNearestPointBy" => "xy", "getExtremesFromAll" => 0, "groupPadding" => 82, "groupZPadding" => 32, "grouping" => 1, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "lineColor" => "c2580eebfdbdb9fc629f50cc147c3f63", "lineWidth" => 16, "linkedTo" => "914fab47afc86331ec62837807a29419", "maxPointWidth" => 15, "minPointLength" => 61];
		$this->assertEquals($res33, $obj->toArray(), "The method toArray() does not return the expected array with min point length");

		$obj->setPoint(new \WBW\HighchartsBundle\API\Chart\PlotOptions\Waterfall\HighchartsPoint());

		$res34 = ["allowPointSelect" => 0, "animation" => 0, "animationLimit" => 55, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 58, "borderWidth" => 94, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 1, "colorIndex" => 43, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => 1, "cursor" => "crosshair", "dashStyle" => "5ad5e24042182b1974cdf57345defe8e", "dataLabels" => [], "depth" => 95, "description" => "67daf92c833c41c95db874e18fcb2786", "edgeColor" => "acbab0d2e7e54e5a7a32fc80409601fc", "edgeWidth" => 81, "enableMouseTracking" => 1, "events" => [], "exposeElementToA11y" => 0, "findNearestPointBy" => "xy", "getExtremesFromAll" => 0, "groupPadding" => 82, "groupZPadding" => 32, "grouping" => 1, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "lineColor" => "c2580eebfdbdb9fc629f50cc147c3f63", "lineWidth" => 16, "linkedTo" => "914fab47afc86331ec62837807a29419", "maxPointWidth" => 15, "minPointLength" => 61, "point" => []];
		$this->assertEquals($res34, $obj->toArray(), "The method toArray() does not return the expected array with point");

		$obj->setPointDescriptionFormatter("b5fd0c15b3ca81f726e2c7b93907ba36");

		$res35 = ["allowPointSelect" => 0, "animation" => 0, "animationLimit" => 55, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 58, "borderWidth" => 94, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 1, "colorIndex" => 43, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => 1, "cursor" => "crosshair", "dashStyle" => "5ad5e24042182b1974cdf57345defe8e", "dataLabels" => [], "depth" => 95, "description" => "67daf92c833c41c95db874e18fcb2786", "edgeColor" => "acbab0d2e7e54e5a7a32fc80409601fc", "edgeWidth" => 81, "enableMouseTracking" => 1, "events" => [], "exposeElementToA11y" => 0, "findNearestPointBy" => "xy", "getExtremesFromAll" => 0, "groupPadding" => 82, "groupZPadding" => 32, "grouping" => 1, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "lineColor" => "c2580eebfdbdb9fc629f50cc147c3f63", "lineWidth" => 16, "linkedTo" => "914fab47afc86331ec62837807a29419", "maxPointWidth" => 15, "minPointLength" => 61, "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36"];
		$this->assertEquals($res35, $obj->toArray(), "The method toArray() does not return the expected array with point description formatter");

		$obj->setPointInterval(73);

		$res36 = ["allowPointSelect" => 0, "animation" => 0, "animationLimit" => 55, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 58, "borderWidth" => 94, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 1, "colorIndex" => 43, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => 1, "cursor" => "crosshair", "dashStyle" => "5ad5e24042182b1974cdf57345defe8e", "dataLabels" => [], "depth" => 95, "description" => "67daf92c833c41c95db874e18fcb2786", "edgeColor" => "acbab0d2e7e54e5a7a32fc80409601fc", "edgeWidth" => 81, "enableMouseTracking" => 1, "events" => [], "exposeElementToA11y" => 0, "findNearestPointBy" => "xy", "getExtremesFromAll" => 0, "groupPadding" => 82, "groupZPadding" => 32, "grouping" => 1, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "lineColor" => "c2580eebfdbdb9fc629f50cc147c3f63", "lineWidth" => 16, "linkedTo" => "914fab47afc86331ec62837807a29419", "maxPointWidth" => 15, "minPointLength" => 61, "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "pointInterval" => 73];
		$this->assertEquals($res36, $obj->toArray(), "The method toArray() does not return the expected array with point interval");

		$obj->setPointIntervalUnit("year");

		$res37 = ["allowPointSelect" => 0, "animation" => 0, "animationLimit" => 55, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 58, "borderWidth" => 94, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 1, "colorIndex" => 43, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => 1, "cursor" => "crosshair", "dashStyle" => "5ad5e24042182b1974cdf57345defe8e", "dataLabels" => [], "depth" => 95, "description" => "67daf92c833c41c95db874e18fcb2786", "edgeColor" => "acbab0d2e7e54e5a7a32fc80409601fc", "edgeWidth" => 81, "enableMouseTracking" => 1, "events" => [], "exposeElementToA11y" => 0, "findNearestPointBy" => "xy", "getExtremesFromAll" => 0, "groupPadding" => 82, "groupZPadding" => 32, "grouping" => 1, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "lineColor" => "c2580eebfdbdb9fc629f50cc147c3f63", "lineWidth" => 16, "linkedTo" => "914fab47afc86331ec62837807a29419", "maxPointWidth" => 15, "minPointLength" => 61, "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "pointInterval" => 73, "pointIntervalUnit" => "year"];
		$this->assertEquals($res37, $obj->toArray(), "The method toArray() does not return the expected array with point interval unit");

		$obj->setPointPadding(56);

		$res38 = ["allowPointSelect" => 0, "animation" => 0, "animationLimit" => 55, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 58, "borderWidth" => 94, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 1, "colorIndex" => 43, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => 1, "cursor" => "crosshair", "dashStyle" => "5ad5e24042182b1974cdf57345defe8e", "dataLabels" => [], "depth" => 95, "description" => "67daf92c833c41c95db874e18fcb2786", "edgeColor" => "acbab0d2e7e54e5a7a32fc80409601fc", "edgeWidth" => 81, "enableMouseTracking" => 1, "events" => [], "exposeElementToA11y" => 0, "findNearestPointBy" => "xy", "getExtremesFromAll" => 0, "groupPadding" => 82, "groupZPadding" => 32, "grouping" => 1, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "lineColor" => "c2580eebfdbdb9fc629f50cc147c3f63", "lineWidth" => 16, "linkedTo" => "914fab47afc86331ec62837807a29419", "maxPointWidth" => 15, "minPointLength" => 61, "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "pointInterval" => 73, "pointIntervalUnit" => "year", "pointPadding" => 56];
		$this->assertEquals($res38, $obj->toArray(), "The method toArray() does not return the expected array with point padding");

		$obj->setPointPlacement("between");

		$res39 = ["allowPointSelect" => 0, "animation" => 0, "animationLimit" => 55, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 58, "borderWidth" => 94, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 1, "colorIndex" => 43, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => 1, "cursor" => "crosshair", "dashStyle" => "5ad5e24042182b1974cdf57345defe8e", "dataLabels" => [], "depth" => 95, "description" => "67daf92c833c41c95db874e18fcb2786", "edgeColor" => "acbab0d2e7e54e5a7a32fc80409601fc", "edgeWidth" => 81, "enableMouseTracking" => 1, "events" => [], "exposeElementToA11y" => 0, "findNearestPointBy" => "xy", "getExtremesFromAll" => 0, "groupPadding" => 82, "groupZPadding" => 32, "grouping" => 1, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "lineColor" => "c2580eebfdbdb9fc629f50cc147c3f63", "lineWidth" => 16, "linkedTo" => "914fab47afc86331ec62837807a29419", "maxPointWidth" => 15, "minPointLength" => 61, "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "pointInterval" => 73, "pointIntervalUnit" => "year", "pointPadding" => 56, "pointPlacement" => "between"];
		$this->assertEquals($res39, $obj->toArray(), "The method toArray() does not return the expected array with point placement");

		$obj->setPointRange(28);

		$res40 = ["allowPointSelect" => 0, "animation" => 0, "animationLimit" => 55, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 58, "borderWidth" => 94, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 1, "colorIndex" => 43, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => 1, "cursor" => "crosshair", "dashStyle" => "5ad5e24042182b1974cdf57345defe8e", "dataLabels" => [], "depth" => 95, "description" => "67daf92c833c41c95db874e18fcb2786", "edgeColor" => "acbab0d2e7e54e5a7a32fc80409601fc", "edgeWidth" => 81, "enableMouseTracking" => 1, "events" => [], "exposeElementToA11y" => 0, "findNearestPointBy" => "xy", "getExtremesFromAll" => 0, "groupPadding" => 82, "groupZPadding" => 32, "grouping" => 1, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "lineColor" => "c2580eebfdbdb9fc629f50cc147c3f63", "lineWidth" => 16, "linkedTo" => "914fab47afc86331ec62837807a29419", "maxPointWidth" => 15, "minPointLength" => 61, "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "pointInterval" => 73, "pointIntervalUnit" => "year", "pointPadding" => 56, "pointPlacement" => "between", "pointRange" => 28];
		$this->assertEquals($res40, $obj->toArray(), "The method toArray() does not return the expected array with point range");

		$obj->setPointStart(48);

		$res41 = ["allowPointSelect" => 0, "animation" => 0, "animationLimit" => 55, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 58, "borderWidth" => 94, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 1, "colorIndex" => 43, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => 1, "cursor" => "crosshair", "dashStyle" => "5ad5e24042182b1974cdf57345defe8e", "dataLabels" => [], "depth" => 95, "description" => "67daf92c833c41c95db874e18fcb2786", "edgeColor" => "acbab0d2e7e54e5a7a32fc80409601fc", "edgeWidth" => 81, "enableMouseTracking" => 1, "events" => [], "exposeElementToA11y" => 0, "findNearestPointBy" => "xy", "getExtremesFromAll" => 0, "groupPadding" => 82, "groupZPadding" => 32, "grouping" => 1, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "lineColor" => "c2580eebfdbdb9fc629f50cc147c3f63", "lineWidth" => 16, "linkedTo" => "914fab47afc86331ec62837807a29419", "maxPointWidth" => 15, "minPointLength" => 61, "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "pointInterval" => 73, "pointIntervalUnit" => "year", "pointPadding" => 56, "pointPlacement" => "between", "pointRange" => 28, "pointStart" => 48];
		$this->assertEquals($res41, $obj->toArray(), "The method toArray() does not return the expected array with point start");

		$obj->setPointWidth(36);

		$res42 = ["allowPointSelect" => 0, "animation" => 0, "animationLimit" => 55, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 58, "borderWidth" => 94, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 1, "colorIndex" => 43, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => 1, "cursor" => "crosshair", "dashStyle" => "5ad5e24042182b1974cdf57345defe8e", "dataLabels" => [], "depth" => 95, "description" => "67daf92c833c41c95db874e18fcb2786", "edgeColor" => "acbab0d2e7e54e5a7a32fc80409601fc", "edgeWidth" => 81, "enableMouseTracking" => 1, "events" => [], "exposeElementToA11y" => 0, "findNearestPointBy" => "xy", "getExtremesFromAll" => 0, "groupPadding" => 82, "groupZPadding" => 32, "grouping" => 1, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "lineColor" => "c2580eebfdbdb9fc629f50cc147c3f63", "lineWidth" => 16, "linkedTo" => "914fab47afc86331ec62837807a29419", "maxPointWidth" => 15, "minPointLength" => 61, "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "pointInterval" => 73, "pointIntervalUnit" => "year", "pointPadding" => 56, "pointPlacement" => "between", "pointRange" => 28, "pointStart" => 48, "pointWidth" => 36];
		$this->assertEquals($res42, $obj->toArray(), "The method toArray() does not return the expected array with point width");

		$obj->setSelected(1);

		$res43 = ["allowPointSelect" => 0, "animation" => 0, "animationLimit" => 55, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 58, "borderWidth" => 94, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 1, "colorIndex" => 43, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => 1, "cursor" => "crosshair", "dashStyle" => "5ad5e24042182b1974cdf57345defe8e", "dataLabels" => [], "depth" => 95, "description" => "67daf92c833c41c95db874e18fcb2786", "edgeColor" => "acbab0d2e7e54e5a7a32fc80409601fc", "edgeWidth" => 81, "enableMouseTracking" => 1, "events" => [], "exposeElementToA11y" => 0, "findNearestPointBy" => "xy", "getExtremesFromAll" => 0, "groupPadding" => 82, "groupZPadding" => 32, "grouping" => 1, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "lineColor" => "c2580eebfdbdb9fc629f50cc147c3f63", "lineWidth" => 16, "linkedTo" => "914fab47afc86331ec62837807a29419", "maxPointWidth" => 15, "minPointLength" => 61, "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "pointInterval" => 73, "pointIntervalUnit" => "year", "pointPadding" => 56, "pointPlacement" => "between", "pointRange" => 28, "pointStart" => 48, "pointWidth" => 36, "selected" => 1];
		$this->assertEquals($res43, $obj->toArray(), "The method toArray() does not return the expected array with selected");

		$obj->setShadow(1);

		$res44 = ["allowPointSelect" => 0, "animation" => 0, "animationLimit" => 55, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 58, "borderWidth" => 94, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 1, "colorIndex" => 43, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => 1, "cursor" => "crosshair", "dashStyle" => "5ad5e24042182b1974cdf57345defe8e", "dataLabels" => [], "depth" => 95, "description" => "67daf92c833c41c95db874e18fcb2786", "edgeColor" => "acbab0d2e7e54e5a7a32fc80409601fc", "edgeWidth" => 81, "enableMouseTracking" => 1, "events" => [], "exposeElementToA11y" => 0, "findNearestPointBy" => "xy", "getExtremesFromAll" => 0, "groupPadding" => 82, "groupZPadding" => 32, "grouping" => 1, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "lineColor" => "c2580eebfdbdb9fc629f50cc147c3f63", "lineWidth" => 16, "linkedTo" => "914fab47afc86331ec62837807a29419", "maxPointWidth" => 15, "minPointLength" => 61, "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "pointInterval" => 73, "pointIntervalUnit" => "year", "pointPadding" => 56, "pointPlacement" => "between", "pointRange" => 28, "pointStart" => 48, "pointWidth" => 36, "selected" => 1, "shadow" => 1];
		$this->assertEquals($res44, $obj->toArray(), "The method toArray() does not return the expected array with shadow");

		$obj->setShowCheckbox(1);

		$res45 = ["allowPointSelect" => 0, "animation" => 0, "animationLimit" => 55, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 58, "borderWidth" => 94, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 1, "colorIndex" => 43, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => 1, "cursor" => "crosshair", "dashStyle" => "5ad5e24042182b1974cdf57345defe8e", "dataLabels" => [], "depth" => 95, "description" => "67daf92c833c41c95db874e18fcb2786", "edgeColor" => "acbab0d2e7e54e5a7a32fc80409601fc", "edgeWidth" => 81, "enableMouseTracking" => 1, "events" => [], "exposeElementToA11y" => 0, "findNearestPointBy" => "xy", "getExtremesFromAll" => 0, "groupPadding" => 82, "groupZPadding" => 32, "grouping" => 1, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "lineColor" => "c2580eebfdbdb9fc629f50cc147c3f63", "lineWidth" => 16, "linkedTo" => "914fab47afc86331ec62837807a29419", "maxPointWidth" => 15, "minPointLength" => 61, "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "pointInterval" => 73, "pointIntervalUnit" => "year", "pointPadding" => 56, "pointPlacement" => "between", "pointRange" => 28, "pointStart" => 48, "pointWidth" => 36, "selected" => 1, "shadow" => 1, "showCheckbox" => 1];
		$this->assertEquals($res45, $obj->toArray(), "The method toArray() does not return the expected array with show checkbox");

		$obj->setShowInLegend(1);

		$res46 = ["allowPointSelect" => 0, "animation" => 0, "animationLimit" => 55, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 58, "borderWidth" => 94, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 1, "colorIndex" => 43, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => 1, "cursor" => "crosshair", "dashStyle" => "5ad5e24042182b1974cdf57345defe8e", "dataLabels" => [], "depth" => 95, "description" => "67daf92c833c41c95db874e18fcb2786", "edgeColor" => "acbab0d2e7e54e5a7a32fc80409601fc", "edgeWidth" => 81, "enableMouseTracking" => 1, "events" => [], "exposeElementToA11y" => 0, "findNearestPointBy" => "xy", "getExtremesFromAll" => 0, "groupPadding" => 82, "groupZPadding" => 32, "grouping" => 1, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "lineColor" => "c2580eebfdbdb9fc629f50cc147c3f63", "lineWidth" => 16, "linkedTo" => "914fab47afc86331ec62837807a29419", "maxPointWidth" => 15, "minPointLength" => 61, "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "pointInterval" => 73, "pointIntervalUnit" => "year", "pointPadding" => 56, "pointPlacement" => "between", "pointRange" => 28, "pointStart" => 48, "pointWidth" => 36, "selected" => 1, "shadow" => 1, "showCheckbox" => 1, "showInLegend" => 1];
		$this->assertEquals($res46, $obj->toArray(), "The method toArray() does not return the expected array with show in legend");

		$obj->setSkipKeyboardNavigation(0);

		$res47 = ["allowPointSelect" => 0, "animation" => 0, "animationLimit" => 55, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 58, "borderWidth" => 94, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 1, "colorIndex" => 43, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => 1, "cursor" => "crosshair", "dashStyle" => "5ad5e24042182b1974cdf57345defe8e", "dataLabels" => [], "depth" => 95, "description" => "67daf92c833c41c95db874e18fcb2786", "edgeColor" => "acbab0d2e7e54e5a7a32fc80409601fc", "edgeWidth" => 81, "enableMouseTracking" => 1, "events" => [], "exposeElementToA11y" => 0, "findNearestPointBy" => "xy", "getExtremesFromAll" => 0, "groupPadding" => 82, "groupZPadding" => 32, "grouping" => 1, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "lineColor" => "c2580eebfdbdb9fc629f50cc147c3f63", "lineWidth" => 16, "linkedTo" => "914fab47afc86331ec62837807a29419", "maxPointWidth" => 15, "minPointLength" => 61, "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "pointInterval" => 73, "pointIntervalUnit" => "year", "pointPadding" => 56, "pointPlacement" => "between", "pointRange" => 28, "pointStart" => 48, "pointWidth" => 36, "selected" => 1, "shadow" => 1, "showCheckbox" => 1, "showInLegend" => 1, "skipKeyboardNavigation" => 0];
		$this->assertEquals($res47, $obj->toArray(), "The method toArray() does not return the expected array with skip keyboard navigation");

		$obj->setSoftThreshold(1);

		$res48 = ["allowPointSelect" => 0, "animation" => 0, "animationLimit" => 55, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 58, "borderWidth" => 94, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 1, "colorIndex" => 43, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => 1, "cursor" => "crosshair", "dashStyle" => "5ad5e24042182b1974cdf57345defe8e", "dataLabels" => [], "depth" => 95, "description" => "67daf92c833c41c95db874e18fcb2786", "edgeColor" => "acbab0d2e7e54e5a7a32fc80409601fc", "edgeWidth" => 81, "enableMouseTracking" => 1, "events" => [], "exposeElementToA11y" => 0, "findNearestPointBy" => "xy", "getExtremesFromAll" => 0, "groupPadding" => 82, "groupZPadding" => 32, "grouping" => 1, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "lineColor" => "c2580eebfdbdb9fc629f50cc147c3f63", "lineWidth" => 16, "linkedTo" => "914fab47afc86331ec62837807a29419", "maxPointWidth" => 15, "minPointLength" => 61, "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "pointInterval" => 73, "pointIntervalUnit" => "year", "pointPadding" => 56, "pointPlacement" => "between", "pointRange" => 28, "pointStart" => 48, "pointWidth" => 36, "selected" => 1, "shadow" => 1, "showCheckbox" => 1, "showInLegend" => 1, "skipKeyboardNavigation" => 0, "softThreshold" => 1];
		$this->assertEquals($res48, $obj->toArray(), "The method toArray() does not return the expected array with soft threshold");

		$obj->setStates(new \WBW\HighchartsBundle\API\Chart\PlotOptions\Waterfall\HighchartsStates());

		$res49 = ["allowPointSelect" => 0, "animation" => 0, "animationLimit" => 55, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 58, "borderWidth" => 94, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 1, "colorIndex" => 43, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => 1, "cursor" => "crosshair", "dashStyle" => "5ad5e24042182b1974cdf57345defe8e", "dataLabels" => [], "depth" => 95, "description" => "67daf92c833c41c95db874e18fcb2786", "edgeColor" => "acbab0d2e7e54e5a7a32fc80409601fc", "edgeWidth" => 81, "enableMouseTracking" => 1, "events" => [], "exposeElementToA11y" => 0, "findNearestPointBy" => "xy", "getExtremesFromAll" => 0, "groupPadding" => 82, "groupZPadding" => 32, "grouping" => 1, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "lineColor" => "c2580eebfdbdb9fc629f50cc147c3f63", "lineWidth" => 16, "linkedTo" => "914fab47afc86331ec62837807a29419", "maxPointWidth" => 15, "minPointLength" => 61, "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "pointInterval" => 73, "pointIntervalUnit" => "year", "pointPadding" => 56, "pointPlacement" => "between", "pointRange" => 28, "pointStart" => 48, "pointWidth" => 36, "selected" => 1, "shadow" => 1, "showCheckbox" => 1, "showInLegend" => 1, "skipKeyboardNavigation" => 0, "softThreshold" => 1, "states" => []];
		$this->assertEquals($res49, $obj->toArray(), "The method toArray() does not return the expected array with states");

		$obj->setStickyTracking(0);

		$res50 = ["allowPointSelect" => 0, "animation" => 0, "animationLimit" => 55, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 58, "borderWidth" => 94, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 1, "colorIndex" => 43, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => 1, "cursor" => "crosshair", "dashStyle" => "5ad5e24042182b1974cdf57345defe8e", "dataLabels" => [], "depth" => 95, "description" => "67daf92c833c41c95db874e18fcb2786", "edgeColor" => "acbab0d2e7e54e5a7a32fc80409601fc", "edgeWidth" => 81, "enableMouseTracking" => 1, "events" => [], "exposeElementToA11y" => 0, "findNearestPointBy" => "xy", "getExtremesFromAll" => 0, "groupPadding" => 82, "groupZPadding" => 32, "grouping" => 1, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "lineColor" => "c2580eebfdbdb9fc629f50cc147c3f63", "lineWidth" => 16, "linkedTo" => "914fab47afc86331ec62837807a29419", "maxPointWidth" => 15, "minPointLength" => 61, "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "pointInterval" => 73, "pointIntervalUnit" => "year", "pointPadding" => 56, "pointPlacement" => "between", "pointRange" => 28, "pointStart" => 48, "pointWidth" => 36, "selected" => 1, "shadow" => 1, "showCheckbox" => 1, "showInLegend" => 1, "skipKeyboardNavigation" => 0, "softThreshold" => 1, "states" => [], "stickyTracking" => 0];
		$this->assertEquals($res50, $obj->toArray(), "The method toArray() does not return the expected array with sticky tracking");

		$obj->setThreshold(31);

		$res51 = ["allowPointSelect" => 0, "animation" => 0, "animationLimit" => 55, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 58, "borderWidth" => 94, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 1, "colorIndex" => 43, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => 1, "cursor" => "crosshair", "dashStyle" => "5ad5e24042182b1974cdf57345defe8e", "dataLabels" => [], "depth" => 95, "description" => "67daf92c833c41c95db874e18fcb2786", "edgeColor" => "acbab0d2e7e54e5a7a32fc80409601fc", "edgeWidth" => 81, "enableMouseTracking" => 1, "events" => [], "exposeElementToA11y" => 0, "findNearestPointBy" => "xy", "getExtremesFromAll" => 0, "groupPadding" => 82, "groupZPadding" => 32, "grouping" => 1, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "lineColor" => "c2580eebfdbdb9fc629f50cc147c3f63", "lineWidth" => 16, "linkedTo" => "914fab47afc86331ec62837807a29419", "maxPointWidth" => 15, "minPointLength" => 61, "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "pointInterval" => 73, "pointIntervalUnit" => "year", "pointPadding" => 56, "pointPlacement" => "between", "pointRange" => 28, "pointStart" => 48, "pointWidth" => 36, "selected" => 1, "shadow" => 1, "showCheckbox" => 1, "showInLegend" => 1, "skipKeyboardNavigation" => 0, "softThreshold" => 1, "states" => [], "stickyTracking" => 0, "threshold" => 31];
		$this->assertEquals($res51, $obj->toArray(), "The method toArray() does not return the expected array with threshold");

		$obj->setTooltip(["tooltip" => "ddbfc1b6aa0ad4d79c5dac7aa3b44888"]);

		$res52 = ["allowPointSelect" => 0, "animation" => 0, "animationLimit" => 55, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 58, "borderWidth" => 94, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 1, "colorIndex" => 43, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => 1, "cursor" => "crosshair", "dashStyle" => "5ad5e24042182b1974cdf57345defe8e", "dataLabels" => [], "depth" => 95, "description" => "67daf92c833c41c95db874e18fcb2786", "edgeColor" => "acbab0d2e7e54e5a7a32fc80409601fc", "edgeWidth" => 81, "enableMouseTracking" => 1, "events" => [], "exposeElementToA11y" => 0, "findNearestPointBy" => "xy", "getExtremesFromAll" => 0, "groupPadding" => 82, "groupZPadding" => 32, "grouping" => 1, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "lineColor" => "c2580eebfdbdb9fc629f50cc147c3f63", "lineWidth" => 16, "linkedTo" => "914fab47afc86331ec62837807a29419", "maxPointWidth" => 15, "minPointLength" => 61, "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "pointInterval" => 73, "pointIntervalUnit" => "year", "pointPadding" => 56, "pointPlacement" => "between", "pointRange" => 28, "pointStart" => 48, "pointWidth" => 36, "selected" => 1, "shadow" => 1, "showCheckbox" => 1, "showInLegend" => 1, "skipKeyboardNavigation" => 0, "softThreshold" => 1, "states" => [], "stickyTracking" => 0, "threshold" => 31, "tooltip" => ["tooltip" => "ddbfc1b6aa0ad4d79c5dac7aa3b44888"]];
		$this->assertEquals($res52, $obj->toArray(), "The method toArray() does not return the expected array with tooltip");

		$obj->setUpColor("a0ad37cccbf214955f19b240232be957");

		$res53 = ["allowPointSelect" => 0, "animation" => 0, "animationLimit" => 55, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 58, "borderWidth" => 94, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 1, "colorIndex" => 43, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => 1, "cursor" => "crosshair", "dashStyle" => "5ad5e24042182b1974cdf57345defe8e", "dataLabels" => [], "depth" => 95, "description" => "67daf92c833c41c95db874e18fcb2786", "edgeColor" => "acbab0d2e7e54e5a7a32fc80409601fc", "edgeWidth" => 81, "enableMouseTracking" => 1, "events" => [], "exposeElementToA11y" => 0, "findNearestPointBy" => "xy", "getExtremesFromAll" => 0, "groupPadding" => 82, "groupZPadding" => 32, "grouping" => 1, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "lineColor" => "c2580eebfdbdb9fc629f50cc147c3f63", "lineWidth" => 16, "linkedTo" => "914fab47afc86331ec62837807a29419", "maxPointWidth" => 15, "minPointLength" => 61, "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "pointInterval" => 73, "pointIntervalUnit" => "year", "pointPadding" => 56, "pointPlacement" => "between", "pointRange" => 28, "pointStart" => 48, "pointWidth" => 36, "selected" => 1, "shadow" => 1, "showCheckbox" => 1, "showInLegend" => 1, "skipKeyboardNavigation" => 0, "softThreshold" => 1, "states" => [], "stickyTracking" => 0, "threshold" => 31, "tooltip" => ["tooltip" => "ddbfc1b6aa0ad4d79c5dac7aa3b44888"], "upColor" => "a0ad37cccbf214955f19b240232be957"];
		$this->assertEquals($res53, $obj->toArray(), "The method toArray() does not return the expected array with up color");

		$obj->setVisible(1);

		$res54 = ["allowPointSelect" => 0, "animation" => 0, "animationLimit" => 55, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 58, "borderWidth" => 94, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 1, "colorIndex" => 43, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => 1, "cursor" => "crosshair", "dashStyle" => "5ad5e24042182b1974cdf57345defe8e", "dataLabels" => [], "depth" => 95, "description" => "67daf92c833c41c95db874e18fcb2786", "edgeColor" => "acbab0d2e7e54e5a7a32fc80409601fc", "edgeWidth" => 81, "enableMouseTracking" => 1, "events" => [], "exposeElementToA11y" => 0, "findNearestPointBy" => "xy", "getExtremesFromAll" => 0, "groupPadding" => 82, "groupZPadding" => 32, "grouping" => 1, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "lineColor" => "c2580eebfdbdb9fc629f50cc147c3f63", "lineWidth" => 16, "linkedTo" => "914fab47afc86331ec62837807a29419", "maxPointWidth" => 15, "minPointLength" => 61, "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "pointInterval" => 73, "pointIntervalUnit" => "year", "pointPadding" => 56, "pointPlacement" => "between", "pointRange" => 28, "pointStart" => 48, "pointWidth" => 36, "selected" => 1, "shadow" => 1, "showCheckbox" => 1, "showInLegend" => 1, "skipKeyboardNavigation" => 0, "softThreshold" => 1, "states" => [], "stickyTracking" => 0, "threshold" => 31, "tooltip" => ["tooltip" => "ddbfc1b6aa0ad4d79c5dac7aa3b44888"], "upColor" => "a0ad37cccbf214955f19b240232be957", "visible" => 1];
		$this->assertEquals($res54, $obj->toArray(), "The method toArray() does not return the expected array with visible");

		$obj->setZoneAxis("88421adabea658556aa3ab6c6181afad");

		$res55 = ["allowPointSelect" => 0, "animation" => 0, "animationLimit" => 55, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 58, "borderWidth" => 94, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 1, "colorIndex" => 43, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => 1, "cursor" => "crosshair", "dashStyle" => "5ad5e24042182b1974cdf57345defe8e", "dataLabels" => [], "depth" => 95, "description" => "67daf92c833c41c95db874e18fcb2786", "edgeColor" => "acbab0d2e7e54e5a7a32fc80409601fc", "edgeWidth" => 81, "enableMouseTracking" => 1, "events" => [], "exposeElementToA11y" => 0, "findNearestPointBy" => "xy", "getExtremesFromAll" => 0, "groupPadding" => 82, "groupZPadding" => 32, "grouping" => 1, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "lineColor" => "c2580eebfdbdb9fc629f50cc147c3f63", "lineWidth" => 16, "linkedTo" => "914fab47afc86331ec62837807a29419", "maxPointWidth" => 15, "minPointLength" => 61, "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "pointInterval" => 73, "pointIntervalUnit" => "year", "pointPadding" => 56, "pointPlacement" => "between", "pointRange" => 28, "pointStart" => 48, "pointWidth" => 36, "selected" => 1, "shadow" => 1, "showCheckbox" => 1, "showInLegend" => 1, "skipKeyboardNavigation" => 0, "softThreshold" => 1, "states" => [], "stickyTracking" => 0, "threshold" => 31, "tooltip" => ["tooltip" => "ddbfc1b6aa0ad4d79c5dac7aa3b44888"], "upColor" => "a0ad37cccbf214955f19b240232be957", "visible" => 1, "zoneAxis" => "88421adabea658556aa3ab6c6181afad"];
		$this->assertEquals($res55, $obj->toArray(), "The method toArray() does not return the expected array with zone axis");

		$obj->setZones(["zones" => "26f94136f5db8afd4e9df1e512f7fdc5"]);

		$res56 = ["allowPointSelect" => 0, "animation" => 0, "animationLimit" => 55, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 58, "borderWidth" => 94, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 1, "colorIndex" => 43, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => 1, "cursor" => "crosshair", "dashStyle" => "5ad5e24042182b1974cdf57345defe8e", "dataLabels" => [], "depth" => 95, "description" => "67daf92c833c41c95db874e18fcb2786", "edgeColor" => "acbab0d2e7e54e5a7a32fc80409601fc", "edgeWidth" => 81, "enableMouseTracking" => 1, "events" => [], "exposeElementToA11y" => 0, "findNearestPointBy" => "xy", "getExtremesFromAll" => 0, "groupPadding" => 82, "groupZPadding" => 32, "grouping" => 1, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "lineColor" => "c2580eebfdbdb9fc629f50cc147c3f63", "lineWidth" => 16, "linkedTo" => "914fab47afc86331ec62837807a29419", "maxPointWidth" => 15, "minPointLength" => 61, "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "pointInterval" => 73, "pointIntervalUnit" => "year", "pointPadding" => 56, "pointPlacement" => "between", "pointRange" => 28, "pointStart" => 48, "pointWidth" => 36, "selected" => 1, "shadow" => 1, "showCheckbox" => 1, "showInLegend" => 1, "skipKeyboardNavigation" => 0, "softThreshold" => 1, "states" => [], "stickyTracking" => 0, "threshold" => 31, "tooltip" => ["tooltip" => "ddbfc1b6aa0ad4d79c5dac7aa3b44888"], "upColor" => "a0ad37cccbf214955f19b240232be957", "visible" => 1, "zoneAxis" => "88421adabea658556aa3ab6c6181afad", "zones" => ["zones" => "26f94136f5db8afd4e9df1e512f7fdc5"]];
		$this->assertEquals($res56, $obj->toArray(), "The method toArray() does not return the expected array with zones");
	}

}
