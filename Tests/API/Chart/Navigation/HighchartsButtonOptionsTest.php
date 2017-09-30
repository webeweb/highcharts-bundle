<?php

/*
 * This file is part of the HighchartsBundle.
 *
 * (c) 2017 WBW
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\HighchartsBundle\Tests\API\Chart\Navigation;

use WBW\HighchartsBundle\API\Chart\Navigation\HighchartsButtonOptions;
use PHPUnit_Framework_TestCase;

/**
 * Highcharts button options test.
 *
 * @author WBW <https://github.com/webeweb/WBWHighchartsBundle>
 * @package WBW\HighchartsBundle\Tests\API\Chart\Navigation
 * @version 5.0.14
 */
final class HighchartsButtonOptionsTest extends PHPUnit_Framework_TestCase {

	/**
	 * Test the toArray() method.
	 */
	public function testToArray() {

		$obj = new HighchartsButtonOptions(false);

		$res = ["align" => "right", "enabled" => true, "height" => 20, "symbolFill" => "#666666", "symbolSize" => 14, "symbolStroke" => "#666666", "symbolStrokeWidth" => 1, "symbolX" => 12.5, "symbolY" => 10.5, "verticalAlign" => "top", "width" => 24, "y" => 0];
		$this->assertEquals($res, $obj->toArray(), 'The method toArray() does not return the expected array');

		$obj->setText("1cb251ec0d568de6a929b520c4aed8d1");

		$res1 = ["align" => "right", "enabled" => true, "height" => 20, "symbolFill" => "#666666", "symbolSize" => 14, "symbolStroke" => "#666666", "symbolStrokeWidth" => 1, "symbolX" => 12.5, "symbolY" => 10.5, "verticalAlign" => "top", "width" => 24, "y" => 0, "text" => "1cb251ec0d568de6a929b520c4aed8d1"];
		$this->assertEquals($res1, $obj->toArray(), 'The method toArray() does not return the expected array with text');

		$obj->setTheme("f484570d7cf557020e11ace406901b10");

		$res2 = ["align" => "right", "enabled" => true, "height" => 20, "symbolFill" => "#666666", "symbolSize" => 14, "symbolStroke" => "#666666", "symbolStrokeWidth" => 1, "symbolX" => 12.5, "symbolY" => 10.5, "verticalAlign" => "top", "width" => 24, "y" => 0, "text" => "1cb251ec0d568de6a929b520c4aed8d1", "theme" => "f484570d7cf557020e11ace406901b10"];
		$this->assertEquals($res2, $obj->toArray(), 'The method toArray() does not return the expected array with theme');
	}
}

