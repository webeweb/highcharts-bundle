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
use WBW\HighchartsBundle\API\Chart\Exporting\Buttons\HighchartsContextButton;

/**
 * Highcharts context button test.
 *
 * @author WBW <https://github.com/webeweb/WBWHighchartsBundle>
 * @package WBW\HighchartsBundle\Tests\API\Chart\Exporting\Buttons
 * @version 5.0.14
 */
final class HighchartsContextButtonTest extends PHPUnit_Framework_TestCase {

	/**
	 * Test the clear() method.
	 *
	 * @return void
	 */
	public function testClear() {

		$obj = new HighchartsContextButton(false);

		$obj->clear();
		$this->assertEquals([], $obj->toArray(), 'The method toArray() does not return the expected array');
	}

	/**
	 * Test the toArray() method.
	 *
	 * @return void
	 */
	public function testToArray() {

		$obj = new HighchartsContextButton(false);

		$res = ["align" => "right", "enabled" => true, "height" => 20, "symbol" => "menu", "symbolFill" => "#666666", "symbolSize" => 14, "symbolStroke" => "#666666", "symbolStrokeWidth" => 1, "symbolX" => 12.5, "symbolY" => 10.5, "verticalAlign" => "top", "width" => 24, "x" => -10, "y" => 0];
		$this->assertEquals($res, $obj->toArray(), 'The method toArray() does not return the expected array');

		$obj->setMenuItems(["menuItems" => "3081c7ff634acf2d84cebc0fe12eef3f"]);

		$res1 = ["align" => "right", "enabled" => true, "height" => 20, "symbol" => "menu", "symbolFill" => "#666666", "symbolSize" => 14, "symbolStroke" => "#666666", "symbolStrokeWidth" => 1, "symbolX" => 12.5, "symbolY" => 10.5, "verticalAlign" => "top", "width" => 24, "x" => -10, "y" => 0, "menuItems" => ["menuItems" => "3081c7ff634acf2d84cebc0fe12eef3f"]];
		$this->assertEquals($res1, $obj->toArray(), 'The method toArray() does not return the expected array with menu items');

		$obj->setOnclick("c0bb2196426022e8adf9a5b6d34fd45e");

		$res2 = ["align" => "right", "enabled" => true, "height" => 20, "symbol" => "menu", "symbolFill" => "#666666", "symbolSize" => 14, "symbolStroke" => "#666666", "symbolStrokeWidth" => 1, "symbolX" => 12.5, "symbolY" => 10.5, "verticalAlign" => "top", "width" => 24, "x" => -10, "y" => 0, "menuItems" => ["menuItems" => "3081c7ff634acf2d84cebc0fe12eef3f"], "onclick" => "c0bb2196426022e8adf9a5b6d34fd45e"];
		$this->assertEquals($res2, $obj->toArray(), 'The method toArray() does not return the expected array with onclick');

		$obj->setText("1cb251ec0d568de6a929b520c4aed8d1");

		$res3 = ["align" => "right", "enabled" => true, "height" => 20, "symbol" => "menu", "symbolFill" => "#666666", "symbolSize" => 14, "symbolStroke" => "#666666", "symbolStrokeWidth" => 1, "symbolX" => 12.5, "symbolY" => 10.5, "verticalAlign" => "top", "width" => 24, "x" => -10, "y" => 0, "menuItems" => ["menuItems" => "3081c7ff634acf2d84cebc0fe12eef3f"], "onclick" => "c0bb2196426022e8adf9a5b6d34fd45e", "text" => "1cb251ec0d568de6a929b520c4aed8d1"];
		$this->assertEquals($res3, $obj->toArray(), 'The method toArray() does not return the expected array with text');

		$obj->setTheme(["theme" => "f484570d7cf557020e11ace406901b10"]);

		$res4 = ["align" => "right", "enabled" => true, "height" => 20, "symbol" => "menu", "symbolFill" => "#666666", "symbolSize" => 14, "symbolStroke" => "#666666", "symbolStrokeWidth" => 1, "symbolX" => 12.5, "symbolY" => 10.5, "verticalAlign" => "top", "width" => 24, "x" => -10, "y" => 0, "menuItems" => ["menuItems" => "3081c7ff634acf2d84cebc0fe12eef3f"], "onclick" => "c0bb2196426022e8adf9a5b6d34fd45e", "text" => "1cb251ec0d568de6a929b520c4aed8d1", "theme" => ["theme" => "f484570d7cf557020e11ace406901b10"]];
		$this->assertEquals($res4, $obj->toArray(), 'The method toArray() does not return the expected array with theme');
	}

}
