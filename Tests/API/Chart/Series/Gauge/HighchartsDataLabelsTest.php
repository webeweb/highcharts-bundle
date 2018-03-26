<?php

/**
 * This file is part of the highcharts-bundle package.
 *
 * (c) 2017 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\HighchartsBundle\Tests\API\Chart\Series\Gauge;

use PHPUnit_Framework_TestCase;

/**
 * Highcharts data labels test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\HighchartsBundle\Tests\API\Chart\Series\Gauge
 * @version 5.0.14
 */
final class HighchartsDataLabelsTest extends PHPUnit_Framework_TestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstructor() {

        $obj1 = new \WBW\Bundle\HighchartsBundle\API\Chart\Series\Gauge\HighchartsDataLabels(true);

        $this->assertNull($obj1->getAlign());
        $this->assertNull($obj1->getAllowOverlap());
        $this->assertNull($obj1->getBackgroundColor());
        $this->assertNull($obj1->getBorderColor());
        $this->assertNull($obj1->getBorderRadius());
        $this->assertNull($obj1->getBorderWidth());
        $this->assertNull($obj1->getClassName());
        $this->assertNull($obj1->getColor());
        $this->assertNull($obj1->getCrop());
        $this->assertNull($obj1->getDefer());
        $this->assertNull($obj1->getEnabled());
        $this->assertNull($obj1->getFormat());
        $this->assertNull($obj1->getFormatter());
        $this->assertNull($obj1->getInside());
        $this->assertNull($obj1->getOverflow());
        $this->assertNull($obj1->getPadding());
        $this->assertNull($obj1->getRotation());
        $this->assertNull($obj1->getShadow());
        $this->assertNull($obj1->getShape());
        $this->assertNull($obj1->getStyle());
        $this->assertNull($obj1->getUseHTML());
        $this->assertNull($obj1->getVerticalAlign());
        $this->assertNull($obj1->getX());
        $this->assertNull($obj1->getY());
        $this->assertNull($obj1->getZIndex());

        $obj0 = new \WBW\Bundle\HighchartsBundle\API\Chart\Series\Gauge\HighchartsDataLabels(false);

        $this->assertEquals("center", $obj0->getAlign());
        $this->assertEquals(false, $obj0->getAllowOverlap());
        $this->assertNull($obj0->getBackgroundColor());
        $this->assertEquals("#cccccc", $obj0->getBorderColor());
        $this->assertEquals(3, $obj0->getBorderRadius());
        $this->assertEquals(1, $obj0->getBorderWidth());
        $this->assertNull($obj0->getClassName());
        $this->assertNull($obj0->getColor());
        $this->assertEquals(true, $obj0->getCrop());
        $this->assertEquals(true, $obj0->getDefer());
        $this->assertEquals(false, $obj0->getEnabled());
        $this->assertEquals("{y}", $obj0->getFormat());
        $this->assertNull($obj0->getFormatter());
        $this->assertNull($obj0->getInside());
        $this->assertEquals("justify", $obj0->getOverflow());
        $this->assertEquals(5, $obj0->getPadding());
        $this->assertEquals(0, $obj0->getRotation());
        $this->assertEquals(false, $obj0->getShadow());
        $this->assertEquals("square", $obj0->getShape());
        $this->assertEquals(["color" => "contrast", "fontSize" => "11px", "fontWeight" => "bold", "textOutline" => "1px contrast"], $obj0->getStyle());
        $this->assertEquals(false, $obj0->getUseHTML());
        $this->assertEquals("top", $obj0->getVerticalAlign());
        $this->assertEquals(0, $obj0->getX());
        $this->assertEquals(15, $obj0->getY());
        $this->assertEquals(2, $obj0->getZIndex());
    }

    /**
     * Tests the jsonSerialize() method.
     *
     * @return void
     */
    public function testJsonSerialize() {

        $obj = new \WBW\Bundle\HighchartsBundle\API\Chart\Series\Gauge\HighchartsDataLabels(true);

        $this->assertEquals([], $obj->jsonSerialize());
    }

    /**
     * Tests the toArray() method.
     *
     * @return void
     */
    public function testToArray() {

        $obj = new \WBW\Bundle\HighchartsBundle\API\Chart\Series\Gauge\HighchartsDataLabels(true);

        $obj->setAlign("right");

        $res1 = ["align" => "right"];
        $this->assertEquals($res1, $obj->toArray());

        $obj->setAllowOverlap(0);

        $res2 = ["align" => "right", "allowOverlap" => 0];
        $this->assertEquals($res2, $obj->toArray());

        $obj->setBackgroundColor("930f2a43179a7ae5fc25ed873223e99f");

        $res3 = ["align" => "right", "allowOverlap" => 0, "backgroundColor" => "930f2a43179a7ae5fc25ed873223e99f"];
        $this->assertEquals($res3, $obj->toArray());

        $obj->setBorderColor("97da935a74593c55d78be9d1295aa994");

        $res4 = ["align" => "right", "allowOverlap" => 0, "backgroundColor" => "930f2a43179a7ae5fc25ed873223e99f", "borderColor" => "97da935a74593c55d78be9d1295aa994"];
        $this->assertEquals($res4, $obj->toArray());

        $obj->setBorderRadius(61);

        $res5 = ["align" => "right", "allowOverlap" => 0, "backgroundColor" => "930f2a43179a7ae5fc25ed873223e99f", "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 61];
        $this->assertEquals($res5, $obj->toArray());

        $obj->setBorderWidth(65);

        $res6 = ["align" => "right", "allowOverlap" => 0, "backgroundColor" => "930f2a43179a7ae5fc25ed873223e99f", "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 61, "borderWidth" => 65];
        $this->assertEquals($res6, $obj->toArray());

        $obj->setClassName("6f66e878c62db60568a3487869695820");

        $res7 = ["align" => "right", "allowOverlap" => 0, "backgroundColor" => "930f2a43179a7ae5fc25ed873223e99f", "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 61, "borderWidth" => 65, "className" => "6f66e878c62db60568a3487869695820"];
        $this->assertEquals($res7, $obj->toArray());

        $obj->setColor("70dda5dfb8053dc6d1c492574bce9bfd");

        $res8 = ["align" => "right", "allowOverlap" => 0, "backgroundColor" => "930f2a43179a7ae5fc25ed873223e99f", "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 61, "borderWidth" => 65, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd"];
        $this->assertEquals($res8, $obj->toArray());

        $obj->setCrop(0);

        $res9 = ["align" => "right", "allowOverlap" => 0, "backgroundColor" => "930f2a43179a7ae5fc25ed873223e99f", "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 61, "borderWidth" => 65, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "crop" => 0];
        $this->assertEquals($res9, $obj->toArray());

        $obj->setDefer(0);

        $res10 = ["align" => "right", "allowOverlap" => 0, "backgroundColor" => "930f2a43179a7ae5fc25ed873223e99f", "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 61, "borderWidth" => 65, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "crop" => 0, "defer" => 0];
        $this->assertEquals($res10, $obj->toArray());

        $obj->setEnabled(1);

        $res11 = ["align" => "right", "allowOverlap" => 0, "backgroundColor" => "930f2a43179a7ae5fc25ed873223e99f", "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 61, "borderWidth" => 65, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "crop" => 0, "defer" => 0, "enabled" => 1];
        $this->assertEquals($res11, $obj->toArray());

        $obj->setFormat("1ddcb92ade31c8fbd370001f9b29a7d9");

        $res12 = ["align" => "right", "allowOverlap" => 0, "backgroundColor" => "930f2a43179a7ae5fc25ed873223e99f", "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 61, "borderWidth" => 65, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "crop" => 0, "defer" => 0, "enabled" => 1, "format" => "1ddcb92ade31c8fbd370001f9b29a7d9"];
        $this->assertEquals($res12, $obj->toArray());

        $obj->setFormatter("f2ffc59487832cbad265a8fef2133592");

        $res13 = ["align" => "right", "allowOverlap" => 0, "backgroundColor" => "930f2a43179a7ae5fc25ed873223e99f", "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 61, "borderWidth" => 65, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "crop" => 0, "defer" => 0, "enabled" => 1, "format" => "1ddcb92ade31c8fbd370001f9b29a7d9", "formatter" => "f2ffc59487832cbad265a8fef2133592"];
        $this->assertEquals($res13, $obj->toArray());

        $obj->setInside(1);

        $res14 = ["align" => "right", "allowOverlap" => 0, "backgroundColor" => "930f2a43179a7ae5fc25ed873223e99f", "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 61, "borderWidth" => 65, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "crop" => 0, "defer" => 0, "enabled" => 1, "format" => "1ddcb92ade31c8fbd370001f9b29a7d9", "formatter" => "f2ffc59487832cbad265a8fef2133592", "inside" => 1];
        $this->assertEquals($res14, $obj->toArray());

        $obj->setOverflow("none");

        $res15 = ["align" => "right", "allowOverlap" => 0, "backgroundColor" => "930f2a43179a7ae5fc25ed873223e99f", "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 61, "borderWidth" => 65, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "crop" => 0, "defer" => 0, "enabled" => 1, "format" => "1ddcb92ade31c8fbd370001f9b29a7d9", "formatter" => "f2ffc59487832cbad265a8fef2133592", "inside" => 1, "overflow" => "none"];
        $this->assertEquals($res15, $obj->toArray());

        $obj->setPadding(40);

        $res16 = ["align" => "right", "allowOverlap" => 0, "backgroundColor" => "930f2a43179a7ae5fc25ed873223e99f", "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 61, "borderWidth" => 65, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "crop" => 0, "defer" => 0, "enabled" => 1, "format" => "1ddcb92ade31c8fbd370001f9b29a7d9", "formatter" => "f2ffc59487832cbad265a8fef2133592", "inside" => 1, "overflow" => "none", "padding" => 40];
        $this->assertEquals($res16, $obj->toArray());

        $obj->setRotation(21);

        $res17 = ["align" => "right", "allowOverlap" => 0, "backgroundColor" => "930f2a43179a7ae5fc25ed873223e99f", "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 61, "borderWidth" => 65, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "crop" => 0, "defer" => 0, "enabled" => 1, "format" => "1ddcb92ade31c8fbd370001f9b29a7d9", "formatter" => "f2ffc59487832cbad265a8fef2133592", "inside" => 1, "overflow" => "none", "padding" => 40, "rotation" => 21];
        $this->assertEquals($res17, $obj->toArray());

        $obj->setShadow(1);

        $res18 = ["align" => "right", "allowOverlap" => 0, "backgroundColor" => "930f2a43179a7ae5fc25ed873223e99f", "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 61, "borderWidth" => 65, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "crop" => 0, "defer" => 0, "enabled" => 1, "format" => "1ddcb92ade31c8fbd370001f9b29a7d9", "formatter" => "f2ffc59487832cbad265a8fef2133592", "inside" => 1, "overflow" => "none", "padding" => 40, "rotation" => 21, "shadow" => 1];
        $this->assertEquals($res18, $obj->toArray());

        $obj->setShape("8c73a98a300905900337f535531dfca6");

        $res19 = ["align" => "right", "allowOverlap" => 0, "backgroundColor" => "930f2a43179a7ae5fc25ed873223e99f", "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 61, "borderWidth" => 65, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "crop" => 0, "defer" => 0, "enabled" => 1, "format" => "1ddcb92ade31c8fbd370001f9b29a7d9", "formatter" => "f2ffc59487832cbad265a8fef2133592", "inside" => 1, "overflow" => "none", "padding" => 40, "rotation" => 21, "shadow" => 1, "shape" => "8c73a98a300905900337f535531dfca6"];
        $this->assertEquals($res19, $obj->toArray());

        $obj->setStyle(["style" => "a1b01e734b573fca08eb1a65e6df9a38"]);

        $res20 = ["align" => "right", "allowOverlap" => 0, "backgroundColor" => "930f2a43179a7ae5fc25ed873223e99f", "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 61, "borderWidth" => 65, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "crop" => 0, "defer" => 0, "enabled" => 1, "format" => "1ddcb92ade31c8fbd370001f9b29a7d9", "formatter" => "f2ffc59487832cbad265a8fef2133592", "inside" => 1, "overflow" => "none", "padding" => 40, "rotation" => 21, "shadow" => 1, "shape" => "8c73a98a300905900337f535531dfca6", "style" => ["style" => "a1b01e734b573fca08eb1a65e6df9a38"]];
        $this->assertEquals($res20, $obj->toArray());

        $obj->setUseHTML(0);

        $res21 = ["align" => "right", "allowOverlap" => 0, "backgroundColor" => "930f2a43179a7ae5fc25ed873223e99f", "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 61, "borderWidth" => 65, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "crop" => 0, "defer" => 0, "enabled" => 1, "format" => "1ddcb92ade31c8fbd370001f9b29a7d9", "formatter" => "f2ffc59487832cbad265a8fef2133592", "inside" => 1, "overflow" => "none", "padding" => 40, "rotation" => 21, "shadow" => 1, "shape" => "8c73a98a300905900337f535531dfca6", "style" => ["style" => "a1b01e734b573fca08eb1a65e6df9a38"], "useHTML" => 0];
        $this->assertEquals($res21, $obj->toArray());

        $obj->setVerticalAlign("ca9e085e0fcf449934cc13d9e60dd722");

        $res22 = ["align" => "right", "allowOverlap" => 0, "backgroundColor" => "930f2a43179a7ae5fc25ed873223e99f", "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 61, "borderWidth" => 65, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "crop" => 0, "defer" => 0, "enabled" => 1, "format" => "1ddcb92ade31c8fbd370001f9b29a7d9", "formatter" => "f2ffc59487832cbad265a8fef2133592", "inside" => 1, "overflow" => "none", "padding" => 40, "rotation" => 21, "shadow" => 1, "shape" => "8c73a98a300905900337f535531dfca6", "style" => ["style" => "a1b01e734b573fca08eb1a65e6df9a38"], "useHTML" => 0, "verticalAlign" => "ca9e085e0fcf449934cc13d9e60dd722"];
        $this->assertEquals($res22, $obj->toArray());

        $obj->setX(48);

        $res23 = ["align" => "right", "allowOverlap" => 0, "backgroundColor" => "930f2a43179a7ae5fc25ed873223e99f", "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 61, "borderWidth" => 65, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "crop" => 0, "defer" => 0, "enabled" => 1, "format" => "1ddcb92ade31c8fbd370001f9b29a7d9", "formatter" => "f2ffc59487832cbad265a8fef2133592", "inside" => 1, "overflow" => "none", "padding" => 40, "rotation" => 21, "shadow" => 1, "shape" => "8c73a98a300905900337f535531dfca6", "style" => ["style" => "a1b01e734b573fca08eb1a65e6df9a38"], "useHTML" => 0, "verticalAlign" => "ca9e085e0fcf449934cc13d9e60dd722", "x" => 48];
        $this->assertEquals($res23, $obj->toArray());

        $obj->setY(93);

        $res24 = ["align" => "right", "allowOverlap" => 0, "backgroundColor" => "930f2a43179a7ae5fc25ed873223e99f", "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 61, "borderWidth" => 65, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "crop" => 0, "defer" => 0, "enabled" => 1, "format" => "1ddcb92ade31c8fbd370001f9b29a7d9", "formatter" => "f2ffc59487832cbad265a8fef2133592", "inside" => 1, "overflow" => "none", "padding" => 40, "rotation" => 21, "shadow" => 1, "shape" => "8c73a98a300905900337f535531dfca6", "style" => ["style" => "a1b01e734b573fca08eb1a65e6df9a38"], "useHTML" => 0, "verticalAlign" => "ca9e085e0fcf449934cc13d9e60dd722", "x" => 48, "y" => 93];
        $this->assertEquals($res24, $obj->toArray());

        $obj->setZIndex(24);

        $res25 = ["align" => "right", "allowOverlap" => 0, "backgroundColor" => "930f2a43179a7ae5fc25ed873223e99f", "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 61, "borderWidth" => 65, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "crop" => 0, "defer" => 0, "enabled" => 1, "format" => "1ddcb92ade31c8fbd370001f9b29a7d9", "formatter" => "f2ffc59487832cbad265a8fef2133592", "inside" => 1, "overflow" => "none", "padding" => 40, "rotation" => 21, "shadow" => 1, "shape" => "8c73a98a300905900337f535531dfca6", "style" => ["style" => "a1b01e734b573fca08eb1a65e6df9a38"], "useHTML" => 0, "verticalAlign" => "ca9e085e0fcf449934cc13d9e60dd722", "x" => 48, "y" => 93, "zIndex" => 24];
        $this->assertEquals($res25, $obj->toArray());
    }

}
