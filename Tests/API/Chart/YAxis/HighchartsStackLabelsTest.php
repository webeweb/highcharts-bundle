<?php

/*
 * This file is part of the HighchartsBundle.
 *
 * (c) 2017 WBW
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\HighchartsBundle\Tests\API\Chart\YAxis;

use WBW\HighchartsBundle\API\Chart\YAxis\HighchartsStackLabels;
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
	 * Test the toArray() method.
	 */
	public function testToArray() {

		$obj = new HighchartsStackLabels(false);

		$res = ["enabled" => false, "format" => "{total}", "rotation" => 0, "style" => ["color" => "#000000", "fontSize" => "11px", "fontWeight" => "bold", "textShadow" => "1px 1px contrast, -1px -1px contrast, -1px 1px contrast, 1px -1px contrast"], "useHTML" => false];
		$this->assertEquals($res, $obj->toArray(), 'The method toArray() does not return the expected array');

		$obj->setAlign("f792d1afb0399dce47533bead9d71a8a");

		$res1 = ["enabled" => false, "format" => "{total}", "rotation" => 0, "style" => ["color" => "#000000", "fontSize" => "11px", "fontWeight" => "bold", "textShadow" => "1px 1px contrast, -1px -1px contrast, -1px 1px contrast, 1px -1px contrast"], "useHTML" => false, "align" => "f792d1afb0399dce47533bead9d71a8a"];
		$this->assertEquals($res1, $obj->toArray(), 'The method toArray() does not return the expected array with align');

		$obj->setFormatter("f2ffc59487832cbad265a8fef2133592");

		$res2 = ["enabled" => false, "format" => "{total}", "rotation" => 0, "style" => ["color" => "#000000", "fontSize" => "11px", "fontWeight" => "bold", "textShadow" => "1px 1px contrast, -1px -1px contrast, -1px 1px contrast, 1px -1px contrast"], "useHTML" => false, "align" => "f792d1afb0399dce47533bead9d71a8a", "formatter" => "f2ffc59487832cbad265a8fef2133592"];
		$this->assertEquals($res2, $obj->toArray(), 'The method toArray() does not return the expected array with formatter');

		$obj->setTextAlign("6e1fcbf7c065b2e7fef4cdc9bae3fe53");

		$res3 = ["enabled" => false, "format" => "{total}", "rotation" => 0, "style" => ["color" => "#000000", "fontSize" => "11px", "fontWeight" => "bold", "textShadow" => "1px 1px contrast, -1px -1px contrast, -1px 1px contrast, 1px -1px contrast"], "useHTML" => false, "align" => "f792d1afb0399dce47533bead9d71a8a", "formatter" => "f2ffc59487832cbad265a8fef2133592", "textAlign" => "6e1fcbf7c065b2e7fef4cdc9bae3fe53"];
		$this->assertEquals($res3, $obj->toArray(), 'The method toArray() does not return the expected array with text align');

		$obj->setVerticalAlign("ca9e085e0fcf449934cc13d9e60dd722");

		$res4 = ["enabled" => false, "format" => "{total}", "rotation" => 0, "style" => ["color" => "#000000", "fontSize" => "11px", "fontWeight" => "bold", "textShadow" => "1px 1px contrast, -1px -1px contrast, -1px 1px contrast, 1px -1px contrast"], "useHTML" => false, "align" => "f792d1afb0399dce47533bead9d71a8a", "formatter" => "f2ffc59487832cbad265a8fef2133592", "textAlign" => "6e1fcbf7c065b2e7fef4cdc9bae3fe53", "verticalAlign" => "ca9e085e0fcf449934cc13d9e60dd722"];
		$this->assertEquals($res4, $obj->toArray(), 'The method toArray() does not return the expected array with vertical align');

		$obj->setX(27);

		$res5 = ["enabled" => false, "format" => "{total}", "rotation" => 0, "style" => ["color" => "#000000", "fontSize" => "11px", "fontWeight" => "bold", "textShadow" => "1px 1px contrast, -1px -1px contrast, -1px 1px contrast, 1px -1px contrast"], "useHTML" => false, "align" => "f792d1afb0399dce47533bead9d71a8a", "formatter" => "f2ffc59487832cbad265a8fef2133592", "textAlign" => "6e1fcbf7c065b2e7fef4cdc9bae3fe53", "verticalAlign" => "ca9e085e0fcf449934cc13d9e60dd722", "x" => 27];
		$this->assertEquals($res5, $obj->toArray(), 'The method toArray() does not return the expected array with x');

		$obj->setY(84);

		$res6 = ["enabled" => false, "format" => "{total}", "rotation" => 0, "style" => ["color" => "#000000", "fontSize" => "11px", "fontWeight" => "bold", "textShadow" => "1px 1px contrast, -1px -1px contrast, -1px 1px contrast, 1px -1px contrast"], "useHTML" => false, "align" => "f792d1afb0399dce47533bead9d71a8a", "formatter" => "f2ffc59487832cbad265a8fef2133592", "textAlign" => "6e1fcbf7c065b2e7fef4cdc9bae3fe53", "verticalAlign" => "ca9e085e0fcf449934cc13d9e60dd722", "x" => 27, "y" => 84];
		$this->assertEquals($res6, $obj->toArray(), 'The method toArray() does not return the expected array with y');
	}
}

