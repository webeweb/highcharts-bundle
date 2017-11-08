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
 * Highcharts legend test.
 *
 * @author NdC/WBW <https://github.com/webeweb/>
 * @package WBW\Bundle\HighchartsBundle\Tests\API\Chart
 * @version 5.0.14
 */
final class HighchartsLegendTest extends PHPUnit_Framework_TestCase {

	/**
	 * Tests the __construct() method.
	 *
	 * @return void
	 */
	public function testConstructor() {

		$obj1 = new \WBW\Bundle\HighchartsBundle\API\Chart\HighchartsLegend(true);

		$this->assertEquals(null, $obj1->getAlign(), "The method getAlign() does not return the expected value");
		$this->assertEquals(null, $obj1->getBackgroundColor(), "The method getBackgroundColor() does not return the expected value");
		$this->assertEquals(null, $obj1->getBorderColor(), "The method getBorderColor() does not return the expected value");
		$this->assertEquals(null, $obj1->getBorderRadius(), "The method getBorderRadius() does not return the expected value");
		$this->assertEquals(null, $obj1->getBorderWidth(), "The method getBorderWidth() does not return the expected value");
		$this->assertEquals(null, $obj1->getEnabled(), "The method getEnabled() does not return the expected value");
		$this->assertEquals(null, $obj1->getFloating(), "The method getFloating() does not return the expected value");
		$this->assertEquals(null, $obj1->getItemDistance(), "The method getItemDistance() does not return the expected value");
		$this->assertEquals(null, $obj1->getItemHiddenStyle(), "The method getItemHiddenStyle() does not return the expected value");
		$this->assertEquals(null, $obj1->getItemHoverStyle(), "The method getItemHoverStyle() does not return the expected value");
		$this->assertEquals(null, $obj1->getItemMarginBottom(), "The method getItemMarginBottom() does not return the expected value");
		$this->assertEquals(null, $obj1->getItemMarginTop(), "The method getItemMarginTop() does not return the expected value");
		$this->assertEquals(null, $obj1->getItemStyle(), "The method getItemStyle() does not return the expected value");
		$this->assertEquals(null, $obj1->getItemWidth(), "The method getItemWidth() does not return the expected value");
		$this->assertEquals(null, $obj1->getLabelFormat(), "The method getLabelFormat() does not return the expected value");
		$this->assertEquals(null, $obj1->getLabelFormatter(), "The method getLabelFormatter() does not return the expected value");
		$this->assertEquals(null, $obj1->getLayout(), "The method getLayout() does not return the expected value");
		$this->assertEquals(null, $obj1->getLineHeight(), "The method getLineHeight() does not return the expected value");
		$this->assertEquals(null, $obj1->getMargin(), "The method getMargin() does not return the expected value");
		$this->assertEquals(null, $obj1->getMaxHeight(), "The method getMaxHeight() does not return the expected value");
		$this->assertEquals(null, $obj1->getNavigation(), "The method getNavigation() does not return the expected value");
		$this->assertEquals(null, $obj1->getPadding(), "The method getPadding() does not return the expected value");
		$this->assertEquals(null, $obj1->getReversed(), "The method getReversed() does not return the expected value");
		$this->assertEquals(null, $obj1->getRtl(), "The method getRtl() does not return the expected value");
		$this->assertEquals(null, $obj1->getShadow(), "The method getShadow() does not return the expected value");
		$this->assertEquals(null, $obj1->getSquareSymbol(), "The method getSquareSymbol() does not return the expected value");
		$this->assertEquals(null, $obj1->getStyle(), "The method getStyle() does not return the expected value");
		$this->assertEquals(null, $obj1->getSymbolHeight(), "The method getSymbolHeight() does not return the expected value");
		$this->assertEquals(null, $obj1->getSymbolPadding(), "The method getSymbolPadding() does not return the expected value");
		$this->assertEquals(null, $obj1->getSymbolRadius(), "The method getSymbolRadius() does not return the expected value");
		$this->assertEquals(null, $obj1->getSymbolWidth(), "The method getSymbolWidth() does not return the expected value");
		$this->assertEquals(null, $obj1->getTitle(), "The method getTitle() does not return the expected value");
		$this->assertEquals(null, $obj1->getUseHTML(), "The method getUseHTML() does not return the expected value");
		$this->assertEquals(null, $obj1->getVerticalAlign(), "The method getVerticalAlign() does not return the expected value");
		$this->assertEquals(null, $obj1->getWidth(), "The method getWidth() does not return the expected value");
		$this->assertEquals(null, $obj1->getX(), "The method getX() does not return the expected value");
		$this->assertEquals(null, $obj1->getY(), "The method getY() does not return the expected value");

		$obj0 = new \WBW\Bundle\HighchartsBundle\API\Chart\HighchartsLegend(false);

		$this->assertEquals("center", $obj0->getAlign(), "The method getAlign() does not return the expected value");
		$this->assertEquals(null, $obj0->getBackgroundColor(), "The method getBackgroundColor() does not return the expected value");
		$this->assertEquals("#999999", $obj0->getBorderColor(), "The method getBorderColor() does not return the expected value");
		$this->assertEquals(0, $obj0->getBorderRadius(), "The method getBorderRadius() does not return the expected value");
		$this->assertEquals(0, $obj0->getBorderWidth(), "The method getBorderWidth() does not return the expected value");
		$this->assertEquals(true, $obj0->getEnabled(), "The method getEnabled() does not return the expected value");
		$this->assertEquals(false, $obj0->getFloating(), "The method getFloating() does not return the expected value");
		$this->assertEquals(20, $obj0->getItemDistance(), "The method getItemDistance() does not return the expected value");
		$this->assertEquals(["color" => "#cccccc"], $obj0->getItemHiddenStyle(), "The method getItemHiddenStyle() does not return the expected value");
		$this->assertEquals(["color" => "#000000"], $obj0->getItemHoverStyle(), "The method getItemHoverStyle() does not return the expected value");
		$this->assertEquals(0, $obj0->getItemMarginBottom(), "The method getItemMarginBottom() does not return the expected value");
		$this->assertEquals(0, $obj0->getItemMarginTop(), "The method getItemMarginTop() does not return the expected value");
		$this->assertEquals(["color" => "#333333", "cursor" => "pointer", "fontSize" => "12px", "fontWeight" => "bold", "textOverflow" => "ellipsis"], $obj0->getItemStyle(), "The method getItemStyle() does not return the expected value");
		$this->assertEquals(null, $obj0->getItemWidth(), "The method getItemWidth() does not return the expected value");
		$this->assertEquals("{name}", $obj0->getLabelFormat(), "The method getLabelFormat() does not return the expected value");
		$this->assertEquals(null, $obj0->getLabelFormatter(), "The method getLabelFormatter() does not return the expected value");
		$this->assertEquals("horizontal", $obj0->getLayout(), "The method getLayout() does not return the expected value");
		$this->assertEquals(16, $obj0->getLineHeight(), "The method getLineHeight() does not return the expected value");
		$this->assertEquals(12, $obj0->getMargin(), "The method getMargin() does not return the expected value");
		$this->assertEquals(null, $obj0->getMaxHeight(), "The method getMaxHeight() does not return the expected value");
		$this->assertEquals(null, $obj0->getNavigation(), "The method getNavigation() does not return the expected value");
		$this->assertEquals(8, $obj0->getPadding(), "The method getPadding() does not return the expected value");
		$this->assertEquals(false, $obj0->getReversed(), "The method getReversed() does not return the expected value");
		$this->assertEquals(false, $obj0->getRtl(), "The method getRtl() does not return the expected value");
		$this->assertEquals(false, $obj0->getShadow(), "The method getShadow() does not return the expected value");
		$this->assertEquals(true, $obj0->getSquareSymbol(), "The method getSquareSymbol() does not return the expected value");
		$this->assertEquals(null, $obj0->getStyle(), "The method getStyle() does not return the expected value");
		$this->assertEquals(null, $obj0->getSymbolHeight(), "The method getSymbolHeight() does not return the expected value");
		$this->assertEquals(5, $obj0->getSymbolPadding(), "The method getSymbolPadding() does not return the expected value");
		$this->assertEquals(null, $obj0->getSymbolRadius(), "The method getSymbolRadius() does not return the expected value");
		$this->assertEquals(null, $obj0->getSymbolWidth(), "The method getSymbolWidth() does not return the expected value");
		$this->assertEquals(null, $obj0->getTitle(), "The method getTitle() does not return the expected value");
		$this->assertEquals(false, $obj0->getUseHTML(), "The method getUseHTML() does not return the expected value");
		$this->assertEquals("bottom", $obj0->getVerticalAlign(), "The method getVerticalAlign() does not return the expected value");
		$this->assertEquals(null, $obj0->getWidth(), "The method getWidth() does not return the expected value");
		$this->assertEquals(0, $obj0->getX(), "The method getX() does not return the expected value");
		$this->assertEquals(0, $obj0->getY(), "The method getY() does not return the expected value");
    }

	/**
	 * Tests the clear() method.
	 *
	 * @return void
	 */
	public function testClear() {

		$obj = new \WBW\Bundle\HighchartsBundle\API\Chart\HighchartsLegend(false);

		$obj->newNavigation();
		$obj->newTitle();

		$obj->clear();

		$res = ["navigation" => [], "title" => []];
		$this->assertEquals($res, $obj->toArray(), "The method toArray() does not return the expected array");
	}

	/**
	 * Tests the jsonSerialize() method.
	 *
	 * @return void
	 */
	public function testJsonSerialize() {

		$obj = new \WBW\Bundle\HighchartsBundle\API\Chart\HighchartsLegend(true);

		$this->assertEquals([], $obj->jsonSerialize(), "The method jsonSerialize() does not return the expected value");
	}

	/**
	 * Tests the newNavigation() method.
	 *
	 * @return void.
	 */
	public function testNewNavigation() {

		$obj = new \WBW\Bundle\HighchartsBundle\API\Chart\HighchartsLegend(false);

		$res = $obj->newNavigation();
		$this->assertInstanceOf(\WBW\Bundle\HighchartsBundle\API\Chart\Legend\HighchartsNavigation::class, $res, "The method newNavigation() does not return the expected object");
	}

	/**
	 * Tests the newTitle() method.
	 *
	 * @return void.
	 */
	public function testNewTitle() {

		$obj = new \WBW\Bundle\HighchartsBundle\API\Chart\HighchartsLegend(false);

		$res = $obj->newTitle();
		$this->assertInstanceOf(\WBW\Bundle\HighchartsBundle\API\Chart\Legend\HighchartsTitle::class, $res, "The method newTitle() does not return the expected object");
	}

	/**
	 * Tests the toArray() method.
	 *
	 * @return void
	 */
	public function testToArray() {

		$obj = new \WBW\Bundle\HighchartsBundle\API\Chart\HighchartsLegend(true);

		$obj->setAlign("right");

		$res1 = ["align" => "right"];
		$this->assertEquals($res1, $obj->toArray(), "The method toArray() does not return the expected array with align");

		$obj->setBackgroundColor("930f2a43179a7ae5fc25ed873223e99f");

		$res2 = ["align" => "right", "backgroundColor" => "930f2a43179a7ae5fc25ed873223e99f"];
		$this->assertEquals($res2, $obj->toArray(), "The method toArray() does not return the expected array with background color");

		$obj->setBorderColor("97da935a74593c55d78be9d1295aa994");

		$res3 = ["align" => "right", "backgroundColor" => "930f2a43179a7ae5fc25ed873223e99f", "borderColor" => "97da935a74593c55d78be9d1295aa994"];
		$this->assertEquals($res3, $obj->toArray(), "The method toArray() does not return the expected array with border color");

		$obj->setBorderRadius(14);

		$res4 = ["align" => "right", "backgroundColor" => "930f2a43179a7ae5fc25ed873223e99f", "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 14];
		$this->assertEquals($res4, $obj->toArray(), "The method toArray() does not return the expected array with border radius");

		$obj->setBorderWidth(6);

		$res5 = ["align" => "right", "backgroundColor" => "930f2a43179a7ae5fc25ed873223e99f", "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 14, "borderWidth" => 6];
		$this->assertEquals($res5, $obj->toArray(), "The method toArray() does not return the expected array with border width");

		$obj->setEnabled(0);

		$res6 = ["align" => "right", "backgroundColor" => "930f2a43179a7ae5fc25ed873223e99f", "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 14, "borderWidth" => 6, "enabled" => 0];
		$this->assertEquals($res6, $obj->toArray(), "The method toArray() does not return the expected array with enabled");

		$obj->setFloating(0);

		$res7 = ["align" => "right", "backgroundColor" => "930f2a43179a7ae5fc25ed873223e99f", "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 14, "borderWidth" => 6, "enabled" => 0, "floating" => 0];
		$this->assertEquals($res7, $obj->toArray(), "The method toArray() does not return the expected array with floating");

		$obj->setItemDistance(77);

		$res8 = ["align" => "right", "backgroundColor" => "930f2a43179a7ae5fc25ed873223e99f", "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 14, "borderWidth" => 6, "enabled" => 0, "floating" => 0, "itemDistance" => 77];
		$this->assertEquals($res8, $obj->toArray(), "The method toArray() does not return the expected array with item distance");

		$obj->setItemHiddenStyle(["itemHiddenStyle" => "85396c3e708111e2ae389e4a131b1ff8"]);

		$res9 = ["align" => "right", "backgroundColor" => "930f2a43179a7ae5fc25ed873223e99f", "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 14, "borderWidth" => 6, "enabled" => 0, "floating" => 0, "itemDistance" => 77, "itemHiddenStyle" => ["itemHiddenStyle" => "85396c3e708111e2ae389e4a131b1ff8"]];
		$this->assertEquals($res9, $obj->toArray(), "The method toArray() does not return the expected array with item hidden style");

		$obj->setItemHoverStyle(["itemHoverStyle" => "91e12ccdec8780b32ab867d3568c2b0c"]);

		$res10 = ["align" => "right", "backgroundColor" => "930f2a43179a7ae5fc25ed873223e99f", "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 14, "borderWidth" => 6, "enabled" => 0, "floating" => 0, "itemDistance" => 77, "itemHiddenStyle" => ["itemHiddenStyle" => "85396c3e708111e2ae389e4a131b1ff8"], "itemHoverStyle" => ["itemHoverStyle" => "91e12ccdec8780b32ab867d3568c2b0c"]];
		$this->assertEquals($res10, $obj->toArray(), "The method toArray() does not return the expected array with item hover style");

		$obj->setItemMarginBottom(99);

		$res11 = ["align" => "right", "backgroundColor" => "930f2a43179a7ae5fc25ed873223e99f", "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 14, "borderWidth" => 6, "enabled" => 0, "floating" => 0, "itemDistance" => 77, "itemHiddenStyle" => ["itemHiddenStyle" => "85396c3e708111e2ae389e4a131b1ff8"], "itemHoverStyle" => ["itemHoverStyle" => "91e12ccdec8780b32ab867d3568c2b0c"], "itemMarginBottom" => 99];
		$this->assertEquals($res11, $obj->toArray(), "The method toArray() does not return the expected array with item margin bottom");

		$obj->setItemMarginTop(52);

		$res12 = ["align" => "right", "backgroundColor" => "930f2a43179a7ae5fc25ed873223e99f", "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 14, "borderWidth" => 6, "enabled" => 0, "floating" => 0, "itemDistance" => 77, "itemHiddenStyle" => ["itemHiddenStyle" => "85396c3e708111e2ae389e4a131b1ff8"], "itemHoverStyle" => ["itemHoverStyle" => "91e12ccdec8780b32ab867d3568c2b0c"], "itemMarginBottom" => 99, "itemMarginTop" => 52];
		$this->assertEquals($res12, $obj->toArray(), "The method toArray() does not return the expected array with item margin top");

		$obj->setItemStyle(["itemStyle" => "5428035d6f7481541cf715e0f3e29604"]);

		$res13 = ["align" => "right", "backgroundColor" => "930f2a43179a7ae5fc25ed873223e99f", "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 14, "borderWidth" => 6, "enabled" => 0, "floating" => 0, "itemDistance" => 77, "itemHiddenStyle" => ["itemHiddenStyle" => "85396c3e708111e2ae389e4a131b1ff8"], "itemHoverStyle" => ["itemHoverStyle" => "91e12ccdec8780b32ab867d3568c2b0c"], "itemMarginBottom" => 99, "itemMarginTop" => 52, "itemStyle" => ["itemStyle" => "5428035d6f7481541cf715e0f3e29604"]];
		$this->assertEquals($res13, $obj->toArray(), "The method toArray() does not return the expected array with item style");

		$obj->setItemWidth(18);

		$res14 = ["align" => "right", "backgroundColor" => "930f2a43179a7ae5fc25ed873223e99f", "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 14, "borderWidth" => 6, "enabled" => 0, "floating" => 0, "itemDistance" => 77, "itemHiddenStyle" => ["itemHiddenStyle" => "85396c3e708111e2ae389e4a131b1ff8"], "itemHoverStyle" => ["itemHoverStyle" => "91e12ccdec8780b32ab867d3568c2b0c"], "itemMarginBottom" => 99, "itemMarginTop" => 52, "itemStyle" => ["itemStyle" => "5428035d6f7481541cf715e0f3e29604"], "itemWidth" => 18];
		$this->assertEquals($res14, $obj->toArray(), "The method toArray() does not return the expected array with item width");

		$obj->setLabelFormat("201bbcba25ee83a321df388c0f4a889d");

		$res15 = ["align" => "right", "backgroundColor" => "930f2a43179a7ae5fc25ed873223e99f", "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 14, "borderWidth" => 6, "enabled" => 0, "floating" => 0, "itemDistance" => 77, "itemHiddenStyle" => ["itemHiddenStyle" => "85396c3e708111e2ae389e4a131b1ff8"], "itemHoverStyle" => ["itemHoverStyle" => "91e12ccdec8780b32ab867d3568c2b0c"], "itemMarginBottom" => 99, "itemMarginTop" => 52, "itemStyle" => ["itemStyle" => "5428035d6f7481541cf715e0f3e29604"], "itemWidth" => 18, "labelFormat" => "201bbcba25ee83a321df388c0f4a889d"];
		$this->assertEquals($res15, $obj->toArray(), "The method toArray() does not return the expected array with label format");

		$obj->setLabelFormatter("9078f7787367cf94543b3bc9e92d9692");

		$res16 = ["align" => "right", "backgroundColor" => "930f2a43179a7ae5fc25ed873223e99f", "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 14, "borderWidth" => 6, "enabled" => 0, "floating" => 0, "itemDistance" => 77, "itemHiddenStyle" => ["itemHiddenStyle" => "85396c3e708111e2ae389e4a131b1ff8"], "itemHoverStyle" => ["itemHoverStyle" => "91e12ccdec8780b32ab867d3568c2b0c"], "itemMarginBottom" => 99, "itemMarginTop" => 52, "itemStyle" => ["itemStyle" => "5428035d6f7481541cf715e0f3e29604"], "itemWidth" => 18, "labelFormat" => "201bbcba25ee83a321df388c0f4a889d", "labelFormatter" => "9078f7787367cf94543b3bc9e92d9692"];
		$this->assertEquals($res16, $obj->toArray(), "The method toArray() does not return the expected array with label formatter");

		$obj->setLayout("vertical");

		$res17 = ["align" => "right", "backgroundColor" => "930f2a43179a7ae5fc25ed873223e99f", "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 14, "borderWidth" => 6, "enabled" => 0, "floating" => 0, "itemDistance" => 77, "itemHiddenStyle" => ["itemHiddenStyle" => "85396c3e708111e2ae389e4a131b1ff8"], "itemHoverStyle" => ["itemHoverStyle" => "91e12ccdec8780b32ab867d3568c2b0c"], "itemMarginBottom" => 99, "itemMarginTop" => 52, "itemStyle" => ["itemStyle" => "5428035d6f7481541cf715e0f3e29604"], "itemWidth" => 18, "labelFormat" => "201bbcba25ee83a321df388c0f4a889d", "labelFormatter" => "9078f7787367cf94543b3bc9e92d9692", "layout" => "vertical"];
		$this->assertEquals($res17, $obj->toArray(), "The method toArray() does not return the expected array with layout");

		$obj->setLineHeight(9);

		$res18 = ["align" => "right", "backgroundColor" => "930f2a43179a7ae5fc25ed873223e99f", "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 14, "borderWidth" => 6, "enabled" => 0, "floating" => 0, "itemDistance" => 77, "itemHiddenStyle" => ["itemHiddenStyle" => "85396c3e708111e2ae389e4a131b1ff8"], "itemHoverStyle" => ["itemHoverStyle" => "91e12ccdec8780b32ab867d3568c2b0c"], "itemMarginBottom" => 99, "itemMarginTop" => 52, "itemStyle" => ["itemStyle" => "5428035d6f7481541cf715e0f3e29604"], "itemWidth" => 18, "labelFormat" => "201bbcba25ee83a321df388c0f4a889d", "labelFormatter" => "9078f7787367cf94543b3bc9e92d9692", "layout" => "vertical", "lineHeight" => 9];
		$this->assertEquals($res18, $obj->toArray(), "The method toArray() does not return the expected array with line height");

		$obj->setMargin(39);

		$res19 = ["align" => "right", "backgroundColor" => "930f2a43179a7ae5fc25ed873223e99f", "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 14, "borderWidth" => 6, "enabled" => 0, "floating" => 0, "itemDistance" => 77, "itemHiddenStyle" => ["itemHiddenStyle" => "85396c3e708111e2ae389e4a131b1ff8"], "itemHoverStyle" => ["itemHoverStyle" => "91e12ccdec8780b32ab867d3568c2b0c"], "itemMarginBottom" => 99, "itemMarginTop" => 52, "itemStyle" => ["itemStyle" => "5428035d6f7481541cf715e0f3e29604"], "itemWidth" => 18, "labelFormat" => "201bbcba25ee83a321df388c0f4a889d", "labelFormatter" => "9078f7787367cf94543b3bc9e92d9692", "layout" => "vertical", "lineHeight" => 9, "margin" => 39];
		$this->assertEquals($res19, $obj->toArray(), "The method toArray() does not return the expected array with margin");

		$obj->setMaxHeight(20);

		$res20 = ["align" => "right", "backgroundColor" => "930f2a43179a7ae5fc25ed873223e99f", "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 14, "borderWidth" => 6, "enabled" => 0, "floating" => 0, "itemDistance" => 77, "itemHiddenStyle" => ["itemHiddenStyle" => "85396c3e708111e2ae389e4a131b1ff8"], "itemHoverStyle" => ["itemHoverStyle" => "91e12ccdec8780b32ab867d3568c2b0c"], "itemMarginBottom" => 99, "itemMarginTop" => 52, "itemStyle" => ["itemStyle" => "5428035d6f7481541cf715e0f3e29604"], "itemWidth" => 18, "labelFormat" => "201bbcba25ee83a321df388c0f4a889d", "labelFormatter" => "9078f7787367cf94543b3bc9e92d9692", "layout" => "vertical", "lineHeight" => 9, "margin" => 39, "maxHeight" => 20];
		$this->assertEquals($res20, $obj->toArray(), "The method toArray() does not return the expected array with max height");

		$obj->setNavigation(new \WBW\Bundle\HighchartsBundle\API\Chart\Legend\HighchartsNavigation());

		$res21 = ["align" => "right", "backgroundColor" => "930f2a43179a7ae5fc25ed873223e99f", "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 14, "borderWidth" => 6, "enabled" => 0, "floating" => 0, "itemDistance" => 77, "itemHiddenStyle" => ["itemHiddenStyle" => "85396c3e708111e2ae389e4a131b1ff8"], "itemHoverStyle" => ["itemHoverStyle" => "91e12ccdec8780b32ab867d3568c2b0c"], "itemMarginBottom" => 99, "itemMarginTop" => 52, "itemStyle" => ["itemStyle" => "5428035d6f7481541cf715e0f3e29604"], "itemWidth" => 18, "labelFormat" => "201bbcba25ee83a321df388c0f4a889d", "labelFormatter" => "9078f7787367cf94543b3bc9e92d9692", "layout" => "vertical", "lineHeight" => 9, "margin" => 39, "maxHeight" => 20, "navigation" => []];
		$this->assertEquals($res21, $obj->toArray(), "The method toArray() does not return the expected array with navigation");

		$obj->setPadding(59);

		$res22 = ["align" => "right", "backgroundColor" => "930f2a43179a7ae5fc25ed873223e99f", "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 14, "borderWidth" => 6, "enabled" => 0, "floating" => 0, "itemDistance" => 77, "itemHiddenStyle" => ["itemHiddenStyle" => "85396c3e708111e2ae389e4a131b1ff8"], "itemHoverStyle" => ["itemHoverStyle" => "91e12ccdec8780b32ab867d3568c2b0c"], "itemMarginBottom" => 99, "itemMarginTop" => 52, "itemStyle" => ["itemStyle" => "5428035d6f7481541cf715e0f3e29604"], "itemWidth" => 18, "labelFormat" => "201bbcba25ee83a321df388c0f4a889d", "labelFormatter" => "9078f7787367cf94543b3bc9e92d9692", "layout" => "vertical", "lineHeight" => 9, "margin" => 39, "maxHeight" => 20, "navigation" => [], "padding" => 59];
		$this->assertEquals($res22, $obj->toArray(), "The method toArray() does not return the expected array with padding");

		$obj->setReversed(0);

		$res23 = ["align" => "right", "backgroundColor" => "930f2a43179a7ae5fc25ed873223e99f", "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 14, "borderWidth" => 6, "enabled" => 0, "floating" => 0, "itemDistance" => 77, "itemHiddenStyle" => ["itemHiddenStyle" => "85396c3e708111e2ae389e4a131b1ff8"], "itemHoverStyle" => ["itemHoverStyle" => "91e12ccdec8780b32ab867d3568c2b0c"], "itemMarginBottom" => 99, "itemMarginTop" => 52, "itemStyle" => ["itemStyle" => "5428035d6f7481541cf715e0f3e29604"], "itemWidth" => 18, "labelFormat" => "201bbcba25ee83a321df388c0f4a889d", "labelFormatter" => "9078f7787367cf94543b3bc9e92d9692", "layout" => "vertical", "lineHeight" => 9, "margin" => 39, "maxHeight" => 20, "navigation" => [], "padding" => 59, "reversed" => 0];
		$this->assertEquals($res23, $obj->toArray(), "The method toArray() does not return the expected array with reversed");

		$obj->setRtl(1);

		$res24 = ["align" => "right", "backgroundColor" => "930f2a43179a7ae5fc25ed873223e99f", "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 14, "borderWidth" => 6, "enabled" => 0, "floating" => 0, "itemDistance" => 77, "itemHiddenStyle" => ["itemHiddenStyle" => "85396c3e708111e2ae389e4a131b1ff8"], "itemHoverStyle" => ["itemHoverStyle" => "91e12ccdec8780b32ab867d3568c2b0c"], "itemMarginBottom" => 99, "itemMarginTop" => 52, "itemStyle" => ["itemStyle" => "5428035d6f7481541cf715e0f3e29604"], "itemWidth" => 18, "labelFormat" => "201bbcba25ee83a321df388c0f4a889d", "labelFormatter" => "9078f7787367cf94543b3bc9e92d9692", "layout" => "vertical", "lineHeight" => 9, "margin" => 39, "maxHeight" => 20, "navigation" => [], "padding" => 59, "reversed" => 0, "rtl" => 1];
		$this->assertEquals($res24, $obj->toArray(), "The method toArray() does not return the expected array with rtl");

		$obj->setShadow(0);

		$res25 = ["align" => "right", "backgroundColor" => "930f2a43179a7ae5fc25ed873223e99f", "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 14, "borderWidth" => 6, "enabled" => 0, "floating" => 0, "itemDistance" => 77, "itemHiddenStyle" => ["itemHiddenStyle" => "85396c3e708111e2ae389e4a131b1ff8"], "itemHoverStyle" => ["itemHoverStyle" => "91e12ccdec8780b32ab867d3568c2b0c"], "itemMarginBottom" => 99, "itemMarginTop" => 52, "itemStyle" => ["itemStyle" => "5428035d6f7481541cf715e0f3e29604"], "itemWidth" => 18, "labelFormat" => "201bbcba25ee83a321df388c0f4a889d", "labelFormatter" => "9078f7787367cf94543b3bc9e92d9692", "layout" => "vertical", "lineHeight" => 9, "margin" => 39, "maxHeight" => 20, "navigation" => [], "padding" => 59, "reversed" => 0, "rtl" => 1, "shadow" => 0];
		$this->assertEquals($res25, $obj->toArray(), "The method toArray() does not return the expected array with shadow");

		$obj->setSquareSymbol(1);

		$res26 = ["align" => "right", "backgroundColor" => "930f2a43179a7ae5fc25ed873223e99f", "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 14, "borderWidth" => 6, "enabled" => 0, "floating" => 0, "itemDistance" => 77, "itemHiddenStyle" => ["itemHiddenStyle" => "85396c3e708111e2ae389e4a131b1ff8"], "itemHoverStyle" => ["itemHoverStyle" => "91e12ccdec8780b32ab867d3568c2b0c"], "itemMarginBottom" => 99, "itemMarginTop" => 52, "itemStyle" => ["itemStyle" => "5428035d6f7481541cf715e0f3e29604"], "itemWidth" => 18, "labelFormat" => "201bbcba25ee83a321df388c0f4a889d", "labelFormatter" => "9078f7787367cf94543b3bc9e92d9692", "layout" => "vertical", "lineHeight" => 9, "margin" => 39, "maxHeight" => 20, "navigation" => [], "padding" => 59, "reversed" => 0, "rtl" => 1, "shadow" => 0, "squareSymbol" => 1];
		$this->assertEquals($res26, $obj->toArray(), "The method toArray() does not return the expected array with square symbol");

		$obj->setStyle(["style" => "a1b01e734b573fca08eb1a65e6df9a38"]);

		$res27 = ["align" => "right", "backgroundColor" => "930f2a43179a7ae5fc25ed873223e99f", "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 14, "borderWidth" => 6, "enabled" => 0, "floating" => 0, "itemDistance" => 77, "itemHiddenStyle" => ["itemHiddenStyle" => "85396c3e708111e2ae389e4a131b1ff8"], "itemHoverStyle" => ["itemHoverStyle" => "91e12ccdec8780b32ab867d3568c2b0c"], "itemMarginBottom" => 99, "itemMarginTop" => 52, "itemStyle" => ["itemStyle" => "5428035d6f7481541cf715e0f3e29604"], "itemWidth" => 18, "labelFormat" => "201bbcba25ee83a321df388c0f4a889d", "labelFormatter" => "9078f7787367cf94543b3bc9e92d9692", "layout" => "vertical", "lineHeight" => 9, "margin" => 39, "maxHeight" => 20, "navigation" => [], "padding" => 59, "reversed" => 0, "rtl" => 1, "shadow" => 0, "squareSymbol" => 1, "style" => ["style" => "a1b01e734b573fca08eb1a65e6df9a38"]];
		$this->assertEquals($res27, $obj->toArray(), "The method toArray() does not return the expected array with style");

		$obj->setSymbolHeight(41);

		$res28 = ["align" => "right", "backgroundColor" => "930f2a43179a7ae5fc25ed873223e99f", "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 14, "borderWidth" => 6, "enabled" => 0, "floating" => 0, "itemDistance" => 77, "itemHiddenStyle" => ["itemHiddenStyle" => "85396c3e708111e2ae389e4a131b1ff8"], "itemHoverStyle" => ["itemHoverStyle" => "91e12ccdec8780b32ab867d3568c2b0c"], "itemMarginBottom" => 99, "itemMarginTop" => 52, "itemStyle" => ["itemStyle" => "5428035d6f7481541cf715e0f3e29604"], "itemWidth" => 18, "labelFormat" => "201bbcba25ee83a321df388c0f4a889d", "labelFormatter" => "9078f7787367cf94543b3bc9e92d9692", "layout" => "vertical", "lineHeight" => 9, "margin" => 39, "maxHeight" => 20, "navigation" => [], "padding" => 59, "reversed" => 0, "rtl" => 1, "shadow" => 0, "squareSymbol" => 1, "style" => ["style" => "a1b01e734b573fca08eb1a65e6df9a38"], "symbolHeight" => 41];
		$this->assertEquals($res28, $obj->toArray(), "The method toArray() does not return the expected array with symbol height");

		$obj->setSymbolPadding(3);

		$res29 = ["align" => "right", "backgroundColor" => "930f2a43179a7ae5fc25ed873223e99f", "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 14, "borderWidth" => 6, "enabled" => 0, "floating" => 0, "itemDistance" => 77, "itemHiddenStyle" => ["itemHiddenStyle" => "85396c3e708111e2ae389e4a131b1ff8"], "itemHoverStyle" => ["itemHoverStyle" => "91e12ccdec8780b32ab867d3568c2b0c"], "itemMarginBottom" => 99, "itemMarginTop" => 52, "itemStyle" => ["itemStyle" => "5428035d6f7481541cf715e0f3e29604"], "itemWidth" => 18, "labelFormat" => "201bbcba25ee83a321df388c0f4a889d", "labelFormatter" => "9078f7787367cf94543b3bc9e92d9692", "layout" => "vertical", "lineHeight" => 9, "margin" => 39, "maxHeight" => 20, "navigation" => [], "padding" => 59, "reversed" => 0, "rtl" => 1, "shadow" => 0, "squareSymbol" => 1, "style" => ["style" => "a1b01e734b573fca08eb1a65e6df9a38"], "symbolHeight" => 41, "symbolPadding" => 3];
		$this->assertEquals($res29, $obj->toArray(), "The method toArray() does not return the expected array with symbol padding");

		$obj->setSymbolRadius(88);

		$res30 = ["align" => "right", "backgroundColor" => "930f2a43179a7ae5fc25ed873223e99f", "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 14, "borderWidth" => 6, "enabled" => 0, "floating" => 0, "itemDistance" => 77, "itemHiddenStyle" => ["itemHiddenStyle" => "85396c3e708111e2ae389e4a131b1ff8"], "itemHoverStyle" => ["itemHoverStyle" => "91e12ccdec8780b32ab867d3568c2b0c"], "itemMarginBottom" => 99, "itemMarginTop" => 52, "itemStyle" => ["itemStyle" => "5428035d6f7481541cf715e0f3e29604"], "itemWidth" => 18, "labelFormat" => "201bbcba25ee83a321df388c0f4a889d", "labelFormatter" => "9078f7787367cf94543b3bc9e92d9692", "layout" => "vertical", "lineHeight" => 9, "margin" => 39, "maxHeight" => 20, "navigation" => [], "padding" => 59, "reversed" => 0, "rtl" => 1, "shadow" => 0, "squareSymbol" => 1, "style" => ["style" => "a1b01e734b573fca08eb1a65e6df9a38"], "symbolHeight" => 41, "symbolPadding" => 3, "symbolRadius" => 88];
		$this->assertEquals($res30, $obj->toArray(), "The method toArray() does not return the expected array with symbol radius");

		$obj->setSymbolWidth(72);

		$res31 = ["align" => "right", "backgroundColor" => "930f2a43179a7ae5fc25ed873223e99f", "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 14, "borderWidth" => 6, "enabled" => 0, "floating" => 0, "itemDistance" => 77, "itemHiddenStyle" => ["itemHiddenStyle" => "85396c3e708111e2ae389e4a131b1ff8"], "itemHoverStyle" => ["itemHoverStyle" => "91e12ccdec8780b32ab867d3568c2b0c"], "itemMarginBottom" => 99, "itemMarginTop" => 52, "itemStyle" => ["itemStyle" => "5428035d6f7481541cf715e0f3e29604"], "itemWidth" => 18, "labelFormat" => "201bbcba25ee83a321df388c0f4a889d", "labelFormatter" => "9078f7787367cf94543b3bc9e92d9692", "layout" => "vertical", "lineHeight" => 9, "margin" => 39, "maxHeight" => 20, "navigation" => [], "padding" => 59, "reversed" => 0, "rtl" => 1, "shadow" => 0, "squareSymbol" => 1, "style" => ["style" => "a1b01e734b573fca08eb1a65e6df9a38"], "symbolHeight" => 41, "symbolPadding" => 3, "symbolRadius" => 88, "symbolWidth" => 72];
		$this->assertEquals($res31, $obj->toArray(), "The method toArray() does not return the expected array with symbol width");

		$obj->setTitle(new \WBW\Bundle\HighchartsBundle\API\Chart\Legend\HighchartsTitle());

		$res32 = ["align" => "right", "backgroundColor" => "930f2a43179a7ae5fc25ed873223e99f", "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 14, "borderWidth" => 6, "enabled" => 0, "floating" => 0, "itemDistance" => 77, "itemHiddenStyle" => ["itemHiddenStyle" => "85396c3e708111e2ae389e4a131b1ff8"], "itemHoverStyle" => ["itemHoverStyle" => "91e12ccdec8780b32ab867d3568c2b0c"], "itemMarginBottom" => 99, "itemMarginTop" => 52, "itemStyle" => ["itemStyle" => "5428035d6f7481541cf715e0f3e29604"], "itemWidth" => 18, "labelFormat" => "201bbcba25ee83a321df388c0f4a889d", "labelFormatter" => "9078f7787367cf94543b3bc9e92d9692", "layout" => "vertical", "lineHeight" => 9, "margin" => 39, "maxHeight" => 20, "navigation" => [], "padding" => 59, "reversed" => 0, "rtl" => 1, "shadow" => 0, "squareSymbol" => 1, "style" => ["style" => "a1b01e734b573fca08eb1a65e6df9a38"], "symbolHeight" => 41, "symbolPadding" => 3, "symbolRadius" => 88, "symbolWidth" => 72, "title" => []];
		$this->assertEquals($res32, $obj->toArray(), "The method toArray() does not return the expected array with title");

		$obj->setUseHTML(1);

		$res33 = ["align" => "right", "backgroundColor" => "930f2a43179a7ae5fc25ed873223e99f", "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 14, "borderWidth" => 6, "enabled" => 0, "floating" => 0, "itemDistance" => 77, "itemHiddenStyle" => ["itemHiddenStyle" => "85396c3e708111e2ae389e4a131b1ff8"], "itemHoverStyle" => ["itemHoverStyle" => "91e12ccdec8780b32ab867d3568c2b0c"], "itemMarginBottom" => 99, "itemMarginTop" => 52, "itemStyle" => ["itemStyle" => "5428035d6f7481541cf715e0f3e29604"], "itemWidth" => 18, "labelFormat" => "201bbcba25ee83a321df388c0f4a889d", "labelFormatter" => "9078f7787367cf94543b3bc9e92d9692", "layout" => "vertical", "lineHeight" => 9, "margin" => 39, "maxHeight" => 20, "navigation" => [], "padding" => 59, "reversed" => 0, "rtl" => 1, "shadow" => 0, "squareSymbol" => 1, "style" => ["style" => "a1b01e734b573fca08eb1a65e6df9a38"], "symbolHeight" => 41, "symbolPadding" => 3, "symbolRadius" => 88, "symbolWidth" => 72, "title" => [], "useHTML" => 1];
		$this->assertEquals($res33, $obj->toArray(), "The method toArray() does not return the expected array with use HTML");

		$obj->setVerticalAlign("bottom");

		$res34 = ["align" => "right", "backgroundColor" => "930f2a43179a7ae5fc25ed873223e99f", "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 14, "borderWidth" => 6, "enabled" => 0, "floating" => 0, "itemDistance" => 77, "itemHiddenStyle" => ["itemHiddenStyle" => "85396c3e708111e2ae389e4a131b1ff8"], "itemHoverStyle" => ["itemHoverStyle" => "91e12ccdec8780b32ab867d3568c2b0c"], "itemMarginBottom" => 99, "itemMarginTop" => 52, "itemStyle" => ["itemStyle" => "5428035d6f7481541cf715e0f3e29604"], "itemWidth" => 18, "labelFormat" => "201bbcba25ee83a321df388c0f4a889d", "labelFormatter" => "9078f7787367cf94543b3bc9e92d9692", "layout" => "vertical", "lineHeight" => 9, "margin" => 39, "maxHeight" => 20, "navigation" => [], "padding" => 59, "reversed" => 0, "rtl" => 1, "shadow" => 0, "squareSymbol" => 1, "style" => ["style" => "a1b01e734b573fca08eb1a65e6df9a38"], "symbolHeight" => 41, "symbolPadding" => 3, "symbolRadius" => 88, "symbolWidth" => 72, "title" => [], "useHTML" => 1, "verticalAlign" => "bottom"];
		$this->assertEquals($res34, $obj->toArray(), "The method toArray() does not return the expected array with vertical align");

		$obj->setWidth(71);

		$res35 = ["align" => "right", "backgroundColor" => "930f2a43179a7ae5fc25ed873223e99f", "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 14, "borderWidth" => 6, "enabled" => 0, "floating" => 0, "itemDistance" => 77, "itemHiddenStyle" => ["itemHiddenStyle" => "85396c3e708111e2ae389e4a131b1ff8"], "itemHoverStyle" => ["itemHoverStyle" => "91e12ccdec8780b32ab867d3568c2b0c"], "itemMarginBottom" => 99, "itemMarginTop" => 52, "itemStyle" => ["itemStyle" => "5428035d6f7481541cf715e0f3e29604"], "itemWidth" => 18, "labelFormat" => "201bbcba25ee83a321df388c0f4a889d", "labelFormatter" => "9078f7787367cf94543b3bc9e92d9692", "layout" => "vertical", "lineHeight" => 9, "margin" => 39, "maxHeight" => 20, "navigation" => [], "padding" => 59, "reversed" => 0, "rtl" => 1, "shadow" => 0, "squareSymbol" => 1, "style" => ["style" => "a1b01e734b573fca08eb1a65e6df9a38"], "symbolHeight" => 41, "symbolPadding" => 3, "symbolRadius" => 88, "symbolWidth" => 72, "title" => [], "useHTML" => 1, "verticalAlign" => "bottom", "width" => 71];
		$this->assertEquals($res35, $obj->toArray(), "The method toArray() does not return the expected array with width");

		$obj->setX(49);

		$res36 = ["align" => "right", "backgroundColor" => "930f2a43179a7ae5fc25ed873223e99f", "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 14, "borderWidth" => 6, "enabled" => 0, "floating" => 0, "itemDistance" => 77, "itemHiddenStyle" => ["itemHiddenStyle" => "85396c3e708111e2ae389e4a131b1ff8"], "itemHoverStyle" => ["itemHoverStyle" => "91e12ccdec8780b32ab867d3568c2b0c"], "itemMarginBottom" => 99, "itemMarginTop" => 52, "itemStyle" => ["itemStyle" => "5428035d6f7481541cf715e0f3e29604"], "itemWidth" => 18, "labelFormat" => "201bbcba25ee83a321df388c0f4a889d", "labelFormatter" => "9078f7787367cf94543b3bc9e92d9692", "layout" => "vertical", "lineHeight" => 9, "margin" => 39, "maxHeight" => 20, "navigation" => [], "padding" => 59, "reversed" => 0, "rtl" => 1, "shadow" => 0, "squareSymbol" => 1, "style" => ["style" => "a1b01e734b573fca08eb1a65e6df9a38"], "symbolHeight" => 41, "symbolPadding" => 3, "symbolRadius" => 88, "symbolWidth" => 72, "title" => [], "useHTML" => 1, "verticalAlign" => "bottom", "width" => 71, "x" => 49];
		$this->assertEquals($res36, $obj->toArray(), "The method toArray() does not return the expected array with x");

		$obj->setY(30);

		$res37 = ["align" => "right", "backgroundColor" => "930f2a43179a7ae5fc25ed873223e99f", "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 14, "borderWidth" => 6, "enabled" => 0, "floating" => 0, "itemDistance" => 77, "itemHiddenStyle" => ["itemHiddenStyle" => "85396c3e708111e2ae389e4a131b1ff8"], "itemHoverStyle" => ["itemHoverStyle" => "91e12ccdec8780b32ab867d3568c2b0c"], "itemMarginBottom" => 99, "itemMarginTop" => 52, "itemStyle" => ["itemStyle" => "5428035d6f7481541cf715e0f3e29604"], "itemWidth" => 18, "labelFormat" => "201bbcba25ee83a321df388c0f4a889d", "labelFormatter" => "9078f7787367cf94543b3bc9e92d9692", "layout" => "vertical", "lineHeight" => 9, "margin" => 39, "maxHeight" => 20, "navigation" => [], "padding" => 59, "reversed" => 0, "rtl" => 1, "shadow" => 0, "squareSymbol" => 1, "style" => ["style" => "a1b01e734b573fca08eb1a65e6df9a38"], "symbolHeight" => 41, "symbolPadding" => 3, "symbolRadius" => 88, "symbolWidth" => 72, "title" => [], "useHTML" => 1, "verticalAlign" => "bottom", "width" => 71, "x" => 49, "y" => 30];
		$this->assertEquals($res37, $obj->toArray(), "The method toArray() does not return the expected array with y");
	}

}
