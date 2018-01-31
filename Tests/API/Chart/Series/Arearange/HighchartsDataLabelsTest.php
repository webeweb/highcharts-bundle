<?php

/**
 * This file is part of the highcharts-bundle package.
 *
 * (c) 2017 NdC/WBW
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\HighchartsBundle\Tests\API\Chart\Series\Arearange;

use PHPUnit_Framework_TestCase;

/**
 * Highcharts data labels test.
 *
 * @author NdC/WBW <https://github.com/webeweb/>
 * @package WBW\Bundle\HighchartsBundle\Tests\API\Chart\Series\Arearange
 * @version 5.0.14
 */
final class HighchartsDataLabelsTest extends PHPUnit_Framework_TestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstructor() {

        $obj1 = new \WBW\Bundle\HighchartsBundle\API\Chart\Series\Arearange\HighchartsDataLabels(true);

        $this->assertEquals(null, $obj1->getAlign());
        $this->assertEquals(null, $obj1->getAllowOverlap());
        $this->assertEquals(null, $obj1->getBackgroundColor());
        $this->assertEquals(null, $obj1->getBorderColor());
        $this->assertEquals(null, $obj1->getBorderRadius());
        $this->assertEquals(null, $obj1->getBorderWidth());
        $this->assertEquals(null, $obj1->getClassName());
        $this->assertEquals(null, $obj1->getColor());
        $this->assertEquals(null, $obj1->getCrop());
        $this->assertEquals(null, $obj1->getDefer());
        $this->assertEquals(null, $obj1->getEnabled());
        $this->assertEquals(null, $obj1->getFormat());
        $this->assertEquals(null, $obj1->getFormatter());
        $this->assertEquals(null, $obj1->getInside());
        $this->assertEquals(null, $obj1->getOverflow());
        $this->assertEquals(null, $obj1->getPadding());
        $this->assertEquals(null, $obj1->getRotation());
        $this->assertEquals(null, $obj1->getShadow());
        $this->assertEquals(null, $obj1->getShape());
        $this->assertEquals(null, $obj1->getStyle());
        $this->assertEquals(null, $obj1->getUseHTML());
        $this->assertEquals(null, $obj1->getVerticalAlign());
        $this->assertEquals(null, $obj1->getXHigh());
        $this->assertEquals(null, $obj1->getXLow());
        $this->assertEquals(null, $obj1->getYHigh());
        $this->assertEquals(null, $obj1->getYLow());
        $this->assertEquals(null, $obj1->getZIndex());

        $obj0 = new \WBW\Bundle\HighchartsBundle\API\Chart\Series\Arearange\HighchartsDataLabels(false);

        $this->assertEquals("center", $obj0->getAlign());
        $this->assertEquals(false, $obj0->getAllowOverlap());
        $this->assertEquals(null, $obj0->getBackgroundColor());
        $this->assertEquals(null, $obj0->getBorderColor());
        $this->assertEquals(0, $obj0->getBorderRadius());
        $this->assertEquals(0, $obj0->getBorderWidth());
        $this->assertEquals(null, $obj0->getClassName());
        $this->assertEquals(null, $obj0->getColor());
        $this->assertEquals(true, $obj0->getCrop());
        $this->assertEquals(true, $obj0->getDefer());
        $this->assertEquals(false, $obj0->getEnabled());
        $this->assertEquals("{y}", $obj0->getFormat());
        $this->assertEquals(null, $obj0->getFormatter());
        $this->assertEquals(null, $obj0->getInside());
        $this->assertEquals("justify", $obj0->getOverflow());
        $this->assertEquals(5, $obj0->getPadding());
        $this->assertEquals(0, $obj0->getRotation());
        $this->assertEquals(false, $obj0->getShadow());
        $this->assertEquals("square", $obj0->getShape());
        $this->assertEquals(["color" => "contrast", "fontSize" => "11px", "fontWeight" => "bold", "textOutline" => "1px contrast"], $obj0->getStyle());
        $this->assertEquals(false, $obj0->getUseHTML());
        $this->assertEquals(null, $obj0->getVerticalAlign());
        $this->assertEquals(0, $obj0->getXHigh());
        $this->assertEquals(0, $obj0->getXLow());
        $this->assertEquals(-6, $obj0->getYHigh());
        $this->assertEquals(16, $obj0->getYLow());
        $this->assertEquals(6, $obj0->getZIndex());
    }

    /**
     * Tests the jsonSerialize() method.
     *
     * @return void
     */
    public function testJsonSerialize() {

        $obj = new \WBW\Bundle\HighchartsBundle\API\Chart\Series\Arearange\HighchartsDataLabels(true);

        $this->assertEquals([], $obj->jsonSerialize());
    }

    /**
     * Tests the toArray() method.
     *
     * @return void
     */
    public function testToArray() {

        $obj = new \WBW\Bundle\HighchartsBundle\API\Chart\Series\Arearange\HighchartsDataLabels(true);

        $obj->setAlign("right");

        $res1 = ["align" => "right"];
        $this->assertEquals($res1, $obj->toArray());

        $obj->setAllowOverlap(1);

        $res2 = ["align" => "right", "allowOverlap" => 1];
        $this->assertEquals($res2, $obj->toArray());

        $obj->setBackgroundColor("930f2a43179a7ae5fc25ed873223e99f");

        $res3 = ["align" => "right", "allowOverlap" => 1, "backgroundColor" => "930f2a43179a7ae5fc25ed873223e99f"];
        $this->assertEquals($res3, $obj->toArray());

        $obj->setBorderColor("97da935a74593c55d78be9d1295aa994");

        $res4 = ["align" => "right", "allowOverlap" => 1, "backgroundColor" => "930f2a43179a7ae5fc25ed873223e99f", "borderColor" => "97da935a74593c55d78be9d1295aa994"];
        $this->assertEquals($res4, $obj->toArray());

        $obj->setBorderRadius(36);

        $res5 = ["align" => "right", "allowOverlap" => 1, "backgroundColor" => "930f2a43179a7ae5fc25ed873223e99f", "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 36];
        $this->assertEquals($res5, $obj->toArray());

        $obj->setBorderWidth(23);

        $res6 = ["align" => "right", "allowOverlap" => 1, "backgroundColor" => "930f2a43179a7ae5fc25ed873223e99f", "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 36, "borderWidth" => 23];
        $this->assertEquals($res6, $obj->toArray());

        $obj->setClassName("6f66e878c62db60568a3487869695820");

        $res7 = ["align" => "right", "allowOverlap" => 1, "backgroundColor" => "930f2a43179a7ae5fc25ed873223e99f", "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 36, "borderWidth" => 23, "className" => "6f66e878c62db60568a3487869695820"];
        $this->assertEquals($res7, $obj->toArray());

        $obj->setColor("70dda5dfb8053dc6d1c492574bce9bfd");

        $res8 = ["align" => "right", "allowOverlap" => 1, "backgroundColor" => "930f2a43179a7ae5fc25ed873223e99f", "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 36, "borderWidth" => 23, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd"];
        $this->assertEquals($res8, $obj->toArray());

        $obj->setCrop(1);

        $res9 = ["align" => "right", "allowOverlap" => 1, "backgroundColor" => "930f2a43179a7ae5fc25ed873223e99f", "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 36, "borderWidth" => 23, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "crop" => 1];
        $this->assertEquals($res9, $obj->toArray());

        $obj->setDefer(1);

        $res10 = ["align" => "right", "allowOverlap" => 1, "backgroundColor" => "930f2a43179a7ae5fc25ed873223e99f", "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 36, "borderWidth" => 23, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "crop" => 1, "defer" => 1];
        $this->assertEquals($res10, $obj->toArray());

        $obj->setEnabled(1);

        $res11 = ["align" => "right", "allowOverlap" => 1, "backgroundColor" => "930f2a43179a7ae5fc25ed873223e99f", "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 36, "borderWidth" => 23, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "crop" => 1, "defer" => 1, "enabled" => 1];
        $this->assertEquals($res11, $obj->toArray());

        $obj->setFormat("1ddcb92ade31c8fbd370001f9b29a7d9");

        $res12 = ["align" => "right", "allowOverlap" => 1, "backgroundColor" => "930f2a43179a7ae5fc25ed873223e99f", "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 36, "borderWidth" => 23, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "crop" => 1, "defer" => 1, "enabled" => 1, "format" => "1ddcb92ade31c8fbd370001f9b29a7d9"];
        $this->assertEquals($res12, $obj->toArray());

        $obj->setFormatter("f2ffc59487832cbad265a8fef2133592");

        $res13 = ["align" => "right", "allowOverlap" => 1, "backgroundColor" => "930f2a43179a7ae5fc25ed873223e99f", "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 36, "borderWidth" => 23, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "crop" => 1, "defer" => 1, "enabled" => 1, "format" => "1ddcb92ade31c8fbd370001f9b29a7d9", "formatter" => "f2ffc59487832cbad265a8fef2133592"];
        $this->assertEquals($res13, $obj->toArray());

        $obj->setInside(0);

        $res14 = ["align" => "right", "allowOverlap" => 1, "backgroundColor" => "930f2a43179a7ae5fc25ed873223e99f", "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 36, "borderWidth" => 23, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "crop" => 1, "defer" => 1, "enabled" => 1, "format" => "1ddcb92ade31c8fbd370001f9b29a7d9", "formatter" => "f2ffc59487832cbad265a8fef2133592", "inside" => 0];
        $this->assertEquals($res14, $obj->toArray());

        $obj->setOverflow("none");

        $res15 = ["align" => "right", "allowOverlap" => 1, "backgroundColor" => "930f2a43179a7ae5fc25ed873223e99f", "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 36, "borderWidth" => 23, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "crop" => 1, "defer" => 1, "enabled" => 1, "format" => "1ddcb92ade31c8fbd370001f9b29a7d9", "formatter" => "f2ffc59487832cbad265a8fef2133592", "inside" => 0, "overflow" => "none"];
        $this->assertEquals($res15, $obj->toArray());

        $obj->setPadding(72);

        $res16 = ["align" => "right", "allowOverlap" => 1, "backgroundColor" => "930f2a43179a7ae5fc25ed873223e99f", "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 36, "borderWidth" => 23, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "crop" => 1, "defer" => 1, "enabled" => 1, "format" => "1ddcb92ade31c8fbd370001f9b29a7d9", "formatter" => "f2ffc59487832cbad265a8fef2133592", "inside" => 0, "overflow" => "none", "padding" => 72];
        $this->assertEquals($res16, $obj->toArray());

        $obj->setRotation(49);

        $res17 = ["align" => "right", "allowOverlap" => 1, "backgroundColor" => "930f2a43179a7ae5fc25ed873223e99f", "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 36, "borderWidth" => 23, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "crop" => 1, "defer" => 1, "enabled" => 1, "format" => "1ddcb92ade31c8fbd370001f9b29a7d9", "formatter" => "f2ffc59487832cbad265a8fef2133592", "inside" => 0, "overflow" => "none", "padding" => 72, "rotation" => 49];
        $this->assertEquals($res17, $obj->toArray());

        $obj->setShadow(1);

        $res18 = ["align" => "right", "allowOverlap" => 1, "backgroundColor" => "930f2a43179a7ae5fc25ed873223e99f", "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 36, "borderWidth" => 23, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "crop" => 1, "defer" => 1, "enabled" => 1, "format" => "1ddcb92ade31c8fbd370001f9b29a7d9", "formatter" => "f2ffc59487832cbad265a8fef2133592", "inside" => 0, "overflow" => "none", "padding" => 72, "rotation" => 49, "shadow" => 1];
        $this->assertEquals($res18, $obj->toArray());

        $obj->setShape("8c73a98a300905900337f535531dfca6");

        $res19 = ["align" => "right", "allowOverlap" => 1, "backgroundColor" => "930f2a43179a7ae5fc25ed873223e99f", "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 36, "borderWidth" => 23, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "crop" => 1, "defer" => 1, "enabled" => 1, "format" => "1ddcb92ade31c8fbd370001f9b29a7d9", "formatter" => "f2ffc59487832cbad265a8fef2133592", "inside" => 0, "overflow" => "none", "padding" => 72, "rotation" => 49, "shadow" => 1, "shape" => "8c73a98a300905900337f535531dfca6"];
        $this->assertEquals($res19, $obj->toArray());

        $obj->setStyle(["style" => "a1b01e734b573fca08eb1a65e6df9a38"]);

        $res20 = ["align" => "right", "allowOverlap" => 1, "backgroundColor" => "930f2a43179a7ae5fc25ed873223e99f", "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 36, "borderWidth" => 23, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "crop" => 1, "defer" => 1, "enabled" => 1, "format" => "1ddcb92ade31c8fbd370001f9b29a7d9", "formatter" => "f2ffc59487832cbad265a8fef2133592", "inside" => 0, "overflow" => "none", "padding" => 72, "rotation" => 49, "shadow" => 1, "shape" => "8c73a98a300905900337f535531dfca6", "style" => ["style" => "a1b01e734b573fca08eb1a65e6df9a38"]];
        $this->assertEquals($res20, $obj->toArray());

        $obj->setUseHTML(0);

        $res21 = ["align" => "right", "allowOverlap" => 1, "backgroundColor" => "930f2a43179a7ae5fc25ed873223e99f", "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 36, "borderWidth" => 23, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "crop" => 1, "defer" => 1, "enabled" => 1, "format" => "1ddcb92ade31c8fbd370001f9b29a7d9", "formatter" => "f2ffc59487832cbad265a8fef2133592", "inside" => 0, "overflow" => "none", "padding" => 72, "rotation" => 49, "shadow" => 1, "shape" => "8c73a98a300905900337f535531dfca6", "style" => ["style" => "a1b01e734b573fca08eb1a65e6df9a38"], "useHTML" => 0];
        $this->assertEquals($res21, $obj->toArray());

        $obj->setVerticalAlign("bottom");

        $res22 = ["align" => "right", "allowOverlap" => 1, "backgroundColor" => "930f2a43179a7ae5fc25ed873223e99f", "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 36, "borderWidth" => 23, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "crop" => 1, "defer" => 1, "enabled" => 1, "format" => "1ddcb92ade31c8fbd370001f9b29a7d9", "formatter" => "f2ffc59487832cbad265a8fef2133592", "inside" => 0, "overflow" => "none", "padding" => 72, "rotation" => 49, "shadow" => 1, "shape" => "8c73a98a300905900337f535531dfca6", "style" => ["style" => "a1b01e734b573fca08eb1a65e6df9a38"], "useHTML" => 0, "verticalAlign" => "bottom"];
        $this->assertEquals($res22, $obj->toArray());

        $obj->setXHigh(15);

        $res23 = ["align" => "right", "allowOverlap" => 1, "backgroundColor" => "930f2a43179a7ae5fc25ed873223e99f", "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 36, "borderWidth" => 23, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "crop" => 1, "defer" => 1, "enabled" => 1, "format" => "1ddcb92ade31c8fbd370001f9b29a7d9", "formatter" => "f2ffc59487832cbad265a8fef2133592", "inside" => 0, "overflow" => "none", "padding" => 72, "rotation" => 49, "shadow" => 1, "shape" => "8c73a98a300905900337f535531dfca6", "style" => ["style" => "a1b01e734b573fca08eb1a65e6df9a38"], "useHTML" => 0, "verticalAlign" => "bottom", "xHigh" => 15];
        $this->assertEquals($res23, $obj->toArray());

        $obj->setXLow(76);

        $res24 = ["align" => "right", "allowOverlap" => 1, "backgroundColor" => "930f2a43179a7ae5fc25ed873223e99f", "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 36, "borderWidth" => 23, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "crop" => 1, "defer" => 1, "enabled" => 1, "format" => "1ddcb92ade31c8fbd370001f9b29a7d9", "formatter" => "f2ffc59487832cbad265a8fef2133592", "inside" => 0, "overflow" => "none", "padding" => 72, "rotation" => 49, "shadow" => 1, "shape" => "8c73a98a300905900337f535531dfca6", "style" => ["style" => "a1b01e734b573fca08eb1a65e6df9a38"], "useHTML" => 0, "verticalAlign" => "bottom", "xHigh" => 15, "xLow" => 76];
        $this->assertEquals($res24, $obj->toArray());

        $obj->setYHigh(26);

        $res25 = ["align" => "right", "allowOverlap" => 1, "backgroundColor" => "930f2a43179a7ae5fc25ed873223e99f", "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 36, "borderWidth" => 23, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "crop" => 1, "defer" => 1, "enabled" => 1, "format" => "1ddcb92ade31c8fbd370001f9b29a7d9", "formatter" => "f2ffc59487832cbad265a8fef2133592", "inside" => 0, "overflow" => "none", "padding" => 72, "rotation" => 49, "shadow" => 1, "shape" => "8c73a98a300905900337f535531dfca6", "style" => ["style" => "a1b01e734b573fca08eb1a65e6df9a38"], "useHTML" => 0, "verticalAlign" => "bottom", "xHigh" => 15, "xLow" => 76, "yHigh" => 26];
        $this->assertEquals($res25, $obj->toArray());

        $obj->setYLow(39);

        $res26 = ["align" => "right", "allowOverlap" => 1, "backgroundColor" => "930f2a43179a7ae5fc25ed873223e99f", "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 36, "borderWidth" => 23, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "crop" => 1, "defer" => 1, "enabled" => 1, "format" => "1ddcb92ade31c8fbd370001f9b29a7d9", "formatter" => "f2ffc59487832cbad265a8fef2133592", "inside" => 0, "overflow" => "none", "padding" => 72, "rotation" => 49, "shadow" => 1, "shape" => "8c73a98a300905900337f535531dfca6", "style" => ["style" => "a1b01e734b573fca08eb1a65e6df9a38"], "useHTML" => 0, "verticalAlign" => "bottom", "xHigh" => 15, "xLow" => 76, "yHigh" => 26, "yLow" => 39];
        $this->assertEquals($res26, $obj->toArray());

        $obj->setZIndex(18);

        $res27 = ["align" => "right", "allowOverlap" => 1, "backgroundColor" => "930f2a43179a7ae5fc25ed873223e99f", "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 36, "borderWidth" => 23, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "crop" => 1, "defer" => 1, "enabled" => 1, "format" => "1ddcb92ade31c8fbd370001f9b29a7d9", "formatter" => "f2ffc59487832cbad265a8fef2133592", "inside" => 0, "overflow" => "none", "padding" => 72, "rotation" => 49, "shadow" => 1, "shape" => "8c73a98a300905900337f535531dfca6", "style" => ["style" => "a1b01e734b573fca08eb1a65e6df9a38"], "useHTML" => 0, "verticalAlign" => "bottom", "xHigh" => 15, "xLow" => 76, "yHigh" => 26, "yLow" => 39, "zIndex" => 18];
        $this->assertEquals($res27, $obj->toArray());
    }

}
