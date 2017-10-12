<?php

/*
 * This file is part of the WBWHighchartsBundle package.
 *
 * (c) 2017 WBW
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\HighchartsBundle\Tests\API\Chart\Exporting\Buttons;

use PHPUnit_Framework_TestCase;

/**
 * Highcharts context button test.
 *
 * @author WBW <https://github.com/webeweb/WBWHighchartsBundle>
 * @package WBW\HighchartsBundle\Tests\API\Chart\Exporting\Buttons
 * @version 5.0.14
 */
final class HighchartsContextButtonTest extends PHPUnit_Framework_TestCase {

	/**
	 * Test the __construct() method.
	 *
	 * @return void
	 */
	public function testConstructor() {

		$obj1 = new \WBW\HighchartsBundle\API\Chart\Exporting\Buttons\HighchartsContextButton(true);

		$this->assertEquals(null, $obj1->getAlign(), "The method getAlign() does not return the expected value");
		$this->assertEquals(null, $obj1->getEnabled(), "The method getEnabled() does not return the expected value");
		$this->assertEquals(null, $obj1->getHeight(), "The method getHeight() does not return the expected value");
		$this->assertEquals(null, $obj1->getMenuItems(), "The method getMenuItems() does not return the expected value");
		$this->assertEquals(null, $obj1->getOnclick(), "The method getOnclick() does not return the expected value");
		$this->assertEquals(null, $obj1->getSymbol(), "The method getSymbol() does not return the expected value");
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
		$this->assertEquals(null, $obj1->getX(), "The method getX() does not return the expected value");
		$this->assertEquals(null, $obj1->getY(), "The method getY() does not return the expected value");

		$obj0 = new \WBW\HighchartsBundle\API\Chart\Exporting\Buttons\HighchartsContextButton(false);

		$this->assertEquals("right", $obj0->getAlign(), "The method getAlign() does not return the expected value");
		$this->assertEquals(true, $obj0->getEnabled(), "The method getEnabled() does not return the expected value");
		$this->assertEquals(20, $obj0->getHeight(), "The method getHeight() does not return the expected value");
		$this->assertEquals(null, $obj0->getMenuItems(), "The method getMenuItems() does not return the expected value");
		$this->assertEquals(null, $obj0->getOnclick(), "The method getOnclick() does not return the expected value");
		$this->assertEquals("menu", $obj0->getSymbol(), "The method getSymbol() does not return the expected value");
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
		$this->assertEquals(-10, $obj0->getX(), "The method getX() does not return the expected value");
		$this->assertEquals(0, $obj0->getY(), "The method getY() does not return the expected value");
	}

	/**
	 * Test the jsonSerialize() method.
	 *
	 * @return void
	 */
	public function testJsonSerialize() {

		$obj = new \WBW\HighchartsBundle\API\Chart\Exporting\Buttons\HighchartsContextButton(true);

		$this->assertEquals([], $obj->jsonSerialize(), "The method jsonSerialize() does not return the expected value");
	}

	/**
	 * Test the toArray() method.
	 *
	 * @return void
	 */
	public function testToArray() {

		$obj = new \WBW\HighchartsBundle\API\Chart\Exporting\Buttons\HighchartsContextButton(true);

		$obj->setAlign("right");

		$res1 = ["align" => "right"];
		$this->assertEquals($res1, $obj->toArray(), "The method toArray() does not return the expected array with align");

		$obj->setEnabled(1);

		$res2 = ["align" => "right", "enabled" => 1];
		$this->assertEquals($res2, $obj->toArray(), "The method toArray() does not return the expected array with enabled");

		$obj->setHeight(82);

		$res3 = ["align" => "right", "enabled" => 1, "height" => 82];
		$this->assertEquals($res3, $obj->toArray(), "The method toArray() does not return the expected array with height");

		$obj->setMenuItems(["menuItems" => "3081c7ff634acf2d84cebc0fe12eef3f"]);

		$res4 = ["align" => "right", "enabled" => 1, "height" => 82, "menuItems" => ["menuItems" => "3081c7ff634acf2d84cebc0fe12eef3f"]];
		$this->assertEquals($res4, $obj->toArray(), "The method toArray() does not return the expected array with menu items");

		$obj->setOnclick("c0bb2196426022e8adf9a5b6d34fd45e");

		$res5 = ["align" => "right", "enabled" => 1, "height" => 82, "menuItems" => ["menuItems" => "3081c7ff634acf2d84cebc0fe12eef3f"], "onclick" => "c0bb2196426022e8adf9a5b6d34fd45e"];
		$this->assertEquals($res5, $obj->toArray(), "The method toArray() does not return the expected array with onclick");

		$obj->setSymbol("menu");

		$res6 = ["align" => "right", "enabled" => 1, "height" => 82, "menuItems" => ["menuItems" => "3081c7ff634acf2d84cebc0fe12eef3f"], "onclick" => "c0bb2196426022e8adf9a5b6d34fd45e", "symbol" => "menu"];
		$this->assertEquals($res6, $obj->toArray(), "The method toArray() does not return the expected array with symbol");

		$obj->setSymbolFill("91c9eea38e42d2f606dbfea1e027bfbf");

		$res7 = ["align" => "right", "enabled" => 1, "height" => 82, "menuItems" => ["menuItems" => "3081c7ff634acf2d84cebc0fe12eef3f"], "onclick" => "c0bb2196426022e8adf9a5b6d34fd45e", "symbol" => "menu", "symbolFill" => "91c9eea38e42d2f606dbfea1e027bfbf"];
		$this->assertEquals($res7, $obj->toArray(), "The method toArray() does not return the expected array with symbol fill");

		$obj->setSymbolSize(36);

		$res8 = ["align" => "right", "enabled" => 1, "height" => 82, "menuItems" => ["menuItems" => "3081c7ff634acf2d84cebc0fe12eef3f"], "onclick" => "c0bb2196426022e8adf9a5b6d34fd45e", "symbol" => "menu", "symbolFill" => "91c9eea38e42d2f606dbfea1e027bfbf", "symbolSize" => 36];
		$this->assertEquals($res8, $obj->toArray(), "The method toArray() does not return the expected array with symbol size");

		$obj->setSymbolStroke("07f92b4194c5eb604aeb59004eeaab2a");

		$res9 = ["align" => "right", "enabled" => 1, "height" => 82, "menuItems" => ["menuItems" => "3081c7ff634acf2d84cebc0fe12eef3f"], "onclick" => "c0bb2196426022e8adf9a5b6d34fd45e", "symbol" => "menu", "symbolFill" => "91c9eea38e42d2f606dbfea1e027bfbf", "symbolSize" => 36, "symbolStroke" => "07f92b4194c5eb604aeb59004eeaab2a"];
		$this->assertEquals($res9, $obj->toArray(), "The method toArray() does not return the expected array with symbol stroke");

		$obj->setSymbolStrokeWidth(87);

		$res10 = ["align" => "right", "enabled" => 1, "height" => 82, "menuItems" => ["menuItems" => "3081c7ff634acf2d84cebc0fe12eef3f"], "onclick" => "c0bb2196426022e8adf9a5b6d34fd45e", "symbol" => "menu", "symbolFill" => "91c9eea38e42d2f606dbfea1e027bfbf", "symbolSize" => 36, "symbolStroke" => "07f92b4194c5eb604aeb59004eeaab2a", "symbolStrokeWidth" => 87];
		$this->assertEquals($res10, $obj->toArray(), "The method toArray() does not return the expected array with symbol stroke width");

		$obj->setSymbolX(73);

		$res11 = ["align" => "right", "enabled" => 1, "height" => 82, "menuItems" => ["menuItems" => "3081c7ff634acf2d84cebc0fe12eef3f"], "onclick" => "c0bb2196426022e8adf9a5b6d34fd45e", "symbol" => "menu", "symbolFill" => "91c9eea38e42d2f606dbfea1e027bfbf", "symbolSize" => 36, "symbolStroke" => "07f92b4194c5eb604aeb59004eeaab2a", "symbolStrokeWidth" => 87, "symbolX" => 73];
		$this->assertEquals($res11, $obj->toArray(), "The method toArray() does not return the expected array with symbol x");

		$obj->setSymbolY(9);

		$res12 = ["align" => "right", "enabled" => 1, "height" => 82, "menuItems" => ["menuItems" => "3081c7ff634acf2d84cebc0fe12eef3f"], "onclick" => "c0bb2196426022e8adf9a5b6d34fd45e", "symbol" => "menu", "symbolFill" => "91c9eea38e42d2f606dbfea1e027bfbf", "symbolSize" => 36, "symbolStroke" => "07f92b4194c5eb604aeb59004eeaab2a", "symbolStrokeWidth" => 87, "symbolX" => 73, "symbolY" => 9];
		$this->assertEquals($res12, $obj->toArray(), "The method toArray() does not return the expected array with symbol y");

		$obj->setText("1cb251ec0d568de6a929b520c4aed8d1");

		$res13 = ["align" => "right", "enabled" => 1, "height" => 82, "menuItems" => ["menuItems" => "3081c7ff634acf2d84cebc0fe12eef3f"], "onclick" => "c0bb2196426022e8adf9a5b6d34fd45e", "symbol" => "menu", "symbolFill" => "91c9eea38e42d2f606dbfea1e027bfbf", "symbolSize" => 36, "symbolStroke" => "07f92b4194c5eb604aeb59004eeaab2a", "symbolStrokeWidth" => 87, "symbolX" => 73, "symbolY" => 9, "text" => "1cb251ec0d568de6a929b520c4aed8d1"];
		$this->assertEquals($res13, $obj->toArray(), "The method toArray() does not return the expected array with text");

		$obj->setTheme(["theme" => "f484570d7cf557020e11ace406901b10"]);

		$res14 = ["align" => "right", "enabled" => 1, "height" => 82, "menuItems" => ["menuItems" => "3081c7ff634acf2d84cebc0fe12eef3f"], "onclick" => "c0bb2196426022e8adf9a5b6d34fd45e", "symbol" => "menu", "symbolFill" => "91c9eea38e42d2f606dbfea1e027bfbf", "symbolSize" => 36, "symbolStroke" => "07f92b4194c5eb604aeb59004eeaab2a", "symbolStrokeWidth" => 87, "symbolX" => 73, "symbolY" => 9, "text" => "1cb251ec0d568de6a929b520c4aed8d1", "theme" => ["theme" => "f484570d7cf557020e11ace406901b10"]];
		$this->assertEquals($res14, $obj->toArray(), "The method toArray() does not return the expected array with theme");

		$obj->setVerticalAlign("bottom");

		$res15 = ["align" => "right", "enabled" => 1, "height" => 82, "menuItems" => ["menuItems" => "3081c7ff634acf2d84cebc0fe12eef3f"], "onclick" => "c0bb2196426022e8adf9a5b6d34fd45e", "symbol" => "menu", "symbolFill" => "91c9eea38e42d2f606dbfea1e027bfbf", "symbolSize" => 36, "symbolStroke" => "07f92b4194c5eb604aeb59004eeaab2a", "symbolStrokeWidth" => 87, "symbolX" => 73, "symbolY" => 9, "text" => "1cb251ec0d568de6a929b520c4aed8d1", "theme" => ["theme" => "f484570d7cf557020e11ace406901b10"], "verticalAlign" => "bottom"];
		$this->assertEquals($res15, $obj->toArray(), "The method toArray() does not return the expected array with vertical align");

		$obj->setWidth(40);

		$res16 = ["align" => "right", "enabled" => 1, "height" => 82, "menuItems" => ["menuItems" => "3081c7ff634acf2d84cebc0fe12eef3f"], "onclick" => "c0bb2196426022e8adf9a5b6d34fd45e", "symbol" => "menu", "symbolFill" => "91c9eea38e42d2f606dbfea1e027bfbf", "symbolSize" => 36, "symbolStroke" => "07f92b4194c5eb604aeb59004eeaab2a", "symbolStrokeWidth" => 87, "symbolX" => 73, "symbolY" => 9, "text" => "1cb251ec0d568de6a929b520c4aed8d1", "theme" => ["theme" => "f484570d7cf557020e11ace406901b10"], "verticalAlign" => "bottom", "width" => 40];
		$this->assertEquals($res16, $obj->toArray(), "The method toArray() does not return the expected array with width");

		$obj->setX(69);

		$res17 = ["align" => "right", "enabled" => 1, "height" => 82, "menuItems" => ["menuItems" => "3081c7ff634acf2d84cebc0fe12eef3f"], "onclick" => "c0bb2196426022e8adf9a5b6d34fd45e", "symbol" => "menu", "symbolFill" => "91c9eea38e42d2f606dbfea1e027bfbf", "symbolSize" => 36, "symbolStroke" => "07f92b4194c5eb604aeb59004eeaab2a", "symbolStrokeWidth" => 87, "symbolX" => 73, "symbolY" => 9, "text" => "1cb251ec0d568de6a929b520c4aed8d1", "theme" => ["theme" => "f484570d7cf557020e11ace406901b10"], "verticalAlign" => "bottom", "width" => 40, "x" => 69];
		$this->assertEquals($res17, $obj->toArray(), "The method toArray() does not return the expected array with x");

		$obj->setY(82);

		$res18 = ["align" => "right", "enabled" => 1, "height" => 82, "menuItems" => ["menuItems" => "3081c7ff634acf2d84cebc0fe12eef3f"], "onclick" => "c0bb2196426022e8adf9a5b6d34fd45e", "symbol" => "menu", "symbolFill" => "91c9eea38e42d2f606dbfea1e027bfbf", "symbolSize" => 36, "symbolStroke" => "07f92b4194c5eb604aeb59004eeaab2a", "symbolStrokeWidth" => 87, "symbolX" => 73, "symbolY" => 9, "text" => "1cb251ec0d568de6a929b520c4aed8d1", "theme" => ["theme" => "f484570d7cf557020e11ace406901b10"], "verticalAlign" => "bottom", "width" => 40, "x" => 69, "y" => 82];
		$this->assertEquals($res18, $obj->toArray(), "The method toArray() does not return the expected array with y");
	}

}
