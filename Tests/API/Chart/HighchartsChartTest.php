<?php

/*
 * This file is part of the HighchartsBundle.
 *
 * (c) 2017 WBW
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\HighchartsBundle\Tests\API\Chart;

use WBW\HighchartsBundle\API\Chart\HighchartsChart;
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
	 * Test the toArray() method.
	 */
	public function testToArray() {

		$obj = new HighchartsChart(false);

		$res = ["alignTicks" => true, "animation" => true, "backgroundColor" => "#FFFFFF", "borderColor" => "#335cad", "borderRadius" => 0, "borderWidth" => 0, "colorCount" => 10, "ignoreHiddenSeries" => true, "inverted" => false, "panning" => false, "plotBorderColor" => "#cccccc", "plotBorderWidth" => 0, "plotShadow" => false, "polar" => false, "reflow" => true, "selectionMarkerFill" => "rgba(51,92,173,0.25)", "shadow" => false, "showAxes" => false, "spacing" => [10, 10, 15, 10], "spacingBottom" => 15, "spacingLeft" => 10, "spacingRight" => 10, "spacingTop" => 10, "style" => ["fontFamily" => "\"Lucida Grande\", \"Lucida Sans Unicode\", Verdana, Arial, Helvetica, sans-serif","fontSize" => "12px"], "type" => "line"];
		$this->assertEquals($res, $obj->toArray(), 'The method toArray() does not return the expected array');

		$obj->setClassName("6f66e878c62db60568a3487869695820");

		$res1 = ["alignTicks" => true, "animation" => true, "backgroundColor" => "#FFFFFF", "borderColor" => "#335cad", "borderRadius" => 0, "borderWidth" => 0, "colorCount" => 10, "ignoreHiddenSeries" => true, "inverted" => false, "panning" => false, "plotBorderColor" => "#cccccc", "plotBorderWidth" => 0, "plotShadow" => false, "polar" => false, "reflow" => true, "selectionMarkerFill" => "rgba(51,92,173,0.25)", "shadow" => false, "showAxes" => false, "spacing" => [10, 10, 15, 10], "spacingBottom" => 15, "spacingLeft" => 10, "spacingRight" => 10, "spacingTop" => 10, "style" => ["fontFamily" => "\"Lucida Grande\", \"Lucida Sans Unicode\", Verdana, Arial, Helvetica, sans-serif","fontSize" => "12px"], "type" => "line", "className" => "6f66e878c62db60568a3487869695820"];
		$this->assertEquals($res1, $obj->toArray(), 'The method toArray() does not return the expected array with class name');

		$obj->setDescription("67daf92c833c41c95db874e18fcb2786");

		$res2 = ["alignTicks" => true, "animation" => true, "backgroundColor" => "#FFFFFF", "borderColor" => "#335cad", "borderRadius" => 0, "borderWidth" => 0, "colorCount" => 10, "ignoreHiddenSeries" => true, "inverted" => false, "panning" => false, "plotBorderColor" => "#cccccc", "plotBorderWidth" => 0, "plotShadow" => false, "polar" => false, "reflow" => true, "selectionMarkerFill" => "rgba(51,92,173,0.25)", "shadow" => false, "showAxes" => false, "spacing" => [10, 10, 15, 10], "spacingBottom" => 15, "spacingLeft" => 10, "spacingRight" => 10, "spacingTop" => 10, "style" => ["fontFamily" => "\"Lucida Grande\", \"Lucida Sans Unicode\", Verdana, Arial, Helvetica, sans-serif","fontSize" => "12px"], "type" => "line", "className" => "6f66e878c62db60568a3487869695820", "description" => "67daf92c833c41c95db874e18fcb2786"];
		$this->assertEquals($res2, $obj->toArray(), 'The method toArray() does not return the expected array with description');

		$obj->setHeight(65);

		$res3 = ["alignTicks" => true, "animation" => true, "backgroundColor" => "#FFFFFF", "borderColor" => "#335cad", "borderRadius" => 0, "borderWidth" => 0, "colorCount" => 10, "ignoreHiddenSeries" => true, "inverted" => false, "panning" => false, "plotBorderColor" => "#cccccc", "plotBorderWidth" => 0, "plotShadow" => false, "polar" => false, "reflow" => true, "selectionMarkerFill" => "rgba(51,92,173,0.25)", "shadow" => false, "showAxes" => false, "spacing" => [10, 10, 15, 10], "spacingBottom" => 15, "spacingLeft" => 10, "spacingRight" => 10, "spacingTop" => 10, "style" => ["fontFamily" => "\"Lucida Grande\", \"Lucida Sans Unicode\", Verdana, Arial, Helvetica, sans-serif","fontSize" => "12px"], "type" => "line", "className" => "6f66e878c62db60568a3487869695820", "description" => "67daf92c833c41c95db874e18fcb2786", "height" => 65];
		$this->assertEquals($res3, $obj->toArray(), 'The method toArray() does not return the expected array with height');

		$obj->setMargin(["margin" => "d42f4851e770aa0f758b01388874f67b"]);

		$res4 = ["alignTicks" => true, "animation" => true, "backgroundColor" => "#FFFFFF", "borderColor" => "#335cad", "borderRadius" => 0, "borderWidth" => 0, "colorCount" => 10, "ignoreHiddenSeries" => true, "inverted" => false, "panning" => false, "plotBorderColor" => "#cccccc", "plotBorderWidth" => 0, "plotShadow" => false, "polar" => false, "reflow" => true, "selectionMarkerFill" => "rgba(51,92,173,0.25)", "shadow" => false, "showAxes" => false, "spacing" => [10, 10, 15, 10], "spacingBottom" => 15, "spacingLeft" => 10, "spacingRight" => 10, "spacingTop" => 10, "style" => ["fontFamily" => "\"Lucida Grande\", \"Lucida Sans Unicode\", Verdana, Arial, Helvetica, sans-serif","fontSize" => "12px"], "type" => "line", "className" => "6f66e878c62db60568a3487869695820", "description" => "67daf92c833c41c95db874e18fcb2786", "height" => 65, "margin" => ["margin" => "d42f4851e770aa0f758b01388874f67b"]];
		$this->assertEquals($res4, $obj->toArray(), 'The method toArray() does not return the expected array with margin');

		$obj->setMarginBottom(70);

		$res5 = ["alignTicks" => true, "animation" => true, "backgroundColor" => "#FFFFFF", "borderColor" => "#335cad", "borderRadius" => 0, "borderWidth" => 0, "colorCount" => 10, "ignoreHiddenSeries" => true, "inverted" => false, "panning" => false, "plotBorderColor" => "#cccccc", "plotBorderWidth" => 0, "plotShadow" => false, "polar" => false, "reflow" => true, "selectionMarkerFill" => "rgba(51,92,173,0.25)", "shadow" => false, "showAxes" => false, "spacing" => [10, 10, 15, 10], "spacingBottom" => 15, "spacingLeft" => 10, "spacingRight" => 10, "spacingTop" => 10, "style" => ["fontFamily" => "\"Lucida Grande\", \"Lucida Sans Unicode\", Verdana, Arial, Helvetica, sans-serif","fontSize" => "12px"], "type" => "line", "className" => "6f66e878c62db60568a3487869695820", "description" => "67daf92c833c41c95db874e18fcb2786", "height" => 65, "margin" => ["margin" => "d42f4851e770aa0f758b01388874f67b"], "marginBottom" => 70];
		$this->assertEquals($res5, $obj->toArray(), 'The method toArray() does not return the expected array with margin bottom');

		$obj->setMarginLeft(58);

		$res6 = ["alignTicks" => true, "animation" => true, "backgroundColor" => "#FFFFFF", "borderColor" => "#335cad", "borderRadius" => 0, "borderWidth" => 0, "colorCount" => 10, "ignoreHiddenSeries" => true, "inverted" => false, "panning" => false, "plotBorderColor" => "#cccccc", "plotBorderWidth" => 0, "plotShadow" => false, "polar" => false, "reflow" => true, "selectionMarkerFill" => "rgba(51,92,173,0.25)", "shadow" => false, "showAxes" => false, "spacing" => [10, 10, 15, 10], "spacingBottom" => 15, "spacingLeft" => 10, "spacingRight" => 10, "spacingTop" => 10, "style" => ["fontFamily" => "\"Lucida Grande\", \"Lucida Sans Unicode\", Verdana, Arial, Helvetica, sans-serif","fontSize" => "12px"], "type" => "line", "className" => "6f66e878c62db60568a3487869695820", "description" => "67daf92c833c41c95db874e18fcb2786", "height" => 65, "margin" => ["margin" => "d42f4851e770aa0f758b01388874f67b"], "marginBottom" => 70, "marginLeft" => 58];
		$this->assertEquals($res6, $obj->toArray(), 'The method toArray() does not return the expected array with margin left');

		$obj->setMarginRight(84);

		$res7 = ["alignTicks" => true, "animation" => true, "backgroundColor" => "#FFFFFF", "borderColor" => "#335cad", "borderRadius" => 0, "borderWidth" => 0, "colorCount" => 10, "ignoreHiddenSeries" => true, "inverted" => false, "panning" => false, "plotBorderColor" => "#cccccc", "plotBorderWidth" => 0, "plotShadow" => false, "polar" => false, "reflow" => true, "selectionMarkerFill" => "rgba(51,92,173,0.25)", "shadow" => false, "showAxes" => false, "spacing" => [10, 10, 15, 10], "spacingBottom" => 15, "spacingLeft" => 10, "spacingRight" => 10, "spacingTop" => 10, "style" => ["fontFamily" => "\"Lucida Grande\", \"Lucida Sans Unicode\", Verdana, Arial, Helvetica, sans-serif","fontSize" => "12px"], "type" => "line", "className" => "6f66e878c62db60568a3487869695820", "description" => "67daf92c833c41c95db874e18fcb2786", "height" => 65, "margin" => ["margin" => "d42f4851e770aa0f758b01388874f67b"], "marginBottom" => 70, "marginLeft" => 58, "marginRight" => 84];
		$this->assertEquals($res7, $obj->toArray(), 'The method toArray() does not return the expected array with margin right');

		$obj->setMarginTop(26);

		$res8 = ["alignTicks" => true, "animation" => true, "backgroundColor" => "#FFFFFF", "borderColor" => "#335cad", "borderRadius" => 0, "borderWidth" => 0, "colorCount" => 10, "ignoreHiddenSeries" => true, "inverted" => false, "panning" => false, "plotBorderColor" => "#cccccc", "plotBorderWidth" => 0, "plotShadow" => false, "polar" => false, "reflow" => true, "selectionMarkerFill" => "rgba(51,92,173,0.25)", "shadow" => false, "showAxes" => false, "spacing" => [10, 10, 15, 10], "spacingBottom" => 15, "spacingLeft" => 10, "spacingRight" => 10, "spacingTop" => 10, "style" => ["fontFamily" => "\"Lucida Grande\", \"Lucida Sans Unicode\", Verdana, Arial, Helvetica, sans-serif","fontSize" => "12px"], "type" => "line", "className" => "6f66e878c62db60568a3487869695820", "description" => "67daf92c833c41c95db874e18fcb2786", "height" => 65, "margin" => ["margin" => "d42f4851e770aa0f758b01388874f67b"], "marginBottom" => 70, "marginLeft" => 58, "marginRight" => 84, "marginTop" => 26];
		$this->assertEquals($res8, $obj->toArray(), 'The method toArray() does not return the expected array with margin top');

		$obj->setPanKey("d2256420dd2d0fcaccd715c92f260124");

		$res9 = ["alignTicks" => true, "animation" => true, "backgroundColor" => "#FFFFFF", "borderColor" => "#335cad", "borderRadius" => 0, "borderWidth" => 0, "colorCount" => 10, "ignoreHiddenSeries" => true, "inverted" => false, "panning" => false, "plotBorderColor" => "#cccccc", "plotBorderWidth" => 0, "plotShadow" => false, "polar" => false, "reflow" => true, "selectionMarkerFill" => "rgba(51,92,173,0.25)", "shadow" => false, "showAxes" => false, "spacing" => [10, 10, 15, 10], "spacingBottom" => 15, "spacingLeft" => 10, "spacingRight" => 10, "spacingTop" => 10, "style" => ["fontFamily" => "\"Lucida Grande\", \"Lucida Sans Unicode\", Verdana, Arial, Helvetica, sans-serif","fontSize" => "12px"], "type" => "line", "className" => "6f66e878c62db60568a3487869695820", "description" => "67daf92c833c41c95db874e18fcb2786", "height" => 65, "margin" => ["margin" => "d42f4851e770aa0f758b01388874f67b"], "marginBottom" => 70, "marginLeft" => 58, "marginRight" => 84, "marginTop" => 26, "panKey" => "d2256420dd2d0fcaccd715c92f260124"];
		$this->assertEquals($res9, $obj->toArray(), 'The method toArray() does not return the expected array with pan key');

		$obj->setPinchType("fbe5fef847e3f9a0de0b172e182563cc");

		$res10 = ["alignTicks" => true, "animation" => true, "backgroundColor" => "#FFFFFF", "borderColor" => "#335cad", "borderRadius" => 0, "borderWidth" => 0, "colorCount" => 10, "ignoreHiddenSeries" => true, "inverted" => false, "panning" => false, "plotBorderColor" => "#cccccc", "plotBorderWidth" => 0, "plotShadow" => false, "polar" => false, "reflow" => true, "selectionMarkerFill" => "rgba(51,92,173,0.25)", "shadow" => false, "showAxes" => false, "spacing" => [10, 10, 15, 10], "spacingBottom" => 15, "spacingLeft" => 10, "spacingRight" => 10, "spacingTop" => 10, "style" => ["fontFamily" => "\"Lucida Grande\", \"Lucida Sans Unicode\", Verdana, Arial, Helvetica, sans-serif","fontSize" => "12px"], "type" => "line", "className" => "6f66e878c62db60568a3487869695820", "description" => "67daf92c833c41c95db874e18fcb2786", "height" => 65, "margin" => ["margin" => "d42f4851e770aa0f758b01388874f67b"], "marginBottom" => 70, "marginLeft" => 58, "marginRight" => 84, "marginTop" => 26, "panKey" => "d2256420dd2d0fcaccd715c92f260124", "pinchType" => "fbe5fef847e3f9a0de0b172e182563cc"];
		$this->assertEquals($res10, $obj->toArray(), 'The method toArray() does not return the expected array with pinch type');

		$obj->setPlotBackgroundColor("c2f8b5b51823d8d11973591af04340d5");

		$res11 = ["alignTicks" => true, "animation" => true, "backgroundColor" => "#FFFFFF", "borderColor" => "#335cad", "borderRadius" => 0, "borderWidth" => 0, "colorCount" => 10, "ignoreHiddenSeries" => true, "inverted" => false, "panning" => false, "plotBorderColor" => "#cccccc", "plotBorderWidth" => 0, "plotShadow" => false, "polar" => false, "reflow" => true, "selectionMarkerFill" => "rgba(51,92,173,0.25)", "shadow" => false, "showAxes" => false, "spacing" => [10, 10, 15, 10], "spacingBottom" => 15, "spacingLeft" => 10, "spacingRight" => 10, "spacingTop" => 10, "style" => ["fontFamily" => "\"Lucida Grande\", \"Lucida Sans Unicode\", Verdana, Arial, Helvetica, sans-serif","fontSize" => "12px"], "type" => "line", "className" => "6f66e878c62db60568a3487869695820", "description" => "67daf92c833c41c95db874e18fcb2786", "height" => 65, "margin" => ["margin" => "d42f4851e770aa0f758b01388874f67b"], "marginBottom" => 70, "marginLeft" => 58, "marginRight" => 84, "marginTop" => 26, "panKey" => "d2256420dd2d0fcaccd715c92f260124", "pinchType" => "fbe5fef847e3f9a0de0b172e182563cc", "plotBackgroundColor" => "c2f8b5b51823d8d11973591af04340d5"];
		$this->assertEquals($res11, $obj->toArray(), 'The method toArray() does not return the expected array with plot background color');

		$obj->setPlotBackgroundImage("dace675e2a249a414ee3940daf49807f");

		$res12 = ["alignTicks" => true, "animation" => true, "backgroundColor" => "#FFFFFF", "borderColor" => "#335cad", "borderRadius" => 0, "borderWidth" => 0, "colorCount" => 10, "ignoreHiddenSeries" => true, "inverted" => false, "panning" => false, "plotBorderColor" => "#cccccc", "plotBorderWidth" => 0, "plotShadow" => false, "polar" => false, "reflow" => true, "selectionMarkerFill" => "rgba(51,92,173,0.25)", "shadow" => false, "showAxes" => false, "spacing" => [10, 10, 15, 10], "spacingBottom" => 15, "spacingLeft" => 10, "spacingRight" => 10, "spacingTop" => 10, "style" => ["fontFamily" => "\"Lucida Grande\", \"Lucida Sans Unicode\", Verdana, Arial, Helvetica, sans-serif","fontSize" => "12px"], "type" => "line", "className" => "6f66e878c62db60568a3487869695820", "description" => "67daf92c833c41c95db874e18fcb2786", "height" => 65, "margin" => ["margin" => "d42f4851e770aa0f758b01388874f67b"], "marginBottom" => 70, "marginLeft" => 58, "marginRight" => 84, "marginTop" => 26, "panKey" => "d2256420dd2d0fcaccd715c92f260124", "pinchType" => "fbe5fef847e3f9a0de0b172e182563cc", "plotBackgroundColor" => "c2f8b5b51823d8d11973591af04340d5", "plotBackgroundImage" => "dace675e2a249a414ee3940daf49807f"];
		$this->assertEquals($res12, $obj->toArray(), 'The method toArray() does not return the expected array with plot background image');

		$obj->setRenderTo("6cdf914b87eb7733ae56819ec32f386e");

		$res13 = ["alignTicks" => true, "animation" => true, "backgroundColor" => "#FFFFFF", "borderColor" => "#335cad", "borderRadius" => 0, "borderWidth" => 0, "colorCount" => 10, "ignoreHiddenSeries" => true, "inverted" => false, "panning" => false, "plotBorderColor" => "#cccccc", "plotBorderWidth" => 0, "plotShadow" => false, "polar" => false, "reflow" => true, "selectionMarkerFill" => "rgba(51,92,173,0.25)", "shadow" => false, "showAxes" => false, "spacing" => [10, 10, 15, 10], "spacingBottom" => 15, "spacingLeft" => 10, "spacingRight" => 10, "spacingTop" => 10, "style" => ["fontFamily" => "\"Lucida Grande\", \"Lucida Sans Unicode\", Verdana, Arial, Helvetica, sans-serif","fontSize" => "12px"], "type" => "line", "className" => "6f66e878c62db60568a3487869695820", "description" => "67daf92c833c41c95db874e18fcb2786", "height" => 65, "margin" => ["margin" => "d42f4851e770aa0f758b01388874f67b"], "marginBottom" => 70, "marginLeft" => 58, "marginRight" => 84, "marginTop" => 26, "panKey" => "d2256420dd2d0fcaccd715c92f260124", "pinchType" => "fbe5fef847e3f9a0de0b172e182563cc", "plotBackgroundColor" => "c2f8b5b51823d8d11973591af04340d5", "plotBackgroundImage" => "dace675e2a249a414ee3940daf49807f", "renderTo" => "6cdf914b87eb7733ae56819ec32f386e"];
		$this->assertEquals($res13, $obj->toArray(), 'The method toArray() does not return the expected array with render to');

		$obj->setTypeDescription("03c3ff624590aba1e18136e967cc7455");

		$res14 = ["alignTicks" => true, "animation" => true, "backgroundColor" => "#FFFFFF", "borderColor" => "#335cad", "borderRadius" => 0, "borderWidth" => 0, "colorCount" => 10, "ignoreHiddenSeries" => true, "inverted" => false, "panning" => false, "plotBorderColor" => "#cccccc", "plotBorderWidth" => 0, "plotShadow" => false, "polar" => false, "reflow" => true, "selectionMarkerFill" => "rgba(51,92,173,0.25)", "shadow" => false, "showAxes" => false, "spacing" => [10, 10, 15, 10], "spacingBottom" => 15, "spacingLeft" => 10, "spacingRight" => 10, "spacingTop" => 10, "style" => ["fontFamily" => "\"Lucida Grande\", \"Lucida Sans Unicode\", Verdana, Arial, Helvetica, sans-serif","fontSize" => "12px"], "type" => "line", "className" => "6f66e878c62db60568a3487869695820", "description" => "67daf92c833c41c95db874e18fcb2786", "height" => 65, "margin" => ["margin" => "d42f4851e770aa0f758b01388874f67b"], "marginBottom" => 70, "marginLeft" => 58, "marginRight" => 84, "marginTop" => 26, "panKey" => "d2256420dd2d0fcaccd715c92f260124", "pinchType" => "fbe5fef847e3f9a0de0b172e182563cc", "plotBackgroundColor" => "c2f8b5b51823d8d11973591af04340d5", "plotBackgroundImage" => "dace675e2a249a414ee3940daf49807f", "renderTo" => "6cdf914b87eb7733ae56819ec32f386e", "typeDescription" => "03c3ff624590aba1e18136e967cc7455"];
		$this->assertEquals($res14, $obj->toArray(), 'The method toArray() does not return the expected array with type description');

		$obj->setWidth(6);

		$res15 = ["alignTicks" => true, "animation" => true, "backgroundColor" => "#FFFFFF", "borderColor" => "#335cad", "borderRadius" => 0, "borderWidth" => 0, "colorCount" => 10, "ignoreHiddenSeries" => true, "inverted" => false, "panning" => false, "plotBorderColor" => "#cccccc", "plotBorderWidth" => 0, "plotShadow" => false, "polar" => false, "reflow" => true, "selectionMarkerFill" => "rgba(51,92,173,0.25)", "shadow" => false, "showAxes" => false, "spacing" => [10, 10, 15, 10], "spacingBottom" => 15, "spacingLeft" => 10, "spacingRight" => 10, "spacingTop" => 10, "style" => ["fontFamily" => "\"Lucida Grande\", \"Lucida Sans Unicode\", Verdana, Arial, Helvetica, sans-serif","fontSize" => "12px"], "type" => "line", "className" => "6f66e878c62db60568a3487869695820", "description" => "67daf92c833c41c95db874e18fcb2786", "height" => 65, "margin" => ["margin" => "d42f4851e770aa0f758b01388874f67b"], "marginBottom" => 70, "marginLeft" => 58, "marginRight" => 84, "marginTop" => 26, "panKey" => "d2256420dd2d0fcaccd715c92f260124", "pinchType" => "fbe5fef847e3f9a0de0b172e182563cc", "plotBackgroundColor" => "c2f8b5b51823d8d11973591af04340d5", "plotBackgroundImage" => "dace675e2a249a414ee3940daf49807f", "renderTo" => "6cdf914b87eb7733ae56819ec32f386e", "typeDescription" => "03c3ff624590aba1e18136e967cc7455", "width" => 6];
		$this->assertEquals($res15, $obj->toArray(), 'The method toArray() does not return the expected array with width');

		$obj->setZoomType("6372afc7ae67d27754cabea9d665a672");

		$res16 = ["alignTicks" => true, "animation" => true, "backgroundColor" => "#FFFFFF", "borderColor" => "#335cad", "borderRadius" => 0, "borderWidth" => 0, "colorCount" => 10, "ignoreHiddenSeries" => true, "inverted" => false, "panning" => false, "plotBorderColor" => "#cccccc", "plotBorderWidth" => 0, "plotShadow" => false, "polar" => false, "reflow" => true, "selectionMarkerFill" => "rgba(51,92,173,0.25)", "shadow" => false, "showAxes" => false, "spacing" => [10, 10, 15, 10], "spacingBottom" => 15, "spacingLeft" => 10, "spacingRight" => 10, "spacingTop" => 10, "style" => ["fontFamily" => "\"Lucida Grande\", \"Lucida Sans Unicode\", Verdana, Arial, Helvetica, sans-serif","fontSize" => "12px"], "type" => "line", "className" => "6f66e878c62db60568a3487869695820", "description" => "67daf92c833c41c95db874e18fcb2786", "height" => 65, "margin" => ["margin" => "d42f4851e770aa0f758b01388874f67b"], "marginBottom" => 70, "marginLeft" => 58, "marginRight" => 84, "marginTop" => 26, "panKey" => "d2256420dd2d0fcaccd715c92f260124", "pinchType" => "fbe5fef847e3f9a0de0b172e182563cc", "plotBackgroundColor" => "c2f8b5b51823d8d11973591af04340d5", "plotBackgroundImage" => "dace675e2a249a414ee3940daf49807f", "renderTo" => "6cdf914b87eb7733ae56819ec32f386e", "typeDescription" => "03c3ff624590aba1e18136e967cc7455", "width" => 6, "zoomType" => "6372afc7ae67d27754cabea9d665a672"];
		$this->assertEquals($res16, $obj->toArray(), 'The method toArray() does not return the expected array with zoom type');
	}
}

