<?php

/*
 * This file is part of the HighchartsBundle.
 *
 * (c) 2017 WBW
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\HighchartsBundle\Tests\API\Chart;

use WBW\HighchartsBundle\API\Chart\HighchartsSubtitle;
use PHPUnit_Framework_TestCase;

/**
 * Highcharts subtitle test.
 *
 * @author WBW <https://github.com/webeweb/WBWHighchartsBundle>
 * @package WBW\HighchartsBundle\Tests\API\Chart
 * @version 5.0.14
 */
final class HighchartsSubtitleTest extends PHPUnit_Framework_TestCase {

	/**
	 * Test the toArray() method.
	 */
	public function testToArray() {

		$obj = new HighchartsSubtitle(false);

		$res = ["align" => "center", "floating" => false, "style" => ["color" => "#666666"], "useHTML" => false, "widthAdjust" => -44, "x" => 0];
		$this->assertEquals($res, $obj->toArray(), 'The method toArray() does not return the expected array');

		$obj->setText("1cb251ec0d568de6a929b520c4aed8d1");

		$res1 = ["align" => "center", "floating" => false, "style" => ["color" => "#666666"], "useHTML" => false, "widthAdjust" => -44, "x" => 0, "text" => "1cb251ec0d568de6a929b520c4aed8d1"];
		$this->assertEquals($res1, $obj->toArray(), 'The method toArray() does not return the expected array with text');

		$obj->setVerticalAlign("ca9e085e0fcf449934cc13d9e60dd722");

		$res2 = ["align" => "center", "floating" => false, "style" => ["color" => "#666666"], "useHTML" => false, "widthAdjust" => -44, "x" => 0, "text" => "1cb251ec0d568de6a929b520c4aed8d1", "verticalAlign" => "ca9e085e0fcf449934cc13d9e60dd722"];
		$this->assertEquals($res2, $obj->toArray(), 'The method toArray() does not return the expected array with vertical align');

		$obj->setY(38);

		$res3 = ["align" => "center", "floating" => false, "style" => ["color" => "#666666"], "useHTML" => false, "widthAdjust" => -44, "x" => 0, "text" => "1cb251ec0d568de6a929b520c4aed8d1", "verticalAlign" => "ca9e085e0fcf449934cc13d9e60dd722", "y" => 38];
		$this->assertEquals($res3, $obj->toArray(), 'The method toArray() does not return the expected array with y');
	}
}

