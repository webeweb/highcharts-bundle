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

use WBW\HighchartsBundle\API\Chart\HighchartsTitle;
use PHPUnit_Framework_TestCase;

/**
 * Highcharts title test.
 *
 * @author WBW <https://github.com/webeweb/WBWHighchartsBundle>
 * @package WBW\HighchartsBundle\Tests\API\Chart
 * @version 5.0.14
 */
final class HighchartsTitleTest extends PHPUnit_Framework_TestCase {

	/**
	 * Test the toArray() method.
	 */
	public function testToArray() {

		$obj = new HighchartsTitle(false);

		$res = ["align" => "center", "floating" => false, "margin" => 15, "style" => ["color" => "#333333", "fontSize" => "18px"], "text" => "Chart title", "useHTML" => false, "widthAdjust" => -44, "x" => 0];
		$this->assertEquals($res, $obj->toArray(), 'The method toArray() does not return the expected array');

		$obj->setVerticalAlign("ca9e085e0fcf449934cc13d9e60dd722");

		$res1 = ["align" => "center", "floating" => false, "margin" => 15, "style" => ["color" => "#333333", "fontSize" => "18px"], "text" => "Chart title", "useHTML" => false, "widthAdjust" => -44, "x" => 0, "verticalAlign" => "ca9e085e0fcf449934cc13d9e60dd722"];
		$this->assertEquals($res1, $obj->toArray(), 'The method toArray() does not return the expected array with vertical align');

		$obj->setY(53);

		$res2 = ["align" => "center", "floating" => false, "margin" => 15, "style" => ["color" => "#333333", "fontSize" => "18px"], "text" => "Chart title", "useHTML" => false, "widthAdjust" => -44, "x" => 0, "verticalAlign" => "ca9e085e0fcf449934cc13d9e60dd722", "y" => 53];
		$this->assertEquals($res2, $obj->toArray(), 'The method toArray() does not return the expected array with y');
	}
}

