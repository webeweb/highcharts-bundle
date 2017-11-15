<?php

/*
 * This file is part of the highcharts-bundle package.
 *
 * (c) 2017 NdC/WBW
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\HighchartsBundle\Tests\API\Chart;

use PHPUnit_Framework_TestCase;

/**
 * Highcharts chart test.
 *
 * @author NdC/WBW <https://github.com/webeweb/>
 * @package WBW\Bundle\HighchartsBundle\Tests\API\Chart
 * @version 5.0.14
 */
final class HighchartsChartTest extends PHPUnit_Framework_TestCase {

	/**
	 * Tests the __construct() method.
	 *
	 * @return void
	 */
	public function testConstructor() {

		$obj1 = new \WBW\Bundle\HighchartsBundle\API\Chart\HighchartsChart(true);

		$this->assertEquals(null, $obj1->getAlignTicks());
		$this->assertEquals(null, $obj1->getAnimation());
		$this->assertEquals(null, $obj1->getBackgroundColor());
		$this->assertEquals(null, $obj1->getBorderColor());
		$this->assertEquals(null, $obj1->getBorderRadius());
		$this->assertEquals(null, $obj1->getBorderWidth());
		$this->assertEquals(null, $obj1->getClassName());
		$this->assertEquals(null, $obj1->getColorCount());
		$this->assertEquals(null, $obj1->getDefaultSeriesType());
		$this->assertEquals(null, $obj1->getDescription());
		$this->assertEquals(null, $obj1->getEvents());
		$this->assertEquals(null, $obj1->getHeight());
		$this->assertEquals(null, $obj1->getIgnoreHiddenSeries());
		$this->assertEquals(null, $obj1->getInverted());
		$this->assertEquals(null, $obj1->getMargin());
		$this->assertEquals(null, $obj1->getMarginBottom());
		$this->assertEquals(null, $obj1->getMarginLeft());
		$this->assertEquals(null, $obj1->getMarginRight());
		$this->assertEquals(null, $obj1->getMarginTop());
		$this->assertEquals(null, $obj1->getOptions3d());
		$this->assertEquals(null, $obj1->getPanKey());
		$this->assertEquals(null, $obj1->getPanning());
		$this->assertEquals(null, $obj1->getPinchType());
		$this->assertEquals(null, $obj1->getPlotBackgroundColor());
		$this->assertEquals(null, $obj1->getPlotBackgroundImage());
		$this->assertEquals(null, $obj1->getPlotBorderColor());
		$this->assertEquals(null, $obj1->getPlotBorderWidth());
		$this->assertEquals(null, $obj1->getPlotShadow());
		$this->assertEquals(null, $obj1->getPolar());
		$this->assertEquals(null, $obj1->getReflow());
		$this->assertEquals(null, $obj1->getRenderTo());
		$this->assertEquals(null, $obj1->getResetZoomButton());
		$this->assertEquals(null, $obj1->getSelectionMarkerFill());
		$this->assertEquals(null, $obj1->getShadow());
		$this->assertEquals(null, $obj1->getShowAxes());
		$this->assertEquals(null, $obj1->getSpacing());
		$this->assertEquals(null, $obj1->getSpacingBottom());
		$this->assertEquals(null, $obj1->getSpacingLeft());
		$this->assertEquals(null, $obj1->getSpacingRight());
		$this->assertEquals(null, $obj1->getSpacingTop());
		$this->assertEquals(null, $obj1->getStyle());
		$this->assertEquals(null, $obj1->getType());
		$this->assertEquals(null, $obj1->getTypeDescription());
		$this->assertEquals(null, $obj1->getWidth());
		$this->assertEquals(null, $obj1->getZoomType());

		$obj0 = new \WBW\Bundle\HighchartsBundle\API\Chart\HighchartsChart(false);

		$this->assertEquals(true, $obj0->getAlignTicks());
		$this->assertEquals(true, $obj0->getAnimation());
		$this->assertEquals("#FFFFFF", $obj0->getBackgroundColor());
		$this->assertEquals("#335cad", $obj0->getBorderColor());
		$this->assertEquals(0, $obj0->getBorderRadius());
		$this->assertEquals(0, $obj0->getBorderWidth());
		$this->assertEquals(null, $obj0->getClassName());
		$this->assertEquals(10, $obj0->getColorCount());
		$this->assertEquals("line", $obj0->getDefaultSeriesType());
		$this->assertEquals(null, $obj0->getDescription());
		$this->assertEquals(null, $obj0->getEvents());
		$this->assertEquals(null, $obj0->getHeight());
		$this->assertEquals(true, $obj0->getIgnoreHiddenSeries());
		$this->assertEquals(false, $obj0->getInverted());
		$this->assertEquals(null, $obj0->getMargin());
		$this->assertEquals(null, $obj0->getMarginBottom());
		$this->assertEquals(null, $obj0->getMarginLeft());
		$this->assertEquals(null, $obj0->getMarginRight());
		$this->assertEquals(null, $obj0->getMarginTop());
		$this->assertEquals(null, $obj0->getOptions3d());
		$this->assertEquals(null, $obj0->getPanKey());
		$this->assertEquals(false, $obj0->getPanning());
		$this->assertEquals(null, $obj0->getPinchType());
		$this->assertEquals(null, $obj0->getPlotBackgroundColor());
		$this->assertEquals(null, $obj0->getPlotBackgroundImage());
		$this->assertEquals("#cccccc", $obj0->getPlotBorderColor());
		$this->assertEquals(0, $obj0->getPlotBorderWidth());
		$this->assertEquals(false, $obj0->getPlotShadow());
		$this->assertEquals(false, $obj0->getPolar());
		$this->assertEquals(true, $obj0->getReflow());
		$this->assertEquals(null, $obj0->getRenderTo());
		$this->assertEquals(null, $obj0->getResetZoomButton());
		$this->assertEquals("rgba(51,92,173,0.25)", $obj0->getSelectionMarkerFill());
		$this->assertEquals(false, $obj0->getShadow());
		$this->assertEquals(false, $obj0->getShowAxes());
		$this->assertEquals([10, 10, 15, 10], $obj0->getSpacing());
		$this->assertEquals(15, $obj0->getSpacingBottom());
		$this->assertEquals(10, $obj0->getSpacingLeft());
		$this->assertEquals(10, $obj0->getSpacingRight());
		$this->assertEquals(10, $obj0->getSpacingTop());
		$this->assertEquals(["fontFamily" => "\"Lucida Grande\", \"Lucida Sans Unicode\", Verdana, Arial, Helvetica, sans-serif", "fontSize" => "12px"], $obj0->getStyle());
		$this->assertEquals("line", $obj0->getType());
		$this->assertEquals(null, $obj0->getTypeDescription());
		$this->assertEquals(null, $obj0->getWidth());
		$this->assertEquals(null, $obj0->getZoomType());
    }

	/**
	 * Tests the clear() method.
	 *
	 * @return void
	 */
	public function testClear() {

		$obj = new \WBW\Bundle\HighchartsBundle\API\Chart\HighchartsChart(false);

		$obj->newEvents();
		$obj->newOptions3d();
		$obj->newResetZoomButton();

		$obj->clear();

		$res = ["events" => [], "options3d" => [], "resetZoomButton" => []];
		$this->assertEquals($res, $obj->toArray());
	}

	/**
	 * Tests the jsonSerialize() method.
	 *
	 * @return void
	 */
	public function testJsonSerialize() {

		$obj = new \WBW\Bundle\HighchartsBundle\API\Chart\HighchartsChart(true);

		$this->assertEquals([], $obj->jsonSerialize());
	}

	/**
	 * Tests the newEvents() method.
	 *
	 * @return void.
	 */
	public function testNewEvents() {

		$obj = new \WBW\Bundle\HighchartsBundle\API\Chart\HighchartsChart(false);

		$res = $obj->newEvents();
		$this->assertInstanceOf(\WBW\Bundle\HighchartsBundle\API\Chart\Chart\HighchartsEvents::class, $res);
	}

	/**
	 * Tests the newOptions3d() method.
	 *
	 * @return void.
	 */
	public function testNewOptions3d() {

		$obj = new \WBW\Bundle\HighchartsBundle\API\Chart\HighchartsChart(false);

		$res = $obj->newOptions3d();
		$this->assertInstanceOf(\WBW\Bundle\HighchartsBundle\API\Chart\Chart\HighchartsOptions3d::class, $res);
	}

	/**
	 * Tests the newResetZoomButton() method.
	 *
	 * @return void.
	 */
	public function testNewResetZoomButton() {

		$obj = new \WBW\Bundle\HighchartsBundle\API\Chart\HighchartsChart(false);

		$res = $obj->newResetZoomButton();
		$this->assertInstanceOf(\WBW\Bundle\HighchartsBundle\API\Chart\Chart\HighchartsResetZoomButton::class, $res);
	}

	/**
	 * Tests the toArray() method.
	 *
	 * @return void
	 */
	public function testToArray() {

		$obj = new \WBW\Bundle\HighchartsBundle\API\Chart\HighchartsChart(true);

		$obj->setAlignTicks(0);

		$res1 = ["alignTicks" => 0];
		$this->assertEquals($res1, $obj->toArray());

		$obj->setAnimation(0);

		$res2 = ["alignTicks" => 0, "animation" => 0];
		$this->assertEquals($res2, $obj->toArray());

		$obj->setBackgroundColor("930f2a43179a7ae5fc25ed873223e99f");

		$res3 = ["alignTicks" => 0, "animation" => 0, "backgroundColor" => "930f2a43179a7ae5fc25ed873223e99f"];
		$this->assertEquals($res3, $obj->toArray());

		$obj->setBorderColor("97da935a74593c55d78be9d1295aa994");

		$res4 = ["alignTicks" => 0, "animation" => 0, "backgroundColor" => "930f2a43179a7ae5fc25ed873223e99f", "borderColor" => "97da935a74593c55d78be9d1295aa994"];
		$this->assertEquals($res4, $obj->toArray());

		$obj->setBorderRadius(81);

		$res5 = ["alignTicks" => 0, "animation" => 0, "backgroundColor" => "930f2a43179a7ae5fc25ed873223e99f", "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 81];
		$this->assertEquals($res5, $obj->toArray());

		$obj->setBorderWidth(28);

		$res6 = ["alignTicks" => 0, "animation" => 0, "backgroundColor" => "930f2a43179a7ae5fc25ed873223e99f", "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 81, "borderWidth" => 28];
		$this->assertEquals($res6, $obj->toArray());

		$obj->setClassName("6f66e878c62db60568a3487869695820");

		$res7 = ["alignTicks" => 0, "animation" => 0, "backgroundColor" => "930f2a43179a7ae5fc25ed873223e99f", "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 81, "borderWidth" => 28, "className" => "6f66e878c62db60568a3487869695820"];
		$this->assertEquals($res7, $obj->toArray());

		$obj->setColorCount(99);

		$res8 = ["alignTicks" => 0, "animation" => 0, "backgroundColor" => "930f2a43179a7ae5fc25ed873223e99f", "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 81, "borderWidth" => 28, "className" => "6f66e878c62db60568a3487869695820", "colorCount" => 99];
		$this->assertEquals($res8, $obj->toArray());

		$obj->setDefaultSeriesType("pie");

		$res9 = ["alignTicks" => 0, "animation" => 0, "backgroundColor" => "930f2a43179a7ae5fc25ed873223e99f", "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 81, "borderWidth" => 28, "className" => "6f66e878c62db60568a3487869695820", "colorCount" => 99, "defaultSeriesType" => "pie"];
		$this->assertEquals($res9, $obj->toArray());

		$obj->setDescription("67daf92c833c41c95db874e18fcb2786");

		$res10 = ["alignTicks" => 0, "animation" => 0, "backgroundColor" => "930f2a43179a7ae5fc25ed873223e99f", "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 81, "borderWidth" => 28, "className" => "6f66e878c62db60568a3487869695820", "colorCount" => 99, "defaultSeriesType" => "pie", "description" => "67daf92c833c41c95db874e18fcb2786"];
		$this->assertEquals($res10, $obj->toArray());

		$obj->setEvents(new \WBW\Bundle\HighchartsBundle\API\Chart\Chart\HighchartsEvents());

		$res11 = ["alignTicks" => 0, "animation" => 0, "backgroundColor" => "930f2a43179a7ae5fc25ed873223e99f", "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 81, "borderWidth" => 28, "className" => "6f66e878c62db60568a3487869695820", "colorCount" => 99, "defaultSeriesType" => "pie", "description" => "67daf92c833c41c95db874e18fcb2786", "events" => []];
		$this->assertEquals($res11, $obj->toArray());

		$obj->setHeight(57);

		$res12 = ["alignTicks" => 0, "animation" => 0, "backgroundColor" => "930f2a43179a7ae5fc25ed873223e99f", "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 81, "borderWidth" => 28, "className" => "6f66e878c62db60568a3487869695820", "colorCount" => 99, "defaultSeriesType" => "pie", "description" => "67daf92c833c41c95db874e18fcb2786", "events" => [], "height" => 57];
		$this->assertEquals($res12, $obj->toArray());

		$obj->setIgnoreHiddenSeries(1);

		$res13 = ["alignTicks" => 0, "animation" => 0, "backgroundColor" => "930f2a43179a7ae5fc25ed873223e99f", "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 81, "borderWidth" => 28, "className" => "6f66e878c62db60568a3487869695820", "colorCount" => 99, "defaultSeriesType" => "pie", "description" => "67daf92c833c41c95db874e18fcb2786", "events" => [], "height" => 57, "ignoreHiddenSeries" => 1];
		$this->assertEquals($res13, $obj->toArray());

		$obj->setInverted(1);

		$res14 = ["alignTicks" => 0, "animation" => 0, "backgroundColor" => "930f2a43179a7ae5fc25ed873223e99f", "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 81, "borderWidth" => 28, "className" => "6f66e878c62db60568a3487869695820", "colorCount" => 99, "defaultSeriesType" => "pie", "description" => "67daf92c833c41c95db874e18fcb2786", "events" => [], "height" => 57, "ignoreHiddenSeries" => 1, "inverted" => 1];
		$this->assertEquals($res14, $obj->toArray());

		$obj->setMargin(["margin" => "d42f4851e770aa0f758b01388874f67b"]);

		$res15 = ["alignTicks" => 0, "animation" => 0, "backgroundColor" => "930f2a43179a7ae5fc25ed873223e99f", "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 81, "borderWidth" => 28, "className" => "6f66e878c62db60568a3487869695820", "colorCount" => 99, "defaultSeriesType" => "pie", "description" => "67daf92c833c41c95db874e18fcb2786", "events" => [], "height" => 57, "ignoreHiddenSeries" => 1, "inverted" => 1, "margin" => ["margin" => "d42f4851e770aa0f758b01388874f67b"]];
		$this->assertEquals($res15, $obj->toArray());

		$obj->setMarginBottom(7);

		$res16 = ["alignTicks" => 0, "animation" => 0, "backgroundColor" => "930f2a43179a7ae5fc25ed873223e99f", "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 81, "borderWidth" => 28, "className" => "6f66e878c62db60568a3487869695820", "colorCount" => 99, "defaultSeriesType" => "pie", "description" => "67daf92c833c41c95db874e18fcb2786", "events" => [], "height" => 57, "ignoreHiddenSeries" => 1, "inverted" => 1, "margin" => ["margin" => "d42f4851e770aa0f758b01388874f67b"], "marginBottom" => 7];
		$this->assertEquals($res16, $obj->toArray());

		$obj->setMarginLeft(49);

		$res17 = ["alignTicks" => 0, "animation" => 0, "backgroundColor" => "930f2a43179a7ae5fc25ed873223e99f", "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 81, "borderWidth" => 28, "className" => "6f66e878c62db60568a3487869695820", "colorCount" => 99, "defaultSeriesType" => "pie", "description" => "67daf92c833c41c95db874e18fcb2786", "events" => [], "height" => 57, "ignoreHiddenSeries" => 1, "inverted" => 1, "margin" => ["margin" => "d42f4851e770aa0f758b01388874f67b"], "marginBottom" => 7, "marginLeft" => 49];
		$this->assertEquals($res17, $obj->toArray());

		$obj->setMarginRight(79);

		$res18 = ["alignTicks" => 0, "animation" => 0, "backgroundColor" => "930f2a43179a7ae5fc25ed873223e99f", "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 81, "borderWidth" => 28, "className" => "6f66e878c62db60568a3487869695820", "colorCount" => 99, "defaultSeriesType" => "pie", "description" => "67daf92c833c41c95db874e18fcb2786", "events" => [], "height" => 57, "ignoreHiddenSeries" => 1, "inverted" => 1, "margin" => ["margin" => "d42f4851e770aa0f758b01388874f67b"], "marginBottom" => 7, "marginLeft" => 49, "marginRight" => 79];
		$this->assertEquals($res18, $obj->toArray());

		$obj->setMarginTop(89);

		$res19 = ["alignTicks" => 0, "animation" => 0, "backgroundColor" => "930f2a43179a7ae5fc25ed873223e99f", "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 81, "borderWidth" => 28, "className" => "6f66e878c62db60568a3487869695820", "colorCount" => 99, "defaultSeriesType" => "pie", "description" => "67daf92c833c41c95db874e18fcb2786", "events" => [], "height" => 57, "ignoreHiddenSeries" => 1, "inverted" => 1, "margin" => ["margin" => "d42f4851e770aa0f758b01388874f67b"], "marginBottom" => 7, "marginLeft" => 49, "marginRight" => 79, "marginTop" => 89];
		$this->assertEquals($res19, $obj->toArray());

		$obj->setOptions3d(new \WBW\Bundle\HighchartsBundle\API\Chart\Chart\HighchartsOptions3d());

		$res20 = ["alignTicks" => 0, "animation" => 0, "backgroundColor" => "930f2a43179a7ae5fc25ed873223e99f", "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 81, "borderWidth" => 28, "className" => "6f66e878c62db60568a3487869695820", "colorCount" => 99, "defaultSeriesType" => "pie", "description" => "67daf92c833c41c95db874e18fcb2786", "events" => [], "height" => 57, "ignoreHiddenSeries" => 1, "inverted" => 1, "margin" => ["margin" => "d42f4851e770aa0f758b01388874f67b"], "marginBottom" => 7, "marginLeft" => 49, "marginRight" => 79, "marginTop" => 89, "options3d" => []];
		$this->assertEquals($res20, $obj->toArray());

		$obj->setPanKey("shift");

		$res21 = ["alignTicks" => 0, "animation" => 0, "backgroundColor" => "930f2a43179a7ae5fc25ed873223e99f", "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 81, "borderWidth" => 28, "className" => "6f66e878c62db60568a3487869695820", "colorCount" => 99, "defaultSeriesType" => "pie", "description" => "67daf92c833c41c95db874e18fcb2786", "events" => [], "height" => 57, "ignoreHiddenSeries" => 1, "inverted" => 1, "margin" => ["margin" => "d42f4851e770aa0f758b01388874f67b"], "marginBottom" => 7, "marginLeft" => 49, "marginRight" => 79, "marginTop" => 89, "options3d" => [], "panKey" => "shift"];
		$this->assertEquals($res21, $obj->toArray());

		$obj->setPanning(1);

		$res22 = ["alignTicks" => 0, "animation" => 0, "backgroundColor" => "930f2a43179a7ae5fc25ed873223e99f", "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 81, "borderWidth" => 28, "className" => "6f66e878c62db60568a3487869695820", "colorCount" => 99, "defaultSeriesType" => "pie", "description" => "67daf92c833c41c95db874e18fcb2786", "events" => [], "height" => 57, "ignoreHiddenSeries" => 1, "inverted" => 1, "margin" => ["margin" => "d42f4851e770aa0f758b01388874f67b"], "marginBottom" => 7, "marginLeft" => 49, "marginRight" => 79, "marginTop" => 89, "options3d" => [], "panKey" => "shift", "panning" => 1];
		$this->assertEquals($res22, $obj->toArray());

		$obj->setPinchType("xy");

		$res23 = ["alignTicks" => 0, "animation" => 0, "backgroundColor" => "930f2a43179a7ae5fc25ed873223e99f", "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 81, "borderWidth" => 28, "className" => "6f66e878c62db60568a3487869695820", "colorCount" => 99, "defaultSeriesType" => "pie", "description" => "67daf92c833c41c95db874e18fcb2786", "events" => [], "height" => 57, "ignoreHiddenSeries" => 1, "inverted" => 1, "margin" => ["margin" => "d42f4851e770aa0f758b01388874f67b"], "marginBottom" => 7, "marginLeft" => 49, "marginRight" => 79, "marginTop" => 89, "options3d" => [], "panKey" => "shift", "panning" => 1, "pinchType" => "xy"];
		$this->assertEquals($res23, $obj->toArray());

		$obj->setPlotBackgroundColor("c2f8b5b51823d8d11973591af04340d5");

		$res24 = ["alignTicks" => 0, "animation" => 0, "backgroundColor" => "930f2a43179a7ae5fc25ed873223e99f", "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 81, "borderWidth" => 28, "className" => "6f66e878c62db60568a3487869695820", "colorCount" => 99, "defaultSeriesType" => "pie", "description" => "67daf92c833c41c95db874e18fcb2786", "events" => [], "height" => 57, "ignoreHiddenSeries" => 1, "inverted" => 1, "margin" => ["margin" => "d42f4851e770aa0f758b01388874f67b"], "marginBottom" => 7, "marginLeft" => 49, "marginRight" => 79, "marginTop" => 89, "options3d" => [], "panKey" => "shift", "panning" => 1, "pinchType" => "xy", "plotBackgroundColor" => "c2f8b5b51823d8d11973591af04340d5"];
		$this->assertEquals($res24, $obj->toArray());

		$obj->setPlotBackgroundImage("dace675e2a249a414ee3940daf49807f");

		$res25 = ["alignTicks" => 0, "animation" => 0, "backgroundColor" => "930f2a43179a7ae5fc25ed873223e99f", "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 81, "borderWidth" => 28, "className" => "6f66e878c62db60568a3487869695820", "colorCount" => 99, "defaultSeriesType" => "pie", "description" => "67daf92c833c41c95db874e18fcb2786", "events" => [], "height" => 57, "ignoreHiddenSeries" => 1, "inverted" => 1, "margin" => ["margin" => "d42f4851e770aa0f758b01388874f67b"], "marginBottom" => 7, "marginLeft" => 49, "marginRight" => 79, "marginTop" => 89, "options3d" => [], "panKey" => "shift", "panning" => 1, "pinchType" => "xy", "plotBackgroundColor" => "c2f8b5b51823d8d11973591af04340d5", "plotBackgroundImage" => "dace675e2a249a414ee3940daf49807f"];
		$this->assertEquals($res25, $obj->toArray());

		$obj->setPlotBorderColor("76ac5d1e39e38330d708ac4e5f27162d");

		$res26 = ["alignTicks" => 0, "animation" => 0, "backgroundColor" => "930f2a43179a7ae5fc25ed873223e99f", "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 81, "borderWidth" => 28, "className" => "6f66e878c62db60568a3487869695820", "colorCount" => 99, "defaultSeriesType" => "pie", "description" => "67daf92c833c41c95db874e18fcb2786", "events" => [], "height" => 57, "ignoreHiddenSeries" => 1, "inverted" => 1, "margin" => ["margin" => "d42f4851e770aa0f758b01388874f67b"], "marginBottom" => 7, "marginLeft" => 49, "marginRight" => 79, "marginTop" => 89, "options3d" => [], "panKey" => "shift", "panning" => 1, "pinchType" => "xy", "plotBackgroundColor" => "c2f8b5b51823d8d11973591af04340d5", "plotBackgroundImage" => "dace675e2a249a414ee3940daf49807f", "plotBorderColor" => "76ac5d1e39e38330d708ac4e5f27162d"];
		$this->assertEquals($res26, $obj->toArray());

		$obj->setPlotBorderWidth(1);

		$res27 = ["alignTicks" => 0, "animation" => 0, "backgroundColor" => "930f2a43179a7ae5fc25ed873223e99f", "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 81, "borderWidth" => 28, "className" => "6f66e878c62db60568a3487869695820", "colorCount" => 99, "defaultSeriesType" => "pie", "description" => "67daf92c833c41c95db874e18fcb2786", "events" => [], "height" => 57, "ignoreHiddenSeries" => 1, "inverted" => 1, "margin" => ["margin" => "d42f4851e770aa0f758b01388874f67b"], "marginBottom" => 7, "marginLeft" => 49, "marginRight" => 79, "marginTop" => 89, "options3d" => [], "panKey" => "shift", "panning" => 1, "pinchType" => "xy", "plotBackgroundColor" => "c2f8b5b51823d8d11973591af04340d5", "plotBackgroundImage" => "dace675e2a249a414ee3940daf49807f", "plotBorderColor" => "76ac5d1e39e38330d708ac4e5f27162d", "plotBorderWidth" => 1];
		$this->assertEquals($res27, $obj->toArray());

		$obj->setPlotShadow(1);

		$res28 = ["alignTicks" => 0, "animation" => 0, "backgroundColor" => "930f2a43179a7ae5fc25ed873223e99f", "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 81, "borderWidth" => 28, "className" => "6f66e878c62db60568a3487869695820", "colorCount" => 99, "defaultSeriesType" => "pie", "description" => "67daf92c833c41c95db874e18fcb2786", "events" => [], "height" => 57, "ignoreHiddenSeries" => 1, "inverted" => 1, "margin" => ["margin" => "d42f4851e770aa0f758b01388874f67b"], "marginBottom" => 7, "marginLeft" => 49, "marginRight" => 79, "marginTop" => 89, "options3d" => [], "panKey" => "shift", "panning" => 1, "pinchType" => "xy", "plotBackgroundColor" => "c2f8b5b51823d8d11973591af04340d5", "plotBackgroundImage" => "dace675e2a249a414ee3940daf49807f", "plotBorderColor" => "76ac5d1e39e38330d708ac4e5f27162d", "plotBorderWidth" => 1, "plotShadow" => 1];
		$this->assertEquals($res28, $obj->toArray());

		$obj->setPolar(1);

		$res29 = ["alignTicks" => 0, "animation" => 0, "backgroundColor" => "930f2a43179a7ae5fc25ed873223e99f", "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 81, "borderWidth" => 28, "className" => "6f66e878c62db60568a3487869695820", "colorCount" => 99, "defaultSeriesType" => "pie", "description" => "67daf92c833c41c95db874e18fcb2786", "events" => [], "height" => 57, "ignoreHiddenSeries" => 1, "inverted" => 1, "margin" => ["margin" => "d42f4851e770aa0f758b01388874f67b"], "marginBottom" => 7, "marginLeft" => 49, "marginRight" => 79, "marginTop" => 89, "options3d" => [], "panKey" => "shift", "panning" => 1, "pinchType" => "xy", "plotBackgroundColor" => "c2f8b5b51823d8d11973591af04340d5", "plotBackgroundImage" => "dace675e2a249a414ee3940daf49807f", "plotBorderColor" => "76ac5d1e39e38330d708ac4e5f27162d", "plotBorderWidth" => 1, "plotShadow" => 1, "polar" => 1];
		$this->assertEquals($res29, $obj->toArray());

		$obj->setReflow(0);

		$res30 = ["alignTicks" => 0, "animation" => 0, "backgroundColor" => "930f2a43179a7ae5fc25ed873223e99f", "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 81, "borderWidth" => 28, "className" => "6f66e878c62db60568a3487869695820", "colorCount" => 99, "defaultSeriesType" => "pie", "description" => "67daf92c833c41c95db874e18fcb2786", "events" => [], "height" => 57, "ignoreHiddenSeries" => 1, "inverted" => 1, "margin" => ["margin" => "d42f4851e770aa0f758b01388874f67b"], "marginBottom" => 7, "marginLeft" => 49, "marginRight" => 79, "marginTop" => 89, "options3d" => [], "panKey" => "shift", "panning" => 1, "pinchType" => "xy", "plotBackgroundColor" => "c2f8b5b51823d8d11973591af04340d5", "plotBackgroundImage" => "dace675e2a249a414ee3940daf49807f", "plotBorderColor" => "76ac5d1e39e38330d708ac4e5f27162d", "plotBorderWidth" => 1, "plotShadow" => 1, "polar" => 1, "reflow" => 0];
		$this->assertEquals($res30, $obj->toArray());

		$obj->setRenderTo("6cdf914b87eb7733ae56819ec32f386e");

		$res31 = ["alignTicks" => 0, "animation" => 0, "backgroundColor" => "930f2a43179a7ae5fc25ed873223e99f", "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 81, "borderWidth" => 28, "className" => "6f66e878c62db60568a3487869695820", "colorCount" => 99, "defaultSeriesType" => "pie", "description" => "67daf92c833c41c95db874e18fcb2786", "events" => [], "height" => 57, "ignoreHiddenSeries" => 1, "inverted" => 1, "margin" => ["margin" => "d42f4851e770aa0f758b01388874f67b"], "marginBottom" => 7, "marginLeft" => 49, "marginRight" => 79, "marginTop" => 89, "options3d" => [], "panKey" => "shift", "panning" => 1, "pinchType" => "xy", "plotBackgroundColor" => "c2f8b5b51823d8d11973591af04340d5", "plotBackgroundImage" => "dace675e2a249a414ee3940daf49807f", "plotBorderColor" => "76ac5d1e39e38330d708ac4e5f27162d", "plotBorderWidth" => 1, "plotShadow" => 1, "polar" => 1, "reflow" => 0, "renderTo" => "6cdf914b87eb7733ae56819ec32f386e"];
		$this->assertEquals($res31, $obj->toArray());

		$obj->setResetZoomButton(new \WBW\Bundle\HighchartsBundle\API\Chart\Chart\HighchartsResetZoomButton());

		$res32 = ["alignTicks" => 0, "animation" => 0, "backgroundColor" => "930f2a43179a7ae5fc25ed873223e99f", "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 81, "borderWidth" => 28, "className" => "6f66e878c62db60568a3487869695820", "colorCount" => 99, "defaultSeriesType" => "pie", "description" => "67daf92c833c41c95db874e18fcb2786", "events" => [], "height" => 57, "ignoreHiddenSeries" => 1, "inverted" => 1, "margin" => ["margin" => "d42f4851e770aa0f758b01388874f67b"], "marginBottom" => 7, "marginLeft" => 49, "marginRight" => 79, "marginTop" => 89, "options3d" => [], "panKey" => "shift", "panning" => 1, "pinchType" => "xy", "plotBackgroundColor" => "c2f8b5b51823d8d11973591af04340d5", "plotBackgroundImage" => "dace675e2a249a414ee3940daf49807f", "plotBorderColor" => "76ac5d1e39e38330d708ac4e5f27162d", "plotBorderWidth" => 1, "plotShadow" => 1, "polar" => 1, "reflow" => 0, "renderTo" => "6cdf914b87eb7733ae56819ec32f386e", "resetZoomButton" => []];
		$this->assertEquals($res32, $obj->toArray());

		$obj->setSelectionMarkerFill("b837c10405112fa4a26778688bd27245");

		$res33 = ["alignTicks" => 0, "animation" => 0, "backgroundColor" => "930f2a43179a7ae5fc25ed873223e99f", "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 81, "borderWidth" => 28, "className" => "6f66e878c62db60568a3487869695820", "colorCount" => 99, "defaultSeriesType" => "pie", "description" => "67daf92c833c41c95db874e18fcb2786", "events" => [], "height" => 57, "ignoreHiddenSeries" => 1, "inverted" => 1, "margin" => ["margin" => "d42f4851e770aa0f758b01388874f67b"], "marginBottom" => 7, "marginLeft" => 49, "marginRight" => 79, "marginTop" => 89, "options3d" => [], "panKey" => "shift", "panning" => 1, "pinchType" => "xy", "plotBackgroundColor" => "c2f8b5b51823d8d11973591af04340d5", "plotBackgroundImage" => "dace675e2a249a414ee3940daf49807f", "plotBorderColor" => "76ac5d1e39e38330d708ac4e5f27162d", "plotBorderWidth" => 1, "plotShadow" => 1, "polar" => 1, "reflow" => 0, "renderTo" => "6cdf914b87eb7733ae56819ec32f386e", "resetZoomButton" => [], "selectionMarkerFill" => "b837c10405112fa4a26778688bd27245"];
		$this->assertEquals($res33, $obj->toArray());

		$obj->setShadow(0);

		$res34 = ["alignTicks" => 0, "animation" => 0, "backgroundColor" => "930f2a43179a7ae5fc25ed873223e99f", "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 81, "borderWidth" => 28, "className" => "6f66e878c62db60568a3487869695820", "colorCount" => 99, "defaultSeriesType" => "pie", "description" => "67daf92c833c41c95db874e18fcb2786", "events" => [], "height" => 57, "ignoreHiddenSeries" => 1, "inverted" => 1, "margin" => ["margin" => "d42f4851e770aa0f758b01388874f67b"], "marginBottom" => 7, "marginLeft" => 49, "marginRight" => 79, "marginTop" => 89, "options3d" => [], "panKey" => "shift", "panning" => 1, "pinchType" => "xy", "plotBackgroundColor" => "c2f8b5b51823d8d11973591af04340d5", "plotBackgroundImage" => "dace675e2a249a414ee3940daf49807f", "plotBorderColor" => "76ac5d1e39e38330d708ac4e5f27162d", "plotBorderWidth" => 1, "plotShadow" => 1, "polar" => 1, "reflow" => 0, "renderTo" => "6cdf914b87eb7733ae56819ec32f386e", "resetZoomButton" => [], "selectionMarkerFill" => "b837c10405112fa4a26778688bd27245", "shadow" => 0];
		$this->assertEquals($res34, $obj->toArray());

		$obj->setShowAxes(0);

		$res35 = ["alignTicks" => 0, "animation" => 0, "backgroundColor" => "930f2a43179a7ae5fc25ed873223e99f", "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 81, "borderWidth" => 28, "className" => "6f66e878c62db60568a3487869695820", "colorCount" => 99, "defaultSeriesType" => "pie", "description" => "67daf92c833c41c95db874e18fcb2786", "events" => [], "height" => 57, "ignoreHiddenSeries" => 1, "inverted" => 1, "margin" => ["margin" => "d42f4851e770aa0f758b01388874f67b"], "marginBottom" => 7, "marginLeft" => 49, "marginRight" => 79, "marginTop" => 89, "options3d" => [], "panKey" => "shift", "panning" => 1, "pinchType" => "xy", "plotBackgroundColor" => "c2f8b5b51823d8d11973591af04340d5", "plotBackgroundImage" => "dace675e2a249a414ee3940daf49807f", "plotBorderColor" => "76ac5d1e39e38330d708ac4e5f27162d", "plotBorderWidth" => 1, "plotShadow" => 1, "polar" => 1, "reflow" => 0, "renderTo" => "6cdf914b87eb7733ae56819ec32f386e", "resetZoomButton" => [], "selectionMarkerFill" => "b837c10405112fa4a26778688bd27245", "shadow" => 0, "showAxes" => 0];
		$this->assertEquals($res35, $obj->toArray());

		$obj->setSpacing(["spacing" => "348b374e34b64661f5976e46c7a5c08a"]);

		$res36 = ["alignTicks" => 0, "animation" => 0, "backgroundColor" => "930f2a43179a7ae5fc25ed873223e99f", "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 81, "borderWidth" => 28, "className" => "6f66e878c62db60568a3487869695820", "colorCount" => 99, "defaultSeriesType" => "pie", "description" => "67daf92c833c41c95db874e18fcb2786", "events" => [], "height" => 57, "ignoreHiddenSeries" => 1, "inverted" => 1, "margin" => ["margin" => "d42f4851e770aa0f758b01388874f67b"], "marginBottom" => 7, "marginLeft" => 49, "marginRight" => 79, "marginTop" => 89, "options3d" => [], "panKey" => "shift", "panning" => 1, "pinchType" => "xy", "plotBackgroundColor" => "c2f8b5b51823d8d11973591af04340d5", "plotBackgroundImage" => "dace675e2a249a414ee3940daf49807f", "plotBorderColor" => "76ac5d1e39e38330d708ac4e5f27162d", "plotBorderWidth" => 1, "plotShadow" => 1, "polar" => 1, "reflow" => 0, "renderTo" => "6cdf914b87eb7733ae56819ec32f386e", "resetZoomButton" => [], "selectionMarkerFill" => "b837c10405112fa4a26778688bd27245", "shadow" => 0, "showAxes" => 0, "spacing" => ["spacing" => "348b374e34b64661f5976e46c7a5c08a"]];
		$this->assertEquals($res36, $obj->toArray());

		$obj->setSpacingBottom(88);

		$res37 = ["alignTicks" => 0, "animation" => 0, "backgroundColor" => "930f2a43179a7ae5fc25ed873223e99f", "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 81, "borderWidth" => 28, "className" => "6f66e878c62db60568a3487869695820", "colorCount" => 99, "defaultSeriesType" => "pie", "description" => "67daf92c833c41c95db874e18fcb2786", "events" => [], "height" => 57, "ignoreHiddenSeries" => 1, "inverted" => 1, "margin" => ["margin" => "d42f4851e770aa0f758b01388874f67b"], "marginBottom" => 7, "marginLeft" => 49, "marginRight" => 79, "marginTop" => 89, "options3d" => [], "panKey" => "shift", "panning" => 1, "pinchType" => "xy", "plotBackgroundColor" => "c2f8b5b51823d8d11973591af04340d5", "plotBackgroundImage" => "dace675e2a249a414ee3940daf49807f", "plotBorderColor" => "76ac5d1e39e38330d708ac4e5f27162d", "plotBorderWidth" => 1, "plotShadow" => 1, "polar" => 1, "reflow" => 0, "renderTo" => "6cdf914b87eb7733ae56819ec32f386e", "resetZoomButton" => [], "selectionMarkerFill" => "b837c10405112fa4a26778688bd27245", "shadow" => 0, "showAxes" => 0, "spacing" => ["spacing" => "348b374e34b64661f5976e46c7a5c08a"], "spacingBottom" => 88];
		$this->assertEquals($res37, $obj->toArray());

		$obj->setSpacingLeft(1);

		$res38 = ["alignTicks" => 0, "animation" => 0, "backgroundColor" => "930f2a43179a7ae5fc25ed873223e99f", "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 81, "borderWidth" => 28, "className" => "6f66e878c62db60568a3487869695820", "colorCount" => 99, "defaultSeriesType" => "pie", "description" => "67daf92c833c41c95db874e18fcb2786", "events" => [], "height" => 57, "ignoreHiddenSeries" => 1, "inverted" => 1, "margin" => ["margin" => "d42f4851e770aa0f758b01388874f67b"], "marginBottom" => 7, "marginLeft" => 49, "marginRight" => 79, "marginTop" => 89, "options3d" => [], "panKey" => "shift", "panning" => 1, "pinchType" => "xy", "plotBackgroundColor" => "c2f8b5b51823d8d11973591af04340d5", "plotBackgroundImage" => "dace675e2a249a414ee3940daf49807f", "plotBorderColor" => "76ac5d1e39e38330d708ac4e5f27162d", "plotBorderWidth" => 1, "plotShadow" => 1, "polar" => 1, "reflow" => 0, "renderTo" => "6cdf914b87eb7733ae56819ec32f386e", "resetZoomButton" => [], "selectionMarkerFill" => "b837c10405112fa4a26778688bd27245", "shadow" => 0, "showAxes" => 0, "spacing" => ["spacing" => "348b374e34b64661f5976e46c7a5c08a"], "spacingBottom" => 88, "spacingLeft" => 1];
		$this->assertEquals($res38, $obj->toArray());

		$obj->setSpacingRight(49);

		$res39 = ["alignTicks" => 0, "animation" => 0, "backgroundColor" => "930f2a43179a7ae5fc25ed873223e99f", "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 81, "borderWidth" => 28, "className" => "6f66e878c62db60568a3487869695820", "colorCount" => 99, "defaultSeriesType" => "pie", "description" => "67daf92c833c41c95db874e18fcb2786", "events" => [], "height" => 57, "ignoreHiddenSeries" => 1, "inverted" => 1, "margin" => ["margin" => "d42f4851e770aa0f758b01388874f67b"], "marginBottom" => 7, "marginLeft" => 49, "marginRight" => 79, "marginTop" => 89, "options3d" => [], "panKey" => "shift", "panning" => 1, "pinchType" => "xy", "plotBackgroundColor" => "c2f8b5b51823d8d11973591af04340d5", "plotBackgroundImage" => "dace675e2a249a414ee3940daf49807f", "plotBorderColor" => "76ac5d1e39e38330d708ac4e5f27162d", "plotBorderWidth" => 1, "plotShadow" => 1, "polar" => 1, "reflow" => 0, "renderTo" => "6cdf914b87eb7733ae56819ec32f386e", "resetZoomButton" => [], "selectionMarkerFill" => "b837c10405112fa4a26778688bd27245", "shadow" => 0, "showAxes" => 0, "spacing" => ["spacing" => "348b374e34b64661f5976e46c7a5c08a"], "spacingBottom" => 88, "spacingLeft" => 1, "spacingRight" => 49];
		$this->assertEquals($res39, $obj->toArray());

		$obj->setSpacingTop(84);

		$res40 = ["alignTicks" => 0, "animation" => 0, "backgroundColor" => "930f2a43179a7ae5fc25ed873223e99f", "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 81, "borderWidth" => 28, "className" => "6f66e878c62db60568a3487869695820", "colorCount" => 99, "defaultSeriesType" => "pie", "description" => "67daf92c833c41c95db874e18fcb2786", "events" => [], "height" => 57, "ignoreHiddenSeries" => 1, "inverted" => 1, "margin" => ["margin" => "d42f4851e770aa0f758b01388874f67b"], "marginBottom" => 7, "marginLeft" => 49, "marginRight" => 79, "marginTop" => 89, "options3d" => [], "panKey" => "shift", "panning" => 1, "pinchType" => "xy", "plotBackgroundColor" => "c2f8b5b51823d8d11973591af04340d5", "plotBackgroundImage" => "dace675e2a249a414ee3940daf49807f", "plotBorderColor" => "76ac5d1e39e38330d708ac4e5f27162d", "plotBorderWidth" => 1, "plotShadow" => 1, "polar" => 1, "reflow" => 0, "renderTo" => "6cdf914b87eb7733ae56819ec32f386e", "resetZoomButton" => [], "selectionMarkerFill" => "b837c10405112fa4a26778688bd27245", "shadow" => 0, "showAxes" => 0, "spacing" => ["spacing" => "348b374e34b64661f5976e46c7a5c08a"], "spacingBottom" => 88, "spacingLeft" => 1, "spacingRight" => 49, "spacingTop" => 84];
		$this->assertEquals($res40, $obj->toArray());

		$obj->setStyle(["style" => "a1b01e734b573fca08eb1a65e6df9a38"]);

		$res41 = ["alignTicks" => 0, "animation" => 0, "backgroundColor" => "930f2a43179a7ae5fc25ed873223e99f", "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 81, "borderWidth" => 28, "className" => "6f66e878c62db60568a3487869695820", "colorCount" => 99, "defaultSeriesType" => "pie", "description" => "67daf92c833c41c95db874e18fcb2786", "events" => [], "height" => 57, "ignoreHiddenSeries" => 1, "inverted" => 1, "margin" => ["margin" => "d42f4851e770aa0f758b01388874f67b"], "marginBottom" => 7, "marginLeft" => 49, "marginRight" => 79, "marginTop" => 89, "options3d" => [], "panKey" => "shift", "panning" => 1, "pinchType" => "xy", "plotBackgroundColor" => "c2f8b5b51823d8d11973591af04340d5", "plotBackgroundImage" => "dace675e2a249a414ee3940daf49807f", "plotBorderColor" => "76ac5d1e39e38330d708ac4e5f27162d", "plotBorderWidth" => 1, "plotShadow" => 1, "polar" => 1, "reflow" => 0, "renderTo" => "6cdf914b87eb7733ae56819ec32f386e", "resetZoomButton" => [], "selectionMarkerFill" => "b837c10405112fa4a26778688bd27245", "shadow" => 0, "showAxes" => 0, "spacing" => ["spacing" => "348b374e34b64661f5976e46c7a5c08a"], "spacingBottom" => 88, "spacingLeft" => 1, "spacingRight" => 49, "spacingTop" => 84, "style" => ["style" => "a1b01e734b573fca08eb1a65e6df9a38"]];
		$this->assertEquals($res41, $obj->toArray());

		$obj->setType("waterfall");

		$res42 = ["alignTicks" => 0, "animation" => 0, "backgroundColor" => "930f2a43179a7ae5fc25ed873223e99f", "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 81, "borderWidth" => 28, "className" => "6f66e878c62db60568a3487869695820", "colorCount" => 99, "defaultSeriesType" => "pie", "description" => "67daf92c833c41c95db874e18fcb2786", "events" => [], "height" => 57, "ignoreHiddenSeries" => 1, "inverted" => 1, "margin" => ["margin" => "d42f4851e770aa0f758b01388874f67b"], "marginBottom" => 7, "marginLeft" => 49, "marginRight" => 79, "marginTop" => 89, "options3d" => [], "panKey" => "shift", "panning" => 1, "pinchType" => "xy", "plotBackgroundColor" => "c2f8b5b51823d8d11973591af04340d5", "plotBackgroundImage" => "dace675e2a249a414ee3940daf49807f", "plotBorderColor" => "76ac5d1e39e38330d708ac4e5f27162d", "plotBorderWidth" => 1, "plotShadow" => 1, "polar" => 1, "reflow" => 0, "renderTo" => "6cdf914b87eb7733ae56819ec32f386e", "resetZoomButton" => [], "selectionMarkerFill" => "b837c10405112fa4a26778688bd27245", "shadow" => 0, "showAxes" => 0, "spacing" => ["spacing" => "348b374e34b64661f5976e46c7a5c08a"], "spacingBottom" => 88, "spacingLeft" => 1, "spacingRight" => 49, "spacingTop" => 84, "style" => ["style" => "a1b01e734b573fca08eb1a65e6df9a38"], "type" => "waterfall"];
		$this->assertEquals($res42, $obj->toArray());

		$obj->setTypeDescription("03c3ff624590aba1e18136e967cc7455");

		$res43 = ["alignTicks" => 0, "animation" => 0, "backgroundColor" => "930f2a43179a7ae5fc25ed873223e99f", "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 81, "borderWidth" => 28, "className" => "6f66e878c62db60568a3487869695820", "colorCount" => 99, "defaultSeriesType" => "pie", "description" => "67daf92c833c41c95db874e18fcb2786", "events" => [], "height" => 57, "ignoreHiddenSeries" => 1, "inverted" => 1, "margin" => ["margin" => "d42f4851e770aa0f758b01388874f67b"], "marginBottom" => 7, "marginLeft" => 49, "marginRight" => 79, "marginTop" => 89, "options3d" => [], "panKey" => "shift", "panning" => 1, "pinchType" => "xy", "plotBackgroundColor" => "c2f8b5b51823d8d11973591af04340d5", "plotBackgroundImage" => "dace675e2a249a414ee3940daf49807f", "plotBorderColor" => "76ac5d1e39e38330d708ac4e5f27162d", "plotBorderWidth" => 1, "plotShadow" => 1, "polar" => 1, "reflow" => 0, "renderTo" => "6cdf914b87eb7733ae56819ec32f386e", "resetZoomButton" => [], "selectionMarkerFill" => "b837c10405112fa4a26778688bd27245", "shadow" => 0, "showAxes" => 0, "spacing" => ["spacing" => "348b374e34b64661f5976e46c7a5c08a"], "spacingBottom" => 88, "spacingLeft" => 1, "spacingRight" => 49, "spacingTop" => 84, "style" => ["style" => "a1b01e734b573fca08eb1a65e6df9a38"], "type" => "waterfall", "typeDescription" => "03c3ff624590aba1e18136e967cc7455"];
		$this->assertEquals($res43, $obj->toArray());

		$obj->setWidth(32);

		$res44 = ["alignTicks" => 0, "animation" => 0, "backgroundColor" => "930f2a43179a7ae5fc25ed873223e99f", "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 81, "borderWidth" => 28, "className" => "6f66e878c62db60568a3487869695820", "colorCount" => 99, "defaultSeriesType" => "pie", "description" => "67daf92c833c41c95db874e18fcb2786", "events" => [], "height" => 57, "ignoreHiddenSeries" => 1, "inverted" => 1, "margin" => ["margin" => "d42f4851e770aa0f758b01388874f67b"], "marginBottom" => 7, "marginLeft" => 49, "marginRight" => 79, "marginTop" => 89, "options3d" => [], "panKey" => "shift", "panning" => 1, "pinchType" => "xy", "plotBackgroundColor" => "c2f8b5b51823d8d11973591af04340d5", "plotBackgroundImage" => "dace675e2a249a414ee3940daf49807f", "plotBorderColor" => "76ac5d1e39e38330d708ac4e5f27162d", "plotBorderWidth" => 1, "plotShadow" => 1, "polar" => 1, "reflow" => 0, "renderTo" => "6cdf914b87eb7733ae56819ec32f386e", "resetZoomButton" => [], "selectionMarkerFill" => "b837c10405112fa4a26778688bd27245", "shadow" => 0, "showAxes" => 0, "spacing" => ["spacing" => "348b374e34b64661f5976e46c7a5c08a"], "spacingBottom" => 88, "spacingLeft" => 1, "spacingRight" => 49, "spacingTop" => 84, "style" => ["style" => "a1b01e734b573fca08eb1a65e6df9a38"], "type" => "waterfall", "typeDescription" => "03c3ff624590aba1e18136e967cc7455", "width" => 32];
		$this->assertEquals($res44, $obj->toArray());

		$obj->setZoomType("xy");

		$res45 = ["alignTicks" => 0, "animation" => 0, "backgroundColor" => "930f2a43179a7ae5fc25ed873223e99f", "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 81, "borderWidth" => 28, "className" => "6f66e878c62db60568a3487869695820", "colorCount" => 99, "defaultSeriesType" => "pie", "description" => "67daf92c833c41c95db874e18fcb2786", "events" => [], "height" => 57, "ignoreHiddenSeries" => 1, "inverted" => 1, "margin" => ["margin" => "d42f4851e770aa0f758b01388874f67b"], "marginBottom" => 7, "marginLeft" => 49, "marginRight" => 79, "marginTop" => 89, "options3d" => [], "panKey" => "shift", "panning" => 1, "pinchType" => "xy", "plotBackgroundColor" => "c2f8b5b51823d8d11973591af04340d5", "plotBackgroundImage" => "dace675e2a249a414ee3940daf49807f", "plotBorderColor" => "76ac5d1e39e38330d708ac4e5f27162d", "plotBorderWidth" => 1, "plotShadow" => 1, "polar" => 1, "reflow" => 0, "renderTo" => "6cdf914b87eb7733ae56819ec32f386e", "resetZoomButton" => [], "selectionMarkerFill" => "b837c10405112fa4a26778688bd27245", "shadow" => 0, "showAxes" => 0, "spacing" => ["spacing" => "348b374e34b64661f5976e46c7a5c08a"], "spacingBottom" => 88, "spacingLeft" => 1, "spacingRight" => 49, "spacingTop" => 84, "style" => ["style" => "a1b01e734b573fca08eb1a65e6df9a38"], "type" => "waterfall", "typeDescription" => "03c3ff624590aba1e18136e967cc7455", "width" => 32, "zoomType" => "xy"];
		$this->assertEquals($res45, $obj->toArray());
	}

}
