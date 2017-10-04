<?php

/*
 * This file is part of the WBWHighchartsBundle package.
 *
 * (c) 2017 WBW
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\HighchartsBundle\Tests\API\Chart\Credits;

use PHPUnit_Framework_TestCase;
use WBW\HighchartsBundle\API\Chart\Credits\HighchartsPosition;

/**
 * Highcharts position test.
 *
 * @author WBW <https://github.com/webeweb/WBWHighchartsBundle>
 * @package WBW\HighchartsBundle\Tests\API\Chart\Credits
 * @version 5.0.14
 */
final class HighchartsPositionTest extends PHPUnit_Framework_TestCase {

	/**
	 * Test the clear() method.
	 *
	 * @return void
	 */
	public function testClear() {

		$obj = new HighchartsPosition(false);

		$obj->clear();
		$this->assertEquals([], $obj->toArray(), "The method toArray() does not return the expected array");
	}

	/**
	 * Test the toArray() method.
	 *
	 * @return void
	 */
	public function testToArray() {

		$obj = new HighchartsPosition(false);

		$res = ["align" => "right", "verticalAlign" => "bottom", "x" => -10, "y" => -5];
		$this->assertEquals($res, $obj->toArray(), "The method toArray() does not return the expected array");
	}

}
