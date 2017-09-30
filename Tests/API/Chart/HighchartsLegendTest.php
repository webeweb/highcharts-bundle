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

use WBW\HighchartsBundle\API\Chart\HighchartsLegend;
use PHPUnit_Framework_TestCase;

/**
 * Highcharts legend test.
 *
 * @author WBW <https://github.com/webeweb/WBWHighchartsBundle>
 * @package HighchartsBundle\Tests\API\Chart
 * @version 5.0.14
 */
final class HighchartsLegendTest extends PHPUnit_Framework_TestCase {

	/**
	 * Test the toArray() method.
	 */
	public function testToArray() {

		$obj = new HighchartsLegend(false);

		$res = ["align" => "center", "borderColor" => "#999999", "borderRadius" => 0, "borderWidth" => 0, "enabled" => true, "floating" => false, "itemDistance" => 20, "itemHiddenStyle" => ["color" => "#cccccc"], "itemHoverStyle" => ["color" => "#000000"], "itemMarginBottom" => 0, "itemMarginTop" => 0, "itemStyle" => ["color" => "#333333", "cursor" => "pointer", "fontSize" => "12px", "fontWeight" => "bold", "textOverflow" => "ellipsis"], "labelFormat" => "{name}", "layout" => "horizontal", "lineHeight" => 16, "margin" => 12, "padding" => 8, "reversed" => false, "rtl" => false, "shadow" => false, "squareSymbol" => true, "symbolPadding" => 5, "useHTML" => false, "verticalAlign" => "bottom", "x" => 0, "y" => 0];
		$this->assertEquals($res, $obj->toArray(), 'The method toArray() does not return the expected array');

		$obj->setBackgroundColor("930f2a43179a7ae5fc25ed873223e99f");

		$res1 = ["align" => "center", "borderColor" => "#999999", "borderRadius" => 0, "borderWidth" => 0, "enabled" => true, "floating" => false, "itemDistance" => 20, "itemHiddenStyle" => ["color" => "#cccccc"], "itemHoverStyle" => ["color" => "#000000"], "itemMarginBottom" => 0, "itemMarginTop" => 0, "itemStyle" => ["color" => "#333333", "cursor" => "pointer", "fontSize" => "12px", "fontWeight" => "bold", "textOverflow" => "ellipsis"], "labelFormat" => "{name}", "layout" => "horizontal", "lineHeight" => 16, "margin" => 12, "padding" => 8, "reversed" => false, "rtl" => false, "shadow" => false, "squareSymbol" => true, "symbolPadding" => 5, "useHTML" => false, "verticalAlign" => "bottom", "x" => 0, "y" => 0, "backgroundColor" => "930f2a43179a7ae5fc25ed873223e99f"];
		$this->assertEquals($res1, $obj->toArray(), 'The method toArray() does not return the expected array with background color');

		$obj->setItemWidth(16);

		$res2 = ["align" => "center", "borderColor" => "#999999", "borderRadius" => 0, "borderWidth" => 0, "enabled" => true, "floating" => false, "itemDistance" => 20, "itemHiddenStyle" => ["color" => "#cccccc"], "itemHoverStyle" => ["color" => "#000000"], "itemMarginBottom" => 0, "itemMarginTop" => 0, "itemStyle" => ["color" => "#333333", "cursor" => "pointer", "fontSize" => "12px", "fontWeight" => "bold", "textOverflow" => "ellipsis"], "labelFormat" => "{name}", "layout" => "horizontal", "lineHeight" => 16, "margin" => 12, "padding" => 8, "reversed" => false, "rtl" => false, "shadow" => false, "squareSymbol" => true, "symbolPadding" => 5, "useHTML" => false, "verticalAlign" => "bottom", "x" => 0, "y" => 0, "backgroundColor" => "930f2a43179a7ae5fc25ed873223e99f", "itemWidth" => 16];
		$this->assertEquals($res2, $obj->toArray(), 'The method toArray() does not return the expected array with item width');

		$obj->setLabelFormatter("9078f7787367cf94543b3bc9e92d9692");

		$res3 = ["align" => "center", "borderColor" => "#999999", "borderRadius" => 0, "borderWidth" => 0, "enabled" => true, "floating" => false, "itemDistance" => 20, "itemHiddenStyle" => ["color" => "#cccccc"], "itemHoverStyle" => ["color" => "#000000"], "itemMarginBottom" => 0, "itemMarginTop" => 0, "itemStyle" => ["color" => "#333333", "cursor" => "pointer", "fontSize" => "12px", "fontWeight" => "bold", "textOverflow" => "ellipsis"], "labelFormat" => "{name}", "layout" => "horizontal", "lineHeight" => 16, "margin" => 12, "padding" => 8, "reversed" => false, "rtl" => false, "shadow" => false, "squareSymbol" => true, "symbolPadding" => 5, "useHTML" => false, "verticalAlign" => "bottom", "x" => 0, "y" => 0, "backgroundColor" => "930f2a43179a7ae5fc25ed873223e99f", "itemWidth" => 16, "labelFormatter" => "9078f7787367cf94543b3bc9e92d9692"];
		$this->assertEquals($res3, $obj->toArray(), 'The method toArray() does not return the expected array with label formatter');

		$obj->setMaxHeight(67);

		$res4 = ["align" => "center", "borderColor" => "#999999", "borderRadius" => 0, "borderWidth" => 0, "enabled" => true, "floating" => false, "itemDistance" => 20, "itemHiddenStyle" => ["color" => "#cccccc"], "itemHoverStyle" => ["color" => "#000000"], "itemMarginBottom" => 0, "itemMarginTop" => 0, "itemStyle" => ["color" => "#333333", "cursor" => "pointer", "fontSize" => "12px", "fontWeight" => "bold", "textOverflow" => "ellipsis"], "labelFormat" => "{name}", "layout" => "horizontal", "lineHeight" => 16, "margin" => 12, "padding" => 8, "reversed" => false, "rtl" => false, "shadow" => false, "squareSymbol" => true, "symbolPadding" => 5, "useHTML" => false, "verticalAlign" => "bottom", "x" => 0, "y" => 0, "backgroundColor" => "930f2a43179a7ae5fc25ed873223e99f", "itemWidth" => 16, "labelFormatter" => "9078f7787367cf94543b3bc9e92d9692", "maxHeight" => 67];
		$this->assertEquals($res4, $obj->toArray(), 'The method toArray() does not return the expected array with max height');

		$obj->setSymbolHeight(53);

		$res5 = ["align" => "center", "borderColor" => "#999999", "borderRadius" => 0, "borderWidth" => 0, "enabled" => true, "floating" => false, "itemDistance" => 20, "itemHiddenStyle" => ["color" => "#cccccc"], "itemHoverStyle" => ["color" => "#000000"], "itemMarginBottom" => 0, "itemMarginTop" => 0, "itemStyle" => ["color" => "#333333", "cursor" => "pointer", "fontSize" => "12px", "fontWeight" => "bold", "textOverflow" => "ellipsis"], "labelFormat" => "{name}", "layout" => "horizontal", "lineHeight" => 16, "margin" => 12, "padding" => 8, "reversed" => false, "rtl" => false, "shadow" => false, "squareSymbol" => true, "symbolPadding" => 5, "useHTML" => false, "verticalAlign" => "bottom", "x" => 0, "y" => 0, "backgroundColor" => "930f2a43179a7ae5fc25ed873223e99f", "itemWidth" => 16, "labelFormatter" => "9078f7787367cf94543b3bc9e92d9692", "maxHeight" => 67, "symbolHeight" => 53];
		$this->assertEquals($res5, $obj->toArray(), 'The method toArray() does not return the expected array with symbol height');

		$obj->setSymbolRadius(20);

		$res6 = ["align" => "center", "borderColor" => "#999999", "borderRadius" => 0, "borderWidth" => 0, "enabled" => true, "floating" => false, "itemDistance" => 20, "itemHiddenStyle" => ["color" => "#cccccc"], "itemHoverStyle" => ["color" => "#000000"], "itemMarginBottom" => 0, "itemMarginTop" => 0, "itemStyle" => ["color" => "#333333", "cursor" => "pointer", "fontSize" => "12px", "fontWeight" => "bold", "textOverflow" => "ellipsis"], "labelFormat" => "{name}", "layout" => "horizontal", "lineHeight" => 16, "margin" => 12, "padding" => 8, "reversed" => false, "rtl" => false, "shadow" => false, "squareSymbol" => true, "symbolPadding" => 5, "useHTML" => false, "verticalAlign" => "bottom", "x" => 0, "y" => 0, "backgroundColor" => "930f2a43179a7ae5fc25ed873223e99f", "itemWidth" => 16, "labelFormatter" => "9078f7787367cf94543b3bc9e92d9692", "maxHeight" => 67, "symbolHeight" => 53, "symbolRadius" => 20];
		$this->assertEquals($res6, $obj->toArray(), 'The method toArray() does not return the expected array with symbol radius');

		$obj->setSymbolWidth(80);

		$res7 = ["align" => "center", "borderColor" => "#999999", "borderRadius" => 0, "borderWidth" => 0, "enabled" => true, "floating" => false, "itemDistance" => 20, "itemHiddenStyle" => ["color" => "#cccccc"], "itemHoverStyle" => ["color" => "#000000"], "itemMarginBottom" => 0, "itemMarginTop" => 0, "itemStyle" => ["color" => "#333333", "cursor" => "pointer", "fontSize" => "12px", "fontWeight" => "bold", "textOverflow" => "ellipsis"], "labelFormat" => "{name}", "layout" => "horizontal", "lineHeight" => 16, "margin" => 12, "padding" => 8, "reversed" => false, "rtl" => false, "shadow" => false, "squareSymbol" => true, "symbolPadding" => 5, "useHTML" => false, "verticalAlign" => "bottom", "x" => 0, "y" => 0, "backgroundColor" => "930f2a43179a7ae5fc25ed873223e99f", "itemWidth" => 16, "labelFormatter" => "9078f7787367cf94543b3bc9e92d9692", "maxHeight" => 67, "symbolHeight" => 53, "symbolRadius" => 20, "symbolWidth" => 80];
		$this->assertEquals($res7, $obj->toArray(), 'The method toArray() does not return the expected array with symbol width');

		$obj->setWidth(56);

		$res8 = ["align" => "center", "borderColor" => "#999999", "borderRadius" => 0, "borderWidth" => 0, "enabled" => true, "floating" => false, "itemDistance" => 20, "itemHiddenStyle" => ["color" => "#cccccc"], "itemHoverStyle" => ["color" => "#000000"], "itemMarginBottom" => 0, "itemMarginTop" => 0, "itemStyle" => ["color" => "#333333", "cursor" => "pointer", "fontSize" => "12px", "fontWeight" => "bold", "textOverflow" => "ellipsis"], "labelFormat" => "{name}", "layout" => "horizontal", "lineHeight" => 16, "margin" => 12, "padding" => 8, "reversed" => false, "rtl" => false, "shadow" => false, "squareSymbol" => true, "symbolPadding" => 5, "useHTML" => false, "verticalAlign" => "bottom", "x" => 0, "y" => 0, "backgroundColor" => "930f2a43179a7ae5fc25ed873223e99f", "itemWidth" => 16, "labelFormatter" => "9078f7787367cf94543b3bc9e92d9692", "maxHeight" => 67, "symbolHeight" => 53, "symbolRadius" => 20, "symbolWidth" => 80, "width" => 56];
		$this->assertEquals($res8, $obj->toArray(), 'The method toArray() does not return the expected array with width');
	}
}

