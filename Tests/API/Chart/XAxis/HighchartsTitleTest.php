<?php

/*
 * This file is part of the WBWHighchartsBundle package.
 *
 * (c) 2017 WBW
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\HighchartsBundle\Tests\API\Chart\XAxis;

use PHPUnit_Framework_TestCase;
use WBW\HighchartsBundle\API\Chart\XAxis\HighchartsTitle;

/**
 * Highcharts title test.
 *
 * @author WBW <https://github.com/webeweb/WBWHighchartsBundle>
 * @package WBW\HighchartsBundle\Tests\API\Chart\XAxis
 * @version 5.0.14
 */
final class HighchartsTitleTest extends PHPUnit_Framework_TestCase {

	/**
	 * Test the clear() method.
	 *
	 * @return void
	 */
	public function testClear() {

		$obj = new HighchartsTitle(false);

		$obj->clear();
		$this->assertEquals([], $obj->toArray(), "The method toArray() does not return the expected array");
	}

	/**
	 * Test the toArray() method.
	 *
	 * @return void
	 */
	public function testToArray() {

		$obj = new HighchartsTitle(false);

		$res = ["align" => "middle", "reserveSpace" => true, "rotation" => 0, "style" => ["color" => "#666666"], "x" => 0];
		$this->assertEquals($res, $obj->toArray(), "The method toArray() does not return the expected array");

		$obj->setMargin(40);

		$res1 = ["align" => "middle", "reserveSpace" => true, "rotation" => 0, "style" => ["color" => "#666666"], "x" => 0, "margin" => 40];
		$this->assertEquals($res1, $obj->toArray(), "The method toArray() does not return the expected array with margin");

		$obj->setOffset(10);

		$res2 = ["align" => "middle", "reserveSpace" => true, "rotation" => 0, "style" => ["color" => "#666666"], "x" => 0, "margin" => 40, "offset" => 10];
		$this->assertEquals($res2, $obj->toArray(), "The method toArray() does not return the expected array with offset");

		$obj->setText("1cb251ec0d568de6a929b520c4aed8d1");

		$res3 = ["align" => "middle", "reserveSpace" => true, "rotation" => 0, "style" => ["color" => "#666666"], "x" => 0, "margin" => 40, "offset" => 10, "text" => "1cb251ec0d568de6a929b520c4aed8d1"];
		$this->assertEquals($res3, $obj->toArray(), "The method toArray() does not return the expected array with text");

		$obj->setY(0);

		$res4 = ["align" => "middle", "reserveSpace" => true, "rotation" => 0, "style" => ["color" => "#666666"], "x" => 0, "margin" => 40, "offset" => 10, "text" => "1cb251ec0d568de6a929b520c4aed8d1", "y" => 0];
		$this->assertEquals($res4, $obj->toArray(), "The method toArray() does not return the expected array with y");
	}

}
