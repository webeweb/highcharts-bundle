<?php

/*
 * This file is part of the highcharts-bundle package.
 *
 * (c) 2017 NdC/WBW
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\HighchartsBundle\Tests\API\Chart\Navigation;

use PHPUnit_Framework_TestCase;

/**
 * Highcharts button options test.
 *
 * @author NdC/WBW <https://github.com/webeweb/>
 * @package WBW\Bundle\HighchartsBundle\Tests\API\Chart\Navigation
 * @version 5.0.14
 */
final class HighchartsButtonOptionsTest extends PHPUnit_Framework_TestCase {

	/**
	 * Tests the __construct() method.
	 *
	 * @return void
	 */
	public function testConstructor() {

		$obj1 = new \WBW\Bundle\HighchartsBundle\API\Chart\Navigation\HighchartsButtonOptions(true);

		$this->assertEquals(null, $obj1->getAlign(), "The method getAlign() does not return the expected value");
		$this->assertEquals(null, $obj1->getEnabled(), "The method getEnabled() does not return the expected value");
		$this->assertEquals(null, $obj1->getHeight(), "The method getHeight() does not return the expected value");
		$this->assertEquals(null, $obj1->getSymbolFill(), "The method getSymbolFill() does not return the expected value");
		$this->assertEquals(null, $obj1->getSymbolSize(), "The method getSymbolSize() does not return the expected value");
		$this->assertEquals(null, $obj1->getSymbolStroke(), "The method getSymbolStroke() does not return the expected value");
		$this->assertEquals(null, $obj1->getSymbolStrokeWidth(), "The method getSymbolStrokeWidth() does not return the expected value");
		$this->assertEquals(null, $obj1->getSymbolX(), "The method getSymbolX() does not return the expected value");
		$this->assertEquals(null, $obj1->getSymbolY(), "The method getSymbolY() does not return the expected value");
		$this->assertEquals(null, $obj1->getText(), "The method getText() does not return the expected value");
		$this->assertEquals(null, $obj1->getTheme(), "The method getTheme() does not return the expected value");
		$this->assertEquals(null, $obj1->getVerticalAlign(), "The method getVerticalAlign() does not return the expected value");
		$this->assertEquals(null, $obj1->getWidth(), "The method getWidth() does not return the expected value");
		$this->assertEquals(null, $obj1->getY(), "The method getY() does not return the expected value");

		$obj0 = new \WBW\Bundle\HighchartsBundle\API\Chart\Navigation\HighchartsButtonOptions(false);

		$this->assertEquals("right", $obj0->getAlign(), "The method getAlign() does not return the expected value");
		$this->assertEquals(true, $obj0->getEnabled(), "The method getEnabled() does not return the expected value");
		$this->assertEquals(20, $obj0->getHeight(), "The method getHeight() does not return the expected value");
		$this->assertEquals("#666666", $obj0->getSymbolFill(), "The method getSymbolFill() does not return the expected value");
		$this->assertEquals(14, $obj0->getSymbolSize(), "The method getSymbolSize() does not return the expected value");
		$this->assertEquals("#666666", $obj0->getSymbolStroke(), "The method getSymbolStroke() does not return the expected value");
		$this->assertEquals(1, $obj0->getSymbolStrokeWidth(), "The method getSymbolStrokeWidth() does not return the expected value");
		$this->assertEquals(12.5, $obj0->getSymbolX(), "The method getSymbolX() does not return the expected value");
		$this->assertEquals(10.5, $obj0->getSymbolY(), "The method getSymbolY() does not return the expected value");
		$this->assertEquals(null, $obj0->getText(), "The method getText() does not return the expected value");
		$this->assertEquals(null, $obj0->getTheme(), "The method getTheme() does not return the expected value");
		$this->assertEquals("top", $obj0->getVerticalAlign(), "The method getVerticalAlign() does not return the expected value");
		$this->assertEquals(24, $obj0->getWidth(), "The method getWidth() does not return the expected value");
		$this->assertEquals(0, $obj0->getY(), "The method getY() does not return the expected value");
    }

	/**
	 * Tests the jsonSerialize() method.
	 *
	 * @return void
	 */
	public function testJsonSerialize() {

		$obj = new \WBW\Bundle\HighchartsBundle\API\Chart\Navigation\HighchartsButtonOptions(true);

		$this->assertEquals([], $obj->jsonSerialize(), "The method jsonSerialize() does not return the expected value");
	}

	/**
	 * Tests the toArray() method.
	 *
	 * @return void
	 */
	public function testToArray() {

		$obj = new \WBW\Bundle\HighchartsBundle\API\Chart\Navigation\HighchartsButtonOptions(true);

		$obj->setAlign("right");

		$res1 = ["align" => "right"];
		$this->assertEquals($res1, $obj->toArray(), "The method toArray() does not return the expected array with align");

		$obj->setEnabled(0);

		$res2 = ["align" => "right", "enabled" => 0];
		$this->assertEquals($res2, $obj->toArray(), "The method toArray() does not return the expected array with enabled");

		$obj->setHeight(57);

		$res3 = ["align" => "right", "enabled" => 0, "height" => 57];
		$this->assertEquals($res3, $obj->toArray(), "The method toArray() does not return the expected array with height");

		$obj->setSymbolFill("91c9eea38e42d2f606dbfea1e027bfbf");

		$res4 = ["align" => "right", "enabled" => 0, "height" => 57, "symbolFill" => "91c9eea38e42d2f606dbfea1e027bfbf"];
		$this->assertEquals($res4, $obj->toArray(), "The method toArray() does not return the expected array with symbol fill");

		$obj->setSymbolSize(11);

		$res5 = ["align" => "right", "enabled" => 0, "height" => 57, "symbolFill" => "91c9eea38e42d2f606dbfea1e027bfbf", "symbolSize" => 11];
		$this->assertEquals($res5, $obj->toArray(), "The method toArray() does not return the expected array with symbol size");

		$obj->setSymbolStroke("07f92b4194c5eb604aeb59004eeaab2a");

		$res6 = ["align" => "right", "enabled" => 0, "height" => 57, "symbolFill" => "91c9eea38e42d2f606dbfea1e027bfbf", "symbolSize" => 11, "symbolStroke" => "07f92b4194c5eb604aeb59004eeaab2a"];
		$this->assertEquals($res6, $obj->toArray(), "The method toArray() does not return the expected array with symbol stroke");

		$obj->setSymbolStrokeWidth(77);

		$res7 = ["align" => "right", "enabled" => 0, "height" => 57, "symbolFill" => "91c9eea38e42d2f606dbfea1e027bfbf", "symbolSize" => 11, "symbolStroke" => "07f92b4194c5eb604aeb59004eeaab2a", "symbolStrokeWidth" => 77];
		$this->assertEquals($res7, $obj->toArray(), "The method toArray() does not return the expected array with symbol stroke width");

		$obj->setSymbolX(7);

		$res8 = ["align" => "right", "enabled" => 0, "height" => 57, "symbolFill" => "91c9eea38e42d2f606dbfea1e027bfbf", "symbolSize" => 11, "symbolStroke" => "07f92b4194c5eb604aeb59004eeaab2a", "symbolStrokeWidth" => 77, "symbolX" => 7];
		$this->assertEquals($res8, $obj->toArray(), "The method toArray() does not return the expected array with symbol x");

		$obj->setSymbolY(61);

		$res9 = ["align" => "right", "enabled" => 0, "height" => 57, "symbolFill" => "91c9eea38e42d2f606dbfea1e027bfbf", "symbolSize" => 11, "symbolStroke" => "07f92b4194c5eb604aeb59004eeaab2a", "symbolStrokeWidth" => 77, "symbolX" => 7, "symbolY" => 61];
		$this->assertEquals($res9, $obj->toArray(), "The method toArray() does not return the expected array with symbol y");

		$obj->setText("1cb251ec0d568de6a929b520c4aed8d1");

		$res10 = ["align" => "right", "enabled" => 0, "height" => 57, "symbolFill" => "91c9eea38e42d2f606dbfea1e027bfbf", "symbolSize" => 11, "symbolStroke" => "07f92b4194c5eb604aeb59004eeaab2a", "symbolStrokeWidth" => 77, "symbolX" => 7, "symbolY" => 61, "text" => "1cb251ec0d568de6a929b520c4aed8d1"];
		$this->assertEquals($res10, $obj->toArray(), "The method toArray() does not return the expected array with text");

		$obj->setTheme(["theme" => "f484570d7cf557020e11ace406901b10"]);

		$res11 = ["align" => "right", "enabled" => 0, "height" => 57, "symbolFill" => "91c9eea38e42d2f606dbfea1e027bfbf", "symbolSize" => 11, "symbolStroke" => "07f92b4194c5eb604aeb59004eeaab2a", "symbolStrokeWidth" => 77, "symbolX" => 7, "symbolY" => 61, "text" => "1cb251ec0d568de6a929b520c4aed8d1", "theme" => ["theme" => "f484570d7cf557020e11ace406901b10"]];
		$this->assertEquals($res11, $obj->toArray(), "The method toArray() does not return the expected array with theme");

		$obj->setVerticalAlign("bottom");

		$res12 = ["align" => "right", "enabled" => 0, "height" => 57, "symbolFill" => "91c9eea38e42d2f606dbfea1e027bfbf", "symbolSize" => 11, "symbolStroke" => "07f92b4194c5eb604aeb59004eeaab2a", "symbolStrokeWidth" => 77, "symbolX" => 7, "symbolY" => 61, "text" => "1cb251ec0d568de6a929b520c4aed8d1", "theme" => ["theme" => "f484570d7cf557020e11ace406901b10"], "verticalAlign" => "bottom"];
		$this->assertEquals($res12, $obj->toArray(), "The method toArray() does not return the expected array with vertical align");

		$obj->setWidth(44);

		$res13 = ["align" => "right", "enabled" => 0, "height" => 57, "symbolFill" => "91c9eea38e42d2f606dbfea1e027bfbf", "symbolSize" => 11, "symbolStroke" => "07f92b4194c5eb604aeb59004eeaab2a", "symbolStrokeWidth" => 77, "symbolX" => 7, "symbolY" => 61, "text" => "1cb251ec0d568de6a929b520c4aed8d1", "theme" => ["theme" => "f484570d7cf557020e11ace406901b10"], "verticalAlign" => "bottom", "width" => 44];
		$this->assertEquals($res13, $obj->toArray(), "The method toArray() does not return the expected array with width");

		$obj->setY(18);

		$res14 = ["align" => "right", "enabled" => 0, "height" => 57, "symbolFill" => "91c9eea38e42d2f606dbfea1e027bfbf", "symbolSize" => 11, "symbolStroke" => "07f92b4194c5eb604aeb59004eeaab2a", "symbolStrokeWidth" => 77, "symbolX" => 7, "symbolY" => 61, "text" => "1cb251ec0d568de6a929b520c4aed8d1", "theme" => ["theme" => "f484570d7cf557020e11ace406901b10"], "verticalAlign" => "bottom", "width" => 44, "y" => 18];
		$this->assertEquals($res14, $obj->toArray(), "The method toArray() does not return the expected array with y");
	}

}
