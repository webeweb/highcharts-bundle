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
use WBW\HighchartsBundle\API\Chart\YAxis\HighchartsStackLabels;

/**
 * Highcharts stack labels test.
 *
 * @author WBW <https://github.com/webeweb/WBWHighchartsBundle>
 * @package WBW\HighchartsBundle\Tests\API\Chart\YAxis
 * @version 5.0.14
 */
final class HighchartsStackLabelsTest extends PHPUnit_Framework_TestCase {

	/**
	 * Test the clear() method.
	 *
	 * @return void
	 */
	public function testClear() {

		$obj = new HighchartsStackLabels(false);

		$obj->clear();
		$this->assertEquals([], $obj->toArray(), 'The method toArray() does not return the expected array');
	}

	/**
	 * Test the toArray() method.
	 *
	 * @return void
	 */
	public function testToArray() {

		$obj = new HighchartsStackLabels(false);

		$res = ["enabled" => false, "format" => "{total}", "rotation" => 0, "style" => ["color" => "#000000", "fontSize" => "11px", "fontWeight" => "bold", "textShadow" => "1px 1px contrast, -1px -1px contrast, -1px 1px contrast, 1px -1px contrast"], "useHTML" => false];
		$this->assertEquals($res, $obj->toArray(), 'The method toArray() does not return the expected array');

		$obj->setAlign("right");

		$res1 = ["enabled" => false, "format" => "{total}", "rotation" => 0, "style" => ["color" => "#000000", "fontSize" => "11px", "fontWeight" => "bold", "textShadow" => "1px 1px contrast, -1px -1px contrast, -1px 1px contrast, 1px -1px contrast"], "useHTML" => false, "align" => "right"];
		$this->assertEquals($res1, $obj->toArray(), 'The method toArray() does not return the expected array with align');

		$obj->setFormatter("f2ffc59487832cbad265a8fef2133592");

		$res2 = ["enabled" => false, "format" => "{total}", "rotation" => 0, "style" => ["color" => "#000000", "fontSize" => "11px", "fontWeight" => "bold", "textShadow" => "1px 1px contrast, -1px -1px contrast, -1px 1px contrast, 1px -1px contrast"], "useHTML" => false, "align" => "right", "formatter" => "f2ffc59487832cbad265a8fef2133592"];
		$this->assertEquals($res2, $obj->toArray(), 'The method toArray() does not return the expected array with formatter');

		$obj->setTextAlign("right");

		$res3 = ["enabled" => false, "format" => "{total}", "rotation" => 0, "style" => ["color" => "#000000", "fontSize" => "11px", "fontWeight" => "bold", "textShadow" => "1px 1px contrast, -1px -1px contrast, -1px 1px contrast, 1px -1px contrast"], "useHTML" => false, "align" => "right", "formatter" => "f2ffc59487832cbad265a8fef2133592", "textAlign" => "right"];
		$this->assertEquals($res3, $obj->toArray(), 'The method toArray() does not return the expected array with text align');

		$obj->setVerticalAlign("bottom");

		$res4 = ["enabled" => false, "format" => "{total}", "rotation" => 0, "style" => ["color" => "#000000", "fontSize" => "11px", "fontWeight" => "bold", "textShadow" => "1px 1px contrast, -1px -1px contrast, -1px 1px contrast, 1px -1px contrast"], "useHTML" => false, "align" => "right", "formatter" => "f2ffc59487832cbad265a8fef2133592", "textAlign" => "right", "verticalAlign" => "bottom"];
		$this->assertEquals($res4, $obj->toArray(), 'The method toArray() does not return the expected array with vertical align');

		$obj->setX(79);

		$res5 = ["enabled" => false, "format" => "{total}", "rotation" => 0, "style" => ["color" => "#000000", "fontSize" => "11px", "fontWeight" => "bold", "textShadow" => "1px 1px contrast, -1px -1px contrast, -1px 1px contrast, 1px -1px contrast"], "useHTML" => false, "align" => "right", "formatter" => "f2ffc59487832cbad265a8fef2133592", "textAlign" => "right", "verticalAlign" => "bottom", "x" => 79];
		$this->assertEquals($res5, $obj->toArray(), 'The method toArray() does not return the expected array with x');

		$obj->setY(46);

		$res6 = ["enabled" => false, "format" => "{total}", "rotation" => 0, "style" => ["color" => "#000000", "fontSize" => "11px", "fontWeight" => "bold", "textShadow" => "1px 1px contrast, -1px -1px contrast, -1px 1px contrast, 1px -1px contrast"], "useHTML" => false, "align" => "right", "formatter" => "f2ffc59487832cbad265a8fef2133592", "textAlign" => "right", "verticalAlign" => "bottom", "x" => 79, "y" => 46];
		$this->assertEquals($res6, $obj->toArray(), 'The method toArray() does not return the expected array with y');
	}

}
