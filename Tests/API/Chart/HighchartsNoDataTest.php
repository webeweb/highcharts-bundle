<?php

/*
 * This file is part of the WBWHighchartsBundle package.
 *
 * (c) 2017 WBW
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\HighchartsBundle\Tests\API\Chart;

use PHPUnit_Framework_TestCase;

/**
 * Highcharts no data test.
 *
 * @author WBW <https://github.com/webeweb/WBWHighchartsBundle>
 * @package WBW\HighchartsBundle\Tests\API\Chart
 * @version 5.0.14
 */
final class HighchartsNoDataTest extends PHPUnit_Framework_TestCase {

	/**
	 * Test the clear() method.
	 *
	 * @return void
	 */
	public function testClear() {

		$obj = new \WBW\HighchartsBundle\API\Chart\HighchartsNoData(false);

		$obj->clear();
		$this->assertEquals([], $obj->toArray(), "The method toArray() does not return the expected array");
	}

	/**
	 * Test the toArray() method.
	 *
	 * @return void
	 */
	public function testToArray() {

		$obj = new \WBW\HighchartsBundle\API\Chart\HighchartsNoData(false);

		$res = ["position" => ["x" => 0, "y" => 0, "align" => "center", "verticalAlign" => "middle"], "style" => ["fontSize" => "12px", "fontWeight" => "bold", "color" => "#666666"], "useHTML" => false];
		$this->assertEquals($res, $obj->toArray(), "The method toArray() does not return the expected array");

		$obj->setAttr(["attr" => "815be97df65d6c4b510cd07189c5347a"]);

		$res1 = ["position" => ["x" => 0, "y" => 0, "align" => "center", "verticalAlign" => "middle"], "style" => ["fontSize" => "12px", "fontWeight" => "bold", "color" => "#666666"], "useHTML" => false, "attr" => ["attr" => "815be97df65d6c4b510cd07189c5347a"]];
		$this->assertEquals($res1, $obj->toArray(), "The method toArray() does not return the expected array with attr");
	}

}
