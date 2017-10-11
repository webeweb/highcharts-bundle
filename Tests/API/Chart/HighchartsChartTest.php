<?php

/*
 * This file is part of the WBWHighchartsBundle package.
 *
 * (c) 2017 WBW
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\HighchartsBundle\Tests\API\Chart;

use PHPUnit_Framework_TestCase;

/**
 * Highcharts chart test.
 *
 * @author WBW <https://github.com/webeweb/WBWHighchartsBundle>
 * @package WBW\HighchartsBundle\Tests\API\Chart
 * @version 5.0.14
 */
final class HighchartsChartTest extends PHPUnit_Framework_TestCase {

	/**
	 * Test the __construct() method.
	 *
	 * @return void
	 */
	public function testConstructor() {

		$obj1 = new \WBW\HighchartsBundle\API\Chart\HighchartsChart(true);

		$this->assertEquals(null, $obj1->getAlignTicks(), "The method getAlignTicks() does not return the expected value");
		$this->assertEquals(null, $obj1->getAnimation(), "The method getAnimation() does not return the expected value");
		$this->assertEquals(null, $obj1->getBackgroundColor(), "The method getBackgroundColor() does not return the expected value");
		$this->assertEquals(null, $obj1->getBorderColor(), "The method getBorderColor() does not return the expected value");
		$this->assertEquals(null, $obj1->getBorderRadius(), "The method getBorderRadius() does not return the expected value");
		$this->assertEquals(null, $obj1->getBorderWidth(), "The method getBorderWidth() does not return the expected value");
		$this->assertEquals(null, $obj1->getClassName(), "The method getClassName() does not return the expected value");
		$this->assertEquals(null, $obj1->getColorCount(), "The method getColorCount() does not return the expected value");
		$this->assertEquals(null, $obj1->getDefaultSeriesType(), "The method getDefaultSeriesType() does not return the expected value");
		$this->assertEquals(null, $obj1->getDescription(), "The method getDescription() does not return the expected value");
		$this->assertEquals(null, $obj1->getEvents(), "The method getEvents() does not return the expected value");
		$this->assertEquals(null, $obj1->getHeight(), "The method getHeight() does not return the expected value");
		$this->assertEquals(null, $obj1->getIgnoreHiddenSeries(), "The method getIgnoreHiddenSeries() does not return the expected value");
		$this->assertEquals(null, $obj1->getInverted(), "The method getInverted() does not return the expected value");
		$this->assertEquals(null, $obj1->getMargin(), "The method getMargin() does not return the expected value");
		$this->assertEquals(null, $obj1->getMarginBottom(), "The method getMarginBottom() does not return the expected value");
		$this->assertEquals(null, $obj1->getMarginLeft(), "The method getMarginLeft() does not return the expected value");
		$this->assertEquals(null, $obj1->getMarginRight(), "The method getMarginRight() does not return the expected value");
		$this->assertEquals(null, $obj1->getMarginTop(), "The method getMarginTop() does not return the expected value");
		$this->assertEquals(null, $obj1->getOptions3d(), "The method getOptions3d() does not return the expected value");
		$this->assertEquals(null, $obj1->getPanKey(), "The method getPanKey() does not return the expected value");
		$this->assertEquals(null, $obj1->getPanning(), "The method getPanning() does not return the expected value");
		$this->assertEquals(null, $obj1->getPinchType(), "The method getPinchType() does not return the expected value");
		$this->assertEquals(null, $obj1->getPlotBackgroundColor(), "The method getPlotBackgroundColor() does not return the expected value");
		$this->assertEquals(null, $obj1->getPlotBackgroundImage(), "The method getPlotBackgroundImage() does not return the expected value");
		$this->assertEquals(null, $obj1->getPlotBorderColor(), "The method getPlotBorderColor() does not return the expected value");
		$this->assertEquals(null, $obj1->getPlotBorderWidth(), "The method getPlotBorderWidth() does not return the expected value");
		$this->assertEquals(null, $obj1->getPlotShadow(), "The method getPlotShadow() does not return the expected value");
		$this->assertEquals(null, $obj1->getPolar(), "The method getPolar() does not return the expected value");
		$this->assertEquals(null, $obj1->getReflow(), "The method getReflow() does not return the expected value");
		$this->assertEquals(null, $obj1->getRenderTo(), "The method getRenderTo() does not return the expected value");
		$this->assertEquals(null, $obj1->getResetZoomButton(), "The method getResetZoomButton() does not return the expected value");
		$this->assertEquals(null, $obj1->getSelectionMarkerFill(), "The method getSelectionMarkerFill() does not return the expected value");
		$this->assertEquals(null, $obj1->getShadow(), "The method getShadow() does not return the expected value");
		$this->assertEquals(null, $obj1->getShowAxes(), "The method getShowAxes() does not return the expected value");
		$this->assertEquals(null, $obj1->getSpacing(), "The method getSpacing() does not return the expected value");
		$this->assertEquals(null, $obj1->getSpacingBottom(), "The method getSpacingBottom() does not return the expected value");
		$this->assertEquals(null, $obj1->getSpacingLeft(), "The method getSpacingLeft() does not return the expected value");
		$this->assertEquals(null, $obj1->getSpacingRight(), "The method getSpacingRight() does not return the expected value");
		$this->assertEquals(null, $obj1->getSpacingTop(), "The method getSpacingTop() does not return the expected value");
		$this->assertEquals(null, $obj1->getStyle(), "The method getStyle() does not return the expected value");
		$this->assertEquals(null, $obj1->getType(), "The method getType() does not return the expected value");
		$this->assertEquals(null, $obj1->getTypeDescription(), "The method getTypeDescription() does not return the expected value");
		$this->assertEquals(null, $obj1->getWidth(), "The method getWidth() does not return the expected value");
		$this->assertEquals(null, $obj1->getZoomType(), "The method getZoomType() does not return the expected value");

		$obj0 = new \WBW\HighchartsBundle\API\Chart\HighchartsChart(false);

		$this->assertEquals(true, $obj0->getAlignTicks(), "The method getAlignTicks() does not return the expected value");
		$this->assertEquals(true, $obj0->getAnimation(), "The method getAnimation() does not return the expected value");
		$this->assertEquals("#FFFFFF", $obj0->getBackgroundColor(), "The method getBackgroundColor() does not return the expected value");
		$this->assertEquals("#335cad", $obj0->getBorderColor(), "The method getBorderColor() does not return the expected value");
		$this->assertEquals(0, $obj0->getBorderRadius(), "The method getBorderRadius() does not return the expected value");
		$this->assertEquals(0, $obj0->getBorderWidth(), "The method getBorderWidth() does not return the expected value");
		$this->assertEquals(null, $obj0->getClassName(), "The method getClassName() does not return the expected value");
		$this->assertEquals(10, $obj0->getColorCount(), "The method getColorCount() does not return the expected value");
		$this->assertEquals("line", $obj0->getDefaultSeriesType(), "The method getDefaultSeriesType() does not return the expected value");
		$this->assertEquals(null, $obj0->getDescription(), "The method getDescription() does not return the expected value");
		$this->assertEquals(null, $obj0->getEvents(), "The method getEvents() does not return the expected value");
		$this->assertEquals(null, $obj0->getHeight(), "The method getHeight() does not return the expected value");
		$this->assertEquals(true, $obj0->getIgnoreHiddenSeries(), "The method getIgnoreHiddenSeries() does not return the expected value");
		$this->assertEquals(false, $obj0->getInverted(), "The method getInverted() does not return the expected value");
		$this->assertEquals(null, $obj0->getMargin(), "The method getMargin() does not return the expected value");
		$this->assertEquals(null, $obj0->getMarginBottom(), "The method getMarginBottom() does not return the expected value");
		$this->assertEquals(null, $obj0->getMarginLeft(), "The method getMarginLeft() does not return the expected value");
		$this->assertEquals(null, $obj0->getMarginRight(), "The method getMarginRight() does not return the expected value");
		$this->assertEquals(null, $obj0->getMarginTop(), "The method getMarginTop() does not return the expected value");
		$this->assertEquals(null, $obj0->getOptions3d(), "The method getOptions3d() does not return the expected value");
		$this->assertEquals(null, $obj0->getPanKey(), "The method getPanKey() does not return the expected value");
		$this->assertEquals(false, $obj0->getPanning(), "The method getPanning() does not return the expected value");
		$this->assertEquals(null, $obj0->getPinchType(), "The method getPinchType() does not return the expected value");
		$this->assertEquals(null, $obj0->getPlotBackgroundColor(), "The method getPlotBackgroundColor() does not return the expected value");
		$this->assertEquals(null, $obj0->getPlotBackgroundImage(), "The method getPlotBackgroundImage() does not return the expected value");
		$this->assertEquals("#cccccc", $obj0->getPlotBorderColor(), "The method getPlotBorderColor() does not return the expected value");
		$this->assertEquals(0, $obj0->getPlotBorderWidth(), "The method getPlotBorderWidth() does not return the expected value");
		$this->assertEquals(false, $obj0->getPlotShadow(), "The method getPlotShadow() does not return the expected value");
		$this->assertEquals(false, $obj0->getPolar(), "The method getPolar() does not return the expected value");
		$this->assertEquals(true, $obj0->getReflow(), "The method getReflow() does not return the expected value");
		$this->assertEquals(null, $obj0->getRenderTo(), "The method getRenderTo() does not return the expected value");
		$this->assertEquals(null, $obj0->getResetZoomButton(), "The method getResetZoomButton() does not return the expected value");
		$this->assertEquals("rgba(51,92,173,0.25)", $obj0->getSelectionMarkerFill(), "The method getSelectionMarkerFill() does not return the expected value");
		$this->assertEquals(false, $obj0->getShadow(), "The method getShadow() does not return the expected value");
		$this->assertEquals(false, $obj0->getShowAxes(), "The method getShowAxes() does not return the expected value");
		$this->assertEquals([10, 10, 15, 10], $obj0->getSpacing(), "The method getSpacing() does not return the expected value");
		$this->assertEquals(15, $obj0->getSpacingBottom(), "The method getSpacingBottom() does not return the expected value");
		$this->assertEquals(10, $obj0->getSpacingLeft(), "The method getSpacingLeft() does not return the expected value");
		$this->assertEquals(10, $obj0->getSpacingRight(), "The method getSpacingRight() does not return the expected value");
		$this->assertEquals(10, $obj0->getSpacingTop(), "The method getSpacingTop() does not return the expected value");
		$this->assertEquals(["fontFamily" => "\"Lucida Grande\", \"Lucida Sans Unicode\", Verdana, Arial, Helvetica, sans-serif", "fontSize" => "12px"], $obj0->getStyle(), "The method getStyle() does not return the expected value");
		$this->assertEquals("line", $obj0->getType(), "The method getType() does not return the expected value");
		$this->assertEquals(null, $obj0->getTypeDescription(), "The method getTypeDescription() does not return the expected value");
		$this->assertEquals(null, $obj0->getWidth(), "The method getWidth() does not return the expected value");
		$this->assertEquals(null, $obj0->getZoomType(), "The method getZoomType() does not return the expected value");
	}

	/**
	 * Test the jsonSerialize() method.
	 *
	 * @return void
	 */
	public function testJsonSerialize() {

		$obj = new \WBW\HighchartsBundle\API\Chart\HighchartsChart(true);

		$this->assertEquals([], $obj->jsonSerialize(), "The method jsonSerialize() does not return the expected value");
	}

	/**
	 * Tests the newEvents() method.
	 *
	 * @return void.
	 */
	public function testNewEvents() {

		$obj = new \WBW\HighchartsBundle\API\Chart\HighchartsChart(false);

		$res = $obj->newEvents();
		$this->assertInstanceOf(\WBW\HighchartsBundle\API\Chart\Chart\HighchartsEvents::class, $res, "The method newEvents() does not return the expected object");
	}

	/**
	 * Tests the newOptions3d() method.
	 *
	 * @return void.
	 */
	public function testNewOptions3d() {

		$obj = new \WBW\HighchartsBundle\API\Chart\HighchartsChart(false);

		$res = $obj->newOptions3d();
		$this->assertInstanceOf(\WBW\HighchartsBundle\API\Chart\Chart\HighchartsOptions3d::class, $res, "The method newOptions3d() does not return the expected object");
	}

	/**
	 * Tests the newResetZoomButton() method.
	 *
	 * @return void.
	 */
	public function testNewResetZoomButton() {

		$obj = new \WBW\HighchartsBundle\API\Chart\HighchartsChart(false);

		$res = $obj->newResetZoomButton();
		$this->assertInstanceOf(\WBW\HighchartsBundle\API\Chart\Chart\HighchartsResetZoomButton::class, $res, "The method newResetZoomButton() does not return the expected object");
	}

	/**
	 * Test the toArray() method.
	 *
	 * @return void
	 */
	public function testToArray() {

		$obj = new \WBW\HighchartsBundle\API\Chart\HighchartsChart(true);

		$obj->setAlignTicks(1);

		$res1 = ["alignTicks" => 1];
		$this->assertEquals($res1, $obj->toArray(), "The method toArray() does not return the expected array with align ticks");

		$obj->setAnimation(1);

		$res2 = ["alignTicks" => 1, "animation" => 1];
		$this->assertEquals($res2, $obj->toArray(), "The method toArray() does not return the expected array with animation");

		$obj->setBackgroundColor("930f2a43179a7ae5fc25ed873223e99f");

		$res3 = ["alignTicks" => 1, "animation" => 1, "backgroundColor" => "930f2a43179a7ae5fc25ed873223e99f"];
		$this->assertEquals($res3, $obj->toArray(), "The method toArray() does not return the expected array with background color");

		$obj->setBorderColor("97da935a74593c55d78be9d1295aa994");

		$res4 = ["alignTicks" => 1, "animation" => 1, "backgroundColor" => "930f2a43179a7ae5fc25ed873223e99f", "borderColor" => "97da935a74593c55d78be9d1295aa994"];
		$this->assertEquals($res4, $obj->toArray(), "The method toArray() does not return the expected array with border color");

		$obj->setBorderRadius(93);

		$res5 = ["alignTicks" => 1, "animation" => 1, "backgroundColor" => "930f2a43179a7ae5fc25ed873223e99f", "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 93];
		$this->assertEquals($res5, $obj->toArray(), "The method toArray() does not return the expected array with border radius");

		$obj->setBorderWidth(30);

		$res6 = ["alignTicks" => 1, "animation" => 1, "backgroundColor" => "930f2a43179a7ae5fc25ed873223e99f", "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 93, "borderWidth" => 30];
		$this->assertEquals($res6, $obj->toArray(), "The method toArray() does not return the expected array with border width");

		$obj->setClassName("6f66e878c62db60568a3487869695820");

		$res7 = ["alignTicks" => 1, "animation" => 1, "backgroundColor" => "930f2a43179a7ae5fc25ed873223e99f", "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 93, "borderWidth" => 30, "className" => "6f66e878c62db60568a3487869695820"];
		$this->assertEquals($res7, $obj->toArray(), "The method toArray() does not return the expected array with class name");

		$obj->setColorCount(51);

		$res8 = ["alignTicks" => 1, "animation" => 1, "backgroundColor" => "930f2a43179a7ae5fc25ed873223e99f", "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 93, "borderWidth" => 30, "className" => "6f66e878c62db60568a3487869695820", "colorCount" => 51];
		$this->assertEquals($res8, $obj->toArray(), "The method toArray() does not return the expected array with color count");

		$obj->setDefaultSeriesType("pie");

		$res9 = ["alignTicks" => 1, "animation" => 1, "backgroundColor" => "930f2a43179a7ae5fc25ed873223e99f", "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 93, "borderWidth" => 30, "className" => "6f66e878c62db60568a3487869695820", "colorCount" => 51, "defaultSeriesType" => "pie"];
		$this->assertEquals($res9, $obj->toArray(), "The method toArray() does not return the expected array with default series type");

		$obj->setDescription("67daf92c833c41c95db874e18fcb2786");

		$res10 = ["alignTicks" => 1, "animation" => 1, "backgroundColor" => "930f2a43179a7ae5fc25ed873223e99f", "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 93, "borderWidth" => 30, "className" => "6f66e878c62db60568a3487869695820", "colorCount" => 51, "defaultSeriesType" => "pie", "description" => "67daf92c833c41c95db874e18fcb2786"];
		$this->assertEquals($res10, $obj->toArray(), "The method toArray() does not return the expected array with description");

		$obj->setEvents(new \WBW\HighchartsBundle\API\Chart\Chart\HighchartsEvents());

		$res11 = ["alignTicks" => 1, "animation" => 1, "backgroundColor" => "930f2a43179a7ae5fc25ed873223e99f", "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 93, "borderWidth" => 30, "className" => "6f66e878c62db60568a3487869695820", "colorCount" => 51, "defaultSeriesType" => "pie", "description" => "67daf92c833c41c95db874e18fcb2786", "events" => []];
		$this->assertEquals($res11, $obj->toArray(), "The method toArray() does not return the expected array with events");

		$obj->setHeight(92);

		$res12 = ["alignTicks" => 1, "animation" => 1, "backgroundColor" => "930f2a43179a7ae5fc25ed873223e99f", "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 93, "borderWidth" => 30, "className" => "6f66e878c62db60568a3487869695820", "colorCount" => 51, "defaultSeriesType" => "pie", "description" => "67daf92c833c41c95db874e18fcb2786", "events" => [], "height" => 92];
		$this->assertEquals($res12, $obj->toArray(), "The method toArray() does not return the expected array with height");

		$obj->setIgnoreHiddenSeries(0);

		$res13 = ["alignTicks" => 1, "animation" => 1, "backgroundColor" => "930f2a43179a7ae5fc25ed873223e99f", "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 93, "borderWidth" => 30, "className" => "6f66e878c62db60568a3487869695820", "colorCount" => 51, "defaultSeriesType" => "pie", "description" => "67daf92c833c41c95db874e18fcb2786", "events" => [], "height" => 92, "ignoreHiddenSeries" => 0];
		$this->assertEquals($res13, $obj->toArray(), "The method toArray() does not return the expected array with ignore hidden series");

		$obj->setInverted(1);

		$res14 = ["alignTicks" => 1, "animation" => 1, "backgroundColor" => "930f2a43179a7ae5fc25ed873223e99f", "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 93, "borderWidth" => 30, "className" => "6f66e878c62db60568a3487869695820", "colorCount" => 51, "defaultSeriesType" => "pie", "description" => "67daf92c833c41c95db874e18fcb2786", "events" => [], "height" => 92, "ignoreHiddenSeries" => 0, "inverted" => 1];
		$this->assertEquals($res14, $obj->toArray(), "The method toArray() does not return the expected array with inverted");

		$obj->setMargin(["margin" => "d42f4851e770aa0f758b01388874f67b"]);

		$res15 = ["alignTicks" => 1, "animation" => 1, "backgroundColor" => "930f2a43179a7ae5fc25ed873223e99f", "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 93, "borderWidth" => 30, "className" => "6f66e878c62db60568a3487869695820", "colorCount" => 51, "defaultSeriesType" => "pie", "description" => "67daf92c833c41c95db874e18fcb2786", "events" => [], "height" => 92, "ignoreHiddenSeries" => 0, "inverted" => 1, "margin" => ["margin" => "d42f4851e770aa0f758b01388874f67b"]];
		$this->assertEquals($res15, $obj->toArray(), "The method toArray() does not return the expected array with margin");

		$obj->setMarginBottom(98);

		$res16 = ["alignTicks" => 1, "animation" => 1, "backgroundColor" => "930f2a43179a7ae5fc25ed873223e99f", "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 93, "borderWidth" => 30, "className" => "6f66e878c62db60568a3487869695820", "colorCount" => 51, "defaultSeriesType" => "pie", "description" => "67daf92c833c41c95db874e18fcb2786", "events" => [], "height" => 92, "ignoreHiddenSeries" => 0, "inverted" => 1, "margin" => ["margin" => "d42f4851e770aa0f758b01388874f67b"], "marginBottom" => 98];
		$this->assertEquals($res16, $obj->toArray(), "The method toArray() does not return the expected array with margin bottom");

		$obj->setMarginLeft(91);

		$res17 = ["alignTicks" => 1, "animation" => 1, "backgroundColor" => "930f2a43179a7ae5fc25ed873223e99f", "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 93, "borderWidth" => 30, "className" => "6f66e878c62db60568a3487869695820", "colorCount" => 51, "defaultSeriesType" => "pie", "description" => "67daf92c833c41c95db874e18fcb2786", "events" => [], "height" => 92, "ignoreHiddenSeries" => 0, "inverted" => 1, "margin" => ["margin" => "d42f4851e770aa0f758b01388874f67b"], "marginBottom" => 98, "marginLeft" => 91];
		$this->assertEquals($res17, $obj->toArray(), "The method toArray() does not return the expected array with margin left");

		$obj->setMarginRight(50);

		$res18 = ["alignTicks" => 1, "animation" => 1, "backgroundColor" => "930f2a43179a7ae5fc25ed873223e99f", "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 93, "borderWidth" => 30, "className" => "6f66e878c62db60568a3487869695820", "colorCount" => 51, "defaultSeriesType" => "pie", "description" => "67daf92c833c41c95db874e18fcb2786", "events" => [], "height" => 92, "ignoreHiddenSeries" => 0, "inverted" => 1, "margin" => ["margin" => "d42f4851e770aa0f758b01388874f67b"], "marginBottom" => 98, "marginLeft" => 91, "marginRight" => 50];
		$this->assertEquals($res18, $obj->toArray(), "The method toArray() does not return the expected array with margin right");

		$obj->setMarginTop(11);

		$res19 = ["alignTicks" => 1, "animation" => 1, "backgroundColor" => "930f2a43179a7ae5fc25ed873223e99f", "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 93, "borderWidth" => 30, "className" => "6f66e878c62db60568a3487869695820", "colorCount" => 51, "defaultSeriesType" => "pie", "description" => "67daf92c833c41c95db874e18fcb2786", "events" => [], "height" => 92, "ignoreHiddenSeries" => 0, "inverted" => 1, "margin" => ["margin" => "d42f4851e770aa0f758b01388874f67b"], "marginBottom" => 98, "marginLeft" => 91, "marginRight" => 50, "marginTop" => 11];
		$this->assertEquals($res19, $obj->toArray(), "The method toArray() does not return the expected array with margin top");

		$obj->setOptions3d(new \WBW\HighchartsBundle\API\Chart\Chart\HighchartsOptions3d());

		$res20 = ["alignTicks" => 1, "animation" => 1, "backgroundColor" => "930f2a43179a7ae5fc25ed873223e99f", "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 93, "borderWidth" => 30, "className" => "6f66e878c62db60568a3487869695820", "colorCount" => 51, "defaultSeriesType" => "pie", "description" => "67daf92c833c41c95db874e18fcb2786", "events" => [], "height" => 92, "ignoreHiddenSeries" => 0, "inverted" => 1, "margin" => ["margin" => "d42f4851e770aa0f758b01388874f67b"], "marginBottom" => 98, "marginLeft" => 91, "marginRight" => 50, "marginTop" => 11, "options3d" => []];
		$this->assertEquals($res20, $obj->toArray(), "The method toArray() does not return the expected array with options3d");

		$obj->setPanKey("shift");

		$res21 = ["alignTicks" => 1, "animation" => 1, "backgroundColor" => "930f2a43179a7ae5fc25ed873223e99f", "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 93, "borderWidth" => 30, "className" => "6f66e878c62db60568a3487869695820", "colorCount" => 51, "defaultSeriesType" => "pie", "description" => "67daf92c833c41c95db874e18fcb2786", "events" => [], "height" => 92, "ignoreHiddenSeries" => 0, "inverted" => 1, "margin" => ["margin" => "d42f4851e770aa0f758b01388874f67b"], "marginBottom" => 98, "marginLeft" => 91, "marginRight" => 50, "marginTop" => 11, "options3d" => [], "panKey" => "shift"];
		$this->assertEquals($res21, $obj->toArray(), "The method toArray() does not return the expected array with pan key");

		$obj->setPanning(1);

		$res22 = ["alignTicks" => 1, "animation" => 1, "backgroundColor" => "930f2a43179a7ae5fc25ed873223e99f", "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 93, "borderWidth" => 30, "className" => "6f66e878c62db60568a3487869695820", "colorCount" => 51, "defaultSeriesType" => "pie", "description" => "67daf92c833c41c95db874e18fcb2786", "events" => [], "height" => 92, "ignoreHiddenSeries" => 0, "inverted" => 1, "margin" => ["margin" => "d42f4851e770aa0f758b01388874f67b"], "marginBottom" => 98, "marginLeft" => 91, "marginRight" => 50, "marginTop" => 11, "options3d" => [], "panKey" => "shift", "panning" => 1];
		$this->assertEquals($res22, $obj->toArray(), "The method toArray() does not return the expected array with panning");

		$obj->setPinchType("xy");

		$res23 = ["alignTicks" => 1, "animation" => 1, "backgroundColor" => "930f2a43179a7ae5fc25ed873223e99f", "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 93, "borderWidth" => 30, "className" => "6f66e878c62db60568a3487869695820", "colorCount" => 51, "defaultSeriesType" => "pie", "description" => "67daf92c833c41c95db874e18fcb2786", "events" => [], "height" => 92, "ignoreHiddenSeries" => 0, "inverted" => 1, "margin" => ["margin" => "d42f4851e770aa0f758b01388874f67b"], "marginBottom" => 98, "marginLeft" => 91, "marginRight" => 50, "marginTop" => 11, "options3d" => [], "panKey" => "shift", "panning" => 1, "pinchType" => "xy"];
		$this->assertEquals($res23, $obj->toArray(), "The method toArray() does not return the expected array with pinch type");

		$obj->setPlotBackgroundColor("c2f8b5b51823d8d11973591af04340d5");

		$res24 = ["alignTicks" => 1, "animation" => 1, "backgroundColor" => "930f2a43179a7ae5fc25ed873223e99f", "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 93, "borderWidth" => 30, "className" => "6f66e878c62db60568a3487869695820", "colorCount" => 51, "defaultSeriesType" => "pie", "description" => "67daf92c833c41c95db874e18fcb2786", "events" => [], "height" => 92, "ignoreHiddenSeries" => 0, "inverted" => 1, "margin" => ["margin" => "d42f4851e770aa0f758b01388874f67b"], "marginBottom" => 98, "marginLeft" => 91, "marginRight" => 50, "marginTop" => 11, "options3d" => [], "panKey" => "shift", "panning" => 1, "pinchType" => "xy", "plotBackgroundColor" => "c2f8b5b51823d8d11973591af04340d5"];
		$this->assertEquals($res24, $obj->toArray(), "The method toArray() does not return the expected array with plot background color");

		$obj->setPlotBackgroundImage("dace675e2a249a414ee3940daf49807f");

		$res25 = ["alignTicks" => 1, "animation" => 1, "backgroundColor" => "930f2a43179a7ae5fc25ed873223e99f", "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 93, "borderWidth" => 30, "className" => "6f66e878c62db60568a3487869695820", "colorCount" => 51, "defaultSeriesType" => "pie", "description" => "67daf92c833c41c95db874e18fcb2786", "events" => [], "height" => 92, "ignoreHiddenSeries" => 0, "inverted" => 1, "margin" => ["margin" => "d42f4851e770aa0f758b01388874f67b"], "marginBottom" => 98, "marginLeft" => 91, "marginRight" => 50, "marginTop" => 11, "options3d" => [], "panKey" => "shift", "panning" => 1, "pinchType" => "xy", "plotBackgroundColor" => "c2f8b5b51823d8d11973591af04340d5", "plotBackgroundImage" => "dace675e2a249a414ee3940daf49807f"];
		$this->assertEquals($res25, $obj->toArray(), "The method toArray() does not return the expected array with plot background image");

		$obj->setPlotBorderColor("76ac5d1e39e38330d708ac4e5f27162d");

		$res26 = ["alignTicks" => 1, "animation" => 1, "backgroundColor" => "930f2a43179a7ae5fc25ed873223e99f", "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 93, "borderWidth" => 30, "className" => "6f66e878c62db60568a3487869695820", "colorCount" => 51, "defaultSeriesType" => "pie", "description" => "67daf92c833c41c95db874e18fcb2786", "events" => [], "height" => 92, "ignoreHiddenSeries" => 0, "inverted" => 1, "margin" => ["margin" => "d42f4851e770aa0f758b01388874f67b"], "marginBottom" => 98, "marginLeft" => 91, "marginRight" => 50, "marginTop" => 11, "options3d" => [], "panKey" => "shift", "panning" => 1, "pinchType" => "xy", "plotBackgroundColor" => "c2f8b5b51823d8d11973591af04340d5", "plotBackgroundImage" => "dace675e2a249a414ee3940daf49807f", "plotBorderColor" => "76ac5d1e39e38330d708ac4e5f27162d"];
		$this->assertEquals($res26, $obj->toArray(), "The method toArray() does not return the expected array with plot border color");

		$obj->setPlotBorderWidth(4);

		$res27 = ["alignTicks" => 1, "animation" => 1, "backgroundColor" => "930f2a43179a7ae5fc25ed873223e99f", "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 93, "borderWidth" => 30, "className" => "6f66e878c62db60568a3487869695820", "colorCount" => 51, "defaultSeriesType" => "pie", "description" => "67daf92c833c41c95db874e18fcb2786", "events" => [], "height" => 92, "ignoreHiddenSeries" => 0, "inverted" => 1, "margin" => ["margin" => "d42f4851e770aa0f758b01388874f67b"], "marginBottom" => 98, "marginLeft" => 91, "marginRight" => 50, "marginTop" => 11, "options3d" => [], "panKey" => "shift", "panning" => 1, "pinchType" => "xy", "plotBackgroundColor" => "c2f8b5b51823d8d11973591af04340d5", "plotBackgroundImage" => "dace675e2a249a414ee3940daf49807f", "plotBorderColor" => "76ac5d1e39e38330d708ac4e5f27162d", "plotBorderWidth" => 4];
		$this->assertEquals($res27, $obj->toArray(), "The method toArray() does not return the expected array with plot border width");

		$obj->setPlotShadow(1);

		$res28 = ["alignTicks" => 1, "animation" => 1, "backgroundColor" => "930f2a43179a7ae5fc25ed873223e99f", "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 93, "borderWidth" => 30, "className" => "6f66e878c62db60568a3487869695820", "colorCount" => 51, "defaultSeriesType" => "pie", "description" => "67daf92c833c41c95db874e18fcb2786", "events" => [], "height" => 92, "ignoreHiddenSeries" => 0, "inverted" => 1, "margin" => ["margin" => "d42f4851e770aa0f758b01388874f67b"], "marginBottom" => 98, "marginLeft" => 91, "marginRight" => 50, "marginTop" => 11, "options3d" => [], "panKey" => "shift", "panning" => 1, "pinchType" => "xy", "plotBackgroundColor" => "c2f8b5b51823d8d11973591af04340d5", "plotBackgroundImage" => "dace675e2a249a414ee3940daf49807f", "plotBorderColor" => "76ac5d1e39e38330d708ac4e5f27162d", "plotBorderWidth" => 4, "plotShadow" => 1];
		$this->assertEquals($res28, $obj->toArray(), "The method toArray() does not return the expected array with plot shadow");

		$obj->setPolar(1);

		$res29 = ["alignTicks" => 1, "animation" => 1, "backgroundColor" => "930f2a43179a7ae5fc25ed873223e99f", "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 93, "borderWidth" => 30, "className" => "6f66e878c62db60568a3487869695820", "colorCount" => 51, "defaultSeriesType" => "pie", "description" => "67daf92c833c41c95db874e18fcb2786", "events" => [], "height" => 92, "ignoreHiddenSeries" => 0, "inverted" => 1, "margin" => ["margin" => "d42f4851e770aa0f758b01388874f67b"], "marginBottom" => 98, "marginLeft" => 91, "marginRight" => 50, "marginTop" => 11, "options3d" => [], "panKey" => "shift", "panning" => 1, "pinchType" => "xy", "plotBackgroundColor" => "c2f8b5b51823d8d11973591af04340d5", "plotBackgroundImage" => "dace675e2a249a414ee3940daf49807f", "plotBorderColor" => "76ac5d1e39e38330d708ac4e5f27162d", "plotBorderWidth" => 4, "plotShadow" => 1, "polar" => 1];
		$this->assertEquals($res29, $obj->toArray(), "The method toArray() does not return the expected array with polar");

		$obj->setReflow(0);

		$res30 = ["alignTicks" => 1, "animation" => 1, "backgroundColor" => "930f2a43179a7ae5fc25ed873223e99f", "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 93, "borderWidth" => 30, "className" => "6f66e878c62db60568a3487869695820", "colorCount" => 51, "defaultSeriesType" => "pie", "description" => "67daf92c833c41c95db874e18fcb2786", "events" => [], "height" => 92, "ignoreHiddenSeries" => 0, "inverted" => 1, "margin" => ["margin" => "d42f4851e770aa0f758b01388874f67b"], "marginBottom" => 98, "marginLeft" => 91, "marginRight" => 50, "marginTop" => 11, "options3d" => [], "panKey" => "shift", "panning" => 1, "pinchType" => "xy", "plotBackgroundColor" => "c2f8b5b51823d8d11973591af04340d5", "plotBackgroundImage" => "dace675e2a249a414ee3940daf49807f", "plotBorderColor" => "76ac5d1e39e38330d708ac4e5f27162d", "plotBorderWidth" => 4, "plotShadow" => 1, "polar" => 1, "reflow" => 0];
		$this->assertEquals($res30, $obj->toArray(), "The method toArray() does not return the expected array with reflow");

		$obj->setRenderTo("6cdf914b87eb7733ae56819ec32f386e");

		$res31 = ["alignTicks" => 1, "animation" => 1, "backgroundColor" => "930f2a43179a7ae5fc25ed873223e99f", "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 93, "borderWidth" => 30, "className" => "6f66e878c62db60568a3487869695820", "colorCount" => 51, "defaultSeriesType" => "pie", "description" => "67daf92c833c41c95db874e18fcb2786", "events" => [], "height" => 92, "ignoreHiddenSeries" => 0, "inverted" => 1, "margin" => ["margin" => "d42f4851e770aa0f758b01388874f67b"], "marginBottom" => 98, "marginLeft" => 91, "marginRight" => 50, "marginTop" => 11, "options3d" => [], "panKey" => "shift", "panning" => 1, "pinchType" => "xy", "plotBackgroundColor" => "c2f8b5b51823d8d11973591af04340d5", "plotBackgroundImage" => "dace675e2a249a414ee3940daf49807f", "plotBorderColor" => "76ac5d1e39e38330d708ac4e5f27162d", "plotBorderWidth" => 4, "plotShadow" => 1, "polar" => 1, "reflow" => 0, "renderTo" => "6cdf914b87eb7733ae56819ec32f386e"];
		$this->assertEquals($res31, $obj->toArray(), "The method toArray() does not return the expected array with render to");

		$obj->setResetZoomButton(new \WBW\HighchartsBundle\API\Chart\Chart\HighchartsResetZoomButton());

		$res32 = ["alignTicks" => 1, "animation" => 1, "backgroundColor" => "930f2a43179a7ae5fc25ed873223e99f", "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 93, "borderWidth" => 30, "className" => "6f66e878c62db60568a3487869695820", "colorCount" => 51, "defaultSeriesType" => "pie", "description" => "67daf92c833c41c95db874e18fcb2786", "events" => [], "height" => 92, "ignoreHiddenSeries" => 0, "inverted" => 1, "margin" => ["margin" => "d42f4851e770aa0f758b01388874f67b"], "marginBottom" => 98, "marginLeft" => 91, "marginRight" => 50, "marginTop" => 11, "options3d" => [], "panKey" => "shift", "panning" => 1, "pinchType" => "xy", "plotBackgroundColor" => "c2f8b5b51823d8d11973591af04340d5", "plotBackgroundImage" => "dace675e2a249a414ee3940daf49807f", "plotBorderColor" => "76ac5d1e39e38330d708ac4e5f27162d", "plotBorderWidth" => 4, "plotShadow" => 1, "polar" => 1, "reflow" => 0, "renderTo" => "6cdf914b87eb7733ae56819ec32f386e", "resetZoomButton" => []];
		$this->assertEquals($res32, $obj->toArray(), "The method toArray() does not return the expected array with reset zoom button");

		$obj->setSelectionMarkerFill("b837c10405112fa4a26778688bd27245");

		$res33 = ["alignTicks" => 1, "animation" => 1, "backgroundColor" => "930f2a43179a7ae5fc25ed873223e99f", "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 93, "borderWidth" => 30, "className" => "6f66e878c62db60568a3487869695820", "colorCount" => 51, "defaultSeriesType" => "pie", "description" => "67daf92c833c41c95db874e18fcb2786", "events" => [], "height" => 92, "ignoreHiddenSeries" => 0, "inverted" => 1, "margin" => ["margin" => "d42f4851e770aa0f758b01388874f67b"], "marginBottom" => 98, "marginLeft" => 91, "marginRight" => 50, "marginTop" => 11, "options3d" => [], "panKey" => "shift", "panning" => 1, "pinchType" => "xy", "plotBackgroundColor" => "c2f8b5b51823d8d11973591af04340d5", "plotBackgroundImage" => "dace675e2a249a414ee3940daf49807f", "plotBorderColor" => "76ac5d1e39e38330d708ac4e5f27162d", "plotBorderWidth" => 4, "plotShadow" => 1, "polar" => 1, "reflow" => 0, "renderTo" => "6cdf914b87eb7733ae56819ec32f386e", "resetZoomButton" => [], "selectionMarkerFill" => "b837c10405112fa4a26778688bd27245"];
		$this->assertEquals($res33, $obj->toArray(), "The method toArray() does not return the expected array with selection marker fill");

		$obj->setShadow(1);

		$res34 = ["alignTicks" => 1, "animation" => 1, "backgroundColor" => "930f2a43179a7ae5fc25ed873223e99f", "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 93, "borderWidth" => 30, "className" => "6f66e878c62db60568a3487869695820", "colorCount" => 51, "defaultSeriesType" => "pie", "description" => "67daf92c833c41c95db874e18fcb2786", "events" => [], "height" => 92, "ignoreHiddenSeries" => 0, "inverted" => 1, "margin" => ["margin" => "d42f4851e770aa0f758b01388874f67b"], "marginBottom" => 98, "marginLeft" => 91, "marginRight" => 50, "marginTop" => 11, "options3d" => [], "panKey" => "shift", "panning" => 1, "pinchType" => "xy", "plotBackgroundColor" => "c2f8b5b51823d8d11973591af04340d5", "plotBackgroundImage" => "dace675e2a249a414ee3940daf49807f", "plotBorderColor" => "76ac5d1e39e38330d708ac4e5f27162d", "plotBorderWidth" => 4, "plotShadow" => 1, "polar" => 1, "reflow" => 0, "renderTo" => "6cdf914b87eb7733ae56819ec32f386e", "resetZoomButton" => [], "selectionMarkerFill" => "b837c10405112fa4a26778688bd27245", "shadow" => 1];
		$this->assertEquals($res34, $obj->toArray(), "The method toArray() does not return the expected array with shadow");

		$obj->setShowAxes(0);

		$res35 = ["alignTicks" => 1, "animation" => 1, "backgroundColor" => "930f2a43179a7ae5fc25ed873223e99f", "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 93, "borderWidth" => 30, "className" => "6f66e878c62db60568a3487869695820", "colorCount" => 51, "defaultSeriesType" => "pie", "description" => "67daf92c833c41c95db874e18fcb2786", "events" => [], "height" => 92, "ignoreHiddenSeries" => 0, "inverted" => 1, "margin" => ["margin" => "d42f4851e770aa0f758b01388874f67b"], "marginBottom" => 98, "marginLeft" => 91, "marginRight" => 50, "marginTop" => 11, "options3d" => [], "panKey" => "shift", "panning" => 1, "pinchType" => "xy", "plotBackgroundColor" => "c2f8b5b51823d8d11973591af04340d5", "plotBackgroundImage" => "dace675e2a249a414ee3940daf49807f", "plotBorderColor" => "76ac5d1e39e38330d708ac4e5f27162d", "plotBorderWidth" => 4, "plotShadow" => 1, "polar" => 1, "reflow" => 0, "renderTo" => "6cdf914b87eb7733ae56819ec32f386e", "resetZoomButton" => [], "selectionMarkerFill" => "b837c10405112fa4a26778688bd27245", "shadow" => 1, "showAxes" => 0];
		$this->assertEquals($res35, $obj->toArray(), "The method toArray() does not return the expected array with show axes");

		$obj->setSpacing(["spacing" => "348b374e34b64661f5976e46c7a5c08a"]);

		$res36 = ["alignTicks" => 1, "animation" => 1, "backgroundColor" => "930f2a43179a7ae5fc25ed873223e99f", "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 93, "borderWidth" => 30, "className" => "6f66e878c62db60568a3487869695820", "colorCount" => 51, "defaultSeriesType" => "pie", "description" => "67daf92c833c41c95db874e18fcb2786", "events" => [], "height" => 92, "ignoreHiddenSeries" => 0, "inverted" => 1, "margin" => ["margin" => "d42f4851e770aa0f758b01388874f67b"], "marginBottom" => 98, "marginLeft" => 91, "marginRight" => 50, "marginTop" => 11, "options3d" => [], "panKey" => "shift", "panning" => 1, "pinchType" => "xy", "plotBackgroundColor" => "c2f8b5b51823d8d11973591af04340d5", "plotBackgroundImage" => "dace675e2a249a414ee3940daf49807f", "plotBorderColor" => "76ac5d1e39e38330d708ac4e5f27162d", "plotBorderWidth" => 4, "plotShadow" => 1, "polar" => 1, "reflow" => 0, "renderTo" => "6cdf914b87eb7733ae56819ec32f386e", "resetZoomButton" => [], "selectionMarkerFill" => "b837c10405112fa4a26778688bd27245", "shadow" => 1, "showAxes" => 0, "spacing" => ["spacing" => "348b374e34b64661f5976e46c7a5c08a"]];
		$this->assertEquals($res36, $obj->toArray(), "The method toArray() does not return the expected array with spacing");

		$obj->setSpacingBottom(7);

		$res37 = ["alignTicks" => 1, "animation" => 1, "backgroundColor" => "930f2a43179a7ae5fc25ed873223e99f", "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 93, "borderWidth" => 30, "className" => "6f66e878c62db60568a3487869695820", "colorCount" => 51, "defaultSeriesType" => "pie", "description" => "67daf92c833c41c95db874e18fcb2786", "events" => [], "height" => 92, "ignoreHiddenSeries" => 0, "inverted" => 1, "margin" => ["margin" => "d42f4851e770aa0f758b01388874f67b"], "marginBottom" => 98, "marginLeft" => 91, "marginRight" => 50, "marginTop" => 11, "options3d" => [], "panKey" => "shift", "panning" => 1, "pinchType" => "xy", "plotBackgroundColor" => "c2f8b5b51823d8d11973591af04340d5", "plotBackgroundImage" => "dace675e2a249a414ee3940daf49807f", "plotBorderColor" => "76ac5d1e39e38330d708ac4e5f27162d", "plotBorderWidth" => 4, "plotShadow" => 1, "polar" => 1, "reflow" => 0, "renderTo" => "6cdf914b87eb7733ae56819ec32f386e", "resetZoomButton" => [], "selectionMarkerFill" => "b837c10405112fa4a26778688bd27245", "shadow" => 1, "showAxes" => 0, "spacing" => ["spacing" => "348b374e34b64661f5976e46c7a5c08a"], "spacingBottom" => 7];
		$this->assertEquals($res37, $obj->toArray(), "The method toArray() does not return the expected array with spacing bottom");

		$obj->setSpacingLeft(63);

		$res38 = ["alignTicks" => 1, "animation" => 1, "backgroundColor" => "930f2a43179a7ae5fc25ed873223e99f", "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 93, "borderWidth" => 30, "className" => "6f66e878c62db60568a3487869695820", "colorCount" => 51, "defaultSeriesType" => "pie", "description" => "67daf92c833c41c95db874e18fcb2786", "events" => [], "height" => 92, "ignoreHiddenSeries" => 0, "inverted" => 1, "margin" => ["margin" => "d42f4851e770aa0f758b01388874f67b"], "marginBottom" => 98, "marginLeft" => 91, "marginRight" => 50, "marginTop" => 11, "options3d" => [], "panKey" => "shift", "panning" => 1, "pinchType" => "xy", "plotBackgroundColor" => "c2f8b5b51823d8d11973591af04340d5", "plotBackgroundImage" => "dace675e2a249a414ee3940daf49807f", "plotBorderColor" => "76ac5d1e39e38330d708ac4e5f27162d", "plotBorderWidth" => 4, "plotShadow" => 1, "polar" => 1, "reflow" => 0, "renderTo" => "6cdf914b87eb7733ae56819ec32f386e", "resetZoomButton" => [], "selectionMarkerFill" => "b837c10405112fa4a26778688bd27245", "shadow" => 1, "showAxes" => 0, "spacing" => ["spacing" => "348b374e34b64661f5976e46c7a5c08a"], "spacingBottom" => 7, "spacingLeft" => 63];
		$this->assertEquals($res38, $obj->toArray(), "The method toArray() does not return the expected array with spacing left");

		$obj->setSpacingRight(4);

		$res39 = ["alignTicks" => 1, "animation" => 1, "backgroundColor" => "930f2a43179a7ae5fc25ed873223e99f", "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 93, "borderWidth" => 30, "className" => "6f66e878c62db60568a3487869695820", "colorCount" => 51, "defaultSeriesType" => "pie", "description" => "67daf92c833c41c95db874e18fcb2786", "events" => [], "height" => 92, "ignoreHiddenSeries" => 0, "inverted" => 1, "margin" => ["margin" => "d42f4851e770aa0f758b01388874f67b"], "marginBottom" => 98, "marginLeft" => 91, "marginRight" => 50, "marginTop" => 11, "options3d" => [], "panKey" => "shift", "panning" => 1, "pinchType" => "xy", "plotBackgroundColor" => "c2f8b5b51823d8d11973591af04340d5", "plotBackgroundImage" => "dace675e2a249a414ee3940daf49807f", "plotBorderColor" => "76ac5d1e39e38330d708ac4e5f27162d", "plotBorderWidth" => 4, "plotShadow" => 1, "polar" => 1, "reflow" => 0, "renderTo" => "6cdf914b87eb7733ae56819ec32f386e", "resetZoomButton" => [], "selectionMarkerFill" => "b837c10405112fa4a26778688bd27245", "shadow" => 1, "showAxes" => 0, "spacing" => ["spacing" => "348b374e34b64661f5976e46c7a5c08a"], "spacingBottom" => 7, "spacingLeft" => 63, "spacingRight" => 4];
		$this->assertEquals($res39, $obj->toArray(), "The method toArray() does not return the expected array with spacing right");

		$obj->setSpacingTop(100);

		$res40 = ["alignTicks" => 1, "animation" => 1, "backgroundColor" => "930f2a43179a7ae5fc25ed873223e99f", "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 93, "borderWidth" => 30, "className" => "6f66e878c62db60568a3487869695820", "colorCount" => 51, "defaultSeriesType" => "pie", "description" => "67daf92c833c41c95db874e18fcb2786", "events" => [], "height" => 92, "ignoreHiddenSeries" => 0, "inverted" => 1, "margin" => ["margin" => "d42f4851e770aa0f758b01388874f67b"], "marginBottom" => 98, "marginLeft" => 91, "marginRight" => 50, "marginTop" => 11, "options3d" => [], "panKey" => "shift", "panning" => 1, "pinchType" => "xy", "plotBackgroundColor" => "c2f8b5b51823d8d11973591af04340d5", "plotBackgroundImage" => "dace675e2a249a414ee3940daf49807f", "plotBorderColor" => "76ac5d1e39e38330d708ac4e5f27162d", "plotBorderWidth" => 4, "plotShadow" => 1, "polar" => 1, "reflow" => 0, "renderTo" => "6cdf914b87eb7733ae56819ec32f386e", "resetZoomButton" => [], "selectionMarkerFill" => "b837c10405112fa4a26778688bd27245", "shadow" => 1, "showAxes" => 0, "spacing" => ["spacing" => "348b374e34b64661f5976e46c7a5c08a"], "spacingBottom" => 7, "spacingLeft" => 63, "spacingRight" => 4, "spacingTop" => 100];
		$this->assertEquals($res40, $obj->toArray(), "The method toArray() does not return the expected array with spacing top");

		$obj->setStyle(["style" => "a1b01e734b573fca08eb1a65e6df9a38"]);

		$res41 = ["alignTicks" => 1, "animation" => 1, "backgroundColor" => "930f2a43179a7ae5fc25ed873223e99f", "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 93, "borderWidth" => 30, "className" => "6f66e878c62db60568a3487869695820", "colorCount" => 51, "defaultSeriesType" => "pie", "description" => "67daf92c833c41c95db874e18fcb2786", "events" => [], "height" => 92, "ignoreHiddenSeries" => 0, "inverted" => 1, "margin" => ["margin" => "d42f4851e770aa0f758b01388874f67b"], "marginBottom" => 98, "marginLeft" => 91, "marginRight" => 50, "marginTop" => 11, "options3d" => [], "panKey" => "shift", "panning" => 1, "pinchType" => "xy", "plotBackgroundColor" => "c2f8b5b51823d8d11973591af04340d5", "plotBackgroundImage" => "dace675e2a249a414ee3940daf49807f", "plotBorderColor" => "76ac5d1e39e38330d708ac4e5f27162d", "plotBorderWidth" => 4, "plotShadow" => 1, "polar" => 1, "reflow" => 0, "renderTo" => "6cdf914b87eb7733ae56819ec32f386e", "resetZoomButton" => [], "selectionMarkerFill" => "b837c10405112fa4a26778688bd27245", "shadow" => 1, "showAxes" => 0, "spacing" => ["spacing" => "348b374e34b64661f5976e46c7a5c08a"], "spacingBottom" => 7, "spacingLeft" => 63, "spacingRight" => 4, "spacingTop" => 100, "style" => ["style" => "a1b01e734b573fca08eb1a65e6df9a38"]];
		$this->assertEquals($res41, $obj->toArray(), "The method toArray() does not return the expected array with style");

		$obj->setType("waterfall");

		$res42 = ["alignTicks" => 1, "animation" => 1, "backgroundColor" => "930f2a43179a7ae5fc25ed873223e99f", "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 93, "borderWidth" => 30, "className" => "6f66e878c62db60568a3487869695820", "colorCount" => 51, "defaultSeriesType" => "pie", "description" => "67daf92c833c41c95db874e18fcb2786", "events" => [], "height" => 92, "ignoreHiddenSeries" => 0, "inverted" => 1, "margin" => ["margin" => "d42f4851e770aa0f758b01388874f67b"], "marginBottom" => 98, "marginLeft" => 91, "marginRight" => 50, "marginTop" => 11, "options3d" => [], "panKey" => "shift", "panning" => 1, "pinchType" => "xy", "plotBackgroundColor" => "c2f8b5b51823d8d11973591af04340d5", "plotBackgroundImage" => "dace675e2a249a414ee3940daf49807f", "plotBorderColor" => "76ac5d1e39e38330d708ac4e5f27162d", "plotBorderWidth" => 4, "plotShadow" => 1, "polar" => 1, "reflow" => 0, "renderTo" => "6cdf914b87eb7733ae56819ec32f386e", "resetZoomButton" => [], "selectionMarkerFill" => "b837c10405112fa4a26778688bd27245", "shadow" => 1, "showAxes" => 0, "spacing" => ["spacing" => "348b374e34b64661f5976e46c7a5c08a"], "spacingBottom" => 7, "spacingLeft" => 63, "spacingRight" => 4, "spacingTop" => 100, "style" => ["style" => "a1b01e734b573fca08eb1a65e6df9a38"], "type" => "waterfall"];
		$this->assertEquals($res42, $obj->toArray(), "The method toArray() does not return the expected array with type");

		$obj->setTypeDescription("03c3ff624590aba1e18136e967cc7455");

		$res43 = ["alignTicks" => 1, "animation" => 1, "backgroundColor" => "930f2a43179a7ae5fc25ed873223e99f", "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 93, "borderWidth" => 30, "className" => "6f66e878c62db60568a3487869695820", "colorCount" => 51, "defaultSeriesType" => "pie", "description" => "67daf92c833c41c95db874e18fcb2786", "events" => [], "height" => 92, "ignoreHiddenSeries" => 0, "inverted" => 1, "margin" => ["margin" => "d42f4851e770aa0f758b01388874f67b"], "marginBottom" => 98, "marginLeft" => 91, "marginRight" => 50, "marginTop" => 11, "options3d" => [], "panKey" => "shift", "panning" => 1, "pinchType" => "xy", "plotBackgroundColor" => "c2f8b5b51823d8d11973591af04340d5", "plotBackgroundImage" => "dace675e2a249a414ee3940daf49807f", "plotBorderColor" => "76ac5d1e39e38330d708ac4e5f27162d", "plotBorderWidth" => 4, "plotShadow" => 1, "polar" => 1, "reflow" => 0, "renderTo" => "6cdf914b87eb7733ae56819ec32f386e", "resetZoomButton" => [], "selectionMarkerFill" => "b837c10405112fa4a26778688bd27245", "shadow" => 1, "showAxes" => 0, "spacing" => ["spacing" => "348b374e34b64661f5976e46c7a5c08a"], "spacingBottom" => 7, "spacingLeft" => 63, "spacingRight" => 4, "spacingTop" => 100, "style" => ["style" => "a1b01e734b573fca08eb1a65e6df9a38"], "type" => "waterfall", "typeDescription" => "03c3ff624590aba1e18136e967cc7455"];
		$this->assertEquals($res43, $obj->toArray(), "The method toArray() does not return the expected array with type description");

		$obj->setWidth(18);

		$res44 = ["alignTicks" => 1, "animation" => 1, "backgroundColor" => "930f2a43179a7ae5fc25ed873223e99f", "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 93, "borderWidth" => 30, "className" => "6f66e878c62db60568a3487869695820", "colorCount" => 51, "defaultSeriesType" => "pie", "description" => "67daf92c833c41c95db874e18fcb2786", "events" => [], "height" => 92, "ignoreHiddenSeries" => 0, "inverted" => 1, "margin" => ["margin" => "d42f4851e770aa0f758b01388874f67b"], "marginBottom" => 98, "marginLeft" => 91, "marginRight" => 50, "marginTop" => 11, "options3d" => [], "panKey" => "shift", "panning" => 1, "pinchType" => "xy", "plotBackgroundColor" => "c2f8b5b51823d8d11973591af04340d5", "plotBackgroundImage" => "dace675e2a249a414ee3940daf49807f", "plotBorderColor" => "76ac5d1e39e38330d708ac4e5f27162d", "plotBorderWidth" => 4, "plotShadow" => 1, "polar" => 1, "reflow" => 0, "renderTo" => "6cdf914b87eb7733ae56819ec32f386e", "resetZoomButton" => [], "selectionMarkerFill" => "b837c10405112fa4a26778688bd27245", "shadow" => 1, "showAxes" => 0, "spacing" => ["spacing" => "348b374e34b64661f5976e46c7a5c08a"], "spacingBottom" => 7, "spacingLeft" => 63, "spacingRight" => 4, "spacingTop" => 100, "style" => ["style" => "a1b01e734b573fca08eb1a65e6df9a38"], "type" => "waterfall", "typeDescription" => "03c3ff624590aba1e18136e967cc7455", "width" => 18];
		$this->assertEquals($res44, $obj->toArray(), "The method toArray() does not return the expected array with width");

		$obj->setZoomType("xy");

		$res45 = ["alignTicks" => 1, "animation" => 1, "backgroundColor" => "930f2a43179a7ae5fc25ed873223e99f", "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 93, "borderWidth" => 30, "className" => "6f66e878c62db60568a3487869695820", "colorCount" => 51, "defaultSeriesType" => "pie", "description" => "67daf92c833c41c95db874e18fcb2786", "events" => [], "height" => 92, "ignoreHiddenSeries" => 0, "inverted" => 1, "margin" => ["margin" => "d42f4851e770aa0f758b01388874f67b"], "marginBottom" => 98, "marginLeft" => 91, "marginRight" => 50, "marginTop" => 11, "options3d" => [], "panKey" => "shift", "panning" => 1, "pinchType" => "xy", "plotBackgroundColor" => "c2f8b5b51823d8d11973591af04340d5", "plotBackgroundImage" => "dace675e2a249a414ee3940daf49807f", "plotBorderColor" => "76ac5d1e39e38330d708ac4e5f27162d", "plotBorderWidth" => 4, "plotShadow" => 1, "polar" => 1, "reflow" => 0, "renderTo" => "6cdf914b87eb7733ae56819ec32f386e", "resetZoomButton" => [], "selectionMarkerFill" => "b837c10405112fa4a26778688bd27245", "shadow" => 1, "showAxes" => 0, "spacing" => ["spacing" => "348b374e34b64661f5976e46c7a5c08a"], "spacingBottom" => 7, "spacingLeft" => 63, "spacingRight" => 4, "spacingTop" => 100, "style" => ["style" => "a1b01e734b573fca08eb1a65e6df9a38"], "type" => "waterfall", "typeDescription" => "03c3ff624590aba1e18136e967cc7455", "width" => 18, "zoomType" => "xy"];
		$this->assertEquals($res45, $obj->toArray(), "The method toArray() does not return the expected array with zoom type");
	}

}
