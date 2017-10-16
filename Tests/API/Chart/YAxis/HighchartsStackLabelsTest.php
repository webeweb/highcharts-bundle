<?php

/*
 * This file is part of the WBWHighchartsBundle package.
 *
 * (c) 2017 WBW
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\HighchartsBundle\Tests\API\Chart\YAxis;

use PHPUnit_Framework_TestCase;

/**
 * Highcharts stack labels test.
 *
 * @author WBW <https://github.com/webeweb/WBWHighchartsBundle>
 * @package WBW\HighchartsBundle\Tests\API\Chart\YAxis
 * @version 5.0.14
 */
final class HighchartsStackLabelsTest extends PHPUnit_Framework_TestCase {

	/**
	 * Test the __construct() method.
	 *
	 * @return void
	 */
	public function testConstructor() {

		$obj1 = new \WBW\HighchartsBundle\API\Chart\YAxis\HighchartsStackLabels(true);

		$this->assertEquals(null, $obj1->getAlign(), "The method getAlign() does not return the expected value");
		$this->assertEquals(null, $obj1->getEnabled(), "The method getEnabled() does not return the expected value");
		$this->assertEquals(null, $obj1->getFormat(), "The method getFormat() does not return the expected value");
		$this->assertEquals(null, $obj1->getFormatter(), "The method getFormatter() does not return the expected value");
		$this->assertEquals(null, $obj1->getRotation(), "The method getRotation() does not return the expected value");
		$this->assertEquals(null, $obj1->getStyle(), "The method getStyle() does not return the expected value");
		$this->assertEquals(null, $obj1->getTextAlign(), "The method getTextAlign() does not return the expected value");
		$this->assertEquals(null, $obj1->getUseHTML(), "The method getUseHTML() does not return the expected value");
		$this->assertEquals(null, $obj1->getVerticalAlign(), "The method getVerticalAlign() does not return the expected value");
		$this->assertEquals(null, $obj1->getX(), "The method getX() does not return the expected value");
		$this->assertEquals(null, $obj1->getY(), "The method getY() does not return the expected value");

		$obj0 = new \WBW\HighchartsBundle\API\Chart\YAxis\HighchartsStackLabels(false);

		$this->assertEquals(null, $obj0->getAlign(), "The method getAlign() does not return the expected value");
		$this->assertEquals(false, $obj0->getEnabled(), "The method getEnabled() does not return the expected value");
		$this->assertEquals("{total}", $obj0->getFormat(), "The method getFormat() does not return the expected value");
		$this->assertEquals(null, $obj0->getFormatter(), "The method getFormatter() does not return the expected value");
		$this->assertEquals(0, $obj0->getRotation(), "The method getRotation() does not return the expected value");
		$this->assertEquals(["color" => "#000000", "fontSize" => "11px", "fontWeight" => "bold", "textShadow" => "1px 1px contrast, -1px -1px contrast, -1px 1px contrast, 1px -1px contrast"], $obj0->getStyle(), "The method getStyle() does not return the expected value");
		$this->assertEquals(null, $obj0->getTextAlign(), "The method getTextAlign() does not return the expected value");
		$this->assertEquals(false, $obj0->getUseHTML(), "The method getUseHTML() does not return the expected value");
		$this->assertEquals(null, $obj0->getVerticalAlign(), "The method getVerticalAlign() does not return the expected value");
		$this->assertEquals(null, $obj0->getX(), "The method getX() does not return the expected value");
		$this->assertEquals(null, $obj0->getY(), "The method getY() does not return the expected value");
	}

	/**
	 * Test the jsonSerialize() method.
	 *
	 * @return void
	 */
	public function testJsonSerialize() {

		$obj = new \WBW\HighchartsBundle\API\Chart\YAxis\HighchartsStackLabels(true);

		$this->assertEquals([], $obj->jsonSerialize(), "The method jsonSerialize() does not return the expected value");
	}

	/**
	 * Test the toArray() method.
	 *
	 * @return void
	 */
	public function testToArray() {

		$obj = new \WBW\HighchartsBundle\API\Chart\YAxis\HighchartsStackLabels(true);

		$obj->setAlign("right");

		$res1 = ["align" => "right"];
		$this->assertEquals($res1, $obj->toArray(), "The method toArray() does not return the expected array with align");

		$obj->setEnabled(1);

		$res2 = ["align" => "right", "enabled" => 1];
		$this->assertEquals($res2, $obj->toArray(), "The method toArray() does not return the expected array with enabled");

		$obj->setFormat("1ddcb92ade31c8fbd370001f9b29a7d9");

		$res3 = ["align" => "right", "enabled" => 1, "format" => "1ddcb92ade31c8fbd370001f9b29a7d9"];
		$this->assertEquals($res3, $obj->toArray(), "The method toArray() does not return the expected array with format");

		$obj->setFormatter("f2ffc59487832cbad265a8fef2133592");

		$res4 = ["align" => "right", "enabled" => 1, "format" => "1ddcb92ade31c8fbd370001f9b29a7d9", "formatter" => "f2ffc59487832cbad265a8fef2133592"];
		$this->assertEquals($res4, $obj->toArray(), "The method toArray() does not return the expected array with formatter");

		$obj->setRotation(56);

		$res5 = ["align" => "right", "enabled" => 1, "format" => "1ddcb92ade31c8fbd370001f9b29a7d9", "formatter" => "f2ffc59487832cbad265a8fef2133592", "rotation" => 56];
		$this->assertEquals($res5, $obj->toArray(), "The method toArray() does not return the expected array with rotation");

		$obj->setStyle(["style" => "a1b01e734b573fca08eb1a65e6df9a38"]);

		$res6 = ["align" => "right", "enabled" => 1, "format" => "1ddcb92ade31c8fbd370001f9b29a7d9", "formatter" => "f2ffc59487832cbad265a8fef2133592", "rotation" => 56, "style" => ["style" => "a1b01e734b573fca08eb1a65e6df9a38"]];
		$this->assertEquals($res6, $obj->toArray(), "The method toArray() does not return the expected array with style");

		$obj->setTextAlign("right");

		$res7 = ["align" => "right", "enabled" => 1, "format" => "1ddcb92ade31c8fbd370001f9b29a7d9", "formatter" => "f2ffc59487832cbad265a8fef2133592", "rotation" => 56, "style" => ["style" => "a1b01e734b573fca08eb1a65e6df9a38"], "textAlign" => "right"];
		$this->assertEquals($res7, $obj->toArray(), "The method toArray() does not return the expected array with text align");

		$obj->setUseHTML(0);

		$res8 = ["align" => "right", "enabled" => 1, "format" => "1ddcb92ade31c8fbd370001f9b29a7d9", "formatter" => "f2ffc59487832cbad265a8fef2133592", "rotation" => 56, "style" => ["style" => "a1b01e734b573fca08eb1a65e6df9a38"], "textAlign" => "right", "useHTML" => 0];
		$this->assertEquals($res8, $obj->toArray(), "The method toArray() does not return the expected array with use HTML");

		$obj->setVerticalAlign("bottom");

		$res9 = ["align" => "right", "enabled" => 1, "format" => "1ddcb92ade31c8fbd370001f9b29a7d9", "formatter" => "f2ffc59487832cbad265a8fef2133592", "rotation" => 56, "style" => ["style" => "a1b01e734b573fca08eb1a65e6df9a38"], "textAlign" => "right", "useHTML" => 0, "verticalAlign" => "bottom"];
		$this->assertEquals($res9, $obj->toArray(), "The method toArray() does not return the expected array with vertical align");

		$obj->setX(15);

		$res10 = ["align" => "right", "enabled" => 1, "format" => "1ddcb92ade31c8fbd370001f9b29a7d9", "formatter" => "f2ffc59487832cbad265a8fef2133592", "rotation" => 56, "style" => ["style" => "a1b01e734b573fca08eb1a65e6df9a38"], "textAlign" => "right", "useHTML" => 0, "verticalAlign" => "bottom", "x" => 15];
		$this->assertEquals($res10, $obj->toArray(), "The method toArray() does not return the expected array with x");

		$obj->setY(37);

		$res11 = ["align" => "right", "enabled" => 1, "format" => "1ddcb92ade31c8fbd370001f9b29a7d9", "formatter" => "f2ffc59487832cbad265a8fef2133592", "rotation" => 56, "style" => ["style" => "a1b01e734b573fca08eb1a65e6df9a38"], "textAlign" => "right", "useHTML" => 0, "verticalAlign" => "bottom", "x" => 15, "y" => 37];
		$this->assertEquals($res11, $obj->toArray(), "The method toArray() does not return the expected array with y");
	}

}
