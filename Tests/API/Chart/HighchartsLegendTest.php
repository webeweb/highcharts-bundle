<?php

/**
 * This file is part of the highcharts-bundle package.
 *
 * (c) 2017 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\HighchartsBundle\Tests\API\Chart;

use PHPUnit_Framework_TestCase;

/**
 * Highcharts legend test.
 *
 * @author webeweb <https://github.com/webeweb/>
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

        $this->assertEquals(null, $obj1->getAlign());
        $this->assertEquals(null, $obj1->getBackgroundColor());
        $this->assertEquals(null, $obj1->getBorderColor());
        $this->assertEquals(null, $obj1->getBorderRadius());
        $this->assertEquals(null, $obj1->getBorderWidth());
        $this->assertEquals(null, $obj1->getEnabled());
        $this->assertEquals(null, $obj1->getFloating());
        $this->assertEquals(null, $obj1->getItemDistance());
        $this->assertEquals(null, $obj1->getItemHiddenStyle());
        $this->assertEquals(null, $obj1->getItemHoverStyle());
        $this->assertEquals(null, $obj1->getItemMarginBottom());
        $this->assertEquals(null, $obj1->getItemMarginTop());
        $this->assertEquals(null, $obj1->getItemStyle());
        $this->assertEquals(null, $obj1->getItemWidth());
        $this->assertEquals(null, $obj1->getLabelFormat());
        $this->assertEquals(null, $obj1->getLabelFormatter());
        $this->assertEquals(null, $obj1->getLayout());
        $this->assertEquals(null, $obj1->getLineHeight());
        $this->assertEquals(null, $obj1->getMargin());
        $this->assertEquals(null, $obj1->getMaxHeight());
        $this->assertEquals(null, $obj1->getNavigation());
        $this->assertEquals(null, $obj1->getPadding());
        $this->assertEquals(null, $obj1->getReversed());
        $this->assertEquals(null, $obj1->getRtl());
        $this->assertEquals(null, $obj1->getShadow());
        $this->assertEquals(null, $obj1->getSquareSymbol());
        $this->assertEquals(null, $obj1->getStyle());
        $this->assertEquals(null, $obj1->getSymbolHeight());
        $this->assertEquals(null, $obj1->getSymbolPadding());
        $this->assertEquals(null, $obj1->getSymbolRadius());
        $this->assertEquals(null, $obj1->getSymbolWidth());
        $this->assertEquals(null, $obj1->getTitle());
        $this->assertEquals(null, $obj1->getUseHTML());
        $this->assertEquals(null, $obj1->getVerticalAlign());
        $this->assertEquals(null, $obj1->getWidth());
        $this->assertEquals(null, $obj1->getX());
        $this->assertEquals(null, $obj1->getY());

        $obj0 = new \WBW\Bundle\HighchartsBundle\API\Chart\HighchartsLegend(false);

        $this->assertEquals("center", $obj0->getAlign());
        $this->assertEquals(null, $obj0->getBackgroundColor());
        $this->assertEquals("#999999", $obj0->getBorderColor());
        $this->assertEquals(0, $obj0->getBorderRadius());
        $this->assertEquals(0, $obj0->getBorderWidth());
        $this->assertEquals(true, $obj0->getEnabled());
        $this->assertEquals(false, $obj0->getFloating());
        $this->assertEquals(20, $obj0->getItemDistance());
        $this->assertEquals(["color" => "#cccccc"], $obj0->getItemHiddenStyle());
        $this->assertEquals(["color" => "#000000"], $obj0->getItemHoverStyle());
        $this->assertEquals(0, $obj0->getItemMarginBottom());
        $this->assertEquals(0, $obj0->getItemMarginTop());
        $this->assertEquals(["color" => "#333333", "cursor" => "pointer", "fontSize" => "12px", "fontWeight" => "bold", "textOverflow" => "ellipsis"], $obj0->getItemStyle());
        $this->assertEquals(null, $obj0->getItemWidth());
        $this->assertEquals("{name}", $obj0->getLabelFormat());
        $this->assertEquals(null, $obj0->getLabelFormatter());
        $this->assertEquals("horizontal", $obj0->getLayout());
        $this->assertEquals(16, $obj0->getLineHeight());
        $this->assertEquals(12, $obj0->getMargin());
        $this->assertEquals(null, $obj0->getMaxHeight());
        $this->assertEquals(null, $obj0->getNavigation());
        $this->assertEquals(8, $obj0->getPadding());
        $this->assertEquals(false, $obj0->getReversed());
        $this->assertEquals(false, $obj0->getRtl());
        $this->assertEquals(false, $obj0->getShadow());
        $this->assertEquals(true, $obj0->getSquareSymbol());
        $this->assertEquals(null, $obj0->getStyle());
        $this->assertEquals(null, $obj0->getSymbolHeight());
        $this->assertEquals(5, $obj0->getSymbolPadding());
        $this->assertEquals(null, $obj0->getSymbolRadius());
        $this->assertEquals(null, $obj0->getSymbolWidth());
        $this->assertEquals(null, $obj0->getTitle());
        $this->assertEquals(false, $obj0->getUseHTML());
        $this->assertEquals("bottom", $obj0->getVerticalAlign());
        $this->assertEquals(null, $obj0->getWidth());
        $this->assertEquals(0, $obj0->getX());
        $this->assertEquals(0, $obj0->getY());
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
        $this->assertEquals($res, $obj->toArray());
    }

    /**
     * Tests the jsonSerialize() method.
     *
     * @return void
     */
    public function testJsonSerialize() {

        $obj = new \WBW\Bundle\HighchartsBundle\API\Chart\HighchartsLegend(true);

        $this->assertEquals([], $obj->jsonSerialize());
    }

    /**
     * Tests the newNavigation() method.
     *
     * @return void.
     */
    public function testNewNavigation() {

        $obj = new \WBW\Bundle\HighchartsBundle\API\Chart\HighchartsLegend(false);

        $res = $obj->newNavigation();
        $this->assertInstanceOf(\WBW\Bundle\HighchartsBundle\API\Chart\Legend\HighchartsNavigation::class, $res);
    }

    /**
     * Tests the newTitle() method.
     *
     * @return void.
     */
    public function testNewTitle() {

        $obj = new \WBW\Bundle\HighchartsBundle\API\Chart\HighchartsLegend(false);

        $res = $obj->newTitle();
        $this->assertInstanceOf(\WBW\Bundle\HighchartsBundle\API\Chart\Legend\HighchartsTitle::class, $res);
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
        $this->assertEquals($res1, $obj->toArray());

        $obj->setBackgroundColor("930f2a43179a7ae5fc25ed873223e99f");

        $res2 = ["align" => "right", "backgroundColor" => "930f2a43179a7ae5fc25ed873223e99f"];
        $this->assertEquals($res2, $obj->toArray());

        $obj->setBorderColor("97da935a74593c55d78be9d1295aa994");

        $res3 = ["align" => "right", "backgroundColor" => "930f2a43179a7ae5fc25ed873223e99f", "borderColor" => "97da935a74593c55d78be9d1295aa994"];
        $this->assertEquals($res3, $obj->toArray());

        $obj->setBorderRadius(14);

        $res4 = ["align" => "right", "backgroundColor" => "930f2a43179a7ae5fc25ed873223e99f", "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 14];
        $this->assertEquals($res4, $obj->toArray());

        $obj->setBorderWidth(6);

        $res5 = ["align" => "right", "backgroundColor" => "930f2a43179a7ae5fc25ed873223e99f", "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 14, "borderWidth" => 6];
        $this->assertEquals($res5, $obj->toArray());

        $obj->setEnabled(0);

        $res6 = ["align" => "right", "backgroundColor" => "930f2a43179a7ae5fc25ed873223e99f", "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 14, "borderWidth" => 6, "enabled" => 0];
        $this->assertEquals($res6, $obj->toArray());

        $obj->setFloating(0);

        $res7 = ["align" => "right", "backgroundColor" => "930f2a43179a7ae5fc25ed873223e99f", "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 14, "borderWidth" => 6, "enabled" => 0, "floating" => 0];
        $this->assertEquals($res7, $obj->toArray());

        $obj->setItemDistance(77);

        $res8 = ["align" => "right", "backgroundColor" => "930f2a43179a7ae5fc25ed873223e99f", "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 14, "borderWidth" => 6, "enabled" => 0, "floating" => 0, "itemDistance" => 77];
        $this->assertEquals($res8, $obj->toArray());

        $obj->setItemHiddenStyle(["itemHiddenStyle" => "85396c3e708111e2ae389e4a131b1ff8"]);

        $res9 = ["align" => "right", "backgroundColor" => "930f2a43179a7ae5fc25ed873223e99f", "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 14, "borderWidth" => 6, "enabled" => 0, "floating" => 0, "itemDistance" => 77, "itemHiddenStyle" => ["itemHiddenStyle" => "85396c3e708111e2ae389e4a131b1ff8"]];
        $this->assertEquals($res9, $obj->toArray());

        $obj->setItemHoverStyle(["itemHoverStyle" => "91e12ccdec8780b32ab867d3568c2b0c"]);

        $res10 = ["align" => "right", "backgroundColor" => "930f2a43179a7ae5fc25ed873223e99f", "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 14, "borderWidth" => 6, "enabled" => 0, "floating" => 0, "itemDistance" => 77, "itemHiddenStyle" => ["itemHiddenStyle" => "85396c3e708111e2ae389e4a131b1ff8"], "itemHoverStyle" => ["itemHoverStyle" => "91e12ccdec8780b32ab867d3568c2b0c"]];
        $this->assertEquals($res10, $obj->toArray());

        $obj->setItemMarginBottom(99);

        $res11 = ["align" => "right", "backgroundColor" => "930f2a43179a7ae5fc25ed873223e99f", "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 14, "borderWidth" => 6, "enabled" => 0, "floating" => 0, "itemDistance" => 77, "itemHiddenStyle" => ["itemHiddenStyle" => "85396c3e708111e2ae389e4a131b1ff8"], "itemHoverStyle" => ["itemHoverStyle" => "91e12ccdec8780b32ab867d3568c2b0c"], "itemMarginBottom" => 99];
        $this->assertEquals($res11, $obj->toArray());

        $obj->setItemMarginTop(52);

        $res12 = ["align" => "right", "backgroundColor" => "930f2a43179a7ae5fc25ed873223e99f", "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 14, "borderWidth" => 6, "enabled" => 0, "floating" => 0, "itemDistance" => 77, "itemHiddenStyle" => ["itemHiddenStyle" => "85396c3e708111e2ae389e4a131b1ff8"], "itemHoverStyle" => ["itemHoverStyle" => "91e12ccdec8780b32ab867d3568c2b0c"], "itemMarginBottom" => 99, "itemMarginTop" => 52];
        $this->assertEquals($res12, $obj->toArray());

        $obj->setItemStyle(["itemStyle" => "5428035d6f7481541cf715e0f3e29604"]);

        $res13 = ["align" => "right", "backgroundColor" => "930f2a43179a7ae5fc25ed873223e99f", "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 14, "borderWidth" => 6, "enabled" => 0, "floating" => 0, "itemDistance" => 77, "itemHiddenStyle" => ["itemHiddenStyle" => "85396c3e708111e2ae389e4a131b1ff8"], "itemHoverStyle" => ["itemHoverStyle" => "91e12ccdec8780b32ab867d3568c2b0c"], "itemMarginBottom" => 99, "itemMarginTop" => 52, "itemStyle" => ["itemStyle" => "5428035d6f7481541cf715e0f3e29604"]];
        $this->assertEquals($res13, $obj->toArray());

        $obj->setItemWidth(18);

        $res14 = ["align" => "right", "backgroundColor" => "930f2a43179a7ae5fc25ed873223e99f", "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 14, "borderWidth" => 6, "enabled" => 0, "floating" => 0, "itemDistance" => 77, "itemHiddenStyle" => ["itemHiddenStyle" => "85396c3e708111e2ae389e4a131b1ff8"], "itemHoverStyle" => ["itemHoverStyle" => "91e12ccdec8780b32ab867d3568c2b0c"], "itemMarginBottom" => 99, "itemMarginTop" => 52, "itemStyle" => ["itemStyle" => "5428035d6f7481541cf715e0f3e29604"], "itemWidth" => 18];
        $this->assertEquals($res14, $obj->toArray());

        $obj->setLabelFormat("201bbcba25ee83a321df388c0f4a889d");

        $res15 = ["align" => "right", "backgroundColor" => "930f2a43179a7ae5fc25ed873223e99f", "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 14, "borderWidth" => 6, "enabled" => 0, "floating" => 0, "itemDistance" => 77, "itemHiddenStyle" => ["itemHiddenStyle" => "85396c3e708111e2ae389e4a131b1ff8"], "itemHoverStyle" => ["itemHoverStyle" => "91e12ccdec8780b32ab867d3568c2b0c"], "itemMarginBottom" => 99, "itemMarginTop" => 52, "itemStyle" => ["itemStyle" => "5428035d6f7481541cf715e0f3e29604"], "itemWidth" => 18, "labelFormat" => "201bbcba25ee83a321df388c0f4a889d"];
        $this->assertEquals($res15, $obj->toArray());

        $obj->setLabelFormatter("9078f7787367cf94543b3bc9e92d9692");

        $res16 = ["align" => "right", "backgroundColor" => "930f2a43179a7ae5fc25ed873223e99f", "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 14, "borderWidth" => 6, "enabled" => 0, "floating" => 0, "itemDistance" => 77, "itemHiddenStyle" => ["itemHiddenStyle" => "85396c3e708111e2ae389e4a131b1ff8"], "itemHoverStyle" => ["itemHoverStyle" => "91e12ccdec8780b32ab867d3568c2b0c"], "itemMarginBottom" => 99, "itemMarginTop" => 52, "itemStyle" => ["itemStyle" => "5428035d6f7481541cf715e0f3e29604"], "itemWidth" => 18, "labelFormat" => "201bbcba25ee83a321df388c0f4a889d", "labelFormatter" => "9078f7787367cf94543b3bc9e92d9692"];
        $this->assertEquals($res16, $obj->toArray());

        $obj->setLayout("vertical");

        $res17 = ["align" => "right", "backgroundColor" => "930f2a43179a7ae5fc25ed873223e99f", "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 14, "borderWidth" => 6, "enabled" => 0, "floating" => 0, "itemDistance" => 77, "itemHiddenStyle" => ["itemHiddenStyle" => "85396c3e708111e2ae389e4a131b1ff8"], "itemHoverStyle" => ["itemHoverStyle" => "91e12ccdec8780b32ab867d3568c2b0c"], "itemMarginBottom" => 99, "itemMarginTop" => 52, "itemStyle" => ["itemStyle" => "5428035d6f7481541cf715e0f3e29604"], "itemWidth" => 18, "labelFormat" => "201bbcba25ee83a321df388c0f4a889d", "labelFormatter" => "9078f7787367cf94543b3bc9e92d9692", "layout" => "vertical"];
        $this->assertEquals($res17, $obj->toArray());

        $obj->setLineHeight(9);

        $res18 = ["align" => "right", "backgroundColor" => "930f2a43179a7ae5fc25ed873223e99f", "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 14, "borderWidth" => 6, "enabled" => 0, "floating" => 0, "itemDistance" => 77, "itemHiddenStyle" => ["itemHiddenStyle" => "85396c3e708111e2ae389e4a131b1ff8"], "itemHoverStyle" => ["itemHoverStyle" => "91e12ccdec8780b32ab867d3568c2b0c"], "itemMarginBottom" => 99, "itemMarginTop" => 52, "itemStyle" => ["itemStyle" => "5428035d6f7481541cf715e0f3e29604"], "itemWidth" => 18, "labelFormat" => "201bbcba25ee83a321df388c0f4a889d", "labelFormatter" => "9078f7787367cf94543b3bc9e92d9692", "layout" => "vertical", "lineHeight" => 9];
        $this->assertEquals($res18, $obj->toArray());

        $obj->setMargin(39);

        $res19 = ["align" => "right", "backgroundColor" => "930f2a43179a7ae5fc25ed873223e99f", "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 14, "borderWidth" => 6, "enabled" => 0, "floating" => 0, "itemDistance" => 77, "itemHiddenStyle" => ["itemHiddenStyle" => "85396c3e708111e2ae389e4a131b1ff8"], "itemHoverStyle" => ["itemHoverStyle" => "91e12ccdec8780b32ab867d3568c2b0c"], "itemMarginBottom" => 99, "itemMarginTop" => 52, "itemStyle" => ["itemStyle" => "5428035d6f7481541cf715e0f3e29604"], "itemWidth" => 18, "labelFormat" => "201bbcba25ee83a321df388c0f4a889d", "labelFormatter" => "9078f7787367cf94543b3bc9e92d9692", "layout" => "vertical", "lineHeight" => 9, "margin" => 39];
        $this->assertEquals($res19, $obj->toArray());

        $obj->setMaxHeight(20);

        $res20 = ["align" => "right", "backgroundColor" => "930f2a43179a7ae5fc25ed873223e99f", "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 14, "borderWidth" => 6, "enabled" => 0, "floating" => 0, "itemDistance" => 77, "itemHiddenStyle" => ["itemHiddenStyle" => "85396c3e708111e2ae389e4a131b1ff8"], "itemHoverStyle" => ["itemHoverStyle" => "91e12ccdec8780b32ab867d3568c2b0c"], "itemMarginBottom" => 99, "itemMarginTop" => 52, "itemStyle" => ["itemStyle" => "5428035d6f7481541cf715e0f3e29604"], "itemWidth" => 18, "labelFormat" => "201bbcba25ee83a321df388c0f4a889d", "labelFormatter" => "9078f7787367cf94543b3bc9e92d9692", "layout" => "vertical", "lineHeight" => 9, "margin" => 39, "maxHeight" => 20];
        $this->assertEquals($res20, $obj->toArray());

        $obj->setNavigation(new \WBW\Bundle\HighchartsBundle\API\Chart\Legend\HighchartsNavigation());

        $res21 = ["align" => "right", "backgroundColor" => "930f2a43179a7ae5fc25ed873223e99f", "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 14, "borderWidth" => 6, "enabled" => 0, "floating" => 0, "itemDistance" => 77, "itemHiddenStyle" => ["itemHiddenStyle" => "85396c3e708111e2ae389e4a131b1ff8"], "itemHoverStyle" => ["itemHoverStyle" => "91e12ccdec8780b32ab867d3568c2b0c"], "itemMarginBottom" => 99, "itemMarginTop" => 52, "itemStyle" => ["itemStyle" => "5428035d6f7481541cf715e0f3e29604"], "itemWidth" => 18, "labelFormat" => "201bbcba25ee83a321df388c0f4a889d", "labelFormatter" => "9078f7787367cf94543b3bc9e92d9692", "layout" => "vertical", "lineHeight" => 9, "margin" => 39, "maxHeight" => 20, "navigation" => []];
        $this->assertEquals($res21, $obj->toArray());

        $obj->setPadding(59);

        $res22 = ["align" => "right", "backgroundColor" => "930f2a43179a7ae5fc25ed873223e99f", "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 14, "borderWidth" => 6, "enabled" => 0, "floating" => 0, "itemDistance" => 77, "itemHiddenStyle" => ["itemHiddenStyle" => "85396c3e708111e2ae389e4a131b1ff8"], "itemHoverStyle" => ["itemHoverStyle" => "91e12ccdec8780b32ab867d3568c2b0c"], "itemMarginBottom" => 99, "itemMarginTop" => 52, "itemStyle" => ["itemStyle" => "5428035d6f7481541cf715e0f3e29604"], "itemWidth" => 18, "labelFormat" => "201bbcba25ee83a321df388c0f4a889d", "labelFormatter" => "9078f7787367cf94543b3bc9e92d9692", "layout" => "vertical", "lineHeight" => 9, "margin" => 39, "maxHeight" => 20, "navigation" => [], "padding" => 59];
        $this->assertEquals($res22, $obj->toArray());

        $obj->setReversed(0);

        $res23 = ["align" => "right", "backgroundColor" => "930f2a43179a7ae5fc25ed873223e99f", "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 14, "borderWidth" => 6, "enabled" => 0, "floating" => 0, "itemDistance" => 77, "itemHiddenStyle" => ["itemHiddenStyle" => "85396c3e708111e2ae389e4a131b1ff8"], "itemHoverStyle" => ["itemHoverStyle" => "91e12ccdec8780b32ab867d3568c2b0c"], "itemMarginBottom" => 99, "itemMarginTop" => 52, "itemStyle" => ["itemStyle" => "5428035d6f7481541cf715e0f3e29604"], "itemWidth" => 18, "labelFormat" => "201bbcba25ee83a321df388c0f4a889d", "labelFormatter" => "9078f7787367cf94543b3bc9e92d9692", "layout" => "vertical", "lineHeight" => 9, "margin" => 39, "maxHeight" => 20, "navigation" => [], "padding" => 59, "reversed" => 0];
        $this->assertEquals($res23, $obj->toArray());

        $obj->setRtl(1);

        $res24 = ["align" => "right", "backgroundColor" => "930f2a43179a7ae5fc25ed873223e99f", "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 14, "borderWidth" => 6, "enabled" => 0, "floating" => 0, "itemDistance" => 77, "itemHiddenStyle" => ["itemHiddenStyle" => "85396c3e708111e2ae389e4a131b1ff8"], "itemHoverStyle" => ["itemHoverStyle" => "91e12ccdec8780b32ab867d3568c2b0c"], "itemMarginBottom" => 99, "itemMarginTop" => 52, "itemStyle" => ["itemStyle" => "5428035d6f7481541cf715e0f3e29604"], "itemWidth" => 18, "labelFormat" => "201bbcba25ee83a321df388c0f4a889d", "labelFormatter" => "9078f7787367cf94543b3bc9e92d9692", "layout" => "vertical", "lineHeight" => 9, "margin" => 39, "maxHeight" => 20, "navigation" => [], "padding" => 59, "reversed" => 0, "rtl" => 1];
        $this->assertEquals($res24, $obj->toArray());

        $obj->setShadow(0);

        $res25 = ["align" => "right", "backgroundColor" => "930f2a43179a7ae5fc25ed873223e99f", "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 14, "borderWidth" => 6, "enabled" => 0, "floating" => 0, "itemDistance" => 77, "itemHiddenStyle" => ["itemHiddenStyle" => "85396c3e708111e2ae389e4a131b1ff8"], "itemHoverStyle" => ["itemHoverStyle" => "91e12ccdec8780b32ab867d3568c2b0c"], "itemMarginBottom" => 99, "itemMarginTop" => 52, "itemStyle" => ["itemStyle" => "5428035d6f7481541cf715e0f3e29604"], "itemWidth" => 18, "labelFormat" => "201bbcba25ee83a321df388c0f4a889d", "labelFormatter" => "9078f7787367cf94543b3bc9e92d9692", "layout" => "vertical", "lineHeight" => 9, "margin" => 39, "maxHeight" => 20, "navigation" => [], "padding" => 59, "reversed" => 0, "rtl" => 1, "shadow" => 0];
        $this->assertEquals($res25, $obj->toArray());

        $obj->setSquareSymbol(1);

        $res26 = ["align" => "right", "backgroundColor" => "930f2a43179a7ae5fc25ed873223e99f", "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 14, "borderWidth" => 6, "enabled" => 0, "floating" => 0, "itemDistance" => 77, "itemHiddenStyle" => ["itemHiddenStyle" => "85396c3e708111e2ae389e4a131b1ff8"], "itemHoverStyle" => ["itemHoverStyle" => "91e12ccdec8780b32ab867d3568c2b0c"], "itemMarginBottom" => 99, "itemMarginTop" => 52, "itemStyle" => ["itemStyle" => "5428035d6f7481541cf715e0f3e29604"], "itemWidth" => 18, "labelFormat" => "201bbcba25ee83a321df388c0f4a889d", "labelFormatter" => "9078f7787367cf94543b3bc9e92d9692", "layout" => "vertical", "lineHeight" => 9, "margin" => 39, "maxHeight" => 20, "navigation" => [], "padding" => 59, "reversed" => 0, "rtl" => 1, "shadow" => 0, "squareSymbol" => 1];
        $this->assertEquals($res26, $obj->toArray());

        $obj->setStyle(["style" => "a1b01e734b573fca08eb1a65e6df9a38"]);

        $res27 = ["align" => "right", "backgroundColor" => "930f2a43179a7ae5fc25ed873223e99f", "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 14, "borderWidth" => 6, "enabled" => 0, "floating" => 0, "itemDistance" => 77, "itemHiddenStyle" => ["itemHiddenStyle" => "85396c3e708111e2ae389e4a131b1ff8"], "itemHoverStyle" => ["itemHoverStyle" => "91e12ccdec8780b32ab867d3568c2b0c"], "itemMarginBottom" => 99, "itemMarginTop" => 52, "itemStyle" => ["itemStyle" => "5428035d6f7481541cf715e0f3e29604"], "itemWidth" => 18, "labelFormat" => "201bbcba25ee83a321df388c0f4a889d", "labelFormatter" => "9078f7787367cf94543b3bc9e92d9692", "layout" => "vertical", "lineHeight" => 9, "margin" => 39, "maxHeight" => 20, "navigation" => [], "padding" => 59, "reversed" => 0, "rtl" => 1, "shadow" => 0, "squareSymbol" => 1, "style" => ["style" => "a1b01e734b573fca08eb1a65e6df9a38"]];
        $this->assertEquals($res27, $obj->toArray());

        $obj->setSymbolHeight(41);

        $res28 = ["align" => "right", "backgroundColor" => "930f2a43179a7ae5fc25ed873223e99f", "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 14, "borderWidth" => 6, "enabled" => 0, "floating" => 0, "itemDistance" => 77, "itemHiddenStyle" => ["itemHiddenStyle" => "85396c3e708111e2ae389e4a131b1ff8"], "itemHoverStyle" => ["itemHoverStyle" => "91e12ccdec8780b32ab867d3568c2b0c"], "itemMarginBottom" => 99, "itemMarginTop" => 52, "itemStyle" => ["itemStyle" => "5428035d6f7481541cf715e0f3e29604"], "itemWidth" => 18, "labelFormat" => "201bbcba25ee83a321df388c0f4a889d", "labelFormatter" => "9078f7787367cf94543b3bc9e92d9692", "layout" => "vertical", "lineHeight" => 9, "margin" => 39, "maxHeight" => 20, "navigation" => [], "padding" => 59, "reversed" => 0, "rtl" => 1, "shadow" => 0, "squareSymbol" => 1, "style" => ["style" => "a1b01e734b573fca08eb1a65e6df9a38"], "symbolHeight" => 41];
        $this->assertEquals($res28, $obj->toArray());

        $obj->setSymbolPadding(3);

        $res29 = ["align" => "right", "backgroundColor" => "930f2a43179a7ae5fc25ed873223e99f", "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 14, "borderWidth" => 6, "enabled" => 0, "floating" => 0, "itemDistance" => 77, "itemHiddenStyle" => ["itemHiddenStyle" => "85396c3e708111e2ae389e4a131b1ff8"], "itemHoverStyle" => ["itemHoverStyle" => "91e12ccdec8780b32ab867d3568c2b0c"], "itemMarginBottom" => 99, "itemMarginTop" => 52, "itemStyle" => ["itemStyle" => "5428035d6f7481541cf715e0f3e29604"], "itemWidth" => 18, "labelFormat" => "201bbcba25ee83a321df388c0f4a889d", "labelFormatter" => "9078f7787367cf94543b3bc9e92d9692", "layout" => "vertical", "lineHeight" => 9, "margin" => 39, "maxHeight" => 20, "navigation" => [], "padding" => 59, "reversed" => 0, "rtl" => 1, "shadow" => 0, "squareSymbol" => 1, "style" => ["style" => "a1b01e734b573fca08eb1a65e6df9a38"], "symbolHeight" => 41, "symbolPadding" => 3];
        $this->assertEquals($res29, $obj->toArray());

        $obj->setSymbolRadius(88);

        $res30 = ["align" => "right", "backgroundColor" => "930f2a43179a7ae5fc25ed873223e99f", "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 14, "borderWidth" => 6, "enabled" => 0, "floating" => 0, "itemDistance" => 77, "itemHiddenStyle" => ["itemHiddenStyle" => "85396c3e708111e2ae389e4a131b1ff8"], "itemHoverStyle" => ["itemHoverStyle" => "91e12ccdec8780b32ab867d3568c2b0c"], "itemMarginBottom" => 99, "itemMarginTop" => 52, "itemStyle" => ["itemStyle" => "5428035d6f7481541cf715e0f3e29604"], "itemWidth" => 18, "labelFormat" => "201bbcba25ee83a321df388c0f4a889d", "labelFormatter" => "9078f7787367cf94543b3bc9e92d9692", "layout" => "vertical", "lineHeight" => 9, "margin" => 39, "maxHeight" => 20, "navigation" => [], "padding" => 59, "reversed" => 0, "rtl" => 1, "shadow" => 0, "squareSymbol" => 1, "style" => ["style" => "a1b01e734b573fca08eb1a65e6df9a38"], "symbolHeight" => 41, "symbolPadding" => 3, "symbolRadius" => 88];
        $this->assertEquals($res30, $obj->toArray());

        $obj->setSymbolWidth(72);

        $res31 = ["align" => "right", "backgroundColor" => "930f2a43179a7ae5fc25ed873223e99f", "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 14, "borderWidth" => 6, "enabled" => 0, "floating" => 0, "itemDistance" => 77, "itemHiddenStyle" => ["itemHiddenStyle" => "85396c3e708111e2ae389e4a131b1ff8"], "itemHoverStyle" => ["itemHoverStyle" => "91e12ccdec8780b32ab867d3568c2b0c"], "itemMarginBottom" => 99, "itemMarginTop" => 52, "itemStyle" => ["itemStyle" => "5428035d6f7481541cf715e0f3e29604"], "itemWidth" => 18, "labelFormat" => "201bbcba25ee83a321df388c0f4a889d", "labelFormatter" => "9078f7787367cf94543b3bc9e92d9692", "layout" => "vertical", "lineHeight" => 9, "margin" => 39, "maxHeight" => 20, "navigation" => [], "padding" => 59, "reversed" => 0, "rtl" => 1, "shadow" => 0, "squareSymbol" => 1, "style" => ["style" => "a1b01e734b573fca08eb1a65e6df9a38"], "symbolHeight" => 41, "symbolPadding" => 3, "symbolRadius" => 88, "symbolWidth" => 72];
        $this->assertEquals($res31, $obj->toArray());

        $obj->setTitle(new \WBW\Bundle\HighchartsBundle\API\Chart\Legend\HighchartsTitle());

        $res32 = ["align" => "right", "backgroundColor" => "930f2a43179a7ae5fc25ed873223e99f", "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 14, "borderWidth" => 6, "enabled" => 0, "floating" => 0, "itemDistance" => 77, "itemHiddenStyle" => ["itemHiddenStyle" => "85396c3e708111e2ae389e4a131b1ff8"], "itemHoverStyle" => ["itemHoverStyle" => "91e12ccdec8780b32ab867d3568c2b0c"], "itemMarginBottom" => 99, "itemMarginTop" => 52, "itemStyle" => ["itemStyle" => "5428035d6f7481541cf715e0f3e29604"], "itemWidth" => 18, "labelFormat" => "201bbcba25ee83a321df388c0f4a889d", "labelFormatter" => "9078f7787367cf94543b3bc9e92d9692", "layout" => "vertical", "lineHeight" => 9, "margin" => 39, "maxHeight" => 20, "navigation" => [], "padding" => 59, "reversed" => 0, "rtl" => 1, "shadow" => 0, "squareSymbol" => 1, "style" => ["style" => "a1b01e734b573fca08eb1a65e6df9a38"], "symbolHeight" => 41, "symbolPadding" => 3, "symbolRadius" => 88, "symbolWidth" => 72, "title" => []];
        $this->assertEquals($res32, $obj->toArray());

        $obj->setUseHTML(1);

        $res33 = ["align" => "right", "backgroundColor" => "930f2a43179a7ae5fc25ed873223e99f", "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 14, "borderWidth" => 6, "enabled" => 0, "floating" => 0, "itemDistance" => 77, "itemHiddenStyle" => ["itemHiddenStyle" => "85396c3e708111e2ae389e4a131b1ff8"], "itemHoverStyle" => ["itemHoverStyle" => "91e12ccdec8780b32ab867d3568c2b0c"], "itemMarginBottom" => 99, "itemMarginTop" => 52, "itemStyle" => ["itemStyle" => "5428035d6f7481541cf715e0f3e29604"], "itemWidth" => 18, "labelFormat" => "201bbcba25ee83a321df388c0f4a889d", "labelFormatter" => "9078f7787367cf94543b3bc9e92d9692", "layout" => "vertical", "lineHeight" => 9, "margin" => 39, "maxHeight" => 20, "navigation" => [], "padding" => 59, "reversed" => 0, "rtl" => 1, "shadow" => 0, "squareSymbol" => 1, "style" => ["style" => "a1b01e734b573fca08eb1a65e6df9a38"], "symbolHeight" => 41, "symbolPadding" => 3, "symbolRadius" => 88, "symbolWidth" => 72, "title" => [], "useHTML" => 1];
        $this->assertEquals($res33, $obj->toArray());

        $obj->setVerticalAlign("bottom");

        $res34 = ["align" => "right", "backgroundColor" => "930f2a43179a7ae5fc25ed873223e99f", "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 14, "borderWidth" => 6, "enabled" => 0, "floating" => 0, "itemDistance" => 77, "itemHiddenStyle" => ["itemHiddenStyle" => "85396c3e708111e2ae389e4a131b1ff8"], "itemHoverStyle" => ["itemHoverStyle" => "91e12ccdec8780b32ab867d3568c2b0c"], "itemMarginBottom" => 99, "itemMarginTop" => 52, "itemStyle" => ["itemStyle" => "5428035d6f7481541cf715e0f3e29604"], "itemWidth" => 18, "labelFormat" => "201bbcba25ee83a321df388c0f4a889d", "labelFormatter" => "9078f7787367cf94543b3bc9e92d9692", "layout" => "vertical", "lineHeight" => 9, "margin" => 39, "maxHeight" => 20, "navigation" => [], "padding" => 59, "reversed" => 0, "rtl" => 1, "shadow" => 0, "squareSymbol" => 1, "style" => ["style" => "a1b01e734b573fca08eb1a65e6df9a38"], "symbolHeight" => 41, "symbolPadding" => 3, "symbolRadius" => 88, "symbolWidth" => 72, "title" => [], "useHTML" => 1, "verticalAlign" => "bottom"];
        $this->assertEquals($res34, $obj->toArray());

        $obj->setWidth(71);

        $res35 = ["align" => "right", "backgroundColor" => "930f2a43179a7ae5fc25ed873223e99f", "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 14, "borderWidth" => 6, "enabled" => 0, "floating" => 0, "itemDistance" => 77, "itemHiddenStyle" => ["itemHiddenStyle" => "85396c3e708111e2ae389e4a131b1ff8"], "itemHoverStyle" => ["itemHoverStyle" => "91e12ccdec8780b32ab867d3568c2b0c"], "itemMarginBottom" => 99, "itemMarginTop" => 52, "itemStyle" => ["itemStyle" => "5428035d6f7481541cf715e0f3e29604"], "itemWidth" => 18, "labelFormat" => "201bbcba25ee83a321df388c0f4a889d", "labelFormatter" => "9078f7787367cf94543b3bc9e92d9692", "layout" => "vertical", "lineHeight" => 9, "margin" => 39, "maxHeight" => 20, "navigation" => [], "padding" => 59, "reversed" => 0, "rtl" => 1, "shadow" => 0, "squareSymbol" => 1, "style" => ["style" => "a1b01e734b573fca08eb1a65e6df9a38"], "symbolHeight" => 41, "symbolPadding" => 3, "symbolRadius" => 88, "symbolWidth" => 72, "title" => [], "useHTML" => 1, "verticalAlign" => "bottom", "width" => 71];
        $this->assertEquals($res35, $obj->toArray());

        $obj->setX(49);

        $res36 = ["align" => "right", "backgroundColor" => "930f2a43179a7ae5fc25ed873223e99f", "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 14, "borderWidth" => 6, "enabled" => 0, "floating" => 0, "itemDistance" => 77, "itemHiddenStyle" => ["itemHiddenStyle" => "85396c3e708111e2ae389e4a131b1ff8"], "itemHoverStyle" => ["itemHoverStyle" => "91e12ccdec8780b32ab867d3568c2b0c"], "itemMarginBottom" => 99, "itemMarginTop" => 52, "itemStyle" => ["itemStyle" => "5428035d6f7481541cf715e0f3e29604"], "itemWidth" => 18, "labelFormat" => "201bbcba25ee83a321df388c0f4a889d", "labelFormatter" => "9078f7787367cf94543b3bc9e92d9692", "layout" => "vertical", "lineHeight" => 9, "margin" => 39, "maxHeight" => 20, "navigation" => [], "padding" => 59, "reversed" => 0, "rtl" => 1, "shadow" => 0, "squareSymbol" => 1, "style" => ["style" => "a1b01e734b573fca08eb1a65e6df9a38"], "symbolHeight" => 41, "symbolPadding" => 3, "symbolRadius" => 88, "symbolWidth" => 72, "title" => [], "useHTML" => 1, "verticalAlign" => "bottom", "width" => 71, "x" => 49];
        $this->assertEquals($res36, $obj->toArray());

        $obj->setY(30);

        $res37 = ["align" => "right", "backgroundColor" => "930f2a43179a7ae5fc25ed873223e99f", "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 14, "borderWidth" => 6, "enabled" => 0, "floating" => 0, "itemDistance" => 77, "itemHiddenStyle" => ["itemHiddenStyle" => "85396c3e708111e2ae389e4a131b1ff8"], "itemHoverStyle" => ["itemHoverStyle" => "91e12ccdec8780b32ab867d3568c2b0c"], "itemMarginBottom" => 99, "itemMarginTop" => 52, "itemStyle" => ["itemStyle" => "5428035d6f7481541cf715e0f3e29604"], "itemWidth" => 18, "labelFormat" => "201bbcba25ee83a321df388c0f4a889d", "labelFormatter" => "9078f7787367cf94543b3bc9e92d9692", "layout" => "vertical", "lineHeight" => 9, "margin" => 39, "maxHeight" => 20, "navigation" => [], "padding" => 59, "reversed" => 0, "rtl" => 1, "shadow" => 0, "squareSymbol" => 1, "style" => ["style" => "a1b01e734b573fca08eb1a65e6df9a38"], "symbolHeight" => 41, "symbolPadding" => 3, "symbolRadius" => 88, "symbolWidth" => 72, "title" => [], "useHTML" => 1, "verticalAlign" => "bottom", "width" => 71, "x" => 49, "y" => 30];
        $this->assertEquals($res37, $obj->toArray());
    }

}
