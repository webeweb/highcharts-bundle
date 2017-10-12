<?php

/*
 * This file is part of the WBWHighchartsBundle package.
 *
 * (c) 2017 WBW
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\HighchartsBundle\Tests\API\Chart\Series\Spline;

use PHPUnit_Framework_TestCase;

/**
 * Highcharts data labels test.
 *
 * @author WBW <https://github.com/webeweb/WBWHighchartsBundle>
 * @package WBW\HighchartsBundle\Tests\API\Chart\Series\Spline
 * @version 5.0.14
 */
final class HighchartsDataLabelsTest extends PHPUnit_Framework_TestCase {

	/**
	 * Test the __construct() method.
	 *
	 * @return void
	 */
	public function testConstructor() {

		$obj1 = new \WBW\HighchartsBundle\API\Chart\Series\Spline\HighchartsDataLabels(true);

		$this->assertEquals(null, $obj1->getAlign(), "The method getAlign() does not return the expected value");
		$this->assertEquals(null, $obj1->getAllowOverlap(), "The method getAllowOverlap() does not return the expected value");
		$this->assertEquals(null, $obj1->getBackgroundColor(), "The method getBackgroundColor() does not return the expected value");
		$this->assertEquals(null, $obj1->getBorderColor(), "The method getBorderColor() does not return the expected value");
		$this->assertEquals(null, $obj1->getBorderRadius(), "The method getBorderRadius() does not return the expected value");
		$this->assertEquals(null, $obj1->getBorderWidth(), "The method getBorderWidth() does not return the expected value");
		$this->assertEquals(null, $obj1->getClassName(), "The method getClassName() does not return the expected value");
		$this->assertEquals(null, $obj1->getColor(), "The method getColor() does not return the expected value");
		$this->assertEquals(null, $obj1->getCrop(), "The method getCrop() does not return the expected value");
		$this->assertEquals(null, $obj1->getDefer(), "The method getDefer() does not return the expected value");
		$this->assertEquals(null, $obj1->getEnabled(), "The method getEnabled() does not return the expected value");
		$this->assertEquals(null, $obj1->getFormat(), "The method getFormat() does not return the expected value");
		$this->assertEquals(null, $obj1->getFormatter(), "The method getFormatter() does not return the expected value");
		$this->assertEquals(null, $obj1->getInside(), "The method getInside() does not return the expected value");
		$this->assertEquals(null, $obj1->getOverflow(), "The method getOverflow() does not return the expected value");
		$this->assertEquals(null, $obj1->getPadding(), "The method getPadding() does not return the expected value");
		$this->assertEquals(null, $obj1->getRotation(), "The method getRotation() does not return the expected value");
		$this->assertEquals(null, $obj1->getShadow(), "The method getShadow() does not return the expected value");
		$this->assertEquals(null, $obj1->getShape(), "The method getShape() does not return the expected value");
		$this->assertEquals(null, $obj1->getStyle(), "The method getStyle() does not return the expected value");
		$this->assertEquals(null, $obj1->getUseHTML(), "The method getUseHTML() does not return the expected value");
		$this->assertEquals(null, $obj1->getVerticalAlign(), "The method getVerticalAlign() does not return the expected value");
		$this->assertEquals(null, $obj1->getX(), "The method getX() does not return the expected value");
		$this->assertEquals(null, $obj1->getY(), "The method getY() does not return the expected value");
		$this->assertEquals(null, $obj1->getZIndex(), "The method getZIndex() does not return the expected value");

		$obj0 = new \WBW\HighchartsBundle\API\Chart\Series\Spline\HighchartsDataLabels(false);

		$this->assertEquals("center", $obj0->getAlign(), "The method getAlign() does not return the expected value");
		$this->assertEquals(false, $obj0->getAllowOverlap(), "The method getAllowOverlap() does not return the expected value");
		$this->assertEquals(null, $obj0->getBackgroundColor(), "The method getBackgroundColor() does not return the expected value");
		$this->assertEquals(null, $obj0->getBorderColor(), "The method getBorderColor() does not return the expected value");
		$this->assertEquals(0, $obj0->getBorderRadius(), "The method getBorderRadius() does not return the expected value");
		$this->assertEquals(0, $obj0->getBorderWidth(), "The method getBorderWidth() does not return the expected value");
		$this->assertEquals(null, $obj0->getClassName(), "The method getClassName() does not return the expected value");
		$this->assertEquals(null, $obj0->getColor(), "The method getColor() does not return the expected value");
		$this->assertEquals(true, $obj0->getCrop(), "The method getCrop() does not return the expected value");
		$this->assertEquals(true, $obj0->getDefer(), "The method getDefer() does not return the expected value");
		$this->assertEquals(false, $obj0->getEnabled(), "The method getEnabled() does not return the expected value");
		$this->assertEquals("{y}", $obj0->getFormat(), "The method getFormat() does not return the expected value");
		$this->assertEquals(null, $obj0->getFormatter(), "The method getFormatter() does not return the expected value");
		$this->assertEquals(null, $obj0->getInside(), "The method getInside() does not return the expected value");
		$this->assertEquals("justify", $obj0->getOverflow(), "The method getOverflow() does not return the expected value");
		$this->assertEquals(5, $obj0->getPadding(), "The method getPadding() does not return the expected value");
		$this->assertEquals(0, $obj0->getRotation(), "The method getRotation() does not return the expected value");
		$this->assertEquals(false, $obj0->getShadow(), "The method getShadow() does not return the expected value");
		$this->assertEquals("square", $obj0->getShape(), "The method getShape() does not return the expected value");
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

		$obj = new \WBW\HighchartsBundle\API\Chart\Series\Spline\HighchartsDataLabels(true);

		$this->assertEquals([], $obj->jsonSerialize(), "The method jsonSerialize() does not return the expected value");
	}

	/**
	 * Test the toArray() method.
	 *
	 * @return void
	 */
	public function testToArray() {

		$obj = new \WBW\HighchartsBundle\API\Chart\Series\Spline\HighchartsDataLabels(true);

		$obj->setAlign("right");

		$res1 = ["align" => "right"];
		$this->assertEquals($res1, $obj->toArray(), "The method toArray() does not return the expected array with align");

		$obj->setAllowOverlap(0);

		$res2 = ["align" => "right", "allowOverlap" => 0];
		$this->assertEquals($res2, $obj->toArray(), "The method toArray() does not return the expected array with allow overlap");

		$obj->setBackgroundColor("930f2a43179a7ae5fc25ed873223e99f");

		$res3 = ["align" => "right", "allowOverlap" => 0, "backgroundColor" => "930f2a43179a7ae5fc25ed873223e99f"];
		$this->assertEquals($res3, $obj->toArray(), "The method toArray() does not return the expected array with background color");

		$obj->setBorderColor("97da935a74593c55d78be9d1295aa994");

		$res4 = ["align" => "right", "allowOverlap" => 0, "backgroundColor" => "930f2a43179a7ae5fc25ed873223e99f", "borderColor" => "97da935a74593c55d78be9d1295aa994"];
		$this->assertEquals($res4, $obj->toArray(), "The method toArray() does not return the expected array with border color");

		$obj->setBorderRadius(68);

		$res5 = ["align" => "right", "allowOverlap" => 0, "backgroundColor" => "930f2a43179a7ae5fc25ed873223e99f", "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 68];
		$this->assertEquals($res5, $obj->toArray(), "The method toArray() does not return the expected array with border radius");

		$obj->setBorderWidth(48);

		$res6 = ["align" => "right", "allowOverlap" => 0, "backgroundColor" => "930f2a43179a7ae5fc25ed873223e99f", "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 68, "borderWidth" => 48];
		$this->assertEquals($res6, $obj->toArray(), "The method toArray() does not return the expected array with border width");

		$obj->setClassName("6f66e878c62db60568a3487869695820");

		$res7 = ["align" => "right", "allowOverlap" => 0, "backgroundColor" => "930f2a43179a7ae5fc25ed873223e99f", "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 68, "borderWidth" => 48, "className" => "6f66e878c62db60568a3487869695820"];
		$this->assertEquals($res7, $obj->toArray(), "The method toArray() does not return the expected array with class name");

		$obj->setColor("70dda5dfb8053dc6d1c492574bce9bfd");

		$res8 = ["align" => "right", "allowOverlap" => 0, "backgroundColor" => "930f2a43179a7ae5fc25ed873223e99f", "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 68, "borderWidth" => 48, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd"];
		$this->assertEquals($res8, $obj->toArray(), "The method toArray() does not return the expected array with color");

		$obj->setCrop(1);

		$res9 = ["align" => "right", "allowOverlap" => 0, "backgroundColor" => "930f2a43179a7ae5fc25ed873223e99f", "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 68, "borderWidth" => 48, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "crop" => 1];
		$this->assertEquals($res9, $obj->toArray(), "The method toArray() does not return the expected array with crop");

		$obj->setDefer(0);

		$res10 = ["align" => "right", "allowOverlap" => 0, "backgroundColor" => "930f2a43179a7ae5fc25ed873223e99f", "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 68, "borderWidth" => 48, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "crop" => 1, "defer" => 0];
		$this->assertEquals($res10, $obj->toArray(), "The method toArray() does not return the expected array with defer");

		$obj->setEnabled(0);

		$res11 = ["align" => "right", "allowOverlap" => 0, "backgroundColor" => "930f2a43179a7ae5fc25ed873223e99f", "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 68, "borderWidth" => 48, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "crop" => 1, "defer" => 0, "enabled" => 0];
		$this->assertEquals($res11, $obj->toArray(), "The method toArray() does not return the expected array with enabled");

		$obj->setFormat("1ddcb92ade31c8fbd370001f9b29a7d9");

		$res12 = ["align" => "right", "allowOverlap" => 0, "backgroundColor" => "930f2a43179a7ae5fc25ed873223e99f", "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 68, "borderWidth" => 48, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "crop" => 1, "defer" => 0, "enabled" => 0, "format" => "1ddcb92ade31c8fbd370001f9b29a7d9"];
		$this->assertEquals($res12, $obj->toArray(), "The method toArray() does not return the expected array with format");

		$obj->setFormatter("f2ffc59487832cbad265a8fef2133592");

		$res13 = ["align" => "right", "allowOverlap" => 0, "backgroundColor" => "930f2a43179a7ae5fc25ed873223e99f", "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 68, "borderWidth" => 48, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "crop" => 1, "defer" => 0, "enabled" => 0, "format" => "1ddcb92ade31c8fbd370001f9b29a7d9", "formatter" => "f2ffc59487832cbad265a8fef2133592"];
		$this->assertEquals($res13, $obj->toArray(), "The method toArray() does not return the expected array with formatter");

		$obj->setInside(1);

		$res14 = ["align" => "right", "allowOverlap" => 0, "backgroundColor" => "930f2a43179a7ae5fc25ed873223e99f", "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 68, "borderWidth" => 48, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "crop" => 1, "defer" => 0, "enabled" => 0, "format" => "1ddcb92ade31c8fbd370001f9b29a7d9", "formatter" => "f2ffc59487832cbad265a8fef2133592", "inside" => 1];
		$this->assertEquals($res14, $obj->toArray(), "The method toArray() does not return the expected array with inside");

		$obj->setOverflow("none");

		$res15 = ["align" => "right", "allowOverlap" => 0, "backgroundColor" => "930f2a43179a7ae5fc25ed873223e99f", "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 68, "borderWidth" => 48, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "crop" => 1, "defer" => 0, "enabled" => 0, "format" => "1ddcb92ade31c8fbd370001f9b29a7d9", "formatter" => "f2ffc59487832cbad265a8fef2133592", "inside" => 1, "overflow" => "none"];
		$this->assertEquals($res15, $obj->toArray(), "The method toArray() does not return the expected array with overflow");

		$obj->setPadding(4);

		$res16 = ["align" => "right", "allowOverlap" => 0, "backgroundColor" => "930f2a43179a7ae5fc25ed873223e99f", "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 68, "borderWidth" => 48, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "crop" => 1, "defer" => 0, "enabled" => 0, "format" => "1ddcb92ade31c8fbd370001f9b29a7d9", "formatter" => "f2ffc59487832cbad265a8fef2133592", "inside" => 1, "overflow" => "none", "padding" => 4];
		$this->assertEquals($res16, $obj->toArray(), "The method toArray() does not return the expected array with padding");

		$obj->setRotation(78);

		$res17 = ["align" => "right", "allowOverlap" => 0, "backgroundColor" => "930f2a43179a7ae5fc25ed873223e99f", "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 68, "borderWidth" => 48, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "crop" => 1, "defer" => 0, "enabled" => 0, "format" => "1ddcb92ade31c8fbd370001f9b29a7d9", "formatter" => "f2ffc59487832cbad265a8fef2133592", "inside" => 1, "overflow" => "none", "padding" => 4, "rotation" => 78];
		$this->assertEquals($res17, $obj->toArray(), "The method toArray() does not return the expected array with rotation");

		$obj->setShadow(1);

		$res18 = ["align" => "right", "allowOverlap" => 0, "backgroundColor" => "930f2a43179a7ae5fc25ed873223e99f", "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 68, "borderWidth" => 48, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "crop" => 1, "defer" => 0, "enabled" => 0, "format" => "1ddcb92ade31c8fbd370001f9b29a7d9", "formatter" => "f2ffc59487832cbad265a8fef2133592", "inside" => 1, "overflow" => "none", "padding" => 4, "rotation" => 78, "shadow" => 1];
		$this->assertEquals($res18, $obj->toArray(), "The method toArray() does not return the expected array with shadow");

		$obj->setShape("8c73a98a300905900337f535531dfca6");

		$res19 = ["align" => "right", "allowOverlap" => 0, "backgroundColor" => "930f2a43179a7ae5fc25ed873223e99f", "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 68, "borderWidth" => 48, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "crop" => 1, "defer" => 0, "enabled" => 0, "format" => "1ddcb92ade31c8fbd370001f9b29a7d9", "formatter" => "f2ffc59487832cbad265a8fef2133592", "inside" => 1, "overflow" => "none", "padding" => 4, "rotation" => 78, "shadow" => 1, "shape" => "8c73a98a300905900337f535531dfca6"];
		$this->assertEquals($res19, $obj->toArray(), "The method toArray() does not return the expected array with shape");

		$obj->setStyle(["style" => "a1b01e734b573fca08eb1a65e6df9a38"]);

		$res20 = ["align" => "right", "allowOverlap" => 0, "backgroundColor" => "930f2a43179a7ae5fc25ed873223e99f", "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 68, "borderWidth" => 48, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "crop" => 1, "defer" => 0, "enabled" => 0, "format" => "1ddcb92ade31c8fbd370001f9b29a7d9", "formatter" => "f2ffc59487832cbad265a8fef2133592", "inside" => 1, "overflow" => "none", "padding" => 4, "rotation" => 78, "shadow" => 1, "shape" => "8c73a98a300905900337f535531dfca6", "style" => ["style" => "a1b01e734b573fca08eb1a65e6df9a38"]];
		$this->assertEquals($res20, $obj->toArray(), "The method toArray() does not return the expected array with style");

		$obj->setUseHTML(0);

		$res21 = ["align" => "right", "allowOverlap" => 0, "backgroundColor" => "930f2a43179a7ae5fc25ed873223e99f", "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 68, "borderWidth" => 48, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "crop" => 1, "defer" => 0, "enabled" => 0, "format" => "1ddcb92ade31c8fbd370001f9b29a7d9", "formatter" => "f2ffc59487832cbad265a8fef2133592", "inside" => 1, "overflow" => "none", "padding" => 4, "rotation" => 78, "shadow" => 1, "shape" => "8c73a98a300905900337f535531dfca6", "style" => ["style" => "a1b01e734b573fca08eb1a65e6df9a38"], "useHTML" => 0];
		$this->assertEquals($res21, $obj->toArray(), "The method toArray() does not return the expected array with use HTML");

		$obj->setVerticalAlign("bottom");

		$res22 = ["align" => "right", "allowOverlap" => 0, "backgroundColor" => "930f2a43179a7ae5fc25ed873223e99f", "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 68, "borderWidth" => 48, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "crop" => 1, "defer" => 0, "enabled" => 0, "format" => "1ddcb92ade31c8fbd370001f9b29a7d9", "formatter" => "f2ffc59487832cbad265a8fef2133592", "inside" => 1, "overflow" => "none", "padding" => 4, "rotation" => 78, "shadow" => 1, "shape" => "8c73a98a300905900337f535531dfca6", "style" => ["style" => "a1b01e734b573fca08eb1a65e6df9a38"], "useHTML" => 0, "verticalAlign" => "bottom"];
		$this->assertEquals($res22, $obj->toArray(), "The method toArray() does not return the expected array with vertical align");

		$obj->setX(3);

		$res23 = ["align" => "right", "allowOverlap" => 0, "backgroundColor" => "930f2a43179a7ae5fc25ed873223e99f", "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 68, "borderWidth" => 48, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "crop" => 1, "defer" => 0, "enabled" => 0, "format" => "1ddcb92ade31c8fbd370001f9b29a7d9", "formatter" => "f2ffc59487832cbad265a8fef2133592", "inside" => 1, "overflow" => "none", "padding" => 4, "rotation" => 78, "shadow" => 1, "shape" => "8c73a98a300905900337f535531dfca6", "style" => ["style" => "a1b01e734b573fca08eb1a65e6df9a38"], "useHTML" => 0, "verticalAlign" => "bottom", "x" => 3];
		$this->assertEquals($res23, $obj->toArray(), "The method toArray() does not return the expected array with x");

		$obj->setY(86);

		$res24 = ["align" => "right", "allowOverlap" => 0, "backgroundColor" => "930f2a43179a7ae5fc25ed873223e99f", "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 68, "borderWidth" => 48, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "crop" => 1, "defer" => 0, "enabled" => 0, "format" => "1ddcb92ade31c8fbd370001f9b29a7d9", "formatter" => "f2ffc59487832cbad265a8fef2133592", "inside" => 1, "overflow" => "none", "padding" => 4, "rotation" => 78, "shadow" => 1, "shape" => "8c73a98a300905900337f535531dfca6", "style" => ["style" => "a1b01e734b573fca08eb1a65e6df9a38"], "useHTML" => 0, "verticalAlign" => "bottom", "x" => 3, "y" => 86];
		$this->assertEquals($res24, $obj->toArray(), "The method toArray() does not return the expected array with y");

		$obj->setZIndex(34);

		$res25 = ["align" => "right", "allowOverlap" => 0, "backgroundColor" => "930f2a43179a7ae5fc25ed873223e99f", "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 68, "borderWidth" => 48, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "crop" => 1, "defer" => 0, "enabled" => 0, "format" => "1ddcb92ade31c8fbd370001f9b29a7d9", "formatter" => "f2ffc59487832cbad265a8fef2133592", "inside" => 1, "overflow" => "none", "padding" => 4, "rotation" => 78, "shadow" => 1, "shape" => "8c73a98a300905900337f535531dfca6", "style" => ["style" => "a1b01e734b573fca08eb1a65e6df9a38"], "useHTML" => 0, "verticalAlign" => "bottom", "x" => 3, "y" => 86, "zIndex" => 34];
		$this->assertEquals($res25, $obj->toArray(), "The method toArray() does not return the expected array with z index");
	}

}
