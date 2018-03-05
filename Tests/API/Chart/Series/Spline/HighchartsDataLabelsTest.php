<?php

/**
 * This file is part of the highcharts-bundle package.
 *
 * (c) 2017 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\HighchartsBundle\Tests\API\Chart\Series\Spline;

use PHPUnit_Framework_TestCase;

/**
 * Highcharts data labels test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\HighchartsBundle\Tests\API\Chart\Series\Spline
 * @version 5.0.14
 */
final class HighchartsDataLabelsTest extends PHPUnit_Framework_TestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstructor() {

        $obj1 = new \WBW\Bundle\HighchartsBundle\API\Chart\Series\Spline\HighchartsDataLabels(true);

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
        $this->assertEquals(null, $obj1->getX());
        $this->assertEquals(null, $obj1->getY());
        $this->assertEquals(null, $obj1->getZIndex());

        $obj0 = new \WBW\Bundle\HighchartsBundle\API\Chart\Series\Spline\HighchartsDataLabels(false);

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
        $this->assertEquals(0, $obj0->getX());
        $this->assertEquals(-6, $obj0->getY());
        $this->assertEquals(6, $obj0->getZIndex());
    }

    /**
     * Tests the jsonSerialize() method.
     *
     * @return void
     */
    public function testJsonSerialize() {

        $obj = new \WBW\Bundle\HighchartsBundle\API\Chart\Series\Spline\HighchartsDataLabels(true);

        $this->assertEquals([], $obj->jsonSerialize());
    }

    /**
     * Tests the toArray() method.
     *
     * @return void
     */
    public function testToArray() {

        $obj = new \WBW\Bundle\HighchartsBundle\API\Chart\Series\Spline\HighchartsDataLabels(true);

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

        $obj->setBorderRadius(10);

        $res5 = ["align" => "right", "allowOverlap" => 0, "backgroundColor" => "930f2a43179a7ae5fc25ed873223e99f", "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 10];
        $this->assertEquals($res5, $obj->toArray());

        $obj->setBorderWidth(59);

        $res6 = ["align" => "right", "allowOverlap" => 0, "backgroundColor" => "930f2a43179a7ae5fc25ed873223e99f", "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 10, "borderWidth" => 59];
        $this->assertEquals($res6, $obj->toArray());

        $obj->setClassName("6f66e878c62db60568a3487869695820");

        $res7 = ["align" => "right", "allowOverlap" => 0, "backgroundColor" => "930f2a43179a7ae5fc25ed873223e99f", "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 10, "borderWidth" => 59, "className" => "6f66e878c62db60568a3487869695820"];
        $this->assertEquals($res7, $obj->toArray());

        $obj->setColor("70dda5dfb8053dc6d1c492574bce9bfd");

        $res8 = ["align" => "right", "allowOverlap" => 0, "backgroundColor" => "930f2a43179a7ae5fc25ed873223e99f", "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 10, "borderWidth" => 59, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd"];
        $this->assertEquals($res8, $obj->toArray());

        $obj->setCrop(0);

        $res9 = ["align" => "right", "allowOverlap" => 0, "backgroundColor" => "930f2a43179a7ae5fc25ed873223e99f", "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 10, "borderWidth" => 59, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "crop" => 0];
        $this->assertEquals($res9, $obj->toArray());

        $obj->setDefer(1);

        $res10 = ["align" => "right", "allowOverlap" => 0, "backgroundColor" => "930f2a43179a7ae5fc25ed873223e99f", "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 10, "borderWidth" => 59, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "crop" => 0, "defer" => 1];
        $this->assertEquals($res10, $obj->toArray());

        $obj->setEnabled(1);

        $res11 = ["align" => "right", "allowOverlap" => 0, "backgroundColor" => "930f2a43179a7ae5fc25ed873223e99f", "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 10, "borderWidth" => 59, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "crop" => 0, "defer" => 1, "enabled" => 1];
        $this->assertEquals($res11, $obj->toArray());

        $obj->setFormat("1ddcb92ade31c8fbd370001f9b29a7d9");

        $res12 = ["align" => "right", "allowOverlap" => 0, "backgroundColor" => "930f2a43179a7ae5fc25ed873223e99f", "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 10, "borderWidth" => 59, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "crop" => 0, "defer" => 1, "enabled" => 1, "format" => "1ddcb92ade31c8fbd370001f9b29a7d9"];
        $this->assertEquals($res12, $obj->toArray());

        $obj->setFormatter("f2ffc59487832cbad265a8fef2133592");

        $res13 = ["align" => "right", "allowOverlap" => 0, "backgroundColor" => "930f2a43179a7ae5fc25ed873223e99f", "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 10, "borderWidth" => 59, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "crop" => 0, "defer" => 1, "enabled" => 1, "format" => "1ddcb92ade31c8fbd370001f9b29a7d9", "formatter" => "f2ffc59487832cbad265a8fef2133592"];
        $this->assertEquals($res13, $obj->toArray());

        $obj->setInside(1);

        $res14 = ["align" => "right", "allowOverlap" => 0, "backgroundColor" => "930f2a43179a7ae5fc25ed873223e99f", "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 10, "borderWidth" => 59, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "crop" => 0, "defer" => 1, "enabled" => 1, "format" => "1ddcb92ade31c8fbd370001f9b29a7d9", "formatter" => "f2ffc59487832cbad265a8fef2133592", "inside" => 1];
        $this->assertEquals($res14, $obj->toArray());

        $obj->setOverflow("none");

        $res15 = ["align" => "right", "allowOverlap" => 0, "backgroundColor" => "930f2a43179a7ae5fc25ed873223e99f", "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 10, "borderWidth" => 59, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "crop" => 0, "defer" => 1, "enabled" => 1, "format" => "1ddcb92ade31c8fbd370001f9b29a7d9", "formatter" => "f2ffc59487832cbad265a8fef2133592", "inside" => 1, "overflow" => "none"];
        $this->assertEquals($res15, $obj->toArray());

        $obj->setPadding(30);

        $res16 = ["align" => "right", "allowOverlap" => 0, "backgroundColor" => "930f2a43179a7ae5fc25ed873223e99f", "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 10, "borderWidth" => 59, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "crop" => 0, "defer" => 1, "enabled" => 1, "format" => "1ddcb92ade31c8fbd370001f9b29a7d9", "formatter" => "f2ffc59487832cbad265a8fef2133592", "inside" => 1, "overflow" => "none", "padding" => 30];
        $this->assertEquals($res16, $obj->toArray());

        $obj->setRotation(25);

        $res17 = ["align" => "right", "allowOverlap" => 0, "backgroundColor" => "930f2a43179a7ae5fc25ed873223e99f", "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 10, "borderWidth" => 59, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "crop" => 0, "defer" => 1, "enabled" => 1, "format" => "1ddcb92ade31c8fbd370001f9b29a7d9", "formatter" => "f2ffc59487832cbad265a8fef2133592", "inside" => 1, "overflow" => "none", "padding" => 30, "rotation" => 25];
        $this->assertEquals($res17, $obj->toArray());

        $obj->setShadow(0);

        $res18 = ["align" => "right", "allowOverlap" => 0, "backgroundColor" => "930f2a43179a7ae5fc25ed873223e99f", "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 10, "borderWidth" => 59, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "crop" => 0, "defer" => 1, "enabled" => 1, "format" => "1ddcb92ade31c8fbd370001f9b29a7d9", "formatter" => "f2ffc59487832cbad265a8fef2133592", "inside" => 1, "overflow" => "none", "padding" => 30, "rotation" => 25, "shadow" => 0];
        $this->assertEquals($res18, $obj->toArray());

        $obj->setShape("8c73a98a300905900337f535531dfca6");

        $res19 = ["align" => "right", "allowOverlap" => 0, "backgroundColor" => "930f2a43179a7ae5fc25ed873223e99f", "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 10, "borderWidth" => 59, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "crop" => 0, "defer" => 1, "enabled" => 1, "format" => "1ddcb92ade31c8fbd370001f9b29a7d9", "formatter" => "f2ffc59487832cbad265a8fef2133592", "inside" => 1, "overflow" => "none", "padding" => 30, "rotation" => 25, "shadow" => 0, "shape" => "8c73a98a300905900337f535531dfca6"];
        $this->assertEquals($res19, $obj->toArray());

        $obj->setStyle(["style" => "a1b01e734b573fca08eb1a65e6df9a38"]);

        $res20 = ["align" => "right", "allowOverlap" => 0, "backgroundColor" => "930f2a43179a7ae5fc25ed873223e99f", "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 10, "borderWidth" => 59, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "crop" => 0, "defer" => 1, "enabled" => 1, "format" => "1ddcb92ade31c8fbd370001f9b29a7d9", "formatter" => "f2ffc59487832cbad265a8fef2133592", "inside" => 1, "overflow" => "none", "padding" => 30, "rotation" => 25, "shadow" => 0, "shape" => "8c73a98a300905900337f535531dfca6", "style" => ["style" => "a1b01e734b573fca08eb1a65e6df9a38"]];
        $this->assertEquals($res20, $obj->toArray());

        $obj->setUseHTML(1);

        $res21 = ["align" => "right", "allowOverlap" => 0, "backgroundColor" => "930f2a43179a7ae5fc25ed873223e99f", "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 10, "borderWidth" => 59, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "crop" => 0, "defer" => 1, "enabled" => 1, "format" => "1ddcb92ade31c8fbd370001f9b29a7d9", "formatter" => "f2ffc59487832cbad265a8fef2133592", "inside" => 1, "overflow" => "none", "padding" => 30, "rotation" => 25, "shadow" => 0, "shape" => "8c73a98a300905900337f535531dfca6", "style" => ["style" => "a1b01e734b573fca08eb1a65e6df9a38"], "useHTML" => 1];
        $this->assertEquals($res21, $obj->toArray());

        $obj->setVerticalAlign("bottom");

        $res22 = ["align" => "right", "allowOverlap" => 0, "backgroundColor" => "930f2a43179a7ae5fc25ed873223e99f", "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 10, "borderWidth" => 59, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "crop" => 0, "defer" => 1, "enabled" => 1, "format" => "1ddcb92ade31c8fbd370001f9b29a7d9", "formatter" => "f2ffc59487832cbad265a8fef2133592", "inside" => 1, "overflow" => "none", "padding" => 30, "rotation" => 25, "shadow" => 0, "shape" => "8c73a98a300905900337f535531dfca6", "style" => ["style" => "a1b01e734b573fca08eb1a65e6df9a38"], "useHTML" => 1, "verticalAlign" => "bottom"];
        $this->assertEquals($res22, $obj->toArray());

        $obj->setX(13);

        $res23 = ["align" => "right", "allowOverlap" => 0, "backgroundColor" => "930f2a43179a7ae5fc25ed873223e99f", "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 10, "borderWidth" => 59, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "crop" => 0, "defer" => 1, "enabled" => 1, "format" => "1ddcb92ade31c8fbd370001f9b29a7d9", "formatter" => "f2ffc59487832cbad265a8fef2133592", "inside" => 1, "overflow" => "none", "padding" => 30, "rotation" => 25, "shadow" => 0, "shape" => "8c73a98a300905900337f535531dfca6", "style" => ["style" => "a1b01e734b573fca08eb1a65e6df9a38"], "useHTML" => 1, "verticalAlign" => "bottom", "x" => 13];
        $this->assertEquals($res23, $obj->toArray());

        $obj->setY(23);

        $res24 = ["align" => "right", "allowOverlap" => 0, "backgroundColor" => "930f2a43179a7ae5fc25ed873223e99f", "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 10, "borderWidth" => 59, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "crop" => 0, "defer" => 1, "enabled" => 1, "format" => "1ddcb92ade31c8fbd370001f9b29a7d9", "formatter" => "f2ffc59487832cbad265a8fef2133592", "inside" => 1, "overflow" => "none", "padding" => 30, "rotation" => 25, "shadow" => 0, "shape" => "8c73a98a300905900337f535531dfca6", "style" => ["style" => "a1b01e734b573fca08eb1a65e6df9a38"], "useHTML" => 1, "verticalAlign" => "bottom", "x" => 13, "y" => 23];
        $this->assertEquals($res24, $obj->toArray());

        $obj->setZIndex(66);

        $res25 = ["align" => "right", "allowOverlap" => 0, "backgroundColor" => "930f2a43179a7ae5fc25ed873223e99f", "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 10, "borderWidth" => 59, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "crop" => 0, "defer" => 1, "enabled" => 1, "format" => "1ddcb92ade31c8fbd370001f9b29a7d9", "formatter" => "f2ffc59487832cbad265a8fef2133592", "inside" => 1, "overflow" => "none", "padding" => 30, "rotation" => 25, "shadow" => 0, "shape" => "8c73a98a300905900337f535531dfca6", "style" => ["style" => "a1b01e734b573fca08eb1a65e6df9a38"], "useHTML" => 1, "verticalAlign" => "bottom", "x" => 13, "y" => 23, "zIndex" => 66];
        $this->assertEquals($res25, $obj->toArray());
    }

}
