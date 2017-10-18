<?php

/*
 * This file is part of the WBWHighchartsBundle package.
 *
 * (c) 2017 NdC/WBW
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\HighchartsBundle\Tests\API\Chart\PlotOptions\Pyramid;

use PHPUnit_Framework_TestCase;

/**
 * Highcharts data labels test.
 *
 * @author NdC/WBW <https://github.com/webeweb/>
 * @package WBW\Bundle\HighchartsBundle\Tests\API\Chart\PlotOptions\Pyramid
 * @version 5.0.14
 */
final class HighchartsDataLabelsTest extends PHPUnit_Framework_TestCase {

    /**
     * Test the __construct() method.
     *
     * @return void
     */
    public function testConstructor() {

        $obj1 = new \WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\Pyramid\HighchartsDataLabels(true);

        $this->assertEquals(null, $obj1->getBackgroundColor(), "The method getBackgroundColor() does not return the expected value");
        $this->assertEquals(null, $obj1->getBorderColor(), "The method getBorderColor() does not return the expected value");
        $this->assertEquals(null, $obj1->getBorderRadius(), "The method getBorderRadius() does not return the expected value");
        $this->assertEquals(null, $obj1->getBorderWidth(), "The method getBorderWidth() does not return the expected value");
        $this->assertEquals(null, $obj1->getClassName(), "The method getClassName() does not return the expected value");
        $this->assertEquals(null, $obj1->getColor(), "The method getColor() does not return the expected value");
        $this->assertEquals(null, $obj1->getConnectorColor(), "The method getConnectorColor() does not return the expected value");
        $this->assertEquals(null, $obj1->getConnectorPadding(), "The method getConnectorPadding() does not return the expected value");
        $this->assertEquals(null, $obj1->getConnectorWidth(), "The method getConnectorWidth() does not return the expected value");
        $this->assertEquals(null, $obj1->getCrop(), "The method getCrop() does not return the expected value");
        $this->assertEquals(null, $obj1->getDefer(), "The method getDefer() does not return the expected value");
        $this->assertEquals(null, $obj1->getDistance(), "The method getDistance() does not return the expected value");
        $this->assertEquals(null, $obj1->getEnabled(), "The method getEnabled() does not return the expected value");
        $this->assertEquals(null, $obj1->getFormat(), "The method getFormat() does not return the expected value");
        $this->assertEquals(null, $obj1->getFormatter(), "The method getFormatter() does not return the expected value");
        $this->assertEquals(null, $obj1->getInside(), "The method getInside() does not return the expected value");
        $this->assertEquals(null, $obj1->getOverflow(), "The method getOverflow() does not return the expected value");
        $this->assertEquals(null, $obj1->getPadding(), "The method getPadding() does not return the expected value");
        $this->assertEquals(null, $obj1->getRotation(), "The method getRotation() does not return the expected value");
        $this->assertEquals(null, $obj1->getShadow(), "The method getShadow() does not return the expected value");
        $this->assertEquals(null, $obj1->getShape(), "The method getShape() does not return the expected value");
        $this->assertEquals(null, $obj1->getSoftConnector(), "The method getSoftConnector() does not return the expected value");
        $this->assertEquals(null, $obj1->getStyle(), "The method getStyle() does not return the expected value");
        $this->assertEquals(null, $obj1->getUseHTML(), "The method getUseHTML() does not return the expected value");
        $this->assertEquals(null, $obj1->getVerticalAlign(), "The method getVerticalAlign() does not return the expected value");
        $this->assertEquals(null, $obj1->getX(), "The method getX() does not return the expected value");
        $this->assertEquals(null, $obj1->getY(), "The method getY() does not return the expected value");
        $this->assertEquals(null, $obj1->getZIndex(), "The method getZIndex() does not return the expected value");

        $obj0 = new \WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\Pyramid\HighchartsDataLabels(false);

        $this->assertEquals(null, $obj0->getBackgroundColor(), "The method getBackgroundColor() does not return the expected value");
        $this->assertEquals(null, $obj0->getBorderColor(), "The method getBorderColor() does not return the expected value");
        $this->assertEquals(0, $obj0->getBorderRadius(), "The method getBorderRadius() does not return the expected value");
        $this->assertEquals(0, $obj0->getBorderWidth(), "The method getBorderWidth() does not return the expected value");
        $this->assertEquals(null, $obj0->getClassName(), "The method getClassName() does not return the expected value");
        $this->assertEquals(null, $obj0->getColor(), "The method getColor() does not return the expected value");
        $this->assertEquals("{point.color}", $obj0->getConnectorColor(), "The method getConnectorColor() does not return the expected value");
        $this->assertEquals(5, $obj0->getConnectorPadding(), "The method getConnectorPadding() does not return the expected value");
        $this->assertEquals(1, $obj0->getConnectorWidth(), "The method getConnectorWidth() does not return the expected value");
        $this->assertEquals(true, $obj0->getCrop(), "The method getCrop() does not return the expected value");
        $this->assertEquals(true, $obj0->getDefer(), "The method getDefer() does not return the expected value");
        $this->assertEquals(30, $obj0->getDistance(), "The method getDistance() does not return the expected value");
        $this->assertEquals(true, $obj0->getEnabled(), "The method getEnabled() does not return the expected value");
        $this->assertEquals("{y}", $obj0->getFormat(), "The method getFormat() does not return the expected value");
        $this->assertEquals(null, $obj0->getFormatter(), "The method getFormatter() does not return the expected value");
        $this->assertEquals(null, $obj0->getInside(), "The method getInside() does not return the expected value");
        $this->assertEquals("justify", $obj0->getOverflow(), "The method getOverflow() does not return the expected value");
        $this->assertEquals(5, $obj0->getPadding(), "The method getPadding() does not return the expected value");
        $this->assertEquals(0, $obj0->getRotation(), "The method getRotation() does not return the expected value");
        $this->assertEquals(false, $obj0->getShadow(), "The method getShadow() does not return the expected value");
        $this->assertEquals("square", $obj0->getShape(), "The method getShape() does not return the expected value");
        $this->assertEquals(true, $obj0->getSoftConnector(), "The method getSoftConnector() does not return the expected value");
        $this->assertEquals(["color" => "contrast", "fontSize" => "11px", "fontWeight" => "bold", "textOutline" => "1px contrast"], $obj0->getStyle(), "The method getStyle() does not return the expected value");
        $this->assertEquals(false, $obj0->getUseHTML(), "The method getUseHTML() does not return the expected value");
        $this->assertEquals(null, $obj0->getVerticalAlign(), "The method getVerticalAlign() does not return the expected value");
        $this->assertEquals(0, $obj0->getX(), "The method getX() does not return the expected value");
        $this->assertEquals(-6, $obj0->getY(), "The method getY() does not return the expected value");
        $this->assertEquals(6, $obj0->getZIndex(), "The method getZIndex() does not return the expected value");
    }

    /**
     * Test the jsonSerialize() method.
     *
     * @return void
     */
    public function testJsonSerialize() {

        $obj = new \WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\Pyramid\HighchartsDataLabels(true);

        $this->assertEquals([], $obj->jsonSerialize(), "The method jsonSerialize() does not return the expected value");
    }

    /**
     * Test the toArray() method.
     *
     * @return void
     */
    public function testToArray() {

        $obj = new \WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\Pyramid\HighchartsDataLabels(true);

        $obj->setBackgroundColor("930f2a43179a7ae5fc25ed873223e99f");

        $res1 = ["backgroundColor" => "930f2a43179a7ae5fc25ed873223e99f"];
        $this->assertEquals($res1, $obj->toArray(), "The method toArray() does not return the expected array with background color");

        $obj->setBorderColor("97da935a74593c55d78be9d1295aa994");

        $res2 = ["backgroundColor" => "930f2a43179a7ae5fc25ed873223e99f", "borderColor" => "97da935a74593c55d78be9d1295aa994"];
        $this->assertEquals($res2, $obj->toArray(), "The method toArray() does not return the expected array with border color");

        $obj->setBorderRadius(53);

        $res3 = ["backgroundColor" => "930f2a43179a7ae5fc25ed873223e99f", "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 53];
        $this->assertEquals($res3, $obj->toArray(), "The method toArray() does not return the expected array with border radius");

        $obj->setBorderWidth(32);

        $res4 = ["backgroundColor" => "930f2a43179a7ae5fc25ed873223e99f", "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 53, "borderWidth" => 32];
        $this->assertEquals($res4, $obj->toArray(), "The method toArray() does not return the expected array with border width");

        $obj->setClassName("6f66e878c62db60568a3487869695820");

        $res5 = ["backgroundColor" => "930f2a43179a7ae5fc25ed873223e99f", "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 53, "borderWidth" => 32, "className" => "6f66e878c62db60568a3487869695820"];
        $this->assertEquals($res5, $obj->toArray(), "The method toArray() does not return the expected array with class name");

        $obj->setColor("70dda5dfb8053dc6d1c492574bce9bfd");

        $res6 = ["backgroundColor" => "930f2a43179a7ae5fc25ed873223e99f", "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 53, "borderWidth" => 32, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd"];
        $this->assertEquals($res6, $obj->toArray(), "The method toArray() does not return the expected array with color");

        $obj->setConnectorColor("8bf77ed7251dc34fbae6786923398a9d");

        $res7 = ["backgroundColor" => "930f2a43179a7ae5fc25ed873223e99f", "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 53, "borderWidth" => 32, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "connectorColor" => "8bf77ed7251dc34fbae6786923398a9d"];
        $this->assertEquals($res7, $obj->toArray(), "The method toArray() does not return the expected array with connector color");

        $obj->setConnectorPadding(37);

        $res8 = ["backgroundColor" => "930f2a43179a7ae5fc25ed873223e99f", "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 53, "borderWidth" => 32, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "connectorColor" => "8bf77ed7251dc34fbae6786923398a9d", "connectorPadding" => 37];
        $this->assertEquals($res8, $obj->toArray(), "The method toArray() does not return the expected array with connector padding");

        $obj->setConnectorWidth(19);

        $res9 = ["backgroundColor" => "930f2a43179a7ae5fc25ed873223e99f", "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 53, "borderWidth" => 32, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "connectorColor" => "8bf77ed7251dc34fbae6786923398a9d", "connectorPadding" => 37, "connectorWidth" => 19];
        $this->assertEquals($res9, $obj->toArray(), "The method toArray() does not return the expected array with connector width");

        $obj->setCrop(1);

        $res10 = ["backgroundColor" => "930f2a43179a7ae5fc25ed873223e99f", "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 53, "borderWidth" => 32, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "connectorColor" => "8bf77ed7251dc34fbae6786923398a9d", "connectorPadding" => 37, "connectorWidth" => 19, "crop" => 1];
        $this->assertEquals($res10, $obj->toArray(), "The method toArray() does not return the expected array with crop");

        $obj->setDefer(1);

        $res11 = ["backgroundColor" => "930f2a43179a7ae5fc25ed873223e99f", "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 53, "borderWidth" => 32, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "connectorColor" => "8bf77ed7251dc34fbae6786923398a9d", "connectorPadding" => 37, "connectorWidth" => 19, "crop" => 1, "defer" => 1];
        $this->assertEquals($res11, $obj->toArray(), "The method toArray() does not return the expected array with defer");

        $obj->setDistance(78);

        $res12 = ["backgroundColor" => "930f2a43179a7ae5fc25ed873223e99f", "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 53, "borderWidth" => 32, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "connectorColor" => "8bf77ed7251dc34fbae6786923398a9d", "connectorPadding" => 37, "connectorWidth" => 19, "crop" => 1, "defer" => 1, "distance" => 78];
        $this->assertEquals($res12, $obj->toArray(), "The method toArray() does not return the expected array with distance");

        $obj->setEnabled(1);

        $res13 = ["backgroundColor" => "930f2a43179a7ae5fc25ed873223e99f", "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 53, "borderWidth" => 32, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "connectorColor" => "8bf77ed7251dc34fbae6786923398a9d", "connectorPadding" => 37, "connectorWidth" => 19, "crop" => 1, "defer" => 1, "distance" => 78, "enabled" => 1];
        $this->assertEquals($res13, $obj->toArray(), "The method toArray() does not return the expected array with enabled");

        $obj->setFormat("1ddcb92ade31c8fbd370001f9b29a7d9");

        $res14 = ["backgroundColor" => "930f2a43179a7ae5fc25ed873223e99f", "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 53, "borderWidth" => 32, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "connectorColor" => "8bf77ed7251dc34fbae6786923398a9d", "connectorPadding" => 37, "connectorWidth" => 19, "crop" => 1, "defer" => 1, "distance" => 78, "enabled" => 1, "format" => "1ddcb92ade31c8fbd370001f9b29a7d9"];
        $this->assertEquals($res14, $obj->toArray(), "The method toArray() does not return the expected array with format");

        $obj->setFormatter("f2ffc59487832cbad265a8fef2133592");

        $res15 = ["backgroundColor" => "930f2a43179a7ae5fc25ed873223e99f", "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 53, "borderWidth" => 32, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "connectorColor" => "8bf77ed7251dc34fbae6786923398a9d", "connectorPadding" => 37, "connectorWidth" => 19, "crop" => 1, "defer" => 1, "distance" => 78, "enabled" => 1, "format" => "1ddcb92ade31c8fbd370001f9b29a7d9", "formatter" => "f2ffc59487832cbad265a8fef2133592"];
        $this->assertEquals($res15, $obj->toArray(), "The method toArray() does not return the expected array with formatter");

        $obj->setInside(0);

        $res16 = ["backgroundColor" => "930f2a43179a7ae5fc25ed873223e99f", "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 53, "borderWidth" => 32, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "connectorColor" => "8bf77ed7251dc34fbae6786923398a9d", "connectorPadding" => 37, "connectorWidth" => 19, "crop" => 1, "defer" => 1, "distance" => 78, "enabled" => 1, "format" => "1ddcb92ade31c8fbd370001f9b29a7d9", "formatter" => "f2ffc59487832cbad265a8fef2133592", "inside" => 0];
        $this->assertEquals($res16, $obj->toArray(), "The method toArray() does not return the expected array with inside");

        $obj->setOverflow("none");

        $res17 = ["backgroundColor" => "930f2a43179a7ae5fc25ed873223e99f", "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 53, "borderWidth" => 32, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "connectorColor" => "8bf77ed7251dc34fbae6786923398a9d", "connectorPadding" => 37, "connectorWidth" => 19, "crop" => 1, "defer" => 1, "distance" => 78, "enabled" => 1, "format" => "1ddcb92ade31c8fbd370001f9b29a7d9", "formatter" => "f2ffc59487832cbad265a8fef2133592", "inside" => 0, "overflow" => "none"];
        $this->assertEquals($res17, $obj->toArray(), "The method toArray() does not return the expected array with overflow");

        $obj->setPadding(53);

        $res18 = ["backgroundColor" => "930f2a43179a7ae5fc25ed873223e99f", "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 53, "borderWidth" => 32, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "connectorColor" => "8bf77ed7251dc34fbae6786923398a9d", "connectorPadding" => 37, "connectorWidth" => 19, "crop" => 1, "defer" => 1, "distance" => 78, "enabled" => 1, "format" => "1ddcb92ade31c8fbd370001f9b29a7d9", "formatter" => "f2ffc59487832cbad265a8fef2133592", "inside" => 0, "overflow" => "none", "padding" => 53];
        $this->assertEquals($res18, $obj->toArray(), "The method toArray() does not return the expected array with padding");

        $obj->setRotation(50);

        $res19 = ["backgroundColor" => "930f2a43179a7ae5fc25ed873223e99f", "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 53, "borderWidth" => 32, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "connectorColor" => "8bf77ed7251dc34fbae6786923398a9d", "connectorPadding" => 37, "connectorWidth" => 19, "crop" => 1, "defer" => 1, "distance" => 78, "enabled" => 1, "format" => "1ddcb92ade31c8fbd370001f9b29a7d9", "formatter" => "f2ffc59487832cbad265a8fef2133592", "inside" => 0, "overflow" => "none", "padding" => 53, "rotation" => 50];
        $this->assertEquals($res19, $obj->toArray(), "The method toArray() does not return the expected array with rotation");

        $obj->setShadow(0);

        $res20 = ["backgroundColor" => "930f2a43179a7ae5fc25ed873223e99f", "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 53, "borderWidth" => 32, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "connectorColor" => "8bf77ed7251dc34fbae6786923398a9d", "connectorPadding" => 37, "connectorWidth" => 19, "crop" => 1, "defer" => 1, "distance" => 78, "enabled" => 1, "format" => "1ddcb92ade31c8fbd370001f9b29a7d9", "formatter" => "f2ffc59487832cbad265a8fef2133592", "inside" => 0, "overflow" => "none", "padding" => 53, "rotation" => 50, "shadow" => 0];
        $this->assertEquals($res20, $obj->toArray(), "The method toArray() does not return the expected array with shadow");

        $obj->setShape("8c73a98a300905900337f535531dfca6");

        $res21 = ["backgroundColor" => "930f2a43179a7ae5fc25ed873223e99f", "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 53, "borderWidth" => 32, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "connectorColor" => "8bf77ed7251dc34fbae6786923398a9d", "connectorPadding" => 37, "connectorWidth" => 19, "crop" => 1, "defer" => 1, "distance" => 78, "enabled" => 1, "format" => "1ddcb92ade31c8fbd370001f9b29a7d9", "formatter" => "f2ffc59487832cbad265a8fef2133592", "inside" => 0, "overflow" => "none", "padding" => 53, "rotation" => 50, "shadow" => 0, "shape" => "8c73a98a300905900337f535531dfca6"];
        $this->assertEquals($res21, $obj->toArray(), "The method toArray() does not return the expected array with shape");

        $obj->setSoftConnector(1);

        $res22 = ["backgroundColor" => "930f2a43179a7ae5fc25ed873223e99f", "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 53, "borderWidth" => 32, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "connectorColor" => "8bf77ed7251dc34fbae6786923398a9d", "connectorPadding" => 37, "connectorWidth" => 19, "crop" => 1, "defer" => 1, "distance" => 78, "enabled" => 1, "format" => "1ddcb92ade31c8fbd370001f9b29a7d9", "formatter" => "f2ffc59487832cbad265a8fef2133592", "inside" => 0, "overflow" => "none", "padding" => 53, "rotation" => 50, "shadow" => 0, "shape" => "8c73a98a300905900337f535531dfca6", "softConnector" => 1];
        $this->assertEquals($res22, $obj->toArray(), "The method toArray() does not return the expected array with soft connector");

        $obj->setStyle(["style" => "a1b01e734b573fca08eb1a65e6df9a38"]);

        $res23 = ["backgroundColor" => "930f2a43179a7ae5fc25ed873223e99f", "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 53, "borderWidth" => 32, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "connectorColor" => "8bf77ed7251dc34fbae6786923398a9d", "connectorPadding" => 37, "connectorWidth" => 19, "crop" => 1, "defer" => 1, "distance" => 78, "enabled" => 1, "format" => "1ddcb92ade31c8fbd370001f9b29a7d9", "formatter" => "f2ffc59487832cbad265a8fef2133592", "inside" => 0, "overflow" => "none", "padding" => 53, "rotation" => 50, "shadow" => 0, "shape" => "8c73a98a300905900337f535531dfca6", "softConnector" => 1, "style" => ["style" => "a1b01e734b573fca08eb1a65e6df9a38"]];
        $this->assertEquals($res23, $obj->toArray(), "The method toArray() does not return the expected array with style");

        $obj->setUseHTML(1);

        $res24 = ["backgroundColor" => "930f2a43179a7ae5fc25ed873223e99f", "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 53, "borderWidth" => 32, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "connectorColor" => "8bf77ed7251dc34fbae6786923398a9d", "connectorPadding" => 37, "connectorWidth" => 19, "crop" => 1, "defer" => 1, "distance" => 78, "enabled" => 1, "format" => "1ddcb92ade31c8fbd370001f9b29a7d9", "formatter" => "f2ffc59487832cbad265a8fef2133592", "inside" => 0, "overflow" => "none", "padding" => 53, "rotation" => 50, "shadow" => 0, "shape" => "8c73a98a300905900337f535531dfca6", "softConnector" => 1, "style" => ["style" => "a1b01e734b573fca08eb1a65e6df9a38"], "useHTML" => 1];
        $this->assertEquals($res24, $obj->toArray(), "The method toArray() does not return the expected array with use HTML");

        $obj->setVerticalAlign("bottom");

        $res25 = ["backgroundColor" => "930f2a43179a7ae5fc25ed873223e99f", "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 53, "borderWidth" => 32, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "connectorColor" => "8bf77ed7251dc34fbae6786923398a9d", "connectorPadding" => 37, "connectorWidth" => 19, "crop" => 1, "defer" => 1, "distance" => 78, "enabled" => 1, "format" => "1ddcb92ade31c8fbd370001f9b29a7d9", "formatter" => "f2ffc59487832cbad265a8fef2133592", "inside" => 0, "overflow" => "none", "padding" => 53, "rotation" => 50, "shadow" => 0, "shape" => "8c73a98a300905900337f535531dfca6", "softConnector" => 1, "style" => ["style" => "a1b01e734b573fca08eb1a65e6df9a38"], "useHTML" => 1, "verticalAlign" => "bottom"];
        $this->assertEquals($res25, $obj->toArray(), "The method toArray() does not return the expected array with vertical align");

        $obj->setX(91);

        $res26 = ["backgroundColor" => "930f2a43179a7ae5fc25ed873223e99f", "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 53, "borderWidth" => 32, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "connectorColor" => "8bf77ed7251dc34fbae6786923398a9d", "connectorPadding" => 37, "connectorWidth" => 19, "crop" => 1, "defer" => 1, "distance" => 78, "enabled" => 1, "format" => "1ddcb92ade31c8fbd370001f9b29a7d9", "formatter" => "f2ffc59487832cbad265a8fef2133592", "inside" => 0, "overflow" => "none", "padding" => 53, "rotation" => 50, "shadow" => 0, "shape" => "8c73a98a300905900337f535531dfca6", "softConnector" => 1, "style" => ["style" => "a1b01e734b573fca08eb1a65e6df9a38"], "useHTML" => 1, "verticalAlign" => "bottom", "x" => 91];
        $this->assertEquals($res26, $obj->toArray(), "The method toArray() does not return the expected array with x");

        $obj->setY(94);

        $res27 = ["backgroundColor" => "930f2a43179a7ae5fc25ed873223e99f", "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 53, "borderWidth" => 32, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "connectorColor" => "8bf77ed7251dc34fbae6786923398a9d", "connectorPadding" => 37, "connectorWidth" => 19, "crop" => 1, "defer" => 1, "distance" => 78, "enabled" => 1, "format" => "1ddcb92ade31c8fbd370001f9b29a7d9", "formatter" => "f2ffc59487832cbad265a8fef2133592", "inside" => 0, "overflow" => "none", "padding" => 53, "rotation" => 50, "shadow" => 0, "shape" => "8c73a98a300905900337f535531dfca6", "softConnector" => 1, "style" => ["style" => "a1b01e734b573fca08eb1a65e6df9a38"], "useHTML" => 1, "verticalAlign" => "bottom", "x" => 91, "y" => 94];
        $this->assertEquals($res27, $obj->toArray(), "The method toArray() does not return the expected array with y");

        $obj->setZIndex(15);

        $res28 = ["backgroundColor" => "930f2a43179a7ae5fc25ed873223e99f", "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 53, "borderWidth" => 32, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "connectorColor" => "8bf77ed7251dc34fbae6786923398a9d", "connectorPadding" => 37, "connectorWidth" => 19, "crop" => 1, "defer" => 1, "distance" => 78, "enabled" => 1, "format" => "1ddcb92ade31c8fbd370001f9b29a7d9", "formatter" => "f2ffc59487832cbad265a8fef2133592", "inside" => 0, "overflow" => "none", "padding" => 53, "rotation" => 50, "shadow" => 0, "shape" => "8c73a98a300905900337f535531dfca6", "softConnector" => 1, "style" => ["style" => "a1b01e734b573fca08eb1a65e6df9a38"], "useHTML" => 1, "verticalAlign" => "bottom", "x" => 91, "y" => 94, "zIndex" => 15];
        $this->assertEquals($res28, $obj->toArray(), "The method toArray() does not return the expected array with z index");
    }

}
