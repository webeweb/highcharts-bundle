<?php

/*
 * This file is part of the WBWHighchartsBundle package.
 *
 * (c) 2017 NdC/WBW
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\HighchartsBundle\Tests\API\Chart;

use PHPUnit_Framework_TestCase;

/**
 * Highcharts tooltip test.
 *
 * @author NdC/WBW <https://github.com/webeweb/>
 * @package WBW\Bundle\HighchartsBundle\Tests\API\Chart
 * @version 5.0.14
 */
final class HighchartsTooltipTest extends PHPUnit_Framework_TestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstructor() {

        $obj1 = new \WBW\Bundle\HighchartsBundle\API\Chart\HighchartsTooltip(true);

        $this->assertEquals(null, $obj1->getAnimation(), "The method getAnimation() does not return the expected value");
        $this->assertEquals(null, $obj1->getBackgroundColor(), "The method getBackgroundColor() does not return the expected value");
        $this->assertEquals(null, $obj1->getBorderColor(), "The method getBorderColor() does not return the expected value");
        $this->assertEquals(null, $obj1->getBorderRadius(), "The method getBorderRadius() does not return the expected value");
        $this->assertEquals(null, $obj1->getBorderWidth(), "The method getBorderWidth() does not return the expected value");
        $this->assertEquals(null, $obj1->getCrosshairs(), "The method getCrosshairs() does not return the expected value");
        $this->assertEquals(null, $obj1->getDateTimeLabelFormats(), "The method getDateTimeLabelFormats() does not return the expected value");
        $this->assertEquals(null, $obj1->getEnabled(), "The method getEnabled() does not return the expected value");
        $this->assertEquals(null, $obj1->getFollowPointer(), "The method getFollowPointer() does not return the expected value");
        $this->assertEquals(null, $obj1->getFollowTouchMove(), "The method getFollowTouchMove() does not return the expected value");
        $this->assertEquals(null, $obj1->getFooterFormat(), "The method getFooterFormat() does not return the expected value");
        $this->assertEquals(null, $obj1->getFormatter(), "The method getFormatter() does not return the expected value");
        $this->assertEquals(null, $obj1->getHeaderFormat(), "The method getHeaderFormat() does not return the expected value");
        $this->assertEquals(null, $obj1->getHideDelay(), "The method getHideDelay() does not return the expected value");
        $this->assertEquals(null, $obj1->getPadding(), "The method getPadding() does not return the expected value");
        $this->assertEquals(null, $obj1->getPointFormat(), "The method getPointFormat() does not return the expected value");
        $this->assertEquals(null, $obj1->getPointFormatter(), "The method getPointFormatter() does not return the expected value");
        $this->assertEquals(null, $obj1->getPositioner(), "The method getPositioner() does not return the expected value");
        $this->assertEquals(null, $obj1->getShadow(), "The method getShadow() does not return the expected value");
        $this->assertEquals(null, $obj1->getShape(), "The method getShape() does not return the expected value");
        $this->assertEquals(null, $obj1->getShared(), "The method getShared() does not return the expected value");
        $this->assertEquals(null, $obj1->getSnap(), "The method getSnap() does not return the expected value");
        $this->assertEquals(null, $obj1->getSplit(), "The method getSplit() does not return the expected value");
        $this->assertEquals(null, $obj1->getStyle(), "The method getStyle() does not return the expected value");
        $this->assertEquals(null, $obj1->getUseHTML(), "The method getUseHTML() does not return the expected value");
        $this->assertEquals(null, $obj1->getValueDecimals(), "The method getValueDecimals() does not return the expected value");
        $this->assertEquals(null, $obj1->getValuePrefix(), "The method getValuePrefix() does not return the expected value");
        $this->assertEquals(null, $obj1->getValueSuffix(), "The method getValueSuffix() does not return the expected value");
        $this->assertEquals(null, $obj1->getXDateFormat(), "The method getXDateFormat() does not return the expected value");

        $obj0 = new \WBW\Bundle\HighchartsBundle\API\Chart\HighchartsTooltip(false);

        $this->assertEquals(true, $obj0->getAnimation(), "The method getAnimation() does not return the expected value");
        $this->assertEquals("rgba(247,247,247,0.85)", $obj0->getBackgroundColor(), "The method getBackgroundColor() does not return the expected value");
        $this->assertEquals(null, $obj0->getBorderColor(), "The method getBorderColor() does not return the expected value");
        $this->assertEquals(3, $obj0->getBorderRadius(), "The method getBorderRadius() does not return the expected value");
        $this->assertEquals(1, $obj0->getBorderWidth(), "The method getBorderWidth() does not return the expected value");
        $this->assertEquals(null, $obj0->getCrosshairs(), "The method getCrosshairs() does not return the expected value");
        $this->assertEquals(null, $obj0->getDateTimeLabelFormats(), "The method getDateTimeLabelFormats() does not return the expected value");
        $this->assertEquals(true, $obj0->getEnabled(), "The method getEnabled() does not return the expected value");
        $this->assertEquals(false, $obj0->getFollowPointer(), "The method getFollowPointer() does not return the expected value");
        $this->assertEquals(true, $obj0->getFollowTouchMove(), "The method getFollowTouchMove() does not return the expected value");
        $this->assertEquals("false", $obj0->getFooterFormat(), "The method getFooterFormat() does not return the expected value");
        $this->assertEquals(null, $obj0->getFormatter(), "The method getFormatter() does not return the expected value");
        $this->assertEquals(null, $obj0->getHeaderFormat(), "The method getHeaderFormat() does not return the expected value");
        $this->assertEquals(500, $obj0->getHideDelay(), "The method getHideDelay() does not return the expected value");
        $this->assertEquals(8, $obj0->getPadding(), "The method getPadding() does not return the expected value");
        $this->assertEquals("<span style=\"color:{point.color}\">\\u25CF</span> {series.name}: <b>{point.y}</b><br/>", $obj0->getPointFormat(), "The method getPointFormat() does not return the expected value");
        $this->assertEquals(null, $obj0->getPointFormatter(), "The method getPointFormatter() does not return the expected value");
        $this->assertEquals(null, $obj0->getPositioner(), "The method getPositioner() does not return the expected value");
        $this->assertEquals(true, $obj0->getShadow(), "The method getShadow() does not return the expected value");
        $this->assertEquals("callout", $obj0->getShape(), "The method getShape() does not return the expected value");
        $this->assertEquals(false, $obj0->getShared(), "The method getShared() does not return the expected value");
        $this->assertEquals(null, $obj0->getSnap(), "The method getSnap() does not return the expected value");
        $this->assertEquals(false, $obj0->getSplit(), "The method getSplit() does not return the expected value");
        $this->assertEquals(["color" => "#333333", "cursor" => "default", "fontSize" => "12px", "pointerEvents" => "none", "whiteSpace" => "nowrap"], $obj0->getStyle(), "The method getStyle() does not return the expected value");
        $this->assertEquals(false, $obj0->getUseHTML(), "The method getUseHTML() does not return the expected value");
        $this->assertEquals(null, $obj0->getValueDecimals(), "The method getValueDecimals() does not return the expected value");
        $this->assertEquals(null, $obj0->getValuePrefix(), "The method getValuePrefix() does not return the expected value");
        $this->assertEquals(null, $obj0->getValueSuffix(), "The method getValueSuffix() does not return the expected value");
        $this->assertEquals(null, $obj0->getXDateFormat(), "The method getXDateFormat() does not return the expected value");
    }

    /**
     * Tests the jsonSerialize() method.
     *
     * @return void
     */
    public function testJsonSerialize() {

        $obj = new \WBW\Bundle\HighchartsBundle\API\Chart\HighchartsTooltip(true);

        $this->assertEquals([], $obj->jsonSerialize(), "The method jsonSerialize() does not return the expected value");
    }

    /**
     * Tests the toArray() method.
     *
     * @return void
     */
    public function testToArray() {

        $obj = new \WBW\Bundle\HighchartsBundle\API\Chart\HighchartsTooltip(true);

        $obj->setAnimation(1);

        $res1 = ["animation" => 1];
        $this->assertEquals($res1, $obj->toArray(), "The method toArray() does not return the expected array with animation");

        $obj->setBackgroundColor("930f2a43179a7ae5fc25ed873223e99f");

        $res2 = ["animation" => 1, "backgroundColor" => "930f2a43179a7ae5fc25ed873223e99f"];
        $this->assertEquals($res2, $obj->toArray(), "The method toArray() does not return the expected array with background color");

        $obj->setBorderColor("97da935a74593c55d78be9d1295aa994");

        $res3 = ["animation" => 1, "backgroundColor" => "930f2a43179a7ae5fc25ed873223e99f", "borderColor" => "97da935a74593c55d78be9d1295aa994"];
        $this->assertEquals($res3, $obj->toArray(), "The method toArray() does not return the expected array with border color");

        $obj->setBorderRadius(23);

        $res4 = ["animation" => 1, "backgroundColor" => "930f2a43179a7ae5fc25ed873223e99f", "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 23];
        $this->assertEquals($res4, $obj->toArray(), "The method toArray() does not return the expected array with border radius");

        $obj->setBorderWidth(34);

        $res5 = ["animation" => 1, "backgroundColor" => "930f2a43179a7ae5fc25ed873223e99f", "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 23, "borderWidth" => 34];
        $this->assertEquals($res5, $obj->toArray(), "The method toArray() does not return the expected array with border width");

        $obj->setCrosshairs("db6c0bf6a6631359834bb9a0a5378bf1");

        $res6 = ["animation" => 1, "backgroundColor" => "930f2a43179a7ae5fc25ed873223e99f", "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 23, "borderWidth" => 34, "crosshairs" => "db6c0bf6a6631359834bb9a0a5378bf1"];
        $this->assertEquals($res6, $obj->toArray(), "The method toArray() does not return the expected array with crosshairs");

        $obj->setDateTimeLabelFormats(["dateTimeLabelFormats" => "e9db9b38c23127a66165e1d8cefd5ad8"]);

        $res7 = ["animation" => 1, "backgroundColor" => "930f2a43179a7ae5fc25ed873223e99f", "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 23, "borderWidth" => 34, "crosshairs" => "db6c0bf6a6631359834bb9a0a5378bf1", "dateTimeLabelFormats" => ["dateTimeLabelFormats" => "e9db9b38c23127a66165e1d8cefd5ad8"]];
        $this->assertEquals($res7, $obj->toArray(), "The method toArray() does not return the expected array with date time label formats");

        $obj->setEnabled(0);

        $res8 = ["animation" => 1, "backgroundColor" => "930f2a43179a7ae5fc25ed873223e99f", "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 23, "borderWidth" => 34, "crosshairs" => "db6c0bf6a6631359834bb9a0a5378bf1", "dateTimeLabelFormats" => ["dateTimeLabelFormats" => "e9db9b38c23127a66165e1d8cefd5ad8"], "enabled" => 0];
        $this->assertEquals($res8, $obj->toArray(), "The method toArray() does not return the expected array with enabled");

        $obj->setFollowPointer(1);

        $res9 = ["animation" => 1, "backgroundColor" => "930f2a43179a7ae5fc25ed873223e99f", "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 23, "borderWidth" => 34, "crosshairs" => "db6c0bf6a6631359834bb9a0a5378bf1", "dateTimeLabelFormats" => ["dateTimeLabelFormats" => "e9db9b38c23127a66165e1d8cefd5ad8"], "enabled" => 0, "followPointer" => 1];
        $this->assertEquals($res9, $obj->toArray(), "The method toArray() does not return the expected array with follow pointer");

        $obj->setFollowTouchMove(0);

        $res10 = ["animation" => 1, "backgroundColor" => "930f2a43179a7ae5fc25ed873223e99f", "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 23, "borderWidth" => 34, "crosshairs" => "db6c0bf6a6631359834bb9a0a5378bf1", "dateTimeLabelFormats" => ["dateTimeLabelFormats" => "e9db9b38c23127a66165e1d8cefd5ad8"], "enabled" => 0, "followPointer" => 1, "followTouchMove" => 0];
        $this->assertEquals($res10, $obj->toArray(), "The method toArray() does not return the expected array with follow touch move");

        $obj->setFooterFormat("1ac32e030fc5ef01e703d5419170690e");

        $res11 = ["animation" => 1, "backgroundColor" => "930f2a43179a7ae5fc25ed873223e99f", "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 23, "borderWidth" => 34, "crosshairs" => "db6c0bf6a6631359834bb9a0a5378bf1", "dateTimeLabelFormats" => ["dateTimeLabelFormats" => "e9db9b38c23127a66165e1d8cefd5ad8"], "enabled" => 0, "followPointer" => 1, "followTouchMove" => 0, "footerFormat" => "1ac32e030fc5ef01e703d5419170690e"];
        $this->assertEquals($res11, $obj->toArray(), "The method toArray() does not return the expected array with footer format");

        $obj->setFormatter("f2ffc59487832cbad265a8fef2133592");

        $res12 = ["animation" => 1, "backgroundColor" => "930f2a43179a7ae5fc25ed873223e99f", "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 23, "borderWidth" => 34, "crosshairs" => "db6c0bf6a6631359834bb9a0a5378bf1", "dateTimeLabelFormats" => ["dateTimeLabelFormats" => "e9db9b38c23127a66165e1d8cefd5ad8"], "enabled" => 0, "followPointer" => 1, "followTouchMove" => 0, "footerFormat" => "1ac32e030fc5ef01e703d5419170690e", "formatter" => "f2ffc59487832cbad265a8fef2133592"];
        $this->assertEquals($res12, $obj->toArray(), "The method toArray() does not return the expected array with formatter");

        $obj->setHeaderFormat("937148825f6c7c8ed3376d1834b17ac6");

        $res13 = ["animation" => 1, "backgroundColor" => "930f2a43179a7ae5fc25ed873223e99f", "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 23, "borderWidth" => 34, "crosshairs" => "db6c0bf6a6631359834bb9a0a5378bf1", "dateTimeLabelFormats" => ["dateTimeLabelFormats" => "e9db9b38c23127a66165e1d8cefd5ad8"], "enabled" => 0, "followPointer" => 1, "followTouchMove" => 0, "footerFormat" => "1ac32e030fc5ef01e703d5419170690e", "formatter" => "f2ffc59487832cbad265a8fef2133592", "headerFormat" => "937148825f6c7c8ed3376d1834b17ac6"];
        $this->assertEquals($res13, $obj->toArray(), "The method toArray() does not return the expected array with header format");

        $obj->setHideDelay(44);

        $res14 = ["animation" => 1, "backgroundColor" => "930f2a43179a7ae5fc25ed873223e99f", "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 23, "borderWidth" => 34, "crosshairs" => "db6c0bf6a6631359834bb9a0a5378bf1", "dateTimeLabelFormats" => ["dateTimeLabelFormats" => "e9db9b38c23127a66165e1d8cefd5ad8"], "enabled" => 0, "followPointer" => 1, "followTouchMove" => 0, "footerFormat" => "1ac32e030fc5ef01e703d5419170690e", "formatter" => "f2ffc59487832cbad265a8fef2133592", "headerFormat" => "937148825f6c7c8ed3376d1834b17ac6", "hideDelay" => 44];
        $this->assertEquals($res14, $obj->toArray(), "The method toArray() does not return the expected array with hide delay");

        $obj->setPadding(79);

        $res15 = ["animation" => 1, "backgroundColor" => "930f2a43179a7ae5fc25ed873223e99f", "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 23, "borderWidth" => 34, "crosshairs" => "db6c0bf6a6631359834bb9a0a5378bf1", "dateTimeLabelFormats" => ["dateTimeLabelFormats" => "e9db9b38c23127a66165e1d8cefd5ad8"], "enabled" => 0, "followPointer" => 1, "followTouchMove" => 0, "footerFormat" => "1ac32e030fc5ef01e703d5419170690e", "formatter" => "f2ffc59487832cbad265a8fef2133592", "headerFormat" => "937148825f6c7c8ed3376d1834b17ac6", "hideDelay" => 44, "padding" => 79];
        $this->assertEquals($res15, $obj->toArray(), "The method toArray() does not return the expected array with padding");

        $obj->setPointFormat("332dd3de68dc71de0745837cbc13e217");

        $res16 = ["animation" => 1, "backgroundColor" => "930f2a43179a7ae5fc25ed873223e99f", "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 23, "borderWidth" => 34, "crosshairs" => "db6c0bf6a6631359834bb9a0a5378bf1", "dateTimeLabelFormats" => ["dateTimeLabelFormats" => "e9db9b38c23127a66165e1d8cefd5ad8"], "enabled" => 0, "followPointer" => 1, "followTouchMove" => 0, "footerFormat" => "1ac32e030fc5ef01e703d5419170690e", "formatter" => "f2ffc59487832cbad265a8fef2133592", "headerFormat" => "937148825f6c7c8ed3376d1834b17ac6", "hideDelay" => 44, "padding" => 79, "pointFormat" => "332dd3de68dc71de0745837cbc13e217"];
        $this->assertEquals($res16, $obj->toArray(), "The method toArray() does not return the expected array with point format");

        $obj->setPointFormatter("d0b51d7b9a5189f718d161b366d33044");

        $res17 = ["animation" => 1, "backgroundColor" => "930f2a43179a7ae5fc25ed873223e99f", "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 23, "borderWidth" => 34, "crosshairs" => "db6c0bf6a6631359834bb9a0a5378bf1", "dateTimeLabelFormats" => ["dateTimeLabelFormats" => "e9db9b38c23127a66165e1d8cefd5ad8"], "enabled" => 0, "followPointer" => 1, "followTouchMove" => 0, "footerFormat" => "1ac32e030fc5ef01e703d5419170690e", "formatter" => "f2ffc59487832cbad265a8fef2133592", "headerFormat" => "937148825f6c7c8ed3376d1834b17ac6", "hideDelay" => 44, "padding" => 79, "pointFormat" => "332dd3de68dc71de0745837cbc13e217", "pointFormatter" => "d0b51d7b9a5189f718d161b366d33044"];
        $this->assertEquals($res17, $obj->toArray(), "The method toArray() does not return the expected array with point formatter");

        $obj->setPositioner("97c873b8ea05a822237283662ba3c751");

        $res18 = ["animation" => 1, "backgroundColor" => "930f2a43179a7ae5fc25ed873223e99f", "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 23, "borderWidth" => 34, "crosshairs" => "db6c0bf6a6631359834bb9a0a5378bf1", "dateTimeLabelFormats" => ["dateTimeLabelFormats" => "e9db9b38c23127a66165e1d8cefd5ad8"], "enabled" => 0, "followPointer" => 1, "followTouchMove" => 0, "footerFormat" => "1ac32e030fc5ef01e703d5419170690e", "formatter" => "f2ffc59487832cbad265a8fef2133592", "headerFormat" => "937148825f6c7c8ed3376d1834b17ac6", "hideDelay" => 44, "padding" => 79, "pointFormat" => "332dd3de68dc71de0745837cbc13e217", "pointFormatter" => "d0b51d7b9a5189f718d161b366d33044", "positioner" => "97c873b8ea05a822237283662ba3c751"];
        $this->assertEquals($res18, $obj->toArray(), "The method toArray() does not return the expected array with positioner");

        $obj->setShadow(0);

        $res19 = ["animation" => 1, "backgroundColor" => "930f2a43179a7ae5fc25ed873223e99f", "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 23, "borderWidth" => 34, "crosshairs" => "db6c0bf6a6631359834bb9a0a5378bf1", "dateTimeLabelFormats" => ["dateTimeLabelFormats" => "e9db9b38c23127a66165e1d8cefd5ad8"], "enabled" => 0, "followPointer" => 1, "followTouchMove" => 0, "footerFormat" => "1ac32e030fc5ef01e703d5419170690e", "formatter" => "f2ffc59487832cbad265a8fef2133592", "headerFormat" => "937148825f6c7c8ed3376d1834b17ac6", "hideDelay" => 44, "padding" => 79, "pointFormat" => "332dd3de68dc71de0745837cbc13e217", "pointFormatter" => "d0b51d7b9a5189f718d161b366d33044", "positioner" => "97c873b8ea05a822237283662ba3c751", "shadow" => 0];
        $this->assertEquals($res19, $obj->toArray(), "The method toArray() does not return the expected array with shadow");

        $obj->setShape("8c73a98a300905900337f535531dfca6");

        $res20 = ["animation" => 1, "backgroundColor" => "930f2a43179a7ae5fc25ed873223e99f", "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 23, "borderWidth" => 34, "crosshairs" => "db6c0bf6a6631359834bb9a0a5378bf1", "dateTimeLabelFormats" => ["dateTimeLabelFormats" => "e9db9b38c23127a66165e1d8cefd5ad8"], "enabled" => 0, "followPointer" => 1, "followTouchMove" => 0, "footerFormat" => "1ac32e030fc5ef01e703d5419170690e", "formatter" => "f2ffc59487832cbad265a8fef2133592", "headerFormat" => "937148825f6c7c8ed3376d1834b17ac6", "hideDelay" => 44, "padding" => 79, "pointFormat" => "332dd3de68dc71de0745837cbc13e217", "pointFormatter" => "d0b51d7b9a5189f718d161b366d33044", "positioner" => "97c873b8ea05a822237283662ba3c751", "shadow" => 0, "shape" => "8c73a98a300905900337f535531dfca6"];
        $this->assertEquals($res20, $obj->toArray(), "The method toArray() does not return the expected array with shape");

        $obj->setShared(0);

        $res21 = ["animation" => 1, "backgroundColor" => "930f2a43179a7ae5fc25ed873223e99f", "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 23, "borderWidth" => 34, "crosshairs" => "db6c0bf6a6631359834bb9a0a5378bf1", "dateTimeLabelFormats" => ["dateTimeLabelFormats" => "e9db9b38c23127a66165e1d8cefd5ad8"], "enabled" => 0, "followPointer" => 1, "followTouchMove" => 0, "footerFormat" => "1ac32e030fc5ef01e703d5419170690e", "formatter" => "f2ffc59487832cbad265a8fef2133592", "headerFormat" => "937148825f6c7c8ed3376d1834b17ac6", "hideDelay" => 44, "padding" => 79, "pointFormat" => "332dd3de68dc71de0745837cbc13e217", "pointFormatter" => "d0b51d7b9a5189f718d161b366d33044", "positioner" => "97c873b8ea05a822237283662ba3c751", "shadow" => 0, "shape" => "8c73a98a300905900337f535531dfca6", "shared" => 0];
        $this->assertEquals($res21, $obj->toArray(), "The method toArray() does not return the expected array with shared");

        $obj->setSnap(75);

        $res22 = ["animation" => 1, "backgroundColor" => "930f2a43179a7ae5fc25ed873223e99f", "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 23, "borderWidth" => 34, "crosshairs" => "db6c0bf6a6631359834bb9a0a5378bf1", "dateTimeLabelFormats" => ["dateTimeLabelFormats" => "e9db9b38c23127a66165e1d8cefd5ad8"], "enabled" => 0, "followPointer" => 1, "followTouchMove" => 0, "footerFormat" => "1ac32e030fc5ef01e703d5419170690e", "formatter" => "f2ffc59487832cbad265a8fef2133592", "headerFormat" => "937148825f6c7c8ed3376d1834b17ac6", "hideDelay" => 44, "padding" => 79, "pointFormat" => "332dd3de68dc71de0745837cbc13e217", "pointFormatter" => "d0b51d7b9a5189f718d161b366d33044", "positioner" => "97c873b8ea05a822237283662ba3c751", "shadow" => 0, "shape" => "8c73a98a300905900337f535531dfca6", "shared" => 0, "snap" => 75];
        $this->assertEquals($res22, $obj->toArray(), "The method toArray() does not return the expected array with snap");

        $obj->setSplit(1);

        $res23 = ["animation" => 1, "backgroundColor" => "930f2a43179a7ae5fc25ed873223e99f", "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 23, "borderWidth" => 34, "crosshairs" => "db6c0bf6a6631359834bb9a0a5378bf1", "dateTimeLabelFormats" => ["dateTimeLabelFormats" => "e9db9b38c23127a66165e1d8cefd5ad8"], "enabled" => 0, "followPointer" => 1, "followTouchMove" => 0, "footerFormat" => "1ac32e030fc5ef01e703d5419170690e", "formatter" => "f2ffc59487832cbad265a8fef2133592", "headerFormat" => "937148825f6c7c8ed3376d1834b17ac6", "hideDelay" => 44, "padding" => 79, "pointFormat" => "332dd3de68dc71de0745837cbc13e217", "pointFormatter" => "d0b51d7b9a5189f718d161b366d33044", "positioner" => "97c873b8ea05a822237283662ba3c751", "shadow" => 0, "shape" => "8c73a98a300905900337f535531dfca6", "shared" => 0, "snap" => 75, "split" => 1];
        $this->assertEquals($res23, $obj->toArray(), "The method toArray() does not return the expected array with split");

        $obj->setStyle(["style" => "a1b01e734b573fca08eb1a65e6df9a38"]);

        $res24 = ["animation" => 1, "backgroundColor" => "930f2a43179a7ae5fc25ed873223e99f", "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 23, "borderWidth" => 34, "crosshairs" => "db6c0bf6a6631359834bb9a0a5378bf1", "dateTimeLabelFormats" => ["dateTimeLabelFormats" => "e9db9b38c23127a66165e1d8cefd5ad8"], "enabled" => 0, "followPointer" => 1, "followTouchMove" => 0, "footerFormat" => "1ac32e030fc5ef01e703d5419170690e", "formatter" => "f2ffc59487832cbad265a8fef2133592", "headerFormat" => "937148825f6c7c8ed3376d1834b17ac6", "hideDelay" => 44, "padding" => 79, "pointFormat" => "332dd3de68dc71de0745837cbc13e217", "pointFormatter" => "d0b51d7b9a5189f718d161b366d33044", "positioner" => "97c873b8ea05a822237283662ba3c751", "shadow" => 0, "shape" => "8c73a98a300905900337f535531dfca6", "shared" => 0, "snap" => 75, "split" => 1, "style" => ["style" => "a1b01e734b573fca08eb1a65e6df9a38"]];
        $this->assertEquals($res24, $obj->toArray(), "The method toArray() does not return the expected array with style");

        $obj->setUseHTML(1);

        $res25 = ["animation" => 1, "backgroundColor" => "930f2a43179a7ae5fc25ed873223e99f", "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 23, "borderWidth" => 34, "crosshairs" => "db6c0bf6a6631359834bb9a0a5378bf1", "dateTimeLabelFormats" => ["dateTimeLabelFormats" => "e9db9b38c23127a66165e1d8cefd5ad8"], "enabled" => 0, "followPointer" => 1, "followTouchMove" => 0, "footerFormat" => "1ac32e030fc5ef01e703d5419170690e", "formatter" => "f2ffc59487832cbad265a8fef2133592", "headerFormat" => "937148825f6c7c8ed3376d1834b17ac6", "hideDelay" => 44, "padding" => 79, "pointFormat" => "332dd3de68dc71de0745837cbc13e217", "pointFormatter" => "d0b51d7b9a5189f718d161b366d33044", "positioner" => "97c873b8ea05a822237283662ba3c751", "shadow" => 0, "shape" => "8c73a98a300905900337f535531dfca6", "shared" => 0, "snap" => 75, "split" => 1, "style" => ["style" => "a1b01e734b573fca08eb1a65e6df9a38"], "useHTML" => 1];
        $this->assertEquals($res25, $obj->toArray(), "The method toArray() does not return the expected array with use HTML");

        $obj->setValueDecimals(79);

        $res26 = ["animation" => 1, "backgroundColor" => "930f2a43179a7ae5fc25ed873223e99f", "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 23, "borderWidth" => 34, "crosshairs" => "db6c0bf6a6631359834bb9a0a5378bf1", "dateTimeLabelFormats" => ["dateTimeLabelFormats" => "e9db9b38c23127a66165e1d8cefd5ad8"], "enabled" => 0, "followPointer" => 1, "followTouchMove" => 0, "footerFormat" => "1ac32e030fc5ef01e703d5419170690e", "formatter" => "f2ffc59487832cbad265a8fef2133592", "headerFormat" => "937148825f6c7c8ed3376d1834b17ac6", "hideDelay" => 44, "padding" => 79, "pointFormat" => "332dd3de68dc71de0745837cbc13e217", "pointFormatter" => "d0b51d7b9a5189f718d161b366d33044", "positioner" => "97c873b8ea05a822237283662ba3c751", "shadow" => 0, "shape" => "8c73a98a300905900337f535531dfca6", "shared" => 0, "snap" => 75, "split" => 1, "style" => ["style" => "a1b01e734b573fca08eb1a65e6df9a38"], "useHTML" => 1, "valueDecimals" => 79];
        $this->assertEquals($res26, $obj->toArray(), "The method toArray() does not return the expected array with value decimals");

        $obj->setValuePrefix("5fde1c8b25eb2ea19ff8377e62564818");

        $res27 = ["animation" => 1, "backgroundColor" => "930f2a43179a7ae5fc25ed873223e99f", "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 23, "borderWidth" => 34, "crosshairs" => "db6c0bf6a6631359834bb9a0a5378bf1", "dateTimeLabelFormats" => ["dateTimeLabelFormats" => "e9db9b38c23127a66165e1d8cefd5ad8"], "enabled" => 0, "followPointer" => 1, "followTouchMove" => 0, "footerFormat" => "1ac32e030fc5ef01e703d5419170690e", "formatter" => "f2ffc59487832cbad265a8fef2133592", "headerFormat" => "937148825f6c7c8ed3376d1834b17ac6", "hideDelay" => 44, "padding" => 79, "pointFormat" => "332dd3de68dc71de0745837cbc13e217", "pointFormatter" => "d0b51d7b9a5189f718d161b366d33044", "positioner" => "97c873b8ea05a822237283662ba3c751", "shadow" => 0, "shape" => "8c73a98a300905900337f535531dfca6", "shared" => 0, "snap" => 75, "split" => 1, "style" => ["style" => "a1b01e734b573fca08eb1a65e6df9a38"], "useHTML" => 1, "valueDecimals" => 79, "valuePrefix" => "5fde1c8b25eb2ea19ff8377e62564818"];
        $this->assertEquals($res27, $obj->toArray(), "The method toArray() does not return the expected array with value prefix");

        $obj->setValueSuffix("bf995908ddff004471c953d8062bd1db");

        $res28 = ["animation" => 1, "backgroundColor" => "930f2a43179a7ae5fc25ed873223e99f", "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 23, "borderWidth" => 34, "crosshairs" => "db6c0bf6a6631359834bb9a0a5378bf1", "dateTimeLabelFormats" => ["dateTimeLabelFormats" => "e9db9b38c23127a66165e1d8cefd5ad8"], "enabled" => 0, "followPointer" => 1, "followTouchMove" => 0, "footerFormat" => "1ac32e030fc5ef01e703d5419170690e", "formatter" => "f2ffc59487832cbad265a8fef2133592", "headerFormat" => "937148825f6c7c8ed3376d1834b17ac6", "hideDelay" => 44, "padding" => 79, "pointFormat" => "332dd3de68dc71de0745837cbc13e217", "pointFormatter" => "d0b51d7b9a5189f718d161b366d33044", "positioner" => "97c873b8ea05a822237283662ba3c751", "shadow" => 0, "shape" => "8c73a98a300905900337f535531dfca6", "shared" => 0, "snap" => 75, "split" => 1, "style" => ["style" => "a1b01e734b573fca08eb1a65e6df9a38"], "useHTML" => 1, "valueDecimals" => 79, "valuePrefix" => "5fde1c8b25eb2ea19ff8377e62564818", "valueSuffix" => "bf995908ddff004471c953d8062bd1db"];
        $this->assertEquals($res28, $obj->toArray(), "The method toArray() does not return the expected array with value suffix");

        $obj->setXDateFormat("e24debfa0bc8408e1dda05cbd537a072");

        $res29 = ["animation" => 1, "backgroundColor" => "930f2a43179a7ae5fc25ed873223e99f", "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 23, "borderWidth" => 34, "crosshairs" => "db6c0bf6a6631359834bb9a0a5378bf1", "dateTimeLabelFormats" => ["dateTimeLabelFormats" => "e9db9b38c23127a66165e1d8cefd5ad8"], "enabled" => 0, "followPointer" => 1, "followTouchMove" => 0, "footerFormat" => "1ac32e030fc5ef01e703d5419170690e", "formatter" => "f2ffc59487832cbad265a8fef2133592", "headerFormat" => "937148825f6c7c8ed3376d1834b17ac6", "hideDelay" => 44, "padding" => 79, "pointFormat" => "332dd3de68dc71de0745837cbc13e217", "pointFormatter" => "d0b51d7b9a5189f718d161b366d33044", "positioner" => "97c873b8ea05a822237283662ba3c751", "shadow" => 0, "shape" => "8c73a98a300905900337f535531dfca6", "shared" => 0, "snap" => 75, "split" => 1, "style" => ["style" => "a1b01e734b573fca08eb1a65e6df9a38"], "useHTML" => 1, "valueDecimals" => 79, "valuePrefix" => "5fde1c8b25eb2ea19ff8377e62564818", "valueSuffix" => "bf995908ddff004471c953d8062bd1db", "xDateFormat" => "e24debfa0bc8408e1dda05cbd537a072"];
        $this->assertEquals($res29, $obj->toArray(), "The method toArray() does not return the expected array with x date format");
    }

}
