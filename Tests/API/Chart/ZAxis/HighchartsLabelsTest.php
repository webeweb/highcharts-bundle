<?php

/*
 * This file is part of the WBWHighchartsBundle package.
 *
 * (c) 2017 WBW
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\HighchartsBundle\Tests\API\Chart\ZAxis;

use PHPUnit_Framework_TestCase;

/**
 * Highcharts labels test.
 *
 * @author WBW <https://github.com/webeweb/WBWHighchartsBundle>
 * @package WBW\HighchartsBundle\Tests\API\Chart\ZAxis
 * @version 5.0.14
 */
final class HighchartsLabelsTest extends PHPUnit_Framework_TestCase {

	/**
	 * Test the __construct() method.
	 *
	 * @return void
	 */
	public function testConstructor() {

		$obj1 = new \WBW\HighchartsBundle\API\Chart\ZAxis\HighchartsLabels(true);

		$this->assertEquals(null, $obj1->getAlign(), "The method getAlign() does not return the expected value");
		$this->assertEquals(null, $obj1->getAutoRotation(), "The method getAutoRotation() does not return the expected value");
		$this->assertEquals(null, $obj1->getAutoRotationLimit(), "The method getAutoRotationLimit() does not return the expected value");
		$this->assertEquals(null, $obj1->getDistance(), "The method getDistance() does not return the expected value");
		$this->assertEquals(null, $obj1->getEnabled(), "The method getEnabled() does not return the expected value");
		$this->assertEquals(null, $obj1->getFormat(), "The method getFormat() does not return the expected value");
		$this->assertEquals(null, $obj1->getFormatter(), "The method getFormatter() does not return the expected value");
		$this->assertEquals(null, $obj1->getOverflow(), "The method getOverflow() does not return the expected value");
		$this->assertEquals(null, $obj1->getPadding(), "The method getPadding() does not return the expected value");
		$this->assertEquals(null, $obj1->getReserveSpace(), "The method getReserveSpace() does not return the expected value");
		$this->assertEquals(null, $obj1->getRotation(), "The method getRotation() does not return the expected value");
		$this->assertEquals(null, $obj1->getStaggerLines(), "The method getStaggerLines() does not return the expected value");
		$this->assertEquals(null, $obj1->getStep(), "The method getStep() does not return the expected value");
		$this->assertEquals(null, $obj1->getStyle(), "The method getStyle() does not return the expected value");
		$this->assertEquals(null, $obj1->getUseHTML(), "The method getUseHTML() does not return the expected value");
		$this->assertEquals(null, $obj1->getX(), "The method getX() does not return the expected value");
		$this->assertEquals(null, $obj1->getY(), "The method getY() does not return the expected value");
		$this->assertEquals(null, $obj1->getZIndex(), "The method getZIndex() does not return the expected value");

		$obj0 = new \WBW\HighchartsBundle\API\Chart\ZAxis\HighchartsLabels(false);

		$this->assertEquals(null, $obj0->getAlign(), "The method getAlign() does not return the expected value");
		$this->assertEquals([-45], $obj0->getAutoRotation(), "The method getAutoRotation() does not return the expected value");
		$this->assertEquals(80, $obj0->getAutoRotationLimit(), "The method getAutoRotationLimit() does not return the expected value");
		$this->assertEquals(15, $obj0->getDistance(), "The method getDistance() does not return the expected value");
		$this->assertEquals(true, $obj0->getEnabled(), "The method getEnabled() does not return the expected value");
		$this->assertEquals("{value}", $obj0->getFormat(), "The method getFormat() does not return the expected value");
		$this->assertEquals(null, $obj0->getFormatter(), "The method getFormatter() does not return the expected value");
		$this->assertEquals(null, $obj0->getOverflow(), "The method getOverflow() does not return the expected value");
		$this->assertEquals(5, $obj0->getPadding(), "The method getPadding() does not return the expected value");
		$this->assertEquals(true, $obj0->getReserveSpace(), "The method getReserveSpace() does not return the expected value");
		$this->assertEquals(0, $obj0->getRotation(), "The method getRotation() does not return the expected value");
		$this->assertEquals(null, $obj0->getStaggerLines(), "The method getStaggerLines() does not return the expected value");
		$this->assertEquals(null, $obj0->getStep(), "The method getStep() does not return the expected value");
		$this->assertEquals(["color" => "#666666", "cursor" => "default", "fontSize" => "11px"], $obj0->getStyle(), "The method getStyle() does not return the expected value");
		$this->assertEquals(false, $obj0->getUseHTML(), "The method getUseHTML() does not return the expected value");
		$this->assertEquals(0, $obj0->getX(), "The method getX() does not return the expected value");
		$this->assertEquals(null, $obj0->getY(), "The method getY() does not return the expected value");
		$this->assertEquals(7, $obj0->getZIndex(), "The method getZIndex() does not return the expected value");
	}

	/**
	 * Test the jsonSerialize() method.
	 *
	 * @return void
	 */
	public function testJsonSerialize() {

		$obj = new \WBW\HighchartsBundle\API\Chart\ZAxis\HighchartsLabels(true);

		$this->assertEquals([], $obj->jsonSerialize(), "The method jsonSerialize() does not return the expected value");
	}

	/**
	 * Test the toArray() method.
	 *
	 * @return void
	 */
	public function testToArray() {

		$obj = new \WBW\HighchartsBundle\API\Chart\ZAxis\HighchartsLabels(true);

		$obj->setAlign("right");

		$res1 = ["align" => "right"];
		$this->assertEquals($res1, $obj->toArray(), "The method toArray() does not return the expected array with align");

		$obj->setAutoRotation(["autoRotation" => "df2870a8069e229823782cfb008a95ed"]);

		$res2 = ["align" => "right", "autoRotation" => ["autoRotation" => "df2870a8069e229823782cfb008a95ed"]];
		$this->assertEquals($res2, $obj->toArray(), "The method toArray() does not return the expected array with auto rotation");

		$obj->setAutoRotationLimit(53);

		$res3 = ["align" => "right", "autoRotation" => ["autoRotation" => "df2870a8069e229823782cfb008a95ed"], "autoRotationLimit" => 53];
		$this->assertEquals($res3, $obj->toArray(), "The method toArray() does not return the expected array with auto rotation limit");

		$obj->setDistance(68);

		$res4 = ["align" => "right", "autoRotation" => ["autoRotation" => "df2870a8069e229823782cfb008a95ed"], "autoRotationLimit" => 53, "distance" => 68];
		$this->assertEquals($res4, $obj->toArray(), "The method toArray() does not return the expected array with distance");

		$obj->setEnabled(0);

		$res5 = ["align" => "right", "autoRotation" => ["autoRotation" => "df2870a8069e229823782cfb008a95ed"], "autoRotationLimit" => 53, "distance" => 68, "enabled" => 0];
		$this->assertEquals($res5, $obj->toArray(), "The method toArray() does not return the expected array with enabled");

		$obj->setFormat("1ddcb92ade31c8fbd370001f9b29a7d9");

		$res6 = ["align" => "right", "autoRotation" => ["autoRotation" => "df2870a8069e229823782cfb008a95ed"], "autoRotationLimit" => 53, "distance" => 68, "enabled" => 0, "format" => "1ddcb92ade31c8fbd370001f9b29a7d9"];
		$this->assertEquals($res6, $obj->toArray(), "The method toArray() does not return the expected array with format");

		$obj->setFormatter("f2ffc59487832cbad265a8fef2133592");

		$res7 = ["align" => "right", "autoRotation" => ["autoRotation" => "df2870a8069e229823782cfb008a95ed"], "autoRotationLimit" => 53, "distance" => 68, "enabled" => 0, "format" => "1ddcb92ade31c8fbd370001f9b29a7d9", "formatter" => "f2ffc59487832cbad265a8fef2133592"];
		$this->assertEquals($res7, $obj->toArray(), "The method toArray() does not return the expected array with formatter");

		$obj->setOverflow("justify");

		$res8 = ["align" => "right", "autoRotation" => ["autoRotation" => "df2870a8069e229823782cfb008a95ed"], "autoRotationLimit" => 53, "distance" => 68, "enabled" => 0, "format" => "1ddcb92ade31c8fbd370001f9b29a7d9", "formatter" => "f2ffc59487832cbad265a8fef2133592", "overflow" => "justify"];
		$this->assertEquals($res8, $obj->toArray(), "The method toArray() does not return the expected array with overflow");

		$obj->setPadding(42);

		$res9 = ["align" => "right", "autoRotation" => ["autoRotation" => "df2870a8069e229823782cfb008a95ed"], "autoRotationLimit" => 53, "distance" => 68, "enabled" => 0, "format" => "1ddcb92ade31c8fbd370001f9b29a7d9", "formatter" => "f2ffc59487832cbad265a8fef2133592", "overflow" => "justify", "padding" => 42];
		$this->assertEquals($res9, $obj->toArray(), "The method toArray() does not return the expected array with padding");

		$obj->setReserveSpace(1);

		$res10 = ["align" => "right", "autoRotation" => ["autoRotation" => "df2870a8069e229823782cfb008a95ed"], "autoRotationLimit" => 53, "distance" => 68, "enabled" => 0, "format" => "1ddcb92ade31c8fbd370001f9b29a7d9", "formatter" => "f2ffc59487832cbad265a8fef2133592", "overflow" => "justify", "padding" => 42, "reserveSpace" => 1];
		$this->assertEquals($res10, $obj->toArray(), "The method toArray() does not return the expected array with reserve space");

		$obj->setRotation(94);

		$res11 = ["align" => "right", "autoRotation" => ["autoRotation" => "df2870a8069e229823782cfb008a95ed"], "autoRotationLimit" => 53, "distance" => 68, "enabled" => 0, "format" => "1ddcb92ade31c8fbd370001f9b29a7d9", "formatter" => "f2ffc59487832cbad265a8fef2133592", "overflow" => "justify", "padding" => 42, "reserveSpace" => 1, "rotation" => 94];
		$this->assertEquals($res11, $obj->toArray(), "The method toArray() does not return the expected array with rotation");

		$obj->setStaggerLines(89);

		$res12 = ["align" => "right", "autoRotation" => ["autoRotation" => "df2870a8069e229823782cfb008a95ed"], "autoRotationLimit" => 53, "distance" => 68, "enabled" => 0, "format" => "1ddcb92ade31c8fbd370001f9b29a7d9", "formatter" => "f2ffc59487832cbad265a8fef2133592", "overflow" => "justify", "padding" => 42, "reserveSpace" => 1, "rotation" => 94, "staggerLines" => 89];
		$this->assertEquals($res12, $obj->toArray(), "The method toArray() does not return the expected array with stagger lines");

		$obj->setStep(2);

		$res13 = ["align" => "right", "autoRotation" => ["autoRotation" => "df2870a8069e229823782cfb008a95ed"], "autoRotationLimit" => 53, "distance" => 68, "enabled" => 0, "format" => "1ddcb92ade31c8fbd370001f9b29a7d9", "formatter" => "f2ffc59487832cbad265a8fef2133592", "overflow" => "justify", "padding" => 42, "reserveSpace" => 1, "rotation" => 94, "staggerLines" => 89, "step" => 2];
		$this->assertEquals($res13, $obj->toArray(), "The method toArray() does not return the expected array with step");

		$obj->setStyle(["style" => "a1b01e734b573fca08eb1a65e6df9a38"]);

		$res14 = ["align" => "right", "autoRotation" => ["autoRotation" => "df2870a8069e229823782cfb008a95ed"], "autoRotationLimit" => 53, "distance" => 68, "enabled" => 0, "format" => "1ddcb92ade31c8fbd370001f9b29a7d9", "formatter" => "f2ffc59487832cbad265a8fef2133592", "overflow" => "justify", "padding" => 42, "reserveSpace" => 1, "rotation" => 94, "staggerLines" => 89, "step" => 2, "style" => ["style" => "a1b01e734b573fca08eb1a65e6df9a38"]];
		$this->assertEquals($res14, $obj->toArray(), "The method toArray() does not return the expected array with style");

		$obj->setUseHTML(0);

		$res15 = ["align" => "right", "autoRotation" => ["autoRotation" => "df2870a8069e229823782cfb008a95ed"], "autoRotationLimit" => 53, "distance" => 68, "enabled" => 0, "format" => "1ddcb92ade31c8fbd370001f9b29a7d9", "formatter" => "f2ffc59487832cbad265a8fef2133592", "overflow" => "justify", "padding" => 42, "reserveSpace" => 1, "rotation" => 94, "staggerLines" => 89, "step" => 2, "style" => ["style" => "a1b01e734b573fca08eb1a65e6df9a38"], "useHTML" => 0];
		$this->assertEquals($res15, $obj->toArray(), "The method toArray() does not return the expected array with use HTML");

		$obj->setX(77);

		$res16 = ["align" => "right", "autoRotation" => ["autoRotation" => "df2870a8069e229823782cfb008a95ed"], "autoRotationLimit" => 53, "distance" => 68, "enabled" => 0, "format" => "1ddcb92ade31c8fbd370001f9b29a7d9", "formatter" => "f2ffc59487832cbad265a8fef2133592", "overflow" => "justify", "padding" => 42, "reserveSpace" => 1, "rotation" => 94, "staggerLines" => 89, "step" => 2, "style" => ["style" => "a1b01e734b573fca08eb1a65e6df9a38"], "useHTML" => 0, "x" => 77];
		$this->assertEquals($res16, $obj->toArray(), "The method toArray() does not return the expected array with x");

		$obj->setY(83);

		$res17 = ["align" => "right", "autoRotation" => ["autoRotation" => "df2870a8069e229823782cfb008a95ed"], "autoRotationLimit" => 53, "distance" => 68, "enabled" => 0, "format" => "1ddcb92ade31c8fbd370001f9b29a7d9", "formatter" => "f2ffc59487832cbad265a8fef2133592", "overflow" => "justify", "padding" => 42, "reserveSpace" => 1, "rotation" => 94, "staggerLines" => 89, "step" => 2, "style" => ["style" => "a1b01e734b573fca08eb1a65e6df9a38"], "useHTML" => 0, "x" => 77, "y" => 83];
		$this->assertEquals($res17, $obj->toArray(), "The method toArray() does not return the expected array with y");

		$obj->setZIndex(77);

		$res18 = ["align" => "right", "autoRotation" => ["autoRotation" => "df2870a8069e229823782cfb008a95ed"], "autoRotationLimit" => 53, "distance" => 68, "enabled" => 0, "format" => "1ddcb92ade31c8fbd370001f9b29a7d9", "formatter" => "f2ffc59487832cbad265a8fef2133592", "overflow" => "justify", "padding" => 42, "reserveSpace" => 1, "rotation" => 94, "staggerLines" => 89, "step" => 2, "style" => ["style" => "a1b01e734b573fca08eb1a65e6df9a38"], "useHTML" => 0, "x" => 77, "y" => 83, "zIndex" => 77];
		$this->assertEquals($res18, $obj->toArray(), "The method toArray() does not return the expected array with z index");
	}

}
