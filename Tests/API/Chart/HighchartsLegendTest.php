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
use WBW\HighchartsBundle\API\Chart\HighchartsLegend;
use WBW\HighchartsBundle\API\Chart\Legend\HighchartsNavigation;
use WBW\HighchartsBundle\API\Chart\Legend\HighchartsTitle;

/**
 * Highcharts legend test.
 *
 * @author WBW <https://github.com/webeweb/WBWHighchartsBundle>
 * @package WBW\HighchartsBundle\Tests\API\Chart
 * @version 5.0.14
 */
final class HighchartsLegendTest extends PHPUnit_Framework_TestCase {

	/**
	 * Test the clear() method.
	 *
	 * @return void
	 */
	public function testClear() {

		$obj = new HighchartsLegend(false);

		$obj->clear();
		$this->assertEquals([], $obj->toArray(), "The method toArray() does not return the expected array");
	}

	/**
	 * Tests the newNavigation() method.
	 *
	 * @return void.
	 */
	public function testNewNavigation() {

		$obj = new HighchartsLegend(false);

		$res = $obj->newNavigation();
		$this->assertInstanceOf(HighchartsNavigation::class, $res, "The method newNavigation() does not return the expected class");
	}

	/**
	 * Tests the newTitle() method.
	 *
	 * @return void.
	 */
	public function testNewTitle() {

		$obj = new HighchartsLegend(false);

		$res = $obj->newTitle();
		$this->assertInstanceOf(HighchartsTitle::class, $res, "The method newTitle() does not return the expected class");
	}

	/**
	 * Test the toArray() method.
	 *
	 * @return void
	 */
	public function testToArray() {

		$obj = new HighchartsLegend(false);

		$res = ["align" => "center", "borderColor" => "#999999", "borderRadius" => 0, "borderWidth" => 0, "enabled" => true, "floating" => false, "itemDistance" => 20, "itemHiddenStyle" => ["color" => "#cccccc"], "itemHoverStyle" => ["color" => "#000000"], "itemMarginBottom" => 0, "itemMarginTop" => 0, "itemStyle" => ["color" => "#333333", "cursor" => "pointer", "fontSize" => "12px", "fontWeight" => "bold", "textOverflow" => "ellipsis"], "labelFormat" => "{name}", "layout" => "horizontal", "lineHeight" => 16, "margin" => 12, "padding" => 8, "reversed" => false, "rtl" => false, "shadow" => false, "squareSymbol" => true, "symbolPadding" => 5, "useHTML" => false, "verticalAlign" => "bottom", "x" => 0, "y" => 0];
		$this->assertEquals($res, $obj->toArray(), "The method toArray() does not return the expected array");

		$obj->setBackgroundColor("930f2a43179a7ae5fc25ed873223e99f");

		$res1 = ["align" => "center", "borderColor" => "#999999", "borderRadius" => 0, "borderWidth" => 0, "enabled" => true, "floating" => false, "itemDistance" => 20, "itemHiddenStyle" => ["color" => "#cccccc"], "itemHoverStyle" => ["color" => "#000000"], "itemMarginBottom" => 0, "itemMarginTop" => 0, "itemStyle" => ["color" => "#333333", "cursor" => "pointer", "fontSize" => "12px", "fontWeight" => "bold", "textOverflow" => "ellipsis"], "labelFormat" => "{name}", "layout" => "horizontal", "lineHeight" => 16, "margin" => 12, "padding" => 8, "reversed" => false, "rtl" => false, "shadow" => false, "squareSymbol" => true, "symbolPadding" => 5, "useHTML" => false, "verticalAlign" => "bottom", "x" => 0, "y" => 0, "backgroundColor" => "930f2a43179a7ae5fc25ed873223e99f"];
		$this->assertEquals($res1, $obj->toArray(), "The method toArray() does not return the expected array with background color");

		$obj->setItemWidth(19);

		$res2 = ["align" => "center", "borderColor" => "#999999", "borderRadius" => 0, "borderWidth" => 0, "enabled" => true, "floating" => false, "itemDistance" => 20, "itemHiddenStyle" => ["color" => "#cccccc"], "itemHoverStyle" => ["color" => "#000000"], "itemMarginBottom" => 0, "itemMarginTop" => 0, "itemStyle" => ["color" => "#333333", "cursor" => "pointer", "fontSize" => "12px", "fontWeight" => "bold", "textOverflow" => "ellipsis"], "labelFormat" => "{name}", "layout" => "horizontal", "lineHeight" => 16, "margin" => 12, "padding" => 8, "reversed" => false, "rtl" => false, "shadow" => false, "squareSymbol" => true, "symbolPadding" => 5, "useHTML" => false, "verticalAlign" => "bottom", "x" => 0, "y" => 0, "backgroundColor" => "930f2a43179a7ae5fc25ed873223e99f", "itemWidth" => 19];
		$this->assertEquals($res2, $obj->toArray(), "The method toArray() does not return the expected array with item width");

		$obj->setLabelFormatter("9078f7787367cf94543b3bc9e92d9692");

		$res3 = ["align" => "center", "borderColor" => "#999999", "borderRadius" => 0, "borderWidth" => 0, "enabled" => true, "floating" => false, "itemDistance" => 20, "itemHiddenStyle" => ["color" => "#cccccc"], "itemHoverStyle" => ["color" => "#000000"], "itemMarginBottom" => 0, "itemMarginTop" => 0, "itemStyle" => ["color" => "#333333", "cursor" => "pointer", "fontSize" => "12px", "fontWeight" => "bold", "textOverflow" => "ellipsis"], "labelFormat" => "{name}", "layout" => "horizontal", "lineHeight" => 16, "margin" => 12, "padding" => 8, "reversed" => false, "rtl" => false, "shadow" => false, "squareSymbol" => true, "symbolPadding" => 5, "useHTML" => false, "verticalAlign" => "bottom", "x" => 0, "y" => 0, "backgroundColor" => "930f2a43179a7ae5fc25ed873223e99f", "itemWidth" => 19, "labelFormatter" => "9078f7787367cf94543b3bc9e92d9692"];
		$this->assertEquals($res3, $obj->toArray(), "The method toArray() does not return the expected array with label formatter");

		$obj->setMaxHeight(46);

		$res4 = ["align" => "center", "borderColor" => "#999999", "borderRadius" => 0, "borderWidth" => 0, "enabled" => true, "floating" => false, "itemDistance" => 20, "itemHiddenStyle" => ["color" => "#cccccc"], "itemHoverStyle" => ["color" => "#000000"], "itemMarginBottom" => 0, "itemMarginTop" => 0, "itemStyle" => ["color" => "#333333", "cursor" => "pointer", "fontSize" => "12px", "fontWeight" => "bold", "textOverflow" => "ellipsis"], "labelFormat" => "{name}", "layout" => "horizontal", "lineHeight" => 16, "margin" => 12, "padding" => 8, "reversed" => false, "rtl" => false, "shadow" => false, "squareSymbol" => true, "symbolPadding" => 5, "useHTML" => false, "verticalAlign" => "bottom", "x" => 0, "y" => 0, "backgroundColor" => "930f2a43179a7ae5fc25ed873223e99f", "itemWidth" => 19, "labelFormatter" => "9078f7787367cf94543b3bc9e92d9692", "maxHeight" => 46];
		$this->assertEquals($res4, $obj->toArray(), "The method toArray() does not return the expected array with max height");

		$obj->newNavigation();

		$res5 = ["align" => "center", "borderColor" => "#999999", "borderRadius" => 0, "borderWidth" => 0, "enabled" => true, "floating" => false, "itemDistance" => 20, "itemHiddenStyle" => ["color" => "#cccccc"], "itemHoverStyle" => ["color" => "#000000"], "itemMarginBottom" => 0, "itemMarginTop" => 0, "itemStyle" => ["color" => "#333333", "cursor" => "pointer", "fontSize" => "12px", "fontWeight" => "bold", "textOverflow" => "ellipsis"], "labelFormat" => "{name}", "layout" => "horizontal", "lineHeight" => 16, "margin" => 12, "padding" => 8, "reversed" => false, "rtl" => false, "shadow" => false, "squareSymbol" => true, "symbolPadding" => 5, "useHTML" => false, "verticalAlign" => "bottom", "x" => 0, "y" => 0, "backgroundColor" => "930f2a43179a7ae5fc25ed873223e99f", "itemWidth" => 19, "labelFormatter" => "9078f7787367cf94543b3bc9e92d9692", "maxHeight" => 46, "navigation" => []];
		$this->assertEquals($res5, $obj->toArray(), "The method toArray() does not return the expected array with navigation");

		$obj->setSymbolHeight(46);

		$res6 = ["align" => "center", "borderColor" => "#999999", "borderRadius" => 0, "borderWidth" => 0, "enabled" => true, "floating" => false, "itemDistance" => 20, "itemHiddenStyle" => ["color" => "#cccccc"], "itemHoverStyle" => ["color" => "#000000"], "itemMarginBottom" => 0, "itemMarginTop" => 0, "itemStyle" => ["color" => "#333333", "cursor" => "pointer", "fontSize" => "12px", "fontWeight" => "bold", "textOverflow" => "ellipsis"], "labelFormat" => "{name}", "layout" => "horizontal", "lineHeight" => 16, "margin" => 12, "padding" => 8, "reversed" => false, "rtl" => false, "shadow" => false, "squareSymbol" => true, "symbolPadding" => 5, "useHTML" => false, "verticalAlign" => "bottom", "x" => 0, "y" => 0, "backgroundColor" => "930f2a43179a7ae5fc25ed873223e99f", "itemWidth" => 19, "labelFormatter" => "9078f7787367cf94543b3bc9e92d9692", "maxHeight" => 46, "navigation" => [], "symbolHeight" => 46];
		$this->assertEquals($res6, $obj->toArray(), "The method toArray() does not return the expected array with symbol height");

		$obj->setSymbolRadius(80);

		$res7 = ["align" => "center", "borderColor" => "#999999", "borderRadius" => 0, "borderWidth" => 0, "enabled" => true, "floating" => false, "itemDistance" => 20, "itemHiddenStyle" => ["color" => "#cccccc"], "itemHoverStyle" => ["color" => "#000000"], "itemMarginBottom" => 0, "itemMarginTop" => 0, "itemStyle" => ["color" => "#333333", "cursor" => "pointer", "fontSize" => "12px", "fontWeight" => "bold", "textOverflow" => "ellipsis"], "labelFormat" => "{name}", "layout" => "horizontal", "lineHeight" => 16, "margin" => 12, "padding" => 8, "reversed" => false, "rtl" => false, "shadow" => false, "squareSymbol" => true, "symbolPadding" => 5, "useHTML" => false, "verticalAlign" => "bottom", "x" => 0, "y" => 0, "backgroundColor" => "930f2a43179a7ae5fc25ed873223e99f", "itemWidth" => 19, "labelFormatter" => "9078f7787367cf94543b3bc9e92d9692", "maxHeight" => 46, "navigation" => [], "symbolHeight" => 46, "symbolRadius" => 80];
		$this->assertEquals($res7, $obj->toArray(), "The method toArray() does not return the expected array with symbol radius");

		$obj->setSymbolWidth(84);

		$res8 = ["align" => "center", "borderColor" => "#999999", "borderRadius" => 0, "borderWidth" => 0, "enabled" => true, "floating" => false, "itemDistance" => 20, "itemHiddenStyle" => ["color" => "#cccccc"], "itemHoverStyle" => ["color" => "#000000"], "itemMarginBottom" => 0, "itemMarginTop" => 0, "itemStyle" => ["color" => "#333333", "cursor" => "pointer", "fontSize" => "12px", "fontWeight" => "bold", "textOverflow" => "ellipsis"], "labelFormat" => "{name}", "layout" => "horizontal", "lineHeight" => 16, "margin" => 12, "padding" => 8, "reversed" => false, "rtl" => false, "shadow" => false, "squareSymbol" => true, "symbolPadding" => 5, "useHTML" => false, "verticalAlign" => "bottom", "x" => 0, "y" => 0, "backgroundColor" => "930f2a43179a7ae5fc25ed873223e99f", "itemWidth" => 19, "labelFormatter" => "9078f7787367cf94543b3bc9e92d9692", "maxHeight" => 46, "navigation" => [], "symbolHeight" => 46, "symbolRadius" => 80, "symbolWidth" => 84];
		$this->assertEquals($res8, $obj->toArray(), "The method toArray() does not return the expected array with symbol width");

		$obj->newTitle();

		$res9 = ["align" => "center", "borderColor" => "#999999", "borderRadius" => 0, "borderWidth" => 0, "enabled" => true, "floating" => false, "itemDistance" => 20, "itemHiddenStyle" => ["color" => "#cccccc"], "itemHoverStyle" => ["color" => "#000000"], "itemMarginBottom" => 0, "itemMarginTop" => 0, "itemStyle" => ["color" => "#333333", "cursor" => "pointer", "fontSize" => "12px", "fontWeight" => "bold", "textOverflow" => "ellipsis"], "labelFormat" => "{name}", "layout" => "horizontal", "lineHeight" => 16, "margin" => 12, "padding" => 8, "reversed" => false, "rtl" => false, "shadow" => false, "squareSymbol" => true, "symbolPadding" => 5, "useHTML" => false, "verticalAlign" => "bottom", "x" => 0, "y" => 0, "backgroundColor" => "930f2a43179a7ae5fc25ed873223e99f", "itemWidth" => 19, "labelFormatter" => "9078f7787367cf94543b3bc9e92d9692", "maxHeight" => 46, "navigation" => [], "symbolHeight" => 46, "symbolRadius" => 80, "symbolWidth" => 84, "title" => []];
		$this->assertEquals($res9, $obj->toArray(), "The method toArray() does not return the expected array with title");

		$obj->setWidth(79);

		$res10 = ["align" => "center", "borderColor" => "#999999", "borderRadius" => 0, "borderWidth" => 0, "enabled" => true, "floating" => false, "itemDistance" => 20, "itemHiddenStyle" => ["color" => "#cccccc"], "itemHoverStyle" => ["color" => "#000000"], "itemMarginBottom" => 0, "itemMarginTop" => 0, "itemStyle" => ["color" => "#333333", "cursor" => "pointer", "fontSize" => "12px", "fontWeight" => "bold", "textOverflow" => "ellipsis"], "labelFormat" => "{name}", "layout" => "horizontal", "lineHeight" => 16, "margin" => 12, "padding" => 8, "reversed" => false, "rtl" => false, "shadow" => false, "squareSymbol" => true, "symbolPadding" => 5, "useHTML" => false, "verticalAlign" => "bottom", "x" => 0, "y" => 0, "backgroundColor" => "930f2a43179a7ae5fc25ed873223e99f", "itemWidth" => 19, "labelFormatter" => "9078f7787367cf94543b3bc9e92d9692", "maxHeight" => 46, "navigation" => [], "symbolHeight" => 46, "symbolRadius" => 80, "symbolWidth" => 84, "title" => [], "width" => 79];
		$this->assertEquals($res10, $obj->toArray(), "The method toArray() does not return the expected array with width");
	}

}
