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
use WBW\HighchartsBundle\API\Chart\HighchartsPane;

/**
 * Highcharts pane test.
 *
 * @author WBW <https://github.com/webeweb/WBWHighchartsBundle>
 * @package WBW\HighchartsBundle\Tests\API\Chart
 * @version 5.0.14
 */
final class HighchartsPaneTest extends PHPUnit_Framework_TestCase {

	/**
	 * Test the clear() method.
	 *
	 * @return void
	 */
	public function testClear() {

		$obj = new HighchartsPane(false);

		$obj->clear();
		$this->assertEquals([], $obj->toArray(), "The method toArray() does not return the expected array");
	}

	/**
	 * Test the toArray() method.
	 *
	 * @return void
	 */
	public function testToArray() {

		$obj = new HighchartsPane(false);

		$res = ["center" => ["50%", "50%"], "size" => "85%"];
		$this->assertEquals($res, $obj->toArray(), "The method toArray() does not return the expected array");

		$obj->setBackground(["background" => "d229bbf31eaeebc7c88897732d8b932d"]);

		$res1 = ["center" => ["50%", "50%"], "size" => "85%", "background" => ["background" => "d229bbf31eaeebc7c88897732d8b932d"]];
		$this->assertEquals($res1, $obj->toArray(), "The method toArray() does not return the expected array with background");

		$obj->setEndAngle(33);

		$res2 = ["center" => ["50%", "50%"], "size" => "85%", "background" => ["background" => "d229bbf31eaeebc7c88897732d8b932d"], "endAngle" => 33];
		$this->assertEquals($res2, $obj->toArray(), "The method toArray() does not return the expected array with end angle");

		$obj->setStartAngle(71);

		$res3 = ["center" => ["50%", "50%"], "size" => "85%", "background" => ["background" => "d229bbf31eaeebc7c88897732d8b932d"], "endAngle" => 33, "startAngle" => 71];
		$this->assertEquals($res3, $obj->toArray(), "The method toArray() does not return the expected array with start angle");
	}

}
