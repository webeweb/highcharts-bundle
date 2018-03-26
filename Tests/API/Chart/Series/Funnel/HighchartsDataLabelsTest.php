<?php

/**
 * This file is part of the highcharts-bundle package.
 *
 * (c) 2017 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\HighchartsBundle\Tests\API\Chart\Series\Funnel;

use PHPUnit_Framework_TestCase;

/**
 * Highcharts data labels test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\HighchartsBundle\Tests\API\Chart\Series\Funnel
 * @version 5.0.14
 */
final class HighchartsDataLabelsTest extends PHPUnit_Framework_TestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstructor() {

        $obj1 = new \WBW\Bundle\HighchartsBundle\API\Chart\Series\Funnel\HighchartsDataLabels(true);

        $this->assertNull($obj1->getBackgroundColor());
        $this->assertNull($obj1->getBorderColor());
        $this->assertNull($obj1->getBorderRadius());
        $this->assertNull($obj1->getBorderWidth());
        $this->assertNull($obj1->getClassName());
        $this->assertNull($obj1->getColor());
        $this->assertNull($obj1->getConnectorColor());
        $this->assertNull($obj1->getConnectorPadding());
        $this->assertNull($obj1->getConnectorWidth());
        $this->assertNull($obj1->getCrop());
        $this->assertNull($obj1->getDefer());
        $this->assertNull($obj1->getDistance());
        $this->assertNull($obj1->getEnabled());
        $this->assertNull($obj1->getFormat());
        $this->assertNull($obj1->getFormatter());
        $this->assertNull($obj1->getInside());
        $this->assertNull($obj1->getOverflow());
        $this->assertNull($obj1->getPadding());
        $this->assertNull($obj1->getRotation());
        $this->assertNull($obj1->getShadow());
        $this->assertNull($obj1->getShape());
        $this->assertNull($obj1->getSoftConnector());
        $this->assertNull($obj1->getStyle());
        $this->assertNull($obj1->getUseHTML());
        $this->assertNull($obj1->getVerticalAlign());
        $this->assertNull($obj1->getX());
        $this->assertNull($obj1->getY());
        $this->assertNull($obj1->getZIndex());

        $obj0 = new \WBW\Bundle\HighchartsBundle\API\Chart\Series\Funnel\HighchartsDataLabels(false);

        $this->assertNull($obj0->getBackgroundColor());
        $this->assertNull($obj0->getBorderColor());
        $this->assertEquals(0, $obj0->getBorderRadius());
        $this->assertEquals(0, $obj0->getBorderWidth());
        $this->assertNull($obj0->getClassName());
        $this->assertNull($obj0->getColor());
        $this->assertEquals("{point.color}", $obj0->getConnectorColor());
        $this->assertEquals(5, $obj0->getConnectorPadding());
        $this->assertEquals(1, $obj0->getConnectorWidth());
        $this->assertEquals(true, $obj0->getCrop());
        $this->assertEquals(true, $obj0->getDefer());
        $this->assertEquals(30, $obj0->getDistance());
        $this->assertEquals(true, $obj0->getEnabled());
        $this->assertEquals("{y}", $obj0->getFormat());
        $this->assertNull($obj0->getFormatter());
        $this->assertNull($obj0->getInside());
        $this->assertEquals("justify", $obj0->getOverflow());
        $this->assertEquals(5, $obj0->getPadding());
        $this->assertEquals(0, $obj0->getRotation());
        $this->assertEquals(false, $obj0->getShadow());
        $this->assertEquals("square", $obj0->getShape());
        $this->assertEquals(true, $obj0->getSoftConnector());
        $this->assertEquals(["color" => "contrast", "fontSize" => "11px", "fontWeight" => "bold", "textOutline" => "1px contrast"], $obj0->getStyle());
        $this->assertEquals(false, $obj0->getUseHTML());
        $this->assertNull($obj0->getVerticalAlign());
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

        $obj = new \WBW\Bundle\HighchartsBundle\API\Chart\Series\Funnel\HighchartsDataLabels(true);

        $this->assertEquals([], $obj->jsonSerialize());
    }

    /**
     * Tests the toArray() method.
     *
     * @return void
     */
    public function testToArray() {

        $obj = new \WBW\Bundle\HighchartsBundle\API\Chart\Series\Funnel\HighchartsDataLabels(true);

        $obj->setBackgroundColor("930f2a43179a7ae5fc25ed873223e99f");

        $res1 = ["backgroundColor" => "930f2a43179a7ae5fc25ed873223e99f"];
        $this->assertEquals($res1, $obj->toArray());

        $obj->setBorderColor("97da935a74593c55d78be9d1295aa994");

        $res2 = ["backgroundColor" => "930f2a43179a7ae5fc25ed873223e99f", "borderColor" => "97da935a74593c55d78be9d1295aa994"];
        $this->assertEquals($res2, $obj->toArray());

        $obj->setBorderRadius(99);

        $res3 = ["backgroundColor" => "930f2a43179a7ae5fc25ed873223e99f", "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 99];
        $this->assertEquals($res3, $obj->toArray());

        $obj->setBorderWidth(15);

        $res4 = ["backgroundColor" => "930f2a43179a7ae5fc25ed873223e99f", "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 99, "borderWidth" => 15];
        $this->assertEquals($res4, $obj->toArray());

        $obj->setClassName("6f66e878c62db60568a3487869695820");

        $res5 = ["backgroundColor" => "930f2a43179a7ae5fc25ed873223e99f", "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 99, "borderWidth" => 15, "className" => "6f66e878c62db60568a3487869695820"];
        $this->assertEquals($res5, $obj->toArray());

        $obj->setColor("70dda5dfb8053dc6d1c492574bce9bfd");

        $res6 = ["backgroundColor" => "930f2a43179a7ae5fc25ed873223e99f", "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 99, "borderWidth" => 15, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd"];
        $this->assertEquals($res6, $obj->toArray());

        $obj->setConnectorColor("8bf77ed7251dc34fbae6786923398a9d");

        $res7 = ["backgroundColor" => "930f2a43179a7ae5fc25ed873223e99f", "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 99, "borderWidth" => 15, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "connectorColor" => "8bf77ed7251dc34fbae6786923398a9d"];
        $this->assertEquals($res7, $obj->toArray());

        $obj->setConnectorPadding(100);

        $res8 = ["backgroundColor" => "930f2a43179a7ae5fc25ed873223e99f", "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 99, "borderWidth" => 15, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "connectorColor" => "8bf77ed7251dc34fbae6786923398a9d", "connectorPadding" => 100];
        $this->assertEquals($res8, $obj->toArray());

        $obj->setConnectorWidth(54);

        $res9 = ["backgroundColor" => "930f2a43179a7ae5fc25ed873223e99f", "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 99, "borderWidth" => 15, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "connectorColor" => "8bf77ed7251dc34fbae6786923398a9d", "connectorPadding" => 100, "connectorWidth" => 54];
        $this->assertEquals($res9, $obj->toArray());

        $obj->setCrop(1);

        $res10 = ["backgroundColor" => "930f2a43179a7ae5fc25ed873223e99f", "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 99, "borderWidth" => 15, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "connectorColor" => "8bf77ed7251dc34fbae6786923398a9d", "connectorPadding" => 100, "connectorWidth" => 54, "crop" => 1];
        $this->assertEquals($res10, $obj->toArray());

        $obj->setDefer(1);

        $res11 = ["backgroundColor" => "930f2a43179a7ae5fc25ed873223e99f", "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 99, "borderWidth" => 15, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "connectorColor" => "8bf77ed7251dc34fbae6786923398a9d", "connectorPadding" => 100, "connectorWidth" => 54, "crop" => 1, "defer" => 1];
        $this->assertEquals($res11, $obj->toArray());

        $obj->setDistance(36);

        $res12 = ["backgroundColor" => "930f2a43179a7ae5fc25ed873223e99f", "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 99, "borderWidth" => 15, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "connectorColor" => "8bf77ed7251dc34fbae6786923398a9d", "connectorPadding" => 100, "connectorWidth" => 54, "crop" => 1, "defer" => 1, "distance" => 36];
        $this->assertEquals($res12, $obj->toArray());

        $obj->setEnabled(0);

        $res13 = ["backgroundColor" => "930f2a43179a7ae5fc25ed873223e99f", "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 99, "borderWidth" => 15, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "connectorColor" => "8bf77ed7251dc34fbae6786923398a9d", "connectorPadding" => 100, "connectorWidth" => 54, "crop" => 1, "defer" => 1, "distance" => 36, "enabled" => 0];
        $this->assertEquals($res13, $obj->toArray());

        $obj->setFormat("1ddcb92ade31c8fbd370001f9b29a7d9");

        $res14 = ["backgroundColor" => "930f2a43179a7ae5fc25ed873223e99f", "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 99, "borderWidth" => 15, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "connectorColor" => "8bf77ed7251dc34fbae6786923398a9d", "connectorPadding" => 100, "connectorWidth" => 54, "crop" => 1, "defer" => 1, "distance" => 36, "enabled" => 0, "format" => "1ddcb92ade31c8fbd370001f9b29a7d9"];
        $this->assertEquals($res14, $obj->toArray());

        $obj->setFormatter("f2ffc59487832cbad265a8fef2133592");

        $res15 = ["backgroundColor" => "930f2a43179a7ae5fc25ed873223e99f", "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 99, "borderWidth" => 15, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "connectorColor" => "8bf77ed7251dc34fbae6786923398a9d", "connectorPadding" => 100, "connectorWidth" => 54, "crop" => 1, "defer" => 1, "distance" => 36, "enabled" => 0, "format" => "1ddcb92ade31c8fbd370001f9b29a7d9", "formatter" => "f2ffc59487832cbad265a8fef2133592"];
        $this->assertEquals($res15, $obj->toArray());

        $obj->setInside(1);

        $res16 = ["backgroundColor" => "930f2a43179a7ae5fc25ed873223e99f", "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 99, "borderWidth" => 15, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "connectorColor" => "8bf77ed7251dc34fbae6786923398a9d", "connectorPadding" => 100, "connectorWidth" => 54, "crop" => 1, "defer" => 1, "distance" => 36, "enabled" => 0, "format" => "1ddcb92ade31c8fbd370001f9b29a7d9", "formatter" => "f2ffc59487832cbad265a8fef2133592", "inside" => 1];
        $this->assertEquals($res16, $obj->toArray());

        $obj->setOverflow("none");

        $res17 = ["backgroundColor" => "930f2a43179a7ae5fc25ed873223e99f", "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 99, "borderWidth" => 15, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "connectorColor" => "8bf77ed7251dc34fbae6786923398a9d", "connectorPadding" => 100, "connectorWidth" => 54, "crop" => 1, "defer" => 1, "distance" => 36, "enabled" => 0, "format" => "1ddcb92ade31c8fbd370001f9b29a7d9", "formatter" => "f2ffc59487832cbad265a8fef2133592", "inside" => 1, "overflow" => "none"];
        $this->assertEquals($res17, $obj->toArray());

        $obj->setPadding(88);

        $res18 = ["backgroundColor" => "930f2a43179a7ae5fc25ed873223e99f", "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 99, "borderWidth" => 15, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "connectorColor" => "8bf77ed7251dc34fbae6786923398a9d", "connectorPadding" => 100, "connectorWidth" => 54, "crop" => 1, "defer" => 1, "distance" => 36, "enabled" => 0, "format" => "1ddcb92ade31c8fbd370001f9b29a7d9", "formatter" => "f2ffc59487832cbad265a8fef2133592", "inside" => 1, "overflow" => "none", "padding" => 88];
        $this->assertEquals($res18, $obj->toArray());

        $obj->setRotation(23);

        $res19 = ["backgroundColor" => "930f2a43179a7ae5fc25ed873223e99f", "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 99, "borderWidth" => 15, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "connectorColor" => "8bf77ed7251dc34fbae6786923398a9d", "connectorPadding" => 100, "connectorWidth" => 54, "crop" => 1, "defer" => 1, "distance" => 36, "enabled" => 0, "format" => "1ddcb92ade31c8fbd370001f9b29a7d9", "formatter" => "f2ffc59487832cbad265a8fef2133592", "inside" => 1, "overflow" => "none", "padding" => 88, "rotation" => 23];
        $this->assertEquals($res19, $obj->toArray());

        $obj->setShadow(1);

        $res20 = ["backgroundColor" => "930f2a43179a7ae5fc25ed873223e99f", "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 99, "borderWidth" => 15, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "connectorColor" => "8bf77ed7251dc34fbae6786923398a9d", "connectorPadding" => 100, "connectorWidth" => 54, "crop" => 1, "defer" => 1, "distance" => 36, "enabled" => 0, "format" => "1ddcb92ade31c8fbd370001f9b29a7d9", "formatter" => "f2ffc59487832cbad265a8fef2133592", "inside" => 1, "overflow" => "none", "padding" => 88, "rotation" => 23, "shadow" => 1];
        $this->assertEquals($res20, $obj->toArray());

        $obj->setShape("8c73a98a300905900337f535531dfca6");

        $res21 = ["backgroundColor" => "930f2a43179a7ae5fc25ed873223e99f", "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 99, "borderWidth" => 15, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "connectorColor" => "8bf77ed7251dc34fbae6786923398a9d", "connectorPadding" => 100, "connectorWidth" => 54, "crop" => 1, "defer" => 1, "distance" => 36, "enabled" => 0, "format" => "1ddcb92ade31c8fbd370001f9b29a7d9", "formatter" => "f2ffc59487832cbad265a8fef2133592", "inside" => 1, "overflow" => "none", "padding" => 88, "rotation" => 23, "shadow" => 1, "shape" => "8c73a98a300905900337f535531dfca6"];
        $this->assertEquals($res21, $obj->toArray());

        $obj->setSoftConnector(1);

        $res22 = ["backgroundColor" => "930f2a43179a7ae5fc25ed873223e99f", "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 99, "borderWidth" => 15, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "connectorColor" => "8bf77ed7251dc34fbae6786923398a9d", "connectorPadding" => 100, "connectorWidth" => 54, "crop" => 1, "defer" => 1, "distance" => 36, "enabled" => 0, "format" => "1ddcb92ade31c8fbd370001f9b29a7d9", "formatter" => "f2ffc59487832cbad265a8fef2133592", "inside" => 1, "overflow" => "none", "padding" => 88, "rotation" => 23, "shadow" => 1, "shape" => "8c73a98a300905900337f535531dfca6", "softConnector" => 1];
        $this->assertEquals($res22, $obj->toArray());

        $obj->setStyle(["style" => "a1b01e734b573fca08eb1a65e6df9a38"]);

        $res23 = ["backgroundColor" => "930f2a43179a7ae5fc25ed873223e99f", "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 99, "borderWidth" => 15, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "connectorColor" => "8bf77ed7251dc34fbae6786923398a9d", "connectorPadding" => 100, "connectorWidth" => 54, "crop" => 1, "defer" => 1, "distance" => 36, "enabled" => 0, "format" => "1ddcb92ade31c8fbd370001f9b29a7d9", "formatter" => "f2ffc59487832cbad265a8fef2133592", "inside" => 1, "overflow" => "none", "padding" => 88, "rotation" => 23, "shadow" => 1, "shape" => "8c73a98a300905900337f535531dfca6", "softConnector" => 1, "style" => ["style" => "a1b01e734b573fca08eb1a65e6df9a38"]];
        $this->assertEquals($res23, $obj->toArray());

        $obj->setUseHTML(0);

        $res24 = ["backgroundColor" => "930f2a43179a7ae5fc25ed873223e99f", "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 99, "borderWidth" => 15, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "connectorColor" => "8bf77ed7251dc34fbae6786923398a9d", "connectorPadding" => 100, "connectorWidth" => 54, "crop" => 1, "defer" => 1, "distance" => 36, "enabled" => 0, "format" => "1ddcb92ade31c8fbd370001f9b29a7d9", "formatter" => "f2ffc59487832cbad265a8fef2133592", "inside" => 1, "overflow" => "none", "padding" => 88, "rotation" => 23, "shadow" => 1, "shape" => "8c73a98a300905900337f535531dfca6", "softConnector" => 1, "style" => ["style" => "a1b01e734b573fca08eb1a65e6df9a38"], "useHTML" => 0];
        $this->assertEquals($res24, $obj->toArray());

        $obj->setVerticalAlign("bottom");

        $res25 = ["backgroundColor" => "930f2a43179a7ae5fc25ed873223e99f", "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 99, "borderWidth" => 15, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "connectorColor" => "8bf77ed7251dc34fbae6786923398a9d", "connectorPadding" => 100, "connectorWidth" => 54, "crop" => 1, "defer" => 1, "distance" => 36, "enabled" => 0, "format" => "1ddcb92ade31c8fbd370001f9b29a7d9", "formatter" => "f2ffc59487832cbad265a8fef2133592", "inside" => 1, "overflow" => "none", "padding" => 88, "rotation" => 23, "shadow" => 1, "shape" => "8c73a98a300905900337f535531dfca6", "softConnector" => 1, "style" => ["style" => "a1b01e734b573fca08eb1a65e6df9a38"], "useHTML" => 0, "verticalAlign" => "bottom"];
        $this->assertEquals($res25, $obj->toArray());

        $obj->setX(78);

        $res26 = ["backgroundColor" => "930f2a43179a7ae5fc25ed873223e99f", "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 99, "borderWidth" => 15, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "connectorColor" => "8bf77ed7251dc34fbae6786923398a9d", "connectorPadding" => 100, "connectorWidth" => 54, "crop" => 1, "defer" => 1, "distance" => 36, "enabled" => 0, "format" => "1ddcb92ade31c8fbd370001f9b29a7d9", "formatter" => "f2ffc59487832cbad265a8fef2133592", "inside" => 1, "overflow" => "none", "padding" => 88, "rotation" => 23, "shadow" => 1, "shape" => "8c73a98a300905900337f535531dfca6", "softConnector" => 1, "style" => ["style" => "a1b01e734b573fca08eb1a65e6df9a38"], "useHTML" => 0, "verticalAlign" => "bottom", "x" => 78];
        $this->assertEquals($res26, $obj->toArray());

        $obj->setY(26);

        $res27 = ["backgroundColor" => "930f2a43179a7ae5fc25ed873223e99f", "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 99, "borderWidth" => 15, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "connectorColor" => "8bf77ed7251dc34fbae6786923398a9d", "connectorPadding" => 100, "connectorWidth" => 54, "crop" => 1, "defer" => 1, "distance" => 36, "enabled" => 0, "format" => "1ddcb92ade31c8fbd370001f9b29a7d9", "formatter" => "f2ffc59487832cbad265a8fef2133592", "inside" => 1, "overflow" => "none", "padding" => 88, "rotation" => 23, "shadow" => 1, "shape" => "8c73a98a300905900337f535531dfca6", "softConnector" => 1, "style" => ["style" => "a1b01e734b573fca08eb1a65e6df9a38"], "useHTML" => 0, "verticalAlign" => "bottom", "x" => 78, "y" => 26];
        $this->assertEquals($res27, $obj->toArray());

        $obj->setZIndex(47);

        $res28 = ["backgroundColor" => "930f2a43179a7ae5fc25ed873223e99f", "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 99, "borderWidth" => 15, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "connectorColor" => "8bf77ed7251dc34fbae6786923398a9d", "connectorPadding" => 100, "connectorWidth" => 54, "crop" => 1, "defer" => 1, "distance" => 36, "enabled" => 0, "format" => "1ddcb92ade31c8fbd370001f9b29a7d9", "formatter" => "f2ffc59487832cbad265a8fef2133592", "inside" => 1, "overflow" => "none", "padding" => 88, "rotation" => 23, "shadow" => 1, "shape" => "8c73a98a300905900337f535531dfca6", "softConnector" => 1, "style" => ["style" => "a1b01e734b573fca08eb1a65e6df9a38"], "useHTML" => 0, "verticalAlign" => "bottom", "x" => 78, "y" => 26, "zIndex" => 47];
        $this->assertEquals($res28, $obj->toArray());
    }

}
