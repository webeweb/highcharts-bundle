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
use WBW\HighchartsBundle\API\Chart\HighchartsChart;
use WBW\HighchartsBundle\API\Chart\Chart\HighchartsEvents;
use WBW\HighchartsBundle\API\Chart\Chart\HighchartsOptions3d;
use WBW\HighchartsBundle\API\Chart\Chart\HighchartsResetZoomButton;

/**
 * Highcharts chart test.
 *
 * @author WBW <https://github.com/webeweb/WBWHighchartsBundle>
 * @package WBW\HighchartsBundle\Tests\API\Chart
 * @version 5.0.14
 */
final class HighchartsChartTest extends PHPUnit_Framework_TestCase {

	/**
	 * Test the clear() method.
	 *
	 * @return void
	 */
	public function testClear() {

		$obj = new HighchartsChart(false);

		$obj->clear();
		$this->assertEquals([], $obj->toArray(), 'The method toArray() does not return the expected array');
	}

	/**
	 * Tests the newEvents() method.
	 *
	 * @return void.
	 */
	public function testNewEvents() {

		$obj = new HighchartsChart(false);

		$res = $obj->newEvents();
		$this->assertInstanceOf(HighchartsEvents::class, $res, 'The method newEvents() does not return the expected class');
	}

	/**
	 * Tests the newOptions3d() method.
	 *
	 * @return void.
	 */
	public function testNewOptions3d() {

		$obj = new HighchartsChart(false);

		$res = $obj->newOptions3d();
		$this->assertInstanceOf(HighchartsOptions3d::class, $res, 'The method newOptions3d() does not return the expected class');
	}

	/**
	 * Tests the newResetZoomButton() method.
	 *
	 * @return void.
	 */
	public function testNewResetZoomButton() {

		$obj = new HighchartsChart(false);

		$res = $obj->newResetZoomButton();
		$this->assertInstanceOf(HighchartsResetZoomButton::class, $res, 'The method newResetZoomButton() does not return the expected class');
	}

	/**
	 * Test the toArray() method.
	 *
	 * @return void
	 */
	public function testToArray() {

		$obj = new HighchartsChart(false);

		$res = ["alignTicks" => true, "animation" => true, "backgroundColor" => "#FFFFFF", "borderColor" => "#335cad", "borderRadius" => 0, "borderWidth" => 0, "colorCount" => 10, "ignoreHiddenSeries" => true, "inverted" => false, "panning" => false, "plotBorderColor" => "#cccccc", "plotBorderWidth" => 0, "plotShadow" => false, "polar" => false, "reflow" => true, "selectionMarkerFill" => "rgba(51,92,173,0.25)", "shadow" => false, "showAxes" => false, "spacing" => [10, 10, 15, 10], "spacingBottom" => 15, "spacingLeft" => 10, "spacingRight" => 10, "spacingTop" => 10, "style" => ["fontFamily" => "\"Lucida Grande\", \"Lucida Sans Unicode\", Verdana, Arial, Helvetica, sans-serif", "fontSize" => "12px"], "type" => "line"];
		$this->assertEquals($res, $obj->toArray(), 'The method toArray() does not return the expected array');

		$obj->setClassName("6f66e878c62db60568a3487869695820");

		$res1 = ["alignTicks" => true, "animation" => true, "backgroundColor" => "#FFFFFF", "borderColor" => "#335cad", "borderRadius" => 0, "borderWidth" => 0, "colorCount" => 10, "ignoreHiddenSeries" => true, "inverted" => false, "panning" => false, "plotBorderColor" => "#cccccc", "plotBorderWidth" => 0, "plotShadow" => false, "polar" => false, "reflow" => true, "selectionMarkerFill" => "rgba(51,92,173,0.25)", "shadow" => false, "showAxes" => false, "spacing" => [10, 10, 15, 10], "spacingBottom" => 15, "spacingLeft" => 10, "spacingRight" => 10, "spacingTop" => 10, "style" => ["fontFamily" => "\"Lucida Grande\", \"Lucida Sans Unicode\", Verdana, Arial, Helvetica, sans-serif", "fontSize" => "12px"], "type" => "line", "className" => "6f66e878c62db60568a3487869695820"];
		$this->assertEquals($res1, $obj->toArray(), 'The method toArray() does not return the expected array with class name');

		$obj->setDescription("67daf92c833c41c95db874e18fcb2786");

		$res2 = ["alignTicks" => true, "animation" => true, "backgroundColor" => "#FFFFFF", "borderColor" => "#335cad", "borderRadius" => 0, "borderWidth" => 0, "colorCount" => 10, "ignoreHiddenSeries" => true, "inverted" => false, "panning" => false, "plotBorderColor" => "#cccccc", "plotBorderWidth" => 0, "plotShadow" => false, "polar" => false, "reflow" => true, "selectionMarkerFill" => "rgba(51,92,173,0.25)", "shadow" => false, "showAxes" => false, "spacing" => [10, 10, 15, 10], "spacingBottom" => 15, "spacingLeft" => 10, "spacingRight" => 10, "spacingTop" => 10, "style" => ["fontFamily" => "\"Lucida Grande\", \"Lucida Sans Unicode\", Verdana, Arial, Helvetica, sans-serif", "fontSize" => "12px"], "type" => "line", "className" => "6f66e878c62db60568a3487869695820", "description" => "67daf92c833c41c95db874e18fcb2786"];
		$this->assertEquals($res2, $obj->toArray(), 'The method toArray() does not return the expected array with description');

		$obj->newEvents();

		$res3 = ["alignTicks" => true, "animation" => true, "backgroundColor" => "#FFFFFF", "borderColor" => "#335cad", "borderRadius" => 0, "borderWidth" => 0, "colorCount" => 10, "ignoreHiddenSeries" => true, "inverted" => false, "panning" => false, "plotBorderColor" => "#cccccc", "plotBorderWidth" => 0, "plotShadow" => false, "polar" => false, "reflow" => true, "selectionMarkerFill" => "rgba(51,92,173,0.25)", "shadow" => false, "showAxes" => false, "spacing" => [10, 10, 15, 10], "spacingBottom" => 15, "spacingLeft" => 10, "spacingRight" => 10, "spacingTop" => 10, "style" => ["fontFamily" => "\"Lucida Grande\", \"Lucida Sans Unicode\", Verdana, Arial, Helvetica, sans-serif", "fontSize" => "12px"], "type" => "line", "className" => "6f66e878c62db60568a3487869695820", "description" => "67daf92c833c41c95db874e18fcb2786", "events" => []];
		$this->assertEquals($res3, $obj->toArray(), 'The method toArray() does not return the expected array with events');

		$obj->setHeight(13);

		$res4 = ["alignTicks" => true, "animation" => true, "backgroundColor" => "#FFFFFF", "borderColor" => "#335cad", "borderRadius" => 0, "borderWidth" => 0, "colorCount" => 10, "ignoreHiddenSeries" => true, "inverted" => false, "panning" => false, "plotBorderColor" => "#cccccc", "plotBorderWidth" => 0, "plotShadow" => false, "polar" => false, "reflow" => true, "selectionMarkerFill" => "rgba(51,92,173,0.25)", "shadow" => false, "showAxes" => false, "spacing" => [10, 10, 15, 10], "spacingBottom" => 15, "spacingLeft" => 10, "spacingRight" => 10, "spacingTop" => 10, "style" => ["fontFamily" => "\"Lucida Grande\", \"Lucida Sans Unicode\", Verdana, Arial, Helvetica, sans-serif", "fontSize" => "12px"], "type" => "line", "className" => "6f66e878c62db60568a3487869695820", "description" => "67daf92c833c41c95db874e18fcb2786", "events" => [], "height" => 13];
		$this->assertEquals($res4, $obj->toArray(), 'The method toArray() does not return the expected array with height');

		$obj->setMargin(["margin" => "d42f4851e770aa0f758b01388874f67b"]);

		$res5 = ["alignTicks" => true, "animation" => true, "backgroundColor" => "#FFFFFF", "borderColor" => "#335cad", "borderRadius" => 0, "borderWidth" => 0, "colorCount" => 10, "ignoreHiddenSeries" => true, "inverted" => false, "panning" => false, "plotBorderColor" => "#cccccc", "plotBorderWidth" => 0, "plotShadow" => false, "polar" => false, "reflow" => true, "selectionMarkerFill" => "rgba(51,92,173,0.25)", "shadow" => false, "showAxes" => false, "spacing" => [10, 10, 15, 10], "spacingBottom" => 15, "spacingLeft" => 10, "spacingRight" => 10, "spacingTop" => 10, "style" => ["fontFamily" => "\"Lucida Grande\", \"Lucida Sans Unicode\", Verdana, Arial, Helvetica, sans-serif", "fontSize" => "12px"], "type" => "line", "className" => "6f66e878c62db60568a3487869695820", "description" => "67daf92c833c41c95db874e18fcb2786", "events" => [], "height" => 13, "margin" => ["margin" => "d42f4851e770aa0f758b01388874f67b"]];
		$this->assertEquals($res5, $obj->toArray(), 'The method toArray() does not return the expected array with margin');

		$obj->setMarginBottom(9);

		$res6 = ["alignTicks" => true, "animation" => true, "backgroundColor" => "#FFFFFF", "borderColor" => "#335cad", "borderRadius" => 0, "borderWidth" => 0, "colorCount" => 10, "ignoreHiddenSeries" => true, "inverted" => false, "panning" => false, "plotBorderColor" => "#cccccc", "plotBorderWidth" => 0, "plotShadow" => false, "polar" => false, "reflow" => true, "selectionMarkerFill" => "rgba(51,92,173,0.25)", "shadow" => false, "showAxes" => false, "spacing" => [10, 10, 15, 10], "spacingBottom" => 15, "spacingLeft" => 10, "spacingRight" => 10, "spacingTop" => 10, "style" => ["fontFamily" => "\"Lucida Grande\", \"Lucida Sans Unicode\", Verdana, Arial, Helvetica, sans-serif", "fontSize" => "12px"], "type" => "line", "className" => "6f66e878c62db60568a3487869695820", "description" => "67daf92c833c41c95db874e18fcb2786", "events" => [], "height" => 13, "margin" => ["margin" => "d42f4851e770aa0f758b01388874f67b"], "marginBottom" => 9];
		$this->assertEquals($res6, $obj->toArray(), 'The method toArray() does not return the expected array with margin bottom');

		$obj->setMarginLeft(74);

		$res7 = ["alignTicks" => true, "animation" => true, "backgroundColor" => "#FFFFFF", "borderColor" => "#335cad", "borderRadius" => 0, "borderWidth" => 0, "colorCount" => 10, "ignoreHiddenSeries" => true, "inverted" => false, "panning" => false, "plotBorderColor" => "#cccccc", "plotBorderWidth" => 0, "plotShadow" => false, "polar" => false, "reflow" => true, "selectionMarkerFill" => "rgba(51,92,173,0.25)", "shadow" => false, "showAxes" => false, "spacing" => [10, 10, 15, 10], "spacingBottom" => 15, "spacingLeft" => 10, "spacingRight" => 10, "spacingTop" => 10, "style" => ["fontFamily" => "\"Lucida Grande\", \"Lucida Sans Unicode\", Verdana, Arial, Helvetica, sans-serif", "fontSize" => "12px"], "type" => "line", "className" => "6f66e878c62db60568a3487869695820", "description" => "67daf92c833c41c95db874e18fcb2786", "events" => [], "height" => 13, "margin" => ["margin" => "d42f4851e770aa0f758b01388874f67b"], "marginBottom" => 9, "marginLeft" => 74];
		$this->assertEquals($res7, $obj->toArray(), 'The method toArray() does not return the expected array with margin left');

		$obj->setMarginRight(18);

		$res8 = ["alignTicks" => true, "animation" => true, "backgroundColor" => "#FFFFFF", "borderColor" => "#335cad", "borderRadius" => 0, "borderWidth" => 0, "colorCount" => 10, "ignoreHiddenSeries" => true, "inverted" => false, "panning" => false, "plotBorderColor" => "#cccccc", "plotBorderWidth" => 0, "plotShadow" => false, "polar" => false, "reflow" => true, "selectionMarkerFill" => "rgba(51,92,173,0.25)", "shadow" => false, "showAxes" => false, "spacing" => [10, 10, 15, 10], "spacingBottom" => 15, "spacingLeft" => 10, "spacingRight" => 10, "spacingTop" => 10, "style" => ["fontFamily" => "\"Lucida Grande\", \"Lucida Sans Unicode\", Verdana, Arial, Helvetica, sans-serif", "fontSize" => "12px"], "type" => "line", "className" => "6f66e878c62db60568a3487869695820", "description" => "67daf92c833c41c95db874e18fcb2786", "events" => [], "height" => 13, "margin" => ["margin" => "d42f4851e770aa0f758b01388874f67b"], "marginBottom" => 9, "marginLeft" => 74, "marginRight" => 18];
		$this->assertEquals($res8, $obj->toArray(), 'The method toArray() does not return the expected array with margin right');

		$obj->setMarginTop(56);

		$res9 = ["alignTicks" => true, "animation" => true, "backgroundColor" => "#FFFFFF", "borderColor" => "#335cad", "borderRadius" => 0, "borderWidth" => 0, "colorCount" => 10, "ignoreHiddenSeries" => true, "inverted" => false, "panning" => false, "plotBorderColor" => "#cccccc", "plotBorderWidth" => 0, "plotShadow" => false, "polar" => false, "reflow" => true, "selectionMarkerFill" => "rgba(51,92,173,0.25)", "shadow" => false, "showAxes" => false, "spacing" => [10, 10, 15, 10], "spacingBottom" => 15, "spacingLeft" => 10, "spacingRight" => 10, "spacingTop" => 10, "style" => ["fontFamily" => "\"Lucida Grande\", \"Lucida Sans Unicode\", Verdana, Arial, Helvetica, sans-serif", "fontSize" => "12px"], "type" => "line", "className" => "6f66e878c62db60568a3487869695820", "description" => "67daf92c833c41c95db874e18fcb2786", "events" => [], "height" => 13, "margin" => ["margin" => "d42f4851e770aa0f758b01388874f67b"], "marginBottom" => 9, "marginLeft" => 74, "marginRight" => 18, "marginTop" => 56];
		$this->assertEquals($res9, $obj->toArray(), 'The method toArray() does not return the expected array with margin top');

		$obj->newOptions3d();

		$res10 = ["alignTicks" => true, "animation" => true, "backgroundColor" => "#FFFFFF", "borderColor" => "#335cad", "borderRadius" => 0, "borderWidth" => 0, "colorCount" => 10, "ignoreHiddenSeries" => true, "inverted" => false, "panning" => false, "plotBorderColor" => "#cccccc", "plotBorderWidth" => 0, "plotShadow" => false, "polar" => false, "reflow" => true, "selectionMarkerFill" => "rgba(51,92,173,0.25)", "shadow" => false, "showAxes" => false, "spacing" => [10, 10, 15, 10], "spacingBottom" => 15, "spacingLeft" => 10, "spacingRight" => 10, "spacingTop" => 10, "style" => ["fontFamily" => "\"Lucida Grande\", \"Lucida Sans Unicode\", Verdana, Arial, Helvetica, sans-serif", "fontSize" => "12px"], "type" => "line", "className" => "6f66e878c62db60568a3487869695820", "description" => "67daf92c833c41c95db874e18fcb2786", "events" => [], "height" => 13, "margin" => ["margin" => "d42f4851e770aa0f758b01388874f67b"], "marginBottom" => 9, "marginLeft" => 74, "marginRight" => 18, "marginTop" => 56, "options3d" => []];
		$this->assertEquals($res10, $obj->toArray(), 'The method toArray() does not return the expected array with options3d');

		$obj->setPanKey("shift");

		$res11 = ["alignTicks" => true, "animation" => true, "backgroundColor" => "#FFFFFF", "borderColor" => "#335cad", "borderRadius" => 0, "borderWidth" => 0, "colorCount" => 10, "ignoreHiddenSeries" => true, "inverted" => false, "panning" => false, "plotBorderColor" => "#cccccc", "plotBorderWidth" => 0, "plotShadow" => false, "polar" => false, "reflow" => true, "selectionMarkerFill" => "rgba(51,92,173,0.25)", "shadow" => false, "showAxes" => false, "spacing" => [10, 10, 15, 10], "spacingBottom" => 15, "spacingLeft" => 10, "spacingRight" => 10, "spacingTop" => 10, "style" => ["fontFamily" => "\"Lucida Grande\", \"Lucida Sans Unicode\", Verdana, Arial, Helvetica, sans-serif", "fontSize" => "12px"], "type" => "line", "className" => "6f66e878c62db60568a3487869695820", "description" => "67daf92c833c41c95db874e18fcb2786", "events" => [], "height" => 13, "margin" => ["margin" => "d42f4851e770aa0f758b01388874f67b"], "marginBottom" => 9, "marginLeft" => 74, "marginRight" => 18, "marginTop" => 56, "options3d" => [], "panKey" => "shift"];
		$this->assertEquals($res11, $obj->toArray(), 'The method toArray() does not return the expected array with pan key');

		$obj->setPinchType("xy");

		$res12 = ["alignTicks" => true, "animation" => true, "backgroundColor" => "#FFFFFF", "borderColor" => "#335cad", "borderRadius" => 0, "borderWidth" => 0, "colorCount" => 10, "ignoreHiddenSeries" => true, "inverted" => false, "panning" => false, "plotBorderColor" => "#cccccc", "plotBorderWidth" => 0, "plotShadow" => false, "polar" => false, "reflow" => true, "selectionMarkerFill" => "rgba(51,92,173,0.25)", "shadow" => false, "showAxes" => false, "spacing" => [10, 10, 15, 10], "spacingBottom" => 15, "spacingLeft" => 10, "spacingRight" => 10, "spacingTop" => 10, "style" => ["fontFamily" => "\"Lucida Grande\", \"Lucida Sans Unicode\", Verdana, Arial, Helvetica, sans-serif", "fontSize" => "12px"], "type" => "line", "className" => "6f66e878c62db60568a3487869695820", "description" => "67daf92c833c41c95db874e18fcb2786", "events" => [], "height" => 13, "margin" => ["margin" => "d42f4851e770aa0f758b01388874f67b"], "marginBottom" => 9, "marginLeft" => 74, "marginRight" => 18, "marginTop" => 56, "options3d" => [], "panKey" => "shift", "pinchType" => "xy"];
		$this->assertEquals($res12, $obj->toArray(), 'The method toArray() does not return the expected array with pinch type');

		$obj->setPlotBackgroundColor("c2f8b5b51823d8d11973591af04340d5");

		$res13 = ["alignTicks" => true, "animation" => true, "backgroundColor" => "#FFFFFF", "borderColor" => "#335cad", "borderRadius" => 0, "borderWidth" => 0, "colorCount" => 10, "ignoreHiddenSeries" => true, "inverted" => false, "panning" => false, "plotBorderColor" => "#cccccc", "plotBorderWidth" => 0, "plotShadow" => false, "polar" => false, "reflow" => true, "selectionMarkerFill" => "rgba(51,92,173,0.25)", "shadow" => false, "showAxes" => false, "spacing" => [10, 10, 15, 10], "spacingBottom" => 15, "spacingLeft" => 10, "spacingRight" => 10, "spacingTop" => 10, "style" => ["fontFamily" => "\"Lucida Grande\", \"Lucida Sans Unicode\", Verdana, Arial, Helvetica, sans-serif", "fontSize" => "12px"], "type" => "line", "className" => "6f66e878c62db60568a3487869695820", "description" => "67daf92c833c41c95db874e18fcb2786", "events" => [], "height" => 13, "margin" => ["margin" => "d42f4851e770aa0f758b01388874f67b"], "marginBottom" => 9, "marginLeft" => 74, "marginRight" => 18, "marginTop" => 56, "options3d" => [], "panKey" => "shift", "pinchType" => "xy", "plotBackgroundColor" => "c2f8b5b51823d8d11973591af04340d5"];
		$this->assertEquals($res13, $obj->toArray(), 'The method toArray() does not return the expected array with plot background color');

		$obj->setPlotBackgroundImage("dace675e2a249a414ee3940daf49807f");

		$res14 = ["alignTicks" => true, "animation" => true, "backgroundColor" => "#FFFFFF", "borderColor" => "#335cad", "borderRadius" => 0, "borderWidth" => 0, "colorCount" => 10, "ignoreHiddenSeries" => true, "inverted" => false, "panning" => false, "plotBorderColor" => "#cccccc", "plotBorderWidth" => 0, "plotShadow" => false, "polar" => false, "reflow" => true, "selectionMarkerFill" => "rgba(51,92,173,0.25)", "shadow" => false, "showAxes" => false, "spacing" => [10, 10, 15, 10], "spacingBottom" => 15, "spacingLeft" => 10, "spacingRight" => 10, "spacingTop" => 10, "style" => ["fontFamily" => "\"Lucida Grande\", \"Lucida Sans Unicode\", Verdana, Arial, Helvetica, sans-serif", "fontSize" => "12px"], "type" => "line", "className" => "6f66e878c62db60568a3487869695820", "description" => "67daf92c833c41c95db874e18fcb2786", "events" => [], "height" => 13, "margin" => ["margin" => "d42f4851e770aa0f758b01388874f67b"], "marginBottom" => 9, "marginLeft" => 74, "marginRight" => 18, "marginTop" => 56, "options3d" => [], "panKey" => "shift", "pinchType" => "xy", "plotBackgroundColor" => "c2f8b5b51823d8d11973591af04340d5", "plotBackgroundImage" => "dace675e2a249a414ee3940daf49807f"];
		$this->assertEquals($res14, $obj->toArray(), 'The method toArray() does not return the expected array with plot background image');

		$obj->setRenderTo("6cdf914b87eb7733ae56819ec32f386e");

		$res15 = ["alignTicks" => true, "animation" => true, "backgroundColor" => "#FFFFFF", "borderColor" => "#335cad", "borderRadius" => 0, "borderWidth" => 0, "colorCount" => 10, "ignoreHiddenSeries" => true, "inverted" => false, "panning" => false, "plotBorderColor" => "#cccccc", "plotBorderWidth" => 0, "plotShadow" => false, "polar" => false, "reflow" => true, "selectionMarkerFill" => "rgba(51,92,173,0.25)", "shadow" => false, "showAxes" => false, "spacing" => [10, 10, 15, 10], "spacingBottom" => 15, "spacingLeft" => 10, "spacingRight" => 10, "spacingTop" => 10, "style" => ["fontFamily" => "\"Lucida Grande\", \"Lucida Sans Unicode\", Verdana, Arial, Helvetica, sans-serif", "fontSize" => "12px"], "type" => "line", "className" => "6f66e878c62db60568a3487869695820", "description" => "67daf92c833c41c95db874e18fcb2786", "events" => [], "height" => 13, "margin" => ["margin" => "d42f4851e770aa0f758b01388874f67b"], "marginBottom" => 9, "marginLeft" => 74, "marginRight" => 18, "marginTop" => 56, "options3d" => [], "panKey" => "shift", "pinchType" => "xy", "plotBackgroundColor" => "c2f8b5b51823d8d11973591af04340d5", "plotBackgroundImage" => "dace675e2a249a414ee3940daf49807f", "renderTo" => "6cdf914b87eb7733ae56819ec32f386e"];
		$this->assertEquals($res15, $obj->toArray(), 'The method toArray() does not return the expected array with render to');

		$obj->newResetZoomButton();

		$res16 = ["alignTicks" => true, "animation" => true, "backgroundColor" => "#FFFFFF", "borderColor" => "#335cad", "borderRadius" => 0, "borderWidth" => 0, "colorCount" => 10, "ignoreHiddenSeries" => true, "inverted" => false, "panning" => false, "plotBorderColor" => "#cccccc", "plotBorderWidth" => 0, "plotShadow" => false, "polar" => false, "reflow" => true, "selectionMarkerFill" => "rgba(51,92,173,0.25)", "shadow" => false, "showAxes" => false, "spacing" => [10, 10, 15, 10], "spacingBottom" => 15, "spacingLeft" => 10, "spacingRight" => 10, "spacingTop" => 10, "style" => ["fontFamily" => "\"Lucida Grande\", \"Lucida Sans Unicode\", Verdana, Arial, Helvetica, sans-serif", "fontSize" => "12px"], "type" => "line", "className" => "6f66e878c62db60568a3487869695820", "description" => "67daf92c833c41c95db874e18fcb2786", "events" => [], "height" => 13, "margin" => ["margin" => "d42f4851e770aa0f758b01388874f67b"], "marginBottom" => 9, "marginLeft" => 74, "marginRight" => 18, "marginTop" => 56, "options3d" => [], "panKey" => "shift", "pinchType" => "xy", "plotBackgroundColor" => "c2f8b5b51823d8d11973591af04340d5", "plotBackgroundImage" => "dace675e2a249a414ee3940daf49807f", "renderTo" => "6cdf914b87eb7733ae56819ec32f386e", "resetZoomButton" => []];
		$this->assertEquals($res16, $obj->toArray(), 'The method toArray() does not return the expected array with reset zoom button');

		$obj->setTypeDescription("03c3ff624590aba1e18136e967cc7455");

		$res17 = ["alignTicks" => true, "animation" => true, "backgroundColor" => "#FFFFFF", "borderColor" => "#335cad", "borderRadius" => 0, "borderWidth" => 0, "colorCount" => 10, "ignoreHiddenSeries" => true, "inverted" => false, "panning" => false, "plotBorderColor" => "#cccccc", "plotBorderWidth" => 0, "plotShadow" => false, "polar" => false, "reflow" => true, "selectionMarkerFill" => "rgba(51,92,173,0.25)", "shadow" => false, "showAxes" => false, "spacing" => [10, 10, 15, 10], "spacingBottom" => 15, "spacingLeft" => 10, "spacingRight" => 10, "spacingTop" => 10, "style" => ["fontFamily" => "\"Lucida Grande\", \"Lucida Sans Unicode\", Verdana, Arial, Helvetica, sans-serif", "fontSize" => "12px"], "type" => "line", "className" => "6f66e878c62db60568a3487869695820", "description" => "67daf92c833c41c95db874e18fcb2786", "events" => [], "height" => 13, "margin" => ["margin" => "d42f4851e770aa0f758b01388874f67b"], "marginBottom" => 9, "marginLeft" => 74, "marginRight" => 18, "marginTop" => 56, "options3d" => [], "panKey" => "shift", "pinchType" => "xy", "plotBackgroundColor" => "c2f8b5b51823d8d11973591af04340d5", "plotBackgroundImage" => "dace675e2a249a414ee3940daf49807f", "renderTo" => "6cdf914b87eb7733ae56819ec32f386e", "resetZoomButton" => [], "typeDescription" => "03c3ff624590aba1e18136e967cc7455"];
		$this->assertEquals($res17, $obj->toArray(), 'The method toArray() does not return the expected array with type description');

		$obj->setWidth(72);

		$res18 = ["alignTicks" => true, "animation" => true, "backgroundColor" => "#FFFFFF", "borderColor" => "#335cad", "borderRadius" => 0, "borderWidth" => 0, "colorCount" => 10, "ignoreHiddenSeries" => true, "inverted" => false, "panning" => false, "plotBorderColor" => "#cccccc", "plotBorderWidth" => 0, "plotShadow" => false, "polar" => false, "reflow" => true, "selectionMarkerFill" => "rgba(51,92,173,0.25)", "shadow" => false, "showAxes" => false, "spacing" => [10, 10, 15, 10], "spacingBottom" => 15, "spacingLeft" => 10, "spacingRight" => 10, "spacingTop" => 10, "style" => ["fontFamily" => "\"Lucida Grande\", \"Lucida Sans Unicode\", Verdana, Arial, Helvetica, sans-serif", "fontSize" => "12px"], "type" => "line", "className" => "6f66e878c62db60568a3487869695820", "description" => "67daf92c833c41c95db874e18fcb2786", "events" => [], "height" => 13, "margin" => ["margin" => "d42f4851e770aa0f758b01388874f67b"], "marginBottom" => 9, "marginLeft" => 74, "marginRight" => 18, "marginTop" => 56, "options3d" => [], "panKey" => "shift", "pinchType" => "xy", "plotBackgroundColor" => "c2f8b5b51823d8d11973591af04340d5", "plotBackgroundImage" => "dace675e2a249a414ee3940daf49807f", "renderTo" => "6cdf914b87eb7733ae56819ec32f386e", "resetZoomButton" => [], "typeDescription" => "03c3ff624590aba1e18136e967cc7455", "width" => 72];
		$this->assertEquals($res18, $obj->toArray(), 'The method toArray() does not return the expected array with width');

		$obj->setZoomType("xy");

		$res19 = ["alignTicks" => true, "animation" => true, "backgroundColor" => "#FFFFFF", "borderColor" => "#335cad", "borderRadius" => 0, "borderWidth" => 0, "colorCount" => 10, "ignoreHiddenSeries" => true, "inverted" => false, "panning" => false, "plotBorderColor" => "#cccccc", "plotBorderWidth" => 0, "plotShadow" => false, "polar" => false, "reflow" => true, "selectionMarkerFill" => "rgba(51,92,173,0.25)", "shadow" => false, "showAxes" => false, "spacing" => [10, 10, 15, 10], "spacingBottom" => 15, "spacingLeft" => 10, "spacingRight" => 10, "spacingTop" => 10, "style" => ["fontFamily" => "\"Lucida Grande\", \"Lucida Sans Unicode\", Verdana, Arial, Helvetica, sans-serif", "fontSize" => "12px"], "type" => "line", "className" => "6f66e878c62db60568a3487869695820", "description" => "67daf92c833c41c95db874e18fcb2786", "events" => [], "height" => 13, "margin" => ["margin" => "d42f4851e770aa0f758b01388874f67b"], "marginBottom" => 9, "marginLeft" => 74, "marginRight" => 18, "marginTop" => 56, "options3d" => [], "panKey" => "shift", "pinchType" => "xy", "plotBackgroundColor" => "c2f8b5b51823d8d11973591af04340d5", "plotBackgroundImage" => "dace675e2a249a414ee3940daf49807f", "renderTo" => "6cdf914b87eb7733ae56819ec32f386e", "resetZoomButton" => [], "typeDescription" => "03c3ff624590aba1e18136e967cc7455", "width" => 72, "zoomType" => "xy"];
		$this->assertEquals($res19, $obj->toArray(), 'The method toArray() does not return the expected array with zoom type');
	}

}
